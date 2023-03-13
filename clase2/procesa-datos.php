<?php
    include 'layouts/header.html';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    echo 'Tu nombre es: ', $nombre;
    echo '<br>';
    echo 'Tu email es: ', $email;

    include 'layouts/footer.html';