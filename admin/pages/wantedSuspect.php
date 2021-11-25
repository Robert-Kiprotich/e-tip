<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>E-tip Admin</title>
  <!-- plugins:css -->
  <script src='js/jquery.js'></script>
  
 
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/styles.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/coat.png" />
  <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/carousel.css" rel="stylesheet">
    <link href=".//css/vendor.bundle.base.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include('../includes/navbar.php') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     <?php include('../includes/settings-panel.php') ?>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
     <?php //include('../includes/sidebar.php') ?>
     <nav class="sidebar sidebar-offcanvas bg-dark" id="sidebar">
        <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link"  data-toggle="collapse" href="../index.php" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item  <?php if($page=='allCases'){echo 'active';}?>">
            <a class="nav-link"  data-toggle="collapse" href="allCases.php" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">All Cases</span>
            </a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="whistleblows.php#" data-toggle="collapse" aria-expanded="false" aria-controls="charts">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Whistleblows</span>
              <i class="menu-arrow"></i>
            </a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="missingPersonupld.php#" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Upload missing person</span>
              <i class="menu-arrow"></i>
            </a>
           
          </li>
               
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="wantedSuspect.php" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Wanted Suspects</span>
              <i class="menu-arrow"></i>
            </a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="viewMissing.php" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Unidenified people</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="StolenItems.php" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Stolen Items</span>
              <i class="menu-arrow"></i>
            </a>
           
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="register.php" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Register Admin</span>
              <i class="menu-arrow"></i>
            </a>

            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="wantedSuspectupld.php" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Add Suspect</span>
              <i class="menu-arrow"></i>
            </a>
        </ul>
      </nav>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
      <!-- partial -->
   
<?php include('../../db.php') ?>
<?php include('../includes/header.php') ?>
 <body>
 <?php
    function getWanted(){
      global $conn;
    $data = "SELECT date,name,reward,offence,hotline,image FROM wanted";
    
    $result=$conn->query($data);
    
    
    
    if($result->num_rows>0){
      
      while($row = $result->fetch_assoc()) {
        $targetDir = '../images/wanted/'.$row["image"];
          $date= $row['date'];
          $name= $row['name'];
          $reward= $row['reward'];
          $offence= $row['offence'];
          $hotline= $row['hotline'];
    
    echo"
    <div class='col-md-3'>
    
    <div class='card' >
    <h3>$name </h3>
          <img src='$targetDir' style='width:100%'>
          <div class='card-body'>
          <h7>Last seen:$date</h7> 
          <p>Reward:$reward</p> 
          <p>Offence:$offence</p> 
          <p>Hotline:$hotline</p>
      </div>
    </div>
    </div>
    ";
    
    
      
    }
    }
    return false;
    }
    
    
?>
   
  
<main>
<div class="container">
<div class='row'>
 <?php getWanted(); ?>
 </div>  
 </div>
 <main>
  <!-- End custom js for this page-->
</body>

</html>

