<?php
    //declaración
    function negrita( string $frase ) : string
    {
        return '<b>'.$frase.'</b><br>';
    }

    function calcularCuadrado( int $numero ) : float|int
    {
        $resultado = $numero * $numero;
        return $resultado;
    }

    function testReturn(){
        echo 'esto se imprime';
        return;
        echo 'esto NO se imprime';
        echo 'esto NO se imprime';
    }


    //llamado a ejecución
    echo negrita( 'hola mundo!' );
    echo negrita( 'otro texto');
    echo '<hr>';
    echo calcularCuadrado( 654868 );

    echo '<hr>';
    testReturn();