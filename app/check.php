<?php  
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		echo $name."<br />".$surname."<br />".$email."<br />".$message;
	}	else {
		header("Location: ../index.php");
	}
?>