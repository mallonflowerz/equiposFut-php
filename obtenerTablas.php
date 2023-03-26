<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juego";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$result = mysqli_query($conn, "SHOW TABLES");

$tables = array();

while ($row = mysqli_fetch_array($result)) {
    $tables[] = $row[0];
}

echo json_encode($tables);
mysqli_close($conn);



?>