<?php 
$pageTitle = "Chapter 8: The Fallen Kingdom | Crimson Desert Guide";
$pageDesc = "The final assault on Demeniss. Master the urban infiltration, raid the Royal Armory, solve the Vault puzzles, and defeat the Corrupted King.";

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 45vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(212, 175, 55, 0.15) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(20, 15, 10, 0.8) 0%, transparent 60%), linear-gradient(180deg, #0a0805 0%, #1a1510 60%, #0a0805 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="../../">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="../">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Chapter 8</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Chapter 8: The Fallen Kingdom</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">The Siege of Demeniss and the Royal Coup</p>
    </div>
  </header>

  <div class="guide-layout" style="grid-template-columns: 1fr; max-width: 950px; margin: 0 auto;">
    <main class="guide-content">

      <section class="guide-section reveal">
        <div class="callout info" style="margin-bottom: 3rem;">
          <span class="callout-label">Chapter 8 Overview</span>
          <p><strong>Primary Location:</strong> Demeniss Royal Capital<br>
             <strong>Key Unlocks:</strong> Royal Guard Disguise, Ultimate Mercenary Synergy, The King’s Justice (Skill).<br>
             <strong>Finality:</strong> This chapter is the point of no return for several side-quests. Ensure you have completed all character missions for your companions before starting the siege.</p>
        </div>

        <h2 class="guide-section-title">1. Infiltrating the Upper District</h2>
        <p>The city is under martial law. To reach the Palace without fighting an entire army, Kliff must utilize the high-level stealth skills learned in Pailune.</p>

        <div class="reveal" style="background: rgba(46, 204, 113, 0.1); border-left: 3px solid #2ecc71; padding: 1.2rem; margin-top: 1.5rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0; display: flex; gap: 1rem; align-items: flex-start;">
            <div style="font-size: 1.8rem;">🤝</div>
            <div>
                <h5 style="color: #2ecc71; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.2rem; letter-spacing: 0.5px;">Tactical Tip: Best Companion for the Siege</h5>
                <p style="margin:0; font-size: 0.95rem; color: #ccc;">Keep <strong>Ross</strong> close during the push to the inner gates. His <em>"Shield Breaker"</em> passive allows Kliff to easily stagger the heavily armored Royal Halberdiers guarding the corridors, saving you precious time on the permadeath clock.</p>
            </div>
        </div>

        <div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src="/crimson-desert/img/castle.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.3);" alt="The Siege of Demeniss">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The once-glorious capital of Demeniss now burns under the rebellion.</p>
        </div>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">Stealing the Royal Seal</h4>
              <p>Infiltrate the Captain of the Guard's manor in the West District. Do not kill the guards; use smoke bombs to navigate. The seal is inside a lockbox on the second floor. This item allows you to pass through the inner gates unchallenged.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">Coordinating the Greymanes</h4>
              <p>Meet Oongka and Yann at the secret sewer entrance. You must assign your mercenary bands to three different distraction points: the Market, the Docks, and the Barracks.</p>
              
              <div class="callout danger" style="margin-top: 1rem; border-left: 4px solid var(--red); background: rgba(140, 45, 45, 0.08);">
                <span class="callout-label" style="color: var(--red);">⚠ Tactical Advice & Permadeath Warning</span>
                <p><strong>Send Yann to the Barracks:</strong> His stealth skills will delay the elite guards the longest. <strong>Send Oongka to the Market:</strong> He will destroy the supply carts. <em>Warning:</em> From the moment you breach the inner gate, a hidden 45-minute timer starts. If you don't reach the throne room in time, your assigned companions will die permanently.</p>
              </div>
            </div>
          </li>
        </ul>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">2. The Royal Dungeons & The Armory</h2>
        <p class="reveal">Before heading straight to the Vault, taking a small detour can grant you the best consumable items in the game and save a key NPC.</p>

        <div class="guide-accordion open reveal" id="acc-c8-dungeon" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c8-dungeon')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Optional Mini-Boss: The King's Executioner</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p>Instead of taking the grand staircase, head down the spiral steps on the left to the Dungeons. You will find the Executioner guarding the cells.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>The Fight:</strong> He uses a giant guillotining axe. His attacks cannot be blocked with a standard shield, you must use <strong>Perfect Dodge</strong>. Hit him with Fire-infused attacks (from Chapter 6) to melt his heavy armor.</li>
                <li><strong>The Rescue:</strong> Defeating him yields the <em>Dungeon Master Key</em>. Open Cell #4 to rescue the exiled High Priest. He will fully heal you and grant Kliff the "Divine Blessing" buff (+30% Max HP) for the final boss.</li>
              </ul>
            </div>
          </div>
        </div>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">Looting the Royal Armory</h4>
              <p>Just past the dungeons is the Armory. This area contains 3 chests holding <strong>Flawless Royal Steel</strong> and <strong>Grand Elixirs of Rejuvenation</strong>. Grab these to upgrade your weapons to their absolute maximum limit before the finale.</p>
            </div>
          </li>
        </ul>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">3. The Royal Vault Puzzles & Final Rift</h2>
        <p class="reveal">To reach the King, you must pass through the ancient vault of the first Unifier. This puzzle requires you to use all four elemental fragments acquired in previous chapters.</p>

        <div class="reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0;">
            <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">📜 Lore Context: The Unifier's Vault</h5>
            <p style="margin:0; font-size: 0.9rem; color: #ccc;">The first King of Demeniss, known as The Unifier, built this vault not to protect gold, but to seal away the Abyss Fragments. The current Corrupted King broke the seal to harness their power, plunging the capital into madness.</p>
        </div>
<div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src="/crimson-desert/img/insideofcastle.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.3);" alt="The Royal Vault of Pywel">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The ancient Vault of the First Unifier holds the secrets of the elements.</p>
        </div>
        <div class="guide-accordion open reveal" id="acc-c8-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c8-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Puzzle: The Four Pillars of Pywel</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p>Four statues represent the regions of Pywel. You must activate them in the order of the sun's journey (East to West).</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>Step 1:</strong> Use the <span style="color: #3498db; font-weight: bold;">Fragment of the Tide</span> on the East Pillar (Delesyia).</li>
                <li style="margin-bottom: 0.5rem;"><strong>Step 2:</strong> Use the <span style="color: #f39c12; font-weight: bold;">Fragment of the Sands</span> on the South Pillar (Akapen).</li>
                <li style="margin-bottom: 0.5rem;"><strong>Step 3:</strong> Use the <span style="color: #e74c3c; font-weight: bold;">Fragment of Ember</span> on the West Pillar (Harsand).</li>
                <li style="margin-bottom: 0.5rem;"><strong>Step 4:</strong> Use the <span style="color: #9b59b6; font-weight: bold;">Fragment of Deception</span> on the North Pillar (Pailune).</li>
                <li><strong>The Result:</strong> The floor will descend, revealing the hidden elevator to the Throne Room.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion open reveal" id="acc-c8-rift" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c8-rift')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Secret: The Royal Abyss Rift</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p>While riding the elevator down, look at the wall moving past you. Midway down, there is a cracked seal glowing purple. Use your <strong>Axiom Force Grapple</strong> to rip the seal off and jump into the hole.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>The Challenge:</strong> You must defeat a clone of Kliff from the Prologue. He has all your stats. Unequip your health potions before entering, or his clone will use them to heal!</li>
                <li><strong>Reward:</strong> The <em>Demeniss Abyss Fragment</em> (Doubles your maximum health permanently).</li>
              </ul>
            </div>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">4. Chapter Boss: The Corrupted King</h2>
        <p class="reveal">The King has been consumed by the Abyss. He is a massive, knight-like figure who can warp reality within the throne room.</p>

        <div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src="/crimson-desert/img/darkknight.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(138, 43, 226, 0.3);" alt="The Corrupted King">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The King awaits in the shattered Throne Room.</p>
        </div>

        <div class="guide-table-wrap reveal" style="margin-top: 2rem; overflow-x: auto;">
          <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold);">
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Phase</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Boss Ability</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Winning Strategy</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold;">Phase 1 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Royal Might)</span></td>
                <td style="padding: 1rem; color: #ccc;">Greatsword Shockwaves</td>
                <td style="padding: 1rem; color: #ccc;">The King strikes the floor, creating gold shockwaves. <strong>Jump and Glide</strong> using your Abyss Wings to stay in the air. Attack his cape to shred his defense.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold;">Phase 2 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Abyssal Void)</span></td>
                <td style="padding: 1rem; color: #ccc;">Gravity Flux</td>
                <td style="padding: 1rem; color: #ccc;">He flips the room. You will be fighting on the walls. Use the <strong>[Sand-Dash]</strong> to close the gap before he fires his dark beam. Parry his overhead strike to trigger a cinematic grapple.</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: bold;">Final Phase <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(The Sacrifice)</span></td>
                <td style="padding: 1rem; color: #ccc;">Army of Shadows</td>
                <td style="padding: 1rem; color: #ccc;">He summons shadow copies of your own mercenaries. <strong>Do not fight them.</strong> Target the King directly with your ultimate ability: <strong>The King's Justice</strong>. One clean hit to the chest ends the fight.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="callout abyss reveal" style="margin-top:2rem; background: rgba(138, 43, 226, 0.08); border-left: 4px solid #A29BFE;">
          <span class="callout-label" style="color: #A29BFE;">Final Chapter Reward</span>
          <p>Defeating the King grants the <strong>"Crown of Pywel"</strong>. This is the final progression item. It doubles your Abyss Energy capacity and allows you to stay in the "Transcendence" combat mode for 30 seconds.</p>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">

        <h2 class="guide-section-title reveal">5. Chapter 8 Hidden Treasures & Upgrades</h2>
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">⚔️</span>
            <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem;">The King’s Justice (Mythic Greatsword)</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Automatically awarded after the boss fight. It is the strongest physical weapon in the game and has a 20% chance to execute low-health enemies instantly.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">👑</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem;">Royal Signet Ring</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Inside the Royal Vault, before completing the puzzle, look behind the Lion statue. It grants +50% Gold from all quests and enemies.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">📜</span>
            <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem;">The Final Will</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Hidden in the King's bedchamber (accessible after the fight). Reading this unlocks the "True Ending" sequence for Chapter 9.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🏺</span>
            <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem;">Relic of the First King</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Underneath the throne. Use the <strong>Axiom Force</strong> to lift the seat after the boss has been defeated. Completes the Civilization Relic set.</p>
          </div>
        </div>
