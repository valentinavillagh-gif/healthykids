<!doctype html>
<html lang="es" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proveedores - Healthy Kids</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Fredoka+One&display=swap" rel="stylesheet">

  <style>
    .product-device {
      position: absolute;
      right: 10%;
      bottom: -30%;
      width: 300px;
      height: 540px;
      background-color: #333;
      border-radius: 21px;
      transform: rotate(30deg);
    }
    .product-device::before {
      position: absolute;
      top: 10%;
      right: 10%;
      bottom: 10%;
      left: 10%;
      content: "";
      background-color: rgba(255,255,255,.1);
      border-radius: 5px;
    }
    .product-device-2 {
      top: -25%;
      right: auto;
      bottom: 0;
      left: 5%;
      background-color: #e5e5e5;
    }
  </style>
  <style>
    .feature-icon { width: 4rem; height: 4rem; border-radius: .75rem; }
    .icon-square   { width: 3rem; height: 3rem; border-radius: .75rem; }
    .b-example-divider {
      height: 3rem;
      background-color: rgba(0,0,0,.07);
      border: solid rgba(0,0,0,.1);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0,0,0,.07), inset 0 .125em .5em rgba(0,0,0,.1);
    }
  </style>

  <style>
    :root {
      --hk-pink:   #FF6B8B;
      --hk-orange: #FF9E44;
      --hk-yellow: #FFD166;
      --hk-dark:   #2A2D43;
    }
    body { font-family: 'Poppins', sans-serif; background: linear-gradient(135deg,#FFFBEB,#FEF3C7); }

    .navbar-hk { background: linear-gradient(135deg,var(--hk-pink),#FF8E9E) !important; }
    .navbar-hk .navbar-brand span { font-family:'Fredoka One',cursive; font-size:1.7rem; color:#fff; }
    .navbar-hk .nav-link { color:rgba(255,255,255,.9)!important; border-radius:50px; padding:.45rem 1rem!important; font-weight:500; transition:background .2s; }
    .navbar-hk .nav-link:hover, .navbar-hk .nav-link.active { background:rgba(255,255,255,.18); color:#fff!important; }
    .navbar-hk .navbar-toggler { border-color:rgba(255,255,255,.5); }
    .navbar-hk .navbar-toggler-icon { filter:invert(1); }
    .hero-prov { background: linear-gradient(135deg,rgba(255,158,68,.92),rgba(255,190,118,.92)); color:#fff; }
    .hero-prov h1 { font-family:'Fredoka One',cursive; }
  .bloque-naranja { background: linear-gradient(135deg,var(--hk-orange),#FFBE76) !important; color:#fff !important; }
    .bloque-claro   { background: linear-gradient(135deg,#FFF7ED,#FFEDD5) !important; }
    .card-prov {
      border: none;
      border-left: 5px solid var(--hk-orange);
      background: linear-gradient(135deg,#FFF7ED,#FFEDD5);
      transition: transform .2s, box-shadow .2s;
    }
    .card-prov:hover { transform: translateY(-4px); box-shadow: 0 12px 28px rgba(255,158,68,.2) !important; }
    .card-prov .card-header-prov {
      background: linear-gradient(135deg,var(--hk-orange),#FFBE76);
      color: #fff;
      border-radius: 10px 10px 0 0;
      padding: .9rem 1.2rem;
    }
    .card-prov .card-header-prov h4 { font-size:1.05rem; font-weight:600; margin:0; }

    
    .fi-orange {
      background: linear-gradient(135deg,var(--hk-orange),#FFBE76);
      color:#fff;
    }


    .btn-hk-orange {
      background: linear-gradient(135deg,var(--hk-orange),#FFBE76);
      color:#fff; border:none; border-radius:50px; font-weight:600;
      transition: transform .15s, box-shadow .15s;
    }
    .btn-hk-orange:hover { transform:translateY(-2px); box-shadow:0 8px 20px rgba(255,158,68,.4); color:#fff; }
    .btn-outline-hk {
      border: 2px solid #fff; color:#fff; border-radius:50px; font-weight:600;
      background: transparent; transition: background .2s, color .2s;
    }
    .btn-outline-hk:hover { background:#fff; color:var(--hk-orange); }
    .footer-hk { background: linear-gradient(135deg,var(--hk-dark),#1E2A3A); color:#fff; }
    .footer-hk h3 { font-family:'Fredoka One',cursive; font-size:1.8rem; }
    .footer-hk .nav-link { color:rgba(255,255,255,.75)!important; transition:color .2s; }
    .footer-hk .nav-link:hover { color:var(--hk-yellow)!important; }
    .footer-hk .text-muted { color:rgba(255,255,255,.45)!important; }
    .panel-info {
      border-radius: 21px 21px 0 0;
      height: 220px;
      display:flex; align-items:center; justify-content:center;
      font-size:4rem; opacity:.35;
    }
  </style>
</head>


<body class="d-flex flex-column h-100">

<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-hk shadow-sm">
    <div class="container-xl">
      <a class="navbar-brand d-flex align-items-center gap-2" href="#">
        <i class="fas fa-apple-alt fs-3 text-warning"></i>
        <span>Healthy Kids</span>
      </a>
      <button class="navbar-toggler" type="button"
              data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
              aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-1">
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-home me-1"></i>Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-utensils me-1"></i>Menú</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user-plus me-1"></i>Registro</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-file-alt me-1"></i>Documentos</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-allergies me-1"></i>Alergias</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><i class="fas fa-truck me-1"></i>Proveedores</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>


<div class="px-4 py-5 text-center hero-prov" style="margin-top:56px">
  <h1 class="display-5 fw-bold"><i class="fas fa-truck me-2"></i>Proveedores</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4 opacity-90">Empresas certificadas que nos proveen alimentos frescos con los más altos estándares de calidad</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <a href="#proveedores" class="btn btn-light btn-lg px-4 fw-semibold gap-3">
        <i class="fas fa-list me-2"></i>Ver Proveedores
      </a>
      <a href="#contacto" class="btn-outline-hk btn btn-lg px-4">
        <i class="fas fa-envelope me-2"></i>Contactar
      </a>
    </div>
  </div>
</div>

<main class="flex-shrink-0">

  <div id="proveedores">

   
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">

      <div class="bloque-naranja me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5 fw-bold" style="font-family:'Fredoka One',cursive">
            <i class="fas fa-carrot me-2"></i>Frescos del Valle
          </h2>
          <p class="lead">Frutas y verduras frescas orgánicas con certificación USDA Organic. Proveedor principal desde 2018.</p>
          <a href="#" class="btn btn-light px-4 fw-semibold mt-2">
            <i class="fas fa-info-circle me-2"></i>Ver información
          </a>
        </div>
        <div class="bg-light shadow-sm mx-auto panel-info" style="width:80%;border-radius:21px 21px 0 0">
          <i class="fas fa-carrot" style="color:var(--hk-orange)"></i>
        </div>
      </div>
      <div class="bloque-claro me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5 fw-bold" style="font-family:'Fredoka One',cursive;color:var(--hk-dark)">
            <i class="fas fa-drumstick-bite me-2" style="color:var(--hk-orange)"></i>Carnes Premium
          </h2>
          <p class="lead text-muted">Carnes y aves de primera calidad con certificación HACCP. Control riguroso de cadena de frío.</p>
          <a href="#" class="btn btn-hk-orange px-4 mt-2">
            <i class="fas fa-info-circle me-2"></i>Ver información
          </a>
        </div>
        <div class="shadow-sm mx-auto panel-info" style="width:80%;border-radius:21px 21px 0 0;background:linear-gradient(135deg,#FFEDD5,#FED7AA)">
          <i class="fas fa-drumstick-bite" style="color:var(--hk-orange)"></i>
        </div>
      </div>

    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">

      <div class="bloque-claro me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5 fw-bold" style="font-family:'Fredoka One',cursive;color:var(--hk-dark)">
            <i class="fas fa-fish me-2" style="color:var(--hk-orange)"></i>Mariscos del Pacífico
          </h2>
          <p class="lead text-muted">Pescados y mariscos con certificación MSC. Pesca sostenible y trazabilidad completa del producto.</p>
          <a href="#" class="btn btn-hk-orange px-4 mt-2">
            <i class="fas fa-info-circle me-2"></i>Ver información
          </a>
        </div>
        <div class="shadow-sm mx-auto panel-info" style="width:80%;border-radius:21px 21px 0 0;background:linear-gradient(135deg,#E0F2FE,#BAE6FD)">
          <i class="fas fa-fish" style="color:#0ea5e9"></i>
        </div>
      </div>

      <div class="bloque-naranja me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5 fw-bold" style="font-family:'Fredoka One',cursive">
            <i class="fas fa-bread-slice me-2"></i>Granos y Cereales S.A.
          </h2>
          <p class="lead">Cereales, legumbres y productos integrales con certificación NON-GMO. Entrega semanal garantizada.</p>
          <a href="#" class="btn btn-light px-4 fw-semibold mt-2">
            <i class="fas fa-info-circle me-2"></i>Ver información
          </a>
        </div>
        <div class="bg-light shadow-sm mx-auto panel-info" style="width:80%;border-radius:21px 21px 0 0">
          <i class="fas fa-bread-slice" style="color:var(--hk-orange)"></i>
        </div>
      </div>

    </div>

  </div>


  <div class="b-example-divider"></div>

  <div class="album py-5" style="background:rgba(255,255,255,.6)">
    <div class="container">

      <h2 class="pb-2 border-bottom mb-4" style="color:var(--hk-dark);font-family:'Fredoka One',cursive">
        <i class="fas fa-id-card me-2" style="color:var(--hk-orange)"></i>Ficha de Proveedores
      </h2>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm card-prov">
            <div class="card-header-prov"><h4><i class="fas fa-carrot me-2"></i>Frescos del Valle</h4></div>
            <div class="card-body">
              <p class="card-text">
                <strong>Productos:</strong> Frutas y verduras orgánicas<br>
                <strong>Certificaciones:</strong> USDA Organic, ISO 22000<br>
                <span class="text-muted small"><strong>Entrega:</strong> Lunes y jueves · <strong>Desde:</strong> 2018</span>
              </p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver ficha</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Contactar</button>
                </div>
                <small class="text-muted">Activo</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm card-prov">
            <div class="card-header-prov"><h4><i class="fas fa-drumstick-bite me-2"></i>Carnes Premium</h4></div>
            <div class="card-body">
              <p class="card-text">
                <strong>Productos:</strong> Carnes y aves de primera calidad<br>
                <strong>Certificaciones:</strong> HACCP, ISO 9001<br>
                <span class="text-muted small"><strong>Entrega:</strong> Martes y viernes · <strong>Desde:</strong> 2019</span>
              </p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver ficha</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Contactar</button>
                </div>
                <small class="text-muted">Activo</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm card-prov">
            <div class="card-header-prov"><h4><i class="fas fa-fish me-2"></i>Mariscos del Pacífico</h4></div>
            <div class="card-body">
              <p class="card-text">
                <strong>Productos:</strong> Pescados y mariscos frescos<br>
                <strong>Certificaciones:</strong> MSC, BRC<br>
                <span class="text-muted small"><strong>Entrega:</strong> Miércoles · <strong>Desde:</strong> 2020</span>
              </p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver ficha</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Contactar</button>
                </div>
                <small class="text-muted">Activo</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container px-4 py-5" id="contacto">
    <h2 class="pb-2 border-bottom mb-0" style="color:var(--hk-dark);font-family:'Fredoka One',cursive">
      <i class="fas fa-certificate me-2" style="color:var(--hk-orange)"></i>Estándares y Certificaciones
    </h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">

        <div class="feature-icon fi-orange d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
          <i class="fas fa-leaf fs-4"></i>
        </div>
        <h2 style="font-size:1.2rem;font-weight:700;color:var(--hk-dark)">USDA Organic</h2>
        <p class="text-muted small">Garantiza que los productos han sido cultivados sin pesticidas sintéticos ni fertilizantes químicos, asegurando alimentos naturales para los estudiantes.</p>
        <a href="#" class="icon-link d-inline-flex align-items-center" style="color:var(--hk-orange)">
          Más información <i class="fas fa-chevron-right ms-1 small"></i>
        </a>
      </div>

      <div class="feature col">
        <div class="feature-icon fi-orange d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
          <i class="fas fa-shield-alt fs-4"></i>
        </div>
        <h2 style="font-size:1.2rem;font-weight:700;color:var(--hk-dark)">HACCP</h2>
        <p class="text-muted small">Análisis de Peligros y Puntos Críticos de Control. Sistema preventivo que identifica y controla riesgos de contaminación en toda la cadena alimentaria.</p>
        <a href="#" class="icon-link d-inline-flex align-items-center" style="color:var(--hk-orange)">
          Más información <i class="fas fa-chevron-right ms-1 small"></i>
        </a>
      </div>

      <div class="feature col">
        <div class="feature-icon fi-orange d-inline-flex align-items-center justify-content-center text-white fs-2 mb-3">
          <i class="fas fa-water fs-4"></i>
        </div>
        <h2 style="font-size:1.2rem;font-weight:700;color:var(--hk-dark)">MSC</h2>
        <p class="text-muted small">Marine Stewardship Council. Certifica que los productos del mar provienen de pesquerías sostenibles que protegen los ecosistemas marinos.</p>
        <a href="#" class="icon-link d-inline-flex align-items-center" style="color:var(--hk-orange)">
          Más información <i class="fas fa-chevron-right ms-1 small"></i>
        </a>
      </div>

    </div>
  </div>

</main>

<footer class="footer-hk mt-auto py-4">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-2 border-top border-secondary">
      <div class="col-12 col-md-4 mb-3 mb-md-0">
        <a href="#" class="d-flex align-items-center gap-2 text-decoration-none">
          <i class="fas fa-apple-alt fs-4 text-warning"></i>
          <h3 class="mb-0 fs-4">Healthy Kids</h3>
        </a>
        <p class="text-muted small mb-0 mt-1">Programa de Alimentación Escolar</p>
      </div>
      <div class="col-12 col-md-4 mb-3 mb-md-0 text-center">
        <a href="#" class="text-white me-3 fs-5"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-white me-3 fs-5"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-white fs-5"><i class="fab fa-whatsapp"></i></a>
      </div>
      <ul class="nav col-12 col-md-4 justify-content-md-end justify-content-center">
        <li class="nav-item"><a href="#" class="nav-link px-2"><i class="fas fa-home me-1"></i>Inicio</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2"><i class="fas fa-utensils me-1"></i>Menú</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2"><i class="fas fa-user-plus me-1"></i>Registro</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2"><i class="fas fa-file-alt me-1"></i>Docs</a></li>
        <li class="nav-item"><a href="{{ route('comedor.contactanos') }}" class="nav-link px-2"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
      </ul>

    </div>
    <div class="row mt-4 pt-3 border-top border-secondary">
      <div class="col-6 col-md-3 mb-3">
        <h5 class="small text-white-50 text-uppercase fw-bold">Proveedores</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Frescos del Valle</a></li>
          <li><a class="link-secondary" href="#">Carnes Premium</a></li>
          <li><a class="link-secondary" href="#">Mariscos del Pacífico</a></li>
          <li><a class="link-secondary" href="#">Granos y Cereales S.A.</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3 mb-3">
        <h5 class="small text-white-50 text-uppercase fw-bold">Certificaciones</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">USDA Organic</a></li>
          <li><a class="link-secondary" href="#">HACCP</a></li>
          <li><a class="link-secondary" href="#">MSC</a></li>
          <li><a class="link-secondary" href="#">ISO 22000</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3 mb-3">
        <h5 class="small text-white-50 text-uppercase fw-bold">Programa</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Inicio</a></li>
          <li><a class="link-secondary" href="#">Menú</a></li>
          <li><a class="link-secondary" href="#">Registro</a></li>
          <li><a class="link-secondary" href="#">Documentos</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3 mb-3">
        <h5 class="small text-white-50 text-uppercase fw-bold">Contacto</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Alergias</a></li>
          <li><a class="link-secondary" href="#">Proveedores</a></li>
          <li><a class="link-secondary" href="#">Soporte</a></li>
          <li><a class="link-secondary" href="#">Aviso de privacidad</a></li>
        </ul>
      </div>
    </div>

    <p class="col-12 mb-0 text-muted text-center mt-2 small">&copy; 2025 Healthy Kids — Todos los derechos reservados</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>