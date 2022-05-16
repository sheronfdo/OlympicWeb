<?php
  require_once('service/userService.php');
  require_once('model/user.php');
  require_once('database/dbconnect.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>login-register</title>
  </head>
  <body>
  

  <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="login_register.php" method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="uname" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pass" placeholder="Password">
                    </div>
                    <input type="submit" name="loginSubmit" value="Login" class="btn solid" >
                    <div class="social-media">
                        <a href="https://www.facebook.com/" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/i/flow/login" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.google.com" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
                <form action="login_register.php" method="POST" class="sign-up-form" onsubmit="validateForm()">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="uname" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pass" placeholder="Password">
                    </div>
                    <input type="submit" name="signSubmit" value="Sign up" class="btn solid">
                   
                    <div class="social-media">
                        <a href="https://www.facebook.com/" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/i/flow/login" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.google.com" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="images/undraw_online_groceries_a02y.png" class="image" alt="">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of Us?</h3>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="images/undraw_on_the_way_re_swjt.png" class="image" alt="">
            </div>
        </div>
    </div>
     <?php
     
     if ($_SERVER['REQUEST_METHOD'] == "POST") {
       if(isset($_POST['signSubmit'])){
         // removes backslashes
         $username = stripslashes($_POST['uname']);
         $email = stripslashes($_REQUEST['email']);
         $password = stripslashes($_REQUEST['pass']);
        
        $uService = new UserService();
        $uService->__constructWithoutId($username,$email,$password);
        $uService->insertUser();

       }
    
     }
     if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if(isset($_POST['loginSubmit'])){
        $username1 = stripslashes($_POST['uname']);
        $password1 = stripslashes($_REQUEST['pass']);

        $db = new dbConnect();
        $db->getfromdb("SELECT * FROM user WHERE userName='$username1' && password='$password1'");
      }
    }
        
     
     ?>

    <script src="js/script.js"></script>


  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </body>

</html>
