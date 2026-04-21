<?php 
$pageTitle = "Chapter 2: Shadows of Pailune | Crimson Desert Guide";
$pageDesc = "Intrigue, Factions, and the Royal Palace step-by-step walkthrough. Discover all hidden treasures and defeat the Shadow Inquisitor.";

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg"></div>
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="../../">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="../">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Chapter 2</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Chapter 2: Shadows of Pailune</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">Intrigue, Factions, and the Royal Palace</p>
    </div>
  </header>

  <div class="guide-layout" style="grid-template-columns: 1fr; max-width: 900px; margin: 0 auto;">
    <main class="guide-content">

      <section class="guide-section reveal">
        <div class="callout info" style="margin-bottom: 3rem;">
          <span class="callout-label">Chapter 2 Overview</span>
          <p><strong>Primary Location:</strong> Pailune Capital City<br>
             <strong>Key Unlocks:</strong> Faction Reputation System, Stealth Takedowns, Fast Travel (Pailune Hub).<br>
             <strong>Difficulty Spike:</strong> High. Enemies in the city districts are better armored and move in larger groups.</p>
        </div>

        <h2 class="guide-section-title">1. Entering the Golden City</h2>
        <p>Your arrival at the gates of Pailune marks the end of the tutorial phase. From here, Kliff must navigate the complex web of loyalties between the High Council and the commoners.</p>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">The Gatekeeper’s Toll</h4>
              <p>The main gate is closed to mercenaries. You have two choices to enter the city: 
                 <br><br><strong>A) Bribe the Guard:</strong> Costs 500 Gold for immediate entry. 
                 <br><strong>B) The Smuggler’s Tunnel:</strong> Free, but involves a platforming section under the bridge. We highly recommend option B to find early hidden loot.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">Hidden Treasure: Smuggler’s Stash</h4>
              <p>If you took the tunnel, look for a breakable wooden wall behind the third stone pillar. Use a heavy attack to break it. Inside is a chest containing the <strong>"Old Pailune Coin"</strong> (Sells for 1,200 Gold) and <span style="color: #3498db; font-weight: bold; background: rgba(52, 152, 219, 0.1); padding: 2px 6px; border-radius: 4px;">5x Throwing Knives</span>.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">3</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">Side Quest: The Beggar's Secret</h4>
              <p>Just inside the city walls, near the stables, sits an old beggar. Give him 10 Gold. Instead of thanking you, he mutters a riddle about the "weeping gargoyle". Go to the central fountain and interact with the western gargoyle statue to find a <strong>Small Mana Crystal</strong>.</p>
            </div>
          </li>
        </ul>
