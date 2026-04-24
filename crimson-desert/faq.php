<?php 
$parentGuide = [
    'name' => 'Crimson Desert',
    'url'  => '/crimson-desert/index.php'
];
$pageTitle = "The Grand FAQ of Pywel | Crimson Desert Complete Guide";
$pageDesc = "The most comprehensive FAQ for Crimson Desert. 25+ answers covering combat, deep exploration mechanics, hidden secrets, and technical support.";

include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(50, 50, 60, 0.4) 0%, transparent 65%), linear-gradient(180deg, #0a0a0c 0%, #111115 60%, #0a0a0c 100%);"></div>
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="index.php">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>FAQ</span>
      </nav>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem);">Frequently Asked Questions</h1>
      <p class="guide-hero-subtitle">25+ Solutions to the Mysteries of Crimson Desert</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout" style="max-width: 1200px; margin: 0 auto;">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">FAQ Categories</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#general" style="color: var(--text-dim); transition: color 0.2s;">1. General & Technical</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#exploration" style="color: var(--text-dim); transition: color 0.2s;">2. Exploration & World</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#combat" style="color: var(--text-dim); transition: color 0.2s;">3. Combat & Survival</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#economy" style="color: var(--text-dim); transition: color 0.2s;">4. Economy & Crafting</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#chapters" style="color: var(--text-dim); transition: color 0.2s;">5. Story Progression</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#endgame" style="color: var(--text-dim); transition: color 0.2s;">6. Secrets & Endgame</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="general" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title">1. General & Technical</h2>

        <div class="guide-accordion open reveal" id="faq-g1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-g1')">
            <span class="guide-accordion-label">Is Crimson Desert an MMO or Single Player?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body" style="max-height:600px">
            <div class="guide-accordion-inner">
              <p>Crimson Desert is primarily a <strong>Single Player Action RPG</strong>. It features a deep narrative campaign. Multiplayer elements are limited to specific Arena modes and Co-op World Boss raids.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-g2" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-g2')">
            <span class="guide-accordion-label">Does it support Cross-Play/Cross-Save?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Yes. By using a Pearl Abyss account, your progress is shared across PC, PS5, and Xbox Series X|S.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-g3" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-g3')">
            <span class="guide-accordion-label">What are the PC system requirements?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Minimum: RTX 2060 / 16GB RAM. Recommended: RTX 4070 / 32GB RAM for 4K/60fps with DLSS 3.5 / FSR 3 enabled.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-g4" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-g4')">
            <span class="guide-accordion-label">Can I skip cutscenes?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>You can skip secondary dialogues, but major story cinematics can only be skipped in <strong>New Game+</strong>.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-g5" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-g5')">
            <span class="guide-accordion-label">How much disk space does it require?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>The game requires approximately 140 GB of SSD space. An SSD is mandatory for seamless world loading.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="exploration" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title">2. Exploration & World</h2>

        <div class="guide-accordion reveal" id="faq-e1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-e1')">
            <span class="guide-accordion-label">How do I tame a wild horse?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Sneak behind it, use a Sugar Cube, mount it, and win the balance mini-game. You must then register it at a stable to keep it permanently.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-e2" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-e2')">
            <span class="guide-accordion-label">Can I breed horses?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Yes. Stables in Pailune offer breeding services. Combining two Tier 3 horses has a chance to produce a Tier 4 horse with unique Abyss traits.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-e3" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-e3')">
            <span class="guide-accordion-label">How do I open Safes?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Force them open with heavy blunt weapons (Hammer/Axe) or find the combination key hidden in the environment using <em>Abyss Vision</em>.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-e4" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-e4')">
            <span class="guide-accordion-label">What is the "Thieves' Cant" and how do I learn it?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>It's a secret language. You learn it by completing the <em>"Mercenary's Honor"</em> side-quest in the Slums. It unlocks secret shops and dialogue options.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-e5" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-e5')">
            <span class="guide-accordion-label">Can I fast travel between any points?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>No. Fast travel is only possible between <strong>Abyss Watchtowers</strong> you have successfully cleansed of corruption.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="combat" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title">3. Combat & Survival</h2>

        <div class="guide-accordion reveal" id="faq-c1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-c1')">
            <span class="guide-accordion-label">How does the "Karma" system affect me?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Negative karma (stealing/killing NPCs) makes town guards hostile and increases vendor prices by up to 50%.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-c2" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-c2')">
            <span class="guide-accordion-label">Can I dual wield any weapon?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>You can dual wield shortswords and daggers after unlocking the <em>"Twin Fangs"</em> skill in the combat tree.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-c3" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-c3')">
            <span class="guide-accordion-label">How do I stop Freezing in Kweiden?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Equip Fur-lined armor, eat <em>Spicy Pepper Soup</em>, or stay near campfires. Standing in deep water while freezing will kill you in seconds.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-c4" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-c4')">
            <span class="guide-accordion-label">What is the "Dismemberment" mechanic?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Heavy bladed weapons can cut off limbs of larger monsters (like Ogres), disabling their specific attacks (e.g., cutting a leg to stop a stomp).</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-c5" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-c5')">
            <span class="guide-accordion-label">How do I recharge Axiom Force?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Axiom Force recharges by performing <strong>Perfect Parries</strong> or by consuming <em>Abyss Essence</em> found in Rift zones.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="economy" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title">4. Economy & Crafting</h2>

        <div class="guide-accordion reveal" id="faq-cr1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-cr1')">
            <span class="guide-accordion-label">What is the fastest way to earn Gold?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Hunting <strong>Elite Wanted Bandits</strong> from the Pailune bounty board is the most consistent gold source early on.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-cr2" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-cr2')">
            <span class="guide-accordion-label">How do I increase my inventory weight?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Buy larger <strong>Saddlebags</strong> for your mount or equip belts with the <em>"Mule's Strength"</em> enchantment.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-cr3" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-cr3')">
            <span class="guide-accordion-label">Where do I find Legendary Crafting Recipes?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Legendary recipes are rewards for clearing <strong>Master-Tier Abyss Rifts</strong> or as rare drops from "Ascended" world bosses.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-cr4" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-cr4')">
            <span class="guide-accordion-label">Can I repair my own weapons?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Yes, but you need a <strong>Portable Anvil</strong> and <em>Iron Scraps</em>. It's cheaper but less effective than a professional Blacksmith.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-cr5" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-cr5')">
            <span class="guide-accordion-label">What is "Void Infusion"?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>It's an endgame mechanic that allows you to add Abyss elemental damage to non-mythic weapons using <em>Void Crystals</em>.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="chapters" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #e74c3c;">5. Chapters & Story Progression</h2>

        <div class="guide-accordion reveal" id="faq-ch1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-ch1')">
            <span class="guide-accordion-label" style="color: #e74c3c;">How many chapters are in Crimson Desert?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>The main storyline is divided into <strong>8 Major Chapters</strong>, plus a Prologue (The Night of the Crimson Sand) and an Epilogue depending on your ending. A standard playthrough focusing only on the chapters takes about 35-40 hours.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-ch2" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-ch2')">
            <span class="guide-accordion-label">Are there points of no return?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Yes. The most critical point of no return occurs at the end of <strong>Chapter 6</strong> (before initiating the siege on the Capital). The game will warn you. Ensure you have completed all companion loyalty quests before this point, or they will automatically fail.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-ch3" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-ch3')">
            <span class="guide-accordion-label">Can I free-roam after completing the final chapter?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Yes. After the credits roll following Chapter 8, you will be placed back into the world in a "Post-Game" state. You can finish exploring regions, clear remaining Evergaols, and access the Shifting Labyrinth. However, you cannot alter the story choices you made.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="guide-section reveal" id="endgame" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #3498db;">6. Secrets & Endgame</h2>

        <div class="guide-accordion reveal" id="faq-s1">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-s1')">
            <span class="guide-accordion-label">How do I unlock New Game+?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Defeat the final boss in Chapter 9. You will be prompted to save your "Clear Data" and can start NG+ from the main menu.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-s2" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-s2')">
            <span class="guide-accordion-label">Are there hidden romances?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>There are no romance scenes, but high rapport with companions unlocks unique <strong>Dual-Team finishers</strong> and gifts.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-s3" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-s3')">
            <span class="guide-accordion-label">Who is the "Secret Merchant of the Abyss"?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>He spawns randomly in the desert at midnight. He sells the <em>"Cloak of Invisibility"</em> for 50,000 Gold.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-s4" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-s4')">
            <span class="guide-accordion-label" style="color: #3498db;">How do I get the "True Ending"?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>Collect all 4 <strong>Civilization Relics</strong>, save Yann in Chapter 6, and choose the <em>"Destroy the Core"</em> option at the end.</p>
            </div>
          </div>
        </div>

        <div class="guide-accordion reveal" id="faq-s5" style="margin-top: 1rem;">
          <button class="guide-accordion-trigger" onclick="toggleAcc('faq-s5')">
            <span class="guide-accordion-label">What is the "Shifting Labyrinth"?</span>
            <span class="guide-accordion-icon">▾</span>
          </button>
          <div class="guide-accordion-body">
            <div class="guide-accordion-inner">
              <p>An endless, procedurally generated dungeon unlocked after the credits. It's the ultimate place to farm max-level gear.</p>
            </div>
          </div>
        </div>
      </section>

    </main>
  </div>

<script>
// Lógica para que funcionen los acordeones de la FAQ
function toggleAcc(id) {
    const acc = document.getElementById(id);
    if (acc) {
        acc.classList.toggle('open');
    }
}

// Animación de entrada Reveal
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
});
</script>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>