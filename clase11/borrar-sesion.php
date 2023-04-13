<?php

    session_start();
    unset($_SESSION['numero']);

    //eliminar TODAS las variables de sesión
    session_unset();

    session_destroy();