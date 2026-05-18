
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TVIQ Select — Direct. Premium. Trusted.</title>
  <style>
    /* ── Reset ── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    /* ── Design Tokens: Editorial-Monocle × TVIQ Brand ── */
    :root {
      --navy:       #120739;
      --navy-deep:  #0a0320;
      --navy-mid:   #1c0f50;
      --purple:     #762ED3;
      --blue:       #366FFE;
      --blue-hover: #1f54e8;

      --bg:         #ffffff;
      --surface:    #f4f2fb;
      --fg:         #120739;
      --muted:      #5b4e7a;
      --border:     #e0dcf0;

      --font: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      --container: 1200px;
      --section-v: 96px;
    }

    html { font-size: 16px; scroll-behavior: smooth; }
    body {
      font-family: var(--font);
      background: var(--bg);
      color: var(--fg);
      -webkit-font-smoothing: antialiased;
    }
    img, svg { display: block; max-width: 100%; }
    a { color: inherit; text-decoration: none; }

    .container { max-width: var(--container); margin: 0 auto; padding: 0 40px; }
    .svg-defs { position: absolute; width: 0; height: 0; overflow: hidden; }

    /* ── Buttons ── */
    .btn {
      display: inline-flex; align-items: center; justify-content: center; gap: 8px;
      padding: 12px 28px; font-family: var(--font); font-size: 13px; font-weight: 700;
      letter-spacing: 1.2px; text-transform: uppercase; cursor: pointer;
      transition: background 0.2s, border-color 0.2s; border: none; border-radius: 2px;
      white-space: nowrap; text-decoration: none;
    }
    .btn-primary { background: var(--blue); color: #fff; }
    .btn-primary:hover { background: var(--blue-hover); }
    .btn-outline { background: transparent; color: #fff; border: 1.5px solid rgba(255,255,255,0.35); }
    .btn-outline:hover { border-color: #fff; background: rgba(255,255,255,0.06); }
    .btn-lg { padding: 16px 36px; font-size: 14px; letter-spacing: 1.5px; }

    /* ── Navigation ── */
    .nav {
      position: sticky; top: 0; z-index: 200; height: 64px;
      background: var(--navy); border-bottom: 1px solid rgba(255,255,255,0.07);
      display: flex; align-items: center;
    }
    .nav .container { display: flex; align-items: center; justify-content: space-between; width: 100%; }
    .nav-logo { display: flex; align-items: center; gap: 10px; flex-shrink: 0; }
    .nav-wordmark { font-size: 17px; font-weight: 700; color: #fff; letter-spacing: -0.01em; }
    .nav-wordmark em { font-style: normal; color: var(--blue); }
    .nav-links { display: flex; align-items: center; gap: 36px; list-style: none; }
    .nav-links a { font-size: 13px; color: rgba(255,255,255,0.65); letter-spacing: 0.2px; transition: color 0.15s; }
    .nav-links a:hover { color: #fff; }
    .nav-right { display: flex; align-items: center; gap: 12px; }
    .nav-hamburger {
      display: none; background: none; border: none; cursor: pointer; padding: 6px;
      gap: 5px; flex-direction: column; align-items: center; justify-content: center;
    }
    .nav-hamburger span { display: block; width: 22px; height: 1.5px; background: #fff; }

    /* ── Mobile Nav ── */
    .mobile-nav {
      display: none; position: fixed; inset: 0; background: var(--navy-deep); z-index: 300;
      flex-direction: column; align-items: flex-start; justify-content: center;
      padding: 0 40px; gap: 0;
    }
    .mobile-nav.open { display: flex; }
    .mobile-nav-close {
      position: absolute; top: 18px; right: 24px; background: none; border: none;
      color: rgba(255,255,255,0.5); font-size: 32px; line-height: 1; cursor: pointer;
      font-family: var(--font);
    }
    .mobile-nav a {
      font-size: 32px; font-weight: 300; color: rgba(255,255,255,0.85);
      padding: 16px 0; border-bottom: 1px solid rgba(255,255,255,0.08);
      width: 100%; letter-spacing: -0.01em; transition: color 0.15s;
    }
    .mobile-nav a:last-of-type { border-bottom: none; }
    .mobile-nav a:hover { color: #fff; }
    .mobile-nav .btn { margin-top: 32px; align-self: flex-start; }

    /* ── Hero ── */
    .hero {
      position: relative; min-height: 640px; display: flex; align-items: center;
      background: var(--navy-deep); overflow: hidden;
    }
    .hero-bg {
      position: absolute; inset: 0;
      background: url('https://tviq.test/one-sheet/image1.jpg') center right / cover no-repeat;
      opacity: 0.28;
    }
    .hero-gradient {
      position: absolute; inset: 0;
      background: linear-gradient(90deg, rgba(10,3,32,0.92) 40%, rgba(10,3,32,0.2) 100%);
    }
    .hero-content { position: relative; z-index: 1; padding: var(--section-v) 0; max-width: 620px; }
    .eyebrow {
      display: inline-flex; align-items: center; gap: 10px;
      font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase;
      color: var(--blue); margin-bottom: 24px;
    }
    .eyebrow-dot { color: rgba(255,255,255,0.3); }
    .hero h1 {
      font-size: clamp(38px, 5.5vw, 68px); font-weight: 300; line-height: 1.04;
      color: #fff; letter-spacing: -0.025em; margin-bottom: 24px;
    }
    .hero h1 strong { font-weight: 700; }
    .hero-sub {
      font-size: 17px; line-height: 1.7; color: rgba(255,255,255,0.68);
      margin-bottom: 40px; max-width: 500px;
    }
    .hero-cta { display: flex; gap: 12px; flex-wrap: wrap; }

    /* ── Brand Pillars Bar ── */
    .stats-bar {
      background: var(--navy-mid);
      border-top: 3px solid transparent;
      border-image: linear-gradient(90deg, var(--blue) 0%, var(--purple) 50%, var(--blue) 100%) 1;
    }
    .stats-bar .container { display: flex; align-items: stretch; }
    .stat-item {
      flex: 1; padding: 28px 32px; border-right: 1px solid rgba(255,255,255,0.08);
    }
    .stat-item:last-child { border-right: none; }
    .stat-value {
      font-size: 26px; font-weight: 700; color: #fff; letter-spacing: -0.02em;
      line-height: 1; margin-bottom: 6px;
    }
    .stat-label { font-size: 12px; font-weight: 400; color: rgba(255,255,255,0.45); line-height: 1.4; }

    /* ── Section base ── */
    section { padding: var(--section-v) 0; }
    .section-eyebrow {
      font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase;
      color: var(--muted); margin-bottom: 16px;
    }
    .section-headline {
      font-size: clamp(28px, 3.5vw, 46px); font-weight: 300; line-height: 1.08;
      letter-spacing: -0.025em; color: var(--fg); margin-bottom: 16px;
    }
    .section-headline strong { font-weight: 700; }
    .section-sub { font-size: 17px; line-height: 1.7; color: var(--muted); }

    /* ── Features 3-col ── */
    .features { background: var(--bg); }
    .features-header { text-align: center; margin-bottom: 64px; }
    .features-header .section-sub { max-width: 540px; margin: 0 auto; }
    .features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; }
    .feature-card {
      padding: 40px 36px; border: 1px solid var(--border);
      border-top: 3px solid var(--blue);
    }
    .feature-card:nth-child(2) { border-top-color: var(--purple); }
    .feature-card:nth-child(3) {
      border-top: 3px solid; border-image: linear-gradient(90deg, var(--blue), var(--purple)) 1;
    }
    .feature-icon-wrap {
      width: 60px; height: 60px; border-radius: 14px;
      display: flex; align-items: center; justify-content: center; margin-bottom: 28px;
      background: linear-gradient(135deg, var(--navy), var(--navy-mid));
    }
    .feature-icon-wrap img { width: 34px; height: 34px; object-fit: contain; }
    .feature-card h3 { font-size: 19px; font-weight: 700; color: var(--fg); margin-bottom: 10px; }
    .feature-card p { font-size: 15px; line-height: 1.7; color: var(--muted); }

    /* ── Product Tiers ── */
    .tiers { background: var(--surface); }
    .tiers-header { margin-bottom: 56px; }
    .tiers-list { display: flex; flex-direction: column; gap: 20px; }
    .tier-card {
      background: var(--bg); border: 1px solid var(--border);
      padding: 36px 40px 36px 48px; display: grid;
      grid-template-columns: 80px 1fr; gap: 36px; align-items: center; position: relative;
    }
    .tier-card::before {
      content: ''; position: absolute; left: 0; top: 0; bottom: 0; width: 4px;
      background: linear-gradient(180deg, var(--blue), var(--purple));
    }
    .tier-icon-wrap {
      width: 80px; height: 80px; border-radius: 18px;
      background: linear-gradient(135deg, var(--blue), var(--purple));
      display: flex; align-items: center; justify-content: center; flex-shrink: 0;
    }
    .tier-icon-wrap img { width: 44px; height: 44px; object-fit: contain; }
    .tier-body h3 {
      font-size: 18px; font-weight: 700; letter-spacing: 1.8px; text-transform: uppercase;
      color: var(--fg); margin-bottom: 8px;
    }
    .tier-body p { font-size: 15px; line-height: 1.7; color: var(--muted); max-width: 680px; }

    /* ── How It Works ── */
    .how-it-works { background: var(--navy-deep); padding: var(--section-v) 0; }
    .how-it-works .section-eyebrow { color: rgba(255,255,255,0.4); }
    .how-it-works .section-headline { color: #fff; max-width: 560px; }
    .hiw-layout {
      display: grid; grid-template-columns: 1fr 420px; gap: 80px;
      align-items: start; margin-top: 56px;
    }
    .hiw-points { border-top: 1px solid rgba(255,255,255,0.1); }
    .hiw-point {
      display: grid; grid-template-columns: 160px 1fr; gap: 28px;
      align-items: baseline; padding: 32px 0; border-bottom: 1px solid rgba(255,255,255,0.08);
    }
    .hiw-verb { font-size: 24px; font-weight: 700; color: var(--blue); letter-spacing: -0.01em; line-height: 1.3; }
    .hiw-desc { font-size: 15px; line-height: 1.75; color: rgba(255,255,255,0.62); }
    .hiw-desc strong { color: rgba(255,255,255,0.9); font-weight: 600; }
    .hiw-panel {
      background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.09);
      border-top: 3px solid var(--blue); padding: 44px 40px; position: sticky; top: 80px;
    }
    .hiw-panel-headline {
      font-size: 30px; font-weight: 300; color: #fff; line-height: 1.2;
      letter-spacing: -0.02em; margin-bottom: 20px;
    }
    .hiw-panel-headline strong { font-weight: 700; }
    .hiw-panel-body { font-size: 15px; line-height: 1.75; color: rgba(255,255,255,0.6); margin-bottom: 36px; }
    .hiw-metric { border-top: 1px solid rgba(255,255,255,0.1); padding-top: 28px; margin-top: 28px; }
    .hiw-metric-value {
      font-size: 42px; font-weight: 700; color: #fff; letter-spacing: -0.03em; line-height: 1; margin-bottom: 6px;
    }
    .hiw-metric-value em { font-style: normal; color: var(--blue); }
    .hiw-metric-label { font-size: 12px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; color: rgba(255,255,255,0.4); }

    /* ── CTA Band ── */
    .cta-band { background: var(--navy-mid); border-top: 1px solid rgba(255,255,255,0.07); }
    .cta-band .container {
      display: flex; align-items: center; justify-content: space-between;
      gap: 40px; padding-top: 56px; padding-bottom: 56px;
    }
    .cta-band-copy h2 {
      font-size: clamp(22px, 2.5vw, 30px); font-weight: 300; color: #fff;
      letter-spacing: -0.02em; margin-bottom: 6px;
    }
    .cta-band-copy h2 strong { font-weight: 700; }
    .cta-band-copy p { font-size: 15px; color: rgba(255,255,255,0.55); }

    /* ── Contact / Demo ── */
    .contact { background: var(--bg); }
    .contact-layout { display: grid; grid-template-columns: 1fr 1.15fr; gap: 80px; align-items: start; }
    .contact-copy { padding-top: 8px; }
    .contact-copy .section-headline { margin-bottom: 20px; }
    .contact-copy > p { font-size: 16px; line-height: 1.75; color: var(--muted); margin-bottom: 36px; }
    .contact-detail { display: flex; flex-direction: column; gap: 4px; }
    .contact-detail-label { font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; color: var(--muted); }
    .contact-detail-value { font-size: 16px; font-weight: 600; color: var(--blue); }
    .form-card { background: var(--surface); border: 1px solid var(--border); padding: 52px 44px; }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
    .form-group { margin-bottom: 20px; }
    .form-group label {
      display: block; font-size: 11px; font-weight: 700; letter-spacing: 1.5px;
      text-transform: uppercase; color: var(--fg); margin-bottom: 7px;
    }
    .form-group input, .form-group textarea, .form-group select {
      width: 100%; padding: 12px 14px; font-size: 15px; font-family: var(--font);
      color: var(--fg); background: #fff; border: 1px solid var(--border); border-radius: 2px;
      outline: none; transition: border-color 0.2s; -webkit-appearance: none; appearance: none;
    }
    .form-group input::placeholder, .form-group textarea::placeholder { color: rgba(91,78,122,0.4); }
    .form-group input:focus, .form-group textarea:focus, .form-group select:focus { border-color: var(--blue); }
    .form-group textarea { resize: vertical; min-height: 108px; }
    .form-optional { font-weight: 400; text-transform: none; letter-spacing: 0; font-size: 11px; color: var(--muted); }
    .form-submit {
      width: 100%; padding: 16px; font-family: var(--font); font-size: 13px; font-weight: 700;
      letter-spacing: 2px; text-transform: uppercase; background: var(--navy); color: #fff;
      border: none; cursor: pointer; transition: background 0.2s; border-radius: 2px; margin-top: 4px;
    }
    .form-submit:hover { background: var(--blue); }
    .form-success { display: none; text-align: center; padding: 52px 24px; }
    .form-success-icon {
      width: 60px; height: 60px; background: linear-gradient(135deg, var(--blue), var(--purple));
      border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px;
    }
    .form-success h3 { font-size: 22px; font-weight: 700; color: var(--fg); margin-bottom: 10px; }
    .form-success p { font-size: 15px; line-height: 1.7; color: var(--muted); }

    .required-mark { color: var(--blue); margin-left: 2px; }

    .form-processing { display: none; text-align: center; padding: 52px 24px; }
    .form-processing-spinner {
      width: 40px; height: 40px; margin: 0 auto 24px;
      border: 2px solid rgba(54,111,254,0.15); border-top-color: var(--blue);
      border-radius: 50%; animation: spin 0.8s linear infinite;
    }
    @keyframes spin { to { transform: rotate(360deg); } }
    .form-processing p {
      font-size: 11px; font-weight: 700; letter-spacing: 2.5px;
      text-transform: uppercase; color: var(--muted);
    }

    /* ── Phone split field ── */
    .phone-field {
      display: flex; border: 1px solid var(--border); border-radius: 2px;
      background: #fff; transition: border-color 0.2s; overflow: hidden;
    }
    .phone-field:focus-within { border-color: var(--blue); }
    .phone-cc-wrap {
      display: flex; align-items: center; gap: 1px;
      padding: 0 8px 0 14px; border-right: 1px solid var(--border);
      flex-shrink: 0; font-size: 15px; color: var(--muted); font-family: var(--font);
    }
    .form-group .phone-cc-input {
      width: 30px; padding: 12px 0; border: none; outline: none;
      font-size: 15px; font-family: var(--font); color: var(--fg);
      background: transparent; -webkit-appearance: none; appearance: none;
    }
    .form-group .phone-local-input {
      flex: 1; width: auto; padding: 12px 14px; border: none; outline: none;
      font-size: 15px; font-family: var(--font); color: var(--fg);
      background: transparent; -webkit-appearance: none; appearance: none;
    }
    .form-group .phone-local-input::placeholder { color: rgba(91,78,122,0.4); }

    /* ── Footer ── */
    .footer { background: var(--navy); padding: 52px 0; border-top: 1px solid rgba(255,255,255,0.06); }
    .footer-inner { display: flex; align-items: flex-start; justify-content: space-between; gap: 40px; }
    .footer-brand { display: flex; flex-direction: column; gap: 10px; }
    .footer-logo { display: flex; align-items: center; gap: 10px; margin-bottom: 4px; }
    .footer-logo-text { font-size: 15px; font-weight: 700; color: #fff; }
    .footer-tagline { font-size: 15px; font-weight: 700; color: #fff; letter-spacing: -0.01em; }
    .footer-copy { font-size: 12px; color: rgba(255,255,255,0.3); }
    .footer-right { text-align: right; }
    .footer-contact-label { font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; color: rgba(255,255,255,0.35); margin-bottom: 8px; }
    .footer-contact-email { font-size: 16px; font-weight: 600; color: var(--blue); display: block; margin-bottom: 16px; }
    .footer-pillars { font-size: 12px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; color: rgba(255,255,255,0.25); }

    /* ── Responsive 1024px ── */
    @media (max-width: 1024px) {
      .container { padding: 0 32px; }
      .hiw-layout { grid-template-columns: 1fr; gap: 48px; }
      .hiw-panel { position: static; }
      .contact-layout { grid-template-columns: 1fr; gap: 48px; }
    }

    /* ── Responsive 768px ── */
    @media (max-width: 768px) {
      :root { --section-v: 64px; }
      .container { padding: 0 20px; }
      .nav-links, .nav-right .btn { display: none; }
      .nav-hamburger { display: flex; }
      .features-grid { grid-template-columns: 1fr; gap: 20px; }
      .stats-bar .container { flex-direction: column; }
      .stat-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.08); padding: 24px 20px; }
      .stat-item:last-child { border-bottom: none; }
      .tier-card { grid-template-columns: 1fr; padding: 28px 24px 28px 32px; gap: 20px; }
      .hiw-point { grid-template-columns: 1fr; gap: 10px; padding: 24px 0; }
      .cta-band .container { flex-direction: column; align-items: flex-start; gap: 24px; }
      .form-row { grid-template-columns: 1fr; }
      .form-card { padding: 32px 24px; }
      .footer-inner { flex-direction: column; gap: 32px; }
      .footer-right { text-align: left; }
    }

    /* ── Responsive 430px ── */
    @media (max-width: 430px) {
      .hero h1 { font-size: 34px; }
      .hero-cta { flex-direction: column; }
      .hero-cta .btn { width: 100%; justify-content: center; }
      .hiw-panel { padding: 32px 24px; }
    }

    /* ── Responsive 360px ── */
    @media (max-width: 360px) {
      .container { padding: 0 16px; }
      .hero h1 { font-size: 30px; }
    }
  </style>
</head>
<body>

<svg class="svg-defs" aria-hidden="true">
  <defs>
    <linearGradient id="logoGrad" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#9B5CF6"/>
      <stop offset="100%" stop-color="#366FFE"/>
    </linearGradient>
  </defs>
</svg>

<!-- Mobile Nav Overlay -->
<div class="mobile-nav" id="mobileNav" role="dialog" aria-label="Navigation">
  <button class="mobile-nav-close" id="mobileNavClose" aria-label="Close menu">×</button>
  <a href="#features" onclick="closeMobileNav()">Features</a>
  <a href="#tiers" onclick="closeMobileNav()">Products</a>
  <a href="#how-it-works" onclick="closeMobileNav()">How It Works</a>
  <a href="#contact" onclick="closeMobileNav()">Contact</a>
  <a href="#contact" class="btn btn-primary" onclick="closeMobileNav()">Request a Demo</a>
</div>

<!-- Navigation -->
<nav class="nav" role="navigation">
  <div class="container">
    <a class="nav-logo" href="#">
      <svg width="30" height="24" viewBox="0 0 30 24" fill="none" aria-hidden="true">
        <rect x="0"  y="7"  width="5.5" height="17" rx="1.5" fill="url(#logoGrad)"/>
        <rect x="8"  y="0"  width="5.5" height="24" rx="1.5" fill="url(#logoGrad)"/>
        <rect x="16" y="4"  width="5.5" height="20" rx="1.5" fill="url(#logoGrad)"/>
        <rect x="24" y="9"  width="5.5" height="15" rx="1.5" fill="url(#logoGrad)"/>
      </svg>
      <span class="nav-wordmark">TVIQ <em>Select</em></span>
    </a>
    <ul class="nav-links">
      <li><a href="#features">Features</a></li>
      <li><a href="#tiers">Products</a></li>
      <li><a href="#how-it-works">How It Works</a></li>
    </ul>
    <div class="nav-right">
      <a href="#contact" class="btn btn-primary">Request a Demo</a>
      <button class="nav-hamburger" id="navHamburger" aria-label="Open menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero">
  <div class="hero-bg" role="img" aria-label="Abstract network visualization"></div>
  <div class="hero-gradient"></div>
  <div class="container">
    <div class="hero-content">
      <p class="eyebrow">
        Direct <span class="eyebrow-dot">·</span>
        Premium <span class="eyebrow-dot">·</span>
        Trusted
      </p>
      <h1>The Next Evolution<br>of <strong>CTV Advertising</strong></h1>
      <p class="hero-sub">
        TVIQ Select brings together curated supply, preferred access, and hands-on expertise to deliver superior outcomes for advertisers.
      </p>
      <div class="hero-cta">
        <a href="#contact" class="btn btn-primary btn-lg">Request a Demo</a>
        <a href="#how-it-works" class="btn btn-outline btn-lg">How It Works</a>
      </div>
    </div>
  </div>
</section>

<!-- Brand Pillars Bar -->
<div class="stats-bar">
  <div class="container">
    <div class="stat-item">
      <div class="stat-value">Direct</div>
      <div class="stat-label">IOs with publishers — no open exchange</div>
    </div>
    <div class="stat-item">
      <div class="stat-value">Premium</div>
      <div class="stat-label">Brand-safe, curated inventory only</div>
    </div>
    <div class="stat-item">
      <div class="stat-value">Trusted</div>
      <div class="stat-label">Dedicated ops + 15B+ daily requests optimized</div>
    </div>
  </div>
</div>

<!-- Features -->
<section class="features" id="features">
  <div class="container">
    <div class="features-header">
      <p class="section-eyebrow">What Sets TVIQ Select Apart</p>
      <h2 class="section-headline">Built for Buyers Who<br><strong>Demand More From CTV</strong></h2>
      <p class="section-sub">Three pillars that separate TVIQ Select from every other CTV offering in the market.</p>
    </div>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon-wrap">
          <img src="https://tviq.test/one-sheet/image7.svg" alt="" width="34" height="34">
        </div>
        <h3>Curated Supply</h3>
        <p>Premium, brand-safe CTV inventory sourced directly from trusted publishers. Not open-exchange remnants — every impression is hand-selected and quality-verified.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon-wrap" style="background: linear-gradient(135deg, var(--purple), var(--navy-mid));">
          <img src="https://tviq.test/one-sheet/image3.svg" alt="" width="34" height="34">
        </div>
        <h3>Smart Tech</h3>
        <p>Intelligent tiering and optimization across 15B+ daily requests. The pipes are as smart as the supply is clean — precision at programmatic scale.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon-wrap" style="background: linear-gradient(135deg, #1a0e56, var(--purple));">
          <img src="https://tviq.test/one-sheet/image4.svg" alt="" width="34" height="34">
        </div>
        <h3>Hands-On Expertise</h3>
        <p>Dedicated media operations and ongoing strategic support. Real humans working alongside your team to ensure campaigns perform, not just deliver.</p>
      </div>
    </div>
  </div>
</section>

<!-- Product Tiers -->
<section class="tiers" id="tiers">
  <div class="container">
    <div class="tiers-header">
      <p class="section-eyebrow">Three Ways to Buy</p>
      <h2 class="section-headline">Choose the Access<br><strong>That Fits Your Strategy</strong></h2>
    </div>
    <div class="tiers-list">
      <div class="tier-card">
        <div class="tier-icon-wrap">
          <img src="https://tviq.test/one-sheet/image5.svg" alt="" width="44" height="44">
        </div>
        <div class="tier-body">
          <h3>Publisher Direct</h3>
          <p>Premium inventory with greater control and transparency. Direct IOs with publishers mean curated, brand-safe CTV supply — your campaigns run on screens you know, with no open-market surprises.</p>
        </div>
      </div>
      <div class="tier-card">
        <div class="tier-icon-wrap">
          <img src="https://tviq.test/one-sheet/image8.svg" alt="" width="44" height="44">
        </div>
        <div class="tier-body">
          <h3>Select Marketplace</h3>
          <p>A curated network of trusted CTV publishers engineered for efficient scale. Eliminate unnecessary intermediaries — direct access to publishers and scaled curated audiences increases the share of your ad spend that actually reaches the screen.</p>
        </div>
      </div>
      <div class="tier-card">
        <div class="tier-icon-wrap">
          <img src="https://tviq.test/one-sheet/image6.svg" alt="" width="44" height="44">
        </div>
        <div class="tier-body">
          <h3>Audience Extension</h3>
          <p>Incremental reach with precision targeting. Extend your campaign with contextual relevancy — make your media plan stand out instead of blending into the same inventory your competitors utilize.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="how-it-works" id="how-it-works">
  <div class="container">
    <p class="section-eyebrow">The TVIQ Select Method</p>
    <h2 class="section-headline">Built for How Modern CTV<br><strong>Buying Actually Works</strong></h2>
    <div class="hiw-layout">
      <div class="hiw-points">
        <div class="hiw-point">
          <span class="hiw-verb">Direct</span>
          <p class="hiw-desc">IOs with publishers: <strong>curated, premium CTV supply</strong> delivered without the open-exchange tax. You know where your ads run.</p>
        </div>
        <div class="hiw-point">
          <span class="hiw-verb">Eliminate</span>
          <p class="hiw-desc">Unnecessary intermediaries. <strong>Direct access to publishers and scaled curated audiences</strong> increases the share of ad spend reaching the screen — not fees.</p>
        </div>
        <div class="hiw-point">
          <span class="hiw-verb">Differentiate</span>
          <p class="hiw-desc">Your campaign via <strong>high-impact, bespoke integrations</strong> that competitors cannot replicate through open exchange buys. Stand out, don't blend in.</p>
        </div>
        <div class="hiw-point">
          <span class="hiw-verb">Extend</span>
          <p class="hiw-desc">Your reach with <strong>contextual relevancy.</strong> Make your media plan stand out instead of blending into the same inventory your competitors utilize.</p>
        </div>
      </div>
      <div class="hiw-panel">
        <div class="hiw-panel-headline">Smarter spend.<br><strong>Stronger performance.</strong></div>
        <p class="hiw-panel-body">TVIQ Select isn't just access to better inventory — it's a strategic partnership built on supply quality, technological precision, and human expertise that works alongside your team from day one.</p>
        <a href="#contact" class="btn btn-primary btn-lg">Start the Conversation</a>
        <div class="hiw-metric">
          <div class="hiw-metric-value">15B<em>+</em></div>
          <div class="hiw-metric-label">Daily requests optimized</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Band -->
<div class="cta-band">
  <div class="container">
    <div class="cta-band-copy">
      <h2>Ready to elevate your<br><strong>CTV strategy?</strong></h2>
      <p>Join the agencies and brands already buying smarter.</p>
    </div>
    <a href="#contact" class="btn btn-primary btn-lg">Request a Demo</a>
  </div>
</div>

<!-- Contact / Demo Form -->
<section class="contact" id="contact">
  <div class="container">
    <div class="contact-layout">
      <div class="contact-copy">
        <p class="section-eyebrow">Get in Touch</p>
        <h2 class="section-headline">Let's Talk About<br><strong>Your Next Campaign</strong></h2>
        <p>Tell us about your campaign goals. Our team will show you exactly how TVIQ Select delivers superior outcomes for your specific buying context — without the sales runaround.</p>
        <div class="contact-detail">
          <span class="contact-detail-label">Prefer email?</span>
          <a class="contact-detail-value" href="mailto:AdSales@tviq.io">AdSales@tviq.io</a>
        </div>
      </div>
      <div class="form-card">
        <form id="demoForm" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="firstName">First Name <span class="required-mark" aria-hidden="true">*</span></label>
              <input type="text" id="firstName" name="first_name" placeholder="Jane" required autocomplete="given-name">
            </div>
            <div class="form-group">
              <label for="lastName">Last Name <span class="required-mark" aria-hidden="true">*</span></label>
              <input type="text" id="lastName" name="last_name" placeholder="Smith" required autocomplete="family-name">
            </div>
          </div>
          <div class="form-group">
            <label for="company">Company <span class="required-mark" aria-hidden="true">*</span></label>
            <input type="text" id="company" name="company" placeholder="Agency or brand name" required autocomplete="organization">
          </div>
          <div class="form-group">
            <label for="email">Work Email <span class="required-mark" aria-hidden="true">*</span></label>
            <input type="email" id="email" name="email" placeholder="jane@agency.com" required autocomplete="email">
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="phoneLocal">Phone <span class="form-optional">(optional)</span></label>
              <div class="phone-field">
                <div class="phone-cc-wrap">
                  <span>+</span>
                  <input type="text" id="phoneCC" class="phone-cc-input" value="1" maxlength="3" inputmode="numeric" autocomplete="off" aria-label="Country code">
                </div>
                <input type="tel" id="phoneLocal" class="phone-local-input" placeholder="(555) 000-0000" autocomplete="tel-national" aria-label="Local phone number">
              </div>
              <input type="hidden" id="phone" name="phone">
            </div>
            <div class="form-group">
              <label for="interest">Primary Interest</label>
              <select id="interest" name="interest">
                <option value="">Select one…</option>
                <option value="publisher-direct">Publisher Direct</option>
                <option value="select-marketplace">Select Marketplace</option>
                <option value="audience-extension">Audience Extension</option>
                <option value="full-suite">Full TVIQ Select Suite</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="message">How can we help?</label>
            <textarea id="message" name="message" placeholder="Tell us about your campaign goals, current CTV challenges, or budget range…"></textarea>
          </div>
          <button type="submit" class="form-submit">Request Your Demo →</button>
        </form>
        <div class="form-processing" id="formProcessing" aria-live="polite">
          <div class="form-processing-spinner"></div>
          <p>Processing your request…</p>
        </div>
        <div class="form-success" id="formSuccess" role="alert">
          <div class="form-success-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" width="28" height="28" aria-hidden="true">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
          </div>
          <h3>You're all set.</h3>
          <p>Thanks for reaching out. A TVIQ Select team member will follow up within one business day.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="footer-inner">
      <div class="footer-brand">
        <div class="footer-logo">
          <svg width="24" height="20" viewBox="0 0 30 24" fill="none" aria-hidden="true">
            <rect x="0"  y="7"  width="5.5" height="17" rx="1.5" fill="url(#logoGrad)"/>
            <rect x="8"  y="0"  width="5.5" height="24" rx="1.5" fill="url(#logoGrad)"/>
            <rect x="16" y="4"  width="5.5" height="20" rx="1.5" fill="url(#logoGrad)"/>
            <rect x="24" y="9"  width="5.5" height="15" rx="1.5" fill="url(#logoGrad)"/>
          </svg>
          <span class="footer-logo-text">TVIQ Select</span>
        </div>
        <p class="footer-tagline">Smarter spend. Stronger performance.</p>
        <p class="footer-copy">© 2025 TVIQ. All rights reserved.</p>
      </div>
      <div class="footer-right">
        <p class="footer-contact-label">Contact Sales</p>
        <a class="footer-contact-email" href="mailto:AdSales@tviq.io">AdSales@tviq.io</a>
        <p class="footer-pillars">Direct · Premium · Trusted</p>
      </div>
    </div>
  </div>
</footer>

<script>
  const mobileNav = document.getElementById('mobileNav');
  document.getElementById('navHamburger').addEventListener('click', () => {
    mobileNav.classList.add('open');
    document.body.style.overflow = 'hidden';
  });
  document.getElementById('mobileNavClose').addEventListener('click', closeMobileNav);
  function closeMobileNav() {
    mobileNav.classList.remove('open');
    document.body.style.overflow = '';
  }
  document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMobileNav(); });

  // Phone split field: CC input + local number input → hidden combined value
  const phoneCCInput    = document.getElementById('phoneCC');
  const phoneLocalInput = document.getElementById('phoneLocal');
  const phoneHidden     = document.getElementById('phone');

  function syncPhoneValue() {
    const cc    = phoneCCInput.value.replace(/\D/g, '') || '1';
    const local = phoneLocalInput.value.trim();
    phoneHidden.value = local ? '+' + cc + ' ' + local : '';
  }

  function applyUSMask(input) {
    const digits = input.value.replace(/\D/g, '').slice(0, 10);
    if (!digits) { input.value = ''; return; }
    let out = '(';
    if (digits.length <= 3) {
      out += digits;
    } else if (digits.length <= 6) {
      out += digits.slice(0, 3) + ') ' + digits.slice(3);
    } else {
      out += digits.slice(0, 3) + ') ' + digits.slice(3, 6) + '-' + digits.slice(6);
    }
    input.value = out;
  }

  phoneCCInput.addEventListener('input', function() {
    this.value = this.value.replace(/\D/g, '').slice(0, 3) || '1';
    // Strip US formatting from local field when leaving +1
    if (this.value !== '1') {
      phoneLocalInput.value = phoneLocalInput.value.replace(/\D/g, '');
    } else if (phoneLocalInput.value) {
      applyUSMask(phoneLocalInput);
    }
    syncPhoneValue();
  });

  phoneLocalInput.addEventListener('input', function() {
    if (phoneCCInput.value === '1') applyUSMask(this);
    syncPhoneValue();
  });

  const form = document.getElementById('demoForm');
  const processing = document.getElementById('formProcessing');
  const success = document.getElementById('formSuccess');
  form.addEventListener('submit', async function(e) {
    e.preventDefault();
    let valid = true;
    form.querySelectorAll('[required]').forEach(f => {
      f.style.borderColor = '';
      if (!f.value.trim()) { f.style.borderColor = '#e44'; valid = false; }
    });
    if (!valid) return;
    const emailField = form.querySelector('[type="email"]');
    if (emailField && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailField.value)) {
      emailField.style.borderColor = '#e44'; return;
    }
    form.style.display = 'none';
    processing.style.display = 'block';
    try {
      const [res] = await Promise.all([
        fetch('/wp-json/tviq/v1/select-demo', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({
            first_name: form.first_name.value,
            last_name:  form.last_name.value,
            company:    form.company.value,
            email:      form.email.value,
            phone:      form.phone.value,
            interest:   form.interest.value,
            message:    form.message.value,
          }),
        }),
        new Promise(r => setTimeout(r, 1500)),
      ]);
      const data = await res.json();
      processing.style.display = 'none';
      if (res.ok && data.success) {
        success.style.display = 'block';
      } else {
        form.style.display = 'block';
        alert(data.message || 'Something went wrong. Please try again.');
      }
    } catch {
      processing.style.display = 'none';
      form.style.display = 'block';
      alert('Something went wrong. Please try again.');
    }
  });
</script>
</body>
</html>
