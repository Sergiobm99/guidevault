<?php
// Si no definimos título en la página, usa este por defecto
if (!isset($pageTitle)) { $pageTitle = "Crimson Desert Guide | GameGuides"; }
if (!isset($pageDesc)) { $pageDesc = "Complete Crimson Desert guide and walkthrough."; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script>
  let scriptsLoaded = false;
  function loadThirdPartyScripts() {
    if (scriptsLoaded) return;
    scriptsLoaded = true;

    // Cargar Cookiebot
    let cb = document.createElement('script');
    cb.id = 'Cookiebot';
    cb.src = 'https://consent.cookiebot.com/uc.js';
    cb.dataset.cbid = 'TU-ID-DE-COOKIEBOT'; // ¡Pon tu ID aquí!
    cb.defer = true;
    document.head.appendChild(cb);

    // Cargar Google Tag Manager
    let gtm = document.createElement('script');
    gtm.src = 'https://www.googletagmanager.com/gtag/js?id=G-56TK58QJLD';
    gtm.async = true;
    document.head.appendChild(gtm);

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-56TK58QJLD');
  }

  // Cargar cuando el usuario haga scroll, mueva el ratón o toque la pantalla
  window.addEventListener('scroll', loadThirdPartyScripts, {passive: true});
  window.addEventListener('mousemove', loadThirdPartyScripts, {passive: true});
  window.addEventListener('touchstart', loadThirdPartyScripts, {passive: true});
</script>
	<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="c240c90b-957d-41a1-8b15-3bed8d01958a" data-blockingmode="auto" type="text/javascript"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8'); ?>">
	<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:type" content="article">
	<link rel="canonical" href="https://guidevault.online<?php echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>">
  <meta property="og:image" content="https://guidevault.online/img/SoloLogoguidevault.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Bebas+Neue&family=Source+Serif+4:ital,wght@0,300;0,400;0,600;1,300;1,400&display=swap" rel="stylesheet">
	<link rel="icon" href="/img/SoloLogoguidevault.png" type="image/png">
<link rel="stylesheet" href="/css/global.css?v=31">
<link rel="stylesheet" href="/crimson-desert/css/guide.css">
  
  <style>
    :root {
      --guide-color-1: rgba(139, 0, 0, 0.18);
      --guide-color-2: rgba(26, 10, 46, 0.45);
      --guide-accent:  #C0392B;
    }
  </style>
</head>
<body>

  <nav class="site-nav" id="site-nav">
  <a href="/index.php" class="logo-container" style="display: flex; align-items: center; text-decoration: none; gap: 12px;">
    
    <img 
        src="/img/SoloLogoguidevault.png" 
        alt="GuideVault Logo" 
        style="height: 40px; width: auto;" 
    >

    <span style="
        font-family: 'Cinzel', serif !important; 
        font-size: 1.25rem !important; 
        font-weight: 700 !important; 
        color: #c9a84c !important; 
        letter-spacing: 2px !important;
        text-transform: uppercase !important;
        padding-top: 3px !important;
    ">
        GuideVault
    </span>
</a>

    <ul class="nav-links">
      <li><a href="/index.php" class="nav-link">Home</a></li>
      <li><a href="/index.php#guides" class="nav-link">All Guides</a></li>
      <li><a href="/crimson-desert" class="nav-link active">Crimson Desert</a></li>
    </ul>

    <div class="nav-actions">
      <a href="#support" class="btn btn-gold" style="padding:0.5rem 1.25rem;font-size:0.72rem">Support Us</a>
    </div>
	  <button class="mobile-menu-toggle" aria-label="Open menu">
  <span></span>
  <span></span>
  <span></span>
</button>
  </nav>