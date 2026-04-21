<?php 
// 1. Definimos el título y descripción de esta página
$pageTitle = "Crimson Desert — Complete Guide | GuideVault";
$pageDesc = "The most complete Crimson Desert guide. Combat mechanics, all puzzle solutions, hidden treasures, boss strategies, best builds, and Abyss secrets.";

// 2. Cargamos el header
include 'header.php'; 
?>

  <header class="guide-hero">
    <div class="guide-hero-bg"></div>
    <div class="guide-hero-pattern"></div>
<div id="sparksContainer" style="position: absolute; inset: 0; overflow: hidden; pointer-events: none; z-index: 5;"></div>    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Crimson Desert</span>
      </nav>

      <div class="guide-hero-content">
        <div>
          <span class="guide-hero-tag">Definitive 100% Walkthrough · Updated March 2026</span>
          <h1 class="guide-hero-title">CRIMSON<br>DESERT</h1>
          <p class="guide-hero-subtitle">Conquer the Continent of Pywel</p>
          <p class="guide-hero-desc" style="color: rgba(255, 255, 255, 0.75); max-width: 650px; line-height: 1.6;">
            Master combat mechanics, discover all puzzle solutions, find hidden mythic treasures, dominate every boss, and follow our step-by-step chapter guides. Written by players with over 300+ combined hours.
          </p>
          <div class="guide-hero-badges">
            <span class="badge badge-new">New</span>
            <span class="badge badge-genre">Action RPG</span>
            <span class="badge badge-genre">Open World</span>
            <span class="badge badge-genre">Pearl Abyss · 2026</span>
          </div>

          <div class="hero-search-container">
              <input type="text" id="hubSearchInput" placeholder="Search guides, weapons, bosses, or chapters..." autocomplete="off">
              <div id="hubSearchResults" class="search-results-dropdown"></div>
          </div>
          
        </div>

        <div class="guide-hero-meta">
          <div class="guide-meta-card">
            <div class="guide-meta-item">
              <span class="guide-meta-key">Developer</span>
              <span class="guide-meta-val">Pearl Abyss</span>
            </div>
            <div class="guide-meta-item">
              <span class="guide-meta-key">Platform</span>
              <span class="guide-meta-val">PC · PS5 · Xbox Series X|S</span>
            </div>
            <div class="guide-meta-item">
              <span class="guide-meta-key">Release</span>
              <span class="guide-meta-val">March 19, 2026</span>
            </div>
            <div class="guide-meta-item">
              <span class="guide-meta-key">Guide Chapters</span>
              <span class="guide-meta-val">12 Planned</span>
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
        <li class="guide-toc-item"><a href="#story">1. Story & Lore</a></li>
        <li class="guide-toc-item"><a href="#combat">2. Combat System</a></li>
        <li class="guide-toc-item"><a href="#world">3. World of Pywel</a></li>
        <li class="guide-toc-item"><a href="#puzzles">4. Puzzles</a></li>
        <li class="guide-toc-item"><a href="#treasures">5. Treasures & Equipment</a></li>
        <li class="guide-toc-item"><a href="#activities">6. Activities & Crafting</a></li>
        <li class="guide-toc-item"><a href="#walkthrough">7. Quest Walkthrough</a></li>
        <li class="guide-toc-item"><a href="#extras">8. Extras & Appendices</a></li>
        <li class="guide-toc-item"><a href="faq">9. FAQ & Tips</a></li> 
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
              <li><a href="#story">1. Story & Lore</a></li>
              <li><a href="#combat">2. Combat System</a></li>
              <li><a href="#world">3. World of Pywel</a></li>
              <li><a href="#puzzles">4. Puzzles</a></li>
              <li><a href="#treasures">5. Treasures & Equipment</a></li>
              <li><a href="#activities">6. Activities & Crafting</a></li>
              <li><a href="#walkthrough">7. Quest Walkthrough</a></li>
              <li><a href="#extras">8. Extras & Appendices</a></li>
              <li><a href="faq">9. FAQ & Tips</a></li> 
              <li style="margin-top: 10px;"><a href="#support" style="color: #c9a84c;">Support the Guide</a></li>
          </ul>
      </div>

        <div class="guide-card-item reveal" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 1.5rem; background: linear-gradient(90deg, rgba(212, 168, 67, 0.1) 0%, transparent 100%); border-left: 4px solid var(--gold); padding: 2rem; margin: 3rem 0; border-radius: 4px;">
    <div style="flex: 1 1 300px;">
        <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 2rem; margin-bottom: 0.5rem; letter-spacing: 1px; text-transform: uppercase;">New to Pywel? Start Here</h3>
        <p style="color: #ccc; margin: 0; font-size: 1rem; line-height: 1.6;">10 essential tips for your first hours, common mistakes to avoid, and the best early-game weapons.</p>
    </div>
    <a href="extras/beginners-guide.php" style="background: var(--gold); color: var(--black); padding: 1rem 2rem; font-family: var(--font-ui); font-weight: bold; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 2px; border-radius: 4px; text-align: center; flex: 0 1 auto; white-space: nowrap; transition: transform 0.2s;">
        Read Guide →
    </a>
