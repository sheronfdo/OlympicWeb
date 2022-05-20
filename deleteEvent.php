<?php
  require_once('service/eventService.php');
  require_once('database/dbconnect.php');

  $eventId = $_GET['eventid'];
  $eventService = new EventService();
  $eventService->setId($eventId);
  $eventService->deleteEvent();
 echo '<script> alert("Event Deleted Successfull"); </script>';
 echo '<script>  window.location.href="eventManageForm.php";</script>';

?>