<div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px; margin-top: 2.5rem;">
            <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem;">📈 Pro-Tip: Infinite "Flawless Royal Steel" Farm</h4>
            <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">Need to upgrade multiple weapons to max level before the Finale? Before dropping down the elevator to the Throne Room, rest at the Vault checkpoint. Run back to the Armory corridor and assassinate the two Elite Halberdiers patrolling there. They have a 15% drop rate for <strong>Flawless Royal Steel</strong>. Run back, rest, and repeat. You can max out your arsenal in about 20 minutes.</p>
        </div>
        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">
        <h2 class="guide-section-title reveal">6. Chapter 8 Completion</h2>
        
        <h3 class="reveal" style="font-family: var(--font-display); font-size: 1.8rem; color: var(--gold); margin-top: 2rem; margin-bottom: 1rem;">✅ Before Entering the Throne Room...</h3>
        <p class="reveal" style="color: #ccc; margin-bottom: 1.5rem;">The fight against the Corrupted King locks out the rest of the capital. Have you secured these assets?</p>
        
        <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
            <ul class="guide-checklist">
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Companions Saved:</strong> Did you assign Yann and Oongka correctly to prevent their deaths?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Divine Blessing:</strong> Did you rescue the High Priest from the Dungeons?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Max Health:</strong> Did you clear the Royal Abyss Rift and defeat your clone?</span>
                    </label>
                </li>
            </ul>
        </div>

        <div class="reveal" style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
            <div style="font-size: 2.5rem;">🏆</div>
            <div>
                <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px;">Achievement Unlocked</h4>
                <p style="margin: 0; color: #ccc;"><strong>The Throne is Empty:</strong> Storm the capital, conquer the vault, and dethrone the Corrupted King. <span style="color: #888; font-size: 0.9rem;">(50G / Gold)</span></p>
            </div>
        </div>

        <div class="reveal" style="margin-top: 4rem; text-align: right;">
          <a href="chapter-9.php" class="btn btn-gold">Next: Chapter 9 (Finale) →</a>
        </div>

      </section>

    </main>
  </div>

<?php
$fxTheme = 'embers'; include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>