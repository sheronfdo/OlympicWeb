<?php  
require_once('database/dbconnect.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


        if ($_SESSION['sess_admin_id']) {
            $_SESSION = array();

          if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-3600);
           }

            session_destroy(); 
        }

 
     ?>

<script>
       window.location.href = "admin/adminlogin.php";
</script>
        <?php
