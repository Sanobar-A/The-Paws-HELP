<?php
	$email = $_POST['email'];
	$field = $_POST['field'];
	$feedback = $_POST['feedback'];

	// Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into feedbackdetails(email, field, feedback) values(?, ?, ?)");
		
		if ($stmt === false) {
			die("Error in prepare: " . $conn->error);
		}
		
		$stmt->bind_param("sss", $email, $field, $feedback);
		
		$execval = $stmt->execute();
		
		if($execval === false) {
			die("Error during execution: " . $stmt->error);
		}
		
		echo "successfull...";
		
		$stmt->close();
		$conn->close();
	}
?>