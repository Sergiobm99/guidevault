<?php 
$pageTitle = "Skill Tree & Best Builds | Crimson Desert Guide";
$pageDesc = "Optimize Kliff's combat potential. Comprehensive guide to the Axiom Force skill tree, best early skills, and overpowered endgame builds.";

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

<style>
    .build-calculator {
        background: var(--panel-color, #0f0f0f);
        border: 1px solid var(--border-color, rgba(212, 175, 55, 0.2));
        border-radius: 8px;
        padding: 25px;
        margin: 2rem 0;
        font-family: 'Rajdhani', sans-serif;
        color: var(--text-main, #e0d4be);
        box-shadow: 0 4px 20px rgba(0,0,0,0.5);
    }
    .calc-header { border-bottom: 1px solid var(--border-color, rgba(212, 175, 55, 0.2)); padding-bottom: 15px; margin-bottom: 20px; }
    .calc-header p { font-size: 0.9rem; color: var(--text-muted, #888); margin-top: 5px; }
    .calc-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 30px; }
    @media (max-width: 768px) { .calc-grid { grid-template-columns: 1fr; } }
    .calc-selectors { display: flex; flex-direction: column; gap: 15px; }
    .calc-group label { display: block; font-size: 0.85rem; color: var(--text-dim, #aaa); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; font-weight: 600; }
    .calc-group select { width: 100%; background: var(--bg-main, #1a1a1a); color: var(--text-main, #fff); border: 1px solid var(--border-color, #333); padding: 10px 15px; border-radius: 4px; font-size: 1rem; outline: none; transition: border-color 0.2s; cursor: pointer; }
    .calc-group select:focus { border-color: var(--accent, #D4AF37); }
    .calc-results { background: var(--bg-main, #080808); border: 1px solid var(--border-color, #222); border-radius: 6px; padding: 20px; display: flex; flex-direction: column; justify-content: center; }
    .result-item { display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px dashed var(--border-color, #333); }
    .result-item:last-child { border-bottom: none; }
    .result-label { font-weight: 600; color: var(--text-dim, #aaa); text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px; }
    .result-value { font-size: 1.4rem; font-weight: 700; }
    .val-atk { color: #e74c3c; } .val-def { color: #3498db; } .val-crit { color: #f1c40f; }
</style>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(138, 43, 226, 0.2) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(40, 10, 80, 0.8) 0%, transparent 60%), linear-gradient(180deg, #05020a 0%, #11051a 60%, #05020a 100%);"></div>
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a> <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a> <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Builds & Skills</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Skill Tree & Builds</h1>
      <p class="guide-hero-subtitle">Axiom Force Mastery and Optimal Playstyles</p>
    </div>
  </header>

  <div class="guide-layout" style="grid-template-columns: 1fr; max-width: 950px; margin: 0 auto;">
    <main class="guide-content">

      <section class="guide-section">
        <div class="callout info">
          <span class="callout-label">Respecing Your Skills</span>
          <p>Don't worry about making mistakes in your build! You can reset your Skill Tree at any time by speaking to the <strong>Blind Oracle</strong> in the Hernand Market. It costs 500 Gold the first time, but the price doubles with each consecutive reset.</p>
        </div>

        <h2 class="guide-section-title" style="margin-top: 3rem;">1. The Axiom Force Branches</h2>
        <p>Kliff earns Skill Points (SP) by leveling up, clearing Abyss Rifts, and finding hidden Meditation Shrines.</p>

        <div class="guide-table-wrap">
          <table class="guide-table">
            <thead><tr><th>Branch</th><th>Focus</th><th>Ultimate Skill (Level 30)</th></tr></thead>
            <tbody>
              <tr><td><strong>Mercenary (Red)</strong></td><td>Physical Damage, Parrying, Combos.</td><td><strong>Executioner's Trance:</strong> Heavy attacks cannot be interrupted.</td></tr>
              <tr><td><strong>Survivor (Green)</strong></td><td>Stamina Regen, Stealth, Commands.</td><td><strong>Greymane Leader:</strong> Tactical Commands cost no stamina.</td></tr>
              <tr><td><strong>Abyss (Purple)</strong></td><td>Elemental Magic, Telekinesis, CC.</td><td><strong>Void Singularity:</strong> Create a massive damage black hole.</td></tr>
            </tbody>
          </table>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title">2. Top 10 Endgame Builds</h2>
        <p>From silent assassins to battlefield commanders, here are the most powerful archetypes in Pywel.</p>

        <div class="guide-accordion open" id="acc-build-1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-1')"><span class="guide-accordion-label">🗡️ 1. The Pailune Shadow (Stealth/Crit)</span><span class="guide-accordion-icon">▾</span></button>
          <div class="guide-accordion-body" style="max-height:800px"><div class="guide-accordion-inner"><p>Eliminate high-value targets before the fight begins.</p><ul><li><strong>Weapon:</strong> Corsair's Cutlass</li><li><strong>Armor:</strong> Assassin of Pailune</li><li><strong>Skills:</strong> Silent Step, Shadow Strike, Abyss Cloak.</li></ul></div></div>
        </div>

        <div class="guide-accordion" id="acc-build-2">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-2')"><span class="guide-accordion-label">🛡️ 2. The Volcanic Juggernaut (Heavy/Tank)</span><span class="guide-accordion-icon">▾</span></button>
          <div class="guide-accordion-body"><div class="guide-accordion-inner"><p>Stand your ground, trade hits, and never die.</p><ul><li><strong>Weapon:</strong> The King's Justice</li><li><strong>Armor:</strong> Greymane Commander Set</li><li><strong>Skills:</strong> Executioner's Trance, Iron Lungs, Axiom Shield.</li></ul></div></div>
        </div>

        <div class="guide-accordion" id="acc-build-3">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-3')"><span class="guide-accordion-label">🌀 3. The Abyss Weaver (Magic/CC)</span><span class="guide-accordion-icon">▾</span></button>
          <div class="guide-accordion-body"><div class="guide-accordion-inner"><p>Control the battlefield keeping enemies at a distance.</p><ul><li><strong>Weapon:</strong> Blade of the Origin</li><li><strong>Armor:</strong> Scholar of the Void Set</li><li><strong>Skills:</strong> Void Singularity, Telekinetic Throw, Elemental Imbue.</li></ul></div></div>
        </div>

        <div class="guide-accordion" id="acc-build-4">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-4')"><span class="guide-accordion-label">🏹 4. The Explosive Ranger (Ranged/AoE)</span><span class="guide-accordion-icon">▾</span></button>
          <div class="guide-accordion-body"><div class="guide-accordion-inner"><p>Dominate from afar with infinite explosive damage.</p><ul><li><strong>Weapon:</strong> Explosive Longbow</li><li><strong>Armor:</strong> Scorchflame Armor Set</li><li><strong>Skills:</strong> Infinite Arrows, Explosive Arrows, Evasive Roll.</li></ul></div></div>
        </div>

        <div class="guide-accordion" id="acc-build-5">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-5')"><span class="guide-accordion-label">⚔️ 5. The Dual Wield Berserker (Aggro DPS)</span><span class="guide-accordion-icon">▾</span></button>
          <div class="guide-accordion-body"><div class="guide-accordion-inner"><p>Ditch the shield for pure aggressive melee.</p><ul><li><strong>Weapon:</strong> Dual Chillfallen Swords</li><li><strong>Armor:</strong> Frostcursed Plate Set</li><li><strong>Skills:</strong> Dual Wielding Mastery, Wind Slash, Turning Slash.</li></ul></div></div>
        </div>

        <div class="guide-accordion" id="acc-build-6">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-6')"><span class="guide-accordion-label">👊 6. The Hernand Brawler (Grappler/Unarmed)</span><span class="guide-accordion-icon">▾</span></button>
          <div class="guide-accordion-body"><div class="guide-accordion-inner"><p>Use brutal wrestling moves and sheer physical strength.</p><ul><li><strong>Weapon:</strong> Mercenary Spiked Gauntlets</li><li><strong>Armor:</strong> Brawler's Leather Wraps</li><li><strong>Skills:</strong> Suplex, Disarm, Axiom Shockwave.</li><li><strong>Playstyle:</strong> Close the gap, stun, and execute spectacular grabs that damage surrounding enemies.</li></ul></div></div>
        </div>

        <div class="guide-accordion" id="acc-build-7">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-7')"><span class="guide-accordion-label">⚡ 7. The Elemental Spellblade (Hybrid DPS)</span><span class="guide-accordion-icon">▾</span></button>
          <div class="guide-accordion-body"><div class="guide-accordion-inner"><p>Combine fast sword strikes with elemental enchantments.</p><ul><li><strong>Weapon:</strong> Stormcaller Longsword</li><li><strong>Armor:</strong> Tempest Battleplate</li><li><strong>Skills:</strong> Lightning Dash, Elemental Infusion, Arcane Parry.</li><li><strong>Playstyle:</strong> Buff your sword with lightning, dash through enemies to apply status effects, and detonate them.</li></ul></div></div>
        </div>

        <div class="guide-accordion" id="acc-build-8">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-8')"><span class="guide-accordion-label">🧪 8. The Alchemical Trapper (DoT/Zone Control)</span><span class="guide-accordion-icon">▾</span></button>
          <div class="guide-accordion-body"><div class="guide-accordion-inner"><p>Use the environment, bombs, and traps to win without swinging a sword.</p><ul><li><strong>Weapon:</strong> Acid-Laced Blade</li><li><strong>Armor:</strong> Alchemist's Trench Coat</li><li><strong>Skills:</strong> Crafting Mastery, Toxic Cloud, Decoy.</li><li><strong>Playstyle:</strong> Lure enemies into choke points filled with explosive barrels and poison traps.</li></ul></div></div>
        </div>

        <div class="guide-accordion" id="acc-build-9">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-9')"><span class="guide-accordion-label">🎺 9. The Greymane Commander (Support/Summons)</span><span class="guide-accordion-icon">▾</span></button>
          <div class="guide-accordion-body"><div class="guide-accordion-inner"><p>Let your mercenary squad do the heavy lifting.</p><ul><li><strong>Weapon:</strong> Commander's Broadsword</li><li><strong>Armor:</strong> Greymane Tactician Set</li><li><strong>Skills:</strong> Rallying Cry, Squad Formations, Greymane Leader.</li><li><strong>Playstyle:</strong> Buff your allies, command archers to fire volleys, and shield your frontliners.</li></ul></div></div>
        </div>

        <div class="guide-accordion" id="acc-build-10">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-10')"><span class="guide-accordion-label">🏰 10. The Aegis Defender (Counter/Block)</span><span class="guide-accordion-icon">▾</span></button>
          <div class="guide-accordion-body"><div class="guide-accordion-inner"><p>An impenetrable fortress built on perfect parries.</p><ul><li><strong>Weapon:</strong> Vanguard Mace & Tower Shield</li><li><strong>Armor:</strong> Fortress Plate</li><li><strong>Skills:</strong> Perfect Block, Shield Bash, Retaliation.</li><li><strong>Playstyle:</strong> Wait for the enemy to strike, execute a perfect block to break their posture, and punish with a critical counter.</li></ul></div></div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title">3. Interactive Build Planner</h2>
        <p>Test your own equipment combinations to see how they affect Kliff's overall combat stats.</p>

        <div class="build-calculator">
            <div class="calc-grid">
                <div class="calc-selectors">
                    <div class="calc-group">
                        <label>⚔️ Primary Weapon</label>
                        <select id="calc-weapon">
                            <option value="none">-- Unequipped (Fists: ATK 5) --</option>
                            <option value="w_rusty">Rusty Greymane Dagger (ATK: 15)</option>
                            <option value="w_shadow">Corsair's Cutlass (ATK: 42, CRIT: +5%)</option>
                            <option value="w_frost">Frostbane Greatsword (ATK: 85, CRIT: -5%)</option>
                            <option value="w_justice">The King's Justice (ATK: 120, DEF: +10)</option>
                            <option value="w_bow">Explosive Longbow (ATK: 60, CRIT: +15%)</option>
                            <option value="w_dual">Dual Chillfallen Swords (ATK: 95, DEF: -10)</option>
                            <option value="w_gauntlets">Mercenary Gauntlets (ATK: 50, CRIT: +10%)</option>
                            <option value="w_storm">Stormcaller Longsword (ATK: 75, Mag: +20)</option>
                            <option value="w_acid">Acid-Laced Blade (ATK: 35, DoT: +30)</option>
                            <option value="w_mace">Vanguard Mace & Shield (ATK: 60, DEF: +40)</option>
                        </select>
                    </div>

                    <div class="calc-group">
                        <label>🛡️ Armor Set</label>
                        <select id="calc-armor">
                            <option value="none">-- Unequipped --</option>
                            <option value="a_merc">Mercenary Rags (DEF: 10)</option>
                            <option value="a_assassin">Assassin of Pailune (DEF: 25, CRIT: +15%)</option>
                            <option value="a_commander">Greymane Commander Set (DEF: 85, ATK: +5)</option>
                            <option value="a_scholar">Scholar of the Void (DEF: 20, CRIT: +5%)</option>
                            <option value="a_scorch">Scorchflame Armor (DEF: 35, ATK: +15)</option>
                            <option value="a_brawler">Brawler's Wraps (DEF: 30, CRIT: +5%)</option>
                            <option value="a_tempest">Tempest Battleplate (DEF: 50, ATK: +10)</option>
                            <option value="a_alchemist">Alchemist's Coat (DEF: 40)</option>
                            <option value="a_fortress">Fortress Plate (DEF: 120, ATK: -10)</option>
                        </select>
                    </div>

                    <div class="calc-group">
                        <label>💍 Accessory / Relic</label>
                        <select id="calc-acc">
                            <option value="none">-- Empty Slot --</option>
                            <option value="r_wolf">Wolf Tooth Pendant (ATK: +10)</option>
                            <option value="r_bear">Black Bear Crest (DEF: +20)</option>
                            <option value="r_abyss">Abyss Memory Shard (ATK: +25, DEF: -10)</option>
                            <option value="r_arrows">Infinite Arrow Quiver (ATK: +20)</option>
                            <option value="r_gladiator">Gladiator's Mark (CRIT: +10%, ATK: +5)</option>
                            <option value="r_rune">Lightning Rune (ATK: +15, CRIT: +5%)</option>
                            <option value="r_horn">Horn of the Vanguard (DEF: +15, ATK: +5)</option>
                            <option value="r_bulwark">Bulwark Ring (DEF: +30, CRIT: -5%)</option>
                        </select>
                    </div>
                </div>

                <div class="calc-results">
                    <h4 style="margin-top: 0; color: var(--accent, #D4AF37); text-align: center; border-bottom: 1px solid var(--border-color, #333); padding-bottom: 10px; font-family: 'Cinzel', serif;">Total Stats</h4>
                    <div class="result-item"><span class="result-label">Attack (ATK)</span><span class="result-value val-atk" id="res-atk">5</span></div>
                    <div class="result-item"><span class="result-label">Defense (DEF)</span><span class="result-value val-def" id="res-def">5</span></div>
                    <div class="result-item"><span class="result-label">Crit Chance</span><span class="result-value val-crit" id="res-crit">5%</span></div>
                </div>
            </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title">4. Best Early-Game Skills to Unlock</h2>
        <p>Spend your first 5 Skill Points on these to make Chapters 1 to 3 a breeze:</p>
        
        <div class="guide-cards">
          <div class="guide-card-item">
            <span class="guide-card-icon">🤸</span>
            <h3>Perfect Dodge (SP: 1)</h3>
            <p><strong>Tree: Survivor.</strong> Upgrades your standard roll. Dodging at the last possible second slows down time for 2 seconds.</p>
          </div>
          <div class="guide-card-item">
            <span class="guide-card-icon">🧲</span>
            <h3>Axiom Pull (SP: 2)</h3>
            <p><strong>Tree: Abyss.</strong> Allows you to rip shields out of enemies' hands. Essential for fighting Heavy Infantry.</p>
          </div>
          <div class="guide-card-item">
            <span class="guide-card-icon">🩸</span>
            <h3>Merciless Finish (SP: 2)</h3>
            <p><strong>Tree: Mercenary.</strong> Cinematic execution on stunned enemies that restores 15% of your health.</p>
          </div>
        </div>

      </section>

    </main>
  </div>

<script>
    // BASE DE DATOS ACTUALIZADA CON TODOS LOS OBJETOS DE LAS 10 BUILDS
    const ITEMS = {
        // Armas
        w_rusty: { atk: 15, def: 0, crit: 0 },
        w_shadow: { atk: 42, def: 0, crit: 5 },
        w_frost: { atk: 85, def: 0, crit: -5 },
        w_justice: { atk: 120, def: 10, crit: 0 },
        w_bow: { atk: 60, def: 0, crit: 15 },
        w_dual: { atk: 95, def: -10, crit: 20 },
        w_gauntlets: { atk: 50, def: 0, crit: 10 },
        w_storm: { atk: 75, def: 0, crit: 5 },
        w_acid: { atk: 35, def: 0, crit: 0 },
        w_mace: { atk: 60, def: 40, crit: 0 },
        
        // Armaduras
        a_merc: { atk: 0, def: 10, crit: 0 },
        a_assassin: { atk: 0, def: 25, crit: 15 },
        a_commander: { atk: 5, def: 85, crit: 0 },
        a_scholar: { atk: 0, def: 20, crit: 5 },
        a_scorch: { atk: 15, def: 35, crit: 0 },
        a_brawler: { atk: 0, def: 30, crit: 5 },
        a_tempest: { atk: 10, def: 50, crit: 0 },
        a_alchemist: { atk: 0, def: 40, crit: 0 },
        a_fortress: { atk: -10, def: 120, crit: 0 },

        // Reliquias
        r_wolf: { atk: 10, def: 0, crit: 0 },
        r_bear: { atk: 0, def: 20, crit: 0 },
        r_abyss: { atk: 25, def: -10, crit: 0 },
        r_arrows: { atk: 20, def: 0, crit: 0 },
        r_gladiator: { atk: 5, def: 0, crit: 10 },
        r_rune: { atk: 15, def: 0, crit: 5 },
        r_horn: { atk: 5, def: 15, crit: 0 },
        r_bulwark: { atk: 0, def: 30, crit: -5 }
    };

    const BASE_STATS = { atk: 5, def: 5, crit: 5 }; // Atk base ajustado a puños

    function calculateBuild() {
        const weaponId = document.getElementById('calc-weapon').value;
        const armorId = document.getElementById('calc-armor').value;
        const accId = document.getElementById('calc-acc').value;

        let totalAtk = BASE_STATS.atk;
        let totalDef = BASE_STATS.def;
        let totalCrit = BASE_STATS.crit;

        if (weaponId !== 'none' && ITEMS[weaponId]) { totalAtk += ITEMS[weaponId].atk; totalDef += ITEMS[weaponId].def; totalCrit += ITEMS[weaponId].crit; }
        if (armorId !== 'none' && ITEMS[armorId]) { totalAtk += ITEMS[armorId].atk; totalDef += ITEMS[armorId].def; totalCrit += ITEMS[armorId].crit; }
        if (accId !== 'none' && ITEMS[accId]) { totalAtk += ITEMS[accId].atk; totalDef += ITEMS[accId].def; totalCrit += ITEMS[accId].crit; }

        document.getElementById('res-atk').innerText = totalAtk;
        document.getElementById('res-def').innerText = totalDef;
        document.getElementById('res-crit').innerText = totalCrit + '%';
    }

    document.getElementById('calc-weapon').addEventListener('change', calculateBuild);
    document.getElementById('calc-armor').addEventListener('change', calculateBuild);
    document.getElementById('calc-acc').addEventListener('change', calculateBuild);

    calculateBuild();
</script>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>