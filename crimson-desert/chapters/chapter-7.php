<?php 
$pageTitle = "Chapter 7: The Heart of the Abyss | Crimson Desert Guide";
$pageDesc = "Enter the floating realm of the Abyss. Master zero-gravity puzzles, unlock the Abyss Wings, defeat the Abyss Overlord, and make the choice that dictates your ending.";

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 45vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(120, 40, 255, 0.2) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(40, 10, 80, 0.8) 0%, transparent 60%), linear-gradient(180deg, #05000a 0%, #0d001a 60%, #05000a 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="../../">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="../">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Chapter 7</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Chapter 7: The Heart of the Abyss</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">Gravity Shifts, Ancient Echoes, and the Overlord</p>
    </div>
  </header>

  <div class="guide-layout" style="grid-template-columns: 1fr; max-width: 950px; margin: 0 auto;">
    <main class="guide-content">

      <section class="guide-section reveal">
        
        <div class="callout danger" style="margin-bottom: 3rem; background: rgba(140, 45, 45, 0.08); border-left: 4px solid #8C2D2D;">
          <span class="callout-label" style="color: #ff4d4d;">⚠ Point of No Return</span>
          <p>Before entering the portal to the Abyss, make sure you have completed all Companion Quests (Yann, Oongka, Naira) and spent your gold on upgrades. Once inside the Heart of the Abyss, you cannot fast-travel back to Pywel until you defeat the chapter boss.</p>
        </div>

        <div class="callout abyss reveal" style="margin-top: 1rem; margin-bottom: 3rem; background: rgba(138, 43, 226, 0.08); border-left: 4px solid #A29BFE;">
          <span class="callout-label" style="color: #A29BFE;">🌀 Abyss Mechanics: Zero Gravity</span>
          <p>In the Heart of the Abyss, gravity is inconsistent. You will find <strong>Gravity Wells</strong> (purple spheres) that allow Kliff to walk on walls and ceilings. Use the <em>Axiom Force</em> to toggle these wells on and off to navigate the floating debris.</p>
        </div>

        <h2 class="guide-section-title">1. Reaching the Floating Citadel</h2>
        <p>After acquiring the elemental fragments from the previous chapters, the gateway at the center of the Crimson Desert finally opens. You are no longer in Pywel; you are in the realm of the Ancients.</p>

        <div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src="/crimson-desert/img/floatingstone.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(138, 43, 226, 0.3);" alt="The Floating Citadel">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The Citadel of the Ancients defies all laws of physics.</p>
        </div>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">Unlocking the Abyss Wings</h4>
              <p>Immediately upon entry, a scripted event will merge your elemental fragments. This unlocks the <strong>Abyss Wings</strong>. By holding the jump button in mid-air, Kliff can now glide across massive gaps. This is the only way to reach the Citadel entrance.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">The Echoes of the Past</h4>
              <p>Interact with the three "Echo Pillars" surrounding the entrance. You must use the <strong>[Observation]</strong> skill to watch the ghostly projections. They reveal the sequence needed to stabilize the bridge: <strong>Fire → Water → Earth</strong>.</p>
            </div>
          </li>
        </ul>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">2. Gravitational Mirror Puzzles & Mini-Boss</h2>
        <p class="reveal">The interior of the Citadel is a labyrinth of shifting rooms. You must redirect the "Abyss Light" using mirrors while simultaneously shifting the room's gravity.</p>

        <div class="guide-accordion open reveal" id="acc-c7-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c7-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Puzzle: The Grand Ocular</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:1000px; padding: 1.5rem;">
            <div class="guide-accordion-inner">
              <p style="margin-bottom: 1rem;">This is the most complex puzzle in the game. You are in a giant spherical room with a central light source.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>Gravity Shift:</strong> Activate the purple node on the ceiling to rotate the room 180 degrees. This brings the mirrors on the "floor" into range of the light beam.</li>
                <li style="margin-bottom: 0.5rem;"><strong>Alignment:</strong> Use the <em>Axiom Force Grapple</em> to pull the four hanging prisms into a square formation.</li>
                <li><strong>The Finisher:</strong> Stand in the center and use your <strong>[Sand-Dash]</strong> ability (from Chapter 4) to pass through the light beam, causing a refraction that hits all four prisms simultaneously. This unlocks the door to the Overlord's Sanctum.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion open reveal" id="acc-c7-miniboss" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c7-miniboss')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Secret Mini-Boss: The Mirror Paradox</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px; padding: 1.5rem;">
            <div class="guide-accordion-inner">
              <p style="margin-bottom: 1rem;">In the Grand Ocular room, before leaving, point the light beam directly at the shattered mirror in the corner. This summons Kliff's dark reflection.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>The Fight:</strong> The Paradox has all your current skills and weapons. The trick is to <strong>unequip your weapon</strong> right before he spawns. He will spawn unarmed. Re-equip your weapon immediately and defeat him easily.</li>
                <li><strong>Reward:</strong> <em>Paradox Core</em> (Grants a permanent +5% to all damage output).</li>
              </ul>
            </div>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">3. Chapter Boss: The Abyss Overlord</h2>
        <p class="reveal">The Overlord is the guardian of the Abyss Core. He does not use physical weapons; he manipulates the very fabric of the realm against you.</p>
