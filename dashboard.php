<?php

  error_reporting(E_ALL);
  require_once('partials/header.php');

?>
<!-- from here till topmost top as header.php-->
<div class="container  col-md-10 py-5" style="background-color: white;" >

  <header class="p-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
       
        <ul class="member nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-start mb-md-0">
          <li><a href="dashboard.html" class="nav-link px-2 " style="color:#FF5714">Dashboard</a></li>
          <li><a href="conversation.html" class="nav-link px-2 link-dark">Conversations</a></li>
          <li><a href="mybreakout.html" class="nav-link px-2 link-dark">My Sessions</a></li>
          <li><a href="donations.html" class="nav-link px-2 link-dark">Transaction History</a></li>
        
        </ul>

         
        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="static/images/mdo.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
            <li><a class="dropdown-item" href="changedp.html">Upload DP</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="home_layout.html">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
     
<div class="content">
  <h3>Welcome!</h3>
  <p>This is your dashboard, please use the second-level menu to carry out tasks</p>
 </div>

</div>

 
 <!-- From here till end as footer.php--> 
<!-- FOOTER -->
<?php
  error_reporting(E_ALL);
  require('partials/footer.php');

?>
