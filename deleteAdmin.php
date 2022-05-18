<?php
  require_once('service/administratorService.php');
  require_once('database/dbconnect.php');

  $admin_Id = $_GET['adminId'];
  $administratorService = new AdministratorService();
  $administratorService->setId($admin_Id);
  $administratorService->deleteAdministrator();
 echo '<script> alert("Admin Deleted Successfull"); </script>';
echo '<script>  window.location.href="adminManageForm.php";</script>';

?>