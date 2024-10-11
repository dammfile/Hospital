<?php
require 'conexion.php';

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST["cedula"]; 
    $nombre = $_POST["nombre"]; 
    $apellido = $_POST["apellido"];
    $genero = $_POST["genero"];
    $fecnac = $_POST["fecnac"];
    
    if (empty($cedula) || empty($nombre) || empty($apellido) || empty($genero) || empty($fecnac)) {
        echo "Todos los campos son obligatorios.";
        exit();
    }
    
    $stmt = $conn->prepare("INSERT INTO persona (numCedula, nombre, apellido, genero, fecnac) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $cedula, $nombre, $apellido, $genero, $fecnac);
    

    if ($stmt->execute()) {
        echo "Nueva persona agregada con éxito";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    
    $conn->close();
}
?>