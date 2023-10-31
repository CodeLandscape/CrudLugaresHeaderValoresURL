<?php

require_once("procesos.php");
require_once("mostrar.php");
require_once("crudLugares.php");

echo "Has borrado esta ip: ".$id;

    $listado->borrarLugar($id);
    echo "<a href='mostrar.php'"."Volver a la lista de lugares"."<a/>";
?>