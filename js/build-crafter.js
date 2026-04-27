/**
 * GUIDEVAULT BUILD CRAFTER - SECURE FULL VERSION
 * Includes Base64 Obfuscation, 3 Tiers, Procedural Themes, and Secure Avatar Upload.
 */

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

// Variable global para almacenar el retrato del usuario
let customAvatarImg = null;

function calculateBuild() {
    const weaponId = document.getElementById('calc-weapon')?.value;
    const armorId = document.getElementById('calc-armor')?.value;
    const accId = document.getElementById('calc-acc')?.value;

    let totalAtk = BASE_STATS.atk;
    let totalDef = BASE_STATS.def;
    let totalCrit = BASE_STATS.crit;
    let totalSpd = BASE_STATS.spd;

    if (weaponId && weaponId !== 'none' && ITEMS[weaponId]) { totalAtk += ITEMS[weaponId].atk; totalDef += ITEMS[weaponId].def; totalCrit += ITEMS[weaponId].crit; totalSpd += ITEMS[weaponId].spd; }
    if (armorId && armorId !== 'none' && ITEMS[armorId]) { totalAtk += ITEMS[armorId].atk; totalDef += ITEMS[armorId].def; totalCrit += ITEMS[armorId].crit; totalSpd += ITEMS[armorId].spd; }
    if (accId && accId !== 'none' && ITEMS[accId]) { totalAtk += ITEMS[accId].atk; totalDef += ITEMS[accId].def; totalCrit += ITEMS[accId].crit; totalSpd += ITEMS[accId].spd; }

    if (document.getElementById('res-atk')) document.getElementById('res-atk').innerText = totalAtk;
    if (document.getElementById('res-def')) document.getElementById('res-def').innerText = totalDef;
    if (document.getElementById('res-crit')) document.getElementById('res-crit').innerText = totalCrit + '%';
    if (document.getElementById('res-spd')) document.getElementById('res-spd').innerText = totalSpd + '%';

    drawCard();
}

// --- GENERADORES PROCEDURALES ---
function generateNoise(ctx, w, h, d, o) {
    const canvas = document.createElement('canvas');
    canvas.width = 100; canvas.height = 100;
    const n = canvas.getContext('2d');
    for (let x = 0; x < 100; x++) {
        for (let y = 0; y < 100; y++) {
            if (Math.random() < d) {
                const s = Math.floor(Math.random() * 50);
                n.fillStyle = `rgba(${s},${s},${s},${o})`;
                n.fillRect(x,y,1,1);
            }
        }
    }
    ctx.fillStyle = ctx.createPattern(canvas, 'repeat');
    ctx.fillRect(0,0,w,h);
}

function generateGold(ctx, w, h) {
    const canvas = document.createElement('canvas');
    canvas.width = 150; canvas.height = 150;
    const d = canvas.getContext('2d');
    for (let i = 0; i < 300; i++) {
        d.beginPath();
        d.arc(Math.random()*150, Math.random()*150, Math.random()*1.5, 0, Math.PI*2);
        d.fillStyle = `rgba(212,175,55,${Math.random()*0.6+0.1})`;
        d.fill();
    }
    ctx.fillStyle = ctx.createPattern(canvas, 'repeat');
    ctx.fillRect(0,0,w,h);
}

function generateBlood(ctx, w, h) {
    const canvas = document.createElement('canvas');
    canvas.width = 100; canvas.height = 100;
    const b = canvas.getContext('2d');
    for (let x = 0; x < 100; x++) {
        for (let y = 0; y < 100; y++) {
            if (Math.random() < 0.6) {
                b.fillStyle = `rgba(${Math.random()*80+50},0,${Math.random()*20},${Math.random()*0.4})`;
                b.fillRect(x,y,1,1);
            }
        }
    }
    ctx.fillStyle = ctx.createPattern(canvas, 'repeat');
    ctx.fillRect(0,0,w,h);
}

