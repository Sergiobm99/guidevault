<?php 
// Ocultamos los mensajes de error técnicos para el público
ini_set('display_errors', 0);
error_reporting(0);

$pageTitle = "Hall of Fame | GuideVault Supporters";
$pageDesc = "The legends who make GuideVault possible. Our deepest thanks to our Patreon and PayPal supporters.";

// =========================================================================
// INTEGRACIÓN CON LA API DE PATREON v2
// =========================================================================
$mythic_supporters = [];

// Credenciales validadas
// Cargamos la bóveda de secretos
$secrets = require __DIR__ . '/crimson-desert/secrets.php';

// Asignamos las credenciales
$access_token = $secrets['patreon_token']; 
$campaign_id  = $secrets['patreon_campaign'];
try {
    // Pedimos los miembros y sus nombres completos
    $url = "https://www.patreon.com/api/oauth2/v2/campaigns/" . $campaign_id . "/members?include=user&fields[user]=full_name";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "GuideVault-App/1.1"); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer " . trim($access_token)
    ]);
    
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($http_code === 200 && $response) {
        $data = json_decode($response, true);
        
        // Extraemos los nombres de la sección 'included' (perfiles de usuario)
        if (isset($data['included'])) {
            foreach ($data['included'] as $item) {
                if (isset($item['type']) && $item['type'] === 'user') {
                    $name = $item['attributes']['full_name'];
                    if (!empty($name)) {
                        $mythic_supporters[] = $name;
                    }
                }
            }
        }
        // Eliminamos duplicados y ordenamos alfabéticamente
        $mythic_supporters = array_unique($mythic_supporters);
        sort($mythic_supporters);
    }
} catch (\Throwable $e) {
    // Error silencioso en producción
}

// Cargamos el header
include 'header.php'; 
?>

<style>
  body { background-color: #080808 !important; color: #E8E0D0 !important; }
  .hof-card {
      background: rgba(212, 168, 67, 0.05);
      border: 1px solid rgba(212, 168, 67, 0.2);
      padding: 1.5rem;
      border-radius: 4px;
      color: var(--gold, #D4A843); 
      font-family: var(--font-display, 'Bebas Neue', sans-serif);
      font-size: 1.5rem;
      transition: all 0.3s ease;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
  }
  .hof-card:hover {
      transform: translateY(-5px);
      background: rgba(212, 168, 67, 0.1);
      border-color: var(--gold, #D4A843);
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
  }
</style>

<header class="guide-hero" style="min-height: 40vh; background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 100%); display: flex; align-items: center; justify-content: center;">
    <div class="guide-hero-inner" style="text-align: center; padding: 0 2rem;">
        <span class="label" style="color: var(--gold, #D4A843); letter-spacing: 0.5em; display: block; margin-bottom: 1rem;">Legends of GuideVault</span>
        <h1 class="guide-hero-title" style="font-size: clamp(3rem, 6vw, 5rem); color: var(--text, #E8E0D0); line-height: 1.1;">Hall of Fame</h1>
        <p class="guide-hero-subtitle" style="max-width: 700px; margin: 1.5rem auto 0; color: var(--text-dim, #887A66);">
            GuideVault is 100% community-funded. This page is dedicated to the incredible individuals who help us keep the lights on and the guides updated.
        </p>
    </div>
</header>

<main class="container" style="max-width: 1200px; margin: 0 auto; padding: 4rem 2rem; min-height: 60vh;">
    
    <section style="margin-bottom: 5rem; text-align: center;">
        <h2 style="font-family: var(--font-display, 'Bebas Neue', sans-serif); color: var(--gold, #D4A843); font-size: 2.5rem; margin-bottom: 3rem;">🏆 Mythic Supporters</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.5rem;">
            
            <?php if (empty($mythic_supporters)): ?>
                <div class="hof-card">Your Name Here?</div>
                <div class="hof-card" style="opacity: 0.5;">Waiting for Legends...</div>
            <?php else: ?>
                <?php foreach ($mythic_supporters as $name): ?>
                    <div class="hof-card"><?php echo htmlspecialchars($name); ?></div>
                <?php endforeach; ?>
                
                <div class="hof-card" style="opacity: 0.4; border-style: dashed;">Your Name Here?</div>
            <?php endif; ?>

        </div>
    </section>

    <hr style="border: 0; border-top: 1px solid rgba(212, 168, 67, 0.1); margin: 4rem 0;">

    <section style="text-align: center;">
        <h2 style="font-family: var(--font-display, 'Bebas Neue', sans-serif); color: var(--text, #E8E0D0); font-size: 1.8rem; margin-bottom: 2rem;">Honorable Mentions</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; color: var(--text-dim, #887A66); font-family: var(--font-ui, 'Rajdhani', sans-serif); font-size: 1.1rem;">
            <span>PayPal Supporter One</span> • 
            <span>PayPal Supporter Two</span>
        </div>
    </section>

    <div style="text-align: center; margin-top: 6rem;">
        <p style="color: var(--text-muted, #4A4035); font-style: italic; margin-bottom: 1.5rem;">Want to see your name here?</p>
        <a href="https://www.patreon.com" target="_blank" class="btn btn-gold" style="background: var(--gold, #D4A843); color: #080808; padding: 1rem 2rem; text-decoration: none; font-weight: bold; text-transform: uppercase; border-radius: 2px; display: inline-block;">Join our Patreon</a>
    </div>
</main>

<?php include 'footer.php'; ?>