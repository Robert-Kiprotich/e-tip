<?php
	include'../../functions.php'; 
	if (isset($_POST['approve'])){
		$appid = $_POST['appid'];
		$sql = "UPDATE cases SET status='1' WHERE id = '$appid'";
		$run = mysqli_query($conn,$sql);
		if($run == true){
			
			echo "<script> 
					alert('Application Approved');
					window.open('allCases.php','_self');
				  </script>";
		}else{
			echo "<script> 
			alert('Failed To Approved');
			</script>";
		}
	}
	
 ?>