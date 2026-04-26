<?php 
$parentGuide = [
    'name' => 'Crimson Desert',
    'url'  => '/crimson-desert/index.php'
];
$pageTitle = "Pywel Interactive Map | GuideVault";
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div style="margin: calc(var(--nav-h, 80px) + 20px) auto 40px auto; width: 100%; max-width: 1600px; padding: 0 15px; box-sizing: border-box;">
    
    <div style="border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 8px; overflow: hidden; box-shadow: 0 0 30px rgba(0,0,0,0.5);">
        
        <iframe 
            src="../crimson-desert-map.php" 
            width="100%" 
            /* La altura será el 80% de la pantalla, mínimo 500px */
            style="height: clamp(500px, 80vh, 900px); border:none; display:block;">
        </iframe>
        
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>