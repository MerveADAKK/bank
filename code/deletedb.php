<?php
$userId= $_POST["userId"];

$servername = "localhost";
$username = "root";
$password = "9498";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM user WHERE userId='".$userId."';";
if ($conn->query($sql) === TRUE) {
 header('Location:deletebasarili.php');
} else {
echo "THIS ID DOES NOT HAVE A USER. ENTER ANOTHER ID.";
}

mysqli_close($conn);
?>
           