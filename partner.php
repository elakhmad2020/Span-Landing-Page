<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Span Healthcare — Save for Your Health</title>
  <link rel="canonical" href="https://span-healthcare.com/">
  <meta name="description"
    content="One platform. All your health savings needs. Trusted by individuals, families, and organisations across Nigeria.">
  <link rel="icon" type="image/png" sizes="32x32" href="img/Asset 4.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/Asset 4.png">
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="img/Asset 4.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="assets/css/partner.css" />
</head>

<body>

  <!-- NAV -->
  <header id="nav">
    <a href="index" class="nav-logo">
      <img src="img/Asset2.png" alt="Span Healthcare" style="height:48px;width:auto;object-fit:contain">
    </a>
    <ul class="nav-links">
      <li><a href="index#home">Home</a></li>
      <li><a href="index#services">Services</a></li>
      <li><a href="index#whyspan">Why Span</a></li>
      <li><a href="index#testimonials">Testimonials</a></li>
    </ul>
    <div class="nav-r">
      <a href="maintenance" class="btn-cta">Log in</a>
      <button class="burger" id="burger" onclick="toggleMenu()"><span></span><span></span><span></span></button>
    </div>
  </header>

  <div class="mmenu" id="mmenu">
    <a href="index#home" onclick="toggleMenu()">Home</a>
    <a href="index#services" onclick="toggleMenu()">Services</a>
    <a href="index#whyspan" onclick="toggleMenu()">Why Span</a>
    <a href="index#testimonials" onclick="toggleMenu()">Testimonials</a>
  </div>

  <!-- HERO -->
  <section class="hero">
    <h1 class="rv d1">Grow with <em>Span Healthcare</em></h1>
    <p class="hero-sub rv d2">Join Nigeria's first Sharia-compliant health savings network. Partner with us to
      expand your reach and serve more patients across the country.</p>
  </section>

  <!-- CURRENT PARTNERS -->
  <section class="partners-sec">
    <div class="rv">
      <div class="sec-lbl w">Our Current Partners</div>
    </div>
    <div class="partners-row rv d1">
      <div class="p-card">
        <div class="p-logo-box"><img src="img/wella.png" alt="Wella Health"></div>
        <div class="p-name">Wella Health</div>
      </div>
      <div class="p-card">
        <div class="p-logo-box"><img src="img/konooz.png" alt="Konooz Investment"></div>
        <div class="p-name">Konooz Investment</div>
      </div>
    </div>
  </section>

  <!-- PARTNER CATEGORIES -->
  <section class="categories">
    <div class="sec-head rv">
      <div class="sec-lbl t">Open Partnerships</div>
      <h2 class="sec-h dark">Who can partner with Span?</h2>
      <p class="sec-p d">We are actively onboarding healthcare providers, pharmacies, laboratories, and delivery
        partners across Nigeria.</p>
    </div>
    <div class="cat-grid">

      <!-- Hospitals -->
      <div class="cat-card rv">
        <div class="cat-ico">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2DB8D4" stroke-width="1.8"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <line x1="12" y1="8" x2="12" y2="16" />
            <line x1="8" y1="12" x2="16" y2="12" />
          </svg>
        </div>
        <div class="cat-title">Hospitals & Clinics</div>
        <div class="cat-sub">Outpatient and inpatient facilities that want to expand their patient base and
          receive guaranteed direct payment from Span on behalf of members.</div>
        <div class="cat-benefits">
          <div class="cat-b">Guaranteed direct payment from Span wallet</div>
          <div class="cat-b">Access to Span's growing member base</div>
          <div class="cat-b">No claims process — Span authorises and settles</div>
          <div class="cat-b">Listed on Span's verified provider network</div>
        </div>
        <div class="cat-tag">Open for Applications</div>
      </div>

      <!-- Pharmacies -->
      <div class="cat-card rv d1">
        <div class="cat-ico">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2DB8D4" stroke-width="1.8"
            stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2v-4M9 21H5a2 2 0 0 1-2-2v-4m0 0h18" />
          </svg>
        </div>
        <div class="cat-title">Pharmacies</div>
        <div class="cat-sub">Licensed pharmacies fulfilling prescriptions generated through Span telemedicine
          consultations and partner hospital referrals across Nigeria.</div>
        <div class="cat-benefits">
          <div class="cat-b">Direct prescription pipeline from Span doctors</div>
          <div class="cat-b">Guaranteed payment per fulfilled prescription</div>
          <div class="cat-b">Integration with our delivery logistics network</div>
          <div class="cat-b">Access to recurring member prescriptions</div>
        </div>
        <div class="cat-tag">Open for Applications</div>
      </div>

      <!-- Labs -->
      <div class="cat-card rv d2">
        <div class="cat-ico">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2DB8D4" stroke-width="1.8"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M9 3v11l-4 6h14l-4-6V3" />
            <line x1="9" y1="3" x2="15" y2="3" />
          </svg>
        </div>
        <div class="cat-title">Diagnostic Laboratories</div>
        <div class="cat-sub">Certified laboratories offering diagnostic tests, blood work, imaging, and
          screenings to Span members at pre-negotiated rates.</div>
        <div class="cat-benefits">
          <div class="cat-b">Referrals from Span telemedicine doctors</div>
          <div class="cat-b">Direct payment settlement from member wallet</div>
          <div class="cat-b">Listed on Span's verified diagnostic network</div>
          <div class="cat-b">Growing volume as member base expands</div>
        </div>
        <div class="cat-tag">Open for Applications</div>
      </div>

      <!-- Courier -->
      <div class="cat-card rv d3">
        <div class="cat-ico">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2DB8D4" stroke-width="1.8"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="1" y="3" width="15" height="13" rx="2" />
            <path d="M16 8h4l3 5v3h-7V8z" />
            <circle cx="5.5" cy="18.5" r="2.5" />
            <circle cx="18.5" cy="18.5" r="2.5" />
          </svg>
        </div>
        <div class="cat-title">Courier & Delivery Partners</div>
        <div class="cat-sub">Last-mile logistics providers handling free drug delivery from partner pharmacies
          to Span members across Nigeria.</div>
        <div class="cat-benefits">
          <div class="cat-b">Consistent delivery volume from prescription pipeline</div>
          <div class="cat-b">Guaranteed payment per completed delivery</div>
          <div class="cat-b">Coverage across major Nigerian cities</div>
          <div class="cat-b">Integration with Span's dispatch system</div>
        </div>
        <div class="cat-tag">Open for Applications</div>
      </div>

    </div>
  </section>

  <!-- APPLICATION FORM -->
  <section class="apply-sec" id="apply">
    <div class="apply-inner">
      <div class="apply-left rv">
        <h2>Apply to partner<br>with <em>Span.</em></h2>
        <p>Fill out the form and our partnerships team will review your application and respond within 48
          business hours.</p>
        <p>We partner with verified, licensed healthcare providers and service companies committed to quality
          care for Nigerians.</p>
        <div class="apply-contact">
          <div class="ac-item"><span class="ac-dot"></span>info@span-healthcare.com</div>
          <div class="ac-item"><span class="ac-dot"></span>08036102499 · 09039222028</div>
          <div class="ac-item"><span class="ac-dot"></span>No. 11B Sambo Road, City Centre, Kaduna</div>
        </div>
      </div>

      <form class="form-box rv d1" action="https://formspree.io/f/meeylyzr" method="POST">
        <div class="form-row">
          <div class="form-field">
            <label>Organisation Name</label>
            <input type="text" placeholder="e.g. Murtala Hospital">
      </form>
      <div class="form-field">
        <label>Contact Person</label>
        <input type="text" placeholder="Full name">
      </div>
    </div>
    <div class="form-row">
      <div class="form-field">
        <label>Email Address</label>
        <input type="email" placeholder="you@organisation.com">
      </div>
      <div class="form-field">
        <label>Phone Number</label>
        <input type="tel" placeholder="080XXXXXXXX">
      </div>
    </div>
    <div class="form-field">
      <label>Applying As</label>
      <select>
        <option value="" disabled selected>Select partnership type</option>
        <option>Hospital / Clinic</option>
        <option>Pharmacy</option>
        <option>Diagnostic Laboratory</option>
        <option>Courier / Delivery Service</option>
        <option>Other</option>
      </select>
    </div>
    <div class="form-field">
      <label>Organisation Address</label>
      <input type="text" placeholder="Street address, city, state">
    </div>
    <div class="form-row">
      <div class="form-field">
        <label>State</label>
        <select>
          <option value="" disabled selected>Select state</option>
          <option>Abuja (FCT)</option>
          <option>Adamawa</option>
          <option>Bauchi</option>
          <option>Borno</option>
          <option>Gombe</option>
          <option>Jigawa</option>
          <option>Kaduna</option>
          <option>Kano</option>
          <option>Katsina</option>
          <option>Kebbi</option>
          <option>Lagos</option>
          <option>Niger</option>
          <option>Plateau</option>
          <option>Sokoto</option>
          <option>Taraba</option>
          <option>Yobe</option>
          <option>Zamfara</option>
          <option>Other</option>
        </select>
      </div>
      <div class="form-field">
        <label>CAC / Licence Number</label>
        <input type="text" placeholder="RC or licence number">
      </div>
    </div>
    <div class="form-field">
      <label>Brief Description</label>
      <textarea placeholder="Tell us briefly about your organisation and what you offer..."></textarea>
    </div>
    <button class="form-btn">Submit</button>
    <div class="form-note">By submitting this form you agree to Span Healthcare's <a href="terms">Terms of
        Use</a> and <a href="privacy">Privacy Policy</a>. We will never share your information with third
      parties.</div>
    </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include_once('footer.php'); ?>

  <script>
    window.addEventListener('scroll', () => document.getElementById('nav').classList.toggle('scrolled', scrollY > 40));

    function toggleMenu() {
      document.getElementById('mmenu').classList.toggle('open');
    }
  </script>

  <script>
    const nav = document.getElementById('nav');
    window.addEventListener('scroll', () => nav.classList.toggle('scrolled', scrollY > 40));

    function toggleMenu() {
      document.getElementById('mmenu').classList.toggle('open');
    }
  </script>

  <script>
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) e.target.classList.add('on')
      });
    }, {
      threshold: .08,
      rootMargin: '0px 0px -24px 0px'
    });
    document.querySelectorAll('.rv').forEach(el => obs.observe(el));
  </script>
</body>
</body>

</html>