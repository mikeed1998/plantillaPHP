<?php
    
    $sql = "SELECT * FROM sliders;";

    $result = mysqli_query($conn, $sql);

    $lista_slider = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $lista_slider[] = array(
                'id' => $row['id'],
                'imagen'=> $row['imagen'],
                'texto'=> $row['texto'],
            );
        }
    }

    