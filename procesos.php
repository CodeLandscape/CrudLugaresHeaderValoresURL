<?php

    // require_once("crudLugares.php");

    $id=$_GET['id'];
    $proceso= $_GET["valor"];
    echo "Has borrado esta ip: ".$id;
    echo $proceso;

    if($proceso=="borrar")
    {
        echo "Estoy en borrar";
        echo "quiero borrar esta ip:".$id;
        header("Location:borrar.php?ip=" . $id);
    }

    if($proceso=="modificar")
    {
        echo "Estoy en modificar";
        header("Location:modificar.php");
    }
?>


