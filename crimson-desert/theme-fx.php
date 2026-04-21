<?php
// Si no se define un tema, por defecto usamos 'embers' (cenizas)
$theme = isset($fxTheme) ? $fxTheme : 'embers';
?>

<div id="fx-container" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; pointer-events: none; z-index: 100; overflow: hidden;"></div>

<button id="fx-toggle-btn" title="Activar/Desactivar Efectos Visuales" aria-label="Toggle visual effects">
    <span id="fx-icon">✨</span>
</button>

<style>
    /* Estilos del botón flotante */
    #fx-toggle-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: rgba(10, 10, 15, 0.8);
        border: 1px solid var(--gold, #d4a843); /* Fallback a color oro si no carga tu CSS global */
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

    /* Ocultar el contenedor si está desactivado */
    .fx-hidden {
        display: none !important;
    }

    /* Partículas base */
    .fx-particle {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        opacity: 0;
        will-change: transform, opacity;
    }

    /* Animación: Cenizas, Fuego y Burbujas (Hacia arriba) */
    @keyframes floatUpFx {
        0% { transform: translateY(10vh) scale(0.8); opacity: 0; }
        20% { opacity: 0.8; }
        80% { opacity: 0.8; }
        100% { transform: translateY(-110vh) scale(1.2); opacity: 0; }
    }

    /* Animación: Nieve (Hacia abajo) */
    @keyframes snowfallFx {
        0% { transform: translateY(-10vh) translateX(0); opacity: 0; }
        20% { opacity: 0.7; }
        80% { opacity: 0.7; }
        100% { transform: translateY(110vh) translateX(30px); opacity: 0; }
    }

    /* Animación: Tormenta de Arena (Hacia la derecha) */
    @keyframes blowRightFx {
        0% { transform: translateX(-10vw) translateY(0); opacity: 0; }
        10% { opacity: 0.6; }
        90% { opacity: 0.6; }
        100% { transform: translateX(110vw) translateY(-10vh); opacity: 0; }
    }

    /* Animación: Vacío/Abismo (Flotación estática) */
    @keyframes pulseVoidFx {
        0% { transform: scale(0.8) translate(0, 0); opacity: 0; }
        50% { opacity: 0.5; }
        100% { transform: scale(1.5) translate(20px, -20px); opacity: 0; }
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const container = document.getElementById('fx-container');
    const toggleBtn = document.getElementById('fx-toggle-btn');
    const icon = document.getElementById('fx-icon');
    const theme = '<?php echo $theme; ?>';
    const maxParticles = 35; 

    // --- LÓGICA DEL BOTÓN Y LOCALSTORAGE ---
    // Comprobar si el usuario ya tenía guardada una preferencia
    let isFxEnabled = localStorage.getItem('crimson_fx_enabled');
    
    // Si es la primera vez que entra, lo activamos por defecto
    if (isFxEnabled === null) {
        isFxEnabled = 'true';
        localStorage.setItem('crimson_fx_enabled', 'true');
    }

    // Función para aplicar el estado visual
    function applyFxState() {
        if (isFxEnabled === 'false') {
            container.classList.add('fx-hidden');
            toggleBtn.classList.add('fx-off');
            icon.innerText = '❌'; // Icono de apagado
        } else {
            container.classList.remove('fx-hidden');
            toggleBtn.classList.remove('fx-off');
            icon.innerText = '✨'; // Icono de encendido
        }
    }

    // Evento al hacer clic en el botón
    toggleBtn.addEventListener('click', function() {
        if (isFxEnabled === 'true') {
            isFxEnabled = 'false';
        } else {
            isFxEnabled = 'true';
        }
        localStorage.setItem('crimson_fx_enabled', isFxEnabled);
        applyFxState();
    });

    // Aplicar el estado inicial al cargar la página
    applyFxState();


    // --- LÓGICA DE GENERACIÓN DE PARTÍCULAS ---
    const palettes = {
        'embers': ['#ff5722', '#ff9800', '#ffeb3b'],      // Naranja/Amarillo (Volcán)
        'bubbles': ['rgba(255,255,255,0.4)', 'rgba(173,216,230,0.5)'], // Translúcido azul (Agua)
        'snow': ['#ffffff', '#e0e0e0'],                   // Blanco (Nieve)
        'sand': ['#d4a843', '#f3c669', '#a87c2a'],        // Arena/Dorado (Desierto)
        'void': ['#9b59b6', '#8e44ad', '#6c3483'],        // Morado (Abismo)
        'gold': ['#ffd700', '#ffdf00', '#ffffff']         // Oro brillante (Hernand)
    };

    const colors = palettes[theme] || palettes['embers'];

    for(let i = 0; i < maxParticles; i++) {
        let p = document.createElement('div');
        p.className = 'fx-particle';
        
        let size = Math.random() * 5 + 2; 
        let x = Math.random() * 100;
        let y = Math.random() * 100;
        let duration = Math.random() * 6 + 4; 
        let delay = Math.random() * 5;

        p.style.width = size + 'px';
        p.style.height = size + 'px';
        p.style.background = colors[Math.floor(Math.random() * colors.length)];

        if(theme === 'bubbles') {
            p.style.background = 'transparent';
            p.style.border = '1px solid ' + colors[Math.floor(Math.random() * colors.length)];
            p.style.left = x + 'vw';
            p.style.bottom = '-20px';
            p.style.animation = `floatUpFx ${duration}s ease-in ${delay}s infinite`;
        } 
        else if (theme === 'snow') {
            p.style.left = x + 'vw';
            p.style.top = '-20px';
            p.style.boxShadow = '0 0 5px #fff';
            p.style.animation = `snowfallFx ${duration}s linear ${delay}s infinite`;
        } 
        else if (theme === 'sand') {
            p.style.left = '-20px';
            p.style.top = y + 'vh';
            p.style.height = '2px'; 
            p.style.width = (size * 3) + 'px';
            p.style.animation = `blowRightFx ${duration * 0.5}s linear ${delay}s infinite`;
        } 
        else if (theme === 'void') {
            p.style.left = x + 'vw';
            p.style.top = y + 'vh';
            p.style.boxShadow = `0 0 8px ${p.style.background}`;
            p.style.animation = `pulseVoidFx ${duration}s ease-in-out ${delay}s infinite alternate`;
        } 
        else {
            // Embers y Gold
            p.style.left = x + 'vw';
            p.style.bottom = '-20px';
            p.style.boxShadow = `0 0 ${size+2}px ${p.style.background}`;
            p.style.animation = `floatUpFx ${duration}s ease-in ${delay}s infinite`;
        }

        container.appendChild(p);
    }
});
</script>