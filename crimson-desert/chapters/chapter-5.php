<?php 
$pageTitle = "Chapter 5: The Blue Depths | Crimson Desert Guide";
$pageDesc = "Navigate the Delesyia Coast, sail past the Naval Blockade, solve the Mechanical Ruins puzzles, and defeat the Iron Sentinel.";

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(20, 60, 100, 0.3) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(10, 20, 40, 0.85) 0%, transparent 60%), linear-gradient(180deg, #050a10 0%, #0a1520 60%, #050a10 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="../../">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="../">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Chapter 5</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Chapter 5: The Blue Depths</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">The Delesyia Coast and Mechanical Ruins</p>
    </div>
  </header>

  <div class="guide-layout" style="grid-template-columns: 1fr; max-width: 900px; margin: 0 auto;">
    <main class="guide-content">

      <section class="guide-section reveal">
        <div class="callout info" style="margin-bottom: 3rem;">
          <span class="callout-label">Chapter 5 Overview</span>
          <p><strong>Primary Location:</strong> Delesyia Coast & Flooded Ruins<br>
             <strong>Key Unlocks:</strong> Deep-Water Swimming, The Rebreather, Sailing (Small Skiff), Fishing Mastery.<br>
             <strong>Mechanic Shift:</strong> Enemies here use lightning and water magic. Unequip any heavy iron armor while swimming to avoid sinking rapidly.</p>
        </div>

        <h2 class="guide-section-title">1. Arrival at Port Delesyia</h2>
        <p>After surviving the Akapen Desert, the coastal breeze of Delesyia is a relief. However, the local port is under a strict blockade by the King's Navy, and you must find a way past their galleons to reach the offshore ruins.</p>

        <div class="reveal" style="background: rgba(46, 204, 113, 0.1); border-left: 3px solid #2ecc71; padding: 1.2rem; margin-top: 1.5rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0; display: flex; gap: 1rem; align-items: flex-start;">
            <div style="font-size: 1.8rem;">🤝</div>
            <div>
                <h5 style="color: #2ecc71; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.2rem; letter-spacing: 0.5px;">Tactical Tip: Best Companion for the Coast</h5>
                <p style="margin:0; font-size: 0.95rem; color: #ccc;">Swap out heavy fighters for <strong>Naira</strong>. Her passive skill <em>"Sea Legs"</em> not only increases your overall swimming speed by 10%, but she also reduces the underwater detection radius of enemies, making the upcoming stealth section much more forgiving.</p>
            </div>
        </div>

        <ul class="step-list">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">The Fisherman's Pact</h4>
              <p>Head to the docks at night and speak with Captain Lorn. He agrees to give you his smuggler's skiff, but only if you retrieve his stolen compass from the local pirate syndicate. You can fight the pirates directly or sneak into their hideout using the underwater cave.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">Acquiring the Rebreather</h4>
              <p>Before exploring the underwater cave, visit the local Alchemist. Buy the <strong>Abyssal Rebreather</strong> for 1,500 Gold. This item is mandatory for this chapter; it triples your underwater breath meter and allows you to use light attacks while submerged.</p>
            </div>
          </li>
        </ul>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">2. Infiltrating the Pirate Cove</h2>
        <p class="reveal">The direct assault on the Pirate Cove is practically a suicide mission on harder difficulties due to the sheer number of cannons facing the main gate. Stealth is your best option here.</p>

        <div class="reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0;">
            <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">📜 Lore Context: The Black Tide Syndicate</h5>
            <p style="margin:0; font-size: 0.9rem; color: #ccc;">The Black Tide are no ordinary pirates. They are former Demeniss Navy deserters who mutinied after being ordered to fire on civilian ships. While they are brutal, they operate on a strict code of honor. If you avoid killing them during this mission, you unlock them as an allied faction in the endgame.</p>
        </div>

        <div class="guide-accordion open reveal" id="acc-c5-stealth" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c5-stealth')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Stealth Route: The Sea Cave</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p>Equip your new Rebreather and dive off the cliff to the right of the main pirate gates.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>Underwater Traps:</strong> Watch out for the spiked nets. Use your Axiom Force (L2 + R2) to sever the ropes holding them before swimming through.</li>
                <li style="margin-bottom: 0.5rem;"><strong>Silent Takedowns:</strong> When you surface inside the cave, you will find three guards. If you emerge from the water exactly behind a guard, you can press Triangle (Y) for an instant "Drowning Takedown" that makes zero noise.</li>
                <li><strong>The Compass:</strong> The compass is locked in the Captain's quarters. Steal the <em>Rusted Iron Key</em> from the sleeping guard near the rum barrels to open it without picking the lock.</li>
              </ul>
            </div>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">3. Running the Naval Blockade</h2>
        <p class="reveal">With the compass secured, Lorn gives you the Skiff. Now you must sail to the ruins without getting blown to pieces by the King's Navy.</p>

        <div class="callout danger reveal" style="margin-top:2rem; background: rgba(140, 45, 45, 0.08); border-left: 4px solid #8C2D2D;">
          <span class="callout-label" style="color: #ff4d4d;">⚠ Sailing Mechanic: The Searchlights</span>
          <p>The galleons use Abyssal Searchlights that scan the water. <strong>Do not sail into the purple beams.</strong> If spotted, you have 3 seconds to press Circle (B) to abandon ship and dive deep before the cannons fire. Use the jagged rock formations for cover while sailing.</p>
        </div>
<div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src="/crimson-desert/img/galleons.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.3);" alt="The King's Naval Blockade">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The King's galleons patrol the Delesyia Coast relentlessly.</p>
        </div>
        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold);">The Maelstrom Abyss Rift (Secret)</h4>
              <p>While sailing past the second galleon, look to the west. You will see a massive whirlpool. If you sail your skiff directly into it, you won't die—instead, you'll be sucked into the <strong>Maelstrom Abyss Rift</strong>. Inside, you must defeat the <em>Abyssal Kraken Tentacles</em>. Reward: <em>Delesyia Abyss Fragment</em> (+20% Swimming Speed).</p>
            </div>
          </li>
        </ul>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">4. The Flooded Ruins Puzzles</h2>
        <p class="reveal">Safely past the blockade, you arrive at the offshore island containing the Mechanical Ruins.</p>

        <div class="guide-accordion open reveal" id="acc-c5-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c5-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Puzzle: The Weeping Statues</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p>In the central flooded chamber, there are four large statues pouring water from their eyes.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>The Clue:</strong> A tablet underwater reads: <em>"The flame born of ice, struck by the heavens, returns to ash."</em></li>
                <li style="margin-bottom: 0.5rem;"><strong>Solution:</strong> You must shoot the statues with elemental arrows in this exact order: <strong>Ice Arrow, Lightning Arrow, Fire Arrow.</strong></li>
                <li>Doing this will drain the water in the chamber, allowing you to access the lower levels.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="callout danger reveal" style="margin-top:2rem; border-left: 4px solid var(--gold); background: rgba(212, 168, 67, 0.08);">
          <span class="callout-label" style="color: var(--gold);">⚠ Environmental Hazard: Electrified Water</span>
          <p>In the lower levels, broken machinery constantly electrifies the waist-deep water. Watch the sparking cables. You only have a 3-second safe window between electrical pulses to run across the flooded corridors.</p>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title reveal">5. Chapter Boss: The Iron Sentinel</h2>
        <p class="reveal">At the heart of the ruins lies a massive mechanical guardian protecting the main Abyss Core. It is heavily armored and immune to slashing damage.</p>

        <div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src="/crimson-desert/img/iron-sentinel.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.3);" alt="The Iron Sentinel">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The Iron Sentinel guards the deepest chamber of the Flooded Ruins.</p>
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
                <td style="padding: 1rem; font-weight: bold;">Phase 1 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Armor Intact)</span></td>
                <td style="padding: 1rem; color: #ccc;">Harpoon Sweep</td>
                <td style="padding: 1rem; color: #ccc;">Your sword will bounce off its hull. You must use a <strong>Greatsword, Hammer, or Explosive Arrows</strong> to shatter its outer ceramic plates. Dodge its slow, heavy harpoon sweeps.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold;">Phase 2 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Exposed Core)</span></td>
                <td style="padding: 1rem; color: #ccc;">Water Cannons</td>
                <td style="padding: 1rem; color: #ccc;">Once the chest plate breaks, a glowing core is exposed. It will start firing high-pressure water streams. Use the broken pillars for cover and shoot Lightning Arrows directly into the core.</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: bold;">Final Phase <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Overload)</span></td>
                <td style="padding: 1rem; color: #ccc;">Electric Discharge</td>
                <td style="padding: 1rem; color: #ccc;">The arena begins to flood. You have 45 seconds to finish the boss before the water touches the exposed core and instantly kills you. Rush in and use the <strong>Axiom Force</strong> to rip the core out.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="callout abyss reveal" style="margin-top:2rem; background: rgba(138, 43, 226, 0.08); border-left: 4px solid #A29BFE;">
          <span class="callout-label" style="color: #A29BFE;">Artifact Reward</span>
          <p>Ripping out the core grants the <strong>"Fragment of the Tide"</strong>. This powerful artifact makes Kliff completely immune to being slowed down by water, mud, or swamps, revolutionizing combat in these biomes.</p>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">

        <h2 class="guide-section-title reveal">6. Chapter 5 Hidden Treasures & Fishing</h2>
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🎣</span>
            <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem;">Fishing Mechanic</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Speak to the old man on the pier after completing the Pirate Cove. He gives you a Fishing Rod. Fish caught in Delesyia can be cooked to permanently increase your Stamina regen.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🐟</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem;">The Abyss Koi</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Can only be caught off the western pier of Delesyia during a thunderstorm. Use the "Glowing Grub" bait. Essential for top-tier alchemy.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">⚔️</span>
            <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem;">Corsair's Cutlass</h3>
            <p style="font-size: 0.9rem; color: #ccc;">Found inside the sunken galleon off the coast. You must use the Rebreather to dive deep enough. This sword causes bleeding on every consecutive hit.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">⚙️</span>
            <h3 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.3rem;">Ancient Dynamo</h3>
            <p style="font-size: 0.9rem; color: #ccc;">After defeating the Iron Sentinel, do not leave the room immediately. Grapple up to the ceiling scaffolding to find this relic, which permanently boosts your stamina regeneration.</p>
          </div>
        </div>
