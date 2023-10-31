<?php

    require_once("crudLugares.php");
    require_once("mostrar.php");

    echo $_GET["valor"];

    if($_GET["valor"]=="borrar")
    {
        echo "Estoy en borrar";
        $listado->borrarLugar($ip);
    }

    if($_GET["valor"]=="modificar")
    {
        echo "Estoy en modificar";
    }
?>


