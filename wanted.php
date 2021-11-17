
 <!doctype html>

<?php include('includes/header.php') ?>
<?php include('functions.php') ?>
 <body>
   <?php include('includes/nav.php') ?>
    <br>
  
<main>
  <div class="container">
  <div>
  <h1 style=color:#07b34f;>Wanted Suspects</h1>
  </div>
<div class='row'>
  
 <?php getWanted(); ?>
 </div>  
 </div>  
   <!-- other items -->
    
</main>
<!-- FOOTER -->
 </body>
</html>
<!-- 
 wanted suspect card start
 
// Include the database configuration file
include 'db.php';

/* Get images from the database
$query = $conn->query("SELECT * FROM wanted ORDER BY date DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
      $targetDir = 'admin/images/wanted/'.$row["image"];
      echo"<div class='column-center'>";
 echo" <div class='row' >";
 
 echo"<div class='card'>";
 echo"<h2>Card</h2>";

 echo "<img src='$targetDir' alt=''/>";

echo" <div class='container'> ";
    echo"<h4><b>John Doe</b></h4>";
   echo" <p>Architect & Engineer</p>";
 echo "</div>";
 echo "</div>";
 echo "</div>";
 echo "</div>";
 echo "</div>";
  
 }
}
else{ ?>
    <p>No image(s) found...</p>



  /*


<!--wanted suspect card end-->
 <!--emergency contacts start-->

 <!--emergency contacts end-->