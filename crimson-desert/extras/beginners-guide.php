<?php 
$pageTitle = "Beginner's Guide & Early Tips | Crimson Desert";
$pageDesc = "Start your journey in Pywel the right way. Essential tips, early game weapons, and common mistakes to avoid in Crimson Desert.";

// Aseguramos que la ruta al header sea correcta desde la carpeta /extras/
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

<style>
    .guide-hero-title, .guide-section-title, .guide-card-item h3, .guide-table th, .guide-section h4 {
        font-family: var(--font-display) !important;
        letter-spacing: 1px;
        text-transform: uppercase;
    }
    .guide-toc-title, .guide-toc-list a {
        font-family: var(--font-ui) !important;
    }
    .mobile-toc-list a {
        font-family: var(--font-ui) !important;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .guide-section p, .guide-section li {
        font-family: var(--font-body);
    }
</style>

<header class="guide-hero" style="min-height: 45vh; background: linear-gradient(180deg, rgba(10,10,10,0.3) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1542359649-31e03cd4d909?w=1920&q=80') center/cover;">
    <div class="guide-hero-inner" style="text-align: center; padding: 0 2rem; position: relative; z-index: 2;">
        <span class="label" style="color: var(--gold); letter-spacing: 0.5em; display: block; margin-bottom: 1rem;">SURVIVAL 101</span>
        <h1 class="guide-hero-title" style="font-size: clamp(3rem, 5vw, 4.5rem); color: var(--text); line-height: 1.1; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">BEGINNER'S GUIDE</h1>
        <p class="guide-hero-subtitle" style="font-family: var(--font-ui); max-width: 700px; margin: 1.5rem auto 0; color: #ddd; text-shadow: 0 2px 10px rgba(0,0,0,0.8); font-size: 1.1rem;">
            10 essential tips for your first hours in Pywel, common mistakes to avoid, and the best early-game weapons to grab before Chapter 2.
        </p>
    </div>
</header>

<div class="guide-layout main-container" style="max-width: var(--max-w); margin: 0 auto; display: grid; grid-template-columns: 250px 1fr; gap: 4rem; padding: 4rem 2rem;">
    
    <aside class="guide-toc" aria-label="Table of contents" style="position: sticky; top: 100px; align-self: start;">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Contents</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#golden-rules" style="color: var(--text-dim); transition: color 0.2s;">1. The Golden Rules</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#combat-habits" style="color: var(--text-dim); transition: color 0.2s;">2. Combat Habits</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#camp-management" style="color: var(--text-dim); transition: color 0.2s;">3. Camp Management</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#early-gear" style="color: var(--text-dim); transition: color 0.2s;">4. Best Early Gear</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#fast-travel" style="color: var(--text-dim); transition: color 0.2s;">5. Fast Travel</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#inventory" style="color: var(--text-dim); transition: color 0.2s;">6. Inventory Weight</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#leveling" style="color: var(--text-dim); transition: color 0.2s;">7. First 5 Skill Points</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#night-cycle" style="color: var(--text-dim); transition: color 0.2s;">8. Survive the Night</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#economy" style="color: var(--text-dim); transition: color 0.2s;">9. Gold Management</a></li>
            <li class="guide-toc-item"><a href="#mistakes" style="color: var(--text-dim); transition: color 0.2s;">10. Mistakes to Avoid</a></li>
        </ul>
    </aside>

    <main class="guide-content">

        <div class="mobile-toc-container">
            <button class="mobile-toc-btn" id="tocToggle">
                <span style="font-family: var(--font-display); letter-spacing: 0.15em;">CONTENTS</span>
                <span class="toc-icon" id="tocIcon">▼</span>
            </button>
           <ul class="mobile-toc-list" id="tocList">
                <li><a href="#golden-rules">1. The Golden Rules</a></li>
                <li><a href="#combat-habits">2. Combat Habits</a></li>
                <li><a href="#camp-management">3. Camp Management</a></li>
                <li><a href="#early-gear">4. Best Early Gear</a></li>
                <li><a href="#fast-travel">5. Fast Travel</a></li>
                <li><a href="#inventory">6. Inventory Weight</a></li>
                <li><a href="#leveling">7. First 5 Skill Points</a></li>
                <li><a href="#night-cycle">8. Survive the Night</a></li>
			   <li><a href="#economy">9. Gold Management</a></li>
                <li><a href="#mistakes">10. Mistakes to Avoid</a></li>
            </ul>
        </div>

        <section class="guide-section reveal" id="golden-rules" style="margin-bottom: 4rem;">
            <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">1. The Golden Rules of Pywel</h2>
            <p class="guide-section-intro" style="color: var(--text-dim); font-size: 1.1rem; margin-bottom: 2rem;">Crimson Desert is massive. If you rush the main story, you will be severely under-leveled for the Chapter 2 boss. Follow these rules during your first 10 hours.</p>
            
            <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--gold);">
                    <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🗺️</span>
                    <h3 style="color: var(--gold); margin-bottom: 0.5rem;">Explore Hernand First</h3>
                    <p style="font-size: 0.95rem; color: #ccc;">Before advancing the story, activate all 4 Watchtowers in Hernand. This reveals side quests and hidden Abyss Rifts that yield crucial early skill points.</p>
                </div>
                <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--gold);">
                    <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🍲</span>
                    <h3 style="color: var(--gold); margin-bottom: 0.5rem;">Eat Before Fighting</h3>
                    <p style="font-size: 0.95rem; color: #ccc;">Cooking isn't optional. Eating roasted meat before a fight gives you a +15% stamina regeneration buff for 30 minutes. Always carry food.</p>
                </div>
            </div>
        </section>

        <section class="guide-section reveal" id="combat-habits" style="margin-bottom: 4rem;">
            <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">2. Build Good Combat Habits</h2>
            <p style="color: #ccc;">Button mashing will get you killed as soon as you meet the Crimson Order. You need to play smart.</p>

            <div style="background: rgba(255,255,255,0.03); padding: 2rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); margin-top: 1.5rem;">
                <h4 style="color: var(--gold); font-size: 1.5rem; margin-bottom: 1rem;">Master the Perfect Parry</h4>
                <p style="color: #ccc;">Don't rely just on dodging. Tapping block right before an attack hits triggers a <strong>Perfect Parry</strong>. This not only negates damage but severely drains the enemy's "Stagger Bar". Once broken, you can execute them for massive damage.</p>
                
                <h4 style="color: var(--gold); font-size: 1.5rem; margin-top: 2rem; margin-bottom: 1rem;">Grapple and Throw</h4>
                <p style="color: #ccc;">Crimson Desert has a physics-based combat system. If you are fighting near a cliff or a fire, press the grapple button to grab lighter enemies and throw them off ledges or into hazards to end fights instantly.</p>
            </div>
        </section>

        <section class="guide-section reveal" id="camp-management" style="margin-bottom: 4rem;">
            <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">3. Camp Management</h2>
            <p style="color: #ccc; margin-bottom: 1.5rem;">You aren't just a lone wolf; you are a mercenary leader. Your camp is your hub.</p>
            
            <div class="guide-table-wrap" style="overflow-x: auto;">
                <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
                    <thead>
                        <tr style="border-bottom: 2px solid var(--gold);">
                            <th style="padding: 1rem; text-align: left; color: var(--gold);">Camp Upgrade</th>
                            <th style="padding: 1rem; text-align: left; color: var(--gold);">Priority</th>
                            <th style="padding: 1rem; text-align: left; color: var(--gold);">What it does</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                            <td style="padding: 1rem;"><strong>Blacksmith Anvil</strong></td>
                            <td style="padding: 1rem;"><span class="badge" style="background:#e74c3c;color:white;border:none;">High</span></td>
                            <td style="padding: 1rem; color: #ccc;">Allows you to repair weapons in the field. Weapons break fast early on!</td>
                        </tr>
                        <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                            <td style="padding: 1rem;"><strong>Medic Tent</strong></td>
                            <td style="padding: 1rem;"><span class="badge" style="background:#e74c3c;color:white;border:none;">High</span></td>
                            <td style="padding: 1rem; color: #ccc;">Increases your maximum potion carrying capacity from 3 to 5.</td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem;"><strong>Scout Tower</strong></td>
                            <td style="padding: 1rem;"><span class="badge" style="background:#f39c12;color:black;border:none;">Medium</span></td>
                            <td style="padding: 1rem; color: #ccc;">Automatically marks hidden treasure chests on your map within a 1km radius.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="guide-section reveal" id="early-gear" style="margin-bottom: 4rem;">
            <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">4. Best Early-Game Gear</h2>
            <p style="color: #ccc;">Don't waste gold buying basic swords from merchants. You can find excellent gear hidden in the starting zone if you know where to look.</p>
            
            <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
                <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px;">
                    <img src="/crimson-desert/img/dark-fantasy-rusty-sword.jpg" style="width:100%; height:150px; object-fit:cover; border-radius:4px; margin-bottom:1rem;" alt="Bandit's Bloodblade">
                    <h3 style="color: var(--gold); font-size: 1.4rem;">Bandit's Bloodblade</h3>
                    <p style="color: #ccc; margin-bottom: 0.5rem;"><strong>Location:</strong> Behind Hernand River waterfall.</p>
                    <p style="font-size: 0.85rem; color: #888;">Causes light bleeding. Fantastic for draining boss health bars in the early game.</p>
                </div>
                <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px;">
                    <img src="/crimson-desert/img/dark-fantasy-fur-cloak.jpg" style="width:100%; height:150px; object-fit:cover; border-radius:6px; margin-bottom:1rem;" alt="Wolf-Pelt Mantle">
                    <h3 style="color: var(--gold); font-size: 1.4rem;">Wolf-Pelt Mantle</h3>
                    <p style="color: #ccc; margin-bottom: 0.5rem;"><strong>Location:</strong> Alpha Wolf (Northern Woods).</p>
                    <p style="font-size: 0.85rem; color: #888;">Provides significant resistance to cold damage, essential for exploring the mountain passes.</p>
                </div>
            </div>
        </section>

        <section class="guide-section reveal" id="fast-travel" style="margin-bottom: 4rem;">
            <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">5. Mounts & Fast Travel</h2>
            <p style="color: #ccc;">Pywel is enormous, and walking everywhere will burn you out quickly. Fast travel is limited to major cities and your Greymane Camp.</p>
            <div style="background: rgba(212, 168, 67, 0.05); border: 1px solid rgba(212, 168, 67, 0.2); padding: 1.5rem; border-radius: 4px; margin-top: 1rem;">
                <h4 style="color: var(--gold); margin-bottom: 0.5rem; font-size: 1.3rem;">🐎 Taming Your First Horse</h4>
                <p style="margin: 0; color: #ccc;">Don't wait for the story to give you a mount. As soon as you reach the Hernand Plains, buy a <strong>Taming Rope</strong> from a Stablemaster. Approach wild horses slowly from behind. A good horse will cut your travel time in half and allow you to carry more loot in its saddlebags.</p>
            </div>
        </section>

        <section class="guide-section reveal" id="inventory" style="margin-bottom: 4rem;">
            <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">6. Inventory & Weight</h2>
            <p style="color: #ccc;">Crimson Desert uses a weight system. If you pick up every rusty sword dropped by bandits, you will become <em>Overburdened</em>.</p>
            <ul style="list-style-type: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6; margin-top: 1rem;">
                <li style="margin-bottom: 0.5rem;"><strong>Light Weight (Under 50%):</strong> Faster stamina regeneration and quick dodges. <span style="color: #2ecc71;">(Ideal for Combat)</span></li>
                <li style="margin-bottom: 0.5rem;"><strong>Medium Weight (50% - 80%):</strong> Normal movement, but slides cost 20% more stamina.</li>
                <li style="margin-bottom: 0.5rem;"><strong>Heavy Weight (Over 80%):</strong> You cannot sprint, and grappling enemies becomes impossible. <span style="color: #e74c3c;">(Avoid at all costs)</span></li>
            </ul>
            <p style="font-size: 0.9rem; color: #888; font-style: italic; margin-top: 1rem;">*Tip: Dismantle useless weapons into Iron Scraps on the spot instead of carrying them to a merchant.*</p>
        </section>

        <section class="guide-section reveal" id="leveling" style="margin-bottom: 4rem;">
            <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">7. First 5 Skill Points</h2>
            <p style="color: #ccc; margin-bottom: 1.5rem;">When you level up your Abyss Core, you earn points. Avoid putting them into complex weapon combos early on. Stick to survival:</p>
            <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
                    <h3 style="color: #3498db; margin-bottom: 0.5rem; font-size: 1.3rem;">Vitality I & II</h3>
                    <p style="color: #ccc; font-size: 0.9rem;">Increases your base health by 20%. The Chapter 1 boss can easily two-shot you without this.</p>
                </div>
                <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
                    <h3 style="color: #2ecc71; margin-bottom: 0.5rem; font-size: 1.3rem;">Endurance I</h3>
                    <p style="color: #ccc; font-size: 0.9rem;">Gives you enough stamina to perform 3 dodges in a row instead of just 2. Absolute lifesaver.</p>
                </div>
                <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
                    <h3 style="color: #9b59b6; margin-bottom: 0.5rem; font-size: 1.3rem;">Abyss Dash</h3>
                    <p style="color: #ccc; font-size: 0.9rem;">A magical dodge that phases you through enemy attacks with generous invincibility frames.</p>
                </div>
            </div>
        </section>
