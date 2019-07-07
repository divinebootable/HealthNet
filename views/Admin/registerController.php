<?php

include_once('../classes/Crud.php');

$crud = new Crud();


 if(isset($_POST['register'])){

 	

 	$name =$crud->escape_string($_POST['name']);
 	$email = $crud->escape_string($_POST['email']);
 	$phoneNumber = $crud->escape_string($_POST['phoneNumber']);
 	$username = $crud->escape_string($_POST['username']);
 	$password = md5($_POST['password']);
 	$level = $crud->escape_string($_POST['level']);

 	$result = $crud->execute ("INSERT INTO users(name,email,phoneNumber,username,password,level)
        VALUES('$name ','$email','$phoneNumber','$username','$password','$level')");
         

         
} 


 
?>