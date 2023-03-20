<?php
    include 'layouts/header.html';
    $marcas = [
        'Samsung', 'Huawei', 'iPhone',
        'Xiaomi', 'Motorola', 'Alcatel',
        'Sony', 'Kyocera'
    ];
    $cantidad = count($marcas);

    for( $n = 0; $n < $cantidad; $n++ )
    {
        echo $marcas[$n], '<br>';
    }

/* ahora iteramos un array diferente */
    $secciones = [
                    'panadería',
                    'verdulería',
                    'carnicería',
                    'limpieza',
                    'lacteos',
                    'perfumería',
                    'juguetería',
                    'pescadería',
                    'bebidas',
                    'tecnología'
                 ]
?>
    <ul class="list-group">
<?php
    $cantidad = count($secciones);
    //inicio de bucle
    for( $i = 0; $i < $cantidad; $i++ )
    {
?>        
        <li class="list-group-item list-group-item-action">
            <?= $secciones[$i]; ?>
        </li>
<?php
    }
    //fin de bucle
?>        
    </ul>

<?php
    include 'layouts/footer.html';