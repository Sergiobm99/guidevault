<?php 
// 1. Configuración de metadatos
$pageTitle = "Beginner's Guide — Crimson Desert | GuideVault";
$pageDesc = "Essential tips, camp management, and combat basics for your first journey through Pywel.";
$bodyClass = "theme-crimson-desert";

// 2. Carga del Header
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/header.php'; 
?>

<div class="theme-crimson-desert">
    <header class="guide-hero">
        <div class="guide-hero-bg" style="background-image: url('../img/desert-sanddunes.jpg');"></div>
        <div class="guide-hero-pattern"></div>
        
        <div class="guide-hero-inner">
            <nav class="guide-hero-breadcrumb">
                <a href="/">Home</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <a href="/crimson-desert/">Crimson Desert</a>
                <span class="guide-hero-breadcrumb-sep">/</span>
                <span>Beginner's Guide</span>
            </nav>

            <div class="guide-hero-content">
                <div>
                    <span class="guide-hero-tag">Essential Knowledge · Patch 1.03</span>
                    <h1 class="guide-hero-title">BEGINNER'S<br>GUIDE</h1>
                    <p class="guide-hero-subtitle">Master the path of the Macduff Mercenaries</p>
                </div>
            </div>
        </div>
    </header>

    <div class="guide-layout">
        
        <aside class="guide-toc">
            <div class="guide-toc-title">Guide Sections</div>
            <ul class="guide-toc-list">
                <li class="guide-toc-item"><a href="#management">Camp Management</a></li>
                <li class="guide-toc-item"><a href="#combat">Combat Basics</a></li>
                <li class="guide-toc-item"><a href="#mounts">Mounts & Travel</a></li>
                <li class="guide-toc-item"><a href="#exploration">Exploration Tips</a></li>
            </ul>
        </aside>

        <main class="guide-content">
            
            <section class="guide-section" id="management">
                <span class="label">Section 1</span>
                <h2 class="guide-section-title">Camp Management</h2>
                <p>You aren't just a lone wolf; you are a mercenary leader. Your camp is your hub, and upgrading it is vital for long-term survival in the Crimson Desert.</p>
                
                <div class="guide-table-wrap">
                    <table class="guide-table">
                        <thead>
                            <tr>
                                <th>Camp Upgrade</th>
                                <th>Priority</th>
                                <th>What it does</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Blacksmith Anvil</strong></td>
                                <td><span class="badge" style="background:#e74c3c; color:white;">HIGH</span></td>
                                <td>Allows repairing weapons in the field. Weapons break fast in the early game.</td>
                            </tr>
                            <tr>
                                <td><strong>Medic Tent</strong></td>
                                <td><span class="badge" style="background:#e74c3c; color:white;">HIGH</span></td>
                                <td>Increases your maximum potion carrying capacity from 3 to 5.</td>
                            </tr>
                            <tr>
                                <td><strong>Scout Tower</strong></td>
                                <td><span class="badge" style="background:#f1c40f; color:black;">MED</span></td>
                                <td>Highlights treasure chests on your mini-map when nearby.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="guide-section" id="combat">
                <span class="label">Section 2</span>
                <h2 class="guide-section-title">Combat Fundamentals</h2>
                <div class="guide-cards">
                    <div class="guide-card-item">
                        <span class="guide-card-icon">🛡️</span>
                        <h3>Perfect Parry</h3>
                        <p>Block just as the enemy's weapon glows. It consumes no stamina and allows for a devastating counter-attack.</p>
                    </div>
                    <div class="guide-card-item">
                        <span class="guide-card-icon">⚡</span>
                        <h3>Stamina Management</h3>
                        <p>Never let your bar reach zero. If it does, you'll be stunned for 2 seconds, leaving you wide open.</p>
                    </div>
                </div>
            </section>

            <section class="guide-section" id="mounts">
                <span class="label">Section 3</span>
                <h2 class="guide-section-title">Mounts & Fast Travel</h2>
                <div class="callout info" style="border-left: 4px solid var(--gold); background: rgba(212, 168, 67, 0.05); padding: 1.5rem; border-radius: 0 4px 4px 0;">
                    <h4 style="color: var(--gold); margin-bottom: 0.5rem;">🏇 Taming your first horse</h4>
                    <p>Don't wait for the story to give you a mount. Buy a <strong>Taming Rope</strong> from any Stablemaster as soon as you reach the Hernand Plains. Wild horses have better stamina than the starter ones.</p>
                </div>
                <p style="margin-top: 1.5rem;">Fast travel is limited to major cities and your Greymane Camp. Use your mount for everything else to discover hidden World Events.</p>
            </section>

        </main>
    </div>
</div>

<?php 
// 4. Carga del Footer
include $_SERVER['DOCUMENT_ROOT'] . '/crimson-desert/footer.php'; 
?>