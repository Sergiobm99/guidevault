<?php 
// 1. Definimos el título y descripción de esta página
$pageTitle = "Elden Ring — Complete Guide | GuideVault";
$pageDesc = "The most complete Elden Ring guide. Combat mechanics, all puzzle solutions, hidden treasures, boss strategies, best builds, and Shadow of the Erdtree secrets.";

// 2. Cargamos el header principal (que ahora sí cargará el guide.css)
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
  <header class="guide-hero">
    <div class="guide-hero-bg" ></div>

    <div class="guide-hero-pattern"></div>
    <div id="sparksContainer" style="position: absolute; inset: 0; overflow: hidden; pointer-events: none; z-index: 5;"></div>    
    
    <div class="guide-hero-inner" style="position: relative; z-index: 10;">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Elden Ring</span>
      </nav>

      <div class="guide-hero-content">
        <div>
          <span class="guide-hero-tag">Definitive 100% Walkthrough · Updated April 2026</span>
          <h1 class="guide-hero-title" style="color: #D4AF37; text-shadow: 0 0 20px rgba(212, 175, 55, 0.3);">ELDEN<br>RING</h1>
          <p class="guide-hero-subtitle">Conquer the Lands Between</p>
          <p class="guide-hero-desc" style="color: rgba(255, 255, 255, 0.75); max-width: 650px; line-height: 1.6;">
            Master combat mechanics, discover all hidden paths, find legendary armaments, dominate every demigod, and follow our step-by-step chapter guides for the base game and DLC. Written by players with over 500+ combined hours.
          </p>
          <div class="guide-hero-badges">
            <span class="badge badge-new" style="background: #9b59b6; color: white; border-color: #9b59b6;">DLC Included</span>
            <span class="badge badge-genre">Action RPG</span>
            <span class="badge badge-genre">Open World</span>
            <span class="badge badge-genre">FromSoftware · 2022</span>
          </div>

          <div class="hero-search-container">
              <input type="text" id="hubSearchInput" placeholder="Search guides, weapons, bosses, or regions..." autocomplete="off">
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
        <li class="guide-toc-item"><a href="#story">1. Story & Lore</a></li>
        <li class="guide-toc-item"><a href="#combat">2. Combat System</a></li>
        <li class="guide-toc-item"><a href="#world">3. The Lands Between</a></li>
        <li class="guide-toc-item"><a href="#puzzles">4. Secrets & Puzzles</a></li>
        <li class="guide-toc-item"><a href="#treasures">5. Legendary Armaments</a></li>
        <li class="guide-toc-item"><a href="#activities">6. Crafting & Activities</a></li>
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
              <li><a href="#world">3. The Lands Between</a></li>
              <li><a href="#puzzles">4. Secrets & Puzzles</a></li>
              <li><a href="#treasures">5. Legendary Armaments</a></li>
              <li><a href="#activities">6. Crafting & Activities</a></li>
              <li><a href="#walkthrough">7. Quest Walkthrough</a></li>
              <li><a href="#extras">8. Extras & Appendices</a></li>
              <li><a href="faq">9. FAQ & Tips</a></li> 
              <li style="margin-top: 10px;"><a href="#support" style="color: var(--gold);">Support the Guide</a></li>
          </ul>
      </div>

      <div class="guide-card-item reveal" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 1.5rem; background: linear-gradient(90deg, rgba(212, 175, 55, 0.1) 0%, transparent 100%); border-left: 4px solid var(--gold); padding: 2rem; margin: 3rem 0; border-radius: 4px;">
          <div style="flex: 1 1 300px;">
              <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 2rem; margin-bottom: 0.5rem; letter-spacing: 1px; text-transform: uppercase;">New to The Lands Between? Start Here</h3>
              <p style="color: #ccc; margin: 0; font-size: 1rem; line-height: 1.6;">10 essential tips for your first hours, common mistakes to avoid, and the best early-game weapons.</p>
          </div>
          <a href="extras/beginner-guide.php" style="background: var(--gold); color: var(--black); padding: 1rem 2rem; font-family: var(--font-ui); font-weight: bold; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 2px; border-radius: 4px; text-align: center; flex: 0 1 auto; white-space: nowrap; transition: transform 0.2s;">
            Read Guide →
          </a>
      </div>

      <section class="guide-section reveal" id="story">
        <span class="label">Chapter 1</span>
        <h2 class="guide-section-title">Story & Lore</h2>
        <p class="guide-section-intro">Understanding the history of the Shattering is key to making sense of every quest and world event.</p>
        <div class="guide-cards">
          <div class="guide-card-item reveal">
            <span class="guide-card-icon">🗡️</span>
            <h3>The Tarnished</h3>
            <p>Once banished from the Lands Between, you have been called back by Grace to restore the Elden Ring and become the Elden Lord.</p>
          </div>
          <div class="guide-card-item reveal">
            <span class="guide-card-icon">🌳</span>
            <h3>The Erdtree</h3>
            <p>The glowing golden tree that dominates the sky. It is the source of life and the physical manifestation of the Golden Order.</p>
          </div>
          <div class="guide-card-item reveal">
            <span class="guide-card-icon">📜</span>
            <h3>Multiple Endings</h3>
            <p>Your choices regarding NPC questlines and mending runes trigger 6 completely distinct endings.</p>
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
            <button class="guide-tab-btn active" data-tab="c-basics">Combat System</button>
            <button class="guide-tab-btn" data-tab="c-builds">Best Builds</button>
            <button class="guide-tab-btn" data-tab="c-bosses">Boss Strategies</button>
          </div>

          <div class="guide-tab-panel active" id="c-basics">
            <div class="guide-cards">
              <div class="guide-card-item reveal"><span class="guide-card-icon">🛡️</span><h3>Guard Counters</h3><p>Press heavy attack immediately after blocking to stagger enemies and open critical windows.</p></div>
              <div class="guide-card-item reveal"><span class="guide-card-icon">⚡</span><h3>Dodge & I-Frames</h3><p>Rolling gives you invincibility frames. Always roll INTO large attacks, not away from them.</p></div>
            </div>
          </div>

          <div class="guide-tab-panel" id="c-builds">
            <div class="guide-cards">
              <div class="guide-card-item reveal">
                <span class="guide-card-icon">🩸</span>
                <h3>Lord of Blood</h3>
                <p><strong>Weapons:</strong> Rivers of Blood & Poleblade. Focus on stacking bleed and massive execution damage via Arcane.</p>
              </div>
              <div class="guide-card-item reveal">
                <span class="guide-card-icon">🔮</span>
                <h3>Comet Azur Mage</h3>
                <p><strong>Weapons:</strong> Lusat's Staff & Magic. Use the infinite FP tear to laser-beam bosses into oblivion.</p>
              </div>
            </div>
          </div>

          <div class="guide-tab-panel" id="c-bosses">
            <div class="step-list">
              <div class="step reveal">
                <div class="step-num">1</div>
                <div class="step-content"><h4>Margit, the Fell Omen</h4><p>Weakness: Poison/Bleed. Use Margit's Shackle to pin him down during the first phase.</p></div>
              </div>
              <div class="step reveal">
                <div class="step-num">2</div>
                <div class="step-content"><h4>Malenia, Blade of Miquella</h4><p>Use Freezing Pots to knock her out of the air when she charges her Waterfowl Dance.</p></div>
              </div>
            </div>
          </div>
        </div>
        
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; margin-top: 2rem;">
            <a href="extras/builds" class="btn btn-gold">Explore Skill Trees & Builds</a>
            <a href="extras/bestiary" class="btn btn-gold" style="background: transparent; border: 2px solid var(--gold); color: var(--gold);">Open the Boss Bestiary</a>
        </div>
      </section>

      <div class="guide-card-item reveal" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 1.5rem; background: linear-gradient(90deg, rgba(212, 175, 55, 0.1) 0%, rgba(231, 76, 60, 0.1) 100%); border-left: 4px solid #e74c3c; padding: 2rem; margin: 3rem 0; border-radius: 4px;">
          <div style="flex: 1 1 300px;">
              <span class="label" style="color: #e74c3c; font-size: 0.8rem;">NEW TOOL</span>
              <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 2rem; margin-bottom: 0.5rem; letter-spacing: 1px; text-transform: uppercase;">Interactive AR Calculator</h3>
              <p style="color: #ccc; margin: 0; font-size: 1rem; line-height: 1.6;">Test your Attack Rating (AR), Defense, and Poise with our real-time build planner. Optimize your character before the final boss.</p>
          </div>
          <a href="extras/builds.php#calculator" style="background: #e74c3c; color: white; padding: 1rem 2rem; font-family: var(--font-ui); font-weight: bold; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 2px; border-radius: 4px; text-align: center; flex: 0 1 auto; white-space: nowrap; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
              Open Calculator →
          </a>
      </div>

      <section class="guide-section reveal" id="world">
        <span class="label">Chapter 3</span>
        <h2 class="guide-section-title">The Lands Between</h2>
        <div class="region-grid">
          <div class="region-card reveal"><span class="region-emoji">🌿</span><div class="region-name">Limgrave</div><div class="region-desc">The starting region of plains and forests.</div></div>
          <div class="region-card reveal"><span class="region-emoji">🏰</span><div class="region-name">Leyndell</div><div class="region-desc">The political heart and golden capital.</div></div>
          <div class="region-card reveal"><span class="region-emoji">🏜️</span><div class="region-name" style="color: #8C2D2D;">Caelid</div><div class="region-desc">Mid-game zone corrupted by the deadly Scarlet Rot.</div></div>
        </div>

        <h3 class="reveal" style="font-family:var(--font-display);font-size:1.5rem;color:var(--text);margin:2.5rem 0 1.25rem;">Secret Merchants</h3>
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead><tr><th>Merchant</th><th>Location</th><th>Items</th></tr></thead>
            <tbody>
              <tr><td>Isolated Merchant</td><td>Dragonbarrow (Caelid)</td><td>Beast-Repellent Torch, Spiked Caestus</td></tr>
              <tr><td>Miriel, Pastor of Vows</td><td>Church of Vows (Liurnia)</td><td>Legendary Sorceries and Incantations</td></tr>
            </tbody>
          </table>
        </div>
        
        <h3 class="reveal" style="font-family:var(--font-display);font-size:1.5rem;color:var(--text);margin:3rem 0 1.25rem;">Major Factions & Demigods</h3>
        <div class="guide-cards">
          <div class="guide-card-item reveal" style="border-top: 3px solid #f1c40f;">
            <h3>👑 The Golden Order</h3>
            <p>Followers of Queen Marika and the Erdtree. Deeply embedded in Leyndell. Hostile to those who live in Death.</p>
          </div>
          <div class="guide-card-item reveal" style="border-top: 3px solid #8e44ad;">
            <h3>🌌 Carian Royals</h3>
            <p>Masters of Glintstone Sorcery based in Liurnia. Allying with Ranni unlocks the game's most elaborate questline.</p>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="puzzles">
        <span class="label">Chapter 4</span>
        <h2 class="guide-section-title">Secrets & Puzzles</h2>
        
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
                <td><strong>Evergaols</strong></td>
                <td><span class="pill pill-violet">15 Prisons</span></td>
                <td>Legendary Ashes, Talismans, Weapons</td>
              </tr>
              <tr>
                <td><strong>Divine Towers</strong></td>
                <td><span class="pill pill-gold">6 Towers</span></td>
                <td>Restored Great Runes</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 2rem;">
          <a href="extras/evergaols" class="reveal" style="display: inline-flex; align-items: center; gap: 0.6rem; background: rgba(138, 43, 226, 0.15); border: 1px solid #A29BFE; color: #A29BFE; padding: 0.8rem 1.5rem; border-radius: 6px; font-weight: bold; text-decoration: none; font-size: 1.05rem; transition: all 0.3s ease;"
             onmouseover="this.style.background='#A29BFE'; this.style.color='#000'; this.style.transform='translateY(-2px)';"
             onmouseout="this.style.background='rgba(138, 43, 226, 0.15)'; this.style.color='#A29BFE'; this.style.transform='translateY(0)';">
            <span style="font-size: 1.2rem;">🌀</span> Evergaol Locations (15)
          </a>

          <a href="extras/divine-towers" class="reveal" style="display: inline-flex; align-items: center; gap: 0.6rem; background: rgba(212, 175, 55, 0.15); border: 1px solid #D4AF37; color: #D4AF37; padding: 0.8rem 1.5rem; border-radius: 6px; font-weight: bold; text-decoration: none; font-size: 1.05rem; transition: all 0.3s ease;"
             onmouseover="this.style.background='#D4AF37'; this.style.color='#000'; this.style.transform='translateY(-2px)';"
             onmouseout="this.style.background='rgba(212, 175, 55, 0.15)'; this.style.color='#D4AF37'; this.style.transform='translateY(0)';">
            <span style="font-size: 1.2rem;">🏛️</span> Divine Towers Guide (6)
          </a>
        </div>
      </section>

      <section class="guide-section reveal" id="treasures">
        <span class="label">Chapter 5</span>
        <h2 class="guide-section-title">Legendary Armaments</h2>
        <div class="guide-cards">
          <div class="guide-card-item reveal"><span class="guide-card-icon">🗡️</span><h3>Dark Moon Greatsword</h3><p>Mythic weapon located beneath the Cathedral of Manus Celes. Earned via Ranni's Questline.</p></div>
          <div class="guide-card-item reveal"><span class="guide-card-icon">🌟</span><h3>Sword of Night and Flame</h3><p>Legendary armament. Found in a locked chest in Caria Manor. Scales with INT and FAI.</p></div>
          <div class="guide-card-item reveal"><span class="guide-card-icon">🏴‍☠️</span><h3 style="color:var(--gold); transition:color 0.2s; text-transform:uppercase;">Marais Executioner's Sword</h3><p>Dropped by Elemer of the Briar in The Shaded Castle. Deals massive drill damage.</p></div>
          <div class="guide-card-item reveal"><span class="guide-card-icon">👑</span><h3 style="color:var(--gold); transition:color 0.2s; text-transform:uppercase;">Bolt of Gransax</h3><p>Ancient artifact found upon the giant golden spear in Leyndell. Missable if not collected before the endgame!</p></div>
          <div class="guide-card-item reveal"><span class="guide-card-icon">❄️</span><h3 style="color:var(--gold); transition:color 0.2s; text-transform:uppercase;">Ruins Greatsword</h3><p>Legendary weapon found in Redmane Castle Plaza after defeating the Misbegotten Warrior duo.</p></div>
          <div class="guide-card-item reveal"><span class="guide-card-icon">🏮</span><h3 style="color:var(--gold); transition:color 0.2s; text-transform:uppercase;">Golden Order Greatsword</h3><p>A sword made of pure light, dropped by the Misbegotten Crusader in the Cave of the Forlorn.</p></div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="extras/equipment" class="btn btn-gold">Explore the Full Equipment Database</a>
        </div>
      </section>

      <section class="guide-section reveal" id="activities">
        <span class="label">Chapter 6</span>
        <h2 class="guide-section-title">Crafting & Activities</h2>
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead><tr><th>Item</th><th>Ingredients</th><th>Effect</th></tr></thead>
            <tbody>
              <tr><td>Exalted Flesh</td><td>Rowa Fruit, Lump of Flesh, Arteria Leaf</td><td>Boosts physical attack power by 20% for 30s.</td></tr>
              <tr><td>Uplifting Aromatic</td><td>Altus Bloom, Budding Cave Moss, Silver Tear Husk</td><td>Grants a shield that absorbs one hit and boosts ally damage.</td></tr>
            </tbody>
          </table>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="extras/crafting" class="btn btn-gold">View All Recipes & Cookbooks</a>
        </div>
      </section>

      <section class="guide-section reveal" id="walkthrough">
        <span class="label">Chapter 7</span>
        <h2 class="guide-section-title">Main Quest Walkthrough</h2>
        <p class="guide-section-intro reveal">Select a chapter below for a meticulous, step-by-step guide including hidden items and complete boss strategies.</p>

        <div class="guide-cards">
          <a href="chapters/prologue.php" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🌙</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Prologue: Chapel of Anticipation</h3>
            <p>The inciting incident. Learn the basics and face the Grafted Scion.</p>
          </a>
          <a href="chapters/chapter-1.php" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">⚔️</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 1: Limgrave & Stormveil</h3>
            <p>Explore the starting area, defeat Margit, and conquer Godrick the Grafted.</p>
          </a>
          <a href="chapters/chapter-2.php" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🏰</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 2: Liurnia of the Lakes</h3>
            <p>Arrive at the Academy of Raya Lucaria. Defeat Rennala and unlock respec.</p>
          </a>
          <a href="chapters/chapter-3.php" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🏔️</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 3: The Caelid Wilds</h3>
            <p>Survive the deadly rot and battle Starscourge Radahn in the festival.</p>
          </a>
          <a href="chapters/chapter-4.php" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🏜️</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 4: Altus Plateau</h3>
            <p>Enter the golden fields. Uncover the secrets of Mt. Gelmir and Volcano Manor.</p>
          </a>
          <a href="chapters/chapter-5.php" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">👑</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 5: Leyndell, Royal Capital</h3>
            <p>Navigate the golden city, find the sewers, and face Morgott the Omen King.</p>
          </a>
          <a href="chapters/chapter-6.php" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">❄️</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 6: Mountaintops of the Giants</h3>
            <p>Brave the freezing snowfields and defeat the Fire Giant at the forge.</p>
          </a>
          <a href="chapters/chapter-7.php" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🌪️</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 7: Crumbling Farum Azula</h3>
            <p>Navigate the floating ruins and claim Destined Death from Maliketh.</p>
          </a>
          <a href="chapters/chapter-8.php" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🔥</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Chapter 8: The Ashen Capital</h3>
            <p>Return to Leyndell for the final boss rush. Choose your destiny and ending.</p>
          </a>
          <a href="chapters/chapter-9-DLC.php" class="guide-card-item reveal" style="text-decoration:none; border-color: #9b59b6;">
            <span class="guide-card-icon">🌑</span>
            <h3 style="color:#9b59b6; transition:color 0.2s;">DLC: Shadow of the Erdtree</h3>
            <p>Enter the Land of Shadow, gather Scadutree fragments, and face Messmer the Impaler.</p>
          </a>
        </div>
      </section>

      <section class="guide-section reveal" id="extras">
        <span class="label">Chapter 8</span>
        <h2 class="guide-section-title">Extras & Appendices</h2>
        <p class="guide-section-intro reveal">Deep dives into specific game mechanics, NPC storylines, and endgame content.</p>

        <div class="guide-cards">
          <a href="extras/achievements.php" class="guide-card-item reveal" style="text-decoration:none; border-color: rgba(46, 204, 113, 0.4);">
            <span class="guide-card-icon">🏆</span>
            <h3 style="color:#2ecc71; transition:color 0.2s;">Trophy / 100% Guide</h3>
            <p>The ultimate roadmap to Platinum. Tips for the hardest achievements and collectibles.</p>
          </a>
          
          <a href="extras/quests" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">🤝</span>
            <h3 style="color:var(--text); transition:color 0.2s;">NPC Questlines</h3>
            <p>Complete all personal storylines for Ranni, Millicent, and Alexander to unlock true endings.</p>
          </a>

          <a href="extras/fashion.php" class="guide-card-item reveal" style="text-decoration:none;">
            <span class="guide-card-icon">👗</span>
            <h3 style="color:var(--text); transition:color 0.2s;">Cosmetics & Armor</h3>
            <p>Elden Bling awaits. Discover all armor sets and how to alter garments.</p>
          </a>

          <a href="faq.php" class="guide-card-item reveal" style="text-decoration:none; border-color: rgba(212, 175, 55, 0.6); background: rgba(212, 175, 55, 0.05);">
            <span class="guide-card-icon">❓</span>
            <h3 style="color:#D4AF37; transition:color 0.2s;">FAQ & Common Questions</h3>
            <p>Stuck on a mechanic? Find quick answers about Multiplayer, Co-op, and soft caps.</p>
          </a>
        </div>
      </section>

    </main>
  </div>
