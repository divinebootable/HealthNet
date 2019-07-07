<?php

session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="has-overlay">
<!-- Home Section -->
<header id="home-section">
    <div class="dark-overlay">
      <div class="vertical-center">
            <div class="container" align="center">
              <h1 class="display-5" align="center" style="color:#FFC312;">KITS <strong>SMART-HEALTH</strong> MANAGER</h1>
                 <div class="card bg-primary  card-form">
                    <div class="card-body">
                        <form action="loginController.php" role="form" method="POST">
                        <div class="form-group">
                          <label for="exampleFormControlSelect1" style="color:#FFC312;"> LOG IN</label>
                          
                          
                        </div>
                                 <div class="form-group">
                           <div class="form-group">
                                  
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                      <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                    </div>
                                  </div>
                                </div>
                                 <button type="submit" name="login"  class="btn btn-outline-light btn-block">Sign in</button>
                             
                           
                        </form>
                      
                    </div>
                   
                 
              </div>
            
            </div>
        
      </div>

    </div>
  
</header>
  
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
