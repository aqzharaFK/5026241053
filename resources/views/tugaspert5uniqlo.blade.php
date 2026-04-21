<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <title>UNIQLO Indonesia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --uniqlo-red: #E60012;
      --uniqlo-navy: #1A1F5E;
      --bg: #E8EDF2;
      --card-bg: #ffffff;
      --text-muted: #5a6272;
      --link-color: var(--uniqlo-navy);
    }

    html, body {
      min-height: 100%;
      background-color: var(--bg);
      font-family: 'DM Sans', sans-serif;
      color: var(--uniqlo-navy);
    }

    .page-wrapper {
      min-height: 100dvh;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      padding: 1.5rem 1rem 3rem;
    }

    .card-shell {
      width: 100%;
      max-width: 420px;
      background: #f0f4f8;
      border-radius: 28px;
      padding: 2rem 1.5rem 1.75rem;
      position: relative;
    }

    /* Top bar */
    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.75rem;
    }

    .icon-btn {
      width: 40px; height: 40px;
      border-radius: 50%;
      background: #fff;
      border: none;
      display: flex; align-items: center; justify-content: center;
      cursor: pointer;
      box-shadow: 0 1px 4px rgba(0,0,0,0.08);
      transition: transform 0.15s;
    }
    .icon-btn { transition: background 0.15s; }
    .icon-btn:hover { background: #e0e4e8; }
    .link-btn { transition: background 0.15s; }
    .link-btn:hover { background: #e8e8e8; color: var(--uniqlo-navy); }
    .social-icon { transition: background 0.15s; }
    .social-icon:hover { background: rgba(26,31,94,0.1); }
    .icon-btn svg { width: 18px; height: 18px; stroke: var(--uniqlo-navy); fill: none; stroke-width: 1.8; }

    /* Logo */
    .logo-wrap {
      text-align: center;
      margin-bottom: 1.25rem;
    }

    .logo-circle {
      width: 90px; height: 90px;
      border-radius: 50%;
      background: var(--uniqlo-red);
      display: inline-flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-bottom: 1rem;
      box-shadow: 0 4px 20px rgba(230,0,18,0.25);
    }

    .logo-circle .uni, .logo-circle .qlo {
      font-family: 'Noto Sans JP', sans-serif;
      font-weight: 700;
      font-size: 24px;
      color: #fff;
      line-height: 1.1;
      letter-spacing: 0.05em;
    }

    .profile-name {
      font-family: 'Noto Sans JP', sans-serif;
      font-weight: 700;
      font-size: 1.25rem;
      color: var(--uniqlo-navy);
      margin-bottom: 0.25rem;
    }

    .profile-bio {
      font-size: 0.82rem;
      color: var(--uniqlo-navy);
      opacity: 0.75;
      line-height: 1.5;
    }

    /* Link buttons */
    .links-section {
      margin: 1.5rem 0 1.25rem;
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }

    .link-btn {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: #fff;
      border-radius: 100px;
      padding: 0.85rem 1.25rem;
      text-decoration: none;
      color: var(--uniqlo-navy);
      font-weight: 500;
      font-size: 0.95rem;
      border: none;
      box-shadow: 0 2px 6px rgba(0,0,0,0.07);
      transition: transform 0.15s, box-shadow 0.15s;
      cursor: pointer;
      width: 100%;
    }

    .link-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(0,0,0,0.11);
      color: var(--uniqlo-navy);
    }

    .link-btn:active { transform: scale(0.98); }

    .link-btn .btn-label {
      flex: 1;
      text-align: center;
    }

    .link-btn .btn-icon {
      width: 28px; height: 28px;
      border-radius: 50%;
      background: var(--bg);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }

    .link-btn .btn-icon svg {
      width: 14px; height: 14px;
      stroke: var(--text-muted);
      fill: none;
      stroke-width: 2;
    }

    /* Social icons */
    .social-row {
      display: flex;
      justify-content: center;
      gap: 1.25rem;
      margin: 0.5rem 0 1.5rem;
    }

    .social-icon {
      width: 42px; height: 42px;
      border-radius: 50%;
      background: transparent;
      display: flex; align-items: center; justify-content: center;
      text-decoration: none;
      transition: transform 0.15s, background 0.15s;
    }

    .social-icon:hover {
      transform: scale(1.12);
      background: rgba(26,31,94,0.07);
    }

    .social-icon svg {
      width: 26px; height: 26px;
      stroke: var(--uniqlo-navy);
      fill: none;
      stroke-width: 1.6;
    }

    /* Footer */
    .footer-join {
      background: #fff;
      border-radius: 100px;
      padding: 0.75rem 1.25rem;
      text-align: center;
      font-size: 0.82rem;
      font-weight: 500;
      color: var(--uniqlo-navy);
      margin-bottom: 1.25rem;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
    }

    .footer-links {
      display: flex;
      justify-content: center;
      gap: 0.75rem;
      font-size: 0.72rem;
      color: var(--text-muted);
    }
    .footer-links a { color: var(--text-muted); text-decoration: none; }
    .footer-links a:hover { text-decoration: underline; }
    .footer-links span { opacity: 0.5; }


  </style>
</head>
<body>
  <div class="page-wrapper">
    <div class="card-shell">

      <!-- Top bar -->
      <div class="top-bar">
        <button class="icon-btn" aria-label="Linktree">
          <svg viewBox="0 0 24 24"><path d="M12 2L9 9H2l5.5 4-2 7L12 16l6.5 4-2-7L22 9h-7z" stroke-linejoin="round"/></svg>
        </button>
        <button class="icon-btn" aria-label="Share">
          <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/>
            <polyline points="16 6 12 2 8 6"/>
            <line x1="12" y1="2" x2="12" y2="15"/>
          </svg>
        </button>
      </div>

      <!-- Profile -->
      <div class="logo-wrap">
        <div class="logo-circle">
          <span class="uni">UNI</span>
          <span class="qlo">QLO</span>
        </div>
        <p class="profile-name">UNIQLO Indonesia</p>
        <p class="profile-bio">
          The Official Account of UNIQLO Indonesia<br>
          #UniqloIndonesia #UniqloLifeWear
        </p>
      </div>

      <!-- Links -->
      <div class="links-section">
        <button class="link-btn">
          <span class="btn-label">App Store</span>
          <span class="btn-icon">
            <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/>
            </svg>
          </span>
        </button>
        <button class="link-btn">
          <span class="btn-label">Google Play Store</span>
          <span class="btn-icon">
            <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/>
            </svg>
          </span>
        </button>
      </div>

      <!-- Social -->
      <div class="social-row">
        <!-- Instagram -->
        <span class="social-icon" aria-label="Instagram">
          <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
            <circle cx="12" cy="12" r="4"/>
            <circle cx="17.5" cy="6.5" r="0.8" fill="var(--uniqlo-navy)" stroke="none"/>
          </svg>
        </span>
        <span class="social-icon" aria-label="TikTok">
          <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"/>
          </svg>
        </span>
      </div>

      <!-- Footer join -->
      <div class="footer-join">
        Join promouniqloindonesia on Linktree
      </div>

      <!-- Footer links -->
      <div class="footer-links">
        <span>Cookie Preferences</span>
        <span>•</span>
        <span>Report</span>
        <span>•</span>
        <span>Privacy</span>
      </div>

    </div>
  </div>


</body>
</html>
