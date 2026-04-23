<?php 
$pageTitle = "Chapter 8: The Fallen Kingdom | Crimson Desert Guide";
$pageDesc = "The final assault on Demeniss. Master the urban infiltration, raid the Royal Armory, solve the Vault puzzles, and defeat the Corrupted King.";
$bodyClass = "theme-crimson-desert"; 

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 45vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(212, 175, 55, 0.15) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(20, 15, 10, 0.8) 0%, transparent 60%), linear-gradient(180deg, #0a0805 0%, #1a1510 60%, #0a0805 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="../../">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="../">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Chapter 8</span>
      </nav>
      <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: PART 8</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem;">Chapter 8: The Fallen Kingdom</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">The Final Assault on Demeniss</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Chapter Progress</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#infiltration" style="color: var(--text-dim); transition: color 0.2s;">1. Urban Infiltration</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#armory" style="color: var(--text-dim); transition: color 0.2s;">2. The Royal Armory</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#vault" style="color: var(--text-dim); transition: color 0.2s;">3. The Vault Puzzles</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#boss-king" style="color: var(--text-dim); transition: color 0.2s;">4. Boss: Corrupted King</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#hidden" style="color: var(--text-dim); transition: color 0.2s;">5. Hidden Treasures</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">6. Chapter Completion</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="infiltration" style="margin-bottom: 4rem;">
        <div class="callout info" style="margin-bottom: 3rem;">
          <span class="callout-label" style="color: var(--gold);">Chapter 8 Overview</span>
          <p style="color: #ccc; margin-top: 0.5rem;"><strong>Primary Location:</strong> The Capital of Demeniss<br>
             <strong>Key Unlocks:</strong> Ultimate Armor Sets, Elite Mercenaries, Royal Abyss Rift.<br>
             <strong>Hazard Warning:</strong> The city is under martial law. Street patrols travel in groups of 5-8 heavily armored knights. Stealth on rooftops is highly recommended.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. Urban Infiltration</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">You have returned to where it all began, but the Capital is now a warzone. The main gates are barred, requiring you to navigate the city's vertical architecture.</p>

        <div class="reveal" style="background: rgba(46, 204, 113, 0.1); border-left: 3px solid #2ecc71; padding: 1.2rem; margin-top: 1.5rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0; display: flex; gap: 1rem; align-items: flex-start;">
            <div style="font-size: 1.8rem;">🤝</div>
            <div>
                <h5 style="color: #2ecc71; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.2rem; letter-spacing: 0.5px;">Tactical Tip: Urban Warfare</h5>
                <p style="margin:0; font-size: 0.95rem; color: #ccc;">If you must fight in the streets, use your <strong>Axiom Force (Level 2)</strong> to pull archers off the balconies before engaging the knights on the ground. Use explosive barrels scattered around the market square to your advantage.</p>
            </div>
        </div>

        <ul class="step-list">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Rooftop Highway</h4>
              <p style="color: #ccc;">Start at the Slums. Use the wooden scaffolding to reach the rooftops. Glide using the Abyss Wings (from Chapter 7) to cross the wide gaps between the merchant district manors.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The High Priest's Rescue</h4>
              <p style="color: #ccc;">Before heading to the castle, drop down into the Cathedral Courtyard. You will find the High Priest locked in a cage. Defeat his two executioners to free him. He will grant you the <em>Cathedral Key</em>, a shortcut to the Armory.</p>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section reveal" id="armory" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">2. Raiding the Royal Armory</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">The Royal Armory holds the best base-game equipment. Taking a detour here will make the final boss significantly easier.</p>

        <div class="reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0;">
            <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">📜 Lore Context: The King's Madness</h5>
            <p style="margin:0; font-size: 0.9rem; color: #ccc;">Notes scattered in the Armory reveal that the King ordered the mass production of "Void-Silver" weapons. The corruption of the Abyss has entirely taken over the Royal Guard, turning them into soulless husks bound to his will.</p>
        </div>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Laser Grid</h4>
              <p style="color: #ccc;">The Armory is protected by ancient Demeniss security. You must time your Sand-Dashes perfectly to slide under the moving red laser grids. Touching a laser triggers an instant alarm and summons 4 Elite Sentinels.</p>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section reveal" id="vault" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">3. The Vault Puzzles</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">To access the Throne Room, you must unlock the massive gears of the Royal Vault.</p>

        <div class="guide-accordion open reveal" id="acc-c8-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c8-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Puzzle: The Golden Gears</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">You need to align three massive gears to lower the bridge to the throne.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                <li style="margin-bottom: 0.5rem;"><strong>Gear 1 (Left):</strong> Pull the lever twice. Wait for the Lion symbol to face UP.</li>
                <li style="margin-bottom: 0.5rem;"><strong>Gear 2 (Right):</strong> Strike the gear with a Lightning arrow to power its motor. Pull the lever once.</li>
                <li><strong>Gear 3 (Center):</strong> Use your Axiom Force to manually drag the massive wheel into place until it clicks. The vault door will slowly grind open.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="callout danger reveal" style="margin-top:2rem; border-left: 4px solid var(--gold); background: rgba(212, 168, 67, 0.08); padding: 1.5rem;">
          <span class="callout-label" style="color: var(--gold); font-weight: bold; text-transform: uppercase;">⚠ Secret Boss: Royal Abyss Clone</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Inside the Vault, interacting with the giant mirror triggers the <strong>Royal Abyss Rift</strong>. You must fight a supercharged clone of Kliff. He heals if you try to heal, so you must play aggressively. Beating him maximizes your Health bar permanently.</p>
        </div>
      </section>

      <section class="guide-section reveal" id="boss-king" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">4. Chapter Boss: The Corrupted King</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">The climax of the story. The King wields the mythical sword <em>Dawnbreaker</em>, now twisted by the Abyss.</p>

        <div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src="/crimson-desert/img/ancientking.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.3);" alt="The Corrupted King">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The King waits on his ruined throne, consumed by power.</p>
        </div>

        <div class="guide-table-wrap reveal" style="margin-top: 2rem; overflow-x: auto;">
          <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold);">
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Phase</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">King's Attack</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Counter-Strategy</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 1 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(The Duel)</span></td>
                <td style="padding: 1rem; color: #ccc;">Royal Flurry</td>
                <td style="padding: 1rem; color: #ccc;">A rapid 5-hit sword combo. <strong>Do not try to block it all</strong> or your guard will break. Roll backwards for the first 4 hits, then parry the 5th (the heavy overhead slam) to create an opening.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 2 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Void Summons)</span></td>
                <td style="padding: 1rem; color: #ccc;">Shadow Guards</td>
                <td style="padding: 1rem; color: #ccc;">At 50% HP, he floats into the air and summons 4 Shadow Guards. Use area-of-effect spells or explosive arrows to clear them quickly before the King resumes his attacks.</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Final Phase <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Corruption)</span></td>
                <td style="padding: 1rem; color: #ccc;">Abyssal Nova</td>
                <td style="padding: 1rem; color: #ccc;">The arena fills with purple mist. You have 10 seconds before a massive explosion. Use your <strong>Axiom Force</strong> to rip the King out of the air and interrupt the cast, triggering the final execution.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="hidden" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">5. Chapter 8 Hidden Treasures</h2>
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">👑</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Crown of Demeniss</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Found in the King's bedchamber (above the throne room). This helmet provides massive resistance to Abyss magic.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🛡️</span>
            <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Aegis of the First King</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Inside the Royal Armory. Behind a wall that requires 3 Demolition Charges to blow open. The best heavy shield in the game.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">📜</span>
            <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Tattered Royal Decree</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Found on the floor of the Cathedral. A vital lore item detailing the King's descent into madness and his pact with the Abyss.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🔮</span>
            <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Void-Tainted Core</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Dropped by the Royal Abyss Clone. Use this at a blacksmith to upgrade any weapon to its final "Corrupted" tier.</p>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">6. Chapter 8 Completion</h2>
        
        <h3 class="reveal" style="font-family: var(--font-display); font-size: 1.8rem; color: var(--gold); margin-top: 2rem; margin-bottom: 1rem;">✅ The Dust Settles...</h3>
        <p class="reveal" style="color: #ccc; margin-bottom: 1.5rem;">The King has fallen, but the true threat remains. Ensure you have done the following before stepping into the Epilogue:</p>
        
        <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
            <ul class="guide-checklist">
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>Armory Looted:</strong> Did you claim the Aegis of the First King?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>Priest's Blessing:</strong> Did you rescue the High Priest from the Dungeons?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>Max Health:</strong> Did you clear the Royal Abyss Rift and defeat your clone?</span>
                    </label>
                </li>
            </ul>
        </div>

        <div class="reveal" style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
            <div style="font-size: 2.5rem;">🏆</div>
            <div>
                <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px; margin-top: 0;">Achievement Unlocked</h4>
                <p style="margin: 0; color: #ccc;"><strong>The Throne is Empty:</strong> Storm the capital, conquer the vault, and dethrone the Corrupted King. <span style="color: #888; font-size: 0.9rem;">(50G / Gold)</span></p>
            </div>
        </div>

        <div class="chapter-nav">
            <a href="/crimson-desert/chapters/chapter-7.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 7</a>
            <a href="/crimson-desert/chapters/chapter-9.php" class="btn btn-gold">Next: Chapter 9 (Finale) →</a>
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
$fxTheme = 'embers'; include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>