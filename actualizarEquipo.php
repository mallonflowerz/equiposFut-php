<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre_equipo = $_POST["nombre"];
    $puntaje = $_POST["puntaje"];
    $tabla = $_POST["tabla"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "juego";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "UPDATE equipos SET nombreEquipo = '$nombre_equipo', puntajeEquipo = '$puntaje', tablaEquipo = '$tabla' WHERE idEquipo = '$id'";
    
    mysqli_query($conn, $sql);
    
    mysqli_close($conn);
}


?>