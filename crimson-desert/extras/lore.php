<?php 
$pageTitle = "Lore Archive & Story Explained | Crimson Desert Guide";
$pageDesc = "Dive deep into the history of Pywel. Understand the factions, the origin of the Abyss, and the complete backstory of Crimson Desert.";

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

<header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(139, 0, 0, 0.2) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(60, 30, 20, 0.8) 0%, transparent 60%), linear-gradient(180deg, #0a0503 0%, #170a05 60%, #0a0503 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Lore Archive</span>
      </nav>
      <h1 class="guide-hero-title">The Lore Archive</h1>
      <p class="guide-hero-subtitle">History, Factions, and the Truth of the Abyss</p>
    </div>
</header>

<div class="guide-layout" style="grid-template-columns: 1fr; max-width: 950px;">
    <main class="guide-content">

      <section class="guide-section reveal">
        <div class="callout red" style="border-left: 4px solid var(--red); background: rgba(140, 45, 45, 0.1);">
          <span class="callout-label" style="color: var(--red); font-weight: bold;">⚠️ SPOILER WARNING</span>
          <p>This archive contains major story revelations. We recommend completing the main campaign before reading the <strong>Secret Documents</strong> section.</p>
        </div>

        <h2 class="guide-section-title" style="margin-top: 4rem;">1. Timeline of Pywel</h2>
        <p>To understand the current war, one must look back at the eras that shaped the continent.</p>

        <div class="timeline">
            <div class="timeline-item">
                <span class="timeline-date">Era of Titans (Ancient Past)</span>
                <p>Before humans, Pywel was ruled by colossal beings. Their remains now form the mountains of Kweiden. It is said they were the first to be consumed by the Abyss.</p>
            </div>
            <div class="timeline-item">
                <span class="timeline-date">Year 0: The First Unification</span>
                <p>The First Unifier discovers the Origin Core. He ends the "War of the Hundred Crowns" and establishes the Demeniss Empire.</p>
            </div>
            <div class="timeline-item">
                <span class="timeline-date">Year 450: The Great Leak</span>
                <p>The Origin Core begins to destabilize. The Royal House keeps it secret while the land starts to rot, leading to the birth of the first Abyss Rifts.</p>
            </div>
            <div class="timeline-item">
                <span class="timeline-date">Current Year: The Mercenary Crisis</span>
                <p>Kliff and the Greymanes are caught in the crossfire of a dying Empire and a rising Abyss.</p>
            </div>
        </div>

        <h2 class="guide-section-title">2. The Factions of Power</h2>
        <div class="guide-accordion open" id="acc-lore-1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-lore-1')">
            <span class="guide-accordion-label">🐺 The Greymanes (Kliff's Band)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Reborn from the ashes of the Hernand Massacre. They represent the only hope for a Pywel free from both Tyranny and the Abyss. <strong>Secret:</strong> Kliff's father was actually the rightful heir to Demeniss before being exiled.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-lore-2">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-lore-2')">
            <span class="guide-accordion-label">👑 The Demeniss Royal House</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Current rulers who have traded their humanity for immortality. The King uses "Blood Axioms" to drain his subjects' life force to feed the Core beneath the capital.</p>
            </div>
          </div>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">3. The Shattered Kingdoms</h2>
        <p class="guide-section-intro">Pywel is divided into three major ecological and political zones, each carrying the scars of the Abyss.</p>

        <div class="region-grid reveal">
            <div class="region-card">
                <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem;">Hernand (The Fertile South)</h4>
                <p style="font-size: 0.9rem; color: var(--text-dim); margin-top: 0.5rem;">
                    Once the breadbasket of the continent. Now, its fields are stained by the "Crimson Mist." It is the ancestral home of the Greymanes and the site where the great betrayal took place.
                </p>
            </div>
            <div class="region-card">
                <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem;">Kweiden (The Frozen North)</h4>
                <p style="font-size: 0.9rem; color: var(--text-dim); margin-top: 0.5rem;">
                    A land of eternal winter where the Abyss has frozen time itself. The northern clans believe the cold is a "seal" placed by the Ancients to prevent the corruption from spreading.
                </p>
            </div>
            <div class="region-card">
                <h4 style="color: var(--gold); font-family: var(--font-display); font-size: 1.3rem;">Demeniss (The Iron Capital)</h4>
                <p style="font-size: 0.9rem; color: var(--text-dim); margin-top: 0.5rem;">
                    Built directly atop the Origin Core. The city is a marvel of Axiom-engineering, but its foundations are rotting. The lower districts are already being reclaimed by the void.
                </p>
            </div>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">4. The Magic: Axioms & Abyss</h2>
        <p>The power used by Kliff and his enemies is divided into two distinct but related forces.</p>
        
        <div class="axiom-grid">
            <div class="axiom-card">
                <h4 style="color: var(--gold); margin-bottom: 0.5rem;">The Axioms</h4>
                <p style="font-size: 0.9rem; color: var(--text-dim);">Pure energy derived from Pywel's natural elements. It requires intense mental discipline. Used for Gravity, Fire, and Wind maneuvers.</p>
            </div>
            <div class="axiom-card" style="border-color: #4b0082;">
                <h4 style="color: #9370db; margin-bottom: 0.5rem;">Abyss Corruption</h4>
                <p style="font-size: 0.9rem; color: var(--text-dim);">A "shortcut" to power. It is highly addictive and physically mutates the user. Myurdin's Black Bears are the primary users of this force.</p>
            </div>
        </div>

        <div class="myth-box reveal">
            <h3 style="color: var(--gold); font-family: var(--font-display); margin-bottom: 1rem;">The Myth of the Four Axioms</h3>
            <p style="font-size: 0.9rem; color: var(--text-dim); line-height: 1.6;">
                Ancient texts speak of four "Primordial Axioms" that existed before the Origin Core: <strong>The Axiom of Weight</strong> (Gravity), <strong>The Axiom of Spark</strong> (Fire), <strong>The Axiom of Flow</strong> (Water/Ice), and <strong>The Axiom of Stillness</strong> (Time). 
                <br><br>
                It is theorized that the final boss is attempting to combine all four into a "God Axiom" to rewrite history and erase the human era entirely.
            </p>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">5. Secret Documents & Transcripts</h2>
        <div class="guide-table-wrap">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Document</th>
                <th>Found In</th>
                <th>The True Meaning</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>The Creator's Diary</strong></td>
                <td>Abyss Core</td>
                <td>Confirms Kliff is a "Resurrected Vessel" created by the Core to reset reality.</td>
              </tr>
              <tr>
                <td><strong>The Blood Treaty</strong></td>
                <td>Hernand Vault</td>
                <td>Proves the King and Myurdin planned the Greymanes' extinction together.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">The Prophecy of the "Grey Mane"</h2>
        <p>In the ruins of the Old World, a prophecy mentions a leader who would appear when the sun turns crimson.</p>
        <ul style="color: var(--text-dim); padding-left: 1.5rem; margin-top: 1.5rem; line-height: 1.8;">
            <li><strong>The Interpretation:</strong> Most believe it refers to Kliff's mercenary group.</li>
            <li><strong>The Twist:</strong> Some hidden scrolls suggest the "Grey Mane" isn't a person, but a <em>celestial event</em>—an eclipse caused by the Abyss.</li>
            <li><strong>Reward:</strong> Completing all Lore Tablets unlocks a secret cosmetic skin for Kliff inspired by the First Unifier.</li>
        </ul>

        <div class="lore-box reveal" style="margin-top: 5rem;">
            <h3 style="color: var(--gold); font-family: var(--font-display); margin-bottom: 1rem;">Unsolved Mystery: The Nameless Wanderer</h3>
            <p style="font-size: 0.95rem; color: var(--text-dim);">
                In the desert regions, players report seeing a figure that looks exactly like Kliff, but wearing ancient Unifier armor. Some theorists suggest the game takes place in a <strong>Time Loop</strong>, and this wanderer is a Kliff from a previous cycle who failed to destroy the Core.
            </p>
        </div>

        <h2 class="guide-section-title" style="margin-top: 5rem;">The Vault's Speculations</h2>
        <p class="guide-section-intro">Based on environmental storytelling and frame-by-frame analysis, here are the most plausible community theories.</p>

        <div class="guide-cards" style="margin-top: 2rem;">
            <div class="guide-card-item" style="border: 1px solid rgba(212, 168, 67, 0.2);">
                <span class="label">Theory #1</span>
                <h3 style="color:var(--gold); font-size: 1.1rem;">The Origin of Kliff's Father</h3>
                <p style="font-size: 0.85rem; color: var(--text-dim);">Many believe Macduff wasn't exiled for treason, but because he refused to use the Core to destroy the Northern Clans. His mercenary life was a cover to protect Kliff.</p>
            </div>
            <div class="guide-card-item" style="border: 1px solid rgba(212, 168, 67, 0.2);">
                <span class="label">Theory #2</span>
                <h3 style="color:var(--gold); font-size: 1.1rem;">The Abyss is Sentient</h3>
                <p style="font-size: 0.85rem; color: var(--text-dim);">The corruption mimics reality. Abyss bosses often take the form of fallen friends from the Prologue to play a psychological war against Kliff.</p>
            </div>
        </div>

        <div style="text-align: center; margin: 5rem 0;">
            <a href="/crimson-desert/index.php" class="btn btn-gold">Back to Main Guide</a>
        </div>

      </section>
    </main>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; ?>