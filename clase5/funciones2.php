<?php

    //función dividir dos número enteros
    function dividir(  $n1,  $n2 )
    {
        if( is_int( $n1 ) && is_int($n2)  ){
            if( $n2 == 0 ){
                return 'el divisor no debe ser 0';
            }
            //dividimos
            return $n1/$n2;
        }
        return 'ambos deben ser números;';
    }

    echo dividir('manzana', 2);
    echo '<br>';
    echo dividir(  87, 'ouytfg');
    echo '<br>';
    echo dividir( 756, 87 );
    echo '<br>';
    echo dividir( 65, 0 );


