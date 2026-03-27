<?php
session_start();

/* ══════════════════════════════════════════════════════════════════
   HEALTHY KIDS — Archivo único
   Flujo: Formulario → Quiz → Juego (todo en la misma página)
   Media Técnica en Programación de Software — Grado 11
   ══════════════════════════════════════════════════════════════════ */

/* ── CONEXIÓN A BASE DE DATOS ──────────────────────────────────────
   Descomenta este bloque cuando tengas MySQL configurado.

$host      = "localhost";
$usuario   = "root";
$password  = "";
$baseDatos = "healthy_kids";

$conn = new mysqli($host, $usuario, $password, $baseDatos);
if ($conn->connect_error) {
    die("<div class='alert alert-danger'>Error BD: " . $conn->connect_error . "</div>");
}

CREATE TABLE IF NOT EXISTS estudiantes (
  id         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre     VARCHAR(100) NOT NULL,
  edad       TINYINT UNSIGNED NOT NULL,
  grado      TINYINT UNSIGNED NOT NULL,
  alergias   TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
── FIN CONEXIÓN ────────────────────────────────────────────────── */

// ── BANCO DE PREGUNTAS ────────────────────────────────────────────
$banco = [
 
  // ── ALERGIAS ALIMENTARIAS ────────────────────────────────────────
 
  [
    "q"   => "¿Cuál es la diferencia clínica principal entre una alergia alimentaria y una intolerancia alimentaria?",
    "ops" => [
      "La alergia involucra al sistema inmunológico; la intolerancia no",
      "La intolerancia es siempre más grave que la alergia",
      "Ambas producen exactamente los mismos síntomas",
      "La alergia solo afecta el sistema digestivo"
    ],
    "r"   => 0,
    "exp" => "La alergia activa una respuesta inmune (producción de IgE), mientras que la intolerancia es una reacción metabólica sin participación del sistema inmune."
  ],
 
  [
    "q"   => "¿Qué anticuerpo del sistema inmune se produce principalmente durante una reacción alérgica a alimentos?",
    "ops" => ["IgA", "IgM", "IgE", "IgG"],
    "r"   => 2,
    "exp" => "La inmunoglobulina E (IgE) es el anticuerpo clave en las alergias alimentarias inmediatas. Su unión al alérgeno desencadena la liberación de histamina."
  ],
 
  [
    "q"   => "¿Cuál de los siguientes síntomas es EXCLUSIVO de una reacción anafiláctica grave por alergia alimentaria?",
    "ops" => [
      "Dolor abdominal leve",
      "Caída brusca de la presión arterial y colapso circulatorio",
      "Hinchazón moderada de labios",
      "Picazón localizada en la piel"
    ],
    "r"   => 1,
    "exp" => "La anafilaxia puede causar shock anafiláctico con caída severa de la presión arterial, lo que puede ser mortal en minutos sin tratamiento con epinefrina."
  ],
 
  [
    "q"   => "¿Cuáles son los 3 alérgenos alimentarios responsables del mayor número de reacciones graves en niños y adolescentes?",
    "ops" => [
      "Maíz, arroz y quinua",
      "Maní, leche de vaca y huevo",
      "Espinaca, brócoli y zanahoria",
      "Azúcar, sal y pimienta"
    ],
    "r"   => 1,
    "exp" => "El maní, la leche de vaca y el huevo encabezan las estadísticas de alergias pediátricas a nivel mundial según la Organización Mundial de Alergias (WAO)."
  ],
 
  [
    "q"   => "¿Por qué una persona alérgica al látex puede reaccionar también al consumir aguacate, kiwi o plátano?",
    "ops" => [
      "Porque estos alimentos contienen látex artificial",
      "Por reactividad cruzada: proteínas similares al látex están presentes en esas frutas",
      "Porque el látex se usa como conservante en esas frutas",
      "No existe relación entre el látex y los alimentos"
    ],
    "r"   => 1,
    "exp" => "El síndrome látex-fruta ocurre por reactividad cruzada: proteínas estructuralmente similares al látex se encuentran en frutas como aguacate, kiwi, plátano y castaña."
  ],
 
  [
    "q"   => "¿Qué debe hacer inmediatamente una persona que sufre una reacción anafiláctica por alergia alimentaria?",
    "ops" => [
      "Tomar un antihistamínico oral y esperar",
      "Aplicar epinefrina (adrenalina) con autoinyector y llamar a emergencias",
      "Beber agua abundante para diluir el alérgeno",
      "Acostarse boca abajo para facilitar la respiración"
    ],
    "r"   => 1,
    "exp" => "La epinefrina (adrenalina) es el único tratamiento de primera línea para la anafilaxia. Debe aplicarse de inmediato y siempre acudir a urgencias aunque mejore."
  ],
 
  // ── INTOLERANCIAS ALIMENTARIAS ────────────────────────────────────
 
  [
    "q"   => "¿Qué enzima le falta o tiene deficiente una persona con intolerancia a la lactosa?",
    "ops" => ["Amilasa", "Lipasa", "Lactasa", "Pepsina"],
    "r"   => 2,
    "exp" => "La lactasa es la enzima intestinal que desdobla la lactosa en glucosa y galactosa. Sin suficiente lactasa, la lactosa fermenta en el colon causando gases, hinchazón y diarrea."
  ],
 
  [
    "q"   => "¿Cuál es la diferencia entre la enfermedad celíaca y la sensibilidad al gluten no celíaca?",
    "ops" => [
      "Son exactamente la misma enfermedad con distinto nombre",
      "La celíaca causa daño autoinmune en el intestino delgado; la sensibilidad no celíaca no produce ese daño",
      "La sensibilidad no celíaca es siempre más grave",
      "La celíaca solo afecta a adultos mayores de 40 años"
    ],
    "r"   => 1,
    "exp" => "La celiaquía es una enfermedad autoinmune que destruye las vellosidades intestinales. La sensibilidad al gluten no celíaca produce síntomas similares pero sin daño inmunológico ni intestinal comprobable."
  ],
 
  [
    "q"   => "Una persona con intolerancia a la fructosa debe evitar principalmente:",
    "ops" => [
      "La leche y sus derivados",
      "El trigo, la cebada y el centeno",
      "Las frutas dulces, la miel y los jugos industriales con jarabe de maíz",
      "Los mariscos y el pescado azul"
    ],
    "r"   => 2,
    "exp" => "La fructosa es el azúcar de las frutas y la miel. El jarabe de maíz de alta fructosa se usa ampliamente en bebidas y alimentos procesados, siendo problemático para estos pacientes."
  ],
 
  [
    "q"   => "¿Qué alimentos contienen FODMAP y por qué son problemáticos para algunas personas?",
    "ops" => [
      "Alimentos con proteínas que dañan los riñones",
      "Carbohidratos fermentables de cadena corta que generan gases y malestar en intestinos sensibles",
      "Grasas saturadas que elevan el colesterol",
      "Vitaminas liposolubles que se acumulan en el hígado"
    ],
    "r"   => 1,
    "exp" => "Los FODMAP (oligosacáridos, disacáridos, monosacáridos y polioles fermentables) son carbohidratos que el intestino delgado absorbe mal, fermentando en el colon y causando síntomas en el síndrome de intestino irritable."
  ],
 
  [
    "q"   => "¿Por qué la intolerancia alimentaria NO es una emergencia médica como sí puede serlo la alergia?",
    "ops" => [
      "Porque la intolerancia no causa ningún síntoma físico",
      "Porque la intolerancia no activa al sistema inmune ni produce anafilaxia",
      "Porque la intolerancia solo afecta a personas mayores",
      "Porque la intolerancia se cura sola en pocos días"
    ],
    "r"   => 1,
    "exp" => "La intolerancia produce síntomas digestivos incómodos pero no activa la respuesta inmune IgE, por lo que no puede causar anafilaxia. Sin embargo, afecta significativamente la calidad de vida."
  ],
 
  // ── NUTRICIÓN Y VITAMINAS ─────────────────────────────────────────
 
  [
    "q"   => "¿Qué consecuencia grave puede tener la deficiencia prolongada de vitamina D en adolescentes?",
    "ops" => [
      "Pérdida de la visión nocturna",
      "Raquitismo, debilidad ósea y mayor riesgo de fracturas",
      "Caída del cabello permanente",
      "Reducción del coeficiente intelectual"
    ],
    "r"   => 1,
    "exp" => "La vitamina D es esencial para la absorción de calcio. Su deficiencia en etapa de crecimiento provoca raquitismo, huesos débiles y deformidades esqueléticas."
  ],
 
  [
    "q"   => "¿Cuál es la función principal del hierro en el organismo y qué ocurre cuando hay deficiencia?",
    "ops" => [
      "Regula la temperatura corporal; su falta causa fiebre crónica",
      "Transporta oxígeno en la sangre; su deficiencia causa anemia ferropénica",
      "Fortalece el esmalte dental; su falta causa caries severas",
      "Produce insulina; su falta causa diabetes tipo 1"
    ],
    "r"   => 1,
    "exp" => "El hierro es componente esencial de la hemoglobina, proteína que transporta oxígeno. Su deficiencia causa anemia ferropénica: fatiga, palidez, dificultad para concentrarse y bajo rendimiento escolar."
  ],
 
  [
    "q"   => "¿Qué vitamina es fundamental para la síntesis de colágeno y la cicatrización de heridas, y en qué alimentos se encuentra en mayor concentración?",
    "ops" => [
      "Vitamina K — presente en aceites vegetales",
      "Vitamina B12 — presente en carnes rojas",
      "Vitamina C — presente en pimientos, guayaba y cítricos",
      "Vitamina A — presente en productos lácteos"
    ],
    "r"   => 2,
    "exp" => "La vitamina C (ácido ascórbico) es indispensable para sintetizar colágeno, cicatrizar heridas y fortalecer el sistema inmune. El pimiento rojo y la guayaba tienen más vitamina C que la naranja."
  ],
 
  [
    "q"   => "¿Por qué los ácidos grasos omega-3 son especialmente importantes durante la adolescencia?",
    "ops" => [
      "Porque aceleran el crecimiento del cabello y las uñas",
      "Porque favorecen el desarrollo cerebral, reducen la inflamación y protegen el corazón",
      "Porque aumentan la producción de melanina en la piel",
      "Porque son la única fuente de energía del cerebro"
    ],
    "r"   => 1,
    "exp" => "Los omega-3 (DHA y EPA) son fundamentales para el desarrollo y funcionamiento del cerebro, la salud cardiovascular y la reducción de inflamación. Se encuentran en pescados grasos, nueces y semillas de chía."
  ],
 
];