</div>
      </a>
      <section class="guide-section reveal" id="story">
        <span class="label">Chapter 1</span>
        <h2 class="guide-section-title">Story & Lore</h2>
        <p class="guide-section-intro">Understanding the lore of Pywel is key to making sense of every quest and world event.</p>
        <div class="guide-cards">
          <div class="guide-card-item reveal">
            <span class="guide-card-icon">🗡️</span>
            <h3>Kliff Macduff</h3>
            <p>The protagonist and mercenary leader of the Greymanes. Resurrected by the Abyss, he gains unique powers to rebuild his band.</p>
          </div>
          <div class="guide-card-item reveal">
            <span class="guide-card-icon">🌀</span>
            <h3>The Abyss</h3>
            <p>A mysterious realm that is the source of Kliff's powers and the game's central mystery.</p>
          </div>
          <div class="guide-card-item reveal">
            <span class="guide-card-icon">📜</span>
            <h3>Multiple Endings</h3>
            <p>Your choices regarding faction loyalty and Abyss powers trigger 3 distinct endings.</p>
          </div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="extras/lore" class="btn btn-gold">Read the Full Lore Archive</a>
        </div>
      </section>

      <section class="guide-section reveal" id="combat">
        <span class="label">Chapter 2</span>
        <h2 class="guide-section-title">Combat System</h2>
        <div class="guide-tabs">
          <div class="guide-tabs-nav">
            <button class="guide-tab-btn active" data-tab="c-basics">Fundamentals</button>
            <button class="guide-tab-btn" data-tab="c-builds">Best Builds</button>
            <button class="guide-tab-btn" data-tab="c-bosses">Boss Strategies</button>
          </div>

          <div class="guide-tab-panel active" id="c-basics">
            <div class="guide-cards">
              <div class="guide-card-item reveal"><span class="guide-card-icon">🛡️</span><h3>Block & Parry</h3><p>Perfect parries stagger enemies and open critical counter-attack windows.</p></div>
              <div class="guide-card-item reveal"><span class="guide-card-icon">⚡</span><h3>Dodge & Slide</h3><p>Chain slides to maintain momentum while avoiding heavy strikes.</p></div>
            </div>
          </div>

          <div class="guide-tab-panel" id="c-builds">
            <div class="guide-cards">
              <div class="guide-card-item reveal">
                <span class="guide-card-icon">🩸</span>
                <h3>Crimson Berserker</h3>
                <p><strong>Weapons:</strong> Dual Axes & Greatsword. Focus on stacking bleed and massive execution damage.</p>
              </div>
              <div class="guide-card-item reveal">
                <span class="guide-card-icon">⚡</span>
                <h3>Abyss Weaver</h3>
                <p><strong>Weapons:</strong> Sword/Shield & Crossbow. Use lightning to crowd control groups of enemies.</p>
              </div>
            </div>
          </div>

          <div class="guide-tab-panel" id="c-bosses">
            <div class="step-list">
              <div class="step reveal">
                <div class="step-num">1</div>
                <div class="step-content"><h4>The Reed Devil</h4><p>Weakness: Fire. Use pitch to disable his illusions in the Whispering Swamps.</p></div>
              </div>
              <div class="step reveal">
                <div class="step-num">2</div>
                <div class="step-content"><h4>Ancient Frost Dragon</h4><p>Use Level 2 Axiom Force to grapple onto its scales mid-flight and ground the beast.</p></div>
              </div>
            </div>
          </div>
        </div>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; margin-top: 2rem;">
    <a href="extras/builds" class="btn btn-gold">Explore Skill Trees & Builds</a>
    <a href="extras/bestiary" class="btn btn-gold" style="background: transparent; border: 2px solid var(--gold); color: var(--gold);">Open the Boss Bestiary</a>
