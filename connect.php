<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];

    $conn = new mysqli('localhost','root','','login');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into details(fname,lname,uname,state,city,zip)
            values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi",$fname,$lname,$uname,$state,$city,$zip);
        $stmt->execute();
        echo "login successfull";
        $stmt->close();
        $conn->close();
    }
?>