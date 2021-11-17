<?php require('../../db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin  Login</title>
  <!-- plugins:css -->
 
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/styles.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/coat.png" />
</head>

<body>

<?php
session_start();

$username = "";
$password="";
$errors = array();
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
   $password=$password;
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../index.php');
      array_push($errors, "sucess");
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  
}
?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../images/secure-admin.png" class="rounded mx-auto d-block" alt="logo">
              </div>
              <h4 class="text-center">Welcome to E-tip admin</h4>
              <h6 class="font-weight-light text-center">Sign in to continue.</h6>
              
              <form class="pt-3"method="POST" name="login" >
              <?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
  <?php  endif ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" >
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                </div>
                <div class="mt-3" style="color:#07b34f;">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium"  type="submit"    name="login">SIGN IN</button>

                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                </div>
                
              </form>
           
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
 
  <!-- endinject -->
  
 

</body>

</html>
