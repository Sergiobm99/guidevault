<?php 
// 1. Botón Grande de "Volver a la Guía Principal" (Solo aparece en sub-páginas)
if (basename($_SERVER['PHP_SELF']) !== 'index.php'): 
    // Usamos la URL del juego si está definida, si no, volvemos al inicio por defecto
    $backUrl = isset($parentGuide) ? $parentGuide['url'] : '/';
    $backName = isset($parentGuide) ? $parentGuide['name'] : 'Main';
?>
<div style="max-width: 950px; margin: 0 auto 4rem auto; padding: 0 1rem; text-align: center;">
  <a href="<?php echo $backUrl; ?>" style="display: inline-flex; align-items: center; justify-content: center; gap: 0.75rem; padding: 1rem 2.5rem; background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 50px; color: #D4AF37; text-decoration: none; font-weight: 600; letter-spacing: 0.05em; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.background='rgba(255, 255, 255, 0.08)'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='rgba(255, 255, 255, 0.03)'; this.style.transform='translateY(0)';">
    <span style="font-size: 1.4rem; line-height: 1;">←</span> Back to <?php echo $backName; ?> Guide
  </a>
</div>
<?php endif; ?>

<section class="guide-support" id="support">
  <div class="guide-support-inner">
    <div class="guide-support-header">
      <span class="label" style="display:block;margin-bottom:0.5rem">Support the Guide</span>
      <h2>Did This Guide Help You?</h2>
      <p>Maintained through hundreds of hours of gameplay and research. If it saved you from dying 47 times against a boss, consider supporting the project.</p>
    </div>

    <div class="guide-support-grid">
      <div class="support-card paypal">
        <div class="support-card-icon">🅿️</div>
        <h3>Donate via PayPal</h3>
        <p>Any amount — no minimum. Every donation helps keep the guide updated with every new patch.</p>
        <a href="https://www.paypal.com/donate" target="_blank" class="btn-paypal">💙 Donate with PayPal</a>
        <p style="margin-top:1rem;font-size:0.78rem;color:var(--text-muted)">One-time · No subscription required</p>
      </div>

      <div class="support-card patreon">
        <div class="support-card-icon">🔴</div>
        <h3>Subscribe on Patreon</h3>
        <p>Every donation helps keep the guide updated with every new patch.</p>
        <a href="https://www.patreon.com/guidevault" target="_blank" class="btn-patreon">❤️ Join on Patreon</a>
        <p style="margin-top:1rem;font-size:0.78rem;color:var(--text-muted)">Cancel anytime</p>
      </div>
    </div>
  </div>
</section>

<div class="community-comments" style="max-width: 950px; margin: 4rem auto 2rem auto; padding: 2rem; background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05); border-radius: 12px;">
  <h3 style="color: #D4AF37; margin-bottom: 1.5rem; font-size: 1.5rem; border-bottom: 1px solid rgba(212,175,55,0.2); padding-bottom: 0.5rem;">
      💬 Community Strategies & Discussion
  </h3>
  <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 2rem;">
      Did you find a hidden chest? Struggling with a boss? Share your tips and questions with other mercenaries below!
  </p>
  
  <div id="disqus_thread"></div>
</div>

<script>
  /** CONFIGURACIÓN DE DISQUS **/
  var disqus_config = function () {
      this.page.url = window.location.href;  
      this.page.identifier = window.location.pathname; 
  };
  
  (function() { 
      var d = document, s = d.createElement('script');
      s.src = 'https://guidevault.disqus.com/embed.js'; 
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
  })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<footer class="site-footer">
    <div class="footer-inner">
      <div class="footer-brand" style="display: flex; flex-direction: column; align-items: flex-start; gap: 15px;">
        <a href="/index.php" class="logo-container" style="display: flex; align-items: center; text-decoration: none; gap: 12px;">
            <img src="/img/SoloLogoguidevault.png" alt="GuideVault Logo" style="height: 38px; width: auto;">
            <span style="font-family: 'Cinzel', serif !important; font-size: 1.4rem !important; font-weight: 700 !important; color: #c9a84c !important; letter-spacing: 2px !important; text-transform: uppercase !important; line-height: 1;">
                GuideVault
            </span>
        </a>
        <p style="color: #888; font-size: 0.9rem; line-height: 1.6; max-width: 300px; margin: 0;">
            In-depth game guides written by players who've put in the hours so you can enjoy the game.
        </p>
      </div>

      <div class="footer-col">
        <h3>Guides</h3>
        <ul>
          <li><a href="https://guidevault.online/crimson-desert">Crimson Desert</a></li>
          <li><a href="/#coming-soon">Elden Ring (Soon)</a></li>
          <li><a href="/#coming-soon">Baldur's Gate 3 (Soon)</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h3>Support</h3>
        <ul>
          <li><a href="https://www.patreon.com" target="_blank">Patreon</a></li>
          <li><a href="https://www.paypal.com/donate" target="_blank">Donate via PayPal</a></li>
          <li><a href="/hall-of-fame.php" style="color: var(--gold); font-weight: bold;">✨ Hall of Fame</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h3>GuideVault</h3>
        <ul>
          <li><a href="/#guides">All Guides</a></li>
          <li><a href="/privacy-policy.php">Privacy Policy</a></li>
          <li><a href="/terms-of-service.php">Terms of Service</a></li>
          <li><a href="/contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom" style="border-top: 1px solid rgba(255, 255, 255, 0.1); margin-top: 50px; padding-top: 25px; padding-bottom: 20px; text-align: center;">
        <p style="color: #666; font-size: 0.9rem; margin-bottom: 12px;">
            &copy; <?php echo date("Y"); ?> GuideVault. All rights reserved.
        </p>
        <div class="legal-links" style="display: flex; justify-content: center; gap: 25px;">
            <a href="/privacy-policy.php" style="color: #c9a84c; text-decoration: none; font-size: 0.85rem;">Privacy Policy</a>
            <a href="/terms-of-service.php" style="color: #c9a84c; text-decoration: none; font-size: 0.85rem;">Terms of Service</a>
            <a href="/contact.php" style="color: #c9a84c; text-decoration: none; font-size: 0.85rem;">Contact Us</a>
        </div>
    </div>
