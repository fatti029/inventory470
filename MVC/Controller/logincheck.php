<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: ../../MVC/View/login.html"); // redirects if user is not logged inn
   }
   $user = $_SESSION['user']; //assigns user value
?>

<?php
	session_start();
	$link = mysqli_connect("localhost", "root","") or die(mysql_error()); //COnnect to server
	$username = mysqli_real_escape_string($link, $_POST['username']);
	$password = mysqli_real_escape_string($link, $_POST['password']);
	mysqli_select_db($link, "ims") or die("Cannot connect to database"); //Connect to database
	$query = mysqli_query($link, "SELECT * from users WHERE username='$username'"); //Query the users table if there are matching rows equal to $username
	$exists = mysqli_num_rows($query); //Checks if username exists
	$id = "";
	$table_users = "";
	$table_password = "";
	if($exists > 0) //If there are no returning rows or no existing username
	{
		while($row = mysqli_fetch_assoc($query)) //display all rows from query
		{
			$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
			$table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished
			$id = $row['uid'];
			
		if(($username == $table_users) && ($password == $table_password)) // checks if there are any matching fields
		{
			$_SESSION['user'] = $id; //set the username in a session. This serves as a global variable
			header("location: ../../MVC/View/home.html"); // redirects the user to the authenticated home page
		
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("../../MVC/View/login.html");</script>'; // redirects to login.php
		}
		}
	}
	else
	{
		Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
		Print '<script>window.location.assign("../../MVC/View/login.html");</script>'; // redirects to login.php
	}
?>