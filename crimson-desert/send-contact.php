<?php
// 1. Verificar que se ha pulsado el botón "Send Message" (método POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Recoger y limpiar los datos para evitar hackeos (Inyección de código)
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject_raw = htmlspecialchars(strip_tags(trim($_POST["subject"])));
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    // =========================================================================
    // 3. CONFIGURACIÓN: ¿A dónde quieres que lleguen los correos?
    // Cambia esto por tu correo real (ej: tu_nombre@gmail.com o el de tu web)
    $to = "contact@guidevault.online"; 
    // =========================================================================

    // Mapear los asuntos para que en tu bandeja de entrada se lean bien
    $subject_map = [
        'general' => 'General Inquiry',
        'bug' => 'Bug / Error Report',
        'build' => 'Build Suggestion',
        'business' => 'Business / Partnership'
    ];
    
    $email_subject = "GuideVault: " . ($subject_map[$subject_raw] ?? 'New Message');

    // 4. Construir el cuerpo del correo que tú leerás
    $email_body = "You have received a new message from the GuideVault contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: " . ($subject_map[$subject_raw] ?? $subject_raw) . "\n\n";
    $email_body .= "Message:\n$message\n";

    // 5. Cabeceras del correo (Para que puedas darle a "Responder" y le llegue al usuario)
    // Nota: El 'From' debería usar un correo de tu propio dominio para evitar la carpeta de Spam
    $headers = "From: no-reply@guidevault.online\r\n"; 
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // 6. Enviar el correo y redirigir al usuario según el resultado
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (mail($to, $email_subject, $email_body, $headers)) {
            // ÉXITO: Volvemos a la página de contacto avisando de que todo fue bien
            header("Location: /crimson-desert/contact.php?status=success");
            exit;
        } else {
            // ERROR: El servidor falló al enviar el correo
            header("Location: /crimson-desert/contact.php?status=error");
            exit;
        }
    } else {
        // ERROR: El usuario puso un correo inventado o mal escrito
        header("Location: /crimson-desert/contact.php?status=invalid");
        exit;
    }
} else {
    // Si alguien intenta entrar directamente a esta URL sin usar el formulario, lo echamos
    header("Location: /crimson-desert/contact.php");
    exit;
}
?>