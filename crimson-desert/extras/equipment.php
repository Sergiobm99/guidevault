<?php 
$parentGuide = [
    'name' => 'Crimson Desert',
    'url'  => '/crimson-desert/index.php'
];
$pageTitle = "Equipment & Weapons Database | Crimson Desert Guide";
$pageDesc = "Complete database of all Mythic weapons, Legendary armor sets, relics, and upgrade materials in Crimson Desert.";
$bodyClass = "theme-crimson-desert"; 

// Cargamos el header desde la raíz
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(180, 70, 20, 0.2) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(40, 45, 55, 0.8) 0%, transparent 60%), linear-gradient(180deg, #0a0b0d 0%, #14161a 60%, #0a0b0d 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Equipment</span>
      </nav>
      <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">GAME DATABASE</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem;">Equipment Database</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">Mythic Weapons, Legendary Armor, and Relics</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Contents</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#weapons" style="color: var(--text-dim); transition: color 0.2s;">1. Mythic Weapons</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#armor" style="color: var(--text-dim); transition: color 0.2s;">2. Legendary Armor Sets</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#relics" style="color: var(--text-dim); transition: color 0.2s;">3. Relics & Accessories</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#runes" style="color: var(--text-dim); transition: color 0.2s;">4. Rune Socketing</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#materials" style="color: var(--text-dim); transition: color 0.2s;">5. Upgrade Materials</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#builds" style="color: var(--text-dim); transition: color 0.2s;">6. Endgame Synergies</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#hidden-artifacts" style="color: var(--text-dim); transition: color 0.2s;">7. Hidden Artifacts</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="weapons" style="margin-bottom: 4rem;">
        <div class="callout warning" style="border-left: 4px solid #f1c40f; background: rgba(241, 196, 15, 0.1); padding: 1.5rem; margin-bottom: 3rem;">
          <span class="callout-label" style="color: #f1c40f; font-weight: bold; text-transform: uppercase;">Durability Warning</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Unlike standard RPGs, weapons in Crimson Desert have durability. However, <strong>Mythic Weapons cannot break completely</strong>—they only lose 50% of their attack power when durability hits zero. Repair them at Camp or Blacksmiths.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. Mythic Weapons (Top Tier)</h2>
        <p class="guide-section-intro" style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Mythic weapons possess unique attack animations and passive effects that define entire builds. They cannot be crafted; they must be found or earned.</p>

        <div class="guide-accordion open" id="acc-wp-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-wp-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">⚔️ The King's Justice (Greatsword)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <ul style="padding-left: 1.5rem; color: #ccc; line-height: 1.8; margin-bottom: 1rem;">
                <li><strong>Base Attack:</strong> 120 (Slash/Blunt)</li>
                <li><strong>Passive Effect:</strong> <em style="color: var(--gold-light);">Unbreakable Will</em> - Taking damage while charging a heavy attack increases the attack's damage by 300%.</li>
                <li><strong>Location:</strong> Demeniss Royal Vault (Requires Master Key).</li>
              </ul>
              <p style="font-size: 0.9rem; color: #aaa; margin: 0; border-top: 1px solid rgba(255,255,255,0.05); padding-top: 0.5rem;">Best paired with the Greymane Commander armor set for ultimate tank builds.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-wp-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-wp-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🗡️ Corsair's Cutlass (Curved Sword)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <ul style="padding-left: 1.5rem; color: #ccc; line-height: 1.8; margin-bottom: 1rem;">
                <li><strong>Base Attack:</strong> 42 (Slash)</li>
                <li><strong>Passive Effect:</strong> <em style="color: var(--gold-light);">Bloodletting</em> - Consecutive strikes on the same target increase attack speed by 5% (Stacks up to 10 times). Bleed effects last twice as long.</li>
                <li><strong>Location:</strong> Dropped by the Pirate King boss in Delesyia Coast.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-wp-3" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-wp-3')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🏹 Stormcaller Longbow (Ranged)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <ul style="padding-left: 1.5rem; color: #ccc; line-height: 1.8; margin-bottom: 1rem;">
                <li><strong>Base Attack:</strong> 75 (Pierce)</li>
                <li><strong>Passive Effect:</strong> <em style="color: var(--gold-light);">Chain Lightning</em> - Charged shots do not consume arrows and chain lightning to 3 nearby enemies.</li>
                <li><strong>Location:</strong> Reward for completing Yann's final loyalty quest.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-wp-4" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-wp-4')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #9b59b6; border-bottom: 1px solid rgba(155,89,182,0.2);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🌌 Abyssal Scythe (Polearm)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <ul style="padding-left: 1.5rem; color: #ccc; line-height: 1.8; margin-bottom: 1rem;">
                <li><strong>Base Attack:</strong> 110 (Slash/Magic)</li>
                <li><strong>Passive Effect:</strong> <em style="color: #9b59b6;">Soul Harvest</em> - Executing enemies with this weapon restores 20% Axiom Gauge and grants a temporary magic shield.</li>
                <li><strong>Location:</strong> Forged using the Void-Touched Obsidian (Defeat the final Void Weaver).</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-wp-5" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-wp-5')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #e74c3c; border-bottom: 1px solid rgba(231,76,60,0.2);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🩸 Crimson Fang (Dagger)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <ul style="padding-left: 1.5rem; color: #ccc; line-height: 1.8; margin-bottom: 1rem;">
                <li><strong>Base Attack:</strong> 35 (Pierce)</li>
                <li><strong>Passive Effect:</strong> <em style="color: #e74c3c;">Vampiric Kiss</em> - Critical hits heal the user for 15% of the damage dealt. Backstabs are guaranteed critical hits.</li>
                <li><strong>Location:</strong> Hidden behind the waterfall in the Hernand Ravine.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="armor" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">2. Legendary Armor Sets</h2>
        <p class="guide-section-intro" style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Equipping 3 or 5 pieces of the same armor set unlocks powerful Set Bonuses.</p>

        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
            
            <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #3498db;">
                <h3 style="color: #3498db; margin-top: 0; font-family: var(--font-display); font-size: 1.5rem;">Fortress Plate (Heavy)</h3>
                <ul style="padding-left: 1rem; color: #ccc; font-size: 0.95rem;">
                    <li><strong>3-Piece Bonus:</strong> +30% Physical Defense.</li>
                    <li><strong>5-Piece Bonus:</strong> You cannot be staggered by attacks from behind. Perfect Blocks reflect 50% damage.</li>
                    <li><strong>Acquisition:</strong> Smelted at the camp using 50x Steel Ingots and 5x Dragon Scales.</li>
                </ul>
            </div>

            <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #e74c3c;">
                <h3 style="color: #e74c3c; margin-top: 0; font-family: var(--font-display); font-size: 1.5rem;">Assassin of Pailune (Light)</h3>
                <ul style="padding-left: 1rem; color: #ccc; font-size: 0.95rem;">
                    <li><strong>3-Piece Bonus:</strong> Crouching movement speed increased by 50%.</li>
                    <li><strong>5-Piece Bonus:</strong> The first strike on an unaware enemy deals 300% critical damage.</li>
                    <li><strong>Acquisition:</strong> Purchased from the Midnight Smuggler in Pailune.</li>
                </ul>
            </div>

            <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #9b59b6;">
                <h3 style="color: #9b59b6; margin-top: 0; font-family: var(--font-display); font-size: 1.5rem;">Scholar of the Void (Robes)</h3>
                <ul style="padding-left: 1rem; color: #ccc; font-size: 0.95rem;">
                    <li><strong>3-Piece Bonus:</strong> Axiom abilities cost 20% less gauge.</li>
                    <li><strong>5-Piece Bonus:</strong> Whenever you use an Axiom Skill, your dodge roll becomes a short-range teleport for 5 seconds.</li>
                    <li><strong>Acquisition:</strong> Found in chests scattered across Master-Level Abyss Rifts.</li>
                </ul>
            </div>

            <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid var(--gold);">
                <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.5rem;">Desert Scorpion Shell (Medium)</h3>
                <ul style="padding-left: 1rem; color: #ccc; font-size: 0.95rem;">
                    <li><strong>3-Piece Bonus:</strong> 100% Immunity to Poison.</li>
                    <li><strong>5-Piece Bonus:</strong> Melee attackers take poison damage over time.</li>
                    <li><strong>Acquisition:</strong> Crafted from Sandstorm Scorpion chitin.</li>
                </ul>
            </div>

        </div>
      </section>

      <section class="guide-section reveal" id="relics" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">3. Relics & Accessories</h2>
        <p class="guide-section-intro" style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Kliff can equip up to 2 Rings and 1 Relic. These provide massive stat boosts but often come with drawbacks.</p>
        
        <div class="guide-table-wrap">
          <table class="guide-table" style="background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold); color: var(--gold);">
                <th style="padding: 1rem;">Item Name</th>
                <th style="padding: 1rem;">Slot</th>
                <th style="padding: 1rem;">Effect</th>
                <th style="padding: 1rem;">Trade-off</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>The Raven's Ring</strong></td>
                <td style="padding: 1rem;">Ring</td>
                <td style="padding: 1rem;">+25% Critical Damage.</td>
                <td style="padding: 1rem; color: #e74c3c;">-10% Max Health.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Ring of the Vanguard</strong></td>
                <td style="padding: 1rem;">Ring</td>
                <td style="padding: 1rem;">+40% Guard Stability (Shield blocks cost less stamina).</td>
                <td style="padding: 1rem; color: #e74c3c;">-10% Movement Speed.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Abyss Memory Shard</strong></td>
                <td style="padding: 1rem;">Relic</td>
                <td style="padding: 1rem;">Instantly revives Kliff upon death with 20% HP (10 min cooldown).</td>
                <td style="padding: 1rem; color: #e74c3c;">Consumes all Axiom Gauge on revive.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Akapen Sand-Glass</strong></td>
                <td style="padding: 1rem;">Relic</td>
                <td style="padding: 1rem;">Perfect dodges slow time for 4 seconds instead of 2.</td>
                <td style="padding: 1rem; color: #e74c3c;">Dodging costs 2x Stamina.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="runes" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">4. Rune & Gem Socketing</h2>
        <p class="guide-section-intro" style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Masterwork weapons have empty slots. Visit the Enchanter in Demeniss to socket gems. You can extract gems later, but it costs Gold.</p>

        <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 2rem;">
            <div style="flex: 1 1 300px; background: rgba(231, 76, 60, 0.05); border: 1px solid #e74c3c; padding: 1.5rem; border-radius: 4px;">
                <h4 style="color: #e74c3c; margin-top: 0;">🔴 Rubies (Offense)</h4>
                <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Flawless Ruby: +15 Base Attack Power.<br>Cracked Ruby: +5 Base Attack Power.</p>
            </div>
            <div style="flex: 1 1 300px; background: rgba(52, 152, 219, 0.05); border: 1px solid #3498db; padding: 1.5rem; border-radius: 4px;">
                <h4 style="color: #3498db; margin-top: 0;">🔵 Sapphires (Defense)</h4>
                <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Flawless Sapphire: +20 Guard Stability.<br>Cracked Sapphire: +5 Guard Stability.</p>
            </div>
            <div style="flex: 1 1 300px; background: rgba(155, 89, 182, 0.05); border: 1px solid #9b59b6; padding: 1.5rem; border-radius: 4px;">
                <h4 style="color: #9b59b6; margin-top: 0;">🟣 Amethysts (Magic)</h4>
                <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Flawless Amethyst: +10% Axiom damage.<br>Cracked Amethyst: +3% Axiom damage.</p>
            </div>
        </div>
      </section>

      <section class="guide-section reveal" id="materials" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">5. Essential Upgrade Materials</h2>
        <div class="guide-table-wrap">
          <table class="guide-table" style="background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold); color: var(--gold);">
                <th style="padding: 1rem;">Material</th>
                <th style="padding: 1rem;">Usage</th>
                <th style="padding: 1rem;">Best Farming Spot</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Steel Ingot</strong></td>
                <td style="padding: 1rem;">Weapon Upgrades (Lvl 4-7)</td>
                <td style="padding: 1rem;">Hernand Smelter (Craft from 3x Iron Ore) or Bandit Camps.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Flawless Leather</strong></td>
                <td style="padding: 1rem;">Armor Upgrades (Lvl 4-7)</td>
                <td style="padding: 1rem;">Highland Griffons in Kweiden.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Pure Void Matter</strong></td>
                <td style="padding: 1rem;">Max Level Weapon Ascensions</td>
                <td style="padding: 1rem;">Guaranteed drop from Abyss Behemoths (Rift Bosses).</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="builds" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">6. Top End-Game Builds (Synergies)</h2>
        <p class="guide-section-intro" style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Putting it all together. These are the most overpowered equipment combinations in the current patch.</p>
        
        <div style="background: var(--dark-1); border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 8px; padding: 2rem; margin-bottom: 2rem; position: relative; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: var(--gold);"></div>
            <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.8rem;">Build 1: The Immortal Juggernaut</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 1.5rem;">
                <ul style="list-style: none; padding: 0; color: #ccc; margin: 0; font-size: 0.95rem; line-height: 1.6;">
                    <li style="margin-bottom: 0.5rem;"><strong>Weapon:</strong> The King's Justice (Socketed with Sapphires)</li>
                    <li style="margin-bottom: 0.5rem;"><strong>Armor:</strong> Fortress Plate Set (5-Piece)</li>
                    <li><strong>Relic:</strong> Ring of the Vanguard</li>
                </ul>
                <p style="font-size: 0.85rem; color: var(--text-dim); margin: 0; border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                    <strong>Playstyle:</strong> You never dodge. Hold block to absorb enemy combos (stamina cost is minimal thanks to the Ring and Sapphires). After a Perfect Block, your 5-piece armor bonus reflects damage, and you follow up with an Unbreakable Will heavy attack that deletes boss health bars.
                </p>
            </div>
        </div>

        <div style="background: var(--dark-1); border: 1px solid rgba(155, 89, 182, 0.2); border-radius: 8px; padding: 2rem; position: relative; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: #9b59b6;"></div>
            <h3 style="color: #9b59b6; margin-top: 0; font-family: var(--font-display); font-size: 1.8rem;">Build 2: The Pailune Shadow</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 1.5rem;">
                <ul style="list-style: none; padding: 0; color: #ccc; margin: 0; font-size: 0.95rem; line-height: 1.6;">
                    <li style="margin-bottom: 0.5rem;"><strong>Weapon:</strong> Corsair's Cutlass (Socketed with Void Amethysts)</li>
                    <li style="margin-bottom: 0.5rem;"><strong>Armor:</strong> Assassin of Pailune Set (5-Piece)</li>
                    <li><strong>Relic:</strong> The Raven's Ring</li>
                </ul>
                <p style="font-size: 0.85rem; color: var(--text-dim); margin-top: 1rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem; margin-bottom: 0;">
                    <strong>Playstyle:</strong> Use stealth to approach. Your first strike will deal 300% critical damage (Armor bonus) and apply bleed. Subsequent hits deal +50% damage due to the Cutlass passive.
                </p>
            </div>
        </div>
      </section>

      <section class="guide-section reveal" id="hidden-artifacts" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">7. Hidden Artifacts (Secret Boss Drops)</h2>
        <p class="guide-section-intro" style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">These artifacts are not tied to any quest and only drop from secret bosses hidden deep within the world.</p>

        <div class="guide-table-wrap">
          <table class="guide-table" style="background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold); color: var(--gold);">
                <th style="padding: 1rem;">Artifact Name</th>
                <th style="padding: 1rem;">Type</th>
                <th style="padding: 1rem;">Unique Effect</th>
                <th style="padding: 1rem;">Dropped By</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Tear of the Goddess</strong></td>
                <td style="padding: 1rem;">Relic</td>
                <td style="padding: 1rem;">Once per day, resurrects Kliff upon death with 50% HP.</td>
                <td style="padding: 1rem;">The Forgotten Matriarch (Hidden Cave in Kweiden)</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Abyssal Lantern</strong></td>
                <td style="padding: 1rem;">Off-hand</td>
                <td style="padding: 1rem;">Reveals invisible enemies and hidden paths permanently.</td>
                <td style="padding: 1rem;">Shadow of the First King (Demeniss Catacombs)</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Sand-worn Compass</strong></td>
                <td style="padding: 1rem;">Relic</td>
                <td style="padding: 1rem;">Prevents losing direction during Desert Sandstorms.</td>
                <td style="padding: 1rem;">Giant Sand Crawler (Deep Akapen)</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="chapter-nav" style="margin-top: 3rem;">
            <a href="/crimson-desert/extras/crafting.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Crafting & Cooking</a>
            <a href="/crimson-desert/extras/fashion.php" class="btn btn-gold">Next: Cosmetics & Mounts →</a>
        </div>

      </section>

    </main>
  </div>

<script>
function toggleAcc(id) {
    const acc = document.getElementById(id);
    if (acc) {
        acc.classList.toggle('open');
    }
}
</script>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>