<?php
/*
  Use PHP 5.3.

  "records.csv" contains CSV-delimited records on each line in the
  following format:
    
    2,070843201,18594,28,1

  Use the following framework to read "records.csv" and output
  "records_pruned.csv" such that each record in the output file
  has a one record for each ID in the second field (the 9-digit
  ID). For records in "records.csv" that share the same 9-digit
  ID, transfer only the first to "records_pruned.csv".

  For example:

  records.csv
    2,111111111,AAAAA,28,1
    2,222222222,BBBBB,28,1
    2,111111111,CCCCC,28,1
    2,333333333,DDDDD,28,1
    2,222222222,AAAAA,28,1

  should output records_pruned.csv
    2,111111111,AAAAA,28,1
    2,222222222,BBBBB,28,1
    2,333333333,DDDDD,28,1

  Sorting is not important.

  Solution will be evaluated for efficiency of algorithm and
  clarity of code.
*/

// $finalCsvData = array();

// if (($handle = fopen("./csv/records.csv", "r")) !== FALSE) {
//   while(!feof($handle)){
//     $inputCsvData = fgetcsv($handle);
//     $id = $inputCsvData[1];
//     var_dump($inputCsvData);
//    // var_dump($id);
//   }
//   fclose($handle);
// }



// if (($handle = fopen("./csv/records_pruned.csv", "w")) !== FALSE) {
//   foreach ($finalCsvData as $csvLine) {
//       fputcsv($handle, $csvLine);
//   }  
//   fclose($handle);
// }


$finalCsvData = array();
$tmp = array();
$data = array();

if (($handle = fopen("./csv/records.csv", "r")) !== FALSE) {
  //count
  while(!feof($handle)){
    $data = fgetcsv($handle);
    $id = $data[1];
    //var_dump($id);
    $tCount = count($tmp);
    echo $tmp;
    $tmp[$id] = 1;
     //echo $tCount.PHP_EOL;
    //echo count($tmp).PHP_EOL;
    if(count($tmp)!=$tCount){
      array_push($finalCsvData,$data);
    }
  }
  //print_r($test);
  fclose($handle);
}
var_dump($finalCsvData);

if (($handle = fopen("./csv/records_pruned.csv", "w")) !== FALSE) {
  foreach ($finalCsvData as $csvLine) {
     // var_dump($csvLine);
      fputcsv($handle, $csvLine);
  }  
  fclose($handle);
}