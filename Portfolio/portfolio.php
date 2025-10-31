<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body style="padding-top: 56px;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#1b263b;">
    <div class="container d-flex justify-content-between">
      <a class="navbar-brand text-white" href="#">Guillaume SIMONET</a>
      <div>
        <a class="nav-link d-inline text-white me-4" href="#hero">Accueil</a>
        <a class="nav-link d-inline text-white me-4" href="#about">À propos de moi</a>
        <a class="nav-link d-inline text-white me-4" href="#skills">Mes compétences</a>
        <a class="nav-link d-inline text-white me-4" href="#projects">Projets</a>
        <a class="nav-link d-inline text-white" href="#contact">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section id="hero" class="d-flex justify-content-center align-items-center text-center vh-100 text-white"
    style="background-color:#1b263b;">
    <div>
      <h1 class="display-3">Bienvenue sur mon Portfolio</h1>
      <p class="lead mb-4">Ce site web a pour but de présenter mes projets réalisés au fil de mon parcours scolaire.</p>

      <!-- Boutons LinkedIn et GitHub -->
      <div class="mb-4">
        <a href="https://www.linkedin.com" target="_blank" class="btn btn-outline-light me-3">
          <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linkedin.svg" alt="LinkedIn"
            style="width:20px; height:20px; vertical-align:middle; margin-right:6px;">
          LinkedIn
        </a>
        <a href="https://github.com" target="_blank" class="btn btn-outline-light">
          <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/github.svg" alt="GitHub"
            style="width:20px; height:20px; vertical-align:middle; margin-right:6px;">
          GitHub
        </a>
      </div>

      <a href="#projects" class="fs-1 text-white text-decoration-none">&#x2193;</a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-5 bg-white">
    <h2 class="text-center mb-2">À propos de moi</h2>
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
      <div class="text-center mb-4 mb-md-0 me-md-4">
        <img src="GuillaumeSIMONET.JPG" class="img-fluid rounded-circle"
          style="width:250px; height:250px; object-fit:cover;" alt="Ma photo">
      </div>
      <div class="text-center text-md-start" style="max-width:600px;">
        <p>
          Étudiant en Pré-MSC à Epitech Nancy, passionné par l'informatique et les nouvelles technologies,
          je souhaites mettre mes compétences en pratique dans le cadre d'une alternance.
          Curieux, motivé et déterminé, je cherche à développer mon expertise technique
          tout en apportant une réelle valeur ajoutée à l'entreprise qui m'accueillera.
        </p>
      </div>
    </div>
  </section>

  <div class="text-center">
  <a href="CV.pdf" download class="btn" style="background-color:#1b263b; color:white; width:300px;">
    <i class="bi bi-download me-2"></i> Télécharger mon CV
  </a>
