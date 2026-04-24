<?php 
// 1. Identify the parent game for the "smart" header button
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];

// 2. Define SEO data for this page
$pageTitle = "Divine Towers & Great Runes Guide — Elden Ring | GuideVault";
$pageDesc = "Locate all Divine Towers in Elden Ring to restore the power of the Great Runes. Interactive checklist to track your progress.";

// 3. Load the centralized global header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<style>
  /* Checklist Styles */
  .checklist-progress-container { background: rgba(255,255,255,0.05); padding: 1.5rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); margin-bottom: 2rem; text-align: center; position: sticky; top: calc(var(--nav-h) + 1rem); z-index: 10; backdrop-filter: blur(10px); }
  .progress-bar-bg { width: 100%; height: 12px; background: rgba(255,255,255,0.1); border-radius: 6px; margin-top: 10px; overflow: hidden; }
  .progress-bar-fill { height: 100%; background: #D4AF37; width: 0%; transition: width 0.5s cubic-bezier(0.4, 0, 0.2, 1); } /* Gold bar for Great Runes */
  
  .check-card { display: flex; align-items: flex-start; gap: 15px; background: rgba(255,255,255,0.02); padding: 1.5rem; border-radius: 8px; border-left: 4px solid var(--text-dim); transition: all 0.3s ease; margin-bottom: 1rem; cursor: pointer; }
  .check-card:hover { background: rgba(255,255,255,0.05); transform: translateX(5px); }
  .check-card.completed { border-left-color: #D4AF37; opacity: 0.7; background: rgba(212, 175, 55, 0.05); }
  .check-card.completed h3 { text-decoration: line-through; color: #888; }
  
  .check-input { width: 24px; height: 24px; accent-color: #D4AF37; cursor: pointer; margin-top: 4px; flex-shrink: 0; }
  .check-content { flex: 1; }
  .check-content h3 { margin: 0 0 0.5rem 0; font-size: 1.3rem; color: #fff; transition: all 0.3s; }
  .check-content p { margin: 0; font-size: 0.9rem; color: var(--text-dim); }
  .reward-tag { display: inline-block; margin-top: 10px; padding: 3px 10px; font-size: 0.8rem; background: rgba(212, 175, 55, 0.1); color: var(--gold); border-radius: 4px; border: 1px solid rgba(212, 175, 55, 0.3); }
</style>

<div class="theme-elden-ring">
  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(212, 175, 55, 0.15) 0%, transparent 65%), linear-gradient(180deg, #0a0a0c 0%, #111115 60%, #0a0a0c 100%);"></div>
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/elden-ring/index.php" style="color: rgba(255,255,255,0.7); transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Elden Ring</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span style="color: var(--gold);">Divine Towers</span>
      </nav>
      <h1 class="guide-hero-title">Divine Towers</h1>
      <p class="guide-hero-subtitle">Checklist: Activate all 6 Demigod Great Runes</p>
    </div>
  </header>

  <div class="guide-layout">
    <aside class="guide-toc desktop-toc">
        <div class="guide-toc-title" style="color: var(--gold);">The Towers</div>
        <ul class="guide-toc-list">
            <li class="guide-toc-item"><a href="#limgrave">Divine Tower of Limgrave</a></li>
            <li class="guide-toc-item"><a href="#liurnia">Divine Tower of Liurnia</a></li>
            <li class="guide-toc-item"><a href="#caelid">Divine Tower of Caelid</a></li>
            <li class="guide-toc-item"><a href="#altus">Altus Divine Towers</a></li>
            <li class="guide-toc-item"><a href="#isolated">Isolated Divine Tower</a></li>
        </ul>
    </aside>

    <main class="guide-content" id="checklist-container">
      
      <p class="guide-section-intro reveal" style="margin-bottom: 2rem;">
        After defeating a Demigod, their Great Rune loses its power. You must physically take it to the top of its corresponding Divine Tower to awaken it. Use a <strong>Rune Arc</strong> to benefit from its effects until you die.
      </p>

      <div class="checklist-progress-container reveal">
          <h3 style="margin:0 0 10px 0; color: #fff;">Completed Divine Towers: <span id="progress-text" style="color: #D4AF37;">0/6</span></h3>
          <p style="margin:0; font-size: 0.85rem; color: #aaa;">Your progress is automatically saved to your browser's local storage.</p>
          <div class="progress-bar-bg">
              <div class="progress-bar-fill" id="progress-bar"></div>
          </div>
      </div>

      <section class="guide-section reveal" id="limgrave">
        <label class="check-card" for="dt-1">
          <input type="checkbox" id="dt-1" class="check-input local-save" data-group="towers">
          <div class="check-content">
            <h3>Divine Tower of Limgrave</h3>
            <p><strong>How to reach:</strong> Enter through the main gate of Stormveil Castle (or via the Lion Guardian courtyard), cross the bridge filled with giant Golems, and use the teleporter at the end.</p>
            <span class="reward-tag">Godrick's Great Rune: Raises all attributes by +5.</span>
          </div>
        </label>
      </section>

      <section class="guide-section reveal" id="liurnia">
        <label class="check-card" for="dt-2">
          <input type="checkbox" id="dt-2" class="check-input local-save" data-group="towers">
          <div class="check-content">
            <h3>Divine Tower of Liurnia</h3>
            <p><strong>How to reach:</strong> Accessed from the Carian Study Hall. To reach the top, you need the "Carian Inverted Statue" given by Ranni halfway through her questline to invert the entire building.</p>
            <span class="reward-tag">Cursemark of Death: Necessary for Fia's ending (Does not grant an equippable Great Rune).</span>
          </div>
        </label>
      </section>

      <section class="guide-section reveal" id="caelid">
        <label class="check-card" for="dt-3">
          <input type="checkbox" id="dt-3" class="check-input local-save" data-group="towers">
          <div class="check-content">
            <h3>Divine Tower of Caelid</h3>
            <p><strong>How to reach:</strong> You have to parkour along the outer roots of the tower (in northern Caelid) and climb the ledges to enter. Beware of the strong soldiers and the platforming puzzle inside.</p>
            <span class="reward-tag">Radahn's Great Rune: Raises maximum HP, FP, and Stamina.</span>
          </div>
        </label>
      </section>

      <section class="guide-section reveal" id="altus">
        <label class="check-card" for="dt-4">
          <input type="checkbox" id="dt-4" class="check-input local-save" data-group="towers">
          <div class="check-content">
            <h3>Divine Tower of East Altus</h3>
            <p><strong>How to reach:</strong> Leave Leyndell through the east gate (after fighting the boss on the outskirts). Take the large elevator towards the Mountaintops of the Giants and exit through the right door instead of going north.</p>
            <span class="reward-tag">Morgott's Great Rune: Greatly raises maximum HP (25%) / Mohg's Great Rune: Grants a blessing of blood to summoned phantoms.</span>
          </div>
        </label>

        <label class="check-card" for="dt-5">
          <input type="checkbox" id="dt-5" class="check-input local-save" data-group="towers">
          <div class="check-content">
            <h3>Divine Tower of West Altus</h3>
            <p><strong>How to reach:</strong> Find the "Sealed Tunnel" near the moat outside Leyndell (south). Defeat the Onyx Lord boss at the end to exit to the courtyard where the tower's door is located.</p>
            <span class="reward-tag">Rykard's Great Rune: Restores HP upon defeating enemies.</span>
          </div>
        </label>
      </section>

      <section class="guide-section reveal" id="isolated">
        <label class="check-card" for="dt-6">
          <input type="checkbox" id="dt-6" class="check-input local-save" data-group="towers">
          <div class="check-content">
            <h3>Isolated Divine Tower</h3>
            <p><strong>How to reach:</strong> You must use the transporter trap chest located at the top of the Tower of Return (in the Weeping Peninsula). This will take you to Leyndell. Touch the stone portal to the left of the sleeping Giant Golem.</p>
            <span class="reward-tag">Malenia's Great Rune: Attacks recover HP if you strike immediately after taking damage (Bloodborne-style rally mechanic).</span>
          </div>
        </label>
      </section>

    </main>
  </div>
</div>

<script>
// LocalStorage and Progress Bar Logic
document.addEventListener('DOMContentLoaded', () => {
    const checkboxes = document.querySelectorAll('.local-save[data-group="towers"]');
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
    }

    // 1. Load saved data (Using prefix 'gv_dt_' to avoid conflicts)
    checkboxes.forEach(chk => {
        const savedState = localStorage.getItem('gv_dt_' + chk.id);
        if (savedState === 'true') {
            chk.checked = true;
        }
        
        // 2. Listen for changes
        chk.addEventListener('change', function() {
            localStorage.setItem('gv_dt_' + this.id, this.checked);
            updateProgress();
        });
    });

    // Initialize visually
    updateProgress();
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>