<?php
require_once('service/administratorService.php');


$errors1 = array();
$errors2 = array();
$errors3 = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['admin_update'])) {
        $_adminId = $_POST['admin_Id'];
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
       
        if (empty($username)) {
            $errors1[] = 'username is Required';
        }
        if (empty($email)) {
            $errors2[] = 'email is Required';
        }
        if (empty($password)) {
            $errors3[] = 'password is Required';
        }
        if (!empty($username) && !empty($email) && !empty($password)) {
        
                    $_administratorService = new AdministratorService();
                    $_administratorService->__constructWithId($_adminId, $username, $email, $password);
                    $_administratorService->updateAdministrator();
                    echo '<script> alert("Admin Updated Successfull"); </script>';
                echo '<script>  window.location.href="adminManageForm.php";</script>';     
            
        }
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <!--cusstom css-->
    <link rel="stylesheet" href="css/news.css">
    <title>Update Event</title>
</head>

<body>

    <div><?php include('common/sidebar.php'); ?></div>
    <div>

        <div class="col-11 col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-10 news-form">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Admin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="adminManageForm.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Title">Username</label>
                            <?php
                            if (!empty($errors1)) {
                                echo '<div class="errors">';
                                foreach ($errors1 as $error1) {
                                    echo '- ' . $error1;
                                }
                                echo '</div>';
                            }
                            ?>
                            <input type="text" name="uname" class="form-control" placeholder="Enter Username">
                            <input type="text" name="admin_Id" value="<?php echo $_POST['admin_id'];?>" class="form-control" placeholder="Enter Overview" hidden>
                        </div>
                        <div class="form-group">
                            <label for="Title">Email</label>
                            <?php
                            if (!empty($errors2)) {
                                echo '<div class="errors">';
                                foreach ($errors2 as $error2) {
                                    echo '- ' . $error2;
                                }
                                echo '</div>';
                            }
                            ?>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="Title">Password</label>
                            <?php
                            if (!empty($errors3)) {
                                echo '<div class="errors">';
                                foreach ($errors3 as $error3) {
                                    echo '- ' . $error3;
                                }
                                echo '</div>';
                            }
                            ?>
                            <input type="password" name="pass" class="form-control" placeholder="Enter Password">
                        </div>
                    </div><!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" name="admin_update" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>