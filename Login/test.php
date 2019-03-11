<?php 
	
	$name = $_POST['name'];
  	$contact = $_POST['contact'];
  	$city = $_POST['city'];
  	$state = $_POST['state'];
  	$email = $_POST['email'];
  	$password = $_POST['psw'];

	// $servername = "localhost";
 //  	$username = "root";
 //  	$password = "vibhi2112";
 //  	$dbname = "jipl";
  	
 //  	$conn = new mysqli($servername, $username, $password, $dbname);
  	
 //  	if ($conn->connect_error) {
 //    	die("Connection failed: " . $conn->connect_error);
 //  	}

  	echo $name . "<br>" . $contact . "<br>" . $city . "<br>" . $state . "<br>" . $email . "<br>" . $password;
?>