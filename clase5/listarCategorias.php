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
    $sql = "SELECT * FROM categorias";

    //ejecución de mensaje SQL
    $resultado = mysqli_query( $link, $sql );

    while( $categoria = mysqli_fetch_assoc( $resultado ) )
    {
        echo $categoria['idCategoria'], ': ', $categoria['catNombre'];
        echo '<br>';
    }