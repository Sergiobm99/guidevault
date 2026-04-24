<?php 
// 1. We identify the parent game for the "Smart Button" in the header
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];

// 2. SEO data for this page
$pageTitle = "FAQ and Frequently Asked Questions — Elden Ring | GuideVault";
$pageDesc = "20 answers to the most common Elden Ring questions: starting classes, combat, multiplayer, builds, and how to access the Shadow of the Erdtree DLC.";

// 3. Load the centralized global header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
  
  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(212, 175, 55, 0.15) 0%, transparent 65%), linear-gradient(180deg, #0a0a0c 0%, #111115 60%, #0a0a0c 100%);"></div>
    <div class="guide-hero-inner">
      
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/elden-ring/index.php" style="color: rgba(255,255,255,0.7); transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Elden Ring</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span style="color: var(--gold);">FAQ</span>
      </nav>

      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Frequently Asked Questions</h1>
      <p class="guide-hero-subtitle">20 essential solutions to survive in the Lands Between</p>
    </div>
  </header>

  <div class="guide-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">FAQ Categories</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#basics" style="color: var(--text-dim); transition: color 0.2s;">1. Basics & Progression</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#combat" style="color: var(--text-dim); transition: color 0.2s;">2. Combat & Survival</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#weapons" style="color: var(--text-dim); transition: color 0.2s;">3. Weapons, Magic & Builds</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#world" style="color: var(--text-dim); transition: color 0.2s;">4. World & Exploration</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#multiplayer" style="color: var(--text-dim); transition: color 0.2s;">5. Multiplayer & Technical</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="basics" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title">1. Basics & Progression</h2>

        <div class="guide-accordion open reveal" id="faq-1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-1')">
            <span class="guide-accordion-label">What is the best starting class?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>If you are new to the game, the <strong>Vagabond</strong> (high vigor and heavy armor) or the <strong>Samurai</strong> (excellent starting katana and bow) are the best options for melee builds. If you prefer to fight from afar, the <strong>Astrologer</strong> is the premier magic class.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-2">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-2')">
            <span class="guide-accordion-label">Which starting Keepsake should I choose?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>The most recommended option is the <strong>Golden Seed</strong>, as it gives you an extra healing flask right from the start. Another good choice is the Crimson Amber Medallion for a slight boost to your maximum health.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-3">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-3')">
            <span class="guide-accordion-label">How do I level up?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>You cannot level up immediately. You must explore until you find and rest at your third <strong>Site of Grace</strong> (usually the one at "Gatefront Ruins"). Melina will appear there and offer you an accord that unlocks leveling up.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-4">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-4')">
            <span class="guide-accordion-label">How do I get the horse (Torrent)?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Melina will give you the <strong>Spectral Steed Whistle</strong> during the same conversation where you unlock leveling up. Equip it to your quick item slots to summon Torrent anytime in the open world.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="combat" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title">2. Combat & Survival</h2>

        <div class="guide-accordion reveal" id="faq-5">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-5')">
            <span class="guide-accordion-label">What exactly do I lose when I die?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>You drop all the <strong>Runes</strong> you are carrying (runes serve as both experience points and currency). However, you leave a bloodstain on the ground where you fell. If you manage to return to the location and touch it, you will recover them. If you die again before retrieving them, they are lost forever.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-6">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-6')">
            <span class="guide-accordion-label">How do Guard Counters work?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>It's a new mechanic: hold the block button with your shield or weapon. Right after an enemy's attack hits your shield, press the <strong>Heavy Attack button (R2/RT)</strong>. You will hear a metallic sound and deal significant posture damage.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-7">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-7')">
            <span class="guide-accordion-label">What does "Poise" mean?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Poise is your resistance to being staggered. If you have low poise, any enemy attack will interrupt your own attack animation. If you wear heavy armor (high poise), you can take hits and complete your attack without flinching.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-8">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-8')">
            <span class="guide-accordion-label">How do I summon Spirit Ashes (the wolves)?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>First, you need the <strong>Spirit Calling Bell</strong> (given to you by Renna at night at the Church of Elleh). You can only summon them if you see a glowing white tombstone icon on the left side of your screen (usually appears in boss areas and camps).</p>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="weapons" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title">3. Weapons, Magic & Builds</h2>

        <div class="guide-accordion reveal" id="faq-9">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-9')">
            <span class="guide-accordion-label">How do I upgrade my weapons?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>At the beginning, you can upgrade them up to +3 at the anvil in the Church of Elleh using Smithing Stones. To upgrade them past that level, you need to reach the <strong>Roundtable Hold</strong> and speak with Smithing Master Hewg.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-10">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-10')">
            <span class="guide-accordion-label">Can I respec my character's stats?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Yes, but not at the very beginning. You will need to progress to Liurnia, defeat the boss <strong>Rennala, Queen of the Full Moon</strong>, and hand her a rare item called a Larval Tear every time you wish to reallocate your points.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-11">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-11')">
            <span class="guide-accordion-label">What is the difference between Sorceries and Incantations?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p><strong>Sorceries</strong> (blue magic/glintstone) scale with Intelligence and are cast using Staffs. <strong>Incantations</strong> (fire, lightning, healing, dragon magic) scale with Faith or Arcane and are cast using Sacred Seals.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-12">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-12')">
            <span class="guide-accordion-label">How does weapon scaling (the letters) work?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>The letters (S, A, B, C, D, E) indicate how much bonus damage the weapon gains based on your character's stats. "S" is the strongest scaling, and "E" is the weakest. A weapon with an "A" scaling in Strength will give you a massive damage boost if you have high Strength.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="world" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title">4. World & Exploration</h2>

        <div class="guide-accordion reveal" id="faq-13">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-13')">
            <span class="guide-accordion-label">Where should I go first? The Castle is too hard!</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Don't head straight for Margit. Thoroughly explore western and eastern Limgrave, and most importantly, head south toward the <strong>Weeping Peninsula</strong>. It's an area specifically designed for you to level up and acquire vital early-game items.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-14">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-14')">
            <span class="guide-accordion-label">What are Great Runes and how do I activate them?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>They are legendary items dropped by Demigods (main bosses). To use them: 1) Restore the rune at the top of its corresponding Divine Tower. 2) Equip it at a Site of Grace. 3) Consume a <strong>Rune Arc</strong> to activate its power until you die.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-15">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-15')">
            <span class="guide-accordion-label">Does the day/night cycle affect gameplay?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Absolutely. Some extremely powerful open-world bosses (such as the Night's Cavalry or the Deathbirds) <strong>only spawn at night</strong>. Furthermore, enemy visibility is reduced in the dark, making stealth easier.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-16">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-16')">
            <span class="guide-accordion-label">How do I access the DLC (Shadow of the Erdtree)?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>You cannot access it from the main menu. In-game, you must defeat two specific bosses: Starscourge Radahn and Mohg, Lord of Blood. After defeating Mohg, interact with Miquella's withered arm at the back of his arena.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="multiplayer" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title">5. Multiplayer & Technical</h2>

        <div class="guide-accordion reveal" id="faq-17">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-17')">
            <span class="guide-accordion-label">How do I play co-op with my friends?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Both of you must set the same "Multiplayer Password" in the menu. The guest uses the <strong>Tarnished's Furled Finger</strong> to place a golden summon sign on the ground. The host uses a <strong>Furlcalling Finger Remedy</strong> to reveal the sign and summon them.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-18">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-18')">
            <span class="guide-accordion-label">Can other players invade me if I'm playing solo?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p><strong>No.</strong> In Elden Ring, human player invasions are only enabled if you are currently playing co-op with a friend, or if you explicitly use the "Taunter's Tongue" item to lure in invaders.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-19">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-19')">
            <span class="guide-accordion-label">Is there a way to pause the game?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Like all FromSoftware games, there is no official pause button. However, there is a <strong>hidden trick</strong>: open your inventory, select the "Help" menu, and choose "Menu Explanation." This will completely pause the game in the background.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-20">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-20')">
            <span class="guide-accordion-label">Does the game support Crossplay?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Elden Ring supports Cross-gen play (PS4 players can play with PS5, and Xbox One with Series X/S). However, <strong>it does not support full Crossplay</strong>, meaning PC players cannot play with PlayStation or Xbox players.</p>
            </div>
          </div>
        </div>
      </section>

    </main>
  </div>
</div>

<script>
// Logic to make accordions work independently
function toggleAcc(id) {
    const acc = document.getElementById(id);
    if (acc) {
        // Toggle the 'open' class on the main container
        acc.classList.toggle('open');
    }
}
</script>

<?php 
// 4. Load the footer
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>