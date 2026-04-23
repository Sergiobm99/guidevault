<?php 
$pageTitle = "Chapter 3: Caelid & Starscourge Radahn | Elden Ring Walkthrough";
$pageDesc = "Complete guide to Caelid. Find the Golden Scarab, Radagon's Soreseal, survive Scarlet Rot, and defeat General Radahn in the Redmane Festival.";
$bodyClass = "theme-elden-ring";

include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 45vh; background: linear-gradient(180deg, rgba(139, 0, 0, 0.2) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1444703686981-a3abbc4d4fe3?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.75);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/elden-ring/">Elden Ring</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Chapter 3</span>
            </nav>
            <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: PART 3</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: #e74c3c; line-height: 1.1; margin-bottom: 1rem; font-family: var(--font-display);">Chapter 3: The Crimson Waste</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd; max-width: 600px;">Scarlet Rot, The Starscourge, and the Divine Tower</p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <div class="mobile-toc-container">
            <button class="mobile-toc-btn" id="tocToggle">
                <span>Exploration Progress</span>
                <span id="tocIcon">▼</span>
            </button>
            <ul class="mobile-toc-list" id="tocList">
                <li><a href="#survival">1. Scarlet Rot Survival</a></li>
                <li><a href="#sellia">2. Sellia & Millicent's Quest</a></li>
                <li><a href="#artifacts">3. Crucial Artifacts (Scarab & Soreseal)</a></li>
                <li><a href="#redmane">4. Redmane Castle & The Festival</a></li>
                <li><a href="#boss-radahn">5. Boss: Starscourge Radahn</a></li>
                <li><a href="#divine-tower">6. Divine Tower of Caelid</a></li>
                <li><a href="#sanctum">7. Bestial Sanctum & Greyoll</a></li>
                <li><a href="#completion">8. Chapter Completion</a></li>
            </ul>
        </div>

        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Caelid Checklist</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#survival" style="color: var(--text-dim); transition: color 0.2s;">1. Scarlet Rot Survival</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#sellia" style="color: var(--text-dim); transition: color 0.2s;">2. Sellia & Millicent's Quest</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#artifacts" style="color: var(--text-dim); transition: color 0.2s;">3. Crucial Artifacts</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#redmane" style="color: var(--text-dim); transition: color 0.2s;">4. Redmane Castle</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#boss-radahn" style="color: var(--text-dim); transition: color 0.2s;">5. Boss: Radahn</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#divine-tower" style="color: var(--text-dim); transition: color 0.2s;">6. Divine Tower of Caelid</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#sanctum" style="color: var(--text-dim); transition: color 0.2s;">7. Bestial Sanctum</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">8. Chapter Completion</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <section class="guide-section reveal" id="survival" style="margin-bottom: 4rem;">
                <div class="callout danger" style="margin-bottom: 3rem; background: rgba(231, 76, 60, 0.08); border-left: 4px solid #e74c3c; padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: #e74c3c; font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">⚠ HAZARD: SCARLET ROT</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Caelid is infested with <strong>Scarlet Rot</strong>. This status effect drains HP significantly faster than poison. Riding Torrent protects you from the rot in the swamps. If you must travel on foot, bring "Preserving Boluses" or the "Flame, Cleanse Me" incantation.</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">1. Entering the Rotting Wilds</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Caelid is accessible directly from East Limgrave. The sky turns a sickly red, and the music shifts to an oppressive drone. This region serves as a massive difficulty spike; if you are below level 60, use Torrent to skip most field enemies like the monstrous dogs and giant crows.</p>
                
                <ul class="step-list" style="margin-top:2rem;">
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">1</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Rotview Balcony & Smoldering Church</h4>
                            <p style="color: #ccc;">Grab the first Site of Grace. Shortly after, you will be invaded by NPC <strong>Anastasia, Tarnished-Eater</strong> at the Smoldering Church. Defeat her for the Sacred Scorpion Charm. Continue south along the road to find the Caelid Map Fragment.</p>
                        </div>
                    </li>
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">2</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Meteorite Staff (Best Early Magic)</h4>
                            <p style="color: #ccc;">Ride into the Swamp of Aeonia. In the northwestern ruins (Street of Sages), search for a small tower window. Inside is the <strong>Meteorite Staff</strong> and the <em>Rock Sling</em> spell. This combination is essential for any Intelligence build to survive Caelid, as the staff has S-scaling in INT immediately.</p>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="guide-section reveal" id="sellia" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">2. Sellia & Millicent's Quest</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Sellia, Town of Sorcery, is locked behind magical blue barriers. Meanwhile, just outside the town, Sage Gowry will ask for your help to cure a rotting girl.</p>

                <div class="guide-accordion open reveal" id="acc-sellia-puzzle" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-sellia-puzzle')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Puzzle Solution: Lighting the Beacons</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Use Torrent to jump onto the rooftops from the spectral roots. There are three towers with candle-beacons that you must light to break the town's seals:</p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                                <li style="margin-bottom: 0.5rem;"><strong>Tower 1:</strong> On the western side. Jump from the giant roots.</li>
                                <li style="margin-bottom: 0.5rem;"><strong>Tower 2:</strong> Central-northern part of town. Requires careful platforming across balconies.</li>
                                <li><strong>Tower 3:</strong> Eastern edge. Lighting all three opens the back gate, unseals several chests (containing the Spelldrake Talisman +1 and Night Comet), and unlocks the boss arena (Nox Priest & Swordstress).</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1.5rem; border-radius: 0 4px 4px 0; margin-top: 2rem;">
                    <h4 style="color: #5dade2; font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">Saving Millicent</h4>
                    <p style="font-size: 0.95rem; color: #ccc; margin-bottom: 0.5rem;">To get the <strong>Unalloyed Gold Needle</strong> for Gowry, you must defeat <strong>Commander O'Neil</strong> in the heart of the Swamp of Aeonia. <em>Tactic: Stay on Torrent to avoid the rot storms he creates, and lure out his summons before engaging him directly.</em></p>
                    <p style="font-size: 0.95rem; color: #ccc; margin-bottom: 0;">Bring the needle back to Gowry, reload the area, get the repaired needle, and deliver it to Millicent at the Church of the Plague. She will later become a highly valuable summon for multiple late-game bosses.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="artifacts" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">3. Crucial Artifacts of Caelid</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Do not proceed to Radahn without grabbing these two game-changing items hidden in Caelid's optional mini-dungeons.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f1c40f;">
                        <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">💰</span>
                        <h3 style="color: #f1c40f; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Golden Scarab (Rune Farming)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0.5rem;"><strong>Location:</strong> Abandoned Cave (East of Smoldering Wall Grace. Walk across the tree branches hanging over the canyon).</p>
                        <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0;">This talisman increases all Runes acquired by 20%. You must survive a dungeon full of Scarlet Rot geysers and defeat the Cleanrot Knight Duo boss to get it. <em>Bring Preserving Boluses!</em></p>
                    </div>

                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">👁️</span>
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Radagon's Soreseal</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0.5rem;"><strong>Location:</strong> Fort Faroth (Dragonbarrow region, near the giant sleeping dragon).</p>
                        <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0;">One of the best talismans in the game. It grants +5 to Vigor, Endurance, Strength, and Dexterity (equivalent to 20 free levels) at the cost of taking 15% more damage. Drop down a hole in the roof to find it.</p>
                    </div>

                </div>
            </section>

            <section class="guide-section reveal" id="redmane" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">4. Redmane Castle & The Festival</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Head to the southeasternmost point of the map: Castle Redmane. The state of this castle changes completely depending on when you arrive.</p>

                <div class="guide-accordion open reveal" id="acc-redmane-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-redmane-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Arriving BEFORE the Festival (Duo Boss)</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">If you visit before resting at an Altus Plateau grace or progressing Ranni's quest, the castle is heavily guarded by soldiers and lions.</p>
                            <p style="color: #ccc; margin-bottom: 0;">In the main courtyard, you will face an excruciating duo boss fight: <strong>Misbegotten Warrior & Crucible Knight</strong>. Defeating them awards the legendary <em>Ruins Greatsword</em>. (If you miss this now, you can return after defeating Radahn and speaking to Jerren to trigger the boss fight).</p>
                        </div>
                    </div>
                </div>

                <div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px; margin: 2rem 0;">
                    <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">The Radahn Festival (Event Trigger)</h4>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">Once the festival begins, the castle enemies vanish. Inside the courtyard, you will meet your allies: <strong>Iron Fist Alexander</strong>, <strong>Blaidd the Half-Wolf</strong>, <strong>Therolina</strong>, and <strong>Tragoth</strong>. Talk to them to ensure they can be summoned during the battle. Speak to Jerren on the balcony to trigger the cinematic and open the elevator down to the Wailing Dunes.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="boss-radahn" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #e74c3c; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">5. Boss: Starscourge Radahn</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The mightiest demigod of the Shattering. This is a massive gimmick fight taking place on a giant battlefield. Radahn has insane range and can one-shot lower-level players.</p>

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
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 1 <br><span style="font-size:0.75rem;color:#888;">(The Approach)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Gravity Arrows</td>
                                <td style="padding: 1rem; color: #ccc;">Radahn fires fast, lethal purple arrows. <strong>Stay off Torrent.</strong> Roll through the arrows precisely while running from barricade to barricade. Click the glowing summon signs on the ground as you run. Once the NPCs reach him, he switches to melee.</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 2 <br><span style="font-size:0.75rem;color:#888;">(Melee Chaos)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Gravity Pulls & Swings</td>
                                <td style="padding: 1rem; color: #ccc;">Mount Torrent now. Stay behind him and let the NPCs draw aggro. <strong>Pro-Tip:</strong> Radahn is extremely weak to Scarlet Rot. Use Rotten Breath or rot pots to drain his HP while you ride around re-summoning dead NPCs (their signs respawn).</td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Final Phase <br><span style="font-size:0.75rem;color:#888;">(The Meteor)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Starfall</td>
                                <td style="padding: 1rem; color: #ccc;">At 50% HP, he vanishes and crashes back down as a flaming meteor. <strong>Sprint sideways on Torrent</strong> to avoid instant death. When he summons 4 floating gravity boulders, prepare to dodge; if they hit you, it's game over. Maintain distance and keep summoning.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="callout abyss reveal" style="margin-top:2rem; background: rgba(138, 43, 226, 0.08); border-left: 4px solid #A29BFE; padding: 1.5rem;">
                    <span class="callout-label" style="color: #A29BFE; font-weight: bold; text-transform: uppercase;">World Event: The Falling Star</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Defeating Radahn frees the stars. A cinematic shows a meteor crashing into Limgrave. This creates a massive crater in the Mistwood, opening the path to <strong>Nokron, the Eternal City</strong> (required for Ranni's ending).</p>
                </div>
            </section>

            <section class="guide-section reveal" id="divine-tower" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">6. The Divine Tower of Caelid</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">To activate Radahn's Great Rune, you must scale the massive tower in Dragonbarrow. This is one of the most perilous platforming sections in the game.</p>

                <div class="guide-accordion open reveal" id="acc-tower-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-tower-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Ascension: Radahn's Great Rune</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Use the roots outside to jump onto the tower's ledges. Carefully climb the ladders, dealing with the Radahn Soldiers on the narrow beams. Once inside, take the elevator up to the roof to activate the Great Rune (boosts max HP, FP, and Stamina by 15%).</p>
                        </div>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-tower-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-tower-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Descent: The Godskin Apostle</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">From the center grace, drop down carefully along the interior arches and broken ledges. You will face heavily armored Blackflame Monks. At the very bottom awaits the <strong>Godskin Apostle</strong> boss fight.</p>
                            <p style="color: #ccc; margin-bottom: 0;">He is incredibly fast and uses Black Flame magic. <strong>Weakness: Sleep.</strong> Use sleep pots to incapacitate him. Defeating him rewards you with the Godskin Apostle armor set and opens the chest containing the legendary <strong>Godslayer's Greatsword</strong>.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="sanctum" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">7. Bestial Sanctum & Greyoll's Dragonbarrow</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The northern plateau of Caelid is even more dangerous, scaled for endgame players. Use the teleporter behind the Third Church of Marika (Limgrave) to arrive here early for great loot.</p>

                <div class="gallery-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 2rem;">
                    <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; padding: 1.5rem;">
                        <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Gurranq, Beast Clergyman</h3>
                        <p style="color: #ccc; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Inside the Sanctum. Give him <strong>Deathroot</strong> (found in Catacombs or from Tibia Mariners) to receive unique Bestial Incantations, the Clawmark Seal, and a beast-roar warhammer. <em>Warning: He turns hostile temporarily after giving him 4 Deathroots; deal enough damage to calm him down.</em></p>
                    </div>
                    <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; padding: 1.5rem;">
                        <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Elder Dragon Greyoll (Rune Farm)</h3>
                        <p style="color: #ccc; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">The massive, stationary dragon near Fort Faroth. She screams to debuff you and summon smaller dragons. <strong>Farm Tip:</strong> Sneak behind her left leg and use a weapon with passive Bleed (like the Uchigatana). The bleed procs will eventually kill her without waking the small dragons, granting an easy ~80,000+ Runes and 5 Dragon Hearts.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">8. Chapter Completion</h2>
                
                <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
                    <ul class="guide-checklist" style="list-style: none; padding: 0; margin: 0;">
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>The Shardbearer:</strong> Have you defeated General Radahn and claimed his Great Rune?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Crucial Items:</strong> Did you grab the Golden Scarab and Radagon's Soreseal?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Magic Town:</strong> Have you lit all 3 beacons in Sellia and opened the gates?</span></label></li>
                        <li><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Divine Tower:</strong> Did you activate the Great Rune and defeat the Godskin Apostle?</span></label></li>
                    </ul>
                </div>
                
                <div style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
                    <div style="font-size: 2.5rem;">🏆</div>
                    <div>
                        <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px; margin-top: 0;">Achievement Unlocked</h4>
                        <p style="margin: 0; color: #ccc;"><strong>Starscourge Radahn:</strong> Defeat the Shardbearer of Caelid. <span style="color: #888; font-size: 0.9rem;">(30G / Silver)</span></p>
                    </div>
                </div>
                
                <div class="chapter-nav">
                    <a href="/elden-ring/chapters/chapter-2.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 2</a>
                    <a href="/elden-ring/chapters/chapter-4.php" class="btn btn-gold" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Next: Chapter 4 (Altus) →</a>
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