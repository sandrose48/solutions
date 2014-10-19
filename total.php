<html>
<body>
<?php
$stat = "	Closed";
$sum=0;
$CSVfp = fopen("final.csv", "r");
if($CSVfp !== FALSE) {
 while(! feof($CSVfp)) {
  $data = fgetcsv($CSVfp, 1000, ",");
  
  if($data[1]==$stat && isset($data[12]))
  {
	 $sum = $sum + $data[12];
 
  }
 }
 echo"Total Amount of closed contracts: ";
  print_r($sum);
}
fclose($CSVfp);
?>
</body>
</html>
