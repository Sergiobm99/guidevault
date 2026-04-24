<?php 
$parentGuide = [
    'name' => 'Crimson Desert',
    'url'  => '/crimson-desert/index.php'
];
$pageTitle = "Companions Guide: Loyalty & Team Synergy | Crimson Desert";
$pageDesc = "Complete all companion side quests for Oongka, Yann, and Naira. Master the Rapport system, gifting, and lore to unlock the True Ending.";
$bodyClass = "theme-crimson-desert"; 

include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(212, 168, 67, 0.1) 0%, transparent 65%), linear-gradient(180deg, #050a07 0%, #0a140f 60%, #050a07 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Companions</span>
      </nav>
      <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">GAME DATABASE</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem;">Companions Guide</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">Loyalty, Team Combos, and Camp Secrets</p>
    </div>
</header>

<div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Contents</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#rapport" style="color: var(--text-dim); transition: color 0.2s;">1. The Bond of the Greymanes</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#oongka" style="color: var(--text-dim); transition: color 0.2s;">2. Oongka (The Shieldbreaker)</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#yann" style="color: var(--text-dim); transition: color 0.2s;">3. Yann (The Sharpshooter)</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#naira" style="color: var(--text-dim); transition: color 0.2s;">4. Naira (The Alchemist)</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#gifts" style="color: var(--text-dim); transition: color 0.2s;">5. Gifting & Affinity</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#conflict" style="color: var(--text-dim); transition: color 0.2s;">6. Conflict & Disapproval</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#rewards" style="color: var(--text-dim); transition: color 0.2s;">7. Max Rapport Rewards</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#synergy" style="color: var(--text-dim); transition: color 0.2s;">8. Team Synergy Matrix</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="rapport" style="margin-bottom: 4rem;">
        <div class="callout info" style="margin-bottom: 3rem;">
          <span class="callout-label" style="color: var(--gold);">The Bond of the Greymanes</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Your lieutenants are the key to the <strong>True Ending</strong>. Gaining Rapport is essential for unlocking their ultimate gear, secret camp services, and the "Mercenary's Peace" finale.</p>
        </div>
      </section>

      <section class="guide-section reveal" id="oongka" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. Oongka (The Shieldbreaker)</h2>
        <div class="companion-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 1.5rem;">
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-left: 4px solid #8C2D2D;">
                <span class="label" style="color: #8C2D2D; font-weight: bold; text-transform: uppercase; font-size: 0.8rem;">Combat Role</span>
                <p style="color: #ccc; margin-top: 0.5rem;">Tank / Guard Breaker</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-left: 4px solid var(--gold);">
                <span class="label" style="color: var(--gold); font-weight: bold; text-transform: uppercase; font-size: 0.8rem;">Legendary Gear</span>
                <p style="color: #ccc; margin-top: 0.5rem;">Titan's Grip (Hammer)</p>
            </div>
        </div>
        <div class="guide-accordion open" id="acc-comp-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-comp-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Quest: The Unbreakable Debt</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;"><strong>Location:</strong> Pailune Slums Tavern.</p>
              <div class="decision-box" style="background: rgba(140, 45, 45, 0.1); border-left: 4px solid #8C2D2D; padding: 1rem;">
                  <h4 style="color: #ff4d4d; font-family: var(--font-display); font-size: 1.1rem; margin-top: 0; margin-bottom: 0.5rem;">Critical Choice: The Debt</h4>
                  <p style="color: #ccc; font-size: 0.95rem; margin: 0;">Choose <strong>"His debt is paid in blood"</strong> to trigger the boss fight and get the unique hammer. Paying the gold misses the loot.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="yann" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">2. Yann (The Sharpshooter)</h2>
        <div class="companion-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 1.5rem;">
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-left: 4px solid #4A8C5C;">
                <span class="label" style="color: #4A8C5C; font-weight: bold; text-transform: uppercase; font-size: 0.8rem;">Combat Role</span>
                <p style="color: #ccc; margin-top: 0.5rem;">Ranged DPS / Scout</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-left: 4px solid var(--gold);">
                <span class="label" style="color: var(--gold); font-weight: bold; text-transform: uppercase; font-size: 0.8rem;">Legendary Gear</span>
                <p style="color: #ccc; margin-top: 0.5rem;">Storm-Eye Bow</p>
            </div>
        </div>
        <div class="guide-accordion" id="acc-comp-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-comp-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Quest: Eagle's Sight</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 0.5rem;"><strong>Location:</strong> Kweiden Border Outpost.</p>
              <p style="color: #ccc; margin: 0;">Complete the stealth hunt of the White Stag. Stealth is mandatory; any alert resets the progress.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="naira" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">3. Naira (The Alchemist)</h2>
        <div class="companion-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 1.5rem;">
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-left: 4px solid var(--blue);">
                <span class="label" style="color: var(--blue); font-weight: bold; text-transform: uppercase; font-size: 0.8rem;">Combat Role</span>
                <p style="color: #ccc; margin-top: 0.5rem;">Support / Crowd Control</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-left: 4px solid var(--gold);">
                <span class="label" style="color: var(--gold); font-weight: bold; text-transform: uppercase; font-size: 0.8rem;">Legendary Gear</span>
                <p style="color: #ccc; margin-top: 0.5rem;">Apothecary's Satchel</p>
            </div>
        </div>
        <div class="guide-accordion" id="acc-comp-3" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-comp-3')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Quest: Toxic Blooms</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 0.5rem;"><strong>Location:</strong> Whispering Swamps.</p>
              <p style="color: #ccc; margin: 0;">Defend the ritual circle from waves of illusions. Leaving the circle causes severe Void Damage.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="gifts" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">Gifting & Affinity Guide</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">To reach Max Rapport faster, you can offer unique items found across Pywel. Each companion has a "Loved Item" that grants massive affinity points.</p>

        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 3rem;">
            <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #8C2D2D;">
                <h4 style="color: #8C2D2D; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0; margin-bottom: 0.5rem;">Oongka's Favorites</h4>
                <p style="font-size: 0.9rem; color: #ccc; margin: 0; line-height: 1.6;">
                    <strong style="color: var(--gold);">Best Gift:</strong> <em>Aged Dwarven Ale</em> (Hernand).<br>
                    <strong style="color: var(--gold);">Effect:</strong> Unlocks "Drunken Brawler" passive (Def bonus after eating).
                </p>
            </div>
            <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #4A8C5C;">
                <h4 style="color: #4A8C5C; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0; margin-bottom: 0.5rem;">Yann's Favorites</h4>
                <p style="font-size: 0.9rem; color: #ccc; margin: 0; line-height: 1.6;">
                    <strong style="color: var(--gold);">Best Gift:</strong> <em>Ancient Feather Quill</em> (Pailune Library).<br>
                    <strong style="color: var(--gold);">Effect:</strong> Unlocks "Wind-Talker" (Scouts two regions ahead).
                </p>
            </div>
            <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--blue);">
                <h4 style="color: var(--blue); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0; margin-bottom: 0.5rem;">Naira's Favorites</h4>
                <p style="font-size: 0.9rem; color: #ccc; margin: 0; line-height: 1.6;">
                    <strong style="color: var(--gold);">Best Gift:</strong> <em>Glowing Mycelium</em> (Whispering Swamps).<br>
                    <strong style="color: var(--gold);">Effect:</strong> Unlocks "Alchemical Surplus" (Chance to double crafted potions).
                </p>
            </div>
        </div>

        <div class="lore-box reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1.5rem; border-radius: 0 4px 4px 0;">
            <h3 style="color: #5dade2; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0; margin-bottom: 0.5rem;">The Secret History of the Greymanes</h3>
            <p style="font-size: 0.95rem; font-style: italic; color: #ccc; line-height: 1.6;">
                "The Greymanes weren't always a band of brothers. In the winter of 2024, Kliff found Oongka chained in the slave pits, while Yann was being hunted for a treason he didn't commit. Naira was the one who stitched them back together."
            </p>
            <p style="margin-top: 1rem; margin-bottom: 0; font-size: 0.85rem; color: var(--gold); font-weight: bold;">
                Completionist Hint: Finding all 12 "Mercenary Journals" unlocks a secret dialogue tree with Kliff in the finale.
            </p>
        </div>
      </section>

      <section class="guide-section reveal" id="conflict" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">Conflict & Disapproval</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Leadership is about making hard choices. Certain actions will please one lieutenant but alienate another. Balance your choices to keep the Greymanes united.</p>

        <div class="conflict-card reveal" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem;">
            <h4 style="color: #ff4d4d; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0; margin-bottom: 0.5rem;">⚠️ The Pailune Execution (Chapter 4)</h4>
            <p style="font-size: 0.95rem; color: #ccc; margin-bottom: 1.5rem;">
                When deciding the fate of the traitorous scout in the Pailune Markets:
            </p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                <div style="background: var(--dark-1); padding: 1rem; border-radius: 4px; border: 1px solid rgba(255,255,255,0.05);">
                    <strong style="color: var(--text); display: block; margin-bottom: 0.5rem;">Option A: Spare him</strong>
                    <span style="display: block; color: #2ecc71; font-size: 0.9rem; margin-bottom: 0.2rem;">Yann ++</span>
                    <span style="display: block; color: #e74c3c; font-size: 0.9rem;">Oongka --</span>
                </div>
                <div style="background: var(--dark-1); padding: 1rem; border-radius: 4px; border: 1px solid rgba(255,255,255,0.05);">
                    <strong style="color: var(--text); display: block; margin-bottom: 0.5rem;">Option B: Execute him</strong>
                    <span style="display: block; color: #2ecc71; font-size: 0.9rem; margin-bottom: 0.2rem;">Oongka ++</span>
                    <span style="display: block; color: #e74c3c; font-size: 0.9rem;">Naira --</span>
                </div>
            </div>
        </div>
      </section>

      <section class="guide-section reveal" id="rewards" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">Max Rapport: Bonded Skills</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Once you reach the <strong>"Eternal Brother/Sister"</strong> rank, Kliff unlocks a permanent passive skill that works even when the companion is not in the active party:</p>

        <div class="companion-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 3rem;">
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid var(--gold);">
                <span class="label" style="color: var(--gold); font-weight: bold; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.5rem;">Oongka's Bond</span>
                <p style="color: #ccc; font-size: 0.95rem; margin: 0;">Unstoppable Force: Kliff's stamina consumption for sprinting is reduced by 30%.</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid var(--gold);">
                <span class="label" style="color: var(--gold); font-weight: bold; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.5rem;">Yann's Bond</span>
                <p style="color: #ccc; font-size: 0.95rem; margin: 0;">Eagle Eye: Highlights all collectible herbs and ores within 50 meters.</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid var(--gold);">
                <span class="label" style="color: var(--gold); font-weight: bold; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.5rem;">Naira's Bond</span>
                <p style="color: #ccc; font-size: 0.95rem; margin: 0;">Toxic Touch: Kliff's daggers and arrows have a 5% chance to apply Poison.</p>
            </div>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">Unique Cosmetic Unlocks</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Reaching Max Rapport also changes the appearance of your lieutenants and their quarters at camp.</p>
        <ul style="color: #ccc; padding-left: 1.5rem; margin-bottom: 4rem; line-height: 1.8;">
            <li style="margin-bottom: 0.5rem;"><strong>Oongka:</strong> Unlocks the <em>Iron Guard</em> plate armor and golden-trimmed shield.</li>
            <li style="margin-bottom: 0.5rem;"><strong>Yann:</strong> Unlocks the <em>Ghost Stalker</em> cloak (semi-transparent in snow).</li>
            <li><strong>Naira:</strong> Unlocks the <em>High Alchemist</em> robes with unique particle effects.</li>
        </ul>
      </section>

      <section class="guide-section reveal" id="synergy" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">Team Synergy Matrix</h2>
        <div class="synergy-table-container reveal" style="margin-bottom: 3rem;">
            <table class="synergy-table" style="background: var(--dark-2); width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--gold); color: var(--gold);">
                        <th style="padding: 1rem; text-align: left;">Companion</th>
                        <th style="padding: 1rem; text-align: left;">Team Passive Buff</th>
                        <th style="padding: 1rem; text-align: left;">Ultimate Combo Move</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                        <td style="padding: 1rem;"><strong>Oongka</strong></td>
                        <td style="padding: 1rem;">+15% Stagger Resist</td>
                        <td style="padding: 1rem;">Colossus Toss</td>
                    </tr>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                        <td style="padding: 1rem;"><strong>Yann</strong></td>
                        <td style="padding: 1rem;">+10% Critical Chance</td>
                        <td style="padding: 1rem;">Rain of Feathers</td>
                    </tr>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                        <td style="padding: 1rem;"><strong>Naira</strong></td>
                        <td style="padding: 1rem;">+20% Healing Efficiency</td>
                        <td style="padding: 1rem;">Healing Mist</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="chapter-nav">
            <a href="/crimson-desert/extras/builds.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Best Builds</a>
            <a href="/crimson-desert/extras/crafting.php" class="btn btn-gold">Next: Crafting & Cooking →</a>
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

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>