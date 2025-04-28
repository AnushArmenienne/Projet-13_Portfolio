<div class="banner">
  <div class="banner1 taille wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Mains.png" alt="Mains">
  </div>
  <div>
    <p class="citation"> "Il y a deux types de développeurs : ceux qui comprennent le code et ceux qui débuggent..."
    </p>
  </div>
  <div class="banner1 taille2">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/moi.png" alt="moi">
  </div>

</div>





<button>Mon Parcours</button>

<!-- fleche vers le bas animé -->
<div class="absolut-link">
  <a href="#suite">
    <svg width="70" version="1.1" id="icons_1_" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
      viewBox="0 0 128 128" style="enable-background:new 0 0 128 128" xml:space="preserve">
      <g id="row2_1_">
        <g id="_x35__3_">
          <path
            d="M64 .3C28.7.3 0 28.8 0 64s28.7 63.7 64 63.7 64-28.5 64-63.7S99.3.3 64 .3zm0 121C32.2 121.3 6.4 95.7 6.4 64 6.4 32.3 32.2 6.7 64 6.7s57.6 25.7 57.6 57.3c0 31.7-25.8 57.3-57.6 57.3zm21.7-63.2L70.4 70.3V41.7c0-2.2-2.3-3.2-4.4-3.2h-4c-2.2 0-3.9 1.8-3.9 3.9v28.4L42.3 58.1c-2.2 0-3.9 1.8-3.9 3.9v7.1L64 95.8l25.6-26.7V62c0-2.2-1.8-3.9-3.9-3.9z"
            id="down_1_" />
        </g>
      </g>
    </svg>
  </a>
</div>

<!-- fin de la fleche animé vers le bas -->

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