<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Span Healthcare — Under Maintenance</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=DM+Sans:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <style>
      *,
      *::before,
      *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      html,
      body {
        height: 100%;
        width: 100%;
      }
      body {
        font-family: "Inter", sans-serif;
        background: #020c12;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        overflow: hidden;
        position: relative;
      }

      /* Grid background */
      body::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image:
          linear-gradient(rgba(45, 184, 212, 0.06) 1px, transparent 1px),
          linear-gradient(90deg, rgba(45, 184, 212, 0.06) 1px, transparent 1px);
        background-size: 40px 40px;
        pointer-events: none;
      }

      /* Radial glow */
      body::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 600px;
        height: 600px;
        border-radius: 50%;
        background: radial-gradient(
          circle,
          rgba(45, 184, 212, 0.12) 0%,
          transparent 70%
        );
        pointer-events: none;
      }

      /* Animated orbit rings */
      .ring {
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        border: 1px solid rgba(45, 184, 212, 0.1);
        transform: translate(-50%, -50%);
        pointer-events: none;
      }
      .ring1 {
        width: 500px;
        height: 500px;
        animation: spin 20s linear infinite;
      }
      .ring2 {
        width: 700px;
        height: 700px;
        border-style: dashed;
        animation: spin 30s linear infinite reverse;
      }
      .ring3 {
        width: 900px;
        height: 900px;
        animation: spin 45s linear infinite;
      }
      @keyframes spin {
        from {
          transform: translate(-50%, -50%) rotate(0deg);
        }
        to {
          transform: translate(-50%, -50%) rotate(360deg);
        }
      }

      /* Content */
      .wrap {
        position: relative;
        z-index: 2;
        text-align: center;
        padding: 2rem;
        max-width: 520px;
        width: 100%;
      }

      /* Logo */
      .logo {
        margin-bottom: 2.5rem;
        display: flex;
        justify-content: center;
      }
      .logo img {
        height: 52px;
        width: auto;
        object-fit: contain;
        filter: brightness(0) invert(1);
      }

      .bdot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #2db8d4;
        animation: pulse 2s ease-in-out infinite;
      }
      @keyframes pulse {
        0%,
        100% {
          opacity: 1;
          transform: scale(1);
        }
        50% {
          opacity: 0.4;
          transform: scale(0.8);
        }
      }

      /* Headline */
      h1 {
        font-size: clamp(2.2rem, 6vw, 3.6rem);
        font-weight: 800;
        line-height: 1.06;
        letter-spacing: -0.04em;
        color: #fff;
        margin-bottom: 1rem;
      }
      h1 em {
        font-style: normal;
        background: linear-gradient(
          135deg,
          #2db8d4 0%,
          #00e5ff 40%,
          #2db8d4 60%,
          #0099b8 100%
        );
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }

      /* Subtitle */
      .sub {
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.45);
        line-height: 1.85;
        margin-bottom: 2.4rem;
        font-family: "DM Sans", sans-serif;
      }

      /* Progress bar */
      .progress-wrap {
        margin-bottom: 2.4rem;
      }
      .progress-label {
        display: flex;
        justify-content: space-between;
        font-size: 0.7rem;
        color: rgba(255, 255, 255, 0.35);
        margin-bottom: 8px;
        letter-spacing: 0.06em;
      }
      .progress-bar {
        height: 4px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 4px;
        overflow: hidden;
      }
      .progress-fill {
        height: 100%;
        width: 72%;
        background: linear-gradient(90deg, #2db8d4, #00e5ff);
        border-radius: 4px;
        animation: fill 2s ease forwards;
      }
      @keyframes fill {
        from {
          width: 0;
        }
        to {
          width: 72%;
        }
      }

      /* What we are fixing */
      .fixes {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 2.4rem;
        text-align: left;
      }
      .fix {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 16px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
      }
      .fix-ico {
        width: 28px;
        height: 28px;
        border-radius: 8px;
        background: rgba(45, 184, 212, 0.1);
        border: 1px solid rgba(45, 184, 212, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }
      .fix-ico svg {
        width: 14px;
        height: 14px;
      }
      .fix-text {
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.55);
        font-family: "DM Sans", sans-serif;
        flex: 1;
      }
      .fix-status {
        font-size: 0.65rem;
        font-weight: 600;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        flex-shrink: 0;
      }
      .s-done {
        color: #22c55e;
      }
      .s-wip {
        color: #2db8d4;
      }
      .s-soon {
        color: rgba(255, 255, 255, 0.3);
      }

      /* Contact */
      .contact {
        font-size: 0.82rem;
        color: rgba(255, 255, 255, 0.35);
        font-family: "DM Sans", sans-serif;
        line-height: 1.8;
      }
      .contact a {
        color: #2db8d4;
        text-decoration: none;
      }
      .contact a:hover {
        text-decoration: underline;
      }

      /* Marketing link */
      .mkt-link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 1.6rem;
        padding: 11px 24px;
        background: rgba(45, 184, 212, 0.1);
        border: 1px solid rgba(45, 184, 212, 0.25);
        border-radius: 9px;
        font-size: 0.82rem;
        font-weight: 600;
        color: #2db8d4;
        text-decoration: none;
        transition: all 0.2s;
      }
      .mkt-link:hover {
        background: rgba(45, 184, 212, 0.2);
      }

      @media (max-width: 480px) {
        .ring1,
        .ring2,
        .ring3 {
          display: none;
        }
        h1 {
          font-size: 2rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="ring ring1"></div>
    <div class="ring ring2"></div>
    <div class="ring ring3"></div>

    <div class="wrap">
      <!-- Logo -->
      <div class="logo">
        <img
          src="img/Asset1.png"
          alt="Span Healthcare"
          style="
            height: 36px;
            width: auto;
            object-fit: contain;
            filter: brightness(0) invert(1);
          "
        />
      </div>

      <!-- Badge -->

      <!-- Headline -->
      <h1>We're making<br /><em>Span better.</em></h1>

      <!-- Sub -->
      <p class="sub">
        Our team is working hard to improve your experience. The Span Healthcare
        platform will be back shortly.
      </p>

      <!-- Contact -->
      <div class="contact">
        Questions? Reach us at
        <a href="mailto:info@spanhealthcare.com.ng">info@span-healthcare.com</a
        ><br />
        or call <a href="tel:+2348036102499">09039222028</a>
      </div>

      <!-- Marketing site link -->
      <a href="https://span-healthcare.com" class="mkt-link">
        <svg
          width="14"
          height="14"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <circle cx="12" cy="12" r="10" />
          <line x1="2" y1="12" x2="22" y2="12" />
          <path
            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"
          />
        </svg>
        Visit our website
      </a>
    </div>
  </body>
</html>
