<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/persona.css">
    <title>Registrar</title>
</head>
<body>
<div class="anim">
<header>
<h1>Nueva Persona</h1>
</header>
<div class="contenido">
    
    <div class="form">
    <h2>Registrar nueva Persona</h2>
    <form action="personas.php" method="POST">
    <label for="cedula">Cedula:</label>
        <input type="number" name="cedula" id="cedula" placeholder="Ingrese Cedula">
    
    <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre">

    <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" placeholder="Ingrese Apellido">

    <label for="genero">Genero:</label>
            <select name="genero" id="genero">
            <option value="">- Selecciona -</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otros</option>
            </select>

    <label for="fecnac">Fecha de Nacimiento:</label>
    <input type="date" name="fecnac" id="fecnac">

    <div class="btn-container">
            <input type="submit" class="btn" value="ENVIAR">
        </div>
    </form>
    </div>
</div>
<a href="../index.html" class="backbtn">Atrás</a>
</div>
</body>
</html>