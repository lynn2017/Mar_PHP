$(document).ready(function(){
  var data = {
    "action": "first",
    };
  $.ajax({
    type: "POST",
    dataType: "text",
    url: "spices.php",
    data: data,
    success: function(data) {
        //console.log(data);
        $("#col1").html(data);
    }
  });
});


function SecondRow(id,levelid){
  var data = {
    "action": "fatherid",
    "fatherid":id,
    "levelid":levelid
    };
  $.ajax({
    type: "POST",
    dataType: "text",
    url: "spices.php",
    data: data,
    success: function(data) {
      switch(Number(levelid)){
      case 1:
        $("#col2").html(data);      
        break;
      case 2:
        $("#col3").html(data);
        break;
      case 3:
        $("#col4").html(data);   
        break;
      case 4:
        $("#col5").html(data);
        break;
      }
    }
  });
}
