
<html>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="./index.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Live Here</a></li>
          <li><a href="./newspage.php" class="nav-link px-2 text-white">News</a></li>
          <li><a href="./eventpage.php" class="nav-link px-2 text-white">Event</a></li>
          <li><a href="./aboutus.php" class="nav-link px-2 text-white">About</a></li>
          <li><?php 
              if(isset($_SESSION)){
                session_stop();
                echo "<p class='nav-link px-2 text-white' style='margin-left:90px;'> Hello </p>";

              }else{
                 session_start();
                echo "<p class='nav-link px-2 text-white' style='margin-left:90px;'> Hello ".$_SESSION['sess_username']."</p>"; 
              }
              ?>
          
        </li>
        </ul>

        <div class="text-end">
          <a href="login_register.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a href="login_register.php"><button type="button" class="btn btn-warning">Sign-up</button></a>
         
        </div>
      </div>
    </div>
  </header>
</body>
</html>