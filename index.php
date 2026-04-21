<?php 
// === CONFIGURACIÓN DE LA PORTADA (JUEGO DESTACADO) ===
// Cuando salga un juego nuevo, solo cambia los datos de este bloque. 
// La tarjeta de la web se actualizará sola automáticamente.
$featured_game = [
    'floating_tag_1' => '⚔ Updated for Patch 1.03',
    'link'           => 'https://guidevault.online/crimson-desert',
    //thumb_art se deja vacío ya que usaremos imagen de fondo
    'thumb_art'      => '', 
    'status_text'    => 'Live',
    'status_color'   => '#27ae60', // Color del botoncito (verde = Live, gris = Soon)
    'genres'         => ['Action RPG', 'Open World'], 
    'title'          => 'Crimson Desert',
    'desc'           => 'Complete guide to Pearl Abyss\'s epic open-world RPG. Combat mechanics, all puzzle solutions, hidden treasures, boss strategies, and the secrets of the Abyss.',
    'stats'          => [
        '📖 <b>8 Chapters</b>',
        '🗺 <b>6 Regions</b>'
    ]
];
// ====================================================

$pageTitle = "GuideVault — Complete Game Guides & Walkthroughs";
$pageDesc = "In-depth game guides, walkthroughs, and strategies written by players for players.";