function generateVoid(ctx, w, h) {
    const canvas = document.createElement('canvas');
    canvas.width = 200; canvas.height = 200;
    const v = canvas.getContext('2d');
    for (let i = 0; i < 200; i++) {
        v.beginPath();
        v.arc(Math.random()*200, Math.random()*200, Math.random()*1.2, 0, Math.PI*2);
        v.fillStyle = Math.random() > 0.7 ? 'rgba(138,43,226,0.7)' : 'rgba(255,255,255,0.5)';
        v.fill();
    }
    ctx.fillStyle = ctx.createPattern(canvas, 'repeat');
    ctx.fillRect(0,0,w,h);
}

function generateEmerald(ctx, w, h) {
    const canvas = document.createElement('canvas');
    canvas.width = 100; canvas.height = 100;
    const e = canvas.getContext('2d');
    for (let x = 0; x < 100; x++) {
        for (let y = 0; y < 100; y++) {
            if (Math.random() < 0.5) {
                e.fillStyle = `rgba(0,${Math.floor(Math.random()*100+40)},20,${Math.random()*0.5})`;
                e.fillRect(x,y,1,1);
            }
        }
    }
    ctx.fillStyle = ctx.createPattern(canvas, 'repeat');
    ctx.fillRect(0,0,w,h);
}

function generateFrost(ctx, w, h) {
    const canvas = document.createElement('canvas');
    canvas.width = 150; canvas.height = 150;
    const f = canvas.getContext('2d');
    for (let i = 0; i < 150; i++) {
        const x = Math.random()*150, y = Math.random()*150, len = Math.random()*8+2, ang = Math.random()*Math.PI;
        f.beginPath(); f.moveTo(x,y); f.lineTo(x+Math.cos(ang)*len, y+Math.sin(ang)*len);
        f.strokeStyle = `rgba(100,200,255,${Math.random()*0.4})`; f.lineWidth = 1; f.stroke();
    }
    ctx.fillStyle = ctx.createPattern(canvas, 'repeat');
    ctx.fillRect(0,0,w,h);
}

