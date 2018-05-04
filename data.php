<?php


$filename = 'userData.csv';

if (file_exists($filename)) {

  $file = "userData.csv";
  if (!unlink($file))
    {
    echo ("Error deleting $file");
    }
  else
    {
    echo ("Deleted $file");
    }

} else {

}

$date =$_POST['id1'];
$time =$_POST['id2'];
//following code is to create csv file.
$list = array
(
$date,
$time
);

$file = fopen("userData.csv","w");

foreach ($list as $line)
  {
  fputcsv($file,explode(',',$line));
  }

fclose($file);

?>
