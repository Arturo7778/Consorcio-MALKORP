<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CONSORCIO MALKORP. Ingeniería, arquitectura, construcción y tecnología para construir el futuro.">
    <title>CONSORCIO MALKORP | Construimos el futuro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #102B4E;
            --blue: #24618B;
            --silver: #B9C5D1;
            --light: #F4F7FA;
            --dark: #101D2D;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'DM Sans', sans-serif;
            color: var(--dark);
            background: white;
        }
        a {
            text-decoration: none;
            color: inherit;
        }
        .container {
            width: min(1180px, 90%);
            margin: auto;
        }
        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(16, 43, 78, 0.96);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255,255,255,.15);
            transition: background .3s ease;
        }
        .navbar {
            min-height: 88px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
        }
        .brand-symbol {
            width: 44px;
            height: 44px;
            border: 1px solid rgba(255,255,255,.65);
            display: grid;
            place-items: center;
            font-family: 'Manrope', sans-serif;
            font-size: 21px;
            font-weight: 800;
        }
        .brand-name {
            font-family: 'Manrope', sans-serif;
            font-size: 21px;
            font-weight: 800;
            letter-spacing: 2px;
        }
        .brand-name small {
            display: block;
            font-size: 9px;
            letter-spacing: 3px;
            font-weight: 500;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px;
            color: white;
            font-size: 13px;
            font-weight: 600;
        }
        .nav-links a {
            transition: .3s;
        }
        .nav-links a:hover {
            color: #A9D4F4;
        }
        .nav-contact {
            padding: 13px 21px;
            border: 1px solid rgba(255,255,255,.7);
        }
        .menu-toggle {
            display: none;
            background: transparent;
            color: white;
            border: 0;
            font-size: 28px;
            cursor: pointer;
        }
        /* HERO */
        .hero {
            min-height: 730px;
            height: 100vh;
            max-height: 900px;
            display: flex;
            align-items: center;
            position: relative;
            background:
                linear-gradient(90deg, rgba(7,22,40,.92) 0%, rgba(12,34,57,.72) 48%, rgba(12,34,57,.12) 100%),
                url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=2000&q=85')
                center 55% / cover;
            color: white;
        }
        .hero-content {
            padding-top: 85px;
            max-width: 760px;
        }
        .eyebrow {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 11px;
            letter-spacing: 3px;
            font-weight: 700;
            color: #B8D7F1;
            margin-bottom: 27px;
        }
        .eyebrow::before {
            content: '';
            width: 35px;
            height: 2px;
            background: #72A9D2;
        }
        .hero h1 {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(42px, 6vw, 76px);
            line-height: 1.12;
            letter-spacing: -2.5px;
            margin-bottom: 25px;
        }
        .hero h1 span {
            color: #8ABDE4;
        }
        .hero-description {
            max-width: 560px;
            color: #D5DFE9;
            font-size: 16px;
            line-height: 1.9;
            margin-bottom: 36px;
        }
        .hero-buttons {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 25px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .7px;
            transition: .3s;
        }
        .btn-primary {
            background: #24618B;
            color: white;
        }
        .btn-primary:hover {
            background: #347EAD;
            transform: translateY(-3px);
        }
        .btn-outline {
            border: 1px solid rgba(255,255,255,.6);
            color: white;
        }
        .btn-outline:hover {
            background: white;
            color: var(--navy);
        }
        .hero-bottom {
            position: absolute;
            bottom: 35px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: rgba(255,255,255,.75);
            font-size: 10px;
            letter-spacing: 2px;
        }
        /* SECCIONES GENERALES */
        section { padding: 105px 0; scroll-margin-top: 88px; }
        .section-label { color: var(--blue); font-size: 11px; font-weight: 800; letter-spacing: 3px; margin-bottom: 20px; }
        .section-title { font-family: 'Manrope', sans-serif; color: var(--navy); font-size: clamp(30px, 4vw, 45px); line-height: 1.2; letter-spacing: -1.5px; margin-bottom: 23px; }
        .intro-text { color: #647184; line-height: 1.9; font-size: 15px; margin-bottom: 28px; }
        /* NOSOTROS */
        .about-section { background: #FFFFFF; padding: 82px 0 88px; }
        .about-header { display: block; margin-bottom: 30px; }
        .about-header > div { max-width: 760px; }
        .about-header .section-title { margin-bottom: 13px; }
        .about-header .section-title span { color: var(--blue); }
        .about-intro-text { max-width: 620px; color: #778394; font-size: 13px; line-height: 1.8; margin: 0; }
        .about-main { display: grid; grid-template-columns: 1.05fr .95fr; align-items: center; gap: 48px; }
        .about-photo { position: relative; height: 410px; overflow: hidden; background: var(--navy); }
        .about-photo img { width: 100%; height: 100%; object-fit: cover; transition: transform .7s; }
        .about-photo:hover img { transform: scale(1.04); }
        .about-photo-label { position: absolute; bottom: 25px; left: 25px; right: 25px; background: rgba(16,43,78,.94); color: white; padding: 22px 25px; display: flex; flex-direction: column; gap: 7px; }
        .about-photo-label span { color: #9BC8EA; font-size: 10px; letter-spacing: 2px; }
        .about-photo-label strong { font-family: 'Manrope', sans-serif; font-size: 17px; }
        .about-content { padding: 8px 0; }
        .about-symbol { width: 51px; height: 51px; border: 1px solid #B9C5D1; display: grid; place-items: center; color: var(--navy); font-family: 'Manrope', sans-serif; font-weight: 800; font-size: 21px; margin-bottom: 18px; }
        .about-content h3 { font-family: 'Manrope', sans-serif; font-size: clamp(25px, 3vw, 35px); line-height: 1.25; color: var(--navy); margin-bottom: 16px; }
        .about-content > p { color: #718092; font-size: 13px; line-height: 1.8; margin-bottom: 12px; }
        .about-signature { display: flex; align-items: center; gap: 13px; color: var(--blue); font-size: 10px; font-weight: 800; letter-spacing: 1.2px; margin-top: 18px; }
        .about-signature span { width: 35px; height: 2px; background: var(--blue); }
        .about-pillars { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-top: 48px; }
        .pillar-card { position: relative; padding: 25px 24px; background: #F5F7FA; border: 1px solid #E8EDF2; transition: .3s; }
        .pillar-card:hover { background: var(--navy); transform: translateY(-6px); }
        .pillar-card:hover h3, .pillar-card:hover p, .pillar-card:hover .pillar-icon { color: white; }
        .pillar-number { position: absolute; top: 25px; right: 25px; color: #AAB8C7; font-size: 11px; font-weight: 700; }
        .pillar-icon { color: var(--blue); font-size: 27px; margin-bottom: 13px; }
        .pillar-card h3 { font-family: 'Manrope', sans-serif; font-size: 19px; color: var(--navy); margin-bottom: 9px; }
        .pillar-card p { color: #778394; font-size: 13px; line-height: 1.9; }
        @media (max-width: 900px) {
            .about-main { gap: 30px; }
            .about-photo { height: 360px; }
            .about-pillars { margin-top: 38px; }
        }
        @media (max-width: 650px) {
            .about-section { padding: 65px 0 70px; }
            .about-header { display: block; margin-bottom: 28px; }
            .about-header > p { margin-top: 15px; max-width: 100%; }
            .about-main { grid-template-columns: 1fr; gap: 28px; }
            .about-photo { height: 300px; }
            .about-photo-label { left: 14px; right: 14px; bottom: 14px; padding: 16px 18px; }
            .about-content { padding: 0; }
            .about-pillars { grid-template-columns: 1fr; gap: 12px; margin-top: 32px; }
            .pillar-card { padding: 23px; }
        }
        /* DIVISIONES / SERVICIOS */
        .services { background:#F3F6F9; padding:92px 0; }
        .section-heading { max-width:720px; margin-bottom:38px; }
        .section-heading .intro-text { margin-bottom:0; max-width:620px; }
        .service-grid {
            display:grid !important;
            grid-template-columns:repeat(2,minmax(0,1fr)) !important;
            align-items:stretch;
            gap:20px;
            width:100%;
        }
        .service-grid > a.service-card {
            display:grid !important;
            grid-template-columns:42% minmax(0,1fr) !important;
            grid-template-rows:minmax(235px,auto);
            align-items:stretch;
            width:100%;
            min-width:0;
            min-height:235px;
            color:inherit;
            text-decoration:none;
            background:#FFFFFF;
            border:1px solid #E2E9EF;
            overflow:hidden;
            transition:transform .3s ease,box-shadow .3s ease;
        }
        .service-grid > a.service-card:hover {
            transform:translateY(-5px);
            box-shadow:0 16px 34px rgba(16,43,78,.10);
        }
        .service-grid > a.service-card:focus-visible {
            outline:3px solid #24618B;
            outline-offset:4px;
        }
        .service-image {
            position:relative;
            display:block;
            width:100%;
            height:100%;
            min-height:235px;
            overflow:hidden;
            background:var(--navy);
        }
        .service-image img {
            display:block;
            width:100%;
            height:100%;
            min-height:235px;
            object-fit:cover;
            transition:transform .6s ease;
        }
        .service-card:hover .service-image img { transform:scale(1.06); }
        .service-image::after {
            content:"";
            position:absolute;
            inset:0;
            background:linear-gradient(0deg,rgba(8,25,44,.45),transparent 65%);
            pointer-events:none;
        }
        .service-number {
            position:absolute;
            z-index:1;
            left:17px;
            bottom:15px;
            color:#FFFFFF;
            font-size:10px;
            font-weight:800;
            letter-spacing:1.5px;
        }
        .service-info {
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:flex-start;
            min-width:0;
            padding:25px;
        }
        .service-kicker {
            color:var(--blue);
            font-size:9px;
            font-weight:800;
            letter-spacing:1.3px;
            line-height:1.5;
            margin-bottom:10px;
        }
        .service-info h3 {
            font-family:'Manrope',sans-serif;
            font-size:21px;
            line-height:1.25;
            color:var(--navy);
            margin:0 0 10px;
        }
        .service-info p {
            color:#718092;
            font-size:12px;
            line-height:1.8;
            margin:0;
        }
        .service-link {
            display:inline-block;
            margin-top:17px;
            color:var(--blue);
            font-size:10px;
            font-weight:800;
            letter-spacing:1px;
        }
        @media(max-width:900px) {
            .service-grid { grid-template-columns:1fr !important; }
        }
        @media(max-width:650px) {
            .services { padding:68px 0; }
            .section-heading { margin-bottom:28px; }
            .service-grid { gap:14px; }
            .service-grid > a.service-card {
                grid-template-columns:38% minmax(0,1fr) !important;
                grid-template-rows:minmax(205px,auto);
                min-height:205px;
            }
            .service-image,.service-image img { min-height:205px; }
            .service-info { padding:17px; }
            .service-info h3 { font-size:18px; }
            .service-info p { font-size:11px; }
            .service-kicker { font-size:8px; }
        }
        /* PROYECTOS DESTACADOS */
        .project-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 22px;
        }
        .project-card {
            position: relative;
            display: block;
            height: 340px;
            min-width: 0;
            overflow: hidden;
            background: var(--navy);
            color: #FFFFFF;
            text-decoration: none;
            border: 1px solid rgba(16,43,78,.08);
        }
        .project-card img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .65s ease;
        }
        .project-card:hover img {
            transform: scale(1.06);
        }
        .project-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(8,25,44,.96) 0%, rgba(8,25,44,.35) 55%, rgba(8,25,44,.05) 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-start;
            padding: 27px;
            color: #FFFFFF;
        }
        .project-overlay small {
            color: #A9D0ED;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1.7px;
            margin-bottom: 10px;
        }
        .project-overlay h3 {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(19px, 2vw, 25px);
            line-height: 1.25;
            margin-bottom: 9px;
        }
        .project-overlay p {
            max-width: 470px;
            color: #D5E0EA;
            font-size: 12px;
            line-height: 1.7;
            margin: 0 0 14px;
        }
        .project-cta {
            color: #FFFFFF;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.2px;
        }
        .project-demo-tag {
            position: absolute;
            top: 17px;
            left: 17px;
            z-index: 2;
            padding: 8px 11px;
            color: #FFFFFF;
            background: rgba(16,43,78,.88);
            border: 1px solid rgba(255,255,255,.3);
            font-size: 8px;
            font-weight: 800;
            letter-spacing: 1.2px;
        }
        .project-card:focus-visible {
            outline: 3px solid #24618B;
            outline-offset: 4px;
        }
        .project-note {
            margin-top: 20px;
            color: #8794A4;
            font-size: 11px;
            line-height: 1.7;
        }
        @media(max-width: 900px) {
            .project-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 16px;
            }
            .project-card {
                height: 310px;
            }
            .project-overlay {
                padding: 21px;
            }
        }
        @media(max-width: 650px) {
            .project-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            .project-card {
                height: 300px;
            }
        }
        /* STATEMENT */
        .statement {
            background:
                linear-gradient(rgba(11,34,58,.92), rgba(11,34,58,.92)),
                url('https://images.unsplash.com/photo-1511818966892-d7d671e672a2?auto=format&fit=crop&w=1800&q=80')
                center / cover;
            text-align: center;
            color: white;
        }
        .statement h2 {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(30px, 4vw, 49px);
            line-height: 1.3;
            max-width: 850px;
            margin: 0 auto 20px;
        }
        .statement p {
            color: #BDCDDC;
            font-size: 14px;
            letter-spacing: 2px;
        }
        /* CONTACT */
        .contact {
            background: #F4F7FA;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
        }
        .contact-details {
            color: #68778A;
            font-size: 14px;
            line-height: 2;
            margin-top: 25px;
        }
        .contact-box {
            background: white;
            padding: 38px;
            border: 1px solid #E5EBF0;
        }
        .contact-box h3 {
            font-family: 'Manrope', sans-serif;
            color: var(--navy);
            font-size: 23px;
            margin-bottom: 14px;
        }
        .contact-box p {
            color: #7A8796;
            font-size: 13px;
            line-height: 1.8;
            margin-bottom: 25px;
        }
        /* FOOTER */
        footer {
            background: #0B1E32;
            color: white;
            padding: 55px 0 25px;
        }
        .footer-top {
            display: flex;
            justify-content: space-between;
            gap: 35px;
            flex-wrap: wrap;
            padding-bottom: 40px;
        }
        .footer-brand {
            max-width: 350px;
        }
        .footer-brand p {
            color: #9BAEC0;
            font-size: 12px;
            line-height: 1.9;
            margin-top: 20px;
        }
        .footer-links h4 {
            font-size: 12px;
            letter-spacing: 1px;
            margin-bottom: 17px;
        }
        .footer-links a {
            display: block;
            color: #AAB9C8;
            font-size: 12px;
            margin: 11px 0;
        }
        .footer-bottom {
            border-top: 1px solid #263A4E;
            padding-top: 22px;
            display: flex;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
            color: #8294A6;
            font-size: 10px;
        }
        /* RESPONSIVE */
        @media(max-width: 900px) {
            .nav-links {
                gap: 15px;
                font-size: 11px;
            }
            .service-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .intro-grid, .contact-grid {
                gap: 40px;
            }
        }
        @media(max-width: 650px) {
            .navbar {
                min-height: 75px;
            }
            .menu-toggle {
                display: block;
            }
            .nav-links {
                display: none;
                position: absolute;
                top: 75px;
                left: 0;
                width: 100%;
                padding: 25px 5%;
                background: #102B4E;
                flex-direction: column;
                align-items: flex-start;
                gap: 22px;
            }
            .nav-links.active {
                display: flex;
            }
            .hero {
                min-height: 720px;
                height: 90vh;
                background-position: 60% center;
            }
            .hero h1 {
                font-size: 43px;
            }
            .hero-description {
                font-size: 14px;
            }
            .hero-bottom {
                font-size: 8px;
            }
            section {
                padding: 75px 0;
            }
            .intro-grid, .contact-grid, .project-grid {
                grid-template-columns: 1fr;
            }
            .intro-image {
                height: 310px;
                margin-bottom: 20px;
            }
            .image-caption {
                left: -8px;
            }
            .about-header {
                margin-bottom: 25px;
            }
            .about-intro-text {
                font-size: 13px;
            }
            .about-main {
                grid-template-columns: 1fr;
                gap: 28px;
            }
            .service-grid {
                grid-template-columns: 1fr;
            }
            .service-card img {
                height: 220px;
            }
            .project-card {
                height: 290px;
            }
            .contact-box {
                padding: 25px;
            }
            .footer-top {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<header>
    <div class="container navbar">
        <a href="#" class="brand">
            <div class="brand-symbol">M</div>
            <div class="brand-name">
                MALKORP
                <small>CONSORCIO</small>
            </div>
        </a>
        <button class="menu-toggle" id="menuToggle" aria-label="Abrir menú">☰</button>
        <nav class="nav-links" id="navLinks">
            <a href="#inicio">INICIO</a>
            <a href="#nosotros">NOSOTROS</a>
            <a href="#servicios">SERVICIOS</a>
            <a href="#proyectos">PROYECTOS</a>
            <a href="#contacto" class="nav-contact">CONTÁCTANOS</a>
        </nav>
    </div>
</header>
<main>
    <!-- PORTADA -->
    <section class="hero" id="inicio">
        <div class="container">
            <div class="hero-content">
                <div class="eyebrow">INGENIERÍA · ARQUITECTURA · TECNOLOGÍA</div>
                <h1>
                    Construimos hoy<br>
                    la visión del <span>mañana.</span>
                </h1>
                <p class="hero-description">
                    Integramos conocimiento, ingeniería e innovación
                    para desarrollar soluciones que transforman ideas
                    en proyectos y proyectos en realidades.
                </p>
                <div class="hero-buttons">
                    <a href="#servicios" class="btn btn-primary">
                        DESCUBRE MALKORP →
                    </a>
                    <a href="#proyectos" class="btn btn-outline">
                        NUESTROS PROYECTOS
                    </a>
                </div>
            </div>
        </div>
        <div class="container hero-bottom">
            <span>PERÚ · PROYECCIÓN GLOBAL</span>
            <span>01 — INNOVACIÓN Y DESARROLLO</span>
        </div>
    </section>
    <!-- NOSOTROS -->
    <section class="about-section" id="nosotros">
        <div class="container">
            <div class="about-header">
                <div>
                    <div class="section-label">01 / QUIÉNES SOMOS</div>
                    <h2 class="section-title">
                        Nuestras raíces definen
                        <span>nuestro futuro.</span>
                    </h2>
                    <p class="about-intro-text">
                        Una visión multidisciplinaria que integra conocimiento,
                        ingeniería e innovación para generar nuevas oportunidades
                        de desarrollo.
                    </p>
                </div>
            </div>
            <div class="about-main">
                <div class="about-photo">
                    <img
                        src="https://images.unsplash.com/photo-1511818966892-d7d671e672a2?auto=format&fit=crop&w=1200&q=85"
                        alt="Arquitectura y desarrollo de infraestructura">
                    <div class="about-photo-label">
                    <span>CONSORCIO MALKORP</span>
                    <strong>Visión. Solidez. Desarrollo.</strong>
                </div>
            </div>    
            <div class="about-content">
                <div class="about-symbol">M</div>
                <h3>
                    Construimos más que proyectos.
                    Construimos oportunidades.
                </h3>
                <p>
                    CONSORCIO MALKORP es una iniciativa empresarial
                    concebida para integrar distintas disciplinas
                    bajo una misma filosofía: crecer sobre bases
                    sólidas y transformar el conocimiento en soluciones.
                </p>
                <p>
                    Nuestra visión conecta ingeniería, arquitectura,
                    construcción, tecnología y formación profesional,
                    creando un ecosistema orientado al desarrollo
                    y la innovación.
                </p>
                <div class="about-signature">
                    <span></span>
                    DE RAÍCES SÓLIDAS, CONSTRUIMOS EL FUTURO.
                </div>
            </div>
        </div>
        <div class="about-pillars">
            <article class="pillar-card">
                <span class="pillar-number">01</span>
                <div class="pillar-icon">◎</div>
                <h3>Misión</h3>
                <p>
                    Integrar conocimiento y capacidades
                    multidisciplinarias para desarrollar
                    soluciones de valor y contribuir al progreso.
                </p>
            </article>
            <article class="pillar-card">
                <span class="pillar-number">02</span>
                <div class="pillar-icon">↗</div>
                <h3>Visión</h3>
                <p>
                    Consolidar una organización multidisciplinaria
                    reconocida por su solidez, innovación y
                    capacidad de transformar ideas en realidades.
                </p>
            </article>  
            <article class="pillar-card">
                <span class="pillar-number">03</span>
                <div class="pillar-icon">◇</div>
                <h3>Valores</h3>
                <p>
                    Solidez, conocimiento, innovación,
                    responsabilidad y compromiso con
                    la calidad en cada desafío.
                </p>
            </article>
        </div>
    </section>
    <!-- SERVICIOS -->
    <section class="services" id="servicios">
        <div class="container">
            <div class="section-heading">
                <div class="section-label">02 / NUESTRO ECOSISTEMA</div>
                <h2 class="section-title">Conocimiento que se transforma en soluciones.</h2>
                <p class="intro-text">Cuatro áreas que representan nuestra visión de crecimiento, desarrollo y transformación.</p>
            </div>
            <div class="service-grid">
                <a class="service-card" href="{{ route('division.show', 'ingenieria') }}">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=900&q=85" alt="Ingeniería y construcción">
                        <span class="service-number">01 / 04</span>
                    </div>
                    <div class="service-info">
                        <div class="service-kicker">INFRAESTRUCTURA Y DESARROLLO</div>
                        <h3>Ingeniería</h3>
                        <p>Proyectos de ingeniería civil, diseño estructural, carreteras, obras civiles y consultoría técnica.</p>
                        <span class="service-link">CONOCE MÁS →</span>
                    </div>
                </a>
                <a class="service-card" href="{{ route('division.show', 'arquitectura') }}">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=900&q=85" alt="Arquitectura moderna">
                        <span class="service-number">02 / 04</span>
                    </div>
                    <div class="service-info">
                        <div class="service-kicker">DISEÑO Y ESPACIOS</div>
                        <h3>Arquitectura</h3>
                        <p>Diseño arquitectónico, planificación de espacios, modelado BIM y visualización de proyectos.</p>
                        <span class="service-link">CONOCE MÁS →</span>
                    </div>
                </a>
                <a class="service-card" href="{{ route('division.show', 'technology') }}">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a780?auto=format&fit=crop&w=900&q=85" alt="Tecnología e innovación">
                        <span class="service-number">03 / 04</span>
                    </div>
                    <div class="service-info">
                        <div class="service-kicker">TRANSFORMACIÓN DIGITAL</div>
                        <h3>Technology</h3>
                        <p>Desarrollo de software, automatización de procesos, inteligencia artificial y soluciones digitales.</p>
                        <span class="service-link">CONOCE MÁS →</span>
                    </div>
                </a>
                <a class="service-card" href="{{ route('division.show', 'academy') }}">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=900&q=85" alt="Formación y capacitación profesional">
                        <span class="service-number">04 / 04</span>
                    </div>
                    <div class="service-info">
                        <div class="service-kicker">FORMACIÓN Y CONOCIMIENTO</div>
                        <h3>Academy</h3>
                        <p>Capacitación, cursos especializados y desarrollo de competencias para profesionales.</p>
                        <span class="service-link">PRÓXIMAMENTE →</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- PROYECTOS DESTACADOS -->
    <section id="proyectos">
        <div class="container">
            <div class="section-heading">
                <div class="section-label">03 / PORTAFOLIO</div>
                <h2 class="section-title">Proyectos que representan nuestra visión.</h2>
                <p class="intro-text">
                    Una selección de conceptos demostrativos que reflejan las áreas
                    de conocimiento, diseño e innovación que impulsan a MALKORP.
                </p>
            </div>
            <div class="project-grid">
                <a class="project-card" href="/ingenieria" aria-label="Explorar división de Ingeniería">
                    <img src="https://images.unsplash.com/photo-1511818966892-d7d671e672a2?auto=format&fit=crop&w=1200&q=85" alt="Visualización arquitectónica de un proyecto de infraestructura">
                    <span class="project-demo-tag">PROYECTO DEMOSTRATIVO</span>
                    <div class="project-overlay">
                        <small>INGENIERÍA · INFRAESTRUCTURA</small>
                        <h3>Conexión y desarrollo: puente contemporáneo</h3>
                        <p>Concepto visual de infraestructura para conectar territorios y facilitar el desarrollo.</p>
                        <span class="project-cta">EXPLORAR INGENIERÍA →</span>
                    </div>
                </a>
                <a class="project-card" href="/arquitectura" aria-label="Explorar división de Arquitectura">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1200&q=85" alt="Interior de arquitectura contemporánea">
                    <span class="project-demo-tag">PROYECTO CONCEPTUAL</span>
                    <div class="project-overlay">
                        <small>ARQUITECTURA · DISEÑO</small>
                        <h3>Espacios para una nueva forma de habitar</h3>
                        <p>Propuesta conceptual de diseño arquitectónico, funcionalidad y experiencia espacial.</p>
                        <span class="project-cta">EXPLORAR ARQUITECTURA →</span>
                    </div>
                </a>
                <a class="project-card" href="/technology" aria-label="Explorar división de Technology">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1200&q=85" alt="Componentes electrónicos y tecnología">
                    <span class="project-demo-tag">CONCEPTO DEMOSTRATIVO</span>
                    <div class="project-overlay">
                        <small>TECHNOLOGY · TRANSFORMACIÓN DIGITAL</small>
                        <h3>Plataforma inteligente de gestión</h3>
                        <p>Concepto de solución digital para integrar información, procesos y herramientas de gestión.</p>
                        <span class="project-cta">EXPLORAR TECHNOLOGY →</span>
                    </div>
                </a>
                <a class="project-card" href="/academy" aria-label="Explorar división de Academy">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=1200&q=85" alt="Sesión de formación profesional en aula">
                    <span class="project-demo-tag">PROPUESTA CONCEPTUAL</span>
                    <div class="project-overlay">
                        <small>ACADEMY · FORMACIÓN</small>
                        <h3>Formación técnica para el futuro</h3>
                        <p>Concepto de programa de capacitación orientado al aprendizaje práctico y profesional.</p>
                        <span class="project-cta">EXPLORAR ACADEMY →</span>
                    </div>
                </a>
            </div>
            <p class="project-note">
                Las imágenes y descripciones de esta sección son referenciales y conceptuales.
                No representan obras, contratos ni proyectos ejecutados por CONSORCIO MALKORP.
                Serán reemplazadas por contenido propio en una siguiente etapa.
            </p>
        </div>
    </section>
    <!-- FRASE INSTITUCIONAL -->
    <section class="statement">
        <div class="container">
            <div class="section-label">NUESTRA FILOSOFÍA</div>
            <h2>
                De raíces sólidas,<br>
                construimos el futuro.
            </h2>
            <p>CONOCIMIENTO · SOLIDEZ · INNOVACIÓN</p>
        </div>
    </section>
    <!-- CONTACTO -->
    <section class="contact" id="contacto">
        <div class="container contact-grid">
            <div>
                <div class="section-label">04 / CONTACTO</div>
                <h2 class="section-title">
                    Hagamos realidad tu próximo proyecto.
                </h2>
                <p class="intro-text">
                    Estamos preparados para conocer nuevas ideas,
                    colaborar en proyectos y construir oportunidades.
                </p>
                <div class="contact-details">
                    CONSORCIO MALKORP<br>
                    Perú · Ingeniería · Arquitectura · Tecnología
                </div>
            </div>
            <div class="contact-box">
                <h3>¿Tienes un proyecto en mente?</h3>
                <p>
                    Escríbenos y conversemos sobre cómo podemos
                    ayudarte a desarrollar tu próxima idea.
                </p>
                <a href="mailto:contacto@malkorp.pe" class="btn btn-primary">
                    SOLICITAR INFORMACIÓN →
                </a>
            </div>
        </div>
    </section>
</main>
<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <div class="brand">
                    <div class="brand-symbol">M</div>
                    <div class="brand-name">
                        MALKORP
                        <small>CONSORCIO</small>
                    </div>
                </div>
                <p>
                    De raíces sólidas, construimos el futuro.
                    Una visión multidisciplinaria orientada
                    al conocimiento y la innovación.
                </p>
            </div>
            <div class="footer-links">
                <h4>NAVEGACIÓN</h4>
                <a href="#inicio">Inicio</a>
                <a href="#nosotros">Nosotros</a>
                <a href="#servicios">Servicios</a>
                <a href="#proyectos">Proyectos</a>
            </div>
            <div class="footer-links">
                <h4>ÁREAS</h4>
                <a href="#servicios">Ingeniería</a>
                <a href="#servicios">Arquitectura</a>
                <a href="#servicios">Technology</a>
                <a href="#servicios">Academy</a>
            </div>
            <div class="footer-links">
                <h4>CONTACTO</h4>
                <a href="#contacto">Contáctanos</a>
                <a href="mailto:contacto@malkorp.pe">Correo electrónico</a>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© 2026 CONSORCIO MALKORP. Todos los derechos reservados.</span>
            <span>DE RAÍCES SÓLIDAS, CONSTRUIMOS EL FUTURO.</span>
        </div>
    </div>
</footer>
<script>
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
        });
    });
</script>
</body>
</html>
