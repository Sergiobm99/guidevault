<?php 
$pageTitle = "Bestiary & Boss Weaknesses | Crimson Desert Guide";
$pageDesc = "Complete monster compendium. Discover enemy weaknesses, elemental resistances, and tactics for every major boss in Pywel.";
$bodyClass = "theme-crimson-desert"; 

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(139, 0, 0, 0.15) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(40, 5, 5, 0.8) 0%, transparent 60%), linear-gradient(180deg, #0a0505 0%, #140505 60%, #0a0505 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Bestiary</span>
      </nav>
      <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">GAME DATABASE</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem;">The Bestiary</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">Monsters, Factions, and Boss Weaknesses</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Contents</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#common" style="color: var(--text-dim); transition: color 0.2s;">1. Common Factions</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#status" style="color: var(--text-dim); transition: color 0.2s;">2. Status Effects</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#boss-rush" style="color: var(--text-dim); transition: color 0.2s;">3. Boss Tactics</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#hunts" style="color: var(--text-dim); transition: color 0.2s;">4. Elite Hunts</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="common" style="margin-bottom: 4rem;">
        <div class="callout danger" style="border-left: 4px solid #e74c3c; background: rgba(231, 76, 60, 0.1); padding: 1.5rem; margin-bottom: 3rem;">
          <span class="callout-label" style="color: #e74c3c; font-weight: bold; text-transform: uppercase;">The Hunter's Eye</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Always use the <strong>[Observation]</strong> skill when encountering a new enemy type. Not only does this add them to your in-game journal, but it permanently reveals their health bar and elemental weaknesses for future encounters.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. Common Factions & Creatures</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Before facing gods and monsters, you must survive the harsh wildlife and rival mercenary bands of Pywel.</p>

        <div class="bestiary-controls" style="margin-bottom: 2rem; background: var(--dark-2); padding: 1.5rem; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.1);">
            <div style="margin-bottom: 1rem; position: relative;">
                <input type="text" id="bestiarySearch" placeholder="🔍 Search monsters, locations, weaknesses, or loot..." style="width: 100%; padding: 12px 15px; border-radius: 4px; background: var(--dark-1); border: 1px solid rgba(255, 255, 255, 0.1); color: var(--text); font-family: 'Rajdhani', sans-serif; font-size: 1rem; outline: none;">
            </div>

            <div class="quick-filters" style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                <span style="color: var(--text-dim); font-size: 0.9rem; margin-right: 0.5rem; align-self: center;">Quick Filters:</span>
                <button class="filter-btn active" data-filter="" style="background: rgba(255,255,255,0.1); border: none; color: white; padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; cursor: pointer;">All</button>
                <button class="filter-btn" data-filter="fire" style="background: rgba(231, 76, 60, 0.2); border: 1px solid #e74c3c; color: #e74c3c; padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; cursor: pointer;">🔥 Fire</button>
                <button class="filter-btn" data-filter="ice" style="background: rgba(52, 152, 219, 0.2); border: 1px solid #3498db; color: #3498db; padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; cursor: pointer;">❄️ Ice</button>
                <button class="filter-btn" data-filter="lightning" style="background: rgba(241, 196, 15, 0.2); border: 1px solid #f1c40f; color: #f1c40f; padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; cursor: pointer;">⚡ Lightning</button>
                <button class="filter-btn" data-filter="poison" style="background: rgba(46, 204, 113, 0.2); border: 1px solid #2ecc71; color: #2ecc71; padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; cursor: pointer;">🧪 Poison</button>
                <button class="filter-btn" data-filter="axiom" style="background: rgba(155, 89, 182, 0.2); border: 1px solid #9b59b6; color: #9b59b6; padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; cursor: pointer;">✨ Axiom</button>
            </div>
        </div>

        <div class="guide-table-wrap">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Enemy Type</th>
                <th>Primary Location</th>
                <th>Weakness</th>
                <th>Notable Loot</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Black Bear Mercenaries</strong></td>
                <td>Hernand / Harsand</td>
                <td><span class="pill pill-blue">Poison</span></td>
                <td>Iron Ore, Mercenary Tokens</td>
              </tr>
              <tr>
                <td><strong>Demeniss Royal Guards</strong></td>
                <td>Demeniss Capital</td>
                <td><span class="pill pill-blue">Poison</span></td>
                <td>Steel Ingot, Royal Insignia</td>
              </tr>
              <tr>
                <td><strong>Crimson Cultists</strong></td>
                <td>Hidden Dungeons</td>
                <td><span class="pill pill-gold" style="color:#ffd700; border-color:#ffd700;">Lightning</span></td>
                <td>Occult Scroll, Void Essence</td>
              </tr>
              <tr>
                <td><strong>Akapen Desert Bandits</strong></td>
                <td>Akapen Desert</td>
                <td><span class="pill pill-red">Fire</span></td>
                <td>Stolen Goods, Gold Coins</td>
              </tr>

              <tr>
                <td><strong>Dire Wolves</strong></td>
                <td>Hernand Plains</td>
                <td><span class="pill pill-red">Fire</span></td>
                <td>Wolf Pelt, Prime Meat</td>
              </tr>
              <tr>
                <td><strong>Highland Harpies</strong></td>
                <td>Kweiden Peaks</td>
                <td><span class="pill pill-gold" style="color:#ffd700; border-color:#ffd700;">Lightning</span></td>
                <td>Harpy Feather, Wind Crystal</td>
              </tr>
              <tr>
                <td><strong>Giant Armored Crabs</strong></td>
                <td>Delesyia Coast</td>
                <td><span class="pill pill-gold" style="color:#ffd700; border-color:#ffd700;">Lightning</span></td>
                <td>Crab Meat, Sturdy Shell</td>
              </tr>
              <tr>
                <td><strong>Akapen Sandcrawlers</strong></td>
                <td>Akapen Desert</td>
                <td><span class="pill pill-blue" style="color: #3498db; border-color: #3498db;">Ice</span></td>
                <td>Sandcrawler Shell, Monster Meat</td>
              </tr>

              <tr>
                <td><strong>Kweiden Ice Trolls</strong></td>
                <td>Kweiden Mountains</td>
                <td><span class="pill pill-red">Fire</span></td>
                <td>Troll Hide, Thick Bone</td>
              </tr>
              <tr>
                <td><strong>Whispering Swamp Lurkers</strong></td>
                <td>Whispering Swamps</td>
                <td><span class="pill pill-red">Fire</span></td>
                <td>Toxic Gland, Swamp Moss</td>
              </tr>
              <tr>
                <td><strong>Mechanical Sentinels</strong></td>
                <td>Delesyia Coast</td>
                <td><span class="pill pill-gold" style="color:#ffd700; border-color:#ffd700;">Lightning</span></td>
                <td>Liquid Mercury, Gears</td>
              </tr>
              <tr>
                <td><strong>Ancient Golems</strong></td>
                <td>Elven Ruins</td>
                <td><span class="pill pill-blue" style="color: #3498db; border-color: #3498db;">Ice / Water</span></td>
                <td>Stone Core, Magic Dust</td>
              </tr>
              <tr>
                <td><strong>Bloodfiends</strong></td>
                <td>Pailune Slums (Night)</td>
                <td><span class="pill" style="color: #9b59b6; border: 1px solid #9b59b6;">Axiom Force</span></td>
                <td>Vampire's Blood, Tattered Cloth</td>
              </tr>

              <tr>
                <td><strong>Abyss Stalkers</strong></td>
                <td>Abyss Rifts</td>
                <td><span class="pill" style="color: #9b59b6; border: 1px solid #9b59b6;">Axiom Force</span></td>
                <td>Void Essence, Abyssal Ingot</td>
              </tr>
              <tr>
                <td><strong>Corrupted Knights</strong></td>
                <td>Abyss Rifts / Demeniss</td>
                <td><span class="pill" style="color: #9b59b6; border: 1px solid #9b59b6;">Axiom Force</span></td>
                <td>Corrupted Armor Fragment, Dark Steel</td>
              </tr>
              <tr>
                <td><strong>Void Weavers</strong></td>
                <td>Master-Level Rifts</td>
                <td><span class="pill pill-red">Fire</span></td>
                <td>Nightshade, Void Essence</td>
              </tr>
            </tbody>
          </table>

        </div>
      </section>

      <section class="guide-section reveal" id="status" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">2. Understanding Status Effects</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Exploiting weaknesses applies unique status effects to enemies. Here is how they alter the flow of combat:</p>

        <div class="companion-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 3rem;">
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #e74c3c;">
                <h4 style="color: #e74c3c; margin-bottom: 0.5rem; font-family: var(--font-display); font-size: 1.3rem;">🔥 Burn / Fire</h4>
                <p style="font-size: 0.9rem; color: #ccc;">Deals continuous damage over time. Prevents enemies from naturally regenerating health.</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #3498db;">
                <h4 style="color: #3498db; margin-bottom: 0.5rem; font-family: var(--font-display); font-size: 1.3rem;">❄️ Freeze / Ice</h4>
                <p style="font-size: 0.9rem; color: #ccc;">Slows enemy movement and attack animations by 30%. Hitting a fully frozen enemy shatters them for critical damage.</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #f1c40f;">
                <h4 style="color: #f1c40f; margin-bottom: 0.5rem; font-family: var(--font-display); font-size: 1.3rem;">⚡ Shock / Lightning</h4>
                <p style="font-size: 0.9rem; color: #ccc;">Interrupts enemy attacks and reduces their physical defense by 20% for a short duration.</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #2ecc71;">
                <h4 style="color: #2ecc71; margin-bottom: 0.5rem; font-family: var(--font-display); font-size: 1.3rem;">🧪 Poison</h4>
                <p style="font-size: 0.9rem; color: #ccc;">Deals damage over time and reduces enemy stamina regeneration, making them easier to stagger.</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #9b59b6;">
                <h4 style="color: #9b59b6; margin-bottom: 0.5rem; font-family: var(--font-display); font-size: 1.3rem;">✨ Axiom Resonance</h4>
                <p style="font-size: 0.9rem; color: #ccc;">Applied by Axiom Force attacks. Increases all subsequent magical damage taken by the target by 15%.</p>
            </div>
        </div>
      </section>

      <section class="guide-section reveal" id="boss-rush" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">3. Boss Rush Tactics</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">A quick-reference guide for players attempting the Boss Rush mode or struggling on New Game+ "Legendary Game" difficulty.</p>

        <div class="guide-accordion open reveal" id="acc-beast-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-beast-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">👹 The Reed Devil (Chapter 1)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">The terror of the Whispering Swamps. Fast, erratic, and relies on poison.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>Elemental Weakness:</strong> Fire. Equip the <em>Fire Imbue Oil</em> before the fight.</li>
                <li><strong>Counter Tactic:</strong> When he leaps into the reeds to hide, do not chase him. Hold your shield up and wait for the red glint; parrying his ambush attack stuns him for 4 seconds.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="acc-beast-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-beast-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🐉 Ancient Frost Dragon (Chapter 3)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">The ruler of the Kweiden peaks. Master of aerial combat and ice magic.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>Elemental Weakness:</strong> Fire (Only on its underbelly).</li>
                <li><strong>Counter Tactic:</strong> Do not use ranged weapons when it flies. Wait for it to dive and use the Axiom Grapple to attach to its wings. Focus all damage on the glowing horns to ground it permanently.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="acc-beast-3" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-beast-3')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🤖 The Iron Sentinel (Chapter 5)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">The mechanical guardian of the Delesyia Ruins. High physical defense.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>Elemental Weakness:</strong> Lightning.</li>
                <li><strong>Counter Tactic:</strong> Slashing weapons deal 10% damage. You must use Blunt weapons (Hammers) or Explosive Arrows to break its ceramic armor before you can deal actual HP damage to its exposed core.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="acc-beast-4" style="background: rgba(155, 89, 182, 0.05); border: 1px solid rgba(155, 89, 182, 0.4); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-beast-4')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #9b59b6; border-bottom: 1px solid rgba(155, 89, 182, 0.2);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">👁️ [SPOILER] The Origin Core (True Final Boss)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <p style="color: #ccc; margin-bottom: 1rem;">Only accessible if you achieved 100% loyalty with all lieutenants. It is a massive bullet-hell encounter.</p>
              <ul style="list-style: square; padding-left: 1.5rem; color: #ccc;">
                <li style="margin-bottom: 0.5rem;"><strong>Elemental Weakness:</strong> Axiom Overdrive (Magic).</li>
                <li><strong>Counter Tactic:</strong> You cannot damage the Core directly with melee weapons. You must perfectly dodge its purple laser sweeps to build up your Axiom Gauge, then reflect its massive dark-matter orb back at it using the <em>Axiom Push</em> skill.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="hunts" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">4. Elite Hunts (Bounty Board)</h2>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🦇</span>
            <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Night Terror</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Location:</strong> Pailune Cemetery (Night only).<br><strong>Loot:</strong> Vampire's Ring (Lifesteal 5%).<br>Only spawns if you carry the "Cursed Skull" in your inventory.</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🦂</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Golden Death Worm</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Location:</strong> Deep Akapen Desert.<br><strong>Loot:</strong> 10x Gold Nuggets.<br>Highly vulnerable to blunt weapons (like Oongka's hammer attacks).</p>
          </div>
          <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #e74c3c;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">👻</span>
            <h3 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Echo of the First Unifier</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;"><strong>Location:</strong> Demeniss Royal Vaults.<br><strong>Loot:</strong> Crown Fragment.<br>Requires the Master Key. Reflects all projectile attacks back at Kliff.</p>
          </div>
        </div>

        <div class="chapter-nav">
            <a href="/crimson-desert/index.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Back to Hub</a>
            <a href="/crimson-desert/extras/builds.php" class="btn btn-gold">Next: Best Builds →</a>
        </div>

      </section>

    </main>
  </div>

<script>
function toggleAcc(id) {
    const acc = document.getElementById(id);
    if (acc) {
        acc.classList.toggle('open');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('bestiarySearch');
    const tableRows = document.querySelectorAll('.guide-table tbody tr');
    const filterBtns = document.querySelectorAll('.filter-btn');

    function filterTable(searchTerm) {
        tableRows.forEach(row => {
            const rowText = row.textContent.toLowerCase();
            if(rowText.includes(searchTerm.toLowerCase())) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    if (searchInput) {
        searchInput.addEventListener('keyup', function(e) {
            filterTable(e.target.value);
        });
    }

    if (filterBtns) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const filterValue = this.getAttribute('data-filter');
                searchInput.value = '';
                filterBtns.forEach(b => b.style.opacity = '0.5'); 
                this.style.opacity = '1'; 
                filterTable(filterValue);
            });
        });
    }
});
</script>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>