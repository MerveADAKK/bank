<?php
   $name = $_POST["name"];
   $surname = $_POST["surname"];
   $gender = $_POST["gender"];
   $birthdate = $_POST["birthdate"];
   $kayitdate = date('y-m-d');

   $servername = "localhost";
   $username = "root";
   $password = "9498";
   $dbname = "mydb";

   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
   }
   
   $sql = "INSERT INTO user(name, surname, gender, birthdate, kayitdate)
   VALUES ('".$name."', '".$surname."', '".$gender."', '".$birthdate."', '".$kayitdate."')";

   if ($conn->query($sql) === TRUE) {
    header('Location:createbasarili.php');
   } else {
   echo "PLEASE MAKE SURE YOU ENTER THE INFORMATION CORRECTLY!";
   }
   mysqli_close($conn);

?>