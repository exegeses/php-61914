<?php
    include 'layouts/header.html';

    //$nombres = array('Andrea','Celedonio','Emanuel','Felipe','Fernando');
    $nombres = ['Andrea','Celedonio','Emanuel','Felipe','Fernando'];
    echo $nombres[2];
?>
    <div class="alert shadow">
<?php
$marcas = [
            'Samsung', 'Huawei', 'iPhone',
            'Xiaomi', 'Motorola', 'Alcatel',
            'Sony', 'Kyocera'
          ];

    echo '<pre>';
    print_r($marcas);
    echo '</pre>';
?>
    </div>

    <div class="alert shadow">
<?php

    // double arrow =>
        $marcas = [
            18 => 'Samsung', 'Huawei', 'iPhone',
            32 => 'Xiaomi', 'Motorola', 'Alcatel',
            'Sony', 'Kyocera'
        ];

        echo '<pre>';
        print_r($marcas);
        echo '</pre>';
?>
    </div>

    <div class="alert shadow">
<?php
    $dias = array(
                    "Domingo", "Lunes", "Martes",
                    "Miércoles", "Jueves", "Viernes",
                    "Sábado"
            );
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha = date('w');
    echo $dias[$fecha];
?>
    </div>

    <div class="alert shadow">
<?php
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
    echo '<pre>';
    print_r($marcas);
    echo '</pre>';

    echo $marcas['Xiaomi'];
?>
    </div>


<?php
    include 'layouts/footer.html';