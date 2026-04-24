<?php 
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];
$pageTitle = "Chapter 10: Shadow of the Erdtree (Part 2) | Elden Ring Walkthrough";
$pageDesc = "The ultimate guide to the Elden Ring DLC endgame. Conquer the Shadow Keep, find Euporia, solve the Shaman Village, and defeat Consort Radahn.";
$bodyClass = "theme-elden-ring";

// Cargamos el header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 45vh; background: linear-gradient(180deg, rgba(200, 50, 50, 0.2) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1542223616-d3063b469502?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.8);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/elden-ring/">Elden Ring</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Chapter 10 (DLC Part 2)</span>
            </nav>
            <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: THE GRAND FINALE</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem; font-family: var(--font-display);">Chapter 10: The Divine Gate</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd; max-width: 600px;">Shadow Keep, Abyssal Woods, Enir-Ilim, and the Promised Consort</p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <div class="mobile-toc-container">
            <button class="mobile-toc-btn" id="tocToggle">
                <span>Exploration Progress</span>
                <span id="tocIcon">▼</span>
            </button>
            <ul class="mobile-toc-list" id="tocList">
                <li><a href="#shadow-keep">1. The Shadow Keep</a></li>
                <li><a href="#messmer">2. Boss: Messmer the Impaler</a></li>
                <li><a href="#scaduview">3. Scaduview & Gaius</a></li>
                <li><a href="#hidden-paths">4. The Two Hidden Realms</a></li>
                <li><a href="#abyssal-woods">5. Abyssal Woods & Midra</a></li>
                <li><a href="#hinterlands">6. Hinterlands & Shaman Village</a></li>
                <li><a href="#rauh">7. Ancient Ruins of Rauh</a></li>
                <li><a href="#enir-ilim">8. Enir-Ilim & Leda's Brawl</a></li>
                <li><a href="#euporia">9. Secret Weapon: Euporia</a></li>
                <li><a href="#radahn">10. Boss: Consort Radahn</a></li>
                <li><a href="#completion">11. Epilogue & Completion</a></li>
            </ul>
        </div>

        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">DLC Checklist</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#shadow-keep" style="color: var(--text-dim); transition: color 0.2s;">1. The Shadow Keep</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#messmer" style="color: var(--text-dim); transition: color 0.2s;">2. Boss: Messmer</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#scaduview" style="color: var(--text-dim); transition: color 0.2s;">3. Commander Gaius</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#hidden-paths" style="color: var(--text-dim); transition: color 0.2s;">4. Hidden Realms</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#abyssal-woods" style="color: var(--text-dim); transition: color 0.2s;">5. Abyssal Woods</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#hinterlands" style="color: var(--text-dim); transition: color 0.2s;">6. Shaman Village</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#rauh" style="color: var(--text-dim); transition: color 0.2s;">7. Ruins of Rauh</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#enir-ilim" style="color: var(--text-dim); transition: color 0.2s;">8. Enir-Ilim</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#euporia" style="color: var(--text-dim); transition: color 0.2s;">9. Secret: Euporia</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#radahn" style="color: var(--text-dim); transition: color 0.2s;">10. Boss: Radahn</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">11. Post-Game Secrets</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <section class="guide-section reveal" id="shadow-keep" style="margin-bottom: 4rem;">
                <div class="callout info" style="margin-bottom: 3rem; background: rgba(212, 175, 55, 0.05); border-left: 4px solid var(--gold); padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: var(--gold); font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">Endgame Preparation</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;"><strong>Recommended Scadutree Level:</strong> 12+ (For Messmer) / 18+ (For Radahn)<br>
                    <strong>Key Items:</strong> Messmer's Kindling, Golden Braid, Euporia, St. Trina's Blossom.</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">1. The Shadow Keep</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The towering black fortress in the center of the map. As soon as you approach its gates, a loud shattering sound will occur, accompanied by the message <em>"Somewhere, a great rune has broken."</em> This event breaks Miquella's charm over the NPCs, progressing all their questlines.</p>
                
                <ul class="step-list" style="margin-top:2rem;">
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">1</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Boss: Golden Hippopotamus</h4>
                            <p style="color: #ccc;">Immediately upon entering the main gate, you are ambushed by this massive beast. It deals heavy physical damage and sprouts golden porcupine quills at 50% HP. <strong>Weakness:</strong> Bleed, Lightning, and attacking its unarmored head. Summon Freya or Hornsent (if their quests are active) to distract it.</p>
                        </div>
                    </li>
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">2</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Specimen Storehouse</h4>
                            <p style="color: #ccc;">A massive vertical library filled with Vulgar Militiamen and Fire Knights. You must climb the outer stairs, jump across hanging specimens (like the giant goat), and pull levers to shift the central structures upward to reach the highest floors.</p>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="guide-section reveal" id="messmer" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #e74c3c; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">2. Boss: Messmer the Impaler</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">At the very top of the Specimen Storehouse awaits Marika's hidden son. Messmer is fiercely fast, combining lethal spear thrusts with sweeping fire magic.</p>

                <div class="guide-table-wrap reveal" style="margin-top: 2rem; overflow-x: auto;">
                    <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
                        <thead>
                            <tr style="border-bottom: 2px solid var(--gold);">
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Phase</th>
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Mechanic</th>
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Strategy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 1 <br><span style="font-size:0.75rem;color:#888;">(The Impaler)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Flame & Spear Combos</td>
                                <td style="padding: 1rem; color: #ccc;">He always starts with an airborne flaming dive-bomb. Wait a split second and roll *into* the explosion just before he lands to get a free jump attack. His multi-thrust spear combos have delayed timings; roll diagonally forward-left to slip under his guard. <strong>He is highly susceptible to Bleed, Frostbite, and Poise breaks.</strong></td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 2 <br><span style="font-size:0.75rem;color:#888;">(Base Serpent)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Abyssal Serpents</td>
                                <td style="padding: 1rem; color: #ccc;">He shatters his seal and transforms into a colossal dark serpent. When he summons a dark pool on the ground, <strong>sprint out immediately</strong> as multiple snake heads will violently erupt from it in sequence. The snake lunge attacks have massive hitboxes but extremely long recovery times—punish his head after he misses.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="callout warning reveal" style="margin-top:2rem; background: rgba(243, 156, 18, 0.1); border-left: 4px solid #f39c12; padding: 1.5rem;">
                    <span class="callout-label" style="color: #f39c12; font-weight: bold; text-transform: uppercase;">Messmer's Kindling</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Defeating him grants the Remembrance of the Impaler and <strong>Messmer's Kindling</strong>. You need this item to burn the sealing tree in the Ancient Ruins of Rauh, but don't do it yet! There is much more to explore.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="scaduview" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">3. Scaduview & Commander Gaius</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The Shadow Keep has a Back Gate. To reach it, start from the Storehouse (First Floor) grace, take the elevator down to the flooded section, and navigate the submerged chapel walkways to exit out the rear of the fortress.</p>

                <div class="guide-accordion open reveal" id="acc-gaius" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-gaius')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Boss: Commander Gaius</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Gaius rides a massive armored boar and uses Gravity magic (similar to Radahn, whom he trained with). He will instantly charge you the moment you enter the arena.</p>
                            <p style="color: #ccc; margin-bottom: 1rem;"><strong>Strategy:</strong> The boar's charge hitbox is notoriously difficult to dodge. You can use the Deflecting Hardtear in your Flask to perfectly block it, or use the <em>Bloodhound's Step</em> Ash of War for extra i-frames. Stay near the boar's flank to avoid his gravity-lance thrusts.</p>
                            <p style="color: var(--gold); font-weight: bold; margin-bottom: 0;">Reward: Defeating him allows you to reach the Scadutree Chalice, where you can pick up 5 Scadutree Fragments at once.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="hidden-paths" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">4. The Two Hidden Realms</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The Shadow Keep is a hub that hides the entrances to the two largest secret areas in the DLC. You must find these before proceeding to the end of the game.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Path to the Abyssal Woods</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">From the main plaza with the burning boats, climb down a hidden ladder on the eastern wall to reach the watery depths. Find the hidden illusory wall leading to a coffin. <strong>Get in the coffin</strong> to be transported down the river to the Ruins of Unte and the Abyssal Woods.</p>
                    </div>

                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f1c40f;">
                        <h3 style="color: #f1c40f; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Path to the Hinterlands</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Go to the Shadow Keep Back Gate grace (right before Gaius). To the right, there is a dead end with a headless Marika statue. Perform the <strong>"O Mother" gesture</strong> (found earlier in Bonny Village). The statue will move, revealing the secret path to the Hinterlands.</p>
                    </div>

                </div>
            </section>

            <section class="guide-section reveal" id="abyssal-woods" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #e67e22; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">5. The Abyssal Woods & Midra</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">A terrifying stealth section where Torrent is too afraid to be summoned. The woods are stalked by the "Untouchable Aging Ones" (Winter Lanterns).</p>

                <div class="guide-accordion open reveal" id="acc-midra-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-midra-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Surviving the Woods & Boss: Midra</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;"><strong>The Untouchables:</strong> You cannot damage them normally. Use the tall grass to sneak past them. If you are caught, your ONLY option for survival is to <strong>Parry their grab attack</strong>. This breaks their invulnerability, allowing you to kill them for the <em>Aged One's Exultation</em> talisman.</p>
                            <p style="color: #ccc; margin-bottom: 1rem;">At the end of the woods is Midra's Manse. Ascend the creepy mansion to face <strong>Midra, Lord of Frenzied Flame</strong>.</p>
                            <p style="color: #ccc; margin-bottom: 0;"><strong>Strategy:</strong> Midra's attacks build up Madness incredibly fast. Equip gear with high Focus and bring Clarifying Boluses. His greatsword swings are slow and rhythmic, making him highly susceptible to parries and heavy jump attacks. When he floats into the air to unleash a massive frenzy nuke, sprint backwards as fast as possible. He drops the devastating <em>Greatsword of Damnation</em>.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="hinterlands" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #3498db; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">6. Hinterlands & The Shaman Village</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">After opening the path with the "O Mother" gesture, you enter the pristine Hinterlands. This beautiful, flowery region hides the biggest lore secret of the DLC.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
                        <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Shaman Village</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Located at the highest eastern peak. This peaceful village has no enemies. It is Queen Marika's original home. Inside the hollowed tree in the center, you will find the <strong>Minor Erdtree Incantation</strong>. Inside the ruined statue, you can loot the <strong>Golden Braid</strong> talisman (the best Holy resistance item in the game, vital for Radahn).</p>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-metyr" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-metyr')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Boss: Metyr, Mother of Fingers</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">To fight Metyr, you must have sounded the bells at the first two Finger Ruins (one in Cerulean Coast, one here in the Hinterlands). Return to Ymir at the Cathedral of Manus Metyr. His throne will have moved, revealing a ladder.</p>
                            <p style="color: #ccc; margin-bottom: 1rem;"><strong>Strategy:</strong> Metyr is a grotesque cosmic horror. She uses massive sweeping attacks and summons creeping fingers. Attack her fleshy underbelly to deal critical posture damage. When she flies into the air and creates a black hole laser, sprint in a wide circle to outrun the beam.</p>
                            <p style="color: #ccc; margin-bottom: 0;">After defeating her, return to the surface to fight Jolan and Ymir, completing the questline and acquiring the <strong>Maternal Staff</strong>.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="rauh" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #2ecc71; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">7. Ancient Ruins of Rauh</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Cross the massive bridge west from the Shadow Keep to reach Rauh. This dense, multi-layered jungle ruins is filled with Scarlet Rot, Spider Scorpions, and hidden treasures like the <strong>Talisman of All Crucibles</strong> (found by taking a sealed spirit spring to a high pillar).</p>

                <div class="guide-accordion open reveal" id="acc-rauh" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-rauh')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Boss: Romina, Saint of the Bud</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">At the Church of the Bud, you face Romina, a horrifying fusion of woman and giant centipede/scorpion. She is the source of the Scarlet Rot in the Realm of Shadow.</p>
                            <p style="color: #ccc; margin-bottom: 1rem;"><strong>Strategy:</strong> She has extreme reach with her polearm and tail stingers. All her attacks build up Rot. Dodge into her body, staying directly underneath her to avoid her wide sweeping attacks. <strong>Bring Preserving Boluses.</strong></p>
                            <div class="callout warning" style="border-left: 4px solid #f39c12; background: rgba(243, 156, 18, 0.1); padding: 1rem; margin-top: 1rem;">
                                <span style="color: #f39c12; font-weight: bold; text-transform: uppercase;">The Sealing Tree</span>
                                <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Past Romina is the Sealing Tree. Using Messmer's Kindling here will permanently burn the tree, transporting you to the final dungeon and locking out several NPC quests. Make sure you are ready!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="enir-ilim" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">8. Enir-Ilim & Leda's Brawl</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Burning the tree transports you to Enir-Ilim, the divine spiral tower. You must fight your way past Hornsent Inquisitors and the brutal Divine Bird Warriors.</p>

                <div class="guide-accordion open reveal" id="acc-leda" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-leda')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">The Grand Melee: Leda & Allies</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">In the antechamber before the Divine Gate, Needle Knight Leda stands in your way. This is a massive multi-NPC brawl. Depending on your choices earlier, you will fight Leda, Dryleaf Dane, Moore, and Hornsent.</p>
                            <p style="color: #ccc; margin-bottom: 0;"><strong>Strategy:</strong> You can summon Pureblood Knight Ansbach and Thiollier (via signs on the floor) to help you. This fight can turn into a 3v4 chaotic mess. Focus down one target at a time. Dane is highly aggressive, so eliminate him first. Use wide AoE weapons (like Blasphemous Blade or Sacred Relic Sword) to knock them all down repeatedly.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="euporia" style="margin-bottom: 4rem;">
                <div class="callout abyss" style="margin-bottom: 3rem; background: rgba(138, 43, 226, 0.08); border-left: 4px solid #A29BFE; padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: #A29BFE; font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">SECRET WEAPON: EUPORIA</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Hidden within Enir-Ilim is the legendary twinblade <strong>Euporia</strong>, a weapon that restores its fading luster by dealing damage. The path to it is the most well-hidden jumping puzzle in the DLC.</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">9. The Path to Euporia</h2>
                
                <ul class="step-list" style="margin-top:2rem;">
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">1</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Spiral Rise Drop</h4>
                            <p style="color: #ccc;">Start at the "Spiral Rise" Site of Grace in Enir-Ilim. Turn around, go down the stairs, and look for a gap in the railing to your left. Drop down onto the staircase far below.</p>
                        </div>
                    </li>
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">2</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Invisible Ledges</h4>
                            <p style="color: #ccc;">Navigate downwards using window ledges and arches. You will eventually ride an elevator that takes you back down into the highest inaccessible areas of Belurat. Fight past the Scorpions and the Omen Inquisitor to reach the sealed altar room containing Euporia.</p>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="guide-section reveal" id="radahn" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #e74c3c; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">10. Final Boss: Promised Consort Radahn</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The ultimate challenge of Elden Ring. Miquella has resurrected Radahn in his prime at the Divine Gate. This fight demands absolute perfection, a Scadutree Blessing of 18 or higher, and immense patience.</p>

                <div class="guide-table-wrap reveal" style="margin-top: 2rem; overflow-x: auto;">
                    <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
                        <thead>
                            <tr style="border-bottom: 2px solid var(--gold);">
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Phase</th>
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Mechanic</th>
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Strategy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 1 <br><span style="font-size:0.75rem;color:#888;">(Prime Radahn)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Relentless Aggression & Gravity</td>
                                <td style="padding: 1rem; color: #ccc;">He initiates with a gravity spin attack; dodge forward at the last second. His twin-sword combos are incredibly fast and leave almost no windows to heal. Hug his left leg and roll diagonally forward to avoid the cross-slashes. <strong>Bleed and Rot</strong> (via Antspur Rapier) are his biggest weaknesses. The ultimate defense is using a Greatshield (like Fingerprint Stone Shield) and poking him with a spear.</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 2 <br><span style="font-size:0.75rem;color:#888;">(Radahn & Miquella)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Miquella's Light & Holy Clones</td>
                                <td style="padding: 1rem; color: #ccc;">Miquella clings to Radahn's back. Every sword swing now has a secondary Holy light explosion follow-up. <strong>You MUST roll forward</strong>, hugging him closely; rolling backwards ensures the light beams hit you. Equip the Golden Braid talisman for extreme Holy resistance.<br><br>When he floats up for his massive orbital laser, sprint entirely to the edge of the arena. If Miquella grabs you twice, your heart is stolen and you instantly die (equip Miquella's Great Rune to clear the charm debuff).</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">11. Epilogue & DLC Completion</h2>
                
                <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
                    <p style="color: #ccc; margin-bottom: 1.5rem;">Defeating Radahn leaves behind a glowing memory of Miquella. Touching it reveals a final cutscene detailing Miquella's true promise. There are no credits for the DLC, but you have successfully conquered the hardest content FromSoftware has ever created.</p>

                    <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.2rem; margin-bottom: 1rem;">Post-Radahn Cleanup:</h4>
                    <ul class="guide-checklist" style="list-style: none; padding: 0; margin: 0;">
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>St. Trina's Blossom:</strong> Fast travel back to the Stone Coffin Fissure. St. Trina is now dead. Loot her body to receive <em>St. Trina's Blossom</em> (a headpiece that slightly boosts max FP).</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Loot the Battlefield:</strong> Pick up Ansbach and Thiollier's armor sets and weapons from their bodies in the boss arena (if you summoned them).</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Leda's Armor:</strong> Return to the Enir-Ilim antechamber where the brawl took place to loot the armor of Leda and her allies.</span></label></li>
                        <li><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>A Lord's Promise:</strong> Have you defeated Promised Consort Radahn?</span></label></li>
                    </ul>
                </div>
                
                <div style="border-left: 4px solid #f1c40f; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
                    <div style="font-size: 2.5rem;">👑</div>
                    <div>
                        <h4 style="color: #f1c40f; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px; margin-top: 0;">Shadow Conquered</h4>
                        <p style="margin: 0; color: #ccc;">You have survived the Realm of Shadow and witnessed the truth of Miquella's age of compassion. You are a true Elden Lord.</p>
                    </div>
                </div>
                
                <div class="chapter-nav" style="display: flex; justify-content: space-between; align-items: center; margin-top: 4rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1);">
                    <a href="/elden-ring/chapters/chapter-9.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 9 (DLC Part 1)</a>
                    <a href="/elden-ring/index.php" class="btn btn-gold" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Return to Main Hub →</a>
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

<?php 
$fxTheme = 'embers';
include $_SERVER['DOCUMENT_ROOT'] . '/elden-ring/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>