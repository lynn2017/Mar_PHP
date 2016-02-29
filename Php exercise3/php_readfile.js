$("document").ready(function(){
  $("#button").submit(function(){
 
    $.ajax({
      type: "POST",
      dataType: "text",
      url: "assignement_php1.php",
      success: function(data) {
        $("#details").text(
          data
        );
      }
    });
    return false;
  });
});