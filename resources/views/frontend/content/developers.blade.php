<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Developers | Samaira Group</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/loader-logo.png" type="image/png">
  <meta name="title" content="Our Developers | Samaira Group">
  <meta name="description" content="Meet the talented developers behind Samaira Group's digital solutions. Our team combines creativity, technology, and passion to deliver world-class digital solutions.">
  <meta name="keywords" content="Samaira Group, Developers, Web Development, Mobile Apps, UI/UX Design, Backend Development, Frontend Development, Full Stack Development, Software Development, Digital Solutions">
  <meta name="author" content="Samaira Group">
  <meta property="og:title" content="Our Developers | Samaira Group">
  <meta property="og:description" content="Meet the talented developers behind Samaira Group's digital solutions. Our team combines creativity, technology, and passion to deliver world-class digital solutions.">
  <meta property="og:image" content="{{ asset('assets/frontassets/') }}/images/loader-logo.png">
  <meta property="og:url" content="https://samairagroup.com/developers">
    <meta property="og:type" content="website">
  <link rel="stylesheet" href="{{ asset('assets/img/') }}/developers/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets/img/') }}/developers/fonts/css/all.min.css">
  <style>
    body {
      position: relative;
      min-height: 100vh;
      background: linear-gradient(135deg, #f8f9fa 60%, #e9ecef 100%);
      overflow-x: hidden;
    }
    .floating-shapes {
      position: fixed;
      width: 100vw;
      height: 100vh;
      top: 0;
      left: 0;
      pointer-events: none;
      z-index: 0;
    }
    .shape {
      position: absolute;
      background: rgba(2, 155, 197, 0.15);
      border-radius: 50%;
      animation: float 15s infinite linear;
      filter: blur(1px);
    }
    .shape:nth-child(1) {
      width: 120px;
      height: 120px;
      top: 18%;
      left: 8%;
      animation-delay: 0s;
    }
    .shape:nth-child(2) {
      width: 180px;
      height: 180px;
      top: 65%;
      right: 7%;
      animation-delay: -5s;
    }
    .shape:nth-child(3) {
      width: 90px;
      height: 90px;
      bottom: 15%;
      left: 18%;
      animation-delay: -10s;
    }
    @keyframes float {
      0% { transform: translate(0, 0) rotate(0deg); }
      50% { transform: translate(30px, 30px) rotate(180deg); }
      100% { transform: translate(0, 0) rotate(360deg); }
    }
    .dev-section {
      position: relative;
      z-index: 1;
      background: linear-gradient(135deg, #f8f9fa 60%, #e9ecef 100%);
      padding: 60px 0 80px 0;
    }
    .dev-title {
      text-align: center;
      font-size: 2.5rem;
      font-weight: 700;
      color: #2293ce;
      margin-bottom: 12px;
      font-family: 'Poppins', sans-serif;
    }
    .dev-subtitle {
      text-align: center;
      color: #555;
      font-size: 1.2rem;
      margin-bottom: 48px;
      font-family: 'Manrope', sans-serif;
    }
    .dev-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      max-width: 1100px;
      margin: 0 auto;
    }
    .dev-card {
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 8px 32px rgba(2,155,197,0.08);
      overflow: visible;
      width: 500px;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: box-shadow 0.3s, transform 0.3s;
      position: relative;
      margin-top: 60px;
    }
    .dev-card:hover {
      box-shadow: 0 16px 40px rgba(2,155,197,0.16);
      transform: translateY(-8px) scale(1.03);
    }
    .dev-avatar-wrapper {
      position: absolute;
      top: -60px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 2;
      background: transparent;
    }
    .dev-avatar {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 6px solid #fff;
      box-shadow: 0 4px 16px rgba(2,155,197,0.10);
      background: #f8f9fa;
      display: block;
    }
    .dev-info {
      padding: 32px 24px 24px 24px;
      text-align: center;
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 60px;
    }
    .dev-name {
      font-size: 1.4rem;
      font-weight: 700;
      color: #2A4A45;
      margin-bottom: 6px;
      font-family: 'Poppins', sans-serif;
    }
    .dev-role {
      font-size: 1.1rem;
      color: #2293ce;
      font-weight: 600;
      margin-bottom: 18px;
      font-family: 'Manrope', sans-serif;
    }
    .dev-desc {
      color: #444;
      font-size: 1.05rem;
      margin-bottom: 18px;
      font-family: 'Manrope', sans-serif;
      line-height: 1.6;
    }
    .dev-skills {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      justify-content: center;
      margin-bottom: 18px;
    }
    .dev-skill {
      background: #e3f6fb;
      color: #2293ce;
      font-size: 0.95rem;
      padding: 6px 16px;
      border-radius: 20px;
      font-weight: 600;
      font-family: 'Manrope', sans-serif;
    }
    .dev-socials {
      display: flex;
      gap: 16px;
      justify-content: center;
      margin-top: 10px;
    }
    .dev-socials a {
      color: #2293ce;
      font-size: 1.3rem;
      transition: color 0.2s;
    }
    .dev-socials a:hover {
      color: #176fa1;
    }
    .dev-contact {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
      margin-bottom: 16px;
      font-size: 1rem;
      color: #2293ce;
      font-family: 'Manrope', sans-serif;
    }
    .dev-contact i {
      margin-right: 7px;
      color: #2293ce;
      font-size: 1.1rem;
      vertical-align: middle;
    }
    .dev-contact a {
      color: #2293ce;
      text-decoration: none;
      transition: color 0.2s;
      word-break: break-all;
    }
    .dev-contact a:hover {
      color: #176fa1;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="floating-shapes">
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <section class="dev-section">
    <div class="container">
        <div class="dev-header">
            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/') }}/developers/logo.png" alt="Developers Header" style="height:80px; margin: 0 auto 20px auto; display: block;"></a>
        </div>
    </div>
      <h1 class="dev-title">Meet Our Developers</h1>
      <div class="dev-subtitle">Our team combines creativity, technology, and passion to deliver world-class digital solutions. Get to know the professionals behind our success.</div>
      <div class="dev-cards">
        <!-- Backend Developer Card -->
        <div class="dev-card">
          <div class="dev-avatar-wrapper">
            <img class="dev-avatar" src="{{ asset('assets/img/') }}/developers/mahfuzul-islam.jpg" alt="Backend Developer">
          </div>
          <div class="dev-info">
            <div class="dev-name">Mahfuzul Islam</div>
            <div class="dev-role">Backend Developer</div>
            <div class="dev-contact">
              <div><i class="fas fa-envelope"></i><a href="mailto:mahfuzul1125@gmail.com">mahfuzul1125@gmail.com</a></div>
            </div>
            <div class="dev-desc">
              Expert in architecting scalable, secure, and high-performance server-side applications. Passionate about clean code, automation, and building robust APIs that power seamless user experiences.
            </div>
            <div class="dev-skills">
              <span class="dev-skill">Laravel</span>
              <span class="dev-skill">PHP</span>
              <span class="dev-skill">MySQL</span>
              <span class="dev-skill">REST API</span>
            </div>
            <div class="dev-socials">
              <a href="https://www.linkedin.com/in/thisismahfuzofficial/" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
              <a href="https://github.com/mahfuzul-niko" title="GitHub"><i class="fab fa-github"></i></a>
              <a href="https://www.facebook.com/thisismahfuzofficial" title="Facebook"><i class="fab fa-facebook"></i></a>
              <a href="https://www.instagram.com/thisismahfuzofficial/" title="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <!-- Frontend Designer Card -->
        <div class="dev-card">
          <div class="dev-avatar-wrapper">
            <img class="dev-avatar" src="{{ asset('assets/img/') }}/developers/sadia-haque.jpg" alt="Frontend Designer">
          </div>
          <div class="dev-info">
            <div class="dev-name">Sadia Haque</div>
            <div class="dev-role">Frontend Designer</div>
            <div class="dev-contact">
              <div><i class="fas fa-envelope"></i><a href="mailto:sadia.haque207@gmail.com">sadia.haque207@gmail.com</a></div>
            </div>
            <div class="dev-desc">
              Creative UI/UX designer and frontend developer with a keen eye for detail. Specializes in crafting beautiful, intuitive interfaces and bringing brands to life through modern web technologies.
            </div>
            <div class="dev-skills">
              <span class="dev-skill">HTML5</span>
              <span class="dev-skill">CSS3</span>
              <span class="dev-skill">Bootstrap</span>
              <span class="dev-skill">JavaScript</span>
              <span class="dev-skill">Figma</span>
            </div>
            <div class="dev-socials">
              <a href="https://www.linkedin.com/in/sadiahaque207/" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
              <a href="https://github.com/sadia-haque207" title="GitHub"><i class="fab fa-github"></i></a>
              <a href="https://www.facebook.com/sadiahaque207/" title="Facebook"><i class="fab fa-facebook"></i></a>
              <a href="https://www.instagram.com/sadia.haque207/" title="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