// --- DIBUJO DE TARJETA PRINCIPAL ---
function drawCard() {
    const canvas = document.getElementById('buildCard');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');

    const player = document.getElementById('playerName')?.value || "Player";
    const build = document.getElementById('buildName')?.value || "Build";
    const weapon = document.getElementById('mainWeapon')?.value || "None";
    const stat = document.getElementById('coreStat')?.value || "0";
    
    // Obtenemos el código y lo encriptamos a Base64 para ocultarlo
    const rawCode = document.getElementById('premiumCode') ? document.getElementById('premiumCode').value.toLowerCase().trim() : "";
    let code = "";
    try {
        code = rawCode ? btoa(rawCode) : "";
    } catch(e) {
        code = ""; // Por si introducen caracteres especiales muy raros
    }

    // LISTA DE CÓDIGOS OFUSCADOS (Nadie sabrá la palabra real mirando el código)
    // T1: obsidian99, mythicgold, bloodstone
    const t1 = ['b2JzaWRpYW45OQ==', 'bXl0aGljZ29sZA==', 'Ymxvb2RzdG9uZQ==']; 
    // T2: abyssvoid, emeraldvenom, frostbite
    const t2 = ['YWJ5c3N2b2lk', 'ZW1lcmFsZHZlbm9t', 'ZnJvc3RiaXRl']; 
    // T3: legend-master
    const t3 = ['bGVnZW5kLW1hc3Rlcg==']; 

    // MAGIA: Mostrar/Ocultar botón de Avatar exclusivo para Tier 3
    const avatarBox = document.getElementById('avatarBox');
    if (t3.includes(code)) {
        if (avatarBox) avatarBox.style.display = 'block';
    } else {
        if (avatarBox) avatarBox.style.display = 'none';
        customAvatarImg = null; 
    }

    // 1. Limpiar Fondo
    ctx.clearRect(0,0,canvas.width,canvas.height);
    ctx.fillStyle = '#0a0a0c';
    ctx.fillRect(0,0,canvas.width,canvas.height);

    // 2. Selección de Temas con los códigos en Base64
    if (code === 'b2JzaWRpYW45OQ==') { // obsidian99
        ctx.fillStyle = '#151515'; ctx.fillRect(0,0,canvas.width,canvas.height);
        generateNoise(ctx, canvas.width, canvas.height, 0.8, 0.5);
    } else if (code === 'bXl0aGljZ29sZA==') { // mythicgold
        generateGold(ctx, canvas.width, canvas.height);
    } else if (code === 'Ymxvb2RzdG9uZQ==') { // bloodstone
        ctx.fillStyle = '#110202'; ctx.fillRect(0,0,canvas.width,canvas.height);
        generateBlood(ctx, canvas.width, canvas.height);
    } else if (code === 'YWJ5c3N2b2lk') { // abyssvoid
        ctx.fillStyle = '#080012'; ctx.fillRect(0,0,canvas.width,canvas.height);
        generateVoid(ctx, canvas.width, canvas.height);
    } else if (code === 'ZW1lcmFsZHZlbm9t') { // emeraldvenom
        ctx.fillStyle = '#020d05'; ctx.fillRect(0,0,canvas.width,canvas.height);
        generateEmerald(ctx, canvas.width, canvas.height);
    } else if (code === 'ZnJvc3RiaXRl') { // frostbite
        ctx.fillStyle = '#010a14'; ctx.fillRect(0,0,canvas.width,canvas.height);
        generateFrost(ctx, canvas.width, canvas.height);
    } else if (t3.includes(code)) { // Si es Legendario
        // Lava Oscura por defecto para Legends
        ctx.fillStyle = '#1a0500'; ctx.fillRect(0,0,canvas.width,canvas.height);
        generateBlood(ctx, canvas.width, canvas.height);
        generateGold(ctx, canvas.width, canvas.height);
    } else {
        generateNoise(ctx, canvas.width, canvas.height, 0.3, 0.2);
    }

    // Viñeta Oscura
    const grad = ctx.createRadialGradient(canvas.width/2, canvas.height/2, canvas.width/4, canvas.width/2, canvas.height/2, canvas.width);
    grad.addColorStop(0, 'rgba(0,0,0,0)'); grad.addColorStop(1, 'rgba(0,0,0,0.9)');
    ctx.fillStyle = grad; ctx.fillRect(0,0,canvas.width,canvas.height);

    // Marcos Geometría
    ctx.strokeStyle = '#d4af37'; ctx.lineWidth = 3; ctx.shadowColor = '#d4af37'; ctx.shadowBlur = 15;
    ctx.strokeRect(20,20,canvas.width-40,canvas.height-40);
    ctx.shadowBlur = 0; ctx.strokeStyle = 'rgba(212,175,55,0.2)'; ctx.lineWidth = 1;
    ctx.strokeRect(28,28,canvas.width-56,canvas.height-56);

    // Cabecera de Texto
    ctx.textAlign = 'center'; ctx.fillStyle = '#d4af37';
    ctx.font = 'bold 34px "Rajdhani", sans-serif'; ctx.fillText(build.toUpperCase(), canvas.width/2, 85);
    ctx.fillStyle = '#fff'; ctx.font = 'italic 18px "Rajdhani", sans-serif'; ctx.fillText("Forged by " + player, canvas.width/2, 120);

    ctx.strokeStyle = 'rgba(212,175,55,0.4)'; ctx.beginPath();
    ctx.moveTo(70,150); ctx.lineTo(canvas.width-70, 150); ctx.stroke();

    // DIBUJAR AVATAR Y DESPLAZAR TEXTOS
    let drawY = 220; 

    if (customAvatarImg && t3.includes(code)) {
        const radius = 45;
        const cx = canvas.width / 2;
        const cy = 205; 

        ctx.save();
        ctx.beginPath();
        ctx.arc(cx, cy, radius, 0, Math.PI * 2);
        ctx.clip();
        
        const size = Math.min(customAvatarImg.width, customAvatarImg.height);
        const sx = (customAvatarImg.width - size) / 2;
        const sy = (customAvatarImg.height - size) / 2;
        ctx.drawImage(customAvatarImg, sx, sy, size, size, cx - radius, cy - radius, radius * 2, radius * 2);
        ctx.restore();
        
        ctx.beginPath();
        ctx.arc(cx, cy, radius, 0, Math.PI * 2);
        ctx.lineWidth = 3;
        ctx.strokeStyle = '#d4af37';
        ctx.stroke();

        drawY = 285; // Empujamos el texto hacia abajo para hacer hueco
    }

    // Contenido Dinámico
    ctx.fillStyle = '#aaa'; ctx.font = 'bold 16px "Rajdhani", sans-serif'; ctx.fillText("⚔️ MAIN WEAPON", canvas.width/2, drawY);
    ctx.fillStyle = '#fff'; ctx.font = '26px "Rajdhani", sans-serif'; ctx.fillText(weapon, canvas.width/2, drawY + 30);
    ctx.fillStyle = '#aaa'; ctx.font = 'bold 16px "Rajdhani", sans-serif'; ctx.fillText("⭐ CORE STAT", canvas.width/2, drawY + 95);
    ctx.fillStyle = '#d4af37'; ctx.font = 'bold 48px "Rajdhani", sans-serif'; ctx.fillText(stat, canvas.width/2, drawY + 145);

    // Marca de Agua por Tiers
    ctx.fillStyle = 'rgba(212,175,55,0.6)'; ctx.font = 'bold 16px "Rajdhani", sans-serif'; ctx.letterSpacing = "2px";
    if (t3.includes(code)) {
        ctx.fillText("GUIDEVAULT LEGEND", canvas.width/2, canvas.height-40);
    } else if (t2.includes(code)) {
        ctx.fillText("GUIDEVAULT RAIDER", canvas.width/2, canvas.height-40);
    } else if (t1.includes(code)) {
        ctx.fillText("GUIDEVAULT PREMIUM", canvas.width/2, canvas.height-40);
    } else {
        ctx.fillText("GUIDEVAULT.ONLINE", canvas.width/2, canvas.height-40);
    }
}

