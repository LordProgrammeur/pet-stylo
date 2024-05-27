<?php
include 'conexion.php';

// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $nombre_mascota = $_POST["nombre_mascota"];
    $raza = $_POST["raza"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
    $edad_mascota = $_POST["edad_mascota"];
    $cuidado = $_POST["cuidado"];

    // Insertar cita en la base de datos
    $sql = "INSERT INTO cita (nombre_mascota, raza, fecha_ingreso, edad_mascota, cuidado) 
            VALUES ('$nombre_mascota', '$raza', '$fecha_ingreso', '$edad_mascota', '$cuidado')";

    if ($conexion->query($sql) === TRUE) {
        echo "Cita agregada exitosamente";
    } else {
        echo "Error al agregar la cita: " . $conexion->error;
    }
}
?>
