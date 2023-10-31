<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar todos los lugares</title>
    <link rel="stylesheet" href="estilo.css">
    <link href=”https://fonts.googleapis.com/css?family=Pacifico” rel=”stylesheet”>

</head>
<body>
    <?php
        require_once("crudLugares.php");
        $listado = new CrudLugares(); // Instanciar objeto de la clase CrudLugares
        $resultado = $listado->listarLugares(); // Llamar al método que ejecuta el listado
        echo '<h1>Listado de lugares</h1>';
       
        echo "<table>";
        while ($lugar = $resultado->fetch_assoc()) { // Lista todos los lugares recorriendo las filas que devuelve la función
            echo "<tr>";
            echo "<td>" . $lugar['lugar'] . "</td>";
            echo "<td>" . $lugar['ip'] . "</td>";
            echo "<td><a href='procesos.php?id=" . $lugar['ip'] . "&valor=borrar'>Borrar</a></td>";
            echo "<td><a href='procesos.php?id=" . $lugar['ip'] . "&valor=modificar'>Modificar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
