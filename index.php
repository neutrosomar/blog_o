<?php
declare(strict_types=1);

$nombre = 'Omar Lozano';
$edad = 25;
$ciudad = 'Chimbote';
$carrera = 'Ingeniería de Sistemas e Informática';
$universidad = 'Universidad Nacional del Santa';
$platillo = 'Cebiche';
$hobby = 'Ajedrez';
$anio = (int) date('Y');

$fotoPath = __DIR__ . '/assets/perfil.jpg';
$foto = is_file($fotoPath) ? 'assets/perfil.jpg' : null;
$iniciales = 'OL';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?> · Blog personal</title>
  <meta name="description" content="Blog personal de <?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>, estudiante de <?= htmlspecialchars($carrera, ENT_QUOTES, 'UTF-8') ?> en la <?= htmlspecialchars($universidad, ENT_QUOTES, 'UTF-8') ?>, desde <?= htmlspecialchars($ciudad, ENT_QUOTES, 'UTF-8') ?>.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700;800&family=Source+Sans+3:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
  <header class="site-header">
    <div class="brand-mark"><?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?></div>
    <nav class="site-nav" aria-label="Principal">
      <a href="#sobre-mi">Sobre mí</a>
      <a href="#estudios">Estudios</a>
      <a href="#pasiones">Pasiones</a>
    </nav>
  </header>

  <main>
    <section class="hero" aria-label="Inicio">
      <div class="hero-media">
        <img src="assets/bahia.jpg" alt="Costa del Pacífico cerca de Chimbote" width="1600" height="1064">
      </div>
      <div class="hero-content">
        <p class="hero-kicker"><?= htmlspecialchars($ciudad, ENT_QUOTES, 'UTF-8') ?> · Perú</p>
        <h1 class="hero-name"><?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="hero-lead">
          Estudiante de <?= htmlspecialchars($carrera, ENT_QUOTES, 'UTF-8') ?> en la
          <?= htmlspecialchars($universidad, ENT_QUOTES, 'UTF-8') ?>.
        </p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="#sobre-mi">Conóceme</a>
          <a class="btn btn-ghost" href="#pasiones">Mis gustos</a>
        </div>
      </div>
    </section>

    <section class="about" id="sobre-mi">
      <div class="section">
        <p class="section-label reveal">Sobre mí</p>
        <h2 class="reveal">De Chimbote para el mundo digital</h2>
        <p class="lead reveal">
          Tengo <?= (int) $edad ?> años y vivo en <?= htmlspecialchars($ciudad, ENT_QUOTES, 'UTF-8') ?>.
          Este espacio reúne lo que estudio, lo que disfruto y un poco de quién soy.
        </p>

        <div class="about-grid">
          <div class="portrait-frame reveal">
            <div class="portrait" aria-label="Foto de perfil">
<?php if ($foto !== null): ?>
              <img src="<?= htmlspecialchars($foto, ENT_QUOTES, 'UTF-8') ?>" alt="Retrato de <?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>" width="640" height="800">
<?php else: ?>
              <div class="portrait-fallback" role="img" aria-label="Iniciales de <?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>">
                <span><?= htmlspecialchars($iniciales, ENT_QUOTES, 'UTF-8') ?></span>
              </div>
<?php endif; ?>
            </div>
          </div>

          <div class="about-copy reveal">
            <p class="intro">
              Me formo entre algoritmos, redes y sistemas, sin perder de vista el sabor del mar
              ni el silencio de un buen tablero.
            </p>
            <dl class="facts">
              <div class="fact">
                <dt>Nombre</dt>
                <dd><?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?></dd>
              </div>
              <div class="fact">
                <dt>Edad</dt>
                <dd><?= (int) $edad ?> años</dd>
              </div>
              <div class="fact">
                <dt>Ciudad</dt>
                <dd><?= htmlspecialchars($ciudad, ENT_QUOTES, 'UTF-8') ?></dd>
              </div>
              <div class="fact">
                <dt>Universidad</dt>
                <dd><?= htmlspecialchars($universidad, ENT_QUOTES, 'UTF-8') ?></dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </section>

    <section class="band" id="estudios">
      <div class="section">
        <p class="section-label reveal">Estudios</p>
        <h2 class="reveal">Ingeniería que conecta ideas</h2>
        <p class="lead reveal">
          Estudio para construir soluciones tecnológicas con criterio, lógica y mucha curiosidad.
        </p>
        <div class="study-block reveal">
          <strong><?= htmlspecialchars($carrera, ENT_QUOTES, 'UTF-8') ?></strong>
          <p>
            Carrera universitaria en la <?= htmlspecialchars($universidad, ENT_QUOTES, 'UTF-8') ?> (UNS).
            Aquí aprendo programación, bases de datos, redes y el pensamiento de sistemas que
            hace falta para resolver problemas reales.
          </p>
        </div>
      </div>
    </section>

    <section class="passions-wrap" id="pasiones">
      <div class="section">
        <p class="section-label reveal">Pasiones</p>
        <h2 class="reveal">Lo que me hace feliz</h2>
        <p class="lead reveal">
          Fuera del aula, mi día se siente completo con buen cebiche y una partida de ajedrez.
        </p>

        <div class="passion-list">
          <article class="passion-row passion-cebiche reveal">
            <div class="passion-mark" aria-hidden="true">
              <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="16" fill="none" stroke="currentColor" stroke-width="2.5"></circle>
                <path d="M14 28c4-8 16-8 20 0" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"></path>
                <circle cx="20" cy="20" r="2.2" fill="currentColor"></circle>
                <circle cx="28" cy="18" r="2.2" fill="currentColor"></circle>
              </svg>
            </div>
            <div>
              <h3><?= htmlspecialchars($platillo, ENT_QUOTES, 'UTF-8') ?></h3>
              <p>Mi platillo favorito: fresco, ácido y con el sabor del mar de mi ciudad.</p>
            </div>
          </article>

          <article class="passion-row passion-ajedrez reveal">
            <div class="passion-mark" aria-hidden="true">
              <svg viewBox="0 0 48 48">
                <path d="M18 38h12M20 38l2-10h4l2 10M22 28h4c2 0 3-2 2-4l-1-2h-6l-1 2c-1 2 0 4 2 4z" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"></path>
                <circle cx="24" cy="16" r="3.2" fill="currentColor"></circle>
              </svg>
            </div>
            <div>
              <h3><?= htmlspecialchars($hobby, ENT_QUOTES, 'UTF-8') ?></h3>
              <p>Me gusta jugar ajedrez: estrategia, paciencia y cada jugada cuenta.</p>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="footer-inner">
      <div>
        <strong><?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?></strong>
        <span>Blog personal · <?= htmlspecialchars($ciudad, ENT_QUOTES, 'UTF-8') ?></span>
      </div>
      <div>© <?= $anio ?> · <?= htmlspecialchars($universidad, ENT_QUOTES, 'UTF-8') ?></div>
    </div>
  </footer>

  <script>
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.14 });

    reveals.forEach((el) => observer.observe(el));
  </script>
</body>
</html>
