<?php 
// 1. Identify the parent game for the "smart" header button
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];

// 2. Define SEO data for this page
$pageTitle = "Bestiary and Boss Weaknesses — Elden Ring | GuideVault";
$pageDesc = "Discover all the weaknesses, resistances, immunities, and strategies to defeat Demigods, Dragons, and elite enemies in Elden Ring.";

// 3. Load the centralized global header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<div class="theme-elden-ring">
  
  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(138, 43, 226, 0.15) 0%, transparent 65%), linear-gradient(180deg, #0a0a0c 0%, #111115 60%, #0a0a0c 100%);"></div>
    <div class="guide-hero-pattern"></div>
    <div class="guide-hero-inner">
      
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/elden-ring/index.php" style="color: rgba(255,255,255,0.7); transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Elden Ring</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span style="color: var(--gold);">Bestiary</span>
      </nav>

      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: #fff; text-shadow: 0 0 20px rgba(138, 43, 226, 0.4);">IMPERIAL BESTIARY</h1>
      <p class="guide-hero-subtitle" style="color: #A29BFE;">Know your enemy: Weaknesses, Resistances, and Strategies</p>
    </div>
  </header>

  <div class="guide-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem; font-family: var(--font-display);">Classification</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#semidioses" style="color: var(--text-dim); transition: color 0.2s;">1. Demigods (Shardbearers)</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#dragones" style="color: var(--text-dim); transition: color 0.2s;">2. Ancient Dragons</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#mundo" style="color: var(--text-dim); transition: color 0.2s;">3. Open World Bosses</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#elite" style="color: var(--text-dim); transition: color 0.2s;">4. Elite Enemies</a></li>
        </ul>
    </aside>

    <main class="guide-content">
        <p class="guide-section-intro reveal" style="margin-bottom: 3rem;">
            In the Lands Between, attacking blindly rarely works. Use this database to prepare your equipment before crossing the fog. <strong>Note:</strong> Affinities marked in green indicate massive extra damage (fatal weakness).
        </p>

      <section class="guide-section reveal" id="semidioses" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">1. Demigods and Shardbearers</h2>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: 1fr; gap: 1.5rem; margin-top: 2rem;">
          
          <div class="guide-card-item reveal" style="border-left: 4px solid #e67e22; background: rgba(255,255,255,0.02); display: flex; flex-wrap: wrap; gap: 1.5rem;">
            <div style="flex: 1 1 300px;">
                <h3 style="font-size: 1.8rem; margin-bottom: 0.5rem;">Godrick the Grafted</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Location: Stormveil Castle</p>
                <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 1rem;">
                    <span class="pill" style="background: rgba(46, 204, 113, 0.2); color: #2ecc71; border: 1px solid #2ecc71;">Weakness: Strike</span>
                    <span class="pill" style="background: rgba(46, 204, 113, 0.2); color: #2ecc71; border: 1px solid #2ecc71;">Weakness: Hemorrhage (Bleed)</span>
                    <span class="pill" style="background: rgba(231, 76, 60, 0.2); color: #e74c3c; border: 1px solid #e74c3c;">Resistance: Holy</span>
                </div>
                <p><strong>Strategy:</strong> His attacks are very wide but leave his back completely exposed. Roll forward (through his arms) instead of backward. In phase 2, when he uses the dragon's fire breath, run diagonally towards him for a free punish.</p>
            </div>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #3498db; background: rgba(255,255,255,0.02); display: flex; flex-wrap: wrap; gap: 1.5rem;">
            <div style="flex: 1 1 300px;">
                <h3 style="font-size: 1.8rem; margin-bottom: 0.5rem;">Rennala, Queen of the Full Moon</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Location: Academy of Raya Lucaria</p>
                <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 1rem;">
                    <span class="pill" style="background: rgba(46, 204, 113, 0.2); color: #2ecc71; border: 1px solid #2ecc71;">Weakness: Physical (Strike Damage)</span>
                    <span class="pill" style="background: rgba(231, 76, 60, 0.2); color: #e74c3c; border: 1px solid #e74c3c;">Strong Resistance: Magic (80%)</span>
                </div>
                <p><strong>Strategy:</strong> If you are a sorcerer, swap your staff for a physical weapon, as Rennala resists 80% of all magic damage. In her second phase, stay incredibly aggressive: she has no armor or "Poise", so you can stunlock her with light attacks and prevent her from casting spells or summons.</p>
            </div>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #9b59b6; background: rgba(255,255,255,0.02); display: flex; flex-wrap: wrap; gap: 1.5rem;">
            <div style="flex: 1 1 300px;">
                <h3 style="font-size: 1.8rem; margin-bottom: 0.5rem;">Starscourge Radahn</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Location: Redmane Castle, Caelid</p>
                <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 1rem;">
                    <span class="pill" style="background: rgba(46, 204, 113, 0.2); color: #2ecc71; border: 1px solid #2ecc71;">Weakness: Pierce</span>
                    <span class="pill" style="background: rgba(46, 204, 113, 0.2); color: #2ecc71; border: 1px solid #2ecc71;">Fatal: Scarlet Rot</span>
                    <span class="pill" style="background: rgba(231, 76, 60, 0.2); color: #e74c3c; border: 1px solid #e74c3c;">Resistance: Holy Magic</span>
                </div>
                <p><strong>Strategy:</strong> Radahn has a massive health and stamina pool, but his true downfall is Scarlet Rot. A single proc of "Rotten Breath" (Dragon Incantation) will consume a huge chunk of his health bar while you ride Torrent to summon the festival NPCs.</p>
            </div>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #f1c40f; background: rgba(255,255,255,0.02); display: flex; flex-wrap: wrap; gap: 1.5rem;">
            <div style="flex: 1 1 300px;">
                <h3 style="font-size: 1.8rem; margin-bottom: 0.5rem;">Morgott, the Omen King</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Location: Leyndell, Royal Capital</p>
                <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 1rem;">
                    <span class="pill" style="background: rgba(46, 204, 113, 0.2); color: #2ecc71; border: 1px solid #2ecc71;">Weakness: Slash / Lightning</span>
                    <span class="pill" style="background: rgba(231, 76, 60, 0.2); color: #e74c3c; border: 1px solid #e74c3c;">Resistance: Holy</span>
                </div>
                <p><strong>Strategy:</strong> Morgott is extremely agile. Use the "Margit's Shackle" item in the first phase to pin him down twice and apply status effects like Poison or Scarlet Rot, to which he is very vulnerable.</p>
            </div>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #c0392b; background: rgba(255,255,255,0.02); display: flex; flex-wrap: wrap; gap: 1.5rem;">
            <div style="flex: 1 1 300px;">
                <h3 style="font-size: 1.8rem; margin-bottom: 0.5rem;">Mohg, Lord of Blood</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Location: Mohgwyn Palace</p>
                <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 1rem;">
                    <span class="pill" style="background: rgba(46, 204, 113, 0.2); color: #2ecc71; border: 1px solid #2ecc71;">Paradox: Weak to Bleed</span>
                    <span class="pill" style="background: rgba(241, 196, 15, 0.2); color: #f1c40f; border: 1px solid #f1c40f;">Tool: Purifying Crystal Tear</span>
                    <span class="pill" style="background: rgba(231, 76, 60, 0.2); color: #e74c3c; border: 1px solid #e74c3c;">Resistance: Fire</span>
                </div>
                <p><strong>Strategy:</strong> Ironically, the Lord of Blood is extremely weak to rapid hemorrhage buildup. Use "Mohg's Shackle" in phase 1. For the phase 2 transition, you MUST have the Purifying Crystal Tear equipped in your Flask of Wondrous Physick to block his lethal "Nihil" curse.</p>
            </div>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #2c3e50; background: rgba(255,255,255,0.02); display: flex; flex-wrap: wrap; gap: 1.5rem;">
            <div style="flex: 1 1 300px;">
                <h3 style="font-size: 1.8rem; margin-bottom: 0.5rem;">Maliketh, the Black Blade</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Location: Crumbling Farum Azula</p>
                <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 1rem;">
                    <span class="pill" style="background: rgba(46, 204, 113, 0.2); color: #2ecc71; border: 1px solid #2ecc71;">Weakness: Physical Damage (Low Health)</span>
                    <span class="pill" style="background: rgba(241, 196, 15, 0.2); color: #f1c40f; border: 1px solid #f1c40f;">Tool: Blasphemous Claw</span>
                    <span class="pill" style="background: rgba(231, 76, 60, 0.2); color: #e74c3c; border: 1px solid #e74c3c;">Resistance: Holy (80%)</span>
                </div>
                <p><strong>Strategy:</strong> In phase 1 (Beast Clergyman), stay close and roll towards him. In phase 2, his sword reduces your maximum health. Use the special item "Blasphemous Claw" just as his sword glows bright gold in the air to perform a special parry that will leave him stunned for a long time.</p>
            </div>
          </div>

          <div class="guide-card-item reveal" style="border-left: 4px solid #e74c3c; background: rgba(255,255,255,0.02); display: flex; flex-wrap: wrap; gap: 1.5rem;">
            <div style="flex: 1 1 300px;">
                <h3 style="font-size: 1.8rem; margin-bottom: 0.5rem;">Malenia, Blade of Miquella</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Location: Elphael, Brace of the Haligtree</p>
                <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 1rem;">
                    <span class="pill" style="background: rgba(46, 204, 113, 0.2); color: #2ecc71; border: 1px solid #2ecc71;">Weakness: Fire</span>
                    <span class="pill" style="background: rgba(46, 204, 113, 0.2); color: #2ecc71; border: 1px solid #2ecc71;">Fatal: Bleed and Frostbite</span>
                    <span class="pill" style="background: rgba(231, 76, 60, 0.2); color: #e74c3c; border: 1px solid #e74c3c;">Immune: Scarlet Rot</span>
                </div>
                <p><strong>Strategy:</strong> Malenia heals with EVERY hit she lands, even if you block with a shield. Forget shields and opt for dual-wielding weapons with Bleed or Frostbite. Her poise is very low; jump attacks with colossal weapons will interrupt her. Use "Freezing Pots" to cancel her Waterfowl Dance attack while she charges it in the air.</p>
            </div>
          </div>

        </div>
      </section>

      <section class="guide-section reveal" id="dragones" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">2. Dragons and Dragonlords</h2>
        <p style="margin-bottom: 1.5rem;">As a general rule, the weak point of ALL dragons is their head (150% damage). The legs are the safest target, but will take reduced damage.</p>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Dragon Name</th>
                <th>Location</th>
                <th>Main Weakness</th>
                <th>Resistances / Immunities</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Flying Dragon Agheel</strong></td>
                <td>Limgrave Lake</td>
                <td><span style="color: #2ecc71;">Pierce, Lightning</span></td>
                <td>Fire (High)</td>
              </tr>
              <tr>
                <td><strong>Glintstone Dragon Smarag</strong></td>
                <td>Liurnia of the Lakes</td>
                <td><span style="color: #2ecc71;">General Physical, Fire</span></td>
                <td>Magic (Extreme)</td>
              </tr>
              <tr>
                <td><strong>Decaying Ekzykes</strong></td>
                <td>Caelid (South)</td>
                <td><span style="color: #2ecc71;">Fire</span></td>
                <td>Scarlet Rot (Immune)</td>
              </tr>
              <tr>
                <td><strong>Borealis the Freezing Fog</strong></td>
                <td>Mountaintops of the Giants</td>
                <td><span style="color: #2ecc71;">Strike Attacks, Bleed</span></td>
                <td>Frostbite (Immune), Slash</td>
              </tr>
              <tr>
                <td><strong>Fortissax / Lansseax</strong></td>
                <td>Deeproot Depths / Altus Plateau</td>
                <td><span style="color: #2ecc71;">Pierce (to the head)</span></td>
                <td>Lightning (80% Immunity), Holy</td>
              </tr>
              <tr>
                <td><strong>Dragonlord Placidusax</strong></td>
                <td>Crumbling Farum Azula (Secret)</td>
                <td><span style="color: #2ecc71;">Pure Pierce to the head</span></td>
                <td>Immune to ALL status effects</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="mundo" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">3. Open World Bosses</h2>
        
        <div class="guide-table-wrap reveal">
          <table class="guide-table">
            <thead>
              <tr>
                <th>Boss Type</th>
                <th>Lethal Element (Weakness)</th>
                <th>Recommended Strategy</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Erdtree Avatar</strong><br><span style="font-size:0.8rem; color:#888;">Near Minor Erdtrees</span></td>
                <td>🔥 <strong>Fire</strong></td>
                <td>Any source of fire damage (pots, fire grease, or spells) will melt their health bar. Stay behind them to dodge their slow sweeps.</td>
              </tr>
              <tr>
                <td><strong>Deathbird / Death Rite Bird</strong><br><span style="font-size:0.8rem; color:#888;">Only appear at night</span></td>
                <td>✨ <strong>Holy</strong></td>
                <td>Holy damage deals a monumental <strong>+400% extra damage</strong> to them. Throwing "Holy Water Pots" at their head will almost kill them in one hit.</td>
              </tr>
              <tr>
                <td><strong>Night's Cavalry</strong><br><span style="font-size:0.8rem; color:#888;">Patrolling bridges (Night)</span></td>
                <td>⚡ <strong>Lightning</strong></td>
                <td>Their true weakness is the mount. If you manage to kill their horse, the rider will fall to the ground and be exposed to a devastating critical attack.</td>
              </tr>
              <tr>
                <td><strong>Bell Bearing Hunter</strong><br><span style="font-size:0.8rem; color:#888;">Isolated Shacks (Night)</span></td>
                <td>🛡️ <strong>Parry</strong></td>
                <td>They are lethal at range thanks to their flying sword. The best technique is to stick close to them in melee and Parry their slow horizontal swings.</td>
              </tr>
              <tr>
                <td><strong>Godskin Duo (Apostle/Noble)</strong><br><span style="font-size:0.8rem; color:#888;">Divine Tower of Caelid / Volcano Manor</span></td>
                <td>💤 <strong>Sleep and Bleed</strong></td>
                <td>They have a severe weakness to sleep magic. A couple of "Sleep Pots" will put them into a deep slumber, allowing you to attack them for free or kill them one by one without interference.</td>
              </tr>
              <tr>
                <td><strong>Fallingstar Beast</strong><br><span style="font-size:0.8rem; color:#888;">Craters on the map</span></td>
                <td>☄️ <strong>Magic and Fire</strong></td>
                <td>Its stone body resists physical damage (especially slash). Hit the white area/eye on its head to deal massive damage and stagger it quickly.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="guide-section reveal" id="elite" style="margin-bottom: 4rem;">
        <h2 class="guide-section-title" style="color: var(--gold); border-bottom: 1px solid rgba(212, 175, 55, 0.2); padding-bottom: 0.5rem;">4. Elite and Annoying Enemies</h2>
        
        <div class="guide-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
          
          <div class="guide-card-item reveal">
            <h3>Royal Revenants</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Those multi-armed horrors that teleport, scream, and unleash a lethal combo on you.</p>
            <ul style="padding-left: 1.2rem; font-size: 0.9rem; color: var(--text-dim);">
                <li><strong>Fatal:</strong> 🌟 AoE Healing (Heal).</li>
                <li><strong>Strategy:</strong> Casting any AoE healing incantation near them instantly drains 50% of their maximum health and stuns them. Two heals will always kill them.</li>
            </ul>
          </div>

          <div class="guide-card-item reveal">
            <h3>Runebears</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Every player's nightmare in the woods. They have more health than many bosses.</p>
            <ul style="padding-left: 1.2rem; font-size: 0.9rem; color: var(--text-dim);">
                <li><strong>Fatal:</strong> Sleep Magic (Sleep Pots or St. Trina's Arrows put them to sleep instantly).</li>
                <li><strong>Strategy:</strong> If you fight, ALWAYS roll towards their stomach. If you back away, they will charge you mercilessly.</li>
            </ul>
          </div>

          <div class="guide-card-item reveal">
            <h3>Finger Creepers</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Those creepy hands in Caria Manor that drop from the ceiling or emerge from the ground.</p>
            <ul style="padding-left: 1.2rem; font-size: 0.9rem; color: var(--text-dim);">
                <li><strong>Fatal:</strong> Fire (Any type of burn).</li>
                <li><strong>Strategy:</strong> Upon taking fire damage (even from a torch), they will be paralyzed on the ground, writhing in pain for several seconds, leaving them completely vulnerable.</li>
            </ul>
          </div>

          <div class="guide-card-item reveal">
            <h3>Crucible Knights</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">They possess unbreakable shields, infinite combos, and do not flinch from your attacks.</p>
            <ul style="padding-left: 1.2rem; font-size: 0.9rem; color: var(--text-dim);">
                <li><strong>Immunities:</strong> Completely immune to Hemorrhage (Bleed) and Frostbite.</li>
                <li><strong>Fatal:</strong> Parry (with a small shield) and Lightning. Never attack them if their shield is raised.</li>
            </ul>
          </div>

          <div class="guide-card-item reveal" style="grid-column: 1 / -1;">
            <h3>Abductor Virgins (Iron Virgins)</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1rem;">Rolling torture machines with blades or pendulums found in Volcano Manor.</p>
            <ul style="padding-left: 1.2rem; font-size: 0.9rem; color: var(--text-dim);">
                <li><strong>Fatal:</strong> Continuous Lightning can stun them.</li>
                <li><strong>Massive Weak Spot:</strong> The doors on their stomach hide a being of flesh. If you hit right when they open their doors to try and devour you, they will take more than triple damage.</li>
            </ul>
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