</div>
      </section>

      <section class="guide-section reveal" id="world">
        <span class="label">Chapter 3</span>
        <h2 class="guide-section-title">The World of Pywel</h2>
        <div class="region-grid">
          <div class="region-card reveal"><span class="region-emoji">🌿</span><div class="region-name">Hernand</div><div class="region-desc">The starting region of plains and forests.</div></div>
          <div class="region-card reveal"><span class="region-emoji">🏰</span><div class="region-name">Pailune</div><div class="region-desc">The political heart of the continent.</div></div>
          <div class="region-card reveal"><span class="region-emoji">🏜️</span><div class="region-name">Crimson Desert</div><div class="region-desc">Late-game zone where the Abyss mystery is revealed.</div></div>
        </div>

        <h3 class="reveal" style="font-family:var(--font-display);font-size:1.5rem;color:var(--text);margin:2.5rem 0 1.25rem;">Secret Merchants</h3>
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead><tr><th>Merchant</th><th>Location</th><th>Items</th></tr></thead>
            <tbody>
              <tr><td>Midnight Peddler</td><td>Hernand (Night)</td><td>Rare Lockpicks, Poison Vials</td></tr>
              <tr><td>Master Blacksmith Varr</td><td>Demeniss Slums</td><td>Legendary Weapon Upgrades</td></tr>
            </tbody>
          </table>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="extras/interactive-map" class="btn btn-gold">Open Interactive World Map</a>
        </div>
      </section>
