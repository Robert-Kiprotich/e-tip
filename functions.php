<?php
include('db.php');




$nameErr =   $idnErr ="";

//cases submission
if(isset($_POST['submit_case'])){
  
  $date= date("Y-m-d");
    //$date = $conn->real_escape_string($_POST['date']);
    $fname = $conn->real_escape_string($_POST['fname']);
    $mname = $conn->real_escape_string($_POST['mname']);
    $lname = $conn->real_escape_string($_POST['lname']);
    $idno = $conn->real_escape_string($_POST['idno']);
    $crime = $conn->real_escape_string($_POST['crime']);
    $residence = $conn->real_escape_string($_POST['residence']);
    $statement = $conn->real_escape_string($_POST['statement']);
    $phone= $conn->real_escape_string($_POST['phone']);

    $targetDir = "admin/images/cases/";

    if(!empty($_FILES["file"]["name"])){
    //   $image= $_FILES["file"]["name"];
    // }
    //  else {

      $image = basename($_FILES["file"]["name"] || NULL);
  $targetFilePath = $targetDir . $image;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
      // Allow certain file formats
      $allowTypes = array('jpg','png','jpeg','gif','pdf');
      if(in_array($fileType, $allowTypes)){
         // Upload file to server
         if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

$sql = "INSERT INTO cases(date,fname,mname,lname,idno,crime,residence,statement,phone,image) VALUES('$date','$fname','$mname','$lname','$idno','$crime','$residence','$statement','$phone',NULL)";

         }}}

if($conn->query($sql)==0){
  $_SESSION['status']="data inserted succesfully";
  header('location: index.php');
  

}
else{
  $_SESSION['status']=" No data inserted ";
}
$conn->close();
}


//theft submission
include('db.php');
if(isset($_POST['submit_theft'])){
  $date = $conn->real_escape_string($_POST['date']);
  $datestln = $conn->real_escape_string($_POST['datestln']);
  $fname = $conn->real_escape_string($_POST['fname']);
  $mname = $conn->real_escape_string($_POST['mname']);
  $lname = $conn->real_escape_string($_POST['lname']);
  $id = $conn->real_escape_string($_POST['id']);
  $stlnitem = $conn->real_escape_string($_POST['stlnitem']);
  $residence = $conn->real_escape_string($_POST['residence']);
  $residence = $conn->real_escape_string($_POST['residence']);
  $statement = $conn->real_escape_string($_POST['statement']);
  $phone= $conn->real_escape_string($_POST['phone']);

  $targetDir = "admin/images/theft/";

  if(!empty($_FILES["file"]["name"])){

    $image = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $image;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
       // Upload file to server
       if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

$sql = "INSERT INTO theft(date,datestln,fname,mname,lname,id,stlnitem,residence,statement,phone,image) VALUES('$date','$datestln','$fname','$mname','$lname','$id','$stlnitem','$residence','$statement','$phone','$image')";

       }}}

if($conn->query($sql)==true){
header('location: index.php');
array_push($notify, "records insereted suceessfully");

}
else{
array_push($notify," Could not able to execute $sql. " . $conn->error);
}
$conn->close();
}

function getRecovered(){
  global $conn;
$data = "SELECT date,datestln,fname,mname,lname,id,stlnitem,residence,statement,phone,image FROM theft";

$result=$conn->query($data);



if($result->num_rows>0){
  
  while($row = $result->fetch_assoc()) {
    $targetDir = 'admin/images/theft/'.$row["image"];
    $date = $row['date'];
    $datestln =$row['datestln'];
    $fname = $row['fname'];
    $mname = $row['mname'];
    $lname = $row['lname'];
    $id = $row['id'];
    $stlnitem =$row ['stlnitem'];
    $residence = $row['residence'];
    $statement = $row['statement'];
    $phone= $row['phone'];

echo"
<div class='col-md-3'>

<div class='card' >
<h3> </h3>
      <img src='$targetDir' style='width:100%'>
      <div class='card-body' style='font-size:10'>
      <p>stolen on:$datestln</p> 
      <p>Recovered on:$datestln</p> 
      <p>Item:$stlnitem</p> 
      <p>Owner:$fname</p> 
      <p>Place of crime:$residence</p>
  </div>
</div>
</div>
";

// echo 'id:' . $row['id']. 'name:' .$row['name']. ' description: ' . $row['description']. 'image ' . $row['image']. 'price'.$row['price']. '<br>';
  
}
}
return false;
}


















