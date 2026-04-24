<?php
$parentGuide = [
    'name' => 'Crimson Desert',
    'url'  => '/crimson-desert/index.php'
];
$pageTitle = "Chapter 1: The First Encounter | Crimson Desert Guide";
$pageDesc = "Intrigue, Factions, and the Royal Palace step-by-step walkthrough.";
$bodyClass = "theme-crimson-desert"; 

include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg"></div>
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="../../">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="../">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Chapter 1</span>
      </nav>
      <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: PART 1</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem;">Chapter 1: The First Encounter</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); color: #ddd; font-size: 1.1rem;">Hernand City & The First Rift</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Chapter Progress</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#trials" style="color: var(--text-dim); transition: color 0.2s;">1. Trials of Kindness</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#abyss-rift" style="color: var(--text-dim); transition: color 0.2s;">2. First Abyss Rift</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#aftermath" style="color: var(--text-dim); transition: color 0.2s;">3. Aftermath & Upgrades</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#completion" style="color: var(--text-dim); transition: color 0.2s;">4. Chapter Completion</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section" id="trials" style="margin-bottom: 4rem;">
        <div class="callout info" style="margin-bottom: 3rem;">
          <span class="callout-label" style="color: var(--gold);">Chapter Overview</span>
          <p style="color: #ccc; margin-top: 0.5rem;"><strong>Recommended Level:</strong> None (Focus on gear upgrades)<br><strong>Key Unlocks:</strong> Axiom Force (Tier 1), Hernand Blacksmith, Mercenary Board, Fast Travel.<br><strong>Missables:</strong> The "Rusty Greymane Dagger" hidden in the sewers.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. The Trials of Kindness</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">Your first major goal in Hernand is to build reputation so the local guard lets you into the upper district. Do not attack random NPCs here.</p>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="color: var(--gold); margin-top: 0;">The Tavern Brawl</h4>
              <p style="color: #ccc;">Enter the Rusty Boar Tavern. Choose the dialogue option: <strong>[Step In]</strong>. Rely on parries; do not draw your weapon.</p>
            </div>
          </li>
          <li class="step">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="color: var(--gold); margin-top: 0;">Hidden Item: The Merchant's Ledger</h4>
              <p style="color: #ccc;">Find a <em>Stolen Ledger</em> near the fireplace. Return this to the merchant outside for a <strong>Standard Inventory Expansion Tool</strong>.</p>
            </div>
          </li>
          <li class="step">
            <div class="step-num">3</div>
            <div class="step-content">
              <h4 style="color: var(--gold); margin-top: 0;">The Sewers & The Rat King</h4>
              <p style="color: #ccc;">Fight the <strong>Sewer Rat King</strong>. Search the bones to find the <strong>Rusty Greymane Dagger</strong>.</p>
            </div>
          </li>
          <li class="step">
            <div class="step-num">4</div>
            <div class="step-content">
              <h4 style="color: var(--gold); margin-top: 0;">Unlock the Mercenary Board</h4>
              <p style="color: #ccc;">Speak to Captain Aris to unlock the <strong>Mercenary Board</strong>.</p>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section" id="abyss-rift" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">2. Exploring the First Abyss Rift</h2>
        
        <ul class="step-list" style="margin-top:2rem;">
          <li class="step">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="color: var(--gold); margin-top: 0;">The Moving Platforms</h4>
              <p style="color: #ccc;">Jump across the floating debris. Look down and left on the third platform for a hidden <strong>Abyss Core</strong>.</p>
            </div>
          </li>
          <li class="step">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="color: var(--gold); margin-top: 0;">Puzzle: The Polar Opposites</h4>
              <p style="color: #ccc;">Rotate the Red Node twice clockwise, and the Blue Node once counter-clockwise to open the boss door.</p>
            </div>
          </li>
          <li class="step">
            <div class="step-num">3</div>
            <div class="step-content">
              <h4 style="color: var(--gold); margin-top: 0;">Boss Fight: The Abyss Warden</h4>
              <p style="color: #ccc;">Use your Axiom Force to grapple his shield and rip it away during Phase 3.</p>
            </div>
          </li>
          <li class="step">
            <div class="step-num">4</div>
            <div class="step-content">
              <h4 style="color: var(--gold); margin-top: 0;">Claiming the Artifact</h4>
              <p style="color: #ccc;">Defeating the Warden grants you the <strong>Hernand Abyss Fragment</strong>.</p>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section" id="aftermath" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">3. The Aftermath & Upgrades</h2>

        <ul class="step-list" style="margin-top:2rem;">
          <li class="step">
            <div class="step-num">1</div>
            <div class="step-content">
              <h4 style="color: var(--gold); margin-top: 0;">Meet Master Blacksmith Varr</h4>
              <p style="color: #ccc;">Return to the market square. Speak to him to unlock Weapon Upgrades.</p>
            </div>
          </li>
          <li class="step">
            <div class="step-num">2</div>
            <div class="step-content">
              <h4 style="color: var(--gold); margin-top: 0;">Upgrade your Sword</h4>
              <p style="color: #ccc;">Upgrade Kliff's starting sword to +1 before progressing to Chapter 2.</p>
            </div>
          </li>
        </ul>
      </section>

      <section class="guide-section" id="completion" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">4. Chapter 1 Completion</h2>
        
        <h3 style="font-family: var(--font-display); font-size: 1.8rem; color: var(--gold); margin-top: 3rem; margin-bottom: 1rem;">✅ Before Leaving Hernand...</h3>
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; padding: 1.5rem; margin-bottom: 3rem;">
            <ul class="guide-checklist">
                <li><label><input type="checkbox"><span style="color: #ccc;"><strong>Weapon Upgraded:</strong> Did you upgrade your sword to +1?</span></label></li>
                <li><label><input type="checkbox"><span style="color: #ccc;"><strong>Lore Item:</strong> Do you have the <em>Rusty Greymane Dagger</em>?</span></label></li>
                <li><label><input type="checkbox"><span style="color: #ccc;"><strong>Inventory:</strong> Did you return the ledger for the Bag Expansion?</span></label></li>
            </ul>
        </div>
        
        <div class="chapter-nav">
            <a href="/crimson-desert/chapters/prologue.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Prologue</a>
            <a href="/crimson-desert/chapters/chapter-2.php" class="btn btn-gold">Next: Chapter 2 →</a>
        </div>
      </section>

    </main>
  </div>

<?php
$fxTheme = 'sand'; include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/theme-fx.php';
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>