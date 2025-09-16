 <!-- Section Compétences -->
<section class="section skills py-5 bg-light" id="skills">
  <div class="container">
    <h2 class="section_title text-center fw-bold mb-5" data-aos="fade-up">💻 Compétences</h2>
    <div class="row">
      
      <!-- Langages -->
      <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="skills_category card shadow-sm border-0 h-100">
          <div class="card-body text-center">
            <h5 class="skills_category_label fw-bold text-primary mb-3">Langages</h5>
            <ul class="list-unstyled">
              <li class="skills_category_item badge bg-primary m-1">PHP</li>
              <li class="skills_category_item badge bg-primary m-1">JavaScript</li>
              <li class="skills_category_item badge bg-primary m-1">CSS3</li>
              <li class="skills_category_item badge bg-primary m-1">HTML5</li>
              <li class="skills_category_item badge bg-primary m-1">Delphi</li>
              <li class="skills_category_item badge bg-primary m-1">C</li>
              <li class="skills_category_item badge bg-primary m-1">Java</li>
              <li class="skills_category_item badge bg-primary m-1">Dart</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Frameworks -->
      <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="skills_category card shadow-sm border-0 h-100">
          <div class="card-body text-center">
            <h5 class="skills_category_label fw-bold text-success mb-3">Frameworks</h5>
            <ul class="list-unstyled">
              <li class="skills_category_item badge bg-success m-1">Angular</li>
              <li class="skills_category_item badge bg-success m-1">Laravel</li>
              <li class="skills_category_item badge bg-success m-1">jQuery</li>
              <li class="skills_category_item badge bg-success m-1">API</li>
              <li class="skills_category_item badge bg-success m-1">Bootstrap 4</li>
              <li class="skills_category_item badge bg-success m-1">Flutter</li>
              <li class="skills_category_item badge bg-success m-1">React Native</li>
              <li class="skills_category_item badge bg-success m-1">Node.js</li>
              <li class="skills_category_item badge bg-success m-1">Express.js</li>
              <li class="skills_category_item badge bg-success m-1">Next.js</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Outils -->
      <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="skills_category card shadow-sm border-0 h-100">
          <div class="card-body text-center">
            <h5 class="skills_category_label fw-bold text-warning mb-3">Outils</h5>
            <ul class="list-unstyled">
              <li class="skills_category_item badge bg-warning text-dark m-1">PL/SQL</li>
              <li class="skills_category_item badge bg-warning text-dark m-1">MongoDB</li>
              <li class="skills_category_item badge bg-warning text-dark m-1">MySQL</li>
              <li class="skills_category_item badge bg-warning text-dark m-1">Git & GitHub</li>
              <li class="skills_category_item badge bg-warning text-dark m-1">XAMPP</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Design -->
      <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="400">
        <div class="skills_category card shadow-sm border-0 h-100">
          <div class="card-body text-center">
            <h5 class="skills_category_label fw-bold text-danger mb-3">Design</h5>
            <ul class="list-unstyled">
              <li class="skills_category_item badge bg-danger m-1">Figma</li>
              <li class="skills_category_item badge bg-danger m-1">Photoshop</li>
              <li class="skills_category_item badge bg-danger m-1">Lucidchart</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- AOS Animation CSS/JS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>

<style>
/* Badges effet hover */
.skills_category_item {
  font-size: 0.9rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: default;
}
.skills_category_item:hover {
  transform: scale(1.1);
  box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}
</style>
