<?php 
// 1. Configuración de metadatos y tema para el header global
$pageTitle = "Elden Ring — Complete Guide & Walkthrough | GuideVault";
$pageDesc = "The most complete Elden Ring guide. Master combat, find every legendary weapon, and conquer the Shadow of the Erdtree DLC.";
$bodyClass = "theme-elden-ring"; // Activa los estilos dorados en global.css

// 2. Carga del Header Global
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">

  <header class="guide-hero">
    <div class="guide-hero-bg" style="background: linear-gradient(180deg, rgba(212, 175, 55, 0.08) 0%, var(--black) 100%);"></div>
    <div class="guide-hero-pattern"></div>
    <div id="sparksContainer" style="position: absolute; inset: 0; overflow: hidden; pointer-events: none; z-index: 5;"></div>   
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Elden Ring</span>
      </nav>

      <div class="guide-hero-content">
        <div>
          <span class="guide-hero-tag">Definitive 100% Walkthrough · Updated April 2026</span>
          <h1 class="guide-hero-title" style="color: #D4AF37; text-shadow: 0 0 20px rgba(212, 175, 55, 0.3);">ELDEN<br>RING</h1>
          <p class="guide-hero-subtitle">Rise, Tarnished, and be Guided by Grace</p>
          <p class="guide-hero-desc" style="color: rgba(255, 255, 255, 0.75); max-width: 650px; line-height: 1.6;">
            From the basics of combat to the deepest secrets of the Land of Shadow. Our guide covers every boss, legendary armament, and secret NPC questline with over 500+ hours of expertise.
          </p>
          <div class="guide-hero-badges">
            <span class="badge badge-new" style="background: #9b59b6; color: white; border-color: #9b59b6;">DLC Included</span>
            <span class="badge badge-genre">Action RPG</span>
            <span class="badge badge-genre">Open World</span>
            <span class="badge badge-genre">FromSoftware · 2022</span>
          </div>

          <div class="hero-search-container" style="margin-top: 2rem;">
              <input type="text" id="hubSearchInput" placeholder="Search builds, bosses, or regions..." autocomplete="off">
              <div id="hubSearchResults" class="search-results-dropdown"></div>
          </div>
        </div>

        <div class="guide-hero-meta">
          <div class="guide-meta-card">
            <div class="guide-meta-item">
              <span class="guide-meta-key">Developer</span>
              <span class="guide-meta-val">FromSoftware</span>
            </div>
            <div class="guide-meta-item">
              <span class="guide-meta-key">Platform</span>
              <span class="guide-meta-val">PC · PS4/5 · Xbox</span>
            </div>
            <div class="guide-meta-item">
              <span class="guide-meta-key">Release Date</span>
              <span class="guide-meta-val">February 25, 2022</span>
            </div>
            <div class="guide-meta-item">
              <span class="guide-meta-key">DLC Status</span>
              <span class="guide-meta-val">Full Coverage</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="guide-layout">
    <aside class="guide-toc" aria-label="Table of contents">
      <div class="guide-toc-title">Contents</div>
      <ul class="guide-toc-list">
        <li class="guide-toc-item"><a href="#mechanics">1. Core Mechanics</a></li>
        <li class="guide-toc-item"><a href="#builds">2. Character Builds</a></li>
        <li class="guide-toc-item"><a href="#world">3. The Lands Between</a></li>
        <li class="guide-toc-item"><a href="#equipment">4. Gear & Magic</a></li>
        <li class="guide-toc-item"><a href="#walkthrough">5. Quest Walkthrough</a></li>
        <li class="guide-toc-item"><a href="#dlc">6. Shadow of the Erdtree</a></li>
        <li class="guide-toc-item"><a href="#extras">7. 100% Completion</a></li>
        <li class="guide-toc-item"><a href="#support">Support the Guide</a></li>
      </ul>
    </aside>

    <main class="guide-content">
      <div class="mobile-toc-container">
          <button class="mobile-toc-btn" id="tocToggle">
              <span style="font-family: 'Bebas Neue', sans-serif; letter-spacing: 0.15em;">CONTENTS</span>
              <span class="toc-icon" id="tocIcon">▼</span>
          </button>
          <ul class="mobile-toc-list" id="tocList">
              <li><a href="#mechanics">1. Core Mechanics</a></li>
              <li><a href="#builds">2. Character Builds</a></li>
              <li><a href="#world">3. The Lands Between</a></li>
              <li><a href="#equipment">4. Gear & Magic</a></li>
              <li><a href="#walkthrough">5. Quest Walkthrough</a></li>
              <li><a href="#dlc">6. Shadow of the Erdtree</a></li>
              <li><a href="#extras">7. 100% Completion</a></li>
          </ul>
      </div>

      <section class="guide-section reveal" id="mechanics">
        <span class="label">Chapter 1</span>
        <h2 class="guide-section-title">Core Mechanics</h2>
        <p class="guide-section-intro">Master the fundamentals of survival and combat in the most ambitious Souls-like ever created. Understanding these systems is the difference between constant death and becoming the Elden Lord.</p>
        
        <div class="guide-cards" style="margin-bottom: 3rem;">
          <div class="guide-card-item reveal" style="border-top: 3px solid var(--gold); background: var(--dark-2);">
            <span class="guide-card-icon">🛡️</span>
            <h3 style="color: var(--gold);">Guard Counters</h3>
            <p style="color: #ccc; font-size: 0.9rem;">Press heavy attack immediately after blocking a hit. Deals massive invisible posture damage, leaving enemies open for critical strikes.</p>
          </div>
          <div class="guide-card-item reveal" style="border-top: 3px solid #3498db; background: var(--dark-2);">
            <span class="guide-card-icon">🐎</span>
            <h3 style="color: #3498db;">Spirit Steed (Torrent)</h3>
            <p style="color: #ccc; font-size: 0.9rem;">Summon Torrent for fast travel and mounted combat. You have i-frames (invincibility) during the exact moment you mount and dismount.</p>
          </div>
          <div class="guide-card-item reveal" style="border-top: 3px solid #9b59b6; background: var(--dark-2);">
            <span class="guide-card-icon">✨</span>
            <h3 style="color: #9b59b6;">Ashes of War</h3>
            <p style="color: #ccc; font-size: 0.9rem;">Customize non-somber weapons with unique skills and affinities (Heavy, Keen, Magic, etc.) at any Site of Grace to adapt to your stats.</p>
          </div>
          <div class="guide-card-item reveal" style="border-top: 3px solid #e74c3c; background: var(--dark-2);">
            <span class="guide-card-icon">⚔️</span>
            <h3 style="color: #e74c3c;">Power Stancing</h3>
            <p style="color: #ccc; font-size: 0.9rem;">Equip two weapons of the <em>exact same category</em> (e.g., two katanas) to unlock a devastating dual-wield moveset using the L1/LB button.</p>
          </div>
        </div>

        <div class="callout info reveal" style="border-left: 4px solid var(--gold); background: rgba(212, 175, 55, 0.08); margin-bottom: 3rem;">
          <span class="callout-label" style="color: var(--gold);">💡 The Golden Rule of Combat: Stance Breaking</span>
          <p style="color: #ccc;">Unlike Sekiro, Elden Ring doesn't have a visible posture bar for enemies, but it exists. <strong>Jumping Heavy Attacks</strong> and <strong>Charged Heavy Attacks</strong> deal the highest stance damage. Hit a boss with 3 or 4 of these in quick succession, and they will drop to their knees for a visceral attack.</p>
        </div>

        <h3 class="guide-section-title reveal" style="font-size: 1.5rem; margin-bottom: 1rem;">Status Effects Explained</h3>
        <p class="reveal" style="color: #ccc; margin-bottom: 1.5rem;">Applying status ailments is one of the most powerful strategies in the game. Here is exactly what happens when the invisible meter fills up:</p>
        
        <div class="guide-table-wrap reveal" style="margin-bottom: 3rem; overflow-x: auto;">
          <table class="guide-table" style="width: 100%; border-collapse: collapse; background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold);">
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Status</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Effect on Target</th>
                <th style="padding: 1rem; text-align: left; color: var(--gold);">Best Used Against</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold; color: #ff4d4d;">🩸 Hemorrhage (Bleed)</td>
                <td style="padding: 1rem; color: #ccc;">Instantly removes a massive percentage of the target's Max HP.</td>
                <td style="padding: 1rem; color: #ccc;">High HP bosses (e.g., Fire Giant, Malenia).</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold; color: #a2d5f2;">❄️ Frostbite</td>
                <td style="padding: 1rem; color: #ccc;">Takes a chunk of HP, lowers stamina recovery, and increases all damage taken by 20% for 30s.</td>
                <td style="padding: 1rem; color: #ccc;">Almost everything. Reset the timer instantly with any fire attack.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                <td style="padding: 1rem; font-weight: bold; color: #e67e22;">🥀 Scarlet Rot</td>
                <td style="padding: 1rem; color: #ccc;">Severe damage over time that rapidly drains health. Much stronger than standard Poison.</td>
                <td style="padding: 1rem; color: #ccc;">Bosses you want to hit-and-run (e.g., Starscourge Radahn).</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: bold; color: #f1c40f;">👁️ Madness</td>
                <td style="padding: 1rem; color: #ccc;">Deals significant HP and FP (Mana) damage, and locks the target in a long stun animation.</td>
                <td style="padding: 1rem; color: #ccc;"><strong>Tarnished NPCs and PvP only.</strong> Useless against monsters.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="guide-accordion reveal" id="acc-stats" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-stats')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">📊 Understanding Soft Caps & Stats</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height: 800px;">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Leveling up in Elden Ring yields diminishing returns after certain thresholds called "Soft Caps". Do not waste runes leveling a stat past its hard cap.</p>
              <ul style="color: #ccc; padding-left: 1.5rem; list-style-type: square; line-height: 1.6;">
                  <li style="margin-bottom: 0.5rem;"><strong>Vigor (HP):</strong> Huge drops in gains after <strong>40</strong> and <strong>60</strong>. Always aim for 40 early game, and 60 for the DLC. Never go past 60.</li>
                  <li style="margin-bottom: 0.5rem;"><strong>Mind (FP):</strong> Soft caps at <strong>38</strong> (which gives you exactly enough FP to fully restore with one Max Flask).</li>
                  <li style="margin-bottom: 0.5rem;"><strong>Endurance (Stamina):</strong> Stamina soft caps at <strong>50</strong>. Equip Load caps continuously up to 60.</li>
                  <li><strong>Damage Stats (STR/DEX/INT/FAI/ARC):</strong> First soft cap at <strong>20</strong>, major cap at <strong>50</strong>, final hard cap at <strong>80</strong>. If two-handing a weapon, your STR is multiplied by 1.5x (so 54 STR = 81 STR).</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="builds">
        <span class="label">Chapter 2</span>
        <h2 class="guide-section-title">Character Builds</h2>
        <p class="guide-section-intro" style="color: #ccc; margin-bottom: 2rem;">Elden Ring offers unprecedented freedom. Whether you want to crush foes with colossal weapons or melt them with sorcery, these are the most optimized setups for the current patch.</p>
        
        <div class="guide-tabs">
          <div class="guide-tabs-nav">
            <button class="guide-tab-btn active" data-tab="c-melee">Melee Prowess</button>
            <button class="guide-tab-btn" data-tab="c-magic">Sorcery & Faith</button>
            <button class="guide-tab-btn" data-tab="c-status">Status Effect</button>
          </div>

          <div class="guide-tab-panel active" id="c-melee">
            <div class="guide-cards">
              <div class="guide-card-item" style="border-top: 3px solid #888; background: var(--dark-2);">
                <span class="guide-card-icon">🔨</span>
                <h3 style="color: #fff;">The Bonk Crusher (STR)</h3>
                <ul style="color: #ccc; margin-top: 1rem; padding-left: 1.2rem; font-size: 0.9rem;">
                    <li><strong>Weapon:</strong> Dual Giant-Crushers (Heavy Affinity)</li>
                    <li><strong>Ash of War:</strong> Royal Knight's Resolve</li>
                    <li><strong>Talismans:</strong> Claw Talisman, Bull-Goat's Talisman</li>
                    <li><strong>Playstyle:</strong> Spam jump attacks to break enemy poise instantly.</li>
                </ul>
              </div>
              <div class="guide-card-item" style="border-top: 3px solid #3498db; background: var(--dark-2);">
                <span class="guide-card-icon">⚔️</span>
                <h3 style="color: #3498db;">Moonveil Samurai (DEX/INT)</h3>
                <ul style="color: #ccc; margin-top: 1rem; padding-left: 1.2rem; font-size: 0.9rem;">
                    <li><strong>Weapon:</strong> Moonveil Katana + Uchigatana (Cold)</li>
                    <li><strong>Ash of War:</strong> Transient Moonlight</li>
                    <li><strong>Talismans:</strong> Magic Scorpion Charm, Shard of Alexander</li>
                    <li><strong>Playstyle:</strong> Fast magical slashes that deal high stagger and frostbite.</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="guide-tab-panel" id="c-magic">
             <div class="guide-cards">
              <div class="guide-card-item" style="border-top: 3px solid #9b59b6; background: var(--dark-2);">
                <span class="guide-card-icon">🔮</span>
                <h3 style="color: #9b59b6;">Comet Azur Nuke (INT)</h3>
                <ul style="color: #ccc; margin-top: 1rem; padding-left: 1.2rem; font-size: 0.9rem;">
                    <li><strong>Staff:</strong> Lusat's Glintstone Staff</li>
                    <li><strong>Spells:</strong> Comet Azur, Terra Magica, Ranni's Dark Moon</li>
                    <li><strong>Physick Flask:</strong> Cerulean Hidden Tear (Infinite FP)</li>
                    <li><strong>Playstyle:</strong> One-shot slow-moving bosses with a giant laser beam.</li>
                </ul>
              </div>
              <div class="guide-card-item" style="border-top: 3px solid #f1c40f; background: var(--dark-2);">
                <span class="guide-card-icon">⚡</span>
                <h3 style="color: #f1c40f;">Dragon Cultist (FAI/ARC)</h3>
                <ul style="color: #ccc; margin-top: 1rem; padding-left: 1.2rem; font-size: 0.9rem;">
                    <li><strong>Seal:</strong> Dragon Communion Seal</li>
                    <li><strong>Spells:</strong> Rotten Breath, Lightning Spear, Golden Vow</li>
                    <li><strong>Talismans:</strong> Roar Medallion, Flock's Canvas Talisman</li>
                    <li><strong>Playstyle:</strong> Inflict Scarlet Rot safely from a distance, then buff yourself.</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="guide-tab-panel" id="c-status">
            <div class="guide-cards">
                <div class="guide-card-item" style="border-top: 3px solid #8C2D2D; background: var(--dark-2); grid-column: span 2;">
                  <span class="guide-card-icon">🩸</span>
                  <h3 style="color: #ff4d4d;">Lord of Blood (ARC/DEX) - THE META</h3>
                  <p style="color: #ccc; margin-top: 0.5rem; font-size: 0.9rem;">The most powerful and forgiving build in the game.</p>
                  <ul style="color: #ccc; margin-top: 1rem; padding-left: 1.2rem; font-size: 0.9rem;">
                      <li><strong>Weapon:</strong> Rivers of Blood (Right Hand) + Eleonora's Poleblade (Left Hand)</li>
                      <li><strong>Armor:</strong> White Mask (Boosts damage when bleeding occurs)</li>
                      <li><strong>Talismans:</strong> Lord of Blood's Exultation, Rotten Winged Sword Insignia</li>
                      <li><strong>Playstyle:</strong> Use the "Corpse Piler" skill to melt bosses in seconds through rapid hemorrhage triggers.</li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="world">
        <span class="label">Chapter 3</span>
        <h2 class="guide-section-title">The Lands Between</h2>
        <div class="region-grid">
          <div class="region-card reveal"><span class="region-emoji">🌲</span><div class="region-name">Limgrave</div><div class="region-desc">The starting fields and Stormveil Castle.</div></div>
          <div class="region-card reveal"><span class="region-emoji">🏰</span><div class="region-name">Leyndell</div><div class="region-desc">The Royal Capital and heart of the Erdtree.</div></div>
          <div class="region-card reveal"><span class="region-emoji">🟥</span><div class="region-name" style="color: #8C2D2D;">Caelid</div><div class="region-desc">A scarlet rot-infested wasteland of nightmares.</div></div>
        </div>
        
        <h4 style="font-family: var(--font-display); color: var(--gold); margin-top: 3rem; margin-bottom: 1rem;">Important Merchants</h4>
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead><tr><th>Merchant</th><th>Location</th><th>Must-Buy Items</th></tr></thead>
            <tbody>
              <tr><td>Merchant Kalé</td><td>Church of Elleh</td><td>Crafting Kit, Telescope</td></tr>
              <tr><td>Isolated Merchant</td><td>Dragonbarrow</td><td>Beast-Repellent Torch, Spiked Caestus</td></tr>
              <tr><td>Twin Maiden Husks</td><td>Roundtable Hold</td><td>Memory Stones, Smithing Stones (via Bell Bearings)</td></tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="dlc">
        <span class="label">Chapter 6</span>
        <h2 class="guide-section-title" style="color: #9b59b6;">Shadow of the Erdtree</h2>
        
        <div class="callout abyss reveal" style="border-left-color: #9b59b6; background: rgba(155, 89, 182, 0.08); margin-bottom: 2rem;">
          <span class="callout-label" style="color: #9b59b6;">DLC Entry Requirements</span>
          <p>You must defeat <strong>Starscourge Radahn</strong> in Caelid and <strong>Mohg, Lord of Blood</strong> in Mohgwyn Palace to access the Land of Shadow via Miquella's Cocoon.</p>
        </div>
        
        <div class="guide-cards">
            <div class="guide-card-item reveal" style="border-color: rgba(155, 89, 182, 0.3);">
                <span class="guide-card-icon">🌑</span>
                <h3 style="color: #9b59b6;">Scadutree Fragments</h3>
                <p>Essential for increasing your attack power and damage negation specifically within the Land of Shadow.</p>
            </div>
            <div class="guide-card-item reveal" style="border-color: rgba(155, 89, 182, 0.3);">
                <span class="guide-card-icon">👣</span>
                <h3 style="color: #9b59b6;">Revered Spirit Ashes</h3>
                <p>Buffs your Spirit Summons and Torrent's survivability to match the DLC's extreme difficulty spike.</p>
            </div>
        </div>
      </section>

      <section class="guide-section reveal" id="extras">
        <span class="label">Chapter 7</span>
        <h2 class="guide-section-title">100% Completion</h2>
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
          <a href="extras/achievements" class="guide-card-item reveal" style="text-decoration:none; border-top: 3px solid #2ecc71; background: var(--dark-2);">
            <span class="guide-card-icon">🏆</span>
            <h3 style="color:#2ecc71;">Trophy Guide</h3>
            <p style="color: #ccc;">Step-by-step roadmap to collect all legendary items and secure the Platinum Trophy / 1000 G.</p>
          </a>
          <a href="extras/endings" class="guide-card-item reveal" style="text-decoration:none; border-top: 3px solid var(--gold); background: var(--dark-2);">
            <span class="guide-card-icon">📜</span>
            <h3 style="color:var(--gold);">All 6 Endings</h3>
            <p style="color: #ccc;">How to complete Ranni's, Fia's, and Goldmask's questlines to unlock every possible conclusion.</p>
          </a>
        </div>
      </section>
      
    </main>
  </div>
</div>

<script>
/**
 * Configuración de búsqueda específica para la guía de Elden Ring.
 * El motor de búsqueda global en main.js utilizará estos datos.
 */
window.guideSiteIndex = [
    { title: "Limgrave Walkthrough", url: "walkthrough/limgrave", tags: "start, tutorial, stormveil", category: "Walkthrough" },
    { title: "Best Bleed Build (Rivers of Blood)", url: "builds#melee", tags: "arcane, dex, bleed, pvp", category: "Builds" },
    { title: "Malenia Boss Guide", url: "bosses/malenia", tags: "hardest, blade of miquella, flower", category: "Bosses" },
    { title: "Scadutree Fragment Locations", url: "dlc/fragments", tags: "dlc, upgrade, power", category: "DLC" },
    { title: "All Legendary Armaments", url: "equipment/legendary", tags: "trophy, achievements, weapons", category: "Database" },
    { title: "Trophy & Platinum Roadmap", url: "extras/achievements", tags: "100%, collectibles, trophy", category: "Extras" }
];
</script>
<script src="/js/main.js"></script>
<?php 
// 4. Carga del Footer Global (incluye main.js)
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>