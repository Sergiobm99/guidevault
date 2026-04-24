<?php 
// 1. We identify the parent game for the "Smart Button" in the header
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];
$pageTitle = "Beginner's Guide & Early Tips | Elden Ring";
$pageDesc = "Start your journey in The Lands Between the right way. Essential tips, early game weapons, and common mistakes to avoid in Elden Ring.";
$bodyClass = "theme-elden-ring";

// Cargamos el header global
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 45vh; background: linear-gradient(180deg, rgba(212, 175, 55, 0.15) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1699923835067-c6b2518f9733?q=80&w=1920&auto=format&fit=crop') center/cover;">
        <div class="guide-hero-inner" style="text-align: center; padding: 0 2rem; position: relative; z-index: 2;">
            <span class="label" style="color: var(--gold); letter-spacing: 0.5em; display: block; margin-bottom: 1rem;">SURVIVAL 101</span>
            <h1 class="guide-hero-title" style="font-size: clamp(3rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">BEGINNER'S GUIDE</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); max-width: 700px; margin: 1.5rem auto 0; color: #ddd; text-shadow: 0 2px 10px rgba(0,0,0,0.8); font-size: 1.1rem;">
                10 essential tips for your first hours in The Lands Between, common mistakes to avoid, and the best early-game weapons to grab before facing Margit.
            </p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Contents</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#golden-rules" style="color: var(--text-dim); transition: color 0.2s;">1. The Golden Rules</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#combat-habits" style="color: var(--text-dim); transition: color 0.2s;">2. Combat Habits</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#camp-management" style="color: var(--text-dim); transition: color 0.2s;">3. Upgrading Flasks</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#early-gear" style="color: var(--text-dim); transition: color 0.2s;">4. Best Early Gear</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#fast-travel" style="color: var(--text-dim); transition: color 0.2s;">5. Torrent & Travel</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#inventory" style="color: var(--text-dim); transition: color 0.2s;">6. Equip Load (Fat Roll)</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#leveling" style="color: var(--text-dim); transition: color 0.2s;">7. First 5 Levels</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#night-cycle" style="color: var(--text-dim); transition: color 0.2s;">8. Survive the Night</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#economy" style="color: var(--text-dim); transition: color 0.2s;">9. Rune Management</a></li>
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
                    <li><a href="#camp-management">3. Upgrading Flasks</a></li>
                    <li><a href="#early-gear">4. Best Early Gear</a></li>
                    <li><a href="#fast-travel">5. Torrent & Travel</a></li>
                    <li><a href="#inventory">6. Equip Load (Fat Roll)</a></li>
                    <li><a href="#leveling">7. First 5 Levels</a></li>
                    <li><a href="#night-cycle">8. Survive the Night</a></li>
                   <li><a href="#economy">9. Rune Management</a></li>
                    <li><a href="#mistakes">10. Mistakes to Avoid</a></li>
                </ul>
            </div>

            <section class="guide-section" id="golden-rules" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">1. The Golden Rules of Elden Ring</h2>
                <p class="guide-section-intro" style="color: var(--text-dim); font-size: 1.1rem; margin-bottom: 2rem;">Elden Ring is punishing but fair. If you rush to Stormveil Castle immediately, you will suffer. Follow these rules during your first 10 hours.</p>
                
                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--gold);">
                        <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🗺️</span>
                        <h3 style="color: var(--gold); margin-bottom: 0.5rem;">Head South First</h3>
                        <p style="font-size: 0.95rem; color: #ccc;">Instead of fighting Margit, cross the Bridge of Sacrifice to the Weeping Peninsula. It's the true "tutorial" area, filled with easy bosses, Sacred Tears, and upgrade materials.</p>
                    </div>
                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--gold);">
                        <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🐎</span>
                        <h3 style="color: var(--gold); margin-bottom: 0.5rem;">If Stuck, Ride Away</h3>
                        <p style="font-size: 0.95rem; color: #ccc;">Unlike previous Souls games, you are not trapped in a linear path. If a boss is destroying you, mark them on your map, get on Torrent, and go explore somewhere else.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section" id="combat-habits" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">2. Build Good Combat Habits</h2>
                <p style="color: #ccc;">Panic rolling will get you killed. You need to use the new combat mechanics introduced in Elden Ring.</p>

                <div style="background: rgba(255,255,255,0.03); padding: 2rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); margin-top: 1.5rem;">
                    <h4 style="color: var(--gold); font-size: 1.5rem; margin-bottom: 1rem;">Master Guard Counters</h4>
                    <p style="color: #ccc;">Block an attack with your shield and immediately press Heavy Attack. You'll hear a 'ching' sound and counterattack. This deals massive invisible posture damage to enemies.</p>
                    
                    <h4 style="color: var(--gold); font-size: 1.5rem; margin-top: 2rem; margin-bottom: 1rem;">Jumping Heavy Attacks</h4>
                    <p style="color: #ccc;">Jump and press R2/RT. It is the most effective way to close the distance safely and it shatters enemy poise. Combine 3 or 4 jumping heavies to drop bosses to their knees for a critical hit.</p>
                </div>
            </section>

            <section class="guide-section" id="camp-management" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">3. Upgrades & Management</h2>
                <p style="color: #ccc; margin-bottom: 1.5rem;">Finding raw materials is more important than leveling up your character in the first hours.</p>
                
                <div class="guide-table-wrap" style="overflow-x: auto;">
                    <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
                        <thead>
                            <tr style="border-bottom: 2px solid var(--gold);">
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Crucial Upgrade</th>
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">Priority</th>
                                <th style="padding: 1rem; text-align: left; color: var(--gold);">What it does</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem;"><strong>Golden Seeds</strong></td>
                                <td style="padding: 1rem;"><span class="badge" style="background:#e74c3c;color:white;border:none;">High</span></td>
                                <td style="padding: 1rem; color: #ccc;">Found at glowing saplings. Use them at a Site of Grace to increase your total number of Flasks.</td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td style="padding: 1rem;"><strong>Sacred Tears</strong></td>
                                <td style="padding: 1rem;"><span class="badge" style="background:#e74c3c;color:white;border:none;">High</span></td>
                                <td style="padding: 1rem; color: #ccc;">Found in ruined Churches. Increases how much HP/FP each Flask restores.</td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem;"><strong>Smithing Stones</strong></td>
                                <td style="padding: 1rem;"><span class="badge" style="background:#f39c12;color:black;border:none;">Medium</span></td>
                                <td style="padding: 1rem; color: #ccc;">Used at the Church of Elleh anvil (and later the Roundtable Hold) to increase weapon damage.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="guide-section" id="early-gear" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">4. Best Early-Game Gear</h2>
                <p style="color: #ccc;">Don't stick with your starting weapon forever. You can ride Torrent to grab these overpowered items within 30 minutes of starting.</p>
                
                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px;">
                        <h3 style="color: var(--gold); font-size: 1.4rem;">Bloodhound's Fang</h3>
                        <p style="color: #ccc; margin-bottom: 0.5rem;"><strong>Location:</strong> Forlorn Hound Evergaol (South Limgrave).</p>
                        <p style="font-size: 0.85rem; color: #888;">A curved greatsword that causes bleeding. Its special skill gives you invincibility frames and massive damage. It's so good you can use it to beat the final boss.</p>
                    </div>
                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px;">
                        <h3 style="color: var(--gold); font-size: 1.4rem;">Meteorite Staff & Rock Sling</h3>
                        <p style="color: #ccc; margin-bottom: 0.5rem;"><strong>Location:</strong> Street of Sages Ruins (Caelid).</p>
                        <p style="font-size: 0.85rem; color: #888;">Starts with "S" scaling in Intelligence. Essential for any mage build. You can sneak into Caelid on horseback, grab it, and leave without fighting.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section" id="fast-travel" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">5. Torrent & Fast Travel</h2>
                <p style="color: #ccc;">The Lands Between are massive. You need your spectral steed ASAP.</p>
                <div style="background: rgba(212, 168, 67, 0.05); border: 1px solid rgba(212, 168, 67, 0.2); padding: 1.5rem; border-radius: 4px; margin-top: 1rem;">
                    <h4 style="color: var(--gold); margin-bottom: 0.5rem; font-size: 1.3rem;">🐎 Getting Torrent</h4>
                    <p style="margin: 0; color: #ccc;">Rest at the "Gatefront" Site of Grace (just north of the Church of Elleh). Melina will appear, offer an accord, and give you the Spectral Steed Whistle. Equip this to your quick-pouch. You can use Torrent to double-jump up vertical cliffs using the wind jump-pads (Spirit Springs).</p>
                </div>
            </section>

            <section class="guide-section" id="inventory" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">6. Equip Load (Don't Fat Roll)</h2>
                <p style="color: #ccc;">Your armor and weapons have weight. If you equip too much, your dodge roll becomes slow and useless.</p>
                <ul style="list-style-type: square; padding-left: 1.5rem; color: #ccc; line-height: 1.6; margin-top: 1rem;">
                    <li style="margin-bottom: 0.5rem;"><strong>Light Load (Under 30%):</strong> Fastest roll, covers the most distance.</li>
                    <li style="margin-bottom: 0.5rem;"><strong>Medium Load (30% - 70%):</strong> Standard roll. <span style="color: #2ecc71;">(This is where 90% of players should be)</span></li>
                    <li style="margin-bottom: 0.5rem;"><strong>Heavy Load (Over 70%):</strong> You perform a "Fat Roll." It is slow, has terrible invincibility frames, and will get you killed. <span style="color: #e74c3c;">(Avoid at all costs. Unequip a weapon if necessary!)</span></li>
                </ul>
            </section>

            <section class="guide-section" id="leveling" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">7. First 5 Levels</h2>
                <p style="color: #ccc; margin-bottom: 1.5rem;">When you collect enough Runes, rest at a Grace to level up. Ignore damage stats early on and focus on survival:</p>
                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
                        <h3 style="color: #3498db; margin-bottom: 0.5rem; font-size: 1.3rem;">Vigor (HP)</h3>
                        <p style="color: #ccc; font-size: 0.9rem;">Level Vigor to 40 as your absolute top priority. Surviving a hit is much more important than doing 5 extra damage.</p>
                    </div>
                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #2ecc71;">
                        <h3 style="color: #2ecc71; margin-bottom: 0.5rem; font-size: 1.3rem;">Endurance</h3>
                        <p style="color: #ccc; font-size: 0.9rem;">Increases Stamina and Equip Load. Level this so you can wear decent armor without fat-rolling.</p>
                    </div>
                    <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
                        <h3 style="color: #9b59b6; margin-bottom: 0.5rem; font-size: 1.3rem;">Weapon Reqs</h3>
                        <p style="color: #ccc; font-size: 0.9rem;">Only level Strength, Dex, or Intelligence just enough to meet the minimum requirement to hold your weapon.</p>
                    </div>
                </div>
            </section>
            
            <section class="guide-section" id="night-cycle" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">8. Survive the Night</h2>
                <p style="color: #ccc;">Elden Ring has a dynamic day/night cycle, and some of the most dangerous enemies only spawn in the dark.</p>
                <div style="background: rgba(255,255,255,0.03); padding: 1.5rem; border-radius: 4px; border-left: 4px solid #9b59b6; margin-top: 1rem;">
                    <h4 style="color: #9b59b6; font-size: 1.3rem; margin-bottom: 0.5rem;">🌙 Night's Cavalry & Deathbirds</h4>
                    <p style="margin: 0; color: #ccc;">If you cross a bridge at night, you might be ambushed by a dark rider. Exploring ruins at night can spawn terrifying Deathbirds. If you aren't ready for these tough mini-bosses, rest at a Site of Grace and select <strong>"Pass time until morning"</strong>.</p>
                </div>
            </section>

            <section class="guide-section" id="economy" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1rem;">9. Smart Rune Management</h2>
                <p style="color: #ccc; margin-bottom: 1rem;">When you die, you drop all your Runes. If you die again before picking them up, they are gone forever.</p>
                <p style="color: #ccc;"><strong>Pro Tip:</strong> You will find items called "Golden Runes" in skulls in the graveyard. These are consumable items that grant runes. <strong>DO NOT use them right away!</strong> They do not drop when you die. Keep them in your inventory as an emergency bank, and only pop them when you are standing at a Site of Grace and are slightly short of the runes needed to level up.</p>
            </section>

            <section class="guide-section" id="mistakes" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.5rem; margin-bottom: 1.5rem;">10. Mistakes to Avoid</h2>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 1.5rem; background: rgba(231, 76, 60, 0.05); border-left: 3px solid #e74c3c; padding: 1.5rem; border-radius: 0 4px 4px 0;">
                        <strong style="color: #e74c3c; display: block; font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.3rem; letter-spacing: 1px;">❌ Fighting the Tree Sentinel Immediately</strong>
                        <span style="color: #ccc;">The big golden knight on the horse right outside the tutorial is placed there on purpose to teach you to walk away. Go around him. Come back at Level 25.</span>
                    </li>
                    <li style="margin-bottom: 1.5rem; background: rgba(231, 76, 60, 0.05); border-left: 3px solid #e74c3c; padding: 1.5rem; border-radius: 0 4px 4px 0;">
                        <strong style="color: #e74c3c; display: block; font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.3rem; letter-spacing: 1px;">❌ Killing Friendly NPCs</strong>
                        <span style="color: #ccc;">If you can lock-on to it, it's an enemy. If you can't lock-on, it's a friend. Never attack NPCs (like Varré or Kalé); you will permanently ruin their questlines and lock yourself out of amazing items.</span>
                    </li>
                    <li style="margin-bottom: 1.5rem; background: rgba(231, 76, 60, 0.05); border-left: 3px solid #e74c3c; padding: 1.5rem; border-radius: 0 4px 4px 0;">
                        <strong style="color: #e74c3c; display: block; font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.3rem; letter-spacing: 1px;">❌ Spreading Stats Too Thin</strong>
                        <span style="color: #ccc;">You cannot be a master of Strength, Dexterity, Intelligence, AND Faith. Pick ONE damage stat and stick to it. Jack-of-all-trades builds deal zero damage in the late game.</span>
                    </li>
                </ul>
            </section>

            <div style="text-align: center; margin-top: 5rem; padding-top: 3rem; border-top: 1px solid rgba(255,255,255,0.05);">
                <p style="color: var(--text-dim); margin-bottom: 1.5rem; font-style: italic; font-family: var(--font-ui); font-size: 1.1rem;">Ready to begin the story?</p>
                <a href="/elden-ring/chapters/chapter-1.php" class="btn btn-gold" style="font-size: 1.1rem; padding: 1rem 2rem;">START CHAPTER 1 WALKTHROUGH →</a>
            </div>

        </main>
    </div>
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
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>