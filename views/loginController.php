<?php
session_start();
$_SESSION['msg'] = '';
include "db_config.php";
 
            if(isset($_POST['login'])){
              $username = trim($_POST['username']);
              $password = md5($_POST['password']);

                if($password == ""){
                  ?>
                    <script language="JavaScript">
                        alert(' Password missing!');
                        document.location='index.php';
                    </script>
                    <?php
                } else{
                           $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                           $result = $conn->query($sql);

                             if($result){
                                 
                                    if($result->num_rows > 0){

                                      $found_user = mysqli_fetch_array($result);

                                      $_SESSION['username'] = $found_user['username'];
                                      $_SESSION['password'] = $found_user['password'];
                                      $_SESSION['level'] =    $found_user['level'];

                                           if($found_user['level'] == 'doctor'){
                                              header("location:Doctor/Doctor.php");
                                             }elseif ($found_user['level'] == 'user') {
                                               header("location:FieldAgent/FieldAgent.php");
                                           } elseif ($found_user['level'] == 'admin') {
                                              header("location:Admin/index.php");
                                           } elseif ($found_user['level'] == 'labtech' ) {
                                              header("location:LabTech/index.php");
                                           }  elseif ($found_user['level'] == 'nurse') {
                                              header("location:Nurse/index.php");
                                           }
                                           }
                                    }  else{
                                                ?>
                                                <script language="JavaScript">
                                                    alert('Username and Password Incorrect!');
                                                    document.location='index.php';
                                                </script>
                                                <?php
                                              }
                             

                }
              
             }

            
             
?>