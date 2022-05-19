<?php
session_start();
require_once('../database/dbconnect.php');

$errors1 = array();
$errors2 = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['adloginbtn'])) {

        $admin_name = stripslashes($_POST['aname']);
        $pass_word = stripslashes($_POST['pass']);

        if (empty($admin_name)) {
            $errors1[] = 'Admin Name is Required';
        }
        if (empty($pass_word)) {
            $errors2[] = 'Password is Required';
        }if(!empty($admin_name) && !empty($pass_word)){

            $db = new dbConnect();
            $result = $db->getfromdb("SELECT id,userName FROM administrator WHERE userName='$admin_name' && password='$pass_word' && status='1'");
    
            while ($row = mysqli_fetch_array($result)) { 
                $id = $row['id']; 
                $adminName = $row['userName'];
            }
            $_SESSION['sess_admin_id'] = $id; 
            $_SESSION['sess_admin_username'] = $adminName;
    
            if (mysqli_num_rows($result) > 0) {
            echo '<script> alert("Login Successfully"); </script>';
            echo "<script> window.location.href='dashboard.php';
            </script>";
            } else if(mysqli_num_rows($result) == 0){
                echo '<script> alert("Incorect Admin Name or password"); </script>';
                echo "<script> window.location.href='adminlogin.php';</script>";
            }

        }   
  
    }
}


?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/admin.css" type="text/css">
    <title>Admin Login</title>
</head>

<body>
<div class="admin_form">  
<form method="POST" action="adminlogin.php">
<h2 class="title">Sign in</h2>
  <!-- Email input -->
  <div class="form-outline mb-4">
    
    <label class="form-label" for="form2Example1">Admin Name</label>
    <?php
                            if (!empty($errors1)) {
                                echo '<div class="errors">';
                                foreach ($errors1 as $error1) {
                                    echo '- ' . $error1;
                                }
                                echo '</div>';
                            }
                            ?>
    <input type="text" name="aname" id="form2Example1" class="form-control" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    
    <label class="form-label" for="form2Example2">Password</label>
    <?php
                            if (!empty($errors2)) {
                                echo '<div class="errors">';
                                foreach ($errors2 as $error2) {
                                    echo '- ' . $error2;
                                }
                                echo '</div>';
                            }
                            ?>
    <input type="password" name="pass" id="form2Example2" class="form-control" />
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>
   
  </div>

  <!-- Submit button -->
  <input type="submit" name="adloginbtn" value="Sign In" class="btn btn-primary btn-block mb-4">

  <!-- Register buttons -->

</form>
</div>

</body>
</html>