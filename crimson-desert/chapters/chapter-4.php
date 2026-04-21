<?php 
$pageTitle = "Chapter 4: The Endless Sand | Crimson Desert Guide";
$pageDesc = "Master the survival mechanics of the Akapen Desert, find the Nomad Camp, solve the Mirage Puzzles, and defeat the Colossal Sand-Burrower.";

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(212, 160, 60, 0.2) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(60, 30, 10, 0.7) 0%, transparent 60%), linear-gradient(180deg, #080808 0%, #1a120b 60%, #080808 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="../../">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="../">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Chapter 4</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Chapter 4: The Endless Sand</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">Heatstroke, Nomads, and the Sunken Temple</p>
    </div>
  </header>

  <div class="guide-layout" style="grid-template-columns: 1fr; max-width: 900px; margin: 0 auto;">
    <main class="guide-content">

      <section class="guide-section reveal">
        <div class="callout danger" style="margin-bottom: 3rem; background: rgba(140, 45, 45, 0.08); border-left: 4px solid #8C2D2D;">
          <span class="callout-label" style="color: #ff4d4d;">⚠ Survival Mechanic: Heatstroke & Quicksand</span>
          <p>Walking in the Akapen Desert during the day causes the <strong>Heatstroke</strong> debuff. Your maximum stamina will decrease every minute. Travel at night or consume "Chilled Cactus Juice". Additionally, watch out for patches of darker, shifting sand—these are <strong>quicksand pits</strong> that will instantly drown Kliff.</p>
        </div>

        <h2 class="guide-section-title">1. Crossing the Sea of Dust</h2>
        <p>Your journey begins at the Southern Pass. The goal is to reach the Nomad Capital, but the path is obscured by constant sandstorms.</p>

        <div class="reveal" style="background: rgba(46, 204, 113, 0.1); border-left: 3px solid #2ecc71; padding: 1.2rem; margin-top: 1.5rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0; display: flex; gap: 1rem; align-items: flex-start;">
            <div style="font-size: 1.8rem;">🤝</div>
            <div>
                <h5 style="color: #2ecc71; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.2rem; letter-spacing: 0.5px;">Tactical Tip: Best Companion for the Desert</h5>
                <p style="margin:0; font-size: 0.95rem; color: #ccc;">Bring <strong>Oongka</strong> with you. Being a native of the southern tribes, his passive ability <em>"Desert Born"</em> halves the rate at which Kliff's stamina drains during the day. He also has unique dialogue options with the Nomad merchants.</p>
            </div>
        </div>

        <ul class="step-list">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">The Camel Merchant</h4>
              <p>Standard horses will struggle in the deep sand. Locate the merchant <strong>Zaid</strong> at the entrance of the desert. He will trade a Camel for 2,000 Gold. Camels don't lose stamina in sand and have an innate resistance to heat.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">Navigate by the Stars</h4>
              <p>During a sandstorm, your minimap will glitch. Look up at the sky; the <strong>Abyss Constellation</strong> (three bright purple stars) always points exactly North toward the Sunken Temple.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">3</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">The Night Traders</h4>
              <p>While crossing, you may spot a blue campfire. These belong to the Silent Nomads, who only trade at night. Stop here to buy <em>"Nomad's Silk"</em>, a crafting material you will need later to upgrade your heat-resistant armor.</p>
              
              <div style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1rem; border-radius: 0 4px 4px 0;">
                  <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">📜 Lore Context: The Silent Nomads</h5>
                  <p style="margin:0; font-size: 0.9rem; color: #ccc;">The Silent Nomads cut out their own tongues as a rite of passage, communicating entirely through hand signs and glowing dust. They are neutral to the Demeniss war and hold the ancient secrets of navigating the shifting sands without disturbing the burrowers.</p>
              </div>
            </div>
          </li>
        </ul>

        <div class="callout danger reveal" style="margin-top:2rem; border-left: 4px solid var(--gold); background: rgba(212, 168, 67, 0.08);">
          <span class="callout-label" style="color: var(--gold);">Enemy Ambush: Dune Scorpions</span>
          <p>If your controller starts vibrating softly while riding, a Dune Scorpion is tracking you underground. <strong>Do not dismount.</strong> Sprint in a zig-zag pattern until the vibration stops. If you fight them, use heavy blunt weapons to crack their carapace.</p>
        </div>
<div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px; margin-top: 2rem;">
            <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem;">💰 Pro-Tip: The Dune Scorpion Gold Farm</h4>
            <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">Need gold for the legendary Nomad Armor? Ride your camel in circles around the <em>Southern Pass</em> to intentionally trigger Dune Scorpion ambushes. Use blunt weapons to harvest their <strong>Intact Carapaces</strong>, which sell for 400 Gold each to the Night Traders. You can easily make 5,000 Gold in 15 minutes.</p>
        </div>
        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">2. The Nomad Encampment & Side Quests</h2>
        <p class="reveal">Before reaching the temple, you will discover the hidden Oasis Encampment. This acts as your primary hub for Chapter 4.</p>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">Upgrade your Waterskin</h4>
              <p>Speak to the camp Elder. He will upgrade your standard flask into a <strong>Nomad's Waterskin</strong>, which holds 5 charges instead of 3 and prevents water from evaporating in the heat.</p>
            </div>
          </li>
        </ul>

        <div class="guide-accordion open reveal" id="acc-c4-sq" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c4-sq')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Crucial Side Quest: The Lost Caravan</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px; padding: 1.5rem;">
            <div class="guide-accordion-inner">
              <p style="margin-bottom: 1rem;">Do not skip this quest! Talk to the crying merchant near the tents. He asks you to find his lost caravan to the East.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>The Location:</strong> Follow the trail of broken barrels to a canyon. You will find the caravan surrounded by Desert Bandits.</li>
                <li><strong>The Choice:</strong> After defeating the bandits, you can return the goods (Gain +500 Nomad Reputation) or keep them (Gain 4,000 Gold). <strong>Choose the Reputation.</strong> High reputation unlocks the legendary Nomad Armor set at the vendor.</li>
              </ul>
            </div>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">3. The Sunken Temple & The Oasis Rift</h2>
        <p class="reveal">To advance the story, you must enter the Sunken Temple of Akapen. This area features the most complex light-based puzzles in the game.</p>
<div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src="/crimson-desert/img/desert-sanddunes.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.3);" alt="The Sunken Temple of Akapen">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The entrance to the Sunken Temple is half-buried under centuries of shifting sand.</p>
        </div>
        <div class="guide-accordion open reveal" id="acc-c4-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c4-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Puzzle: The Mirage Mirrors</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px; padding: 1.5rem;">
            <div class="guide-accordion-inner">
              <p style="margin-bottom: 1rem;">In the main hall, you must redirect sunlight to hit the central pedestal. However, some mirrors are "Mirages" (illusions).</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>The Trick:</strong> Use your <em>Abyss Vision</em> to identify which mirrors are real. Real mirrors will have a faint purple glow around the edges.</li>
                <li><strong>Solution:</strong> Rotate the first real mirror 45 degrees East. Use your Axiom Force to pull the second mirror closer to the window. The light will bounce and reveal the hidden staircase.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion open reveal" id="acc-c4-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c4-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Secret: The Oasis Abyss Rift</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px; padding: 1.5rem;">
            <div class="guide-accordion-inner">
              <p style="margin-bottom: 1rem;">Before proceeding down the temple stairs, exit through the broken eastern wall. You will find a small pool of water.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>Unlocking the Rift:</strong> Wait until precisely midnight (in-game time). The moon's reflection on the water will turn purple, opening the portal to the <em>Drowning Void</em>.</li>
                <li><strong>The Challenge:</strong> Inside, you must defeat 3 waves of Elite Sand-Stalkers without using healing potions. The reward is the <em>Akapen Abyss Fragment</em> (+10% Movement Speed in combat).</li>
              </ul>
            </div>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">4. Chapter Boss: Colossal Sand-Burrower</h2>
        <p class="reveal">This massive centipede-like creature attacks from beneath the sand. It is a battle of patience and timing.</p>

        <div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src=/crimson-desert/img/worn.jpg style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.3);" alt="Colossal Sand-Burrower">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The Colossal Sand-Burrower guards the lower depths of the Sunken Temple.</p>
        </div>

        <div class="guide-table-wrap reveal" style="margin-top: 2rem; overflow-x: auto;">
          <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold);">
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Phase</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Boss Attack</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">How to Win</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold;">Phase 1 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Submerged)</span></td>
                <td style="padding: 1rem; color: #ccc;">Sand Ripples</td>
                <td style="padding: 1rem; color: #ccc;">The boss stays underground. Watch the sand ripples. When it lunges, <strong>Perfect Parry</strong> its head to force it onto the surface.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold;">Phase 2 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Exposed)</span></td>
                <td style="padding: 1rem; color: #ccc;">Acid Spit</td>
                <td style="padding: 1rem; color: #ccc;">It will spit acid in a cone. Use your <strong>Axiom Force Grapple</strong> to launch Kliff into the air and perform a Plunging Heavy Attack on the boss's soft back.</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: bold;">Final Phase <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Enraged)</span></td>
                <td style="padding: 1rem; color: #ccc;">Whirlpool</td>
                <td style="padding: 1rem; color: #ccc;">The boss creates a sand vortex that pulls you in. Equip your Bow and hit the <strong>three glowing segments</strong> on its tail to break the vortex and trigger the execution finisher.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="callout abyss reveal" style="margin-top:2rem; background: rgba(138, 43, 226, 0.08); border-left: 4px solid #A29BFE;">
          <span class="callout-label" style="color: #A29BFE;">Artifact Reward</span>
          <p>Defeating the Sand-Burrower grants the <strong>"Fragment of the Sands"</strong>. This unlocks the <strong>Sand-Dash</strong> ability, allowing Kliff to move rapidly across any surface (including water) for a short duration.</p>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">

        <h2 class="guide-section-title reveal">5. Chapter 4 Hidden Treasures & Materials</h2>
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🗡️</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem;">Nomad’s Curved Dagger</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Hidden in the "Small Oasis" to the West. You must dive into the water and find a small underwater tunnel leading to a secret air pocket.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🛡️</span>
            <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem;">Sun-Kissed Shield</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Located in the Sunken Temple. In the mirror room, redirect the light to the <em>small</em> statue on the left instead of the main door.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🏺</span>
            <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem;">Ancient Akapen Urn</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Found at the top of the "Leaning Tower" ruins. Requires a high level of stamina or the Sand-Dash ability to reach the summit.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🌺</span>
            <h3 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.3rem;">Farming: Desert Rose</h3>
            <p style="font-size: 0.9rem; color: #ccc;">A rare alchemy ingredient. It only spawns on the eastern dunes right after a Sandstorm ends. Essential for crafting Max Health potions.</p>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">
        <h2 class="guide-section-title reveal">6. Chapter 4 Completion</h2>
        
        <h3 class="reveal" style="font-family: var(--font-display); font-size: 1.8rem; color: var(--gold); margin-top: 2rem; margin-bottom: 1rem;">✅ Before Leaving Akapen...</h3>
        <p class="reveal" style="color: #ccc; margin-bottom: 1.5rem;">The path to the coast in Chapter 5 will require the skills and items you earned here. Verify you have:</p>
        
        <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
            <ul class="guide-checklist">
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Ability Unlocked:</strong> Did you defeat the Sand-Burrower and acquire the Sand-Dash?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Reputation Maintained:</strong> Did you return the goods in "The Lost Caravan" quest?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Hidden Rift:</strong> Have you cleared the Oasis Abyss Rift at midnight?</span>
                    </label>
                </li>
            </ul>
        </div>

        <div class="reveal" style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
            <div style="font-size: 2.5rem;">🏆</div>
            <div>
                <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px;">Achievement Unlocked</h4>
                <p style="margin: 0; color: #ccc;"><strong>Dune Rider:</strong> Conquer the Akapen Desert and unearth the Sunken Temple. <span style="color: #888; font-size: 0.9rem;">(30G / Silver)</span></p>
            </div>
        </div>

        <div class="reveal" style="margin-top: 4rem; text-align: right;">
          <a href="chapter-5.php" class="btn btn-gold">Next: Chapter 5 →</a>
        </div>

      </section>

    </main>
  </div>

<?php
$fxTheme = 'snow'; include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>