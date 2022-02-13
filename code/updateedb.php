<?php

$userId = $_POST["userId"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$gender = $_POST["gender"];
$birthdate = $_POST["birthdate"];

$servername = "localhost";
$username = "root";
$password = "9498";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
    $conn->set_charset("utf8");
     $sql ="UPDATE user SET name='".$name."', surname='".$surname."', gender='".$gender."', birthdate='".$birthdate."' WHERE userId= '".$userId."';";
     
     if ($conn->query($sql) === TRUE) {
      header('Location:updatebasarili.php');
    } else {
      echo "PLEASE MAKE SURE YOU ENTER THE INFORMATION CORRECTLY!";
    }


mysqli_close($conn);

?>