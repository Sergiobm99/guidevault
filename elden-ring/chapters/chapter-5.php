<?php 
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];
$pageTitle = "Chapter 5: Mountaintops of the Giants | Elden Ring Walkthrough";
$pageDesc = "Complete guide to the Mountaintops of the Giants, Castle Sol, and the Consecrated Snowfield. Defeat the Fire Giant and unlock the Haligtree.";
$bodyClass = "theme-elden-ring";

// Cargamos el header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 45vh; background: linear-gradient(180deg, rgba(212, 230, 240, 0.15) 0%, #0a0a0a 100%);">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.65);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/elden-ring/">Elden Ring</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Chapter 5</span>
            </nav>
            <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: PART 5</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem; font-family: var(--font-display);">Chapter 5: The Frozen Peaks</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd; max-width: 600px;">Mountaintops of the Giants, Castle Sol, and the Secret Snowfield</p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <div class="mobile-toc-container">
            <button class="mobile-toc-btn" id="tocToggle">
                <span>Exploration Progress</span>
                <span id="tocIcon">▼</span>
            </button>
            <ul class="mobile-toc-list" id="tocList">
                <li><a href="#arrival">1. The Grand Lift of Rold</a></li>
                <li><a href="#zamor">2. Zamor Ruins & Freezing Lake</a></li>
                <li><a href="#secrets">3. Heretical Rise & Field Bosses</a></li>
                <li><a href="#castle-sol">4. Castle Sol & Commander Niall</a></li>
                <li><a href="#fire-giant">5. Boss: The Fire Giant</a></li>
                <li><a href="#forge">6. The Forge of the Giants</a></li>
                <li><a href="#snowfield">7. Secret: Consecrated Snowfield</a></li>
                <li><a href="#ordina">8. Ordina, Liturgical Town</a></li>
                <li><a href="#completion">9. Chapter Completion</a></li>
            </ul>
        </div>

        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Chapter Progress</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#arrival" style="color: var(--text-dim); transition: color 0.2s;">1. The Grand Lift of Rold</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#zamor" style="color: var(--text-dim); transition: color 0.2s;">2. Zamor Ruins & Lake</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#secrets" style="color: var(--text-dim); transition: color 0.2s;">3. Secrets & Puzzles</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#castle-sol" style="color: var(--text-dim); transition: color 0.2s;">4. Castle Sol & Niall</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#fire-giant" style="color: var(--text-dim); transition: color 0.2s;">5. Boss: Fire Giant</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#forge" style="color: var(--text-dim); transition: color 0.2s;">6. Forge of the Giants</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#snowfield" style="color: var(--text-dim); transition: color 0.2s;">7. Secret Snowfield</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#ordina" style="color: var(--text-dim); transition: color 0.2s;">8. Ordina Puzzle</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">9. Chapter Completion</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <section class="guide-section reveal" id="arrival" style="margin-bottom: 4rem;">
                <div class="callout info" style="margin-bottom: 3rem; background: rgba(212, 175, 55, 0.05); border-left: 4px solid var(--gold); padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: var(--gold); font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">Region Overview</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;"><strong>Recommended Level:</strong> 90 - 110<br>
                    <strong>Weapon Upgrade:</strong> +18 to +24 (Standard) / +7 to +9 (Somber)<br>
                    <strong>Key Items:</strong> Haligtree Secret Medallion (Left), Rivers of Blood, Smithing-Stone Miner's Bell Bearing [3], Founding Rain of Stars.</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">1. The Grand Lift of Rold</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">With Morgott defeated and the Rold Medallion in hand from Melina, exit Leyndell through the eastern gates. Fight your way through the Misbegotten and climb the snowy path to reach the Grand Lift of Rold, which will carry you up into the freezing, desolate peaks.</p>
                
                <div class="reveal" style="background: rgba(45, 90, 140, 0.1); border-left: 3px solid var(--blue); padding: 1rem; margin-top: 1rem; margin-bottom: 2rem; border-radius: 0 4px 4px 0;">
                    <h5 style="color: #5dade2; font-family: var(--font-display); margin-bottom: 0.3rem; font-size: 1.1rem; letter-spacing: 0.5px;">📜 Lore Context: The Giants' War</h5>
                    <p style="margin:0; font-size: 0.9rem; color: #ccc;">Long before the Shattering, Queen Marika and Godfrey waged a brutal war against the Fire Giants who inhabited these mountains. The Golden Order emerged victorious, slaying all but one Fire Giant, who was cursed to tend the Flame of Ruin forever so it could never be used to burn the Erdtree.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="zamor" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">2. Zamor Ruins & The Freezing Lake</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The difficulty spike in this region is no joke. The very first enemies you encounter, the Knights of Zamor, are capable of unleashing devastating frostbite attacks and dodging your spells with ease.</p>

                <ul class="step-list" style="margin-top:2rem;">
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">1</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Zamor Ruins Underground</h4>
                            <p style="color: #ccc;">Carefully sneak through or run past the Knights of Zamor to find the stairs leading underground in the ruins. Inside, open the chest to acquire the <strong>Smithing-Stone Miner's Bell Bearing [3]</strong>. Giving this to the Twin Maiden Husks lets you buy unlimited Smithing Stones (5) and (6).</p>
                        </div>
                    </li>
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">2</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Bridge of Iniquity</h4>
                            <p style="color: #ccc;">Follow the narrow, winding rock bridges. You will be ambushed by massive Golem archers shooting greatarrows. Use Torrent to sprint diagonally to avoid getting knocked into the abyss.</p>
                        </div>
                    </li>
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">3</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Freezing Lake & Borealis</h4>
                            <p style="color: #ccc;">As you cross the vast frozen lake, a blinding blizzard will obscure your vision. You will be ambushed by <strong>Borealis the Freezing Fog</strong>, an ice dragon. You can either fight him for his Dragon Heart and incantation, or hug the right wall to escape the blizzard and reach the First Church of Marika.</p>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="guide-section reveal" id="secrets" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">3. Secrets & Field Bosses</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The Mountaintops hide some of the best mid-to-late game items. Do not rush to the Fire Giant without checking these out.</p>

                <div class="guide-accordion open reveal" id="acc-puzzle-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-puzzle-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Puzzle: Heretical Rise (Invisible Bridge)</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">To enter the Heretical Rise tower, you must cross an <strong>invisible bridge</strong> spanning the massive ravine from the northern cliffs.</p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                                <li style="margin-bottom: 0.5rem;">Go to the "Freezing Lake" grace, head north to the cliff edge directly opposite the tower.</li>
                                <li style="margin-bottom: 0.5rem;">You will see a slight snowy mist forming a straight line in the air. Walk on it. <strong>Use Rainbow Stones, glowing arrows, or Hoarfrost Stomp</strong> to reveal the path before stepping.</li>
                                <li>Near the end, the path curves <em>upwards and to the left</em> as an invisible spiral staircase. At the top of the tower, you will find the legendary sorcery: <strong>Founding Rain of Stars</strong>.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #8e44ad;">
                        <h3 style="color: #8e44ad; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Death Rite Bird (Night Only)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Located on the cliffs west of Castle Sol. Approach at night to spawn this terrifying boss. It uses massive Ghostflame AoE attacks. <strong>Weakness: Holy Damage (Use Sacred Blade or Holy Pots).</strong> Drops the immensely powerful <em>Death Ritual Spear</em>.</p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Invasion: Okina (Rivers of Blood)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">As you approach the Church of Repose, you will be invaded by <strong>Bloody Finger Okina</strong>. Defeating him rewards you with his mask and the infamous <em>Rivers of Blood</em> katana. <br><br><strong>WARNING:</strong> You MUST kill him before defeating the Fire Giant, or he will not invade.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="castle-sol" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">4. Castle Sol & Commander Niall</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">To the far north of the mountaintops lies Castle Sol. While completely optional for the main story, it is <strong>mandatory</strong> if you want to reach Miquella's Haligtree and fight Malenia.</p>

                <div class="callout danger reveal" style="margin-bottom:2rem; background: rgba(140, 45, 45, 0.08); border-left: 4px solid #8C2D2D; padding: 1.5rem;">
                    <span class="callout-label" style="color: #ff4d4d; font-weight: bold; text-transform: uppercase;">Beware the Banished Knights</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">The spectral Banished Knights in Castle Sol can teleport behind you and perform massive, unending combo attacks. If you see a dual-wielding knight with red eyes, <strong>run</strong> or use heavy staggering attacks (like jump attacks or giant weapons) to break his poise immediately.</p>
                </div>

                <div class="guide-accordion reveal" id="acc-niall-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-niall-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Boss Strategy: Commander Niall</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Niall is one of the toughest bosses in the game due to his summons and massive AoE frostbite/lightning attacks.</p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6;">
                                <li style="margin-bottom: 0.5rem;"><strong>The Bewitching Branch Trick:</strong> Niall summons two spectral knights immediately. If you throw a <em>Bewitching Branch</em> (crafted using Sacramental Buds) at them, they will turn on Niall and deal massive damage to him for you.</li>
                                <li style="margin-bottom: 0.5rem;"><strong>Phase 2:</strong> Once his summons are dead (or he reaches 50% HP), he gains a lightning peg-leg. Roll *into* his jumping attacks, not away from them, to avoid the shockwave.</li>
                                <li><strong>The Reward:</strong> Proceed past his boss room to the rooftop to claim the <strong>Haligtree Secret Medallion (Left)</strong>.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="fire-giant" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #e74c3c; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">5. Boss: The Fire Giant</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Cross the frozen chain bridge to reach the snowy basin. Here you will face the last of the Fire Giants. He has an absolutely gargantuan health pool and attacks that can one-shot you.</p>

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
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 1 <br><span style="font-size:0.75rem;color:#888;">(The Shield)</span></td>
                                <td style="padding: 1rem; color: #ccc;">The Weak Ankle</td>
                                <td style="padding: 1rem; color: #ccc;">The giant uses a massive snow-shovel lid as a weapon. <strong>Target his left ankle</strong> (the one with the woven splint). Hitting it enough times will break the splint, stunning him briefly and opening him up to massive damage. Watch out for his fast rolling attacks.</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem; font-weight: bold; color: #ccc;">Phase 2 <br><span style="font-size:0.75rem;color:#888;">(The Fell God)</span></td>
                                <td style="padding: 1rem; color: #ccc;">Volcanic Eruptions</td>
                                <td style="padding: 1rem; color: #ccc;">At 50% HP, a gruesome cutscene plays. He will now crawl on his knees, and the massive eye on his chest opens. His weakness is now the eye (hard to hit) or his hands. When he leans back and his chest roars with fire, <strong>run away immediately on Torrent</strong> to escape the meteors raining down. Use status effects like Bleed, Scarlet Rot, and Poison to chew through his massive HP pool safely.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="reveal" style="background: rgba(212, 168, 67, 0.05); border: 1px dashed var(--gold); padding: 1.5rem; border-radius: 4px; margin-top: 2rem;">
                    <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">Summoning Iron Fist Alexander</h4>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">If you followed Alexander's questline (freeing him in Limgrave/Liurnia, talking to him after Radahn, and finding him in the Mt. Gelmir lava), you can summon him for this fight. His sign is located <em>inside</em> the boss arena, just past the fog gate. He is an incredible tank for Phase 2.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="forge" style="margin-bottom: 4rem;">
                <div class="callout warning" style="border-left: 4px solid #f39c12; background: rgba(243, 156, 18, 0.1); padding: 1.5rem; margin-bottom: 3rem;">
                    <span class="callout-label" style="color: #f39c12; font-weight: bold; text-transform: uppercase;">CRITICAL: POINT OF NO RETURN</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Resting at the Site of Grace on the rim of the Forge and speaking to Melina will trigger a cinematic that transports you to Crumbling Farum Azula. <strong>Make sure you have completed any remaining NPC quests in Leyndell</strong> before doing this, as the capital will soon be buried in ash.</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">6. The Forge of the Giants</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">After the Fire Giant falls, ride the massive chain up to the rim of the great cauldron. Walk around the left side of the rim until you find the Site of Grace.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
                        <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Cardinal Sin (Standard Path)</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Rest at the grace and select "Talk to Melina". She will use the Flame of Ruin to burn the Erdtree's thorns, sacrificing herself in the process. This leads to the standard endgame flow.</p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Frenzied Flame Path</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">If you accepted the Frenzied Flame from the Three Fingers beneath Leyndell, Melina will have abandoned you. You must sit at the grace and select "Listen to the sounds of flame" to sacrifice your own body and burn the tree.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="snowfield" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">7. Secret Area: Consecrated Snowfield</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">If you collected the Right Haligtree Medallion (from Albus) and the Left Haligtree Medallion (from Castle Sol), you can access the game's ultimate secret area.</p>

                <div class="guide-accordion open reveal" id="acc-snowfield-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-snowfield-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">How to use the Secret Medallion</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">Fast travel back to the <strong>Grand Lift of Rold</strong>. Stand on the platform, but do not press the action button immediately. Instead, press left/right on your D-pad (or switch action button) to change the prompt from "Hoist Medallion" to <strong>"Hoist Secret Medallion"</strong>.</p>
                            <p style="color: #ccc; margin-bottom: 0;">This takes you to the Hidden Path to the Haligtree. Walk out into the blinding snowstorm.</p>
                        </div>
                    </div>
                </div>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #1abc9c;">
                        <h3 style="color: #1abc9c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Night's Cavalry Duo</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">In the center of the Snowfield, you will find a giant caravan pulled by two trolls (Night only). It is guarded by TWO Night's Cavalry bosses simultaneously. <strong>Lure them out one by one.</strong> Defeating them both awards the legendary Night's Cavalry armor set and an Ancient Dragon Smithing Stone.</p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f39c12;">
                        <h3 style="color: #f39c12; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Yelough Anix Tunnel</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Located on the western wall of the snowfield. Fight through the Alabaster Lords to reach the boss: <strong>Astel, Stars of Darkness</strong>. Defeating this stronger version of Astel grants the powerful <em>Meteorite of Astel</em> sorcery.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="ordina" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">8. Ordina, Liturgical Town</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">To the far north of the Consecrated Snowfield lies Ordina. The gateway to the Haligtree is sealed here. To open it, you must enter the Evergaol (by interacting with the imp seal in the center of town) and light four statue candles on the rooftops.</p>

                <div class="callout danger reveal" style="margin-bottom:2rem; background: rgba(140, 45, 45, 0.08); border-left: 4px solid #8C2D2D; padding: 1.5rem;">
                    <span class="callout-label" style="color: #ff4d4d; font-weight: bold; text-transform: uppercase;">The Invisible Assassins</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">The Evergaol version of Ordina is stalked by invisible Black Knife Assassins. They will backstab and instantly kill you. <strong>Crucial Item: Sentry's Torch.</strong> Buy this torch from the Hermit Merchant in Altus Plateau; holding it in your off-hand will reveal the invisible assassins.</p>
                </div>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
                        <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Rooftop Snipers</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">The rooftops are guarded by Albinauric archers who fire rapid, high-damage magic arrows. Equip a shield with high magic negation or use the roofs for cover. Knocking them off the roofs with Greatbows or gravity magic works wonders.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="completion" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">9. Chapter Completion</h2>
                
                <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
                    <ul class="guide-checklist" style="list-style: none; padding: 0; margin: 0;">
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Castle Sol Cleared:</strong> Did you defeat Commander Niall and claim the Haligtree Medallion (Left)?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Fire Giant Slain:</strong> Have you defeated the Fire Giant at the basin?</span></label></li>
                        <li style="border-bottom: 1px dashed rgba(255,255,255,0.05); padding-bottom: 1rem; margin-bottom: 1rem;"><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>Secret Path Opened:</strong> Did you hoist the secret medallion and access the Snowfield?</span></label></li>
                        <li><label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"><input type="checkbox" style="width: 22px; height: 22px; flex-shrink: 0;"><span style="color: #ccc;"><strong>The Cardinal Sin:</strong> Did you commit the sin at the Forge to travel to Farum Azula?</span></label></li>
                    </ul>
                </div>
                
                <div style="border-left: 4px solid #2ecc71; padding: 1.5rem; background: var(--dark-2); border-radius: 0 4px 4px 0; display: flex; align-items: center; gap: 1.5rem;">
                    <div style="font-size: 2.5rem;">🏆</div>
                    <div>
                        <h4 style="color: #2ecc71; font-family: var(--font-display); font-size: 1.4rem; margin-bottom: 0.2rem; letter-spacing: 1px; margin-top: 0;">Achievement Unlocked</h4>
                        <p style="margin: 0; color: #ccc;"><strong>Fire Giant:</strong> Defeat the Fire Giant of the Mountaintops. <span style="color: #888; font-size: 0.9rem;">(30G / Silver)</span></p>
                    </div>
                </div>
                
                <div class="chapter-nav" style="display: flex; justify-content: space-between; align-items: center; margin-top: 4rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1);">
                    <a href="/elden-ring/chapters/chapter-4.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Chapter 4</a>
                    <a href="/elden-ring/chapters/chapter-6.php" class="btn btn-gold" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Next: Chapter 6 (Endgame) →</a>
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
$fxTheme = 'snow';
include $_SERVER['DOCUMENT_ROOT'] . '/elden-ring/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>