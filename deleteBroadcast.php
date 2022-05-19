<?php
  require_once('service/broadcastService.php');

  $broadcast_Id = $_GET['broadid'];
  $_broadcastService = new BroadcastService();
  $_broadcastService->setId($broadcast_Id);
  $_broadcastService->deleteBroadcast();
 echo '<script> alert("Broadcast Deleted Successfull"); </script>';
echo '<script>  window.location.href="broadcastManageForm.php";</script>';

?>