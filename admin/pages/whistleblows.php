<?php include('../../functions.php') ?>
<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>E-tip Admin</title>
  <!-- plugins:css -->
  
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
   <link href="css/vertical-layout-light/style.css" />
  <link rel="stylesheet" href="../css/styles.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
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
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
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
            <a class="nav-link" ata-toggle="collapse"  href="whistleblows.php" aria-expanded="false" aria-controls="ui-basic">
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
            </li>
            </ul>
      </nav>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Whistleblows</h4>
                 
                  <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                 date
                </th>
                <th>
                 Suspect name
                </th>
                <th>
                 crime
                </th>
                <th>
                 Location
                </th>
                <th>
               Statement
               </th>
              </tr>
            </thead>
                      <tbody>
<?php
global $conn;
    
$data = "SELECT date,spctname,crime,location,statement,image FROM whistleblowers";
$result=$conn->query($data);
if($result->num_rows>0){
        
  while($row = $result->fetch_assoc()) {
  ?>
 <tr>
          <td><?php echo $row['date'];?></td>
          <td><?php echo $row['spctname'];?></td>
          <td><?php echo $row['crime'];?></td>
          <td><?php echo $row['location'];?></td>
          <td><?php echo $row['statement'];?></td>
        </tr>
<?php
  }
}
?>

                      </tbody>
                    </table>
                  </div>
</div>         
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
         
           
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include('../includes/footer.php') ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  
</body>

</html>

