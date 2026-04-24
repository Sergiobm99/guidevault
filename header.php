<?php
// Validamos la clase del body para los temas (Elden Ring, Crimson Desert, etc.)
if (!isset($bodyClass)) { 
    $bodyClass = ""; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-56TK58QJLD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-56TK58QJLD');
</script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title><?php echo isset($pageTitle) ? $pageTitle : 'GuideVault — Complete Game Guides'; ?></title>
  <meta name="description" content="<?php echo isset($pageDesc) ? $pageDesc : 'In-depth game guides, walkthroughs, and boss strategies.'; ?>">
  
  <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="c240c90b-957d-41a1-8b15-3bed8d01958a" defer></script>

  <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'GuideVault — Complete Game Guides'; ?>">
  <meta property="og:image" content="https://guidevault.online/crimson-desert/img/SoloLogoguidevault.png">
  <meta property="og:url" content="https://guidevault.online<?php echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>">
  <meta property="og:type" content="website">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rajdhani:wght@500;600;700&family=Source+Serif+4:opsz,wght@8..60,400;8..60,700&display=swap" rel="stylesheet">
  
  <link rel="canonical" href="https://guidevault.online<?php echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>">
  <link rel="icon" href="/crimson-desert/img/SoloLogoguidevault.png" type="image/png">
  
  <link rel="stylesheet" href="/css/global.css?v=14">

<link rel="stylesheet" href="/css/guide.css?v=14" media="print" onload="this.media='all'">
<link rel="stylesheet" href="/css/home.css?v=14" media="print" onload="this.media='all'">

<noscript>
    <link rel="stylesheet" href="/css/guide.css?v=14">
    <link rel="stylesheet" href="/css/home.css?v=14">
</noscript> 
</head>

<body class="<?php echo htmlspecialchars($bodyClass); ?>">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQZZHPPT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<nav class="site-nav" id="site-nav">
    <a href="/index.php" class="logo-container" style="display: flex; align-items: center; text-decoration: none; gap: 12px;">
      <img src="/crimson-desert/img/SoloLogoguidevault.png" alt="GuideVault Logo" style="height: 40px; width: auto;">
      <span style="font-family: 'Cinzel', serif !important; font-size: 1.25rem !important; font-weight: 700 !important; color: #c9a84c !important; letter-spacing: 2px !important; text-transform: uppercase !important; padding-top: 3px !important;">
        GuideVault
      </span>
    </a>
    <ul class="nav-links">
      <li><a href="/" class="nav-link">Home</a></li>
      <li><a href="/#guides" class="nav-link">Our Guides</a></li>
      <li><a href="/#coming-soon" class="nav-link">Coming Soon</a></li>
    </ul>
    <div class="nav-actions">
      <button class="nav-search-btn" aria-label="Search guides" style="display: none;">⌕</button>
    </div>
  </nav>