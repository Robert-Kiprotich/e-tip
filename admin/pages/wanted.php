<?php  session_start();?>
<!doctype html>

<title>E-tip Admin</title>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <script src='js/jquery.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/fontawesome.min.js"
        integrity="sha512-pafh0hrrT9ZPZl/jx0cwyp7N2+ozgQf+YK94jSupHHLD2lcEYTLxEju4mW/2sbn4qFEfxJGZyIX/yJiQvgglpw=="
        crossorigin="anonymous"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script src='../js/main.js'></script>
    <script src="../js/bootstrap.min.js.map"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/carousel.css" rel="stylesheet">
    <link href="./css/vendor.bundle.base.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/coat.png" />
</head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"><i class="fa fa-id-card" aria-hidden="true"></i>E-tip</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse"  id="navbarNavAltMarkup">
    <div class="navbar-nav" >
    <a class="nav-item nav-link " href="../index.php">Home</a>
      
    </div>
    
  </div>
</nav>
    <br>
<main>
<div class="row">
 <div class="column-center-wanted">
 <?php
if(isset($_SESSION['status'])){
  echo'<div class="alert alert-success alert-dismissible">',
  '<a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>',
  '<strong>'.$_SESSION['status'].'</strong>', 
'</div>';
 
 // echo '<div class="alert alert-secondary" role="alert">'  '</div>';
 // unset($_SESSION['status']);
}
?>
<div class="card-center ">
<form action="../functions.php" method="POST" enctype="multipart/form-data">
     <h1>Update wanted suspect</h1>
     <div class="formcontainer ">
     <div class="container">
     <label for="date"><strong>Date/Tarehe</strong></label><br> 
    <input type="date"  name="date" required>
        <br><br> 
       <label for="psw"><strong>Suspect Name/jina la mshukiwa</strong></label>
       <input type="text" placeholder="" name="name" required>
       <label for="psw"><strong>Reward price</strong></label>
       <input type="text" placeholder="" name="reward" required>
       <label for="psw"><strong>Offence</strong></label>
       <input type="text" placeholder="" name="offence" required>
       <label for="psw"><strong>Hotline</strong></label>
       <input type="text" placeholder="" name="hotline" required>
       <label for="psw"><strong>Suspect image/picha la mshukiwa</strong></label>
      <input type="file"  name="file" required><br>
     </div>
     <button type="submit" value="Upload" name="update_wanted"><strong>UPDATE</strong></button>
     </div>
   </form>
 </div>
 </div>

 
</div>

 </div><!-- /.container -->


 
</main>

 </body>
 
</html>
