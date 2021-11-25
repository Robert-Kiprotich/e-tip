
<?php include('functions.php') ?>
 <!doctype html>

 <?php include('includes/header.php') ?>
  <body>

    <?php include('includes/nav.php') ?>
    
    <br>
<main>
 
<div class="row">
<?php include('includes/twitter.php') ?>

  <div class="column-center">
  
<?php
if(isset($_SESSION['status'])){
  echo'<div class="alert alert-success alert-dismissible">',
  '<a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>',
  '<strong>'.$_SESSION['status'].'</strong>', 
'</div>';
 
 // echo '<div class="alert alert-secondary" role="alert">'  '</div>';
  unset($_SESSION['status']);
}
?>

<div class="card-center">

     
</div>
</div>



  <!---emergency contacts begin---->
  <?php include('includes/emergency.php') ?>
   <!---emergency contacts end---->


</main>

 <!-- FOOTER -->
  </body>


</script>
  
</html>
