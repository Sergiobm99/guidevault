<?php 
// 1. Identify the parent game for the "smart" header button
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];

// 2. Define SEO data for this page
$pageTitle = "Armor, Cosmetics & Fashion Guide — Elden Ring | GuideVault";
$pageDesc = "The ultimate guide to armor in Elden Ring. Discover stat-boosting helmets, poise breakpoints, status resistance gear, and the most iconic 'Fashion Souls' sets.";

// 3. Load the centralized global header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
  
  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(149, 165, 166, 0.15) 0%, transparent 65%), linear-gradient(180deg, #0a0a0c 0%, #111115 60%, #0a0a0c 100%);"></div>
    <div class="guide-hero-pattern"></div>
    <div class="guide-hero-inner">
      
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/elden-ring/index.php" style="color: rgba(255,255,255,0.7); transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Elden Ring</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span style="color: var(--gold);">Armor & Cosmetics</span>
      </nav>

      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: #fff; text-shadow: 0 0 20px rgba(149, 165, 166, 0.4);">ELDEN BLING</h1>
      <p class="guide-hero-subtitle" style="color: #bdc3c7;">Stat-Boosting Gear, Poise Breakpoints, and Fashion Souls</p>
    </div>
  </header>

  <div class="guide-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Armor Categories</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#mechanics" style="color: var(--text-dim); transition: color 0.2s;">1. Alterations & Weight</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#poise" style="color: var(--text-dim); transition: color 0.2s;">2. Poise Breakpoints (Meta)</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#passives" style="color: var(--text-dim); transition: color 0.2s;">3. Passive Effect Armor</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#helmets" style="color: var(--text-dim); transition: color 0.2s;">4. Stat-Boosting Helmets</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#status" style="color: var(--text-dim); transition: color 0.2s;">5. Status Resistance Gear</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#early" style="color: var(--text-dim); transition: color 0.2s;">6. Best Early Game Armor</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#tanks" style="color: var(--text-dim); transition: color 0.2s;">7. High Poise (Tanks)</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#fashion" style="color: var(--text-dim); transition: color 0.2s;">8. Iconic Fashion Sets</a></li>
        </ul>
    </aside>

    <main class="guide-content">
        <p class="guide-section-intro reveal" style="margin-bottom: 3rem;">
            In Elden Ring, your armor dictates your physical defense, your resistance to status effects, your Poise (ability to take hits without flinching), and most importantly: your style. Welcome to the ultimate Fashion Souls database.
        </p>

      <section class="guide-section reveal" id="mechanics" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">1. Armor Mechanics & Alterations</h2>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
          
          <div class="guide-card-item reveal" style="border-left: 4px solid #3498db; background: rgba(52, 152, 219, 0.05);">
            <h3 style="margin-bottom: 0.5rem; color:#3498db;">Equip Load Limits</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 0.5rem;">Your total weight determines how you dodge:</p>
            <ul style="font-size: 0.9rem; padding-left: 1.2rem;">
              <li><strong>Light Load (< 30%):</strong> Fast roll, travels furthest distance. Best for dodging massive boss AoEs.</li>
              <li><strong>Medium Load (30% - 70%):</strong> Normal roll. This is where 95% of players should aim to be.</li>
              <li><strong>Heavy Load (> 70%):</strong> "Fat roll". Slow, clunky, and highly vulnerable. <strong>Avoid at all costs.</strong></li>
              <li><strong>Overloaded (> 100%):</strong> Cannot roll or jump.</li>
            </ul>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #e67e22; background: rgba(230, 126, 34, 0.05);">
            <h3 style="margin-bottom: 0.5rem; color:#e67e22;">Garment Alteration</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 0.5rem;">You can alter armor to add/remove capes and hoods, which slightly reduces weight and defense.</p>
            <ul style="font-size: 0.9rem; padding-left: 1.2rem;">
              <li><strong>Tailoring Tools:</strong> Found in Coastal Cave (Limgrave). Allows you to alter basic armor at Sites of Grace for a small rune cost.</li>
              <li><strong>Gold Sewing Needle:</strong> Found in the Church of Vows (Liurnia). Allows you to alter Demigod boss armor.</li>
              <li><strong>Boc the Seamster:</strong> Complete his questline and he will alter your garments for completely <strong>free</strong>.</li>
            </ul>
          </div>
          
        </div>
      </section>

      <section class="guide-section reveal" id="poise" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #e74c3c; border-bottom: 1px solid rgba(231, 76, 60, 0.2); padding-bottom: 0.5rem;">2. Poise Breakpoints (The Meta)</h2>
        <p style="margin-bottom: 1.5rem;">Poise is a hidden health bar. If an enemy's attack deals more poise damage than your armor provides, your attack animation is interrupted. Here are the magic numbers you need to hit:</p>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
          
          <div class="guide-card-item reveal" style="border-top: 3px solid #f1c40f;">
            <h3 style="margin-bottom: 0.5rem; color:#f1c40f;">51 Poise (PvE Standard)</h3>
            <p style="font-size: 0.95rem; margin-bottom: 0.5rem;">The absolute minimum every melee player should aim for.</p>
            <p style="font-size: 0.85rem; color: var(--text-dim);">Having exactly 51 Poise allows you to tank exactly <strong>one normal light attack</strong> from standard PvE enemies (like dogs, soldiers, or rats) without flinching, letting you finish your weapon swing.</p>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #e74c3c;">
            <h3 style="margin-bottom: 0.5rem; color:#e74c3c;">101 Poise (PvP / Heavy PvE)</h3>
            <p style="font-size: 0.95rem; margin-bottom: 0.5rem;">The "Tank" breakpoint.</p>
            <p style="font-size: 0.85rem; color: var(--text-dim);">Having 101 Poise allows you to withstand one heavy attack from smaller enemies or a two-handed light attack from another player in PvP. Requires heavy armor like the Bull-Goat or Solitude set.</p>
          </div>

        </div>
      </section>

      <section class="guide-section reveal" id="passives" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #2ecc71; border-bottom: 1px solid rgba(46, 204, 113, 0.2); padding-bottom: 0.5rem;">3. Armor with Passive Buffs</h2>
        <p style="margin-bottom: 1.5rem;">Some armor pieces are practically required for certain builds because they provide massive multiplicative damage bonuses.</p>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Armor Piece / Set</th>
                <th>Passive Effect</th>
                <th>Where to Find</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Black Knife Armor</strong> (Chest)</td>
                <td><span style="color:#bdc3c7;">Muffles the sound of your footsteps completely. Enemies won't hear you approaching from behind.</span></td>
                <td>Ordina, Liturgical Town (Under the staircase at the back).</td>
              </tr>
              <tr>
                <td><strong>Raptor's Black Feathers</strong> (Chest)</td>
                <td><span style="color:#2ecc71;">Enhances <strong>Jump Attacks</strong> by 10%. Stacks with the Claw Talisman.</span></td>
                <td>Sage's Cave (Altus Plateau), behind an illusionary wall.</td>
              </tr>
              <tr>
                <td><strong>Spellblade Set</strong> (Full Set)</td>
                <td><span style="color:#3498db;">Each piece boosts magic or frost weapon skills (Ashes of War) by 2% (Total 8%).</span></td>
                <td>Rogier's questline (Roundtable Hold).</td>
              </tr>
              <tr>
                <td><strong>Crucible Sets</strong> (Axe & Tree)</td>
                <td><span style="color:#f1c40f;">Each piece boosts "Aspects of the Crucible" incantations by 4% (Total 16%).</span></td>
                <td>Auriza Hero's Grave (Crucible Knight duo boss).</td>
              </tr>
              <tr>
                <td><strong>Briar Set</strong> (Full Set)</td>
                <td><span style="color:#e74c3c;">Dodging into enemies deals minor damage. Excellent for keeping boss posture damage active.</span></td>
                <td>Buy from Enia after defeating Elemer of the Briar.</td>
              </tr>
              <tr>
                <td><strong>Royal Remains Set</strong> (Full Set)</td>
                <td><span style="color:#2ecc71;">Slowly regenerates HP (2 HP/sec per piece) when your health falls below 18%.</span></td>
                <td>Defeat Ensha at Roundtable Hold.</td>
              </tr>
              <tr>
                <td><strong>Rakshasa Set</strong> <span style="color:#9b59b6;">(DLC)</span></td>
                <td><span style="color:#e74c3c;">Each piece increases damage dealt by 2% (Total 8%), but also increases damage taken.</span></td>
                <td>Eastern Nameless Mausoleum (Shadow of the Erdtree).</td>
              </tr>
              <tr>
                <td><strong>Death Knight Set</strong> <span style="color:#9b59b6;">(DLC)</span></td>
                <td><span style="color:#f1c40f;">Each piece enhances Ancient Dragon Cult skills and incantations by 2%.</span></td>
                <td>Darklight Catacombs (Shadow of the Erdtree).</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="helmets" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">4. Stat-Boosting Helmets</h2>
        <p style="margin-bottom: 1.5rem;">If you need 2 or 3 extra points to wield a weapon or cast a spell, just wear one of these masks.</p>

        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
          
          <div class="guide-card-item reveal" style="border-color: #c0392b;">
            <h3 style="color:#c0392b; margin-bottom:0.5rem;">White Mask</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Effect: +10% Attack Power when Blood Loss occurs.</p>
            <p style="font-size: 0.9rem;">The absolute king of Bleed builds. Drops from the Nameless White Mask invaders in the blood swamps of Mohgwyn Palace.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #3498db;">
            <h3 style="color:#3498db; margin-bottom:0.5rem;">Twinsage Glintstone Crown</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Effect: +6 Intelligence, -9% HP & Stamina.</p>
            <p style="font-size: 0.9rem;">The biggest INT boost in the game. Find the crystalline crab exploring the rooftops of the Academy of Raya Lucaria.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #f1c40f;">
            <h3 style="color:#f1c40f; margin-bottom:0.5rem;">Silver Tear Mask</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Effect: +8 Arcane, -5% Physical Attack Power.</p>
            <p style="font-size: 0.9rem;">Massive arcane boost for discovery or dragon incantations. Drops from the Mimic Tear boss in Nokron.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #e67e22;">
            <h3 style="color:#e67e22; margin-bottom:0.5rem;">Omensmirk Mask</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Effect: +2 Strength.</p>
            <p style="font-size: 0.9rem;">A heavy mask worn by Omenkillers. Found just outside the Lower Capital Church in Leyndell.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #2ecc71;">
            <h3 style="color:#2ecc71; margin-bottom:0.5rem;">Mushroom Crown</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Effect: +10% Attack Power when Poison/Rot occurs.</p>
            <p style="font-size: 0.9rem;">The poison equivalent to the White Mask. Found in the Lake of Rot, deep in the ruins.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #9b59b6;">
            <h3 style="color:#9b59b6; margin-bottom:0.5rem;">Black Dumpling</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Effect: +10% Attack Power when you suffer Madness.</p>
            <p style="font-size: 0.9rem;">Farmable from the first generation Albinaurics in Volcano Manor.</p>
          </div>

        </div>
      </section>

      <section class="guide-section reveal" id="status" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #1abc9c; border-bottom: 1px solid rgba(26, 188, 156, 0.2); padding-bottom: 0.5rem;">5. Status Resistance Gear (Swamp Survival)</h2>
        <p style="margin-bottom: 1.5rem;">When crossing the Lake of Rot or fighting Madness-inducing enemies, physical defense means nothing. You need specialized armor.</p>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Resistance Type</th>
                <th>Best Armor Set</th>
                <th>Where to Find</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Immunity</strong> <br><span style="font-size:0.8rem;color:#888;">(Poison / Scarlet Rot)</span></td>
                <td><strong>Mushroom Set</strong> (222 Base Immunity)</td>
                <td>Seethewater Cave (Mt. Gelmir). A must-have for the Lake of Rot.</td>
              </tr>
              <tr>
                <td><strong>Robustness</strong> <br><span style="font-size:0.8rem;color:#888;">(Bleed / Frostbite)</span></td>
                <td><strong>General Radahn Set</strong> (235 Base Robustness)</td>
                <td>Buy from Enia after defeating Starscourge Radahn.</td>
              </tr>
              <tr>
                <td><strong>Focus</strong> <br><span style="font-size:0.8rem;color:#888;">(Sleep / Madness)</span></td>
                <td><strong>Clarifying Horn Set / Pumpkin Helm</strong></td>
                <td>Mix and match. The Pumpkin Helm offers absurdly high Focus against Frenzied Flame enemies.</td>
              </tr>
              <tr>
                <td><strong>Vitality</strong> <br><span style="font-size:0.8rem;color:#888;">(Death Blight)</span></td>
                <td><strong>Lusat's Set / Fia's Dress</strong></td>
                <td>Lusat's set (from Sellen's quest) or Fia's Dress offer the highest resistance to instant death clouds.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="early" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #f39c12; border-bottom: 1px solid rgba(243, 156, 18, 0.2); padding-bottom: 0.5rem;">6. Best Early Game Armor (First 10 Hours)</h2>
        <p style="margin-bottom: 1.5rem;">Don't wander Limgrave in your starting rags. Grab these sets immediately to boost your survivability.</p>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
          
          <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02);">
            <h3 style="margin-bottom: 0.5rem;">Knight Set</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">The absolute best standard armor for the first 20 hours. It provides exactly 51 Poise (the golden breakpoint) for a very low weight.</p>
            <span class="pill" style="background: rgba(255, 255, 255, 0.1); border: 1px solid #888; font-size: 0.8rem;">Location: Buy it from the Twin Maiden Husks at Roundtable Hold for 13,500 Runes.</span>
          </div>

          <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02);">
            <h3 style="margin-bottom: 0.5rem;">Carian Knight Set</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Exceptional magic and physical defense with incredible aesthetics. Perfect for early spellblades.</p>
            <span class="pill" style="background: rgba(255, 255, 255, 0.1); border: 1px solid #888; font-size: 0.8rem;">Location: Graveyard area in the Academy of Raya Lucaria (Liurnia).</span>
          </div>

          <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02);">
            <h3 style="margin-bottom: 0.5rem;">Banished Knight Set (Altered)</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">One of the strongest medium-heavy armors. You can farm the pieces very early on.</p>
            <span class="pill" style="background: rgba(255, 255, 255, 0.1); border: 1px solid #888; font-size: 0.8rem;">Location: Farm the Banished Knight patrolling the Cathedral of Dragon Communion in South Caelid.</span>
          </div>

        </div>
      </section>

      <section class="guide-section reveal" id="tanks" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #7f8c8d; border-bottom: 1px solid rgba(127, 140, 141, 0.2); padding-bottom: 0.5rem;">7. High Poise Armor (The Tanks)</h2>
        <p style="margin-bottom: 1.5rem;">If you wield Colossal weapons, you need Poise to avoid getting interrupted mid-swing. These are the heaviest, thickest armors in the game.</p>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Armor Set</th>
                <th>Total Poise</th>
                <th>Weight</th>
                <th>How to Get</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Bull-Goat Set</strong></td>
                <td>100</td>
                <td>63.0</td>
                <td>Assassinate Great Horned Tragoth via Patches' Volcano Manor quest.</td>
              </tr>
              <tr>
                <td><strong>Armor of Solitude</strong> <span style="color:#9b59b6;">(DLC)</span></td>
                <td>96</td>
                <td>57.1</td>
                <td>Defeat the Blackgaol Knight in the Western Nameless Mausoleum.</td>
              </tr>
              <tr>
                <td><strong>Fire Prelate Set</strong></td>
                <td>86</td>
                <td>58.8</td>
                <td>Farm the Fire Prelate enemy in Fort Laiedd (Mt. Gelmir).</td>
              </tr>
              <tr>
                <td><strong>Omen Set</strong></td>
                <td>86</td>
                <td>55.0</td>
                <td>Defeat the Dung Eater in the Subterranean Shunning-Grounds moat.</td>
              </tr>
              <tr>
                <td><strong>Lionel's Set</strong></td>
                <td>82</td>
                <td>50.5</td>
                <td>Found on the bed next to the Lower Capital Church grace in Leyndell.</td>
              </tr>
              <tr>
                <td><strong>Veteran's Set</strong> (Best Meta)</td>
                <td>79</td>
                <td>45.0</td>
                <td>Buy from Enia at the Roundtable after defeating Commander Niall.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="fashion" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">8. Iconic Fashion Sets</h2>
        <p style="margin-bottom: 1.5rem;">Looking cool is the true endgame. Here is where to find the most iconic and aesthetic sets in the Lands Between.</p>

        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
          
          <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02);">
            <h3 style="margin-bottom: 0.5rem;">Night's Cavalry Set</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">The ultimate dark knight armor. Jet black, torn cape, and very solid defense/poise.</p>
            <span class="pill" style="background: rgba(255, 255, 255, 0.1); border: 1px solid #888; font-size: 0.8rem;">Location: Defeat the two Night's Cavalry in the Consecrated Snowfield.</span>
          </div>

          <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02);">
            <h3 style="margin-bottom: 0.5rem;">Raging Wolf Set</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">The armor from the game's trailers. A beautiful mix of steel and red cloth.</p>
            <span class="pill" style="background: rgba(255, 255, 255, 0.1); border: 1px solid #888; font-size: 0.8rem;">Location: Defeat Vargram during Bernahl's Volcano Manor quest in Leyndell.</span>
          </div>

          <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02);">
            <h3 style="margin-bottom: 0.5rem;">Hoslow's Set</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">"The tale of House Hoslow is told in blood." Incredible ornate silver armor with red accents and a distinctive horned helmet.</p>
            <span class="pill" style="background: rgba(255, 255, 255, 0.1); border: 1px solid #888; font-size: 0.8rem;">Location: Defeat Juno Hoslow (Volcano Manor final assassination).</span>
          </div>

          <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02);">
            <h3 style="margin-bottom: 0.5rem;">Maliketh's Set</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Black armor with gold trim. Perfect for Faith/Strength builds who want to look like the grim reaper.</p>
            <span class="pill" style="background: rgba(255, 255, 255, 0.1); border: 1px solid #888; font-size: 0.8rem;">Location: Buy from Enia after defeating Maliketh.</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #9b59b6; background: rgba(155, 89, 182, 0.05);">
            <h3 style="margin-bottom: 0.5rem;">Oathseeker Knight Set <span style="font-size:0.8rem; color:#9b59b6;">(DLC)</span></h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">The classic "Knight in shining armor" look for the DLC. Perfectly polished steel with an elegant cape.</p>
            <span class="pill" style="background: rgba(155, 89, 182, 0.1); color: #9b59b6; border: 1px solid #9b59b6; font-size: 0.8rem;">Location: Found on a corpse outside the Church of Benediction.</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #9b59b6; background: rgba(155, 89, 182, 0.05);">
            <h3 style="margin-bottom: 0.5rem;">Night Armor <span style="font-size:0.8rem; color:#9b59b6;">(DLC)</span></h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Sauron's armor from Lord of the Rings. Sharp, spiky black metal that looks incredibly menacing.</p>
            <span class="pill" style="background: rgba(155, 89, 182, 0.1); color: #9b59b6; border: 1px solid #9b59b6; font-size: 0.8rem;">Location: Bonny Gaol, hidden on a falling cage elevator.</span>
          </div>

        </div>
      </section>

    </main>
  </div>
</div>

<?php 
// 4. Load the footer
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>