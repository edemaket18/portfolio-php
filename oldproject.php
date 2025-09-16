 <section class="section other-projects py-5">
  <div class="container">
    <div class="section_title text-center mb-4">
      <h2 class="fw-bold">Anciens projets</h2>
      <hr class="mx-auto" style="width: 80px; border-top: 3px solid #6366f1;">
    </div>

    <div class="section_content">
      <!-- Projet 1 -->
      <details>
        <summary>Consultation Patient-Docteur</summary>
        <div class="project">
          <p>Système de consultation entre patients et docteurs à travers l'application.</p>
          <div class="project_used">
            <span class="project_used_item">Delphi 7</span>
            <span class="project_used_item">MySQL</span>
            <span class="project_used_item">Pascal</span>
          </div>
          <div class="project_links">
            <a href="#"><img src="images/wwwlogo.png" alt="logo"></a>
          </div>
        </div>
      </details>

      <!-- Projet 2 -->
      <details>
        <summary>CEET_FACT</summary>
        <div class="project">
          <p>Système de facturation pour la CEET.</p>
          <div class="project_used">
            <span class="project_used_item">Delphi 7</span>
            <span class="project_used_item">MySQL</span>
            <span class="project_used_item">Pascal</span>
          </div>
        </div>
      </details>

      <!-- Projet 3 -->
      <details>
        <summary>Forum</summary>
        <div class="project">
          <p>Système de forum pour les discussions entre utilisateurs.</p>
          <div class="project_used">
            <span class="project_used_item">PHP</span>
            <span class="project_used_item">JavaScript</span>
            <span class="project_used_item">CSS</span>
            <span class="project_used_item">HTML</span>
            <span class="project_used_item">MySQL</span>
          </div>
        </div>
      </details>

      <!-- Projet 4 -->
      <details>
        <summary>VirtualClassroom</summary>
        <div class="project">
          <p>Système de classe virtuelle pour l'enseignement à distance ainsi que la participation des parents.</p>
          <div class="project_used">
            <span class="project_used_item">PHP</span>
            <span class="project_used_item">JavaScript</span>
            <span class="project_used_item">CSS</span>
            <span class="project_used_item">HTML</span>
            <span class="project_used_item">MySQL</span>
            <span class="project_used_item">Laravel</span>
          </div>
        </div>
      </details>
    </div>
  </div>
</section>

<style>
/* Fond animé subtil */
.other-projects {
  background: linear-gradient(120deg, #f9fafc, #eef2ff, #f9fafc);
  background-size: 300% 300%;
  animation: gradientShift 12s ease infinite;
}
@keyframes gradientShift {
  0% { background-position: 0% 50% }
  50% { background-position: 100% 50% }
  100% { background-position: 0% 50% }
}

/* Style des details */
.other-projects details {
  margin: 15px 0;
  padding: 15px 20px;
  border-radius: 12px;
  background: white;
  box-shadow: 0 4px 15px rgba(0,0,0,0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  opacity: 0;
  transform: translateY(30px);
  animation: fadeUp 0.8s ease forwards;
}
.other-projects details:nth-child(1) { animation-delay: 0.2s; }
.other-projects details:nth-child(2) { animation-delay: 0.4s; }
.other-projects details:nth-child(3) { animation-delay: 0.6s; }
.other-projects details:nth-child(4) { animation-delay: 0.8s; }

@keyframes fadeUp {
  to { opacity: 1; transform: translateY(0); }
}

/* Hover */
.other-projects details:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 18px rgba(99,102,241,0.15);
}

/* Résumé avec icône +/− */
.other-projects summary {
  cursor: pointer;
  font-weight: 600;
  font-size: 1.2rem;
  position: relative;
  padding-left: 25px;
}
.other-projects summary::before {
  content: "+";
  position: absolute;
  left: 0;
  top: 0;
  font-size: 1.4rem;
  color: #6366f1;
  transition: transform 0.3s;
}
.other-projects details[open] summary::before {
  content: "−";
  transform: rotate(180deg);
}

/* Contenu projet */
.project {
  margin-top: 10px;
  padding-top: 10px;
  border-top: 1px solid #ddd;
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

/* Liens / images */
.project_links img {
  width: 40px;
  margin: 5px;
  transition: transform 0.3s ease;
}
.project_links img:hover {
  transform: scale(1.15);
}
</style>