<li class="step reveal">
            <div class="step-num">4</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">Pailune Central Market (What to Buy)</h4>
              <p>Before heading into the dangerous Low District, visit the merchants in the main plaza. We highly recommend buying these specific items:</p>
              
              <div class="guide-table-wrap" style="margin-top:1rem; overflow-x: auto;">
                <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
                  <thead>
                    <tr style="border-bottom: 2px solid var(--gold);">
                      <th style="padding: 0.8rem 1rem; text-align: left; color: var(--gold);">Item</th>
                      <th style="padding: 0.8rem 1rem; text-align: left; color: var(--gold);">Cost</th>
                      <th style="padding: 0.8rem 1rem; text-align: left; color: var(--gold);">Why you need it</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <td style="padding: 0.8rem 1rem; font-weight: bold; color: #fff;">Smoke Bombs (x3)</td>
                        <td style="padding: 0.8rem 1rem; color: #ccc;">300 Gold</td>
                        <td style="padding: 0.8rem 1rem; color: #ccc;">Essential for the stealth section coming up next.</td>
                    </tr>
                    <tr>
                        <td style="padding: 0.8rem 1rem; font-weight: bold; color: #fff;">Pailune Guard Armor</td>
                        <td style="padding: 0.8rem 1rem; color: #ccc;">1,500 Gold</td>
                        <td style="padding: 0.8rem 1rem; color: #ccc;">Provides high physical defense. Worth selling old loot to afford this.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">2. Mission: Whispers in the Slums</h2>
        <p class="reveal">To find the missing Greymane scouts, you must infiltrate the Pailune Low District and contact the informant known as 'The Raven'.</p>

        <div class="guide-accordion open reveal" id="acc-m1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-m1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Part 1: Infiltration & Stealth Mechanics</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px; padding: 1.5rem;">
            <div class="guide-accordion-inner">
              <p style="margin-bottom: 1rem;">The Slums are heavily patrolled by the City Watch. This is the first time the <strong>Stealth Meter</strong> becomes vital. Use the rooftops to stay out of sight.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>Observation:</strong> Watch the patrol paths of the guards. They carry lanterns at night, making their vision cones easy to spot.</li>
                <li style="margin-bottom: 0.5rem;"><strong>The Lure:</strong> Use the "Whistle" ability while hiding in hay bales or dark corners to draw a single guard away from the group for a non-lethal takedown.</li>
                <li><strong>The Raven's House:</strong> Located at the very end of the 'Street of Tears'. Do not enter through the front door—climb the balcony on the left side to avoid the ambush inside.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="callout danger reveal" style="margin-top:2rem; background: rgba(140, 45, 45, 0.08); border-left: 4px solid #8C2D2D;">
          <span class="callout-label" style="color: #ff4d4d;">⚠ Missable Item Warning</span>
          <p><strong>The Raven's Ring:</strong> During your dialogue with The Raven, if you choose the aggressive option <em>[Intimidate]</em>, you will get the information but lose the chance to get his ring. Choose <strong>[Offer Help]</strong> to trigger a brief side-quest that rewards you with his ring, which grants a permanent <span style="color: #2ecc71; font-weight: bold; background: rgba(46, 204, 113, 0.1); padding: 2px 6px; border-radius: 4px;">+15% Stealth Speed</span> bonus.</p>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">3. The Noble Masquerade</h2>
        <p class="reveal">This mission requires Kliff to dress as a high-ranking officer to enter the Royal Ballroom and steal the Council's defense plans.</p>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">Dialogue Puzzle: Blending In</h4>
              <p>In the ballroom, several nobles will speak to you. To avoid raising the suspicion meter, use these exact answers:
                 <br><br>• Noble Woman: <em>"The King's health is our only concern."</em>
                 <br>• General Myurdin's Aide: <em>"I serve the land, not the individual."</em>
              </p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">The Vault Heist</h4>
              <p>Once you reach the King's study, use your <strong>Axiom Force</strong> to rotate the three animal statues in the room. The correct combination is: <strong>Eagle (North), Lion (South), Snake (West).</strong> This opens the vault containing the plans.</p>
            </div>
          </li>
        </ul>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">4. Chapter Boss: The Shadow Inquisitor</h2>
        <p class="reveal">As you try to escape the Palace with the plans, you will be cornered in the courtyard by the Inquisitor, a master of dark magic and twin daggers.</p>

        <div class="guide-table-wrap reveal" style="margin-top: 2rem; overflow-x: auto;">
          <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold);">
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Phase</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Boss Mechanic</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Winning Strategy</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold;">Phase 1 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(100-70% HP)</span></td>
                <td style="padding: 1rem; color: #ccc;">Rapid Dagger Lunges</td>
                <td style="padding: 1rem; color: #ccc;">Don't try to parry every hit. Hold Block and wait for his 4-hit combo to end, then strike once with a Heavy Attack.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold;">Phase 2 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(70-30% HP)</span></td>
                <td style="padding: 1rem; color: #ccc;">Shadow Clones</td>
                <td style="padding: 1rem; color: #ccc;">He will summon 3 clones. The real Inquisitor is the only one who <strong>casts a shadow on the floor</strong>. Focus your attacks only on him to break the illusion.</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: bold;">Final Phase <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(30-0% HP)</span></td>
                <td style="padding: 1rem; color: #ccc;">Abyss Nova</td>
                <td style="padding: 1rem; color: #ccc;">He prepares a massive AoE explosion. When he starts hovering, use your <strong>Axiom Force Grapple</strong> to pull yourself to the chandeliers above the arena to stay safe.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="callout abyss reveal" style="margin-top:2rem; background: rgba(138, 43, 226, 0.08); border-left: 4px solid #A29BFE;">
          <span class="callout-label" style="color: #A29BFE;">Abyss Artifact Reward</span>
          <p>Defeating the Inquisitor grants the <strong>"Fragment of Deception"</strong>. This allows Kliff to create a temporary shadow decoy during combat, which is perfect for escaping tough situations or distracting heavy enemies.</p>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">

        <h2 class="guide-section-title reveal">5. Chapter 2 Hidden Collectibles</h2>
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">👑</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem;">Royal Crest #1</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Hidden behind the hanging tapestry in the King's dining hall. Requires jumping from the upper balcony to reach the hidden alcove.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">📚</span>
            <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem;">Ancient Tome</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Found in the library's secret compartment. Pull the blue-covered book on the third shelf near the fireplace.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">✉️</span>
            <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem;">Mercenary Note</h3>
            <p style="font-size: 0.9rem; color: #ccc;">In the Slums tavern, look under the second table on the right. It details the exact location of the Midnight Peddler (Secret Vendor).</p>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">
        <h2 class="guide-section-title reveal">6. Chapter 2 Completion</h2>
        
        <h3 class="reveal" style="font-family: var(--font-display); font-size: 1.8rem; color: var(--gold); margin-top: 2rem; margin-bottom: 1rem;">✅ Before Leaving Pailune...</h3>
        <p class="reveal" style="color: #ccc; margin-bottom: 1.5rem;">Ensure you have everything ready before moving to the Frozen Peaks in Chapter 3:</p>
        
        <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
            <ul class="guide-checklist">
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Stealth Bonus:</strong> Did you spare the Raven and get his ring?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Collectibles:</strong> Have you grabbed the Royal Crest and Ancient Tome?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Fast Travel:</strong> Did you synchronize with the Pailune Watchtower?</span>
                    </label>
                </li>
            </ul>
        </div>

        <div class="reveal" style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
            <div style="font-size: 2.5rem;">🏆</div>
            <div>
                <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px;">Achievement Unlocked</h4>
                <p style="margin: 0; color: #ccc;"><strong>The Shadow's Fall:</strong> Defeat the Shadow Inquisitor and secure the defense plans. <span style="color: #888; font-size: 0.9rem;">(25G / Silver)</span></p>
            </div>
        </div>

        <div class="reveal" style="margin-top: 4rem; text-align: right;">
          <a href="chapter-3.php" class="btn btn-gold">Next: Chapter 3 →</a>
        </div>

      </section>

    </main>
  </div>

<?php
$fxTheme = 'sand'; include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>