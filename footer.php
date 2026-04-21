<footer class="site-footer">
    <div class="footer-inner">
      <div class="footer-brand" style="display: flex; flex-direction: column; align-items: flex-start; gap: 15px;">
        <a href="/index.php" class="logo-container" style="display: flex; align-items: center; text-decoration: none; gap: 12px;">
            <img src="/crimson-desert/img/SoloLogoguidevault.png" alt="GuideVault Logo" style="height: 38px; width: auto;">
            <span style="font-family: 'Cinzel', serif !important; font-size: 1.4rem !important; font-weight: 700 !important; color: #c9a84c !important; letter-spacing: 2px !important; text-transform: uppercase !important; line-height: 1;">
                GuideVault
            </span>
        </a>
        <p style="color: #888; font-size: 0.9rem; line-height: 1.6; max-width: 300px; margin: 0;">
            In-depth game guides written by players who've put in the hours so you can enjoy the game.
        </p>
      </div>

      <div class="footer-col">
        <h4>Guides</h4>
        <ul>
          <li><a href="https://guidevault.online/crimson-desert">Crimson Desert</a></li>
          <li><a href="/#coming-soon">Elden Ring (Soon)</a></li>
          <li><a href="/#coming-soon">Baldur's Gate 3 (Soon)</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Support</h4>
        <ul>
          <li><a href="https://www.patreon.com" target="_blank">Patreon</a></li>
          <li><a href="https://www.paypal.com/donate" target="_blank">Donate via PayPal</a></li>
          <li><a href="/hall-of-fame.php" style="color: var(--gold); font-weight: bold;">✨ Hall of Fame</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>GuideVault</h4>
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
            &copy; 2026 GuideVault. All rights reserved.
        </p>
        <div class="legal-links" style="display: flex; justify-content: center; gap: 25px;">
            <a href="/privacy-policy.php" style="color: #c9a84c; text-decoration: none; font-size: 0.85rem;">Privacy Policy</a>
            <a href="/terms-of-service.php" style="color: #c9a84c; text-decoration: none; font-size: 0.85rem;">Terms of Service</a>
            <a href="/contact.php" style="color: #c9a84c; text-decoration: none; font-size: 0.85rem;">Contact Us</a>
        </div>
    </div>
</footer>

<script>
    const nav = document.getElementById('site-nav');
    window.addEventListener('scroll', () => {
      nav.classList.toggle('scrolled', window.scrollY > 40);
    }, { passive: true });

    const filterTabs = document.querySelectorAll('.filter-tab');
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
<script src="/js/main.js"></script>
</body>
</html>