<?php 
// 1. Identify the parent game for the "smart" header button
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];

// 2. Define SEO data for this page
$pageTitle = "Crafting Recipes & Cookbooks Locations — Elden Ring | GuideVault";
$pageDesc = "Complete crafting guide for Elden Ring. Find all Cookbook locations, best aromatic recipes, status cures, and rare material farming spots including DLC items.";

// 3. Load the centralized global header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
  
  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(46, 204, 113, 0.15) 0%, transparent 65%), linear-gradient(180deg, #0a0a0c 0%, #111115 60%, #0a0a0c 100%);"></div>
    <div class="guide-hero-pattern"></div>
    <div class="guide-hero-inner">
      
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/elden-ring/index.php" style="color: rgba(255,255,255,0.7); transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Elden Ring</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span style="color: var(--gold);">Crafting & Cookbooks</span>
      </nav>

      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: #fff; text-shadow: 0 0 20px rgba(46, 204, 113, 0.4);">CRAFTING MASTER</h1>
      <p class="guide-hero-subtitle" style="color: #2ecc71;">Cookbook Locations, Best Recipes, and Material Farming</p>
    </div>
  </header>

  <div class="guide-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Crafting Guide</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#essentials" style="color: var(--text-dim); transition: color 0.2s;">1. Essential Consumables</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#boluses" style="color: var(--text-dim); transition: color 0.2s;">2. The Medic Tent (Cures)</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#base-cookbooks" style="color: var(--text-dim); transition: color 0.2s;">3. Base Game Cookbooks</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#dlc-cookbooks" style="color: var(--text-dim); transition: color 0.2s;">4. DLC Cookbooks</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#farming" style="color: var(--text-dim); transition: color 0.2s;">5. Rare Material Farming</a></li>
        </ul>
    </aside>

    <main class="guide-content">
        <p class="guide-section-intro reveal" style="margin-bottom: 3rem;">
            To unlock the crafting menu, you must first purchase the <strong>Crafting Kit</strong> from Merchant Kalé at the Church of Elleh for 300 Runes. Once unlocked, finding Cookbooks across the world will expand your repertoire of craftable items, from lethal bombs to powerful body buffs.
        </p>

      <section class="guide-section reveal" id="essentials" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">1. Essential Consumables (Must Craft)</h2>
        <p style="margin-bottom: 1.5rem;">These are the most powerful offensive and buffing items you can craft. Keep them in your quick-pouch.</p>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
          
          <div class="guide-card-item reveal" style="border-top: 3px solid #e74c3c;">
            <h3 style="margin-bottom: 0.5rem;">Exalted Flesh</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Boosts physical attack power by <strong>20%</strong> for 30 seconds. Incredibly powerful for burst damage before a boss fight.</p>
            <ul style="font-size: 0.85rem; color: var(--text-muted); padding-left: 1.2rem; margin-bottom: 1rem;">
              <li>1x Rowa Fruit</li>
              <li>1x Lump of Flesh</li>
              <li>1x Hefty Beast Bone</li>
              <li>1x Arteria Leaf</li>
            </ul>
            <span class="pill" style="background: rgba(231, 76, 60, 0.1); color: #e74c3c; border: 1px solid #e74c3c; font-size: 0.8rem;">Requires: Armorer's Cookbook [3]</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #9b59b6;">
            <h3 style="margin-bottom: 0.5rem;">Sleep Pot</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Throws a pot that releases sleep-inducing smoke. Essential for putting the <strong>Godskin Duo</strong> and <strong>Runebears</strong> to sleep instantly.</p>
            <ul style="font-size: 0.85rem; color: var(--text-muted); padding-left: 1.2rem; margin-bottom: 1rem;">
              <li>1x Mushroom</li>
              <li>1x Trina's Lily</li>
              <li>1x Empty Cracked Pot</li>
            </ul>
            <span class="pill" style="background: rgba(155, 89, 182, 0.1); color: #9b59b6; border: 1px solid #9b59b6; font-size: 0.8rem;">Requires: Fevor's Cookbook [1]</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #f1c40f;">
            <h3 style="margin-bottom: 0.5rem;">Uplifting Aromatic</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Grants you and nearby allies a shield that <strong>negates 90% of damage</strong> from the next hit received, plus a 10% attack buff.</p>
            <ul style="font-size: 0.85rem; color: var(--text-muted); padding-left: 1.2rem; margin-bottom: 1rem;">
              <li>1x Altus Bloom</li>
              <li>1x Budding Cave Moss</li>
              <li>1x Silver Tear Husk</li>
              <li>1x Arteria Leaf</li>
            </ul>
            <span class="pill" style="background: rgba(241, 196, 15, 0.1); color: #f1c40f; border: 1px solid #f1c40f; font-size: 0.8rem;">Requires: Perfumer's Cookbook [1]</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #f39c12;">
            <h3 style="margin-bottom: 0.5rem;">Gold-Pickled Fowl Foot</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Increases Rune acquisition by <strong>30%</strong> for 3 minutes. Pop this immediately after defeating a boss before they finish their dying animation.</p>
            <ul style="font-size: 0.85rem; color: var(--text-muted); padding-left: 1.2rem; margin-bottom: 1rem;">
              <li>3x Rowa Fruit</li>
              <li>1x Four-Toed Fowl Foot</li>
              <li>1x Gold Firefly</li>
            </ul>
            <span class="pill" style="background: rgba(243, 156, 18, 0.1); color: #f39c12; border: 1px solid #f39c12; font-size: 0.8rem;">Requires: Missionary's Cookbook [2]</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #3498db;">
            <h3 style="margin-bottom: 0.5rem;">Freezing Pot</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Causes massive Frostbite buildup. Throwing this at Malenia while she jumps in the air will instantly cancel her Waterfowl Dance.</p>
            <ul style="font-size: 0.85rem; color: var(--text-muted); padding-left: 1.2rem; margin-bottom: 1rem;">
              <li>2x Rimed Crystal Bud</li>
              <li>1x Empty Ritual Pot</li>
            </ul>
            <span class="pill" style="background: rgba(52, 152, 219, 0.1); color: #3498db; border: 1px solid #3498db; font-size: 0.8rem;">Requires: Glintstone Craftsman's [6]</span>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #c0392b;">
            <h3 style="margin-bottom: 0.5rem;">Swarm Pot</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Throws a pot that spawns a swarm of bloodflies. They track the enemy and deal massive continuous Bleed buildup over time.</p>
            <ul style="font-size: 0.85rem; color: var(--text-muted); padding-left: 1.2rem; margin-bottom: 1rem;">
              <li>1x Mushroom</li>
              <li>1x Bloodrose</li>
              <li>1x Empty Ritual Pot</li>
            </ul>
            <span class="pill" style="background: rgba(192, 57, 43, 0.1); color: #c0392b; border: 1px solid #c0392b; font-size: 0.8rem;">Requires: Nomadic Warrior's [24]</span>
          </div>

        </div>
      </section>

      <section class="guide-section reveal" id="boluses" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #2ecc71; border-bottom: 1px solid rgba(46, 204, 113, 0.2); padding-bottom: 0.5rem;">2. The Medic Tent (Status Cures)</h2>
        <p style="margin-bottom: 1.5rem;">Status effects in Elden Ring are lethal. Knowing how to craft these Boluses will save your life in swamps and boss fights.</p>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Bolus Name</th>
                <th>Cures</th>
                <th>Required Cookbook</th>
                <th>Key Ingredients</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Preserving Boluses</strong></td>
                <td><span style="color:#e74c3c; font-weight:bold;">Scarlet Rot</span></td>
                <td>Armorer's Cookbook [6] (Siofra River)</td>
                <td>Dewkissed Herba, Crystal Cave Moss, <strong>Sacramental Bud</strong></td>
              </tr>
              <tr>
                <td><strong>Neutralizing Boluses</strong></td>
                <td><span style="color:#2ecc71; font-weight:bold;">Poison</span></td>
                <td>Armorer's Cookbook [2] (Coastal Cave)</td>
                <td>Herba, Cave Moss, Great Dragonfly Head</td>
              </tr>
              <tr>
                <td><strong>Stanching Boluses</strong></td>
                <td><span style="color:#c0392b; font-weight:bold;">Hemorrhage (Bleed)</span></td>
                <td>Nomadic Warrior's [7] (Stormveil Bridge)</td>
                <td>Herba, Cave Moss, Land Octopus Ovary</td>
              </tr>
              <tr>
                <td><strong>Thawfrost Boluses</strong></td>
                <td><span style="color:#3498db; font-weight:bold;">Frostbite</span></td>
                <td>Nomadic Warrior's [16] (Ainsel River)</td>
                <td>Herba, Cave Moss, Crab Eggs</td>
              </tr>
              <tr>
                <td><strong>Clarifying Boluses</strong></td>
                <td><span style="color:#f39c12; font-weight:bold;">Madness</span></td>
                <td>Frenzied's Cookbook [1] (Frenzied Flame Village)</td>
                <td>Dewkissed Herba, Crystal Cave Moss, <strong>Eye of Yelough</strong></td>
              </tr>
              <tr>
                <td><strong>Rejuvenating Boluses</strong></td>
                <td><span style="color:#2c3e50; font-weight:bold;">Death Blight</span></td>
                <td>Missionary's Cookbook [7] (Volcano Manor)</td>
                <td>Dewkissed Herba, Crystal Cave Moss, Golden Centipede</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="base-cookbooks" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">3. Key Base Game Cookbooks</h2>
        <p style="margin-bottom: 1.5rem;">The most important cookbooks you should go out of your way to collect in the Lands Between.</p>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Cookbook Name</th>
                <th>Unlocks</th>
                <th>Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Nomadic Warrior's [2]</strong></td>
                <td>Bone Arrow, Bone Dart, Invigorating White Cured Meat</td>
                <td>Bought from Merchant Kalé (Church of Elleh)</td>
              </tr>
              <tr>
                <td><strong>Nomadic Warrior's [11]</strong></td>
                <td>Crystal Dart, Spellproof Dried Liver, Shattershard Arrow</td>
                <td>Bought from Nomadic Merchant near Liurnia Lake Shore</td>
              </tr>
              <tr>
                <td><strong>Nomadic Warrior's [24]</strong></td>
                <td>Swarm Pot, Roped Fly Pot</td>
                <td>Mohgwyn Palace, near the blood swamps</td>
              </tr>
              <tr>
                <td><strong>Armorer's Cookbook [1]</strong></td>
                <td>Fire Grease, Drawstring Fire Grease, Firebone Arrow</td>
                <td>Murkwater Coast (Limgrave) Enemy Camp</td>
              </tr>
              <tr>
                <td><strong>Armorer's Cookbook [3]</strong></td>
                <td><span style="color:#e74c3c;">Exalted Flesh</span></td>
                <td>Limgrave, southeast of Mistwood Outskirts on a corpse</td>
              </tr>
              <tr>
                <td><strong>Armorer's Cookbook [6]</strong></td>
                <td><span style="color:#e74c3c;">Preserving Boluses (Rot Cure)</span></td>
                <td>Siofra River, on a corpse near the Siofra River Bank grace</td>
              </tr>
              <tr>
                <td><strong>Missionary's Cookbook [2]</strong></td>
                <td><span style="color:#f39c12;">Gold-Pickled Fowl Foot</span>, Scriptstone</td>
                <td>Bought from Patches in Murkwater Cave</td>
              </tr>
              <tr>
                <td><strong>Missionary's Cookbook [4]</strong></td>
                <td>Holy Water Pot, Haligdrake Talisman</td>
                <td>Minor Erdtree Church (Capital Outskirts)</td>
              </tr>
              <tr>
                <td><strong>Fevor's Cookbook [1]</strong></td>
                <td><span style="color:#9b59b6;">Sleep Pot</span></td>
                <td>Graveyard in Limgrave, south of Summonwater Village</td>
              </tr>
              <tr>
                <td><strong>Perfumer's Cookbook [1]</strong></td>
                <td><span style="color:#f1c40f;">Uplifting Aromatic</span>, Spark Aromatic</td>
                <td>Perfumer's Ruins (Altus Plateau) in a chest</td>
              </tr>
              <tr>
                <td><strong>Perfumer's Cookbook [2]</strong></td>
                <td>Bloodboil Aromatic, Poison Spraymist</td>
                <td>The Shaded Castle (Altus Plateau)</td>
              </tr>
              <tr>
                <td><strong>Glintstone Craftsman's [6]</strong></td>
                <td><span style="color:#3498db;">Freezing Pot</span></td>
                <td>Caria Manor, on a corpse in a small room</td>
              </tr>
              <tr>
                <td><strong>Ancient Dragon Apostle's [2]</strong></td>
                <td>Lightning Pot, Honed Bolt</td>
                <td>Bought from Hermit Merchant (Leyndell)</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="dlc-cookbooks" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #9b59b6; border-bottom: 1px solid rgba(155, 89, 182, 0.2); padding-bottom: 0.5rem;">4. DLC Cookbooks (Shadow of the Erdtree)</h2>
        <p style="margin-bottom: 1.5rem;">The Realm of Shadow introduces <strong>Hefty Pots</strong> (massive throwables) and new powerful items.</p>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Cookbook Name</th>
                <th>Unlocks</th>
                <th>Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Greater Potentate's [1]</strong></td>
                <td>Hefty Fire Pot</td>
                <td>Scorched Ruins (Gravesite Plain)</td>
              </tr>
              <tr>
                <td><strong>Greater Potentate's [2]</strong></td>
                <td><span style="color:#e74c3c;">Hefty Furnace Pot</span> (Essential for killing Furnace Golems)</td>
                <td>Run-Down Traveler's Rest (Scadu Altus)</td>
              </tr>
              <tr>
                <td><strong>Greater Potentate's [3]</strong></td>
                <td>Hefty Lightning Pot</td>
                <td>Fog Rift Fort</td>
              </tr>
              <tr>
                <td><strong>Greater Potentate's [4]</strong></td>
                <td>Hefty Magic Pot</td>
                <td>Ensis Moongazing Grounds</td>
              </tr>
              <tr>
                <td><strong>Greater Potentate's [5]</strong></td>
                <td>Hefty Rot Pot</td>
                <td>Nomadic Merchant in Rauh Base</td>
              </tr>
              <tr>
                <td><strong>Forager Brood Cookbook [2]</strong></td>
                <td>Well-Pickled Turtle Neck (Massive stamina regen)</td>
                <td>Given by Moore after curing a Forager Brood</td>
              </tr>
              <tr>
                <td><strong>Antiquity Scholar's [1]</strong></td>
                <td>Spriralhorn Shield, Golden Vow (Consumable)</td>
                <td>Ruined Forge Lava Intake</td>
              </tr>
              <tr>
                <td><strong>Igon's Cookbook [1]</strong></td>
                <td>Dragon Communion Flesh</td>
                <td>Pillar Path Waypoint (Given by Igon)</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="farming" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">5. Rare Material Farming Guide</h2>
        <p style="margin-bottom: 1.5rem;">The biggest issue with crafting in Elden Ring is that some materials do not respawn when you rest. Here is how to farm the rarest materials infinitely from enemies or respawnable spots.</p>

        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
          
          <div class="guide-card-item reveal" style="border-color: #f1c40f;">
            <h3 style="color:#f1c40f; margin-bottom:0.5rem;">Arteria Leaf</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Used for: Exalted Flesh, Uplifting Aromatic</p>
            <p style="font-size: 0.9rem;"><strong>Farm Spot:</strong> Snow Trolls in the Mountaintops of the Giants (near the Giants' Gravepost site of grace) have a solid chance to drop them.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #9b59b6;">
            <h3 style="color:#9b59b6; margin-bottom:0.5rem;">Trina's Lily</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Used for: Sleep Pots, Sleep Arrows</p>
            <p style="font-size: 0.9rem;"><strong>Farm Spot:</strong> Cleanrot Knights. The easiest one to farm is just outside the Prayer Room site of grace in Elphael, Brace of the Haligtree.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #e74c3c;">
            <h3 style="color:#e74c3c; margin-bottom:0.5rem;">Sacramental Bud</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Used for: Preserving Boluses (Rot Cure)</p>
            <p style="font-size: 0.9rem;"><strong>Farm Spot:</strong> Drops from Rotary Dogs (Rot-infected dogs). Farm them in Writheblood Ruins or outside the Church of the Plague in Caelid.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #c0392b;">
            <h3 style="color:#c0392b; margin-bottom:0.5rem;">Bloodrose</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Used for: Swarm Pots, Cursed-Blood Pot</p>
            <p style="font-size: 0.9rem;"><strong>Farm Spot:</strong> Rose Church in Liurnia. There are several bushes here that respawn when you rest at the nearby grace. Just run in, pick them, and repeat.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #f39c12;">
            <h3 style="color:#f39c12; margin-bottom:0.5rem;">Gold Firefly</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Used for: Gold-Pickled Fowl Foot</p>
            <p style="font-size: 0.9rem;"><strong>Farm Spot:</strong> The small pond full of Land Octopuses just east of the Mistwood, south of the Limgrave Tower Bridge. Around 10 respawning fireflies per run.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #2ecc71;">
            <h3 style="color:#2ecc71; margin-bottom:0.5rem;">Silver Tear Husk</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Used for: Uplifting Aromatic</p>
            <p style="font-size: 0.9rem;"><strong>Farm Spot:</strong> These actually DO respawn! Just run through Nokron, Eternal City or Night's Sacred Ground and pick them off the floor over and over.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #e67e22;">
            <h3 style="color:#e67e22; margin-bottom:0.5rem;">Aeonian Butterfly</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Used for: Rot Pots, Rot Grease</p>
            <p style="font-size: 0.9rem;"><strong>Farm Spot:</strong> Basilisks (giant rats with big eyes) in the Lake of Rot or Deeproot Depths frequently drop these butterflies.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #bdc3c7;">
            <h3 style="color:#bdc3c7; margin-bottom:0.5rem;">Four-Toed Fowl Foot</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Used for: Fowl Foot (Runes/Discovery Buffs)</p>
            <p style="font-size: 0.9rem;"><strong>Farm Spot:</strong> The beach west of the Fourth Church of Marika (Weeping Peninsula). Use an AoE spell or bow to kill the flocks of birds resting on the sand.</p>
          </div>

          <div class="guide-card-item reveal" style="border-color: #f39c12;">
            <h3 style="color:#f39c12; margin-bottom:0.5rem;">Eye of Yelough</h3>
            <p style="font-size: 0.85rem; color: var(--text-dim); margin-bottom: 0.5rem;">Used for: Clarifying Boluses (Madness Cure)</p>
            <p style="font-size: 0.9rem;"><strong>Farm Spot:</strong> Frenzied Flame Village in Liurnia. Can also be farmed by killing Frenzied Trolls on the path leading up to the village.</p>
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