<?php

$open = mysql_connect("localhost","root","");
  if(!$open){
    die("Server not online !<br>");
  }else{
    print("database connected !<br>");
  }
$database = mysql_select_db("KHealth");
    if(!$database){
      die("database not online");
    }else{
      print("Database connected<br><br><br>");
    }

?>