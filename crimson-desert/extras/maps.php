<?php 
$parentGuide = [
    'name' => 'Crimson Desert',
    'url'  => '/crimson-desert/index.php'
];
$pageTitle = "Regional Maps & Farming Routes | Crimson Desert Guide";
$pageDesc = "Detailed exploration guide for Pywel. Find every watchtower, chest location, and the best routes to farm Gold and XP.";

include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(210, 180, 140, 0.15) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(50, 40, 30, 0.8) 0%, transparent 60%), linear-gradient(180deg, #0a0805 0%, #1a1510 60%, #0a0805 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Maps & Farming</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Maps & Farming</h1>
      <p class="guide-hero-subtitle">World Navigation and Resource Optimization</p>
    </div>
  </header>

  <div class="guide-layout" style="grid-template-columns: 1fr; max-width: 950px;">
    <main class="guide-content">
<div style="text-align: center; margin: 2rem 0;">
        <a href="interactive-map.php" style="display: inline-flex; align-items: center; gap: 0.5rem; background: #D4AF37; color: #000; padding: 1rem 2.5rem; border-radius: 8px; font-weight: bold; text-decoration: none; font-size: 1.2rem; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4); transition: transform 0.2s, box-shadow 0.2s;" 
           onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(212, 175, 55, 0.6)';" 
           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(212, 175, 55, 0.4)';">
          <span style="font-size: 1.5rem;">🧭</span> Launch Interactive Map
        </a>
      </div>
      <section class="guide-section">
        <div class="callout info">
          <span class="callout-label">Explorer's Tip: Watchtowers</span>
          <p>Each region has a <strong>Watchtower</strong> (signaled by a beacon of light). Synchronizing at the top doesn't just reveal the map; it also acts as a Fast Travel point and reveals all nearby <em>Side Quest</em> icons.</p>
        </div>

        <h2 class="guide-section-title" style="margin-top: 3rem;">1. Regional Overview</h2>
        <p>Pywel is divided into five massive biomes, each with its own level requirements and unique resources.</p>

        <div class="guide-table-wrap">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Region</th>
                <th>Level Rec.</th>
                <th>Key Features</th>
                <th>Rare Material</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Hernand (Plains)</strong></td>
                <td>1 - 15</td>
                <td>Capital City, Greymane Camp.</td>
                <td>Wild Herbs, Iron</td>
              </tr>
              <tr>
                <td><strong>Kweiden (Ice)</strong></td>
                <td>15 - 30</td>
                <td>Frozen Peaks, Ice Caves.</td>
                <td>Dragon Scales</td>
              </tr>
              <tr>
                <td><strong>Akapen (Desert)</strong></td>
                <td>30 - 45</td>
                <td>Sunken Temple, Oasis.</td>
                <td>Ancient Coins</td>
              </tr>
              <tr>
                <td><strong>Delesyia (Coast)</strong></td>
                <td>45 - 55</td>
                <td>Mechanical Ruins, Docks.</td>
                <td>Liquid Mercury</td>
              </tr>
              <tr>
                <td><strong>Harsand (Volcano)</strong></td>
                <td>55+</td>
                <td>Fire Outpost, Core.</td>
                <td>Obsidian Shards</td>
              </tr>
            </tbody>
          </table>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title">2. Optimal Farming Routes</h2>
        <p>Use these routes to maximize your gains per hour. Make sure to consume a "Stamina Stew" before starting for maximum efficiency.</p>

        <div class="guide-accordion open" id="acc-map-1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-map-1')">
            <span class="guide-accordion-label">💰 Route: The Hernand Gold Rush (Early Game)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:800px">
            <div class="guide-accordion-inner">
              <p>Best for players under Level 20 looking to buy their first high-tier armor.</p>
              <ul>
                <li><strong>Start:</strong> South Hernand Bridge.</li>
                <li><strong>Path:</strong> Follow the riverbank heading West. Look for the "Golden Crabs" that spawn during sunset. Each drop a shell worth 150 Gold.</li>
                <li><strong>Profit:</strong> Approx. 3,000 Gold per 10-minute run.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="guide-accordion" id="acc-map-2">
          <button class="guide-accordion-trigger" onclick="toggleAcc('acc-map-2')">
            <span class="guide-accordion-label">⭐ Route: The Akapen XP Grind (Mid Game)</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Fastest way to reach Level 50 before the final chapters.</p>
              <ul>
                <li><strong>Start:</strong> Sunken Temple Entrance.</li>
                <li><strong>Path:</strong> Don't enter the temple. Instead, circle the outer ruins defeating the "Desert Phantoms". They spawn in groups of 5 and yield 2x XP compared to standard bandits.</li>
                <li><strong>Profit:</strong> 1 Full Level every 15-20 minutes.</li>
              </ul>
            </div>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 3rem 0;">

        <h2 class="guide-section-title">3. Hidden Map Locations</h2>
        
        <div class="guide-cards">
          <div class="guide-card-item">
            <span class="guide-card-icon">🏗️</span>
            <h3>Merchant Hideouts</h3>
            <p>Look for smoke rising in the Akapen Desert at night. Secret wandering merchants spawn there selling Mythic upgrade materials you can't find elsewhere.</p>
          </div>
          <div class="guide-card-item">
            <span class="guide-card-icon">⛩️</span>
            <h3>Meditation Shrines</h3>
            <p>There are 5 hidden shrines in Pywel. Sitting at one for 60 seconds grants a permanent +5 Stamina boost. Check the highest peaks of Kweiden for the first one.</p>
          </div>
          <div class="guide-card-item">
            <span class="guide-card-icon">📦</span>
            <h3>Abyssal Master Chests</h3>
            <p>Only visible if your Abyss Energy bar is full. These chests contain the "Master Keys" needed for the endgame boss gauntlets.</p>
          </div>
        </div>

      </section>
<div style="text-align: center; margin-top: 4rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.05);">
        <h3 style="color: #D4AF37; margin-bottom: 1rem;">Want to see exact locations?</h3>
        <a href="interactive-map.php" style="display: inline-block; padding: 0.8rem 2rem; border: 2px solid #D4AF37; color: #D4AF37; text-decoration: none; border-radius: 8px; font-weight: bold; transition: 0.3s;"
           onmouseover="this.style.background='#D4AF37'; this.style.color='#000';"
           onmouseout="this.style.background='transparent'; this.style.color='#D4AF37';">
          Go to Interactive Map →
        </a>
      </div>
    </main>
  </div>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>