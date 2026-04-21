<?php 
$pageTitle = "Equipment & Weapons Database | Crimson Desert Guide";
$pageDesc = "Complete database of all Mythic weapons, Legendary armor sets, relics, and upgrade materials in Crimson Desert.";

// Cargamos el header desde la raíz
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(180, 70, 20, 0.2) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(40, 45, 55, 0.8) 0%, transparent 60%), linear-gradient(180deg, #0a0b0d 0%, #14161a 60%, #0a0b0d 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Equipment</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Equipment Database</h1>
      <p class="guide-hero-subtitle">Mythic Weapons, Armor Sets, Relics and the Forge</p>
    </div>
  </header>

  <div class="guide-layout" style="grid-template-columns: 1fr; max-width: 950px;">
    <main class="guide-content">

      <section class="guide-section reveal">
        <div class="callout info">
          <span class="callout-label">The Blacksmith's Forge</span>
          <p>Weapons and armor in Crimson Desert can be upgraded up to <strong>Level 10 (+10)</strong>. Standard upgrades require Iron and Silver, but upgrading equipment past +7 requires rare <em>Abyssal Ingots</em>, which only drop from Rift Bosses or secret chests.</p>
        </div>

        <h2 class="guide-section-title" style="margin-top: 4rem;">1. Mythic Weapons (Top Tier)</h2>
        <p>Mythic weapons are the highest rarity (Gold/Yellow text). They possess unique passive abilities that cannot be found on standard crafted gear.</p>

        <div class="guide-table-wrap">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Weapon</th>
                <th>Type / Scaling</th>
                <th>Passive Ability</th>
                <th>Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>The King's Justice</strong></td>
                <td>Greatsword <br><span class="pill pill-gold" style="color: #ffd700; border-color: #ffd700;">STR: S</span></td>
                <td>20% chance to execute enemies below 30% health instantly.</td>
                <td>Automatic reward for defeating the Corrupted King (Chapter 8).</td>
              </tr>
              <tr>
                <td><strong>Sun-Kissed Blade</strong></td>
                <td>Longsword <br><span class="pill pill-red">DEX: A | MAG: B</span></td>
                <td>Applies <em>Burn</em> status on every 3rd consecutive hit.</td>
                <td>Hidden chest at Akapen Peak (Chapter 4).</td>
              </tr>
              <tr>
                <td><strong>Corsair's Cutlass</strong></td>
                <td>Curved Sword <br><span class="pill pill-blue">DEX: S</span></td>
                <td>+50% damage against bleeding targets.</td>
                <td>Inside the sunken galleon off the Delesyia Coast (Chapter 5).</td>
              </tr>
              <tr>
                <td><strong>Whisper of the Wind</strong></td>
                <td>War Bow <br><span class="pill pill-blue">DEX: S | STR: C</span></td>
                <td>Arrows pierce through multiple enemies and ignore wooden shields.</td>
                <td>Reward for completing the "Elven Ruins" puzzle (Chapter 6).</td>
              </tr>
              <tr>
                <td><strong>Blade of the Origin</strong></td>
                <td>Katana / Curved <br><span class="pill" style="color: #9b59b6; border-color: #9b59b6;">ALL: A</span></td>
                <td>Deals double damage against Abyss-type enemies.</td>
                <td>Secret rift during the Gauntlet of Shadows (Chapter 9).</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">2. Legendary Armor Sets</h2>
        <p>Wearing 3 or 5 pieces of the same armor set grants powerful synergy bonuses. Here are the most effective endgame sets.</p>

        <div class="guide-accordion open" id="acc-eq-1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-eq-1')">
            <span class="guide-accordion-label">🛡️ Greymane Commander Set (Heavy)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px">
            <div class="guide-accordion-inner">
              <p>The ultimate tank armor, designed to keep Kliff alive while leading mercenaries.</p>
              <ul style="padding-left: 1.5rem; color: var(--text-dim); line-height: 1.8;">
                <li><strong>3-Piece Bonus:</strong> Reduces all incoming physical damage by 15%.</li>
                <li><strong>5-Piece Bonus:</strong> <em>"Commander's Presence"</em> - Your mercenaries gain infinite stamina and cannot be knocked down.</li>
                <li><strong>How to get:</strong> Buy from the Quartermaster in Hernand after reaching Maximum Reputation with the Greymanes.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-eq-2">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-eq-2')">
            <span class="guide-accordion-label">🥷 Assassin of Pailune Set (Light)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Designed for stealth and critical hit builds. Excellent for the Abyss Weaver playstyle.</p>
              <ul style="padding-left: 1.5rem; color: var(--text-dim); line-height: 1.8;">
                <li><strong>3-Piece Bonus:</strong> Movement speed increased by 20%. Footsteps are completely silent.</li>
                <li><strong>5-Piece Bonus:</strong> <em>"Shadow Strike"</em> - The first attack made from stealth deals 300% critical damage.</li>
                <li><strong>How to get:</strong> Found scattered in hidden chests throughout the Pailune Slums and Royal Palace (Chapter 2).</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-eq-3">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-eq-3')">
            <span class="guide-accordion-label">🔥 Volcanic Berserker Set (Medium)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>A high-risk, high-reward set that excels in sustained combat.</p>
              <ul style="padding-left: 1.5rem; color: var(--text-dim); line-height: 1.8;">
                <li><strong>3-Piece Bonus:</strong> Grants 100% immunity to environmental Burn damage.</li>
                <li><strong>5-Piece Bonus:</strong> <em>"Blood Boil"</em> - As your health drops, your attack speed and damage increase (up to +40% at low health).</li>
                <li><strong>How to get:</strong> Farmed from elite enemies in Mount Harsand (Chapter 6).</li>
              </ul>
            </div>
          </div>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">3. Relics & Accessories</h2>
        <p class="guide-section-intro">Kliff can equip up to <strong>two rings</strong> and <strong>one amulet</strong>. These accessories provide massive utility bonuses.</p>

        <div class="guide-cards">
          <div class="guide-card-item" style="border: 1px solid rgba(255, 215, 0, 0.3);">
            <span class="guide-card-icon">💍</span>
            <h3 style="color: var(--gold);">The Raven's Ring</h3>
            <p style="font-size: 0.9rem;"><strong>Effect:</strong> Reveals invisible enemies and highlights hidden treasures through walls.<br><br><strong>Note:</strong> This is a highly missable item from Chapter 3 required for a Trophy.</p>
          </div>
          <div class="guide-card-item">
            <span class="guide-card-icon">📿</span>
            <h3>Amulet of the Sun</h3>
            <p style="font-size: 0.9rem;"><strong>Effect:</strong> Gradually regenerates HP during the daytime. Provides immunity to blindness.<br><br><strong>Location:</strong> Dropped by the Desert Griffin (World Boss).</p>
          </div>
          <div class="guide-card-item">
            <span class="guide-card-icon">🩸</span>
            <h3>Blood-Drinker Ring</h3>
            <p style="font-size: 0.9rem;"><strong>Effect:</strong> 5% of all physical damage dealt is returned as Health (Lifesteal).<br><br><strong>Location:</strong> Purchased from the Black Market Dealer in Demeniss.</p>
          </div>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">4. Rune & Gem Socketing</h2>
        <p class="guide-section-intro">Masterwork weapons and Legendary armor pieces come with empty sockets. Visit the Jeweler in any major city to slot these gems.</p>

        <div class="companion-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 3rem;">
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #e74c3c;">
                <h4 style="color: #e74c3c; margin-bottom: 0.5rem; font-family: var(--font-display);">Crimson Ruby</h4>
                <p style="font-size: 0.85rem; color: var(--text-dim);"><strong>Weapon:</strong> +8% Flat Physical Damage.<br><strong>Armor:</strong> +10% Resistance to Bleed.</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #3498db;">
                <h4 style="color: #3498db; margin-bottom: 0.5rem; font-family: var(--font-display);">Azure Sapphire</h4>
                <p style="font-size: 0.85rem; color: var(--text-dim);"><strong>Weapon:</strong> +15% Axiom (Magic) Damage.<br><strong>Armor:</strong> +50 Max Mana (MP).</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #9b59b6;">
                <h4 style="color: #9b59b6; margin-bottom: 0.5rem; font-family: var(--font-display);">Void Amethyst</h4>
                <p style="font-size: 0.85rem; color: var(--text-dim);"><strong>Weapon:</strong> Adds Abyss Corruption to attacks.<br><strong>Armor:</strong> +15% Abyss Damage Reduction.</p>
            </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title">5. Essential Upgrade Materials</h2>
        
        <div class="guide-cards reveal">
          <div class="guide-card-item">
            <span class="guide-card-icon">💎</span>
            <h3>Abyssal Ingot</h3>
            <p><strong>Use:</strong> Upgrades weapons from +7 to +10.<br><strong>Farming Spot:</strong> Master-Level Abyss Rifts (Unlocked after Chapter 7). Guaranteed drop from Rift Bosses.</p>
          </div>
          <div class="guide-card-item">
            <span class="guide-card-icon">🐉</span>
            <h3>Pristine Dragon Scale</h3>
            <p><strong>Use:</strong> Upgrades Heavy Armor to Maximum Tier.<br><strong>Farming Spot:</strong> Kweiden Peaks. Can be harvested from the frozen corpses of lesser drakes near the Ice Caves.</p>
          </div>
          <div class="guide-card-item">
            <span class="guide-card-icon">🧪</span>
            <h3>Liquid Mercury</h3>
            <p><strong>Use:</strong> Required to craft Elemental Arrows (Fire, Ice, Lightning) and some elixirs.<br><strong>Farming Spot:</strong> Buy directly from the Midnight Peddler or farm from the mechanical enemies in Delesyia Coast.</p>
          </div>
        </div>
<h2 class="guide-section-title" style="margin-top: 5rem;">5. Top End-Game Builds (Synergies)</h2>
        <p class="guide-section-intro">Combine specific weapons, armor sets, and relics to create overpowered character builds.</p>

        <div class="guide-cards" style="margin-bottom: 3rem;">
            <div class="guide-card-item" style="border: 1px solid rgba(231, 76, 60, 0.4); background: linear-gradient(180deg, rgba(231, 76, 60, 0.05) 0%, transparent 100%);">
                <span class="label" style="color: #e74c3c; font-weight: bold; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">The Immortal Berserker</span>
                <h3 style="color: var(--gold); margin-top: 0.5rem;">Lifesteal & Raw Power</h3>
                <ul style="font-size: 0.9rem; color: var(--text-dim); padding-left: 1.2rem; margin-top: 1rem; line-height: 1.6;">
                    <li><strong>Weapon:</strong> The King's Justice (Socketed with Crimson Rubies)</li>
                    <li><strong>Armor:</strong> Volcanic Berserker Set (5-Piece)</li>
                    <li><strong>Relic:</strong> Blood-Drinker Ring</li>
                </ul>
                <p style="font-size: 0.85rem; margin-top: 1rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                    <strong>Playstyle:</strong> Let your health drop to trigger the <em>Blood Boil</em> armor bonus (+40% damage/speed). Your massive damage combined with the Blood-Drinker Ring will instantly heal you back up.
                </p>
            </div>

            <div class="guide-card-item" style="border: 1px solid rgba(52, 152, 219, 0.4); background: linear-gradient(180deg, rgba(52, 152, 219, 0.05) 0%, transparent 100%);">
                <span class="label" style="color: #3498db; font-weight: bold; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">The Void Assassin</span>
                <h3 style="color: var(--gold); margin-top: 0.5rem;">Stealth & Execution</h3>
                <ul style="font-size: 0.9rem; color: var(--text-dim); padding-left: 1.2rem; margin-top: 1rem; line-height: 1.6;">
                    <li><strong>Weapon:</strong> Corsair's Cutlass (Socketed with Void Amethysts)</li>
                    <li><strong>Armor:</strong> Assassin of Pailune Set (5-Piece)</li>
                    <li><strong>Relic:</strong> The Raven's Ring</li>
                </ul>
                <p style="font-size: 0.85rem; margin-top: 1rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                    <strong>Playstyle:</strong> Use stealth to approach. Your first strike will deal 300% critical damage (Armor bonus) and apply bleed. Subsequent hits deal +50% damage due to the Cutlass passive.
                </p>
            </div>
        </div>
        <div style="text-align: center; margin: 5rem 0;">
            <a href="/crimson-desert/index" class="btn btn-gold">Back to Main Guide</a>
        </div>

      </section>

    </main>
  </div>

<?php 
// Cargamos el footer desde la raíz
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>