<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $service['title'] }} | {{ $division['name'] }} - CONSORCIO MALKORP">
    <title>{{ $service['title'] }} | MALKORP {{ $division['name'] }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root{--navy:#102B4E;--blue:#24618B;--light:#F3F6F9;--dark:#101D2D}
        *{box-sizing:border-box;margin:0;padding:0}html{scroll-behavior:smooth}
        body{font-family:'DM Sans',sans-serif;color:var(--dark)}a{color:inherit;text-decoration:none}
        .container{width:min(1180px,90%);margin:auto}
        header{position:fixed;inset:0 0 auto;z-index:20;background:rgba(16,43,78,.97);border-bottom:1px solid rgba(255,255,255,.14);backdrop-filter:blur(12px)}
        .navbar{min-height:76px;display:flex;justify-content:space-between;align-items:center}
        .brand{color:#fff;display:flex;align-items:center;gap:12px}.brand-symbol{width:42px;height:42px;border:1px solid #b9c5d1;display:grid;place-items:center;font:800 21px Manrope,sans-serif}
        .brand-name{font:800 19px Manrope,sans-serif;letter-spacing:2px}.brand-name small{display:block;font:600 9px 'DM Sans',sans-serif;letter-spacing:3px}
        .nav{display:flex;gap:25px;color:#fff;font-size:11px;font-weight:800}.nav a:hover{color:#9bc8ea}
        .hero{min-height:570px;padding:145px 0 75px;display:flex;align-items:flex-end;color:white;background:linear-gradient(90deg,rgba(7,22,40,.92),rgba(7,22,40,.35)),url('{{ $service['image'] }}') center/cover}
        .eyebrow{font-size:10px;letter-spacing:2.5px;color:#acd1ed;font-weight:800;margin-bottom:18px}
        h1{max-width:850px;font:800 clamp(38px,5.8vw,64px)/1.12 Manrope,sans-serif;letter-spacing:-1.8px;margin-bottom:18px}
        .hero p{max-width:700px;color:#e0e8ef;line-height:1.85;font-size:15px}
        .actions{display:flex;gap:12px;flex-wrap:wrap;margin-top:27px}
        .btn{display:inline-block;padding:14px 20px;background:var(--blue);color:#fff;font-size:10px;font-weight:800;letter-spacing:1px}.outline{background:transparent;border:1px solid #fff}
        section{padding:78px 0}.label{color:var(--blue);font-size:10px;font-weight:800;letter-spacing:2.5px;margin-bottom:14px}
        h2{font:800 clamp(28px,4vw,40px)/1.2 Manrope,sans-serif;color:var(--navy);margin-bottom:15px}
        .intro{max-width:740px;color:#718092;font-size:14px;line-height:1.9}
        .details{display:grid;grid-template-columns:1fr 1fr;gap:45px;align-items:center;margin-top:35px}
        .details img{width:100%;height:390px;object-fit:cover}
        .list{display:grid;gap:12px;margin-top:22px}
        .list-item{padding:15px 17px;background:var(--light);border:1px solid #e3eaf0;color:var(--navy);font-size:13px;font-weight:600}
        .tools{display:flex;flex-wrap:wrap;gap:10px;margin-top:22px}
        .tool{background:#edf2f7;border:1px solid #dce5ee;padding:10px 13px;color:var(--navy);font-size:11px;font-weight:700}
        .gallery{display:grid;grid-template-columns:1.2fr .8fr;gap:18px;margin-top:30px}
        .gallery img{width:100%;height:270px;object-fit:cover}
        .notice{margin-top:22px;color:#8794a4;font-size:11px;line-height:1.7}
        .contact{background:var(--navy);color:white}.contact h2{color:white}.contact p{color:#c5d2df;line-height:1.8;margin-bottom:23px}
        footer{background:#0b1e32;color:#aab9c8;padding:25px 0;font-size:11px}.foot{display:flex;justify-content:space-between;gap:15px;flex-wrap:wrap}
        @media(max-width:750px){.nav{gap:12px;font-size:9px}.nav a:nth-child(2){display:none}.details,.gallery{grid-template-columns:1fr}.details img{height:280px}.gallery img{height:230px}section{padding:60px 0}}
    </style>
</head>
<body>
<header><div class="container navbar">
    <a href="{{ route('home') }}" class="brand"><span class="brand-symbol">M</span><span class="brand-name">MALKORP<small>CONSORCIO</small></span></a>
    <nav class="nav">
        <a href="{{ route('home') }}">INICIO</a>
        <a href="{{ route('division.show', ['division' => $divisionSlug]) }}">DIVISIÓN</a>
        <a href="{{ route('home') }}#proyectos">PROYECTOS</a>
        <a href="{{ route('home') }}#contacto">CONTACTO</a>
    </nav>
</div></header>
<main>
    <section class="hero">
        <div class="container">
            <div class="eyebrow">MALKORP / {{ strtoupper($division['name']) }} / {{ $service['category'] }}</div>
            <h1>{{ $service['title'] }}</h1>
            <p>{{ $service['description'] }}</p>
            <div class="actions">
                <a class="btn" href="#alcance">CONOCER EL SERVICIO ↓</a>
                <a class="btn outline" href="{{ route('home') }}#contacto">CONTACTAR</a>
            </div>
        </div>
    </section>

    <section id="alcance">
        <div class="container">
            <div class="label">ENFOQUE Y ALCANCE</div>
            <h2>Soluciones pensadas para cada proyecto.</h2>
            <p class="intro">{{ $service['short'] }} El alcance definitivo dependerá de los requerimientos, la información disponible y las condiciones particulares de cada proyecto.</p>
            <div class="details">
                <div>
                    <div class="label">ÁREAS DE TRABAJO</div>
                    <h2>¿Qué comprende?</h2>
                    <div class="list">
                        @foreach($service['scope'] as $item)
                            <div class="list-item">{{ $item }}</div>
                        @endforeach
                    </div>
                </div>
                <img src="{{ $service['image'] }}" alt="{{ $service['title'] }} - imagen referencial">
            </div>
        </div>
    </section>

    <section style="background:#F3F6F9">
        <div class="container">
            <div class="label">RECURSOS Y TECNOLOGÍA</div>
            <h2>Herramientas relacionadas</h2>
            <p class="intro">Ejemplos de herramientas que pueden formar parte de los flujos de trabajo de esta especialidad, según las características de cada encargo.</p>
            <div class="tools">
                @foreach($service['tools'] as $tool)
                    <span class="tool">{{ $tool }}</span>
                @endforeach
            </div>
            <div class="gallery">
                <img src="{{ $service['image'] }}" alt="Imagen referencial de {{ $service['title'] }}">
                <img src="{{ $division['image'] }}" alt="Imagen referencial de {{ $division['name'] }}">
            </div>
            <p class="notice">Contenido e imágenes de carácter demostrativo y referencial. No representan necesariamente trabajos ejecutados por CONSORCIO MALKORP ni acreditan experiencia contractual.</p>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="label" style="color:#9bc8ea">HABLEMOS DE TU PROYECTO</div>
            <h2>¿Necesitas más información?</h2>
            <p>Cuéntanos qué necesitas y conversemos sobre las características de tu proyecto.</p>
            <a class="btn" href="{{ route('home') }}#contacto">CONTACTAR A MALKORP →</a>
            <a class="btn outline" href="{{ route('division.show', ['division' => $divisionSlug]) }}" style="margin-left:8px">VOLVER A {{ strtoupper($division['name']) }}</a>
        </div>
    </section>
</main>
<footer><div class="container foot">
    <span>© {{ date('Y') }} CONSORCIO MALKORP. Todos los derechos reservados.</span>
    <a href="{{ route('home') }}">VOLVER AL PORTAL CORPORATIVO ↑</a>
</div></footer>
</body>
</html>