// ── LÓGICA DE SECCIONES ───────────────────────────────────────────
$seccion = $_SESSION["seccion"] ?? "registro"; // registro | quiz | juego

// PROCESAR REGISTRO
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["accion"]) && $_POST["accion"] === "registro") {
    $nombre   = trim($_POST["nombre"]   ?? "");
    $edad     = (int)($_POST["edad"]    ?? 0);
    $grado    = (int)($_POST["grado"]   ?? 0);

    // Unir checkboxes + campo libre
    $seleccionadas = $_POST["opciones_alergia"] ?? [];
    $libre         = trim($_POST["alergias_texto"] ?? "");
    $alergias      = implode(", ", $seleccionadas);
    if ($libre) $alergias .= ($alergias ? ", " : "") . $libre;
    if (!$alergias) $alergias = "Ninguna";

    /* ── INSERT BD (descomenta cuando tengas MySQL activo) ──────────
    $stmt = $conn->prepare(
        "INSERT INTO estudiantes (nombre, edad, grado, alergias) VALUES (?, ?, ?, ?)"
    );
    $stmt->bind_param("siis", $nombre, $edad, $grado, $alergias);
    $stmt->execute();
    $stmt->close();
    ── FIN INSERT ──────────────────────────────────────────────── */

    // Guardar en sesión y preparar quiz
    $_SESSION["nombre"]   = $nombre;
    $_SESSION["grado"]    = $grado;
    $_SESSION["alergias"] = $alergias;

    // Mezclar y tomar 7 preguntas
    shuffle($banco);
    $_SESSION["preguntas"]  = array_slice($banco, 0, 7);
    $_SESSION["pregActual"] = 0;
    $_SESSION["correctas"]  = 0;
    $_SESSION["seccion"]    = "quiz";

    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}