function downloadCard() {
    const canvas = document.getElementById('buildCard');
    const buildName = document.getElementById('buildName') ? document.getElementById('buildName').value.replace(/\s+/g, '-').toLowerCase() : 'build';
    
    const image = canvas.toDataURL("image/png");
    const link = document.createElement('a');
    link.download = `GuideVault-${buildName}.png`;
    link.href = image;
    link.click();

    setTimeout(() => { 
        alert("✨ Legend Card Downloaded! ✨\n\nSupport us on Patreon to unlock exclusive Raider and Legend features!"); 
    }, 500);
}

// --- EVENTOS INICIALES Y SEGURIDAD ---
window.addEventListener('load', () => {
    document.getElementById('calc-weapon')?.addEventListener('change', calculateBuild);
    document.getElementById('calc-armor')?.addEventListener('change', calculateBuild);
    document.getElementById('calc-acc')?.addEventListener('change', calculateBuild);

    // LECTOR DE ARCHIVOS PARA EL AVATAR CON SEGURIDAD
    const avatarInput = document.getElementById('avatarUpload');
    if (avatarInput) {
        avatarInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;

            // Seguridad: Solo imágenes
            if (!file.type.match('image.*')) {
                alert("⛔ Security Alert: Please upload a valid image file (PNG, JPG, WEBP).");
                avatarInput.value = "";
                return;
            }

            // Seguridad: Máximo 5 MB
            const maxSize = 5 * 1024 * 1024;
            if (file.size > maxSize) {
                alert("⛔ File too large: Please upload an image smaller than 5MB.");
                avatarInput.value = "";
                return;
            }

            const reader = new FileReader();
            reader.onload = function(event) {
                customAvatarImg = new Image();
                customAvatarImg.onload = function() {
                    drawCard();
                };
                customAvatarImg.onerror = function() {
                    alert("Error loading the image. It might be corrupted.");
                    customAvatarImg = null;
                };
                customAvatarImg.src = event.target.result;
            };
            reader.readAsDataURL(file);
        });
    }

    setTimeout(() => drawCard(), 100);
});