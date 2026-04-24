<?php 
// 1. Identify the parent game for the "smart" header button
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];

// 2. Define SEO data for this page
$pageTitle = "Trophy & 100% Completion Checklist — Elden Ring | GuideVault";
$pageDesc = "The ultimate 100% completion checklist for Elden Ring. Track your progress for all 42 achievements, legendary items, and endings.";

// 3. Load the centralized global header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<style>
  /* Checklist Styles */
  .checklist-progress-container { background: rgba(255,255,255,0.05); padding: 1.5rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); margin-bottom: 2rem; text-align: center; position: sticky; top: calc(var(--nav-h) + 1rem); z-index: 10; backdrop-filter: blur(10px); }
  .progress-bar-bg { width: 100%; height: 12px; background: rgba(255,255,255,0.1); border-radius: 6px; margin-top: 10px; overflow: hidden; }
  .progress-bar-fill { height: 100%; background: #2ecc71; width: 0%; transition: width 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
  
  .check-card { display: flex; align-items: center; gap: 15px; background: rgba(255,255,255,0.02); padding: 1rem 1.5rem; border-radius: 8px; border-left: 4px solid var(--text-dim); transition: all 0.3s ease; margin-bottom: 0.8rem; cursor: pointer; }
  .check-card:hover { background: rgba(255,255,255,0.05); transform: translateX(5px); }
  .check-card.completed { border-left-color: #2ecc71; opacity: 0.6; background: rgba(46, 204, 113, 0.05); }
  .check-card.completed h3 { text-decoration: line-through; color: #888; }
  
  .check-input { width: 22px; height: 22px; accent-color: #2ecc71; cursor: pointer; flex-shrink: 0; }
  .check-content { flex: 1; }
  .check-content h3 { margin: 0 0 0.2rem 0; font-size: 1.1rem; color: #fff; transition: all 0.3s; }
  .check-content p { margin: 0; font-size: 0.85rem; color: var(--text-dim); }
  .trophy-icon { font-size: 1.5rem; flex-shrink: 0; filter: grayscale(100%); transition: filter 0.3s; }
  .check-card.completed .trophy-icon { filter: grayscale(0%); }
</style>

<div class="theme-elden-ring">
  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(46, 204, 113, 0.15) 0%, transparent 65%), linear-gradient(180deg, #0a0a0c 0%, #111115 60%, #0a0a0c 100%);"></div>
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/elden-ring/index.php" style="color: rgba(255,255,255,0.7);">Elden Ring</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span style="color: #2ecc71;">100% Checklist</span>
      </nav>
      <h1 class="guide-hero-title">100% Completion</h1>
      <p class="guide-hero-subtitle">The Ultimate Trophy & Achievement Tracker (42 Items)</p>
    </div>
  </header>

  <div class="guide-layout">
    <aside class="guide-toc desktop-toc">
        <div class="guide-toc-title" style="color: #2ecc71;">Trophy Categories</div>
        <ul class="guide-toc-list">
            <li class="guide-toc-item"><a href="#endings">1. The Endings (3)</a></li>
            <li class="guide-toc-item"><a href="#legendary">2. Legendary Items (4)</a></li>
            <li class="guide-toc-item"><a href="#shardbearers">3. Shardbearers (7)</a></li>
            <li class="guide-toc-item"><a href="#bosses">4. Major Bosses (26)</a></li>
            <li class="guide-toc-item"><a href="#misc">5. Milestones (2)</a></li>
        </ul>
    </aside>

    <main class="guide-content" id="checklist-container">
      
      <div class="checklist-progress-container reveal">
          <h3 style="margin:0 0 10px 0; color: #fff;">Platinum Progress: <span id="progress-text" style="color: #2ecc71;">0/42</span></h3>
          <p style="margin:0; font-size: 0.85rem; color: #aaa;">Your progress is automatically saved to your browser's local storage.</p>
          <div class="progress-bar-bg">
              <div class="progress-bar-fill" id="progress-bar"></div>
          </div>
      </div>

      <section class="guide-section reveal" id="endings">
        <h2 class="guide-section-title">1. The Endings</h2>
        
        <label class="check-card" for="ach-1">
          <input type="checkbox" id="ach-1" class="check-input local-save" data-group="achievements">
          <div class="trophy-icon">🏆</div>
          <div class="check-content">
            <h3>Elden Lord</h3>
            <p>Achieve the standard "Elden Lord" ending.</p>
          </div>
        </label>
        <label class="check-card" for="ach-2">
          <input type="checkbox" id="ach-2" class="check-input local-save" data-group="achievements">
          <div class="trophy-icon">🏆</div>
          <div class="check-content">
            <h3>Age of the Stars</h3>
            <p>Complete Ranni the Witch's questline and summon her after the final boss.</p>
          </div>
        </label>
        <label class="check-card" for="ach-3">
          <input type="checkbox" id="ach-3" class="check-input local-save" data-group="achievements">
          <div class="trophy-icon">🏆</div>
          <div class="check-content">
            <h3>Lord of Frenzied Flame</h3>
            <p>Inherit the Frenzied Flame deep below Leyndell before finishing the game.</p>
          </div>
        </label>
      </section>

      <section class="guide-section reveal" id="legendary">
        <h2 class="guide-section-title">2. Legendary Collectibles</h2>
        
        <label class="check-card" for="ach-4">
          <input type="checkbox" id="ach-4" class="check-input local-save" data-group="achievements">
          <div class="trophy-icon">🛡️</div>
          <div class="check-content">
            <h3>Legendary Armaments</h3>
            <p>Acquire all 9 Legendary Armaments (Missable: Bolt of Gransax).</p>
          </div>
        </label>
        <label class="check-card" for="ach-5">
          <input type="checkbox" id="ach-5" class="check-input local-save" data-group="achievements">
          <div class="trophy-icon">👻</div>
          <div class="check-content">
            <h3>Legendary Ashen Remains</h3>
            <p>Acquire all 6 Legendary Spirit Ashes (e.g., Mimic Tear, Tiche).</p>
          </div>
        </label>
        <label class="check-card" for="ach-6">
          <input type="checkbox" id="ach-6" class="check-input local-save" data-group="achievements">
          <div class="trophy-icon">📜</div>
          <div class="check-content">
            <h3>Legendary Sorceries and Incantations</h3>
            <p>Acquire all 7 Legendary Spells (e.g., Comet Azur).</p>
          </div>
        </label>
        <label class="check-card" for="ach-7">
          <input type="checkbox" id="ach-7" class="check-input local-save" data-group="achievements">
          <div class="trophy-icon">💍</div>
          <div class="check-content">
            <h3>Legendary Talismans</h3>
            <p>Acquire all 8 Legendary Talismans.</p>
          </div>
        </label>
      </section>

      <section class="guide-section reveal" id="shardbearers">
        <h2 class="guide-section-title">3. Shardbearers</h2>
        
        <label class="check-card" for="ach-8"><input type="checkbox" id="ach-8" class="check-input local-save" data-group="achievements"><div class="trophy-icon">🥇</div><div class="check-content"><h3>Shardbearer Godrick</h3><p>Defeat Godrick the Grafted.</p></div></label>
        <label class="check-card" for="ach-9"><input type="checkbox" id="ach-9" class="check-input local-save" data-group="achievements"><div class="trophy-icon">🥇</div><div class="check-content"><h3>Shardbearer Radahn</h3><p>Defeat Starscourge Radahn.</p></div></label>
        <label class="check-card" for="ach-10"><input type="checkbox" id="ach-10" class="check-input local-save" data-group="achievements"><div class="trophy-icon">🥇</div><div class="check-content"><h3>Shardbearer Morgott</h3><p>Defeat Morgott the Omen King.</p></div></label>
        <label class="check-card" for="ach-11"><input type="checkbox" id="ach-11" class="check-input local-save" data-group="achievements"><div class="trophy-icon">🥇</div><div class="check-content"><h3>Shardbearer Rykard</h3><p>Defeat Rykard, Lord of Blasphemy.</p></div></label>
        <label class="check-card" for="ach-12"><input type="checkbox" id="ach-12" class="check-input local-save" data-group="achievements"><div class="trophy-icon">🥇</div><div class="check-content"><h3>Shardbearer Malenia</h3><p>Defeat Malenia, Blade of Miquella.</p></div></label>
        <label class="check-card" for="ach-13"><input type="checkbox" id="ach-13" class="check-input local-save" data-group="achievements"><div class="trophy-icon">🥇</div><div class="check-content"><h3>Shardbearer Mohg</h3><p>Defeat Mohg, Lord of Blood.</p></div></label>
        <label class="check-card" for="ach-14"><input type="checkbox" id="ach-14" class="check-input local-save" data-group="achievements"><div class="trophy-icon">🥇</div><div class="check-content"><h3>Rennala, Queen of the Full Moon</h3><p>Defeat Rennala at Raya Lucaria.</p></div></label>
      </section>

      <section class="guide-section reveal" id="bosses">
        <h2 class="guide-section-title">4. Major Bosses & Enemies</h2>
        
        <label class="check-card" for="ach-15"><input type="checkbox" id="ach-15" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Maliketh the Black Blade</h3><p>Defeat Maliketh in Farum Azula.</p></div></label>
        <label class="check-card" for="ach-16"><input type="checkbox" id="ach-16" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Hoarah Loux the Warrior</h3><p>Defeat Godfrey / Hoarah Loux in Leyndell.</p></div></label>
        <label class="check-card" for="ach-17"><input type="checkbox" id="ach-17" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Dragonlord Placidusax</h3><p>Defeat Placidusax (Secret Boss in Farum Azula).</p></div></label>
        <label class="check-card" for="ach-18"><input type="checkbox" id="ach-18" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Godskin Duo</h3><p>Defeat the Godskin Duo.</p></div></label>
        <label class="check-card" for="ach-19"><input type="checkbox" id="ach-19" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Fire Giant</h3><p>Defeat the Fire Giant in the Mountaintops.</p></div></label>
        <label class="check-card" for="ach-20"><input type="checkbox" id="ach-20" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Commander Niall</h3><p>Defeat Niall in Castle Sol.</p></div></label>
        <label class="check-card" for="ach-21"><input type="checkbox" id="ach-21" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Margit, the Fell Omen</h3><p>Defeat Margit.</p></div></label>
        <label class="check-card" for="ach-22"><input type="checkbox" id="ach-22" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Red Wolf of Radagon</h3><p>Defeat the Red Wolf in Raya Lucaria.</p></div></label>
        <label class="check-card" for="ach-23"><input type="checkbox" id="ach-23" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Godskin Noble</h3><p>Defeat the Godskin Noble at Volcano Manor.</p></div></label>
        <label class="check-card" for="ach-24"><input type="checkbox" id="ach-24" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Magma Wyrm Makar</h3><p>Defeat Makar in the Ruin-Strewn Precipice.</p></div></label>
        <label class="check-card" for="ach-25"><input type="checkbox" id="ach-25" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Godfrey the First Lord</h3><p>Defeat the Golden Shade version of Godfrey.</p></div></label>
        <label class="check-card" for="ach-26"><input type="checkbox" id="ach-26" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Mohg, the Omen</h3><p>Defeat the illusion of Mohg in the Subterranean Shunning-Grounds.</p></div></label>
        <label class="check-card" for="ach-27"><input type="checkbox" id="ach-27" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Mimic Tear</h3><p>Defeat the Mimic Tear in Nokron.</p></div></label>
        <label class="check-card" for="ach-28"><input type="checkbox" id="ach-28" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Loretta, Knight of the Haligtree</h3><p>Defeat Loretta at the Haligtree.</p></div></label>
        <label class="check-card" for="ach-29"><input type="checkbox" id="ach-29" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Astel, Naturalborn of the Void</h3><p>Defeat Astel (part of Ranni's Quest).</p></div></label>
        <label class="check-card" for="ach-30"><input type="checkbox" id="ach-30" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Leonine Misbegotten</h3><p>Defeat the boss in Castle Morne.</p></div></label>
        <label class="check-card" for="ach-31"><input type="checkbox" id="ach-31" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Royal Knight Loretta</h3><p>Defeat the spirit version of Loretta in Caria Manor.</p></div></label>
        <label class="check-card" for="ach-32"><input type="checkbox" id="ach-32" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Elemer of the Briar</h3><p>Defeat Elemer in The Shaded Castle.</p></div></label>
        <label class="check-card" for="ach-33"><input type="checkbox" id="ach-33" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Ancestor Spirit</h3><p>Defeat the Ancestor Spirit in Siofra River.</p></div></label>
        <label class="check-card" for="ach-34"><input type="checkbox" id="ach-34" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Regal Ancestor Spirit</h3><p>Defeat the Regal Ancestor Spirit in Nokron.</p></div></label>
        <label class="check-card" for="ach-35"><input type="checkbox" id="ach-35" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Commander O'Neil</h3><p>Defeat O'Neil in the Swamp of Aeonia.</p></div></label>
        <label class="check-card" for="ach-36"><input type="checkbox" id="ach-36" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Lichdragon Fortissax</h3><p>Defeat Fortissax (part of Fia's Quest).</p></div></label>
        <label class="check-card" for="ach-37"><input type="checkbox" id="ach-37" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Valiant Gargoyle</h3><p>Defeat the Gargoyle duo in Siofra Aqueduct.</p></div></label>
        <label class="check-card" for="ach-38"><input type="checkbox" id="ach-38" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Godskin Apostle</h3><p>Defeat the Apostle in the Divine Tower of Caelid or Windmill Village.</p></div></label>
        <label class="check-card" for="ach-39"><input type="checkbox" id="ach-39" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>Dragonkin Soldier of Nokstella</h3><p>Defeat the Dragonkin Soldier in Ainsel River.</p></div></label>
        <label class="check-card" for="ach-40"><input type="checkbox" id="ach-40" class="check-input local-save" data-group="achievements"><div class="trophy-icon">⚔️</div><div class="check-content"><h3>God-Devouring Serpent</h3><p>Defeat the first phase of Rykard.</p></div></label>
      </section>

      <section class="guide-section reveal" id="misc">
        <h2 class="guide-section-title">5. Milestones</h2>
        
        <label class="check-card" for="ach-41">
          <input type="checkbox" id="ach-41" class="check-input local-save" data-group="achievements">
          <div class="trophy-icon">🔥</div>
          <div class="check-content">
            <h3>Erdtree Aflame</h3>
            <p>Use the Forge of the Giants to set the Erdtree on fire.</p>
          </div>
        </label>
        <label class="check-card" for="ach-42">
          <input type="checkbox" id="ach-42" class="check-input local-save" data-group="achievements">
          <div class="trophy-icon">🔆</div>
          <div class="check-content">
            <h3>Great Rune</h3>
            <p>Restore the power of any Great Rune at a Divine Tower.</p>
          </div>
        </label>
      </section>

    </main>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const checkboxes = document.querySelectorAll('.local-save[data-group="achievements"]');
    const progressBar = document.getElementById('progress-bar');
    const progressText = document.getElementById('progress-text');
    const total = checkboxes.length;

    function updateProgress() {
        let checkedCount = 0;
        checkboxes.forEach(chk => {
            const card = chk.closest('.check-card');
            if (chk.checked) {
                checkedCount++;
                card.classList.add('completed');
            } else {
                card.classList.remove('completed');
            }
        });
        const percentage = (checkedCount / total) * 100;
        progressBar.style.width = percentage + '%';
        progressText.textContent = `${checkedCount}/${total}`;
        
        // Efecto si llegas al 100%
        if (checkedCount === total) {
            progressBar.style.background = '#D4AF37'; // Cambia a dorado
            progressText.style.color = '#D4AF37';
            progressText.textContent = '42/42 - PLATINUM UNLOCKED!';
        } else {
            progressBar.style.background = '#2ecc71';
            progressText.style.color = '#2ecc71';
        }
    }

    checkboxes.forEach(chk => {
        const savedState = localStorage.getItem('gv_ach_' + chk.id);
        if (savedState === 'true') {
            chk.checked = true;
        }
        
        chk.addEventListener('change', function() {
            localStorage.setItem('gv_ach_' + this.id, this.checked);
            updateProgress();
        });
    });

    updateProgress();
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>