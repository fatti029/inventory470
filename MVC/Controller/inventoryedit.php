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

    $link = mysqli_connect("localhost", "root","") or die(mysql_error());//Connect to server
    mysqli_select_db($link, "ims") or die("Cannot connect to database"); //Connect to database
    $detail1 = $_POST['value1'];
    $detail2 = $_POST['value2'];
    $detail3 = $_POST['value3'];
    mysqli_error($link);
    $user = $_SESSION['user'];
    $column = $_POST['drop'];
    $time = date('H:i:s');  //time
    $date = date('Y-m-d');  //date

    $query = mysqli_query($link, "SELECT * FROM medicine WHERE name = '$detail1' AND manufacturer = '$detail2'");
    $row = mysqli_fetch_assoc($query);
    $var = $row["$column"];

    mysqli_query($link, "UPDATE medicine SET `$column`='$detail3' WHERE name = '$detail1' AND manufacturer = '$detail2'");

    mysqli_query($link, "INSERT INTO edith (name, manufacturer, oval, nval, edituser, edate, etime) VALUES ('$detail1', '$detail2', '$var', '$detail3', '$user', '$date', '$time')");

    header("location: ../../MVC/View/inventory.php?id=$id");
?>