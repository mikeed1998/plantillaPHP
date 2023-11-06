<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "phpnativo";

    $conn = mysqli_connect($host, $user, $password, $database);

    if(!$conn) {
        die("No se pudo establecer la conexión: ". mysqli_connect_error());
    }

