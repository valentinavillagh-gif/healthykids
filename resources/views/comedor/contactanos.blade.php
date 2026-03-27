<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto - Healthy Kids</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Fredoka+One&display=swap" rel="stylesheet">

  <style>
    :root {
      --p: #FF6B8B;
      --s: #4ECDC4;
      --a: #FFD166;
      --d: #2A2D43;
      --w: #FFF;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #FFFBEB, #FEF3C7);
    }
    .navbar-custom {
      background: linear-gradient(135deg, var(--p), #FF8E9E);
      position: sticky;
      top: 0;
      z-index: 1030;
      box-shadow: 0 4px 20px rgba(255,107,139,.35);
    }
    .navbar-brand span {
      font-family: 'Fredoka One', cursive;
      font-size: 1.9rem;
      color: var(--w);
    }
    .navbar-nav .nav-link {
      color: rgba(255,255,255,.9) !important;
      font-weight: 500;
      padding: .5rem 1rem !important;
      border-radius: 50px;
      transition: background .25s;
    }
    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      background: rgba(255,255,255,.2);
    }
    .navbar-toggler { border-color: rgba(255,255,255,.5); }
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255,255,255,0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    .hero-contact {
      background: linear-gradient(135deg, rgba(255,107,139,.92), rgba(78,205,196,.92));
      color: #fff;
      padding: 5rem 1rem;
    }
    .icon-square {
      width: 3rem;
      height: 3rem;
      border-radius: .75rem;
    }
    .fi-contact {
      background: linear-gradient(135deg, var(--p), #FF8E9E);
      color: #fff;
    }
    .b-example-divider {
      height: 3rem;
      background-color: rgba(0,0,0,.07);
      border: solid rgba(0,0,0,.1);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0,0,0,.07),
                  inset 0 .125em .5em rgba(0,0,0,.1);
    }
    .contact-card {
      border: none;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,.09);
    }
    .contact-card .card-header {
      background: linear-gradient(135deg, var(--p), #FF8E9E);
      color: #fff;
      border-radius: 20px 20px 0 0 !important;
      padding: 1.2rem 1.5rem;
    }
    .contact-card .card-header h3 {
      font-family: 'Fredoka One', cursive;
      font-size: 1.4rem;
      margin: 0;
    }
    .form-control:focus,
    .form-select:focus {
      border-color: var(--p);
      box-shadow: 0 0 0 3px rgba(255,107,139,.15);
    }
    .btn-contact {
      background: linear-gradient(135deg, var(--p), #FF8E9E);
      color: #fff;
      border: none;
      border-radius: 50px;
      font-weight: 600;
      transition: transform .15s, box-shadow .15s;
    }
    .btn-contact:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(255,107,139,.4);
      color: #fff;
    }
    .footer-custom {
      background: linear-gradient(135deg, var(--d), #1E2A3A);
      color: var(--w);
      padding: 3rem 1rem;
    }
    .footer-custom h3 { font-family: 'Fredoka One', cursive; font-size: 1.8rem; }
    .footer-links a { color: rgba(255,255,255,.8); text-decoration: none; transition: color .2s; }
    .footer-links a:hover { color: var(--a); }
  </style>
</head>
<body class="d-flex flex-column h-100">
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="#">
      <i class="fas fa-apple-alt" style="font-size:2rem;color:#FFD166"></i>
      <span>Healthy Kids</span>
    </a>
    <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navMain">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav ms-auto gap-1">
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-home me-1"></i>Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-utensils me-1"></i>Menú</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user-plus me-1"></i>Registro</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-file-alt me-1"></i>Documentos</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-allergies me-1"></i>Alergias</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-truck me-1"></i>Proveedores</a></li>
        <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="px-4 py-5 text-center hero-contact">
  <h1 class="display-5 fw-bold">
    <i class="fas fa-envelope me-2"></i>Contáctanos / Contact Us
  </h1>
  <div class="col-lg-7 mx-auto">
    <p class="lead mb-0 opacity-90">
      ¿Tienes preguntas? Estamos aquí para ayudarte
      &nbsp;·&nbsp;
      Have questions? We're here to help
    </p>
  </div>
</div>
<main class="flex-shrink-0 py-5">
  <div class="container">
    <div class="row g-4 mb-4">
      <div class="col-12 col-md-6 pe-md-5">
        <h2 class="pb-2 border-bottom mb-4 fw-bold"
            style="font-family:'Fredoka One',cursive;color:var(--d)">
          <i class="fas fa-info-circle me-2" style="color:var(--p)"></i>
          Información de Contacto
        </h2>

        <div class="col d-flex align-items-start mb-3">
          <div class="icon-square fi-contact d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1">Ubicación</h6>
            <p class="text-muted mb-0 small">I.E. San José Escuela, Colombia</p>
          </div>
        </div>

        <div class="col d-flex align-items-start mb-3">
          <div class="icon-square fi-contact d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <i class="fas fa-envelope"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1">Correo Electrónico</h6>
            <p class="text-muted mb-0 small">contacto@healthykids.edu.co</p>
          </div>
        </div>

        <div class="col d-flex align-items-start mb-3">
          <div class="icon-square fi-contact d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <i class="fas fa-clock"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1">Horario de Atención</h6>
            <p class="text-muted mb-0 small">Lun – Vie: 7:00 AM – 2:00 PM</p>
          </div>
        </div>

        <div class="col d-flex align-items-start mb-3">
          <div class="icon-square fi-contact d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <i class="fas fa-phone"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1">Teléfono</h6>
            <p class="text-muted mb-0 small">+57 300 000 0000</p>
          </div>
        </div>

        <div class="col d-flex align-items-start mb-3">
          <div class="icon-square fi-contact d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <i class="fab fa-whatsapp"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1">WhatsApp</h6>
            <p class="text-muted mb-0 small">+57 300 000 0000</p>
          </div>
        </div>
      </div>

      <!-- INGLÉS -->
      <div class="col-12 col-md-6 ps-md-5 border-start">
        <h2 class="pb-2 border-bottom mb-4 fw-bold"
            style="font-family:'Fredoka One',cursive;color:var(--d)">
          <i class="fas fa-info-circle me-2" style="color:var(--p)"></i>
          Contact Information
        </h2>

        <div class="col d-flex align-items-start mb-3">
          <div class="icon-square fi-contact d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1">Location</h6>
            <p class="text-muted mb-0 small">I.E. San José Escuela, Colombia</p>
          </div>
        </div>

        <div class="col d-flex align-items-start mb-3">
          <div class="icon-square fi-contact d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <i class="fas fa-envelope"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1">Email Address</h6>
            <p class="text-muted mb-0 small">contacto@healthykids.edu.co</p>
          </div>
        </div>

        <div class="col d-flex align-items-start mb-3">
          <div class="icon-square fi-contact d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <i class="fas fa-clock"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1">Office Hours</h6>
            <p class="text-muted mb-0 small">Mon – Fri: 7:00 AM – 2:00 PM</p>
          </div>
        </div>

        <div class="col d-flex align-items-start mb-3">
          <div class="icon-square fi-contact d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <i class="fas fa-phone"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1">Phone</h6>
            <p class="text-muted mb-0 small">+57 300 000 0000</p>
          </div>
        </div>

        <div class="col d-flex align-items-start mb-3">
          <div class="icon-square fi-contact d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <i class="fab fa-whatsapp"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1">WhatsApp</h6>
            <p class="text-muted mb-0 small">+57 300 000 0000</p>
          </div>
        </div>
      </div>

    </div>
    <div class="b-example-divider mb-5"></div>
    <div class="row g-4">
      <div class="col-12 col-md-6 pe-md-5">
        <div class="card contact-card">
          <div class="card-header">
            <h3><i class="fas fa-paper-plane me-2"></i>Envíanos un Mensaje</h3>
          </div>
          <div class="card-body p-4">
            <form id="form-es" class="needs-validation" novalidate>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="es-name"
                       placeholder="Nombre" required>
                <label for="es-name">Nombre completo</label>
                <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="es-email"
                       placeholder="Email" required>
                <label for="es-email">Correo electrónico</label>
                <div class="invalid-feedback">Ingresa un correo válido.</div>
              </div>

              <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="es-phone"
                       placeholder="Teléfono">
                <label for="es-phone">Teléfono (opcional)</label>
              </div>

              <div class="form-floating mb-3">
                <select class="form-select" id="es-subject" required>
                  <option value="">— Seleccione —</option>
                  <option>Registro</option>
                  <option>Menú</option>
                  <option>Alergias</option>
                  <option>Proveedores</option>
                  <option>Otro</option>
                </select>
                <label for="es-subject">Asunto</label>
                <div class="invalid-feedback">Selecciona un asunto.</div>
              </div>

              <div class="form-floating mb-3">
                <textarea class="form-control" id="es-msg"
                          placeholder="Mensaje" style="height:110px" required></textarea>
                <label for="es-msg">Mensaje</label>
                <div class="invalid-feedback">Por favor escribe tu mensaje.</div>
              </div>
              <button class="w-100 btn btn-lg btn-contact" type="submit">
                <i class="fas fa-paper-plane me-2"></i>Enviar Mensaje
              </button>

            </form>
          </div>
        </div>
      </div>

      <!-- FORMULARIO INGLÉS -->
      <div class="col-12 col-md-6 ps-md-5 border-start">
        <div class="card contact-card">
          <div class="card-header">
            <h3><i class="fas fa-paper-plane me-2"></i>Send Us a Message</h3>
          </div>
          <div class="card-body p-4">
            <form id="form-en" class="needs-validation" novalidate>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="en-name"
                       placeholder="Name" required>
                <label for="en-name">Full name</label>
                <div class="invalid-feedback">Please enter your name.</div>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="en-email"
                       placeholder="Email" required>
                <label for="en-email">Email address</label>
                <div class="invalid-feedback">Enter a valid email address.</div>
              </div>

              <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="en-phone"
                       placeholder="Phone">
                <label for="en-phone">Phone (optional)</label>
              </div>

              <div class="form-floating mb-3">
                <select class="form-select" id="en-subject" required>
                  <option value="">— Select —</option>
                  <option>Registration</option>
                  <option>Menu</option>
                  <option>Allergies</option>
                  <option>Suppliers</option>
                  <option>Other</option>
                </select>
                <label for="en-subject">Subject</label>
                <div class="invalid-feedback">Please select a subject.</div>
              </div>

              <div class="form-floating mb-3">
                <textarea class="form-control" id="en-msg"
                          placeholder="Message" style="height:110px" required></textarea>
                <label for="en-msg">Message</label>
                <div class="invalid-feedback">Please write your message.</div>
              </div>
              <button class="w-100 btn btn-lg btn-contact" type="submit">
                <i class="fas fa-paper-plane me-2"></i>Send Message
              </button>

            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>
<div class="b-example-divider"></div>
<footer class="footer-custom mt-auto">
  <div class="container">
    <div class="row gy-4">
      <div class="col-12 col-md-4 text-center text-md-start">
        <h3><i class="fas fa-apple-alt me-2" style="color:var(--a)"></i>Healthy Kids</h3>
        <p class="text-white-50">Programa de Alimentación Escolar comprometido con la nutrición y bienestar de nuestros estudiantes.</p>
      </div>
      <div class="col-12 col-md-4 text-center">
        <h6 class="text-uppercase fw-bold mb-3" style="color:var(--a)">Navegación</h6>
        <ul class="list-unstyled footer-links d-flex flex-wrap justify-content-center gap-3">
          <li><a href="#"><i class="fas fa-home me-1"></i>Inicio</a></li>
          <li><a href="#"><i class="fas fa-utensils me-1"></i>Menú</a></li>
          <li><a href="#"><i class="fas fa-user-plus me-1"></i>Registro</a></li>
          <li><a href="#"><i class="fas fa-file-alt me-1"></i>Documentos</a></li>
          <li><a href="#"><i class="fas fa-allergies me-1"></i>Alergias</a></li>
          <li><a href="#"><i class="fas fa-truck me-1"></i>Proveedores</a></li>
          <li><a href="#"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-4 text-center text-md-end">
        <h6 class="text-uppercase fw-bold mb-3" style="color:var(--a)">Síguenos</h6>
        <div class="d-flex justify-content-center justify-content-md-end gap-3 fs-5">
          <a href="#" class="footer-links"><i class="fab fa-facebook"></i></a>
          <a href="#" class="footer-links"><i class="fab fa-instagram"></i></a>
          <a href="#" class="footer-links"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
    <hr style="border-color:rgba(255,255,255,.15);margin-top:2rem">
    <p class="text-center text-white-50 mb-0">&copy; 2026 Healthy Kids · I.E. San José Escuela</p>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.getElementById('form-es').addEventListener('submit', function(e) {
  e.preventDefault(); e.stopPropagation()
  this.classList.add('was-validated')
  if (this.checkValidity()) {
    alert('¡Mensaje enviado con éxito!')
    this.reset()
    this.classList.remove('was-validated')
  }
})
document.getElementById('form-en').addEventListener('submit', function(e) {
  e.preventDefault(); e.stopPropagation()
  this.classList.add('was-validated')
  if (this.checkValidity()) {
    alert('Message sent successfully!')
    this.reset()
    this.classList.remove('was-validated')
  }
})
</script>

</body>
</html>