//missing persn report
include('db.php');
if(isset($_POST['submit_lostpsn'])){
  $fname = $conn->real_escape_string($_POST['fname']);
  $mname = $conn->real_escape_string($_POST['mname']);
  $lname = $conn->real_escape_string($_POST['lname']);
  $date = $conn->real_escape_string($_POST['date']);
  $residence = $conn->real_escape_string($_POST['residence']);
  $statement = $conn->real_escape_string($_POST['statement']);
  $phone= $conn->real_escape_string($_POST['phone']);

  $targetDir = "admin/images/missing/";

  if(!empty($_FILES["file"]["name"])){

    $image = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $image;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
       // Upload file to server
       if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

$sql = "INSERT INTO missing(fname,mname,lname,date,residence,statement,phone,image) VALUES('$fname','$mname','$lname','$date','$residence','$statement','$phone','$image')";

       }}}

if($conn->query($sql)==true){
header('location: index.php');
array_push($notify, "records insereted suceessfully");

}
else{
array_push($notify," Could not able to execute $sql. " . $conn->error);
}
$conn->close();
}

function getMissing(){
  global $conn;
$data = "SELECT fname,mname,lname,date,residence,statement,phone,image FROM missing";

$result=$conn->query($data);



if($result->num_rows>0){
  
  while($row = $result->fetch_assoc()) {
    $targetDir = 'admin/images/missing/'.$row["image"];
    $fname = $row['fname'];
    $mname = $row['mname'];
    $lname = $row['lname'];
    $date = $row['date'];
    $residence =$row['residence'];
    $statement =$row['statement'];
    $phone= $row['phone'];

echo"
<div class='col-md-3'>

<div class='card' >
<h3> </h3>
      <img src='$targetDir' style='width:100%'>
      <div class='card-body'>
      <h5>Name:$fname</h5> 
      <h5>$lname</h5> 
      <p>Last Seen:$date</p> 
      <p>Location:$residence</p>
      <p>Phone:$phone</p> 
  </div>
</div>
</div>
";

// echo 'id:' . $row['id']. 'name:' .$row['name']. ' description: ' . $row['description']. 'image ' . $row['image']. 'price'.$row['price']. '<br>';
  
}
}
return false;
}




include('db.php');
//whistleblower submission
if(isset($_POST['submit_whistleblow'])){
  $date = $conn->real_escape_string($_POST['date']);
  $spctname = $conn->real_escape_string($_POST['spctname']);
  $crime = $conn->real_escape_string($_POST['crime']);
  $location = $conn->real_escape_string($_POST['location']);
  $statement = $conn->real_escape_string($_POST['statement']);

  $targetDir = "admin/images/whistleblows/";

    if(!empty($_FILES["image"]["name"])){

  $image = basename($_FILES["image"]["name"]);
  $targetFilePath = $targetDir . $image;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
      // Allow certain file formats
      $allowTypes = array('jpg','png','jpeg','gif','pdf');
      if(in_array($fileType, $allowTypes)){
         // Upload file to server
         if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
  $sql = "INSERT INTO whistleblowers(date,spctname,crime,location,statement,image) VALUES('$date','$spctname','$crime','$location','$statement','$image')";
}}}

if($conn->query($sql)==true){

header('location: whistle.php');
array_push($notify, "records insereted suceessfully");
}
else{
array_push($notify," Could not able to execute $sql. " . $conn->error);
}
$conn->close();
}


//wated suspect upload
include('db.php');
//whistleblower submission
if(isset($_POST['update_wanted'])){
  $date = $conn->real_escape_string($_POST['date']);
  $name = $conn->real_escape_string($_POST['name']);
  $reward = $conn->real_escape_string($_POST['reward']);
  $offence = $conn->real_escape_string($_POST['offence']);
  $hotline = $conn->real_escape_string($_POST['hotline']);

  $targetDir = "admin/images/wanted/";

    if(!empty($_FILES["file"]["name"])){

  $image = basename($_FILES["file"]["name"]);
  $targetFilePath = $targetDir . $image;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
      // Allow certain file formats
      $allowTypes = array('jpg','png','jpeg','gif','pdf');
      if(in_array($fileType, $allowTypes)){
         // Upload file to server
         if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
  $sql = "INSERT INTO wanted(date,name,reward,offence,hotline,image) VALUES('$date','$name','$reward','$offence','$hotline','$image')";
}}}

if($conn->query($sql)==true){

header('location: admin/pages/wantedSuspectupld.php');
array_push($notify, "records insereted suceessfully");
}
else{
array_push($notify," Could not able to execute $sql. " . $conn->error);
}
$conn->close();
}





//delete
$sql = 'select * from cases';
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
 
