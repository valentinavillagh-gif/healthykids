<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú - Healthy Kids</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Fredoka+One&display=swap" rel="stylesheet">
    <style>
        :root { --p:#FF6B8B; --s:#4ECDC4; --a:#FFD166; --g:#06D6A0; --d:#2A2D43; --w:#FFF; }
        body { font-family:'Poppins',sans-serif; background:linear-gradient(135deg,#FFFBEB,#FEF3C7); color:#333; }

       
        .navbar-custom { background:linear-gradient(135deg,var(--p),#FF8E9E); position:sticky; top:0; z-index:1030; box-shadow:0 4px 20px rgba(255,107,139,0.35); }
        .navbar-brand span { font-family:'Fredoka One',cursive; font-size:1.9rem; color:var(--w); }
        .navbar-nav .nav-link { color:rgba(255,255,255,0.9)!important; font-weight:500; padding:0.5rem 1rem!important; border-radius:50px; transition:background 0.25s; }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active { background:rgba(255,255,255,0.2); }
        .navbar-toggler { border-color:rgba(255,255,255,0.5); }
        .navbar-toggler-icon { background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255,255,255,0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

    
        .hero-menu { background:linear-gradient(135deg,rgba(78,205,196,0.92),rgba(255,214,102,0.92)), url('https://images.unsplash.com/photo-1498837167922-ddd27525d352?w=1400&q=80') center/cover no-repeat; color:var(--w); text-align:center; padding:5rem 1rem; }
        .hero-menu h1 { font-family:'Fredoka One',cursive; font-size:clamp(2rem,5vw,3.5rem); }

        .menu-card { border:none; border-radius:18px; height:100%; transition:transform 0.3s,box-shadow 0.3s; overflow:hidden; }
        .menu-card:hover { transform:translateY(-6px); box-shadow:0 15px 35px rgba(0,0,0,0.12); }
        .menu-card .card-header { font-family:'Fredoka One',cursive; font-size:1.2rem; padding:1rem 1.5rem; border:none; }
        .menu-card .card-body { padding:1.5rem; }
        .menu-item-row { padding:0.6rem 0; border-bottom:1px dashed #E9ECEF; display:flex; align-items:flex-start; gap:0.6rem; }
        .menu-item-row:last-child { border-bottom:none; padding-bottom:0; }
        .option-dot { width:22px; height:22px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:0.7rem; font-weight:700; color:var(--w); flex-shrink:0; margin-top:2px; }

     
        .btn-dropdown-custom { border:none; border-radius:50px; font-weight:600; padding:0.6rem 1.4rem; }
        .dropdown-menu-custom { border:none; border-radius:15px; box-shadow:0 10px 30px rgba(0,0,0,0.12); padding:0.5rem; }
        .dropdown-menu-custom .dropdown-item { border-radius:10px; padding:0.6rem 1rem; font-weight:500; }
        .dropdown-menu-custom .dropdown-item:hover { background:#F0F9FF; color:var(--s); }
        .dropdown-menu-custom .dropdown-divider { margin:0.3rem 0; }

      
        .modal-custom .modal-content { border:none; border-radius:20px; overflow:hidden; }
        .modal-custom .modal-header { border:none; padding:1.5rem 2rem; }
        .modal-custom .modal-body { padding:1.5rem 2rem; }
        .modal-custom .modal-footer { border:none; padding:1rem 2rem 1.5rem; }
        .ingredient-chip { display:inline-block; background:#F0F9FF; border:1px solid #B2EBF2; color:#00796B; border-radius:50px; padding:0.25rem 0.8rem; font-size:0.8rem; margin:3px; }

        
        .section-card { background:var(--w); padding:2.5rem; border-radius:20px; box-shadow:0 10px 30px rgba(0,0,0,0.08); margin-bottom:2rem; }
        .section-title { font-family:'Fredoka One',cursive; font-size:1.8rem; color:var(--d); display:flex; align-items:center; gap:12px; margin-bottom:1.5rem; }
        .section-title i { color:var(--s); background:#E0F7FA; padding:10px; border-radius:50%; }
        .nutrition-box { background:linear-gradient(135deg,#F0FDF4,#DCFCE7); border-radius:15px; padding:1.5rem; border-left:5px solid var(--g); }

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
                <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-home me-1"></i>Inicio</a></li>
                <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-utensils me-1"></i>Menú</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user-plus me-1"></i>Registro</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-file-alt me-1"></i>Documentos</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-allergies me-1"></i>Alergias</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-truck me-1"></i>Proveedores</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('comedor.contactanos') }}"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>


<section class="hero-menu">
    <div class="container">
        <h1 class="mb-2"><i class="fas fa-utensils me-3"></i>Menú Escolar Semanal</h1>
        <p class="lead mb-4">Alimentación balanceada y nutritiva para nuestros estudiantes</p>
        <div class="d-flex justify-content-center flex-wrap gap-2">
            <span class="badge rounded-pill px-3 py-2 fs-6" style="background:rgba(255,255,255,0.25)"><i class="fas fa-fire me-1"></i>700-800 kcal</span>
            <span class="badge rounded-pill px-3 py-2 fs-6" style="background:rgba(255,255,255,0.25)"><i class="fas fa-check-circle me-1"></i>Norma PAE</span>
            <span class="badge rounded-pill px-3 py-2 fs-6" style="background:rgba(255,255,255,0.25)"><i class="fas fa-seedling me-1"></i>Ingredientes frescos</span>
        </div>
    </div>
</section>

<div class="container my-5">

 
    <div class="section-card">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
            <h2 class="section-title mb-0"><i class="fas fa-calendar-week"></i>Menú de la Semana</h2>

        
            <div class="dropdown">
                <button class="btn btn-dropdown-custom dropdown-toggle" style="background:linear-gradient(135deg,var(--s),#26A69A);color:var(--w)" type="button" data-bs-toggle="dropdown">
                    <i class="fas fa-filter me-2"></i>Filtrar por día
                </button>
                <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-end">
                    <li><a class="dropdown-item" href="#lunes-section"><i class="fas fa-apple-alt me-2" style="color:var(--p)"></i>Lunes</a></li>
                    <li><a class="dropdown-item" href="#martes-section"><i class="fas fa-carrot me-2" style="color:var(--s)"></i>Martes</a></li>
                    <li><a class="dropdown-item" href="#miercoles-section"><i class="fas fa-leaf me-2" style="color:#F59E0B"></i>Miércoles</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li><a class="dropdown-item" href="#jueves-section"><i class="fas fa-cheese me-2" style="color:var(--g)"></i>Jueves</a></li>
                    <li><a class="dropdown-item" href="#viernes-section"><i class="fas fa-egg me-2" style="color:#845EC2"></i>Viernes</a></li>
                </ul>
            </div>

            
            <div class="dropdown">
                <button class="btn btn-dropdown-custom dropdown-toggle" style="background:linear-gradient(135deg,var(--a),#F59E0B);color:#333" type="button" data-bs-toggle="dropdown">
                    <i class="fas fa-chart-pie me-2"></i>Info Nutricional
                </button>
                <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-end" style="min-width:220px">
                    <li class="px-3 py-2"><strong style="color:var(--d)">Calorías por almuerzo</strong></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li class="px-3 py-1 d-flex justify-content-between"><span>Preescolar</span><span class="badge" style="background:var(--g)">600 kcal</span></li>
                    <li class="px-3 py-1 d-flex justify-content-between"><span>Primaria</span><span class="badge" style="background:var(--p)">700 kcal</span></li>
                    <li class="px-3 py-1 d-flex justify-content-between"><span>Secundaria</span><span class="badge" style="background:var(--s)">800 kcal</span></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li class="px-3 py-1 text-muted small"><i class="fas fa-info-circle me-1"></i>Cumple norma PAE 2025</li>
                </ul>
            </div>
        </div>

      
        <div class="row g-4 mb-4">
            <div class="col-12 col-md-6" id="lunes-section">
                <div class="card menu-card">
                    <div class="card-header" style="background:linear-gradient(135deg,var(--p),#E91E63);color:var(--w)">
                        <i class="fas fa-apple-alt me-2"></i>Lunes
                    </div>
                    <div class="card-body">
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:var(--p)">1</div>
                            <div><strong>Opción A:</strong> Lentejas, arroz, carne, tajadas, ensalada y jugo</div>
                        </div>
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:var(--p)">2</div>
                            <div><strong>Opción B:</strong> Pollo guisado, arroz, ensalada, banano y leche</div>
                        </div>
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:var(--p)">3</div>
                            <div><strong>Opción C:</strong> Frijoles, huevo, tajadas, arroz, ensalada y jugo</div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-sm rounded-pill" style="background:#FFF0F3;color:var(--p);border:1px solid #FFCDD2" data-bs-toggle="modal" data-bs-target="#modalLunes">
                                <i class="fas fa-eye me-1"></i>Ver detalle
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6" id="martes-section">
                <div class="card menu-card">
                    <div class="card-header" style="background:linear-gradient(135deg,var(--s),#26A69A);color:var(--w)">
                        <i class="fas fa-carrot me-2"></i>Martes
                    </div>
                    <div class="card-body">
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:var(--s)">1</div>
                            <div><strong>Opción A:</strong> Carne molida, arroz, ensalada y jugo</div>
                        </div>
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:var(--s)">2</div>
                            <div><strong>Opción B:</strong> Sudado de pollo, arroz, ensalada y jugo</div>
                        </div>
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:var(--s)">3</div>
                            <div><strong>Opción C:</strong> Pollo guisado, arroz, torta de zanahoria, tomate y jugo</div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-sm rounded-pill" style="background:#E0F7FA;color:var(--s);border:1px solid #B2EBF2" data-bs-toggle="modal" data-bs-target="#modalMartes">
                                <i class="fas fa-eye me-1"></i>Ver detalle
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="row g-4 mb-4">
            <div class="col-12 col-md-6" id="miercoles-section">
                <div class="card menu-card">
                    <div class="card-header" style="background:linear-gradient(135deg,#FFD166,#F59E0B);color:#333">
                        <i class="fas fa-leaf me-2"></i>Miércoles
                    </div>
                    <div class="card-body">
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:#F59E0B">1</div>
                            <div><strong>Opción A:</strong> Hamburguesa, papas y jugo</div>
                        </div>
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:#F59E0B">2</div>
                            <div><strong>Opción B:</strong> Lentejas con verduras y carne, arroz, papas y jugo</div>
                        </div>
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:#F59E0B">3</div>
                            <div><strong>Opción C:</strong> Pollo apanado, arroz, ensalada, papas con mayonesa y jugo</div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-sm rounded-pill" style="background:#FFFBEB;color:#F59E0B;border:1px solid #FDE68A" data-bs-toggle="modal" data-bs-target="#modalMiercoles">
                                <i class="fas fa-eye me-1"></i>Ver detalle
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6" id="jueves-section">
                <div class="card menu-card">
                    <div class="card-header" style="background:linear-gradient(135deg,var(--g),#059669);color:var(--w)">
                        <i class="fas fa-cheese me-2"></i>Jueves
                    </div>
                    <div class="card-body">
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:var(--g)">1</div>
                            <div><strong>Opción A:</strong> Albóndigas, maduro con queso, arroz, ensalada y jugo</div>
                        </div>
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:var(--g)">2</div>
                            <div><strong>Opción B:</strong> Carne molida, arroz, remolacha y jugo</div>
                        </div>
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:var(--g)">3</div>
                            <div><strong>Opción C:</strong> Pollo guisado, arroz, ensalada, banano y leche</div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-sm rounded-pill" style="background:#F0FDF4;color:var(--g);border:1px solid #A7F3D0" data-bs-toggle="modal" data-bs-target="#modalJueves">
                                <i class="fas fa-eye me-1"></i>Ver detalle
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-6" id="viernes-section">
                <div class="card menu-card">
                    <div class="card-header" style="background:linear-gradient(135deg,#845EC2,#6D28D9);color:var(--w)">
                        <i class="fas fa-egg me-2"></i>Viernes
                    </div>
                    <div class="card-body">
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:#845EC2">1</div>
                            <div><strong>Opción A:</strong> Pollo, papas con hogado, arroz, ensalada y jugo</div>
                        </div>
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:#845EC2">2</div>
                            <div><strong>Opción B:</strong> Frijoles, huevo, tajadas, arroz, ensalada y jugo</div>
                        </div>
                        <div class="menu-item-row">
                            <div class="option-dot" style="background:#845EC2">3</div>
                            <div><strong>Opción C:</strong> Sudado de pollo, arroz, ensalada y jugo</div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-sm rounded-pill" style="background:#F5F0FF;color:#845EC2;border:1px solid #DDD6FE" data-bs-toggle="modal" data-bs-target="#modalViernes">
                                <i class="fas fa-eye me-1"></i>Ver detalle
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="nutrition-box">
        <p class="mb-0"><i class="fas fa-info-circle me-2" style="color:var(--g)"></i><strong>Información Nutricional:</strong> Los menús cumplen con los estándares PAE. Cada almuerzo aporta entre <strong>700 y 800 calorías</strong> según el nivel educativo.</p>
    </div>

</div>


<div class="modal fade modal-custom" id="modalLunes" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background:linear-gradient(135deg,var(--p),#E91E63)">
                <h5 class="modal-title text-white"><i class="fas fa-apple-alt me-2"></i>Detalle Menú — Lunes</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted mb-3">Se sirve <strong>una</strong> de las siguientes opciones según disponibilidad.</p>
                <h6 class="fw-bold mb-2">Opción A</h6>
                <div class="mb-3">
                    <span class="ingredient-chip">🫘 Lentejas</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🥩 Carne</span><span class="ingredient-chip">🍌 Tajadas</span><span class="ingredient-chip">🥗 Ensalada</span><span class="ingredient-chip">🥤 Jugo</span>
                </div>
                <h6 class="fw-bold mb-2">Opción B</h6>
                <div class="mb-3">
                    <span class="ingredient-chip">🍗 Pollo guisado</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🥗 Ensalada</span><span class="ingredient-chip">🍌 Banano</span><span class="ingredient-chip">🥛 Leche</span>
                </div>
                <h6 class="fw-bold mb-2">Opción C</h6>
                <div>
                    <span class="ingredient-chip">🫘 Frijoles</span><span class="ingredient-chip">🥚 Huevo</span><span class="ingredient-chip">🍌 Tajadas</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🥗 Ensalada</span><span class="ingredient-chip">🥤 Jugo</span>
                </div>
            </div>
            <div class="modal-footer">
                <span class="badge rounded-pill me-auto" style="background:var(--p)"><i class="fas fa-fire me-1"></i>~700 kcal</span>
                <button type="button" class="btn rounded-pill px-4" style="background:var(--p);color:var(--w)" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modal-custom" id="modalMartes" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background:linear-gradient(135deg,var(--s),#26A69A)">
                <h5 class="modal-title text-white"><i class="fas fa-carrot me-2"></i>Detalle Menú — Martes</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted mb-3">Se sirve <strong>una</strong> de las siguientes opciones.</p>
                <h6 class="fw-bold mb-2">Opción A</h6>
                <div class="mb-3"><span class="ingredient-chip">🥩 Carne molida</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🥗 Ensalada</span><span class="ingredient-chip">🥤 Jugo</span></div>
                <h6 class="fw-bold mb-2">Opción B</h6>
                <div class="mb-3"><span class="ingredient-chip">🍗 Sudado de pollo</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🥗 Ensalada</span><span class="ingredient-chip">🥤 Jugo</span></div>
                <h6 class="fw-bold mb-2">Opción C</h6>
                <div><span class="ingredient-chip">🍗 Pollo guisado</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🥕 Torta zanahoria</span><span class="ingredient-chip">🍅 Tomate</span><span class="ingredient-chip">🥤 Jugo</span></div>
            </div>
            <div class="modal-footer">
                <span class="badge rounded-pill me-auto" style="background:var(--s)"><i class="fas fa-fire me-1"></i>~700 kcal</span>
                <button type="button" class="btn rounded-pill px-4" style="background:var(--s);color:var(--w)" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modal-custom" id="modalMiercoles" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background:linear-gradient(135deg,#FFD166,#F59E0B)">
                <h5 class="modal-title" style="color:#333"><i class="fas fa-leaf me-2"></i>Detalle Menú — Miércoles</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted mb-3">Se sirve <strong>una</strong> de las siguientes opciones.</p>
                <h6 class="fw-bold mb-2">Opción A</h6>
                <div class="mb-3"><span class="ingredient-chip">🍔 Hamburguesa</span><span class="ingredient-chip">🍟 Papas</span><span class="ingredient-chip">🥤 Jugo</span></div>
                <h6 class="fw-bold mb-2">Opción B</h6>
                <div class="mb-3"><span class="ingredient-chip">🫘 Lentejas con verduras</span><span class="ingredient-chip">🥩 Carne</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🍟 Papas</span><span class="ingredient-chip">🥤 Jugo</span></div>
                <h6 class="fw-bold mb-2">Opción C</h6>
                <div><span class="ingredient-chip">🍗 Pollo apanado</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🥗 Ensalada</span><span class="ingredient-chip">🥔 Papas con mayo</span><span class="ingredient-chip">🥤 Jugo</span></div>
            </div>
            <div class="modal-footer">
                <span class="badge rounded-pill me-auto" style="background:#F59E0B;color:#333"><i class="fas fa-fire me-1"></i>~750 kcal</span>
                <button type="button" class="btn rounded-pill px-4" style="background:#F59E0B;color:#333" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modal-custom" id="modalJueves" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background:linear-gradient(135deg,var(--g),#059669)">
                <h5 class="modal-title text-white"><i class="fas fa-cheese me-2"></i>Detalle Menú — Jueves</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted mb-3">Se sirve <strong>una</strong> de las siguientes opciones.</p>
                <h6 class="fw-bold mb-2">Opción A</h6>
                <div class="mb-3"><span class="ingredient-chip">🍖 Albóndigas</span><span class="ingredient-chip">🍌 Maduro con queso</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🥗 Ensalada</span><span class="ingredient-chip">🥤 Jugo</span></div>
                <h6 class="fw-bold mb-2">Opción B</h6>
                <div class="mb-3"><span class="ingredient-chip">🥩 Carne molida</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🟣 Remolacha</span><span class="ingredient-chip">🥤 Jugo</span></div>
                <h6 class="fw-bold mb-2">Opción C</h6>
                <div><span class="ingredient-chip">🍗 Pollo guisado</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🥗 Ensalada</span><span class="ingredient-chip">🍌 Banano</span><span class="ingredient-chip">🥛 Leche</span></div>
            </div>
            <div class="modal-footer">
                <span class="badge rounded-pill me-auto" style="background:var(--g)"><i class="fas fa-fire me-1"></i>~700 kcal</span>
                <button type="button" class="btn rounded-pill px-4" style="background:var(--g);color:var(--w)" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modal-custom" id="modalViernes" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background:linear-gradient(135deg,#845EC2,#6D28D9)">
                <h5 class="modal-title text-white"><i class="fas fa-egg me-2"></i>Detalle Menú — Viernes</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted mb-3">Se sirve <strong>una</strong> de las siguientes opciones.</p>
                <h6 class="fw-bold mb-2">Opción A</h6>
                <div class="mb-3"><span class="ingredient-chip">🍗 Pollo</span><span class="ingredient-chip">🍟 Papas con hogado</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🥗 Ensalada</span><span class="ingredient-chip">🥤 Jugo</span></div>
                <h6 class="fw-bold mb-2">Opción B</h6>
                <div class="mb-3"><span class="ingredient-chip">🫘 Frijoles</span><span class="ingredient-chip">🥚 Huevo</span><span class="ingredient-chip">🍌 Tajadas</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🥗 Ensalada</span><span class="ingredient-chip">🥤 Jugo</span></div>
                <h6 class="fw-bold mb-2">Opción C</h6>
                <div><span class="ingredient-chip">🍗 Sudado de pollo</span><span class="ingredient-chip">🍚 Arroz</span><span class="ingredient-chip">🥗 Ensalada</span><span class="ingredient-chip">🥤 Jugo</span></div>
            </div>
            <div class="modal-footer">
                <span class="badge rounded-pill me-auto" style="background:#845EC2"><i class="fas fa-fire me-1"></i>~700 kcal</span>
                <button type="button" class="btn rounded-pill px-4" style="background:#845EC2;color:var(--w)" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<footer class="footer-custom mt-2">
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
                    <li><a href="#"><i class="fas fa-utensils me-1"></i>Menú</a></li>
                    <li><a href="#"><i class="fas fa-user-plus me-1"></i>Registro</a></li>
                    <li><a href="#"><i class="fas fa-file-alt me-1"></i>Documentos</a></li>
                    <li><a href="#"><i class="fas fa-allergies me-1"></i>Alergias</a></li>
                    <li><a href="#"><i class="fas fa-truck me-1"></i>Proveedores</a></li>
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
        <p class="text-center text-white-50 mb-0">&copy; 2025 Healthy Kids · I.E. San José Escuela</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>