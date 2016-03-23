<? php
$finalCsvData = array();
$tmp = array();
$data = array();

if (($handle = fopen("./csv/records.csv", "r")) !== FALSE) {
  //count
  $i=0;
  while(!feof($handle)){
    $data = fgetcsv($handle);
    $id = $data[1];
    $tCount = count($tmp);
    $tmp[$id] = 1;
    if(count($tmp)!=$tCount){
      $finalCsvData = $data
    }
  }
  //print_r($test);
  fclose($handle);
}
var_dump($finalCsvData);

if (($handle = fopen("./csv/records_pruned.csv", "w")) !== FALSE) {
  foreach ($finalCsvData as $csvLine) {
      fputcsv($handle, $csvLine);
  }  
  fclose($handle);
}

?>