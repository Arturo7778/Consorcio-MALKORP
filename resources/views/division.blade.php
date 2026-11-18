<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $division['name'] }} | CONSORCIO MALKORP">
    <title>{{ $division['name'] }} | CONSORCIO MALKORP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root{--navy:#102B4E;--blue:#24618B;--silver:#B9C5D1;--light:#F3F6F9;--dark:#101D2D}
        *{box-sizing:border-box;margin:0;padding:0}html{scroll-behavior:smooth}
        body{font-family:'DM Sans',sans-serif;color:var(--dark)}a{color:inherit;text-decoration:none}
        .container{width:min(1180px,90%);margin:auto}
        header{position:fixed;inset:0 0 auto;z-index:20;background:rgba(16,43,78,.97);border-bottom:1px solid rgba(255,255,255,.14);backdrop-filter:blur(12px)}
        .navbar{min-height:82px;display:flex;justify-content:space-between;align-items:center}
        .brand{color:#fff;display:flex;align-items:center;gap:12px}
        .brand-symbol{width:43px;height:43px;border:1px solid #b9c5d1;display:grid;place-items:center;font:800 21px Manrope,sans-serif}
        .brand-name{font:800 20px Manrope,sans-serif;letter-spacing:2px}.brand-name small{display:block;font:600 9px 'DM Sans',sans-serif;letter-spacing:3px}
        .nav{display:flex;gap:28px;align-items:center;color:#fff;font-size:12px;font-weight:700}.nav a:hover{color:#9bc8ea}
        .hero{min-height:640px;padding:155px 0 90px;display:flex;align-items:center;color:#fff;background:linear-gradient(90deg,rgba(7,22,40,.94),rgba(7,22,40,.56)),url('{{ $division['image'] }}') center/cover}
        .eyebrow{color:#a9d0ed;font-size:11px;letter-spacing:3px;font-weight:800;margin-bottom:22px}
        h1{max-width:800px;font:800 clamp(40px,6vw,68px)/1.12 Manrope,sans-serif;letter-spacing:-2px;margin-bottom:22px}
        .hero p{max-width:650px;color:#d5dfe9;line-height:1.9;font-size:16px}
        .hero-actions{margin-top:32px;display:flex;gap:14px;flex-wrap:wrap}
        .btn{display:inline-block;padding:15px 22px;background:var(--blue);color:white;font-size:11px;font-weight:800;letter-spacing:1px}.btn-outline{background:transparent;border:1px solid rgba(255,255,255,.65)}
        section{padding:85px 0}.label{color:var(--blue);font-size:10px;letter-spacing:3px;font-weight:800;margin-bottom:16px}
        h2{color:var(--navy);font:800 clamp(29px,4vw,42px)/1.2 Manrope,sans-serif;margin-bottom:16px}
        .intro{max-width:720px;color:#718092;line-height:1.9;font-size:14px}
        .service-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px;margin-top:35px}
        .service-card{display:grid;grid-template-columns:38% minmax(0,1fr);min-height:190px;background:#fff;border:1px solid #e2e9ef;overflow:hidden;transition:transform .25s,box-shadow .25s}
        .service-card:hover{transform:translateY(-4px);box-shadow:0 14px 30px rgba(16,43,78,.10)}
        .service-card img{width:100%;height:100%;min-height:190px;object-fit:cover}
        .service-card-content{padding:22px;display:flex;flex-direction:column;justify-content:center;align-items:flex-start}
        .service-card small{color:var(--blue);font-size:8px;font-weight:800;letter-spacing:1.2px;margin-bottom:9px}
        .service-card h3{font:700 18px/1.3 Manrope,sans-serif;color:var(--navy);margin-bottom:9px}
        .service-card p{font-size:11px;line-height:1.7;color:#718092}
        .service-card span{font-size:9px;font-weight:800;letter-spacing:1px;color:var(--blue);margin-top:13px}
        .contact-band{background:var(--navy);color:white}.contact-band h2{color:white}.contact-band p{color:#c5d2df;line-height:1.8;margin-bottom:24px}
        footer{background:#0b1e32;color:#aab9c8;padding:28px 0;font-size:11px}.footer-row{display:flex;justify-content:space-between;gap:18px;flex-wrap:wrap}
        @media(max-width:900px){.service-grid{grid-template-columns:1fr}}
        @media(max-width:700px){.navbar{min-height:72px}.nav{gap:12px;font  -size:10px}.nav a:nth-child(2){display:none}.hero{min-height:600px}.service-card{grid-template-columns:36% minmax(0,1fr)}.service-card-content{padding:16px}section{padding:65px 0}}
    </style>
</head>
<body>
<header><div class="container navbar">
    <a href="{{ route('home') }}" class="brand"><img src="{{ asset('images/logo/malkorp-logo.png') }}" alt="CONSORCIO MALKORP" class="brand-logo"></a>
    <nav class="nav">
        <a href="{{ route('home') }}">INICIO</a>
        <a href="{{ route('home') }}#servicios">SERVICIOS</a>
        <a href="{{ route('home') }}#proyectos">PROYECTOS</a>
        <a href="{{ route('home') }}#contacto">CONTACTO</a> 
    </nav>
</div></header>
<main>
    <section class="hero">
        <div class="container">
            <div class="eyebrow">{{ $division['eyebrow'] }}</div>
            <h1>{{ $division['headline'] }}</h1>
            <p>{{ $division['description'] }}</p>
            <div class="hero-actions">
                <a class="btn" href="#servicios">EXPLORAR ÁREA ↓</a>
                <a class="btn btn-outline" href="{{ route('home') }}#contacto">CONTACTAR</a>
            </div>
        </div>
    </section>
    <section id="servicios">
        <div class="container">
            <div class="label">CONSORCIO MALKORP / {{ strtoupper($division['name']) }}</div>
            <h2>Conocimiento aplicado a cada desafío.</h2>
            <p class="intro">Explora nuestras líneas de trabajo. Cada servicio cuenta con un espacio propio para conocer su enfoque, alcances, herramientas y material visual demostrativo.</p>
            <div class="service-grid">
                @foreach ($division['services'] as $serviceSlug => $service)
                    <a class="service-card" href="{{ route('service.show', ['division' => $slug, 'service' => $serviceSlug]) }}">
                        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}">
                        <div class="service-card-content">
                            <small>{{ $service['category'] }}</small>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['short'] }}</p>
                            <span>DESCUBRIR SERVICIO →</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <section class="contact-band">
        <div class="container">
            <div class="label" style="color:#9bc8ea">SIGUIENTE PASO</div>
            <h2>{{ $division['status'] }}</h2>
            <p>¿Tienes una consulta o una idea relacionada con {{ $division['name'] }}? Conversemos sobre tu proyecto.</p>
            <a class="btn" href="{{ route('home') }}#contacto">CONTACTAR A MALKORP →</a>
        </div>
    </section>
</main>
<footer><div class="container footer-row">
    <span>© {{ date('Y') }} CONSORCIO MALKORP. Todos los derechos reservados.</span>
    <a href="{{ route('home') }}">VOLVER AL PORTAL CORPORATIVO ↑</a>
</div></footer>
</body>
</html>