</div>

<script>
window.guideSiteIndex = [
    { title: "Prologue: Chapel of Anticipation", url: "chapters/prologue", tags: "walkthrough, start, tutorial, chapter", category: "Walkthrough" },
    { title: "Chapter 1: Limgrave & Stormveil", url: "chapters/chapter-1", tags: "walkthrough, limgrave, boss, chapter", category: "Walkthrough" },
    { title: "Chapter 2: Liurnia of the Lakes", url: "chapters/chapter-2", tags: "walkthrough, liurnia, magic, chapter", category: "Walkthrough" },
    { title: "Chapter 3: The Caelid Wilds", url: "chapters/chapter-3", tags: "walkthrough, caelid, radahn, chapter", category: "Walkthrough" },
    { title: "Chapter 4: Altus Plateau", url: "chapters/chapter-4", tags: "walkthrough, altus, volcano, chapter", category: "Walkthrough" },
    { title: "Chapter 5: Leyndell, Royal Capital", url: "chapters/chapter-5", tags: "walkthrough, leyndell, capital, chapter", category: "Walkthrough" },
    { title: "Chapter 6: Mountaintops of the Giants", url: "chapters/chapter-6", tags: "walkthrough, mountaintops, snow, chapter", category: "Walkthrough" },
    { title: "Chapter 7: Crumbling Farum Azula", url: "chapters/chapter-7", tags: "walkthrough, farum azula, floating, chapter", category: "Walkthrough" },
    { title: "Chapter 8: The Ashen Capital", url: "chapters/chapter-8", tags: "walkthrough, ashen, palace, boss, chapter", category: "Walkthrough" },
    { title: "DLC: Shadow of the Erdtree", url: "chapters/chapter-9-DLC", tags: "walkthrough, ending, finale, true ending, chapter", category: "Walkthrough" },
    { title: "Equipment Database (Weapons & Armor)", url: "extras/equipment", tags: "sword, shield, gear, forge, relic, mythic", category: "Database" },
    { title: "Bestiary & Boss Weaknesses", url: "extras/bestiary", tags: "dragon, troll, monster, boss, weakness", category: "Database" },
    { title: "Interactive World Map", url: "extras/interactive-map", tags: "map, locations, chests, watchtowers, fast travel", category: "Exploration" },
    { title: "Trophy & 100% Completion Guide", url: "extras/achievements", tags: "platinum, achievements, secret, missable", category: "Extras" },
    { title: "Crafting & Cookbooks", url: "extras/crafting", tags: "food, alchemy, potions, ingredients", category: "Guides" },
    { title: "Skill Tree & Endgame Builds", url: "extras/builds", tags: "berserker, assassin, magic, skills", category: "Guides" },
    { title: "NPC Quests (Ranni, Millicent)", url: "extras/quests", tags: "romance, loyalty, friends", category: "Story" },
    { title: "Lore & Story Archive", url: "extras/lore", tags: "abyss, kliff, history, background", category: "Story" },
    { title: "Cosmetics & Armor", url: "extras/fashion", tags: "fashion, transmog, horse, appearance, skins", category: "Extras" },
    { title: "Evergaols Checklist", url: "extras/evergaols", tags: "puzzle, abyss energy, cores", category: "Puzzles" },
    { title: "Divine Towers Guide", url: "extras/divine-towers", tags: "puzzle, ruins, artifacts", category: "Puzzles" },
    { title: "FAQ & Common Questions", url: "faq", tags: "help, tips, multiplayer, game pass", category: "Support" },
    { title: "Skill Tree, Builds & AR Calculator", url: "builds.php", tags: "berserker, assassin, magic, skills, damage, attack rating, stats, planner", category: "Tools" }
];
</script>

<?php 
// 3. Cargamos el footer
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>