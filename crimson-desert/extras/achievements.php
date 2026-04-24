<?php 
$parentGuide = [
    'name' => 'Crimson Desert',
    'url'  => '/crimson-desert/index.php'
];
$pageTitle = "Trophy & 100% Completion Guide | Crimson Desert";
$pageDesc = "The ultimate roadmap to the Platinum Trophy. Detailed guide for all story, combat, and hidden achievements in Crimson Desert.";

include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(0, 150, 255, 0.15) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(30, 40, 60, 0.8) 0%, transparent 60%), linear-gradient(180deg, #05080a 0%, #10151a 60%, #05080a 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Trophy Guide</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Trophy Guide</h1>
      <p class="guide-hero-subtitle">The Path to the Platinum: 100% Completion</p>
    </div>
  </header>

  <div class="guide-layout" style="grid-template-columns: 1fr; max-width: 950px;">
    <main class="guide-content">

      <section class="guide-section reveal">
        <div class="callout info">
          <span class="callout-label">Roadmap to Platinum</span>
          <p style="line-height: 1.8;">
             <strong>🏆 Estimated Difficulty:</strong> 6/10<br>
             <strong>⏱️ Approximate Time:</strong> 80-100 hours<br>
             <strong>⚠️ Missable Trophies:</strong> 2 (The Raven's Ring, The True Ending)<br>
             <strong>🔄 Minimum Playthroughs:</strong> 1 (If you use manual saves before Chapter 9)
          </p>
        </div>

        <h2 class="guide-section-title" style="margin-top: 4rem; color: #e74c3c;">🚨 Danger: Missable Trophies</h2>
        <p class="guide-section-intro">Read this section before starting your playthrough. Missing these will force you to start a New Game+!</p>

        <div class="guide-accordion open" id="acc-tr-miss-1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-tr-miss-1')">
            <span class="guide-accordion-label">💍 The Raven's Ring (Bronze)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p><strong>How you miss it:</strong> In Chapter 3, you are given a rusted ring by a dying NPC. The game allows you to sell this to merchants for a quick 5,000 gold. <strong>DO NOT SELL IT.</strong></p>
              <p><strong>How to unlock:</strong> Keep it in your inventory until Chapter 7. When you meet the Blind Oracle, a unique dialogue prompt will appear to hand over the ring, unlocking the trophy and a secret weapon.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-tr-miss-2">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-tr-miss-2')">
            <span class="guide-accordion-label">🕊️ Peace at Last (Gold - True Ending)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p><strong>How you miss it:</strong> Entering the Demeniss Core (Point of No Return in Chapter 9) without finishing all 5 Lieutenants' loyalty quests.</p>
              <p><strong>How to unlock:</strong> Make a manual save at the "Gates of Demeniss". Fast travel back to your camp and ensure Kliff has reached Max Rapport with everyone. Only then proceed to the final boss.</p>
            </div>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title">1. Story & Ending Trophies</h2>
        <p>These trophies are awarded for completing the main chapters. Most are automatic, but the final choice determines your rarest achievement.</p>

        <div class="guide-table-wrap">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Trophy</th>
                <th>Rarity</th>
                <th>How to Unlock</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>The Last Greymane</strong></td>
                <td><span class="pill pill-gold" style="color: #ffd700; border-color: #ffd700;">Gold</span></td>
                <td>Complete Chapter 9 and view any of the three endings.</td>
              </tr>
              <tr>
                <td><strong>Peace at Last</strong></td>
                <td><span class="pill pill-gold" style="color: #ffd700; border-color: #ffd700;">Gold</span></td>
                <td>Unlock Ending C (The True Ending). <em>*Missable</em></td>
              </tr>
              <tr>
                <td><strong>King for a Day</strong></td>
                <td><span class="pill pill-blue">Silver</span></td>
                <td>Defeat the Corrupted King in Demeniss (Chapter 8).</td>
              </tr>
              <tr>
                <td><strong>Abyss Walker</strong></td>
                <td><span class="pill pill-blue">Silver</span></td>
                <td>Clear all 7 main Abyss Rifts across Pywel.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h2 class="guide-section-title" style="margin-top: 4rem;">2. Combat & Mastery Trophies</h2>
        <p>These require high-level skill or specific character builds. We recommend attempting these in the Demeniss Arena or against late-game bosses.</p>

        <div class="guide-accordion" id="acc-tr-1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-tr-1')">
            <span class="guide-accordion-label">⚡ Untouchable Mercenary (Silver)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p><strong>Goal:</strong> Perform 50 Perfect Parries without taking damage in a single encounter.</p>
              <p>The best place to do this is in Chapter 1 during the "Trials of Kindness" tavern brawl. The enemies are slow and predictable. Don't attack, just hold your ground and parry until the trophy pops.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-tr-2">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-tr-2')">
            <span class="guide-accordion-label">🏹 Death from Above (Bronze)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p><strong>Goal:</strong> Kill 10 enemies using aerial plunging attacks after gliding with the Abyss Wings.</p>
              <p>Once you unlock the Wings in Chapter 7, go back to the Hernand Plains. Glide from a cliff and use the Heavy Attack button to crash down on groups of low-level wolves or bandits.</p>
            </div>
          </div>
        </div>

        <h2 class="guide-section-title" style="margin-top: 4rem;">3. Hidden / Secret Trophies</h2>
        <div class="guide-table-wrap">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Trophy</th>
                <th>Rarity</th>
                <th>How to Unlock</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Who's a Good Boy?</strong></td>
                <td><span class="pill" style="color: #b0bec5; border: 1px solid #b0bec5;">Bronze</span></td>
                <td>Pet 50 different dogs across the towns of Pywel. (Yes, you can pet the dogs!).</td>
              </tr>
              <tr>
                <td><strong>What Did You Expect?</strong></td>
                <td><span class="pill" style="color: #b0bec5; border: 1px solid #b0bec5;">Bronze</span></td>
                <td>Jump directly into an Abyss Rift hole before unlocking the Glider Wings. You will die instantly, but you get a trophy.</td>
              </tr>
              <tr>
                <td><strong>Friendly Fire</strong></td>
                <td><span class="pill" style="color: #b0bec5; border: 1px solid #b0bec5;">Bronze</span></td>
                <td>Accidentally hit Oongka with a Fire Axiom spell during a camp spar.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h2 class="guide-section-title" style="margin-top: 4rem;">4. The Final Grind (Collectibles & Max Rank)</h2>
        
        <div class="guide-cards reveal">
          <div class="guide-card-item">
            <span class="guide-card-icon">🗺️</span>
            <h3>Pywel Cartographer</h3>
            <p>Reveal the entire map of the continent. You must synchronize with all 12 Watchtowers and enter every named sub-region.</p>
          </div>
          <div class="guide-card-item">
            <span class="guide-card-icon">💎</span>
            <h3>Archeologist of the Void</h3>
            <p>Find and collect all 32 Hidden Treasures. Refer to our <a href="/crimson-desert/index" style="color: var(--gold);">Interactive Map Guide</a> for exact locations.</p>
          </div>
          <div class="guide-card-item">
            <span class="guide-card-icon">🍲</span>
            <h3>Master Chef</h3>
            <p>Cook every recipe in the game at least once. Make sure to buy the secret spices from the Traveling Merchant.</p>
          </div>
          <div class="guide-card-item" style="border-top: 2px solid var(--gold);">
            <span class="guide-card-icon">👑</span>
            <h3>Mercenary Legend</h3>
            <p>Reach Rank S with the Greymanes. This requires completing over 100 radiant bounty board missions. Save this for the post-game grind.</p>
          </div>
        </div>

        <div style="text-align: center; margin: 5rem 0;">
            <a href="/crimson-desert/index" class="btn btn-gold">Back to Main Guide</a>
        </div>

      </section>

    </main>
  </div>
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Seleccionamos todas las filas de las tablas de trofeos
    const trophyRows = document.querySelectorAll('.guide-table tbody tr');
    
    // Cargamos el progreso guardado (si existe) desde el LocalStorage del navegador
    const savedProgress = JSON.parse(localStorage.getItem('guideVaultTrophies')) || {};

    trophyRows.forEach((row, index) => {
        // Le damos un ID único a cada fila basado en su posición
        const rowId = 'trophy_' + index;

        // Si estaba guardado como completado, le ponemos la clase CSS
        if (savedProgress[rowId]) {
            row.classList.add('completed-trophy');
        }

        // Evento al hacer clic en cualquier parte de la fila
        row.addEventListener('click', () => {
            row.classList.toggle('completed-trophy'); // Pone o quita el tachado
            
            // Actualizamos el estado en nuestro objeto guardado
            savedProgress[rowId] = row.classList.contains('completed-trophy');
            
            // Guardamos el nuevo estado en el navegador del usuario
            localStorage.setItem('guideVaultTrophies', JSON.stringify(savedProgress));
        });
    });
});
</script>
<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>