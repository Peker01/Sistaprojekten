<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
</head>
<body>
    
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_bank";

// Skapa connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql ="SELECT img, namn, bankkonto, saldo FROM user_info";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["namn"] . "</td>";
        echo "<td>" . $row["bankkonto"] . "</td>";
        echo "<td>" . $row["saldo"] . "</td>";
        echo "</tr>";



    }



}


?>



</body>
</html>