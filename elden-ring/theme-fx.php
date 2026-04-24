<?php
// Si no se define un tema en el capítulo, por defecto usamos 'grace' (Hojas Doradas)
$theme = isset($fxTheme) ? $fxTheme : 'grace';
?>

<div id="fx-container" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; pointer-events: none; z-index: 100; overflow: hidden;"></div>

<button id="fx-toggle-btn" title="Turn Visual Effects On/Off" aria-label="Toggle visual effects">
    <span id="fx-icon">✨</span>
</button>

<style>
    /* Botón flotante para desactivar/activar efectos */
    #fx-toggle-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: rgba(10, 10, 15, 0.8);
        border: 1px solid var(--gold, #d4a843);
        color: var(--gold, #d4a843);
        border-radius: 50%;
        width: 45px;
        height: 45px;
        cursor: pointer;
        z-index: 1000;
        font-size: 1.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }
    
    #fx-toggle-btn:hover {
        background: var(--gold, #d4a843);
        color: #000;
        transform: scale(1.1);
    }

    #fx-toggle-btn.fx-off {
        border-color: #555;
        color: #555;
        background: rgba(10, 10, 15, 0.9);
    }

    #fx-toggle-btn.fx-off:hover {
        border-color: #888;
        color: #888;
    }

    .fx-hidden { display: none !important; }

    /* Partículas base */
    .fx-particle {
        position: absolute;
        pointer-events: none;
        opacity: 0;
        will-change: transform, opacity;
    }

    /* 1. Gracia (Hojas Doradas del Árbol Áureo cayendo) */
    @keyframes graceFall {
        0% { transform: translateY(-10vh) rotate(0deg) translateX(0); opacity: 0; }
        20% { opacity: 0.8; }
        80% { opacity: 0.8; }
        100% { transform: translateY(110vh) rotate(360deg) translateX(50px); opacity: 0; }
    }

    /* 2. Magia (Glintstone Azul subiendo) */
    @keyframes magicFloat {
        0% { transform: translateY(10vh) scale(0.5); opacity: 0; }
        30% { opacity: 0.9; }
        70% { opacity: 0.9; }
        100% { transform: translateY(-110vh) scale(1.2); opacity: 0; }
    }

    /* 3. Putrefacción Roja (Esporas moviéndose en diagonal) */
    @keyframes rotDrift {
        0% { transform: translate(-10vw, -10vh) scale(1); opacity: 0; }
        20% { opacity: 0.7; }
        80% { opacity: 0.7; }
        100% { transform: translate(110vw, 110vh) scale(1.5); opacity: 0; }
    }

    /* 4. Nieve (Mountaintops) */
    @keyframes snowFall {
        0% { transform: translateY(-10vh) translateX(0); opacity: 0; }
        20% { opacity: 0.7; }
        80% { opacity: 0.7; }
        100% { transform: translateY(110vh) translateX(-30px); opacity: 0; }
    }

    /* 5. Ascuas (Capital de las Cenizas / Gigante de Fuego) */
    @keyframes emberRise {
        0% { transform: translateY(10vh) translateX(0) scale(1); opacity: 0; }
        20% { opacity: 1; }
        80% { opacity: 0.8; }
        100% { transform: translateY(-110vh) translateX(40px) scale(0.5); opacity: 0; }
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const container = document.getElementById('fx-container');
    const toggleBtn = document.getElementById('fx-toggle-btn');
    const icon = document.getElementById('fx-icon');
    const theme = '<?php echo $theme; ?>';
    const maxParticles = 40; 

    // --- LÓGICA DEL BOTÓN Y LOCALSTORAGE ---
    let isFxEnabled = localStorage.getItem('eldenring_fx_enabled');
    
    if (isFxEnabled === null) {
        isFxEnabled = 'true';
        localStorage.setItem('eldenring_fx_enabled', 'true');
    }

    function applyFxState() {
        if (isFxEnabled === 'false') {
            container.classList.add('fx-hidden');
            toggleBtn.classList.add('fx-off');
            icon.innerText = '❌'; 
        } else {
            container.classList.remove('fx-hidden');
            toggleBtn.classList.remove('fx-off');
            icon.innerText = '✨'; 
        }
    }

    toggleBtn.addEventListener('click', function() {
        isFxEnabled = (isFxEnabled === 'true') ? 'false' : 'true';
        localStorage.setItem('eldenring_fx_enabled', isFxEnabled);
        applyFxState();
    });

    applyFxState();

    // --- GENERACIÓN DE PARTÍCULAS POR TEMÁTICA ---
    const palettes = {
        'grace': ['#D4AF37', '#F1C40F', '#FFEAA7'], // Oro (Hojas)
        'magic': ['#3498db', '#2980b9', '#00ffff'], // Azul (Glintstone)
        'rot':   ['#e74c3c', '#c0392b', '#d35400'], // Rojo/Naranja oscuro (Putrefacción)
        'snow':  ['#ffffff', '#ecf0f1', '#d4e6f1'], // Blanco (Nieve)
        'embers':['#e67e22', '#d35400', '#f39c12']  // Naranja brillante (Fuego)
    };

    const colors = palettes[theme] || palettes['grace'];

    for(let i = 0; i < maxParticles; i++) {
        let p = document.createElement('div');
        p.className = 'fx-particle';
        
        let size = Math.random() * 6 + 2; 
        let x = Math.random() * 100;
        let y = Math.random() * 100;
        let duration = Math.random() * 7 + 5; 
        let delay = Math.random() * 5;

        p.style.width = size + 'px';
        p.style.height = size + 'px';
        p.style.background = colors[Math.floor(Math.random() * colors.length)];

        if(theme === 'grace') {
            // Forma de hoja
            p.style.borderRadius = '50% 0 50% 0';
            p.style.left = x + 'vw';
            p.style.top = '-20px';
            p.style.boxShadow = `0 0 5px ${p.style.background}`;
            p.style.animation = `graceFall ${duration}s linear ${delay}s infinite`;
        } 
        else if (theme === 'magic') {
            // Cristales azules redondos
            p.style.borderRadius = '50%';
            p.style.left = x + 'vw';
            p.style.bottom = '-20px';
            p.style.boxShadow = `0 0 8px ${p.style.background}`;
            p.style.animation = `magicFloat ${duration * 0.8}s ease-in ${delay}s infinite`;
        } 
        else if (theme === 'rot') {
            // Esporas de putrefacción
            p.style.borderRadius = '50%';
            p.style.left = (x - 20) + 'vw';
            p.style.top = '-20px';
            p.style.filter = 'blur(1px)';
            p.style.animation = `rotDrift ${duration}s linear ${delay}s infinite`;
        } 
        else if (theme === 'snow') {
            // Nieve
            p.style.borderRadius = '50%';
            p.style.left = x + 'vw';
            p.style.top = '-20px';
            p.style.background = '#fff';
            p.style.boxShadow = '0 0 4px #fff';
            p.style.animation = `snowFall ${duration * 0.7}s linear ${delay}s infinite`;
        } 
        else if (theme === 'embers') {
            // Ascuas subiendo
            p.style.borderRadius = '50%';
            p.style.left = x + 'vw';
            p.style.bottom = '-20px';
            p.style.boxShadow = `0 0 6px ${p.style.background}`;
            p.style.animation = `emberRise ${duration * 0.6}s ease-in ${delay}s infinite`;
        }

        container.appendChild(p);
    }
});
</script>