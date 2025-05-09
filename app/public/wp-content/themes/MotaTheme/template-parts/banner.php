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