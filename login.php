<?php
include 'connection.php';
if(isset($_POST['submit'])){ 
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $command = "INSERT INTO login_form(user_email, user_password) VALUES('$email', '$password')";
    $query = mysqli_query($connection, $command);
    if($query){
        echo "Record Inserted Successfully";
    }
    
}

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $repeatpassword = $_POST['repeatpassword'];
  $command = "INSERT INTO register_form(user_name, user_username, user_email, user_password,user_repeatpassword) VALUES('$name','$username','email',$password',$repeatpassword')";
  $query = mysqli_query($connection, $command);
  if($query){
    echo "registration record inserted succesfully";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Adoni-Sounds</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

  
    <!-- ##### Header Area End ##### -->

   

    <section class="breadcumb3 bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-6 mt-2">
        <div class="card mt-2 " style="background-color: rgba(150, 38, 125, 0.5);">
          <div class="card-body">

              <ul class="nav nav-pills nav-justified  mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link text-white" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                    aria-controls="pills-login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item bg-success" role="presentation">
                  <a class="nav-link text-white" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="false">Register</a>
                </li>
              </ul>

              <!-- Pills content -->
              <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                  <div class="text-center mb-3">
                    <p>Sign in with:</p>
                    <button type="button" class="btn btn-secondarytn-floating mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                      <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                      <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                      <i class="fab fa-github"></i>
                    </button>
                  </div>

                  <p class="text-center">or:</p>
          
                  <form action="login.php" method="POST">
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" placeholder="enter your email address" id="email" name="email" class="form-control" required/>
                    <label class="form-label text-white" for="loginName">Email or username</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" placeholder="enter your password" id="password" name="password" class="form-control" required />
                    <label class="form-label text-white" for="loginPassword">Password</label>
                  </div>

                  <!-- 2 column grid layout -->
                  <div class="row mb-4">
                    <div class="col-md-6 d-flex justify-content-center">
                      <!-- Checkbox -->
                      <div class="form-check mb-3 mb-md-0">
                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                        <label class="form-check-label text-white" for="loginCheck"> Remember me </label>
                      </div>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center">
                      <!-- Simple link -->
                      <a href="login.php" style="color:white">Forgot password?</a>
                    </div>
                  </div>
                  <!-- Submit button -->
                  <button type="submit" name="submit" class="btn text-white btn-block mb-4" style="background-color: rgb(34, 90, 34);">
                    Sign in
                  </button>
            
                  </form>




                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>Not a member? <a href="login.php">Register</a></p>
                  </div>
                </div>

                <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                  <div class="text-center mb-3">
                    <p>Sign up with:</p>
                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                      <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                      <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                      <i class="fab fa-github"></i>
                    </button>
                  </div>

                  <p class="text-center">or:</p>

                  <form action="" method="post">

                  <!-- Name input -->
                  <div class="form-outline mb-4">
                    <input type="text" placeholder="enter your name" id="registerName" name="name" class="form-control" required/>
                    <label class="form-label text-white" for="registerName">Name</label>
                  </div>

                  <!-- Username input -->
                  <div class="form-outline mb-4">
                    <input type="text" placeholder="enter your user name" id="registerUsername" name="username" class="form-control" required/>
                    <label class="form-label text-white" for="registerUsername">Username</label>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" placeholder="enter your email" id="registerEmail" name="email" class="form-control" required/>
                    <label class="form-label text-white" for="registerEmail">Email</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" placeholder="enter your password" id="registerPassword" name="password" class="form-control" required/>
                    <label class="form-label text-white" for="registerPassword">Password</label>
                  </div>

                  <!-- Repeat Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" placeholder="re-enter password" id="registerRepeatPassword" name="repeatpassword" class="form-control" required/>
                    <label class="form-label text-white" for="registerRepeatPassword">Repeat password</label>
                  </div>

                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                      aria-describedby="registerCheckHelpText" required/>
                    <label class="form-check-label text-white" for="registerCheck">
                      I have read and agree to the terms
                    </label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit"name="submit"  class="btn btn-primary tn-block mb-3" style="background-color: rgb(34, 90, 34)">
                    Sign in
                  </button>
                </div>
              </div>
              <!-- Pills content -->
         </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <div class="section"></div>
    <!-- ##### Login Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                  <div class="cont d-flex flex-wrap align-items-center">
                     <a href="index.html" ><img src="img/core-img/favicon.ico" alt="" ></a>
                    <h2 class="logo text-white px-2  d-flex" style= "font-family:cursive; font-size: 25px;"><span style="color: rgb(161, 9, 154)
                    ;">ADONAI</span> SOUNDS</h2></a>
                   
              </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Albums</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <span class="copyright d-flex justify-content-center align-items-center">Copyright - ImmaxsMedia</span>

        </div>
    </footer> 
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <script>
        $(document).ready(function() {
          // Show the corresponding nav-item when the tab-register is clicked
          $('#tab-register').on('click', function() {
            $('.nav-item').removeClass('active');
            $(this).addClass('active');
          });
      
          // Show the corresponding tab when a nav-item is clicked
          $('.nav-item').on('click', function() {
            $('.tab-pane').removeClass('show active');
            $($(this).children('a').attr('href')).addClass('show active');
          });
        });
      
        function showRegistrationForm() {
          $('#tab-login').removeClass('active');
          $('#tab-register').addClass('active');
          $('#pills-login').removeClass('show active');
          $('#pills-register').addClass('show active');
        }
      </script>
      
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
 </body>
</html>
