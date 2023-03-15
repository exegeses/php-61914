<?php
    include 'layouts/header.html';
    /*mostrar la fecha
        formato: 15-03-2023
    */
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    //$fecha = date('d-m-Y');
    $fecha = date('d-m-Y H:i:s');
    //echo time(), '<br>';
    //echo microtime(true), '<br>';
    $diaSemana = date('w');
/* día de la semana */
    switch( $diaSemana ){
        case 0:
            $diaSemana = 'Domingo';
            break;
        case 1:
            $diaSemana = 'Lunes';
            break;
        case 2:
            $diaSemana = 'Martes';
            break;
        case 3:
            $diaSemana = 'Miércoles';
            break;
        case 4:
            $diaSemana = 'Jueves';
            break;
        case 5:
            $diaSemana = 'Viernes';
            break;
        default:
            $diaSemana = 'Sábado';
            break;
    }



    echo $diaSemana, ' ', $fecha;


    include 'layouts/footer.html';