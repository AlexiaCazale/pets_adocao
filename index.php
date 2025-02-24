<?php 
require_once "Controllers/inicioController.class.php";

    if($_GET){

        $controle = $_GET["controle"] ?? null;
        $metodo = $_GET["metodo"] ?? null;
        require_once "Controllers/" . $controle . ".class.php";
        $obj = new $controle();
        $obj -> $metodo();

    }else{

        $obj = new InicioController();
        $obj -> inicio();
    }
?>