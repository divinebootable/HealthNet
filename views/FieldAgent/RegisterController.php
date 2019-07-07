<?php

include_once('../classes/Crud.php');

 $crud = new Crud();

if(isset($_POST['register'])){

 $name =$crud->escape_string($_POST['name']);
 $D_date = $crud->escape_string($_POST['D_date']);
 $guardian_name =$crud->escape_string($_POST['guardian_name']);
 $sex =$crud->escape_string($_POST['sex']);
 $m_status =$crud->escape_string($_POST['m_status']);
 $email =$crud->escape_string($_POST['email']);
 $phoneNumber =$crud->escape_string($_POST['phoneNumber']);
 $region =$crud->escape_string($_POST['region']);
 $subdivision =$crud->escape_string($_POST['subdivision']);
 $division =$crud->escape_string($_POST['division']);
 $neighbourhood =$crud->escape_string($_POST['neighbourhood']);
 $picture_path =$crud->escape_string('image/'.$_FILES['picture']['name']);


    // check if file type is image

   $result = $crud->execute ("INSERT INTO Patients(name,D_date,guardian_name,sex,m_status,email,phoneNumber,region,subdivision,division,neighbourhood,picture)
        VALUES('$name ',' $D_date','$guardian_name','$sex','$m_status',' $email','$phoneNumber','$region ','$subdivision ','$division','$neighbourhood',' $picture_path')");
        
           echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='FieldAgent.php'>View Result</a>";  
}
            
             
?>