</div>


  <!-- Coordonnées -->
  <div class="text-center mt-4" style="font-size: 1.2rem; color: #1b263b;">
    <span class="me-4">
      <i class="bi bi-envelope-fill me-1" style="font-size:1.4rem;"></i>
      <a href="mailto:guillaume.simonet@epitech.eu" class="text-decoration-none"
        style="color: #1b263b;">guillaume.simonet@epitech.eu</a>
    </span>
    <span class="me-4">
      <i class="bi bi-telephone-fill me-1" style="font-size:1.4rem;"></i>
      +33 7 68 35 70 38
    </span>
    <span>
      <i class="bi bi-geo-alt-fill me-1" style="font-size:1.4rem;"></i>
      Saint-Nicolas-de-Port
    </span>
  </div>

  <!-- Compétences Section -->
  <section id="skills" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5">Mes compétences</h2>
      <div class="row g-4 justify-content-center">

        <!-- Compétence 1 -->
        <div class="col-md-6 mb-4">
          <h5 class="mb-2">HTML & CSS</h5>
          <div class="progress" style="height: 25px;">
            <div class="progress-bar" role="progressbar" style="width: 75%; background-color:#1f4e79;"
              aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">75%</div>
          </div>
        </div>

        <!-- Compétence 2 -->
        <div class="col-md-6 mb-4">
          <h5 class="mb-2">JavaScript</h5>
          <div class="progress" style="height: 25px;">
            <div class="progress-bar" role="progressbar" style="width: 55%; background-color:#3a7ca5;"
              aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">55%</div>
          </div>
        </div>

        <!-- Compétence 3 -->
        <div class="col-md-6 mt-4">
          <h5 class="mb-2">Python</h5>
          <div class="progress" style="height: 25px;">
            <div class="progress-bar text-dark" role="progressbar" style="width: 70%; background-color:#6ca0dc;"
              aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">70%</div>
          </div>
        </div>

        <!-- Compétence 4 -->
        <div class="col-md-6 mt-4">
          <h5 class="mb-2">Git & GitHub</h5>
          <div class="progress" style="height: 25px;">
            <div class="progress-bar" role="progressbar" style="width: 80%; background-color:#41729f;"
              aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">80%</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="py-5 white">
    <div class="container">
      <h2 class="text-center mb-5">Mes Projets</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <a href="../Projet/Projet1.php" target="_blank" class="text-decoration-none text-dark">
            <div class="card h-100 shadow-sm border-0" style="transition: transform 0.3s;"
              onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
              <img src="../Projet/Projet1.png" class="responsive-img" style="height:250px; object-fit:cover;">
              <div class="card-body">
                <h5>Projet 1</h5>
                <p>Description courte du projet 1.</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <a href="../Projet/Projet2.php" target="_blank" class="text-decoration-none text-dark">
            <div class="card h-100 shadow-sm border-0" style="transition: transform 0.3s;"
              onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
              <img src="../Projet/Projet2.png" class="responsive-img" style="height:250px; object-fit:cover;">
              <div class="card-body">
                <h5>Projet 2</h5>
                <p>Description courte du projet 2.</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <a href="../Projet/Projet3.php" target="_blank" class="text-decoration-none text-dark">
            <div class="card h-100 shadow-sm border-0" style="transition: transform 0.3s;"
              onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
              <img src="../Projet/Projet3.png" class="responsive-img" style="height:250px; object-fit:cover;">
              <div class="card-body">
                <h5>Projet 3</h5>
                <p>Description courte du projet 3.</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <a href="../Projet/Projet4.php" target="_blank" class="text-decoration-none text-dark">
            <div class="card h-100 shadow-sm border-0" style="transition: transform 0.3s;"
              onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
              <img src="../Projet/Projet4.png" class="responsive-img" style="height:250px; object-fit:cover;">
              <div class="card-body">
                <h5>Projet 4</h5>
                <p>Description courte du projet 4.</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <a href="../Projet/Projet5.php" target="_blank" class="text-decoration-none text-dark">
            <div class="card h-100 shadow-sm border-0" style="transition: transform 0.3s;"
              onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
              <img src="../Projet/Projet5.png" class="responsive-img" style="height:250px; object-fit:cover;">
              <div class="card-body">
                <h5>Projet 5</h5>
                <p>Description courte du projet 5.</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <a href="../Projet/Projet6.php" target="_blank" class="text-decoration-none text-dark">
            <div class="card h-100 shadow-sm border-0" style="transition: transform 0.3s;"
              onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
              <img src="../Projet/Projet6.png" class="responsive-img" style="height:250px; object-fit:cover;">
              <div class="card-body">
                <h5>Projet 6</h5>
                <p>Description courte du projet 6.</p>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-5 bg-light">

    <div class="container">
      <h2 class="text-center mb-5">Contactez-moi</h2>
      <input class="form-control mb-3" type="text" placeholder="Nom">
      <input class="form-control mb-3" type="email" placeholder="Email">
      <textarea class="form-control mb-3" rows="5" placeholder="Message"></textarea>
      <div class="text-center">
        <button class="btn" style="background-color:#1b263b; color:white; width:300px;">Envoyer</button>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-white text-center py-3" style="background-color:#1b263b;">
    &copy; 2025 Mon Portfolio
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>