<div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px; margin-top: 2.5rem;">
            <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem;">💰 Pro-Tip: The Sunken Pearl Farm</h4>
            <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">Want to quickly recover the 1,500 Gold you spent on the Rebreather? Dive straight down beneath the central docks of Port Delesyia. The seafloor here is littered with Giant Clams. Use your heavy attack to pry them open and collect <strong>Abyssal Pearls</strong>. They sell for 600 Gold each to the local Alchemist, and they respawn every time you sleep at the inn!</p>
        </div>
        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">
        <h2 class="guide-section-title reveal">7. Chapter 5 Completion</h2>
        
        <h3 class="reveal" style="font-family: var(--font-display); font-size: 1.8rem; color: var(--gold); margin-top: 2rem; margin-bottom: 1rem;">✅ Before Leaving Delesyia...</h3>
        <p class="reveal" style="color: #ccc; margin-bottom: 1.5rem;">Make sure you've looted the depths before you move on to the dense jungles of Chapter 6:</p>
        
        <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
            <ul class="guide-checklist">
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Essential Gear:</strong> Did you purchase the Abyssal Rebreather?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Secret Boss:</strong> Did you clear the Maelstrom Abyss Rift while sailing?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Lore Master:</strong> Did you complete the pirate section via stealth without killing?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span><strong>Side Activity:</strong> Did you grab the Fishing Rod and catch the Abyss Koi?</span>
                    </label>
                </li>
            </ul>
        </div>

        <div class="reveal" style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
            <div style="font-size: 2.5rem;">🏆</div>
            <div>
                <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px;">Achievement Unlocked</h4>
                <p style="margin: 0; color: #ccc;"><strong>The Iron Breaks:</strong> Survive the Naval Blockade and dismantle the Iron Sentinel. <span style="color: #888; font-size: 0.9rem;">(30G / Silver)</span></p>
            </div>
        </div>

        <div class="reveal" style="margin-top: 4rem; text-align: right;">
          <a href="chapter-6.php" class="btn btn-gold">Next: Chapter 6 →</a>
        </div>

      </section>

    </main>
  </div>

<?php
$fxTheme = 'bubbles'; include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>