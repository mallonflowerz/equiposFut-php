<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juego";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sql = "SELECT * from equipos order by puntajeEquipo DESC";
    $resultado = mysqli_query($conn, $sql);

    // Mostrar los datos en HTML
    echo "<table class='table table-striped table-dark' id='tabla_'>";
    echo "<thead>";
    echo "<tr><th>ID</th><th>NOMBRE</th><th>PUNTAJE</th><th>TABLA</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr><td>" . $fila["idEquipo"] . "</td><td>" . $fila["nombreEquipo"] . "</td><td>" . $fila["puntajeEquipo"] . "</td><td>" . $fila["tablaEquipo"] . "</td></tr>";
    }
    echo "</tbody>";
    echo "</table>";

} 



?>