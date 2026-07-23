<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Span Healthcare — Save for Your Health</title>
  <link rel="canonical" href="https://span-healthcare.com/">
  <meta name="description"
    content="One platform. All your health savings needs. Trusted by individuals, families, and organisations across Nigeria.">
  <link rel="icon" type="image/png" sizes="32x32" href="img/Asset4.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/Asset4.png">
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="img/Asset4.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap"
    rel="stylesheet">
  <!-- <link rel="stylesheet" href="/assets/css/span.css" /> -->
  <link rel="stylesheet" href="assets/css/span.css" />
</head>

<body>

  <header id="nav">
    <a href="#" class="nav-logo">
      <img src="img/Asset2.png" alt="Span Healthcare" style="height:40px;width:auto;object-fit:contain">
    </a>
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#whyspan">Why Span</a></li>
      <li><a href="#testimonials">Testimonials</a></li>
    </ul>
    <div class="nav-r">
      <a href="maintenance" class="btn-cta nav-login">Log in</a>
      <button class="burger" id="burger" onclick="toggleMenu()"><span></span><span></span><span></span></button>
    </div>
  </header>

  <div class="mmenu" id="mmenu">
    <a href="#home" onclick="toggleMenu()">Home</a>
    <a href="#services" onclick="toggleMenu()">Services</a>
    <a href="#whyspan" onclick="toggleMenu()">Why Span</a>
    <a href="#testimonials" onclick="toggleMenu()">Testimonials</a>
    <a href="maintenance" class="btn-cta">Open an Account</a>
  </div>

  <!-- MARQUEE -->
  <div class="strip">
    <div class="strip-track">
      <div class="si">Health Savings Wallet</div>
      <div class="si">Telemedicine ₦3,500</div>
      <div class="si">Free Drug Delivery</div>
      <div class="si">Non-interest Returns</div>
      <div class="si">No Waiting Period</div>
      <div class="si">100+ Providers</div>
      <div class="si">Organisation Plans</div>
      <div class="si">Family Coverage</div>
      <div class="si">Health Savings Wallet</div>
      <div class="si">Telemedicine ₦3,500</div>
      <div class="si">Free Drug Delivery</div>
      <div class="si">Non-interest Returns</div>
      <div class="si">No Waiting Period</div>
      <div class="si">100+ Providers</div>
      <div class="si">Organisation Plans</div>
      <div class="si">Family Coverage</div>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════
     HERO — Health savings art as background
