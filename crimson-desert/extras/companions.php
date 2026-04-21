<?php 
$pageTitle = "Companions Guide: Loyalty & Team Synergy | Crimson Desert";
$pageDesc = "Complete all companion side quests for Oongka, Yann, and Naira. Master the Rapport system, gifting, and lore to unlock the True Ending.";

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

<header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(212, 168, 67, 0.1) 0%, transparent 65%), linear-gradient(180deg, #050a07 0%, #0a140f 60%, #050a07 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/index.php">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Companions</span>
      </nav>
      <h1 class="guide-hero-title">Companions Guide</h1>
      <p class="guide-hero-subtitle">Loyalty, Team Combos, and Camp Secrets</p>
    </div>
</header>

<div class="guide-layout" style="grid-template-columns: 1fr; max-width: 950px;">
    <main class="guide-content">

      <section class="guide-section reveal">
        <div class="callout info">
          <span class="callout-label">The Bond of the Greymanes</span>
          <p>Your lieutenants are the key to the <strong>True Ending</strong>. Gaining Rapport is essential for unlocking their ultimate gear, secret camp services, and the "Mercenary's Peace" finale.</p>
        </div>

        <h2 class="guide-section-title" style="margin-top: 4rem;">1. Oongka (The Shieldbreaker)</h2>
        <div class="companion-stats">
            <div class="stat-card" style="border-left: 4px solid #8C2D2D;">
                <span class="label" style="color: #8C2D2D;">Combat Role</span>
                <p>Tank / Guard Breaker</p>
            </div>
            <div class="stat-card" style="border-left: 4px solid var(--gold);">
                <span class="label">Legendary Gear</span>
                <p>Titan's Grip (Hammer)</p>
            </div>
        </div>
        <div class="guide-accordion open" id="acc-comp-1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-comp-1')">
            <span class="guide-accordion-label">Quest: The Unbreakable Debt</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p><strong>Location:</strong> Pailune Slums Tavern.</p>
              <div class="decision-box">
                  <h4>Critical Choice: The Debt</h4>
                  <p>Choose <strong>"His debt is paid in blood"</strong> to trigger the boss fight and get the unique hammer. Paying the gold misses the loot.</p>
              </div>
            </div>
          </div>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">2. Yann (The Sharpshooter)</h2>
        <div class="companion-stats">
            <div class="stat-card" style="border-left: 4px solid #4A8C5C;">
                <span class="label" style="color: #4A8C5C;">Combat Role</span>
                <p>Ranged DPS / Scout</p>
            </div>
            <div class="stat-card" style="border-left: 4px solid var(--gold);">
                <span class="label">Legendary Gear</span>
                <p>Storm-Eye Bow</p>
            </div>
        </div>
        <div class="guide-accordion" id="acc-comp-2">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-comp-2')">
            <span class="guide-accordion-label">Quest: Eagle's Sight</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p><strong>Location:</strong> Kweiden Border Outpost.</p>
              <p>Complete the stealth hunt of the White Stag. Stealth is mandatory; any alert resets the progress.</p>
            </div>
          </div>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">3. Naira (The Alchemist)</h2>
        <div class="companion-stats">
            <div class="stat-card" style="border-left: 4px solid var(--blue);">
                <span class="label" style="color: var(--blue);">Combat Role</span>
                <p>Support / Crowd Control</p>
            </div>
            <div class="stat-card" style="border-left: 4px solid var(--gold);">
                <span class="label">Legendary Gear</span>
                <p>Apothecary's Satchel</p>
            </div>
        </div>
        <div class="guide-accordion" id="acc-comp-3">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-comp-3')">
            <span class="guide-accordion-label">Quest: Toxic Blooms</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p><strong>Location:</strong> Whispering Swamps.</p>
              <p>Defend the ritual circle from waves of illusions. Leaving the circle causes severe Void Damage.</p>
            </div>
          </div>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">Gifting & Affinity Guide</h2>
        <p class="guide-section-intro">To reach Max Rapport faster, you can offer unique items found across Pywel. Each companion has a "Loved Item" that grants massive affinity points.</p>

        <div class="gift-grid reveal">
            <div class="gift-card">
                <h4>Oongka's Favorites</h4>
                <p style="font-size: 0.9rem; color: var(--text-dim);">
                    <strong>Best Gift:</strong> <em>Aged Dwarven Ale</em> (Hernand).<br>
                    <strong>Effect:</strong> Unlocks "Drunken Brawler" passive (Def bonus after eating).
                </p>
            </div>
            <div class="gift-card">
                <h4>Yann's Favorites</h4>
                <p style="font-size: 0.9rem; color: var(--text-dim);">
                    <strong>Best Gift:</strong> <em>Ancient Feather Quill</em> (Pailune Library).<br>
                    <strong>Effect:</strong> Unlocks "Wind-Talker" (Scouts two regions ahead).
                </p>
            </div>
            <div class="gift-card">
                <h4>Naira's Favorites</h4>
                <p style="font-size: 0.9rem; color: var(--text-dim);">
                    <strong>Best Gift:</strong> <em>Glowing Mycelium</em> (Whispering Swamps).<br>
                    <strong>Effect:</strong> Unlocks "Alchemical Surplus" (Chance to double crafted potions).
                </p>
            </div>
        </div>

        <div class="lore-box reveal">
            <h3 style="color: var(--text); font-family: var(--font-display); margin-bottom: 1rem;">The Secret History of the Greymanes</h3>
            <p style="font-size: 0.95rem; font-style: italic; color: var(--text-dim);">
                "The Greymanes weren't always a band of brothers. In the winter of 2024, Kliff found Oongka chained in the slave pits, while Yann was being hunted for a treason he didn't commit. Naira was the one who stitched them back together."
            </p>
            <p style="margin-top: 1rem; font-size: 0.85rem; color: var(--gold-dim); font-weight: bold;">
                Completionist Hint: Finding all 12 "Mercenary Journals" unlocks a secret dialogue tree with Kliff in the finale.
            </p>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">Conflict & Disapproval</h2>
        <p class="guide-section-intro">Leadership is about making hard choices. Certain actions will please one lieutenant but alienate another. Balance your choices to keep the Greymanes united.</p>

        <div class="conflict-card reveal">
            <h4>⚠️ The Pailune Execution (Chapter 4)</h4>
            <p style="font-size: 0.9rem; color: var(--text-dim); margin-bottom: 1rem;">
                When deciding the fate of the traitorous scout in the Pailune Markets:
            </p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <div style="background: var(--dark-2); padding: 10px; border-radius: 4px; flex: 1; min-width: 200px;">
                    <strong style="color: var(--text);">Option A: Spare him</strong><br>
                    <span class="approval-badge approval-up">Yann ++</span>
                    <span class="approval-badge approval-down">Oongka --</span>
                </div>
                <div style="background: var(--dark-2); padding: 10px; border-radius: 4px; flex: 1; min-width: 200px;">
                    <strong style="color: var(--text);">Option B: Execute him</strong><br>
                    <span class="approval-badge approval-up">Oongka ++</span>
                    <span class="approval-badge approval-down">Naira --</span>
                </div>
            </div>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">Max Rapport: Bonded Skills</h2>
        <p>Once you reach the <strong>"Eternal Brother/Sister"</strong> rank, Kliff unlocks a permanent passive skill that works even when the companion is not in the active party:</p>

        <div class="companion-stats">
            <div class="stat-card" style="border-top: 2px solid var(--gold);">
                <span class="label">Oongka's Bond</span>
                <p>Unstoppable Force: Kliff's stamina consumption for sprinting is reduced by 30%.</p>
            </div>
            <div class="stat-card" style="border-top: 2px solid var(--gold);">
                <span class="label">Yann's Bond</span>
                <p>Eagle Eye: Highlights all collectible herbs and ores within 50 meters.</p>
            </div>
            <div class="stat-card" style="border-top: 2px solid var(--gold);">
                <span class="label">Naira's Bond</span>
                <p>Toxic Touch: Kliff's daggers and arrows have a 5% chance to apply Poison.</p>
            </div>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">Unique Cosmetic Unlocks</h2>
        <p>Reaching Max Rapport also changes the appearance of your lieutenants and their quarters at camp.</p>
        <ul style="color: var(--text-dim); padding-left: 1.5rem; margin: 1.5rem 0 4rem 0; line-height: 2;">
            <li><strong>Oongka:</strong> Unlocks the <em>Iron Guard</em> plate armor and golden-trimmed shield.</li>
            <li><strong>Yann:</strong> Unlocks the <em>Ghost Stalker</em> cloak (semi-transparent in snow).</li>
            <li><strong>Naira:</strong> Unlocks the <em>High Alchemist</em> robes with unique particle effects.</li>
        </ul>

        <h2 class="guide-section-title">Team Synergy Matrix</h2>
        <div class="synergy-table-container reveal">
            <table class="synergy-table">
                <thead>
                    <tr>
                        <th>Companion</th>
                        <th>Team Passive Buff</th>
                        <th>Ultimate Combo Move</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Oongka</strong></td>
                        <td>+15% Stagger Resist</td>
                        <td>Colossus Toss</td>
                    </tr>
                    <tr>
                        <td><strong>Yann</strong></td>
                        <td>+10% Critical Chance</td>
                        <td>Rain of Feathers</td>
                    </tr>
                    <tr>
                        <td><strong>Naira</strong></td>
                        <td>+20% Healing Efficiency</td>
                        <td>Healing Mist</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="text-align: center; margin: 5rem 0;">
            <a href="/index.php" class="btn btn-gold">Back to Pywel Guide</a>
        </div>
      </section>
    </main>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; ?>