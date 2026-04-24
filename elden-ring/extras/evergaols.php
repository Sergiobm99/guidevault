<?php 
// 1. Identificamos el juego padre
$parentGuide = [
    'name' => 'Elden Ring',
    'url'  => '/elden-ring/index.php'
];

// 2. SEO
$pageTitle = "Checklist de Cárceles Eternas (Evergaols) — Elden Ring | GuideVault";
$pageDesc = "Encuentra y derrota a todos los jefes ocultos en las Cárceles Eternas de Elden Ring. Guarda tu progreso con nuestro checklist interactivo.";

// 3. Header
include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

<style>
  /* Estilos únicos para el Checklist */
  .checklist-progress-container { background: rgba(255,255,255,0.05); padding: 1.5rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); margin-bottom: 2rem; text-align: center; }
  .progress-bar-bg { width: 100%; height: 10px; background: rgba(255,255,255,0.1); border-radius: 5px; margin-top: 10px; overflow: hidden; }
  .progress-bar-fill { height: 100%; background: #2ecc71; width: 0%; transition: width 0.4s ease; }
  
  .check-card { display: flex; align-items: flex-start; gap: 15px; background: rgba(255,255,255,0.02); padding: 1.5rem; border-radius: 8px; border-left: 4px solid var(--text-dim); transition: all 0.3s ease; margin-bottom: 1rem; }
  .check-card:hover { background: rgba(255,255,255,0.05); }
  .check-card.completed { border-left-color: #2ecc71; opacity: 0.7; }
  .check-card.completed h3 { text-decoration: line-through; color: #888; }
  
  .check-input { width: 24px; height: 24px; accent-color: #2ecc71; cursor: pointer; margin-top: 4px; flex-shrink: 0; }
  .check-content { flex: 1; }
  .check-content h3 { margin: 0 0 0.5rem 0; font-size: 1.3rem; color: #fff; transition: all 0.3s; }
  .check-content p { margin: 0; font-size: 0.9rem; color: var(--text-dim); }
  .reward-tag { display: inline-block; margin-top: 10px; padding: 3px 10px; font-size: 0.8rem; background: rgba(212, 175, 55, 0.1); color: var(--gold); border-radius: 4px; border: 1px solid rgba(212, 175, 55, 0.3); }
</style>

<div class="theme-elden-ring">
  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(138, 43, 226, 0.15) 0%, transparent 65%), linear-gradient(180deg, #0a0a0c 0%, #111115 60%, #0a0a0c 100%);"></div>
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/elden-ring/index.php" style="color: rgba(255,255,255,0.7);">Elden Ring</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span style="color: var(--gold);">Evergaols Checklist</span>
      </nav>
      <h1 class="guide-hero-title">Cárceles Eternas</h1>
      <p class="guide-hero-subtitle">Checklist interactivo: 11 prisiones de jefes ocultos</p>
    </div>
  </header>

  <div class="guide-layout">
    <aside class="guide-toc desktop-toc">
        <div class="guide-toc-title" style="color: var(--gold);">Regiones</div>
        <ul class="guide-toc-list">
            <li class="guide-toc-item"><a href="#limgrave">1. Necrolimbo y Península</a></li>
            <li class="guide-toc-item"><a href="#liurnia">2. Liurnia de los Lagos</a></li>
            <li class="guide-toc-item"><a href="#caelid">3. Caelid</a></li>
            <li class="guide-toc-item"><a href="#altus">4. Altus y Picos</a></li>
        </ul>
    </aside>

    <main class="guide-content" id="checklist-container">
      
      <div class="checklist-progress-container reveal">
          <h3 style="margin:0 0 10px 0; color: #fff;">Tu Progreso de Cárceles: <span id="progress-text" style="color: #2ecc71;">0/11</span></h3>
          <p style="margin:0; font-size: 0.85rem; color: #aaa;">El progreso se guarda automáticamente en tu navegador.</p>
          <div class="progress-bar-bg">
              <div class="progress-bar-fill" id="progress-bar"></div>
          </div>
      </div>

      <section class="guide-section reveal" id="limgrave">
        <h2 class="guide-section-title">Necrolimbo y Península del Llanto</h2>
        
        <label class="check-card" for="eg-1">
          <input type="checkbox" id="eg-1" class="check-input local-save" data-group="evergaols">
          <div class="check-content">
            <h3>Cárcel del Sabueso Desolado</h3>
            <p><strong>Jefe:</strong> Caballero Sabueso Darriwil. Puedes invocar a Blaidd si hablaste con él antes.</p>
            <span class="reward-tag">Recompensa: Colmillo de Sabueso (Espada curva)</span>
          </div>
        </label>

        <label class="check-card" for="eg-2">
          <input type="checkbox" id="eg-2" class="check-input local-save" data-group="evergaols">
          <div class="check-content">
            <h3>Cárcel de la Colina Tormentosa</h3>
            <p><strong>Jefe:</strong> Caballero del Crisol. Una excelente prueba para practicar parrys al inicio del juego.</p>
            <span class="reward-tag">Recompensa: Aspecto del Crisol: Cola (Encantamiento)</span>
          </div>
        </label>

        <label class="check-card" for="eg-3">
          <input type="checkbox" id="eg-3" class="check-input local-save" data-group="evergaols">
          <div class="check-content">
            <h3>Cárcel del Llanto</h3>
            <p><strong>Jefe:</strong> Antiguo Héroe de Zamor. Requiere una Llave Espada Pétrea para entrar. Débil al fuego.</p>
            <span class="reward-tag">Recompensa: Sello de Radagon (Talismán)</span>
          </div>
        </label>
      </section>

      <section class="guide-section reveal" id="liurnia">
        <h2 class="guide-section-title">Liurnia de los Lagos</h2>
        
        <label class="check-card" for="eg-4">
          <input type="checkbox" id="eg-4" class="check-input local-save" data-group="evergaols">
          <div class="check-content">
            <h3>Cárcel del Malhechor</h3>
            <p><strong>Jefe:</strong> Adan, Ladrón de Fuego. Se encuentra justo después de pasar el Castillo de Velo Tormentoso.</p>
            <span class="reward-tag">Recompensa: Llama del Dios Caído (Encantamiento)</span>
          </div>
        </label>

        <label class="check-card" for="eg-5">
          <input type="checkbox" id="eg-5" class="check-input local-save" data-group="evergaols">
          <div class="check-content">
            <h3>Cárcel del Cuco</h3>
            <p><strong>Jefe:</strong> Bols, Caballero Cariano. Un gigante troll que usa magia de hojas refulgentes.</p>
            <span class="reward-tag">Recompensa: Gran Espada de Hoja Refulgente (Hechizo)</span>
          </div>
        </label>

        <label class="check-card" for="eg-6">
          <input type="checkbox" id="eg-6" class="check-input local-save" data-group="evergaols">
          <div class="check-content">
            <h3>Cárcel de la Tumba Real</h3>
            <p><strong>Jefe:</strong> Señor de Alabastro. Ubicado al este de la Mansión Caria.</p>
            <span class="reward-tag">Recompensa: Meteorito (Hechizo)</span>
          </div>
        </label>

        <label class="check-card" for="eg-7">
          <input type="checkbox" id="eg-7" class="check-input local-save" data-group="evergaols">
          <div class="check-content">
            <h3>Cárcel de la Cabecilla</h3>
            <p><strong>Jefe:</strong> Alecto, Cabecilla de los Cuchillos Negros. Uno de los combates más difíciles del juego. Solo accesible avanzando en la quest de Ranni.</p>
            <span class="reward-tag">Recompensa: Tiche, la Cuchillo Negro (Invocación Legendaria)</span>
          </div>
        </label>
      </section>

      <section class="guide-section reveal" id="caelid">
        <h2 class="guide-section-title">Caelid</h2>
        
        <label class="check-card" for="eg-8">
          <input type="checkbox" id="eg-8" class="check-input local-save" data-group="evergaols">
          <div class="check-content">
            <h3>Cárcel de Sellia</h3>
            <p><strong>Jefe:</strong> Mago de Batalla Hugues. Salta hacia la cárcel desde la colina que hay cerca del Árbol Áureo Menor de Caelid.</p>
            <span class="reward-tag">Recompensa: Cenizas del Mago de Batalla Hugues</span>
          </div>
        </label>
      </section>

      <section class="guide-section reveal" id="altus">
        <h2 class="guide-section-title">Altus y Picos de los Gigantes</h2>
        
        <label class="check-card" for="eg-9">
          <input type="checkbox" id="eg-9" class="check-input local-save" data-group="evergaols">
          <div class="check-content">
            <h3>Cárcel del Linaje Dorado</h3>
            <p><strong>Jefe:</strong> Godefroy el Injertado. Una versión clonada de Godrick. Requiere Llave Espada Pétrea.</p>
            <span class="reward-tag">Recompensa: Icono de Godfrey (Talismán Legendario)</span>
          </div>
        </label>

        <label class="check-card" for="eg-10">
          <input type="checkbox" id="eg-10" class="check-input local-save" data-group="evergaols">
          <div class="check-content">
            <h3>Cárcel del Invocador de Tormentas</h3>
            <p><strong>Jefe:</strong> Apóstol Sacrodermo. En el centro de la zona de los rayos cerca de los molinos de Altus.</p>
            <span class="reward-tag">Recompensa: Llama Negra Restringida / Set Sacrodermo</span>
          </div>
        </label>

        <label class="check-card" for="eg-11">
          <input type="checkbox" id="eg-11" class="check-input local-save" data-group="evergaols">
          <div class="check-content">
            <h3>Cárcel del Lord Contendiente</h3>
            <p><strong>Jefe:</strong> Caballero de la Mesa Redonda Vyke. El famoso caballero de la portada del juego usando ataques de rayo rojo y locura.</p>
            <span class="reward-tag">Recompensa: Set de Huella Dactilar / Rayo del Dragón de Vyke</span>
          </div>
        </label>
      </section>

    </main>
  </div>
</div>

<script>
// Lógica de Guardado (LocalStorage) y Barra de Progreso
document.addEventListener('DOMContentLoaded', () => {
    const checkboxes = document.querySelectorAll('.local-save[data-group="evergaols"]');
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

    // 1. Cargar datos guardados
    checkboxes.forEach(chk => {
        const savedState = localStorage.getItem('gv_' + chk.id);
        if (savedState === 'true') {
            chk.checked = true;
        }
        
        // 2. Escuchar cambios
        chk.addEventListener('change', function() {
            localStorage.setItem('gv_' + this.id, this.checked);
            updateProgress();
        });
    });

    // Inicializar visualmente
    updateProgress();
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>