include 'header.php'; 
?>

  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-lines"></div>

    <div class="hero-inner">
      <div class="hero-content">
        <p class="hero-eyebrow">Very Complete Game Guides</p>

        <h1 class="hero-title">
          Complete<br>
          <span>Game Guides</span>
        </h1>

        <p class="hero-desc">
          In-depth walkthroughs, puzzle solutions, hidden treasures, and boss strategies.
          Written by dedicated players who've spent hundreds of hours so you don't have to suffer.
        </p>

        <div class="hero-actions">
          <a href="#guides" class="btn btn-gold">Browse</a>
          <a href="#coming-soon" class="btn btn-outline">What's Coming</a>
        </div>

        <div class="hero-stats">
          <div>
            <span class="hero-stat-num">2</span>
            <span class="hero-stat-label">Guides Live</span>
          </div>
          <div>
            <span class="hero-stat-num">4+</span>
            <span class="hero-stat-label">In Progress</span>
          </div>
          <div>
            <span class="hero-stat-num">100%</span>
            <span class="hero-stat-label">Free Access</span>
          </div>
        </div>
      </div>

      <a href="<?php echo $featured_game['link']; ?>" class="hero-card-featured" style="position: relative;">
        
        <div class="floating-tag tag-1"><?php echo $featured_game['floating_tag_1']; ?></div>

        <div class="hero-card-thumb" style="background-image: url('img/crimson-desert-art.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
          <div class="hero-card-thumb-badge">
            <span class="badge badge-new" style="background: <?php echo $featured_game['status_color']; ?>;">
              <?php echo $featured_game['status_text']; ?>
            </span>
          </div>
        </div>
        <div class="hero-card-body">
          <div class="hero-card-meta">
            <?php foreach($featured_game['genres'] as $genre): ?>
              <span class="badge badge-genre"><?php echo $genre; ?></span>
            <?php endforeach; ?>
          </div>
          <h2 class="hero-card-title"><?php echo $featured_game['title']; ?></h2>
          <p class="hero-card-desc"><?php echo $featured_game['desc']; ?></p>
          <div class="hero-card-footer">
            <div class="hero-card-stats">
              <?php foreach($featured_game['stats'] as $stat): ?>
                <span class="hero-card-stat"><?php echo $stat; ?></span>
              <?php endforeach; ?>
            </div>
            <span class="guide-card-cta">Read Guide →</span>
          </div>
        </div>
      </a>
      
    </div>
  </section>

  <div class="features-strip">
    <div class="features-inner">
      <div class="feature-item">
        <div class="feature-icon">🗡️</div>
        <div>
          <div class="feature-title">Combat Deep-Dives</div>
          <div class="feature-desc">Mechanics, combos, and boss strategies explained in detail.</div>
        </div>
      </div>
      <div class="feature-item">
        <div class="feature-icon">🗺️</div>
        <div>
          <div class="feature-title">Every Hidden Secret</div>
          <div class="feature-desc">Treasures, collectibles, and locations the game doesn't tell you about.</div>
        </div>
      </div>
      <div class="feature-item">
        <div class="feature-icon">🧩</div>
        <div>
          <div class="feature-title">Puzzle Solutions</div>
          <div class="feature-desc">Step-by-step breakdowns for every puzzle and challenge.</div>
        </div>
      </div>
      <div class="feature-item">
        <div class="feature-icon">⚡</div>
        <div>
          <div class="feature-title">Always Updated</div>
          <div class="feature-desc">Guides updated with every patch, DLC, and community discovery.</div>
        </div>
      </div>
    </div>
  </div>

  <div class="filter-section">
    <div class="filter-inner">
      <span class="filter-label">Filter:</span>
      <div class="filter-tabs">
        <button class="filter-tab active" data-filter="all">All</button>
        <button class="filter-tab" data-filter="action">Action RPG</button>
        <button class="filter-tab" data-filter="openworld">Open World</button>
        <button class="filter-tab" data-filter="soulslike">Soulslike</button>
        <button class="filter-tab" data-filter="rpg">RPG</button>
        <button class="filter-tab" data-filter="strategy">Strategy</button>
      </div>
      <span class="filter-count" id="guide-count" aria-live="polite">Showing 2 guides</span>
    </div>
  </div>

  <section class="guides-section" id="guides">
    <div class="guides-inner">
      <div class="section-header">
        <div class="section-header-left">
          <span class="label">Game Library</span>
          <h2>Game Guides Library</h2>
        </div>
        <a href="#coming-soon" class="btn btn-ghost">See What's Next →</a>
      </div>

      <div class="guides-grid" id="guides-grid">

        <a href="https://guidevault.online/crimson-desert"
           class="guide-card"
           data-genres="action openworld">
          <div class="guide-card-thumb" style="background-image: url('img/crimson-desert-art.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="guide-card-thumb-overlay"></div>
            <div class="guide-card-thumb-badges">
              <span class="badge badge-new">New</span>
            </div>
          </div>
          <div class="guide-card-body">
            <span class="guide-card-genre">Action RPG · Open World</span>
            <h3 class="guide-card-title">Crimson Desert</h3>
            <p class="guide-card-desc">Complete guide to Pearl Abyss's epic open-world RPG. Combat mechanics, all puzzle solutions, hidden treasures, boss strategies, and the secrets of the Abyss.</p>
            <div class="guide-card-footer">
              <div class="guide-card-meta-list">
                <span class="guide-card-meta-item">📖 <b>8 Chapters</b></span>
                <span class="guide-card-meta-item">🗺 <b>6 Regions</b></span>
              </div>
              <span class="guide-card-cta">Read →</span>
            </div>
          </div>
        </a>

        <a href="/elden-ring/" 
           class="guide-card" 
           data-genres="soulslike action openworld">
          <div class="guide-card-thumb" style="background-image: linear-gradient(180deg, rgba(10,10,15,0.2) 0%, rgba(10,10,15,0.9) 100%), url('img/elden-ring-card-bg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="guide-card-thumb-overlay"></div>
            <div class="guide-card-thumb-badges">
                <span class="badge badge-new" style="border-color: var(--gold); color: var(--gold);">Live</span>
            </div>
          </div>
          <div class="guide-card-body">
            <span class="guide-card-genre">Soulslike · Action RPG</span>
            <h3 class="guide-card-title">Elden Ring</h3>
            <p class="guide-card-desc">The Lands Between await — full guide covering all legacy dungeons, bosses, NPC questlines, and hidden secrets.</p>
            <div class="guide-card-footer">
              <div class="guide-card-meta-list">
                <span class="guide-card-meta-item">🗺 <b>14 Regions</b></span>
                <span class="guide-card-meta-item">⚔️ <b>165 Bosses</b></span>
              </div>
              <span class="guide-card-cta">Read →</span>
            </div>
          </div>
        </a>

        <div class="guide-card guide-card-soon"
             data-genres="rpg openworld"
             aria-hidden="true">
          <div class="guide-card-thumb"
               style="background: linear-gradient(135deg, #0a1408 0%, #142008 100%);">
            <div class="guide-card-thumb-art">BALDUR'S<br>GATE 3</div>
            <div class="guide-card-thumb-overlay"></div>
            <div class="guide-card-thumb-badges">
              <span class="badge" style="color:#6A6A8A;border-color:rgba(106,106,138,0.3)">Soon</span>
            </div>
          </div>
          <div class="guide-card-body">
            <span class="guide-card-genre">RPG · Strategy</span>
            <h3 class="guide-card-title">Baldur's Gate 3</h3>
            <p class="guide-card-desc">Every class, build, quest, and secret for the definitive RPG experience — guide coming soon.</p>
            <div class="guide-card-footer">
              <div class="guide-card-meta-list">
                <span class="guide-card-meta-item">🔒 <b>In Progress</b></span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="coming-soon-section" id="coming-soon">
    <div class="coming-soon-inner">
      <div class="divider"><div class="divider-mark"></div></div>
      <span class="label">On the Roadmap</span>
      <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,3vw,2.5rem);letter-spacing:0.04em;color:var(--text);margin-bottom:0.5rem;line-height:1">
        Guides in Progress
      </h2>
      <p style="color:var(--text-dim);font-size:0.95rem;max-width:500px;font-style:italic;margin-bottom:0">
        These guides are actively being written.
      </p>

      <div class="coming-soon-track">
        <div class="coming-soon-card">
          <div class="coming-soon-icon">🎲</div>
          <div>
            <div class="coming-soon-name">Baldur's Gate 3</div>
            <div class="coming-soon-eta">Q2 2026</div>
          </div>
        </div>
        <div class="coming-soon-card">
          <div class="coming-soon-icon">🌊</div>
          <div>
            <div class="coming-soon-name">Black Myth: Wukong</div>
            <div class="coming-soon-eta">Q3 2026</div>
          </div>
        </div>
        <div class="coming-soon-card">
          <div class="coming-soon-icon">🔮</div>
          <div>
            <div class="coming-soon-name">Avowed</div>
            <div class="coming-soon-eta">Q3 2026</div>
          </div>
        </div>
        <div class="coming-soon-card">
          <div class="coming-soon-icon">🌙</div>
          <div>
            <div class="coming-soon-name">Hollow Knight 2</div>
            <div class="coming-soon-eta">TBA</div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php 
  $fxTheme = 'gold'; 
  include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/theme-fx.php'; 
?>

<?php
include 'footer.php'; 
?>