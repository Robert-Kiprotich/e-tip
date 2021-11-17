
 <!doctype html>
 <?php include('functions.php') ?>
<?php include('includes/header.php') ?>
 <body>
   
 <?php include('includes/nav.php') ?>
    <br>
  
<main>
<div class="container">
<div>
  <h1>Stolen Items</h1>
  </div>
<div class='row'>
 <?php getRecovered(); ?>
 </div>  
 </div>

</main>
<!-- FOOTER -->
 </body>
</html>
