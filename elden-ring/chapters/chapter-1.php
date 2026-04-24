<?php 
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];
$pageTitle = "Chapter 1: Limgrave & Stormveil | Elden Ring Walkthrough";
$pageDesc = "Step-by-step walkthrough for Limgrave and Stormveil Castle. Find all Graces, defeat Margit, and conquer Godrick the Grafted.";
$bodyClass = "theme-elden-ring";

// Cargamos el header (ajustamos la ruta porque ahora estamos dentro de la carpeta 'chapters')
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 40vh; background: linear-gradient(180deg, rgba(212, 175, 55, 0.15) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1605806616949-1e87b487cb2a?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.6);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/elden-ring/index.php">Elden Ring</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Chapter 1</span>
            </nav>

            <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: PART 1</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 4vw, 4rem); color: var(--gold); line-height: 1.1; text-shadow: 0 4px 20px rgba(0,0,0,0.8); margin-bottom: 1rem;">LIMGRAVE & STORMVEIL</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); max-width: 600px; color: #ddd; font-size: 1.1rem; line-height: 1.6;">
                Your journey begins. We will secure your spectral steed, gather essential NPC quests, defeat the first major roadblock, Margit, and claim your first Great Rune from the lord of Stormveil.
            </p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Chapter Progress</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#first-steps" style="color: var(--text-dim); transition: color 0.2s;">1. The First Steps</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#church-elleh" style="color: var(--text-dim); transition: color 0.2s;">2. Church of Elleh</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#gatefront" style="color: var(--text-dim); transition: color 0.2s;">3. Map & Whetstone</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#limgrave-pitstops" style="color: var(--text-dim); transition: color 0.2s;">4. Crucial Pitstops (NPCs)</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#margit" style="color: var(--text-dim); transition: color 0.2s;">5. Boss: Margit the Fell</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#stormveil" style="color: var(--text-dim); transition: color 0.2s;">6. Stormveil Secrets</a></li>
                <li class="guide-toc-item"><a href="#godrick" style="color: var(--text-dim); transition: color 0.2s;">7. Boss: Godrick</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <div class="mobile-toc-container">
                <button class="mobile-toc-btn" id="tocToggle">
                    <span style="font-family: var(--font-display); letter-spacing: 0.15em;">CHAPTER PROGRESS</span>
                    <span class="toc-icon" id="tocIcon">▼</span>
                </button>
               <ul class="mobile-toc-list" id="tocList">
                    <li><a href="#first-steps">1. The First Steps</a></li>
                    <li><a href="#church-elleh">2. Church of Elleh</a></li>
                    <li><a href="#gatefront">3. Map & Whetstone</a></li>
                    <li><a href="#limgrave-pitstops">4. Crucial Pitstops (NPCs)</a></li>
                    <li><a href="#margit">5. Boss: Margit</a></li>
                    <li><a href="#stormveil">6. Stormveil Secrets</a></li>
                    <li><a href="#godrick">7. Boss: Godrick</a></li>
                </ul>
            </div>

            <section class="guide-section" id="first-steps" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">1. The First Steps</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    As you emerge from the tutorial cave, you will see a Site of Grace and an NPC named White Mask Varré. Talk to him until he repeats his dialogue to start his questline. The glowing golden trails from the Sites of Grace will always point you toward the main story objectives.
                </p>
                <div class="callout" style="background: rgba(231, 76, 60, 0.1); border-left: 4px solid #e74c3c; padding: 1.5rem; border-radius: 4px; margin-bottom: 2rem;">
                    <strong style="color: #e74c3c; font-size: 1.2rem; display: block; margin-bottom: 0.5rem;">⚠️ DANGER: The Tree Sentinel</strong>
                    <p style="color: #ccc; margin: 0;">Do not engage the giant golden knight riding the horse right in front of you. Sneak past him by going left through the bushes. You can return when you are Level 25+.</p>
                </div>
            </section>

            <section class="guide-section" id="church-elleh" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">2. Church of Elleh</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    Follow the path north, avoiding the Tree Sentinel, to reach the ruins of a church. This is your first major hub.
                </p>
                <ul class="guide-checklist" style="margin-top: 1.5rem;">
                    <li>
                        <label><input type="checkbox"> <span style="font-size: 1.05rem;">Touch the Site of Grace.</span></label>
                    </li>
                    <li>
                        <label><input type="checkbox"> <span style="font-size: 1.05rem;">Talk to Merchant Kalé and buy the <strong>Crafting Kit</strong> (300 Runes) and a Torch.</span></label>
                    </li>
                    <li>
                        <label><input type="checkbox"> <span style="font-size: 1.05rem;">Use the Anvil next to Kalé to upgrade your weapon to +1 or +2 if you have found Smithing Stones.</span></label>
                    </li>
                </ul>
            </section>

            <section class="guide-section" id="gatefront" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">3. Gatefront, Map & Whetstone Knife</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    Follow the road north from the Church of Elleh through the woods until you reach a large encampment of soldiers (Gatefront Ruins). This camp contains three critical items you cannot miss.
                </p>
                
                <ul class="guide-checklist" style="margin-top: 1.5rem; margin-bottom: 2rem;">
                    <li>
                        <label><input type="checkbox"> <span style="font-size: 1.05rem;"><strong>Map Fragment (Limgrave, West):</strong> Grab the glowing purple item at the base of the large stone pillar in the center of the camp to reveal your map.</span></label>
                    </li>
                    <li>
                        <label><input type="checkbox"> <span style="font-size: 1.05rem;"><strong>Whetstone Knife:</strong> Find the stairs leading underground within the camp. Open the chest to get this item, which allows you to apply "Ashes of War" to your weapons at any Site of Grace.</span></label>
                    </li>
                </ul>

                <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-left: 4px solid var(--gold); margin-bottom: 1.5rem;">
                    <h4 style="color: var(--gold); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top:0;">🐎 Meeting Melina & Getting Torrent</h4>
                    <p style="color: #ccc; margin: 0;">Sneak around the camp to the large gate on the north side. Touch the <strong>Gatefront Site of Grace</strong> and rest. Melina will appear and give you the <strong>Spectral Steed Whistle</strong>. You can now summon Torrent, your horse.</p>
                </div>
                
                <div class="callout info" style="border-left: 4px solid #3498db; background: rgba(52, 152, 219, 0.1); margin-bottom: 2rem; padding: 1.5rem;">
                    <span class="callout-label" style="color: #3498db; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;">🔔 Crucial Backtrack: The Spirit Bell</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Immediately after getting Torrent, fast-travel back to the Church of Elleh at night. You will meet the witch Renna sitting on the wall. Speak to her to receive the <strong>Spirit Calling Bell</strong> and the Lone Wolf Ashes for free.</p>
                </div>
            </section>

            <section class="guide-section" id="limgrave-pitstops" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">4. Crucial Limgrave Pitstops (100% Route)</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    Before charging up the hill to face Margit, ride Torrent around Limgrave to collect these vital items and start the best NPC questlines:
                </p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #9b59b6;">
                        <h4 style="color: #fff; font-family: var(--font-display); letter-spacing: 1px; font-size: 1.2rem; margin-top:0;">1. Third Church of Marika</h4>
                        <p style="color: #ccc; font-size: 0.95rem;">Ride far to the East of Limgrave. Here you will find the <strong>Flask of Wondrous Physick</strong> (a customizable potion) and a Sacred Tear.</p>
                    </div>
                    
                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #e67e22;">
                        <h4 style="color: #fff; font-family: var(--font-display); letter-spacing: 1px; font-size: 1.2rem; margin-top:0;">2. Murkwater Cave (Patches)</h4>
                        <p style="color: #ccc; font-size: 0.95rem;">Located in the central river. Fight the boss (Patches), but <strong>stop attacking when he surrenders</strong>. He becomes a merchant who sells <em>Margit's Shackle</em> (5,000 runes).</p>
                    </div>
                    
                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #f1c40f;">
                        <h4 style="color: #fff; font-family: var(--font-display); letter-spacing: 1px; font-size: 1.2rem; margin-top:0;">3. Stormhill Shack (Roderika)</h4>
                        <p style="color: #ccc; font-size: 0.95rem;">Just up the road toward the castle. Talk to the woman in red three times to get the <strong>Spirit Jellyfish Ashes</strong>. Grab the Golden Seed outside.</p>
                    </div>

                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #3498db;">
                        <h4 style="color: #fff; font-family: var(--font-display); letter-spacing: 1px; font-size: 1.2rem; margin-top:0;">4. Mistwood Ruins (Blaidd)</h4>
                        <p style="color: #ccc; font-size: 0.95rem;">Enter the eastern woods and listen for howling. Return to Merchant Kalé and ask about the howling to get the "Snap" gesture. Go back to the ruins, snap, and meet Blaidd the Half-Wolf.</p>
                    </div>

                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #2ecc71;">
                        <h4 style="color: #fff; font-family: var(--font-display); letter-spacing: 1px; font-size: 1.2rem; margin-top:0;">5. Waypoint Ruins (Sorceress Sellen)</h4>
                        <p style="color: #ccc; font-size: 0.95rem;">Defeat the Mad Pumpkin Head boss in the basement to unlock Sellen. She is the most important NPC for Intelligence/Mage builds, selling powerful early spells.</p>
                    </div>

                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid var(--gold);">
                        <h4 style="color: #fff; font-family: var(--font-display); letter-spacing: 1px; font-size: 1.2rem; margin-top:0;">6. Fort Haight (Dectus Medallion)</h4>
                        <p style="color: #ccc; font-size: 0.95rem;">Clear this fort in the far southeast. Climb the tallest tower and open the chest to find the <strong>Dectus Medallion (Left)</strong>, crucial for reaching Altus Plateau later.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section" id="margit" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">5. Boss: Margit, the Fell Omen</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    Ride your horse up Stormhill. Before the castle entrance, you will face the first major skill-check of the game. Recommended Level: 20-25.
                </p>
                <div class="guide-table-wrap">
                    <table class="guide-table" style="background: var(--dark-2);">
                        <thead>
                            <tr style="border-bottom: 2px solid var(--gold);">
                                <th style="color: var(--gold);">Weaknesses</th>
                                <th style="color: var(--gold);">Strategy</th>
                                <th style="color: var(--gold);">Reward</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bleed, Poison, Scarlet Rot</td>
                                <td>Summon Sorcerer Rogier (gold sign outside door). Use Lone Wolf Ashes or Jellyfish. Use <strong>Margit's Shackle</strong> (bought from Patches) to pin him to the ground twice during phase 1 for free damage.</td>
                                <td>12,000 Runes<br>Talisman Pouch (+1 Talisman Slot)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="guide-section" id="stormveil" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">6. Stormveil Castle Secrets</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    This is your first Legacy Dungeon. It is a massive, multi-layered labyrinth. At the main gate, Gostoc will advise you to take the side path. <strong>Take the side path.</strong> The main gate is heavily fortified and means instant death.
                </p>

                <div class="callout info" style="border-left: 4px solid #e74c3c; background: rgba(231, 76, 60, 0.1); margin-bottom: 2rem; padding: 1.5rem;">
                    <span class="callout-label" style="color: #e74c3c; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;">🕵️‍♂️ Secret: Gostoc The Thief</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Notice you are losing 30% of your Runes every time you die in Stormveil? Gostoc is stalking you and stealing them. Furthermore, he locks you in the dark room with the Banished Knight. You can kill him to get his Bell Bearing, or let him live to finish Nepheli's questline later.</p>
                </div>

                <ul style="list-style-type: square; padding-left: 1.5rem; color: #ccc; line-height: 1.7; margin-bottom: 2rem;">
                    <li><strong>Iron Whetblade:</strong> Found behind an Imp Statue seal near the grafted scion courtyard. Essential for adding Heavy, Keen, or Quality affinities to weapons.</li>
                    <li><strong>Sorcerer Rogier:</strong> Found resting in a small chapel inside the castle. Talk to him to buy early-game ashes of war (Glintstone Phalanx).</li>
                    <li><strong style="color: var(--gold);">Nepheli Loux:</strong> Just before the boss arena, check the small room in the courtyard guarded by a giant troll. Talk to Nepheli to summon her for the Godrick fight.</li>
                </ul>

                <div class="guide-accordion" id="acc-basement" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-basement')" style="width: 100%; padding: 1.2rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #9b59b6; border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px;">⚠️ The Basement Secret (Ulcerated Tree Spirit)</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 1rem;">From the Liftside Chamber Grace, head out to the courtyard, drop down the ledge into the abyss, and follow the bloody path. You will fight a terrifying Ulcerated Tree Spirit.</p>
                            <p style="color: #ccc; margin-bottom: 0;">Beyond it lies a massive, deformed face (Godwyn's corpse). Pick up the <strong>Prince of Death's Pustule</strong> talisman here and touch the bloodstain to advance Rogier and Fia's questlines later.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section" id="godrick" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">7. Boss: Godrick the Grafted</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    The lord of Stormveil Castle. Summon Nepheli Loux (if you spoke to her) and use your Spirit Ashes right away to split his aggro. Recommended Level: 30+.
                </p>
                
                <div style="background: rgba(255,255,255,0.03); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--gold);">
                    <h4 style="color: var(--gold); font-size: 1.2rem; margin-bottom: 0.5rem; margin-top:0;">⚔️ Phase 1 (Melee)</h4>
                    <p style="color: #ccc; margin-bottom: 1rem;">He uses slow, telegraphed axe swings. When he creates a whirlwind around himself, run away. If you get caught, roll INTO his rolling attack, not away from it. Let Nepheli draw aggro while you attack his back.</p>
                    
                    <h4 style="color: var(--gold); font-size: 1.2rem; margin-bottom: 0.5rem;">🔥 Phase 2 (Dragon Fire)</h4>
                    <p style="color: #ccc; margin: 0;">At 50% HP, he grafts a dragon head onto his arm. When he breathes fire sweeping from left to right, sprint to your right and roll through the fire to get behind him for free hits. Stay close to his legs to avoid most fire attacks.</p>
                </div>
                
                <div style="background: rgba(46, 204, 113, 0.1); border-left: 4px solid #2ecc71; padding: 1.5rem; border-radius: 4px; margin-top: 1.5rem;">
                    <p style="color: #2ecc71; font-weight: bold; margin: 0;">🏆 Reward: Godrick's Great Rune & Remembrance of the Grafted.</p>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0; font-size: 0.9rem;">(Do not consume the Remembrance! Trade it at the Roundtable Hold with Enia to get the Axe of Godrick or the Grafted Dragon weapon).</p>
                </div>
            </section>

            <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 3rem; border-top: 1px solid rgba(255,255,255,0.05); margin-top: 4rem;">
                <a href="/elden-ring/chapters/prologue.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Prologue</a>
                <a href="/elden-ring/chapters/chapter-2.php" class="btn btn-gold" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Next: Chapter 2 (Liurnia) →</a>
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

        tocList.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                tocList.classList.remove('show');
                tocIcon.textContent = '▼';
            });
        });
    }
});

// Función para el acordeón
function toggleAcc(id) {
    const acc = document.getElementById(id);
    if (acc) {
        acc.classList.toggle('open');
    }
}
</script>

<?php
$fxTheme = 'grace'; 

// 2. Cargamos el archivo de efectos (que ya trae el botón de encendido/apagado)
include $_SERVER['DOCUMENT_ROOT'] . '/elden-ring/theme-fx.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>