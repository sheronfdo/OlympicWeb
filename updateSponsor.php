<?php
require_once('service/sponsorContentService.php');

$errors = array();
$errors1 = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['sponsor_update'])) {
        $spnrId = $_POST['sponsorId'];
        $description = $_POST['desc'];
        $sourse_link = $_POST['link'];
        $file_name = $_FILES['sponsor_image']['name'];
        $file_type = $_FILES['sponsor_image']['type'];
        $file_size = $_FILES['sponsor_image']['size'];
        $temp_name = $_FILES['sponsor_image']['tmp_name'];
        $radioValue = $_POST['radio'];


        $upload_to = 'images/';
        // print_r($_FILES);

      
        if (empty($sourse_link)) {
            $errors1[] = 'source Link is Required';
        }
        if ( !empty($sourse_link) &&  !empty($file_name)) {
            if ($file_size > 2000000) {
                $errors[] = 'File size should be less than 2Mb';
            } else {
                $file_uploaded = move_uploaded_file($temp_name, $upload_to . $file_name);
                if ($file_uploaded) {
                    $_sponsorContentService = new SponsorContentService();
                    $_sponsorContentService->__constructWithId($spnrId, $description, $sourse_link, $file_name, $radioValue);
                    $_sponsorContentService->updateContent();
                    echo '<script> alert("Image Updated and Sponsor Updated Successfull"); </script>';
                    echo '<script>  window.location.href="sponsorManageForm.php";</script>';
                }
               
            }
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
    <title>Update Sponsor</title>
</head>

<body>
    <div><?php include('common/sidebar.php'); ?></div>
    <div>
        <div class="col-11 col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-10 news-form">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Sponsor Content</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="updateSponsor.php" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Title">Description</label>
                            <input type="text" name="desc" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="description">Source Link</label>
                            <?php
                        if (!empty($errors1)) {
                            echo '<div class="errors">';
                            foreach ($errors1 as $error1) {
                                echo '- ' . $error1;
                            }
                            echo '</div>';
                        }
                        ?>
                            <input type="text" name="link" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image Upload</label>
                            <?php
                        if (!empty($errors)) {
                            echo '<div class="errors">';
                            foreach ($errors as $error) {
                                echo '- ' . $error;
                            }
                            echo '</div>';
                        }
                        ?>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="sponsor_image" class="fileupload col-12" id="fileupload">
                                    <input type="text" name="sponsorId" value="<?php echo $_POST['sponsor_Id'];?>" class="form-control" placeholder="Enter Overview" hidden>
                                </div>
                            </div>
                        </div>
                        <div><label for="exampleInputFile">Shown Location</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault1" Value="Home">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Home Page
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault2" Value="Live" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Live Page
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" name="sponsor_update" class="btn btn-primary">Update</button>
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