</footer>

<script>
    // Navbar Scroll
    const nav = document.getElementById('site-nav');
    if (nav) {
      window.addEventListener('scroll', () => { nav.classList.toggle('scrolled', window.scrollY > 40); }, { passive: true });
    }

    // Filter Tabs (Solo funciona en la Home)
    const filterTabs = document.querySelectorAll('.filter-tab');
    if (filterTabs.length > 0) {
        filterTabs.forEach(tab => {
          tab.addEventListener('click', () => {
            filterTabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            const filter = tab.dataset.filter;
            let visible = 0;
            document.querySelectorAll('.guides-grid .guide-card').forEach(card => {
              const genres = card.dataset.genres || '';
              const isSoon = card.classList.contains('guide-card-soon');
              const match = filter === 'all' || genres.includes(filter);
              card.style.display = match ? '' : 'none';
              if (match && !isSoon) visible++;
            });
            const countEl = document.getElementById('guide-count');
            if(countEl) countEl.textContent = `Showing ${visible} guide${visible !== 1 ? 's' : ''}`;
          });
        });
    }

    // Table of Contents Scroll Observer (Para las Guías)
    const tocItems = document.querySelectorAll('.guide-toc-item');
    const sections = document.querySelectorAll('.guide-section[id]');
    if (tocItems.length > 0 && sections.length > 0) {
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            tocItems.forEach(item => { 
              const link = item.querySelector('a');
              if(link) {
                  item.classList.toggle('active', link.getAttribute('href').includes('#' + entry.target.id)); 
              }
            });
          }
        });
      }, { rootMargin: '-20% 0px -70% 0px' });
      sections.forEach(s => observer.observe(s));
    }

    // Tabs Interactivas (Para las Guías)
    document.querySelectorAll('.guide-tab-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const parent = btn.closest('.guide-tabs');
        if (!parent) return;
        parent.querySelectorAll('.guide-tab-btn').forEach(b => b.classList.remove('active'));
        parent.querySelectorAll('.guide-tab-panel').forEach(p => p.classList.remove('active'));
        btn.classList.add('active');
        const target = parent.querySelector('#' + btn.dataset.tab);
        if (target) target.classList.add('active');
      });
    });

    // Acordeones (Para FAQ)
    window.toggleAcc = function(id) {
      const item = document.getElementById(id);
      if (!item) return;
      
      const body = item.querySelector('.guide-accordion-body');
      const inner = item.querySelector('.guide-accordion-inner');
      if (!body) return;
      
      const isOpen = item.classList.contains('open');
      item.classList.toggle('open', !isOpen);
      
      if (inner) {
          body.style.maxHeight = isOpen ? '0px' : inner.scrollHeight + 'px';
      } else {
          body.style.maxHeight = isOpen ? '0px' : body.scrollHeight + 'px';
      }
    };

    // Scroll Reveal (Aparición suave de elementos)
    const reveals = document.querySelectorAll('.reveal');
    if (reveals.length > 0) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); 
                }
            });
        }, { rootMargin: "0px 0px -50px 0px" });
        reveals.forEach(reveal => revealObserver.observe(reveal));
    }
</script>

<script>
// Deshabilitar clic derecho
document.addEventListener('contextmenu', event => event.preventDefault());

// Deshabilitar combinaciones de teclas (F12, Ctrl+U, Ctrl+Shift+I)
document.onkeydown = function(e) {
    if(e.keyCode == 123) return false; // F12
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) return false;
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) return false;
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) return false;
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) return false;
}
</script>

<script src="/js/main.js?v=3"></script>
</body>
</html>