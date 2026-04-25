<?php 
// 1. Identify the parent game for the "smart" header button
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];

// 2. Define SEO data for this page
$pageTitle = "The Complete Elden Ring Lore & Mythology — GuideVault";
$pageDesc = "The most comprehensive Elden Ring lore guide. Deep dive into the Outer Gods, the Age of the Crucible, Miquella's secrets, the Shadow Realm, and the Endings.";

// 3. Load the centralized global header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
  
  <header class="guide-hero" style="min-height: 45vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(212, 175, 55, 0.2) 0%, transparent 70%), linear-gradient(180deg, #0a0a0c 0%, #111115 60%, #0a0a0c 100%);"></div>
    <div class="guide-hero-pattern"></div>
    <div class="guide-hero-inner">
      
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/elden-ring/index.php" style="color: rgba(255,255,255,0.7); transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Elden Ring</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span style="color: var(--gold);">Lore & Mythology</span>
      </nav>

      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: #fff; text-shadow: 0 0 30px rgba(212, 175, 55, 0.5);">THE GRAND ARCHIVES</h1>
      <p class="guide-hero-subtitle" style="color: #D4AF37;">A complete compendium of the history, gods, and tragedies of the Lands Between</p>
    </div>
  </header>

  <div class="guide-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Lore Chapters</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#prehistory" style="color: var(--text-dim); transition: color 0.2s;">1. The Crucible & Dragons</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#outer-gods" style="color: var(--text-dim); transition: color 0.2s;">2. The Outer Gods</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#marika" style="color: var(--text-dim); transition: color 0.2s;">3. Marika's Ascension</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#godfrey" style="color: var(--text-dim); transition: color 0.2s;">4. Godfrey & The Tarnished</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#radagon" style="color: var(--text-dim); transition: color 0.2s;">5. Radagon & Rennala</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#black-knives" style="color: var(--text-dim); transition: color 0.2s;">6. Night of Black Knives</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#omen" style="color: var(--text-dim); transition: color 0.2s;">7. The Omen Tragedy</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#miquella" style="color: var(--text-dim); transition: color 0.2s;">8. Miquella's Dream</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#factions" style="color: var(--text-dim); transition: color 0.2s;">9. Factions & Rebellions</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#tarnished" style="color: var(--text-dim); transition: color 0.2s;">10. Legendary Tarnished</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#shattering" style="color: var(--text-dim); transition: color 0.2s;">11. The Shattering War</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#shadow-realm" style="color: var(--text-dim); transition: color 0.2s;">12. The Realm of Shadow</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#endings" style="color: var(--text-dim); transition: color 0.2s;">13. Endings Explained</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#present" style="color: var(--text-dim); transition: color 0.2s;">14. The Present</a></li>
        </ul>
    </aside>

    <main class="guide-content">
        <p class="guide-section-intro reveal" style="margin-bottom: 3rem;">
            The story of Elden Ring is a tapestry of cosmic ambition, family betrayal, and the struggle for order in a crumbling world. This guide synthesizes item descriptions, environmental clues, and dialogue to provide the most complete chronological narrative possible.
        </p>

      <section class="guide-section reveal" id="prehistory" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">1. Prehistory: The Crucible and the Dragons</h2>
        <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02); margin-top: 1.5rem;">
            <p style="font-size: 1rem; margin-bottom: 1.2rem; line-height: 1.8;">
                In the beginning, there was no Erdtree. Life originated from the <strong>Crucible</strong>, a primordial state where all life was blended together. This "soup of life" is why creatures like the Omens, Misbegotten, and Ancestral Followers possess horns, wings, or tails—remnants of that ancient era when these traits were considered holy.
            </p>
            <p style="font-size: 1rem; line-height: 1.8;">
                The world was ruled by the <strong>Ancient Dragons</strong>, led by Dragonlord Placidusax. He was the first Elden Lord, serving a god that eventually abandoned the Lands Between. Simultaneously, underground civilizations like the <strong>Nox (Eternal Cities)</strong> thrived, though they were later banished by the Greater Will for attempting to create an artificial lord.
            </p>
        </div>
      </section>

      <section class="guide-section reveal" id="outer-gods" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: #8e44ad; border-bottom: 1px solid rgba(142, 68, 173, 0.3); padding-bottom: 0.5rem;">2. Cosmic Sovereigns: The Outer Gods</h2>
        <div class="guide-card-item reveal" style="border-left: 4px solid #8e44ad; background: rgba(142, 68, 173, 0.05); margin-top: 1.5rem;">
            <p style="font-size: 1rem; margin-bottom: 1.2rem; line-height: 1.8;">
                The world of Elden Ring is a chessboard for cosmic entities known as <strong>Outer Gods</strong>, who influence the world through human vessels.
            </p>
            <ul style="color: var(--text-dim); line-height: 1.8; font-size: 1rem;">
                <li><strong style="color: #f1c40f;">The Greater Will:</strong> The architect of the Golden Order. It sent a golden star to the Lands Between, which became the Elden Ring.</li>
                <li><strong style="color: #e67e22;">The Frenzied Flame:</strong> Seeks to melt the entire world back into a single, chaotic "One" through madness.</li>
                <li><strong style="color: #c0392b;">The Formless Mother:</strong> A god of wounds and blood, she is the patron of Mohg, Lord of Blood.</li>
                <li><strong style="color: #27ae60;">The God of Scarlet Rot:</strong> Sealed away beneath the Lake of Rot, this entity uses Malenia as its unwilling vessel.</li>
                <li><strong style="color: #3498db;">The Dark Moon:</strong> A mysterious cosmic force associated with Princess Ranni and the sorcerers of Raya Lucaria.</li>
            </ul>
        </div>
      </section>

      <section class="guide-section reveal" id="marika" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">3. Queen Marika's Ascension & The Erdtree</h2>
        <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02); margin-top: 1.5rem;">
            <p style="font-size: 1rem; line-height: 1.8;">
                Marika, a Numen woman, was chosen as an <strong>Empyrean</strong> (a candidate for godhood) by the Two Fingers. She ascended to godhood at the Gate of Divinity, becoming the vessel for the Elden Ring. To establish her "Golden Order," Marika performed a world-altering act: she removed the <strong>Rune of Death</strong> from the Elden Ring and gave it to her shadow-beast, Maliketh.
            </p>
            <p style="font-size: 1rem; margin-top: 1.2rem; line-height: 1.8;">
                With death "sealed," the Erdtree grew to its full glory, and the inhabitants of the Lands Between became effectively immortal, their souls returning to the tree upon physical expiration.
            </p>
        </div>
      </section>

      <section class="guide-section reveal" id="godfrey" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">4. Godfrey and the Creation of the Tarnished</h2>
        <div class="guide-card-item reveal" style="border-left: 4px solid #e67e22; background: rgba(230, 126, 34, 0.05); margin-top: 1.5rem;">
            <p style="font-size: 1rem; line-height: 1.8;">
                To conquer the Lands Between, Marika married <strong>Hoarah Loux</strong>, the most savage warrior on earth. He took the name <strong>Godfrey</strong> and became the First Elden Lord. He led the "War against the Giants" and defeated the Storm Lord.
            </p>
            <p style="font-size: 1rem; margin-top: 1.2rem; line-height: 1.8;">
                However, once all enemies were slain, Marika stripped Godfrey and his warriors of their golden "Grace." They were exiled from the Lands Between to live and die in distant lands. These outcasts became the <strong>Tarnished</strong>, destined to one day return.
            </p>
        </div>
      </section>

      <section class="guide-section reveal" id="radagon" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: #3498db; border-bottom: 1px solid rgba(52, 152, 219, 0.2); padding-bottom: 0.5rem;">5. Radagon, Rennala, and the Great Secret</h2>
        <div class="guide-card-item reveal" style="border-left: 4px solid #3498db; background: rgba(52, 152, 219, 0.05); margin-top: 1.5rem;">
            <p style="font-size: 1rem; line-height: 1.8;">
                During the expansion of the Golden Order, a red-haired champion named <strong>Radagon</strong> fought the Carian Royal Family in Liurnia. Instead of conquering them, he married <strong>Queen Rennala</strong>, uniting magic and religion. They had three children: Radahn, Rykard, and Ranni.
            </p>
            <p style="font-size: 1rem; margin-top: 1.2rem; line-height: 1.8;">
                When Marika exiled Godfrey, Radagon abruptly left Rennala and returned to the capital to become Marika's second husband. <br><br>
                <strong>The Ultimate Secret:</strong> Through item descriptions and the Law of Regression, it is revealed that <em>"Radagon is Marika"</em>. They are two different personalities sharing the same physical body—one a god of the Golden Order, the other its ultimate dissenter.
            </p>
        </div>
      </section>

      <section class="guide-section reveal" id="black-knives" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">6. The Night of the Black Knives</h2>
        <div class="guide-card-item reveal" style="border-left: 4px solid #8e44ad; background: rgba(142, 68, 173, 0.05); margin-top: 1.5rem;">
            <p style="font-size: 1rem; line-height: 1.8;">
                Ranni the Witch, refusing to be a puppet of the Greater Will, stole a fragment of the <strong>Rune of Death</strong> from Maliketh. She used it to imbue the daggers of Numen assassins. 
            </p>
            <p style="font-size: 1rem; margin-top: 1.2rem; line-height: 1.8;">
                On a single night, the assassins murdered <strong>Godwyn the Golden</strong>, Marika's favorite son. But Ranni orchestrated a ritual so that Godwyn's soul died while her physical body died. This created the first "living corpse"—Godwyn became the <strong>Prince of Death</strong>, his soulless body mutating and spreading Deathblight across the world.
            </p>
        </div>
      </section>

      <section class="guide-section reveal" id="omen" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: #7f8c8d; border-bottom: 1px solid rgba(127, 140, 141, 0.2); padding-bottom: 0.5rem;">7. The Tragedy of the Omen Brothers</h2>
        <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02); margin-top: 1.5rem;">
            <p style="font-size: 1rem; line-height: 1.8;">
                Marika and Godfrey's twins, <strong>Morgott and Mohg</strong>, were born with horns—a sign of the ancient Crucible now considered a curse by the Golden Order. They were cast into the sewers of Leyndell.
            </p>
            <ul style="margin-top: 1rem; color: var(--text-dim); line-height: 1.8; font-size: 1rem;">
                <li><strong>Morgott:</strong> Remained loyal to the Erdtree despite its rejection. He became the "Veiled Monarch" and protected the capital during the Shattering.</li>
                <li><strong>Mohg:</strong> Embraced his cursed blood, found the Formless Mother, and kidnapped Miquella to start a new "Mohgwyn" dynasty.</li>
            </ul>
        </div>
      </section>

      <section class="guide-section reveal" id="miquella" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">8. Miquella's Dream & The Haligtree</h2>
        <div class="guide-card-item reveal" style="background: rgba(255,255,255,0.02); margin-top: 1.5rem;">
            <p style="font-size: 1rem; line-height: 1.8;">
                Miquella and Malenia were the twin children of Radagon and Marika. Being born from a single god, they were cursed: Malenia with the Scarlet Rot, and Miquella with <strong>eternal childhood</strong>.
            </p>
            <p style="font-size: 1rem; margin-top: 1.2rem; line-height: 1.8;">
                Miquella abandoned the Golden Order because it could not cure his sister. He created "Unalloyed Gold" to ward off Outer Gods and grew the <strong>Haligtree</strong>, intended to be a sanctuary for those rejected by the Erdtree. However, before it could fully bloom, Miquella was kidnapped by Mohg while slumbering inside a cocoon.
            </p>
        </div>
      </section>

      <section class="guide-section reveal" id="factions" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: #e67e22; border-bottom: 1px solid rgba(230, 126, 34, 0.2); padding-bottom: 0.5rem;">9. Great Factions & Rebellions</h2>
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
            <div class="guide-card-item reveal">
                <h3 style="color:#e67e22;">Volcano Manor</h3>
                <p style="font-size:0.9rem;">Led by <strong>Praetor Rykard</strong>, who allowed himself to be devoured by a great serpent. Their goal is to "devour the gods" and end the Erdtree's reign through blasphemy.</p>
            </div>
            <div class="guide-card-item reveal">
                <h3 style="color:#3498db;">Raya Lucaria</h3>
                <p style="font-size:0.9rem;">A center of learning for sorcerers. Following Radagon's departure, they rebelled against Rennala, locking her in the Grand Library while the Academy stood neutral in the war.</p>
            </div>
            <div class="guide-card-item reveal">
                <h3 style="color:#e74c3c;">The Cleanrot Knights</h3>
                <p style="font-size:0.9rem;">Malenia's elite force. They fought with total devotion, knowing that by staying near their goddess, they would eventually be consumed by the Scarlet Rot.</p>
            </div>
        </div>
      </section>

      <section class="guide-section reveal" id="tarnished" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">10. Legendary Tarnished (Your Predecessors)</h2>
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Champion</th>
                <th>Tale & Fate</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Vyke</strong></td>
                <td>The closest Tarnished to becoming Elden Lord before you. He was seduced by the Three Fingers to save his maiden, falling into madness.</td>
              </tr>
              <tr>
                <td><strong>Sir Gideon Ofnir</strong></td>
                <td>"The All-Knowing." Leader of the Roundtable. He eventually realized that Marika's wish was for the Tarnished to struggle forever, never truly becoming Lords.</td>
              </tr>
              <tr>
                <td><strong>Bernahl</strong></td>
                <td>A mighty warrior who rebelled against the Greater Will after his maiden threw herself into the forge. He joined the Recusants to hunt his own kind.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="shattering" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">11. The Shattering War</h2>
        <div class="guide-card-item reveal" style="border-left: 4px solid #e74c3c; background: rgba(231, 76, 60, 0.05); margin-top: 1.5rem;">
            <p style="font-size: 1rem; line-height: 1.8;">
                Driven to despair by Godwyn's death (or as a final act of rebellion), <strong>Queen Marika shattered the Elden Ring</strong>. The shards (Great Runes) were claimed by her demigod children. This sparked an apocalyptic war called <strong>The Shattering</strong>.
            </p>
            <p style="font-size: 1rem; margin-top: 1.2rem; line-height: 1.8;">
                No demigod could become the next Elden Lord. The war reached a stalemate in Caelid, where Malenia and Radahn fought to a standstill. Malenia unleashed the Scarlet Rot, ruining Caelid and driving Radahn insane. Seeing no victor, the Greater Will abandoned the demigods.
            </p>
        </div>
      </section>

      <section class="guide-section reveal" id="shadow-realm" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: #9b59b6; border-bottom: 1px solid rgba(155, 89, 182, 0.2); padding-bottom: 0.5rem;">12. The Realm of Shadow (DLC Lore)</h2>
        <div class="guide-card-item reveal" style="border-left: 4px solid #9b59b6; background: rgba(155, 89, 182, 0.05); margin-top: 1.5rem;">
            <p style="font-size: 1rem; line-height: 1.8;">
                The <strong>Land of Shadow</strong> is where the Numen (Marika's people) were tortured by the <strong>Hornsent</strong> in jars to create "Saints." Marika ascended to godhood at the Gate of Divinity to avenge her people, then "veiled" this land to hide her origins and her crusade.
            </p>
            <p style="font-size: 1rem; margin-top: 1.2rem; line-height: 1.8;">
                In this realm, <strong>Messmer the Impaler</strong> (Marika's secret son) led a genocidal crusade against the Hornsent. Now, Miquella has journeyed here, discarding his flesh and his love to follow his mother's footsteps into a terrifying new divinity.
            </p>
            <p style="font-size: 1rem; margin-top: 1.2rem; line-height: 1.8;">
                <strong>Metyr, Mother of Fingers:</strong> It is revealed here that the Two Fingers are broken messengers. Metyr, the first daughter of the Greater Will, lost contact with her father eons ago, leaving the Golden Order operating on "dead signals."
            </p>
        </div>
      </section>

      <section class="guide-section reveal" id="endings" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: #1abc9c; border-bottom: 1px solid rgba(26, 188, 156, 0.2); padding-bottom: 0.5rem;">13. The Endings: What do they mean?</h2>
        <div class="guide-cards" style="display: grid; grid-template-columns: 1fr; gap: 1.5rem; margin-top: 1.5rem;">
            <div class="guide-card-item reveal">
                <h3 style="color:#3498db;">Age of Stars (Ranni)</h3>
                <p>You remove the influence of the Greater Will and the Elden Ring from the physical world. The Lands Between are left to their own devices, while you and Ranni embark on a cold, lonely journey through the cosmos.</p>
            </div>
            <div class="guide-card-item reveal">
                <h3 style="color:#f1c40f;">Age of Order (Goldmask)</h3>
                <p>You repair the Ring but add a new rune that prevents gods (like Marika) from being fickle or emotional. It is the "perfect" Golden Order, but also an era of absolute stagnation.</p>
            </div>
            <div class="guide-card-item reveal">
                <h3 style="color:#e67e22;">Lord of Frenzied Flame</h3>
                <p>Total destruction. You burn the world and the Erdtree to ashes, melting all boundaries until everything returns to the primordial "One." No more suffering, but no more life.</p>
            </div>
        </div>
      </section>

      <section class="guide-section reveal" id="present" style="margin-bottom: 5rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">14. The Present: The Call of the Tarnished</h2>
        <div class="guide-card-item reveal" style="background: rgba(212, 175, 55, 0.1); border: 1px solid var(--gold); margin-top: 1.5rem; text-align: center; padding: 2.5rem;">
            <p style="font-size: 1.1rem; line-height: 1.8; color: #fff;">
                Now, the <strong>Guidance of Grace</strong> has returned to the long-exiled Tarnished. You, a warrior of no renown, are called back to the Lands Between. Your mission is simple yet impossible: cross the fog, hunt the demigods, claim their Great Runes, and stand before the Elden Ring to become the new <strong>Elden Lord</strong>.
            </p>
            <p style="font-size: 1rem; margin-top: 1.5rem; color: var(--gold); font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">
                Rise, Tarnished, and let grace lead the way.
            </p>
        </div>
      </section>

    </main>
  </div>
</div>

<?php 
// 4. Load the footer
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>