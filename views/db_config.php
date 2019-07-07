<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "KHealth";

$conn = new mysqli($server,$username,$password,$database);// connection created
 if($conn->connect_error){
  die("Conection fialed:" . $conn->connect_error);// connection checked
 }
?>