// PROCESAR RESPUESTA DEL QUIZ
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["accion"]) && $_POST["accion"] === "responder") {
    $idx      = (int)$_POST["idx"];
    $elegida  = (int)$_POST["elegida"];
    $pregs    = $_SESSION["preguntas"];
    $correcta = $pregs[$idx]["r"];

    $_SESSION["ultima_correcta"] = ($elegida === $correcta);
    $_SESSION["ultima_exp"]      = $pregs[$idx]["exp"];
    $_SESSION["ultima_correcta_idx"] = $correcta;
    $_SESSION["ultima_elegida"]  = $elegida;

    if ($elegida === $correcta) $_SESSION["correctas"]++;

    $siguiente = $idx + 1;
    if ($siguiente >= count($pregs)) {
        // Fin del quiz
        if ($_SESSION["correctas"] === count($pregs)) {
            $_SESSION["seccion"] = "juego";
        } else {
            $_SESSION["seccion"]    = "quiz_fin";
        }
        $_SESSION["pregActual"] = $siguiente;
    } else {
        $_SESSION["pregActual"] = $siguiente;
        $_SESSION["seccion"]    = "quiz";
    }
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}

// REINICIAR
if (isset($_GET["reiniciar"])) {
    session_destroy();
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}

// Leer sesión actualizada
$seccion    = $_SESSION["seccion"]    ?? "registro";
$nombre     = $_SESSION["nombre"]     ?? "";
$preguntas  = $_SESSION["preguntas"]  ?? [];
$pregActual = $_SESSION["pregActual"] ?? 0;
$correctas  = $_SESSION["correctas"]  ?? 0;
$total      = count($preguntas);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Healthy Kids</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;900&family=Baloo+2:wght@700;800&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --verde-oscuro: #1b4332;
      --verde-medio:  #2d6a4f;
      --verde-claro:  #52b788;
      --verde-neon:   #95f985;
      --amarillo:     #f9c74f;
      --rojo:         #ff6b6b;
    }
    * { box-sizing:border-box; }
    body {
      font-family:'Nunito',sans-serif;
      background: linear-gradient(160deg,#1b4332 0%,#2d6a4f 50%,#40916c 100%);
      min-height:100vh; color:#2d3748;
    }

    /* ── HEADER ── */
    .hk-header {
      background:rgba(0,0,0,.35);
      backdrop-filter:blur(8px);
      border-bottom:1px solid rgba(255,255,255,.1);
      padding:1.2rem 0;
    }
    .hk-brand {
      font-family:'Baloo 2',cursive; font-weight:800;
      font-size:clamp(1.8rem,5vw,2.8rem);
      color:#fff; letter-spacing:-1px; margin:0;
    }
    .hk-tagline { color:var(--verde-neon); font-weight:700; margin:0; font-size:.95rem; }

    /* ── CARD ── */
    .hk-card {
      background:#fff; border-radius:24px;
      padding:2rem 1.8rem;
      box-shadow:0 8px 40px rgba(0,0,0,.25);
      border:2px solid rgba(82,183,136,.2);
      animation:slideUp .45s ease both;
    }
    @keyframes slideUp {
      from{opacity:0;transform:translateY(28px)}
      to  {opacity:1;transform:translateY(0)}
    }
    .hk-card-title {
      font-family:'Baloo 2',cursive; font-size:1.6rem;
      color:var(--verde-oscuro); font-weight:800;
      border-bottom:3px dashed var(--verde-claro);
      padding-bottom:.7rem; margin-bottom:1.4rem;
    }

    /* ── INPUTS ── */
    .hk-label { font-weight:700; color:var(--verde-oscuro); display:block; margin-bottom:.35rem; }
    .hk-input {
      border:2px solid #d4edda; border-radius:12px;
      padding:.65rem 1rem; font-family:'Nunito',sans-serif;
      font-size:1rem; width:100%;
      transition:border-color .2s, box-shadow .2s;
    }
    .hk-input:focus { border-color:var(--verde-claro); box-shadow:0 0 0 4px rgba(82,183,136,.2); outline:none; }

    /* ── CHECKBOXES ALERGIAS ── */
    .alergia-label {
      display:block; border:2px solid #d4edda; border-radius:12px;
      padding:.45rem .6rem; font-weight:700; font-size:.85rem;
      color:var(--verde-oscuro); background:#f0fdf4;
      cursor:pointer; text-align:center; transition:all .2s;
    }
    .alergia-cb:checked + .alergia-label {
      background:var(--verde-oscuro); color:var(--verde-neon);
      border-color:var(--verde-oscuro); transform:scale(1.05);
    }
    .alergia-cb { display:none; }

    /* ── BOTONES ── */
    .hk-btn {
      background:linear-gradient(135deg,var(--verde-claro),var(--verde-oscuro));
      color:#fff; border:none; border-radius:50px;
      padding:.8rem 2.2rem; font-family:'Baloo 2',cursive;
      font-size:1.1rem; font-weight:700; cursor:pointer;
      transition:transform .2s, box-shadow .2s;
      box-shadow:0 4px 20px rgba(27,67,50,.35);
    }
    .hk-btn:hover { transform:translateY(-3px) scale(1.03); box-shadow:0 8px 28px rgba(27,67,50,.45); }
    .hk-btn-outline {
      background:transparent; color:var(--verde-oscuro);
      border:2.5px solid var(--verde-claro); border-radius:50px;
      padding:.7rem 1.8rem; font-family:'Baloo 2',cursive;
      font-size:1rem; font-weight:700; cursor:pointer; transition:all .2s;
      text-decoration:none; display:inline-block;
    }
    .hk-btn-outline:hover { background:var(--verde-claro); color:#fff; }

    /* ── QUIZ ── */
    .quiz-pregunta {
      font-family:'Baloo 2',cursive; font-size:1.25rem;
      color:var(--verde-oscuro); font-weight:700; line-height:1.45;
    }
    .opcion-btn {
      width:100%; background:#f0fdf4; border:2.5px solid #d4edda;
      border-radius:14px; padding:.85rem 1rem;
      font-family:'Nunito',sans-serif; font-size:1rem; font-weight:700;
      color:var(--verde-oscuro); text-align:left; cursor:pointer;
      display:flex; align-items:center; gap:.6rem; transition:all .2s;
      margin-bottom:.6rem;
    }
    .opcion-btn:hover { background:#d8f3dc; border-color:var(--verde-claro); transform:translateX(4px); }
    .opcion-correcta  { background:#d8f3dc !important; border-color:#52b788 !important; }
    .opcion-incorrecta{ background:#ffe4e4 !important; border-color:var(--rojo) !important; }
    .opcion-letra {
      background:var(--verde-oscuro); color:var(--verde-neon);
      border-radius:8px; padding:2px 9px;
      font-family:'Baloo 2',cursive; flex-shrink:0;
    }

    /* Barra progreso */
    .hk-progress-bar {
      height:10px; border-radius:10px;
      background:linear-gradient(90deg,var(--verde-claro),var(--verde-neon));
      transition:width .4s ease;
    }

    /* Tablero premios */
    .premio-item {
      background:rgba(27,67,50,.08); border:1.5px solid #d4edda;
      border-radius:10px; padding:.3rem .8rem;
      font-family:'Baloo 2',cursive; font-size:.88rem;
      color:#555; margin-bottom:3px; transition:all .3s;
    }
    .premio-activo {
      background:var(--amarillo); color:var(--verde-oscuro);
      border-color:var(--amarillo); font-weight:800;
      transform:scale(1.04); box-shadow:0 0 14px rgba(249,199,79,.5);
    }
    .premio-ganado { background:#d8f3dc; color:var(--verde-oscuro); border-color:var(--verde-claro); }

    /* Retroalimentación */
    .feedback-box {
      border-radius:12px; padding:.85rem 1rem;
      font-weight:600; font-size:.95rem; margin-top:1rem;
    }
    .feedback-ok  { background:#d8f3dc; border-left:4px solid var(--verde-claro); color:#1b4332; }
    .feedback-mal { background:#ffe4e4; border-left:4px solid var(--rojo); color:#7f1d1d; }

    /* Badge num pregunta */
    .num-badge {
      background:var(--verde-oscuro); color:var(--verde-neon);
      border-radius:50px; padding:.25rem .9rem;
      font-family:'Baloo 2',cursive; font-weight:700; font-size:.9rem;
    }

    /* ── JUEGO CANVAS ── */
    #gameCanvas {
      display:block; margin:0 auto;
      border-radius:18px; border:3px solid rgba(255,255,255,.25);
      box-shadow:0 12px 40px rgba(0,0,0,.4); max-width:100%;
    }
    .game-hud {
      display:flex; justify-content:space-between;
      background:rgba(0,0,0,.3); border-radius:14px 14px 0 0;
      padding:10px 18px; color:#fff; font-family:'Baloo 2',cursive;
    }
    .hud-val { color:var(--verde-neon); font-weight:800; font-size:1.3rem; }
    .game-legend {
      background:rgba(0,0,0,.25); border-radius:0 0 14px 14px;
      color:#fff; padding:8px 16px; font-size:.82rem;
      display:flex; flex-wrap:wrap; gap:10px; justify-content:center;
    }
    .canvas-wrap { position:relative; }
    .game-overlay {
      position:absolute; inset:0; display:flex; flex-direction:column;
      align-items:center; justify-content:center;
      background:rgba(0,0,0,.72); border-radius:18px;
      color:#fff; text-align:center; padding:20px;
      font-family:'Baloo 2',cursive;
    }
    .game-overlay h2 { color:var(--verde-neon); font-size:1.9rem; }

    /* ── FOOTER ── */
    .hk-footer { background:rgba(0,0,0,.4); color:rgba(255,255,255,.6); font-size:.88rem; padding:1rem 0; margin-top:3rem; }

    /* ── RESULTADO QUIZ FIN ── */
    .result-icon { font-size:4rem; display:block; }
    .result-titulo { font-family:'Baloo 2',cursive; font-size:1.9rem; color:var(--verde-oscuro); font-weight:800; }
    .premio-badge {
      font-family:'Baloo 2',cursive; font-size:1.8rem; font-weight:800;
      color:var(--verde-oscuro); background:var(--amarillo);
      border-radius:50px; padding:.35rem 1.4rem; display:inline-block;
      box-shadow:0 4px 14px rgba(249,199,79,.4);
    }
  </style>
</head>
<body>

<!-- ════ HEADER ════ -->
<header class="hk-header text-center">
  <span style="font-size:2.2rem">🥦</span>
  <h1 class="hk-brand">Healthy Kids</h1>
  <p class="hk-tagline">¡Aprende a comer sano y diviértete!</p>
</header>

<main class="container py-5">
<div class="row justify-content-center">
<div class="col-12 col-md-10 col-lg-9">

<?php
// ════════════════════════════════════════════════════════════════
//  SECCIÓN 1: FORMULARIO DE REGISTRO
// ════════════════════════════════════════════════════════════════
if ($seccion === "registro"):
?>
<div class="hk-card">
  <h2 class="hk-card-title">📋 Registro de Estudiante</h2>
  <form method="POST" action="">
    <input type="hidden" name="accion" value="registro"/>

    <!-- NOMBRE -->
    <div class="mb-4">
      <label class="hk-label">👤 Nombre completo</label>
      <input type="text" name="nombre" class="hk-input" placeholder="Escribe tu nombre..." required maxlength="100"/>
    </div>

    <!-- EDAD -->
    <div class="mb-4">
      <label class="hk-label">🎂 Edad</label>
      <input type="number" name="edad" class="hk-input" placeholder="Ej: 14" min="10" max="20" required/>
    </div>

    <!-- GRADO -->
    <div class="mb-4">
      <label class="hk-label">🏫 Grado</label>
      <select name="grado" class="hk-input" required>
        <option value="" disabled selected>Selecciona tu grado</option>
        <?php for ($g = 6; $g <= 11; $g++): ?>
        <option value="<?= $g ?>">Grado <?= $g ?>°</option>
        <?php endfor; ?>
      </select>
    </div>

    <!-- ALERGIAS CHECKBOXES -->
    <div class="mb-3">
      <label class="hk-label">🚨 Alergias o intolerancias</label>
      <p style="font-size:.85rem;color:#718096;margin-bottom:.6rem">Selecciona todo lo que aplique:</p>
      <div class="row g-2 mb-3">
        <?php
        $opciones = ["Gluten","Lactosa","Mariscos","Frutos secos","Huevo","Soya","Maní","Trigo"];
        foreach ($opciones as $op):
          $id = "al_" . preg_replace('/\s+/', '_', strtolower($op));
        ?>
        <div class="col-6 col-sm-3">
          <input type="checkbox" class="alergia-cb" id="<?= $id ?>" name="opciones_alergia[]" value="<?= $op ?>"/>
          <label class="alergia-label" for="<?= $id ?>"><?= $op ?></label>
        </div>
        <?php endforeach; ?>
      </div>
      <label class="hk-label" style="font-size:.9rem">✏️ Otra alergia o intolerancia:</label>
      <textarea name="alergias_texto" rows="2" class="hk-input" placeholder="Ej: Intolerancia a la fructosa…"></textarea>
    </div>

    <div class="text-center mt-4">
      <button type="submit" class="hk-btn">¡Guardar y comenzar el Quiz! 🚀</button>
    </div>
  </form>
</div>

<?php
// ════════════════════════════════════════════════════════════════
//  SECCIÓN 2: QUIZ (pregunta por pregunta)
// ════════════════════════════════════════════════════════════════
elseif ($seccion === "quiz"):
  $p       = $preguntas[$pregActual];
  $letras  = ["A","B","C","D"];
  $premios = ["🥉 Bronce","🥈 Plata","🥇 Oro","💎 Diamante","🌟 Experto","🏆 Campeón","👑 ¡Healthy Champion!"];
  $pct     = ($pregActual / $total) * 100;

  // ¿Hubo retroalimentación de pregunta anterior?
  $fueCorrecta  = $_SESSION["ultima_correcta"]    ?? null;
  $expAnterior  = $_SESSION["ultima_exp"]          ?? "";
  unset($_SESSION["ultima_correcta"], $_SESSION["ultima_exp"],
        $_SESSION["ultima_correcta_idx"], $_SESSION["ultima_elegida"]);
?>
<div class="row g-4">

  <!-- Tablero de premios -->
  <div class="col-12 col-md-4 order-md-2">
    <div class="hk-card">
      <h6 class="hk-card-title" style="font-size:1rem">🏆 Premios</h6>
      <?php foreach (array_reverse($premios, true) as $ni => $pr):
        $clase = ($ni === $correctas) ? "premio-activo" : ($ni < $correctas ? "premio-ganado" : "");
      ?>
      <div class="premio-item <?= $clase ?>"><?= $pr ?></div>
      <?php endforeach; ?>
      <hr/>
      <div style="font-size:.85rem;color:#555">
        <strong>Estudiante:</strong> <?= htmlspecialchars($nombre) ?><br/>
        <strong>Correctas:</strong> <?= $correctas ?>/<?= $pregActual ?>
      </div>
    </div>
  </div>

  <!-- Pregunta -->
  <div class="col-12 col-md-8 order-md-1">

    <?php if ($fueCorrecta !== null): ?>
    <div class="feedback-box <?= $fueCorrecta ? 'feedback-ok' : 'feedback-mal' ?> mb-3">
      <?= $fueCorrecta ? '✅ ¡Correcto! ' : '❌ Incorrecto. ' ?>
      <?= htmlspecialchars($expAnterior) ?>
    </div>
    <?php endif; ?>

    <div class="hk-card">
      <!-- Progreso -->
      <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="num-badge">Pregunta <?= $pregActual+1 ?> de <?= $total ?></span>
        <span style="font-size:.85rem;color:#718096"><?= $correctas ?> correctas</span>
      </div>
      <div class="progress mb-4" style="height:10px;border-radius:10px;background:#d4edda">
        <div class="hk-progress-bar" style="width:<?= $pct ?>%"></div>
      </div>

      <!-- Texto pregunta -->
      <p class="quiz-pregunta mb-4"><?= htmlspecialchars($p["q"]) ?></p>

      <!-- Opciones -->
      <form method="POST" action="">
        <input type="hidden" name="accion"  value="responder"/>
        <input type="hidden" name="idx"     value="<?= $pregActual ?>"/>
        <?php foreach ($p["ops"] as $i => $op): ?>
        <button type="submit" name="elegida" value="<?= $i ?>" class="opcion-btn">
          <span class="opcion-letra"><?= $letras[$i] ?></span>
          <?= htmlspecialchars($op) ?>
        </button>
        <?php endforeach; ?>
      </form>

    </div>
  </div>
</div>

<?php
// ════════════════════════════════════════════════════════════════
//  SECCIÓN 3: FIN DEL QUIZ (no ganó el juego)
// ════════════════════════════════════════════════════════════════
elseif ($seccion === "quiz_fin"):
  $premios = ["🥉 Bronce","🥈 Plata","🥇 Oro","💎 Diamante","🌟 Experto","🏆 Campeón","👑 ¡Healthy Champion!"];
  $nivel   = min($correctas, count($premios)-1);
?>
<div class="hk-card text-center">
  <span class="result-icon">
    <?= ($correctas/$total >= .7) ? "🌟" : "💪" ?>
  </span>
  <h2 class="result-titulo mt-2">
    <?= ($correctas/$total >= .7) ? "¡Muy bien! ¡Casi lo logras!" : "¡Sigue practicando!" ?>
  </h2>
  <p style="font-size:1.05rem;color:#4a5568;margin:.8rem 0">
    <?= htmlspecialchars($nombre) ?>, acertaste
    <strong><?= $correctas ?></strong> de <strong><?= $total ?></strong> preguntas.<br/>
    <?= ($correctas === $total-1)
        ? "¡Faltó solo una! Inténtalo de nuevo para desbloquear el juego. 🎮"
        : "Repasa un poco sobre alimentación saludable y vuelve a intentarlo. 📚" ?>
  </p>
  <div class="premio-badge mb-4"><?= $premios[$nivel] ?></div>
  <a href="?reiniciar=1" class="hk-btn">🔄 Intentar de nuevo</a>
</div>

<?php
// ════════════════════════════════════════════════════════════════
//  SECCIÓN 4: JUEGO PREMIO 🎮
// ════════════════════════════════════════════════════════════════
elseif ($seccion === "juego"):
?>
 
<!-- Aviso de felicitación -->
<div class="text-center mb-4">
  <span style="background:#95f985;color:#1b4332;border-radius:50px;padding:10px 24px;
               font-family:'Baloo 2',cursive;font-weight:800;font-size:1.1rem;display:inline-block;
               box-shadow:0 4px 15px rgba(149,249,133,.3)">
    🏆 ¡Perfecto, <?= htmlspecialchars($nombre) ?>! Ganaste la Sopa de Letras
  </span>
</div>
 
<div class="hk-card" style="max-width:700px;margin:0 auto">
  <h2 class="hk-card-title">🔤 Sopa de Letras — Alimentación Saludable</h2>
 
  <!-- Instrucciones -->
  <div style="background:#f0fdf4;border-radius:12px;padding:.85rem 1rem;margin-bottom:1.2rem;
              border-left:4px solid #52b788;font-size:.93rem;color:#1b4332;font-weight:600">
    📌 Haz clic en la primera letra y luego en la última para seleccionar una palabra.
    Puedes buscarla en cualquier dirección: horizontal, vertical o diagonal.
  </div>
 
  <!-- HUD -->
  <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <span style="font-family:'Baloo 2',cursive;color:#1b4332;font-weight:800;font-size:1rem">
      ✅ Encontradas: <span id="encontradas" style="color:#52b788">0</span> / 10
    </span>
    <span style="font-family:'Baloo 2',cursive;color:#1b4332;font-weight:800;font-size:1rem">
      ⏱️ Tiempo: <span id="cronometro" style="color:#f9c74f">00:00</span>
    </span>
    <button onclick="reiniciarSopa()" style="background:#1b4332;color:#95f985;border:none;
            border-radius:50px;padding:.4rem 1.2rem;font-family:'Baloo 2',cursive;
            font-weight:700;font-size:.9rem;cursor:pointer">
      🔄 Nueva partida
    </button>
  </div>
 
  <!-- Grid sopa de letras -->
  <div style="overflow-x:auto">
    <div id="sopaGrid" style="display:inline-grid;gap:3px;margin:0 auto;user-select:none"></div>
  </div>
 
  <!-- Lista de palabras -->
  <div class="mt-4">
    <h6 style="font-family:'Baloo 2',cursive;color:#1b4332;font-weight:800;margin-bottom:.8rem">
      🔍 Palabras a encontrar:
    </h6>
    <div id="listaPalabras" style="display:flex;flex-wrap:wrap;gap:.5rem"></div>
  </div>
 
  <!-- Mensaje victoria -->
  <div id="mensajeVictoria" style="display:none;margin-top:1.5rem;text-align:center;
       background:linear-gradient(135deg,#1b4332,#2d6a4f);border-radius:16px;
       padding:1.5rem;color:#fff">
    <div style="font-size:3rem">🎉</div>
    <h3 style="font-family:'Baloo 2',cursive;color:#95f985;font-size:1.8rem">¡Ganaste!</h3>
    <p style="margin:.5rem 0">Encontraste las 10 palabras en <strong id="tiempoFinal" style="color:#f9c74f"></strong></p>
    <div class="d-flex gap-3 justify-content-center flex-wrap mt-3">
      <button onclick="reiniciarSopa()" style="background:#95f985;color:#1b4332;border:none;
              border-radius:50px;padding:.7rem 1.8rem;font-family:'Baloo 2',cursive;
              font-weight:800;font-size:1rem;cursor:pointer">🔄 Jugar de nuevo</button>
      <a href="?reiniciar=1" style="background:transparent;color:#fff;border:2px solid #fff;
         border-radius:50px;padding:.65rem 1.6rem;font-family:'Baloo 2',cursive;
         font-weight:700;font-size:.95rem;text-decoration:none">🏠 Inicio</a>
    </div>
  </div>
</div>
 
<!-- Curiosidades -->
<div class="hk-card mt-4" style="max-width:700px;margin:20px auto 0">
  <h6 style="font-family:'Baloo 2',cursive;color:#1b4332;font-weight:800">🌿 ¿Sabías que…?</h6>
  <p id="factTxt" style="color:#2d3748;line-height:1.6;margin:0"></p>
</div>
 
<script>
// ══════════════════════════════════════════════════════════════════
//  SOPA DE LETRAS — 15×15 con 10 palabras temáticas
// ══════════════════════════════════════════════════════════════════
 
const PALABRAS_BASE = [
  { palabra: "VITAMINA",    pista: "Nutriente esencial para el cuerpo" },
  { palabra: "ALERGIA",     pista: "Reacción del sistema inmune a un alimento" },
  { palabra: "LACTOSA",     pista: "Azúcar de la leche de vaca" },
  { palabra: "GLUTEN",      pista: "Proteína del trigo que afecta a celiacos" },
  { palabra: "PROTEINA",    pista: "Macronutriente que construye los músculos" },
  { palabra: "CALCIO",      pista: "Mineral esencial para los huesos" },
  { palabra: "HIERRO",      pista: "Mineral que transporta oxígeno en la sangre" },
  { palabra: "CELIAQUIA",   pista: "Enfermedad autoinmune por intolerancia al gluten" },
  { palabra: "NUTRICION",   pista: "Ciencia que estudia los alimentos y la salud" },
  { palabra: "ANAFILAXIA",  pista: "Reacción alérgica grave y potencialmente mortal" },
];
 
const COLS = 15, ROWS = 15;
const DIRS = [
  [0,1],[1,0],[1,1],[0,-1],[-1,0],[-1,-1],[1,-1],[-1,1]
];
const LETRAS = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 
let grid        = [];
let palabrasColocadas = [];
let encontradasSet   = new Set();
let selInicio   = null;
let selFin      = null;
let celdas      = [];
let segundos    = 0;
let timerID     = null;
let jugando     = false;
 
// ── GENERAR GRID ───────────────────────────────────────────────────
function generarGrid() {
  // Inicializar vacío
  grid = Array.from({length:ROWS}, ()=>Array(COLS).fill(""));
  palabrasColocadas = [];
 
  // Intentar colocar cada palabra
  const shuffled = [...PALABRAS_BASE].sort(()=>Math.random()-.5);
  for (const item of shuffled) {
    colocarPalabra(item.palabra, item.pista);
  }
 
  // Rellenar espacios vacíos
  for (let r=0;r<ROWS;r++)
    for (let c=0;c<COLS;c++)
      if (!grid[r][c]) grid[r][c] = LETRAS[Math.floor(Math.random()*26)];
}
 
function colocarPalabra(palabra, pista) {
  const len = palabra.length;
  let intentos = 0;
  while (intentos < 200) {
    intentos++;
    const dir = DIRS[Math.floor(Math.random()*DIRS.length)];
    const dr = dir[0], dc = dir[1];
    const startR = Math.floor(Math.random()*ROWS);
    const startC = Math.floor(Math.random()*COLS);
 
    // Verificar que cabe
    const endR = startR + dr*(len-1);
    const endC = startC + dc*(len-1);
    if (endR<0||endR>=ROWS||endC<0||endC>=COLS) continue;
 
    // Verificar colisiones
    let ok = true;
    for (let i=0;i<len;i++) {
      const r=startR+dr*i, c=startC+dc*i;
      if (grid[r][c] && grid[r][c] !== palabra[i]) { ok=false; break; }
    }
    if (!ok) continue;
 
    // Colocar
    const celdsList = [];
    for (let i=0;i<len;i++) {
      const r=startR+dr*i, c=startC+dc*i;
      grid[r][c] = palabra[i];
      celdsList.push([r,c]);
    }
    palabrasColocadas.push({ palabra, pista, celdas: celdsList });
    return true;
  }
  return false;
}
 
// ── RENDERIZAR ─────────────────────────────────────────────────────
function renderGrid() {
  const cont = document.getElementById("sopaGrid");
  cont.style.gridTemplateColumns = `repeat(${COLS}, 1fr)`;
  cont.innerHTML = "";
  celdas = [];
 
  for (let r=0;r<ROWS;r++) {
    celdas[r] = [];
    for (let c=0;c<COLS;c++) {
      const el = document.createElement("div");
      el.textContent = grid[r][c];
      el.dataset.r = r; el.dataset.c = c;
      el.style.cssText = `
        width:36px;height:36px;display:flex;align-items:center;justify-content:center;
        font-family:'Baloo 2',cursive;font-weight:700;font-size:1rem;
        border-radius:8px;cursor:pointer;background:#f0fdf4;color:#1b4332;
        border:2px solid #d4edda;transition:all .15s;
      `;
      el.addEventListener("click", ()=>clicCelda(r,c));
      el.addEventListener("mouseenter", ()=>hoverCelda(r,c));
      cont.appendChild(el);
      celdas[r][c] = el;
    }
  }
}
 
function renderPalabras() {
  const cont = document.getElementById("listaPalabras");
  cont.innerHTML = "";
  for (const item of PALABRAS_BASE) {
    const el = document.createElement("span");
    el.id = "pal_" + item.palabra;
    el.textContent = item.palabra;
    el.title = item.pista;
    el.style.cssText = `
      padding:.35rem .9rem;border-radius:50px;border:2px solid #d4edda;
      font-family:'Baloo 2',cursive;font-weight:700;font-size:.88rem;
      color:#1b4332;background:#f0fdf4;cursor:default;transition:all .3s;
    `;
    cont.appendChild(el);
  }
}
 
// ── INTERACCIÓN ────────────────────────────────────────────────────
let hoveredCells = [];
 
function clicCelda(r, c) {
  if (!jugando) return;
  if (!selInicio) {
    selInicio = [r,c];
    pintarCelda(r,c,"seleccionada");
  } else {
    selFin = [r,c];
    verificarSeleccion();
    limpiarSeleccion();
    selInicio = null; selFin = null;
  }
}
 
function hoverCelda(r,c) {
  if (!selInicio || !jugando) return;
  // Limpiar hover anterior
  hoveredCells.forEach(([hr,hc])=>{
    const el = celdas[hr][hc];
    if (!el.dataset.encontrada && !esCeldaSeleccionada(hr,hc))
      resetCelda(hr,hc);
  });
  hoveredCells = [];
 
  // Mostrar preview de la línea
  const linea = obtenerLinea(selInicio[0], selInicio[1], r, c);
  linea.forEach(([lr,lc])=>{
    if (!celdas[lr][lc].dataset.encontrada) {
      pintarCelda(lr,lc,"hover");
      hoveredCells.push([lr,lc]);
    }
  });
}
 
function esCeldaSeleccionada(r,c) {
  return selInicio && selInicio[0]===r && selInicio[1]===c;
}
 
function obtenerLinea(r1,c1,r2,c2) {
  const dr = r2-r1, dc = c2-c1;
  const len = Math.max(Math.abs(dr),Math.abs(dc));
  if (len===0) return [[r1,c1]];
  const stepR = dr===0?0:dr/Math.abs(dr);
  const stepC = dc===0?0:dc/Math.abs(dc);
  // Solo líneas rectas y diagonales puras
  if (Math.abs(dr)!==0 && Math.abs(dc)!==0 && Math.abs(dr)!==Math.abs(dc)) return [];
  const cells = [];
  for (let i=0;i<=len;i++) cells.push([r1+stepR*i, c1+stepC*i]);
  return cells;
}
 
function verificarSeleccion() {
  const linea = obtenerLinea(selInicio[0],selInicio[1],selFin[0],selFin[1]);
  if (linea.length === 0) return;
  const texto = linea.map(([r,c])=>grid[r][c]).join("");
  const textoRev = texto.split("").reverse().join("");
 
  for (const item of palabrasColocadas) {
    if (encontradasSet.has(item.palabra)) continue;
    if (texto === item.palabra || textoRev === item.palabra) {
      // ¡Encontrada!
      encontradasSet.add(item.palabra);
      linea.forEach(([r,c])=>{
        celdas[r][c].dataset.encontrada = "1";
        pintarCelda(r,c,"encontrada");
      });
      marcarPalabraLista(item.palabra);
      document.getElementById("encontradas").textContent = encontradasSet.size;
      if (encontradasSet.size === PALABRAS_BASE.length) victoria();
      return;
    }
  }
  // Selección incorrecta — pequeño flash rojo
  linea.forEach(([r,c])=>{ if(!celdas[r][c].dataset.encontrada) pintarCelda(r,c,"error"); });
  setTimeout(()=>limpiarSeleccion(), 350);
}
 
function limpiarSeleccion() {
  hoveredCells.forEach(([r,c])=>{ if(!celdas[r][c].dataset.encontrada) resetCelda(r,c); });
  hoveredCells=[];
  if (selInicio) { const [r,c]=selInicio; if(!celdas[r][c].dataset.encontrada) resetCelda(r,c); }
  // Limpiar errores
  for(let r=0;r<ROWS;r++) for(let c=0;c<COLS;c++)
    if(!celdas[r][c].dataset.encontrada) resetCelda(r,c);
}
 
// ── ESTILOS CELDAS ─────────────────────────────────────────────────
function pintarCelda(r,c,tipo) {
  const el = celdas[r][c];
  const estilos = {
    seleccionada: "background:#f9c74f;border-color:#f9c74f;color:#1b4332;transform:scale(1.1)",
    hover:        "background:#d8f3dc;border-color:#52b788;color:#1b4332",
    encontrada:   "background:#1b4332;border-color:#1b4332;color:#95f985;transform:scale(1.05)",
    error:        "background:#ffe4e4;border-color:#ff6b6b;color:#7f1d1d",
  };
  el.style.cssText += ";" + estilos[tipo];
}
 
function resetCelda(r,c) {
  const el = celdas[r][c];
  el.style.cssText = `
    width:36px;height:36px;display:flex;align-items:center;justify-content:center;
    font-family:'Baloo 2',cursive;font-weight:700;font-size:1rem;
    border-radius:8px;cursor:pointer;background:#f0fdf4;color:#1b4332;
    border:2px solid #d4edda;transition:all .15s;
  `;
}
 
function marcarPalabraLista(palabra) {
  const el = document.getElementById("pal_" + palabra);
  if (el) {
    el.style.background = "#1b4332";
    el.style.color = "#95f985";
    el.style.borderColor = "#1b4332";
    el.style.textDecoration = "line-through";
    el.title = "¡Encontrada! ✅";
  }
}
 
// ── CRONÓMETRO ─────────────────────────────────────────────────────
function iniciarCronometro() {
  segundos = 0;
  clearInterval(timerID);
  timerID = setInterval(()=>{
    segundos++;
    const m = String(Math.floor(segundos/60)).padStart(2,"0");
    const s = String(segundos%60).padStart(2,"0");
    document.getElementById("cronometro").textContent = m+":"+s;
  }, 1000);
}
 
function tiempoFormateado() {
  const m = Math.floor(segundos/60), s = segundos%60;
  return (m>0 ? m+"m " : "") + s + "s";
}
 
// ── VICTORIA ───────────────────────────────────────────────────────
function victoria() {
  clearInterval(timerID);
  jugando = false;
  document.getElementById("tiempoFinal").textContent = tiempoFormateado();
  document.getElementById("mensajeVictoria").style.display = "block";
  document.getElementById("mensajeVictoria").scrollIntoView({behavior:"smooth"});
}
 
// ── REINICIAR ──────────────────────────────────────────────────────
function reiniciarSopa() {
  clearInterval(timerID);
  encontradasSet.clear();
  selInicio=null; selFin=null; hoveredCells=[];
  document.getElementById("encontradas").textContent = "0";
  document.getElementById("mensajeVictoria").style.display = "none";
  generarGrid();
  renderGrid();
  renderPalabras();
  jugando = true;
  iniciarCronometro();
}
 
// ── INICIAR AL CARGAR ──────────────────────────────────────────────
reiniciarSopa();
 
// ── FACTS NUTRICIONALES ────────────────────────────────────────────
const facts = [
  "🍎 La vitamina C del pimiento rojo es 3 veces mayor que la de una naranja.",
  "🥦 El calcio no solo está en la leche: la col rizada y las almendras también son fuentes excelentes.",
  "💧 El hierro de origen vegetal (no hemo) se absorbe mejor si se combina con vitamina C.",
  "🥕 La deficiencia de vitamina D afecta al 80% de la población mundial en algún momento de su vida.",
  "🍓 La anafilaxia puede ocurrir en segundos tras ingerir el alérgeno; la epinefrina salva vidas.",
  "🥑 El gluten no es dañino para todos: solo quienes tienen celiaquía o sensibilidad deben evitarlo.",
  "🌽 La lactosa está presente en muchos medicamentos y productos procesados de forma oculta.",
  "🍇 Las proteínas completas contienen los 9 aminoácidos esenciales que el cuerpo no puede producir solo.",
];
let fi=0;
function showFact(){ document.getElementById("factTxt").textContent=facts[fi]; fi=(fi+1)%facts.length; }
showFact(); setInterval(showFact,4500);
</script>
<?php endif; ?>

</div><!-- /col -->
</div><!-- /row -->
</main>

<footer class="hk-footer text-center">
  <p>🌱 Healthy Kids &copy; <?= date("Y") ?> — Media Técnica en Programación de Software</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>