<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Kids</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Fredoka+One&display=swap" rel="stylesheet">
    <style>
        :root { --p:#FF6B8B; --s:#4ECDC4; --a:#FFD166; --d:#2A2D43; --w:#FFF; }
        body { font-family:'Poppins',sans-serif; background:#FFFBEB; color:#333; }-
        .navbar-custom { background:linear-gradient(135deg,var(--p),#FF8E9E); position:sticky; top:0; z-index:1030; box-shadow:0 4px 20px rgba(255,107,139,0.35); }
        .navbar-brand span { font-family:'Fredoka One',cursive; font-size:1.9rem; color:var(--w); }
        .navbar-nav .nav-link { color:rgba(255,255,255,0.9)!important; font-weight:500; padding:0.5rem 1rem!important; border-radius:50px; transition:background 0.25s; }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active { background:rgba(255,255,255,0.2); }
        .navbar-toggler { border-color:rgba(255,255,255,0.5); }
        .navbar-toggler-icon { background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255,255,255,0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }
        .hero-section { background:linear-gradient(135deg,rgba(255,107,139,0.92),rgba(78,205,196,0.92)), url('https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=1400&q=80') center/cover no-repeat; color:var(--w); padding:7rem 1rem; text-align:center; }
        .hero-section h1 { font-family:'Fredoka One',cursive; font-size:clamp(2.2rem,5vw,4rem); text-shadow:0 2px 10px rgba(0,0,0,0.2); }
        .btn-hero { background:var(--a); color:var(--d); border:none; border-radius:50px; padding:0.9rem 2.4rem; font-weight:700; font-size:1rem; text-decoration:none; transition:transform 0.2s,box-shadow 0.2s; display:inline-block; }
        .btn-hero:hover { transform:translateY(-3px); box-shadow:0 10px 25px rgba(0,0,0,0.2); color:var(--d); }
        .jumbotron-custom { background:linear-gradient(135deg,#FFF0E5,#FFE8D6); border-radius:20px; padding:3rem; margin-bottom:2rem; border-left:6px solid var(--p); }
        .jumbotron-custom h2 { font-family:'Fredoka One',cursive; color:var(--d); font-size:2rem; }
        .list-group-custom .list-group-item { border:none; border-bottom:1px solid #F0F0F0; padding:1rem 1.2rem; display:flex; align-items:center; gap:1rem; transition:background 0.2s; }
        .list-group-custom .list-group-item:hover { background:#FFF7F0; }
        .list-group-custom .list-group-item:last-child { border-bottom:none; }
        .list-icon { width:42px; height:42px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1.1rem; flex-shrink:0; }
        .section-card { background:var(--w); padding:2.5rem; border-radius:20px; box-shadow:0 10px 30px rgba(0,0,0,0.08); margin-bottom:2rem; }
        .section-title { font-family:'Fredoka One',cursive; font-size:1.8rem; color:var(--d); display:flex; align-items:center; gap:12px; margin-bottom:1.5rem; }
        .section-title i { color:var(--p); background:#FFF0F3; padding:10px; border-radius:50%; }
        .feature-card { border:none; border-radius:18px; background:linear-gradient(135deg,#F1F8E9,#E8F5E9); box-shadow:0 6px 20px rgba(0,0,0,0.07); transition:transform 0.3s; height:100%; }
        .feature-card:hover { transform:translateY(-7px); }
        .feature-card .card-body { padding:2rem; text-align:center; }
        .feature-icon { width:65px; height:65px; border-radius:50%; background:linear-gradient(135deg,var(--s),#26A69A); display:flex; align-items:center; justify-content:center; margin:0 auto 1rem; font-size:1.7rem; color:var(--w); }
        .footer-custom { background:linear-gradient(135deg,var(--d),#1E2A3A); color:var(--w); padding:3rem 1rem; }
        .footer-custom h3 { font-family:'Fredoka One',cursive; font-size:1.8rem; }
        .footer-links a { color:rgba(255,255,255,0.8); text-decoration:none; transition:color 0.2s; }
        .footer-links a:hover { color:var(--a); }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="index.html">
            <i class="fas fa-apple-alt" style="font-size:2rem;color:#FFD166"></i>
            <span>Healthy Kids</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav ms-auto gap-1">
                <li class="nav-item"><a class="nav-link active" href="index.html"><i class="fas fa-home me-1"></i>Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="menu.html"><i class="fas fa-utensils me-1"></i>Menú</a></li>
                <li class="nav-item"><a class="nav-link" href="registro.html"><i class="fas fa-user-plus me-1"></i>Registro</a></li>
                <li class="nav-item"><a class="nav-link" href="documentos.html"><i class="fas fa-file-alt me-1"></i>Documentos</a></li>
                <li class="nav-item"><a class="nav-link" href="alergias.html"><i class="fas fa-allergies me-1"></i>Alergias</a></li>
                <li class="nav-item"><a class="nav-link" href="proveedores.html"><i class="fas fa-truck me-1"></i>Proveedores</a></li>
                <li class="nav-item"><a class="nav-link" href="contacto.html"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-section">
    <div class="container">
        <h1 class="mb-3">Programa de Alimentación Escolar</h1>
        <p class="lead mb-4 fs-5">Promoviendo hábitos alimenticios saludables en la <strong>I.E. San José Escuela</strong></p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="registro.html" class="btn-hero"><i class="fas fa-user-plus me-2"></i>Registrarse Ahora</a>
            <a href="#info" class="btn btn-outline-light rounded-pill px-4"><i class="fas fa-info-circle me-2"></i>Saber Más</a>
        </div>
    </div>
</section>

<div class="container my-5" id="info">

    <div class="jumbotron-custom">
        <div class="row align-items-center">
            <div class="col-12 col-md-8">
                <h2><i class="fas fa-heart me-2" style="color:var(--p)"></i>Bienvenidos a Healthy Kids</h2>
                <p class="text-muted mt-2 mb-3">Ofrecemos alimentación nutritiva y balanceada para todos los estudiantes de la <strong>I.E. San José Escuela</strong>, con el compromiso de apoyar su desarrollo integral cada día.</p>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge rounded-pill px-3 py-2" style="background:var(--p);font-size:0.85rem"><i class="fas fa-check me-1"></i>Norma PAE</span>
                    <span class="badge rounded-pill px-3 py-2" style="background:var(--s);font-size:0.85rem"><i class="fas fa-seedling me-1"></i>Ingredientes frescos</span>
                    <span class="badge rounded-pill px-3 py-2" style="background:var(--a);color:#333;font-size:0.85rem"><i class="fas fa-users me-1"></i>850+ estudiantes</span>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center mt-4 mt-md-0">
                <i class="fas fa-apple-alt" style="font-size:7rem;color:var(--p);opacity:0.25"></i>
            </div>
        </div>
    </div>

    <div class="section-card">
        <h2 class="section-title"><i class="fas fa-star"></i>¿Qué ofrecemos?</h2>
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card feature-card">
                    <div class="card-body">
                        <div class="feature-icon"><i class="fas fa-utensils"></i></div>
                        <h5 class="fw-bold">Menús Balanceados</h5>
                        <p class="text-muted">Diseñados por nutricionistas certificados para cubrir todas las necesidades nutricionales.</p>
                        <span class="badge rounded-pill" style="background:var(--s)">Nutrición</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card feature-card">
                    <div class="card-body">
                        <div class="feature-icon" style="background:linear-gradient(135deg,#81C784,#388E3C)"><i class="fas fa-seedling"></i></div>
                        <h5 class="fw-bold">Ingredientes Frescos</h5>
                        <p class="text-muted">Trabajamos con proveedores locales para garantizar productos frescos de temporada.</p>
                        <span class="badge rounded-pill" style="background:#388E3C">Local</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card feature-card">
                    <div class="card-body">
                        <div class="feature-icon" style="background:linear-gradient(135deg,var(--p),#E91E63)"><i class="fas fa-users"></i></div>
                        <h5 class="fw-bold">Comunidad Educativa</h5>
                        <p class="text-muted">Padres, estudiantes y docentes participan activamente en el programa.</p>
                        <span class="badge rounded-pill" style="background:var(--p)">Comunidad</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-card">
        <h2 class="section-title"><i class="fas fa-school"></i>Información de la Institución</h2>
        <div class="row g-4">
            <div class="col-12 col-md-6">
                <ul class="list-group list-group-custom rounded-3 shadow-sm">
                    <li class="list-group-item">
                        <div class="list-icon" style="background:#FFF0F3"><i class="fas fa-building" style="color:var(--p)"></i></div>
                        <div><strong>Institución</strong><br><span class="text-muted">I.E. San José Escuela</span></div>
                    </li>
                    <li class="list-group-item">
                        <div class="list-icon" style="background:#E0F7FA"><i class="fas fa-map-marker-alt" style="color:var(--s)"></i></div>
                        <div><strong>Ubicación</strong><br><span class="text-muted">Colombia</span></div>
                    </li>
                    <li class="list-group-item">
                        <div class="list-icon" style="background:#FFFBEB"><i class="fas fa-clock" style="color:var(--a)"></i></div>
                        <div><strong>Horario de atención</strong><br><span class="text-muted">Lun – Vie: 7:00 AM – 3:00 PM</span></div>
                    </li>
                    <li class="list-group-item">
                        <div class="list-icon" style="background:#F3E5F5"><i class="fas fa-envelope" style="color:#9C27B0"></i></div>
                        <div><strong>Contacto</strong><br><span class="text-muted">contacto@healthykids.edu.co</span></div>
                    </li>
                    <li class="list-group-item">
                        <div class="list-icon" style="background:#E8F5E9"><i class="fas fa-child" style="color:#388E3C"></i></div>
                        <div><strong>Estudiantes beneficiados</strong><br><span class="text-muted">850+ estudiantes activos</span></div>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center text-center">
                <p class="fw-bold mb-1"><i class="fas fa-qrcode me-2" style="color:var(--p)"></i>Acceso Rápido con QR</p>
                <p class="text-muted small mb-3">Escanea para acceder al sistema de registro</p>
                <div style="background:var(--w);padding:15px;border-radius:15px;box-shadow:0 8px 25px rgba(0,0,0,0.1)">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=http://127.0.0.1:8000/registro" alt="QR" width="180" height="180">
                </div>
                <p class="mt-2 small text-muted">registro</p>
                <a href="contacto.html" class="btn mt-4 rounded-pill px-4 fw-semibold"
                   style="background:linear-gradient(135deg,var(--p),#FF8E9E);color:#fff">
                    <i class="fas fa-envelope me-2"></i>Contáctanos
                </a>
            </div>
        </div>
    </div>

</div>

<footer class="footer-custom">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 col-md-4 text-center text-md-start">
                <h3><i class="fas fa-apple-alt me-2" style="color:var(--a)"></i>Healthy Kids</h3>
                <p class="text-white-50">Programa de Alimentación Escolar comprometido con la nutrición y bienestar de nuestros estudiantes.</p>
            </div>
            <div class="col-12 col-md-4 text-center">
                <h6 class="text-uppercase fw-bold mb-3" style="color:var(--a)">Navegación</h6>
                <ul class="list-unstyled footer-links d-flex flex-wrap justify-content-center gap-3">
                    <li><a href="index.html"><i class="fas fa-home me-1"></i>Inicio</a></li>
                    <li><a href="menu.html"><i class="fas fa-utensils me-1"></i>Menú</a></li>
                    <li><a href="registro.html"><i class="fas fa-user-plus me-1"></i>Registro</a></li>
                    <li><a href="documentos.html"><i class="fas fa-file-alt me-1"></i>Documentos</a></li>
                    <li><a href="alergias.html"><i class="fas fa-allergies me-1"></i>Alergias</a></li>
                    <li><a href="proveedores.html"><i class="fas fa-truck me-1"></i>Proveedores</a></li>
                    <li><a href="contacto.html"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
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
        <hr style="border-color:rgba(255,255,255,0.15);margin-top:2rem">
        <p class="text-center text-white-50 mb-0">&copy; 2026 Healthy Kids · I.E. San José Escuela</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>