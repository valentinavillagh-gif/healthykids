<!doctype html>
<html lang="es" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Documentos - Healthy Kids</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Fredoka+One&display=swap" rel="stylesheet">

  <style>
    .feature-icon { width:4rem; height:4rem; border-radius:.75rem; }
    .icon-square   { width:3rem; height:3rem; border-radius:.75rem; }
  </style>

  <style>
    :root {
      --hk-pink:   #FF6B8B;
      --hk-teal:   #4ECDC4;
      --hk-blue:   #4A6FA5;
      --hk-yellow: #FFD166;
      --hk-dark:   #2A2D43;
    }
    body { font-family:'Poppins',sans-serif; background:linear-gradient(135deg,#FFFBEB,#FEF3C7); }
    .navbar-hk { background:linear-gradient(135deg,var(--hk-pink),#FF8E9E) !important; }
    .navbar-hk .navbar-brand span { font-family:'Fredoka One',cursive; font-size:1.7rem; color:#fff; }
    .navbar-hk .nav-link { color:rgba(255,255,255,.9)!important; border-radius:50px; padding:.45rem 1rem!important; font-weight:500; transition:background .2s; }
    .navbar-hk .nav-link:hover, .navbar-hk .nav-link.active { background:rgba(255,255,255,.18); color:#fff!important; }
    .navbar-hk .navbar-toggler { border-color:rgba(255,255,255,.5); }
    .navbar-hk .navbar-toggler-icon { filter:invert(1); }
    .hero-docs { background:linear-gradient(135deg,rgba(78,205,196,.92),rgba(102,221,255,.92)); color:#fff; }
    .hero-docs h1 { font-family:'Fredoka One',cursive; font-size:2.6rem; }
    .card-doc { border:none; border-radius:15px; border-left:5px solid var(--hk-blue); background:linear-gradient(135deg,#F0F9FF,#E0F2FE); box-shadow:0 4px 15px rgba(0,0,0,.07); transition:transform .2s,box-shadow .2s; }
    .card-doc:hover { transform:translateY(-4px); box-shadow:0 10px 25px rgba(74,111,165,.18); }
    .card-doc .card-header-doc { background:linear-gradient(135deg,var(--hk-blue),#5B8AC4); color:#fff; border-radius:10px 10px 0 0; padding:1rem 1.2rem; }
    .card-doc .card-header-doc h3 { font-size:1.05rem; font-weight:600; margin:0; }
    .fi-blue  { background:linear-gradient(135deg,var(--hk-blue),#5B8AC4); }
    .fi-teal  { background:linear-gradient(135deg,var(--hk-teal),#3ab5ad); }
    .btn-download { border:none; border-radius:50px; font-weight:600; font-size:.9rem; transition:transform .15s,box-shadow .15s; }
    .btn-download:hover { transform:translateY(-2px); }
    .btn-dl-blue { background:linear-gradient(135deg,var(--hk-blue),#5B8AC4); color:#fff; }
    .btn-dl-blue:hover { box-shadow:0 6px 16px rgba(74,111,165,.35); color:#fff; }
    .btn-dl-teal { background:linear-gradient(135deg,var(--hk-teal),#3ab5ad); color:#fff; }
    .btn-dl-teal:hover { box-shadow:0 6px 16px rgba(78,205,196,.35); color:#fff; }
    .b-example-divider { height:3rem; background-color:rgba(0,0,0,.07); border:solid rgba(0,0,0,.1); border-width:1px 0; box-shadow:inset 0 .5em 1.5em rgba(0,0,0,.07),inset 0 .125em .5em rgba(0,0,0,.1); }

    .category-title { color:var(--hk-blue); font-weight:700; font-size:1.3rem; }
    .footer-hk { background:linear-gradient(135deg,var(--hk-dark),#1E2A3A); color:#fff; }
    .footer-hk h3 { font-family:'Fredoka One',cursive; font-size:1.8rem; }
    .footer-hk .nav-link { color:rgba(255,255,255,.75)!important; transition:color .2s; }
    .footer-hk .nav-link:hover { color:var(--hk-yellow)!important; }
    .footer-hk .text-muted { color:rgba(255,255,255,.45)!important; }
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
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><i class="fas fa-file-alt me-1"></i>Documentos</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-allergies me-1"></i>Alergias</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-truck me-1"></i>Proveedores</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('comedor.contactanos') }}"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="px-4 py-5 text-center hero-docs" style="margin-top:56px">
  <h1 class="display-5 fw-bold"><i class="fas fa-file-alt me-2"></i>Documentos y Formularios</h1>
  <div class="col-lg-7 mx-auto">
    <p class="lead mb-0 opacity-90">Accede a todos los documentos necesarios para la inscripción y gestión de estudiantes</p>
  </div>
</div>
<main class="flex-shrink-0">

  <section class="py-4 text-center container" style="margin-top:1.5rem">
    <div class="row py-lg-2">
      <div class="col-lg-8 col-md-10 mx-auto">

        <div class="d-flex align-items-center justify-content-center gap-3 mb-2">
          <div class="icon-square fi-blue d-inline-flex align-items-center justify-content-center text-white fs-4 flex-shrink-0">
            <i class="fas fa-file-signature"></i>
          </div>
          <h2 class="category-title mb-0">Formularios de Inscripción</h2>
        </div>
        <p class="lead text-muted">Formularios necesarios para el proceso de inscripción y seguimiento de los estudiantes.</p>
      </div>
    </div>
  </section>

  <div class="py-3">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm card-doc h-100">
            <div class="card-header-doc"><h3><i class="fas fa-user-plus me-2"></i>Inscripción Inicial</h3></div>
            <div class="card-body d-flex flex-column">
              <p class="card-text flex-grow-1">
                <strong>Descripción:</strong> Formulario para nuevos estudiantes.<br>
                <span class="text-muted small"><strong>Requisitos:</strong> Fotografía, acta de nacimiento</span>
              </p>
              <div class="d-flex justify-content-between align-items-center mt-3">
    
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Vista previa</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Info</button>
                </div>
                <a href="#" class="btn btn-sm btn-download btn-dl-blue"><i class="fas fa-download me-1"></i>Descargar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm card-doc h-100">
            <div class="card-header-doc"><h3><i class="fas fa-allergies me-2"></i>Registro de Alergias</h3></div>
            <div class="card-body d-flex flex-column">
              <p class="card-text flex-grow-1">
                <strong>Descripción:</strong> Formulario para alergias alimentarias.<br>
                <span class="text-muted small"><strong>Requisitos:</strong> Diagnóstico médico</span>
              </p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Vista previa</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Info</button>
                </div>
                <a href="#" class="btn btn-sm btn-download btn-dl-blue"><i class="fas fa-download me-1"></i>Descargar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm card-doc h-100">
            <div class="card-header-doc"><h3><i class="fas fa-utensils me-2"></i>Autorización de Menú</h3></div>
            <div class="card-body d-flex flex-column">
              <p class="card-text flex-grow-1">
                <strong>Descripción:</strong> Permiso para variaciones en menú.<br>
                <span class="text-muted small"><strong>Requisitos:</strong> Justificación médica o religiosa</span>
              </p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Vista previa</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Info</button>
                </div>
                <a href="#" class="btn btn-sm btn-download btn-dl-blue"><i class="fas fa-download me-1"></i>Descargar</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="b-example-divider my-4"></div>

  <section class="py-4 text-center container">
    <div class="row py-lg-2">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="d-flex align-items-center justify-content-center gap-3 mb-2">
          <div class="icon-square fi-teal d-inline-flex align-items-center justify-content-center text-white fs-4 flex-shrink-0">
            <i class="fas fa-file-medical"></i>
          </div>
          <h2 class="category-title mb-0">Documentos Médicos</h2>
        </div>
        <p class="lead text-muted">Documentos relacionados con la salud y condiciones médicas de los estudiantes.</p>
      </div>
    </div>
  </section>

  <div class="py-3">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm card-doc h-100" style="border-left-color:var(--hk-teal)">
            <div class="card-header-doc" style="background:linear-gradient(135deg,var(--hk-teal),#3ab5ad)">
              <h3><i class="fas fa-syringe me-2"></i>Vacunación</h3>
            </div>
            <div class="card-body d-flex flex-column">
              <p class="card-text flex-grow-1">
                <strong>Descripción:</strong> Registro de vacunación.<br>
                <span class="text-muted small"><strong>Requisitos:</strong> Cartilla de vacunación</span>
              </p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Vista previa</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Info</button>
                </div>
                <a href="#" class="btn btn-sm btn-download btn-dl-teal"><i class="fas fa-download me-1"></i>Descargar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm card-doc h-100" style="border-left-color:var(--hk-teal)">
            <div class="card-header-doc" style="background:linear-gradient(135deg,var(--hk-teal),#3ab5ad)">
              <h3><i class="fas fa-file-medical-alt me-2"></i>Historial Médico</h3>
            </div>
            <div class="card-body d-flex flex-column">
              <p class="card-text flex-grow-1">
                <strong>Descripción:</strong> Condiciones médicas relevantes.<br>
                <span class="text-muted small"><strong>Requisitos:</strong> Información completa</span>
              </p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Vista previa</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Info</button>
                </div>
                <a href="#" class="btn btn-sm btn-download btn-dl-teal"><i class="fas fa-download me-1"></i>Descargar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm card-doc h-100" style="border-left-color:var(--hk-teal)">
            <div class="card-header-doc" style="background:linear-gradient(135deg,var(--hk-teal),#3ab5ad)">
              <h3><i class="fas fa-capsules me-2"></i>Medicamentos</h3>
            </div>
            <div class="card-body d-flex flex-column">
              <p class="card-text flex-grow-1">
                <strong>Descripción:</strong> Permiso para administrar medicamentos.<br>
                <span class="text-muted small"><strong>Requisitos:</strong> Receta médica</span>
              </p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Vista previa</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Info</button>
                </div>
                <a href="#" class="btn btn-sm btn-download btn-dl-teal"><i class="fas fa-download me-1"></i>Descargar</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9">
        <h2 class="pb-2 border-bottom mb-4 category-title">
          <i class="fas fa-list-alt me-2"></i>Todos los Documentos — Acceso Rápido
        </h2>
        <div class="list-group" style="border-radius:15px;overflow:hidden">

          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <div class="fi-blue d-inline-flex align-items-center justify-content-center text-white fs-5 flex-shrink-0"
                 style="width:42px;height:42px;border-radius:.5rem">
              <i class="fas fa-user-plus"></i>
            </div>
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Inscripción Inicial</h6>
                <p class="mb-0 opacity-75 small">Formulario para nuevos estudiantes · Req: Fotografía, acta de nacimiento</p>
              </div>
              <small class="opacity-50 text-nowrap align-self-center">PDF</small>
            </div>
          </a>

          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">
            <div class="fi-blue d-inline-flex align-items-center justify-content-center text-white fs-5 flex-shrink-0"
                 style="width:42px;height:42px;border-radius:.5rem">
              <i class="fas fa-allergies"></i>
            </div>
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Registro de Alergias</h6>
                <p class="mb-0 opacity-75 small">Formulario para alergias alimentarias · Req: Diagnóstico médico</p>
              </div>
              <small class="opacity-50 text-nowrap align-self-center">PDF</small>
            </div>
          </a>

          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">
            <div class="fi-blue d-inline-flex align-items-center justify-content-center text-white fs-5 flex-shrink-0"
                 style="width:42px;height:42px;border-radius:.5rem">
              <i class="fas fa-utensils"></i>
            </div>
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Autorización de Menú</h6>
                <p class="mb-0 opacity-75 small">Permiso para variaciones en menú · Req: Justificación médica o religiosa</p>
              </div>
              <small class="opacity-50 text-nowrap align-self-center">PDF</small>
            </div>
          </a>

          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">
            <div class="fi-teal d-inline-flex align-items-center justify-content-center text-white fs-5 flex-shrink-0"
                 style="width:42px;height:42px;border-radius:.5rem">
              <i class="fas fa-syringe"></i>
            </div>
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Vacunación</h6>
                <p class="mb-0 opacity-75 small">Registro de vacunación · Req: Cartilla de vacunación</p>
              </div>
              <small class="opacity-50 text-nowrap align-self-center">PDF</small>
            </div>
          </a>

          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">
            <div class="fi-teal d-inline-flex align-items-center justify-content-center text-white fs-5 flex-shrink-0"
                 style="width:42px;height:42px;border-radius:.5rem">
              <i class="fas fa-file-medical-alt"></i>
            </div>
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Historial Médico</h6>
                <p class="mb-0 opacity-75 small">Condiciones médicas relevantes · Req: Información completa</p>
              </div>
              <small class="opacity-50 text-nowrap align-self-center">PDF</small>
            </div>
          </a>

          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">
            <div class="fi-teal d-inline-flex align-items-center justify-content-center text-white fs-5 flex-shrink-0"
                 style="width:42px;height:42px;border-radius:.5rem">
              <i class="fas fa-capsules"></i>
            </div>
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Medicamentos</h6>
                <p class="mb-0 opacity-75 small">Permiso para administrar medicamentos · Req: Receta médica</p>
              </div>
              <small class="opacity-50 text-nowrap align-self-center">PDF</small>
            </div>
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
      </ul>

    </div>
    <p class="col-12 mb-0 text-muted text-center mt-3 small">&copy; 2025 Healthy Kids — Todos los derechos reservados</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>