<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];

	// Database connection
	$conn = new mysqli('localhost','root','','login');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into details(fname, lname, uname, city, state, zip) values(?, ?, ?, ?, ?, ?)");
		
		if ($stmt === false) {
			die("Error in prepare: " . $conn->error);
		}
		
		$stmt->bind_param("sssssi", $fname, $lname, $uname, $city, $state, $zip);
		
		$execval = $stmt->execute();
		
		if($execval === false) {
			die("Error during execution: " . $stmt->error);
		}
		
		echo "Registration successfully...";
		
		$stmt->close();
		$conn->close();
	}
?>