
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
<form  action="functions.php" method="POST" enctype="multipart/form-data" onsubmit="return validate();">
<div class="formcontainer">
      <div class="container">
      <h1> CASE REPORT</h1>
  <div class="row">
   <!--col start-->
   <div class="col-md-6">
     <div class="form-group">
       
        <div class="col-sm-10">
         <input type="text" class="form-control" id="currentDate"  name="date" placeholder="" value="" readonly > 
        </div>
    </div> 
    <div class="form-group">
        
        <div class="col-sm-10">
        <input type="text" class="form-control"  name="fname" id="fname" placeholder="First Name" autocomplete="off"> 
        <p  class="text-danger" id="error_fname" ></p>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        
        <div class="col-sm-10">
        <input type="text" class="form-control"  name="mname" id="mname" placeholder="Middle Name"  autocomplete="off">
        <p  class="text-danger" id="error_mname" ></p>
        </div>
    </div>
    <div class="form-group">
       
        <div class="col-sm-10">
        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" autocomplete="off" >
        <p  class="text-danger" id="error_lname" ></p>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" placeholder="Phone Number" onkeypress="javascript:return isNumber(event)" name="phone" autocomplete="off" >
            <p  class="text-danger" id="error_para" ></p>
        </div>
    </div>
    <div class="form-group">
        
        <div class="col-sm-10">
            <input type="text" class="form-control" id="idno" name="idno" onkeypress="javascript:return isNumber(event)"  placeholder="ID number" autocomplete="off">
            <p  class="text-danger" id="error_phone" ></p>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
       
        <div class="col-sm-10">
            <input type="text" class="form-control" id="crime" name="crime"  placeholder="Case" autocomplete="off">
            <p  class="text-danger" id="error_crime" ></p>
        </div>
    </div>
    <div class="form-group">
        
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="residence" id="residence" placeholder="Residence" autocomplete="off">
            <p  class="text-danger" id="error_residence" ></p>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
       
        <div class="col-sm-10">
        <textarea id="mytextarea" class="form-control" placeholder="Statement" id="statement" name="statement"></textarea>
        <p  class="text-danger" id="error_statement" ></p>
    </div>
    </div>
    <div class="form-group">
       
        <div class="col-sm-10">
            <input type="file" name="file" class="form-control">
        </div>
    </div>
</div>


   <!--col end-->
    
  </div>
 </div>
 <button onclick="confirmData()" type="submit" name="submit_case" value="Submit" ><strong>SEND/TUMA</strong></button>
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

<script type="text/javascript">

  function validate()
{
 var error="";
 var name = document.getElementById( "fname" );
 if( name.value == "" )
 {
  error = " cannot be empty. ";
  
  document.getElementById( "error_fname" ).innerHTML = error;
  return false;
 }

 var name = document.getElementById( "mname" );
 if( name.value == "" )
 {
  error = "  cannot be empty.";
  document.getElementById( "error_mname" ).innerHTML = error;
  return false;
 }
 var name = document.getElementById( "lname" );
 if( name.value == "" )
 
 {
  error = "  cannot be empty. ";
  document.getElementById( "error_lname" ).innerHTML = error;
  return false;
 }
 var name = document.getElementById( "idno" );
 if( name.value == "" )
 {
  error = " cannot be empty.";
  document.getElementById( "error_idno" ).innerHTML = error;
  return false;
 }
 var name = document.getElementById( "crime" );
 if( name.value == "" )
 {
  error = "  cannot be empty.";
  document.getElementById( "error_crime" ).innerHTML = error;
  return false;
 }
 var name = document.getElementById( "residence" );
 if( name.value == "" )
 {
  error = "  cannot be empty. ";
  document.getElementById( "error_residence" ).innerHTML = error;
  return false;
 }
 var name = document.getElementById( "statement" );
 if( name.value == "" )
 {
  error = "  cannot be empty. ";
  document.getElementById( "error_statement" ).innerHTML = error;
  return false;
 }
 var name = document.getElementById( "phone" );
 if( name.value == "" )
 {
  error = "  cannot be empty. ";
  document.getElementById( "error_phone" ).innerHTML = error;
  return false;
 }
 else
 {

  return true;
 }
 
}
function isNumber(evt) {
var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;
}


var today = new Date();
  var date =today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
  document.getElementById("currentDate").value = date;



  function confirmData() {
  confirm("Are you sure?");
}
</script>
  
</html>
