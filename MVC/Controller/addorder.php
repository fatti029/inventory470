<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: ../../MVC/View/login.html"); // redirects if user is not logged inn
   }
   $user = $_SESSION['user']; //assigns user value

	$regValue = $_SESSION['user'];
	$result = false;
	$dbhost = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'ims';
	$name = $_POST['name'];
	$mfg = $_POST['manufacturer'];
	$cat = $_POST['category'];
	$up = $_POST['uprice'];
	$q = $_POST['quantity'];
	$date = date('Y-m-d');
	$price = $up * $q;
	$conn = new mysqli($dbhost,$username,$password,$db);
	$sql="INSERT INTO medicine (name, manufacturer, category, uprice, quantity) VALUES ('$name','$mfg','$cat','$up','$q')";
	mysqli_query($conn, $sql);
	$sql2="INSERT INTO orderh (name, manufacturer, category, uprice, quantity, price, odate) VALUES ('$name','$mfg','$cat','$up','$q','$price','$date')";
	mysqli_query($conn, $sql2);
	Print '<script>alert("Order Placed");</script>'; //Prompts the user
	Print '<script>window.location.assign("../../MVC/View/order.html");</script>'; // redirects to login.php
	$conn->close();	
?>