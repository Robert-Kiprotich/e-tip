
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
<form  action="functions.php" method="POST" enctype="multipart/form-data">
<div class="formcontainer">
      <div class="container">
      <h1> CASE REPORT</h1>
  <div class="row">
   <!--col start-->
   <div class="col-md-6">
    <div class="form-group">
       
        <div class="col-sm-10">
        <input type="date" class="form-control"  name="date" placeholder="date"required>
            
        </div>
    </div>
    <div class="form-group">
        
        <div class="col-sm-10">
        <input type="text" class="form-control"  name="fname" placeholder="First Name" required>
            
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        
        <div class="col-sm-10">
        <input type="text" class="form-control"  name="mname" placeholder="Middle Name" required>
        </div>
    </div>
    <div class="form-group">
       
        <div class="col-sm-10">
        <input type="text" class="form-control"  name="lname" placeholder="Last Name"  required>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Name" placeholder="Phone Number" name="phone" required>
        </div>
    </div>
    <div class="form-group">
        
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Address" name="idno" required  placeholder="ID number">
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
       
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Name" name="crime" required placeholder="Case">
        </div>
    </div>
    <div class="form-group">
        
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="residence" required  required placeholder="Residence">
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
       
        <div class="col-sm-10">
        <textarea id="mytextarea" class="form-control" placeholder="Statement"  name="statement"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <input type="file" name="file" class="form-control" >
        </div>
    </div>
</div>


   <!--col end-->
    
  </div>
 </div>
 <button type="submit" name="submit_case" value="Upload" ><strong>SEND/TUMA</strong></button>
 </div>
</form>
</div>
</div>

<!--
 <form >
      
      <div class="formcontainer">
      <div class="container">
      <div class="col">
      <label for="date"><strong>Date/Tarehe</strong></label><br> 
        <input type="date"  name="date" required>
        <br> <br> 
        </div>
        <div class="col">
        <label for="fname"><strong>First name/jina la kwanza</strong></label>
        
        </div>
        <label for="mname"><strong>Middle name/jina la kati</strong></label>
        <input type="text"  name="mname" >
        </div>
        <div class="col">
        <label for="lname"><strong>Last  name/jina la mwisho</strong></label>
        <input type="text"  name="lname" required>
        <label for="id"><strong>ID number/ Kitambuilsho</strong></label>
        <input type="text"  name="idno" required>
        <label for="case"><strong>Case/kesi</strong></label>
        <input type="text"  name="crime" required>
        <label for="rseidence"><strong>Residence/mahali unaoishi</strong></label>
        <input type="text" placeholder="" name="residence" required>
        <label for="evidence"><strong>Upload Evidence (photo or video)/weka ushahidi (picha au video)</strong></label>
        <input type="file"  name="file" required ><br>
        <label for="stmnt"><strong>Statement/maelezo</strong></label>
        <textarea id="mytextarea"  name="statement"></textarea>
        <label for="phone" ><strong>Phone number/ nambari ya simu</strong></label>
        <input type="text"  name="phone" required>
      </div>
      <button type="submit" name="submit_case" value="Upload" ><strong>SEND/TUMA</strong></button>
      </div>
    </form>
    </div>
  </div>
  </div>
-->
  <!---emergency contacts begin---->
  <?php include('includes/emergency.php') ?>
   <!---emergency contacts end---->


</main>

 <!-- FOOTER -->
  </body>
  
</html>
