<?php

    $numero = 140;
    $curso = 'PHP y MySQL';
    echo 'El número es: ', $numero;
?>
<hr>
<?php
    //ejemplo de concatenacion
   $precioMax = 12000;
   $sql = "SELECT nombre, precio 
                FROM productos
                WHERE precio <= ".$precioMax;

    echo $numero;

