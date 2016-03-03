<?php
 $action = $_POST["action"];
//$action='first';
	      switch($action) 
	      {
	      	case "first": firstline(); break;
	      	case "fatherid": subline($_POST["fatherid"],$_POST["levelid"]);break;
	      }
  	function firstline()
  	{
  		$json = "spices.json";
		$contents = file_get_contents($json);
		$contents = json_decode($contents,true);
  		$length = count($contents["level1"]);
  		$spices = "";
		$i=0;
		while($i<$length)
		{
			$spices .= '<div class="row firstline" id="'.$contents['level1'][$i]['id'].'" onclick="SecondRow('.$contents['level1'][$i]['id'].','.$contents['level1'][$i]['level'].')"> '.$contents['level1'][$i]['name'].'</div>';;
			$i++;
		}
		echo $spices;
  	}


  	function subline($fatherid,$levelid)
  	{
  		$json = "spices.json";
		$contents = file_get_contents($json);
		$contents = json_decode($contents,true);
		$spices = "";
		switch($levelid) 
	      {
	      	case "1": $level="level2";break;
	      	case "2": $level="level3";break;
	      	case "3": $level="level4";break;
	      	case "4": $level="level5";break;
	      }
  		$length = count($contents[$level]);
		$i=0;
		while($i<$length)
		{
			if($contents[$level][$i]['father']==$fatherid)
			{
				$spices .= '<div class="row" id="'.$contents[$level][$i]['id'].'" onclick="SecondRow('.$contents[$level][$i]['id'].','.$contents[$level][$i]['level'].')"> '.$contents[$level][$i]['name'].'</div>';
			}
			$i++;
		}
		echo $spices;
  	}















































?>