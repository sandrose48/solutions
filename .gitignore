<html>
<body>
<?php
$arr_one = array();
if (($fp = fopen("contracts.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
    $arr_one[$data[0]] = $data;
  }
  fclose($fp);
}
$arr_two = array();
if (($fp = fopen("awards.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
    $arr_two[$data[0]] = $data;
  }
  fclose($fp);
}

$contractName = array_keys($arr_one);
foreach ($contractName as $key) {
  if (!isset($arr_two[$key])) {
    $arr_two[$key] = range(0, "");
  }
  unset($arr_two[$key][0]);
  $result_arr[$key] = array_merge($arr_one[$key], $arr_two[$key]);      
}
if (($fp = fopen("final.csv", "w")) !== FALSE) {
  foreach ($result_arr as $fields) {
    fputcsv($fp, $fields);
  }
  fclose($fp);
}

?>

</body>
</html>
