<?php
require 'basephp/insertar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registro.css">
    <title>Registros</title>
</head>
<body>
    <div class="contenido">
<header>
<h1>REGISTROS</h1>
</header>
<a href="../index.html" class="backbtn">Atrás</a>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <h1 id="ttitle">TABLA DE REGISTROS</h1>
                    <th style="border: 2px solid #0078ff;">N° de Formulario</th> 
                    <th style="border: 2px solid #0078ff;">C&eacute;dula</th> 
                    <th style="border: 2px solid #0078ff;">Nombre</th> 
                    <th style="border: 2px solid #0078ff;">Creaci&oacuten</th> 
                    <th style="border: 2px solid #0078ff;">Ultima Edici&oacuten</th>
                    <th style="border: 2px solid #0078ff;">Acciones</th> 
                    <th></th>
                </tr>
            </thead>
             <tbody>
                <tr>
                    <th> #1 </th> 
                    <th> 55964734 </th>
                    <th> Anthony Fagúndez </th>
                    <th> 23-07-2024 </th>
                    <th> 23-09-2024 </th>
                    <th>                     
                        <button class="btn"> Editar </button>
                        <button class="btn"> Eliminar </button>
                    </th>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th> #2 </th> 
                    <th> 56915692 </th>
                    <th> Donato Suárez </th>
                    <th> 23-07-2024</th>
                    <th> 23-09-2024 </th>
                    <th>                     
                        <button class="btn"> Editar </button>
                        <button class="btn"> Eliminar </button>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>