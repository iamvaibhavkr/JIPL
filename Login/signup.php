<?php
	session_start();
  	
  	$_SESSION['message'] = '';
  	
  	$servername = "localhost";
  	$username = "root";
  	$password = "vibhi2112";
  	$dbname = "jipl";
  	
  	$conn = new mysqli($servername, $username, $password, $dbname);
  	
  	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
  	}

  	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
    // Two passwords are equal to each other
  		if ($_POST['psw'] == $_POST['psw-repeat']) {
  			# code...
  			$name = $_POST['name'];
  			$contact = $_POST['contact'];
  			$city = $_POST['city'];
  			$state = $_POST['state'];
  			$email = $_POST['email'];
  			$password = $_POST['psw'];

  			$sql = "INSERT INTO signup (Name, Contact, City, State, Email, Password) VALUES ('" . $name . "', '" . $contact . "', '" . $city . "', '" . $state . "', '" . $email . "', '" . $password . "')";

  			$result = $conn -> query($sql);

  			if ($result == TRUE) {
  				# code...
  				header("location: login_signup.html");
  			}
  			else {
  				header("location: signup.html");
  			}
  		}
  	}
?>