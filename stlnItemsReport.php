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

<form action="functions.php" method="POST" enctype="multipart/form-data">
      <h3>THEFT REPORT/VITU VIVLIVYOIBWA</h3>
      <div class="formcontainer">
      <div class="container">
      <label for="date"><strong>Date/Tarehe</strong></label><br> 
        <input type="date"  name="date" required>
        <br> <br> 
        <label for="date"><strong>Date Stolen/Tarehe iliyoibwa</strong></label><br> 
        <input type="date"  name="datestln" required>
        <br> <br> 
        <label for="fname"><strong>First name/jina la kwanza</strong></label>
        <input type="text"  name="fname" required>
        <label for="mname"><strong>Middle name/jina la kati</strong></label>
        <input type="text"  name="mname" >
        <label for="lname"><strong>Last  name/jina la mwisho</strong></label>
        <input type="text"  name="lname" required>
        <label for="id"><strong>ID number/ Kitambuilsho</strong></label>
        <input type="text"  name="id" required>
        <label for="case"><strong>Stolen item/kifaa kilichoibwa</strong></label>
        <input type="text"  name="stlnitem" required>
        <label for="case"><strong>Theft location/mahali pa uwizi</strong></label>
        <input type="text"  name="location" required>
        <label for="rseidence"><strong>Residence/mahali unaoishi</strong></label>
        <input type="text" placeholder="" name="residence" required>
        <label for="evidence"><strong>Upload Evidence (photo or video)/weka ushahidi (picha au video)</strong></label>
        <input type="file"  name="file" required  ><br>
        <label for="stmnt"><strong>Statement/maelezo</strong></label>
        <textarea id="mytextarea"  name="statement" placeholder="Item description/Ingiza maelezo"></textarea>
        <label for="phone" ><strong>Phone number/ nambari ya simu</strong></label>
        <input type="text"  name="phone" required>
      </div>
      <button type="submit" name="submit_theft" value="Upload" ><strong>SEND/TUMA</strong></button>
      </div>
    </form>
  </div>
  </div>
  <!---emergency contacts begin---->
  <?php include('includes/emergency.php') ?>
   <!---emergency contacts end---->


</main>

 <!-- FOOTER -->
  </body>
  
</html>
