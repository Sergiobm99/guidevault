<div id="gaming-fx-container" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; pointer-events: none; z-index: 1; overflow: hidden;"></div>

<button id="fx-toggle-btn" title="Turn Visual Effects On/Off" aria-label="Toggle visual effects">
    <span id="fx-icon">🎮</span>
</button>

<style>
    /* Botón flotante para desactivar/activar efectos */
    #fx-toggle-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: rgba(10, 10, 15, 0.8);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: rgba(255, 255, 255, 0.8);
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
    }
    
    #fx-toggle-btn:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: scale(1.1);
    }

    #fx-toggle-btn.fx-off {
        border-color: #444;
        color: #444;
        background: rgba(10, 10, 15, 0.9);
    }

    .fx-hidden { display: none !important; }

    /* Símbolos Gamer Flotantes - MUY LIGEROS (Sin brillos) */
    .gaming-symbol {
        position: absolute;
        pointer-events: none;
        opacity: 0;
        color: rgba(255, 255, 255, 0.06); /* Súper tenue, solo un 6% de opacidad */
        font-family: monospace, sans-serif;
        user-select: none;
        will-change: transform, opacity;
    }

    /* Animación de flotar hacia arriba suavemente */
    @keyframes gamerDrift {
        0% { transform: translateY(10vh) rotate(0deg); opacity: 0; }
        15% { opacity: 1; }
        85% { opacity: 1; }
        100% { transform: translateY(-110vh) rotate(360deg); opacity: 0; }
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const container = document.getElementById('gaming-fx-container');
    const toggleBtn = document.getElementById('fx-toggle-btn');
    const icon = document.getElementById('fx-icon');
    const maxSymbols = 35; // Cantidad sutil

    // Array de símbolos icónicos de videojuegos
    const symbols = ['✖', '▲', '■', '●', '+', '♦', '✦', '▽'];

    // --- LÓGICA DEL BOTÓN ---
    let isFxEnabled = localStorage.getItem('guidevault_fx_enabled');
    
    if (isFxEnabled === null) {
        isFxEnabled = 'true';
        localStorage.setItem('guidevault_fx_enabled', 'true');
    }

    function applyFxState() {
        if (isFxEnabled === 'false') {
            container.classList.add('fx-hidden');
            toggleBtn.classList.add('fx-off');
            icon.innerText = '❌'; 
        } else {
            container.classList.remove('fx-hidden');
            toggleBtn.classList.remove('fx-off');
            icon.innerText = '🎮'; 
        }
    }

    toggleBtn.addEventListener('click', function() {
        isFxEnabled = (isFxEnabled === 'true') ? 'false' : 'true';
        localStorage.setItem('guidevault_fx_enabled', isFxEnabled);
        applyFxState();
    });

    applyFxState();

    // --- GENERACIÓN DE SÍMBOLOS ---
    for(let i = 0; i < maxSymbols; i++) {
        let span = document.createElement('span');
        span.className = 'gaming-symbol';
        
        // Asignar símbolo aleatorio
        span.innerText = symbols[Math.floor(Math.random() * symbols.length)];
        
        let fontSize = Math.random() * 12 + 10; // Tamaños pequeños (10px - 22px)
        let x = Math.random() * 100; // Posición horizontal
        let duration = Math.random() * 15 + 15; // Súper lento y relajante (15s a 30s)
        let delay = Math.random() * 10; // Retraso para que no salgan todos a la vez

        span.style.fontSize = fontSize + 'px';
        span.style.left = x + 'vw';
        span.style.bottom = '-20px';
        
        // Asignamos la animación
        span.style.animation = `gamerDrift ${duration}s linear ${delay}s infinite`;

        container.appendChild(span);
    }
});
</script>