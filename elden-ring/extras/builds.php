<?php
// 1. We identify the parent game for the "Smart Button" in the header
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];
$pageTitle = "Best Builds & Calculator: Bleed, Magic, Strength & Faith | Elden Ring Guide";
$pageDesc = "Dominate the Lands Between with the best optimized builds. Discover the ultimate setups, test your AR with our interactive build planner, and conquer the DLC.";
$bodyClass = "theme-elden-ring";

// Cargamos el header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<style>
    /* Estilos específicos para la calculadora de Elden Ring */
    .build-calculator {
        background: var(--dark-2, #141414);
        border: 1px solid var(--border-color, rgba(212, 175, 55, 0.3));
        border-radius: 8px;
        padding: 25px;
        margin: 2rem 0;
        font-family: var(--font-ui), sans-serif;
        color: #e0d4be;
        box-shadow: 0 4px 20px rgba(0,0,0,0.6);
        position: relative;
        overflow: hidden;
    }
    .build-calculator::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; height: 3px;
        background: linear-gradient(90deg, transparent, var(--gold), transparent);
    }
    .calc-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 30px; position: relative; z-index: 2; }
    @media (max-width: 768px) { .calc-grid { grid-template-columns: 1fr; } }
    .calc-selectors { display: flex; flex-direction: column; gap: 15px; }
    .calc-group label { display: block; font-size: 0.85rem; color: var(--gold); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; font-weight: bold; }
    .calc-group select { width: 100%; background: #0a0a0a; color: #fff; border: 1px solid #333; padding: 10px 15px; border-radius: 4px; font-size: 0.95rem; outline: none; transition: border-color 0.2s; cursor: pointer; }
    .calc-group select:focus { border-color: var(--gold); }
    .calc-results { background: #050505; border: 1px solid #222; border-radius: 6px; padding: 20px; display: flex; flex-direction: column; justify-content: center; }
    .result-item { display: flex; justify-content: space-between; align-items: center; padding: 12px 0; border-bottom: 1px dashed #333; }
    .result-item:last-child { border-bottom: none; }
    .result-label { font-weight: 600; color: #aaa; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; }
    .result-value { font-size: 1.5rem; font-weight: bold; font-family: var(--font-display); }
    .val-atk { color: #e74c3c; } 
    .val-def { color: #3498db; } 
    .val-poise { color: #f1c40f; }
</style>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 45vh; background: linear-gradient(180deg, rgba(212, 175, 55, 0.15) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1542461838-89c024508ec3?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.8);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/elden-ring/">Elden Ring</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Builds Database</span>
            </nav>
            <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">DATABASE: OPTIMIZATION</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem; font-family: var(--font-display);">The Master Builds</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd; max-width: 600px;">S-Tier Setups to Conquer the Lands Between and the Realm of Shadow.</p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <div class="mobile-toc-container">
            <button class="mobile-toc-btn" id="tocToggle">
                <span>Select a Build</span>
                <span id="tocIcon">▼</span>
            </button>
            <ul class="mobile-toc-list" id="tocList">
                <li><a href="#bleed">1. The Blood Lord (Dex/Arc)</a></li>
                <li><a href="#strength">2. The Colossal Bonk (Pure Str)</a></li>
                <li><a href="#magic">3. The Comet Sorcerer (Pure Int)</a></li>
                <li><a href="#paladin">4. The Golden Paladin (Str/Fth)</a></li>
                <li><a href="#lightning">5. The Lightning Dragoon (Dex/Fth)</a></li>
                <li><a href="#frost">6. The Frostbite Assassin (Dex/Int)</a></li>
                <li><a href="#calculator">7. Interactive AR Calculator</a></li>
                <li><a href="#universal">8. Universal Buffs & Flasks</a></li>
            </ul>
        </div>

        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Builds Catalog</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#bleed" style="color: var(--text-dim); transition: color 0.2s;">1. The Blood Lord</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#strength" style="color: var(--text-dim); transition: color 0.2s;">2. Colossal Bonk</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#magic" style="color: var(--text-dim); transition: color 0.2s;">3. Comet Sorcerer</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#paladin" style="color: var(--text-dim); transition: color 0.2s;">4. Golden Paladin</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#lightning" style="color: var(--text-dim); transition: color 0.2s;">5. Lightning Dragoon</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#frost" style="color: var(--text-dim); transition: color 0.2s;">6. Frostbite Assassin</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#calculator" style="color: var(--text-dim); transition: color 0.2s;">7. AR Calculator</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#universal" style="color: var(--text-dim); transition: color 0.2s;">8. Universal Buffs</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <section class="guide-section reveal" style="margin-bottom: 4rem;">
                <div class="callout info" style="background: rgba(212, 175, 55, 0.05); border-left: 4px solid var(--gold); padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: var(--gold); font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">How to use this guide</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">These builds are optimized for <strong>Level 150</strong> (the standard endgame and PvP meta). If you are lacking the exact stats, use <em>Larval Tears</em> at Rennala to respec your character. All builds assume you have access to the Wondrous Physick Flask and 4 Talisman slots.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="bleed" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #e74c3c; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">1. The Blood Lord (Dexterity / Arcane)</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Bleed (Hemorrhage) is arguably the most overpowered status effect in Elden Ring. This build focuses on rapid, successive attacks that trigger massive percentage-based damage explosions on bosses.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">Core Stats (Level 150)</h3>
                        <ul style="color: #ccc; padding-left: 1.2rem; line-height: 1.6; margin-bottom: 0;">
                            <li><strong>Vigor:</strong> 50</li>
                            <li><strong>Mind:</strong> 20</li>
                            <li><strong>Endurance:</strong> 25</li>
                            <li><strong>Dexterity:</strong> 45</li>
                            <li><strong>Arcane:</strong> 60 <span style="color:var(--gold); font-size:0.8rem;">(Increases Bleed buildup)</span></li>
                        </ul>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
                        <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">The Gear</h3>
                        <ul style="color: #ccc; padding-left: 1.2rem; line-height: 1.6; margin-bottom: 0;">
                            <li><strong>Weapon (R):</strong> Rivers of Blood or Eleonora's Poleblade.</li>
                            <li><strong>Weapon (L):</strong> Uchigatana (Blood Affinity) or Dragon Communion Seal.</li>
                            <li><strong>Armor:</strong> White Mask (Boosts damage by 10% when bleed occurs). Raptor's Black Feathers.</li>
                        </ul>
                    </div>
                </div>

                <div class="guide-accordion open reveal" id="acc-bleed" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-bleed')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #e74c3c; border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Talismans & Combat Loop</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 0.5rem;"><strong>Talismans:</strong></p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6; margin-bottom: 1rem;">
                                <li><em>Lord of Blood's Exultation:</em> +20% damage upon blood loss.</li>
                                <li><em>Rotten Winged Sword Insignia:</em> Massively boosts damage with successive attacks.</li>
                                <li><em>Shard of Alexander:</em> Boosts the "Corpse Piler" skill damage.</li>
                                <li><em>Millicent's Prosthesis:</em> +5 Dex and further boosts successive attacks.</li>
                            </ul>
                            <p style="color: #ccc; margin-bottom: 0;"><strong>How to play:</strong> Pre-buff with the <em>Flame, Grant Me Strength</em> incantation. Approach the boss and spam the <em>Corpse Piler</em> Ash of War (Rivers of Blood). The multiple slashes will instantly proc Bleed, triggering your White Mask and Lord of Blood's Exultation to give you a passive 30% damage boost, melting the boss in seconds.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="strength" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #8e44ad; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">2. The Colossal Bonk (Pure Strength)</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Forget magic. Forget status effects. This build relies on dual-wielding the largest weapons in the game to shatter boss poise in just two or three jump attacks.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #8e44ad;">
                        <h3 style="color: #8e44ad; font-family: var(--font-display); font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">Core Stats (Level 150)</h3>
                        <ul style="color: #ccc; padding-left: 1.2rem; line-height: 1.6; margin-bottom: 0;">
                            <li><strong>Vigor:</strong> 60 <span style="color:var(--text-dim); font-size:0.8rem;">(You will trade hits)</span></li>
                            <li><strong>Endurance:</strong> 40 <span style="color:var(--text-dim); font-size:0.8rem;">(For heavy armor)</span></li>
                            <li><strong>Strength:</strong> 80 <span style="color:var(--gold); font-size:0.8rem;">(Soft cap for damage)</span></li>
                            <li><strong>Dex/Int/Fth:</strong> Minimum for weapons</li>
                        </ul>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #8e44ad;">
                        <h3 style="color: #8e44ad; font-family: var(--font-display); font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">The Gear</h3>
                        <ul style="color: #ccc; padding-left: 1.2rem; line-height: 1.6; margin-bottom: 0;">
                            <li><strong>Weapon (R):</strong> Giant-Crusher (Heavy) with <em>Royal Knight's Resolve</em>.</li>
                            <li><strong>Weapon (L):</strong> Prelate's Inferno Crozier or Greatsword (Guts).</li>
                            <li><strong>Armor:</strong> Raptor's Black Feathers (+10% jump attack damage) & Bull-Goat Set.</li>
                        </ul>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-str" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-str')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #8e44ad; border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Talismans & Combat Loop</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 0.5rem;"><strong>Talismans:</strong></p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6; margin-bottom: 1rem;">
                                <li><em>Claw Talisman:</em> Boosts jump attacks by 15% (Essential).</li>
                                <li><em>Bull-Goat's Talisman:</em> Increases Poise so your slow attacks aren't interrupted.</li>
                                <li><em>Great-Jar's Arsenal:</em> Vastly increases equip load so you don't "fat roll".</li>
                                <li><em>Green Turtle Talisman:</em> Stamina recovery speed.</li>
                            </ul>
                            <p style="color: #ccc; margin-bottom: 0;"><strong>How to play:</strong> Activate <em>Royal Knight's Resolve</em> on your main weapon (boosts next attack by 80%). Drink a Physick with the Stonebarb Cracked Tear. Run at the boss and perform a Dual-Wield Jump Attack (L1 / LB). This single attack will easily deal 3,000+ damage and instantly break the posture of most enemies, allowing for a critical hit.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="magic" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #3498db; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">3. The Comet Sorcerer (Pure Intelligence)</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The infamous "One-Shot" build. By combining specific spells and flask tears, you can delete bosses from the map before they even take a step towards you.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
                        <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">Core Stats (Level 150)</h3>
                        <ul style="color: #ccc; padding-left: 1.2rem; line-height: 1.6; margin-bottom: 0;">
                            <li><strong>Vigor:</strong> 40</li>
                            <li><strong>Mind:</strong> 40 <span style="color:var(--text-dim); font-size:0.8rem;">(Max FP for holding the laser)</span></li>
                            <li><strong>Intelligence:</strong> 80 <span style="color:var(--gold); font-size:0.8rem;">(Hard cap for Sorceries)</span></li>
                            <li><strong>Dexterity:</strong> 20 <span style="color:var(--text-dim); font-size:0.8rem;">(Increases casting speed)</span></li>
                        </ul>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
                        <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">The Gear</h3>
                        <ul style="color: #ccc; padding-left: 1.2rem; line-height: 1.6; margin-bottom: 0;">
                            <li><strong>Weapon (R):</strong> Lusat's Glintstone Staff (Max Damage).</li>
                            <li><strong>Weapon (L):</strong> Jellyfish Shield (for defense) or Meteorite Staff (offhand boost).</li>
                            <li><strong>Armor:</strong> Azur's Glintstone Crown (+10% to Comet Azur).</li>
                        </ul>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-magic" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-magic')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #3498db; border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Spells & The "One-Shot" Combo</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 0.5rem;"><strong>Talismans & Flask:</strong></p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6; margin-bottom: 1rem;">
                                <li><em>Graven-Mass Talisman:</em> Greatly raises sorcery potency (8%).</li>
                                <li><em>Magic Scorpion Charm:</em> Raises magic damage by 12%.</li>
                                <li><em>Godfrey Icon:</em> Enhances charged spells.</li>
                                <li><strong>Physick Flask:</strong> <em>Cerulean Hidden Tear</em> (Eliminates all FP consumption for 15 seconds) + <em>Magic-Shrouding Cracked Tear</em> (+20% Magic damage).</li>
                            </ul>
                            <p style="color: #ccc; margin-bottom: 0;"><strong>How to play:</strong> Before entering the boss fog, cast <em>Terra Magica</em> on the floor. Drink your Physick Flask. Step through the fog, lock on, and hold down the cast button for <strong>Comet Azur</strong>. The Cerulean Hidden tear gives you infinite mana for 15 seconds, allowing the laser to fire continuously, obliterating bosses like Mohg or Commander Niall before they can even walk to you.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="paladin" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">4. The Golden Paladin (Strength / Faith)</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The most versatile and durable build for PvE. You have access to massive healing, powerful team buffs, and the best weapon art in the entire game: Taker's Flames.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
                        <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">Core Stats (Level 150)</h3>
                        <ul style="color: #ccc; padding-left: 1.2rem; line-height: 1.6; margin-bottom: 0;">
                            <li><strong>Vigor:</strong> 50</li>
                            <li><strong>Mind:</strong> 25</li>
                            <li><strong>Strength:</strong> 45</li>
                            <li><strong>Faith:</strong> 60 <span style="color:var(--gold); font-size:0.8rem;">(Damage scaling for Fire/Holy)</span></li>
                        </ul>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
                        <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">The Gear</h3>
                        <ul style="color: #ccc; padding-left: 1.2rem; line-height: 1.6; margin-bottom: 0;">
                            <li><strong>Weapon (R):</strong> Blasphemous Blade (Rykard's Boss Weapon).</li>
                            <li><strong>Weapon (L):</strong> Erdtree Seal or Godslayer's Seal.</li>
                            <li><strong>Armor:</strong> Haligtree Knight Set or Crucible Tree Set.</li>
                        </ul>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-paladin" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-paladin')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Buff Routine & Combat Loop</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 0.5rem;"><strong>Talismans & Buffs:</strong></p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6; margin-bottom: 1rem;">
                                <li><em>Shard of Alexander:</em> Boosts Taker's Flames by 15%.</li>
                                <li><em>Fire Scorpion Charm:</em> Increases Fire Damage.</li>
                                <li><em>Carian Filigreed Crest:</em> Lowers FP consumed by skills.</li>
                                <li><strong>Incantations:</strong> <em>Golden Vow</em> (+15% Damage, +10% Defense) and <em>Flame, Grant Me Strength</em> (+20% Physical and Fire damage).</li>
                            </ul>
                            <p style="color: #ccc; margin-bottom: 0;"><strong>How to play:</strong> Cast Golden Vow, then Flame Grant Me Strength. Two-hand the Blasphemous Blade. From a medium distance, spam the L2/LT weapon art (Taker's Flames). This fires a massive wave of magma that knocks down human-sized enemies (like Malenia) and <strong>heals you for 10% of your max HP + 150 flat HP</strong> per enemy hit. You are essentially immortal as long as you have FP.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="lightning" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #f1c40f; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">5. The Lightning Dragoon (Dexterity / Faith)</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Unleash the power of the Ancient Dragons. This build turns you into an artillery sniper that can one-shot tough enemies from across the map using red lightning, and melt giant bosses (like Placidusax) with AoE lightning strikes.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f1c40f;">
                        <h3 style="color: #f1c40f; font-family: var(--font-display); font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">Core Stats (Level 150)</h3>
                        <ul style="color: #ccc; padding-left: 1.2rem; line-height: 1.6; margin-bottom: 0;">
                            <li><strong>Vigor:</strong> 45</li>
                            <li><strong>Mind:</strong> 25</li>
                            <li><strong>Dexterity:</strong> 50 <span style="color:var(--text-dim); font-size:0.8rem;">(Spear scaling)</span></li>
                            <li><strong>Faith:</strong> 45 <span style="color:var(--gold); font-size:0.8rem;">(Incantation damage)</span></li>
                        </ul>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f1c40f;">
                        <h3 style="color: #f1c40f; font-family: var(--font-display); font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">The Gear</h3>
                        <ul style="color: #ccc; padding-left: 1.2rem; line-height: 1.6; margin-bottom: 0;">
                            <li><strong>Weapon (R):</strong> Bolt of Gransax (Legendary Spear).</li>
                            <li><strong>Weapon (L):</strong> Gravel Stone Seal (Boosts Dragon Cult incantations by 15%).</li>
                            <li><strong>Armor:</strong> Leyndell Knight Set or Death Knight Set (DLC).</li>
                        </ul>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-lightning" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-lightning')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #f1c40f; border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Talismans & Combat Loop</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 0.5rem;"><strong>Talismans:</strong></p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6; margin-bottom: 1rem;">
                                <li><em>Lightning Scorpion Charm:</em> +12% Lightning Damage.</li>
                                <li><em>Godfrey Icon:</em> Enhances charged spells and skills (+15%).</li>
                                <li><em>Flock's Canvas Talisman:</em> Raises potency of incantations (+8%).</li>
                                <li><em>Shard of Alexander:</em> Boosts skill damage (+15%).</li>
                            </ul>
                            <p style="color: #ccc; margin-bottom: 0;"><strong>How to play:</strong> For clearing levels, fully charge the Ash of War on the Bolt of Gransax. It acts like a sniper rifle, dealing 2,500+ damage from a massive distance. For giant bosses (like Dragons or Elden Beast), get underneath them and cast the <em>Ancient Dragons' Lightning Strike</em> incantation. The lightning pillars will hit multiple times, absolutely shredding their health bar in seconds.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="frost" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #1abc9c; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">6. The Frostbite Assassin (Dexterity / Intelligence)</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">An incredibly aggressive melee spellblade build. Frostbite not only deals a chunk of damage when it procs, but it also lowers the enemy's damage absorption by 20%, making your follow-up attacks devastating.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #1abc9c;">
                        <h3 style="color: #1abc9c; font-family: var(--font-display); font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">Core Stats (Level 150)</h3>
                        <ul style="color: #ccc; padding-left: 1.2rem; line-height: 1.6; margin-bottom: 0;">
                            <li><strong>Vigor:</strong> 50</li>
                            <li><strong>Endurance:</strong> 25</li>
                            <li><strong>Dexterity:</strong> 40 <span style="color:var(--text-dim); font-size:0.8rem;">(Casting speed & Katana scaling)</span></li>
                            <li><strong>Intelligence:</strong> 60 <span style="color:var(--gold); font-size:0.8rem;">(Frost & Magic damage)</span></li>
                        </ul>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #1abc9c;">
                        <h3 style="color: #1abc9c; font-family: var(--font-display); font-size: 1.2rem; margin-top: 0; text-transform: uppercase;">The Gear</h3>
                        <ul style="color: #ccc; padding-left: 1.2rem; line-height: 1.6; margin-bottom: 0;">
                            <li><strong>Weapon (R):</strong> Moonveil Katana or Dark Moon Greatsword.</li>
                            <li><strong>Weapon (L):</strong> Cold Uchigatana / Cold Nagakiba.</li>
                            <li><strong>Armor:</strong> Snow Witch Hat (Boosts cold sorceries) or Spellblade Set (Boosts magic weapon skills).</li>
                        </ul>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-frost" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-frost')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #1abc9c; border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">Talismans & Combat Loop</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 0.5rem;"><strong>Talismans:</strong></p>
                            <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6; margin-bottom: 1rem;">
                                <li><em>Magic Scorpion Charm:</em> Raises magic damage by 12%.</li>
                                <li><em>Rotten Winged Sword Insignia:</em> Great for dual katana L1 spam.</li>
                                <li><em>Claw Talisman:</em> If using dual-wield jump attacks.</li>
                                <li><em>Dragoncrest Greatshield:</em> To compensate for the Scorpion Charm's defense penalty.</li>
                            </ul>
                            <p style="color: #ccc; margin-bottom: 0;"><strong>How to play:</strong> Dual-wield your katanas. Use L1 (LB) jump attacks and regular combos to instantly trigger Frostbite. Once the enemy is frostbitten (and taking 20% more damage), switch to two-handing your Moonveil and spam the <em>Transient Moonlight</em> skill for massive posture damage and critical hits.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="calculator" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">7. Professional Build Planner & AR Calculator</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Advanced simulator with over 50 gear variables. Calculate your final damage (AR), damage absorption, and stance stability</p>

                <div class="build-calculator">
                    <div class="calc-grid">
                        <div class="calc-selectors">
                            <div class="calc-group">
                                <label>⚔️ Weapons & Attributes</label>
                                <select id="calc-weapon">
                                    <optgroup label="Katanas & Curves">
                                        <option value="w_moonveil">Moonveil +10 (Int/Dex)</option>
                                        <option value="w_rivers">Rivers of Blood +10 (Arc/Dex)</option>
                                        <option value="w_nagakiba">Nagakiba +25 (Destreza)</option>
                                        <option value="w_uchigatana">Uchigatana +25 (Frío/Hielo)</option>
                                        <option value="w_fang">Bloodhound's Fang +10 (Calidad)</option>
                                    </optgroup>
                                    <optgroup label="Heavy & Colossal">
                                        <option value="w_giant">Giant-Crusher +25 (Fuerza)</option>
                                        <option value="w_blasphemous">Blasphemous Blade +10 (Fe/Str)</option>
                                        <option value="w_starscourge">Starscourge Greatswords +10</option>
                                        <option value="w_godslayer">Godslayer's Greatsword +10</option>
                                        <option value="w_gargoyle">Gargoyle's Twinblade +25</option>
                                        <option value="w_malenia">Hand of Malenia +10</option>
                                    </optgroup>
                                    <optgroup label="Specials & DLC">
                                        <option value="w_gransax">Bolt of Gransax +10 (Rayo)</option>
                                        <option value="w_backhand">Backhand Blades +25 (DLC)</option>
                                        <option value="w_milos">Sword of Milos +10 (Hemorragia)</option>
                                        <option value="w_mohg">Mohgwyn's Sacred Spear (Fuego/Arc)</option>
                                        <option value="w_relic">Sacred Relic Sword (Sagrado)</option>
                                        <option value="w_antspur">Antspur Rapier (Putrefacción)</option>
                                        <option value="w_fireknight">Fire Knight's Shortsword (DLC)</option>
                                        <option value="w_metyr">Staff of the Great Beyond (Magia)</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="calc-group">
                                <label>🛡️ Offensive Talisman (Slot 1)</label>
                                <select id="calc-tal1">
                                    <option value="none">-- Empty --</option>
                                    <option value="t_alexander">Shard of Alexander (+15% Skill)</option>
                                    <option value="t_blood">Lord of Blood's Exultation (+20% ATK)</option>
                                    <option value="t_millicent">Millicent's Prosthesis (+11% Multi-hit)</option>
                                    <option value="t_ritual">Ritual Sword Talisman (+10% ATK)</option>
                                    <option value="t_godfrey">Godfrey Icon (+15% Charged)</option>
                                    <option value="t_graven">Graven-Mass Talisman (+8% Sorcery)</option>
                                    <option value="t_flock">Flock's Canvas (+8% Incantation)</option>
                                    <option value="t_claw">Claw Talisman (+15% Jump ATK)</option>
                                    <option value="t_rotten">Rotten Winged Sword (+13% Combo)</option>
                                    <option value="t_magic_scorpion">Magic Scorpion Charm (+12% Mag)</option>
                                </select>
                            </div>

                            <div class="calc-group">
                                <label>🛡️ Defensive Talisman (Slot 2)</label>
                                <select id="calc-tal2">
                                    <option value="none">-- Empty --</option>
                                    <option value="t_dragoncrest">Dragoncrest Greatshield (+20% Phys Def)</option>
                                    <option value="t_haligdrake">Haligdrake +2 (+20% Holy Def)</option>
                                    <option value="t_bullgoat">Bull-Goat's Talisman (+33% Poise)</option>
                                    <option value="t_turtle">Two-Headed Turtle (Stamina Regen)</option>
                                    <option value="t_crimson">Crimson Amber +2 (+10% HP)</option>
                                    <option value="t_greatjar">Great-Jar's Arsenal (+19% Load)</option>
                                    <option value="t_pearldrake">Pearldrake +3 (+11% Elemental Def)</option>
                                    <option value="t_branch">Blue-Feathered Branch (+50% Def at Low HP)</option>
                                    <option value="t_cameo">Taker's Cameo (HP on Kill)</option>
                                    <option value="t_radagon">Radagon Icon (Casting Speed)</option>
                                </select>
                            </div>

                            <div class="calc-group">
                                <label>🧪 Consumables & Healing Potions</label>
                                <select id="calc-item">
                                    <option value="none">-- No Consumables --</option>
                                    <optgroup label="Food & Buffs">
                                        <option value="i_flesh">Exalted Flesh (+20% Physical)</option>
                                        <option value="i_crab">Cooked Crab (+20% Physical Def)</option>
                                        <option value="i_turtle">Turtle Neck (Stamina)</option>
                                        <option value="i_liver">Dry Liver (Magic Defense)</option>
                                        <option value="i_prawn">Cooked Prawn (+15% Physical Def)</option>
                                    </optgroup>
                                    <optgroup label="Physick Tears">
                                        <option value="i_magic_tear">Magic Tear (+20% Magic)</option>
                                        <option value="i_fire_tear">Fire Tear (+20% Fire)</option>
                                        <option value="i_holy_tear">Holy Tear (+20% Holy)</option>
                                        <option value="i_lightning_tear">Lightning Tear (+20% Light)</option>
                                        <option value="i_stonebarb">Stance Tear (+30% Stance)</option>
                                        <option value="i_bubble">Bubble Tear (90% Shield)</option>
                                        <option value="i_thorny">Thorny Tear (+Successive ATK)</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="calc-results">
                            <h4 style="margin-top: 0; color: var(--gold); text-align: center; border-bottom: 1px solid #333; padding-bottom: 10px; font-family: var(--font-display);">Combat Stats Summary</h4>
                            <div class="result-item">
                                <span class="result-label">Damage Output (AR)</span>
                                <span class="result-value val-atk" id="res-atk">--</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">Physical Negation</span>
                                <span class="result-value val-def" id="res-def">--</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">Poise / Stamina</span>
                                <span class="result-value val-poise" id="res-poise">--</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">Boss Threat Level</span>
                                <span class="result-value val-poise" id="res-crit" style="color: #aaa;">Normal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="universal" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">8. Universal Buffs & Flasks</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Regardless of what build you are running, there are certain items and buffs that fit into almost every setup to maximize your survivability and damage.</p>

                <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 2rem;">
                    <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">The "Golden Vow" Standard</h4>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 1rem;"><strong>Golden Vow</strong> is the best buff in the game. It increases all damage dealt by 15% and reduces all damage taken by 10% for 80 seconds. It stacks with almost everything.</p>
                    <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6; margin-bottom: 0;">
                        <li><strong>For Faith Builds:</strong> Use the Incantation version (requires 25 Faith).</li>
                        <li><strong>For Melee/Int Builds:</strong> Put the <em>Ash of War: Golden Vow</em> on a lightweight dagger (like the standard Dagger). Equip it in your offhand, use the skill to get the buff, and then switch back to your main weapons.</li>
                    </ul>
                </div>

                <div class="reveal" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem;">
                    <h4 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">Best Wondrous Physick Combinations</h4>
                    <ul style="list-style: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6; margin-bottom: 0;">
                        <li style="margin-bottom: 0.5rem;"><strong>The Boss Melter:</strong> <em>[Your Element]-Shrouding Cracked Tear</em> (+20% element dmg) + <em>Thorny Cracked Tear</em> (Boosts successive attacks). Great for Bleed and Fast weapons.</li>
                        <li style="margin-bottom: 0.5rem;"><strong>The Stance Breaker:</strong> <em>Stonebarb Cracked Tear</em> (+30% stance damage) + <em>Spiked Cracked Tear</em> (Boosts charged attacks). Perfect for Strength and Colossal builds.</li>
                        <li><strong>The Defensive Tank:</strong> <em>Opaline Hardtear</em> (Boosts all damage negation by 15%) + <em>Crimsonburst Crystal Tear</em> (Slowly restores HP over time). Excellent for learning new boss movesets.</li>
                    </ul>
                </div>
            </section>

            <div class="chapter-nav" style="display: flex; justify-content: space-between; align-items: center; margin-top: 4rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1);">
                <a href="/elden-ring/index.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Return to Main Hub</a>
                <a href="/elden-ring/weapons.php" class="btn btn-gold" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Next: Weapons Database →</a>
            </div>

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

// LÓGICA DE LA CALCULADORA DE AR DE ELDEN RING
const ER_ITEMS = {
    // Armas (Base AR estimado a nivel 150)
    base: { ar: 50 },
    w_moonveil: { ar: 650 },
    w_rivers: { ar: 620 },
    w_giant: { ar: 850 },
    w_blasphemous: { ar: 780 },
    w_gransax: { ar: 700 },
    w_darkmoon: { ar: 790 },
    
    // Talismán 1 (Multiplicadores de Daño)
    t_alexander: { dmg_mult: 1.15, def_mult: 1.0 },
    t_blood: { dmg_mult: 1.20, def_mult: 1.0 },
    t_claw: { dmg_mult: 1.15, def_mult: 1.0 },
    t_scorpion: { dmg_mult: 1.12, def_mult: 0.90 }, // Baja la defensa
    
    // Bufos Activos
    b_vow: { dmg_mult: 1.15, def_bonus: 10 },
    b_flame: { dmg_mult: 1.20, def_bonus: 0 },
    b_both: { dmg_mult: 1.35, def_bonus: 10 }, // Simplificado
    b_resolve: { dmg_mult: 1.80, def_bonus: 0 },

    // Talismán 2 (Defensa y Poise)
    t_dragoncrest: { def_bonus: 20, poise_mult: 1.0 },
    t_haligdrake: { def_bonus: 20, poise_mult: 1.0 },
    t_bullgoat: { def_bonus: 0, poise_mult: 1.33 }
};

function calculateERBuild() {
    const weaponId = document.getElementById('calc-weapon').value;
    const tal1Id = document.getElementById('calc-tal1').value;
    const buffId = document.getElementById('calc-buff').value;
    const tal2Id = document.getElementById('calc-tal2').value;

    let baseAR = ER_ITEMS[weaponId] ? ER_ITEMS[weaponId].ar : 50;
    
    let dmgMultiplier = 1.0;
    let defMultiplier = 1.0; // Para el penalizador del escorpión
    let defFlatBonus = 20; // Defensa base asumida por armadura media
    let basePoise = 50; // Poise base asumido
    let poiseMultiplier = 1.0;

    // Aplicar Talismán 1 (Ofensivo)
    if (tal1Id !== 'none' && ER_ITEMS[tal1Id]) { 
        dmgMultiplier *= ER_ITEMS[tal1Id].dmg_mult; 
        if(ER_ITEMS[tal1Id].def_mult) defMultiplier *= ER_ITEMS[tal1Id].def_mult;
    }
    
    // Aplicar Bufos
    if (buffId !== 'none' && ER_ITEMS[buffId]) { 
        dmgMultiplier *= ER_ITEMS[buffId].dmg_mult; 
        defFlatBonus += ER_ITEMS[buffId].def_bonus;
    }

    // Aplicar Talismán 2 (Defensivo)
    if (tal2Id !== 'none' && ER_ITEMS[tal2Id]) { 
        defFlatBonus += ER_ITEMS[tal2Id].def_bonus;
        if(ER_ITEMS[tal2Id].poise_mult) poiseMultiplier *= ER_ITEMS[tal2Id].poise_mult;
    }

    // Cálculos finales
    let finalAR = Math.round(baseAR * dmgMultiplier);
    let finalDef = Math.round(defFlatBonus * defMultiplier);
    let finalPoise = Math.round(basePoise * poiseMultiplier);

    // Actualizar UI
    document.getElementById('res-atk').innerText = finalAR;
    document.getElementById('res-def').innerText = finalDef + '%';
    document.getElementById('res-poise').innerText = finalPoise;
}

// Listeners
document.getElementById('calc-weapon').addEventListener('change', calculateERBuild);
document.getElementById('calc-tal1').addEventListener('change', calculateERBuild);
document.getElementById('calc-buff').addEventListener('change', calculateERBuild);
document.getElementById('calc-tal2').addEventListener('change', calculateERBuild);

// Init
calculateERBuild();
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>