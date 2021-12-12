<?php


$databaseHost = '127.0.0.1';
$databaseName = 'test_db_2';
$databaseUsername = 'admin';
$databasePassword = '12345678';

// $conn = mysqli_connect("localhost","root","","login");
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>