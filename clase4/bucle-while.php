<?php
    include 'layouts/header.html';
    $n = 1;
    while ( $n < 15 )
    {
        //bloque de código a iterar
        echo $n , '<br>';
        $n++; //$n = $n + 1;
    }
?>
    <hr>
<?php
    $marcas = [
        'Samsung', 'Huawei', 'iPhone',
        'Xiaomi', 'Motorola', 'Alcatel',
        'Sony', 'Kyocera'
    ];
    $n = 0;//inicio
    $cantidad = count( $marcas );
    echo '<ul>';
    while( $n < $cantidad ) { // límite
        echo '<li>', $marcas[ $n ], '</li>';
        $n++; //incremento
    }
    echo '</ul>';

include 'layouts/footer.html';