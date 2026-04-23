<?php 
$pageTitle = "Chapter 6: The Endgame | Elden Ring Walkthrough";
$pageDesc = "Complete guide to Crumbling Farum Azula, Miquella's Haligtree, and the Ashen Capital. Defeat Malenia, Maliketh, and the Elden Beast.";
$bodyClass = "theme-elden-ring";

// Cargamos el header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 45vh; background: linear-gradient(180deg, rgba(200, 50, 50, 0.15) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1618331835717-801e976710b2?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.75);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/elden-ring/">Elden Ring</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Chapter 6</span>
            </nav>
            <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: THE FINALE</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem; font-family: var(--font-display);">Chapter 6: The Endgame</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd; max-width: 600px;">Farum Azula, The Haligtree, and the Ashen Capital</p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <div class="mobile-toc-container">
            <button class="mobile-toc-btn" id="tocToggle">
                <span>Exploration Progress</span>
                <span id="tocIcon">▼</span>
            </button>
            <ul class="mobile-toc-list" id="tocList">
                <li><a href="#farum-azula">1. Crumbling Farum Azula</a></li>
                <li><a href="#godskin-duo">2. Boss: Godskin Duo</a></li>
                <li><a href="#placidusax">3. Secret: Dragonlord Placidusax</a></li>
                <li><a href="#maliketh">4. Boss: Maliketh, the Black Blade</a></li>
                <li><a href="#haligtree">5. Miquella's Haligtree</a></li>
                <li><a href="#elphael-secrets">6. Legends of Elphael & Millicent</a></li>
                <li><a href="#malenia">7. Boss: Malenia, Blade of Miquella</a></li>
                <li><a href="#ashen-capital">8. Leyndell, Ashen Capital</a></li>
                <li><a href="#final-bosses">9. The Final Gauntlet</a></li>
                <li><a href="#completion">10. Journey's End</a></li>
            </ul>
        </div>

        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Chapter Progress</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#farum-azula" style="color: var(--text-dim); transition: color 0.2s;">1. Crumbling Farum Azula</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#godskin-duo" style="color: var(--text-dim); transition: color 0.2s;">2. Boss: Godskin Duo</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#placidusax" style="color: var(--text-dim); transition: color 0.2s;">3. Lord Placidusax</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#maliketh" style="color: var(--text-dim); transition: color 0.2s;">4. Boss: Maliketh</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#haligtree" style="color: var(--text-dim); transition: color 0.2s;">5. Miquella's Haligtree</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#elphael-secrets" style="color: var(--text-dim); transition: color 0.2s;">6. Elphael Secrets</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#malenia" style="color: var(--text-dim); transition: color 0.2s;">7. Boss: Malenia</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#ashen-capital" style="color: var(--text-dim); transition: color 0.2s;">8. Ashen Capital</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#final-bosses" style="color: var(--text-dim); transition: color 0.2s;">9. The Final Gauntlet</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">10. Journey's End</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <section class="guide-section reveal" id="farum-azula" style="margin-bottom: 4rem;">
                <div class="callout info" style="margin-bottom: 3rem; background: rgba(212, 175, 55, 0.05); border-left: 4px solid var(--gold); padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: var(--gold); font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">Endgame Preparation</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;"><strong>Recommended Level:</strong> 120 - 150+<br>
                    <strong>Weapon Upgrade:</strong> +24 to +25 (Standard) / +9 to +10 (Somber)<br>
                    <strong>Essential Items:</strong> Sleep Pots (for Godskin Duo), Blasphemous Claw (for Maliketh).</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">1. Crumbling Farum Azula</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">After committing the Cardinal Sin at the Forge of the Giants, you awaken in a maelstrom suspended in time. This floating city is teeming with Beastmen, ancient dragons, and deadly platforming sections.</p>
                
                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
                        <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Alexander's Final Stand</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Behind a fog wall needing a Stonesword Key, ride an elevator up to find <strong>Iron Fist Alexander</strong>. He will request a final warrior's duel. Defeat him to earn the <em>Shard of Alexander</em> (greatly boosts skill attack power) and Alexander's Innards.</p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Blasphemous Claw</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Near the "Beside the Great Bridge" grace, run up the stairs and turn away from the boss room. You will be invaded by <strong>Recusant Bernahl</strong>. Defeating him yields the Blasphemous Claw, an item that allows you to parry Maliketh's deadliest attacks.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="godskin-duo" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #e74c3c; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">2. Boss: Godskin Duo</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">A mandatory, notorious boss fight blocking your progression through Farum Azula. You must fight both the Godskin Apostle and the Godskin Noble simultaneously. Furthermore, they share a collective health bar; killing one will just cause the other to eventually resurrect its partner until the global health bar is depleted.</p>

                <div class="guide-accordion open reveal" id="acc-godskin-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-godskin-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">The Sleep Strategy (Cheese)</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Both Godskin enemies are highly susceptible to Sleep. Use <strong>Sleep Pots</strong> (crafted with Trina's Lily) or St. Trina's Arrows.</p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                                <li style="margin-bottom: 0.5rem;">Throw a Sleep Pot at the Noble (the big one) at the start of the fight. He will fall asleep for a solid 60 seconds.</li>
                                <li style="margin-bottom: 0.5rem;">Focus entirely on the Apostle. Once he is dead, turn your attention to the sleeping Noble and burst him down.</li>
                                <li>When one begins the resurrection animation, you have a huge window to deal free damage. Use the pillars in the room to block the Noble's rolling attack.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="placidusax" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">3. Secret Boss: Dragonlord Placidusax</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Hidden deep below the swirling storms is the secret ultimate dragon boss, the Elden Lord from an era before the Erdtree. This arena is also the only place where you can use Miquella's Needle to cure the Frenzied Flame.</p>

                <div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px; margin-bottom: 2rem;">
                    <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">How to reach the Dragonlord</h4>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 1rem;">From the <strong>"Beside the Great Bridge"</strong> grace, take the elevator down. Run past the beastmen out to the open cliffs. Walk to the rocky edge looking down towards the tornado, and you will see floating rocks leading downward.</p>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">Carefully drop down the rocks until you reach a large floating piece of debris with skeleton indentations. Stand in the empty grave slot and choose the prompt <strong>"Lie Down"</strong>. A spectacular cutscene reversing time will transport you to the boss arena.</p>
                </div>
                
                <p style="color: #ccc; font-size: 0.95rem;"><strong>Combat Tip:</strong> Placidusax uses massive red lightning AoEs and fire breath. During his second phase, he will vanish and swoop down from the clouds at blinding speed. Lock on to him as soon as he appears in the sky to dodge correctly. He drops the Remembrance of the Dragonlord.</p>
            </section>

            <section class="guide-section reveal" id="maliketh" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #e74c3c; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">4. Boss: Maliketh, the Black Blade</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Guarding the Rune of Death at the top of Farum Azula. This boss is exceptionally fast, and his attacks permanently reduce your maximum HP while draining your health.</p>

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
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 1 <br><span style="font-size:0.75rem;color:#888;">(Beast Clergyman)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Bestial Incantations</td>
                                <td style="padding: 1rem; color: #ccc;">He attacks rapidly with a dagger and throws rocks/beast claws. Stay aggressive but keep close; rolling backwards often gets you hit by his wide arcs. Use the pillars for cover when he uses his rock-throw shotgun attack.</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 2 <br><span style="font-size:0.75rem;color:#888;">(The Black Blade)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Destined Death</td>
                                <td style="padding: 1rem; color: #ccc;">He reveals his true form and wields the Black Blade. Every hit drains your max HP. When his sword glows yellow during a jumping attack, <strong>use the Blasphemous Claw</strong> in your item quickslot to parry him, stunning him for several seconds and dealing massive posture damage.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="callout warning reveal" style="margin-top:2rem; background: rgba(243, 156, 18, 0.1); border-left: 4px solid #f39c12; padding: 1.5rem;">
                    <span class="callout-label" style="color: #f39c12; font-weight: bold; text-transform: uppercase;">World State Change</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Defeating Maliketh unleashes Destined Death upon the world. A cinematic will play, and you will be automatically transported to <strong>Leyndell, Ashen Capital</strong>. Any uncollected items in the normal version of Leyndell are now permanently gone.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="haligtree" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">5. Secret Area: Miquella's Haligtree</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">If you solved the puzzle in Ordina (Chapter 5), you are teleported to the canopy of the Haligtree. This is the hardest legacy dungeon in the game, filled with high-level enemies, Scarlet Rot, and platforming hazards.</p>

                <ul class="step-list" style="margin-top:2rem;">
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">1</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Canopy</h4>
                            <p style="color: #ccc;">Navigate the massive tree branches. Watch out for the giant Oracle Envoys blowing bubbles that track you. Ranged attacks or stealth are highly recommended to push enemies off the branches without engaging in melee.</p>
                        </div>
                    </li>
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">2</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Loretta, Knight of the Haligtree</h4>
                            <p style="color: #ccc;">Before reaching the lower city of Elphael, you must face Loretta's true form. She has massively upgraded magic and a triple-shot Greatbow. Stay close and dodge diagonally to punish her halberd swings.</p>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="guide-section reveal" id="elphael-secrets" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">6. Legends of Elphael & Millicent</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The fortress built into the tree's roots is beautiful but deadly. Before rushing to the boss, make sure to explore thoroughly for endgame talismans and to conclude Millicent's questline.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
                        <h3 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Millicent's Final Stand</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">At the Drainage Channel grace, traverse the roots to a rot pool guarded by a terrifying <strong>Ulcerated Tree Spirit</strong>. Defeat it. Reload the area to find two summon signs. <strong>Choose the Gold Sign</strong> to help Millicent fight her four sisters. This rewards you with the Rotten Winged Sword Insignia and the Unalloyed Gold Needle.</p>
                    </div>

                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f1c40f;">
                        <h3 style="color: #f1c40f; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Dragoncrest Greatshield Talisman</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">The best defensive talisman in the game (reduces physical damage taken by 20%). From the Drainage Channel, carefully drop down onto the chapel roof and into the rafters. It's in a chest guarded by several Pests. <em>Essential for fighting Malenia.</em></p>
                    </div>

                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
                        <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Revenant Alley (Marika's Soreseal)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">At the bottom level of Elphael, there is an alleyway patrolled by multiple Royal Revenants. <strong>Survival Tip:</strong> Cast any AoE Healing Incantation (like <em>Lord's Heal</em>). Healing spells deal 50% max HP damage to Revenants instantly and stun them. The legendary Marika's Soreseal is locked behind an Imp Statue down here.</p>
                    </div>

                </div>
            </section>

            <section class="guide-section reveal" id="malenia" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #e74c3c; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">7. Boss: Malenia, Blade of Miquella</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The undisputed hardest boss in Elden Ring. Malenia heals herself every time her sword touches you (even if you block it with a 100% physical shield). Her speed, damage, and mechanics require near perfection.</p>

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
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 1 <br><span style="font-size:0.75rem;color:#888;">(The Blade)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Waterfowl Dance</td>
                                <td style="padding: 1rem; color: #ccc;">She has very low poise. Bleed, Frost, and heavy jump attacks interrupt her easily. <strong>Waterfowl Dance:</strong> When she jumps into the air and hovers, run away immediately to avoid the first two flurries, then roll *into* her for the third flurry. Using a <strong>Freezing Pot</strong> when she jumps into the air cancels the attack completely.</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 2 <br><span style="font-size:0.75rem;color:#888;">(Goddess of Rot)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Scarlet Aeonia</td>
                                <td style="padding: 1rem; color: #ccc;">She starts phase 2 by dive-bombing you and blooming into a massive rot flower. Roll directly under her as she lands and sprint away. All her attacks now build up Scarlet Rot. She also summons ghost clones. Use the Mimic Tear or Tiche spirit ashes to divide her aggro, and spam heavy weapon arts.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="guide-section reveal" id="ashen-capital" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">8. Leyndell, Ashen Capital</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">You awaken in a buried city. The navigation is mostly a straight line now, climbing the ash dunes back towards the Erdtree Sanctuary. There are two major items hidden beneath the ash.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Crimson Amber Medallion +2</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Near the center of the ash wastes, look for a large open sewer grate (the area you used to jump down to the Subterranean Shunning-Grounds). Carefully drop down onto the wooden beams to grab this talisman, which vastly increases maximum HP.</p>
                    </div>

                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
                        <h3 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Erdtree's Favor +2</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Before climbing up to the castle, explore the sandy area guarded by three Ulcerated Tree Spirits (you can sneak past them). At the far end, sticking out of a branch in the ash, is the best general talisman in the game.</p>
                    </div>

                </div>
            </section>

            <section class="guide-section reveal" id="final-bosses" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">9. The Final Gauntlet</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The path to the Elden Ring is blocked by the ultimate tests. You must fight three bosses practically back-to-back.</p>

                <div class="guide-accordion open reveal" id="acc-boss-0" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-boss-0')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Sir Gideon Ofnir, the All-Knowing</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 0;">In the Erdtree Sanctuary, you must face Gideon. <strong>Do not let him finish his monologue</strong>; attack him immediately. He uses endgame sorceries and incantations based on the demigods you have defeated. Rush him down with melee, as he has very low poise and can be easily staggered.</p>
                        </div>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-boss-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-boss-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Godfrey, First Elden Lord / Hoarah Loux</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">At the Elden Throne, Godfrey awaits. Phase 1: He uses massive, delayed axe swings and screen-wide stomp attacks. <strong>Jump</strong> over the stomps instead of rolling.</p>
                            <p style="color: #ccc; margin-bottom: 0;">At 50% HP, he rips his lion apart and becomes Hoarah Loux, Warrior. He fights bare-handed like a wrestler. Watch out for his grabs; if he catches you, he will powerbomb you for massive damage. Stick to his side and dodge precisely.</p>
                        </div>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-boss-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-boss-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Radagon of the Golden Order</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Enter the Erdtree. Radagon has extremely high Holy resistance. Use Strike or Fire damage. He leaves holy explosive runes on the ground; roll *towards* him to avoid the follow-up explosions. Save your Spirit Ash summon for the next phase if possible.</p>
                        </div>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-boss-3" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-boss-3')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">The Elden Beast</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Immediately following Radagon, with no checkpoint. The Elden Beast is a colossal cosmic entity that constantly swims away. <strong>Equip the Haligdrake Medallion +2</strong> for immense Holy resistance.</p>
                            <p style="color: #ccc; margin-bottom: 0;">When it flies into the sky and creates golden rings, sprint and jump out of them before they detonate. When it fires the "Elden Stars" (a golden tracking orb), do not run in a straight line; curve your path to outmaneuver the smaller projectiles. Strike its glowing underbelly for extra damage.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">10. Journey's End</h2>
                
                <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
                    <p style="color: #ccc; margin-bottom: 1.5rem;">You stand before the fractured Marika. Depending on the questlines you completed, you can now choose your ending. <strong>If you touch the blue summon sign, you will trigger Ranni's "Age of Stars" ending.</strong> If you mend the ring normally or use a specific Mending Rune, you will trigger a variation of the "Elden Lord" ending. If you embrace the Three Fingers, the world will burn.</p>

                    <ul class="guide-checklist" style="list-style: none; padding: 0; margin: 0;">
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Dragonlord Defeated:</strong> Did you find and slay Placidusax in Farum Azula?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Goddess of Rot:</strong> Did you conquer the Haligtree and defeat Malenia?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Legendary Talismans:</strong> Did you grab Erdtree's Favor +2 and Dragoncrest Greatshield?</span></label></li>
                        <li><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Elden Lord:</strong> Have you slain the Elden Beast and claimed the throne?</span></label></li>
                    </ul>
                </div>
                
                <div style="border-left: 4px solid #f1c40f; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
                    <div style="font-size: 2.5rem;">🏆</div>
                    <div>
                        <h4 style="color: #f1c40f; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px; margin-top: 0;">Elden Ring (Platinum Trophy)</h4>
                        <p style="margin: 0; color: #ccc;">You have conquered the Lands Between. The Golden Order is yours to command. <span style="color: #888; font-size: 0.9rem;">(100G / Platinum)</span></p>
                    </div>
                </div>
                
                <div class="chapter-nav" style="display: flex; justify-content: space-between; align-items: center; margin-top: 4rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1);">
                    <a href="/elden-ring/chapters/chapter-5.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 5</a>
                    <a href="/elden-ring/chapters/chapter-7.php" class="btn btn-gold" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Next: Chapter 8 (Consecrated Snowfield) →</a>
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