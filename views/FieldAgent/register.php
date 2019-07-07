<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><i class="fa fa-wheelchair"></i>Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register Patient for Diagnosis</div>
        <div class="card-body">
          <form  role="form" action="RegisterController.php"  enctype="multipart/form-data" method="post" autocomplete="off">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="Name" class="form-control"  required="required" autofocus="autofocus" name="name">
                    <label for="email">Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group" >
                    <input type="date" id="date" name="D_date"  class="form-control"  placeholder="Date" required="required">
                    <label for="date">Date</label>
                  </div>
                </div>
              </div>

            </div>
             <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="guardian_name" name="guardian_name" class="form-control"  required="required" autofocus="autofocus">
                    <label for="email"> Guardian Names</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group"> 
                     <select name="sex"  class="form-control" required="required">
                        <option value="" disabled selected>Select sex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        
                      </select>
                  </div>
                </div>
              </div>
              
            </div>
             <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <select class="form-control" name="m_status" required="required">
                        <option value="" disabled selected>Marital Status</option>
                        <option value="married">Married</option>
                        <option value="not married">Not Married</option>
                        
                     </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="email" name="email" class="form-control"  required="required" autofocus="autofocus">
                    <label for="email"> Email address</label>
                  </div>
                </div>
              </div>
              
            </div>
             <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="PhoneNumber" name="phoneNumber" class="form-control" placeholder="PhoneNumber" required="required" autofocus="autofocus">
                    <label for="PhoneNumber"> PhoneNumber</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <select class="form-control" name="region" required="required">
                        <option value="" disabled selected>Region</option>
                        <option>Centre</option>
                        <option>Littoral</option>
                        <option>West</option>
                        <option>North West</option>
                        <option>North</option>
                        <option>East</option>
                        <option>Far North</option>
                        <option>South</option>
                        <option>Adamawa</option>
                        
                      </select>
                  </div>
                </div>
              </div>
              
            </div>
             <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="Subdivision" name="subdivision" class="form-control" placeholder="Subdivision" required="required" autofocus="autofocus">
                    <label for="Name"> Subdivision</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="Division" name="division"  class="form-control"  placeholder="Division" required="required">
                    <label for="lastName">Division</label>
                  </div>
                </div>
              </div>

            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="Neighbourhood" class="form-control" name="neighbourhood" placeholder="Neighbourhood" required="required">
                <label for="inputEmail">Neighbourhood</label>
              </div>
            </div>
            <div>
              
              <lable align="right">Image:</lable>  <br>                          
                            <input type="file" name="picture" id="profile-img" required/><br>
                                    <img src="" id="profile-img-tag" />

                                    <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                
                                                reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script><br>
            </div>
            
               </div>
            <button type="submit" name="register"  class="btn btn-outline-blue btn-block">Register</button>
          </form>
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
