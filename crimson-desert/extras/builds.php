<?php 
$parentGuide = [
    'name' => 'Crimson Desert',
    'url'  => '/crimson-desert/index.php'
];
$pageTitle = "Skill Tree & Best Builds | Crimson Desert Guide";
$pageDesc = "Optimize Kliff's combat potential. Comprehensive guide to the Axiom Force skill tree, best early skills, and overpowered endgame builds.";
$bodyClass = "theme-crimson-desert"; 

include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
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
    .val-atk { color: #e74c3c; } .val-def { color: #3498db; } .val-crit { color: #f1c40f; } .val-spd { color: #2ecc71; }
</style>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(138, 43, 226, 0.2) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(40, 10, 80, 0.8) 0%, transparent 60%), linear-gradient(180deg, #05020a 0%, #11051a 60%, #05020a 100%);"></div>
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="/">Home</a> <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a> <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Builds & Skills</span>
      </nav>
      <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">GAME DATABASE</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem;">Skill Tree & Builds</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">Axiom Force Mastery and Optimal Playstyles</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Contents</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#branches" style="color: var(--text-dim); transition: color 0.2s;">1. Axiom Force Branches</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#endgame-builds" style="color: var(--text-dim); transition: color 0.2s;">2. Top 10 Endgame Builds</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#synergies" style="color: var(--text-dim); transition: color 0.2s;">3. Skill Synergies</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#calculator" style="color: var(--text-dim); transition: color 0.2s;">4. Build Planner</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#early-skills" style="color: var(--text-dim); transition: color 0.2s;">5. Best Early-Game Skills</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;">
    <a href="#create-card" style="color: var(--text-dim); transition: color 0.2s;">6. Create Your Legend Card</a>
</li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="branches" style="margin-bottom: 4rem;">
        <div class="callout info" style="margin-bottom: 3rem;">
          <span class="callout-label" style="color: var(--gold);">Respecing Your Skills</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Don't worry about making mistakes in your build! You can reset your Skill Tree at any time by speaking to the <strong>Blind Oracle</strong> in the Hernand Market. It costs 500 Gold the first time, but the price doubles with each consecutive reset.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. The Axiom Force Branches</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Kliff earns Skill Points (SP) by leveling up, clearing Abyss Rifts, and finding hidden Meditation Shrines scattered across Pywel.</p>

        <div class="guide-table-wrap">
          <table class="guide-table" style="background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold); color: var(--gold);">
                <th style="padding: 1rem;">Branch</th>
                <th style="padding: 1rem;">Focus</th>
                <th style="padding: 1rem;">Core Mechanic</th>
                <th style="padding: 1rem;">Ultimate Skill (Level 30)</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Mercenary (Red)</strong></td>
                <td style="padding: 1rem;">Physical Damage, Combos.</td>
                <td style="padding: 1rem;">Generates <em>Fury</em> on hit.</td>
                <td style="padding: 1rem;"><strong>Executioner's Trance:</strong> Heavy attacks cannot be interrupted and heal for 10% damage dealt.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Survivor (Green)</strong></td>
                <td style="padding: 1rem;">Stamina Regen, Stealth, Traps.</td>
                <td style="padding: 1rem;">Enhances Dodge and Movement.</td>
                <td style="padding: 1rem;"><strong>Greymane Leader:</strong> Tactical Commands cost no stamina, and allies gain +30% attack speed.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Abyss (Purple)</strong></td>
                <td style="padding: 1rem;">Elemental Magic, CC, Telekinesis.</td>
                <td style="padding: 1rem;">Uses <em>Axiom Gauge</em> instead of Stamina.</td>
                <td style="padding: 1rem;"><strong>Void Singularity:</strong> Create a massive black hole that pulls in enemies and detonates.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="endgame-builds" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">2. Top 10 Endgame Builds</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">From silent assassins to battlefield commanders, here are the most powerful archetypes in Pywel. Each build includes the optimal skill rotation.</p>

        <div class="guide-accordion open reveal" id="acc-build-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🗡️ 1. The Pailune Shadow (Stealth/Crit)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Eliminate high-value targets before the fight begins. Focuses on insane burst damage from behind.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; margin-bottom: 1rem;">
                <li><strong>Weapon:</strong> Corsair's Cutlass</li>
                <li><strong>Armor:</strong> Assassin of Pailune</li>
                <li><strong>Core Skills:</strong> Silent Step, Shadow Strike, Abyss Cloak.</li>
              </ul>
              <div style="background: rgba(0,0,0,0.3); padding: 1rem; border-left: 3px solid var(--gold); border-radius: 0 4px 4px 0;">
                <p style="margin: 0; font-size: 0.9rem; color: #aaa;"><strong>Combat Rotation:</strong> Activate <em>Abyss Cloak</em> ➔ Sneak behind strongest enemy ➔ <em>Shadow Strike</em> (Guaranteed Crit) ➔ <em>Smoke Bomb</em> to drop aggro.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="acc-build-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🛡️ 2. The Volcanic Juggernaut (Heavy/Tank)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Stand your ground, trade hits, and never die.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; margin-bottom: 1rem;">
                <li><strong>Weapon:</strong> The King's Justice (Greatsword)</li>
                <li><strong>Armor:</strong> Greymane Commander Set</li>
                <li><strong>Core Skills:</strong> Executioner's Trance, Iron Lungs, Axiom Shield.</li>
              </ul>
              <div style="background: rgba(0,0,0,0.3); padding: 1rem; border-left: 3px solid #e74c3c; border-radius: 0 4px 4px 0;">
                <p style="margin: 0; font-size: 0.9rem; color: #aaa;"><strong>Combat Rotation:</strong> Cast <em>Axiom Shield</em> ➔ Wade into enemies ➔ Charge <em>Heavy Smash</em> (Uninterruptible via Trance) ➔ Heal from the massive AoE damage.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="acc-build-3" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-3')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🌀 3. The Abyss Weaver (Magic/CC)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Control the battlefield keeping enemies at a distance.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; margin-bottom: 1rem;">
                <li><strong>Weapon:</strong> Blade of the Origin</li>
                <li><strong>Armor:</strong> Scholar of the Void Set</li>
                <li><strong>Core Skills:</strong> Void Singularity, Telekinetic Throw, Elemental Imbue.</li>
              </ul>
              <div style="background: rgba(0,0,0,0.3); padding: 1rem; border-left: 3px solid #9b59b6; border-radius: 0 4px 4px 0;">
                <p style="margin: 0; font-size: 0.9rem; color: #aaa;"><strong>Combat Rotation:</strong> Cast <em>Void Singularity</em> to group enemies ➔ Use <em>Telekinetic Throw</em> on explosive barrels into the singularity ➔ Detonate.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="acc-build-4" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-4')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🏹 4. The Explosive Ranger (Ranged/AoE)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Dominate from afar with infinite explosive damage.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li><strong>Weapon:</strong> Explosive Longbow</li>
                <li><strong>Armor:</strong> Scorchflame Armor Set</li>
                <li><strong>Core Skills:</strong> Infinite Arrows, Explosive Arrows, Evasive Roll.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="acc-build-5" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-5')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">⚔️ 5. The Dual Wield Berserker (Aggro DPS)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Ditch the shield for pure aggressive melee.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li><strong>Weapon:</strong> Dual Chillfallen Swords</li>
                <li><strong>Armor:</strong> Frostcursed Plate Set</li>
                <li><strong>Core Skills:</strong> Dual Wielding Mastery, Wind Slash, Turning Slash.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="acc-build-6" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-6')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">👊 6. The Hernand Brawler (Grappler/Unarmed)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Use brutal wrestling moves and sheer physical strength.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li><strong>Weapon:</strong> Mercenary Spiked Gauntlets</li>
                <li><strong>Armor:</strong> Brawler's Leather Wraps</li>
                <li><strong>Core Skills:</strong> Suplex, Disarm, Axiom Shockwave.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="acc-build-7" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-7')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">⚡ 7. The Elemental Spellblade (Hybrid DPS)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Combine fast sword strikes with elemental enchantments.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li><strong>Weapon:</strong> Stormcaller Longsword</li>
                <li><strong>Armor:</strong> Tempest Battleplate</li>
                <li><strong>Core Skills:</strong> Lightning Dash, Elemental Infusion, Arcane Parry.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="acc-build-8" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-8')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🧪 8. The Alchemical Trapper (DoT/Zone Control)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Use the environment, bombs, and traps to win without swinging a sword.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li><strong>Weapon:</strong> Acid-Laced Blade</li>
                <li><strong>Armor:</strong> Alchemist's Trench Coat</li>
                <li><strong>Core Skills:</strong> Crafting Mastery, Toxic Cloud, Decoy.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="acc-build-9" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-9')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🎺 9. The Greymane Commander (Support/Summons)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Let your mercenary squad do the heavy lifting.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li><strong>Weapon:</strong> Commander's Broadsword</li>
                <li><strong>Armor:</strong> Greymane Tactician Set</li>
                <li><strong>Core Skills:</strong> Rallying Cry, Squad Formations, Greymane Leader.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="acc-build-10" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-build-10')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🏰 10. The Aegis Defender (Counter/Block)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">An impenetrable fortress built on perfect parries.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li><strong>Weapon:</strong> Vanguard Mace & Tower Shield</li>
                <li><strong>Armor:</strong> Fortress Plate</li>
                <li><strong>Core Skills:</strong> Perfect Block, Shield Bash, Retaliation.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="synergies" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">3. Skill Synergies</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Combining skills from different branches creates devastating hidden effects.</p>
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-left: 4px solid #3498db;">
            <h4 style="color: #3498db; margin-top: 0;">Shatterstorm (Ice + Heavy)</h4>
            <p style="font-size: 0.9rem; color: #aaa;">Freeze an enemy with <em>Frost Imbue</em>, then hit them with <em>Executioner's Trance</em>. They instantly shatter, dealing 300% physical damage in an AoE.</p>
          </div>
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-left: 4px solid #9b59b6;">
            <h4 style="color: #9b59b6; margin-top: 0;">Phantom Grapple (Axiom + Stealth)</h4>
            <p style="font-size: 0.9rem; color: #aaa;">Use <em>Axiom Pull</em> while invisible from <em>Abyss Cloak</em>. You will instantly teleport behind the pulled enemy for a free lethal execution.</p>
          </div>
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-left: 4px solid #e74c3c;">
            <h4 style="color: #e74c3c; margin-top: 0;">Volatile Command (Fire + Mercenaries)</h4>
            <p style="font-size: 0.9rem; color: #aaa;">Cast <em>Toxic Cloud</em>, then use <em>Rallying Cry</em>. Your archer companions will fire flaming arrows, instantly igniting the cloud into a massive explosion.</p>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="calculator" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">4. Interactive Build Planner</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Test your own equipment combinations to see how they affect Kliff's overall combat stats.</p>

        <div class="build-calculator">
            <div class="calc-grid">
                <div class="calc-selectors">
                    <div class="calc-group">
                        <label>⚔️ Primary Weapon</label>
                        <select id="calc-weapon">
                            <option value="none">-- Unequipped (Fists: ATK 5) --</option>
                            <option value="w_rusty">Rusty Greymane Dagger (ATK: 15, SPD: +10%)</option>
                            <option value="w_shadow">Corsair's Cutlass (ATK: 42, CRIT: +5%)</option>
                            <option value="w_frost">Frostbane Greatsword (ATK: 85, SPD: -15%)</option>
                            <option value="w_justice">The King's Justice (ATK: 120, DEF: +10)</option>
                            <option value="w_bow">Explosive Longbow (ATK: 60, CRIT: +15%)</option>
                            <option value="w_dual">Dual Chillfallen Swords (ATK: 95, SPD: +5%)</option>
                            <option value="w_gauntlets">Mercenary Gauntlets (ATK: 50, CRIT: +10%)</option>
                            <option value="w_storm">Stormcaller Longsword (ATK: 75, Mag: +20)</option>
                            <option value="w_acid">Acid-Laced Blade (ATK: 35, DoT: +30)</option>
                            <option value="w_mace">Vanguard Mace & Shield (ATK: 60, DEF: +40)</option>
                            <option value="w_scythe" style="color: #9b59b6;">Abyssal Scythe (ATK: 110, CRIT: +20%, SPD: -10%)</option>
                        </select>
                    </div>

                    <div class="calc-group">
                        <label>🛡️ Armor Set</label>
                        <select id="calc-armor">
                            <option value="none">-- Unequipped --</option>
                            <option value="a_merc">Mercenary Rags (DEF: 10, SPD: +5%)</option>
                            <option value="a_assassin">Assassin of Pailune (DEF: 25, CRIT: +15%)</option>
                            <option value="a_commander">Greymane Commander Set (DEF: 85, ATK: +5)</option>
                            <option value="a_scholar">Scholar of the Void (DEF: 20, CRIT: +5%)</option>
                            <option value="a_scorch">Scorchflame Armor (DEF: 35, ATK: +15)</option>
                            <option value="a_brawler">Brawler's Wraps (DEF: 30, CRIT: +5%)</option>
                            <option value="a_tempest">Tempest Battleplate (DEF: 50, ATK: +10)</option>
                            <option value="a_alchemist">Alchemist's Coat (DEF: 40)</option>
                            <option value="a_fortress">Fortress Plate (DEF: 120, SPD: -20%)</option>
                            <option value="a_dragon" style="color: var(--gold);">Dragon-scale Mail (DEF: 150, ATK: +20)</option>
                        </select>
                    </div>

                    <div class="calc-group">
                        <label>💍 Accessory / Relic</label>
                        <select id="calc-acc">
                            <option value="none">-- Empty Slot --</option>
                            <option value="r_wolf">Wolf Tooth Pendant (ATK: +10, SPD: +5%)</option>
                            <option value="r_bear">Black Bear Crest (DEF: +20)</option>
                            <option value="r_abyss">Abyss Memory Shard (ATK: +25, DEF: -10)</option>
                            <option value="r_arrows">Infinite Arrow Quiver (ATK: +20)</option>
                            <option value="r_gladiator">Gladiator's Mark (CRIT: +10%, ATK: +5)</option>
                            <option value="r_rune">Lightning Rune (ATK: +15, CRIT: +5%)</option>
                            <option value="r_horn">Horn of the Vanguard (DEF: +15, ATK: +5)</option>
                            <option value="r_bulwark">Bulwark Ring (DEF: +30, CRIT: -5%)</option>
                            <option value="r_origin" style="color: #9b59b6;">Core of the Origin (ATK: +30, CRIT: +15%)</option>
                        </select>
                    </div>
                </div>

                <div class="calc-results">
                    <h4 style="margin-top: 0; color: var(--accent, #D4AF37); text-align: center; border-bottom: 1px solid var(--border-color, #333); padding-bottom: 10px; font-family: var(--font-display);">Total Stats</h4>
                    <div class="result-item"><span class="result-label">Attack (ATK)</span><span class="result-value val-atk" id="res-atk" style="color: #e74c3c;">5</span></div>
                    <div class="result-item"><span class="result-label">Defense (DEF)</span><span class="result-value val-def" id="res-def" style="color: #3498db;">5</span></div>
                    <div class="result-item"><span class="result-label">Crit Chance</span><span class="result-value val-crit" id="res-crit" style="color: #f1c40f;">5%</span></div>
                    <div class="result-item" style="border-bottom: none;"><span class="result-label">Attack Speed</span><span class="result-value val-spd" id="res-spd" style="color: #2ecc71;">100%</span></div>
                </div>
            </div>
        </div>
      </section>

      <section class="guide-section reveal" id="early-skills" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">5. Best Early-Game Skills to Unlock</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Spend your first 5 Skill Points on these to make Chapters 1 to 3 a breeze:</p>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🤸</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Perfect Dodge (SP: 1)</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Tree: Survivor.</strong> Upgrades your standard roll. Dodging at the last possible second slows down time for 2 seconds.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🧲</span>
            <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Axiom Pull (SP: 2)</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Tree: Abyss.</strong> Allows you to rip shields out of enemies' hands. Essential for fighting Heavy Infantry.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🩸</span>
            <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Merciless Finish (SP: 2)</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Tree: Mercenary.</strong> Cinematic execution on stunned enemies that restores 15% of your health.</p>
          </div>
        </div>
        <section class="guide-section reveal" id="create-card" style="margin-bottom: 4rem;">
    <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">6. Create Your Legend Card</h2>
    <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">
        Showcase your build to the community! Customize your player name, build archetype, and selected gear to generate a high-quality shareable card.
    </p>
<div class="build-crafter-container theme-crimson-desert">
    <div class="crafter-controls glass-panel">
        <h3>Forge Your Build</h3>
        
        <div class="input-group">
            <label for="playerName">Player Name</label>
            <input type="text" id="playerName" value="Dark Vagabond" oninput="drawCard()">
        </div>

        <div class="input-group">
            <label for="buildName">Build Name</label>
            <input type="text" id="buildName" value="Shadow Assassin" oninput="drawCard()">
        </div>

       <div class="input-group">
    <label for="mainWeapon">Main Weapon</label>
    <select id="mainWeapon" onchange="drawCard()">
        <option value="Bare Hands">-- Select Weapon --</option>
        
        <optgroup label="One-Handed Swords">
            <option value="Sword of the Lord">Sword of the Lord</option>
            <option value="Tauria Curved Sword">Tauria Curved Sword</option>
            <option value="Hollow Visage">Hollow Visage</option>
            <option value="Legionary's Gladius">Legionary's Gladius</option>
            <option value="Melted Ambition">Melted Ambition</option>
            <option value="Survivor's Solitude">Survivor's Solitude</option>
            <option value="Acria Sword">Acria Sword</option>
            <option value="Wolf's Fang">Wolf's Fang</option>
            <option value="The Grove's Thorn">The Grove's Thorn</option>
            <option value="Volono Sword">Volono Sword</option>
        </optgroup>

        <optgroup label="Two-Handed & Heavy">
            <option value="Hwando">Hwando</option>
            <option value="Soul Spear">Soul Spear</option>
            <option value="Frozen Anguish">Frozen Anguish</option>
            <option value="Vessel of Dark Pursuit">Vessel of Dark Pursuit</option>
            <option value="Ignir">Ignir</option>
            <option value="Righteous Verdict">Righteous Verdict</option>
            <option value="Darkbringer">Darkbringer</option>
            <option value="Mining Knuckledrill">Mining Knuckledrill</option>
            <option value="Acorn Mace">Acorn Mace</option>
        </optgroup>

        <optgroup label="Daggers & Rapiers">
            <option value="Goblin King's Treasure Dagger">Goblin King's Treasure Dagger</option>
            <option value="Kylus Dagger">Kylus Dagger</option>
            <option value="Fallen Kingdom's Rapier">Fallen Kingdom's Rapier</option>
        </optgroup>

        <optgroup label="Ranged & Magic">
            <option value="Sorcerer's Staff">Sorcerer's Staff</option>
            <option value="Nobleman's Bow">Nobleman's Bow</option>
            <option value="Tommasoan Bow">Tommasoan Bow</option>
            <option value="Sior Blaster">Sior Blaster (Pistol)</option>
            <option value="Demenissian Hero's Musket">Demenissian Hero's Musket</option>
            <option value="Eastern Witch's Fan">Eastern Witch's Fan</option>
        </optgroup>

    </select>
</div>

        <div class="input-group">
            <label for="coreStat">Core Stat</label>
            <input type="number" id="coreStat" value="99" min="1" max="99" oninput="drawCard()">
        </div>

        <button class="crafter-export-btn" onclick="downloadCard()">Download Card</button>
    </div>

    <div class="crafter-preview">
        <canvas id="buildCard" width="400" height="500"></canvas>
    </div>
</div>
</section>
        <div class="chapter-nav">
            <a href="/crimson-desert/extras/bestiary.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Bestiary</a>
            <a href="/crimson-desert/extras/companions.php" class="btn btn-gold">Next: Companions →</a>
        </div>

      </section>

    </main>
  </div>

<script src="/js/build-crafter.js"></script>
<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>