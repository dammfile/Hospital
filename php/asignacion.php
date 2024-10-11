<?php
require 'basephp/insertar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Nuevo Informe</title>
</head>
<body>
<header>
    <h1>Nuevo Informe</h1>
</header>

<div class="formulario">
    <form action="registros.php" method="post">
        <!-- Información del Usuario -->
        <legend><b>Información del Paciente </b></legend>
        <div class="user-info">
            <div class="organ">
            <label for="cedula">Cédula:</label>
            <input type="text" id="cedula" name="cedula" required>
            
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <div class="checkbox-container">
                    <label for="acomp">Comisión de Servicio</label>
                    <input type="checkbox" name="comi" id="comi">
                </div>
            </div>

            <div class="organ">
            <label for="atm">Atención Médica</label>
            <input type="text" name="atm" id="atm" required>

            <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
                </div>
            </div>

            <!-- Acompañante -->

            <legend><b>Acompañante</b></legend>
            <div class="checkbox-container">
        <label for="acomp">Acompañante</label>
        <input type="checkbox" name="acomp" id="acomp">
    </div>
    <div class="acomp-info">
    
    <div class="organ">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula">
    </div>
    

    <div class="organ">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido">

        <label for="razon">Anotaciones</label>
        <textarea id="razon" name="razon" rows="4" required></textarea>
    </div>
    </div>


        <!-- Información del Viaje -->
        <legend><b>Información del Viaje</b></legend>
        <div class="viaje-info">
            <div class="organ">
                <label for="origen">Origen:</label>
                <input type="text" id="origen" name="origen" required>

                <label for="destino">Destino:</label>
                <input type="text" id="destino" name="destino" required>
    
                <label for="razon">Anotaciones</label>
                <textarea id="razon" name="razon" rows="4" required></textarea>
            </div>

            <div class="organ">
                <label for="fecha">Fecha de Viaje:</label>
                <input type="date" id="fecha" name="fecha" required>

                <label for="agencia">Agencia:</label>
                <input type="text" id="agencia" name="agencia" required>
            </div>
        </div>
        <div class="btn-container">
            <input type="submit" class="btn" value="ENVIAR">
        </div>
    </form>
</div>

<a href="../html/menu.html" class="backbtn">Atrás</a>

</body>
</html>
