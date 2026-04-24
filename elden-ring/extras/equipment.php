<?php 
// 1. Identify the parent game for the "smart" header button
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];

// 2. Define SEO data for this page
$pageTitle = "Best Weapons, Armor, Shields & Talismans — Elden Ring & DLC | GuideVault";
$pageDesc = "Complete equipment database for Elden Ring and Shadow of the Erdtree. Discover the best weapons, staffs, shields, ashes of war, and meta talismans.";

// 3. Load the centralized global header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
  
  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(231, 76, 60, 0.15) 0%, transparent 65%), linear-gradient(180deg, #0a0a0c 0%, #111115 60%, #0a0a0c 100%);"></div>
    <div class="guide-hero-pattern"></div>
    <div class="guide-hero-inner">
      
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/elden-ring/index.php" style="color: rgba(255,255,255,0.7); transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Elden Ring</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span style="color: var(--gold);">Equipment & Armaments</span>
      </nav>

      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: #fff; text-shadow: 0 0 20px rgba(231, 76, 60, 0.4);">THE ARMORY</h1>
      <p class="guide-hero-subtitle" style="color: #e74c3c;">Top Tier Weapons, Catalysts, Armor Sets, and Talismans</p>
    </div>
  </header>

  <div class="guide-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Armory Categories</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#melee-weapons" style="color: var(--text-dim); transition: color 0.2s;">1. S-Tier Melee Weapons</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#shields" style="color: var(--text-dim); transition: color 0.2s;">2. S-Tier Shields (Defense)</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#catalysts" style="color: var(--text-dim); transition: color 0.2s;">3. Best Staffs & Seals</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#ashes-of-war" style="color: var(--text-dim); transition: color 0.2s;">4. Best Ashes of War</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#legendary" style="color: var(--text-dim); transition: color 0.2s;">5. Legendary Armaments</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#armor" style="color: var(--text-dim); transition: color 0.2s;">6. Best Armor Sets</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#talismans" style="color: var(--text-dim); transition: color 0.2s;">7. Must-Have Talismans</a></li>
        </ul>
    </aside>

    <main class="guide-content">
        <p class="guide-section-intro reveal" style="margin-bottom: 3rem;">
            Whether you are a heavy-armor swordsman or a glass-cannon mage, having the right equipment is the difference between victory and seeing "YOU DIED". Below is our curated list of the absolute best gear in the game.
        </p>

      <section class="guide-section reveal" id="melee-weapons" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">1. S-Tier Melee Weapons</h2>
        <p style="margin-bottom: 1.5rem;">The top most lethal physical and hybrid weapons across the base game and DLC.</p>

        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
          
          <div class="guide-card-item reveal" style="border-top: 3px solid #e74c3c;">
            <h3 style="margin-bottom: 0.5rem;">Blasphemous Blade</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">Greatsword | STR/DEX/FAI</p>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Arguably the best PvE weapon in the game. Its Ash of War deals massive fire damage, knocks down enemies, and heals you on every hit.</p>
            <span class="pill" style="background: rgba(231, 76, 60, 0.1); color: #e74c3c; border: 1px solid #e74c3c; font-size: 0.8rem;">Volcano Manor (Rykard)</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #c0392b;">
            <h3 style="margin-bottom: 0.5rem;">Rivers of Blood</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">Katana | DEX/ARC</p>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">The king of bleed builds. The "Corpse Piler" skill unleashes a flurry of blood slashes with absurd range and hemorrhage buildup.</p>
            <span class="pill" style="background: rgba(231, 76, 60, 0.1); color: #e74c3c; border: 1px solid #e74c3c; font-size: 0.8rem;">Mountaintops of the Giants</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #3498db;">
            <h3 style="margin-bottom: 0.5rem;">Moonveil</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">Katana | DEX/INT</p>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">The ultimate weapon for spellblades. Transient Moonlight fires a fast, high-damage magical wave that deals immense posture damage.</p>
            <span class="pill" style="background: rgba(52, 152, 219, 0.1); color: #3498db; border: 1px solid #3498db; font-size: 0.8rem;">Gael Tunnel (Caelid)</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #7f8c8d;">
            <h3 style="margin-bottom: 0.5rem;">Giant-Crusher</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">Colossal Weapon | STR (60)</p>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">The absolute peak of Strength builds. Infuse it with Royal Knight's Resolve to flatten any boss's posture in 2-3 heavy hits.</p>
            <span class="pill" style="background: rgba(127, 140, 141, 0.1); color: #7f8c8d; border: 1px solid #7f8c8d; font-size: 0.8rem;">Altus Plateau (Chest)</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #9b59b6; background: rgba(155, 89, 182, 0.05);">
            <h3 style="margin-bottom: 0.5rem;">Milady (DLC)</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">Light Greatsword | STR/DEX</p>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Features the smoothest and fastest moveset in the game. When paired with the Wing Stance, it becomes an elegant combo machine.</p>
            <span class="pill" style="background: rgba(155, 89, 182, 0.1); color: #9b59b6; border: 1px solid #9b59b6; font-size: 0.8rem;">Castle Ensis</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #9b59b6; background: rgba(155, 89, 182, 0.05);">
            <h3 style="margin-bottom: 0.5rem;">Bloodfiend's Arm (DLC)</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">Colossal Weapon | STR/ARC</p>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">When infused with Blood, its fully charged heavy attack causes a blood explosion with absurd Hemorrhage buildup (200+). Melts DLC bosses.</p>
            <span class="pill" style="background: rgba(155, 89, 182, 0.1); color: #9b59b6; border: 1px solid #9b59b6; font-size: 0.8rem;">Prospect Town</span>
          </div>

        </div>
      </section>

      <section class="guide-section reveal" id="shields" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #95a5a6; border-bottom: 1px solid rgba(149, 165, 166, 0.2); padding-bottom: 0.5rem;">2. S-Tier Shields (Defense & Parry)</h2>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Shield Name</th>
                <th>Category</th>
                <th>Why it's Meta</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Fingerprint Stone Shield</strong></td>
                <td><span style="color:#7f8c8d;">Greatshield</span></td>
                <td>The ultimate wall. It has the highest Guard Boost in the game. When upgraded and paired with the Greatshield Talisman, attacking enemies will bounce off you while consuming almost zero stamina.</td>
              </tr>
              <tr>
                <td><strong>Brass Shield</strong></td>
                <td><span style="color:#f1c40f;">Medium Shield</span></td>
                <td>The best medium shield. It has 100% physical damage negation, low stat requirements, and the highest Guard Boost among medium shields. You can farm it from soldiers in Limgrave.</td>
              </tr>
              <tr>
                <td><strong>Buckler</strong></td>
                <td><span style="color:#e74c3c;">Small Shield</span></td>
                <td>Equipped with the unique "Buckler Parry" skill. It has the most generous active parry frames in the game, making it the absolute best tool for parrying difficult bosses like Crucible Knights.</td>
              </tr>
              <tr>
                <td><strong>Erdtree Greatshield</strong></td>
                <td><span style="color:#7f8c8d;">Greatshield</span></td>
                <td>Features the "Golden Retaliation" skill. It allows you to parry incoming magic spells or incantations and fire them back as a devastating golden laser.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="catalysts" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #3498db; border-bottom: 1px solid rgba(52, 152, 219, 0.2); padding-bottom: 0.5rem;">3. Best Staffs & Seals (For Casters)</h2>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Catalyst Name</th>
                <th>Type</th>
                <th>Why it's the Best</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Meteorite Staff</strong></td>
                <td><span style="color:#3498db;">Glintstone Staff</span></td>
                <td>The ultimate early-game staff. Has S-scaling in INT by default and boosts Gravity magic (like Rock Sling). Cannot be upgraded, so replace it mid-game.</td>
              </tr>
              <tr>
                <td><strong>Carian Regal Scepter</strong></td>
                <td><span style="color:#3498db;">Glintstone Staff</span></td>
                <td>The best overall endgame staff for pure Mages (60+ INT). It offers top-tier damage scaling without increasing the FP cost of your spells.</td>
              </tr>
              <tr>
                <td><strong>Lusat's Glintstone Staff</strong></td>
                <td><span style="color:#3498db;">Glintstone Staff</span></td>
                <td>The highest damage output in the entire game, perfect for one-shotting bosses with Comet Azur. <em>Drawback:</em> Spells cost 50% more FP.</td>
              </tr>
              <tr>
                <td><strong>Erdtree Seal</strong></td>
                <td><span style="color:#f1c40f;">Sacred Seal</span></td>
                <td>The absolute best seal for pure Faith builds (60+ FAI). It has the highest Incantation Scaling in the late game.</td>
              </tr>
              <tr>
                <td><strong>Dragon Communion Seal</strong></td>
                <td><span style="color:#f1c40f;">Sacred Seal</span></td>
                <td>Scales primarily with Arcane (S-Tier). This is the meta seal for Bleed/Dragon builds, as your offensive dragon breaths will hit like a truck.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="ashes-of-war" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #e67e22; border-bottom: 1px solid rgba(230, 126, 34, 0.2); padding-bottom: 0.5rem;">4. Best Ashes of War</h2>
        <p style="margin-bottom: 1.5rem;">These skills can be applied to standard weapons to completely change your playstyle.</p>

        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
          
          <div class="guide-card-item reveal" style="border-top: 3px solid #2ecc71;">
            <h3 style="margin-bottom: 0.5rem;">Bloodhound's Step</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Grants a massive, invisible quickstep dodge. It provides more invincibility frames and covers more distance than a standard roll, making dodging lethal boss combos trivial.</p>
            <span class="pill" style="background: rgba(46, 204, 113, 0.1); color: #2ecc71; border: 1px solid #2ecc71; font-size: 0.8rem;">Dropped by: Night's Cavalry (Dragonbarrow)</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #e67e22;">
            <h3 style="margin-bottom: 0.5rem;">Lion's Claw</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">A heavy front-flip slam. Once the animation starts, you have infinite hyper-armor (you cannot be interrupted). It deals massive posture damage, quickly staggering bosses.</p>
            <span class="pill" style="background: rgba(230, 126, 34, 0.1); color: #e67e22; border: 1px solid #e67e22; font-size: 0.8rem;">Dropped by: Lion Guardian (Fort Gael)</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #c0392b;">
            <h3 style="margin-bottom: 0.5rem;">Seppuku</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">You stab yourself, draining some HP to coat your weapon in blood. This drastically increases attack power and Bleed buildup. Essential for dual-wielding bleed builds.</p>
            <span class="pill" style="background: rgba(231, 76, 60, 0.1); color: #e74c3c; border: 1px solid #e74c3c; font-size: 0.8rem;">Location: Invisible Scarab (Freezing Lake)</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #3498db;">
            <h3 style="margin-bottom: 0.5rem;">Carian Retaliation</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Applied to shields. It sweeps away hostile spells and turns them into glintblades that auto-target enemies. It also functions as a normal parry with excellent timing frames.</p>
            <span class="pill" style="background: rgba(52, 152, 219, 0.1); color: #3498db; border: 1px solid #3498db; font-size: 0.8rem;">Location: Pidia (Caria Manor)</span>
          </div>

        </div>
      </section>

      <section class="guide-section reveal" id="legendary" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">5. Legendary Armaments (Trophy)</h2>
        <p style="margin-bottom: 1.5rem;">Collect all 9 to unlock the "Legendary Armaments" achievement.</p>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
            <div class="guide-card-item reveal" style="padding: 1rem; text-align: center;"><h4 style="color:var(--gold); margin:0;">Dark Moon Greatsword</h4><p style="font-size:0.8rem; margin-top:5px; color:#888;">Ranni's Questline</p></div>
            <div class="guide-card-item reveal" style="padding: 1rem; text-align: center;"><h4 style="color:var(--gold); margin:0;">Sword of Night and Flame</h4><p style="font-size:0.8rem; margin-top:5px; color:#888;">Caria Manor</p></div>
            <div class="guide-card-item reveal" style="padding: 1rem; text-align: center;"><h4 style="color:var(--gold); margin:0;">Ruins Greatsword</h4><p style="font-size:0.8rem; margin-top:5px; color:#888;">Redmane Castle</p></div>
            <div class="guide-card-item reveal" style="padding: 1rem; text-align: center;"><h4 style="color:var(--gold); margin:0;">Marais Executioner's Sword</h4><p style="font-size:0.8rem; margin-top:5px; color:#888;">The Shaded Castle</p></div>
            <div class="guide-card-item reveal" style="padding: 1rem; text-align: center; border: 1px solid #e74c3c; background: rgba(231, 76, 60, 0.05);"><h4 style="color:#e74c3c; margin:0;">Bolt of Gransax</h4><p style="font-size:0.8rem; margin-top:5px; color:#e74c3c;">Leyndell (Missable!)</p></div>
            <div class="guide-card-item reveal" style="padding: 1rem; text-align: center;"><h4 style="color:var(--gold); margin:0;">Eclipse Shotel</h4><p style="font-size:0.8rem; margin-top:5px; color:#888;">Castle Sol</p></div>
            <div class="guide-card-item reveal" style="padding: 1rem; text-align: center;"><h4 style="color:var(--gold); margin:0;">Golden Order Greatsword</h4><p style="font-size:0.8rem; margin-top:5px; color:#888;">Cave of the Forlorn</p></div>
            <div class="guide-card-item reveal" style="padding: 1rem; text-align: center;"><h4 style="color:var(--gold); margin:0;">Grafted Blade Greatsword</h4><p style="font-size:0.8rem; margin-top:5px; color:#888;">Castle Morne</p></div>
            <div class="guide-card-item reveal" style="padding: 1rem; text-align: center;"><h4 style="color:var(--gold); margin:0;">Devourer's Scepter</h4><p style="font-size:0.8rem; margin-top:5px; color:#888;">Farum Azula</p></div>
        </div>
      </section>

      <section class="guide-section reveal" id="armor" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">6. Best Armor Sets (Melee & Mages)</h2>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
          
          <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02);">
            <h3 style="margin-bottom: 0.5rem;">Bull-Goat Set <span style="font-size:0.8rem; color:#888;">(Melee)</span></h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Offers the highest physical defense and Poise (100) in the entire game. However, it is extremely heavy and will require a massive investment in Endurance.</p>
            <span class="pill" style="background: rgba(255, 255, 255, 0.1); border: 1px solid #888; font-size: 0.8rem;">Location: Patches' Questline</span>
          </div>

          <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02);">
            <h3 style="margin-bottom: 0.5rem;">Veteran's Set <span style="font-size:0.8rem; color:#888;">(Melee)</span></h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">The best poise-to-weight ratio in the base game. It provides excellent defense and an optimal 79 Poise without requiring absurd Endurance.</p>
            <span class="pill" style="background: rgba(255, 255, 255, 0.1); border: 1px solid #888; font-size: 0.8rem;">Location: Enia (After Commander Niall)</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #9b59b6; background: rgba(255,255,255,0.02);">
            <h3 style="margin-bottom: 0.5rem;">Armor of Solitude <span style="font-size:0.8rem; color:#9b59b6;">(DLC)</span></h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">A dark heavy armor set that offers defense almost on par with Bull-Goat but looks ten times better. Provides 96 Poise, the premier heavy armor for the DLC.</p>
            <span class="pill" style="background: rgba(155, 89, 182, 0.1); color: #9b59b6; border: 1px solid #9b59b6; font-size: 0.8rem;">Location: Western Nameless Mausoleum</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #3498db; background: rgba(52, 152, 219, 0.05);">
            <h3 style="margin-bottom: 0.5rem;">Spellblade Set <span style="font-size:0.8rem; color:#3498db;">(Mage)</span></h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Worn by Rogier. Each piece of this set increases the damage of Glintstone weapon skills (like Moonveil's Transient Moonlight) by 2%.</p>
            <span class="pill" style="background: rgba(52, 152, 219, 0.1); color: #3498db; border: 1px solid #3498db; font-size: 0.8rem;">Location: Roundtable Hold</span>
          </div>

        </div>
      </section>

      <section class="guide-section reveal" id="talismans" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">7. Must-Have Talismans</h2>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Talisman</th>
                <th>Effect</th>
                <th>Build Synergy</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Shard of Alexander</strong></td>
                <td>Greatly boosts the attack power of Skills (Ashes of War) by 15%.</td>
                <td>Universal. Best talisman in the game.</td>
              </tr>
              <tr>
                <td><strong>Lord of Blood's Exultation</strong></td>
                <td>Increases attack power by 20% for 20 seconds when blood loss occurs nearby.</td>
                <td>Bleed Builds.</td>
              </tr>
              <tr>
                <td><strong>Dragoncrest Greatshield</strong></td>
                <td>Enormously boosts physical damage negation (20% in PvE).</td>
                <td>Universal. Essential for surviving endgame.</td>
              </tr>
              <tr>
                <td><strong>Rotten Winged Sword Insignia</strong></td>
                <td>Greatly raises attack power with successive attacks (up to 13%).</td>
                <td>Fast hitting weapons (Twinblades, Claws).</td>
              </tr>
              <tr>
                <td><strong>Claw Talisman</strong></td>
                <td>Enhances jump attacks by 15%.</td>
                <td>Strength/Colossal jumping builds.</td>
              </tr>
              <tr>
                <td><strong>Graven-Mass Talisman</strong></td>
                <td>Greatly raises potency of sorceries (8%).</td>
                <td><span style="color:#3498db;">Pure Intelligence Mage builds.</span></td>
              </tr>
              <tr>
                <td><strong>Radagon Icon</strong></td>
                <td>Shortens the casting time of sorceries and incantations.</td>
                <td><span style="color:#3498db;">All Casters (PvP and PvE).</span></td>
              </tr>
              <tr>
                <td><strong>Two-Handed Sword Talisman</strong> <span style="color:#9b59b6; font-size:0.8rem;">(DLC)</span></td>
                <td>Enhances attacks with two-handed weapons by 15%.</td>
                <td><span style="color:#9b59b6;">Colossal Weapons, Greatswords.</span></td>
              </tr>
              <tr>
                <td><strong>Two-Headed Turtle Talisman</strong> <span style="color:#9b59b6; font-size:0.8rem;">(DLC)</span></td>
                <td>Greatly raises stamina recovery speed (+22.5/s).</td>
                <td><span style="color:#9b59b6;">Aggressive melee builds and shields.</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

    </main>
  </div>
</div>

<?php 
// 4. Load the footer
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>