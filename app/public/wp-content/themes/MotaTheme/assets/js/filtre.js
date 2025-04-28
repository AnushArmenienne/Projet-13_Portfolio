function changeFilter(paged){
  // Capture les valeurs des filtres
  const category = $("#categorie").val();
  const format = $("#format").val();
  const years = $("#annees").val();
  const page = (paged) ? $("#btnLoad-more").data("page") : 1;
  //vérification (si les valeurs sont les valeurs par défaut)
  const isDefaultValues = category === "" && format === "" && years === "";
  $.ajax({
    url: ajax_params.ajax_url,
    type: "post",
    data: {
      action: "filter_photos",
      page: page,
      filter: {
        category: category,
        format: format,
        years: years,
      },
    },
    success: function (response) {
      // Màj la section des photos avec les résultats filtrés
      if(!paged){
        $("#containerPhoto").html(response);
      } else{
        $("#load-moreContainer").before(response);
      }
     
    },
    error: function (xhr, ajaxOptions, thrownError) {
      console.log(xhr.status);
      console.log(thrownError);
      console.log(ajaxOptions);
      console.log(xhr.responseText);
    },
    complete: function () {
      
      if (isDefaultValues) {
        
        $("#containerPhoto").load(window.location.href + " #containerPhoto");
      }
    },
  });
}

jQuery(document).ready(function ($) {
  
  $("#categorie, #format, #annees").on("change", function () {
    changeFilter(false);
  });
   
});


