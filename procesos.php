<?php

    // require_once("crudLugares.php");

    $id=$_GET['id'];
    $valor= $_GET["valor"];
   

    if($valor=="borrar")
    {
        echo "Estoy en borrar";
        echo "quiero borrar esta ip:".$id;
        header("Location:borrar.php?id=" . $id);
    }

    if($valor=="modificar")
    {
        echo "Estoy en modificar";
        header("Location:modificar.php?id=".$id);
    }

?>


