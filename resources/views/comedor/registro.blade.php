<!doctype html>
<html lang="es" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro - Healthy Kids</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Fredoka+One&display=swap" rel="stylesheet">


  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

  </style>

  <style>
    html, body { height: 100%; }

    .form-signin {
      max-width: 680px;   
      padding: 15px;
    }
    .form-signin .form-floating:focus-within {
      z-index: 2;
    }
  </style>

  <style>
    :root {
      --hk-pink:   #FF6B8B;
      --hk-teal:   #4ECDC4;
      --hk-yellow: #FFD166;
      --hk-dark:   #2A2D43;
    }

    .navbar-hk {
      background: linear-gradient(135deg, var(--hk-pink), #FF8E9E) !important;
    }
    .navbar-hk .navbar-brand span {
      font-family: 'Fredoka One', cursive;
      font-size: 1.7rem;
      color: #fff;
    }
    .navbar-hk .nav-link {
      color: rgba(255,255,255,0.9) !important;
      border-radius: 50px;
      padding: .45rem 1rem !important;
      font-weight: 500;
      transition: background .2s;
    }
    .navbar-hk .nav-link:hover,
    .navbar-hk .nav-link.active {
      background: rgba(255,255,255,0.18);
      color: #fff !important;
    }
    .navbar-hk .navbar-toggler { border-color: rgba(255,255,255,.5); }
    .navbar-hk .navbar-toggler-icon { filter: invert(1); }
    .hero-hk {
      background: linear-gradient(135deg, rgba(167,139,250,0.92), rgba(255,107,139,0.92));
      color: #fff;
    }
    .hero-hk h1 {
      font-family: 'Fredoka One', cursive;
      font-size: 2.6rem;
    }
    .card-registro {
      border: none;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.09);
    }
    .card-registro .card-header {
      background: linear-gradient(135deg, var(--hk-pink), #FF8E9E);
      border-radius: 20px 20px 0 0 !important;
      color: #fff;
    }
    .card-registro .card-header h2 {
      font-family: 'Fredoka One', cursive;
      font-size: 1.7rem;
      margin: 0;
    }
    .form-control:focus, .form-select:focus {
      border-color: var(--hk-pink);
      box-shadow: 0 0 0 3px rgba(255,107,139,0.15);
    }
    .input-group-text {
      background: #fff;
      border-color: #dee2e6;
      color: var(--hk-pink);
    }
    .btn-hk {
      background: linear-gradient(135deg, var(--hk-pink), #FF8E9E);
      color: #fff;
      border: none;
      border-radius: 50px;
      font-weight: 600;
      transition: transform .15s, box-shadow .15s;
    }
    .btn-hk:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(255,107,139,.4);
      color: #fff;
    }
    .badge-req { background: var(--hk-pink) !important; font-size: .65rem; }

    .progress { height: 8px; border-radius: 10px; }
    .progress-bar-hk {
      background: linear-gradient(90deg, var(--hk-pink), var(--hk-yellow));
      border-radius: 10px;
      transition: width .4s ease;
    }
    
    .footer-hk {
      background: linear-gradient(135deg, var(--hk-dark), #1E2A3A);
      color: #fff;
    }
    .footer-hk h3 { font-family: 'Fredoka One', cursive; font-size: 1.8rem; }
    .footer-hk .nav-link { color: rgba(255,255,255,.75) !important; transition: color .2s; }
    .footer-hk .nav-link:hover { color: var(--hk-yellow) !important; }
    .footer-hk .text-muted { color: rgba(255,255,255,.45) !important; }

    .modal-header-hk {
      background: linear-gradient(135deg, var(--hk-teal), #3ab5ad);
      color: #fff;
      border-radius: 12px 12px 0 0;
    }

    .alert-hk {
      background: #FFF8E7;
      border-left: 4px solid var(--hk-yellow);
      border-radius: 10px;
      color: var(--hk-dark);
    }


    main > .container-xl { padding-top: 30px; }
  </style>
</head>
<body class="d-flex flex-column h-100" style="background:linear-gradient(135deg,#FFFBEB,#FEF3C7)">


<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-hk shadow-sm">
    <div class="container-xl">
      <a class="navbar-brand d-flex align-items-center gap-2" href="#">
        <i class="fas fa-apple-alt fs-3 text-warning"></i>
        <span>Healthy Kids</span>
      </a>
    
      <button class="navbar-toggler" type="button"
              data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
              aria-controls="navbarCollapse" aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-1">
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-home me-1"></i>Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-utensils me-1"></i>Menú</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><i class="fas fa-user-plus me-1"></i>Registro</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-file-alt me-1"></i>Documentos</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-allergies me-1"></i>Alergias</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-truck me-1"></i>Proveedores</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('comedor.contactanos') }}"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="px-4 py-5 text-center hero-hk" style="margin-top:56px">
  <h1 class="display-5 fw-bold">
    <i class="fas fa-user-plus me-2"></i>Registro en el Programa
  </h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-0 opacity-90">Complete el formulario para registrar al estudiante</p>
  </div>
</div>

<main class="flex-shrink-0 py-5">
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9 col-xl-8">

        <div class="alert alert-hk d-flex align-items-center gap-3 mb-4" role="alert">
          <i class="fas fa-info-circle fs-5 text-warning"></i>
          <span>Los campos con <span class="badge badge-req rounded-pill">*</span> son <strong>obligatorios</strong>.</span>
        </div>

        <div class="mb-3">
          <div class="d-flex justify-content-between mb-1">
            <small class="text-muted">Progreso del formulario</small>
            <small class="fw-bold" id="progress-label">0%</small>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-hk" id="progress-bar"
                 role="progressbar" style="width:0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="card card-registro">
          <div class="card-header py-3 px-4">
            <h2><i class="fas fa-clipboard-list me-2"></i>Formulario de Registro</h2>
          </div>
          <div class="card-body p-4">
            <form id="registration-form" class="needs-validation" novalidate>
              <div class="row g-3 mb-3">
                <div class="col-12 col-md-7">
                  <label class="form-label fw-semibold" for="student-name">
                    Nombre del Estudiante <span class="badge badge-req rounded-pill ms-1">*</span>
                  </label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-child"></i></span>
                  
                    <div class="form-floating flex-grow-1">
                      <input type="text" class="form-control" id="student-name"
                             placeholder="Nombre completo" required>
                      <label for="student-name">Nombre completo</label>
                    </div>
                    <div class="invalid-feedback">Por favor ingresa el nombre.</div>
                  </div>
                </div>
                <div class="col-12 col-md-5">
                  <label class="form-label fw-semibold" for="student-age">
                    Edad <span class="badge badge-req rounded-pill ms-1">*</span>
                  </label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                    <div class="form-floating flex-grow-1">
                      <input type="number" class="form-control" id="student-age"
                             min="3" max="18" placeholder="8" required>
                      <label for="student-age">Ej: 8</label>
                    </div>
                    <div class="invalid-feedback">Edad entre 3 y 18.</div>
                  </div>
                </div>
              </div>

              <div class="row g-3 mb-3">
                <div class="col-12 col-md-6">
                  <label class="form-label fw-semibold" for="grade">
                    Grado Escolar <span class="badge badge-req rounded-pill ms-1">*</span>
                  </label>
                  <select class="form-select" id="grade" required>
                                    <option value="">— Seleccione —</option>
                                    <option value="1">2do Grado</option>
                                    <option value="2">3er Grado</option>
                                    <option value="3">4to Grado</option>
                                    <option value="4">5to Grado</option>
                                    <option value="5">6to Grado</option>
                                    <option value="6">7mo Grado</option>
                                    <option value="7">8vo Grado</option>
                                    <option value="8">9no Grado</option>
                                    <option value="9">10mo Grado</option>
                                    <option value="10">11vo Grado</option>
                                </select>
                  <div class="invalid-feedback">Selecciona el grado.</div>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label fw-semibold" for="section">Sección</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-door-open"></i></span>
                    <div class="form-floating flex-grow-1">
                      <input type="text" class="form-control" id="section" placeholder="A">
                      <label for="section">Ej: A</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row g-3 mb-4">
                <div class="col-12 col-md-7">
                  <label class="form-label fw-semibold" for="parent-name">
                    Nombre del Padre/Tutor <span class="badge badge-req rounded-pill ms-1">*</span>
                  </label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <div class="form-floating flex-grow-1">
                      <input type="text" class="form-control" id="parent-name"
                             placeholder="Nombre completo" required>
                      <label for="parent-name">Nombre completo</label>
                    </div>
                    <div class="invalid-feedback">Ingresa el nombre del tutor.</div>
                  </div>
                </div>
                <div class="col-12 col-md-5">
                  <label class="form-label fw-semibold" for="phone">
                    Teléfono <span class="badge badge-req rounded-pill ms-1">*</span>
                  </label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    <div class="form-floating flex-grow-1">
                      <input type="tel" class="form-control" id="phone"
                             placeholder="+57 300 000 0000" required>
                      <label for="phone">+57 300 000 0000</label>
                    </div>
                    <div class="invalid-feedback">Ingresa un teléfono válido.</div>
                  </div>
                </div>
              </div>

              <div class="d-grid">
                <button class="w-100 btn btn-lg btn-hk" type="submit">
                  <i class="fas fa-paper-plane me-2"></i>Enviar Registro
                </button>
              </div>

            </form>
          </div>
        </div>


      </div>
    </div>
  </div>
</main>

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 overflow-hidden">
      <div class="modal-header modal-header-hk border-0">
        <h5 class="modal-title fw-bold" id="successModalLabel">
          <i class="fas fa-check-circle me-2"></i>¡Registro Exitoso!
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body text-center py-4">
        <div style="font-size:4rem">🎉</div>
        <p class="mt-3 fs-5">
          El estudiante fue registrado correctamente en <strong>Healthy Kids</strong>.
        </p>
        <p class="text-muted small">Recibirás una confirmación pronto.</p>
      </div>
      <div class="modal-footer border-0 justify-content-center">
        <button type="button" class="btn btn-hk px-5" data-bs-dismiss="modal">
          <i class="fas fa-thumbs-up me-1"></i> ¡Entendido!
        </button>
      </div>
    </div>
  </div>
</div>

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

<script>

  const requiredFields = ['student-name', 'student-age', 'grade', 'parent-name', 'phone'];

  function updateProgress() {
    const filled = requiredFields.filter(id => {
      const el = document.getElementById(id);
      return el && el.value.trim() !== '';
    }).length;
    const pct = Math.round((filled / requiredFields.length) * 100);
    const bar = document.getElementById('progress-bar');
    bar.style.width = pct + '%';
    bar.setAttribute('aria-valuenow', pct);
    document.getElementById('progress-label').textContent = pct + '%';
  }

  requiredFields.forEach(id => {
    const el = document.getElementById(id);
    if (el) el.addEventListener('input', updateProgress);
  });

  document.getElementById('registration-form').addEventListener('submit', function(e) {
    e.preventDefault();
    e.stopPropagation();
    this.classList.add('was-validated');

    if (this.checkValidity()) {
      const modal = new bootstrap.Modal(document.getElementById('successModal'));
      modal.show();
      this.reset();
      this.classList.remove('was-validated');
      document.getElementById('progress-bar').style.width = '0%';
      document.getElementById('progress-label').textContent = '0%';
    }
  });
</script>
</body>
</html>