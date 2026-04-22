<?php 
  // Magia PHP: Si el archivo actual NO se llama 'index.php', mostramos el botón
  if (basename($_SERVER['PHP_SELF']) !== 'index.php'): 
  ?>
  <div style="max-width: 950px; margin: 0 auto 4rem auto; padding: 0 1rem; text-align: center;">
    <a href="/crimson-desert/index.php" style="display: inline-flex; align-items: center; justify-content: center; gap: 0.75rem; padding: 1rem 2.5rem; background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 50px; color: #D4AF37; text-decoration: none; font-weight: 600; letter-spacing: 0.05em; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.background='rgba(255, 255, 255, 0.08)'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='rgba(255, 255, 255, 0.03)'; this.style.transform='translateY(0)';">
      <span style="font-size: 1.4rem; line-height: 1;">←</span> Back to Main Guide
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
          <a href="https://www.patreon.com" target="_blank" class="btn-patreon">❤️ Join on Patreon</a>
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
        Did you find a hidden chest? Struggling with a boss? Share your tips and questions with other Pywel mercenaries below!
    </p>
    
    <div id="disqus_thread"></div>
</div>

<script>
    /**
    * CONFIGURACIÓN DE DISQUS
    */
    var disqus_config = function () {
        this.page.url = window.location.href;  
        this.page.identifier = window.location.pathname; 
    };
    
    (function() { 
        var d = document, s = d.createElement('script');
        // AQUÍ ESTÁ TU ENLACE OFICIAL DE GUIDEVAULT
        s.src = 'https://guidevault.disqus.com/embed.js'; 
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  <footer class="site-footer">
    <div class="footer-inner">
      <div class="footer-brand">
        <a href="/index.php" class="nav-brand">
          <img 
                src="/crimson-desert/img/SoloLogoguidevault.png" 
                alt="GuideVault Logo" 
                style="height: 38px; width: auto; filter: drop-shadow(0 0 8px rgba(201, 168, 76, 0.2));" 
            >
          <span class="nav-brand-name">Guide<span>Vault</span></span>
        </a>
        <p>In-depth game guides written by players who've put in the hours so you can enjoy the game.</p>
      </div>

      <div class="footer-col">
        <h4>Guides</h4>
        <ul>
          <li><a href="/crimson-desert/index.php">Crimson Desert</a></li>
          <li><a href="/index.php#coming-soon">Elden Ring (Soon)</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Support</h4>
        <ul>
          <li><a href="https://www.patreon.com" target="_blank">Patreon</a></li>
          <li><a href="https://www.paypal.com/donate" target="_blank">PayPal Donation</a></li>
			<li><a href="/../hall-of-fame.php" style="color: var(--gold); font-weight: bold;">✨ Hall of Fame</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Site</h4>
        <ul>
          <li><a href="/index.php">Home</a></li>
          <li><a href="/index.php#guides">All Guides</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-legal" style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1);">
    <p style="color: #888; font-size: 0.9rem; margin-bottom: 10px;">
        &copy; <?php echo date("Y"); ?> GuideVault. All rights reserved.
    </p>
    <div class="legal-links" style="display: flex; justify-content: center; gap: 20px;">
        <a href="/crimson-desert/privacy-policy.php" style="color: #c9a84c; text-decoration: none; font-size: 0.85rem; transition: color 0.2s;">Privacy Policy</a>
        <a href="/crimson-desert/terms-of-service.php" style="color: #c9a84c; text-decoration: none; font-size: 0.85rem; transition: color 0.2s;">Terms of Service</a>
        <a href="/crimson-desert/contact.php" style="color: #c9a84c; text-decoration: none; font-size: 0.85rem; transition: color 0.2s;">Contact Us</a>
    </div>
</div>
  </footer>

  <script>
    // 1. Navbar Scroll (Seguro)
    const nav = document.getElementById('site-nav');
    if (nav) {
      window.addEventListener('scroll', () => { nav.classList.toggle('scrolled', window.scrollY > 40); }, { passive: true });
    }

    // 2. Table of Contents (Seguro)
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

    // 3. Tabs (Seguro)
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

    // 4. Acordeones (Única función necesaria, sin conflictos)
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
	  // 5. Scroll Reveal (Aparición suave de elementos)
const reveals = document.querySelectorAll('.reveal');
const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
            observer.unobserve(entry.target); // Hace que solo se anime la primera vez que lo ves
        }
    });
}, { 
    rootMargin: "0px 0px -50px 0px" // Dispara la animación un poco antes de llegar al borde
});

reveals.forEach(reveal => revealObserver.observe(reveal));
  </script>
<script src="/js/main.js?v=2"></script>
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
</body>
</html>