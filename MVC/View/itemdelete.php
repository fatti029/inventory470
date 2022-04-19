<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "ims"; /* Database name */
$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$med = $_POST['itemdelete'];
$sql = "DELETE  FROM medicine WHERE name='$med';";
$result = mysqli_query($con, $sql);

header("location: ../../MVC/View/inventory.php");

?>

