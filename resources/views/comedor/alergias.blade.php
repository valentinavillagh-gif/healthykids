<!doctype html>
<html lang="es" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alergias - Healthy Kids</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Fredoka+One&display=swap" rel="stylesheet">

  <style>
    .pricing-card-title { font-size: 3rem; font-weight: 700; }
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
      --hk-teal:   #4ECDC4;
      --hk-yellow: #FFD166;
      --hk-dark:   #2A2D43;
      --hk-red:    #EF4444;
    }
    body { font-family:'Poppins',sans-serif; background:linear-gradient(135deg,#FFFBEB,#FEF3C7); }


    .navbar-hk { background:linear-gradient(135deg,var(--hk-pink),#FF8E9E) !important; }
    .navbar-hk .navbar-brand span { font-family:'Fredoka One',cursive; font-size:1.7rem; color:#fff; }
    .navbar-hk .nav-link { color:rgba(255,255,255,.9)!important; border-radius:50px; padding:.45rem 1rem!important; font-weight:500; transition:background .2s; }
    .navbar-hk .nav-link:hover, .navbar-hk .nav-link.active { background:rgba(255,255,255,.18); color:#fff!important; }
    .navbar-hk .navbar-toggler { border-color:rgba(255,255,255,.5); }
    .navbar-hk .navbar-toggler-icon { filter:invert(1); }

  
    .hero-alergias { background:linear-gradient(135deg,rgba(255,107,139,.92),rgba(255,142,158,.92)); color:#fff; }
    .hero-alergias h1 { font-family:'Fredoka One',cursive; }
*/
    .card-alergia {
      border-left: 5px solid var(--hk-pink);
      background: linear-gradient(135deg,#FFF5F5,#FEE2E2);
      transition: transform .2s, box-shadow .2s;
    }
    .card-alergia:hover { transform:translateY(-4px); box-shadow:0 12px 28px rgba(255,107,139,.18)!important; }
    .card-alergia .card-header-alergia {
      background: linear-gradient(135deg,var(--hk-pink),#FF8E9E);
      color: #fff;
      border-radius: 10px 10px 0 0;
      padding: .9rem 1.2rem;
    }
    .card-alergia .card-header-alergia h4 { font-size:1.1rem; font-weight:600; margin:0; }

    .card-alergia .list-unstyled li {
      padding: .45rem 0;
      border-bottom: 1px dashed #FECACA;
      font-size: .93rem;
    }
    .card-alergia .list-unstyled li:last-child { border-bottom: none; }
    .badge-peligro { background:var(--hk-red)!important; }
    .badge-medio   { background:#F97316!important; }
    .badge-leve    { background:#EAB308!important; }

    .btn-hk-pink {
      background: linear-gradient(135deg,var(--hk-pink),#FF8E9E);
      color:#fff; border:none; border-radius:50px; font-weight:600;
      transition: transform .15s, box-shadow .15s;
    }
    .btn-hk-pink:hover { transform:translateY(-2px); box-shadow:0 8px 20px rgba(255,107,139,.4); color:#fff; }
    .protocolo-icon {
      background: linear-gradient(135deg,var(--hk-pink),#FF8E9E);
      width:3rem; height:3rem; border-radius:.75rem;
      display:inline-flex; align-items:center; justify-content:center;
      color:#fff; font-size:1.1rem; flex-shrink:0;
    }

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
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-file-alt me-1"></i>Documentos</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><i class="fas fa-allergies me-1"></i>Alergias</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-truck me-1"></i>Proveedores</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('comedor.contactanos') }}"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="px-4 py-5 text-center hero-alergias" style="margin-top:56px">
  <h1 class="display-5 fw-bold"><i class="fas fa-allergies me-2"></i>Información sobre Alergias</h1>
  <div class="col-lg-7 mx-auto">
    <p class="lead mb-4 opacity-90">Conoce las alergias más comunes y los protocolos de actuación para garantizar la seguridad de nuestros estudiantes</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <a href="#alergias" class="btn btn-light btn-lg px-4 fw-semibold">
        <i class="fas fa-list me-2"></i>Ver Alergias
      </a>
      <a href="#protocolo" class="btn btn-outline-light btn-lg px-4">
        <i class="fas fa-shield-alt me-2"></i>Ver Protocolos
      </a>
    </div>
  </div>
</div>

<main class="flex-shrink-0">

  <div class="container py-5" id="alergias">

    <h2 class="display-6 text-center mb-2" style="color:var(--hk-dark);font-family:'Fredoka One',cursive">
      <i class="fas fa-exclamation-triangle me-2" style="color:var(--hk-pink)"></i>Alergias Comunes
    </h2>
    <p class="text-center text-muted mb-5">En Healthy Kids estamos comprometidos con la seguridad de todos nuestros estudiantes.</p>


    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 mb-3 g-4">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm card-alergia">
          <div class="card-header-alergia">
            <h4><i class="fas fa-seedling me-2"></i>Frutos Secos
              <span class="badge badge-peligro rounded-pill ms-2 float-end" style="font-size:.6rem">ALTO</span>
            </h4>
          </div>
          <div class="card-body text-start">
            <div class="text-center mb-3">
              <i class="fas fa-seedling" style="font-size:2.8rem;color:var(--hk-pink);opacity:.7"></i>
            </div>
            <ul class="list-unstyled mt-3 mb-4">
              <li><strong>Evitar:</strong> Cacahuetes, almendras, nueces, avellanas</li>
              <li><strong>Síntomas:</strong> Urticaria, hinchazón, dificultad respiratoria</li>
              <li><strong>Protocolo:</strong> Exclusión total en menús y aulas</li>
            </ul>

            <button type="button" class="w-100 btn btn-lg btn-hk-pink">
              <i class="fas fa-file-medical-alt me-2"></i>Registrar
            </button>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm card-alergia">
          <div class="card-header-alergia">
            <h4><i class="fas fa-glass-whiskey me-2"></i>Lácteos
              <span class="badge badge-medio rounded-pill ms-2 float-end" style="font-size:.6rem">MEDIO</span>
            </h4>
          </div>
          <div class="card-body text-start">
            <div class="text-center mb-3">
              <i class="fas fa-glass-whiskey" style="font-size:2.8rem;color:var(--hk-pink);opacity:.7"></i>
            </div>
            <ul class="list-unstyled mt-3 mb-4">
              <li><strong>Evitar:</strong> Leche, queso, yogur, mantequilla</li>
              <li><strong>Síntomas:</strong> Dolor abdominal, erupciones cutáneas, vómitos</li>
              <li><strong>Protocolo:</strong> Alternativas de soja y avena disponibles</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-hk-pink">
              <i class="fas fa-file-medical-alt me-2"></i>Registrar
            </button>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm card-alergia">
          <div class="card-header-alergia">
            <h4><i class="fas fa-egg me-2"></i>Huevos
              <span class="badge badge-medio rounded-pill ms-2 float-end" style="font-size:.6rem">MEDIO</span>
            </h4>
          </div>
          <div class="card-body text-start">
            <div class="text-center mb-3">
              <i class="fas fa-egg" style="font-size:2.8rem;color:var(--hk-pink);opacity:.7"></i>
            </div>
            <ul class="list-unstyled mt-3 mb-4">
              <li><strong>Evitar:</strong> Huevos, mayonesa, productos de panadería</li>
              <li><strong>Síntomas:</strong> Eczema, problemas digestivos, anafilaxia</li>
              <li><strong>Protocolo:</strong> Sustitutos en recetas y menús especiales</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-hk-pink">
              <i class="fas fa-file-medical-alt me-2"></i>Registrar
            </button>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm card-alergia">
          <div class="card-header-alergia">
            <h4><i class="fas fa-fish me-2"></i>Mariscos
              <span class="badge badge-peligro rounded-pill ms-2 float-end" style="font-size:.6rem">ALTO</span>
            </h4>
          </div>
          <div class="card-body text-start">
            <div class="text-center mb-3">
              <i class="fas fa-fish" style="font-size:2.8rem;color:var(--hk-pink);opacity:.7"></i>
            </div>
            <ul class="list-unstyled mt-3 mb-4">
              <li><strong>Evitar:</strong> Camarones, langosta, salmón, atún</li>
              <li><strong>Síntomas:</strong> Hinchazón facial, mareos, dificultad respiratoria</li>
              <li><strong>Protocolo:</strong> Separación completa en cocina y comedor</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-hk-pink">
              <i class="fas fa-file-medical-alt me-2"></i>Registrar
            </button>
          </div>
        </div>
      </div>

    </div>
    <h2 class="display-6 text-center mb-4" style="color:var(--hk-dark);font-family:'Fredoka One',cursive">
      Comparar Alergias
    </h2>
    <div class="table-responsive">
      <table class="table text-center">
        <thead class="table-light">
          <tr>
            <th style="width:28%"></th>
            <th style="width:18%"><i class="fas fa-seedling me-1" style="color:var(--hk-pink)"></i>Frutos Secos</th>
            <th style="width:18%"><i class="fas fa-glass-whiskey me-1" style="color:var(--hk-pink)"></i>Lácteos</th>
            <th style="width:18%"><i class="fas fa-egg me-1" style="color:var(--hk-pink)"></i>Huevos</th>
            <th style="width:18%"><i class="fas fa-fish me-1" style="color:var(--hk-pink)"></i>Mariscos</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Menú especial</th>
            <td><i class="fas fa-check text-success"></i></td>
            <td><i class="fas fa-check text-success"></i></td>
            <td><i class="fas fa-check text-success"></i></td>
            <td><i class="fas fa-check text-success"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Exclusión total del aula</th>
            <td><i class="fas fa-check text-success"></i></td>
            <td></td>
            <td></td>
            <td><i class="fas fa-check text-success"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Requiere diagnóstico médico</th>
            <td><i class="fas fa-check text-success"></i></td>
            <td><i class="fas fa-check text-success"></i></td>
            <td><i class="fas fa-check text-success"></i></td>
            <td><i class="fas fa-check text-success"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Riesgo de anafilaxia</th>
            <td><i class="fas fa-check text-success"></i></td>
            <td></td>
            <td><i class="fas fa-check text-success"></i></td>
            <td><i class="fas fa-check text-success"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Alternativa disponible</th>
            <td></td>
            <td><i class="fas fa-check text-success"></i></td>
            <td><i class="fas fa-check text-success"></i></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
  <div class="b-example-divider"></div>

  <div class="container px-4 py-5" id="protocolo">
   
    <h2 class="pb-2 border-bottom mb-4" style="color:var(--hk-dark);font-family:'Fredoka One',cursive">
      <i class="fas fa-shield-alt me-2" style="color:var(--hk-pink)"></i>Protocolos de Actuación
    </h2>
    <div class="row g-4 py-3 row-cols-1 row-cols-lg-3">

    
      <div class="col d-flex align-items-start">
        <div class="protocolo-icon me-3">
          <i class="fas fa-bell"></i>
        </div>
        <div>
          <h2 style="font-size:1.2rem;font-weight:700;color:var(--hk-dark)">Detección Inmediata</h2>
          <p class="text-muted small">Al detectar síntomas de reacción alérgica, el personal notifica de inmediato al coordinador de salud y se aísla al estudiante del alérgeno.</p>
          <a href="#" class="btn btn-hk-pink btn-sm">Más información</a>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div class="protocolo-icon me-3">
          <i class="fas fa-syringe"></i>
        </div>
        <div>
          <h2 style="font-size:1.2rem;font-weight:700;color:var(--hk-dark)">Administración de Epinefrina</h2>
          <p class="text-muted small">En casos de anafilaxia el personal autorizado aplica epinefrina y activa los servicios de emergencia de manera inmediata.</p>
          <a href="#" class="btn btn-hk-pink btn-sm">Más información</a>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div class="protocolo-icon me-3">
          <i class="fas fa-phone-alt"></i>
        </div>
        <div>
          <h2 style="font-size:1.2rem;font-weight:700;color:var(--hk-dark)">Contacto con Familia</h2>
          <p class="text-muted small">Se notifica de inmediato a los padres o tutores registrados y se documenta el incidente en el historial médico del estudiante.</p>
          <a href="#" class="btn btn-hk-pink btn-sm">Más información</a>
        </div>
      </div>

    </div>
  </div>

  <div class="container py-4 pb-5">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <h2 class="pb-2 border-bottom mb-4" style="color:var(--hk-dark);font-family:'Fredoka One',cursive">
          <i class="fas fa-list-ul me-2" style="color:var(--hk-pink)"></i>Registro Rápido de Alergias
        </h2>

   
        <div class="list-group" style="border-radius:15px;overflow:hidden">

          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <div class="protocolo-icon" style="width:42px;height:42px;border-radius:.5rem">
              <i class="fas fa-seedling"></i>
            </div>
           
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Frutos Secos</h6>
                <p class="mb-0 opacity-75 small">Cacahuetes, almendras, nueces, avellanas · Riesgo alto</p>
              </div>
              <small class="opacity-50 text-nowrap align-self-center">ALTO</small>
            </div>
          </a>

          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">
            <div class="protocolo-icon" style="width:42px;height:42px;border-radius:.5rem">
              <i class="fas fa-glass-whiskey"></i>
            </div>
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Lácteos</h6>
                <p class="mb-0 opacity-75 small">Leche, queso, yogur, mantequilla · Riesgo medio</p>
              </div>
              <small class="opacity-50 text-nowrap align-self-center">MEDIO</small>
            </div>
          </a>

          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">
            <div class="protocolo-icon" style="width:42px;height:42px;border-radius:.5rem">
              <i class="fas fa-egg"></i>
            </div>
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Huevos</h6>
                <p class="mb-0 opacity-75 small">Huevos, mayonesa, productos de panadería · Riesgo medio</p>
              </div>
              <small class="opacity-50 text-nowrap align-self-center">MEDIO</small>
            </div>
          </a>

          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">
            <div class="protocolo-icon" style="width:42px;height:42px;border-radius:.5rem">
              <i class="fas fa-fish"></i>
            </div>
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Mariscos y Pescado</h6>
                <p class="mb-0 opacity-75 small">Camarones, langosta, salmón, atún · Riesgo alto</p>
              </div>
              <small class="opacity-50 text-nowrap align-self-center">ALTO</small>
            </div>
          </a>

        </div>

        <div class="text-center mt-4">
          <a href="#" class="btn btn-lg btn-hk-pink px-5">
            <i class="fas fa-file-medical-alt me-2"></i>Registrar Nueva Alergia
          </a>
        </div>

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
    <p class="col-12 mb-0 text-muted text-center mt-3 small">&copy; 2026 Healthy Kids — Todos los derechos reservados</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>