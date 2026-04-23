<?php 
$pageTitle = "Crafting, Cooking & Alchemy Guide | Crimson Desert";
$pageDesc = "Master the art of survival in Pywel. Complete list of cooking recipes, alchemy elixirs, weapon forging, and where to find rare crafting materials.";
$bodyClass = "theme-crimson-desert"; 

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(100, 200, 100, 0.15) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(60, 40, 80, 0.7) 0%, transparent 60%), linear-gradient(180deg, #0a100a 0%, #101510 60%, #0a100a 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Crafting & Cooking</span>
      </nav>
      <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">GAME DATABASE</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem;">Crafting & Alchemy</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">The Art of Survival, Forging, and Transmutation</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Contents</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#recipes" style="color: var(--text-dim); transition: color 0.2s;">1. Top Cooking Recipes</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#elixirs" style="color: var(--text-dim); transition: color 0.2s;">2. Alchemical Elixirs</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#forging" style="color: var(--text-dim); transition: color 0.2s;">3. Weapon & Armor Forging</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#ingredients" style="color: var(--text-dim); transition: color 0.2s;">4. Rare Ingredients</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#masterwork" style="color: var(--text-dim); transition: color 0.2s;">5. "Masterwork" Crafting</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#routes" style="color: var(--text-dim); transition: color 0.2s;">6. Farming Routes</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="recipes" style="margin-bottom: 4rem;">
        <div class="callout info" style="margin-bottom: 3rem;">
          <span class="callout-label" style="color: var(--gold);">The Chef's & Smith's Tip</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Cooking at a <strong>Campfire</strong> grants standard results, but using a <strong>Tavern Kitchen</strong> increases the duration of all buffs by 50%. Similarly, upgrading Oongka's anvil at your mercenary camp reduces the gold cost of forging weapons by 20%.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. Top Cooking Recipes</h2>
        <p class="guide-section-intro" style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Food provides long-term buffs to Stamina, Health, and Attack Power. You can have one "Meal" buff active at a time.</p>

        <div class="guide-table-wrap">
          <table class="guide-table" style="background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold); color: var(--gold);">
                <th style="padding: 1rem;">Recipe</th>
                <th style="padding: 1rem;">Ingredients</th>
                <th style="padding: 1rem;">Buff Effect</th>
                <th style="padding: 1rem;">Duration</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>King's Feast</strong></td>
                <td style="padding: 1rem;">Prime Meat (x2), Rare Herbs, Spice Pack</td>
                <td style="padding: 1rem;">+30% Max HP & +20% Attack Power.</td>
                <td style="padding: 1rem;">30 Minutes</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Dragonheart Stew</strong></td>
                <td style="padding: 1rem;">Dragon's Blood, Prime Meat, Rare Spices</td>
                <td style="padding: 1rem;">Grants immunity to stagger and +50% Physical Defense.</td>
                <td style="padding: 1rem;">10 Minutes</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Fisherman's Delight</strong></td>
                <td style="padding: 1rem;">Abyss Koi, Salt, Lemon</td>
                <td style="padding: 1rem;">Allows 2x faster swimming and breath recovery.</td>
                <td style="padding: 1rem;">20 Minutes</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Desert Fig Cake</strong></td>
                <td style="padding: 1rem;">Akapen Figs (x3), Flour, Honey</td>
                <td style="padding: 1rem;">100% Resistance to Heatstroke (Essential for Ch. 4).</td>
                <td style="padding: 1rem;">10 Minutes</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Kweiden Frost-Tea</strong></td>
                <td style="padding: 1rem;">Snow Lily, Spring Water, Honey</td>
                <td style="padding: 1rem;">100% Resistance to Freezing (Essential for Ch. 6).</td>
                <td style="padding: 1rem;">20 Minutes</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="elixirs" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">2. Alchemical Elixirs (Combat Potions)</h2>
        <p class="guide-section-intro" style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Unlike food, Elixirs provide immediate or short-term tactical advantages. You can use multiple Elixirs simultaneously without overwriting their effects.</p>

        <div class="guide-accordion open" id="acc-cr-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-cr-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🧪 Offensive Elixirs</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <ul style="padding-left: 1.5rem; color: #ccc; line-height: 1.8; margin: 0;">
                <li style="margin-bottom: 0.5rem;"><strong>Fire Imbue Oil:</strong> Temporarily adds Fire damage to any weapon for 60 seconds. <br><em style="color: var(--gold-dim);">Recipe: Sulfur powder + Wolf Fat.</em></li>
                <li><strong>Thunderbolt Draught:</strong> Increases Critical Hit chance by 15%. <br><em style="color: var(--gold-dim);">Recipe: Lightning Mushroom + Liquid Mercury.</em></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-cr-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-cr-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">🛡️ Defensive & Utility Elixirs</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <ul style="padding-left: 1.5rem; color: #ccc; line-height: 1.8; margin: 0;">
                <li style="margin-bottom: 0.5rem;"><strong>Abyss Resistance Potion:</strong> Reduces damage taken from Abyss-type enemies by 40%. <br><em style="color: var(--gold-dim);">Recipe: Void Essence + Blue Petal.</em></li>
                <li style="margin-bottom: 0.5rem;"><strong>Healing Salve:</strong> Restores 50% HP instantly. <br><em style="color: var(--gold-dim);">Recipe: Green Herb (x3) + Spring Water.</em></li>
                <li><strong>Antidote:</strong> Instantly cures Poison and Toxic status. <br><em style="color: var(--gold-dim);">Recipe: Charcoal + Lichen.</em></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-cr-3" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-bottom: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-cr-3')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
            <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">✨ Axiom & Magic Elixirs</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner" style="padding: 1.5rem;">
              <ul style="padding-left: 1.5rem; color: #ccc; line-height: 1.8; margin: 0;">
                <li style="margin-bottom: 0.5rem;"><strong>Axiom Overdrive:</strong> Eliminates cooldowns for all Axiom abilities for 15 seconds. <br><em style="color: var(--gold-dim);">Recipe: Star-metal Dust + Void Essence.</em></li>
                <li><strong>Liquid Shadow:</strong> Grants near-invisibility to enemies for 3 minutes (breaks upon attacking). <br><em style="color: var(--gold-dim);">Recipe: Nightshade + Black Pearl.</em></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="forging" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">3. Weapon & Armor Forging</h2>
        <p class="guide-section-intro" style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">To survive the Abyss, cooking isn't enough. You must gather raw ores and bring them to Blacksmiths to upgrade your gear from <em>Common</em> to <em>Mythic</em> tiers.</p>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table" style="background: var(--dark-2);">
            <thead>
              <tr style="border-bottom: 2px solid var(--gold); color: var(--gold);">
                <th style="padding: 1rem;">Ore / Material</th>
                <th style="padding: 1rem;">Used For</th>
                <th style="padding: 1rem;">Primary Location</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Dwarven Iron</strong></td>
                <td style="padding: 1rem;">Upgrading weapons up to Level 3.</td>
                <td style="padding: 1rem;">Commonly mined in the Hernand Caves.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Star-Metal Ingot</strong></td>
                <td style="padding: 1rem;">Level 4 to 6 upgrades. Adds innate armor penetration.</td>
                <td style="padding: 1rem;">Found inside meteor craters in the Crimson Desert.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Void-Touched Obsidian</strong></td>
                <td style="padding: 1rem;">Forging "Mythic" tier boss weapons.</td>
                <td style="padding: 1rem;">Only drops from closing Major Abyss Rifts.</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                <td style="padding: 1rem;"><strong>Troll Hide</strong></td>
                <td style="padding: 1rem;">Upgrading heavy armor sets for Kliff and Oongka.</td>
                <td style="padding: 1rem;">Hunted in the Kweiden Highlands.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="ingredients" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">4. Rare Ingredient Locations</h2>
        
        <div class="guide-cards reveal" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🍄</span>
            <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Abyss Mushroom</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Only grows in the pitch-black corners of the Whispering Swamps. Use <em>Abyss Vision</em> to spot their purple glow from a distance.</p>
          </div>
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #f1c40f;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🐝</span>
            <h3 style="color: #f1c40f; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Royal Honey</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Found in the Kweiden Mountains. Guarded by aggressive mountain bees. Tip: Use a torch to smoke them out before harvesting.</p>
          </div>
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🧂</span>
            <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Rare Spices</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Cannot be found in the wild. Can only be purchased from the Traveling Merchant in the Crimson Desert or stolen from Military Outposts.</p>
          </div>
          <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid var(--gold);">
            <span class="guide-card-icon" style="font-size: 1.5rem; display: block; margin-bottom: 0.5rem;">🐉</span>
            <h3 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">Dragon Scale</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Extremely rare. Obtained by breaking the horns or tail of the Frost Dragon World Boss before defeating it.</p>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="masterwork" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">5. "Masterwork" Crafting</h2>
        <p class="guide-section-intro" style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Every time you cook a meal or forge a weapon, there is a base <strong>5% chance</strong> to trigger a Critical Success, creating a <em>Masterwork</em> variant of the item.</p>

        <div class="companion-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 2rem;">
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #2ecc71;">
                <span class="label" style="color: #2ecc71; font-weight: bold; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.5rem;">Masterwork Food</span>
                <p style="color: #ccc; font-size: 0.95rem; margin: 0;">Duration is doubled (e.g., 30 mins becomes 60 mins) and grants +5% movement speed.</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid var(--gold);">
                <span class="label" style="color: var(--gold); font-weight: bold; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.5rem;">Masterwork Weapons</span>
                <p style="color: #ccc; font-size: 0.95rem; margin: 0;">Base damage increases by 10% and gains a free gem-socket slot.</p>
            </div>
        </div>
        <p style="font-size: 0.95rem; color: var(--text-dim);"><strong>Pro Tip:</strong> Reaching Max Rapport with <em>Naira</em> increases your Masterwork chance for potions and food by an additional 10%.</p>
      </section>

      <section class="guide-section reveal" id="routes" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">6. Optimized Farming Routes</h2>
        <p class="guide-section-intro" style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">Stop wandering aimlessly. Use these community-tested routes to gather materials efficiently before a major boss fight.</p>

        <div class="route-box reveal" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 1.5rem; border-left: 4px solid var(--gold);">
            <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0; margin-bottom: 0.5rem;">📍 The Kweiden Iron Loop (Best for Ores & Meat)</h4>
            <p style="font-size: 0.95rem; color: #ccc; line-height: 1.6; margin: 0;">
                <strong style="color: var(--text);">Start:</strong> Northern Outpost.<br>
                <strong style="color: var(--text);">Path:</strong> Head east along the mountain ridge, mining the 5 iron nodes outside the bear caves. Hunt the wild boars near the frozen lake, then fast-travel back to reset the spawns.<br>
                <strong style="color: var(--text);">Yield:</strong> ~15 Dwarven Iron, ~10 Prime Meat per 10-minute run.
            </p>
        </div>

        <div class="route-box reveal" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 1.5rem; border-left: 4px solid var(--blue);">
            <h4 style="color: var(--blue); font-family: var(--font-display); font-size: 1.3rem; margin-top: 0; margin-bottom: 0.5rem;">📍 The Swamp Alchemist Run (Best for Herbs & Essences)</h4>
            <p style="font-size: 0.95rem; color: #ccc; line-height: 1.6; margin: 0;">
                <strong style="color: var(--text);">Start:</strong> Whispering Swamps Safehouse.<br>
                <strong style="color: var(--text);">Path:</strong> Follow the glowing river south. Collect Abyss Mushrooms near the giant willow trees. Defeat the small Void-Crawlers for Void Essence drops. Avoid the central ruins unless you are level 30+.<br>
                <strong style="color: var(--text);">Yield:</strong> ~8 Abyss Mushrooms, ~5 Void Essences per run.
            </p>
        </div>

        <div class="chapter-nav">
            <a href="/crimson-desert/extras/companions.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Companions</a>
            <a href="/crimson-desert/extras/equipment.php" class="btn btn-gold">Next: Equipment →</a>
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
</script>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>