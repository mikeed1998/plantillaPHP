<?=$headGNRL;?>
<?=$bodyInicio;?>
<?=$header;?>

<div class="container">
    <div class="row">
        <?php
            foreach($lista_slider as $ls) {
                echo '
                    <div class="col-8 mx-auto border">
                        <div class="row">
                            <div class="col-2 border">'. $ls['id'] .'</div>
                            <div class="col-6 border">'. $ls['imagen'] .'</div>
                            <div class="col-4 border">'. $ls['texto'] .'</div>
                        </div>
                    </div>
                ';
            }
        ?>
    </div>
</div>

<?=$footer;?>
<?=$bodyFinal;?>
<?=$scriptGNRL;?>