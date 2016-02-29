<!DOCTYPE >
<html >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment</title>

  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="php_read.js"></script>  
  </head>
  <body>

<?php

$map= array(
"General purpose"=> 
array("level"=>"1","id"=>"1","father"=>"", "descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Spices and Herbs"=> 
array("level"=>"2","id"=>"1.1","father"=>"1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Onion powder Onion (minced) "=> 
array("level"=>"3","id"=>"1.1.1","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Onion powder toasted"=> 
array("level"=>"3","id"=>"1.1.2","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Basil "=> 
array("level"=>"3","id"=>"1.1.3","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Chives "=> 
array("level"=>"3","id"=>"1.1.4","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Savoury "=> 
array("level"=>"3","id"=>"1.1.5","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Cayenne pepper "=> 
array("level"=>"3","id"=>"1.1.6","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Lemon balm "=> 
array("level"=>"3","id"=>"1.1.7","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Dill "=> 
array("level"=>"3","id"=>"1.1.8","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Tarragon"=> 
array("level"=>"3","id"=>"1.1.9","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Mace "=> 
array("level"=>"3","id"=>"1.1.10","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Ginger "=> 
array("level"=>"3","id"=>"1.1.11","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Harissa "=> 
array("level"=>"3","id"=>"1.1.12","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Juniper berry "=> 
array("level"=>"3","id"=>"1.1.13","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Cinnamon "=> 
array("level"=>"3","id"=>"1.1.14","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Cardamom "=> 
array("level"=>"3","id"=>"1.1.15","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Caraway "=> 
array("level"=>"3","id"=>"1.1.16","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Curry "=> 
array("level"=>"3","id"=>"1.1.17","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Chervil "=> 
array("level"=>"3","id"=>"1.1.18","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Cumin seed "=> 
array("level"=>"3","id"=>"1.1.19","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Coriander "=> 
array("level"=>"3","id"=>"1.1.20","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Clove (whole) "=> 
array("level"=>"3","id"=>"1.1.21","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Clove (ground) "=> 
array("level"=>"3","id"=>"1.1.22","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Curcuma "=> 
array("level"=>"3","id"=>"1.1.23","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Bay leaves "=> 
array("level"=>"3","id"=>"1.1.24","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Bay leaves (ground) "=> 
array("level"=>"3","id"=>"1.1.25","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Garlic powder "=> 
array("level"=>"3","id"=>"1.1.26","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Marjoram leaves "=> 
array("level"=>"3","id"=>"1.1.27","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Marjoram (ground) "=> 
array("level"=>"3","id"=>"1.1.28","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Mustard seed "=> 
array("level"=>"3","id"=>"1.1.29","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Mustard seed (ground) "=> 
array("level"=>"3","id"=>"1.1.30","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Nutmeg (whole) "=> 
array("level"=>"3","id"=>"1.1.31","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Nutmeg (ground) "=> 
array("level"=>"3","id"=>"1.1.32","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Oregano "=> 
array("level"=>"3","id"=>"1.1.33","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Paprika "=> 
array("level"=>"3","id"=>"1.1.34","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Black and white ground pepper "=> 
array("level"=>"3","id"=>"1.1.35","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Whole black and white pepper "=> 
array("level"=>"3","id"=>"1.1.36","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Green pepper "=> 
array("level"=>"3","id"=>"1.1.37","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Parsley "=> 
array("level"=>"3","id"=>"1.1.38","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Pili-pili (ground) "=> 
array("level"=>"3","id"=>"1.1.39","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Pili-pili peulen "=> 
array("level"=>"3","id"=>"1.1.40","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Pili-pili peulen "=> 
array("level"=>"3","id"=>"1.1.41","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Pistachio kernels  "=> 
array("level"=>"3","id"=>"1.1.42","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Rosemary  "=> 
array("level"=>"3","id"=>"1.1.43","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Sage "=> 
array("level"=>"3","id"=>"1.1.44","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Celery  "=>
 array("level"=>"3","id"=>"1.1.45","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Thyme  "=> 
array("level"=>"3","id"=>"1.1.46","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Thyme ground "=> 
array("level"=>"3","id"=>"1.1.47","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Fennel ground  "=> 
array("level"=>"3","id"=>"1.1.48","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Fennel seed "=> 
array("level"=>"3","id"=>"1.1.49","father"=>"1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Decoratives, additives, mixes"=> 
array("level"=>"2","id"=>"1.2","father"=>"1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Decoratives"=> 
array("level"=>"3","id"=>"1.2.1","father"=>"1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Bread crumbs"=> 
array("level"=>"4","id"=>"1.2.1.1","father"=>"1.2.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Bread"=> 
array("level"=>"5","id"=>"1.2.1.1.1","father"=>"1.2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"White"=> 
array("level"=>"5","id"=>"1.2.1.1.2","father"=>"1.2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Yellow"=> 
array("level"=>"5","id"=>"1.2.1.1.3","father"=>"1.2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Red"=> 
array("level"=>"5","id"=>"1.2.1.1.4","father"=>"1.2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Extra Red"=> 
array("level"=>"5","id"=>"1.2.1.1.5","father"=>"1.2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Spice bread crumbs"=> 
array("level"=>"4","id"=>"1.2.1.2","father"=>"1.2.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Balkan"=> 
array("level"=>"5","id"=>"1.2.1.2.1","father"=>"1.2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Spicy pork chops "=> 
array("level"=>"5","id"=>"1.2.1.2.2","father"=>"1.2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Hawaii"=> 
array("level"=>"5","id"=>"1.2.1.2.3","father"=>"1.2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Hungarian"=>
 array("level"=>"5","id"=>"1.2.1.2.4","father"=>"1.2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Prager"=>
 array("level"=>"5","id"=>"1.2.1.2.5","father"=>"1.2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"SchnitzelBurger yellow green"=> 
array("level"=>"5","id"=>"1.2.1.2.6","father"=>"1.2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Burger orange"=> 
array("level"=>"5","id"=>"1.2.1.2.7","father"=>"1.2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Sesame burger"=> 
array("level"=>"5","id"=>"1.2.1.2.8","father"=>"1.2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Spicy fish crumbs"=> 
array("level"=>"5","id"=>"1.2.1.2.9","father"=>"1.2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Fish"=> 
array("level"=>"1","id"=>"2","father"=>"","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Marinades"=> 
array("level"=>"2","id"=>"2.1","father"=>"2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Oil marinades"=> 
array("level"=>"3","id"=>"2.1.1","father"=>"2.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Saumonière"=> 
array("level"=>"4","id"=>"2.1.1.1","father"=>"2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Jardinière"=> 
array("level"=>"4","id"=>"2.1.1.2","father"=>"2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Gyros"=> 
array("level"=>"4","id"=>"2.1.1.3","father"=>"2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Oriental"=> 
array("level"=>"4","id"=>"2.1.1.4","father"=>"2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Provencal"=> 
array("level"=>"4","id"=>"2.1.1.5","father"=>"2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Scampi marinade"=> 
array("level"=>"4","id"=>"2.1.1.6","father"=>"2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Venitienne"=> 
array("level"=>"4","id"=>"2.1.1.7","father"=>"2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Marinière"=> 
array("level"=>"4","id"=>"2.1.1.8","father"=>"2.1.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Dry marinades"=> 
array("level"=>"3","id"=>"2.1.2","father"=>"2.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Braai"=> 
array("level"=>"4","id"=>"2.1.2.1","father"=>"2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Brisbane "=> 
array("level"=>"4","id"=>"2.1.2.2","father"=>"2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Thai"=> 
array("level"=>"4","id"=>"2.1.2.3","father"=>"2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"  Red Moon"=> 
array("level"=>"4","id"=>"2.1.2.4","father"=>"2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Sydney"=> 
array("level"=>"4","id"=>"2.1.2.5","father"=>"2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Tandoori"=> 
array("level"=>"4","id"=>"2.1.2.6","father"=>"2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Tikka"=> 
array("level"=>"4","id"=>"2.1.2.7","father"=>"2.1.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Specialities"=> 
array("level"=>"2","id"=>"2.2","father"=>"2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Meat"=> 
array("level"=>"1","id"=>"3","father"=>"","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Meat loafs "=> 
array("level"=>"2","id"=>"3.1","father"=>"3","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Frikandon mix "=> 
array("level"=>"3","id"=>"3.1.1","father"=>"3.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Meat loaf mix"=> 
array("level"=>"3","id"=>"3.1.2","father"=>"3.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Fikandon special"=> 
array("level"=>"3","id"=>"3.1.3","father"=>"3.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Meat loaf spices"=> 
array("level"=>"3","id"=>"3.1.4","father"=>"3.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Cooked sausages"=> 
array("level"=>"2","id"=>"3.2","father"=>"3","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Seasonings"=> 
array("level"=>"3","id"=>"3.2.1","father"=>"3.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Champignon sausage spices"=>
 array("level"=>"4","id"=>"3.2.1.1","father"=>"3.2.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
" Frankfurter spices"=> 
array("level"=>"4","id"=>"3.2.1.2","father"=>"3.2.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Ham sausage spices"=> 
array("level"=>"4","id"=>"3.2.1.3","father"=>"3.2.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"White pudding spices"=> 
array("level"=>"4","id"=>"3.2.1.4","father"=>"3.2.1","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Mixes"=> 
array("level"=>"3","id"=>"3.2.2","father"=>"3.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Ham sausage mix"=> 
array("level"=>"4","id"=>"3.2.2.1","father"=>"3.2.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Veal sausage mix"=> 
array("level"=>"4","id"=>"3.2.1.2","father"=>"3.2.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"Horse meat mix"=> 
array("level"=>"4","id"=>"3.2.1.3","father"=>"3.2.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"),
"White pudding mix"=> 
array("level"=>"4","id"=>"3.2.1.4","father"=>"3.2.2","descprition"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx")
);

  $length=count($map);
  $keys = array_keys($map);

  for ($i = 0; $i < count($map); $i++) {
    if ($i==($length-1)) {
      $jsonString = "{\"name\":\"$keys[$i]\", "
    }
    else {


    }
    
    }

  }

  /*for(i=0;i<$length;i++) {
    $jsonString=""{\"name\":\"".$result[$x]["name"]."\",\"level\":\"".$result[$x]["level"]."\",\"id\":\"".$result[$x]["id"]."\",\"father\":\"".$result[$x]["father"]."\",\"details\":\"".$result[$x]["details"]."\"}\r\n""*
    for($x=0;$x<$arrlength;$x++)
  {
    if($x==($arrlength-1))
    {
      $jsonString .= "{\"name\":\"".$result[$x]["name"]."\",\"level\":\"".$result[$x]["level"]."\",\"id\":\"".$result[$x]["id"]."\",\"father\":\"".$result[$x]["father"]."\",\"details\":\"".$result[$x]["details"]."\"}\r\n";
    }
    else
    {
      $jsonString .= "{\"name\":\"".$result[$x]["name"]."\",\"level\":\"".$result[$x]["level"]."\",\"id\":\"".$result[$x]["id"]."\",\"father\":\"".$result[$x]["father"]."\",\"details\":\"".$result[$x]["details"]."\"},\r\n";
    }
  }


  }*/

echo $jsonString;

?>




    <form action="readfile_way1.php" id="read" method="post" accept-charset="utf-8">
      <button type="submit" class="btn btn-primary btn-lg btn-block" id="btn">Read File</button>
      <textarea class="form-control" rows="8" id="information"></textarea>
    </form>

  
  </body>
</html>