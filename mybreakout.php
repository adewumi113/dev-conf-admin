<?php

  error_reporting(E_ALL);
  require_once('partials/header.php');

?>
 <!-- from here till topmost top as header.php-->

  <div class="container col-md-10 py-5" style="background-color: white;">

<?php

  require('partials/menu.php');

?>

   <div class="content">
    


    <div class="row g-5"> 
     

    <div class="col-md-12">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
      Register for Breakout Sessions (senior dev)
      </h3>

  <form action="process_registration.php" method="post">
    <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col"> <input class="form-check-input border-dark" type="checkbox" value="" id="all"> </th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
           
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"> <input class="form-check-input border-dark" type="checkbox" value="" id=""></th>
            <td> Authorization and Authentication</td>
            <td>Senior Dev</td>
        
          </tr>
          <tr>
            <th scope="row"><input class="form-check-input border-dark" type="checkbox" value="" id=""></th>
            <td> Flask vs Laravel</td>
            <td>General</td>
           
          </tr>
          <tr>
            <th scope="row"><input class="form-check-input border-dark" type="checkbox" value="" id=""></th>
            <td>Secure Coding</td>
            <td>Senior Dev</td>
          </tr>
        </tbody>
      </table>

<div class="row">
    <div class="col-md-11">
        <div style="text-align:right">
            <button class="btn custom-btn noround">Cancel</button>
            <button class="btn btn-dark noround">Continue</button>
         </div>
    </div>
</div>

  </form>
 
       
     


    </div>

   

  </div>



   </div>
  </div>
 
 
  <!-- From here till end as footer.php-->
    <!-- FOOTER -->
<?php
  error_reporting(E_ALL);
  require('partials/footer.php');

?>
