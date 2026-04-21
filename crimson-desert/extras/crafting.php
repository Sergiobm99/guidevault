<?php 
$pageTitle = "Crafting, Cooking & Alchemy Guide | Crimson Desert";
$pageDesc = "Master the art of survival in Pywel. Complete list of cooking recipes, alchemy elixirs, weapon forging, and where to find rare crafting materials.";

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(100, 200, 100, 0.15) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(60, 40, 80, 0.7) 0%, transparent 60%), linear-gradient(180deg, #0a100a 0%, #101510 60%, #0a100a 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Crafting & Cooking</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Crafting & Alchemy</h1>
      <p class="guide-hero-subtitle">The Art of Survival, Forging, and Transmutation</p>
    </div>
  </header>

  <div class="guide-layout" style="grid-template-columns: 1fr; max-width: 950px;">
    <main class="guide-content">

      <section class="guide-section reveal">
        <div class="callout info">
          <span class="callout-label">The Chef's & Smith's Tip</span>
          <p>Cooking at a <strong>Campfire</strong> grants standard results, but using a <strong>Tavern Kitchen</strong> increases the duration of all buffs by 50%. Similarly, upgrading Oongka's anvil at your mercenary camp reduces the gold cost of forging weapons by 20%.</p>
        </div>

        <h2 class="guide-section-title" style="margin-top: 4rem;">1. Top Cooking Recipes</h2>
        <p class="guide-section-intro">Food provides long-term buffs to Stamina, Health, and Attack Power. You can have one "Meal" buff active at a time.</p>

        <div class="guide-table-wrap">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Recipe</th>
                <th>Ingredients</th>
                <th>Buff Effect</th>
                <th>Duration</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>King's Feast</strong></td>
                <td>Prime Meat (x2), Rare Herbs, Spice Pack</td>
                <td>+30% Max HP & +20% Attack Power.</td>
                <td>30 Minutes</td>
              </tr>
              <tr>
                <td><strong>Dragonheart Stew</strong></td>
                <td>Dragon's Blood, Prime Meat, Rare Spices</td>
                <td>Grants immunity to stagger and +50% Physical Defense.</td>
                <td>10 Minutes</td>
              </tr>
              <tr>
                <td><strong>Fisherman's Delight</strong></td>
                <td>Abyss Koi, Salt, Lemon</td>
                <td>Allows 2x faster swimming and breath recovery.</td>
                <td>20 Minutes</td>
              </tr>
              <tr>
                <td><strong>Desert Fig Cake</strong></td>
                <td>Akapen Figs (x3), Flour, Honey</td>
                <td>100% Resistance to Heatstroke (Essential for Ch. 4).</td>
                <td>10 Minutes</td>
              </tr>
              <tr>
                <td><strong>Kweiden Frost-Tea</strong></td>
                <td>Snow Lily, Spring Water, Honey</td>
                <td>100% Resistance to Freezing (Essential for Ch. 6).</td>
                <td>20 Minutes</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">2. Alchemical Elixirs (Combat Potions)</h2>
        <p class="guide-section-intro">Unlike food, Elixirs provide immediate or short-term tactical advantages. You can use multiple Elixirs simultaneously without overwriting their effects.</p>

        <div class="guide-accordion open" id="acc-cr-1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-cr-1')">
            <span class="guide-accordion-label">🧪 Offensive Elixirs</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px">
            <div class="guide-accordion-inner">
              <ul style="padding-left: 1.5rem; color: var(--text-dim); line-height: 1.8;">
                <li style="margin-bottom: 0.5rem;"><strong>Fire Imbue Oil:</strong> Temporarily adds Fire damage to any weapon for 60 seconds. <br><em style="color: var(--gold-dim);">Recipe: Sulfur powder + Wolf Fat.</em></li>
                <li style="margin-bottom: 0.5rem;"><strong>Thunderbolt Draught:</strong> Increases Critical Hit chance by 15%. <br><em style="color: var(--gold-dim);">Recipe: Lightning Mushroom + Liquid Mercury.</em></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-cr-2">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-cr-2')">
            <span class="guide-accordion-label">🛡️ Defensive & Utility Elixirs</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <ul style="padding-left: 1.5rem; color: var(--text-dim); line-height: 1.8;">
                <li style="margin-bottom: 0.5rem;"><strong>Abyss Resistance Potion:</strong> Reduces damage taken from Abyss-type enemies by 40%. <br><em style="color: var(--gold-dim);">Recipe: Void Essence + Blue Petal.</em></li>
                <li style="margin-bottom: 0.5rem;"><strong>Healing Salve:</strong> Restores 50% HP instantly. <br><em style="color: var(--gold-dim);">Recipe: Green Herb (x3) + Spring Water.</em></li>
                <li style="margin-bottom: 0.5rem;"><strong>Antidote:</strong> Instantly cures Poison and Toxic status. <br><em style="color: var(--gold-dim);">Recipe: Charcoal + Lichen.</em></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-cr-3">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-cr-3')">
            <span class="guide-accordion-label">✨ Axiom & Magic Elixirs</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <ul style="padding-left: 1.5rem; color: var(--text-dim); line-height: 1.8;">
                <li style="margin-bottom: 0.5rem;"><strong>Axiom Overdrive:</strong> Eliminates cooldowns for all Axiom abilities for 15 seconds. <br><em style="color: var(--gold-dim);">Recipe: Star-metal Dust + Void Essence.</em></li>
                <li style="margin-bottom: 0.5rem;"><strong>Liquid Shadow:</strong> Grants near-invisibility to enemies for 3 minutes (breaks upon attacking). <br><em style="color: var(--gold-dim);">Recipe: Nightshade + Black Pearl.</em></li>
              </ul>
            </div>
          </div>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">3. Weapon & Armor Forging</h2>
        <p class="guide-section-intro">To survive the Abyss, cooking isn't enough. You must gather raw ores and bring them to Blacksmiths to upgrade your gear from <em>Common</em> to <em>Mythic</em> tiers.</p>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Ore / Material</th>
                <th>Used For</th>
                <th>Primary Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Dwarven Iron</strong></td>
                <td>Upgrading weapons up to Level 3.</td>
                <td>Commonly mined in the Hernand Caves.</td>
              </tr>
              <tr>
                <td><strong>Star-Metal Ingot</strong></td>
                <td>Level 4 to 6 upgrades. Adds innate armor penetration.</td>
                <td>Found inside meteor craters in the Crimson Desert.</td>
              </tr>
              <tr>
                <td><strong>Void-Touched Obsidian</strong></td>
                <td>Forging "Mythic" tier boss weapons.</td>
                <td>Only drops from closing Major Abyss Rifts.</td>
              </tr>
              <tr>
                <td><strong>Troll Hide</strong></td>
                <td>Upgrading heavy armor sets for Kliff and Oongka.</td>
                <td>Hunted in the Kweiden Highlands.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">4. Rare Ingredient Locations</h2>
        
        <div class="guide-cards reveal">
          <div class="guide-card-item">
            <span class="guide-card-icon">🍄</span>
            <h3>Abyss Mushroom</h3>
            <p>Only grows in the pitch-black corners of the Whispering Swamps. Use <em>Abyss Vision</em> to spot their purple glow from a distance.</p>
          </div>
          <div class="guide-card-item">
            <span class="guide-card-icon">🐝</span>
            <h3>Royal Honey</h3>
            <p>Found in the Kweiden Mountains. Guarded by aggressive mountain bees. Tip: Use a torch to smoke them out before harvesting.</p>
          </div>
          <div class="guide-card-item">
            <span class="guide-card-icon">🧂</span>
            <h3>Rare Spices</h3>
            <p>Cannot be found in the wild. Can only be purchased from the Traveling Merchant in the Crimson Desert or stolen from Military Outposts.</p>
          </div>
          <div class="guide-card-item" style="border-top: 2px solid var(--gold);">
            <span class="guide-card-icon">🐉</span>
            <h3>Dragon Scale</h3>
            <p>Extremely rare. Obtained by breaking the horns or tail of the Frost Dragon World Boss before defeating it.</p>
          </div>
        </div>
		  <h2 class="guide-section-title" style="margin-top: 5rem;">5. "Masterwork" Crafting</h2>
        <p class="guide-section-intro">Every time you cook a meal or forge a weapon, there is a base <strong>5% chance</strong> to trigger a Critical Success, creating a <em>Masterwork</em> variant of the item.</p>

        <div class="companion-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 2rem;">
            <div class="stat-card" style="background: var(--dark-2); padding: 1rem; border-top: 2px solid #2ecc71;">
                <span class="label" style="font-size: 0.6rem; color: #2ecc71;">Masterwork Food</span>
                <p>Duration is doubled (e.g., 30 mins becomes 60 mins) and grants +5% movement speed.</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1rem; border-top: 2px solid var(--gold);">
                <span class="label" style="font-size: 0.6rem; color: var(--gold);">Masterwork Weapons</span>
                <p>Base damage increases by 10% and gains a free gem-socket slot.</p>
            </div>
        </div>
        <p style="font-size: 0.85rem; color: var(--text-dim);"><strong>Pro Tip:</strong> Reaching Max Rapport with <em>Naira</em> increases your Masterwork chance for potions and food by an additional 10%.</p>

        <h2 class="guide-section-title" style="margin-top: 5rem;">6. Optimized Farming Routes</h2>
        <p class="guide-section-intro">Stop wandering aimlessly. Use these community-tested routes to gather materials efficiently before a major boss fight.</p>

        <div class="route-box reveal">
            <h4>📍 The Kweiden Iron Loop (Best for Ores & Meat)</h4>
            <p style="font-size: 0.9rem; color: var(--text-dim);">
                <strong>Start:</strong> Northern Outpost.<br>
                <strong>Path:</strong> Head east along the mountain ridge, mining the 5 iron nodes outside the bear caves. Hunt the wild boars near the frozen lake, then fast-travel back to reset the spawns.<br>
                <strong>Yield:</strong> ~15 Dwarven Iron, ~10 Prime Meat per 10-minute run.
            </p>
        </div>

        <div class="route-box reveal">
            <h4>📍 The Swamp Alchemist Run (Best for Herbs & Essences)</h4>
            <p style="font-size: 0.9rem; color: var(--text-dim);">
                <strong>Start:</strong> Whispering Swamps Safehouse.<br>
                <strong>Path:</strong> Follow the glowing river south. Collect Abyss Mushrooms near the giant willow trees. Defeat the small Void-Crawlers for Void Essence drops. Avoid the central ruins unless you are level 30+.<br>
                <strong>Yield:</strong> ~8 Abyss Mushrooms, ~5 Void Essences per run.
            </p>
        </div>

        <div style="text-align: center; margin: 5rem 0;">
            <a href="/crimson-desert/index.php" class="btn btn-gold">Back to Main Guide</a>
        </div>

      </section>

    </main>
  </div>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>