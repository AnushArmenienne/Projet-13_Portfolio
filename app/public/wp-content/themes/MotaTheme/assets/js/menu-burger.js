
$(function () {

  const header = $("header");
  const menuBurger = $(".burgerMenu");
  const nav = $(".nav-links-container");
  const menuLinks = $(".header-menu li a");

  menuBurger.on("click", function () {

    const isOpen = header.hasClass("open");

    header.toggleClass("open", !isOpen);
    menuBurger.toggleClass("open", !isOpen);
    nav.toggleClass("open", !isOpen);

    
    if (!isOpen) {
      $("body").css("overflow", "hidden");
    } else {
      $("body").css("overflow", "auto");
    }
  });

  
  menuLinks.on("click", function () {
    
    header.removeClass("open");
    menuBurger.removeClass("open");
    nav.removeClass("open");

  
    $("body").css("overflow", "auto");
  });
});
