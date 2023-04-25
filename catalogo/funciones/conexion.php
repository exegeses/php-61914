<?php

    const SERVER = 'localhost';
    const USUARIO = 'root';//id20653045_marcos
    const CLAVE = 'root';//cg30U_/y*xR&tb5)
    const BASE = 'catalogo61914';//id20653045_catalogo

    function conectar() : mysqli
    {
        $link = mysqli_connect(
            SERVER,
            USUARIO,
            CLAVE,
            BASE
        );
        return $link;
    }