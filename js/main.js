// =========================================
// FUNCIONES GLOBALES DE LA WEB
// =========================================

// --- Menú Hamburguesa Móvil (Header) ---
document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
    document.querySelector('.nav-links').classList.toggle('active');
});

// --- Índice Desplegable Móvil (Table of Contents) ---
const tocToggle = document.getElementById('tocToggle');
if (tocToggle) { // Comprobamos si el botón existe en la página actual
    tocToggle.addEventListener('click', function() {
        const list = document.getElementById('tocList');
        const icon = document.getElementById('tocIcon');
        
        list.classList.toggle('show');
        
        if (list.classList.contains('show')) {
            icon.textContent = '▲';
        } else {
            icon.textContent = '▼';
        }
    });

    // Cerrar el índice al hacer clic en un enlace
    document.querySelectorAll('.mobile-toc-list a').forEach(item => {
        item.addEventListener('click', () => {
            document.getElementById('tocList').classList.remove('show');
            document.getElementById('tocIcon').textContent = '▼';
        });
    });
}
document.addEventListener('DOMContentLoaded', () => {
    /* =======================================================
       1. SMART SEARCH BAR
       ======================================================= */
    const searchInput = document.getElementById('hubSearchInput');
    const resultsContainer = document.getElementById('hubSearchResults');

    // Usamos window.guideSiteIndex para que cada página defina sus propios enlaces
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
                parentNav.querySelectorAll('.guide-tab-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const tabsContainer = btn.closest('.guide-tabs');
                tabsContainer.querySelectorAll('.guide-tab-panel').forEach(p => p.classList.remove('active'));
                
                const targetPanel = document.getElementById(targetId);
                if(targetPanel) targetPanel.classList.add('active');
            });
        });
    }

    /* =======================================================
       3. MOBILE TOC TOGGLE
       ======================================================= */
    const tocBtn = document.getElementById('tocToggle');
    const tocList = document.getElementById('tocList');
    if (tocBtn && tocList) {
        tocBtn.addEventListener('click', () => {
            tocList.classList.toggle('active');
        });
    }

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