if(isset($_GET['action'],$_GET['id']) && $_GET['action'] == 'delete')
{
    $id = trim($_GET['tid']);
    $deleteSql = 'delete from cases where tid = '.$id;
    mysqli_query($conn,$deleteSql);
    
    if(mysqli_query($conn,$deleteSql))
    {
        header('location:index.php?success=true');
        exit();
    }
}

function getWanted(){
  global $conn;
$data = "SELECT date,name,reward,offence,hotline,image FROM wanted";

$result=$conn->query($data);



if($result->num_rows>0){
  
  while($row = $result->fetch_assoc()) {
    $targetDir = 'admin/images/wanted/'.$row["image"];
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
































//emergency contacts
 function getEmergencies(){
  global $conn;
  $data = "SELECT  number,service, provider FROM contacts";
  $result=$conn->query($data);
  while($row = $result->fetch_assoc()) {
    $number= $row['number'];
    $service= $row['service'];
    $provider= $row['provider'];
    
echo"

  <h3>Provider</h3>
  <p>$provider</p>
  <h3>Service</h3>
  <p>$service</p>
  <h3>Contact</h3>
  <p>$number</p>

";

 }}
//getting from database
function getData(){
    global $conn;
$data = "SELECT date,fname,mname,lname,id,crime,residence,statement,phone,image FROM cases";

$result=$conn->query($data);



if($result->num_rows>0){
    
    while($row = $result->fetch_assoc()) {
        $fname= $row['fname'];
        $mname= $row['mname'];
        $lname= $row['lname'];
        $id= $row['id'];
        $residence= $row['residence'];
        $statement= $row['statement'];
        $phone= $row['phone'];
        $image= $row['image'];
        $crime= $row['crime'];
    
echo"
<div class='content'>
<img class='product-1' src='upload/$image'>
<h7>$id</h1>
<h3>$name</h3>
<p>$description</p>
<h6>$price</h6>
<ul>
<li><i class='fa fa-star' aria-hidden='true'></i></li>
<li><i class='fa fa-star' aria-hidden='true'></i></li>
<li><i class='fa fa-star' aria-hidden='true'></i></li>
<li><i class='fa fa-star' aria-hidden='true'></i></li>
<li><i class='fa fa-star' aria-hidden='true'></i></li>

</ul>

<button class='buy-4'>Buy Now</button>
</div>
";

  // echo 'id:' . $row['id']. 'name:' .$row['name']. ' description: ' . $row['description']. 'image ' . $row['image']. 'price'.$row['price']. '<br>';
    
}
}
return false;
}
function getCases(){
    global $conn;
    $data = "SELECT date,fname,mname,lname,id,crime,residence,statement,phone,image FROM cases";
    $result=$conn->query($data);
          $dt='
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
            <tbody>';

    if($result->num_rows>0){
        
        while($row = $result->fetch_assoc()) {
          $image= $row['image'];
          $date=$row['date'];
          $fname= $row['fname'];
          $mname= $row['mname'];
          $lname= $row['lname'];
          $id= $row['id'];
          $residence= $row['residence'];
          $statement= $row['statement'];
          $phone= $row['phone'];
          $crime= $row['crime'];
    $dt .='
        <tr>
          <td>'.$image.'</td>
          <td>'.$date.'</td>
          <td>'.$fname.'</td>
          <td>'.$mname.'</td>
          <td>'.$lname.'</td>
          <td>'.$id.'</td>
          <td>'.$crime.'</td>
          <td>'.$residence.'</td>
          <td>'.$statement.'</td>
          <td>'.$phone.'</td>
          <td><button type="submit" >edit<i class="fa fa-trash" aria-hidden="true"></i></button></td>
          <td><button type="submit" name="del" class="del_btn">Delete</button></td>
          
        </tr>
      ';    
}
echo $dt.'</tbody>

</table>
</div>
';
}
return false;
}
include('db.php');
function getWhistleblows(){
    global $conn;
    
    $data = "SELECT date,spctname,crime,location,statement,image FROM whistleblowers";
    $result=$conn->query($data);
          $dt='
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
            <tbody>';

    if($result->num_rows>0){
        
        while($row = $result->fetch_assoc()) {
          
          $date=$row['date'];
          $spctname= $row['spctname'];
          $crime= $row['crime'];
          $location= $row['location'];
          $statement= $row['statement'];
         
    $dt .='
        <tr>
          <td>'.$date.'</td>
          <td>'.$spctname.'</td>
          <td>'.$crime.'</td>
          <td>'.$location.'</td>
          <td>'.$statement.'</td>
        </tr>
      ';

      
}
echo $dt.'</tbody>
</table>
</div>
';
}
return false;
}



?>