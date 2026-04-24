// =========================================
// FUNCIONES GLOBALES DE LA WEB
// =========================================

document.addEventListener('DOMContentLoaded', () => {
    
    // --- Menú Hamburguesa Móvil (Header) ---
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            const navLinks = document.querySelector('.nav-links');
            if (navLinks) navLinks.classList.toggle('active');
        });
    }

    // --- Índice Desplegable Móvil (Table of Contents) ---
    const tocToggle = document.getElementById('tocToggle');
    if (tocToggle) { 
        tocToggle.addEventListener('click', function() {
            const list = document.getElementById('tocList');
            const icon = document.getElementById('tocIcon');
            
            if (list) list.classList.toggle('show');
            if (icon && list) {
                icon.textContent = list.classList.contains('show') ? '▲' : '▼';
            }
        });

        document.querySelectorAll('.mobile-toc-list a').forEach(item => {
            item.addEventListener('click', () => {
                const list = document.getElementById('tocList');
                const icon = document.getElementById('tocIcon');
                if (list) list.classList.remove('show');
                if (icon) icon.textContent = '▼';
            });
        });
    }

    /* =======================================================
       1. SMART SEARCH BAR
       ======================================================= */
    const searchInput = document.getElementById('hubSearchInput');
    const resultsContainer = document.getElementById('hubSearchResults');

    if (searchInput && resultsContainer) {
        const siteIndex = window.guideSiteIndex || [];

        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase();
            resultsContainer.innerHTML = ''; 
            
            if (query.length < 2) {
                resultsContainer.style.display = 'none';
                return;
            }

            const matches = siteIndex.filter(item => 
                item.title.toLowerCase().includes(query) || 
                item.tags.toLowerCase().includes(query)
            );

            if (matches.length > 0) {
                matches.forEach((match, index) => {
                    const a = document.createElement('a');
                    a.href = match.url;
                    a.className = 'search-result-item';
                    a.style.animationDelay = `${index * 0.03}s`;
                    a.innerHTML = `<span>${match.title}</span> <span class="search-result-tag">${match.category}</span>`;
                    resultsContainer.appendChild(a);
                });
                resultsContainer.style.display = 'block';
            } else {
                resultsContainer.innerHTML = '<div style="padding: 15px; color: #888; text-align: center; font-size: 0.9rem;">No results found.</div>';
                resultsContainer.style.display = 'block';
            }
        });

        document.addEventListener('click', function(e) {
            if (!searchInput.contains(e.target) && !resultsContainer.contains(e.target)) {
                resultsContainer.style.display = 'none';
            }
        });
    }

    /* =======================================================
       2. TABS LOGIC
       ======================================================= */
    const tabBtns = document.querySelectorAll('.guide-tab-btn');
    if (tabBtns.length > 0) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetId = btn.getAttribute('data-tab');
                
                const parentNav = btn.closest('.guide-tabs-nav');
                if (parentNav) {
                    parentNav.querySelectorAll('.guide-tab-btn').forEach(b => b.classList.remove('active'));
                }
                btn.classList.add('active');

                const tabsContainer = btn.closest('.guide-tabs');
                if (tabsContainer) {
                    tabsContainer.querySelectorAll('.guide-tab-panel').forEach(p => p.classList.remove('active'));
                }
                
                const targetPanel = document.getElementById(targetId);
                if(targetPanel) targetPanel.classList.add('active');
            });
        });
    }

    /* =======================================================
       3. ANIMACIÓN DE ENTRADA (REVEAL ON SCROLL) - ¡AQUÍ ESTÁ LA MAGIA!
       ======================================================= */
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal').forEach(el => {
        observer.observe(el);
    });

    /* =======================================================
       4. SPARKS ANIMATION
       ======================================================= */
    const sparksContainer = document.getElementById('sparksContainer');
    if(sparksContainer) {
        function createSpark(container) {
            const spark = document.createElement('div');
            spark.classList.add('hero-spark');
            spark.style.left = Math.random() * 100 + '%';
            spark.style.animationDuration = (Math.random() * 5 + 3) + 's';
            spark.style.animationDelay = Math.random() * 5 + 's';
            container.appendChild(spark);
            
            spark.addEventListener('animationend', () => {
                spark.remove();
                createSpark(container);
            });
        }
        
        for (let i = 0; i < 15; i++) {
            createSpark(sparksContainer);
        }
    }
});