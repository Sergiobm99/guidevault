<?php 
$parentGuide = [
    'name' => 'Crimson Desert',
    'url'  => '/crimson-desert/index.php'
];
$pageTitle = "Prologue: Dead of Night | Crimson Desert Guide";
$pageDesc = "Intrigue, Factions, and the Royal Palace step-by-step walkthrough.";
$bodyClass = "theme-crimson-desert"; 

include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: linear-gradient(to bottom, rgba(8,8,8,0.4) 0%, rgba(8,8,8,1) 100%), url('/crimson-desert/img/prologue.jpg') center/cover no-repeat;"></div>
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="../../">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="../">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Prologue</span>
      </nav>
      <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: PROLOGUE</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem;">Prologue: Dead of Night</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">The Ambush at the Greymane Camp</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Chapter Progress</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#unfamiliar" style="color: var(--text-dim); transition: color 0.2s;">1. Unfamiliar Lands</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#ashes" style="color: var(--text-dim); transition: color 0.2s;">2. In Ashes</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#realm" style="color: var(--text-dim); transition: color 0.2s;">3. Realm of Uncertainty</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">4. Prologue Completion</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="unfamiliar" style="margin-bottom: 4rem;">
        <div class="callout info" style="margin-bottom: 3rem;">
          <span class="callout-label" style="color: var(--gold);">Prologue Overview</span>
          <p style="color: #ccc; margin-top: 0.5rem;"><strong>Recommended Level:</strong> Tutorial Phase<br><strong>Key Unlocks:</strong> Basic Combat Mechanics, Dodge/Parry.<br><strong>Missables:</strong> Tarnished Silver Coin.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. Unfamiliar Lands</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">The prologue serves as an interactive cinematic to ease you into the movement mechanics and the heavy, physics-based combat of Pywel.</p>
        
        <div class="reveal" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin: 2rem 0; overflow-x: auto;">
            <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.2rem; margin-bottom: 1rem; border-bottom: 1px solid rgba(212, 168, 67, 0.2); padding-bottom: 0.5rem;">🎮 Tutorial Controls Cheat Sheet</h4>
            
            <table style="width: 100%; min-width: 500px; text-align: left; border-collapse: collapse; font-family: var(--font-ui); font-size: 0.95rem;">
                <thead>
                    <tr style="color: var(--text-dim); border-bottom: 1px dashed rgba(255,255,255,0.1);">
                        <th style="padding: 0.5rem 0; font-weight: normal; text-transform: uppercase; letter-spacing: 1px;">Action</th>
                        <th style="padding: 0.5rem 0; color: #107C10; font-weight: bold;">Xbox</th>
                        <th style="padding: 0.5rem 0; color: #00439C; font-weight: bold;">PlayStation</th>
                        <th style="padding: 0.5rem 0; color: #ccc; font-weight: bold;">PC (Mouse/KB)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px dashed rgba(255,255,255,0.05);">
                        <td style="padding: 0.8rem 0; color: var(--text);">Light Attack</td>
                        <td style="padding: 0.8rem 0; font-weight: bold; color: #ccc;">RB</td>
                        <td style="padding: 0.8rem 0; font-weight: bold; color: #ccc;">R1</td>
                        <td style="padding: 0.8rem 0; font-weight: bold; color: #ccc;">Left Click (LMB)</td>
                    </tr>
                    <tr style="border-bottom: 1px dashed rgba(255,255,255,0.05);">
                        <td style="padding: 0.8rem 0; color: var(--text);">Heavy Attack</td>
                        <td style="padding: 0.8rem 0; font-weight: bold; color: #ccc;">RT</td>
                        <td style="padding: 0.8rem 0; font-weight: bold; color: #ccc;">R2</td>
                        <td style="padding: 0.8rem 0; font-weight: bold; color: #ccc;">Right Click (RMB)</td>
                    </tr>
                    <tr style="border-bottom: 1px dashed rgba(255,255,255,0.05);">
                        <td style="padding: 0.8rem 0; color: var(--text);">Dodge / Slide</td>
                        <td style="padding: 0.8rem 0; font-weight: bold; color: #ccc;">B</td>
                        <td style="padding: 0.8rem 0; font-weight: bold; color: #ccc;">Circle</td>
                        <td style="padding: 0.8rem 0; font-weight: bold; color: #ccc;">Spacebar</td>
                    </tr>
                    <tr>
                        <td style="padding: 0.8rem 0 0 0; color: var(--text);">Block / Parry</td>
                        <td style="padding: 0.8rem 0 0 0; font-weight: bold; color: #ccc;">LB</td>
                        <td style="padding: 0.8rem 0 0 0; font-weight: bold; color: #ccc;">L1</td>
                        <td style="padding: 0.8rem 0 0 0; font-weight: bold; color: #ccc;">Q</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Speak with Marius & Ross</h4>
              <p style="color: #ccc;">Approach the campfire outside the large wooden structure. Conversing with your fellow mercenaries introduces the dialogue system and establishes the current dire state of the Greymane band.</p>
              
              <div style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1rem; border-radius: 0 4px 4px 0;">
                  <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">📜 Lore Context: The Greymanes</h5>
                  <p style="margin:0; font-size: 0.9rem; color: #ccc;">The Greymanes are a veteran mercenary company led by Kliff. Recently, they took a contract that went horribly wrong, leaving them scattered, wounded, and hunted in the frozen north. This campfire conversation reveals just how desperate your men are for supplies.</p>
              </div>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Enter the Cabin</h4>
              <p style="color: #ccc;">Step inside the main double doors. This will trigger the Black Bear ambush cutscene, ending the peaceful portion of the prologue.</p>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section reveal" id="ashes" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">2. In Ashes (Combat Tutorial)</h2>
        
        <div class="callout danger reveal" style="margin-bottom:2rem; background: rgba(140, 45, 45, 0.08); border-left: 4px solid #8C2D2D; padding: 1.5rem;">
          <span class="callout-label" style="color: #ff4d4d; font-weight: bold; text-transform: uppercase;">⚠ Combat Warning</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Do not button mash. Crimson Desert punishes reckless swinging. Focus on holding block and attacking only when the enemy's weapon bounces off your shield.</p>
        </div>

        <ul class="step-list">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Annihilate the Black Bears</h4>
              <p style="color: #ccc;">You are thrust into combat against 4 Black Bear soldiers. Use light attacks to break their guard. If you get surrounded, use the dodge slide to reposition. Let your AI companions draw aggro from at least two of them.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Help Naira, Oongka, and Yann</h4>
              <p style="color: #ccc;">Move through the burning camp to assist your key companions. Each rescue triggers a small combat wave. You will find Oongka pinned near the collapsed watchtower—you must use a Heavy Attack to shatter the debris trapping him.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">3</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Scripted Defeat</h4>
              <p style="color: #ccc;">At the end of the camp, you will face Myurdin. You are <strong>supposed to lose this fight</strong>. Do not waste any healing items here. Once your health drops to zero, a cutscene will play showing Kliff's apparent death.</p>
              
              <div style="background: rgba(140, 45, 45, 0.1); border: 1px solid rgba(140, 45, 45, 0.3); padding: 1.5rem; margin-top: 1rem; border-radius: 4px;">
                  <h5 style="color: #ff4d4d; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">⚔️ Boss Analysis: Myurdin</h5>
                  <p style="font-size: 0.95rem; color: #ccc; margin: 0;">Even though you cannot win, pay attention to his <em>Crimson Arc</em> attack. He telegraphs this by dragging his sword on the ground, creating sparks. Memorizing this dodge timing now will save you hours of frustration when you face him for real in Chapter 9.</p>
              </div>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section reveal" id="realm" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">3. Realm of Uncertainty</h2>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Walk into the Light</h4>
              <p style="color: #ccc;">You are transported to a mysterious dark dimension (The Abyss). Simply walk forward towards the glowing light in the distance. You will hear esoteric voices hinting at the game's deeper lore.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Awaken and Follow Sebastian</h4>
              <p style="color: #ccc;">Back in the real world, you awaken with mysterious new markings. Follow the friendly NPC, Sebastian, down the mountain path to reach the starting city of Hernand.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">3</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Settle in at the Traveler's Camp</h4>
              <p style="color: #ccc;">Upon arriving in Hernand, you will unlock your first Temporary Lodging. Interact with the <strong>Supply Chest</strong> inside—this system automatically recovers any loot you failed to pick up during the Black Bear ambush. Use the bed to clear your Exhaustion status before heading out.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">4</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">First Activities & Inventory Cap</h4>
              <p style="color: #ccc;">Before triggering the first main quest (<em>"Actions Speak Louder Than Words"</em>), test your strength at the <strong>Arm Wrestling</strong> table by rapidly mashing the prompt to earn your first coins. Head to the local vendor, sell your junk items (like goblets and old lanterns), and immediately purchase a <strong>Small Bag</strong>. Expanding your inventory space early is crucial in Pywel.</p>
              <p style="color:var(--gold); font-size:0.85rem; margin-top:0.5rem; font-family:var(--font-ui); text-transform:uppercase; letter-spacing:0.1em;"><strong>Rewards:</strong> Standard Inventory Expansion Tool x10, Oats x5, Blackberry</p>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">4. Prologue Completion</h2>
        <p class="reveal" style="color: #ccc; margin-bottom: 1.5rem;">Finishing the prologue sets the stage for the open-world portion of the game. You are now free to explore the Hernand Region.</p>
        
        <div class="reveal" style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
            <div style="font-size: 2.5rem;">🏆</div>
            <div>
                <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px; margin-top: 0;">Achievement Unlocked</h4>
                <p style="margin: 0; color: #ccc;"><strong>From the Ashes:</strong> Survive the ambush at the Greymane Camp and awaken in Hernand. <span style="color: #888; font-size: 0.9rem;">(15G / Bronze)</span></p>
            </div>
        </div>

        <div class="chapter-nav">
            <div></div> <a href="/crimson-desert/chapters/chapter-1.php" class="btn btn-gold">Next: Chapter 1 →</a>
        </div>

      </section>

    </main>
  </div>

<?php 
$fxTheme = 'sand'; include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>