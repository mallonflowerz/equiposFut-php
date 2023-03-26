<?php
$id = $_POST["id"];
$nombre_equipo = $_POST["nombre"];
$puntaje = $_POST["puntaje"];
$tabla = $_POST["tabla"];

echo "ID: " . $id . " nombre: " . $nombre_equipo . " puntaje: " . $puntaje . " tabla: " . $tabla;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juego";

$query = "INSERT INTO equipos (idEquipo, nombreEquipo, puntajeEquipo, tablaEquipo) VALUES ('$id', '$nombre_equipo', '$puntaje', '$tabla')";

$conn = mysqli_connect($servername, $username, $password, $dbname);

mysqli_query($conn, $query);

mysqli_close($conn);

// session_start();
// $_SESSION["id"] = $id;
// $_SESSION["nombre"] = $nombre;
// $_SESSION["puntaje"] = $puntaje;
// $_SESSION["tabla"] = $tabla;
// header("Location: actualizarEquipo.php");

?>