<?php
$kayitdate= $_POST["kayitdate"];

$servername = "localhost";
$username = "root";
$password = "9498";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

        echo "<table border='1' width='600px'>";
        echo "<tr>";
        echo "<th>USER ID</th>";
        echo "<th>NAME</th>";
        echo "<th>SURNAME</th>";
        echo "<th>GENDER</th>";
        echo "<th>BİRTH DATE</th>";
        echo "</tr>";
     $conn->set_charset("utf8");
     $sql =$conn->query("SELECT userId, name, surname, gender, birthdate FROM user WHERE kayitdate= '".$kayitdate."';");
     while( $result=$sql->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" ,$result['userId'] ,"</td>";
        echo "<td>" ,$result['name'] ,"</td>";
        echo "<td>" ,$result['surname'] ,"</td>";
        echo "<td>" ,$result['gender'] ,"</td>";
        echo "<td>" ,$result['birthdate'] ,"</td>";
        echo "<tr>";
    }
mysqli_close($conn);

?>