<section class="guide-section reveal" id="night-cycle" style="margin-bottom: 4rem;">
            <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">8. Survive the Night Cycle</h2>
            <p style="color: #ccc;">When the sun goes down in Pywel, the game changes completely. Visibility drops, and the Abyss Corruption spreads.</p>
            <div style="background: rgba(255,255,255,0.03); padding: 1.5rem; border-radius: 4px; border-left: 4px solid #9b59b6; margin-top: 1rem;">
                <h4 style="color: #9b59b6; font-size: 1.3rem; margin-bottom: 0.5rem;">🌙 High Risk, High Reward</h4>
                <p style="margin: 0; color: #ccc;">Nighttime spawns elite enemies that drop rare enhancement stones. However, if you are under level 10, it's safer to find a campfire and <strong>Rest until Morning</strong>. Always keep a torch in your quick-slot!</p>
            </div>
        </section>

        <section class="guide-section reveal" id="economy" style="margin-bottom: 4rem;">
            <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">9. Smart Gold Management</h2>
            <p style="color: #ccc; margin-bottom: 1rem;">Gold is scarce in the first few chapters. Do not waste it buying basic weapons or armor from vendors; you will find better gear just by exploring the map.</p>
            <p style="color: #ccc;">Instead, spend your early gold exclusively on <strong>Taming Ropes, Bandages, and Camp Upgrades</strong>. If you need quick cash, hunting deer in the plains and selling the pelts to wandering merchants is the fastest early-game farm.</p>
        </section>

        <section class="guide-section reveal" id="mistakes" style="margin-bottom: 4rem;">
            <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1.5rem;">10. Mistakes to Avoid</h2>
            <ul style="list-style: none; padding: 0;">
        <section class="guide-section reveal" id="mistakes" style="margin-bottom: 4rem;">
                <li style="margin-bottom: 1.5rem; background: rgba(231, 76, 60, 0.05); border-left: 3px solid #e74c3c; padding: 1.5rem; border-radius: 0 4px 4px 0;">
                    <strong style="color: #e74c3c; display: block; font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.3rem; letter-spacing: 1px;">❌ Selling Crafting Materials</strong>
                    <span style="color: #ccc;">Never sell iron ore, timber, or alchemy herbs for quick gold. You will need hundreds of them later to upgrade the Greymane Camp.</span>
                </li>
                <li style="margin-bottom: 1.5rem; background: rgba(231, 76, 60, 0.05); border-left: 3px solid #e74c3c; padding: 1.5rem; border-radius: 0 4px 4px 0;">
                    <strong style="color: #e74c3c; display: block; font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.3rem; letter-spacing: 1px;">❌ Ignoring the Weather</strong>
                    <span style="color: #ccc;">Storms make enemies harder to hear, and extreme cold drains your stamina. If you aren't dressed appropriately, set up a campfire and wait it out.</span>
                </li>
                <li style="margin-bottom: 1.5rem; background: rgba(231, 76, 60, 0.05); border-left: 3px solid #e74c3c; padding: 1.5rem; border-radius: 0 4px 4px 0;">
                    <strong style="color: #e74c3c; display: block; font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.3rem; letter-spacing: 1px;">❌ Hoarding Skill Points</strong>
                    <span style="color: #ccc;">You can respec your skill points later in the game. Don't save them. Spend them early on basic health and stamina upgrades to survive the initial difficulty curve.</span>
                </li>
            </ul>
        </section>

        <div style="text-align: center; margin-top: 5rem; padding-top: 3rem; border-top: 1px solid rgba(255,255,255,0.05);">
            <p style="color: var(--text-dim); margin-bottom: 1.5rem; font-style: italic; font-family: var(--font-ui); font-size: 1.1rem;">Ready to begin the story?</p>
            <a href="/crimson-desert/chapters/prologue" class="btn btn-gold" style="font-size: 1.1rem; padding: 1rem 2rem;">START CHAPTER 1 WALKTHROUGH →</a>
        </div>

    </main>
</div>

<script>
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
</script>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>