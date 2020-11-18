<?php
require 'JSON.php';

try
{
    $db = mysqli_connect("db-12h77.cdb.ntruss.com", "multiverse", "Ninevr1v3r!", "ninevr_multiverse");
    $result = mysqli_query($db, "set NAMES utf8mb4");

    $sql = "SELECT * FROM multiverse_scene WHERE 1";

    $sth = mysqli_query($db, $sql) or die ("Query error: " . mysqli_error());
    $json = new Services_JSON();
    $rows = array();
    while($r = mysqli_fetch_assoc($sth)) {
        $rows[] = $r;
  } 
  $output = $json->encode($rows); 
  echo $output;
  mysqli_close($connection);
  }
 catch(Exception $e) { 
  echo $e->getMessage();
}



?>