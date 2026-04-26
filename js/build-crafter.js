
    function toggleAcc(id) {
        const acc = document.getElementById(id);
        if (acc) {
            acc.classList.toggle('open');
        }
    }

    const ITEMS = {
        // Armas
        w_rusty: { atk: 15, def: 0, crit: 0, spd: 10 },
        w_shadow: { atk: 42, def: 0, crit: 5, spd: 0 },
        w_frost: { atk: 85, def: 0, crit: -5, spd: -15 },
        w_justice: { atk: 120, def: 10, crit: 0, spd: -20 },
        w_bow: { atk: 60, def: 0, crit: 15, spd: 0 },
        w_dual: { atk: 95, def: -10, crit: 20, spd: 5 },
        w_gauntlets: { atk: 50, def: 0, crit: 10, spd: 15 },
        w_storm: { atk: 75, def: 0, crit: 5, spd: 5 },
        w_acid: { atk: 35, def: 0, crit: 0, spd: 0 },
        w_mace: { atk: 60, def: 40, crit: 0, spd: -10 },
        w_scythe: { atk: 110, def: 0, crit: 20, spd: -10 },
        
        // Armaduras
        a_merc: { atk: 0, def: 10, crit: 0, spd: 5 },
        a_assassin: { atk: 0, def: 25, crit: 15, spd: 10 },
        a_commander: { atk: 5, def: 85, crit: 0, spd: -5 },
        a_scholar: { atk: 0, def: 20, crit: 5, spd: 0 },
        a_scorch: { atk: 15, def: 35, crit: 0, spd: 0 },
        a_brawler: { atk: 0, def: 30, crit: 5, spd: 10 },
        a_tempest: { atk: 10, def: 50, crit: 0, spd: 0 },
        a_alchemist: { atk: 0, def: 40, crit: 0, spd: 0 },
        a_fortress: { atk: -10, def: 120, crit: 0, spd: -20 },
        a_dragon: { atk: 20, def: 150, crit: 5, spd: -10 },

        // Reliquias
        r_wolf: { atk: 10, def: 0, crit: 0, spd: 5 },
        r_bear: { atk: 0, def: 20, crit: 0, spd: 0 },
        r_abyss: { atk: 25, def: -10, crit: 0, spd: 0 },
        r_arrows: { atk: 20, def: 0, crit: 0, spd: 0 },
        r_gladiator: { atk: 5, def: 0, crit: 10, spd: 0 },
        r_rune: { atk: 15, def: 0, crit: 5, spd: 0 },
        r_horn: { atk: 5, def: 15, crit: 0, spd: 0 },
        r_bulwark: { atk: 0, def: 30, crit: -5, spd: -5 },
        r_origin: { atk: 30, def: 0, crit: 15, spd: 5 }
    };

    const BASE_STATS = { atk: 5, def: 5, crit: 5, spd: 100 };

    // Función auxiliar para extraer solo el nombre del equipo, sin las stats entre paréntesis
    function getCleanItemName(selectId) {
        const select = document.getElementById(selectId);
        if (select.value === 'none') return "---";
        return select.options[select.selectedIndex].text.split(' (')[0];
    }

    function calculateBuild() {
        const weaponId = document.getElementById('calc-weapon').value;
        const armorId = document.getElementById('calc-armor').value;
        const accId = document.getElementById('calc-acc').value;

        let totalAtk = BASE_STATS.atk;
        let totalDef = BASE_STATS.def;
        let totalCrit = BASE_STATS.crit;
        let totalSpd = BASE_STATS.spd;

        if (weaponId !== 'none' && ITEMS[weaponId]) { totalAtk += ITEMS[weaponId].atk; totalDef += ITEMS[weaponId].def; totalCrit += ITEMS[weaponId].crit; totalSpd += ITEMS[weaponId].spd; }
        if (armorId !== 'none' && ITEMS[armorId]) { totalAtk += ITEMS[armorId].atk; totalDef += ITEMS[armorId].def; totalCrit += ITEMS[armorId].crit; totalSpd += ITEMS[armorId].spd; }
        if (accId !== 'none' && ITEMS[accId]) { totalAtk += ITEMS[accId].atk; totalDef += ITEMS[accId].def; totalCrit += ITEMS[accId].crit; totalSpd += ITEMS[accId].spd; }

        document.getElementById('res-atk').innerText = totalAtk;
        document.getElementById('res-def').innerText = totalDef;
        document.getElementById('res-crit').innerText = totalCrit + '%';
        document.getElementById('res-spd').innerText = totalSpd + '%';

        // Disparar el dibujado de la tarjeta cada vez que cambien las estadísticas
        drawCard();
    }

    // MAGIA DEL CANVAS: Dibuja la tarjeta con estética GuideVault
    function drawCard() {
    const canvas = document.getElementById('buildCard');
    const ctx = canvas.getContext('2d');

    // 1. Obtener valores del HTML simplificado
    const player = document.getElementById('playerName') ? document.getElementById('playerName').value : "Player";
    const build = document.getElementById('buildName') ? document.getElementById('buildName').value : "Build";
    const weaponName = document.getElementById('mainWeapon') ? document.getElementById('mainWeapon').value : "None";
    const coreStat = document.getElementById('coreStat') ? document.getElementById('coreStat').value : "0";

    // 2. Limpiar y dibujar Fondo Oscuro Premium
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = '#0a0a0c';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    // 3. Geometría Áurea (Marco Exterior e Interior)
    ctx.strokeStyle = '#d4af37';
    ctx.lineWidth = 3;
    ctx.shadowColor = '#d4af37';
    ctx.shadowBlur = 15;
    ctx.strokeRect(20, 20, canvas.width - 40, canvas.height - 40);
    
    ctx.shadowBlur = 0; // Resetear sombra
    ctx.strokeStyle = 'rgba(212, 175, 55, 0.2)';
    ctx.lineWidth = 1;
    ctx.strokeRect(28, 28, canvas.width - 56, canvas.height - 56);

    // 4. Cabecera (Títulos traducidos al inglés)
    ctx.textAlign = 'center';
    ctx.fillStyle = '#d4af37';
    ctx.font = 'bold 34px "Rajdhani", Arial, sans-serif';
    ctx.fillText(build.toUpperCase(), canvas.width / 2, 85);

    ctx.fillStyle = '#ffffff';
    ctx.font = 'italic 18px "Rajdhani", Arial, sans-serif';
    ctx.fillText("Forged by " + player, canvas.width / 2, 120);

    // Línea Separadora
    ctx.strokeStyle = 'rgba(212, 175, 55, 0.4)';
    ctx.beginPath();
    ctx.moveTo(70, 150);
    ctx.lineTo(canvas.width - 70, 150);
    ctx.stroke();

    // 5. Contenido de la Build adaptado a tu HTML actual
    ctx.textAlign = 'center';
    
    // Arma Principal
    ctx.fillStyle = '#aaaaaa';
    ctx.font = 'bold 16px "Rajdhani", Arial, sans-serif';
    ctx.fillText("⚔️ MAIN WEAPON", canvas.width / 2, 220);
    
    ctx.fillStyle = '#ffffff';
    ctx.font = '26px "Rajdhani", Arial, sans-serif';
    ctx.fillText(weaponName, canvas.width / 2, 260);

    // Estadística Principal
    ctx.fillStyle = '#aaaaaa';
    ctx.font = 'bold 16px "Rajdhani", Arial, sans-serif';
    ctx.fillText("⭐ CORE STAT", canvas.width / 2, 340);
    
    ctx.fillStyle = '#d4af37'; // Neón dorado para el número
    ctx.font = 'bold 48px "Rajdhani", Arial, sans-serif';
    ctx.fillText(coreStat, canvas.width / 2, 390);

    // 6. Marca de Agua (Watermark) reubicada correctamente
    ctx.fillStyle = 'rgba(212, 175, 55, 0.6)';
    ctx.font = 'bold 16px "Rajdhani", Arial, sans-serif';
    ctx.letterSpacing = "2px";
    ctx.fillText("GUIDEVAULT.ONLINE", canvas.width / 2, canvas.height - 40);
}

    // Exportar Imagen
    function downloadCard() {
        const canvas = document.getElementById('buildCard');
        const image = canvas.toDataURL("image/png");
        const buildName = document.getElementById('buildName').value.replace(/\s+/g, '-').toLowerCase() || 'build';
        
        const link = document.createElement('a');
        link.download = `GuideVault-${buildName}.png`;
        link.href = image;
        link.click();
    }

    // Event Listeners
    document.getElementById('calc-weapon').addEventListener('change', calculateBuild);
    document.getElementById('calc-armor').addEventListener('change', calculateBuild);
    document.getElementById('calc-acc').addEventListener('change', calculateBuild);

    // Inicializar cálculo y renderizado al cargar
    window.onload = function() {
        calculateBuild();
    };