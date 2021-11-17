
<?php  session_start();?>



<?php include('../../functions.php') ?>

<!--delete row -->
<?php
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM cases WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: allCases.php');
}
?>

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- endinject -->
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="../images/coat.png" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/fontawesome.min.js" integrity="sha512-xs1el+uLI2T4QTvRIv3kFBWvjQiPVAvKQM4kzZrJoLVZ1tSz1E0fkZch0cjd1f+sTk2MtBCHbP3PiVTdoFKAJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" integrity="sha512-xnwMSDv7Nv5JmXb48gKD5ExVOnXAbNpBWVAXTo9BJWRJRygG8nwQI81o5bYe8myc9kiEF/qhMGPjkSsF06hyHA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript">
// function delete_id(tid)
// {
//  if(confirm('Sure To Remove This Record ?'))
//  {
//   window.location.href='allCases.php?delete_id='+tid;
//  }
// }
</script>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include('../includes/navbar.php') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
    
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link"   href="../index.php" >
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="allCases.php">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">All Cases</span>
            </a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="whistleblows.php" >
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Whistleblows</span>
              <i class="menu-arrow"></i>
            </a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="missingPersonupld.php" aria-expanded="false" aria-controls="charts">
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
            <a class="nav-link" data-toggle="collapse" href="viewMissing.php" >
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


 
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All cases</h4>

                  <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
              <th>
                 Image
                </th>
                <th>
                 date
                </th>
                <th>
                  First name
                </th>
                <th>
                Middle name
                </th>
                <th>
                Last name
                </th>
                <th>
                 ID no
                </th>
                <th>
                 crime
                </th>
                <th>
                 residence
                </th>
                <th>
                 statement
                </th>
                <th>
                 phone
                </th>
              </tr>
            </thead>
            <tbody>
         
<?php
            global $conn;
    $data = "SELECT date,fname,mname,lname,id,crime,residence,statement,phone,image FROM cases";
    $result=$conn->query($data);

    if($result->num_rows>0){
        
      while($row = $result->fetch_assoc()) {
   
        
        ?>
        <tr>
        <td><?php echo $row['image']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['fname']; ?></td>
        <td><?php echo $row['mname']; ?></td>
        <td><?php echo $row['lname']; ?></td>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['crime']; ?></td>
        <td><?php echo $row['residence']; ?></td>
        <td><?php echo $row['statement']; ?></td>
        <td><?php echo $row['phone']; ?></td>

        <td>
        <!-- Button trigger modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Edit
</button>
<?php
// global $conn;

// if (isset($_POST['update'])) {
//   //$id = $_POST['id'];
// 	$date = $_POST['date'];
// 	$fname = $_POST['fname'];
//   $mname = $_POST['mname'];
//   $lname = $_POST['lname'];
// 	$residence = $_POST['residence'];
//   $phone = $_POST['phone'];
  
// 	mysqli_query($conn, "UPDATE cases SET date='$date', fname='$fname', mname='$mname', lname='$lname',residence='$residence', phone='$phone' WHERE id=$id");
// 	$_SESSION['message'] = "Address updated!"; 
// 	//header('location: index.php');
//}
?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">date</label>
    <input type="text" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First name</label>
    <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Middle name</label>
    <input type="text" class="form-control" name="mname" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last name</label>
    <input type="text" class="form-control" name="lname" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">residence</label>
    <input type="text" class="form-control" name="residence" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">phone</label>
    <input type="text" class="form-control" name="phone"  id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="modal-footer">
  
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php if ($update == true): ?>
        <button type="submit" name="update" class="btn btn-primary">save</button>
        <?php endif ?>
      </div>

      </form>
       
      </div>
      
    </div>
  </div>
</div>
        </td>
        <td>
				<a href="allCases.php?del=<?php echo $row['id']; ?>" class="btn btn-danger" >Delete</a>
			</td>
     
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

</body>
<script src='../js/jquery.js'></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/main.js"></script>

</html>


