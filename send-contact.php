<?php
// 1. Verificar que se ha pulsado el botón "Send Message" (método POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- 1. PROTECCIÓN HONEYPOT ---
    if (!empty($_POST['website_url_check'])) {
        // Redirigimos como si hubiera sido un éxito para engañar al bot
        header("Location: /crimson-desert/contact?status=success");
        exit;
    }
    // ----------------------------

    // --- 2. VALIDACIÓN GOOGLE reCAPTCHA (VERSIÓN MEJORADA CON cURL) ---
$secrets = require __DIR__ . '/secrets.php';
$recaptcha_secret = $secrets['recaptcha_secret'];

    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $recaptcha_response = $_POST['g-recaptcha-response'];

        // Usamos cURL para comunicarnos con Google (Más seguro y rápido que file_get_contents)
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'secret' => $recaptcha_secret,
            'response' => $recaptcha_response
        ]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $verify_response = curl_exec($ch);
        curl_close($ch);

        $response_data = json_decode($verify_response);

        // Si la validación falla
        if (!$response_data->success) {
            header("Location: /crimson-desert/contact?status=captcha_error");
            exit;
        }
    } else {
        // El usuario no marcó la casilla
        header("Location: /crimson-desert/contact?status=captcha_error");
        exit;
    }
    // -----------------------------------

    // 3. Recoger y limpiar los datos (Prevención XSS / Inyecciones)
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject_raw = htmlspecialchars(strip_tags(trim($_POST["subject"])));
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    // =========================================================================
    // 4. CONFIGURACIÓN DEL DESTINATARIO
    $to = "contact@guidevault.online"; 
    // =========================================================================

    // Mapear los asuntos
    $subject_map = [
        'general' => 'General Inquiry',
        'bug' => 'Bug / Error Report',
        'build' => 'Build Suggestion',
        'business' => 'Business / Partnership'
    ];
    
    $email_subject = "GuideVault: " . ($subject_map[$subject_raw] ?? 'New Message');

    // 5. Construir el cuerpo del correo
    $email_body = "You have received a new message from the GuideVault contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: " . ($subject_map[$subject_raw] ?? $subject_raw) . "\n\n";
    $email_body .= "Message:\n$message\n";

    // 6. Cabeceras del correo
    $headers = "From: no-reply@guidevault.online\r\n"; 
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // 7. Enviar el correo y redirigir
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (mail($to, $email_subject, $email_body, $headers)) {
            // ÉXITO
            header("Location: /crimson-desert/contact?status=success");
            exit;
        } else {
            // ERROR DE SERVIDOR
            header("Location: /crimson-desert/contact?status=error");
            exit;
        }
    } else {
        // CORREO INVÁLIDO
        header("Location: /crimson-desert/contact?status=invalid");
        exit;
    }
} else {
    // Si acceden directamente al archivo sin POST
    header("Location: /crimson-desert/contact");
    exit;
}
?>