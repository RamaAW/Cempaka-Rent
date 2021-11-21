<?php
	include_once("connection.php");
	
	if(isset($_POST['btn_submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$feedback = $_POST['feedback'];
			
		$sql = "INSERT INTO tb_feedback(name, email, feedback) VALUES(:name, :email, :feedback)";
		$query = $dbConn -> prepare($sql);
		$query -> bindparam(':name', $name);
		$query -> bindparam(':email', $email);
		$query -> bindparam(':feedback', $feedback);
		$query -> execute();
		header('Location: ../PAD1');
	}
?>