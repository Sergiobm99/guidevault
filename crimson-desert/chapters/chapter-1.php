<?php 
$pageTitle = "Chapter 1: The First Encounter | Crimson Desert Guide";
$pageDesc = "Intrigue, Factions, and the Royal Palace step-by-step walkthrough.";

$bodyClass = "theme-crimson-desert"; 

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg"></div>
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="../../">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="../">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Chapter 1</span>
      </nav>
      <span class="label" style="color: var(--guide-accent); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: PART 1</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--guide-accent); line-height: 1.1; margin-bottom: 1rem;">Chapter 1: The First Encounter</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); color: #ddd; font-size: 1.1rem;">Hernand City & The First Rift</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--guide-accent); font-size: 1.2rem; margin-bottom: 1rem;">Chapter Progress</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#trials" style="color: var(--text-dim); transition: color 0.2s;">1. Trials of Kindness</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#abyss-rift" style="color: var(--text-dim); transition: color 0.2s;">2. First Abyss Rift</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#aftermath" style="color: var(--text-dim); transition: color 0.2s;">3. Aftermath & Upgrades</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">4. Chapter Completion</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <div class="mobile-toc-container">
          <button class="mobile-toc-btn" id="tocToggle" onclick="document.getElementById('tocList').classList.toggle('show'); document.getElementById('tocIcon').textContent = document.getElementById('tocList').classList.contains('show') ? '▲' : '▼';">
              <span>CONTENTS</span>
              <span id="tocIcon">▼</span>
          </button>
         <ul class="mobile-toc-list" id="tocList">
              <li><a href="#trials" onclick="document.getElementById('tocList').classList.remove('show'); document.getElementById('tocIcon').textContent = '▼';">1. Trials of Kindness</a></li>
              <li><a href="#abyss-rift" onclick="document.getElementById('tocList').classList.remove('show'); document.getElementById('tocIcon').textContent = '▼';">2. First Abyss Rift</a></li>
              <li><a href="#aftermath" onclick="document.getElementById('tocList').classList.remove('show'); document.getElementById('tocIcon').textContent = '▼';">3. Aftermath & Upgrades</a></li>
              <li><a href="#completion" onclick="document.getElementById('tocList').classList.remove('show'); document.getElementById('tocIcon').textContent = '▼';">4. Chapter Completion</a></li>
          </ul>
      </div>

      <section class="guide-section" id="trials" style="margin-bottom: 4rem;">
        <div class="callout info" style="margin-bottom: 3rem; border-left: 4px solid var(--guide-accent); background: var(--guide-color-1);">
          <span class="callout-label" style="color: var(--guide-accent);">Chapter Overview</span>
          <p style="color: #ccc; margin-top: 0.5rem;"><strong>Recommended Level:</strong> None (Focus on gear upgrades)<br><strong>Key Unlocks:</strong> Axiom Force (Tier 1), Hernand Blacksmith, Mercenary Board, Fast Travel.<br><strong>Missables:</strong> The "Rusty Greymane Dagger" hidden in the sewers.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">1. The Trials of Kindness</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">Your first major goal in Hernand is to build reputation so the local guard lets you into the upper district. Do not attack random NPCs here, as lowering your reputation early makes this chapter significantly harder.</p>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--guide-accent); margin-top: 0;">The Tavern Brawl</h4>
              <p style="color: #ccc;">Enter the Rusty Boar Tavern. A cutscene will trigger where local thugs are harassing a merchant. Choose the dialogue option: <strong>[Step In]</strong>. You will have to fight three unarmed thugs. Rely on parries; do not draw your weapon or the guards will be called.</p>
              
              <div style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1rem; border-radius: 0 4px 4px 0;">
                  <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">📜 Lore Context: Hernand City</h5>
                  <p style="margin:0; font-size: 0.9rem; color: #ccc;">Hernand is the gateway to the northern territories. While it looks wealthy on the surface, the lower districts are controlled by the "Rust Syndicate". Saving this merchant puts you on their radar, which unlocks the underground fight club later in Chapter 3.</p>
              </div>
            </div>
          </li>
          <li class="step">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--guide-accent); margin-top: 0;">Hidden Item: The Merchant's Ledger</h4>
              <p style="color: #ccc;">Before leaving the tavern, check the tables near the fireplace. You will find a <em>Stolen Ledger</em>. Return this to the merchant outside for a free <strong>Standard Inventory Expansion Tool</strong>.</p>
            </div>
          </li>
          <li class="step">
            <div class="step-num">3</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--guide-accent); margin-top: 0;">The Sewers & The Rat King (Mini-Boss)</h4>
              <p style="color: #ccc;">Head to the market square and jump down the open grate. Equip a torch. At the end of the linear tunnel, you will fight the <strong>Sewer Rat King</strong>.</p>
              
              <div class="callout danger" style="margin-top:1rem; border-left: 4px solid var(--red); background: rgba(140, 45, 45, 0.08); padding: 1.5rem;">
                <span class="callout-label" style="color: var(--red); font-weight: bold; text-transform: uppercase;">Boss Strategy: Sewer Rat King</span>
                <p style="color: #ccc; margin-top: 0.5rem;">This oversized beast causes Bleed build-up. Use your slide dodge to stay behind it. When it stands on its hind legs, it is preparing an unblockable bite—roll backward immediately.</p>
                <p style="margin-top: 0.5rem; margin-bottom: 0; color: var(--guide-accent);"><strong>Drops:</strong> Rat King Tail, 250 Gold.<br><strong>Secret:</strong> After defeating it, search the pile of bones in the corner to find the <strong>Rusty Greymane Dagger</strong> (a vital lore item for Macduff).</p>
              </div>
            </div>
          </li>
          <li class="step">
            <div class="step-num">4</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--guide-accent); margin-top: 0;">Unlock the Mercenary Board</h4>
              <p style="color: #ccc;">Climb out of the sewers and speak to Captain Aris near the barracks. Impressed by your handling of the Rat King, she will grant you access to the <strong>Mercenary Board</strong>. You can now take side contracts for extra gold.</p>
              <p style="color: #888; font-size: 0.9rem; font-style: italic;">Tip: Take the "Lost Alchemist" bounty immediately, as it's on the way to your next main objective.</p>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section" id="abyss-rift" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">2. Exploring the First Abyss Rift</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">With your reputation secured, the guards will let you enter the Hernand Castle courtyard where the first glowing Abyss Rift is located.</p>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--guide-accent); margin-top: 0;">The Moving Platforms</h4>
              <p style="color: #ccc;">Once inside the Abyss, gravity shifts. Jump across the floating debris. If you fall, you will respawn at the edge with 10% less health. Wait for the platforms to align perfectly before jumping.</p>
              
              <div style="background: var(--guide-color-1); border-left: 3px solid var(--guide-accent); padding: 1rem; margin-top: 1rem; border-radius: 0 4px 4px 0;">
                  <h5 style="color: var(--guide-accent); font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">💎 Hidden Chest: First Abyss Core</h5>
                  <p style="margin:0; font-size: 0.9rem; color: #ccc;">On the third platform, instead of jumping forward, look down and to the left. Drop onto the hidden ledge to find a chest containing your first <strong>Abyss Core</strong> (used to level up your Axiom Force).</p>
              </div>
            </div>
          </li>
          <li class="step">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--guide-accent); margin-top: 0;">Puzzle: The Polar Opposites</h4>
              <p style="color: #ccc;">You will enter a room with a Red Node and a Blue Node. Use your Axiom Force (L2 + R2 / LT + RT). Rotate the Red Node twice clockwise, and the Blue Node once counter-clockwise. The laser will connect and open the boss door.</p>
            </div>
          </li>
          <li class="step">
            <div class="step-num">3</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--guide-accent); margin-top: 0;">Boss Fight: The Abyss Warden</h4>
              <p style="color: #ccc;">The Warden guards the Abyss Artifact. It uses a massive halberd and teleportation magic.</p>
              <div class="guide-table-wrap" style="margin-top:1rem; overflow-x: auto;">
                <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
                  <thead>
                    <tr style="border-bottom: 2px solid var(--guide-accent);">
                      <th style="padding: 1rem; text-align: left; color: var(--guide-accent); width: 15%;">Phase</th>
                      <th style="padding: 1rem; text-align: left; color: var(--guide-accent); width: 30%;">Boss Attack</th>
                      <th style="padding: 1rem; text-align: left; color: var(--guide-accent);">How to Counter</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <td style="padding: 1rem; font-weight: bold;">Phase 1</td>
                        <td style="padding: 1rem; color: #ccc;">Sweeping Halberd Strike</td>
                        <td style="padding: 1rem; color: #ccc;">Block normally. Wait for the 3-hit combo to end, then counter with heavy attacks.</td>
                    </tr>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <td style="padding: 1rem; font-weight: bold;">Phase 2</td>
                        <td style="padding: 1rem; color: #ccc;">Teleport & Plunge</td>
                        <td style="padding: 1rem; color: #ccc;">The boss vanishes into blue mist. Sprint constantly in a circle until he crashes down, then attack his back.</td>
                    </tr>
                    <tr>
                        <td style="padding: 1rem; font-weight: bold;">Phase 3</td>
                        <td style="padding: 1rem; color: #ccc;">Abyss Shield</td>
                        <td style="padding: 1rem; color: #ccc;">He generates a blue overshield. Standard attacks bounce off. You <strong>MUST</strong> use your Axiom Force to grapple his shield and rip it away.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li class="step">
            <div class="step-num">4</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--guide-accent); margin-top: 0;">Claiming the Artifact</h4>
              <p style="color: #ccc;">Defeating the Warden grants you the <strong>Hernand Abyss Fragment</strong>. This permanently unlocks Tier 1 of your Axiom Force skill tree. Exit through the portal to complete the Rift.</p>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section" id="aftermath" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">3. The Aftermath & Upgrades</h2>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--guide-accent); margin-top: 0;">Meet Master Blacksmith Varr</h4>
              <p style="color: #ccc;">Return to the market square. Now that you have an Abyss Fragment, Varr's forge is open to you. Speak to him to unlock the Weapon Upgrade system.</p>
            </div>
          </li>
          <li class="step">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--guide-accent); margin-top: 0;">Upgrade your Sword</h4>
              <p style="color: #ccc;">Use the resources you gathered in the rift to upgrade Kliff's starting sword to +1. This is highly recommended before progressing, as enemies in Chapter 2 have significantly more armor.</p>
            </div>
          </li>
          <li class="step">
            <div class="step-num">3</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--guide-accent); margin-top: 0;">Unlock the Hernand Watchtower</h4>
              <p style="color: #ccc;">Before leaving the city, climb the large stone tower near the northern gate. Interacting with the beacon at the top clears the fog of war from your map for this region and unlocks <strong>Fast Travel</strong> back to Hernand.</p>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section" id="completion" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">4. Chapter 1 Completion</h2>
        <p style="color: #ccc; margin-bottom: 1.5rem; font-size: 1.05rem; line-height: 1.7;">With Hernand secured and your Axiom Force awakened, you are ready to venture into the political nightmare of Pailune.</p>
        
        <div style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
            <div style="font-size: 2.5rem;">🏆</div>
            <div>
                <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px; margin-top: 0;">Achievement Unlocked</h4>
                <p style="margin: 0; color: #ccc;"><strong>Touching the Abyss:</strong> Complete your first Abyss Rift and claim the Hernand Fragment. <span style="color: #888; font-size: 0.9rem;">(20G / Bronze)</span></p>
            </div>
        </div>
        
        <h3 style="font-family: var(--font-display); font-size: 1.8rem; color: var(--guide-accent); margin-top: 3rem; margin-bottom: 1rem;">✅ Before Leaving Hernand...</h3>
        <p style="color: #ccc; margin-bottom: 1.5rem; font-size: 1.05rem;">Chapter 2 spikes in difficulty. Make sure you have completed the following before taking the carriage to Pailune:</p>
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
            <ul class="guide-checklist">
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>Weapon Upgraded:</strong> Did you visit Master Varr and upgrade your sword to +1?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>Lore Item:</strong> Do you have the <em>Rusty Greymane Dagger</em> from the Sewer Rat King?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>Mercenary Board:</strong> Have you completed the "Lost Alchemist" bounty for easy starting gold?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>Inventory:</strong> Did you return the ledger to get your first Bag Expansion?</span>
                    </label>
                </li>
            </ul>
        </div>
        
        <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 3rem; border-top: 1px solid rgba(255,255,255,0.05); margin-top: 4rem;">
            <a href="/crimson-desert/chapters/prologue.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Prologue</a>
            <a href="/crimson-desert/chapters/chapter-2.php" class="btn btn-theme" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Next: Chapter 2 →</a>
        </div>
      </section>

    </main>
  </div>

<script>
// Script para el menú desplegable en móvil
document.addEventListener('DOMContentLoaded', () => {
    const tocToggle = document.getElementById('tocToggle');
    const tocList = document.getElementById('tocList');
    const tocIcon = document.getElementById('tocIcon');

    if (tocToggle && tocList) {
        tocToggle.addEventListener('click', () => {
            tocList.classList.toggle('show');
            tocIcon.textContent = tocList.classList.contains('show') ? '▲' : '▼';
        });

        tocList.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                tocList.classList.remove('show');
                tocIcon.textContent = '▼';
            });
        });
    }
});
</script>

<?php
$fxTheme = 'sand'; include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>