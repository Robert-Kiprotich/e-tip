<!doctype html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>E-tip Admin</title>
  <!-- plugins:css -->
  <script src='js/jquery.js'></script>
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
   <link href="css/vertical-layout-light/style.css" />
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/coat.png" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/fontawesome.min.js" integrity="sha512-xs1el+uLI2T4QTvRIv3kFBWvjQiPVAvKQM4kzZrJoLVZ1tSz1E0fkZch0cjd1f+sTk2MtBCHbP3PiVTdoFKAJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" integrity="sha512-xnwMSDv7Nv5JmXb48gKD5ExVOnXAbNpBWVAXTo9BJWRJRygG8nwQI81o5bYe8myc9kiEF/qhMGPjkSsF06hyHA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/styles.css">
  
</head>
<body>

 <?php include('../../functions.php') ?>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include('../includes/navbar.php') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
<nav class="sidebar sidebar-offcanvas bg-dark" id="sidebar">
        <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link"  data-toggle="collapse" href="../index.php" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
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
<main>
<div class="row">


  <div class="wanted-form">

 
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
        <input type="file"  name="file"  ><br>
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
 
   <!---emergency contacts end---->
</main>
 <!-- FOOTER -->
  </body>
</html>
