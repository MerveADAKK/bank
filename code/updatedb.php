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
     $conn->set_charset("utf8");

     $sql =$conn->query("SELECT name, surname, gender, birthdate FROM user WHERE userId= '".$userId."';");
     $result=$sql->fetch_assoc();

     // Get the first name
     $name =$result['name'];  
     $surname =$result['surname'];  
     $gender =$result['gender'];
     $birthdate =$result['birthdate'];
 


     header('Location:updatee.php?name='.$name.'&surname='.$surname.'&gender='.$gender.'&birthdate='.$birthdate.'&userId='.$userId);


mysqli_close($conn);

?>