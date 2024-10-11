<?php
require 'basephp/insertar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/persona.css">
    <title>Ingreso</title>
</head>
<body>
<div class="anim">
<header>
<h1>INGRESO USUARIO</h1>
</header>
<div class="contenido">
    
    <div class="form">
    <h2>Ingrese sus datos</h2>
    <form action="">
    <label for="cedula">Usuario</label>
        <input type="text" name="usuario" id="usuario" placeholder="Ingrese su Usuario">
    
    <label for="nombre">Contraseña</label>
        <input type="text" name="password" id="password" placeholder="Ingrese su Contraseña">
        
    <div class="btn-container">
            <input type="submit" class="btn" value="INGRESAR">
        </div>
    </form>
    </div>
</div>
<a href="../index.html" class="backbtn">Atrás</a>
</div>
</body>
</html>