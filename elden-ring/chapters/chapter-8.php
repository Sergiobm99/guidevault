<?php 
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];
$pageTitle = "Chapter 8: The Ashen Capital & Endings | Elden Ring Walkthrough";
$pageDesc = "Complete guide to Leyndell, Ashen Capital. Defeat Godfrey, Radagon, find Goldmask's final location, and unlock all endings.";
$bodyClass = "theme-elden-ring";

// Cargamos el header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 45vh; background: linear-gradient(180deg, rgba(212, 175, 55, 0.1) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1504333638930-c8787321fee0?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.8);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/elden-ring/">Elden Ring</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Chapter 8</span>
            </nav>
            <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: THE FINALE</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem; font-family: var(--font-display);">Chapter 8: The Ashen Capital</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd; max-width: 600px;">Godfrey, Radagon, and the Elden Ring Endings</p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <div class="mobile-toc-container">
            <button class="mobile-toc-btn" id="tocToggle">
                <span>Exploration Progress</span>
                <span id="tocIcon">▼</span>
            </button>
            <ul class="mobile-toc-list" id="tocList">
                <li><a href="#ash-wastes">1. The Ash Wastes</a></li>
                <li><a href="#goldmask">2. Secret: Goldmask's Final Lore</a></li>
                <li><a href="#sewers-return">3. Return to the Sewers</a></li>
                <li><a href="#gideon">4. Boss: Sir Gideon Ofnir</a></li>
                <li><a href="#godfrey">5. Boss: Godfrey / Hoarah Loux</a></li>
                <li><a href="#radagon">6. Final Boss: Radagon & Elden Beast</a></li>
                <li><a href="#endings">7. The 6 Endings Guide</a></li>
                <li><a href="#ngplus">8. New Game+ Preparation</a></li>
                <li><a href="#completion">9. Chapter Completion</a></li>
            </ul>
        </div>

        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Chapter Progress</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#ash-wastes" style="color: var(--text-dim); transition: color 0.2s;">1. The Ash Wastes</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#goldmask" style="color: var(--text-dim); transition: color 0.2s;">2. Goldmask's Conclusion</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#sewers-return" style="color: var(--text-dim); transition: color 0.2s;">3. Return to the Sewers</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#gideon" style="color: var(--text-dim); transition: color 0.2s;">4. Boss: Gideon Ofnir</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#godfrey" style="color: var(--text-dim); transition: color 0.2s;">5. Boss: Godfrey</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#radagon" style="color: var(--text-dim); transition: color 0.2s;">6. Radagon & Elden Beast</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#endings" style="color: var(--text-dim); transition: color 0.2s;">7. The Endings Guide</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#ngplus" style="color: var(--text-dim); transition: color 0.2s;">8. NG+ Preparation</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">9. Chapter Completion</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <section class="guide-section reveal" id="ash-wastes" style="margin-bottom: 4rem;">
                <div class="callout info" style="margin-bottom: 3rem; background: rgba(212, 175, 55, 0.05); border-left: 4px solid var(--gold); padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: var(--gold); font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">Endgame Overview</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;"><strong>Recommended Level:</strong> 130 - 150+<br>
                    <strong>Weapon Upgrade:</strong> +25 (Standard) / +10 (Somber)<br>
                    <strong>Crucial Talismans:</strong> Haligdrake Talisman +2 (Holy Defense is absolutely mandatory for the final bosses).</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">1. The Ash Wastes of Leyndell</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">After unleashing Destined Death in Farum Azula, you awaken in Leyndell. The city is unrecognizable, buried beneath mountains of ash from the burning Erdtree. Before ascending to the throne room, explore the ruins for two of the best talismans in the game.</p>
                
                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Crimson Amber Medallion +2</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Look for an open sewer grate in the ash (the same hole you previously used to reach the Shunning-Grounds). Carefully drop onto the wooden beam below to grab this talisman, which vastly increases your maximum HP.</p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
                        <h3 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Erdtree's Favor +2</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Head towards the massive courtyard where you first entered the city. This area is now a sea of ash guarded by <strong>three Ulcerated Tree Spirits</strong>. You don't have to fight them; sneak or sprint to the dead tree branch sticking out of the ash to grab this legendary talisman.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="goldmask" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">2. Secret: Goldmask's Conclusion</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">If you helped Brother Corhyn and Goldmask throughout the game and solved the "Radagon is Marika" riddle in Chapter 4, their questline concludes right here in the Ashen Capital.</p>

                <div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px;">
                    <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">The Mending Rune of Perfect Order</h4>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 1rem;">From the Leyndell, Capital of Ash Site of Grace, head south towards the colosseum area. Follow the slope of ash downwards past the plant enemies.</p>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">At the bottom of the cliff, you will find Goldmask's body. Loot him to obtain the <strong>Mending Rune of Perfect Order</strong>, which unlocks the "Age of Order" ending. If you reload the area, you can also pick up his unique armor set.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="sewers-return" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">3. Return to the Sewers</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">A common worry for players is that the Subterranean Shunning-Grounds are locked after the capital turns to ash. <strong>They are still fully accessible.</strong></p>

                <ul class="step-list" style="margin-top:1.5rem;">
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">1</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Open Grate</h4>
                            <p style="color: #ccc;">Walk straight southwest from the Capital of Ash grace. You will see a large, circular hole in the ground (where you found the Crimson Amber Medallion +2). Drop down the wooden beams to safely reach the bottom.</p>
                        </div>
                    </li>
                    <li class="step reveal" style="margin-bottom: 0;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">2</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Frenzied Flame</h4>
                            <p style="color: #ccc;">This drop leads directly to the "Underground Roadside" grace. From here, you can still fight Mohg, the Omen, and access the Three Fingers to inherit the Frenzied Flame if you wish to unlock that specific ending before the final boss.</p>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="guide-section reveal" id="gideon" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">4. Boss: Sir Gideon Ofnir, the All-Knowing</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">As you climb the stairs to the Erdtree Sanctuary, you are confronted by your former ally. Convinced that a Tarnished cannot become a god, he stands in your way.</p>

                <div class="reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1.5rem; border-radius: 0 4px 4px 0; margin-bottom: 2rem;">
                    <h4 style="color: #5dade2; font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">Combat Strategy</h4>
                    <p style="font-size: 0.95rem; color: #ccc; margin-bottom: 0.5rem;"><strong>Do not let him finish his monologue!</strong> Walk up to him and start attacking immediately. Gideon uses endgame spells based on the demigods you have defeated (Comet Azur, Rykard's Rancor, Malenia's Scarlet Aeonia).</p>
                    <p style="font-size: 0.95rem; color: #ccc; margin-bottom: 0;">He is a standard NPC model, meaning he has extremely low poise. Use aggressive melee attacks, jump attacks, or weapons that cause knockdowns (like the Blasphemous Blade weapon art or Giant Hunt) to stun-lock him until he dies. He drops his armor set and weapon.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="godfrey" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #e74c3c; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">5. Boss: Godfrey, First Elden Lord</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">At the Elden Throne, the true First Elden Lord has returned to claim his crown. This is an incredible duel against a legendary warrior.</p>

                <div class="guide-accordion open reveal" id="acc-godfrey-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-godfrey-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Phase 1: Godfrey & Serosh</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">He uses massive, deliberate axe swings and stomps that send shockwaves across the entire arena.</p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                                <li style="margin-bottom: 0.5rem;"><strong>The Stomps:</strong> Whenever he raises his foot, do not roll. <strong>JUMP.</strong> Jumping completely avoids the shockwave hitbox and allows you to do a heavy jump attack on the way down.</li>
                                <li><strong>The Fissure:</strong> When he embeds his axe into the ground and the earth glows, sprint far away. The explosion covers a massive area.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-godfrey-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-godfrey-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #e74c3c; border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Phase 2: Hoarah Loux, Warrior</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">At 50% HP, he kills his beast regent and fights bare-handed like a berserker. He becomes incredibly fast and aggressive.</p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                                <li style="margin-bottom: 0.5rem;"><strong>The Grabs:</strong> If he crosses his arms or lunges at you with open hands, roll sideways immediately. His command grabs will launch you into the air and slam you down, often resulting in an instant kill.</li>
                                <li><strong>Roar Stomps:</strong> His stomps now cover the *entire* arena. You absolutely must jump over these shockwaves. Keep the pressure up, as he is very susceptible to Bleed and Frost in this phase.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="radagon" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">6. The Final Challenge: Radagon & Elden Beast</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Enter the Erdtree. You will face two bosses back-to-back with no checkpoint. <strong>Preparation is key:</strong> Equip the Haligdrake Talisman +2 and use Lord's Divine Fortification to drastically reduce Holy damage.</p>

                <div class="guide-table-wrap reveal" style="margin-top: 2rem; overflow-x: auto;">
                    <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
                        <thead>
                            <tr style="border-bottom: 2px solid var(--gold);">
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Boss</th>
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Mechanics</th>
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Strategy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Radagon of the Golden Order</td>
                                <td style="padding: 1rem; color: #ccc;">Holy AoE & Extreme Aggression</td>
                                <td style="padding: 1rem; color: #ccc;">Radagon is immune to Bleed and highly resistant to Holy. <strong>Use Fire or Strike weapons.</strong> He leaves glowing runes on the ground that explode; always dodge *towards* him to avoid the secondary blasts. Save your Spirit Ash summon (like Mimic Tear) for the very end of this fight so they survive for the next phase.</td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">The Elden Beast</td>
                                <td style="padding: 1rem; color: #ccc;">Cosmic Spells & High Mobility</td>
                                <td style="padding: 1rem; color: #ccc;">A massive cosmic entity that constantly swims away from you. <br><br>- <strong>Elden Stars:</strong> When it fires a glowing golden orb, sprint in a wide curve to outrun the tracking projectiles.<br>- <strong>Holy Rings:</strong> When it flies up and creates golden rings on the water, jump over the rings and run completely outside the circle before it explodes.<br>Hit the glowing weak spot on its chest for massive bonus damage. Use the <em>Pest Threads</em> incantation for absurd damage against its huge body.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="guide-section reveal" id="endings" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">7. The 6 Endings Guide</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">After defeating the Elden Beast, you are placed in front of Fractured Marika. Depending on the quests you completed, you can select one of the following endings:</p>

                <div class="callout warning reveal" style="margin-bottom:2rem; background: rgba(155, 89, 182, 0.1); border-left: 4px solid #9b59b6; padding: 1.5rem;">
                    <span class="callout-label" style="color: #9b59b6; font-weight: bold; text-transform: uppercase;">Pro Tip: Save Scumming for the Platinum</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;"><strong>Do not touch Marika yet!</strong> If you want all 3 ending achievements without playing NG+, rest at the Grace here, quit the game, and backup your save file to the Cloud (PS/Xbox) or a separate folder (PC). Trigger an ending, reload your backup, and trigger the next.</p>
                </div>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
                        <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Age of Stars (Ranni's Ending)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>How to get:</strong> Do NOT touch Marika. Look for the <strong>Blue Summon Sign</strong> on the floor nearby. Summon Ranni to trigger what is widely considered the "best" ending. <em>(Awards Achievement)</em></p>
                    </div>

                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Lord of Frenzied Flame</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>How to get:</strong> If you inherited the Frenzied Flame below the sewers (and did not cure it with Miquella's Needle in Farum Azula), you are locked into this ending. Simply touch Marika to burn the world. <em>(Awards Achievement)</em></p>
                    </div>

                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
                        <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Elden Lord (4 Variations)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Touch Marika to become Elden Lord. If you completed specific NPC quests, you can choose to mend the ring using different runes:<br>
                        - <strong>Age of Fracture:</strong> Mend the ring normally.<br>
                        - <strong>Age of Duskborn:</strong> Use Fia's Mending Rune of the Death-Prince.<br>
                        - <strong>Age of Order:</strong> Use Goldmask's Mending Rune of Perfect Order.<br>
                        - <strong>Blessing of Despair:</strong> Use Dung Eater's Mending Rune of the Fell Curse.<br>
                        <em>(All four variations count for the standard Elden Lord Achievement).</em></p>
                    </div>

                </div>
            </section>

            <section class="guide-section reveal" id="ngplus" style="margin-bottom: 4rem;">
                <div class="callout danger" style="border-left: 4px solid #f39c12; background: rgba(243, 156, 18, 0.1); padding: 1.5rem; margin-bottom: 3rem;">
                    <span class="callout-label" style="color: #f39c12; font-weight: bold; text-transform: uppercase;">Wait Before Starting Journey 2!</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">After the credits roll, the game asks if you want to begin Journey 2 (New Game+). <strong>Select NO.</strong> You will be spawned back at Roundtable Hold, allowing you to freely explore the map to complete anything you missed before starting over.</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">8. New Game+ Preparation Checklist</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Before triggering NG+ at the Roundtable Hold grace, make absolutely sure you have done the following, as key items and shop inventories will reset:</p>

                <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem;">
                    <ul class="guide-checklist" style="list-style: none; padding: 0; margin: 0;">
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Stockpile Smithing Stones:</strong> If you gave all Bell Bearings to the Twin Maiden Husks, spend ALL your remaining runes buying hundreds of standard and somber smithing stones. The Bell Bearings carry over to NG+, but it's better to be safe.</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Hunt Ancient Dragon Stones:</strong> Find all the Ancient Dragon Smithing Stones (Standard and Somber) per playthrough to max out multiple weapons. There are a limited amount per run.</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Farm Larval Tears:</strong> Hunt down the silver tear enemies in Nokron to stock up on Larval Tears so you can respec your character freely in NG+.</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Duplicate Remembrances:</strong> Visit the Walking Mausoleums to duplicate boss remembrances before they reset.</span></label></li>
                        <li><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Kill the NPCs (Optional):</strong> If you are about to start NG+, kill any remaining merchants or NPCs to get their Bell Bearings and unique armor sets. There are no consequences since they reset in NG+.</span></label></li>
                    </ul>
                </div>
            </section>

            <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">9. Chapter Completion</h2>
                
                <div style="border-left: 4px solid #f1c40f; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem; margin-bottom: 3rem;">
                    <div style="font-size: 2.5rem;">👑</div>
                    <div>
                        <h4 style="color: #f1c40f; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px; margin-top: 0;">Elden Ring (Platinum Trophy)</h4>
                        <p style="margin: 0; color: #ccc;">You have conquered the Lands Between. You have forged your own destiny. Rise, Tarnished... and prepare for the Realm of Shadow. <span style="color: #888; font-size: 0.9rem;">(100G / Platinum)</span></p>
                    </div>
                </div>
                
                <div class="chapter-nav" style="display: flex; justify-content: space-between; align-items: center; margin-top: 4rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1);">
                    <a href="/elden-ring/chapters/chapter-7.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 7 (Haligtree)</a>
                    <a href="/elden-ring/chapters/chapter-9-DLC.php" class="btn btn-gold" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Next: Chapter 9 (DLC Part 1) →</a>
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
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>