<?php
require_once('service/newsService.php');
require_once('database/dbconnect.php');

  $newsId = $_GET['newsid'];
  $newsService = new NewsService();
  $newsService->setId($newsId);
  $newsService->deleteNews();
 echo '<script> alert("News Deleted Successfull"); </script>';
 echo '<script>  window.location.href="newsManageForm.php";</script>';

?>