<div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px; margin-top: 1.5rem; margin-bottom: 2rem;">
            <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem;">🎒 Pro-Tip: Overlord Loadout</h4>
            <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">Since you cannot summon companions in the Sanctum, your gear is everything. Equip the <strong>Obsidian War-Axe</strong> (found in Chapter 6) to punch through his Phase 1 shields, and make sure you have the <strong>Chronos Ring</strong> equipped to extend the stun duration whenever you successfully parry his portals.</p>
        </div>
        <div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src="/crimson-desert/img/purplemonster.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(138, 43, 226, 0.3);" alt="The Abyss Overlord">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The Overlord bends reality within the Sanctum.</p>
        </div>

        <div class="guide-table-wrap reveal" style="margin-top: 2rem; overflow-x: auto;">
          <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold);">
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Phase</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Overlord's Tactic</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Survival Strategy</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold;">Phase 1 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Dimensional Rifts)</span></td>
                <td style="padding: 1rem; color: #ccc;">Portal Combat</td>
                <td style="padding: 1rem; color: #ccc;">The Overlord attacks from portals. Watch the floor for purple sparks—that's where his fist will emerge. <strong>Perfect Parry</strong> the portal itself to stun him for 3 seconds.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold;">Phase 2 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Gravity Warp)</span></td>
                <td style="padding: 1rem; color: #ccc;">Inverted Arena</td>
                <td style="padding: 1rem; color: #ccc;">The boss flips the arena upside down. You will be fighting on the ceiling. Use your <strong>Abyss Wings</strong> to stay airborne when he slams the floor, as it sends out a shockwave of Void energy.</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: bold;">Final Phase <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Core Overload)</span></td>
                <td style="padding: 1rem; color: #ccc;">Last Stand</td>
                <td style="padding: 1rem; color: #ccc;">The boss merges with the Central Core. He becomes immune to all damage except for <strong>Elemental Sprints</strong>. Use your Fire, Water, and Sand abilities in quick succession to overload his circuits.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">4. The Diverging Path (Crucial Story Choice)</h2>
        <p class="reveal">Immediately after defeating the Overlord, the entity known as the Primeval Voice will speak to Kliff. <strong>Your answer here determines the final chapter of the game.</strong></p>
