<?php 
$pageTitle = "Chapter 4: Altus Plateau & Leyndell | Elden Ring Walkthrough";
$pageDesc = "Complete guide to Altus Plateau, Mt. Gelmir, and Leyndell, Royal Capital. Defeat Morgott the Omen King and solve the Golden Order riddle.";
$bodyClass = "theme-elden-ring";

// Cargamos el header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 45vh; background: linear-gradient(180deg, rgba(212, 175, 55, 0.2) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1533154683836-84ea7a0bc310?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.75);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/elden-ring/">Elden Ring</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Chapter 4</span>
            </nav>
            <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: PART 4</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem; font-family: var(--font-display);">Chapter 4: The Golden Capital</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd; max-width: 600px;">Altus Plateau, Mt. Gelmir, and the Secrets of Leyndell</p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <div class="mobile-toc-container">
            <button class="mobile-toc-btn" id="tocToggle">
                <span>Exploration Progress</span>
                <span id="tocIcon">▼</span>
            </button>
            <ul class="mobile-toc-list" id="tocList">
                <li><a href="#altus">1. Altus Plateau</a></li>
                <li><a href="#gelmir">2. Mt. Gelmir & Volcano Manor</a></li>
                <li><a href="#draconic">3. Draconic Tree Sentinel</a></li>
                <li><a href="#leyndell">4. Leyndell, Royal Capital</a></li>
                <li><a href="#missables">5. Crucial Missables</a></li>
                <li><a href="#riddle">6. The Golden Order Riddle</a></li>
                <li><a href="#sewers">7. Subterranean Shunning-Grounds</a></li>
                <li><a href="#bosses">8. Bosses: Godfrey & Morgott</a></li>
                <li><a href="#towers">9. Activating the Great Runes</a></li>
                <li><a href="#completion">10. Chapter Completion</a></li>
            </ul>
        </div>

        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Chapter Progress</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#altus" style="color: var(--text-dim); transition: color 0.2s;">1. Altus Plateau</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#gelmir" style="color: var(--text-dim); transition: color 0.2s;">2. Volcano Manor</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#draconic" style="color: var(--text-dim); transition: color 0.2s;">3. Draconic Sentinel</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#leyndell" style="color: var(--text-dim); transition: color 0.2s;">4. Leyndell Navigation</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#missables" style="color: var(--text-dim); transition: color 0.2s;">5. Crucial Missables</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#riddle" style="color: var(--text-dim); transition: color 0.2s;">6. The Golden Riddle</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#sewers" style="color: var(--text-dim); transition: color 0.2s;">7. The Sewers</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#bosses" style="color: var(--text-dim); transition: color 0.2s;">8. The Omen King</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#towers" style="color: var(--text-dim); transition: color 0.2s;">9. Great Rune Towers</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">10. Chapter Completion</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <section class="guide-section reveal" id="altus" style="margin-bottom: 4rem;">
                <div class="callout info" style="margin-bottom: 3rem; background: rgba(212, 175, 55, 0.05); border-left: 4px solid var(--gold); padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: var(--gold); font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">Region Overview</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;"><strong>Recommended Level:</strong> 60 - 80<br>
                    <strong>Weapon Upgrade:</strong> +12 to +18 (Standard) / +5 to +7 (Somber)<br>
                    <strong>Key Items:</strong> Bolt of Gransax, Margit's Shackle, Sanctified Whetblade, Golden Order Principia.</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">1. Exploring the Altus Plateau</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Whether you arrived via the Grand Lift of Dectus or the Ruin-Strewn Precipice, you are now in the autumnal, golden lands of the Altus Plateau. The Erdtree looms massive in the sky, and the enemies are significantly tougher.</p>
                
                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f1c40f;">
                        <h3 style="color: #f1c40f; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Dominula, Windmill Village</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Located in the north. The dancing villagers are initially passive, but will attack if you get too close. At the top of the village, you fight the <strong>Godskin Apostle</strong>. Defeat him to advance Millicent's questline (she moves here after Caelid).</p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Shaded Castle</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">A poison-filled legacy mini-dungeon in a valley to the northwest. It holds the <strong>Valkyrie's Prosthesis</strong> (give this to Millicent) and is ruled by Elemer of the Briar, who drops the legendary <em>Marais Executioner's Sword</em>.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="gelmir" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">2. Mt. Gelmir & Volcano Manor</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Before heading to the capital, you should explore the volcanic region to the west. This area houses a faction of Tarnished hunters and a demigod.</p>

                <div class="guide-accordion open reveal" id="acc-gelmir-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-gelmir-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Joining the Recusants</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Speak to Lady Tanith in Volcano Manor and choose to join them. This does <strong>not</strong> lock you out of any endings. Joining them gives you access to a drawing room where you get assassination letters. Completing these assassinations rewards you with some of the best armor sets in the game (like the Scaled Set and Hoslow's Set).</p>
                        </div>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-gelmir-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-gelmir-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--red); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Boss: Rykard, Lord of Blasphemy</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">You can reach Rykard by finishing Tanith's quests or by exploring the hidden legacy dungeon behind the illusory wall in the manor's drawing room (which involves fighting the Godskin Noble).</p>
                            <p style="color: #ccc; margin-bottom: 0;"><strong>Strategy:</strong> As soon as you enter the boss arena, pick up the <strong>Serpent-Hunter</strong> greatsword on the left. Equip it (even if you don't have the stats) and spam its heavy attack and weapon art. It fires massive beams of wind that hit Rykard from across the lava. Defeating him yields the <em>Blasphemous Blade</em>, arguably the best PvE weapon in the game.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="draconic" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">3. The Gatekeeper: Draconic Tree Sentinel</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">To enter Leyndell, you must approach the outer walls from the northeast. The main gate is sealed, and the side entrance is guarded by a brutal boss.</p>

                <div class="callout danger reveal" style="margin-bottom:2rem; background: rgba(140, 45, 45, 0.08); border-left: 4px solid #8C2D2D; padding: 1.5rem;">
                    <span class="callout-label" style="color: #ff4d4d; font-weight: bold; text-transform: uppercase;">Combat Strategy</span>
                    <ul style="margin-top: 0.5rem; color: #ccc; padding-left: 1.5rem; margin-bottom: 0;">
                        <li style="margin-bottom: 0.5rem;"><strong>Phase 1:</strong> He attacks with a massive club and a fire-breathing horse. Stay close to his shield side to bait out shield bashes, which leave him open.</li>
                        <li><strong>Phase 2 (Lightning):</strong> At 50% HP, he infuses his weapon with red lightning. When he raises his shield to the sky, a lightning bolt will strike you from above. <strong>Roll exactly half a second after he pulls the shield down.</strong> Alternatively, rot him and ride around on Torrent until he dies.</li>
                    </ul>
                </div>
            </section>

            <section class="guide-section reveal" id="leyndell" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">4. Leyndell, Royal Capital</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Leyndell is a massive, multi-layered labyrinth. The enemies hit incredibly hard (especially the Leyndell Knights). Your main goal is to reach the base of the Erdtree.</p>

                <ul class="step-list" style="margin-top:2rem;">
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">1</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">East Capital Rampart</h4>
                            <p style="color: #ccc;">After defeating the Sentinel, run across the ramparts. You will find a grace overlooking the city. From here, drop down onto the rooftops. The streets are patrolled by a giant Erdtree Avatar, but you can sneak past it to reach the <strong>Avenue Balcony</strong> grace.</p>
                        </div>
                    </li>
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">2</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Climbing the Dragon</h4>
                            <p style="color: #ccc;">From Avenue Balcony, head down the stairs, deal with the archers, and jump onto the wing of the massive petrified dragon (Gransax). Climb the wing all the way up to reach a ledge that leads into the upper palace and the West Capital Rampart grace.</p>
                        </div>
                    </li>
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">3</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Roots of the Erdtree</h4>
                            <p style="color: #ccc;">From the upper palace, run across the giant tree roots scaling the buildings. This will lead you to the Erdtree Sanctuary grace, right outside the first major boss room.</p>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="guide-section reveal" id="missables" style="margin-bottom: 4rem;">
                <div class="callout warning" style="border-left: 4px solid #f39c12; background: rgba(243, 156, 18, 0.1); padding: 1.5rem; margin-bottom: 3rem;">
                    <span class="callout-label" style="color: #f39c12; font-weight: bold; text-transform: uppercase;">CRITICAL WARNING: The Ash Capital</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Later in the game (Chapter 6), completing the Crumbling Farum Azula zone will permanently alter Leyndell, burying it in ash. You <strong>MUST</strong> grab the following items before that happens, or they will be lost until New Game+.</p>
                </div>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
                        <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Bolt of Gransax (Legendary Weapon)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">After defeating the Golden Shade of Godfrey, go out the western door, take the elevator down, and jump over the railing onto the giant golden spear stuck in the building. Walk up the spear to grab it. <em>Required for the Legendary Armaments Trophy.</em></p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #bdc3c7;">
                        <h3 style="color: #bdc3c7; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Sanctified Whetblade</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Located in the Fortified Manor (the building that looks identical to Roundtable Hold). It allows you to apply Holy and Lightning affinities to weapons. Found near the fireplace where Ensha normally stands.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="riddle" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">6. The Golden Order Riddle (Lore Secret)</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">One of the biggest lore revelations in the game is hidden behind a puzzle in Leyndell, required for Brother Corhyn and Goldmask's ending.</p>

                <div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px; margin-bottom: 2rem;">
                    <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">How to solve "Regression Alone Reveals Secrets"</h4>
                    <ol style="margin-top: 0.5rem; color: #ccc; padding-left: 1.5rem; margin-bottom: 0; line-height: 1.6;">
                        <li style="margin-bottom: 0.5rem;">Acquire the <strong>Golden Order Principia</strong> prayerbook (found hanging from a chair above the Erdtree Sanctuary boss room, accessed by climbing a giant root outside).</li>
                        <li style="margin-bottom: 0.5rem;">Give the book to Miriel (Turtle Pope) or Corhyn and buy the <strong>Law of Regression</strong> incantation (Requires 37 Intelligence).</li>
                        <li style="margin-bottom: 0.5rem;">From the Erdtree Sanctuary grace, go out the west door, down the elevator, and down the stairs to a large white statue of Radagon. Read the message on the floor.</li>
                        <li>Stand on the message and cast <em>Law of Regression</em>. The statue will transform from Radagon into Queen Marika, and a new message will appear revealing the game's ultimate twist: <strong>"Radagon is Marika"</strong>. Tell this to Goldmask to advance his quest.</li>
                    </ol>
                </div>
            </section>

            <section class="guide-section reveal" id="sewers" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">7. Subterranean Shunning-Grounds</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Beneath the pristine streets of the capital lies a dark, horrifying labyrinth of sewers where the golden order hides its darkest secrets. <strong>How to enter:</strong> From the Avenue Balcony grace, jump down the stairs to the left, climb over the rooftops, and drop into the well.</p>

                <div class="guide-accordion open reveal" id="acc-sewers-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-sewers-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Navigating the Pipes & Mohg</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">This area is a literal maze of identical-looking pipes. Watch out for Omens, Basilisks, and Imps. Use Rainbow Stones to mark pipes you've already explored.</p>
                            <p style="color: #ccc; margin-bottom: 1rem;">At the very bottom, you will face <strong>Mohg, the Omen</strong> (an illusion of the true Lord of Blood). He is immune to status effects in this form. Use <em>Margit's Shackle</em> to pin him to the floor twice during phase 1.</p>
                            <div class="decision-box" style="background: rgba(140, 45, 45, 0.1); border-left: 4px solid #8C2D2D; padding: 1rem;">
                                <h4 style="color: #ff4d4d; font-family: var(--font-display); font-size: 1.1rem; margin-top: 0; margin-bottom: 0.5rem;">The Frenzied Flame Proscription</h4>
                                <p style="color: #ccc; font-size: 0.95rem; margin: 0;">Behind Mohg's chest is an illusory altar. Hitting it reveals a massive jumping puzzle. At the absolute bottom lies the Three Fingers. <strong>DO NOT interact with the terrifying door while naked</strong> unless you specifically want the "Lord of Frenzied Flame" ending, as this locks you out of all other endings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="bosses" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">8. Bosses of the Capital</h2>

                <div class="guide-table-wrap reveal" style="margin-top: 2rem; overflow-x: auto;">
                    <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
                        <thead>
                            <tr style="border-bottom: 2px solid var(--gold);">
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Boss</th>
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Mechanic</th>
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Strategy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Godfrey, First Elden Lord<br><span style="font-size:0.75rem;color:#888;">(Golden Shade)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Stomp AoE & Holy Immunity</td>
                                <td style="padding: 1rem; color: #ccc;">He is a phantom made of pure light. He is <strong>100% immune to Bleed, Frost, Poison, Rot, and Holy damage</strong>. Use pure physical or lightning weapons. Jump over his massive foot stomps instead of rolling.</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Morgott, the Omen King<br><span style="font-size:0.75rem;color:#888;">(Shardbearer)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Holy Weapons & Extreme Speed</td>
                                <td style="padding: 1rem; color: #ccc;">The true form of Margit. He summons holy swords, spears, and a massive hammer. You can summon Melina to help tank him. <strong>Margit's Shackle</strong> works on him twice during Phase 1. When he coughs up black sludge at 50% HP, back away to avoid massive AoE damage. He is weak to Slash damage and Bleed.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="guide-section reveal" id="towers" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">9. Activating the Great Runes</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">You've defeated two demigods in this chapter. To use their power, you must awaken their Great Runes at their respective Divine Towers.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
                        <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Morgott's Great Rune</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0.5rem;"><strong>Location:</strong> Divine Tower of East Altus.</p>
                        <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0;">Exit Leyndell through the massive eastern gates (the same path toward the Mountaintops). Take the elevator down and head out to the bridge. You will be ambushed by the <em>Fell Twins</em> boss fight in pitch black darkness. Defeat them to reach the tower. (This tower also activates Mohg's rune later).</p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Rykard's Great Rune</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0.5rem;"><strong>Location:</strong> Divine Tower of West Altus.</p>
                        <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0;">Head to the moat surrounding the capital's southern wall. Enter the <strong>Sealed Tunnel</strong>. You must hit multiple illusory walls to navigate through this dungeon, eventually defeating the Onyx Lord at the end. The exit of the tunnel leads directly to the doors of the Divine Tower.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">10. Chapter Completion</h2>
                
                <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
                    <ul class="guide-checklist" style="list-style: none; padding: 0; margin: 0;">
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Demigods Defeated:</strong> Did you defeat Rykard and Morgott?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Legendary Weapon:</strong> Did you climb the dragon and grab the Bolt of Gransax?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Lore Secret:</strong> Did you solve the Golden Order Riddle for Goldmask?</span></label></li>
                        <li><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>The Path Forward:</strong> Did you interact with the thorny door past Morgott to receive the Rold Medallion from Melina?</span></label></li>
                    </ul>
                </div>
                
                <div style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
                    <div style="font-size: 2.5rem;">🏆</div>
                    <div>
                        <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px; margin-top: 0;">Achievement Unlocked</h4>
                        <p style="margin: 0; color: #ccc;"><strong>Morgott the Omen King:</strong> Defeat the Shardbearer of Leyndell. <span style="color: #888; font-size: 0.9rem;">(30G / Silver)</span></p>
                    </div>
                </div>
                
                <div class="chapter-nav" style="display: flex; justify-content: space-between; align-items: center; margin-top: 4rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1);">
                    <a href="/elden-ring/chapters/chapter-3.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 3</a>
                    <a href="/elden-ring/chapters/chapter-5.php" class="btn btn-gold" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Next: Chapter 5 (Mountaintops) →</a>
                </div>

            </section>

        </main>
    </div>
</div>

<script>
// Script para el menú desplegable en móvil
document.addEventListener('DOMContentLoaded', () => {
    const tocToggle = document.getElementById('tocToggle');
    const tocList = document.getElementById('tocList');
    const tocIcon = document.getElementById('tocIcon');

    if (tocToggle && tocList) {
        tocToggle.addEventListener('click', () => {
            tocList.classList.toggle('show');
            tocIcon.textContent = tocList.classList.contains('show') ? '▲' : '▼';
        });
    }

    // Animación Reveal
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
});

// Script para los acordeones
function toggleAcc(id) {
    const acc = document.getElementById(id);
    if (acc) {
        acc.classList.toggle('open');
    }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>