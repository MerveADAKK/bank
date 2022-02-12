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
 header('deletebasarili.php');
} else {
echo "Eros: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);

?>
           