═══════════════════════════════════════════ -->
  <section class="hero" id="home">
    <!-- LEFT — text content -->
    <div class="hero-left">
      <div class="hero-content rv">
        <h1><span class="h1-dark">Save for your health.</span><br><em class="h1-shine">Before you need it.</em>
        </h1>
        <p class="hero-sub">One platform. All your health savings needs. Trusted by individuals, families, and
          organisations across Nigeria.</p>
        <div class="hero-btns">
          <a href="maintenance" class="btn-p">Open an Account <svg width="13" height="13" viewBox="0 0 14 14"
              fill="none">
              <path d="M1 7h12M7 1l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg></a>
          <a href="#services" class="btn-o">Our Services</a>
        </div>
        <div class="hero-stats">
          <div class="hs">
            <div class="hs-v"><span>₦50k</span></div>
            <div class="hs-l">Individual minimum</div>
          </div>
          <div class="hs">
            <div class="hs-v"><span>₦3,500</span></div>
            <div class="hs-l">Telemedicine fee</div>
          </div>
          <div class="hs">
            <div class="hs-v"><span>0%</span></div>
            <div class="hs-l">Riba</div>
          </div>
        </div>
      </div>
    </div>

    <!-- RIGHT — 3D isometric illustration -->
    <div class="hero-right">
      <svg style="position:absolute;inset:0;width:100%;height:100%;pointer-events:none" viewBox="0 0 600 700"
        preserveAspectRatio="xMidYMid slice">
        <defs>
          <radialGradient id="wave1" cx="80%" cy="20%" r="60%">
            <stop offset="0%" stop-color="#459DAF" stop-opacity=".12" />
            <stop offset="100%" stop-color="#459DAF" stop-opacity="0" />
          </radialGradient>
          <radialGradient id="wave2" cx="20%" cy="80%" r="50%">
            <stop offset="0%" stop-color="#00B4D0" stop-opacity=".1" />
            <stop offset="100%" stop-color="#00B4D0" stop-opacity="0" />
          </radialGradient>
        </defs>
        <circle cx="580" cy="80" r="320" fill="url(#wave1)" />
        <circle cx="60" cy="620" r="260" fill="url(#wave2)" />
        <circle cx="500" cy="580" r="180" fill="rgba(69,157,175,.06)" />
      </svg>

      <svg viewBox="0 0 600 680" fill="none" xmlns="http://www.w3.org/2000/svg"
        style="width:100%;max-width:580px;height:auto;position:relative;z-index:2">
        <defs>
          <linearGradient id="platTop" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#e8f7fa" />
            <stop offset="100%" stop-color="#c8eaf0" />
          </linearGradient>
          <linearGradient id="platLeft" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#aad8e4" />
            <stop offset="100%" stop-color="#7bbfcf" />
          </linearGradient>
          <linearGradient id="platRight" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#c8eaf0" />
            <stop offset="100%" stop-color="#98cdd9" />
          </linearGradient>
          <linearGradient id="figBody" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#2d7f91" />
            <stop offset="100%" stop-color="#459DAF" />
          </linearGradient>
          <linearGradient id="figLeg" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#0a2a35" />
            <stop offset="100%" stop-color="#0d3a48" />
          </linearGradient>
          <linearGradient id="cardGrad" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#ffffff" />
            <stop offset="100%" stop-color="#edf8fb" />
          </linearGradient>
          <linearGradient id="cubeTopT" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#5bbfcf" />
            <stop offset="100%" stop-color="#459DAF" />
          </linearGradient>
          <linearGradient id="cubeLT" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#2d7f91" />
            <stop offset="100%" stop-color="#1a5566" />
          </linearGradient>
          <linearGradient id="cubeRT" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#459DAF" />
            <stop offset="100%" stop-color="#2d7f91" />
          </linearGradient>
          <linearGradient id="cubeTopC" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#FF8A75" />
            <stop offset="100%" stop-color="#FF6B52" />
          </linearGradient>
          <linearGradient id="cubeLCo" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#cc4433" />
            <stop offset="100%" stop-color="#aa3322" />
          </linearGradient>
          <linearGradient id="cubeTopG" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#FFD060" />
            <stop offset="100%" stop-color="#F5A623" />
          </linearGradient>
          <linearGradient id="cubeLG" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#c47a00" />
            <stop offset="100%" stop-color="#a06200" />
          </linearGradient>
          <filter id="cardShadow">
            <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#459DAF" flood-opacity=".18" />
          </filter>
          <filter id="figShadow">
            <feDropShadow dx="0" dy="6" stdDeviation="8" flood-color="#459DAF" flood-opacity=".25" />
          </filter>
          <filter id="glow2">
            <feGaussianBlur stdDeviation="5" result="blur" />
            <feMerge>
              <feMergeNode in="blur" />
              <feMergeNode in="SourceGraphic" />
            </feMerge>
          </filter>
        </defs>

        <!-- PLATFORM -->
        <polygon points="300,390 460,480 300,570 140,480" fill="url(#platTop)" stroke="#b8dce6"
          stroke-width="1" />
        <polygon points="140,480 140,536 300,626 300,570" fill="url(#platLeft)" />
        <polygon points="300,570 460,480 460,536 300,626" fill="url(#platRight)" />
        <line x1="220" y1="435" x2="380" y2="525" stroke="#459DAF" stroke-width=".6" opacity=".3" />
        <line x1="260" y1="413" x2="420" y2="503" stroke="#459DAF" stroke-width=".6" opacity=".2" />
        <line x1="180" y1="457" x2="340" y2="547" stroke="#459DAF" stroke-width=".6" opacity=".2" />
        <line x1="220" y1="480" x2="380" y2="390" stroke="#459DAF" stroke-width=".6" opacity=".3" />
        <line x1="260" y1="503" x2="420" y2="413" stroke="#459DAF" stroke-width=".6" opacity=".2" />
        <line x1="180" y1="457" x2="340" y2="367" stroke="#459DAF" stroke-width=".6" opacity=".2" />
        <ellipse cx="310" cy="490" rx="50" ry="18" fill="rgba(69,157,175,.2)" />

        <!-- FIGURE -->
        <!-- GROWING MONEY CHART — 3D bars rising on platform -->

        <!-- Bar 1 — shortest, deep teal -->
        <g
          style="animation:bar1 1s cubic-bezier(.34,1.56,.64,1) forwards 0.8s;transform:scaleY(0);transform-origin:300px 465px">
          <!-- Bar top face -->
          <polygon points="190,420 230,398 270,420 230,442" fill="#00E5FF" />
          <!-- Bar left face -->
          <polygon points="190,420 190,465 230,487 230,442" fill="#0099B8" />
          <!-- Bar right face -->
          <polygon points="230,442 270,420 270,465 230,487" fill="#00C8E8" />
          <!-- Naira on bar -->
          <text x="230" y="415" font-family="Inter,sans-serif" font-size="11" font-weight="700" fill="#020C12"
            text-anchor="middle" opacity=".8">₦</text>
        </g>

        <!-- Bar 2 — medium, vivid coral -->
        <g
          style="animation:bar1 1s cubic-bezier(.34,1.56,.64,1) forwards 1.1s;transform:scaleY(0);transform-origin:300px 465px">
          <polygon points="240,370 280,348 320,370 280,392" fill="#FF6B2B" />
          <polygon points="240,370 240,465 280,487 280,392" fill="#CC2200" />
          <polygon points="280,392 320,370 320,465 280,487" fill="#FF3D00" />
          <text x="280" y="365" font-family="Inter,sans-serif" font-size="11" font-weight="700" fill="white"
            text-anchor="middle" opacity=".9">₦</text>
        </g>

        <!-- Bar 3 — tall, electric gold -->
        <g
          style="animation:bar1 1s cubic-bezier(.34,1.56,.64,1) forwards 1.4s;transform:scaleY(0);transform-origin:300px 465px">
          <polygon points="290,310 330,288 370,310 330,332" fill="#FFD54F" />
          <polygon points="290,310 290,465 330,487 330,332" fill="#FF8F00" />
          <polygon points="330,332 370,310 370,465 330,487" fill="#FFB300" />
          <text x="330" y="305" font-family="Inter,sans-serif" font-size="11" font-weight="700" fill="#020C12"
            text-anchor="middle" opacity=".9">₦</text>
        </g>

        <!-- Bar 4 — tallest, vivid lime green growth -->
        <g
          style="animation:bar1 1s cubic-bezier(.34,1.56,.64,1) forwards 1.7s;transform:scaleY(0);transform-origin:300px 465px">
          <polygon points="340,240 380,218 420,240 380,262" fill="#69FF9A" filter="url(#glow2)" />
          <polygon points="340,240 340,465 380,487 380,262" fill="#00A845" />
          <polygon points="380,262 420,240 420,465 380,487" fill="#00D460" />
          <text x="380" y="234" font-family="Inter,sans-serif" font-size="14" font-weight="900" fill="#020C12"
            text-anchor="middle" opacity=".95">₦</text>
        </g>

        <!-- Trend arrow rising above tallest bar -->
        <g style="animation:fade-in-up 1s ease forwards 2.4s;opacity:0" filter="url(#glow2)">
          <polyline points="195,435 245,385 295,328 345,265 385,210" stroke="#00E5FF" stroke-width="3"
            stroke-linecap="round" stroke-linejoin="round" fill="none" />
          <circle cx="195" cy="435" r="5" fill="#00E5FF" />
          <circle cx="245" cy="385" r="5" fill="#00E5FF" />
          <circle cx="295" cy="328" r="5" fill="#00E5FF" />
          <circle cx="345" cy="265" r="5" fill="#00E5FF" />
          <circle cx="385" cy="210" r="7" fill="#00E5FF" filter="url(#glow2)" />
          <!-- Arrow tip -->
          <path d="M385 210 L400 190 M400 190 L390 190 M400 190 L400 200" stroke="#00E5FF" stroke-width="2.5"
            stroke-linecap="round" stroke-linejoin="round" />
        </g>

        <!-- Percentage growth label floating above -->
        <g style="animation:float-up 3s ease-in-out infinite 2s;opacity:0;animation-fill-mode:forwards"
          filter="url(#cardShadow)">
          <rect x="330" y="155" width="100" height="44" rx="12" fill="#020C12" stroke="#00E5FF"
            stroke-width="1.5" />
          <text x="380" y="174" font-family="Inter,sans-serif" font-size="9" font-weight="600" fill="#00C8E8"
            text-anchor="middle" letter-spacing=".08em">GROWTH</text>
          <text x="380" y="192" font-family="Inter,sans-serif" font-size="16" font-weight="900" fill="#69FF9A"
            text-anchor="middle">+28%</text>
        </g>

        <!-- Rising coins above bars -->
        <text style="animation:naira-drift 3s ease-in-out infinite" x="170" y="360"
          font-family="Inter,sans-serif" font-size="16" font-weight="700" fill="#00E5FF" opacity=".6"
          filter="url(#glow2)">₦</text>
        <text style="animation:naira-drift 4s ease-in-out infinite 1s" x="220" y="300"
          font-family="Inter,sans-serif" font-size="12" font-weight="700" fill="#FFB300" opacity=".55"
          filter="url(#glow2)">₦</text>
        <text style="animation:naira-drift 3.5s ease-in-out infinite 0.5s" x="440" y="330"
          font-family="Inter,sans-serif" font-size="14" font-weight="700" fill="#69FF9A" opacity=".5"
          filter="url(#glow2)">₦</text>
        <text style="animation:naira-drift 5s ease-in-out infinite 2s" x="130" y="280"
          font-family="Inter,sans-serif" font-size="10" font-weight="600" fill="#FF6B2B"
          opacity=".45">₦</text>

        <!-- CARD 1 — Health Wallet -->


        <!-- CARD 2 — Savings Growth -->

        <!-- CARD 3 — Telemedicine -->

        <!-- 3D CUBES -->
        <g style="animation:float-up 3s ease-in-out infinite 0.5s">
          <polygon points="80,360 110,344 140,360 110,376" fill="url(#cubeTopT)" />
          <polygon points="80,360 80,390 110,406 110,376" fill="url(#cubeLT)" />
          <polygon points="110,376 140,360 140,390 110,406" fill="url(#cubeRT)" />
        </g>
        <g style="animation:float-down 3.5s ease-in-out infinite 1s">
          <polygon points="490,82 514,70 538,82 514,94" fill="url(#cubeTopC)" />
          <polygon points="490,82 490,104 514,116 514,94" fill="url(#cubeLCo)" />
          <polygon points="514,94 538,82 538,104 514,116" fill="#dd4433" />
        </g>
        <g style="animation:float-up 4.5s ease-in-out infinite 2s">
          <polygon points="60,540 84,528 108,540 84,552" fill="url(#cubeTopG)" />
          <polygon points="60,540 60,558 84,570 84,552" fill="url(#cubeLG)" />
          <polygon points="84,552 108,540 108,558 84,570" fill="#d4860a" />
        </g>
        <g style="animation:float-down 2.8s ease-in-out infinite 1.5s">
          <polygon points="170,120 190,110 210,120 190,130" fill="#5bbfcf" opacity=".8" />
          <polygon points="170,120 170,136 190,146 190,130" fill="#2d7f91" opacity=".8" />
          <polygon points="190,130 210,120 210,136 190,146" fill="#459DAF" opacity=".8" />
        </g>

        <!-- HEALTH CROSS -->
        <g style="animation:float-up 4s ease-in-out infinite 0.8s" filter="url(#glow2)">
          <rect x="358" y="115" width="14" height="44" rx="5" fill="#459DAF" opacity=".85" />
          <rect x="340" y="133" width="50" height="14" rx="5" fill="#459DAF" opacity=".85" />
        </g>

        <!-- FLOATING NAIRA -->
        <text style="animation:naira-drift 5s ease-in-out infinite" x="488" y="340"
          font-family="Inter,sans-serif" font-size="18" font-weight="700" fill="#459DAF" opacity=".35"
          filter="url(#glow2)">₦</text>
        <text style="animation:naira-drift 6s ease-in-out infinite 1.5s" x="58" y="430"
          font-family="Inter,sans-serif" font-size="14" font-weight="600" fill="#00B4D0" opacity=".3">₦</text>

        <!-- HEARTBEAT -->
        <polyline class="art-heartbeat"
          points="60,635 90,635 106,608 124,668 140,618 156,635 194,635 206,626 218,635 260,635"
          stroke="#459DAF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"
          filter="url(#glow2)" opacity=".7" />

        <!-- DOTS -->
        <circle cx="370" cy="580" r="3" fill="#459DAF" opacity=".3" />
        <circle cx="390" cy="564" r="2" fill="#00B4D0" opacity=".25" />
        <circle cx="412" cy="574" r="2.5" fill="#459DAF" opacity=".28" />
        <line x1="370" y1="580" x2="390" y2="564" stroke="#459DAF" stroke-width=".8" opacity=".15" />
        <line x1="390" y1="564" x2="412" y2="574" stroke="#459DAF" stroke-width=".8" opacity=".15" />
      </svg>
    </div>
  </section>

  <!-- STATEMENT -->
  <section class="statement" id="statement">
    <div class="st-inner">

      <!-- LEFT -->
      <div class="st-left">
        <div class="st-lbl">Health in Nigeria</div>
        <h2 class="st-h">Your health costs<br>will rise.<br><em>Will your savings?</em></h2>
        <p class="st-sub">Nigeria is in the middle of a quiet health crisis — many undiagnosed, none financially
          prepared. Span exists to change that.</p>
      </div>

      <!-- RIGHT — full photo with overlaid stats -->
      <div class="st-right">
        <div class="st-photo">
          <img src="img/smile.jpg" alt="Nigerian family">
        </div>
        <div class="st-overlay"></div>
        <div class="st-accent"></div>
        <div class="st-caption">Real Nigerians. Real health costs.</div>
        <div class="st-stats">
          <div class="st-stat">
            <div class="st-sv">8M+</div>
            <div class="st-sl">Diabetics</div>
          </div>
          <div class="st-stat">
            <div class="st-sv">1 in 4</div>
            <div class="st-sl">Hypertensive</div>
          </div>
          <div class="st-stat">
            <div class="st-sv">₦480k</div>
            <div class="st-sl">Avg crisis cost</div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- SPLIT 1 — Health Savings -->
  <section class="split" id="services">
    <div class="split-inner rv">
      <div class="art-tile at1">
        <img src="img/Pic1.jpg" alt="Health savings member"
          style="width:100%;height:100%;object-fit:cover;display:block;position:absolute;inset:0">
        <div
          style="position:absolute;inset:0;background:linear-gradient(to top,rgba(3,14,20,.7) 0%,transparent 60%)">
        </div>
        <div class="tile-card">
          <div>
            <div class="tc-v">₦50,000</div>
            <div class="tc-l">Individual minimum</div>
          </div>
          <div class="tc-b">Active Day 1</div>
        </div>
      </div>
      <div class="split-content">
        <div class="sec-lbl">Health Savings Wallet</div>
        <h2 class="sec-h">Your money.<br><em>Always yours.</em></h2>
        <p class="sec-p">A dedicated account for your healthcare costs. Your balance is always accessible for
          consultations, hospital visits, and medications — and earns non-interest returns while it waits.</p>
        <ul class="check-list">
          <li>No waiting period — active from day one</li>
          <li>Pre-existing conditions covered immediately</li>
          <li>Idle balance are earning returns periodically</li>
          <li>Span pays hospitals directly — no forms needed</li>
        </ul>
        <a href="maintenance" class="btn-p" style="width:fit-content">Open an Account →</a>
      </div>
    </div>
  </section>

  <!-- SPLIT 2 — Telemedicine -->
  <section class="split alt">
    <div class="split-inner rev rv">
      <div class="art-tile at2">
        <img src="img/Pic2.jpg" alt="Telemedicine consultation"
          style="width:100%;height:100%;object-fit:cover;display:block;position:absolute;inset:0">
        <div
          style="position:absolute;inset:0;background:linear-gradient(to top,rgba(3,14,20,.7) 0%,transparent 60%)">
        </div>
        <div class="tile-card">
          <div>
            <div class="tc-v">₦3,500</div>
            <div class="tc-l">Flat rate · Free drug delivery</div>
          </div>
          <div class="tc-b">24/7</div>
        </div>
      </div>
      <div class="split-content">
        <div class="sec-lbl">Telemedicine + Delivery</div>
        <h2 class="sec-h">A doctor.<br><em>Wherever you are.</em></h2>
        <p class="sec-p">Consult a verified Nigerian doctor via video, audio, or chat — any time, any day.
          Receive prescriptions instantly. Medications delivered free to your door, billed from your wallet.
        </p>
        <ul class="check-list">
          <li>₦3,500 flat rate — no surprises</li>
          <li>Free drug delivery with every prescription</li>
          <li>MDCN-registered Nigerian doctors</li>
          <li>24/7 access — no appointment booking needed</li>
        </ul>
        <a href="maintenance" class="btn-p" style="width:fit-content">Start a Consultation →</a>
      </div>
    </div>
  </section>

  <!-- SPLIT 3 — Family -->
  <section class="split">
    <div class="split-inner rv">
      <div class="art-tile at3">
        <img src="img/Pic3.jpg" alt="Family coverage"
          style="width:100%;height:100%;object-fit:cover;display:block;position:absolute;inset:0">
        <div
          style="position:absolute;inset:0;background:linear-gradient(to top,rgba(3,14,20,.7) 0%,transparent 60%)">
        </div>
        <div class="tile-card">
          <div>
            <div class="tc-v">₦100,000</div>
            <div class="tc-l">Family or organisation minimum</div>
          </div>
          <div class="tc-b">48hr Setup</div>
        </div>
      </div>
      <div class="split-content">
        <div class="sec-lbl">Family & Organisation Plans</div>
        <h2 class="sec-h">One account.<br><em>Whole household.</em></h2>
        <p class="sec-p">One account covers your entire household — spouse, children, and parents. Schools,
          SMEs, and agencies can enroll staff on tailored group plans that give real healthcare access to
          every team member.</p>
        <ul class="check-list">
          <li>₦100,000 minimum — family or organisation</li>
          <li>Spouse, children, and parents on one wallet</li>
          <li>Group plans for schools, SMEs, and agencies</li>
          <li>Team setup completed within 48 hours</li>
        </ul>
        <a href="maintenance" class="btn-p" style="width:fit-content">Get a Team Plan →</a>
      </div>
    </div>
  </section>

  <!-- DISEASE CARDS -->
  <section class="disease" id="why">
    <!-- Finance art sketch in background -->
    <svg class="disease-art" viewBox="0 0 1200 500" fill="none" preserveAspectRatio="xMidYMid slice">
      <polyline points="50,450 150,380 250,320 350,260 450,210 600,160 750,130 900,100 1050,75 1200,50"
        stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" opacity=".6" />
      <polygon points="1200,50 1188,42 1188,58" fill="white" opacity=".6" />
      <circle cx="600" cy="250" r="180" stroke="white" stroke-width="1.5" opacity=".15" stroke-dasharray="8 14" />
      <rect x="50" y="350" width="30" height="100" rx="6" fill="white" opacity=".15" />
      <rect x="100" y="300" width="30" height="150" rx="6" fill="white" opacity=".15" />
      <rect x="150" y="250" width="30" height="200" rx="6" fill="white" opacity=".15" />
      <rect x="200" y="200" width="30" height="250" rx="6" fill="white" opacity=".15" />
      <circle cx="1100" cy="400" r="60" stroke="white" stroke-width="1.5" opacity=".1" />
      <line x1="1040" y1="400" x2="1160" y2="400" stroke="white" stroke-width="1" opacity=".15" />
      <line x1="1100" y1="340" x2="1100" y2="460" stroke="white" stroke-width="1" opacity=".15" />
    </svg>
    <div class="dh rv">
      <div class="sec-lbl sec-lbl-w">Why It Matters</div>
      <h2 class="sec-h-w">The cost of doing nothing<br><em>is enormous</em></h2>
      <p class="sec-p-w">Three conditions are draining Nigerian families of billions every year.</p>
    </div>
    <div class="d-grid">
      <div class="d-card rv">
        <div class="d-ico"><svg width="22" height="22" viewBox="0 0 20 20" fill="none" stroke="#00B4D0"
            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 10L10 4a4.24 4.24 0 016 6l-6 6a4.24 4.24 0 01-6-6z" />
          </svg></div>
        <div class="d-num">8 Million</div>
        <div class="d-title">Nigerians Living With Diabetes</div>
        <p class="d-text">Nearly 3 in 4 are undiagnosed. Managing diabetes costs ₦80,000–₦200,000 per year —
          every year, for life.</p>
      </div>
      <div class="d-card rv d1">
        <div class="d-ico"><svg width="22" height="22" viewBox="0 0 20 20" fill="none" stroke="#00B4D0"
            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M10 17S2 12 2 7a4 4 0 017-2.65A4 4 0 0118 7c0 5-8 10-8 10z" />
          </svg></div>
        <div class="d-num">1 in 4</div>
        <div class="d-title">Nigerian Adults Have Hypertension</div>
        <p class="d-text">Silent. Lifelong medication required. Untreated it leads to stroke, heart failure,
          kidney damage — the most expensive outcomes in healthcare.</p>
      </div>
      <div class="d-card rv d2">
        <div class="d-ico"><svg width="22" height="22" viewBox="0 0 20 20" fill="none" stroke="#00B4D0"
            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M10 2L3 5v5c0 4.5 3 8 7 9 4-1 7-4.5 7-9V5l-7-3z" />
          </svg></div>
        <div class="d-num">₦480,000</div>
        <div class="d-title">Average Catastrophic Health Event</div>
        <p class="d-text">A single hospitalisation can cost ₦300,000–₦2,000,000 out of pocket. Most Nigerian
          families are one illness from a financial crisis.</p>
      </div>
    </div>
  </section>

  <!-- PHONE CARDS -->
  <section class="phone-sec" id="plans">
    <div class="ph-head rv">
      <div class="sec-lbl">What You Get</div>
      <h2 class="sec-h">Everything in one account</h2>
      <p class="sec-sub">Three essential services. One wallet. No extra subscriptions.</p>
    </div>
    <div class="ph-grid">

      <!-- CARD 1 — Health Savings -->
      <div class="ph-card">
        <div class="ph-img">
          <img src="img/card01.jpg" alt="Health savings">
          <div class="ph-img-overlay"></div>
        </div>
        <div class="ph-body">
          <div class="ph-tag">Health Savings</div>
          <div class="ph-h">Your Dedicated<br>Health Wallet</div>
          <p class="ph-p">A savings account built exclusively for healthcare. Always accessible. Earns
            non-interest returns while it waits.</p>
          <div class="ph-stat">
            <div class="ph-val">₦50,000</div>
            <div class="ph-lbl">Minimum to open · Individual account</div>
          </div>
        </div>
      </div>

      <!-- CARD 2 — Telemedicine -->
      <div class="ph-card ph-dark">
        <div class="ph-img">
          <img src="img/card002.jpg" alt="Telemedicine">
          <div class="ph-img-overlay"></div>
        </div>
        <div class="ph-body">
          <div class="ph-tag">Digital Health</div>
          <div class="ph-h">Telemedicine +<br>Free Drug Delivery</div>
          <p class="ph-p">Consult verified Nigerian doctors anytime. Prescriptions instantly. Medications
            delivered free.</p>
          <div class="ph-stat">
            <div class="ph-val">₦3,500</div>
            <div class="ph-lbl">Per consultation · Free drug delivery</div>
          </div>
        </div>
      </div>

      <!-- CARD 3 — Family -->
      <div class="ph-card">
        <div class="ph-img">
          <img src="img/card03.jpg" alt="Family coverage">
          <div class="ph-img-overlay"></div>
        </div>
        <div class="ph-body">
          <div class="ph-tag">Family & Organisation</div>
          <div class="ph-h">Family & Group<br>Coverage</div>
          <p class="ph-p">One account. Spouse, children, parents. Schools, SMEs, and agencies with tailored
            group plans.</p>
          <div class="ph-stat">
            <div class="ph-val">₦100,000</div>
            <div class="ph-lbl">Minimum · Family or organisation account</div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- CLARITY -->
  <section class="clarity" id="whyspan">
    <div class="clarity-inner rv">

      <!-- LEFT — Phone image -->
      <div class="clarity-phone">
        <img src="img/CTA1.png" alt="Span Healthcare app" class="clarity-phone-img">

        <div class="clarity-float f2">
          <div class="cf-val">+₦3,200</div>
          <div class="cf-lbl"><span class="cf-dot"></span>From investment returns</div>
        </div>
        <div class="clarity-float f3">
          <div class="cf-val">0%</div>
          <div class="cf-lbl">Interest</div>
        </div>
      </div>

      <!-- RIGHT — Content -->
      <div class="clarity-content">
        <div class="sec-lbl" style="color:var(--teal)">Why Span</div>
        <h2 class="clarity-h">Span offers a designated Health Savings Account built for individuals and
          families.<br><em>Something better.</em></h2>
        <p class="clarity-sub">Your own money. Always accessible. Always growing. No claims. No rejection.</p>

        <div class="clarity-notes">
          <div class="clarity-note">
            <div class="cn-ico">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2DB8D4"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2L3 7v5c0 5.5 3.8 10.7 9 12 5.2-1.3 9-6.5 9-12V7L12 2z" />
                <path d="M9 12l2 2 4-4" />
              </svg>
            </div>
            <div>
              <div class="cn-title">Active from day one</div>
              <div class="cn-text">No waiting periods. No approval queues. Deposit and your wallet is live
                immediately — pre-existing conditions covered.</div>
            </div>
          </div>
          <div class="clarity-note">
            <div class="cn-ico">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2DB8D4"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="7" width="20" height="14" rx="3" />
                <path d="M16 14a1 1 0 1 0 2 0 1 1 0 0 0-2 0" />
                <path d="M2 10h20M6 7V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2" />
              </svg>
            </div>
            <div>
              <div class="cn-title">Your money, always yours</div>
              <div class="cn-text">No claims, no rejections. Pay directly from your wallet at any partner
                provider with no forms.</div>
            </div>
          </div>
          <div class="clarity-note">
            <div class="cn-ico">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2DB8D4"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                <polyline points="16 7 22 7 22 13" />
              </svg>
            </div>
            <div>
              <div class="cn-title">Earns returns periodically</div>
              <div class="cn-text">Your savings is growing your balance while it waits. 0% Riba.</div>
            </div>
          </div>
        </div>

        <a href="maintenance" class="btn-p" style="width:fit-content;display:inline-flex;margin-top:1.5rem">Open
          an Account →</a>
      </div>

    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="testi" id="testimonials">
    <div class="testi-hd rv">
      <div class="testi-big">Real Nigerians saving for health and accessing care without friction.</div>
    </div>
    <div class="tg rv d1">
      <div class="tc">
        <div class="tc-q">"</div>
        <p class="tc-text">My father has hypertension. With Span we consult a doctor from home, get his
          medications delivered free, and his hospital visits are billed straight from the wallet. No forms.
          No waiting.</p>
        <div class="tc-name">Chioma O.</div>
        <div class="tc-role">Lagos — Social Media Manager</div>
      </div>
      <div class="tc">
        <div class="tc-q">"</div>
        <p class="tc-text">I switched from health insurance that kept rejecting my claims. With Span, my balance
          is mine. I use it when I need it. No approvals, no rejections.</p>
        <div class="tc-name">Tunde A.</div>
        <div class="tc-role">Abuja — IT Professional</div>
      </div>
      <div class="tc">
        <div class="tc-q">"</div>
        <p class="tc-text">We enrolled our school staff on Span. Costs dropped and for the first time our
          teachers feel genuinely looked after. The telemedicine alone saved us hours of lost working time.
        </p>
        <div class="tc-name">Bello K.</div>
        <div class="tc-role">Kano — School Administrator</div>
      </div>
    </div>
  </section>

  <!-- CTA — teal with coin art background -->
  <section class="cta" id="cta">
    <div class="cta-inner">
      <div class="cta-counters">
        <div class="c-box">
          <div class="c-val" id="c1">0</div>
          <div class="c-lbl">Verified healthcare<br>providers</div>
        </div>
        <div class="c-box">
          <div class="c-val" id="c2">0</div>
          <div class="c-lbl">Active account<br>holders</div>
        </div>
      </div>
      <div class="cta-right">
        <div class="halal-tag"><span class="hdot"></span>Non-interest</div>
        <h2 class="cta-h">Your health fund<br>starts <em>today.</em></h2>
        <p class="cta-sub">The only Sharia-compliant health savings platform in Nigeria. Open your account in
          minutes.</p>
        <a href="maintenance" class="btn-cw">Open an Account →</a>
      </div>
    </div>
  </section>

  <?php
  include_once('footer.php');
  ?>

  <script>
    const nav = document.getElementById('nav');
    window.addEventListener('scroll', () => nav.classList.toggle('scrolled', scrollY > 40));

    function toggleMenu() {
      document.getElementById('mmenu').classList.toggle('open')
    }
    document.addEventListener('click', e => {
      const m = document.getElementById('mmenu'),
        b = document.getElementById('burger');
      if (m.classList.contains('open') && !m.contains(e.target) && !b.contains(e.target)) m.classList.remove(
        'open');
    });
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) e.target.classList.add('on')
      });
    }, {
      threshold: .06,
      rootMargin: '0px 0px -24px 0px'
    });
    document.querySelectorAll('.rv').forEach(el => obs.observe(el));
  </script>
  <script>
    function animCount(el, target, suffix, dur) {
      let t0 = null;

      function f(ts) {
        if (!t0) t0 = ts;
        const p = Math.min((ts - t0) / dur, 1);
        const e = 1 - Math.pow(1 - p, 3);
        el.textContent = Math.round(e * target) + suffix;
        if (p < 1) requestAnimationFrame(f);
      }
      requestAnimationFrame(f);
    }
    const ctaObs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          animCount(document.getElementById('c1'), 100, '+', 1600);
          animCount(document.getElementById('c2'), 50, '+', 1400);
          ctaObs.disconnect();
        }
      });
    }, {
      threshold: .3
    });
    const ctaEl = document.querySelector('.cta');
    if (ctaEl) ctaObs.observe(ctaEl);
  </script>

</body>

</html>