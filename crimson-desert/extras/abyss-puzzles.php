<?php 
$parentGuide = [
    'name' => 'Crimson Desert',
    'url'  => '/crimson-desert/index.php'
];
$pageTitle = "All 40 Abyss Puzzles Solutions | Crimson Desert Guide";
$pageDesc = "Complete step-by-step walkthroughs and solutions for all 40 Abyss Puzzles in Crimson Desert. Claim every Abyss Artifact.";

include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(138, 43, 226, 0.15) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(75, 0, 130, 0.8) 0%, transparent 60%), linear-gradient(180deg, #05020a 0%, #11051a 60%, #05020a 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Abyss Puzzles</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Abyss Puzzles</h1>
      <p class="guide-hero-subtitle">Solutions for all 40 interdimensional challenges</p>
    </div>
  </header>

  <div class="guide-layout" style="grid-template-columns: 1fr; max-width: 950px;">
    <main class="guide-content">

      <section class="guide-section">
        <div class="callout info">
          <span class="callout-label">The Ultimate Reward</span>
          <p>Completing each of these 40 Abyss Puzzles will reward you with an <strong>Abyss Artifact</strong>. Collecting all of them is mandatory to unlock Kliff's true potential and access the highest tier of Axiom Force skills.</p>
        </div>

        <h2 class="guide-section-title" style="margin-top: 3rem;">1. Advanced Puzzle Walkthroughs</h2>
        <p>These are the most complex puzzles in the game, requiring precise timing and logic.</p>

        <div class="guide-accordion open" id="acc-abyss-1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-abyss-1')" aria-expanded="true" aria-controls="content-abyss-1">
            <span class="guide-accordion-label">🧩 Dimensional Labyrinth</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" id="content-abyss-1" role="region" style="max-height:800px">
            <div class="guide-accordion-inner">
              <p>This puzzle follows a massive loop where you must activate nodes in a strict order. Missing a single core blocks the ending.</p>
              <ul class="step-list" style="margin-top: 1.5rem;">
                <li class="step">
                  <div class="step-num">1</div>
                  <div class="step-content">
                    <h4>First Silver Circle</h4>
                    <p>Fly toward the central Abyss Core. Position yourself in front of the round gate and use <strong>Force Palm</strong> to trigger the initial blue energy lines. This unlocks the inner building.</p>
                  </div>
                </li>
                <li class="step">
                  <div class="step-num">2</div>
                  <div class="step-content">
                    <h4>Second Silver Circle</h4>
                    <p>Enter the newly opened access point. Find the second circle on the same level and use Force Palm again to extend the energy network to the upper and lower sections.</p>
                  </div>
                </li>
                <li class="step">
                  <div class="step-num">3</div>
                  <div class="step-content">
                    <h4>The Grapple Point</h4>
                    <p>Use your grapple to reach the higher platform above the second circle. Here you will find the third silver circle and the rectangular Axiom cores required to finish the labyrinth.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-abyss-2">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-abyss-2')" aria-expanded="false" aria-controls="content-abyss-2">
            <span class="guide-accordion-label">👁️ Sanctorum of Insight</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
			
          <div class="guide-accordion-body" id="content-abyss-2" role="region">
            <div class="guide-accordion-inner">
              <p>This challenge requires mastering floating platforms and the Abyss Gate mechanic. The trick is to never jump; instead, use your telekinesis to pull the platforms underneath Kliff before the timers run out.</p>
            </div>
          </div>
        </div>
		  <div class="guide-accordion" id="acc-abyss-3">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-abyss-3')" aria-expanded="false" aria-controls="content-abyss-3">
            <span class="guide-accordion-label">⚔️ Vault of Vengeance</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" id="content-abyss-3" role="region">
            <div class="guide-accordion-inner">
              <p>This puzzle is actually a massive combat trial mixed with time-sensitive levers. You must balance fighting Abyss Stalkers while keeping the central gears turning.</p>
              <ul class="step-list" style="margin-top: 1.5rem;">
                <li class="step">
                  <div class="step-num">1</div>
                  <div class="step-content">
                    <h4>The First Gear</h4>
                    <p>Pull the lever on the left balcony. This starts a 60-second timer. Immediately drop down and use <strong>Axiom Pull</strong> on the shielded enemies to clear the room fast.</p>
                  </div>
                </li>
                <li class="step">
                  <div class="step-num">2</div>
                  <div class="step-content">
                    <h4>The Dual Levers</h4>
                    <p>Once the room is clear, you must activate the two levers on opposite sides of the room within 5 seconds of each other. Use your <em>Abyss Wings</em> or a fast dash skill to cross the massive gap.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-abyss-4">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-abyss-4')" aria-expanded="false" aria-controls="content-abyss-4">
            <span class="guide-accordion-label">⚖️ Cradle of Truth</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" id="content-abyss-4" role="region">
            <div class="guide-accordion-inner">
              <p>A pure logic puzzle. You are presented with four statues holding scales, and you must distribute the "Weights of Sin" correctly.</p>
              <p><strong>The Solution:</strong> Do not place the weights based on the statues' sizes. Instead, place the heaviest weight on the statue facing <em>South</em> (towards the entrance), the medium weights on East and West, and leave the North scale completely empty. The center floor will lower into the artifact room.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-abyss-5">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-abyss-5')" aria-expanded="false" aria-controls="content-abyss-5">
            <span class="guide-accordion-label">🌉 Ethereal Pathway</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" id="content-abyss-5" role="region">
            <div class="guide-accordion-inner">
              <p>Though it's the first Abyss puzzle many players find, its secondary hidden path stumps most completionists.</p>
              <p><strong>The Trick:</strong> When you reach the third invisible bridge, instead of walking straight to the obvious exit, cast <em>Force Palm</em> downwards. This reveals a translucent blue staircase leading down to a hidden platform where the true Abyss Artifact is kept. The main exit only gives a fake chest!</p>
            </div>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title">2. Complete Checklist (All 40 Puzzles)</h2>
        <p>Use this interactive list to track your progress. Your data is automatically saved in your browser.</p>

        <div class="guide-table-wrap">
          <table class="guide-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Puzzle Name</th>
                <th>Completed</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>1</td><td>Ethereal Pathway</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-1"></td></tr>
              <tr><td>2</td><td>Axiom Archive</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-2"></td></tr>
              <tr><td>3</td><td>Crescent Skybridge</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-3"></td></tr>
              <tr><td>4</td><td>Crow's Nest</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-4"></td></tr>
              <tr><td>5</td><td>Sanctorum of Insight</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-5"></td></tr>
              <tr><td>6</td><td>Secret Garden</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-6"></td></tr>
              <tr><td>7</td><td>Vault of Vengeance</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-7"></td></tr>
              <tr><td>8</td><td>Courtyard of Precision</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-8"></td></tr>
              <tr><td>9</td><td>Altar of Solitude</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-9"></td></tr>
              <tr><td>10</td><td>Ice Cradle</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-10"></td></tr>
              <tr><td>11</td><td>Ancient Sealed Gate</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-11"></td></tr>
              <tr><td>12</td><td>Twisted Thicketway</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-12"></td></tr>
              <tr><td>13</td><td>Passage of Malice</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-13"></td></tr>
              <tr><td>14</td><td>Ether Rest</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-14"></td></tr>
              <tr><td>15</td><td>Frostbitten Paradise</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-15"></td></tr>
              <tr><td>16</td><td>Path of Trials</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-16"></td></tr>
              <tr><td>17</td><td>Sanctorum of Darkness</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-17"></td></tr>
              <tr><td>18</td><td>Loop of Life</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-18"></td></tr>
              <tr><td>19</td><td>Tree of Slumber</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-19"></td></tr>
              <tr><td>20</td><td>Skyloop Bridge</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-20"></td></tr>
              <tr><td>21</td><td>Chaos Forest</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-21"></td></tr>
              <tr><td>22</td><td>Roots of Truth</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-22"></td></tr>
              <tr><td>23</td><td>Precipice of Truth</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-23"></td></tr>
              <tr><td>24</td><td>Nest of Valor</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-24"></td></tr>
              <tr><td>25</td><td>Throne of Truth</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-25"></td></tr>
              <tr><td>26</td><td>Tomb of Perdition</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-26"></td></tr>
              <tr><td>27</td><td>Desert Fragment</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-27"></td></tr>
              <tr><td>28</td><td>Root's End</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-28"></td></tr>
              <tr><td>29</td><td>Cradle of Truth</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-29"></td></tr>
              <tr><td>30</td><td>Ascetic's Rest</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-30"></td></tr>
              <tr><td>31</td><td>Path of Serpents</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-31"></td></tr>
              <tr><td>32</td><td>Dimensional Labyrinth</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-32"></td></tr>
              <tr><td>33</td><td>Sanctum of Transcendence</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-33"></td></tr>
              <tr><td>34</td><td>Riddle Square</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-34"></td></tr>
              <tr><td>35</td><td>Origin of Thoughts</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-35"></td></tr>
              <tr><td>36</td><td>Forgotten Altar</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-36"></td></tr>
              <tr><td>37</td><td>Disconnected Truth</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-37"></td></tr>
              <tr><td>38</td><td>Ether Fragment</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-38"></td></tr>
              <tr><td>39</td><td>Monolith Crown</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-39"></td></tr>
              <tr><td>40</td><td>Dimensional Bonds</td><td><input type="checkbox" class="puzzle-checkbox" data-id="puzzle-40"></td></tr>
            </tbody>
          </table>
        </div>

      </section>

    </main>
  </div>

<style>
  /* Estilo premium para los checkboxes */
  .puzzle-checkbox {
    width: 22px;
    height: 22px;
    accent-color: #D4AF37; /* Dorado GuideVault */
    cursor: pointer;
    transition: transform 0.2s;
  }
  .puzzle-checkbox:hover {
    transform: scale(1.1);
  }
</style>

<script>
  // Motor de guardado local (localStorage)
  document.addEventListener("DOMContentLoaded", () => {
    const checkboxes = document.querySelectorAll('.puzzle-checkbox');

    // Al cargar la página, comprobar cuáles estaban marcados
    checkboxes.forEach(box => {
      const puzzleId = box.dataset.id;
      if (localStorage.getItem(puzzleId) === 'true') {
        box.checked = true;
      }

      // Guardar instantáneamente cuando el usuario hace clic
      box.addEventListener('change', (e) => {
        localStorage.setItem(puzzleId, e.target.checked);
      });
    });
  });
</script>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>