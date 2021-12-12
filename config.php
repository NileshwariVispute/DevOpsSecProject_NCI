<?php


$databaseHost = 'test.chk7jf5ibvyy.us-east-1.rds.amazonaws.com';
$databaseName = 'test';
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