 <section class="section py-5 position-relative overflow-hidden" id="about">
    

  <div class="container position-relative" style="z-index:2;">
     <div class="row mb-4">
      <div class="col text-center">
        <h2 class="fw-bold scroll-fade">À propos</h2>
        <hr class="mx-auto scroll-fade" style="width: 60px; border-top: 3px solid #6366f1;">
      </div>
    </div>

     <div class="row justify-content-center">
      <div class="col-lg-8">
        <p class="scroll-fade delay-1">
          J'ai obtenu mon diplôme de <strong>Licence en Génie Logiciel</strong> à 
          <a class="text-decoration-underline" href="#" target="_blank">ESA (Ecole Supérieure des Affaires)</a> en 2025.  
          Pendant mes études, j'ai réalisé un stage de 4 mois chez 
          <a class="text-decoration-underline" href="#" target="_blank">Orabank Togo</a>.  
          <!--Après l'obtention de mon diplôme, j'ai travaillé en freelance sur des projets pour 
           <a class="text-decoration-underline" href="#" target="_blank">mon propre compte</a>.  -->
          Actuellement, je travaille sur des projets personnels tout en perfectionnant mes compétences en développement web et mobile.
        </p>

        <p class="scroll-fade delay-2">
          En tant que développeur, j'aime combler le fossé entre fonctionnalité et design.  
          Mon objectif est de toujours créer des applications <strong>scalables</strong> et <strong>performantes</strong>, tout en offrant une expérience utilisateur engageante et parfaitement conçue.  
          Je suis également très attentif aux besoins des clients et m'engage à aider les gens à réaliser leur vision.
        </p>

         <div class="text-center mt-4 scroll-fade delay-3">
          <a href="https://wa.me/22893446003" target="_blank" class="btn btn-gradient btn-lg d-inline-flex align-items-center pulse-continuous">
            <span class="me-2">💡</span> Intéressé à collaborer ? Contactez-moi !
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

 <style>
 .particles {
    position: absolute;
    top:0; left:0; width:100%; height:100%; overflow:hidden; z-index:1;
}
.bubble {
    position: absolute;
    bottom: -50px;
    width: 20px;
    height: 20px;
    background: burlywood;
    border-radius: 50%;
    animation: rise 10s linear infinite;
    left: calc(var(--i) * 15%);
    animation-delay: calc(var(--i) * 2s);
     
                 
}
@keyframes rise {
    0% { transform: translateY(0) scale(1); opacity: 0.2;}
    50% { transform: translateY(-200px) scale(1.2); opacity: 0.5;}
    100% { transform: translateY(-400px) scale(1); opacity: 0;}
}

 .scroll-fade {
    opacity: 0;
    transform: translateY(20px);
    transition: all 1s ease-out;
}
.scroll-fade.visible {
    opacity: 1;
    transform: translateY(0);
}

 .btn-gradient {
    background: linear-gradient(90deg, #6e44ff, #00bcd4, #ff4f6e, #ffc107);
    background-size: 300% 300%;
    color: burlywood;
    border: none;
    transition: 0.5s;
    animation: gradientBG 5s ease infinite;
}
.btn-gradient:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(255,255,255,0.5);
}
.pulse-continuous {
    animation: pulseBtn 1.5s infinite;
}
@keyframes pulseBtn {
    0%,100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}
@keyframes gradientBG {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Responsive */
@media (max-width:768px) {
    .scroll-fade { transform: translateY(10px);}
}
</style>

<!-- Script JS pour déclencher fade-in au scroll -->
<script>
const scrollElements = document.querySelectorAll('.scroll-fade');

const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;
  return elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend;
};

const displayScrollElement = (element) => {
  element.classList.add('visible');
};

const hideScrollElement = (element) => {
  element.classList.remove('visible');
};

const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 1.25)) {
      displayScrollElement(el);
    } else {
      hideScrollElement(el);
    }
  })
}

window.addEventListener('scroll', () => {
  handleScrollAnimation();
});
window.addEventListener('load', handleScrollAnimation);
</script>
