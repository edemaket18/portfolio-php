 <section class="section featured-projects py-5">
  <div class="container">
    <div class="section_title text-center mb-4">
      <h2 class="fw-bold">Projets récents</h2>
      <hr class="mx-auto" style="width: 80px; border-top: 3px solid #6366f1;">
    </div>

    <div class="section_content">
      <!-- Exemple de projet avec image -->
      <div class="project salzakshipment mb-4">
        <figure class="project_pic">
          <a href="#link" target="_blank">
            <img src="images/project-sample.jpg" alt="Aperçu projet">
          </a>
        </figure>
      </div>

      <!-- Projet détaillé -->
      <details>
        <summary>Matching Stagiaire-Mentor</summary>
        <div class="project_name">
          <a href="#link" target="_blank" class="fw-semibold text-decoration-none text-primary">
            Voir le projet
          </a>
        </div>
        <div class="featured-projects-content">
          <p>Système de correspondance entre stagiaires et mentors.</p>
        </div>

        <div class="project_used">
          <span class="project_used_item">Next.js</span>
          <span class="project_used_item">React</span>
          <span class="project_used_item">CSS3</span>
          <span class="project_used_item">HTML5</span>
          <span class="project_used_item">TypeScript</span>
          <span class="project_used_item">MongoDB</span>
        </div>

        <div class="project_links">
          <a href="#link" target="_blank">
            <img src="images/icons8-github.png" alt="GitHub">
          </a>
          <a href="#link" target="_blank">
            <img src="images/demo.png" alt="Démo en ligne">
          </a>
        </div>
      </details>
    </div>
  </div>
</section>

<style>
/* Fond dégradé animé */
.featured-projects {
  background: linear-gradient(120deg, #f9fafc, #eef2ff, #f9fafc);
  background-size: 300% 300%;
  animation: gradientShift 12s ease infinite;
}
@keyframes gradientShift {
  0% { background-position: 0% 50% }
  50% { background-position: 100% 50% }
  100% { background-position: 0% 50% }
}

/* Image projet */
.project_pic img {
  max-width: 100%;
  border-radius: 16px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.08);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}
.project_pic img:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 22px rgba(99,102,241,0.2);
}

/* Animation fade-up pour chaque projet */
.featured-projects details,
.project {
  opacity: 0;
  transform: translateY(30px);
  animation: fadeUp 0.8s ease forwards;
}
@keyframes fadeUp {
  to { opacity: 1; transform: translateY(0); }
}

/* Résumé avec +/− */
.featured-projects summary {
  cursor: pointer;
  font-weight: 600;
  font-size: 1.2rem;
  position: relative;
  padding-left: 25px;
  margin-top: 15px;
}
.featured-projects summary::before {
  content: "+";
  position: absolute;
  left: 0;
  top: 0;
  font-size: 1.4rem;
  color: #6366f1;
  transition: transform 0.3s;
}
.featured-projects details[open] summary::before {
  content: "−";
  transform: rotate(180deg);
}

/* Contenu projet */
.featured-projects-content {
  margin: 10px 0;
  animation: fadeIn 0.5s ease;
}
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

/* Technologies utilisées */
.project_used {
  margin-top: 10px;
}
.project_used_item {
  display: inline-block;
  background: #eef2ff;
  color: #4f46e5;
  padding: 5px 12px;
  border-radius: 20px;
  margin: 4px;
  font-size: 0.85rem;
  transition: all 0.3s ease;
}
.project_used_item:hover {
  background: #4f46e5;
  color: white;
  transform: scale(1.05);
}

/* Liens */
.project_links img {
  width: 40px;
  margin: 5px;
  transition: transform 0.3s ease;
}
.project_links img:hover {
  transform: scale(1.15);
}
</style>
