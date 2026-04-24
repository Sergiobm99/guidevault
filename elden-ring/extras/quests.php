<?php 
// 1. Identify the parent game for the "smart" header button
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];

// 2. Define SEO data for this page
$pageTitle = "All NPC Questlines & Endings Guide — Elden Ring & DLC | GuideVault";
$pageDesc = "The ultimate step-by-step walkthrough for all NPC questlines in Elden Ring and Shadow of the Erdtree. Don't miss any legendary weapons, armor, or endings.";

// 3. Load the centralized global header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
  
  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(52, 152, 219, 0.15) 0%, transparent 65%), linear-gradient(180deg, #0a0a0c 0%, #111115 60%, #0a0a0c 100%);"></div>
    <div class="guide-hero-pattern"></div>
    <div class="guide-hero-inner">
      
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/elden-ring/index.php" style="color: rgba(255,255,255,0.7); transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Elden Ring</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span style="color: var(--gold);">NPC Questlines</span>
      </nav>

      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: #fff; text-shadow: 0 0 20px rgba(52, 152, 219, 0.4);">NPC QUESTLINES</h1>
      <p class="guide-hero-subtitle" style="color: #3498db;">The Ultimate Step-by-Step Guide to Every Story</p>
    </div>
  </header>

  <div class="guide-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Quest Categories</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#endings" style="color: var(--text-dim); transition: color 0.2s;">1. The 6 Major Endings</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#epic-journeys" style="color: var(--text-dim); transition: color 0.2s;">2. Tragic Heroes & Journeys</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#roundtable" style="color: var(--text-dim); transition: color 0.2s;">3. Roundtable & Blood</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#dlc" style="color: var(--text-dim); transition: color 0.2s;">4. Shadow of the Erdtree (DLC)</a></li>
        </ul>
    </aside>

    <main class="guide-content">
        <p class="guide-section-intro reveal" style="margin-bottom: 3rem;">
            Elden Ring does not have a quest log. If you blink, you might miss a crucial piece of dialogue that locks you out of a legendary weapon or an entire ending. Follow these step-by-step timelines to ensure you don't miss a thing.
        </p>

      <section class="guide-section reveal" id="endings" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">1. Paths to the Alternate Endings</h2>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: 1fr; gap: 1.5rem; margin-top: 2rem;">
          
          <div class="guide-card-item reveal" style="border-left: 4px solid #3498db; background: rgba(52, 152, 219, 0.05);">
            <h3 style="margin-bottom: 0.2rem; color: #3498db; font-size: 1.5rem;">Ranni the Witch</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Age of the Stars Ending & Dark Moon Greatsword</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Meet her at the Church of Elleh at night to get the Spirit Calling Bell.</li>
              <li style="margin-bottom: 0.5rem;">Clear Caria Manor and speak to her at the top of <strong>Ranni's Rise</strong>. Enter her service.</li>
              <li style="margin-bottom: 0.5rem;">Defeat <strong>Starscourge Radahn</strong> to unlock the path to Nokron.</li>
              <li style="margin-bottom: 0.5rem;">Find the <strong>Fingerslayer Blade</strong> inside Nokron and give it to her. Receive the Inverted Statue.</li>
              <li style="margin-bottom: 0.5rem;">Use the portal in Renna's Rise to reach Ainsel River. Talk to the <strong>Miniature Ranni Doll</strong> at a grace 3 times.</li>
              <li style="margin-bottom: 0.5rem;">Defeat the Baleful Shadow to get the Discarded Palace Key. Open the chest in Rennala's room to get the <strong>Dark Moon Ring</strong>.</li>
              <li style="margin-bottom: 0.5rem;">Cross the Lake of Rot, defeat Astel, and place the ring on Ranni's finger at the Cathedral of Manus Celes.</li>
            </ol>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #95a5a6; background: rgba(149, 165, 166, 0.05);">
            <h3 style="margin-bottom: 0.2rem; color: #95a5a6; font-size: 1.5rem;">Fia, Deathbed Companion</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Age of Duskborn Ending & Fortissax Boss</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Let her hold you in the Roundtable Hold.</li>
              <li style="margin-bottom: 0.5rem;">After reaching Altus, she gives you a <strong>Weathered Dagger</strong>. Give it to D, Hunter of the Dead.</li>
              <li style="margin-bottom: 0.5rem;">Reload the area. Find Fia standing over D's body in the newly opened room. She will leave.</li>
              <li style="margin-bottom: 0.5rem;">Progress Ranni's quest to get the <strong>Cursemark of Death</strong> from the Liurnia Divine Tower.</li>
              <li style="margin-bottom: 0.5rem;">Find Fia at the Deeproot Depths. Defeat her champions.</li>
              <li style="margin-bottom: 0.5rem;">Give her the Cursemark, reload the area, and interact with her sleeping body to fight <strong>Lichdragon Fortissax</strong>.</li>
            </ol>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #f1c40f; background: rgba(241, 196, 15, 0.05);">
            <h3 style="margin-bottom: 0.2rem; color: #f1c40f; font-size: 1.5rem;">Brother Corhyn & Goldmask</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Age of Order Ending</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Corhyn leaves the Roundtable when you reach Altus. Find him near the Altus Highway map fragment.</li>
              <li style="margin-bottom: 0.5rem;">Find Goldmask on the broken bridge in northern Altus. Tell Corhyn.</li>
              <li style="margin-bottom: 0.5rem;">Meet them both at the Colosseum in Leyndell.</li>
              <li style="margin-bottom: 0.5rem;">Cast <strong>Law of Regression</strong> in front of the Radagon statue in Leyndell to reveal the secret. Tell Goldmask.</li>
              <li style="margin-bottom: 0.5rem;">Find them on the bridge at Stargazer's Ruins (Mountaintops). After Leyndell turns to ash, find Goldmask's body to get his Mending Rune.</li>
            </ol>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #8e44ad; background: rgba(142, 68, 173, 0.05);">
            <h3 style="margin-bottom: 0.2rem; color: #8e44ad; font-size: 1.5rem;">The Loathsome Dung Eater</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Blessing of Despair Ending & Omen Armor</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Find your first <strong>Seedbed Curse</strong> (e.g., in Leyndell or Volcano Manor). Show it to his spirit in the Roundtable Hold.</li>
              <li style="margin-bottom: 0.5rem;">He gives you the Sewer-Gaol Key. Go to the Subterranean Shunning-Grounds beneath Leyndell and free his physical body.</li>
              <li style="margin-bottom: 0.5rem;">Return to the Roundtable. He leaves a message telling you to fight him at the outer moat.</li>
              <li style="margin-bottom: 0.5rem;">Defeat his invader form at the moat near Leyndell. Talk to him again at the Roundtable.</li>
              <li style="margin-bottom: 0.5rem;">Collect a total of 5 Seedbed Curses and feed them to his physical body in the sewer to get his Mending Rune.</li>
            </ol>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #e67e22; background: rgba(230, 126, 34, 0.05);">
            <h3 style="margin-bottom: 0.2rem; color: #e67e22; font-size: 1.5rem;">Hyetta & The Frenzied Flame</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Lord of Frenzied Flame Ending & Frenzied Flame Seal</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Complete Irina and Edgar's questline in the Weeping Peninsula (Castle Morne).</li>
              <li style="margin-bottom: 0.5rem;">Find Hyetta at Lake-Facing Cliffs (Liurnia). Feed her a <strong>Shabriri Grape</strong>.</li>
              <li style="margin-bottom: 0.5rem;">Find her again at the Purified Ruins and Gate Town Bridge. Feed her two more Shabriri Grapes.</li>
              <li style="margin-bottom: 0.5rem;">Find her at Bellum Church (Altus). She asks for a <strong>Fingerprint Grape</strong> (dropped by Vyke near the Church of Inhibition).</li>
              <li style="margin-bottom: 0.5rem;">Descend the jumping puzzle behind the Mohg, the Omen boss room in the Leyndell Sewers.</li>
              <li style="margin-bottom: 0.5rem;">Take off ALL your armor and interact with the Three Fingers door. Touch Hyetta afterwards to get her Seal.</li>
            </ol>
          </div>

        </div>
      </section>

      <section class="guide-section reveal" id="epic-journeys" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">2. Tragic Heroes & Epic Journeys</h2>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: 1fr; gap: 1.5rem; margin-top: 2rem;">
          
          <div class="guide-card-item reveal" style="border-left: 4px solid #e74c3c;">
            <h3 style="margin-bottom: 0.2rem; color: #e74c3c; font-size: 1.5rem;">Millicent</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Rotten Winged Sword Insignia OR Millicent's Prosthesis</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Talk to Gowry south of Sellia. Defeat Commander O'Neil to get the Unalloyed Gold Needle. Give it to Gowry, then to Millicent at the Church of the Plague.</li>
              <li style="margin-bottom: 0.5rem;">Find Millicent at Erdtree-Gazing Hill. Retrieve the <strong>Valkyrie's Prosthesis</strong> from the Shaded Castle and give it to her.</li>
              <li style="margin-bottom: 0.5rem;">Defeat the Godskin Apostle at Windmill Village and talk to her there.</li>
              <li style="margin-bottom: 0.5rem;">Meet her at Snow Valley Ruins, then at the Prayer Room in the Haligtree.</li>
              <li style="margin-bottom: 0.5rem;">Defeat the Ulcerated Tree Spirit near the Drainage Channel grace. Choose to Assist her (Golden Sign) or Kill her (Red Sign).</li>
            </ol>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #7f8c8d;">
            <h3 style="margin-bottom: 0.2rem; color: #7f8c8d; font-size: 1.5rem;">Blaidd the Half-Wolf</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Royal Greatsword & Blaidd's Armor Set</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Hear howling in Mistwood. Talk to Kalé at Church of Elleh to get the "Snap" gesture. Use it in Mistwood to meet Blaidd.</li>
              <li style="margin-bottom: 0.5rem;">Help him defeat Darriwil in the Forlorn Hound Evergaol (Limgrave).</li>
              <li style="margin-bottom: 0.5rem;">Start Ranni's quest. Meet Blaidd in Siofra River. Defeat Radahn with his help.</li>
              <li style="margin-bottom: 0.5rem;">Free him from the Forlorn Hound Evergaol where Iji locked him up.</li>
              <li style="margin-bottom: 0.5rem;">Complete Ranni's entire questline. Return to the front steps of Ranni's Rise to face him in his madness.</li>
            </ol>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #e67e22;">
            <h3 style="margin-bottom: 0.2rem; color: #e67e22; font-size: 1.5rem;">Iron Fist Alexander</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Shard of Alexander (Best Talisman)</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Free him from the ground in Northern Limgrave. Meet him in Gael Tunnel.</li>
              <li style="margin-bottom: 0.5rem;">Summon him during the Radahn fight. Talk to him near the grace afterwards.</li>
              <li style="margin-bottom: 0.5rem;">Free him again south of Artist's Shack in Liurnia using an <strong>Oil Pot</strong>.</li>
              <li style="margin-bottom: 0.5rem;">Talk to him in the lava pool south of Fort Laiedd in Mt. Gelmir.</li>
              <li style="margin-bottom: 0.5rem;">Find him on the floating debris in Crumbling Farum Azula. Accept his final warrior's duel.</li>
            </ol>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #34495e;">
            <h3 style="margin-bottom: 0.2rem; color: #34495e; font-size: 1.5rem;">Diallos Hoslow & Jarburg</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Hoslow's Petal Whip & Diallos's Mask</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Talk to him at the Roundtable. Find him mourning Lanya in the sunken Academy Gate Town in Liurnia.</li>
              <li style="margin-bottom: 0.5rem;">He will move to Volcano Manor. Talk to him there repeatedly until he leaves out of shame.</li>
              <li style="margin-bottom: 0.5rem;">Find the hidden town of Jarburg (cliffside in Liurnia). Talk to Jar-Bairn repeatedly.</li>
              <li style="margin-bottom: 0.5rem;">Diallos will appear in Jarburg taking care of the jars. Rest at a grace until poachers attack the village.</li>
              <li style="margin-bottom: 0.5rem;">Find Diallos fatally wounded. Tell him he defended the jars bravely to conclude his tale.</li>
            </ol>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #2ecc71;">
            <h3 style="margin-bottom: 0.2rem; color: #2ecc71; font-size: 1.5rem;">Boc the Seamster</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Free Garment Alterations & Wholesome ending</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Hit a suspiciously talking bush near the Agheel Lake North grace to reveal Boc.</li>
              <li style="margin-bottom: 0.5rem;">Find him wounded at Coastal Cave. Defeat the Demi-Human Chiefs to get his Sewing Needle back.</li>
              <li style="margin-bottom: 0.5rem;">He will appear at various graces (Lake-Facing Cliffs, East Raya Lucaria Gate). Give him the Gold Sewing Needle from the Church of Vows.</li>
              <li style="margin-bottom: 0.5rem;">When he moves to the Leyndell East Capital Rampart, he asks for a Larval Tear. <strong>DO NOT give it to him</strong> (he will die).</li>
              <li style="margin-bottom: 0.5rem;">Instead, use the "You're Beautiful" Prattling Pate item in front of him.</li>
            </ol>
          </div>

        </div>
      </section>

      <section class="guide-section reveal" id="roundtable" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">3. Magic, Blood, and Roundtable Quests</h2>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
          
          <div class="guide-card-item reveal" style="border-top: 3px solid #c0392b;">
            <h3 style="margin-bottom: 0.5rem;">Yura, Hunter of Bloody Fingers</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">Reward: Nagakiba & Eleonora's Poleblade</p>
            <ul style="font-size: 0.85rem; color: var(--text-dim); padding-left: 1.2rem; margin-bottom: 0;">
              <li style="margin-bottom: 0.3rem;">Help him fight Nerijus outside Murkwater Cave in Limgrave.</li>
              <li style="margin-bottom: 0.3rem;">Assist him via a red summon sign on the broken bridge north of the Raya Lucaria Main Academy Gate.</li>
              <li style="margin-bottom: 0.3rem;">Find him dying at the Second Church of Marika in Altus. Get the Nagakiba and defeat Eleonora to get her Poleblade.</li>
              <li style="margin-bottom: 0.3rem;">His body will be taken over by Shabriri at the Mountaintops of the Giants (tied to the Frenzied Flame ending).</li>
            </ul>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #e67e22;">
            <h3 style="margin-bottom: 0.5rem;">Patches the Untethered</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">Reward: Bull-Goat Armor Set & Magma Whip Candlestick</p>
            <ul style="font-size: 0.85rem; color: var(--text-dim); padding-left: 1.2rem; margin-bottom: 0;">
              <li style="margin-bottom: 0.3rem;">Fight him in Murkwater Cave but <strong>spare him</strong> when he begs for mercy.</li>
              <li style="margin-bottom: 0.3rem;">Find him at Scenic Isle in Liurnia. He tricks you about a Raya Lucaria transport.</li>
              <li style="margin-bottom: 0.3rem;">Follow rainbow stones in Mt. Gelmir so he can kick you off a cliff (classic Patches).</li>
              <li style="margin-bottom: 0.3rem;">Join Volcano Manor. Patches gives you an assassination letter to kill Tragoth and get the Bull-Goat Set.</li>
              <li style="margin-bottom: 0.3rem;">After Rykard dies, find Patches at the Shaded Castle bridge and finally back at Murkwater Cave.</li>
            </ul>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #3498db;">
            <h3 style="margin-bottom: 0.5rem;">Sorceress Sellen</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">Reward: Comet Azur, Lusat/Azur Sets</p>
            <ul style="font-size: 0.85rem; color: var(--text-dim); padding-left: 1.2rem; margin-bottom: 0;">
              <li style="margin-bottom: 0.3rem;">Become her student at Waypoint Ruins. Find Primeval Sorcerer Azur in Mt. Gelmir to get Comet Azur.</li>
              <li style="margin-bottom: 0.3rem;">After defeating Radahn, talk to her real body in the Witchbane Ruins (Weeping Peninsula).</li>
              <li style="margin-bottom: 0.3rem;">Transfer her soul to a puppet in Seluvis's hidden basement.</li>
              <li style="margin-bottom: 0.3rem;">Assist her (Gold Sign) in defeating Jerren at the Raya Lucaria Grand Library.</li>
            </ul>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #c0392b;">
            <h3 style="margin-bottom: 0.5rem;">White Mask Varré</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">Reward: Early access to Mohgwyn Palace</p>
            <ul style="font-size: 0.85rem; color: var(--text-dim); padding-left: 1.2rem; margin-bottom: 0;">
              <li style="margin-bottom: 0.3rem;">Meet him at the First Step, then at the Rose Church in Liurnia.</li>
              <li style="margin-bottom: 0.3rem;">Use the 3 Festering Bloody Fingers he gives you to invade players (you don't have to win).</li>
              <li style="margin-bottom: 0.3rem;">Soak the cloth he gives you in the blood of a maiden (Church of Inhibition).</li>
              <li style="margin-bottom: 0.3rem;">Receive the Pureblood Knight's Medal and use it to teleport to the farming spot.</li>
            </ul>
          </div>

          <div class="guide-card-item reveal" style="border-top: 3px solid #95a5a6;">
            <h3 style="margin-bottom: 0.5rem;">Nepheli Loux & Kenneth Haight</h3>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem;">Reward: Ancient Dragon Smithing Stone</p>
            <ul style="font-size: 0.85rem; color: var(--text-dim); padding-left: 1.2rem; margin-bottom: 0;">
              <li style="margin-bottom: 0.3rem;">Summon Nepheli for Godrick. Clear Fort Haight for Kenneth.</li>
              <li style="margin-bottom: 0.3rem;">Find her at the Village of the Albinaurics. Defeat the Omenkiller boss.</li>
              <li style="margin-bottom: 0.3rem;">Give her the <strong>Stormhawk King</strong> ashes at the Roundtable (do NOT give her Seluvis's potion).</li>
              <li style="margin-bottom: 0.3rem;">After defeating Morgott, she and Kenneth will move to Stormveil's throne room.</li>
            </ul>
          </div>

        </div>
      </section>

      <section class="guide-section reveal" id="dlc" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: #9b59b6; border-bottom: 1px solid rgba(155, 89, 182, 0.2); padding-bottom: 0.5rem;">4. Shadow of the Erdtree (DLC Quests)</h2>
        <p style="margin-bottom: 1.5rem;">The Realm of Shadow features incredibly intertwined quests. Here are the most important ones to follow so you don't miss any DLC weapons.</p>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: 1fr; gap: 1.5rem; margin-top: 2rem;">
          
          <div class="guide-card-item reveal" style="border-left: 4px solid #e74c3c; background: rgba(155, 89, 182, 0.05);">
            <h3 style="margin-bottom: 0.2rem; color: #9b59b6; font-size: 1.5rem;">Igon (The Dragon Hunter)</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Igon's Greatbow & Set, Epic Boss Voice Lines</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Find him writhing in pain near the Pillar Path Waypoint grace.</li>
              <li style="margin-bottom: 0.5rem;">Defeat the two Jagged Peak Drakes on the path climbing the mountain.</li>
              <li style="margin-bottom: 0.5rem;">Speak to him slightly further up the path to receive <strong>Igon's Furled Finger</strong>.</li>
              <li style="margin-bottom: 0.5rem;">Enter the arena for <strong>Bayle the Dread</strong>. Once inside, use his summon sign located on the ground.</li>
            </ol>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #9b59b6; background: rgba(155, 89, 182, 0.05);">
            <h3 style="margin-bottom: 0.2rem; color: #9b59b6; font-size: 1.5rem;">Sir Ansbach & Needle Knight Leda</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Obsidian Lamina & Furious Blade of Ansbach</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Talk to Ansbach at the Main Gate Cross in Belurat.</li>
              <li style="margin-bottom: 0.5rem;">Find him in the Specimen Storehouse (Shadow Keep) 1st floor.</li>
              <li style="margin-bottom: 0.5rem;">Retrieve the <strong>Secret Rite Scroll</strong> from the 4th floor of the Storehouse and give it to him.</li>
              <li style="margin-bottom: 0.5rem;">Leda will decide to assassinate Ansbach. Use the Gold Summon Sign in Ansbach's room to help him defeat Leda.</li>
              <li style="margin-bottom: 0.5rem;">Summon Ansbach during the Leda gank fight in Enir-Ilim, and finally summon him for the Final Boss to get his scythe.</li>
            </ol>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #9b59b6; background: rgba(155, 89, 182, 0.05);">
            <h3 style="margin-bottom: 0.2rem; color: #9b59b6; font-size: 1.5rem;">Thiollier & St. Trina</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Thiollier's Hidden Needle, Final Boss Summon</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Meet Thiollier at the Pillar Path Cross. Speak to Moore and give Thiollier the Black Syrup.</li>
              <li style="margin-bottom: 0.5rem;">After the Great Rune breaks, travel down into the Stone Coffin Fissure. Defeat the Putrescent Knight.</li>
              <li style="margin-bottom: 0.5rem;">Speak to St. Trina and choose to "Imbibe nectar". You will die. Repeat this 4 times until you hear her voice.</li>
              <li style="margin-bottom: 0.5rem;">Tell Thiollier what she said. Defeat his invasion, then talk to him again so he joins you for the finale.</li>
            </ol>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #9b59b6; background: rgba(155, 89, 182, 0.05);">
            <h3 style="margin-bottom: 0.2rem; color: #9b59b6; font-size: 1.5rem;">Moore & The Forager Broods</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Verdigris Greatshield and Armor</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Find Moore at the Main Gate Cross. Heal the wounded Forager Brood (Pests) around the map using Warming Stones.</li>
              <li style="margin-bottom: 0.5rem;">Talk to Moore to receive Forager Brood Cookbooks as a reward.</li>
              <li style="margin-bottom: 0.5rem;">When the Great Rune breaks, Moore will be depressed. <strong>Tell him to "Put it behind you".</strong></li>
              <li style="margin-bottom: 0.5rem;">He will appear as an enemy during the Leda gank fight in Enir-Ilim. Loot his heavy armor afterwards.</li>
            </ol>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #9b59b6; background: rgba(155, 89, 182, 0.05);">
            <h3 style="margin-bottom: 0.2rem; color: #9b59b6; font-size: 1.5rem;">Dryleaf Dane</h3>
            <p style="font-size: 0.9rem; color: var(--gold); margin-bottom: 1rem;">Reward: Dryleaf Arts (Hand-to-hand weapon)</p>
            <ol style="font-size: 0.95rem; color: var(--text-dim); padding-left: 1.2rem; line-height: 1.6;">
              <li style="margin-bottom: 0.5rem;">Find the "Monk's Missive" item and the "May the Best Win" gesture at the Highroad Cross grace.</li>
              <li style="margin-bottom: 0.5rem;">Travel to Moorth Ruins. You will see Dane standing silently.</li>
              <li style="margin-bottom: 0.5rem;">Stand in front of him and perform the <strong>"May the Best Win" gesture</strong> to trigger a duel.</li>
              <li style="margin-bottom: 0.5rem;">Defeat him to get the Dryleaf Arts and his hat. He will also appear at the final gank fight in Enir-Ilim.</li>
            </ol>
          </div>

        </div>
      </section>

    </main>
  </div>
</div>

<?php 
// 4. Load the footer
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>