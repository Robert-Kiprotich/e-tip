 <!doctype html>
 <?php include('functions.php') ?>

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
      <h1>MISSING PERSON REPORT</h1>
      <div class="formcontainer">
      <div class="container">
      
        <label for="fname"><strong>First name/jina la kwanza</strong></label>
        <input type="text"  name="fname" required>
        <label for="mname"><strong>Middle name/jina la kati</strong></label>
        <input type="text"  name="mname" >
        <label for="lname"><strong>Last  name/jina la mwisho</strong></label>
        <input type="text"  name="lname" required>
        <label for="date"><strong>Missing date/Tarehe</strong></label><br> 
        <input type="date"  name="date" required>
        <br> <br> 
        <label for="rseidence"><strong>Residence/mahali unaoishi</strong></label>
        <input type="text" placeholder="" name="residence" required>
        <label for="evidence"><strong>photo/ picha</strong></label>
        <input type="file"  name="file"  required><br>
        <label for="stmnt"><strong>Statement/maelezo</strong></label>
        <textarea id="mytextarea"  name="statement">Enter your statement/Ingiza maelezo</textarea>
        <label for="phone" ><strong>Phone number/ nambari ya simu</strong></label>
        <input type="text"  name="phone" required>
      </div>
      <button type="submit" name="submit_lostpsn" value="Upload" ><strong>SEND/TUMA</strong></button>
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
