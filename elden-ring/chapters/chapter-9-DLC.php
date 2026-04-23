<?php 
$pageTitle = "Chapter 9: Shadow of the Erdtree (Part 1) | Elden Ring Walkthrough";
$pageDesc = "Massive guide to the first half of the Elden Ring DLC. Conquer Belurat, Castle Ensis, Cerulean Coast, Nameless Mausoleums, and slay Bayle the Dread.";
$bodyClass = "theme-elden-ring";

// Cargamos el header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 45vh; background: linear-gradient(180deg, rgba(160, 100, 30, 0.2) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1502481851512-e9e2529bfbf9?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.75);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/elden-ring/">Elden Ring</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Chapter 9</span>
            </nav>
            <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: DLC PART 1</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem; font-family: var(--font-display);">Chapter 9: Realm of Shadow</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd; max-width: 600px;">Gravesite Plain, Belurat, Castle Ensis, and the Jagged Peak</p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <div class="mobile-toc-container">
            <button class="mobile-toc-btn" id="tocToggle">
                <span>Exploration Progress</span>
                <span id="tocIcon">▼</span>
            </button>
            <ul class="mobile-toc-list" id="tocList">
                <li><a href="#entry">1. Entering the DLC</a></li>
                <li><a href="#scadutree">2. The Scadutree System</a></li>
                <li><a href="#belurat">3. Belurat, Tower Settlement</a></li>
                <li><a href="#mausoleums">4. Nameless Mausoleums</a></li>
                <li><a href="#ensis">5. Castle Ensis & Rellana</a></li>
                <li><a href="#altus">6. Scadu Altus & Forges</a></li>
                <li><a href="#cerulean">7. Cerulean Coast & St. Trina</a></li>
                <li><a href="#jagged-peak">8. Jagged Peak & Bayle</a></li>
                <li><a href="#dragon-altar">9. Grand Altar of Communion</a></li>
                <li><a href="#completion">10. Chapter Completion</a></li>
            </ul>
        </div>

        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">DLC Checklist</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#entry" style="color: var(--text-dim); transition: color 0.2s;">1. Entering the DLC</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#scadutree" style="color: var(--text-dim); transition: color 0.2s;">2. Scadutree Blessings</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#belurat" style="color: var(--text-dim); transition: color 0.2s;">3. Belurat Settlement</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#mausoleums" style="color: var(--text-dim); transition: color 0.2s;">4. Nameless Mausoleums</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#ensis" style="color: var(--text-dim); transition: color 0.2s;">5. Castle Ensis</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#altus" style="color: var(--text-dim); transition: color 0.2s;">6. Scadu Altus & Forges</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#cerulean" style="color: var(--text-dim); transition: color 0.2s;">7. Cerulean Coast</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#jagged-peak" style="color: var(--text-dim); transition: color 0.2s;">8. Jagged Peak</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#dragon-altar" style="color: var(--text-dim); transition: color 0.2s;">9. Dragon Communion</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">10. Chapter Completion</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <section class="guide-section reveal" id="entry" style="margin-bottom: 4rem;">
                <div class="callout warning" style="margin-bottom: 3rem; background: rgba(243, 156, 18, 0.1); border-left: 4px solid #f39c12; padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: #f39c12; font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">DLC Requirements</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">To access the Shadow of the Erdtree DLC, you <strong>must</strong> have defeated two specific bosses in the base game: <strong>Starscourge Radahn</strong> (Caelid) and <strong>Mohg, Lord of Blood</strong> (Mohgwyn Palace). Recommended entry level is 150+.</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">1. Entering the Realm of Shadow</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Travel to the "Cocoon of the Empyrean" Site of Grace in Mohgwyn Palace. Stand before Miquella's withered arm hanging from the bloody cocoon. You will find a new NPC, <strong>Needle Knight Leda</strong>, standing nearby. Interact with the withered arm to be transported to the Gravesite Plain.</p>
                
                <div class="reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0;">
                    <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">📜 Lore Context: The Land of the Tower</h5>
                    <p style="margin:0; font-size: 0.9rem; color: #ccc;">The Realm of Shadow is a land completely disconnected from the Lands Between, physically obscured by the veil of the Scadutree. It is the place where Queen Marika first set foot and became a god, and where she waged a brutal, hidden crusade led by her son, Messmer. We are following the footsteps of Kind Miquella, who discarded his flesh here to transcend his lineage.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="scadutree" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">2. The Scadutree System (Crucial Mechanic)</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Your base game level (even if you are level 300+) means very little here. The DLC introduces a separate leveling mechanic that <strong>only applies while you are inside the Realm of Shadow</strong>. Without it, even basic enemies will one-shot you.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
                        <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Scadutree Fragments</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">These glowing golden fragments are found at Crosses of Miquella, inside churches, and dropped by specific glowing shadow-pot enemies. Consume them at any Site of Grace to increase your <strong>Scadutree Blessing</strong>. This massively boosts your damage output and damage negation. <em>Goal: Do not fight major bosses without a blessing level of at least 4 or 5.</em></p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #bdc3c7;">
                        <h3 style="color: #bdc3c7; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Revered Spirit Ashes</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Found on mummified corpses typically near altars, headless statues, or in legacy dungeons. These function identically to Scadutree Fragments, but they exclusively buff the attack and defense of your <strong>Spirit Ash Summons</strong> and Torrent.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="belurat" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">3. Belurat, Tower Settlement</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Located to the northwest of the starting plain. This vertical city is filled with Hornsent warriors and serves as your first Legacy Dungeon. Watch out for the deadly Curseblades guarding the entrance.</p>

                <div class="guide-accordion open reveal" id="acc-belurat-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-belurat-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Navigating Belurat & The Well Depths</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                                <li style="margin-bottom: 0.5rem;"><strong>The Storeroom Key:</strong> Found across the rooftops near the waterfall. This key opens a door near the Small Private Altar grace to find the <strong>Hornsent Grandam</strong> NPC.</li>
                                <li style="margin-bottom: 0.5rem;"><strong>Well Depths Key:</strong> Found in the upper levels near the Omen enemies. This opens the locked gate in the lower poison swamp. At the bottom of the well, you will fight an Ulcerated Tree Spirit in a poison lake to get the <em>Immunizing Horn Charm +2</em>.</li>
                                <li><strong>The Miquella Cross:</strong> Make sure to speak to the NPCs Moore and Ansbach outside the city, and the Hornsent inside the city, to progress their interconnected questlines.</li>
                            </ul>
                        </div>
                    </div>
                </div>

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
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Divine Beast Dancing Lion</td>
                                <td style="padding: 1rem; color: #ccc;">Elemental Shifting & Camera Chaos</td>
                                <td style="padding: 1rem; color: #ccc;">A terrifying, erratic boss that shifts between Wind, Lightning, and Frost elemental phases. <br><br><strong>Strategy:</strong> The camera is your worst enemy here. Do not lock on when he is directly above you. Wait for his breath attacks to finish, roll through his spinning dive, and punish. <strong>Bleed and Fire</strong> weapons work exceptionally well. Summon Freya (NPC) outside the gate to help distract him. Defeating him yields the Divine Beast Head (take this back to the Hornsent Grandam).</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="guide-section reveal" id="mausoleums" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">4. The Nameless Mausoleums</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Scattered throughout the Realm of Shadow are small, square buildings containing formidable NPC bosses. They drop some of the most unique weapons and armors in the DLC.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
                        <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Western Nameless Mausoleum</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Located in the starting area (Gravesite Plain), slightly northwest of the first grace. Inside awaits the <strong>Blackgaol Knight</strong>. He uses a repeating crossbow and a heavy greatsword. <em>Reward:</em> Greatsword of Solitude and the incredibly defensive Solitude Armor Set.</p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Southern Nameless Mausoleum</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Located on a small island off the Cerulean Coast (accessible by finding a hidden cave on the coast's edge). Inside is the <strong>Dancer of Ranah</strong>. She dual-wields fiery curved swords with unending combos. <em>Reward:</em> Dancing Blade of Ranah and the Dancer's Set.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="ensis" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">5. Castle Ensis & Rellana</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">To reach the Scadu Altus region, you must cross the massive bridge to the northeast and clear Castle Ensis. This area is guarded by Messmer Soldiers, Black Knights, and a powerful Carian Royal.</p>

                <div class="guide-accordion reveal" id="acc-rellana" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 2rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-rellana')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #3498db; border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Boss Strategy: Rellana, Twin Moon Knight</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Sister to Rennala, but infinitely deadlier. She dual-wields swords (one Magic, one Fire) and has relentless, never-ending combo strings reminiscent of Malenia.</p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                                <li style="margin-bottom: 0.5rem;"><strong>The Parry Tactic:</strong> Rellana is highly susceptible to parries, though she requires 2 consecutive parries to break her stance. A shield with Carian Retaliation or Golden Parry works wonders here.</li>
                                <li style="margin-bottom: 0.5rem;"><strong>Phase 2 (Twin Moons):</strong> When she ignites both swords, her range doubles. Her ultimate attack summons two massive moons that slam into the ground, followed by a third shockwave. <strong>Do not roll! JUMP.</strong> Jump the first moon, jump the second, jump the massive final shockwave.</li>
                                <li>She is weak to Lightning. Summoning Leda or your Spirit Ash is highly recommended to split her devastating aggro.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="altus" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">6. Scadu Altus & The Ruined Forges</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Defeating Rellana opens the door to Scadu Altus. While the Shadow Keep looms directly ahead, <strong>do not go there yet.</strong> Approaching the Shadow Keep triggers a "Great Rune breaking" event that alters multiple NPC questlines. Explore the hidden paths and forges first.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e67e22;">
                        <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">⚒️</span>
                        <h3 style="color: #e67e22; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Ruined Forge Lava Intake</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Located southeast of Castle Ensis. This new type of mini-dungeon has no boss at the end. Instead, you navigate levers and lava tubes to reach the final altar. Here you will find the <strong>Smithscript Dagger</strong> (a weapon that can be thrown indefinitely) and an Ancient Dragon Smithing Stone.</p>
                    </div>

                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
                        <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🕳️</span>
                        <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Moorth Ruins & Bonny Village</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Find the massive sinkhole in Moorth Ruins. Drop down the ledges into the chasm to reach the secret <strong>Bonny Village</strong>. Grab the <strong>"O Mother" gesture</strong> from a headless statue on the northern edge (mandatory to unlock the Hinterlands later).</p>
                    </div>

                </div>
            </section>

            <section class="guide-section reveal" id="cerulean" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">7. Cerulean Coast & St. Trina</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">To access the beautiful blue flower fields of the south, travel from the Gravesite Plain, go across the Ellac River (under the great bridge), and follow the river south through the poison swamps.</p>

                <div class="guide-accordion open reveal" id="acc-cerulean-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-cerulean-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">The Stone Coffin Fissure</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">At the southernmost tip of the Cerulean Coast is a massive crater. <em>Note: The magical seal blocking the hole only breaks after you approach the Shadow Keep and get the "Great Rune has broken" message.</em></p>
                            <p style="color: #ccc; margin-bottom: 1rem;">Drop down into the Fissure. Navigate the laser-firing worms and stone coffins until you reach a terrifying leap of faith into a giant chasm. This leads to the boss: <strong>The Putrescent Knight</strong>. He rides a skeletal horse and uses Frostbite/Ghostflame. Jump over his freezing fire trails.</p>
                            <p style="color: var(--gold); margin-bottom: 0; font-weight: bold;">After defeating him, enter the cave to find St. Trina. Imbibe her nectar 4 times (dying each time) to hear her secret dialogue and advance Thiollier's questline.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="jagged-peak" style="margin-bottom: 4rem;">
                <div class="callout danger" style="margin-bottom: 3rem; background: rgba(231, 76, 60, 0.08); border-left: 4px solid #e74c3c; padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: #e74c3c; font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">⚠ EXTREME DIFFICULTY: JAGGED PEAK</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">The ascent to the Jagged Peak is an endgame DLC gauntlet. Ensure your Scadutree Blessing is at least Level 12+ before attempting to fight the summit boss.</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">8. The Jagged Peak & Bayle the Dread</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">To access this area, clear the <strong>Dragon's Pit</strong> dungeon. After exiting, follow the canyon east. You will meet <strong>Igon</strong>, a crippled drake warrior screaming in pain. Proceed past him to fight two fighting Jagged Peak Drakes, and continue climbing the mountain via Spirit Springs.</p>

                <div class="guide-accordion open reveal" id="acc-bayle-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-bayle-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #e74c3c; border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Boss Strategy: Bayle the Dread</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Bayle is the progenitor of the drakes and the dragon who severely wounded Placidusax. He is arguably the hardest dragon boss FromSoftware has ever created.</p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                                <li style="margin-bottom: 0.5rem;"><strong>Summon Igon:</strong> Igon's summon sign is *inside* the arena, slightly forward and to the left. Summoning him is highly recommended, not just for aggro splitting, but because his voice acting during this fight is absolutely legendary.</li>
                                <li style="margin-bottom: 0.5rem;"><strong>The Dragon-Hunter's Great Katana:</strong> Use the weapon you acquired in the Dragon's Pit dungeon. Its Ash of War does massive bonus damage to Dragons and can hit his head easily.</li>
                                <li style="margin-bottom: 0.5rem;"><strong>Phase 2 (Wings of Lightning):</strong> Bayle grows spectral wings of fire and lightning. When he flies into the sky and shoots dual laser beams, sprint sideways continuously. When he dive-bombs, roll diagonally into him.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="dragon-altar" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">9. Grand Altar of Dragon Communion</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Instead of heading east towards the Jagged Peak, if you head south from the Dragon's Pit exit, you will find the massive corpse of an ancient dragon serving as an altar.</p>

                <div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px;">
                    <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">Priestess of Dragon Communion (Florissax)</h4>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 1rem;">Speak to the Priestess here before fighting Bayle. She will grant you the <em>Ancient Dragon's Blessing</em> (a reusable consumable that boosts all defenses). After defeating Bayle, return to her.</p>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 1rem;">If you completed her quest normally, she will leave behind the <strong>Flowerstone Gavel</strong> weapon and her Spirit Ash. If you gave her Thiollier's Concoction earlier, you get a different ending for her.</p>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">Interact with the red altar fire to exchange the Heart of Bayle for either <strong>Bayle's Tyranny</strong> (AoE roar) or <strong>Bayle's Flame Lightning</strong> (devastating targeted strike).</p>
                </div>
            </section>

            <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">10. Part 1 Completion</h2>
                
                <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
                    <p style="color: #ccc; margin-bottom: 1.5rem;">You have explored the outer edges of the Realm of Shadow. It is now time to storm the Shadow Keep and face Messmer the Impaler.</p>

                    <ul class="guide-checklist" style="list-style: none; padding: 0; margin: 0;">
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Dancing Lion Defeated:</strong> Did you clear Belurat and speak to the Hornsent Grandam?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Castle Ensis Cleared:</strong> Did you parry/defeat Rellana, Twin Moon Knight?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Thiollier's Quest:</strong> Did you drink St. Trina's nectar in the Stone Coffin Fissure?</span></label></li>
                        <li><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Curse You Bayle!:</strong> Did you climb the Jagged Peak, summon Igon, and slay Bayle the Dread?</span></label></li>
                    </ul>
                </div>
                
                <div class="chapter-nav" style="display: flex; justify-content: space-between; align-items: center; margin-top: 4rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1);">
                    <a href="/elden-ring/chapters/chapter-8.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 8 (Ashen Capital)</a>
                    <a href="/elden-ring/chapters/chapter-10-DLC.php" class="btn btn-gold" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Next: Chapter 10 (DLC Part 2) →</a>
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