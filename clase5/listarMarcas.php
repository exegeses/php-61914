<?php
    include 'layouts/header.html';

    //conexión a mysql + selección base
    $link = mysqli_connect(
         'localhost',
         'root',
         'root',
         'catalogo61914'
    );

    //mensaje SQL
    $sql = "SELECT * FROM marcas";

    //ejecución de mensaje SQL
    $resultado = mysqli_query( $link, $sql );

    //reporte
    /* recurrimos a una función auxiliar
        que nos va a convertir ese OBJETO
       en un array asociativo
      */
    while ( $marca = mysqli_fetch_assoc( $resultado ) ) {
        echo $marca['idMarca'], ': ', $marca['mkNombre'];
        echo '<br>';
    }



