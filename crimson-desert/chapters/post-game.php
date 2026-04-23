<?php 
$pageTitle = "Post-Game & End-Game Content | Crimson Desert Guide";
$pageDesc = "Master the Abyssal Nightmare difficulty, conquer the Shifting Labyrinth, and defeat the ultimate superboss: The Nameless Sovereign.";
$bodyClass = "theme-crimson-desert"; 

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 45vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(212, 175, 55, 0.2) 0%, transparent 65%), linear-gradient(180deg, #050505 0%, #101010 60%, #050505 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="../../">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="../">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Post-Game</span>
      </nav>
      <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: BEYOND THE STORY</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem;">The True Mercenary</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">Mastering the Abyssal Nightmare & End-Game</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">End-Game Guide</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#nightmare" style="color: var(--text-dim); transition: color 0.2s;">1. Abyssal Nightmare</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#labyrinth" style="color: var(--text-dim); transition: color 0.2s;">2. Shifting Labyrinth</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#sovereign" style="color: var(--text-dim); transition: color 0.2s;">3. The Nameless Sovereign</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#arena" style="color: var(--text-dim); transition: color 0.2s;">4. The Crimson Arena</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#checklist" style="color: var(--text-dim); transition: color 0.2s;">5. 100% Checklist</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">6. The Ultimate Legend</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="nightmare" style="margin-bottom: 4rem;">
        <div class="callout abyss" style="margin-bottom: 3rem; background: rgba(138, 43, 226, 0.08); border-left: 4px solid #A29BFE; padding: 1.5rem;">
          <span class="callout-label" style="color: #A29BFE; font-weight: bold; text-transform: uppercase;">🌀 What is the End-Game?</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">After the credits roll, Pywel changes. The Abyss Master Key allows you to unlock challenges that were previously invisible. This is where you test your skills against Level 100+ enemies, tackle the infinite dungeon, and craft the final tier of equipment.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. Abyssal Nightmare (NG+)</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">In New Game+, you can select the <strong>Abyssal Nightmare</strong> difficulty. This isn't just a health boost for enemies; it changes their AI behavior completely.</p>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Advanced Enemy AI</h4>
              <p style="color: #ccc;">Enemies will now parry your attacks, use elemental combos against you, and call for reinforcements much faster. Your "Transcendence" mode is no longer an "I win" button; use it only to break boss shields.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Level 100 Cap</h4>
              <p style="color: #ccc;">While the story ends around Level 50, the post-game allows you to reach Level 100. Each level past 60 requires <strong>Abyss Echoes</strong> (dropped by world bosses) instead of standard XP.</p>
            </div>
          </li>
        </ul>

        <div class="reveal" style="background: rgba(46, 204, 113, 0.1); border-left: 3px solid #2ecc71; padding: 1.5rem; margin-top: 2rem; border-radius: 0 4px 4px 0;">
            <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">👑 The NG+ Meta Build: "The Immortal Void-Walker"</h4>
            <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">Struggling in Abyssal Nightmare? Combine the <strong>God-Slayer Armor</strong> (max physical defense), the <strong>Blade of the Origin</strong> (2x damage against Abyss), and the <strong>Chronos Ring</strong> (extended buff duration). Use the <em>Spicy Crimson Stew</em> before every boss for infinite stamina. This build allows you to out-trade almost any Level 100 enemy.</p>
        </div>
      </section>

      <section class="guide-section reveal" id="labyrinth" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">2. The Shifting Labyrinth (Endless Mode)</h2>
        <p class="reveal" style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">Located beneath the ruins of Pailune, this is a rogue-lite infinite dungeon. Every floor is procedurally generated with random enemies, traps, and bosses.</p>

        <div class="reveal" style="margin-top: 1.5rem; margin-bottom: 2rem;">
            <img src="/crimson-desert/img/crystal.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.3);" alt="The Shifting Labyrinth">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The deeper you go into the Labyrinth, the more the layout changes.</p>
        </div>

        <div class="guide-accordion open reveal" id="acc-pg-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-pg-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Labyrinth Mechanics & Loot</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px;">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="margin-bottom: 1rem; color: #ccc;">You enter the Labyrinth with only your base stats. You must find temporary weapons and buffs as you descend.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                <li style="margin-bottom: 0.5rem;"><strong>The Extraction:</strong> Every 10 floors, you face a floor boss. Defeating it allows you to "Extract" and keep the <em>Astral Coins</em> you've earned, or risk diving deeper for multipliers.</li>
                <li><strong>The Vendor:</strong> Astral Coins can be spent at the Labyrinth Gatekeeper to purchase exclusive cosmetics, mount armors, and the elusive <em>Tears of Pywel</em> (used for max-level gear rerolling).</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px; margin-top: 2rem;">
            <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">💰 Pro-Tip: Astral Coin Farming</h4>
            <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">Don't get greedy early on. The optimal farming route is to clear floors 1-20, extract, and repeat. The difficulty spike at floor 21 often causes wipes, meaning you lose 50% of your unbanked coins. Buy the "Astral Magnet" buff at the entrance to increase coin drops by 15%.</p>
        </div>
      </section>

      <section class="guide-section reveal" id="sovereign" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">3. Ultimate Superboss: The Nameless Sovereign</h2>
        <p class="reveal" style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">This is the true final challenge of Crimson Desert. A boss so powerful it requires a perfectly min-maxed build and absolute mastery of the Axiom Force.</p>

        <div class="callout danger reveal" style="border-left: 4px solid var(--red); background: rgba(140, 45, 45, 0.08); margin-top: 1.5rem; margin-bottom: 2rem; padding: 1.5rem;">
          <span class="callout-label" style="color: var(--red); font-weight: bold; text-transform: uppercase;">⚠ How to Unlock the Sovereign</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">You must collect the <strong>7 Shattered Crowns</strong> hidden exclusively in NG+ across the map (they replace standard chests in high-level Abyss Rifts). Take them to the throne in the Sunken Temple of Akapen to summon him.</p>
        </div>

        <div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src="/crimson-desert/img/ancientking.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.3);" alt="The Nameless Sovereign">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">The Nameless Sovereign is the ultimate test of combat mastery.</p>
        </div>

        <div class="guide-table-wrap reveal" style="margin-top: 2rem; overflow-x: auto;">
          <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold);">
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Phase</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Sovereign's Tactic</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Winning Strategy</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 1 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(100%-60%)</span></td>
                <td style="padding: 1rem; color: #ccc;">Weapon Mastery</td>
                <td style="padding: 1rem; color: #ccc;">He cycles through every weapon type in the game instantly. You must memorize his stance changes to know when to parry (Sword) or dodge (Hammer).</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 2 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(60%-20%)</span></td>
                <td style="padding: 1rem; color: #ccc;">Time Dilation</td>
                <td style="padding: 1rem; color: #ccc;">He will slow down time for Kliff. You must use the <em>Chronos Ring</em> and your Sand-Dash ability to match his speed and break his casting animation.</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Final Phase <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(20%-0%)</span></td>
                <td style="padding: 1rem; color: #ccc;">The Perfect Storm</td>
                <td style="padding: 1rem; color: #ccc;">He unleashes all 4 elements simultaneously. There is no safe zone on the ground. Use your Abyss Wings and aerial combos to finish the fight in the sky.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="arena" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">4. The Crimson Arena (PvP & Co-op)</h2>
        <p class="reveal" style="color: #ccc; font-size: 1.05rem;">Head to the Gladiator's Pit in Hernand to access the multiplayer features of the game.</p>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">⚔️</span>
            <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">1v1 Duels</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Test your build against other players. Stats are normalized, meaning victory relies entirely on your mastery of parrying, stamina management, and combo execution.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🛡️</span>
            <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Mercenary Co-op Raids</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Team up with up to 3 friends to tackle "World Tier" bosses. These bosses have millions of HP and require coordinated team attacks and dedicated support/tank roles.</p>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="checklist" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">5. The 100% Checklist & Void Crafting</h2>
        
        <div class="callout info reveal" style="margin-bottom: 2rem; border-left: 4px solid var(--gold); background: rgba(212, 168, 67, 0.08); padding: 1.5rem;">
          <span class="callout-label" style="color: var(--gold); font-weight: bold; text-transform: uppercase;">Crafting the "God-Slayer" Set</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">To craft the final armor and upgrade weapons to +20, you need <strong>Pure Void Crystals</strong>. These only drop from Ascended Bosses in NG+ with a 5% drop rate. Equip the <em>Royal Signet Ring</em> to boost your luck.</p>
        </div>

        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🏆</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">All 40 Abyss Rifts</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Complete every rift on Master difficulty to unlock the secret "Eternal Mercenary" title and a golden skin for Kliff.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">📜</span>
            <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Lore Scholar</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Find all 120 journals. The final journal is only available in NG+ inside the King's secret library.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🐎</span>
            <h3 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Nightmare Steed</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Win the "Grand Pailune Race" in NG+ to unlock the fastest mount in the game: a horse infused with Abyss energy.</p>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">6. The Ultimate Legend</h2>
        <p class="reveal" style="color: #ccc; margin-bottom: 1.5rem;">Before you put the controller down and claim your status as a true legend of Pywel, ensure you have ticked every single box:</p>
        
        <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
            <ul class="guide-checklist">
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>The Endless Depths:</strong> Reach Floor 100 in the Shifting Labyrinth.</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>God Slayer:</strong> Defeat the Nameless Sovereign on Abyssal Nightmare difficulty.</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>Max Arsenal:</strong> Upgrade at least one Mythic weapon to +20 using Pure Void Crystals.</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>The Completionist:</strong> Collect all 120 Lore Journals and clear all 40 Abyss Rifts.</span>
                    </label>
                </li>
            </ul>
        </div>

        <div class="chapter-nav">
            <a href="/crimson-desert/chapters/chapter-9.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 9</a>
            <a href="../" class="btn btn-gold">Back to Hub →</a>
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
$fxTheme = 'void'; include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>