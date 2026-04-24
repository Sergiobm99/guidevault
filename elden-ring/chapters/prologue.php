<?php 
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];
$pageTitle = "Prologue: Chapel of Anticipation | Elden Ring Walkthrough";
$pageDesc = "The true beginning of Elden Ring. How to navigate the Chapel of Anticipation, the Grafted Scion boss fight, and the Cave of Knowledge tutorial.";
$bodyClass = "theme-elden-ring";

// Cargamos el header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
    <header class="guide-hero" style="min-height: 40vh; background: linear-gradient(180deg, rgba(212, 175, 55, 0.15) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1533355088288-693240224422?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.7);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/elden-ring/index.php">Elden Ring</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Prologue</span>
            </nav>

            <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">WALKTHROUGH: PROLOGUE</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 4vw, 4rem); color: var(--gold); line-height: 1.1; text-shadow: 0 4px 20px rgba(0,0,0,0.8); margin-bottom: 1rem;">CHAPEL OF ANTICIPATION</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); max-width: 600px; color: #ddd; font-size: 1.1rem; line-height: 1.6;">
                Awaken, Tarnished. Your journey begins in an isolated chapel. Learn the tragic first lesson of Elden Ring, survive the Cave of Knowledge, and step into the Lands Between.
            </p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Chapter Progress</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#chapel" style="color: var(--text-dim); transition: color 0.2s;">1. Chapel of Anticipation</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#boss-scion" style="color: var(--text-dim); transition: color 0.2s;">2. Boss: Grafted Scion</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#cave" style="color: var(--text-dim); transition: color 0.2s;">3. Cave of Knowledge</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#graveyard" style="color: var(--text-dim); transition: color 0.2s;">4. Stranded Graveyard</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <div class="mobile-toc-container">
                <button class="mobile-toc-btn" id="tocToggle">
                    <span style="font-family: var(--font-display); letter-spacing: 0.15em;">CHAPTER PROGRESS</span>
                    <span class="toc-icon" id="tocIcon">▼</span>
                </button>
               <ul class="mobile-toc-list" id="tocList">
                    <li><a href="#chapel">1. Chapel of Anticipation</a></li>
                    <li><a href="#boss-scion">2. Boss: Grafted Scion</a></li>
                    <li><a href="#cave">3. Cave of Knowledge</a></li>
                    <li><a href="#graveyard">4. Stranded Graveyard</a></li>
                </ul>
            </div>

            <section class="guide-section" id="chapel" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">1. Character Creation & Chapel of Anticipation</h2>
                
                <div class="callout info" style="border-left: 4px solid var(--gold); background: rgba(212, 175, 55, 0.08); margin-bottom: 2rem; padding: 1.5rem;">
                    <span class="callout-label" style="color: var(--gold); font-weight: bold; text-transform: uppercase; letter-spacing: 1px;">💡 Best Starting Keepsake</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">When creating your character, we highly recommend choosing the <strong>Golden Seed</strong> as your Keepsake. This allows you to upgrade your Flask of Crimson Tears (healing potion) immediately once you reach the open world.</p>
                </div>

                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    After the opening cinematic, you awaken inside the Chapel of Anticipation. There are no enemies here yet. Take a moment to familiarize yourself with the camera and basic movement.
                </p>
                <ul class="guide-checklist" style="margin-top: 1.5rem;">
                    <li>
                        <label><input type="checkbox"> <span style="font-size: 1.05rem;">Pick up the <strong>Tarnished's Wizened Finger</strong> from the corpse near the wall. This item is used for leaving messages for other players.</span></label>
                    </li>
                    <li>
                        <label><input type="checkbox"> <span style="font-size: 1.05rem;">Open the heavy wooden doors and step outside. Follow the linear path forward across the rope bridge.</span></label>
                    </li>
                </ul>
            </section>

            <section class="guide-section" id="boss-scion" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">2. Boss: Grafted Scion</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    As you enter the courtyard, a grotesque multi-armed creature drops from the sky. This is a scripted encounter designed to kill you. You do not have any healing flasks yet, making this fight incredibly difficult.
                </p>
                
                <div class="callout" style="background: rgba(231, 76, 60, 0.1); border-left: 4px solid #e74c3c; padding: 1.5rem; border-radius: 4px; margin-bottom: 2rem;">
                    <strong style="color: #e74c3c; font-size: 1.2rem; display: block; margin-bottom: 0.5rem;">💀 Expected Outcome: Death</strong>
                    <p style="color: #ccc; margin: 0;">Don't worry if you die in two hits. Dying here triggers a cutscene that advances the game. It is the intended path for 99% of players.</p>
                </div>

                <div style="background: rgba(255,255,255,0.03); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--gold);">
                    <h4 style="color: var(--gold); font-size: 1.2rem; margin-bottom: 0.5rem; margin-top:0;">🏆 What if you defeat him?</h4>
                    <p style="color: #ccc; margin-bottom: 1rem;">If you are an experienced player and manage to kill the Grafted Scion, you will receive the <strong>Ornamental Straight Sword</strong> and the <strong>Golden Beast Crest Shield</strong>. Even if you win, the ground will collapse immediately after, leading to the same cutscene as if you had died.</p>
                </div>
            </section>

            <section class="guide-section" id="cave" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">3. The Cave of Knowledge (Tutorial)</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    You awaken in a dark cave. Near the edge of a cliff, you will see a ghost sitting in a chair. 
                </p>
                
                <div class="guide-card-item" style="background: var(--dark-2); padding: 1.5rem; border-left: 4px solid var(--gold); margin-bottom: 1.5rem;">
                    <h4 style="color: var(--gold); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top:0;">⬇️ Take the Plunge</h4>
                    <p style="color: #ccc; margin: 0;">The ghost tells you to "take the plunge". <strong>Drop down into the pit below him.</strong> This leads to the Cave of Knowledge, the actual tutorial area of Elden Ring. Do not skip this if it is your first time playing.</p>
                </div>

                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    Progress through the cave, reading the prompt messages on the ground. You will learn vital mechanics:
                </p>
                <ul style="list-style-type: square; padding-left: 1.5rem; color: #ccc; line-height: 1.7; margin-bottom: 2rem;">
                    <li>How to lock on to enemies (R3).</li>
                    <li>How to use Stealth in tall grass.</li>
                    <li>How to perform <strong>Guard Counters</strong> (Heavy attack immediately after blocking).</li>
                    <li>How to break enemy stance using Heavy/Jumping attacks.</li>
                </ul>

                <h4 style="color: #fff; font-family: var(--font-display); font-size: 1.5rem;">Mini-Boss: Soldier of Godrick</h4>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7;">At the end of the tutorial path, you will face the Soldier of Godrick. Use the Guard Counter mechanic you just learned to dispatch him easily.</p>
                
                <div style="background: rgba(255,255,255,0.03); padding: 1.5rem; border-radius: 4px; border-left: 4px solid #3498db; margin-top: 1.5rem;">
                    <h4 style="color: #3498db; font-size: 1.2rem; margin-bottom: 0.5rem; margin-top:0;">🎭 Secret Emote: "Strength!"</h4>
                    <p style="color: #ccc; margin: 0;">Before leaving the cave area entirely, progress up the ledge past the boss room. You will find a corpse hanging over the edge. Loot it to receive the <strong>"Strength!" Gesture</strong>. Now you can drop down safely to the start.</p>
                </div>
            </section>

            <section class="guide-section" id="graveyard" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--text); font-size: 2.2rem; margin-bottom: 1rem;">4. Stranded Graveyard</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    Whether you dropped into the tutorial cave or skipped it, you will end up at the heavy doors leading to the Stranded Graveyard.
                </p>
                
                <ul class="guide-checklist" style="margin-top: 1.5rem;">
                    <li>
                        <label><input type="checkbox"> <span style="font-size: 1.05rem;">Touch your very first <strong>Site of Grace</strong> (Stranded Graveyard).</span></label>
                    </li>
                    <li>
                        <label><input type="checkbox"> <span style="font-size: 1.05rem;">Loot the corpse resting against the wall next to the Grace to receive the <strong>Finger Severer</strong> and the <strong>Tarnished's Furled Finger</strong> (essential items for Co-op multiplayer).</span></label>
                    </li>
                    <li>
                        <label><input type="checkbox"> <span style="font-size: 1.05rem;">Ignore the Imp Statue seal on the right for now. It requires two Stonesword Keys and leads to the Fringefolk Hero's Grave, a high-level dungeon featuring a giant mechanical chariot that will instantly kill you at this stage. Mark it on your map to return later!</span></label>
                    </li>
                    <li>
                        <label><input type="checkbox"> <span style="font-size: 1.05rem;">Step onto the circular wooden elevator platform to ascend to the surface. Open the large doors to finally step out into Limgrave.</span></label>
                    </li>
                </ul>
            </section>

            <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 3rem; border-top: 1px solid rgba(255,255,255,0.05); margin-top: 4rem;">
                <div></div> 
                <a href="/elden-ring/chapters/chapter-1.php" class="btn btn-gold" style="font-size: 1rem; padding: 0.8rem 1.5rem;">Next: Chapter 1 (Limgrave) →</a>
            </div>

        </main>
    </div>
</div>

<script>
// Script para el menú desplegable en móvil
document.addEventListener('DOMContentLoaded', () => {
    const tocToggle = document.getElementById('tocToggle');
    const tocList = document.getElementById('tocList');
    const tocIcon = document.getElementById('tocIcon');

    if (tocToggle && tocList) {
        tocToggle.addEventListener('click', () => {
            tocList.classList.toggle('show');
            tocIcon.textContent = tocList.classList.contains('show') ? '▲' : '▼';
        });

        tocList.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                tocList.classList.remove('show');
                tocIcon.textContent = '▼';
            });
        });
    }
});
</script>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>