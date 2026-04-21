
<style>
:root{--bg:#09090b;--p1:#111113;--p2:#18181c;--p3:#202025;--bdr:rgba(255,255,255,.07);--gold:#c9a84c;--gd:rgba(201,168,76,.13);--tx:#e0d4be;--td:#7a6e5a;--tm:#3d3530;--fn:'Bebas Neue',sans-serif;--fu:'Rajdhani',sans-serif;--ft:'Cinzel',serif;}
*{box-sizing:border-box;margin:0;padding:0;}
#pw{width:100%;height:100vh;min-height:600px;background:var(--bg);font-family:var(--fu);display:grid;grid-template-rows:52px 1fr;grid-template-columns:265px 1fr;grid-template-areas:"bar bar""side cv";overflow:hidden;}
/* BAR */
#bar{grid-area:bar;background:var(--p1);border-bottom:1px solid var(--bdr);display:flex;align-items:center;padding:0 1rem;gap:.7rem;z-index:200;overflow:hidden;}
#logo{font-family:var(--ft);font-size:.88rem;font-weight:700;color:var(--gold);letter-spacing:.1em;white-space:nowrap;flex-shrink:0;line-height:1.2;}
#logo small{display:block;font-size:.5rem;color:var(--tm);letter-spacing:.28em;text-transform:uppercase;}
.sp{width:1px;height:24px;background:var(--bdr);flex-shrink:0;}
#rg{display:flex;gap:.18rem;overflow-x:auto;scrollbar-width:none;flex:1;}
#rg::-webkit-scrollbar{display:none;}
.rt{font-family:var(--fu);font-size:.63rem;font-weight:700;letter-spacing:.09em;text-transform:uppercase;padding:.27rem .7rem;border-radius:2px;background:transparent;border:1px solid transparent;color:var(--tm);cursor:pointer;transition:all .15s;white-space:nowrap;}
.rt:hover{color:var(--tx);background:rgba(255,255,255,.03);}
.rt.on{color:var(--gold);background:var(--gd);border-color:rgba(201,168,76,.28);}
#sch{background:var(--p2);border:1px solid var(--bdr);border-radius:2px;padding:.27rem .7rem;font-family:var(--fu);font-size:.75rem;color:var(--tx);outline:none;width:155px;flex-shrink:0;transition:border-color .18s;}
#sch::placeholder{color:var(--tm);}
#sch:focus{border-color:rgba(201,168,76,.35);}
#zc{display:flex;gap:.18rem;flex-shrink:0;}
.zb{width:27px;height:27px;background:var(--p2);border:1px solid var(--bdr);border-radius:2px;color:var(--td);font-size:.85rem;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all .15s;}
.zb:hover{color:var(--gold);border-color:rgba(201,168,76,.3);}
#zlb{font-size:.58rem;font-weight:700;letter-spacing:.1em;color:var(--tm);white-space:nowrap;flex-shrink:0;align-self:center;}
/* SIDE */
#side{grid-area:side;background:var(--p1);border-right:1px solid var(--bdr);display:flex;flex-direction:column;overflow:hidden;}
.sh{padding:.58rem .78rem .4rem;border-bottom:1px solid var(--bdr);}
.sl{font-size:.54rem;font-weight:700;letter-spacing:.3em;text-transform:uppercase;color:var(--tm);display:block;margin-bottom:.38rem;}
#fl{display:flex;flex-direction:column;gap:.14rem;max-height:52vh;overflow-y:auto;scrollbar-width:thin;scrollbar-color:var(--tm) transparent;}
#fl::-webkit-scrollbar{width:2px;}
#fl::-webkit-scrollbar-thumb{background:var(--tm);}
.fc{display:flex;align-items:center;gap:.46rem;padding:.3rem .62rem;border-radius:3px;cursor:pointer;border:1px solid transparent;transition:all .13s;background:transparent;width:100%;text-align:left;}
.fc:hover{background:rgba(255,255,255,.03);}
.fc.on{background:rgba(255,255,255,.04);border-color:rgba(255,255,255,.06);}
.fd{width:7px;height:7px;border-radius:50%;flex-shrink:0;border:1.5px solid rgba(255,255,255,.2);}
.fc.on .fd{border-color:transparent;}
.fl2{font-size:.7rem;font-weight:600;letter-spacing:.02em;color:var(--tm);flex:1;transition:color .13s;}
.fc.on .fl2{color:var(--tx);}
.fn{font-size:.6rem;font-weight:700;color:var(--tm);background:var(--p3);border-radius:2px;padding:.05rem .32rem;min-width:20px;text-align:center;}
#info{flex:1;overflow-y:auto;scrollbar-width:thin;scrollbar-color:var(--tm) transparent;}
#info::-webkit-scrollbar{width:3px;}
#info::-webkit-scrollbar-thumb{background:var(--tm);border-radius:2px;}
#emp{padding:1.5rem .78rem;text-align:center;color:var(--tm);font-size:.72rem;line-height:1.65;}
#emp .ei{font-size:1.5rem;display:block;margin-bottom:.5rem;opacity:.35;}
#det{display:none;}
.dh{padding:.75rem .78rem .5rem;border-bottom:1px solid var(--bdr);}
.db{font-size:.51rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;padding:.1rem .38rem;border-radius:2px;border:1px solid currentColor;margin-bottom:.34rem;display:inline-block;}
.dn{font-family:var(--fn);font-size:1.1rem;letter-spacing:.04em;color:var(--tx);line-height:1;margin-bottom:.16rem;}
.dloc{font-size:.62rem;color:var(--td);letter-spacing:.07em;text-transform:uppercase;}
.db2{padding:.62rem .78rem;}
.dr{display:flex;gap:.34rem;margin-bottom:.34rem;font-size:.72rem;}
.dk{color:var(--tm);flex-shrink:0;min-width:56px;font-weight:600;font-size:.62rem;letter-spacing:.07em;text-transform:uppercase;padding-top:.04rem;}
.dv{color:var(--td);line-height:1.5;}
.dd{font-size:.72rem;color:var(--td);line-height:1.7;margin-top:.56rem;padding-top:.56rem;border-top:1px solid var(--bdr);}
.dtg{display:flex;gap:.25rem;flex-wrap:wrap;margin-top:.56rem;}
.dtag{font-size:.52rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:.09rem .38rem;border-radius:2px;background:var(--p3);color:var(--td);}
/* CANVAS */
#cv{grid-area:cv;position:relative;overflow:hidden;background:#232528;cursor:grab;}
#cv.pan{cursor:grabbing;}
#vp{position:absolute;top:0;left:0;transform-origin:0 0;will-change:transform;}
#mi{position:relative;width:1093px;height:1083px;}
#mi img{width:1093px;height:1083px;display:block;user-select:none;-webkit-user-drag:none;}
#ml{position:absolute;top:0;left:0;width:1093px;height:1083px;pointer-events:none;}
/* MARKERS */
.mk{position:absolute;transform:translate(-50%,-50%);cursor:pointer;pointer-events:all;transition:transform .12s,opacity .18s;z-index:10;}
.mk:hover{transform:translate(-50%,-50%) scale(1.4);z-index:60;}
.mk.hid{opacity:0;pointer-events:none;}
.mk.sel{z-index:70;}
.mk.sel .mp{box-shadow:0 0 0 3px rgba(255,255,255,.32),0 3px 14px rgba(0,0,0,.9)!important;}
.mp{width:18px;height:18px;border-radius:50% 50% 50% 0;transform:rotate(-45deg);border:1.5px solid rgba(255,255,255,.22);box-shadow:0 2px 6px rgba(0,0,0,.65);display:flex;align-items:center;justify-content:center;transition:box-shadow .12s;}
.mk:hover .mp{box-shadow:0 0 0 2px rgba(255,255,255,.22),0 3px 10px rgba(0,0,0,.8);}
.mi2{transform:rotate(45deg);font-size:7px;line-height:1;color:rgba(255,255,255,.9);}
.mtt{position:absolute;bottom:calc(100% + 6px);left:50%;transform:translateX(-50%);background:rgba(6,6,8,.97);border:1px solid rgba(255,255,255,.11);border-radius:3px;padding:.28rem .58rem;white-space:nowrap;font-size:.62rem;font-weight:600;letter-spacing:.03em;color:var(--tx);pointer-events:none;opacity:0;transition:opacity .12s;z-index:250;box-shadow:0 4px 14px rgba(0,0,0,.85);}
.mtt::after{content:'';position:absolute;top:100%;left:50%;transform:translateX(-50%);border:4px solid transparent;border-top-color:rgba(6,6,8,.97);}
.mk:hover .mtt{opacity:1;}
/* OVERLAYS */
#sts{position:absolute;top:.7rem;right:.7rem;display:flex;gap:.35rem;z-index:80;}
.st{background:rgba(6,6,8,.84);border:1px solid var(--bdr);border-radius:2px;padding:.2rem .52rem;font-size:.58rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--td);backdrop-filter:blur(6px);}
.st b{color:var(--gold);}
#mm{position:absolute;bottom:.7rem;right:.7rem;width:148px;height:146px;background:rgba(6,6,8,.92);border:1px solid var(--bdr);border-radius:3px;overflow:hidden;z-index:80;cursor:pointer;}
#mm canvas{width:100%;height:100%;display:block;}
#mv{position:absolute;border:1px solid rgba(201,168,76,.6);background:rgba(201,168,76,.07);pointer-events:none;}
#lg{position:absolute;bottom:.7rem;left:.7rem;background:rgba(6,6,8,.92);border:1px solid var(--bdr);border-radius:3px;padding:.56rem .68rem;z-index:80;backdrop-filter:blur(6px);}
.lt{font-size:.51rem;font-weight:700;letter-spacing:.28em;text-transform:uppercase;color:var(--tm);margin-bottom:.34rem;}
.lg2{display:grid;grid-template-columns:1fr 1fr;gap:.16rem .78rem;}
.li{display:flex;align-items:center;gap:.28rem;font-size:.58rem;font-weight:600;color:var(--td);}
.ld{width:6px;height:6px;border-radius:50%;flex-shrink:0;}
#zlb2{position:absolute;bottom:9.2rem;right:.7rem;font-size:.55rem;font-weight:700;letter-spacing:.12em;color:var(--tm);z-index:80;text-transform:uppercase;}
@media(max-width:768px){#pw{grid-template-columns:1fr;grid-template-areas:"bar""cv";}#side{display:none;}}
</style>
</head>
<body style="margin:0;padding:0;background:#09090b;">
<div id="pw">
<div id="bar">
  <div id="logo">Pywel Map<small>Crimson Desert — Interactive</small></div>
  <div class="sp"></div>
  <div id="rg">
    <button class="rt on" data-r="all">All Regions</button>
    <button class="rt" data-r="hernand">Hernand</button>
    <button class="rt" data-r="pailune">Pailune</button>
    <button class="rt" data-r="demeniss">Demeniss</button>
    <button class="rt" data-r="crimson">Crimson Desert</button>
    <button class="rt" data-r="delesyia">Delesyia</button>
    <button class="rt" data-r="abyss">The Abyss</button>
  </div>
  <div class="sp"></div>
  <input id="sch" type="text" placeholder="🔍  Search…">
  <div id="zc">
    <button class="zb" id="zi">+</button>
    <button class="zb" id="zo">−</button>
    <button class="zb" id="zf" style="font-size:.56rem;letter-spacing:.03em;">FIT</button>
  </div>
  <span id="zlb">100%</span>
</div>
<div id="side">
  <div class="sh"><span class="sl">Filters — click to toggle</span><div id="fl"></div></div>
 <div id="info">
    <div style="padding: 1rem .78rem; background: rgba(201,168,76,0.05); border-bottom: 1px solid rgba(201,168,76,0.1); margin-bottom: 0.5rem;">
      <span style="font-size: 0.65rem; color: var(--gold); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.3rem;">⚠️ Map under construction</span>
      <p style="font-size: 0.72rem; color: var(--td); line-height: 1.5; font-family: var(--fu);">
        We are still adding content to this map, so it's not yet complete. Thank you for your patience!
      </p>
    </div>
    <div id="emp">
      <span class="ei">🗺️</span>Click any marker<br>to see its details
    </div>
    <div id="det"></div>
  </div>
</div>
<div id="cv">
  <div id="vp">
    <div id="mi">
      <img id="mapimg" src="/crimson-desert/img/crimson-desert-full-world-map.jpg" alt="Pywel Map" draggable="false">
      <div id="ml"></div>
    </div>
  </div>
  <div id="sts"><div class="st">Visible <b id="sv">0</b></div><div class="st">Total <b id="st">0</b></div></div>
  <div id="zlb2">Zoom: <span id="zv">100%</span></div>
  <div id="mm"><canvas id="mmc" width="148" height="146"></canvas><div id="mv"></div></div>
  <div id="lg"><div class="lt">Legend</div><div class="lg2" id="lgc"></div></div>
</div>
</div>
<script>
const T={
  boss:     {l:'Story Boss',       c:'#c0392b',i:'⚔'},
  world:    {l:'World Boss',       c:'#ff5722',i:'☠'},
  faction:  {l:'Faction Boss',     c:'#e91e63',i:'★'},
  chest:    {l:'Treasure Chest',   c:'#c9a84c',i:'◆'},
  strongbox:{l:'Strongbox',        c:'#ffd600',i:'⊟'},
  abyss:    {l:'Abyss Artifact',   c:'#9b59ff',i:'◈'},
  fast:     {l:'Fast Travel',      c:'#27ae60',i:'⟡'},
  bell:     {l:'Hidden Bell',      c:'#3498db',i:'◉'},
  cresset:  {l:'Abyss Cresset',    c:'#1abc9c',i:'✦'},
  npc:      {l:'Settlement/NPC',   c:'#e67e22',i:'●'},
  merchant: {l:'Special Merchant', c:'#ff9800',i:'$'},
  ancient:  {l:'Ancient Ruins',    c:'#795548',i:'△'},
  sanctum:  {l:'Sanctum',          c:'#7c3aed',i:'◭'},
  dungeon:  {l:'Dungeon/Cave',     c:'#8e44ad',i:'▲'},
  ore:      {l:'Ore Node',         c:'#90a4ae',i:'◆'},
  fishing:  {l:'Fishing Spot',     c:'#0288d1',i:'≈'},
  shrine:   {l:'Shrine/Witch',     c:'#d81b60',i:'✿'},
  bonfire:  {l:'Bonfire/Rest',     c:'#f57c00',i:'✦'},
};

const FC=[
  {k:'boss',on:true},{k:'world',on:true},{k:'faction',on:false},
  {k:'chest',on:false},{k:'strongbox',on:true},{k:'abyss',on:true},
  {k:'fast',on:false},{k:'bell',on:true},{k:'cresset',on:true},
  {k:'npc',on:false},{k:'merchant',on:false},{k:'ancient',on:false},
  {k:'sanctum',on:false},{k:'dungeon',on:false},{k:'ore',on:false},
  {k:'fishing',on:false},{k:'shrine',on:false},{k:'bonfire',on:false},
];

const D=[
  {id:"boss1",t:"boss",x:490,y:907,r:"hernand",ch:"Open",n:"Fortain",d:"The Cursed KNIGHT",g:["STORY-BOSS"]},
  {id:"boss2",t:"boss",x:511,y:797,r:"hernand",ch:"Open",n:"Gregor",d:"The Halberd of Carnage",g:["STORY-BOSS"]},
  {id:"boss3",t:"boss",x:589,y:791,r:"hernand",ch:"Open",n:"T'rukan",d:"The Ascended",g:["STORY-BOSS"]},
  {id:"boss4",t:"boss",x:599,y:764,r:"hernand",ch:"Open",n:"Antumbra's Spear",d:"Antumbra's Spear",g:["STORY-BOSS"]},
  {id:"boss5",t:"boss",x:299,y:922,r:"hernand",ch:"Open",n:"Sir Catfish",d:"Sir Catfish",g:["STORY-BOSS"]},
  {id:"boss6",t:"boss",x:236,y:941,r:"hernand",ch:"Open",n:"Reed Devil",d:"Reed Devil",g:["STORY-BOSS"]},
  {id:"boss7",t:"boss",x:182,y:914,r:"hernand",ch:"Open",n:"Antumbra's Sword",d:"Antumbra's Sword",g:["STORY-BOSS"]},
  {id:"boss8",t:"boss",x:231,y:876,r:"hernand",ch:"Open",n:"Hemon Beindel",d:"Hemon Beindel",g:["STORY-BOSS"]},
  {id:"boss9",t:"boss",x:196,y:857,r:"hernand",ch:"Open",n:"Crimson Nightmare",d:"Crimson Nightmare",g:["STORY-BOSS"]},
  {id:"boss10",t:"boss",x:162,y:825,r:"hernand",ch:"Open",n:"Tenebrum",d:"Tenebrum",g:["STORY-BOSS"]},
  {id:"boss11",t:"boss",x:341,y:802,r:"hernand",ch:"Open",n:"Kailok",d:"The Hornsplitter",g:["STORY-BOSS"]},
  {id:"boss12",t:"boss",x:384,y:801,r:"hernand",ch:"Open",n:"Lithus",d:"the Cubewalker",g:["STORY-BOSS"]},
  {id:"boss13",t:"boss",x:281,y:732,r:"hernand",ch:"Open",n:"Matthias",d:"Matthias",g:["STORY-BOSS"]},
  {id:"boss14",t:"boss",x:284,y:721,r:"hernand",ch:"Open",n:"Kearush",d:"The Slayer",g:["STORY-BOSS"]},
  {id:"boss15",t:"boss",x:161,y:672,r:"hernand",ch:"Open",n:"Saigord",d:"The Staglord",g:["STORY-BOSS"]},
  {id:"boss16",t:"boss",x:303,y:658,r:"hernand",ch:"Open",n:"Marni's Excavatron",d:"Marni's Excavatron",g:["STORY-BOSS"]},
  {id:"boss17",t:"boss",x:190,y:584,r:"hernand",ch:"Open",n:"Cassius Morten",d:"Cassius Morten",g:["STORY-BOSS"]},
  {id:"boss18",t:"boss",x:514,y:725,r:"hernand",ch:"Open",n:"The Crimson Warden",d:"The Crimson Warden",g:["STORY-BOSS"]},
  {id:"boss19",t:"boss",x:518,y:701,r:"hernand",ch:"Open",n:"Gabriel Caliburn",d:"Gabriel Caliburn",g:["STORY-BOSS"]},
  {id:"boss20",t:"boss",x:504,y:674,r:"hernand",ch:"Open",n:"Keglord Garnier Mk. XXIII",d:"Keglord Garnier Mk. XXIII",g:["STORY-BOSS"]},
  {id:"boss21",t:"boss",x:434,y:652,r:"hernand",ch:"Open",n:"Tristan",d:"The Flame Knight",g:["STORY-BOSS"]},
  {id:"boss22",t:"boss",x:345,y:606,r:"hernand",ch:"Open",n:"Queen Spider",d:"Queen Spider",g:["STORY-BOSS"]},
  {id:"boss23",t:"boss",x:292,y:576,r:"hernand",ch:"Open",n:"Gwen Kraber",d:"Gwen Kraber",g:["STORY-BOSS"]},
  {id:"boss24",t:"boss",x:163,y:485,r:"hernand",ch:"Open",n:"Priscus the Ancient",d:"Priscus the Ancient",g:["STORY-BOSS"]},
  {id:"boss25",t:"boss",x:204,y:416,r:"hernand",ch:"Open",n:"Moren",d:"The Mistwood Huntmaster",g:["STORY-BOSS"]},
  {id:"boss26",t:"boss",x:275,y:377,r:"hernand",ch:"Open",n:"Myurdin",d:"Myurdin",g:["STORY-BOSS"]},
  {id:"boss27",t:"boss",x:295,y:443,r:"hernand",ch:"Open",n:"Antumbra's Staff",d:"Antumbra's Staff",g:["STORY-BOSS"]},
  {id:"boss28",t:"boss",x:376,y:370,r:"hernand",ch:"Open",n:"Ludvig",d:"Ludvig",g:["STORY-BOSS"]},
  {id:"boss29",t:"boss",x:414,y:282,r:"hernand",ch:"Open",n:"Fallen God",d:"Fallen God",g:["STORY-BOSS"]},
  {id:"boss30",t:"boss",x:401,y:520,r:"hernand",ch:"Open",n:"One-Armed Ludvig",d:"One-Armed Ludvig",g:["STORY-BOSS"]},
  {id:"boss31",t:"boss",x:541,y:520,r:"hernand",ch:"Open",n:"Hexe Marie",d:"Hexe Marie",g:["STORY-BOSS"]},
  {id:"boss32",t:"boss",x:600,y:486,r:"hernand",ch:"Open",n:"Master Du",d:"Master Du",g:["STORY-BOSS"]},
  {id:"boss33",t:"boss",x:640,y:565,r:"hernand",ch:"Open",n:"Righteous Inquisitors Commander",d:"Righteous Inquisitors Commander",g:["STORY-BOSS"]},
  {id:"boss34",t:"boss",x:653,y:556,r:"hernand",ch:"Open",n:"Flying Fortress Orbian",d:"Flying Fortress Orbian",g:["STORY-BOSS"]},
  {id:"boss35",t:"boss",x:672,y:607,r:"hernand",ch:"Open",n:"Lucian Bastier",d:"Lucian Bastier",g:["STORY-BOSS"]},
  {id:"boss36",t:"boss",x:736,y:706,r:"hernand",ch:"Open",n:"Marni's Clockwork Mantis",d:"Marni's Clockwork Mantis",g:["STORY-BOSS"]},
  {id:"boss37",t:"boss",x:824,y:647,r:"hernand",ch:"Open",n:"Queen Stoneback Crab",d:"Queen Stoneback Crab",g:["STORY-BOSS"]},
  {id:"boss38",t:"boss",x:828,y:871,r:"hernand",ch:"Open",n:"Thunder Tank",d:"Thunder Tank",g:["STORY-BOSS"]},
  {id:"boss39",t:"boss",x:875,y:902,r:"hernand",ch:"Open",n:"Golden Star",d:"Golden Star",g:["STORY-BOSS"]},
  {id:"boss40",t:"boss",x:939,y:909,r:"hernand",ch:"Open",n:"Storm Crusher",d:"Storm Crusher",g:["STORY-BOSS"]},
  {id:"boss41",t:"boss",x:979,y:787,r:"hernand",ch:"Open",n:"Dreadnought",d:"Dreadnought",g:["STORY-BOSS"]},
	{id:"wb1",t:"world",x:607,y:860,r:"hernand",ch:"Open",n:"Primus The Ancient",d:"Primus The Ancient",g:["WORLD-BOSS"]},
  {id:"wb2",t:"world",x:437,y:913,r:"hernand",ch:"Open",n:"Bradie Gu",d:"Location: Bloodsteel Fortress in the Steel Mountains",g:["WORLD-BOSS"]},
  {id:"wb3",t:"world",x:125,y:836,r:"hernand",ch:"Open",n:"Vordis, the Runewalker",d:"Location: Summoned via solving the Puzzle of Lake Kharonso",g:["WORLD-BOSS"]},
  {id:"wb4",t:"world",x:68,y:759,r:"hernand",ch:"Open",n:"Icewalker x2",d:"Location: In the snowy forest on both sides of the river",g:["WORLD-BOSS"]},
  {id:"wb5",t:"world",x:71,y:657,r:"hernand",ch:"Open",n:"Icewalker",d:"Location: On the ledge of the cliff below the lighthouse",g:["WORLD-BOSS"]},
  {id:"wb6",t:"world",x:92,y:644,r:"hernand",ch:"Open",n:"Beloth, the Darksworn",d:"Location: Fought within Hoenmark Ruins",g:["WORLD-BOSS"]},
  {id:"wb7",t:"world",x:376,y:643,r:"hernand",ch:"Open",n:"Grave Walker",d:"Location: Inside the Silent Falls Hideout",g:["WORLD-BOSS"]},
  {id:"wb8",t:"world",x:134,y:462,r:"hernand",ch:"Open",n:"White Bearclaw",d:"Location: Just within the gates of Vat'nholl Fortress",g:["WORLD-BOSS"]},
  {id:"wb9",t:"world",x:94,y:428,r:"hernand",ch:"Open",n:"Icewalker",d:"Icewalker",g:["WORLD-BOSS"]},
  {id:"wb10",t:"world",x:230,y:436,r:"hernand",ch:"Open",n:"Icewalker",d:"Location: Going down the mountain in the area on a small edge",g:["WORLD-BOSS"]},
  {id:"wb11",t:"world",x:201,y:383,r:"hernand",ch:"Open",n:"Frostwalker Tervis",d:"Location: In the clearing at the entrance to the Cloister of Ruination Tunnel",g:["WORLD-BOSS"]},
  {id:"wb12",t:"world",x:243,y:393,r:"hernand",ch:"Open",n:"White Bear of the High Mountain",d:"Location: Fort Askelund",g:["WORLD-BOSS"]},
  {id:"wb13",t:"world",x:215,y:303,r:"hernand",ch:"Open",n:"Grave Walker x3",d:"Location: Northwest of Longbranch",g:["WORLD-BOSS"]},
  {id:"wb14",t:"world",x:423,y:386,r:"hernand",ch:"Open",n:"Icewalker",d:"Location: In the valley to the west of the Abyss Nexus that is at the top of the mountain.",g:["WORLD-BOSS"]},
  {id:"wb15",t:"world",x:523,y:448,r:"hernand",ch:"Open",n:"Queen Bismuth Oreback Crab",d:"Location: Well of Enlightenment",g:["WORLD-BOSS"]},
  {id:"wb16",t:"world",x:650,y:483,r:"hernand",ch:"Open",n:"Samara, the Sandwatcher",d:"Samara, the Sandwatcher",g:["WORLD-BOSS"]},
  {id:"wb17",t:"world",x:661,y:453,r:"hernand",ch:"Open",n:"Praevus the Ancient",d:"Praevus the Ancient",g:["WORLD-BOSS"]},
  {id:"wb18",t:"world",x:751,y:466,r:"hernand",ch:"Open",n:"Kali, the Masked Liberator",d:"Kali, the Masked Liberator",g:["WORLD-BOSS"]},
  {id:"wb19",t:"world",x:800,y:493,r:"hernand",ch:"Open",n:"Merrick, Knight of Fortune - Final Encounter",d:"Location: Merrick's final encounter after the first encounter to the northeast in Ruin's Excavation",g:["WORLD-BOSS"]},
  {id:"wb20",t:"world",x:790,y:551,r:"hernand",ch:"Open",n:"Ravok of the Savage Fangs",d:"Location: Patrols the area",g:["WORLD-BOSS"]},
  {id:"wb21",t:"world",x:868,y:456,r:"hernand",ch:"Open",n:"Merrick, Knight of Fortune - First Encounter",d:"You first encounter Merrick in the Ruin's Excavation. His final Encounter is southwest in Crimson Mountain's Fortress.",g:["WORLD-BOSS"]},
  {id:"wb22",t:"world",x:842,y:370,r:"hernand",ch:"Open",n:"Ogre",d:"Ogre",g:["WORLD-BOSS"]},
  {id:"wb23",t:"world",x:800,y:305,r:"hernand",ch:"Open",n:"Gristle, the Sandfang Marauder",d:"Location: Have to hunt this boss. Has 2 phases, leaves after the first phase.",g:["WORLD-BOSS"]},
	
];

const cv=document.getElementById('cv'),vp=document.getElementById('vp'),ml=document.getElementById('ml');
let sc=.7,px=0,py=0,drag=false,ds={x:0,y:0},ps={x:0,y:0};
let flt={},region='all',selId=null;
const MINS=.25,MAXS=5;

function tf(){vp.style.transform=`translate(${px}px,${py}px) scale(${sc})`;
  const p=Math.round(sc*100)+'%';document.getElementById('zlb').textContent=p;document.getElementById('zv').textContent=p;mini();}

function fit(){const W=cv.clientWidth,H=cv.clientHeight;sc=Math.min(W/1093,H/1083)*.95;px=(W-1093*sc)/2;py=(H-1083*sc)/2;tf();}

function buildF(){
  const el=document.getElementById('fl');el.innerHTML='';
  FC.forEach(f=>{flt[f.k]=f.on;const t=T[f.k];const cnt=D.filter(m=>m.t===f.k).length;
    const b=document.createElement('button');b.className='fc'+(f.on?' on':'');b.dataset.k=f.k;
    b.innerHTML=`<div class="fd" style="background:${f.on?t.c:'transparent'};border-color:${t.c};"></div><span class="fl2">${t.l}</span><span class="fn">${cnt}</span>`;
    b.addEventListener('click',()=>{flt[f.k]=!flt[f.k];b.classList.toggle('on');b.querySelector('.fd').style.background=flt[f.k]?t.c:'transparent';ref();});
    el.appendChild(b);});}

function buildL(){const el=document.getElementById('lgc');Object.entries(T).forEach(([k,t])=>{el.innerHTML+=`<div class="li"><div class="ld" style="background:${t.c}"></div>${t.l}</div>`;});}

function buildM(){
  ml.innerHTML='';
  D.forEach(m=>{const t=T[m.t];const el=document.createElement('div');
    el.className='mk';el.dataset.id=m.id;el.dataset.t=m.t;el.dataset.r=m.r;
    el.style.left=m.x+'px';el.style.top=m.y+'px';
    el.innerHTML=`<div class="mp" style="background:${t.c};"><span class="mi2">${t.i}</span></div><div class="mtt">${m.n}</div>`;
    el.addEventListener('click',e=>{e.stopPropagation();sel(m.id);});
    ml.appendChild(el);});ref();}

function ref(){let vis=0;
  ml.querySelectorAll('.mk').forEach(el=>{const show=flt[el.dataset.t]&&(region==='all'||el.dataset.r===region);el.classList.toggle('hid',!show);if(show)vis++;});
  document.getElementById('sv').textContent=vis;document.getElementById('st').textContent=D.length;}

function sel(id){
  if(selId)ml.querySelector(`[data-id="${selId}"]`)?.classList.remove('sel');
  selId=id;ml.querySelector(`[data-id="${id}"]`)?.classList.add('sel');
  const m=D.find(d=>d.id===id);if(!m)return;const t=T[m.t];
  document.getElementById('emp').style.display='none';
  const det=document.getElementById('det');det.style.display='block';
  const tags=(m.g||[]).map(g=>`<span class="dtag">${g}</span>`).join('');
  det.innerHTML=`<div class="dh"><div class="db" style="color:${t.c};border-color:${t.c};background:${t.c}18;">${t.l}</div><div class="dn">${m.n}</div><div class="dloc">📍 ${m.r.charAt(0).toUpperCase()+m.r.slice(1)} · ${m.ch}</div></div>
  <div class="db2"><div class="dr"><span class="dk">Chapter</span><span class="dv">${m.ch}</span></div><div class="dr"><span class="dk">Region</span><span class="dv">${m.r.charAt(0).toUpperCase()+m.r.slice(1)}</span></div><div class="dr"><span class="dk">Coords</span><span class="dv">X:${m.x}  Y:${m.y}</span></div><div class="dd">${m.d}</div>${tags?`<div class="dtg">${tags}</div>`:''}</div>`;}

cv.addEventListener('click',()=>{if(selId)ml.querySelector(`[data-id="${selId}"]`)?.classList.remove('sel');selId=null;document.getElementById('emp').style.display='';document.getElementById('det').style.display='none';});
cv.addEventListener('mousedown',e=>{if(e.target.closest('.mk'))return;drag=true;cv.classList.add('pan');ds={x:e.clientX,y:e.clientY};ps={x:px,y:py};});
window.addEventListener('mousemove',e=>{if(!drag)return;px=ps.x+e.clientX-ds.x;py=ps.y+e.clientY-ds.y;tf();});
window.addEventListener('mouseup',()=>{drag=false;cv.classList.remove('pan');});
cv.addEventListener('touchstart',e=>{if(e.touches.length===1&&!e.target.closest('.mk')){drag=true;ds={x:e.touches[0].clientX,y:e.touches[0].clientY};ps={x:px,y:py};}},{passive:true});
cv.addEventListener('touchmove',e=>{if(!drag||e.touches.length!==1)return;px=ps.x+e.touches[0].clientX-ds.x;py=ps.y+e.touches[0].clientY-ds.y;tf();},{passive:true});
cv.addEventListener('touchend',()=>{drag=false;});
cv.addEventListener('wheel',e=>{e.preventDefault();const r=cv.getBoundingClientRect();const mx=e.clientX-r.left,my=e.clientY-r.top;const d=e.deltaY>0?.88:1.13;const ns=Math.max(MINS,Math.min(MAXS,sc*d));px=mx-(mx-px)*(ns/sc);py=my-(my-py)*(ns/sc);sc=ns;tf();},{passive:false});
document.getElementById('zi').addEventListener('click',()=>{sc=Math.min(MAXS,sc*1.2);tf();});
document.getElementById('zo').addEventListener('click',()=>{sc=Math.max(MINS,sc*.83);tf();});
document.getElementById('zf').addEventListener('click',fit);

const RC={all:{x:546,y:541},hernand:{x:200,y:690},pailune:{x:268,y:360},demeniss:{x:488,y:605},crimson:{x:660,y:360},delesyia:{x:776,y:790},abyss:{x:473,y:425}};
document.querySelectorAll('.rt').forEach(b=>{b.addEventListener('click',()=>{document.querySelectorAll('.rt').forEach(x=>x.classList.remove('on'));b.classList.add('on');region=b.dataset.r;ref();const c=RC[region]||RC.all;px=cv.clientWidth/2-c.x*sc;py=cv.clientHeight/2-c.y*sc;tf();});});
document.getElementById('sch').addEventListener('input',function(){const q=this.value.toLowerCase().trim();ml.querySelectorAll('.mk').forEach(el=>{const m=D.find(d=>d.id===el.dataset.id);if(!m)return;const fo=flt[m.t]&&(region==='all'||m.r===region);const so=!q||m.n.toLowerCase().includes(q)||m.d.toLowerCase().includes(q)||(m.g||[]).some(g=>g.toLowerCase().includes(q));el.classList.toggle('hid',!(fo&&so));});if(q.length>2){const h=D.filter(m=>m.n.toLowerCase().includes(q));if(h.length===1)sel(h[0].id);}});

function mini(){const cv2=document.getElementById('mmc');const ctx=cv2.getContext('2d');const mw=148,mh=146,sx=mw/1093,sy=mh/1083;ctx.clearRect(0,0,mw,mh);ctx.fillStyle='rgba(35,37,40,.92)';ctx.fillRect(0,0,mw,mh);
  [{x:200,y:690,rx:155,ry:195,c:'rgba(40,70,25,.45)'},{x:268,y:355,rx:128,ry:155,c:'rgba(35,55,95,.4)'},{x:488,y:600,rx:138,ry:125,c:'rgba(75,60,22,.45)'},{x:660,y:360,rx:198,ry:215,c:'rgba(95,28,22,.4)'},{x:776,y:790,rx:175,ry:155,c:'rgba(22,75,85,.4)'}
  ].forEach(b=>{ctx.beginPath();ctx.ellipse(b.x*sx,b.y*sy,b.rx*sx,b.ry*sy,0,0,Math.PI*2);ctx.fillStyle=b.c;ctx.fill();});
  D.forEach(m=>{const el=ml.querySelector(`[data-id="${m.id}"]`);if(!el||el.classList.contains('hid'))return;ctx.beginPath();ctx.arc(m.x*sx,m.y*sy,1.8,0,Math.PI*2);ctx.fillStyle=T[m.t].c;ctx.fill();});
  const W=cv.clientWidth,H=cv.clientHeight;const vx=(-px/sc)*sx,vy=(-py/sc)*sy;const vW=(W/sc)*sx,vH=(H/sc)*sy;
  const mv=document.getElementById('mv');mv.style.left=Math.max(0,Math.min(mw,vx))+'px';mv.style.top=Math.max(0,Math.min(mh,vy))+'px';mv.style.width=Math.max(0,Math.min(mw-Math.max(0,vx),vW))+'px';mv.style.height=Math.max(0,Math.min(mh-Math.max(0,vy),vH))+'px';}

document.getElementById('mm').addEventListener('click',e=>{const r=e.currentTarget.getBoundingClientRect();px=cv.clientWidth/2-(e.clientX-r.left)/148*1093*sc;py=cv.clientHeight/2-(e.clientY-r.top)/146*1083*sc;tf();});
	
	
	
// =========================================================
// INICIO HERRAMIENTAS DE CREADOR (SOLO PARA TI)
// =========================================================

// 1. Rastreador de coordenadas en vivo (La cajita de abajo)
const box = document.createElement('div');
box.style.cssText = "position:fixed; bottom:20px; left:280px; background:rgba(0,0,0,0.8); color:#c9a84c; padding:10px; border:1px solid #c9a84c; z-index:10000; font-family:monospace; font-size:12px; pointer-events:none;";
document.body.appendChild(box);

cv.addEventListener('mousemove', function(e) {
    const rect = document.getElementById('mi').getBoundingClientRect();
    const x = Math.round((e.clientX - rect.left) / sc);
    const y = Math.round((e.clientY - rect.top) / sc);
    box.innerHTML = `VERIFICADOR - X: ${x} | Y: ${y}`;
});

// 2. Copiar al portapapeles con doble clic
document.getElementById('mi').addEventListener('dblclick', function(e) {
    const rect = this.getBoundingClientRect();
    const x = Math.round((e.clientX - rect.left) / sc);
    const y = Math.round((e.clientY - rect.top) / sc);
    
    // Dejar un punto rojo temporal
    const punto = document.createElement('div');
    punto.style.position = 'absolute';
    punto.style.left = x + 'px';
    punto.style.top = y + 'px';
    punto.style.width = '12px';
    punto.style.height = '12px';
    punto.style.background = '#e74c3c';
    punto.style.border = '2px solid white';
    punto.style.borderRadius = '50%';
    punto.style.transform = 'translate(-50%, -50%)';
    punto.style.zIndex = '9999';
    document.getElementById('ml').appendChild(punto);

    // Generar plantilla
    const plantilla = `{id:"nuevo_id",t:"npc",x:${x},y:${y},r:"hernand",ch:"Open",n:"Nombre",d:"Descripción",g:["Tag"]},`;
    
    // Copiar al portapapeles y avisar con ventana
    navigator.clipboard.writeText(plantilla).then(() => {
        alert("✅ COPIADO AL PORTAPAPELES:\n\n" + plantilla + "\n\nVe a tu código y pégalo en la lista.");
    }).catch(err => {
        alert("Error al copiar. Fíjate en el cajetín de abajo para ver la X y la Y.");
    });
});
// =========================================================
// FIN HERRAMIENTAS DE CREADOR
// =========================================================	
	
	
function init(){buildF();buildL();buildM();fit();}
const img=document.getElementById('mapimg');
if(img.complete&&img.naturalWidth>0)init();else{img.addEventListener('load',init);img.addEventListener('error',init);}
window.addEventListener('resize',fit);
</script>
</body>
</html>
