
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

     <h1>SUBMIT A TIP</h1>
     <div class="formcontainer">
     <div class="container">
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
        <input type="text" class="form-control"  placeholder="Suspect Name" name="spctname" required>
            
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        
        <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Nature of crime" name="crime" required>
        </div>
    </div>
    <div class="form-group">
       
        <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="location" name="location"  required>
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
            <input type="file" name="image" class="form-control">
        </div>
    </div>
</div>
</div>
</div>
     <button type="submit" value="Upload" name="submit_whistleblow"><strong>SEND/TUMA</strong></button>
     </div>
   </form>
 </div>
 </div>
    <!--- <label for="date"><strong>Date/Tarehe</strong></label><br> 
        <input type="date"  name="date" required>
        <br> <br> 
       <label for="psw"><strong>Suspect Name/jina la mshukiwa</strong></label>
       <input type="text" placeholder="" name="spctname" required>
       <label for="psw"><strong>type of crime/Ana la uhalifu</strong></label>
       <input type="text" placeholder="" name="crime" required>
       <label for="psw"><strong>Crime location/mahali</strong></label>
       <input type="text" placeholder="" name="location" required>
       <label for="psw"><strong>Upload Evidence/weka ushahidi (image or video/picha au video)</strong></label>
      <input type="file"  name="image" required><br>
      <label for="stmnt"><strong>Statement/maelezo</strong></label>
      <textarea id="mytextarea"  name="statement">Enter your statement/Ingiza maelezo</textarea>--->
     

 <?php include('includes/emergency.php') ?>

</div>
   <hr class="featurette-divider">

   <!-- /END THE FEATURETTES -->

 </div><!-- /.container -->


 
</main>

 </body>
 
</html>
