<?php
require_once('service/sponsorContentService.php');
require_once('database/dbconnect.php');
  $sponsorId = $_GET['sponsorid'];
  $sponsorService = new SponsorContentService();
  $sponsorService->setId($sponsorId);
  $sponsorService->deleteContent();
 echo '<script> alert("Sponsor Content Deleted Successfull"); </script>';
 echo '<script>  window.location.href="sponsorManageForm.php";</script>';
?>