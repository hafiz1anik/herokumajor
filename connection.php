<?php
$server = "localhost";
$username = "root";
$password = "";
$db       = "my_first_database";
//create connection
$conn = mysqli_connect($server,$username,$password,$db);

//check connection

if(!$conn){
  die('database is not connected:'.mysqli_connect_error());
}

//echo "connection successful";

?>