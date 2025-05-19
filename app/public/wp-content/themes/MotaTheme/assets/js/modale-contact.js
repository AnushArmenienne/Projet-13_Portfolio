$(function () {
  
  const boutonContact = $("#boutonContact");
  const openContactLink = $("#menu-item-26");
  const modaleOverlay = $(".popup-overlay");
  const referencePhotoInput = $("#referencePhoto");

 
  let referenceValue = "";


  function openModal(reference) {
    
    referencePhotoInput.val(reference.toUpperCase());

    modaleOverlay.css("display", "flex");
  }


  function closeModal() {
    modaleOverlay.css("display", "none");

    
    referenceValue = "";
  }

  
  if (boutonContact.length) {
    boutonContact.on("click", function (event) {
      event.preventDefault();
      
      referenceValue = boutonContact.data("reference");
      openModal(referenceValue);
    });
  }

  
  openContactLink.on("click", function (event) {
    event.preventDefault();
    
    openModal("");
  });

  
  $(window).on("click", function (event) {
    
    if ($(event.target).is(modaleOverlay)) {
      closeModal();
    }
  });
});
