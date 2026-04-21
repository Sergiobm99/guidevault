<?php 
// 1. Título y descripción para la pestaña del navegador
$pageTitle = "404 - Lost in the Abyss | GuideVault";
$pageDesc = "The page you are looking for does not exist.";

// 2. Cargamos el header
include 'header.php'; 
?>

<main style="min-height: 75vh; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 2rem; position: relative;">
    
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; height: 300px; background: rgba(212, 168, 67, 0.05); border-radius: 50%; filter: blur(80px); z-index: -1;"></div>

    <h1 style="font-family: var(--font-display, 'Bebas Neue', sans-serif); font-size: clamp(6rem, 15vw, 12rem); color: var(--gold, #D4A843); line-height: 1; margin-bottom: 0; text-shadow: 0 10px 30px rgba(212, 168, 67, 0.2);">
        404
    </h1>
    
    <h2 style="font-family: var(--font-display, 'Bebas Neue', sans-serif); font-size: clamp(2rem, 5vw, 3.5rem); color: var(--text, #E8E0D0); margin-bottom: 1rem; letter-spacing: 0.05em;">
        You've Wandered Into The Abyss
    </h2>
    
    <p style="color: var(--text-dim, #887A66); max-width: 500px; margin-bottom: 3rem; font-size: 1.1rem; line-height: 1.6;">
        The guide or page you are looking for has been consumed by the darkness, or perhaps it never existed at all.
    </p>
    
    <a href="/index.php" class="btn btn-gold" style="font-size: 1rem; padding: 1rem 2.5rem;">
        ← Return to Safe Haven
    </a>

</main>

<?php 
// 3. Cargamos el footer
include 'footer.php'; 
?>