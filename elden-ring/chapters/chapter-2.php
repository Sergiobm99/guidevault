<?php 
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];
$pageTitle = "Chapter 2: Liurnia of the Lakes | Elden Ring Walkthrough";
$pageDesc = "Step-by-step walkthrough for Liurnia of the Lakes, Raya Lucaria Academy, and Caria Manor. Defeat Rennala, Queen of the Full Moon and find the path to Altus Plateau.";
$bodyClass = "theme-elden-ring";

// Cargamos el header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 40vh; background: linear-gradient(180deg, rgba(212, 175, 55, 0.15) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.7);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/elden-ring/">Elden Ring</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Chapter 2</span>
            </nav>
            <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: PART 2</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem; font-family: var(--font-display);">Chapter 2: Liurnia of the Lakes</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd; max-width: 600px;">Magic, Mist, and the Academy of Raya Lucaria</p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <div class="mobile-toc-container">
            <button class="mobile-toc-btn" id="tocToggle">
                <span>Table of Contents</span>
                <span id="tocIcon">▼</span>
            </button>
            <ul class="mobile-toc-list" id="tocList">
                <li><a href="#arrival">1. Entering Liurnia</a></li>
                <li><a href="#key">2. The Glintstone Key</a></li>
                <li><a href="#academy">3. Raya Lucaria Academy</a></li>
                <li><a href="#boss-rennala">4. Boss: Rennala</a></li>
                <li><a href="#upgrades">5. Essential Upgrades</a></li>
                <li><a href="#caria-manor">6. Caria Manor & Ranni</a></li>
                <li><a href="#altus-path">7. Path to Altus Plateau</a></li>
                <li><a href="#completion">8. Chapter Completion</a></li>
            </ul>
        </div>

        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Chapter Progress</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#arrival" style="color: var(--text-dim); transition: color 0.2s;">1. Entering Liurnia</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#key" style="color: var(--text-dim); transition: color 0.2s;">2. The Glintstone Key</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#academy" style="color: var(--text-dim); transition: color 0.2s;">3. Raya Lucaria Academy</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#boss-rennala" style="color: var(--text-dim); transition: color 0.2s;">4. Boss: Rennala</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#upgrades" style="color: var(--text-dim); transition: color 0.2s;">5. Essential Upgrades & NPCs</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#caria-manor" style="color: var(--text-dim); transition: color 0.2s;">6. Caria Manor & Ranni</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#altus-path" style="color: var(--text-dim); transition: color 0.2s;">7. Path to Altus Plateau</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">8. Chapter Completion</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <section class="guide-section reveal" id="arrival" style="margin-bottom: 4rem;">
                <div class="callout info" style="margin-bottom: 3rem; background: rgba(212, 175, 55, 0.05); border-left: 4px solid var(--gold); padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: var(--gold); font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">Region Overview</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;"><strong>Recommended Level:</strong> 40 - 60<br>
                    <strong>Weapon Upgrade:</strong> +6 to +12 (Standard) / +2 to +4 (Somber)<br>
                    <strong>Key Items:</strong> Academy Glintstone Key, Dectus Medallion (Right), Smithing-Stone Miner's Bell Bearing [1].</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">1. Entering the Flooded Lands</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">After defeating Godrick the Grafted, exit out the back of Stormveil Castle to behold the breathtaking vista of Liurnia of the Lakes. This region is massive, filled with fog, magic-wielding enemies, and hidden catacombs.</p>
                
                <ul class="step-list" style="margin-top:2rem;">
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">1</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Lake-Facing Cliffs</h4>
                            <p style="color: #ccc;">Rest at the first Site of Grace. Speak to Boc the Seamster nearby if you helped him in Limgrave. Follow the path down into the shallow waters of the lake. Stick to the sunken ruins to avoid giant lobsters and crabs.</p>
                        </div>
                    </li>
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">2</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Purified Ruins & Rya Lucaria Gate Town</h4>
                            <p style="color: #ccc;">Head northwest towards the center of the lake. You will find the Purified Ruins, where you can grab the <strong>Two Fingers Heirloom</strong>. Continue north to reach the Academy Gate Town, a ruined settlement full of aggressive Albinaurics.</p>
                        </div>
                    </li>
                </ul>

                <div class="reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0;">
                    <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">📜 Lore Context: The Shattered Academy</h5>
                    <p style="margin:0; font-size: 0.9rem; color: #ccc;">Raya Lucaria was once the greatest center of magical learning in the Lands Between. During the Shattering, they declared neutrality, sealed their gates with magic, and locked themselves away from the war. Only those possessing a Glintstone Key may pass through the magical barriers.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="key" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">2. Finding the Glintstone Key</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">To enter the legacy dungeon of this region, you must bypass the blue magical seals at the South or North Raya Lucaria Gates. A corpse holding a map near the South Gate points to a meeting place.</p>

                <div class="callout danger reveal" style="margin-bottom:2rem; background: rgba(140, 45, 45, 0.08); border-left: 4px solid #8C2D2D; padding: 1.5rem;">
                    <span class="callout-label" style="color: #ff4d4d; font-weight: bold; text-transform: uppercase;">⚠ Danger: Smarag the Glintstone Dragon</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">The key is located on an island directly west of the Academy, but it is guarded by a sleeping dragon. You <strong>do not have to fight the dragon</strong>. You can mount Torrent, sprint behind Smarag, grab the key from the dead sorcerer's body, and ride away to safety.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="academy" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">3. Raya Lucaria Academy</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">With the key in hand, teleport to the South Raya Lucaria Gate and pass through the seal. The Academy is heavily defended by Glintstone Sorcerers. High magic defense shields or armor (like the Spellblade Set) will save your life here.</p>

                <div class="guide-accordion open reveal" id="acc-academy-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-academy-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Navigating the Classrooms & The Red Wolf</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                                <li style="margin-bottom: 0.5rem;"><strong>The Graveyard:</strong> Watch out for the Marionette Soldiers and zombie dogs. Cross the swinging wooden bridge and head up the waterwheel elevator.</li>
                                <li style="margin-bottom: 0.5rem;"><strong>Schoolhouse Classroom:</strong> Be prepared to dodge glintstone pebble spam. Use the bookshelves for cover.</li>
                                <li><strong>Mini-Boss: Red Wolf of Radagon:</strong> An incredibly fast and agile boss. It will summon glowing blue swords that fire after a delay, while simultaneously lunging at you. <strong>Tip:</strong> Dodge <em>into</em> his lunges, not away from them, and use fast-hitting weapons. He drops a Memory Stone.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-academy-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-academy-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Secret: The Iron Maiden & Abductor Virgin</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">From the Schoolhouse Classroom Grace, head out and ride the giant waterwheel all the way to the <em>bottom</em> instead of the top.</p>
                            <p style="color: #ccc; margin-bottom: 0;">Let the Abductor Virgin machine at the bottom kill you with its grab attack (it opens its chest and pulls you in). This will teleport you secretly to Volcano Manor in Mt. Gelmir, allowing you to access mid-to-late game upgrade materials very early!</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="boss-rennala" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">4. Boss Fight: Rennala, Queen of the Full Moon</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">After dodging the giant rolling iron ball and dealing with Carian Knight Moongrum, take the elevator to the Grand Library. Rennala is the shardbearer of Liurnia.</p>

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
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 1 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(The Library)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Golden Shields</td>
                                <td style="padding: 1rem; color: #ccc;">Rennala floats in an impenetrable amber bubble. Look for the "sweetings" (creepy students) on the floor that have a glowing gold aura and are singing. Hit 3 of them to shatter Rennala's shield, causing her to fall. Deal as much damage as possible before she re-casts it.</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 2 <br><span style="font-size:0.75rem;color:#888; font-weight: normal;">(The Moongazing Grounds)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Magic & Summons</td>
                                <td style="padding: 1rem; color: #ccc;">She teleports you to an ethereal lake. She casts a massive starting laser (Comet Azur); immediately sprint sideways. She will start summoning spirit ashes (Wolves, Bloodhound Knight, Troll, Dragon). <strong>Do not fight her summons.</strong> Just sprint past them and hit Rennala to break her poise.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="callout abyss reveal" style="margin-top:2rem; background: rgba(138, 43, 226, 0.08); border-left: 4px solid #A29BFE; padding: 1.5rem;">
                    <span class="callout-label" style="color: #A29BFE; font-weight: bold; text-transform: uppercase;">Major Unlock: Rebirth (Respec)</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Rennala does not die. Defeating her grants the Remembrance of the Full Moon Queen and unlocks the ability to respec your character's stats using <strong>Larval Tears</strong>, allowing you to completely change your build at any time.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="upgrades" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">5. Essential Upgrades & NPCs</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Before leaving the lake, you must acquire these essential items to keep your weapons and flask upgraded for the mid-game.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f39c12;">
                        <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">⚒️</span>
                        <h3 style="color: #f39c12; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Infinite Smithing Stones</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Head to the <strong>Raya Lucaria Crystal Tunnel</strong> (northeastern corner of the lake). Defeat the Crystalian boss at the end to get the <em>Smithing-Stone Miner's Bell Bearing [1]</em>. Give it to the Twin Maiden Husks in Roundtable Hold to buy unlimited Smithing Stones (1) and (2).</p>
                    </div>

                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
                        <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🐢</span>
                        <h3 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Church of Vows (Turtle Pope)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Located on the eastern plateau. Here you will meet <strong>Miriel, Pastor of Vows</strong>. He is the best NPC to give your Sorcery Scrolls and Prayerbooks to, as he never moves or dies. You can also use Celestial Dew here to absolve your sins.</p>
                    </div>

                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🩸</span>
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Rose Church (Rune Farming)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">In the western shallows of the lake. Speak to <strong>White Mask Varré</strong>. Completing his short invasion questline (you don't have to win) rewards you with the Pureblood Knight's Medal, which teleports you early to Mohgwyn Palace—the absolute best rune farming spot in the game.</p>
                    </div>

                </div>
            </section>

            <section class="guide-section reveal" id="caria-manor" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">6. Caria Manor & Ranni the Witch</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">To the far northwest of the lake lies Caria Manor, home to the Carian Royals and the start of the game's most important side quest.</p>

                <div class="gallery-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 2rem;">
                    <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; padding: 1.5rem;">
                        <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">The Spider Hands</h3>
                        <p style="color: #ccc; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">The gardens of Caria Manor are infested with Fingercreepers. Watch for their fingertips poking out of the dirt. <strong>Weakness: Fire.</strong> Hitting them with any fire damage causes them to flail helplessly while burning.</p>
                    </div>
                    <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; padding: 1.5rem;">
                        <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Boss: Royal Knight Loretta</h3>
                        <p style="color: #ccc; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Guarding the exit is a magical knight on horseback. She uses glintstone spells and a halberd. Dodge her magic arrows at the last second and punish her recovery. Defeating her grants the Loretta's Greatbow spell and opens the path to the Three Sisters.</p>
                    </div>
                </div>

                <div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px; margin-top: 2rem;">
                    <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">Meeting Ranni</h4>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">Behind Caria Manor, you will find three towers. Enter the middle one, <strong>Ranni's Rise</strong>, and speak to the witch. Accepting her servitude begins a massive questline (introducing Blaidd, Iji, and Seluvis) that unlocks Nokron, Nokstella, the Moonlight Greatsword, and the "Age of Stars" ending.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="altus-path" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">7. The Path to Altus Plateau</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">With Liurnia conquered, you must ascend to the capital. There are two ways to leave the region and reach the Altus Plateau:</p>

                <div class="guide-accordion open reveal" id="acc-altus-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-altus-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Route A: The Grand Lift of Dectus (Easy)</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">To use the giant elevator at the northernmost point of Liurnia, you need both halves of the Dectus Medallion:</p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                                <li style="margin-bottom: 0.5rem;"><strong>Left Half:</strong> Found in Fort Haight in Limgrave (Mistwood).</li>
                                <li style="margin-bottom: 0.5rem;"><strong>Right Half:</strong> Found in Fort Faroth in Caelid (Run past the bats and climb the ladder).</li>
                                <li>Once you have both, simply stand on the lift platform and press "Hoist Medallion" to ascend without fighting a boss.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-altus-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-altus-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Route B: Ruin-Strewn Precipice (Hard)</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">If you don't have the medallions, you must take the cowards' path through the mines. Follow the ravine water north from the lake until you reach the Ravine-Veiled Village.</p>
                            <p style="color: #ccc; margin-bottom: 0;">Climb the scaffolding and ladders through the mines. At the top, you must defeat the boss: <strong>Magma Wyrm Makar</strong>. He is highly resistant to fire but weak to physical strikes on his head. Defeating him gives you the Magma Wyrm's Scalesword and grants access to Altus.</p>
                        </div>
                    </div>
                </div>

            </section>

            <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">8. Chapter Completion</h2>
                
                <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
                    <ul class="guide-checklist" style="list-style: none; padding: 0; margin: 0;">
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Great Rune:</strong> Did you defeat Rennala and claim her Great Rune of the Unborn?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Infinite Upgrades:</strong> Did you get the Miner's Bell Bearing [1] from the Crystal Tunnel?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Ranni's Quest:</strong> Did you enter Ranni's service in the Three Sisters?</span></label></li>
                        <li><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Path Cleared:</strong> Have you activated the Dectus Lift or defeated Magma Wyrm Makar?</span></label></li>
                    </ul>
                </div>
                
                <div style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
                    <div style="font-size: 2.5rem;">🏆</div>
                    <div>
                        <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px; margin-top: 0;">Achievement Unlocked</h4>
                        <p style="margin: 0; color: #ccc;"><strong>Rennala, Queen of the Full Moon:</strong> Defeat the Shardbearer of Liurnia. <span style="color: #888; font-size: 0.9rem;">(30G / Silver)</span></p>
                    </div>
                </div>
                
                <div class="chapter-nav">
                    <a href="/elden-ring/chapters/chapter-1.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 1</a>
                    <a href="/elden-ring/chapters/chapter-3.php" class="btn btn-gold" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Next: Chapter 3 (Caelid) →</a>
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

        tocList.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                tocList.classList.remove('show');
                tocIcon.textContent = '▼';
            });
        });
    }
});

// Script para los acordeones
function toggleAcc(id) {
    const acc = document.getElementById(id);
    if (acc) {
        acc.classList.toggle('open');
    }
}

// Script para animar los elementos con la clase "reveal"
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
});
</script>

<?php 
$fxTheme = 'magic'; // Polvo de cristal azul
include $_SERVER['DOCUMENT_ROOT'] . '/elden-ring/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>