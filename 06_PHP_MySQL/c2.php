<?php
$servername = "example.shop";
$username = "admin_admin_db";
$password = "pass";
$dbname = "admin_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, matricula, nombre  FROM alumnos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Matricula: " . $row["matricula"]. " " . $row["nombre"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>


