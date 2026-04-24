<?php 
$pageTitle = "Chapter 9: The Last Greymane | Crimson Desert Guide";
$pageDesc = "The epic conclusion. Defeat Myurdin, survive the Secret True Boss, and follow our guide to unlock all 3 distinct endings, New Game+, and Post-Credits secrets.";
$bodyClass = "theme-crimson-desert"; 

include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

  <header class="guide-hero" style="min-height: 45vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(212, 168, 67, 0.25) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(40, 10, 80, 0.9) 0%, transparent 60%), linear-gradient(180deg, #050505 0%, #0d0a14 60%, #050505 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="../../">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="../">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Chapter 9 (Finale)</span>
      </nav>
      <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: THE FINALE</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem;">Chapter 9: The Last Greymane</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">The Final Confrontation and the Fate of Pywel</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Chapter Progress</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#prep" style="color: var(--text-dim); transition: color 0.2s;">1. Ultimate Preparation</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#descent" style="color: var(--text-dim); transition: color 0.2s;">2. Descent into Origin</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#boss-myurdin" style="color: var(--text-dim); transition: color 0.2s;">3. Final Boss: Myurdin</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#endings" style="color: var(--text-dim); transition: color 0.2s;">4. Multiple Endings Guide</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#ngplus" style="color: var(--text-dim); transition: color 0.2s;">5. New Game+ Unlocks</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#hidden" style="color: var(--text-dim); transition: color 0.2s;">6. Hidden Treasures</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">7. Journey's End</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="prep" style="margin-bottom: 4rem;">
        <div class="callout danger" style="margin-bottom: 3rem; background: rgba(140, 45, 45, 0.08); border-left: 4px solid #8C2D2D; padding: 1.5rem;">
          <span class="callout-label" style="color: #ff4d4d; font-weight: bold; text-transform: uppercase;">⚠ Absolute Point of No Return</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Once you step into the <strong>Origin Portal</strong> at the start of this chapter, you cannot return to the open world of Pywel until the credits roll. Make sure you are fully prepared.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. The Ultimate Preparation Checklist</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">Do not enter the Abyss without the following loadout, or you will struggle immensely during the final boss rush:</p>
        
        <ul style="margin-top: 1rem; color: #ccc; line-height: 1.6; padding-left: 1.5rem; list-style: square;">
          <li style="margin-bottom: 0.5rem;"><strong>Weapon:</strong> <em>The King's Justice</em> (from Ch. 8) upgraded to at least +8 using Flawless Royal Steel.</li>
          <li style="margin-bottom: 0.5rem;"><strong>Armor:</strong> The <em>Greymane Warlord Set</em> (crafted from Meteorite Ore in Ch. 6) for maximum physical negation.</li>
          <li><strong>Consumables:</strong> 10x <em>Grand Elixir of Rejuvenation</em> (heals 100% HP) and 5x <em>Spicy Crimson Stew</em> (for infinite stamina bursts).</li>
        </ul>

        <div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px; margin-top: 2rem;">
            <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">🎒 Pro-Tip: The "God-Slayer" Loadout</h4>
            <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">If you are struggling with the final boss's AoE attacks, unequip your heavy shield. In the final zero-gravity phase, evasion is infinitely more valuable than blocking. Two-hand your Greatsword and rely entirely on Perfect Dodges to trigger the "Axiom Slow-Mo" effect.</p>
        </div>
      </section>

      <section class="guide-section reveal" id="descent" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">2. The Descent into Origin</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">The true mastermind is revealed. Myurdin, leader of the Black Bears, has reached the heart of the Abyss to absorb its primeval energy. You must fight your way through the echoes of your past to stop him.</p>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step reveal">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Gauntlet of Shadows</h4>
              <p style="color: #ccc;">As you descend the cosmic staircase, you will face shadow-clones of previous bosses (including the Rat King and Vulkan). They have less health but hit significantly harder. Use your <strong>Transcendence</strong> mode (unlocked in Ch. 8) to clear these waves quickly without wasting your healing potions.</p>
            </div>
          </li>
          <li class="step reveal">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Greymane Reunion</h4>
              <p style="color: #ccc;">Before the final gate, the spirits of your companions (Oongka, Yann, and Naira) will appear to hold off the Abyss Army. Speak to each one to receive the <strong>"Eternal Bond"</strong> permanent buff, which boosts your stamina regeneration and attack speed by 20% for the final fight.</p>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section reveal" id="boss-myurdin" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">3. Final Boss: Myurdin, The Abyss Vessel</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">Myurdin wields a colossal greatsword and possesses every Axiom Force ability Kliff has. This is the ultimate mirror match of skill, parrying, and timing.</p>

        <div class="reveal" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
            <img src="https://image.pollinations.ai/prompt/A%20colossal%20dark%20fantasy%20knight%20boss%20wielding%20a%20massive%20greatsword%20floating%20in%20a%20dark%20purple%20zero%20gravity%20abyss,%20cinematic%20lighting,%208k,%20dark%20fantasy?width=900&height=350&nologo=true" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.3);" alt="Myurdin, The Abyss Vessel">
            <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted); margin-top: 0.5rem; font-style: italic;">Myurdin awaits at the center of the Origin Core, consumed by absolute power.</p>
        </div>

        <div class="guide-table-wrap reveal" style="margin-top: 2rem; overflow-x: auto;">
          <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold);">
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Phase</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Boss Tactics</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Winning Strategy</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 1 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Melee Duel)</span></td>
                <td style="padding: 1rem; color: #ccc;">Aggressive Combos</td>
                <td style="padding: 1rem; color: #ccc;">He will try to break your guard with heavy overhead strikes. <strong>Slide dodge</strong> to his left and use the Greatsword to trade hits only when he is recovering from an attack.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 2 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Abyss Weaver)</span></td>
                <td style="padding: 1rem; color: #ccc;">Axiom Force Spam</td>
                <td style="padding: 1rem; color: #ccc;">Myurdin will tear pieces of the arena and throw them at you. Use your own Axiom Force to <strong>grab his projectiles</strong> mid-air and hurl them back to stun him instantly.</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Final Phase <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(Zero Gravity)</span></td>
                <td style="padding: 1rem; color: #ccc;">Void Annihilation</td>
                <td style="padding: 1rem; color: #ccc;">The arena crumbles. You are both in free-fall. Use your <strong>Abyss Wings</strong> to close the distance, dodging his lasers, and trigger the final Quick-Time Event to deliver the killing blow.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="guide-accordion reveal" id="acc-c9-secretboss" style="background: rgba(212, 168, 67, 0.05); border: 1px solid var(--gold); border-radius: 4px; margin-top: 2rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c9-secretboss')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(212, 168, 67, 0.2);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">⚠ Secret Phase: Origin Core (True Ending Only)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="margin-bottom: 1rem; color: #ccc;">If you have all 4 Civilization Relics in your inventory when Myurdin dies, the game will not end. The Origin Core will consume his body and manifest as an Eldritch God.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>The Fight:</strong> You are permanently in <em>Transcendence</em> mode. You cannot block; you must rely entirely on dodging its massive AoE screen-wipes.</li>
                <li><strong>The Weakness:</strong> Wait for it to charge its "Genesis Beam". Jump into the air and use the Axiom Force Grapple to plunge your weapon directly into its central eye. Repeat this 3 times to trigger the True Ending.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="endings" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">4. Multiple Endings Guide</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">After the battle, you will stand before the fading Origin Core. Your dialogue choice here determines the fate of the continent.</p>

        <div class="reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0;">
            <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">📜 Lore Context: The Origin Core</h5>
            <p style="margin:0; font-size: 0.9rem; color: #ccc;">The Origin Core is not just a source of magic; it is the crystallized memories of every soul that has ever died in Pywel. Myurdin didn't just want to rule the continent; he wanted to rewrite its history by controlling the memories of the dead.</p>
        </div>
        
        <div class="guide-accordion open reveal" id="acc-c9-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c9-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #e74c3c; border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">👑 Ending A: The Usurper (Bad Ending)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="margin-bottom: 0.5rem; color: #ccc;"><strong>Requirement:</strong> Choose the dialogue option: <em>"Claim the Power"</em>.</p>
              <p style="margin: 0; color: #ccc;">Kliff absorbs the Core and becomes the new God-King of Pywel. He rules with an iron fist, but loses his humanity. His companions leave him, and the world enters a dark age of order through fear.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion open reveal" id="acc-c9-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c9-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #3498db; border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🌀 Ending B: The Abyss Warden (Neutral Ending)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="margin-bottom: 0.5rem; color: #ccc;"><strong>Requirement:</strong> Choose the dialogue option: <em>"Seal the Rift"</em>.</p>
              <p style="margin: 0; color: #ccc;">Kliff realizes the magic is too dangerous to exist in the mortal realm. He sacrifices his physical form to become the eternal guardian of the Abyss, ensuring no one ever uses its power again. He is remembered as a legendary martyr.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion open reveal" id="acc-c9-3" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-c9-3')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #2ecc71; border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🍻 Ending C: Mercenary's Peace (True Ending)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="margin-bottom: 0.5rem; color: #ccc;"><strong>Requirement:</strong> Must have Max Reputation in all 3 main cities AND have defeated the Secret Boss (Origin Core Manifestation). Choose <em>"Destroy the Core"</em>.</p>
              <p style="margin: 0; color: #ccc;">Magic is completely erased from the world. Kliff loses his Axiom Force but survives as a normal human. The credits roll showing him years later, sharing a drink with his surviving friends in a peaceful, magic-free Pywel.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="ngplus" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">5. Post-Game: New Game+ Unlocks</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">After any of the endings, you will be prompted to save your clear data. Loading this data grants access to <strong>New Game+</strong>.</p>
        
        <ul style="margin-top: 1rem; color: #ccc; line-height: 1.6; padding-left: 1.5rem; list-style: square;">
          <li style="margin-bottom: 0.5rem;"><strong>What carries over:</strong> All Weapons, Armor, Gold, Mercenary Reputation, and unlocked Axiom Force skills.</li>
          <li style="margin-bottom: 0.5rem;"><strong>What resets:</strong> Story progress, Map fog, Quest items, and standard fast travel points.</li>
          <li><strong>NG+ Exclusives:</strong> Enemies are scaled to Level 50+. A new difficulty mode, "Abyssal Nightmare," is unlocked. You can now farm <em>Pure Void Crystals</em> to upgrade gear beyond normal limits.</li>
        </ul>
      </section>

      <section class="guide-section reveal" id="hidden" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">6. Chapter 9 Hidden Treasures</h2>
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">⚔️</span>
            <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Blade of the Origin</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">During the Gauntlet of Shadows, look for a golden rift on your right. Enter it to find the final Mythic weapon. It deals 2x damage against Abyss enemies.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🎮</span>
            <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Developer's Secret Stash</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Behind the throne of the shadow clone of the Rat King. Roll into the invisible wall to find a room filled with early concept art models and 10,000 Gold.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">💍</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Band of Brotherhood</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Automatically awarded if you speak to all 3 companions before the final door. Grants +50% XP and Gold in New Game+.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">📜</span>
            <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Last Journal</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Hidden behind the Origin Core. You must collect it <em>before</em> interacting with the Core to trigger the ending sequence. Completes the 100% Lore Log Achievement.</p>
          </div>
        </div>

        <div class="callout info reveal" style="border-left: 4px solid var(--gold); background: rgba(212, 168, 67, 0.08); margin-top: 2rem; padding: 1.5rem;">
          <span class="callout-label" style="color: var(--gold); font-weight: bold; text-transform: uppercase;">The Secret Post-Credits Scene</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">If you achieve <strong>Ending C (True Ending)</strong>, do NOT skip the credits. Wait exactly 3 minutes after the screen goes black. You will hear a brief audio log of the Primeval Voice whispering: <em>"The Core is broken, but the Roots remain..."</em> This unlocks a secret cosmetic cape in your inventory for NG+.</p>
        </div>
      </section>

      <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">7. Journey's End</h2>
        
        <h3 class="reveal" style="font-family: var(--font-display); font-size: 1.8rem; color: var(--gold); margin-top: 2rem; margin-bottom: 1rem;">✅ Final Achievement Check...</h3>
        <p class="reveal" style="color: #ccc; margin-bottom: 1.5rem;">Before putting down the controller, make sure you've claimed your final bragging rights:</p>
        
        <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
            <ul class="guide-checklist">
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>True Ending:</strong> Did you defeat the Origin Core Manifestation?</span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox">
                        <span style="color: #ccc;"><strong>Secret Scene:</strong> Did you watch the post-credits cutscene completely?</span>
                    </label>
                </li>
            </ul>
        </div>
        
        <div class="reveal" style="border-left: 4px solid #3498db; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
            <div style="font-size: 2.5rem;">🏆</div>
            <div>
                <h4 style="color: #3498db; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px; margin-top: 0;">Platinum Trophy Unlocked</h4>
                <p style="margin: 0; color: #ccc;"><strong>The Crimson Legend:</strong> Complete all chapters, unlock the True Ending, and uncover the final secret of Pywel. <span style="color: #888; font-size: 0.9rem;">(100G / Platinum)</span></p>
            </div>
        </div>

        <div class="reveal" style="margin-top: 5rem; text-align: center;">
          <h3 style="color: var(--gold); margin-bottom: 1rem; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 2px;">Congratulations, Mercenary!</h3>
          <p style="color: var(--text-muted); margin-bottom: 2rem;">You have conquered the Crimson Desert to its absolute core.</p>
          <div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px solid var(--gold); padding: 2rem; border-radius: 8px; text-align: left; margin-bottom: 3rem;">
            <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.5rem; margin-bottom: 1rem; margin-top: 0;">🗡️ A Word from the Author</h4>
            <p style="color: #ccc; font-size: 1rem; line-height: 1.6; margin-bottom: 0;">If you've followed this walkthrough from the dusty roads of Hernand all the way to the heart of the Origin Core, <strong>thank you</strong>. Crimson Desert is a massive, unforgiving journey, and it has been an absolute honor guiding you through it. If this guide helped you secure the True Ending or find that one missing legendary weapon, share it with your fellow mercenaries. Now, take a well-deserved rest... or dive straight into New Game+!</p>
          </div>
        </div>

        <div class="chapter-nav">
            <a href="/crimson-desert/chapters/chapter-8.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 8</a>
            <a href="/crimson-desert/chapters/post-game.php" class="btn btn-gold">Explore Post-Game Guide →</a>
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
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>