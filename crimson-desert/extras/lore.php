<?php 
$pageTitle = "Lore Archive & Story Explained | Crimson Desert Guide";
$pageDesc = "Dive deep into the history of Pywel. Understand the factions, the origin of the Abyss, and the complete backstory of Crimson Desert.";
$bodyClass = "theme-crimson-desert";

include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

<div class="theme-crimson-desert">
    <header class="guide-hero" style="min-height: 45vh; background: linear-gradient(180deg, rgba(60, 20, 20, 0.3) 0%, #0a0a0a 100%), url('https://images.unsplash.com/photo-1599839619722-39751411ea63?q=80&w=1920&auto=format&fit=crop') center/cover; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.75);"></div>

        <div class="guide-hero-inner" style="text-align: left; padding: 0 2rem; position: relative; z-index: 2; max-width: var(--max-w); margin: 0 auto; padding-top: 80px;">
            <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/crimson-desert/index.php">Crimson Desert</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Lore Archive</span>
            </nav>
            <span class="label" style="color: var(--crimson); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">LORE & STORY ARCHIVE</span>
            <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem; font-family: var(--font-display);">The History of Pywel</h1>
            <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd; max-width: 600px;">Understand the factions, the origin of the Abyss, and Kliff's tragic past.</p>
        </div>
    </header>

    <div class="guide-layout responsive-layout">
        
        <div class="mobile-toc-container">
            <button class="mobile-toc-btn" id="tocToggle">
                <span>Lore Chapters</span>
                <span id="tocIcon">▼</span>
            </button>
            <ul class="mobile-toc-list" id="tocList">
                <li><a href="#the-continent">1. The Continent of Pywel</a></li>
                <li><a href="#the-factions">2. Major Factions</a></li>
                <li><a href="#the-abyss">3. Origin of the Abyss</a></li>
                <li><a href="#kliffs-past">4. Macduff's Exile & Kliff</a></li>
                <li><a href="#the-present">5. The Present Conflict</a></li>
                <li><a href="#theories">6. Community Theories</a></li>
            </ul>
        </div>

        <aside class="guide-toc desktop-toc" aria-label="Table of contents">
            <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Archive Index</div>
            <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#the-continent" style="color: var(--text-dim); transition: color 0.2s;">1. The Continent</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#the-factions" style="color: var(--text-dim); transition: color 0.2s;">2. Major Factions</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#the-abyss" style="color: var(--text-dim); transition: color 0.2s;">3. Origin of the Abyss</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#kliffs-past" style="color: var(--text-dim); transition: color 0.2s;">4. Kliff's Past</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#the-present" style="color: var(--text-dim); transition: color 0.2s;">5. Present Conflict</a></li>
                <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#theories" style="color: var(--text-dim); transition: color 0.2s;">6. Community Theories</a></li>
            </ul>
        </aside>

        <main class="guide-content">

            <section class="guide-section reveal" id="the-continent" style="margin-bottom: 4rem;">
                <div class="callout info" style="margin-bottom: 3rem; background: rgba(212, 175, 55, 0.05); border-left: 4px solid var(--gold); padding: 1.5rem; border-radius: 4px;">
                    <span class="callout-label" style="color: var(--gold); font-family: var(--font-ui); font-weight: bold; letter-spacing: 1px;">World Setting</span>
                    <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;"><strong>Planet:</strong> Unknown (Set in the same universe as Black Desert, but in a distant era/timeline).<br>
                    <strong>Primary Continent:</strong> Pywel.<br>
                    <strong>Theme:</strong> Dark Fantasy, Machiavellian Politics, and Interdimensional Corruption.</p>
                </div>

                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">1. The Continent of Pywel</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Pywel is a vast, war-torn continent defined by its harsh environments and fractured kingdoms. It is a world where absolute authority has collapsed. In the absence of a unifying emperor, the land has descended into chaos, creating a brutal age of mercenaries, warlords, and religious zealots.</p>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Geographically, Pywel is split into vast northern tundras (home to tribal clans), arid southern deserts (dominated by ancient ruins), and the temperate central regions where the decaying kingdoms cling to power. It is a land scarred not only by human ambition but by something older and darker that sleeps beneath the soil.</p>
            </section>

            <section class="guide-section reveal" id="the-factions" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">2. The Major Factions</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The struggle for control over Pywel is fought by several distinct groups, each with their own ideologies, armies, and dark secrets.</p>

                <div class="guide-accordion open reveal" id="acc-factions-1" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1.5rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-factions-1')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: var(--gold); border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">The Central Kingdoms (The Royals)</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 0;">Once the absolute rulers of Pywel, the royal bloodlines are now fractured. The reigning King of Demeniss is widely considered weak, leading powerful Dukes and regional lords to build their own private armies. They rely heavily on hired mercenary bands to fight their proxy wars, too afraid of mutually assured destruction to attack each other directly.</p>
                        </div>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-factions-2" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-factions-2')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #e74c3c; border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">The Crimson Mercenaries (Macduff's Band)</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 0;">Led by Macduff, this is the band to which the protagonist, Kliff, belongs. They are not mindless killers; they are outcasts, exiles, and victims of the Kingdom's purges. Bound by a strict code of brotherhood, they take jobs to survive but are increasingly drawn into a conspiracy that threatens the entire continent.</p>
                        </div>
                    </div>
                </div>

                <div class="guide-accordion reveal" id="acc-factions-3" style="background: var(--dark-2); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; margin-top: 1rem;">
                    <button class="guide-accordion-trigger" onclick="toggleAcc('acc-factions-3')" style="width: 100%; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #9b59b6; border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <span class="guide-accordion-label" style="font-family: var(--font-display); font-size: 1.2rem; letter-spacing: 1px;">The Cult of the Abyss</span>
                        <span class="guide-accordion-icon">▾</span>
                    </button>
                    <div class="guide-accordion-body">
                        <div class="guide-accordion-inner" style="padding: 1.5rem;">
                            <p style="color: #ccc; margin-bottom: 0;">A shadowy religious sect that believes Pywel is fundamentally flawed. They worship the dimensional tears that have begun appearing across the land. The Cult seeks to awaken ancient mechanisms hidden in the desert to fully merge Pywel with the chaotic dimension known as the Abyss.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="the-abyss" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: #3498db; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">3. The Origin of the Abyss</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The defining supernatural element of Crimson Desert is the <strong>Abyss</strong>. It is not an underworld, but rather a parallel dimension—a chaotic mirror of Pywel where time, gravity, and reality are distorted.</p>

                <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #3498db;">
                        <h3 style="color: #3498db; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Tears in Reality</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Ancient alchemists of Pywel attempted to harness the energy of the Abyss to power their empires. This hubris caused the "Tears"—rifts that allow Abyssal energy to bleed into the real world. This energy mutates wildlife, corrupts humans into monsters, and powers the mystical "Axiom Force" that Kliff learns to use.</p>
                    </div>
                    <div class="guide-card-item reveal" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-top: 3px solid #9b59b6;">
                        <h3 style="color: #9b59b6; font-family: var(--font-display); font-size: 1.3rem; margin-top: 0;">The Abyssal Cores</h3>
                        <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 0;">Concentrated fragments of interdimensional energy. The Cult uses them to summon horrors, while Kliff and his mercenaries learn to absorb them to unlock new skill trees and bend the laws of physics during combat.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section reveal" id="kliffs-past" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">4. Macduff's Exile & Kliff's Past</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The protagonist, <strong>Kliff (or Macduff in earlier lore drafts)</strong>, is a man running from his past. He was once a respected figure—potentially a high-ranking military officer or noble—who was betrayed by the very Kingdom he swore to protect.</p>

                <div class="reveal" style="background: rgba(231, 76, 60, 0.05); border: 1px dashed #e74c3c; padding: 1.5rem; border-radius: 4px; margin-bottom: 2rem;">
                    <h4 style="color: #e74c3c; font-family: var(--font-display); font-size: 1.3rem; margin-bottom: 0.5rem; margin-top: 0;">The Night of the Crimson Sand</h4>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 1rem;">Lore fragments suggest that Kliff was ordered to massacre a rebel faction in the southern deserts. Refusing to slaughter innocents, he turned his blade against his own commanders. For this treason, his family was targeted, and he was branded an outlaw.</p>
                    <p style="color: #ccc; font-size: 0.95rem; margin-bottom: 0;">Fleeing north, he gathered other broken souls to form the Crimson Mercenaries. His primary motivation at the start of the game is not saving the world, but ensuring the survival of his newfound "family" while seeking vengeance against the Duke who ordered his downfall.</p>
                </div>
            </section>

            <section class="guide-section reveal" id="the-present" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">5. The Present Conflict</h2>
                <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">The game begins with the Crimson Mercenaries taking what seems to be a routine escort or assassination job. However, they are ambushed by forces wielding Abyssal magic. Kliff realizes that the political war between the Dukes is merely a smokescreen.</p>

                <ul class="step-list" style="margin-top:2rem;">
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">1</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">The Awakening</h4>
                            <p style="color: #ccc;">Kliff is exposed to raw Abyssal energy, unlocking the "Axiom Force." This makes him a target for both the Kingdom (who fear his power) and the Cult (who want to harvest him).</p>
                        </div>
                    </li>
                    <li class="step reveal" style="margin-bottom: 2rem;">
                        <div class="step-num" style="color: var(--gold); font-size: 1.5rem; font-weight: bold;">2</div>
                        <div class="step-content">
                            <h4 style="font-family: var(--font-display); font-size: 1.3rem; letter-spacing: 1px; color: var(--gold); margin-top: 0;">Uniting the Clans</h4>
                            <p style="color: #ccc;">To survive, the Crimson Mercenaries must travel across Pywel, making fragile alliances with the Northern Tribes, underground thieves guilds, and rebellious mages, forging an army capable of storming the capital.</p>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="guide-section reveal" id="theories" style="margin-bottom: 4rem;">
                <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-display);">6. Community Theories</h2>
                <p class="guide-section-intro" style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">Based on environmental storytelling and frame-by-frame analysis of the trailers, here are the most plausible community theories regarding the unspoken lore of Pywel.</p>

                <div class="guide-cards" style="margin-top: 2rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                    <div class="guide-card-item" style="border: 1px solid rgba(212, 168, 67, 0.2); background: var(--dark-2); padding: 1.5rem; border-radius: 4px;">
                        <span class="label" style="color: var(--gold); font-size: 0.8rem; font-weight: bold; text-transform: uppercase;">Theory #1</span>
                        <h3 style="color:var(--gold); font-size: 1.3rem; margin-top: 0.5rem; font-family: var(--font-display);">The Origin of Kliff's Father</h3>
                        <p style="font-size: 0.95rem; color: #ccc; margin-bottom: 0;">Many believe Macduff wasn't exiled for treason, but because he refused to use the Core to destroy the Northern Clans. His mercenary life was a cover to protect Kliff from the Kingdom's assassins.</p>
                    </div>
                    <div class="guide-card-item" style="border: 1px solid rgba(212, 168, 67, 0.2); background: var(--dark-2); padding: 1.5rem; border-radius: 4px;">
                        <span class="label" style="color: var(--gold); font-size: 0.8rem; font-weight: bold; text-transform: uppercase;">Theory #2</span>
                        <h3 style="color:var(--gold); font-size: 1.3rem; margin-top: 0.5rem; font-family: var(--font-display);">The Abyss is Sentient</h3>
                        <p style="font-size: 0.95rem; color: #ccc; margin-bottom: 0;">The corruption mimics reality. Abyss bosses often take the form of fallen friends from the Prologue. The dimension isn't just chaotic; it actively uses psychological warfare against Kliff.</p>
                    </div>
                </div>
                <div class="chapter-nav">
                    <a href="/crimson-desert/index.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Return to Main Hub</a>
                </div>
            </section>

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
    }

    // Animación Reveal
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
});

// Script para los acordeones
function toggleAcc(id) {
    const acc = document.getElementById(id);
    if (acc) {
        acc.classList.toggle('open');
    }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>