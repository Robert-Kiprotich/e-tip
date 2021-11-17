<?php

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM cases WHERE tid=$id");
//	$_SESSION['message'] = "Address deleted!"; 
	//header('location: index.php');
  
}