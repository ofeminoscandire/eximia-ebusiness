//datatable related
$(document).ready(function() {
  $("#datatable1").DataTable({
    responsive: true,
    language: {
      searchPlaceholder: "Search...",
      sSearch: "",
      lengthMenu: "_MENU_ items/page"
    }
  }).columns().visible(true);

  // Select2
  $(".dataTables_length select").select2({
    minimumResultsForSearch: Infinity
  });
});

/**
posting vendor data
*/
$(document).ready(function() {
//  $("#form-data").submit(function(e) {
//    e.preventDefault();
//    var route = $("form-data").data("route");
//    var formdata = $(this);
//    $.ajax({
//      type: "POST",
//      url: route,
//      data: formdata.serialize(),
//      success: function(resp) {
//        console.log(resp);
//      }
//    });
//  });
});
