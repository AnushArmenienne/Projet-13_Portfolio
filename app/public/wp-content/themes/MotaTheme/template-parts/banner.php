<div class="banner ">
  <div class="banner1 wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Mains.png" alt="Mains">
  </div>
  <div>
    <p class="citation"> "Il y a deux types de développeurs : ceux qui comprennent le code et ceux qui débuggent..."
    </p>
  </div>
  <div class="banner1 wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/moi.png" alt="moi">
  </div>

</div>

<div class="fixed bottom-8 left-8 z-30">
</div>
<div class="color-palette-control">
  <button id="toggle-palette-btn" class="toggle-palette-btn" tabindex="0">
    <div class="palette-icon">
      <div class="palette-slice"></div>
      <div class="palette-slice"></div>
      <div class="palette-slice"></div>
      <div class="palette-slice"></div>
      <div class="palette-slice"></div>
      <div class="palette-slice"></div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide-paintbrush w-6 h-6">
      <path d="M18.37 2.63 14 7l-3-3 7-7Z" />
      <path d="m9 8c2-2 3.5-7 4 10 2-2 8 2 1 7-2-2-6 1-7-7Z" />
      <path d="M14.5 17.5 15 15" />
    </svg>
  </button>
  <div id="color-palette" class="color-palette">
    <div class="color-option" style="background-color:rgb(255, 255, 255);" data-color="rgb(255, 255, 255)" title="Blanc"></div>
    <div class="color-option" style="background-color:rgb(224, 209, 123);" data-color="rgb(224, 209, 123)" title="jaune"></div>
    <div class="color-option" style="background-color:rgb(230, 251, 7);" data-color="rgb(230, 251, 7)" title="Saumon clair"></div>
    <div class="color-option" style="background-color: #000000;" data-color="#000000" title="Noir"></div>

  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const togglePaletteBtn = document.getElementById('toggle-palette-btn');
    const colorPalette = document.getElementById('color-palette');
    const colorOptions = document.querySelectorAll('.color-option');
    const body = document.body;

    togglePaletteBtn.addEventListener('click', () => {
      colorPalette.classList.toggle('open');
    });

    colorOptions.forEach(option => {
      option.addEventListener('click', () => {
        const selectedColor = option.getAttribute('data-color');
        body.style.backgroundColor = selectedColor;
        localStorage.setItem('pageBackgroundColor', selectedColor);
        colorPalette.classList.remove('open');
      });
    });

    const savedColor = localStorage.getItem('pageBackgroundColor');
    if (savedColor) {
      body.style.backgroundColor = savedColor;
    }

   
    document.addEventListener('click', (event) => {
      if (!colorPalette.contains(event.target) && !togglePaletteBtn.contains(event.target)) {
        colorPalette.classList.remove('open');
      }
    });
  });
</script>


<button>Mon Parcours</button>

<section class="timeline">
  <ul>
    <li>
      <div>
        <time>A partir de 2025</time> Développeuse WordPress
      </div>
    </li>
    <li>
      <div>
        <time>2023-2025</time> Formation à distance chez OPENCLASSROOMS : Développeur Web
      </div>
    </li>
    <li>
      <div>
        <time>2013-2022</time> Présidente de l'association arménienne HAYER DE POITOU de Poitiers
      </div>
    </li>
    <li>
      <div>
        <time>2017-2021</time> Animatrice d'activité à Cap-Sud de Bellejouanne
      </div>
    </li>

    <li>
      <div>
        <time>2019-2023</time> Vice-Présidente en chargée de communication de l'Association Pour la Promotion des Valeurs de la République Française (APVR) de Poitiers
      </div>
    </li>
    <li>
      <div>
        <time>2016</time> Animatrice d'activité au CSC de St Eloi
      </div>
    </li>
    <li>
      <div>
        <time>2016-2017</time> Animatrice scientifique et technique chez les Petits Débrouillards de Poitiers
      </div>
    </li>
    <li>
      <div>
        <time>2016-2018</time> Interprète à la Ligue de L'enseignement de Poitiers
      </div>
    </li>
    <li>
      <div>
        <time>2016-2019</time> Interprète-Traductrice chez PADA Coallia de Poitiers
      </div>
    </li>
    <li>
      <div>
        <time>2014-2021</time> Administratrice au CSC des Trois-Cités : Projet Educatif-territorial, projet alimentaire du CSC,
        Réseau Bien Vieillir (2012-2015), Chantier Associative (Interculturalité), Chantier Vieillissement (Intergénérationnel)
      </div>
    </li>
    <li>
      <div>
        <time>2015-2016</time> Trésorière adjointe chez ARARAT de Poitou-Charentes
      </div>
    </li>
    </li>
    <li>
      <div>
        <time>2012-2015</time> Bénévole au Secours Catholique de Poitiers : - Accueil du Jour
        - Initiation à la langue française
        - Interprètariat en arménien, en russe et en français
      </div>
    </li>
    </li>
    <li>
      <div>
        <time>2011-2015</time> Interprète au Relais Goerges Charbonnier de Poitiers
      </div>
    </li>
    </li>
    <li>
      <div>
        <time>2014-2015</time> Interprète à la Croix-Rouge française de Poitiers (Pôle Hébérgement)
      </div>
    </li>
    </li>
    <li>
      <div>
        <time>2012-2016</time> Traductrice au Toit du Monde de Poitiers
      </div>
    </li>
    </li>
    <li>
      <div>
        <time>2013-2016</time> Interprète à l'OFII et à la Préfecture de Poitiers
      </div>
    </li>



  </ul>
</section>
<script>
  (function() {
    "use strict";

    // define variables
    var items = document.querySelectorAll(".timeline li");

    // check if an element is in viewport
    // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    function callbackFunc() {
      for (var i = 0; i < items.length; i++) {
        if (isElementInViewport(items[i])) {
          items[i].classList.add("in-view");
        }
      }
    }

    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
  })();
</script>