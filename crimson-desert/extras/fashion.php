<?php 
$pageTitle = "Cosmetics & Mounts Gallery | Crimson Desert Guide";
$pageDesc = "Discover all armor sets, dyes, capes, and tamable mounts in Pywel. Master the transmog system to look your best in battle.";
$bodyClass = "theme-crimson-desert"; 

include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 
?>

  <header class="guide-hero" style="min-height: 40vh; padding-top: calc(var(--nav-h) + 2rem);">
    <div class="guide-hero-bg" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(184, 134, 11, 0.2) 0%, transparent 65%), radial-gradient(ellipse 50% 70% at 80% 20%, rgba(100, 20, 40, 0.6) 0%, transparent 60%), linear-gradient(180deg, #0a0808 0%, #1a1012 60%, #0a0808 100%);"></div>
    
    <div class="guide-hero-inner">
      <nav class="guide-hero-breadcrumb" aria-label="Breadcrumb" style="margin-bottom: 2rem;">
        <a href="/">Home</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <a href="/crimson-desert/index.php">Crimson Desert</a>
        <span class="guide-hero-breadcrumb-sep">/</span>
        <span>Cosmetics & Mounts</span>
      </nav>
      <span class="label" style="color: var(--gold); letter-spacing: 0.2em; display: block; margin-bottom: 0.5rem;">GAME DATABASE</span>
      <h1 class="guide-hero-title" style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--gold); line-height: 1.1; margin-bottom: 1rem;">Fashion & Mounts</h1>
      <p class="guide-hero-subtitle" style="font-family: var(--font-ui); font-size: 1.1rem; color: #ddd;">Armor Sets, Transmogrification, and Bestial Companions</p>
    </div>
  </header>

  <div class="guide-layout responsive-layout">
    
    <aside class="guide-toc desktop-toc" aria-label="Table of contents">
        <div class="guide-toc-title" style="color: var(--gold); font-size: 1.2rem; margin-bottom: 1rem;">Contents</div>
        <ul class="guide-toc-list" style="border-left: 1px solid rgba(255,255,255,0.1); padding-left: 1rem;">
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#armor" style="color: var(--text-dim); transition: color 0.2s;">1. Iconic Armor Sets</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#capes" style="color: var(--text-dim); transition: color 0.2s;">2. Capes & Mantles</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#mounts" style="color: var(--text-dim); transition: color 0.2s;">3. Mounts & Stables</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#taming" style="color: var(--text-dim); transition: color 0.2s;">4. Taming Wild Steeds</a></li>
            <li class="guide-toc-item" style="margin-bottom: 0.5rem;"><a href="#dyes" style="color: var(--text-dim); transition: color 0.2s;">5. Rare Dyes Locations</a></li>
        </ul>
    </aside>

    <main class="guide-content">

      <section class="guide-section reveal" id="armor" style="margin-bottom: 4rem;">
        <div class="callout info" style="margin-bottom: 3rem;">
          <span class="callout-label" style="color: var(--gold);">The Tailor (Transmog System & Dyes)</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Once you reach <strong>Hernand City in Chapter 3</strong>, you will unlock the Master Tailor. This NPC allows you to change the appearance of your currently equipped armor to look like any piece of gear you have previously collected, without losing your stats. You can also apply rare Dyes found in hidden chests across Pywel.</p>
        </div>

        <h2 class="guide-section-title" style="color: var(--gold); font-size: 2.2rem; margin-bottom: 1rem;">1. Iconic Armor Sets</h2>
        <p style="color: #ccc; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">A preview of the most sought-after armor sets in Pywel. Mix and match to create your perfect mercenary look.</p>

        <div class="gallery-grid">
          <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; overflow: hidden;">
            <img src="/crimson-desert/img/armor-greymane.png" alt="Greymane Commander Set" class="gallery-img" style="width: 100%; height: 220px; object-fit: cover;" onerror="this.src='https://placehold.co/600x400/111111/D4AF37?text=Greymane+Commander'">
            <div class="gallery-content" style="padding: 1.5rem;">
              <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Greymane Commander</h3>
              <p style="color: #ccc; font-size: 0.9rem; line-height: 1.6;">Kliff's signature look. Heavy fur collar and reinforced steel plates. Perfect for cold environments.</p>
              <div class="dye-palette" style="display: flex; gap: 0.5rem; margin-top: 1rem;">
                <span class="dye-color" style="background: #2c3e50; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Midnight Blue"></span>
                <span class="dye-color" style="background: #7f8c8d; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Steel Grey"></span>
                <span class="dye-color" style="background: #8e44ad; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Royal Purple"></span>
              </div>
            </div>
          </div>

          <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; overflow: hidden;">
            <img src="https://image.pollinations.ai/prompt/A%20high-quality,%20photorealistic%20character%20concept%20of%20a%20medieval%20fantasy%20assassin%20wearing%20lightweight%20dark%20leather%20and%20black%20fabrics.%20The%20character%20wears%20a%20deep%20hood%20that%20completely%20conceals%20their%20face%20in%20shadow.%20Small%20accents%20of%20blood%20red%20dye%20on%20the%20dark%20armor.%20The%20background%20is%20a%20dimly%20lit%20ancient%20stone%20city%20at%20night,%20cinematic%20lighting,%208k%20resolution,%20RPG%20character%20design?width=600&height=400&nologo=true" alt="Assassin of Pailune" class="gallery-img" style="width: 100%; height: 220px; object-fit: cover;">
            <div class="gallery-content" style="padding: 1.5rem;">
              <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Assassin of Pailune</h3>
              <p style="color: #ccc; font-size: 0.9rem; line-height: 1.6;">Lightweight leather and dark fabrics. Features a hood that conceals Kliff's face entirely.</p>
              <div class="dye-palette" style="display: flex; gap: 0.5rem; margin-top: 1rem;">
                <span class="dye-color" style="background: #111; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Abyss Black"></span>
                <span class="dye-color" style="background: #c0392b; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Blood Red"></span>
              </div>
            </div>
          </div>

          <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; overflow: hidden; position: relative;">
            <div class="item-badge" style="position: absolute; top: 10px; right: 10px; background: rgba(212, 168, 67, 0.9); color: #000; padding: 4px 8px; font-size: 0.75rem; font-weight: bold; border-radius: 4px; text-transform: uppercase;">Legendary</div>
            <img src="https://image.pollinations.ai/prompt/A%20high-quality,%20photorealistic%20character%20concept%20of%20a%20medieval%20fantasy%20royal%20guard%20wearing%20ornate%20heavy%20golden%20armor%20with%20a%20flowing%20red%20cape.%20Cinematic%20lighting,%20dark%20background,%208k%20resolution,%20RPG%20character%20design?width=600&height=400&nologo=true" alt="Demeniss Royal Guard" class="gallery-img" style="width: 100%; height: 220px; object-fit: cover;">
            <div class="gallery-content" style="padding: 1.5rem;">
              <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Demeniss Royal Guard</h3>
              <p style="color: #ccc; font-size: 0.9rem; line-height: 1.6;">Ornate golden armor with a red cape. Highly durable but creates a lot of noise when sneaking.</p>
              <div class="dye-palette" style="display: flex; gap: 0.5rem; margin-top: 1rem;">
                <span class="dye-color" style="background: #f1c40f; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Polished Gold"></span>
                <span class="dye-color" style="background: #ecf0f1; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Silver"></span>
                <span class="dye-color" style="background: #e67e22; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Bronze"></span>
              </div>
            </div>
          </div>

          <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; overflow: hidden; position: relative;">
            <div class="item-badge badge-secret" style="position: absolute; top: 10px; right: 10px; background: rgba(155, 89, 182, 0.9); color: #fff; padding: 4px 8px; font-size: 0.75rem; font-weight: bold; border-radius: 4px; text-transform: uppercase;">Secret Set</div>
            <img src="https://image.pollinations.ai/prompt/A%20high-quality,%20photorealistic%20character%20concept%20of%20a%20medieval%20fantasy%20cultist%20(consistent%20male%20character%20model)%20wearing%20layered,%20heavy%20Void%20Cultist%20Robes.%20The%20robes%20are%20composed%20of%20heavy,%20draped%20fabrics,%20primarily%20abyssal%20black,%20but%20featuring%20integrated%20patterns%20of%20swirling%20deep%20void%20purples%20and%20blues%20(the%20abyssal%20purple%20dye%20analogy).%20Integrated%20glowing%20runes%20and%20esoteric%20symbols%20in%20a%20cosmic%20violet%20and%20blue%20light%20are%20woven%20into%20the%20fabric.%20A%20deep,%20heavy%20hood%20is%20pulled%20forward,%20casting%20the%20face%20entirely%20into%20shadow,%20consistent%20with%20the%20other%20concealed-face%20armors%20(like%20images_6.png%20and%20image_14.png).%20Subtle%20leather%20and%20armored%20accents%20are%20visible.%20The%20character%20stands%20in%20a%20dimly%20lit,%20ancient%20stone%20ritual%20chamber,%20with%20a%20contained%20swirling%20void%20rift%20on%20an%20altar%20in%20the%20background,%20surrounded%20by%20other%20esoteric%20artifacts.%20Cinematic,%20mysterious%20lighting%20from%20contained%20void%20energy%20and%20the%20glowing%20runes.%208k%20resolution,%20RPG%20character%20design,%20highly%20detailed%20textures.?width=600&height=400&nologo=true" alt="Void Cultist Robes" class="gallery-img" style="width: 100%; height: 220px; object-fit: cover;">
            <div class="gallery-content" style="padding: 1.5rem;">
              <h3 style="color: #9b59b6; margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Void Cultist Robes</h3>
              <p style="color: #ccc; font-size: 0.9rem; line-height: 1.6;">Tattered, floating robes inscribed with glowing runes. Emits a faint purple aura in dark areas.</p>
              <div class="dye-palette" style="display: flex; gap: 0.5rem; margin-top: 1rem;">
                <span class="dye-color" style="background: #8e44ad; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Abyssal Purple"></span>
                <span class="dye-color" style="background: #2c3e50; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Deep Void"></span>
              </div>
            </div>
          </div>

          <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; overflow: hidden;">
            <img src="https://image.pollinations.ai/prompt/A%20high-quality,%20photorealistic%20character%20concept%20of%20a%20medieval%20fantasy%20warrior%20wearing%20incredibly%20heavy%20armor%20carved%20from%20the%20bones%20of%20Ice%20Trolls.%20The%20armor%20features%20massive,%20jagged%20bone%20shoulder%20spikes%20and%20thick%20frost-white%20and%20glacier-blue%20plating.%20The%20character%20wears%20a%20heavy,%20intimidating%20helmet%20that%20completely%20conceals%20the%20face.%20The%20background%20is%20a%20frozen,%20snowy%20mountain%20peak%20during%20a%20cinematic%20blizzard,%20dark%20and%20moody%20lighting,%208k%20resolution,%20RPG%20character%20design,%20highly%20detailed%20textures.?width=600&height=400&nologo=true" alt="Kweiden Frost-Plate" class="gallery-img" style="width: 100%; height: 220px; object-fit: cover;">
            <div class="gallery-content" style="padding: 1.5rem;">
              <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Kweiden Frost-Plate</h3>
              <p style="color: #ccc; font-size: 0.9rem; line-height: 1.6;">Carved from the bones of Ice Trolls. The heaviest armor in the game, featuring massive shoulder spikes.</p>
              <div class="dye-palette" style="display: flex; gap: 0.5rem; margin-top: 1rem;">
                <span class="dye-color" style="background: #bdc3c7; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Frost White"></span>
                <span class="dye-color" style="background: #2980b9; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Glacier Blue"></span>
              </div>
            </div>
          </div>

          <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; overflow: hidden;">
            <img src="https://image.pollinations.ai/prompt/A%20high-quality,%20photorealistic%20character%20concept%20of%20a%20medieval%20fantasy%20mercenary%20warrior%20in%20a%20vast%20desert.%20He%20is%20wearing%20silken%20desert%20attire,%20breathable%20fabrics%20in%20orange,%20yellow,%20and%20green.%20The%20armor%20is%20sleeveless,%20exposing%20muscular%20arms%20covered%20in%20intricate%20mercenary%20tattoos.%20He%20wears%20a%20hood%20that%20conceals%20his%20face%20in%20shadow.%20Cinematic%20lighting,%20blazing%20desert%20sun,%208k%20resolution,%20RPG%20character%20design,%20highly%20detailed%20textures.?width=600&height=400&nologo=true" alt="Sun-Dancer Garb" class="gallery-img" style="width: 100%; height: 220px; object-fit: cover;">
            <div class="gallery-content" style="padding: 1.5rem;">
              <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Sun-Dancer Garb</h3>
              <p style="color: #ccc; font-size: 0.9rem; line-height: 1.6;">Silken desert attire that breathes easily. Exposes Kliff's arms to show off mercenary tattoos.</p>
              <div class="dye-palette" style="display: flex; gap: 0.5rem; margin-top: 1rem;">
                <span class="dye-color" style="background: #d35400; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Desert Orange"></span>
                <span class="dye-color" style="background: #f39c12; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Sand Yellow"></span>
                <span class="dye-color" style="background: #16a085; width: 20px; height: 20px; border-radius: 50%; display: block; border: 1px solid rgba(255,255,255,0.2);" title="Oasis Green"></span>
              </div>
            </div>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">

        <h2 class="guide-section-title">2. Capes & Mantles</h2>
        <p>Capes occupy their own cosmetic slot. They react to wind, weather, and combat physics.</p>
        
        <div class="companion-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin-bottom: 3rem;">
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #e74c3c;">
                <h4 style="color: #e74c3c; margin-bottom: 0.5rem; font-family: var(--font-display);">Crimson Lord's Cape</h4>
                <p style="font-size: 0.85rem; color: var(--text-dim);">A pristine, velvet-red half-cape. Unlocked by reaching Max Rank with the Demeniss Faction.</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #bdc3c7;">
                <h4 style="color: #bdc3c7; margin-bottom: 0.5rem; font-family: var(--font-display);">Alpha Wolf Mantle</h4>
                <p style="font-size: 0.85rem; color: var(--text-dim);">A thick wolf pelt worn over the shoulders. Crafted from the hide of the Hernand Field Boss.</p>
            </div>
            <div class="stat-card" style="background: var(--dark-2); padding: 1.5rem; border-top: 3px solid #9b59b6;">
                <h4 style="color: #9b59b6; margin-bottom: 0.5rem; font-family: var(--font-display);">Wings of the Abyss</h4>
                <p style="font-size: 0.85rem; color: var(--text-dim);">Not just a cape—this is your glider. Changes visually when dyed at the Tailor.</p>
            </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">

        <h2 class="guide-section-title">3. Mounts & Stables</h2>
        <p>Traveling across Pywel requires a trusty steed. You can catch wild horses or earn exotic mounts through quests.</p>

        <div class="gallery-grid">
          <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; overflow: hidden;">
            <img src="/crimson-desert/img/mounts.png" alt="Akapen Sand-Strider" class="gallery-img" style="width: 100%; height: 220px; object-fit: cover;" onerror="this.src='https://placehold.co/600x400/111111/D4AF37?text=Akapen+Sand-Strider'">
            <div class="gallery-content" style="padding: 1.5rem;">
              <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Akapen Sand-Strider</h3>
              <p style="color: var(--gold); font-size: 0.8rem; margin-bottom: 0.5rem; letter-spacing: 1px;">TYPE: ARABIAN HORSE</p>
              <p style="color: #ccc; font-size: 0.9rem; margin-bottom: 0.5rem;"><strong>Speed:</strong> ★★★★★<br><strong>Stamina:</strong> ★★★☆☆</p>
              <p style="color: #ccc; font-size: 0.85rem; margin-top: 0.5rem; padding-top: 0.5rem; border-top: 1px solid rgba(255,255,255,0.1);">Does not slow down in deep desert sand. Found near the Oasis Bazaar.</p>
            </div>
          </div>

          <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; overflow: hidden;">
            <img src="https://image.pollinations.ai/prompt/A%20high-quality,%20photorealistic%20concept%20art%20of%20a%20massive%20medieval%20fantasy%20warbear%20mount.%20The%20bear%20has%20thick%20dark%20brown%20fur%20matted%20with%20snow.%20It%20is%20wearing%20heavy%20war%20barding%20made%20of%20aged%20leather,%20iron%20plates,%20and%20spiked%20shoulder%20armor.%20Background%20is%20a%20frozen%20snowy%20mountain%20pass%20with%20steep%20peaks%20and%20a%20cinematic%20blizzard,%20cold%20dramatic%20lighting,%208k%20resolution,%20RPG%20mount%20design.?width=600&height=400&nologo=true" alt="Kweiden Warbear" class="gallery-img" style="width: 100%; height: 220px; object-fit: cover;">
            <div class="gallery-content" style="padding: 1.5rem;">
              <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Kweiden Warbear</h3>
              <p style="color: var(--gold); font-size: 0.8rem; margin-bottom: 0.5rem; letter-spacing: 1px;">TYPE: EXOTIC BEAST</p>
              <p style="color: #ccc; font-size: 0.9rem; margin-bottom: 0.5rem;"><strong>Speed:</strong> ★★☆☆☆<br><strong>Stamina:</strong> ★★★★★</p>
              <p style="color: #ccc; font-size: 0.85rem; margin-top: 0.5rem; padding-top: 0.5rem; border-top: 1px solid rgba(255,255,255,0.1);">Can trample enemies and break wooden barricades. Reward for Yann's Questline.</p>
            </div>
          </div>

          <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; overflow: hidden; position: relative;">
            <div class="item-badge badge-secret" style="position: absolute; top: 10px; right: 10px; background: rgba(155, 89, 182, 0.9); color: #fff; padding: 4px 8px; font-size: 0.75rem; font-weight: bold; border-radius: 4px; text-transform: uppercase;">Mythic</div>
            <img src="https://image.pollinations.ai/prompt/A%20high-quality,%20photorealistic%20concept%20art%20of%20a%20demonic%20warhorse%20mount%20named%20Abyssal%20Charger.%20The%20horse%20has%20obsidian%20black%20fur%20with%20glowing%20blue%20ethereal%20fire%20leaking%20from%20its%20eyes,%20nostrils,%20and%20hooves.%20It%20leaves%20a%20trail%20of%20blue%20flames%20on%20the%20shattered%20ground.%20Dark%20fantasy%20armor%20with%20glowing%20runes.%20Background%20is%20a%20misty%20abyssal%20plain%20with%20distant%20magic%20rifts.%20Cinematic%20lighting,%208k%20resolution,%20RPG%20mount%20design.?width=600&height=400&nologo=true" alt="Abyssal Charger" class="gallery-img" style="width: 100%; height: 220px; object-fit: cover;">
            <div class="gallery-content" style="padding: 1.5rem;">
              <h3 style="color: #9b59b6; margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Abyssal Charger</h3>
              <p style="color: #9b59b6; font-size: 0.8rem; margin-bottom: 0.5rem; letter-spacing: 1px;">TYPE: DEMONIC STEED</p>
              <p style="color: #ccc; font-size: 0.9rem; margin-bottom: 0.5rem;"><strong>Speed:</strong> ★★★★☆<br><strong>Stamina:</strong> Infinite</p>
              <p style="color: #ccc; font-size: 0.85rem; margin-top: 0.5rem; padding-top: 0.5rem; border-top: 1px solid rgba(255,255,255,0.1);">Leaves a trail of blue fire. Unlocked as a reward for achieving the "True Ending".</p>
            </div>
          </div>

          <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; overflow: hidden; position: relative;">
            <div class="item-badge" style="position: absolute; top: 10px; right: 10px; background: rgba(52, 152, 219, 0.9); color: #fff; padding: 4px 8px; font-size: 0.75rem; font-weight: bold; border-radius: 4px; text-transform: uppercase;">Rare</div>
            <img src="https://image.pollinations.ai/prompt/A%20high-quality,%20photorealistic%20concept%20art%20of%20a%20majestic%20medieval%20fantasy%20griffin%20mount.%20The%20griffin%20has%20thick%20brown%20and%20gold%20plumage,%20a%20sharp%20beak,%20and%20piercing%20eyes.%20It%20has%20spread%20wings,%20powerful%20talons,%20and%20is%20wearing%20a%20battle-ready%20saddle%20made%20of%20leather%20and%20metal.%20The%20background%20is%20a%20rugged,%20misty%20mountain%20peak%20with%20steep%20peaks%20and%20a%20cinematic%20blizzard,%20cold%20dramatic%20lighting,%208k%20resolution,%20RPG%20mount%20design.?width=600&height=400&nologo=true" alt="Highland Griffin" class="gallery-img" style="width: 100%; height: 220px; object-fit: cover;">
            <div class="gallery-content" style="padding: 1.5rem;">
              <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Highland Griffin</h3>
              <p style="color: var(--gold); font-size: 0.8rem; margin-bottom: 0.5rem; letter-spacing: 1px;">TYPE: AERIAL MOUNT</p>
              <p style="color: #ccc; font-size: 0.9rem; margin-bottom: 0.5rem;"><strong>Speed:</strong> ★★★★★<br><strong>Stamina:</strong> ★★☆☆☆</p>
              <p style="color: #ccc; font-size: 0.85rem; margin-top: 0.5rem; padding-top: 0.5rem; border-top: 1px solid rgba(255,255,255,0.1);">Can glide from high peaks. Hatched from a stolen egg in the Akapen Mountains.</p>
            </div>
          </div>

          <div class="gallery-item" style="background: var(--dark-2); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 8px; overflow: hidden;">
            <img src="https://image.pollinations.ai/prompt/A%20high-quality,%20photorealistic%20concept%20art%20of%20a%20colossal%20and%20massive%20medieval%20fantasy%20warhorse%20mount%20named%20Iron-Clad%20Behemoth.%20The%20horse%20is%20completely%20covered%20in%20heavy,%20thick,%20riveted%20black%20iron%20plate%20armor%20barding.%20The%20armor%20has%20spikes,%20battle%20wear,%20and%20etched%20runes.%20It%20is%20wearing%20a%20massive,%20reinforced%20battle-ready%20saddle.%20The%20background%20is%20a%20rocky,%20war-torn%20landscape%20under%20a%20stormy,%20cinematic%20sky,%20dark%20dramatic%20lighting,%208k%20resolution,%20RPG%20mount%20design.?width=600&height=400&nologo=true" alt="Iron-Clad Behemoth" class="gallery-img" style="width: 100%; height: 220px; object-fit: cover;">
            <div class="gallery-content" style="padding: 1.5rem;">
              <h3 style="color: var(--gold); margin-top: 0; font-family: var(--font-display); font-size: 1.3rem;">Iron-Clad Behemoth</h3>
              <p style="color: var(--gold); font-size: 0.8rem; margin-bottom: 0.5rem; letter-spacing: 1px;">TYPE: ARMORED WARHORSE</p>
              <p style="color: #ccc; font-size: 0.9rem; margin-bottom: 0.5rem;"><strong>Speed:</strong> ★★★☆☆<br><strong>Stamina:</strong> ★★★★☆</p>
              <p style="color: #ccc; font-size: 0.85rem; margin-top: 0.5rem; padding-top: 0.5rem; border-top: 1px solid rgba(255,255,255,0.1);">Provides Kliff with massive damage resistance while mounted. Cannot jump.</p>
            </div>
          </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">

        <h2 class="guide-section-title">4. How to Tame Wild Steeds</h2>
        <p class="guide-section-intro">Not every mount is bought. The best horses in Pywel must be broken and tamed in the wild.</p>
        
        <div class="taming-steps" style="display: flex; flex-direction: column; gap: 1rem;">
            <div class="taming-step" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--gold);">
                <p style="color: #ccc; margin: 0;"><strong>Craft the Lariat:</strong> Visit any stable master to craft or buy a <em>Hemp Rope</em> and <em>Sugar Cubes</em>.</p>
            </div>
            <div class="taming-step" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--gold);">
                <p style="color: #ccc; margin: 0;"><strong>Approach Stealthily:</strong> Crouch and move slowly behind the wild horse. If the "Startle" meter fills up, it will bolt.</p>
            </div>
            <div class="taming-step" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--gold);">
                <p style="color: #ccc; margin: 0;"><strong>The Struggle:</strong> Throw the rope and complete the button-mashing mini-game. Use the sugar cubes when prompted to increase your success rate by 40%.</p>
            </div>
            <div class="taming-step" style="background: var(--dark-2); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--gold);">
                <p style="color: #ccc; margin: 0;"><strong>Registration:</strong> Ride the horse back to the nearest stable to name it and unlock its inventory slots.</p>
            </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.05); margin: 4rem 0;">

        <h2 class="guide-section-title">5. Rare Dyes Location Table</h2>
        <div class="guide-table-wrap">
            <table class="guide-table" style="background: var(--dark-2);">
                <thead>
                    <tr style="border-bottom: 2px solid var(--gold); color: var(--gold);">
                        <th style="padding: 1rem;">Dye Color</th>
                        <th style="padding: 1rem;">Rarity</th>
                        <th style="padding: 1rem;">Location / Method</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                        <td style="padding: 1rem;"><span style="color: #ffd700;">★ Polished Gold</span></td>
                        <td style="padding: 1rem;"><span class="pill pill-gold" style="background: rgba(241, 196, 15, 0.2); color: #f1c40f; padding: 4px 8px; border-radius: 4px; border: 1px solid #f1c40f; font-size: 0.85rem;">Legendary</span></td>
                        <td style="padding: 1rem;">Reward for reaching 100% completion in the Demeniss region.</td>
                    </tr>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                        <td style="padding: 1rem;"><span style="color: #9b59b6;">★ Abyss Purple</span></td>
                        <td style="padding: 1rem;"><span class="pill pill-violet" style="background: rgba(155, 89, 182, 0.2); color: #9b59b6; padding: 4px 8px; border-radius: 4px; border: 1px solid #9b59b6; font-size: 0.85rem;">Epic</span></td>
                        <td style="padding: 1rem;">Dropped by Void Weavers in Master-Level Rifts.</td>
                    </tr>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                        <td style="padding: 1rem;"><span style="color: #e74c3c;">★ Crimson Blood</span></td>
                        <td style="padding: 1rem;"><span class="pill pill-red" style="background: rgba(231, 76, 60, 0.2); color: #e74c3c; padding: 4px 8px; border-radius: 4px; border: 1px solid #e74c3c; font-size: 0.85rem;">Rare</span></td>
                        <td style="padding: 1rem;">Found in a chest behind the waterfall at Akapen Peak.</td>
                    </tr>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); color: #ccc;">
                        <td style="padding: 1rem;"><span style="color: #bdc3c7;">★ Frost Silver</span></td>
                        <td style="padding: 1rem;"><span class="pill pill-blue" style="background: rgba(52, 152, 219, 0.2); color: #3498db; padding: 4px 8px; border-radius: 4px; border: 1px solid #3498db; font-size: 0.85rem;">Rare</span></td>
                        <td style="padding: 1rem;">Purchased from the Kweiden Ice-Trader after the "Frozen Heart" quest.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="callout warning reveal" style="margin-top: 3rem; border-left: 4px solid #3498db; background: rgba(52, 152, 219, 0.05); padding: 1.5rem;">
          <span class="callout-label" style="color: #3498db; font-weight: bold; text-transform: uppercase;">Pro Tip: Photo Mode</span>
          <p style="color: #ccc; margin-top: 0.5rem; margin-bottom: 0;">Press <strong>[L3 + R3 / P Key]</strong> to enter Photo Mode. You can adjust the time of day and weather to make your armor's metallic surfaces pop and take the perfect community screenshot!</p>
        </div>

        <div class="chapter-nav">
            <a href="/crimson-desert/extras/equipment.php" style="color: var(--text-dim); text-decoration: none; font-family: var(--font-ui); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">← Previous: Equipment</a>
            <a href="/crimson-desert/index.php" class="btn btn-gold">Back to Main Hub →</a>
        </div>

      </section>

    </main>
  </div>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; 
?>