
<?php include('functions.php') ?>
 <!doctype html>

 <?php include('includes/header.php') ?>
  <body>

    <?php include('includes/nav.php') ?>
    
    <br>
<main>
 

<?php// include('includes/twitter.php') ?>

  
  
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


<div class="container container-fluid">
        
                  <h4 class="text-center">Case Progress</h4>
                  

                  <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
              
                <th>
                 Date
                </th>
                <th>
                  First name
                </th>
               
                <th>
                Last name
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
         $data = "SELECT date,fname,mname,lname,id,crime,residence,statement,phone,image,status FROM cases";
         $que = mysqli_query($conn,$data);
         $cnt = 1;
         while ($result = mysqli_fetch_assoc($que)) {


?>
<tr>

<td><?php echo $result['date']; ?></td>
<td><?php echo $result['fname']; ?></td>

<td><?php echo$result['lname']; ?></td>

<td><?php echo$result['crime']; ?></td>
<td><?php echo$result['residence']; ?></td>
<td><?php echo$result['statement']; ?></td>
<td><?php echo $result['phone']; ?></td>




              <td>
              <?php 
            if ($result['status'] == 0) {
              echo "<h1  class='btn btn-sm btn-danger'> In-progress </h1>";
              ?>
          </td>
            <td>
              <?php
            }
            else{
              echo " <h1  class='btn btn-sm btn-success'> Completed </h1>";
            }
        
      
           ?>
            </td>
        </tr>
        <?php
     $cnt++;
    }
      ?>
 </tbody>
</table>
</div>

  


</main>



 <!-- FOOTER -->
  </body>


</script>
  
</html>