<h3 class="reveal" style="font-family:var(--font-display);font-size:1.5rem;color:var(--text);margin:3rem 0 1.25rem;">Major Factions & Reputation</h3>
        <div class="guide-cards">
          <div class="guide-card-item reveal" style="border-top: 3px solid #7f8c8d;">
            <h3>🐺 The Greymanes</h3>
            <p>Your own mercenary band. Upgrade your camp to recruit better fighters and unlock passive combat buffs.</p>
          </div>
          <div class="guide-card-item reveal" style="border-top: 3px solid #c0392b;">
            <h3>🦅 The Crimson Order</h3>
            <p>Elite royal guards of Demeniss. High hostility. Defeating their captains yields legendary enhancement stones.</p>
          </div>
        </div>
      <section class="guide-section reveal" id="puzzles">
        <span class="label">Chapter 4</span>
        <h2 class="guide-section-title">Puzzles</h2>
        
        <div class="guide-table-wrap reveal" style="margin-bottom: 1.5rem;">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Puzzle Category</th>
                <th>Total Count</th>
                <th>Key Rewards</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Abyss Puzzles</strong></td>
                <td><span class="pill pill-violet">40 Puzzles</span></td>
                <td>Abyss Energy, Skill Unlocks, Cores</td>
              </tr>
              <tr>
                <td><strong>Ancient Ruins</strong></td>
                <td><span class="pill pill-gold">37 Puzzles</span></td>
                <td>Abyss Artifacts, Memories of Tide</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 2rem;">
          <a href="extras/abyss-puzzles" class="reveal" style="display: inline-flex; align-items: center; gap: 0.6rem; background: rgba(138, 43, 226, 0.15); border: 1px solid #A29BFE; color: #A29BFE; padding: 0.8rem 1.5rem; border-radius: 6px; font-weight: bold; text-decoration: none; font-size: 1.05rem; transition: all 0.3s ease;"
             onmouseover="this.style.background='#A29BFE'; this.style.color='#000'; this.style.transform='translateY(-2px)';"
             onmouseout="this.style.background='rgba(138, 43, 226, 0.15)'; this.style.color='#A29BFE'; this.style.transform='translateY(0)';">
            <span style="font-size: 1.2rem;">🌀</span> Abyss Checklist (40)
          </a>

          <a href="extras/ancient-ruins" class="reveal" style="display: inline-flex; align-items: center; gap: 0.6rem; background: rgba(212, 175, 55, 0.15); border: 1px solid #D4AF37; color: #D4AF37; padding: 0.8rem 1.5rem; border-radius: 6px; font-weight: bold; text-decoration: none; font-size: 1.05rem; transition: all 0.3s ease;"
             onmouseover="this.style.background='#D4AF37'; this.style.color='#000'; this.style.transform='translateY(-2px)';"
             onmouseout="this.style.background='rgba(212, 175, 55, 0.15)'; this.style.color='#D4AF37'; this.style.transform='translateY(0)';">
            <span style="font-size: 1.2rem;">🏛️</span> Ruins Checklist (37)
          </a>
        </div>
      </section>

      <section class="guide-section reveal" id="treasures">
        <span class="label">Chapter 5</span>
        <h2 class="guide-section-title">Treasures & Equipment</h2>
        <div class="guide-cards">
          <div class="guide-card-item reveal"><span class="guide-card-icon">🗡️</span><h3>Sun-Kissed Blade</h3><p>Mythic Greatsword located at Akapen Peak. Causes spontaneous combustion.</p></div>
          <div class="guide-card-item reveal"><span class="guide-card-icon">🌟</span><h3>Moon-Shadow Steed</h3><p>Legendary Mount. Track silver hoofprints in Hernand during a full moon.</p></div>
          <div class="guide-card-item reveal"><span class="guide-card-icon">🏴‍☠️</span><h3 style="color:var(--gold); transition:color 0.2s; text-transform:uppercase;">Corsair's Cutlass</h3><p>Mythic Curved Sword hidden inside a sunken galleon off the Delesyia Coast. Deals massive damage to bleeding targets.</p></div>
          <div class="guide-card-item reveal"><span class="guide-card-icon">👑</span><h3 style="color:var(--gold); transition:color 0.2s; text-transform:uppercase;">Crown of the Unifier</h3><p>Ancient artifact buried deep within the Demeniss Royal Vaults. Grants the wearer total immunity to Abyss corruption.</p></div>
          <div class="guide-card-item reveal"><span class="guide-card-icon">❄️</span><h3 style="color:var(--gold); transition:color 0.2s; text-transform:uppercase;">Frost-Heart Amulet</h3><p>Legendary Relic found behind the frozen waterfall in the Kweiden Mountains. Passively regenerates health in freezing environments.</p></div>
          <div class="guide-card-item reveal"><span class="guide-card-icon">🏮</span><h3 style="color:var(--gold); transition:color 0.2s; text-transform:uppercase;">The Abyssal Lantern</h3><p>A mysterious light source dropped by the Reed Devil. Automatically reveals invisible traps and hidden pathways in the swamps.</p></div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="extras/equipment" class="btn btn-gold">Explore the Full Equipment Database</a>
        </div>
      </section>

      <section class="guide-section reveal" id="activities">
        <span class="label">Chapter 6</span>
        <h2 class="guide-section-title">Activities & Crafting</h2>
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead><tr><th>Dish</th><th>Ingredients</th><th>Effect</th></tr></thead>
            <tbody>
              <tr><td>Crimson Broth</td><td>Dragon Meat, Fire Pepper</td><td>+40% Health, Ice Immunity</td></tr>
              <tr><td>King's Feast</td><td>Truffle, Venison, Wine</td><td>+50% All Stats, Auto-Revive</td></tr>
            </tbody>
          </table>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="extras/crafting" class="btn btn-gold">View All Recipes & Crafting Materials</a>
        </div>
      </section>

      <section class="guide-section reveal" id="walkthrough">
        <span class="label">Chapter 7</span>
        <h2 class="guide-section-title">Main Quest Walkthrough</h2>
        <p class="guide-section-intro reveal">Select a chapter below for a meticulous, step-by-step guide including hidden items and complete boss strategies.</p>

        <div class="guide-cards">
          <a href="chapters/prologue" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🌙</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Prologue: Dead of Night</h3>
            <p>The inciting incident. Learn the basics and survive the ambush.</p>
          </a>
          <a href="chapters/chapter-1" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">⚔️</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 1: The First Encounter</h3>
            <p>Explore Hernand, solve the Trials of Kindness, and conquer the first Rift.</p>
          </a>
          <a href="chapters/chapter-2" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🏰</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 2: Shadows of Pailune</h3>
            <p>Arrive at the capital. Master the art of stealth and survive the political conspiracies.</p>
          </a>
          <a href="chapters/chapter-3" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🏔️</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 3: The Frozen Peaks</h3>
            <p>Survive the deadly cold of Kweiden and battle the Ancient Frost Dragon.</p>
          </a>
          <a href="chapters/chapter-4" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🏜️</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 4: The Endless Sand</h3>
            <p>Enter the Akapen Desert. Master the heat survival mechanics and uncover the secrets of the Sunken Temple.</p>
          </a>
          <a href="chapters/chapter-5" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🌊</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 5: The Blue Depths</h3>
            <p>Navigate the coast of Delesyia. Solve the mechanical ruins and defeat the Iron Sentinel.</p>
          </a>
          <a href="chapters/chapter-6" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🔥</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 6: The Scorched Earth</h3>
            <p>Lead the Greymanes in a massive siege and conquer the fires of Mount Harsand.</p>
          </a>
          <a href="chapters/chapter-7" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🌀</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 7: The Heart of the Abyss</h3>
            <p>Master zero-gravity and defeat the Abyss Overlord in the floating realm.</p>
          </a>
          <a href="chapters/chapter-8" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🏰</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 8: The Fallen Kingdom</h3>
            <p>Return to Demeniss for the final confrontation. Infiltrate the Palace and face the Corrupted King.</p>
          </a>
          <a href="chapters/chapter-9" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">✨</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 9: The Last Greymane</h3>
            <p>The path to redemption ends here. Defeat Myurdin, choose your destiny, and unlock all 3 game endings.</p>
          </a>
        </div>
      </section>

      <section class="guide-section reveal" id="extras">
        <span class="label">Chapter 8</span>
        <h2 class="guide-section-title">Extras & Appendices</h2>
        <p class="guide-section-intro reveal">Deep dives into specific game mechanics, companion storylines, and endgame content.</p>

        <div class="guide-cards">
          <a href="extras/achievements" class="guide-card-item reveal" style="text-decoration:none; border-color: rgba(46, 204, 113, 0.4);">
            <span class="guide-card-icon">🏆</span>
            <h3 style="color:#2ecc71; transition:color 0.2s;">Trophy / 100% Guide</h3>
            <p>The ultimate roadmap to Platinum. Tips for the hardest achievements and collectibles.</p>
          </a>
          
          <a href="extras/companions" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🤝</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Companion Quests</h3>
            <p>Complete all personal storylines for Oongka, Yann, and Naira to unlock the True Ending.</p>
          </a>

          <a href="extras/fashion" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">👗</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Cosmetics & Mounts</h3>
            <p>Fashion Souls awaits. Discover all armor sets, the transmog system, and how to tame the rarest mounts.</p>
          </a>

          <a href="faq" class="guide-card-item reveal" style="text-decoration:none; border-color: rgba(212, 175, 55, 0.6); background: rgba(212, 175, 55, 0.05);">
            <span class="guide-card-icon">❓</span>
            <h3 style="color:#D4AF37; transition:color 0.2s;">FAQ & Common Questions</h3>
            <p>Stuck on a mechanic? Find quick answers about Game Pass, Multiplayer, and opening Safes.</p>
          </a>
        </div>
      </section>

    </main>
  </div>

