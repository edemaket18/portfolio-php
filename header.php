 

<header class="hero-section d-flex align-items-center text-center" id="intro_hello">
	
  <div class="container">
    <div class="row justify-content-center">
      
      <!-- Photo de profil -->
      <div class="col-12">
        <img src="images/1000522481.png" alt="Photo de profil"
          class="rounded-circle shadow-lg mb-4 profil-img">
      </div>

      <!-- Texte principal -->
      <div class="col-lg-8">
        <h1 class="fw-bold text-dark">
          Je suis <span class="text-primary">Edem Kossi AGBOGLO</span>
        </h1>
        <h3 class="text-muted mb-4">Développeur Full Stack & Mobile</h3>

        <!-- Tagline animée -->
        <p class="lead mb-4">
          Je crée des applications web modernes et des apps mobiles performantes, de l’idée à la mise en production.<br>
          Passionné par <strong> les outils de la technologie</strong> et <strong>du design</strong>, 
          je transforme les concepts en solutions innovantes et intuitives.
        </p>

        <!-- CTA 
        <a href="oldproject.php" class="btn btn-primary btn-lg px-4 me-2">🚀 Voir mes projets</a> 
        <a href="https://wa.me/22893446003" class="btn btn-outline-primary btn-lg px-4">📩 Me contacter</a>

         
        <h4 class="mt-4">
          <a href="mailto:edemaket18@gmail.com" class="highlight-link text-decoration-none text-primary fw-bold">
            ✉️ edemaket18@gmail.com
          </a>
        </h4>
        -->
      </div>
    </div>
  </div>
</header>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
/* Hero section */
.hero-section {
  height: 100vh; /* prend tout l'écran */
  background: linear-gradient(120deg, #eef2ff, #f9fafc);
  padding-top: 80px; /* espace sous la navbar */
}

/* Image profil */
.profil-img {
  width: 180px;
  height: 180px;
  object-fit: cover;
  border: 6px solid #fff;
  transition: transform 0.4s ease;
}
.profil-img:hover {
  transform: scale(1.08);
}

/* Navbar effet hover */
.navbar .nav-link {
  font-weight: 500;
  transition: color 0.3s ease, transform 0.3s ease;
}
.navbar .nav-link:hover {
  color: #4f46e5;
  transform: translateY(-2px);
}

/* Highlight email */
.highlight-link {
  transition: color 0.3s ease;
}
.highlight-link:hover {
  color: #1e3a8a;
}
</style>
