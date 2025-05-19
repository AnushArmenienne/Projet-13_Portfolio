jQuery(function ($) {
  // gestion du chargement du contenu addit
  function loadMoreContent() {
    
    const page = $("#btnLoad-more").data("page");
    
    const newPage = page + 1;
    // ajaxurl contient l’URL à partir de laquelle le contenu additionnel est récupéré via AJAX//
    const ajaxurl = ajax_params.ajax_url;


  
    //requete pour serveur /backend 
    $.ajax({
      url: ajaxurl,
      type: "post",
      data: {
        page: newPage,
        action: "load_more_photos",
      },
      success: function (response) {
       
        $("#load-moreContainer").before(response);

        $("#btnLoad-more").data("page", newPage);
      },
    });
  }





  $(document).on("click", "#load-moreContainer #btnLoad-more", function () {

    $("#load-moreContainer").hide('slow');


    if($("#btnLoad-more").data("filtered") == 1){
      
      changeFilter(true);
    } else {
      
      loadMoreContent();
    }
  });
});
