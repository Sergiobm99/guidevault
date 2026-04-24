<?php 
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];
$pageTitle = "Chapter 7: Consecrated Snowfield & The Haligtree | Elden Ring Walkthrough";
$pageDesc = "Complete guide to the Consecrated Snowfield, Ordina, and Miquella's Haligtree. Find the best talismans, solve the Albinauric Rise, and defeat Malenia.";
$bodyClass = "theme-elden-ring";

// Cargamos el header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 45vh; background: linear-gradient(180deg, rgba(155, 89, 182, 0.15) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1542223616-d3063b469502?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.75);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/elden-ring/">Elden Ring</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Chapter 7</span>
            </nav>
            <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: PART 7</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem; font-family: var(--font-display);">Chapter 7: The Haligtree</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd; max-width: 600px;">The Consecrated Snowfield, Ordina, and the Goddess of Rot</p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <div class="mobile-toc-container">
            <button class="mobile-toc-btn" id="tocToggle">
                <span>Exploration Progress</span>
                <span id="tocIcon">▼</span>
            </button>
            <ul class="mobile-toc-list" id="tocList">
                <li><a href="#snowfield">1. Consecrated Snowfield</a></li>
                <li><a href="#snowfield-secrets">2. Hidden Dungeons & Puzzles</a></li>
                <li><a href="#apostate">3. Apostate Derelict & Latenna</a></li>
                <li><a href="#ordina">4. Ordina, Liturgical Town</a></li>
                <li><a href="#haligtree-canopy">5. The Haligtree Canopy</a></li>
                <li><a href="#loretta">6. Boss: Loretta, Knight of the Haligtree</a></li>
                <li><a href="#elphael">7. Elphael, Brace of the Haligtree</a></li>
                <li><a href="#inner-elphael">8. Inner Elphael & The Avatars</a></li>
                <li><a href="#millicent">9. Millicent's Conclusion</a></li>
                <li><a href="#malenia">10. Boss: Malenia, Blade of Miquella</a></li>
                <li><a href="#completion">11. Chapter Completion</a></li>
            </ul>
        </div>

        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Chapter Progress</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#snowfield" style="color: var(--text-dim); transition: color 0.2s;">1. Consecrated Snowfield</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#snowfield-secrets" style="color: var(--text-dim); transition: color 0.2s;">2. Hidden Dungeons</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#apostate" style="color: var(--text-dim); transition: color 0.2s;">3. Apostate Derelict</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#ordina" style="color: var(--text-dim); transition: color 0.2s;">4. Ordina's Puzzle</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#haligtree-canopy" style="color: var(--text-dim); transition: color 0.2s;">5. Haligtree Canopy</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#loretta" style="color: var(--text-dim); transition: color 0.2s;">6. Boss: Loretta</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#elphael" style="color: var(--text-dim); transition: color 0.2s;">7. Exploring Elphael</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#inner-elphael" style="color: var(--text-dim); transition: color 0.2s;">8. Inner Elphael</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#millicent" style="color: var(--text-dim); transition: color 0.2s;">9. Millicent's Choice</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#malenia" style="color: var(--text-dim); transition: color 0.2s;">10. Boss: Malenia</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">11. Chapter Completion</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <section class="guide-section reveal" id="snowfield" style="margin-bottom: 4rem;">
                <div class="callout info" style="margin-bottom: 3rem; background: rgba(212, 175, 55, 0.05); border-left: 4px solid var(--gold); padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: var(--gold); font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">Region Overview</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;"><strong>Recommended Level:</strong> 120 - 150<br>
                    <strong>Weapon Upgrade:</strong> +24 to +25 (Standard) / +9 to +10 (Somber)<br>
                    <strong>Key Items:</strong> Dragoncrest Greatshield Talisman, Somber Ancient Dragon Smithing Stones, Unalloyed Gold Needle, Graven-Mass Talisman.</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">1. The Consecrated Snowfield</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">If you collected both halves of the Haligtree Secret Medallion (from Albus in Liurnia and Commander Niall in Castle Sol), hoist the *Secret* Medallion at the Grand Lift of Rold. You will arrive at the Hidden Path to the Haligtree.</p>
                
                <div class="reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0;">
                    <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">Navigation Hazard: The Blizzard</h5>
                    <p style="margin:0; font-size: 0.9rem; color: #ccc;">The southern half of the Snowfield is engulfed in a blinding blizzard. You cannot see more than a few feet ahead. Drop glowing Prism Stones to mark your path, and ride directly north until the storm clears. Watch out for the spectral Dragonkin Soldiers that spawn from the mist.</p>
                </div>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Night's Cavalry Duo (Night Only)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">In the center of the Snowfield, you will find a giant caravan pulled by two trolls. It is guarded by TWO Night's Cavalry bosses. <strong>Lure them out one by one with a bow.</strong> Defeating both awards the legendary <em>Night's Cavalry Armor Set</em> and an Ancient Dragon Smithing Stone.</p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
                        <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Yelough Anix Ruins & Tunnel</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Located on the western wall. The ruins are filled with Frenzied enemies and the incredibly powerful spell <em>Unendurable Frenzy</em>. In the tunnel nearby, you will fight a stronger version of Astel, which drops the <em>Meteorite of Astel</em> sorcery.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="snowfield-secrets" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">2. Hidden Dungeons & Puzzles</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Before heading to Ordina, make sure you explore the eastern edge of the snowfield. This area contains a legendary weapon and one of the best magical talismans in the game.</p>

                <div class="guide-accordion open reveal" id="acc-albinauric" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-albinauric')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Puzzle: Albinauric Rise</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Located in the eastern snowfield. The tower is sealed, and a statue hints that you must "make two imps fight."</p>
                            <p style="color: #ccc; margin-bottom: 1rem;"><strong>The Solution:</strong> You must make the spectral fanged imps wandering outside kill each other. You can do this in two ways: either use a <em>Bewitching Branch</em> on one of them so it attacks the other, OR summon your own <em>Fanged Imp Ashes</em> and let your summon score the killing blow on an enemy imp.</p>
                            <p style="color: var(--gold); margin-bottom: 0; font-weight: bold;">Reward: Graven-Mass Talisman (Greatly raises potency of sorceries).</p>
                        </div>
                    </div>
                </div>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f1c40f;">
                        <h3 style="color: #f1c40f; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Cave of the Forlorn</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Follow the frozen river east until you find a massive land octopus guarding a cave entrance (requires Stonesword Keys). At the end, you will fight the Misbegotten Crusader. Defeating him rewards you with the <strong>Golden Order Greatsword</strong>, a Legendary Armament.</p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
                        <h3 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Minor Erdtree (Putrid Avatar)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">East of Ordina. The Putrid Avatar here splits into clones during the fight. Defeating it yields the <strong>Thorny Cracked Tear</strong> (boosts successive attacks) and the Ruptured Crystal Tear, essential for physick flask builds.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="apostate" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">3. Apostate Derelict & Latenna's Quest</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">In the far northwest corner of the Snowfield, you will find a ruined church guarded by a Walking Mausoleum that constantly fires magical artillery.</p>

                <p style="color: #ccc; margin-bottom: 1rem;"><strong>How to stop the artillery:</strong> Use the spirit spring nearby to jump onto the Mausoleum, or carefully ride to its feet and clean the white skull-barnacles to make it sit down.</p>
                
                <p style="color: #ccc; margin-bottom: 0;">Inside the church sits a giant Albinauric woman. If you acquired the <strong>Latenna the Albinauric</strong> spirit ash back in Liurnia, summon her in front of the giant woman. This concludes her questline, rewarding you with a Somber Ancient Dragon Smithing Stone.</p>
            </section>

            <section class="guide-section reveal" id="ordina" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">4. Ordina, Liturgical Town</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">To reach the Haligtree, you must travel to the northernmost edge of the Snowfield to Ordina. The gateway is sealed. To open it, interact with the Imp Statue plate in the center of town to enter the Evergaol version of the city.</p>

                <div class="callout danger reveal" style="margin-bottom:2rem; background: rgba(140, 45, 45, 0.08); border-left: 4px solid #8C2D2D; padding: 1.5rem;">
                    <span class="callout-label" style="color: #ff4d4d; font-weight: bold; text-transform: uppercase;">⚠ The Invisible Assassins</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">The ground level of the Evergaol is stalked by invisible <strong>Black Knife Assassins</strong>. They will backstab and instantly kill you. <strong>Crucial Item: Sentry's Torch.</strong> Buy this torch from the Hermit Merchant in Altus Plateau; simply holding it in your off-hand or on your back will make the assassins visible.</p>
                </div>

                <div class="guide-accordion open reveal" id="acc-ordina-puzzle" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-ordina-puzzle')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Lighting the 4 Statues</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                                <li style="margin-bottom: 0.5rem;"><strong>Statue 1 (Ground Level):</strong> Found in the central plaza. Use the Sentry Torch to avoid the assassin.</li>
                                <li style="margin-bottom: 0.5rem;"><strong>Statue 2 (West Roof):</strong> Climb the ladder on the western edge of town.</li>
                                <li style="margin-bottom: 0.5rem;"><strong>Statue 3 & 4 (The Sniper Roofs):</strong> You must navigate the rooftops guarded by Albinauric Archers. Their magic arrows do absurd damage. Use a shield with high magic negation, or knock them off the roofs using Greatbows or the <em>Rejection</em> gravity spell.</li>
                            </ul>
                            <p style="margin-top: 1rem; color: #ccc; font-style: italic;">Once all four are lit, the seal at the back of the town breaks, revealing a teleporter to the Haligtree.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="haligtree-canopy" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">5. The Haligtree Canopy</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">You arrive at the very top of Miquella's Haligtree. This is a brutal platforming section. One wrong step means death.</p>

                <ul class="step-list" style="margin-top:2rem;">
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">1</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Navigating the Branches</h4>
                            <p style="color: #ccc;">You must descend the giant branches. The area is infested with Giant Ants and Oracle Envoys blowing tracking bubbles. <strong>Do not fight in melee if you can avoid it.</strong> Use a bow or long-range spells to knock the Envoys off the branches.</p>
                        </div>
                    </li>
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">2</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Haligtree Town</h4>
                            <p style="color: #ccc;">Once you reach the solid structures, you are in Haligtree Town. Watch out for the Misbegotten warriors and Battlemages. Move slowly and pull enemies one by one.</p>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="guide-section reveal" id="loretta" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #e74c3c; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">6. Boss: Loretta, Knight of the Haligtree</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Before you can descend into the inner fortress, you must face the true, physical form of Loretta (the phantom you fought in Caria Manor).</p>

                <div class="guide-table-wrap reveal" style="margin-top: 1.5rem; overflow-x: auto;">
                    <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
                        <thead>
                            <tr style="border-bottom: 2px solid var(--gold);">
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Mechanic</th>
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Counter-Strategy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Loretta's Mastery (Greatbow)</td>
                                <td style="padding: 1rem; color: #ccc;">She now fires <strong>four</strong> massive magic arrows simultaneously instead of one. Do not roll backward; roll diagonally forward through the arrows right before they hit to close the distance.</td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Glintblade Phalanx</td>
                                <td style="padding: 1rem; color: #ccc;">She summons multiple glintblades above her. Strafe left or right to avoid them while dodging her physical halberd sweeps. She is highly resistant to Magic but weak to Lightning and Strike damage. Defeating her grants the <em>Loretta's Mastery</em> spell.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="guide-section reveal" id="elphael" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">7. Elphael, Brace of the Haligtree</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The beautiful, rotting fortress at the base of the tree. This is arguably the most densely packed, challenging legacy dungeon in the entire game.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f1c40f;">
                        <h3 style="color: #f1c40f; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Dragoncrest Greatshield Talisman</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">The best defensive talisman in the game (reduces physical damage taken by 20%). From the Drainage Channel grace, go outside across the tree branches and carefully drop onto the chapel roof, then into the rafters. It's in a chest guarded by several Pests. <strong>Essential for the Malenia fight.</strong></p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
                        <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Revenant Alley (Marika's Soreseal)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">At the bottom level of Elphael, there is an alleyway patrolled by 5 Royal Revenants (the multi-armed teleporting horrors). <strong>Survival Tip:</strong> Cast any AoE Healing Incantation (like <em>Lord's Heal</em>). Healing spells instantly deal 50% max HP damage to Revenants and stun them. Marika's Soreseal is locked behind an Imp Statue down here.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="inner-elphael" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">8. Inner Elphael & The Avatars</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Navigating the inner walls of Elphael requires extreme caution due to the density of elite enemies.</p>

                <div class="guide-accordion open reveal" id="acc-elphael-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-elphael-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">The Ballista Walkway</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">After the Prayer Room, you will encounter a long walkway guarded by Haligtree Knights and two massive ballistas. <strong>Do not charge directly.</strong> Jump onto the structural arches bridging the gap to flank the knights and take out the ballista operators from behind.</p>
                        </div>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-elphael-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-elphael-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">The Chalice Room (Putrid Avatar)</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Right before the Elphael Inner Wall grace, a Putrid Avatar drops from the ceiling, flanked by two Cleanrot Knights. This room is a deathtrap.</p>
                            <p style="color: #ccc; margin-bottom: 0;"><strong>Strategy:</strong> Run past them! Sprint into the room on the right to grab the Grace. From the Grace, you can safely pull the Cleanrot Knights one by one, and then deal with the Avatar alone using fire attacks to secure the Lord's Rune it guards.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="millicent" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">9. Millicent's Conclusion & The Golden Needle</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">If you've been following Millicent's questline from Caelid, through Altus Plateau, and into the Mountaintops, her journey ends here in Elphael.</p>

                <div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px; margin-bottom: 2rem;">
                    <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">Defeating the Ulcerated Tree Spirit</h4>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 1rem;">From the Drainage Channel grace, head back up the ladder and cross the branch to a pool of Scarlet Rot. A massive, rotting Ulcerated Tree Spirit will spawn. Defeat it (range attacks from the outer branches cheese it easily). Reload the area at the grace.</p>
                    
                    <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.1rem; margin-bottom: 0.5rem;">The Final Choice:</h4>
                    <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6; margin-bottom: 0;">
                        <li style="margin-bottom: 0.5rem;"><strong>Yellow Summon Sign (Assist Millicent):</strong> Help her defeat her four sisters. You get the <em>Rotten Winged Sword Insignia</em> (vastly increases attack power with successive attacks). Talk to her afterwards, reload, and loot her body for the <strong>Unalloyed Gold Needle</strong>.</li>
                        <li><strong>Red Summon Sign (Betray Millicent):</strong> Kill her to receive <em>Millicent's Prosthesis</em> (boosts Dex and successive attacks). <strong>WARNING:</strong> This locks you out of obtaining the needle.</li>
                    </ul>
                </div>
            </section>

            <section class="guide-section reveal" id="malenia" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #e74c3c; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">10. Boss: Malenia, Blade of Miquella</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The undisputed hardest boss in Elden Ring, resting at the roots of the Haligtree. Malenia heals herself a percentage of her HP <strong>every time her sword touches you</strong>, even if you block the attack with a 100% physical damage reduction shield. Her speed, damage, and mechanics require near perfection.</p>

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
                                <td style="padding: 1rem; color: #ccc;">Waterfowl Dance & Lifesteal</td>
                                <td style="padding: 1rem; color: #ccc;">She has very low poise. Bleed, Frostbite, and heavy jump attacks (like dual Greatswords) interrupt her easily. <br><br><strong>Waterfowl Dance (The Anime Flurry):</strong> When she jumps into the air and hovers, she is about to unleash this lethal move. <em>Option 1:</em> Run away immediately to avoid the first two flurries, then roll *into* her for the third. <em>Option 2:</em> Throw a <strong>Freezing Pot</strong> at her the moment she hovers; the Frostbite proc will instantly knock her out of the air and cancel the attack.</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 2 <br><span style="font-size:0.75rem;color:#888;">(Goddess of Rot)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Scarlet Aeonia & Clones</td>
                                <td style="padding: 1rem; color: #ccc;">She starts phase 2 by dive-bombing you and blooming into a massive rot flower. <strong>Do not panic roll.</strong> Wait until she starts her dive, roll directly under/past her, and sprint away before the bloom explodes. All her attacks now build up Scarlet Rot. <br><br>When she flies up and summons pink ghost clones, dodge backward repeatedly, pausing slightly for the final thrust. Use the <em>Mimic Tear</em> or <em>Black Knife Tiche</em> spirit ashes to divide her aggro and chain-stagger her.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="callout abyss reveal" style="margin-top:2rem; background: rgba(138, 43, 226, 0.08); border-left: 4px solid #A29BFE; padding: 1.5rem;">
                    <span class="callout-label" style="color: #A29BFE; font-weight: bold; text-transform: uppercase;">Miquella's Needle</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">After defeating Malenia, a massive scarlet flower blooms in her arena. If you acquired the Unalloyed Gold Needle from Millicent, interact with the flower to receive <strong>Miquella's Needle</strong>. This is the <em>only</em> item in the game that can permanently cure the Frenzied Flame, allowing you to get a normal ending even if you hugged the Three Fingers.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">11. Chapter Completion</h2>
                
                <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
                    <p style="color: #ccc; margin-bottom: 1.5rem;">You have completely cleared the hardest, most secretive region of Elden Ring. With Malenia defeated and the Snowfield scoured, you are truly ready for the final battle.</p>

                    <ul class="guide-checklist" style="list-style: none; padding: 0; margin: 0;">
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Liturgical Town:</strong> Did you solve the Evergaol puzzle in Ordina?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Legendary Talisman:</strong> Did you grab the Dragoncrest Greatshield talisman?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Millicent's Needle:</strong> Did you finish Millicent's quest and get the Gold Needle?</span></label></li>
                        <li><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>The Undefeated:</strong> Have you slain Malenia, Blade of Miquella?</span></label></li>
                    </ul>
                </div>
                
                <div style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
                    <div style="font-size: 2.5rem;">🏆</div>
                    <div>
                        <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px; margin-top: 0;">Achievement Unlocked</h4>
                        <p style="margin: 0; color: #ccc;"><strong>Shardbearer Malenia:</strong> Defeat the Goddess of Rot. <span style="color: #888; font-size: 0.9rem;">(30G / Silver)</span></p>
                    </div>
                </div>
                
                <div class="chapter-nav" style="display: flex; justify-content: space-between; align-items: center; margin-top: 4rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1);">
                    <a href="/elden-ring/chapters/chapter-6.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 6 (Farum Azula)</a>
                    <a href="/elden-ring/chapters/chapter-8.php" class="btn btn-gold" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Next: Chapter 8 (The Ashen Capital) →</a>
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
$fxTheme = 'rot';
include $_SERVER['DOCUMENT_ROOT'] . '/elden-ring/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>