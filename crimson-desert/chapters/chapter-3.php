<?php 
$pageTitle = "Chapter 3: The Frozen Peaks | Crimson Desert Guide";
$pageDesc = "Survive the extreme cold of Kweiden, solve the Ice Cave puzzles, conquer the Shivering Void, and defeat the Ancient Frost Dragon in our complete walkthrough.";
$bodyClass = "theme-crimson-desert"; 

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(50, 80, 120, 0.25) 0%, transparent 65%), linear-gradient(180deg, #080808 0%, #0a0e14 60%, #080808 100%);"></div>
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="../../">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="../">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Chapter 3</span>
      </nav>
      <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: PART 3</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem;">Chapter 3: The Frozen Peaks</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); color: #ddd; font-size: 1.1rem;">Survival, Ice Puzzles, and the Frost Dragon</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Chapter Progress</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#Preparing" style="color: var(--text-dim); transition: color 0.2s;">1. Preparing for the Ascent</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#Avalanche" style="color: var(--text-dim); transition: color 0.2s;">2. Avalanche Pass & Ice Caves</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#kweiden" style="color: var(--text-dim); transition: color 0.2s;">3. The Kweiden Abyss Rift</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#Frost" style="color: var(--text-dim); transition: color 0.2s;">4. Boss: Ancient Frost Dragon</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#Hidden" style="color: var(--text-dim); transition: color 0.2s;">5. Hidden Collectibles</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">6. Completion</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="Preparing" style="margin-bottom: 4rem;">
        <div class="callout info" style="margin-bottom: 3rem;">
          <span class="callout-label" style="color: var(--gold);">Chapter 3 Overview</span>
          <p style="color: #ccc; margin-top: 0.5rem;"><strong>Primary Location:</strong> The Kweiden Region (Snow Mountains)<br>
             <strong>Key Unlocks:</strong> Cold-Weather Gear, Advanced Climbing Tools, Level 2 Axiom Force, White Wolf Mount.<br>
             <strong>Hazard Warning:</strong> The "Freezing" status effect will drain your stamina and health. Avalanches act as environmental hazards on the main trail.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. Preparing for the Ascent</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">Before heading into Kweiden from the northern Demeniss border, you must prepare. If you attempt to climb the mountain in standard armor, Kliff will freeze to death within 10 minutes of gameplay.</p>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Acquire the Bear-Pelt Mantle & Climbing Pitons</h4>
              <p style="color: #ccc;">Stop at the Border Outpost. Speak to the huntsman, Torald. He will ask for 3x Dire Wolf Pelts. Hunt them in the nearby forest to receive your first cold-weather gear. <strong>Important:</strong> Buy at least 15x <em>Iron Pitons</em> from his shop. You will need them to rest mid-climb.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Craft "Spicy Crimson Stew"</h4>
              <p style="color: #ccc;">Use the campfire near Torald to cook. Combine <strong>1x Boar Meat + 1x Fire Pepper + 1x Spring Water</strong>. This stew grants 30 minutes of complete immunity to the Freezing status, giving you a massive advantage during exploration.</p>
            </div>
          </li>
        </ul>

        <div class="reveal" style="background: rgba(46, 204, 113, 0.1); border-left: 3px solid #2ecc71; padding: 1.2rem; margin-top: 1.5rem; border-radius: 0 4px 4px 0; display: flex; gap: 1rem; align-items: flex-start;">
            <div style="font-size: 1.8rem;">🤝</div>
            <div>
                <h5 style="color: #2ecc71; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.2rem; letter-spacing: 0.5px;">Tactical Tip: Best Companion for Kweiden</h5>
                <p style="margin:0; font-size: 0.95rem; color: #ccc;">Leave the heavily armored mercenaries at the camp. Bring <strong>Yann (The Archer)</strong> with you. His passive ability <em>"Campfire Tales"</em> makes your Freezing immunity buffs last 15 minutes longer, and his Fire Arrows are devastating against the Ice Trolls in the caves.</p>
            </div>
        </div>
      </section>

      <section class="guide-section reveal" id="Avalanche" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">2. The Avalanche Pass & The Ice Caves</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">The climb to the Dragon's peak is treacherous. You will need to rely heavily on the climbing mechanics and your stamina management.</p>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Surviving the Avalanche Zone</h4>
              <p style="color: #ccc;">As you ascend the "Widow's Trail", the screen will shake. When you hear the deep rumble, an avalanche is coming. Immediately sprint to the large black boulders and press crouch to take cover. If the snow hits you, you will be swept to the bottom of the mountain.</p>
            </div>
          </li>
        </ul>

        <div class="guide-accordion open reveal" id="acc-c3-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c3-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Puzzle: The Shattered Bridge</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Halfway up the mountain, the main bridge is destroyed. You must navigate the Ice Caves underneath to cross the chasm.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.7;">
                <li style="margin-bottom: 0.5rem;"><strong>The Slippery Floor:</strong> Running on ice causes Kliff to slide uncontrollably. Use the crouch/stealth button to walk carefully over slick surfaces.</li>
                <li><strong>The Crystal Reflection:</strong> You will find a locked door powered by a frozen Abyss Node. Equip a torch and stand near the node to thaw it out. Once thawed, use your Axiom Force to rotate the crystal mirror <strong>twice to the right</strong> to bounce the light into the door switch.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="callout danger reveal" style="margin-top:2rem; background: rgba(140, 45, 45, 0.08); border-left: 4px solid #8C2D2D; padding: 1.5rem;">
          <span class="callout-label" style="color: #ff4d4d; font-weight: bold; text-transform: uppercase;">⚠ Enemy Warning: Ice Trolls</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Inside the caves, you will encounter Ice Trolls. They are <strong>completely immune to physical stagger</strong> unless you use Fire. Coat your sword in pitch or use Fire Arrows before engaging them, otherwise their heavy swings will break your guard instantly.</p>
        </div>

        <div class="reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1.5rem; border-radius: 0 4px 4px 0;">
            <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">📜 Lore Context: The Kweiden Trolls</h5>
            <p style="margin:0; font-size: 0.9rem; color: #ccc;">The Ice Trolls were once enslaved by the ancient Demeniss kings to build the mountain passes. Now completely feral, their bodies have adapted to the freezing temperatures, making their skin as hard as glacial ice. They hoard stolen dwarven weapons.</p>
        </div>
      </section>

      <section class="guide-section reveal" id="kweiden" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">3. The Kweiden Abyss Rift</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">Just outside the Ice Caves exit, you will spot the purple glow of an Abyss Rift hidden behind a frozen waterfall. Use a heavy jumping attack to break the ice and enter <strong>The Shivering Void</strong>.</p>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Prism Puzzle</h4>
              <p style="color: #ccc;">This rift requires you to guide a beam of pure light through three floating ice prisms. Hit the first prism with a light attack to turn it 90 degrees. Hit the second prism with a heavy attack to tilt it upwards. The beam will melt the central pillar, revealing the boss.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Mini-Boss: The Glacial Knight</h4>
              <p style="color: #ccc;">A slow but incredibly deadly armored knight. He wields a massive greatsword that creates ice spikes on the ground. <strong>Do not parry his overhead slams.</strong> Dodge to his right side (your left) and attack his unarmored back. Defeating him yields the <em>Kweiden Abyss Fragment</em> (increases max Stamina by 15%).</p>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section reveal" id="Frost" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">4. Chapter Boss: Ancient Frost Dragon</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">At the summit, you will face one of the most spectacular encounters in the game. This is an aerial and environmental battle that tests your mastery of the Axiom Force.</p>

        <div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src="/crimson-desert/img/frost-dragon.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.3);" alt="The Ancient Frost Dragon">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The Ancient Frost Dragon awaits at the highest peak of Kweiden.</p>
        </div>

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
                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 1 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Grounded)</span></td>
                <td style="padding: 1rem; color: #ccc;">Tail Sweeps & Frost Breath</td>
                <td style="padding: 1rem; color: #ccc;">Stay near its front legs. When it inhales deeply, <strong>slide dodge underneath its belly</strong> to avoid the Frost Breath. Attack the glowing blue scales on its ankles to stagger it.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 2 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Aerial Assault)</span></td>
                <td style="padding: 1rem; color: #ccc;">Flight & Ice Barrage</td>
                <td style="padding: 1rem; color: #ccc;">The dragon takes to the sky. <strong>Do not use your bow.</strong> Wait for it to swoop down, then use your <strong>Axiom Force (L2 + R2)</strong> to grapple onto the glowing hook-points on its wings.</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Final Phase <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Rodeo)</span></td>
                <td style="padding: 1rem; color: #ccc;">Mid-air Struggle</td>
                <td style="padding: 1rem; color: #ccc;">While hanging onto the dragon mid-flight, climb toward its head. You must manage your stamina. When it tries to shake you off, hold the grip button. Once at the head, equip a heavy weapon and strike the horns to ground it permanently.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="callout abyss reveal" style="margin-top:2rem; background: rgba(138, 43, 226, 0.08); border-left: 4px solid #A29BFE; padding: 1.5rem;">
          <span class="callout-label" style="color: #A29BFE; font-weight: bold; text-transform: uppercase;">Major Reward</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Defeating the Ancient Frost Dragon rewards you with the <strong>"Heart of Winter"</strong>. This upgrades your Axiom Force to Level 2, allowing you to grapple onto moving targets and enemies from much further away.</p>
        </div>
      </section>

      <section class="guide-section reveal" id="Hidden" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">5. Chapter 3 Hidden Collectibles & Loot</h2>
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🐺</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem;">Secret Mount: The White Wolf</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">At the Avalanche Pass, climb the cliff to the right instead of hiding. At the top, you'll find a wounded White Wolf. Give it 3x Boar Meat to tame it. It moves 20% faster on snow.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">💎</span>
            <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem;">Glacial Ore Deposits</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Hidden behind the frozen waterfall (near the Abyss Rift). Use a pickaxe to mine 5x Glacial Ores, required to craft Tier 3 weapons in Hernand.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">⚔️</span>
            <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem;">The Frostbane Greatsword</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">After the bridge puzzle in the Ice Caves, drop down onto a hidden ledge below the exit door. This sword deals innate ice damage and slows enemies.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🎒</span>
            <h3 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.3rem;">Lost Mercenary's Pack</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">During the dragon fight, look around the edges of the summit arena. There is a frozen skeleton holding a pack containing 20x Expansion Tools.</p>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">6. Chapter 3 Completion</h2>
        
        <h3 style="font-family: var(--font-display); font-size: 1.8rem; color: var(--gold); margin-top: 2rem; margin-bottom: 1rem;">✅ Before Leaving Kweiden...</h3>
        <p style="color: #ccc; margin-bottom: 1.5rem;">The descent into the Akapen Desert in Chapter 4 will lock you out of this region for a while. Ensure you have:</p>
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
            <ul class="guide-checklist">
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>Secret Mount:</strong> Did you tame the White Wolf at the Avalanche Pass?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>Legendary Weapon:</strong> Have you claimed the Frostbane Greatsword from the Ice Caves?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>Skill Upgrade:</strong> Is your Axiom Force successfully upgraded to Level 2?</span>
                    </label>
                </li>
            </ul>
        </div>

        <div style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
            <div style="font-size: 2.5rem;">🏆</div>
            <div>
                <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px;">Achievement Unlocked</h4>
                <p style="margin: 0; color: #ccc;"><strong>The Sky is Falling:</strong> Survive the mid-air struggle and defeat the Ancient Frost Dragon. <span style="color: #888; font-size: 0.9rem;">(30G / Silver)</span></p>
            </div>
        </div>

        <div class="chapter-nav">
            <a href="/crimson-desert/chapters/chapter-2.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 2</a>
            <a href="/crimson-desert/chapters/chapter-4.php" class="btn btn-gold">Next: Chapter 4 →</a>
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
$fxTheme = 'gold'; include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>