<?php
    include "layouts/header.html";

    $secciones = [
        3 => 'panadería',
        6 => 'verdulería',
        9 =>'carnicería',
        12 => 'limpieza',
        13 => 'lacteos',
        15 =>'perfumería',
        20 => 'juguetería',
        10 => 'pescadería',
        11 => 'bebidas',
        30 => 'tecnología'
    ];
    //foreach ( $contendor as $auxiliar )
    foreach ( $secciones as $seccion )
    {
        echo $seccion, '<br>';
    }

    echo '<hr class="py-3">';
    //foreach ( $contendor as $key => $valor )
    foreach ( $secciones as $key => $valor )
    {
        echo $key, ': ', $valor, '<br>';
    }

    echo '<hr class="py-3">';
    //array asociativo
    $marcas = [
        'Samsung'=>'A10',
        'Huawei'=>'P50 Pro',
        'iPhone'=>'12x Pro',
        'Xiaomi'=>'MI9',
        'Motorola'=>'Moto G Stylus',
        'Alcatel'=>'1v',
        'Sony'=>'G3423',
        'Kyocera'=>'KC-S701'
    ];

    foreach ( $marcas as $key => $value )
    {
        echo $value, ' de la marca ', $key, '<br>';
    }

    include 'layouts/footer.html';