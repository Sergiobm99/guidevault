<?php 
$pageTitle = "Equipment & Weapons Database | Crimson Desert Guide";
$pageDesc = "Complete database of all Mythic weapons, Legendary armor sets, relics, and upgrade materials in Crimson Desert.";
$bodyClass = "theme-crimson-desert"; 

// Cargamos el header desde la raíz
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
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
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">Mythic Weapons, Armor Sets, Relics and the Forge</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Contents</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#mythic" style="color: var(--text-dim); transition: color 0.2s;">1. Mythic Weapons</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#armor" style="color: var(--text-dim); transition: color 0.2s;">2. Legendary Armor Sets</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#relics" style="color: var(--text-dim); transition: color 0.2s;">3. Relics & Accessories</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#runes" style="color: var(--text-dim); transition: color 0.2s;">4. Rune & Gem Socketing</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#materials" style="color: var(--text-dim); transition: color 0.2s;">5. Upgrade Materials</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#builds" style="color: var(--text-dim); transition: color 0.2s;">6. End-Game Builds</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="mythic" style="margin-bottom: 4rem;">
        <div class="callout info" style="margin-bottom: 3rem;">
          <span class="callout-label" style="color: var(--gold);">The Blacksmith's Forge</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Weapons and armor in Crimson Desert can be upgraded up to <strong>Level 10 (+10)</strong>. Standard upgrades require Iron and Silver, but upgrading equipment past +7 requires rare <em>Abyssal Ingots</em>, which only drop from Rift Bosses or secret chests.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. Mythic Weapons (Top Tier)</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Mythic weapons are the highest rarity (Gold/Yellow text). They possess unique passive abilities that cannot be found on standard crafted gear.</p>

        <div class="guide-table-wrap">
          <table class="guide-table" style="background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold); color: var(--gold);">
                <th style="padding: 1rem;">Weapon</th>
                <th style="padding: 1rem;">Type / Scaling</th>
                <th style="padding: 1rem;">Passive Ability</th>
                <th style="padding: 1rem;">Location</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>The King's Justice</strong></td>
                <td style="padding: 1rem;">Greatsword <br><span class="pill pill-gold" style="background: rgba(241, 196, 15, 0.2); color: #ffd700; border: 1px solid #ffd700; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem; display: inline-block; margin-top: 0.5rem;">STR: S</span></td>
                <td style="padding: 1rem;">20% chance to execute enemies below 30% health instantly.</td>
                <td style="padding: 1rem;">Automatic reward for defeating the Corrupted King (Chapter 8).</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Sun-Kissed Blade</strong></td>
                <td style="padding: 1rem;">Longsword <br><span class="pill pill-red" style="background: rgba(231, 76, 60, 0.2); color: #e74c3c; border: 1px solid #e74c3c; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem; display: inline-block; margin-top: 0.5rem;">DEX: A | MAG: B</span></td>
                <td style="padding: 1rem;">Applies <em>Burn</em> status on every 3rd consecutive hit.</td>
                <td style="padding: 1rem;">Hidden chest at Akapen Peak (Chapter 4).</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Corsair's Cutlass</strong></td>
                <td style="padding: 1rem;">Curved Sword <br><span class="pill pill-blue" style="background: rgba(52, 152, 219, 0.2); color: #3498db; border: 1px solid #3498db; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem; display: inline-block; margin-top: 0.5rem;">DEX: S</span></td>
                <td style="padding: 1rem;">+50% damage against bleeding targets.</td>
                <td style="padding: 1rem;">Inside the sunken galleon off the Delesyia Coast (Chapter 5).</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Whisper of the Wind</strong></td>
                <td style="padding: 1rem;">War Bow <br><span class="pill pill-blue" style="background: rgba(52, 152, 219, 0.2); color: #3498db; border: 1px solid #3498db; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem; display: inline-block; margin-top: 0.5rem;">DEX: S | STR: C</span></td>
                <td style="padding: 1rem;">Arrows pierce through multiple enemies and ignore wooden shields.</td>
                <td style="padding: 1rem;">Reward for completing the "Elven Ruins" puzzle (Chapter 6).</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Blade of the Origin</strong></td>
                <td style="padding: 1rem;">Katana / Curved <br><span class="pill" style="background: rgba(155, 89, 182, 0.2); color: #9b59b6; border: 1px solid #9b59b6; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem; display: inline-block; margin-top: 0.5rem;">ALL: A</span></td>
                <td style="padding: 1rem;">Deals double damage against Abyss-type enemies.</td>
                <td style="padding: 1rem;">Secret rift during the Gauntlet of Shadows (Chapter 9).</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="armor" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">2. Legendary Armor Sets</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Wearing 3 or 5 pieces of the same armor set grants powerful synergy bonuses. Here are the most effective endgame sets.</p>

        <div class="guide-accordion open" id="acc-eq-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-eq-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🛡️ Greymane Commander Set (Heavy)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">The ultimate tank armor, designed to keep Kliff alive while leading mercenaries.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.8;">
                <li style="margin-bottom: 0.5rem;"><strong>3-Piece Bonus:</strong> Reduces all incoming physical damage by 15%.</li>
                <li style="margin-bottom: 0.5rem;"><strong>5-Piece Bonus:</strong> <em>"Commander's Presence"</em> - Your mercenaries gain infinite stamina and cannot be knocked down.</li>
                <li><strong>How to get:</strong> Buy from the Quartermaster in Hernand after reaching Maximum Reputation with the Greymanes.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-eq-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-eq-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🥷 Assassin of Pailune Set (Light)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Designed for stealth and critical hit builds. Excellent for the Abyss Weaver playstyle.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.8;">
                <li style="margin-bottom: 0.5rem;"><strong>3-Piece Bonus:</strong> Movement speed increased by 20%. Footsteps are completely silent.</li>
                <li style="margin-bottom: 0.5rem;"><strong>5-Piece Bonus:</strong> <em>"Shadow Strike"</em> - The first attack made from stealth deals 300% critical damage.</li>
                <li><strong>How to get:</strong> Found scattered in hidden chests throughout the Pailune Slums and Royal Palace (Chapter 2).</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-eq-3" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-eq-3')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🔥 Volcanic Berserker Set (Medium)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">A high-risk, high-reward set that excels in sustained combat.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.8;">
                <li style="margin-bottom: 0.5rem;"><strong>3-Piece Bonus:</strong> Grants 100% immunity to environmental Burn damage.</li>
                <li style="margin-bottom: 0.5rem;"><strong>5-Piece Bonus:</strong> <em>"Blood Boil"</em> - As your health drops, your attack speed and damage increase (up to +40% at low health).</li>
                <li><strong>How to get:</strong> Farmed from elite enemies in Mount Harsand (Chapter 6).</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="relics" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">3. Relics & Accessories</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Kliff can equip up to <strong>two rings</strong> and <strong>one amulet</strong>. These accessories provide massive utility bonuses.</p>

        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border: 1px solid rgba(255, 215, 0, 0.3);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">💍</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Raven's Ring</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Effect:</strong> Reveals invisible enemies and highlights hidden treasures through walls.<br><br><strong>Note:</strong> This is a highly missable item from Chapter 3 required for a Trophy.</p>
          </div>
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f39c12;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">📿</span>
            <h3 style="color: #f39c12; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Amulet of the Sun</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Effect:</strong> Gradually regenerates HP during the daytime. Provides immunity to blindness.<br><br><strong>Location:</strong> Dropped by the Desert Griffin (World Boss).</p>
          </div>
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🩸</span>
            <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Blood-Drinker Ring</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Effect:</strong> 5% of all physical damage dealt is returned as Health (Lifesteal).<br><br><strong>Location:</strong> Purchased from the Black Market Dealer in Demeniss.</p>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="runes" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">4. Rune & Gem Socketing</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Masterwork weapons and Legendary armor pieces come with empty sockets. Visit the Jeweler in any major city to slot these gems.</p>

        <div class="companion-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #e74c3c;">
                <h4 style="color: #e74c3c; margin-bottom: 0.5rem; font-family: var(--font-display); font-size: 1.3rem;">Crimson Ruby</h4>
                <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Weapon:</strong> +8% Flat Physical Damage.<br><strong>Armor:</strong> +10% Resistance to Bleed.</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #3498db;">
                <h4 style="color: #3498db; margin-bottom: 0.5rem; font-family: var(--font-display); font-size: 1.3rem;">Azure Sapphire</h4>
                <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Weapon:</strong> +15% Axiom (Magic) Damage.<br><strong>Armor:</strong> +50 Max Mana (MP).</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #9b59b6;">
                <h4 style="color: #9b59b6; margin-bottom: 0.5rem; font-family: var(--font-display); font-size: 1.3rem;">Void Amethyst</h4>
                <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Weapon:</strong> Adds Abyss Corruption to attacks.<br><strong>Armor:</strong> +15% Abyss Damage Reduction.</p>
            </div>
        </div>
      </section>

      <section class="guide-section reveal" id="materials" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">5. Essential Upgrade Materials</h2>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">💎</span>
            <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Abyssal Ingot</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Use:</strong> Upgrades weapons from +7 to +10.<br><strong>Farming Spot:</strong> Master-Level Abyss Rifts (Unlocked after Chapter 7). Guaranteed drop from Rift Bosses.</p>
          </div>
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🐉</span>
            <h3 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Pristine Dragon Scale</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Use:</strong> Upgrades Heavy Armor to Maximum Tier.<br><strong>Farming Spot:</strong> Kweiden Peaks. Can be harvested from the frozen corpses of lesser drakes near the Ice Caves.</p>
          </div>
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #bdc3c7;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🧪</span>
            <h3 style="color: #bdc3c7; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Liquid Mercury</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Use:</strong> Required to craft Elemental Arrows (Fire, Ice, Lightning) and some elixirs.<br><strong>Farming Spot:</strong> Buy directly from the Midnight Peddler or farm from the mechanical enemies in Delesyia Coast.</p>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="builds" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">6. Top End-Game Builds (Synergies)</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Combine specific weapons, armor sets, and relics to create overpowered character builds.</p>

        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
            <div class="guide-card-item" style="border: 1px solid rgba(231, 76, 60, 0.4); background: linear-gradient(180deg, rgba(231, 76, 60, 0.05) 0%, var(--dark-2) 100%); padding: 1.5rem; border-radius: 4px;">
                <span class="label" style="color: #e74c3c; font-weight: bold; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">The Immortal Berserker</span>
                <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.5rem; margin-top: 0.5rem; margin-bottom: 1rem;">Lifesteal & Raw Power</h3>
                <ul style="font-size: 0.9rem; color: #ccc; padding-left: 1.2rem; line-height: 1.6;">
                    <li style="margin-bottom: 0.5rem;"><strong>Weapon:</strong> The King's Justice (Socketed with Crimson Rubies)</li>
                    <li style="margin-bottom: 0.5rem;"><strong>Armor:</strong> Volcanic Berserker Set (5-Piece)</li>
                    <li><strong>Relic:</strong> Blood-Drinker Ring</li>
                </ul>
                <p style="font-size: 0.85rem; color: var(--text-dim); margin-top: 1rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem; margin-bottom: 0;">
                    <strong>Playstyle:</strong> Let your health drop to trigger the <em>Blood Boil</em> armor bonus (+40% damage/speed). Your massive damage combined with the Blood-Drinker Ring will instantly heal you back up.
                </p>
            </div>

            <div class="guide-card-item" style="border: 1px solid rgba(52, 152, 219, 0.4); background: linear-gradient(180deg, rgba(52, 152, 219, 0.05) 0%, var(--dark-2) 100%); padding: 1.5rem; border-radius: 4px;">
                <span class="label" style="color: #3498db; font-weight: bold; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">The Void Assassin</span>
                <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.5rem; margin-top: 0.5rem; margin-bottom: 1rem;">Stealth & Execution</h3>
                <ul style="font-size: 0.9rem; color: #ccc; padding-left: 1.2rem; line-height: 1.6;">
                    <li style="margin-bottom: 0.5rem;"><strong>Weapon:</strong> Corsair's Cutlass (Socketed with Void Amethysts)</li>
                    <li style="margin-bottom: 0.5rem;"><strong>Armor:</strong> Assassin of Pailune Set (5-Piece)</li>
                    <li><strong>Relic:</strong> The Raven's Ring</li>
                </ul>
                <p style="font-size: 0.85rem; color: var(--text-dim); margin-top: 1rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem; margin-bottom: 0;">
                    <strong>Playstyle:</strong> Use stealth to approach. Your first strike will deal 300% critical damage (Armor bonus) and apply bleed. Subsequent hits deal +50% damage due to the Cutlass passive.
                </p>
            </div>
        </div>

        <div class="chapter-nav">
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
// Cargamos el footer desde la raíz
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>