<div class="reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0;">
            <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">📜 Lore Context: The Primeval Voice</h5>
            <p style="margin:0; font-size: 0.9rem; color: #ccc;">The Primeval Voice is not a god, but the collective consciousness of the ancient rulers who first discovered the Abyss. They offer Kliff their power, but history shows that every king who accepted it eventually went mad. Rejecting them aligns with Greymane's code, while asking about Myurdin reveals the shocking truth about his immortality.</p>
        </div>
        <div class="callout danger reveal" style="border-left: 4px solid #D4A843; background: rgba(212, 168, 67, 0.08); margin-top: 2rem;">
          <span class="callout-label" style="color: #D4A843;">⚠ Ending Requirements</span>
          <ul style="margin-top: 0.5rem; padding-left: 1.5rem; color: #ccc;">
            <li style="margin-bottom: 0.5rem;"><strong>[Reject the Power]:</strong> Leads to the "Greymane's Honor" Ending. (Requires high reputation in Hernand and Pailune).</li>
            <li style="margin-bottom: 0.5rem;"><strong>[Embrace the Abyss]:</strong> Leads to the "Corrupted King" Ending. (Kliff gains exclusive dark magic abilities for Chapter 8).</li>
            <li><strong>[Ask about Myurdin]:</strong> Leads to the <strong>"True Ending"</strong>. (Only available if you saved Yann in Chapter 6 and completed all companion quests).</li>
          </ul>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">

        <h2 class="guide-section-title reveal">5. Chapter 7 Hidden Treasures & Farming</h2>
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">💎</span>
            <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem;">Farming: Void Crystals</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Before leaving the Abyss, farm the respawning "Void Sentinels" near the entrance. They have a 10% chance to drop Void Crystals, which are required to upgrade your Mythic weapons to +10 (Max Level).</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">⚔️</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem;">Blade of the Echoes</h3>
            <p style="font-size: 0.9rem; color: #ccc;">During the "Grand Ocular" puzzle, if you align the light to hit the small gargoyle in the corner instead of the door, a secret pedestal will rise containing this Mythic Shortsword.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🌀</span>
            <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem;">Infinite Abyss Fragment</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Hidden inside the very first Gravity Well you encounter. You must turn the well OFF while standing inside it to reveal a hidden compartment beneath the floorboards.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">💍</span>
            <h3 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.3rem;">Chronos Ring</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Found at the end of the "Path of Echoes". You must watch all 5 ghostly projections without skipping them. The ring grants a +20% duration to all your status buffs.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f39c12;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">📜</span>
            <h3 style="color: #f39c12; font-family: var(--font-display); font-size: 1.3rem;">The Creator's Diary</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Located on a floating island far to the West of the Citadel. Requires a perfect glide using the Abyss Wings and a full Stamina bar. Explains the origin of Kliff's resurrection.</p>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">
        <h2 class="guide-section-title reveal">6. Chapter 7 Completion</h2>
        
        <h3 class="reveal" style="font-family: var(--font-display); font-size: 1.8rem; color: var(--gold); margin-top: 2rem; margin-bottom: 1rem;">✅ Before Making Your Choice...</h3>
        <p class="reveal" style="color: #ccc; margin-bottom: 1.5rem;">This is it. The fate of Pywel is in your hands. Do not trigger the final dialogue until you are absolutely certain:</p>
        
        <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
            <ul class="guide-checklist">
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Secret Boss Defeated:</strong> Did you vanquish the Mirror Paradox?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Mythic Gear:</strong> Have you claimed the Blade of the Echoes?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Max Level Prep:</strong> Did you farm enough Void Crystals for Chapter 8?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Ending Path:</strong> Are you sure which dialogue option you are going to pick?</span>
                    </label>
                </li>
            </ul>
        </div>

        <div class="reveal" style="border-left: 4px solid #D4A843; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
            <div style="font-size: 2.5rem;">🏆</div>
            <div>
                <h4 style="color: #D4A843; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px;">Achievement Unlocked</h4>
                <p style="margin: 0; color: #ccc;"><strong>Master of the Void:</strong> Overcome the gravitational trials and defeat the Abyss Overlord. <span style="color: #888; font-size: 0.9rem;">(50G / Gold)</span></p>
            </div>
        </div>

        <div class="reveal" style="margin-top: 4rem; text-align: right;">
          <a href="chapter-8.php" class="btn btn-gold">Next: Chapter 8 →</a>
        </div>

      </section>

    </main>
  </div>

<?php
$fxTheme = 'void'; include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>