<?php 
$pageTitle = "All 37 Ancient Ruins Puzzles | Crimson Desert Guide";
$pageDesc = "Complete step-by-step walkthroughs and checklist for all 37 Ancient Ruins & World Puzzles in Crimson Desert.";

include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(212, 175, 55, 0.15) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(184, 134, 11, 0.6) 0%, transparent 60%), linear-gradient(180deg, #0a0805 0%, #1a1505 60%, #0a0805 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Ancient Ruins</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Ancient Ruins</h1>
      <p class="guide-hero-subtitle">World Puzzles and Forgotten Secrets</p>
    </div>
  </header>

  <div class="guide-layout" style="grid-template-columns: 1fr; max-width: 950px;">
    <main class="guide-content">

      <section class="guide-section">
        <div class="callout warning">
          <span class="callout-label">Exploration Note</span>
          <p>Unlike the Abyss Rifts, Ancient Ruins are integrated seamlessly into the open world of Pywel. Solving these 37 puzzles rewards you with <strong>Memories of Tide</strong> and rare crafting materials necessary for Mythic gear.</p>
        </div>

        <h2 class="guide-section-title" style="margin-top: 3rem;">1. Complex Ruins Walkthroughs</h2>
        <p>These world puzzles span entire regions and require specific environmental interactions.</p>

        <div class="guide-accordion open" id="acc-ruin-1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-ruin-1')" aria-expanded="true" aria-controls="content-ruin-1">
            <span class="guide-accordion-label">🏛️ The Sundial of Kings</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" id="content-ruin-1" role="region" style="max-height:800px">
            <div class="guide-accordion-inner"><p>Wait until precisely High Noon (12:00) in-game time and place the Golden Scepter in the center slot. A hidden staircase will reveal the Royal Vault.</p></div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-ruin-2">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-ruin-2')" aria-expanded="false" aria-controls="content-ruin-2">
            <span class="guide-accordion-label">🗿 The Weeping Statues (Pailune Cemetery)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" id="content-ruin-2" role="region">
            <div class="guide-accordion-inner">
              <p>You will find four statues crying black tears. Do not attack them. Instead, use your <strong>Axiom Pull</strong> to rotate all four statues so they face the central tomb. The tears will stop, revealing a hidden staircase.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-ruin-3">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-ruin-3')" aria-expanded="false" aria-controls="content-ruin-3">
            <span class="guide-accordion-label">🪞 Kweiden Ice Mirrors (Ice Caves)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" id="content-ruin-3" role="region">
            <div class="guide-accordion-inner">
              <p>The moonlight needs to reach the frozen door. Use a <em>Fire Imbue Oil</em> on your sword to melt the ice blocks obstructing the crystal mirrors. Once melted, angle the mirrors at 45 degrees to bounce the light directly into the lock.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-ruin-4">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-ruin-4')" aria-expanded="false" aria-controls="content-ruin-4">
            <span class="guide-accordion-label">🧪 The Alchemist's Lock (Hernand Sewers)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" id="content-ruin-4" role="region">
            <div class="guide-accordion-inner">
              <p>A color-matching puzzle. You must pull the levers to mix the colored water in the vats. To open the main vault, mix <strong>Red + Blue</strong> to create the Purple Abyss liquid, then pull the master switch.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-ruin-5">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-ruin-5')" aria-expanded="false" aria-controls="content-ruin-5">
            <span class="guide-accordion-label">✨ Akapen Constellations (Sunken Temple)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" id="content-ruin-5" role="region">
            <div class="guide-accordion-inner">
              <p>Look at the ceiling to see the glowing stars of the "Desert Wolf" constellation. Light the unlit braziers on the floor in the exact same pattern. Lighting an incorrect brazier will summon two Sand Wraiths.</p>
            </div>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title">2. Complete Checklist (37 Ruins)</h2>
        <p>Track your open-world puzzle progress. Your data is automatically saved in your browser.</p>

        <div class="guide-table-wrap">
          <table class="guide-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Ruin / Puzzle Name</th>
                <th>Completed</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>1</td><td>Azure Moon Labyrinth</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-1"></td></tr>
              <tr><td>2</td><td>Dragon's Stone Chamber</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-2"></td></tr>
              <tr><td>3</td><td>The Sundial of Kings</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-3"></td></tr>
              <tr><td>4</td><td>The Weeping Statues</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-4"></td></tr>
              <tr><td>5</td><td>Kweiden Ice Mirrors</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-5"></td></tr>
              <tr><td>6</td><td>The Alchemist's Lock</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-6"></td></tr>
              <tr><td>7</td><td>Akapen Constellations</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-7"></td></tr>
              <tr><td>8</td><td>Thread in the Forest</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-8"></td></tr>
              <tr><td>9</td><td>Hernand's Forgotten Well</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-9"></td></tr>
              <tr><td>10</td><td>The Whispering Monolith</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-10"></td></tr>
              <tr><td>11</td><td>Ruins of the First Camp</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-11"></td></tr>
              <tr><td>12</td><td>Tidecaller's Shrine</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-12"></td></tr>
              <tr><td>13</td><td>Pailune Bell Tower</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-13"></td></tr>
              <tr><td>14</td><td>The Sunken Galleon</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-14"></td></tr>
              <tr><td>15</td><td>Delesyia Lighthouse</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-15"></td></tr>
              <tr><td>16</td><td>Smuggler's Cave</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-16"></td></tr>
              <tr><td>17</td><td>Harsand Magma Vent</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-17"></td></tr>
              <tr><td>18</td><td>The Ashen Gates</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-18"></td></tr>
              <tr><td>19</td><td>Watcher's Perch</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-19"></td></tr>
              <tr><td>20</td><td>Abandoned Forge</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-20"></td></tr>
              <tr><td>21</td><td>The Golden Scale</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-21"></td></tr>
              <tr><td>22</td><td>Echoing Canyon</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-22"></td></tr>
              <tr><td>23</td><td>Serpent's Maw</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-23"></td></tr>
              <tr><td>24</td><td>The Hollow Tree</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-24"></td></tr>
              <tr><td>25</td><td>Grave of the Unknown</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-25"></td></tr>
              <tr><td>26</td><td>The Obsidian Pillars</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-26"></td></tr>
              <tr><td>27</td><td>Mirage Oasis</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-27"></td></tr>
              <tr><td>28</td><td>The Sandfall</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-28"></td></tr>
              <tr><td>29</td><td>Crest of the Griffin</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-29"></td></tr>
              <tr><td>30</td><td>The Broken Bridge</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-30"></td></tr>
              <tr><td>31</td><td>Tears of the Goddess</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-31"></td></tr>
              <tr><td>32</td><td>The Silent Chimes</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-32"></td></tr>
              <tr><td>33</td><td>Roots of Demeniss</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-33"></td></tr>
              <tr><td>34</td><td>The King's Shadow</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-34"></td></tr>
              <tr><td>35</td><td>Vault of the Greymanes</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-35"></td></tr>
              <tr><td>36</td><td>The Stargazer's Dome</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-36"></td></tr>
              <tr><td>37</td><td>The Final Thread</td><td><input type="checkbox" class="ruin-checkbox" data-id="ruin-37"></td></tr>
            </tbody>
          </table>
        </div>

      </section>

    </main>
  </div>

<style>
  /* Checkboxes dorados para las ruinas */
  .ruin-checkbox {
    width: 22px;
    height: 22px;
    accent-color: #D4AF37; 
    cursor: pointer;
    transition: transform 0.2s;
  }
  .ruin-checkbox:hover {
    transform: scale(1.1);
  }
</style>

<script>
  // Motor de guardado local (localStorage) para las Ruinas
  document.addEventListener("DOMContentLoaded", () => {
    const checkboxes = document.querySelectorAll('.ruin-checkbox');

    // Cargar progreso
    checkboxes.forEach(box => {
      const ruinId = box.dataset.id;
      if (localStorage.getItem(ruinId) === 'true') {
        box.checked = true;
      }

      // Guardar progreso al hacer clic
      box.addEventListener('change', (e) => {
        localStorage.setItem(ruinId, e.target.checked);
      });
    });
  });
</script>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>