<script>
// =======================================================
// DATOS DEL BUSCADOR PARA CRIMSON DESERT
// (La lógica de búsqueda y chispas ya la gestiona main.js)
// =======================================================
window.guideSiteIndex = [
    /* --- CAPÍTULOS DE LA HISTORIA --- */
    { title: "Prologue: Dead of Night", url: "chapters/prologue", tags: "walkthrough, start, tutorial, chapter", category: "Walkthrough" },
    { title: "Chapter 1: The First Encounter", url: "chapters/chapter-1", tags: "walkthrough, hernand, boss, chapter", category: "Walkthrough" },
    { title: "Chapter 2: Shadows of Pailune", url: "chapters/chapter-2", tags: "walkthrough, pailune, stealth, chapter", category: "Walkthrough" },
    { title: "Chapter 3: The Frozen Peaks", url: "chapters/chapter-3", tags: "walkthrough, kweiden, dragon, chapter", category: "Walkthrough" },
    { title: "Chapter 4: The Endless Sand", url: "chapters/chapter-4", tags: "walkthrough, akapen, desert, chapter", category: "Walkthrough" },
    { title: "Chapter 5: The Blue Depths", url: "chapters/chapter-5", tags: "walkthrough, delesyia, coast, chapter", category: "Walkthrough" },
    { title: "Chapter 6: The Scorched Earth", url: "chapters/chapter-6", tags: "walkthrough, harsand, volcano, chapter", category: "Walkthrough" },
    { title: "Chapter 7: The Heart of the Abyss", url: "chapters/chapter-7", tags: "walkthrough, abyss, floating, chapter", category: "Walkthrough" },
    { title: "Chapter 8: The Fallen Kingdom", url: "chapters/chapter-8", tags: "walkthrough, demeniss, palace, boss, chapter", category: "Walkthrough" },
    { title: "Chapter 9: The Last Greymane", url: "chapters/chapter-9", tags: "walkthrough, ending, finale, true ending, chapter", category: "Walkthrough" },

    /* --- BASES DE DATOS Y MAPAS --- */
    { title: "Equipment Database (Weapons & Armor)", url: "extras/equipment", tags: "sword, shield, gear, forge, relic, mythic", category: "Database" },
    { title: "Bestiary & Boss Weaknesses", url: "extras/bestiary", tags: "dragon, troll, monster, boss, weakness", category: "Database" },
    { title: "Interactive World Map", url: "extras/interactive-map", tags: "map, locations, chests, watchtowers, fast travel", category: "Exploration" },

    /* --- GUÍAS Y EXTRAS --- */
    { title: "Trophy & 100% Completion Guide", url: "extras/achievements", tags: "platinum, achievements, secret, missable", category: "Extras" },
    { title: "Crafting & Cooking Recipes", url: "extras/crafting", tags: "food, alchemy, potions, ingredients", category: "Guides" },
    { title: "Skill Tree & Endgame Builds", url: "extras/builds", tags: "berserker, assassin, magic, skills", category: "Guides" },
    { title: "Companion Quests (Naira, Oongka)", url: "extras/companions", tags: "romance, loyalty, friends", category: "Story" },
    { title: "Lore & Story Archive", url: "extras/lore", tags: "abyss, kliff, history, background", category: "Story" },
    { title: "Cosmetics & Mounts", url: "extras/fashion", tags: "fashion, transmog, horse, appearance, skins", category: "Extras" },
    
    /* --- PUZLES Y FAQ --- */
    { title: "Abyss Puzzles Checklist", url: "extras/abyss-puzzles", tags: "puzzle, abyss energy, cores", category: "Puzzles" },
    { title: "Ancient Ruins Puzzles", url: "extras/ancient-ruins", tags: "puzzle, ruins, artifacts", category: "Puzzles" },
    { title: "FAQ & Common Questions", url: "faq", tags: "help, tips, multiplayer, game pass", category: "Support" }
];
</script>

<?php 
// 3. Cargamos el footer
include 'footer.php'; 
?>