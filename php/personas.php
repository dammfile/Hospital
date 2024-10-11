<?php
require 'basephp/mostrar.php';
?>
<?php
require 'basephp/conexion.php';

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

    $query = "SELECT numCedula, nombre, apellido, genero, fecnac FROM persona"; 
    $result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error en la consulta: " . mysqli_error($conn); 
}

    $stmt->close();
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registro.css">
    <title>Usuarios</title>
</head>
<body>
    <div class="contenido">
<header>
<h1>USUARIOS</h1>
</header>
<a href="../index.html" class="backbtn">Atrás</a>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <h1 id="ttitle">TABLA DE USUARIOS</h1>
                    <th style="border: 2px solid #0078ff;">C&eacute;dula</th> 
                    <th style="border: 2px solid #0078ff;">Nombre</th> 
                    <th style="border: 2px solid #0078ff;">Apellido</th> 
                    <th style="border: 2px solid #0078ff;">Genero</th> 
                    <th style="border: 2px solid #0078ff;">Fecha de nacimiento</th>
                    <th style="border: 2px solid #0078ff;">Acciones</th> 
                    <th></th>
                </tr>
            </thead>
             <tbody>
             <?php 
                    if ($result && mysqli_num_rows($result) > 0) {
                        // Bucle para cada fila del resultado
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $row["numCedula"]; ?></td>
                                <td><?php echo $row["nombre"]; ?></td>
                                <td><?php echo $row["apellido"]; ?></td>
                                <td><?php echo $row["genero"]; ?></td>
                                <td><?php echo $row["fecnac"]; ?></td>
                                <td>                     
                                    <button class="btn">Editar</button>
                                    <button class="btn">Eliminar</button>
                                </td>
                            </tr>
                        <?php }  ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="6">No se encontraron usuarios</td>
                        </tr>
                    <?php }  ?>
                </tr>
    </tbody>
        </table>
    </div>
    </div>
</body>
</html>