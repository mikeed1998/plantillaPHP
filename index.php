<?php

    require_once('includes/conexion.php');
    require_once('includes/acciones.php');

    $conexion = $conn;

    if(isset($_GET['identificador'])) { 
        $identificador = $_GET['identificador']; 
    } else { 
        $identificador = 0; 
    }

    switch($identificador) {
        case 1:
            include 'includes/includes.php';
            include 'back/home_logic.php';
            include 'front/home.php';
            break;
        default:
            break;
    }

    mysqli_close($conexion);


    