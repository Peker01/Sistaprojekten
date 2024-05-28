<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<form method="post" enctype="multipart/form-data">
  <label for="name">Namn:</label><br>
  <input type="text" id="namn" name="namn"><br>

  <label for="bankkonto">Bankkonto:</label><br>
  <input type="text" id="bankkonto" name="bankkonto"><br>

  <label for="saldo">Saldo:</label><br>
  <input type="text" id="saldo" name="saldo"><br>

  <label for="bild">Ladda upp bild:</label><br>
  <input type="file" id="bild" name="bild" accept="image/*" required><br><br>

  <button type="submit" name="submit">Spara</button>

</form>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_bank";

// Skapa connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checka connection och skapa databas

// $sql = "CREATE DATABASE user_bank";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

//table
// $sql = "CREATE TABLE user_info (
//   namn VARCHAR(30) NOT NULL, 
//   bankkonto INT(40) NOT NULL PRIMARY KEY,
//   saldo INT(50),
//   img VARCHAR(50),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";
  
//  if (mysqli_query($conn, $sql)) {
//   echo "Table user_info created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($conn);
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["submit"])) {
    $namn = $_POST["namn"];
    $bankkonto = $_POST["bankkonto"];
    $saldo = $_POST["saldo"];

    //insert data
    $sql = "INSERT INTO user_info (namn, bankkonto, saldo) 
            VALUES ('$namn', '$bankkonto', '$saldo')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}

?>


</body>
</html>
