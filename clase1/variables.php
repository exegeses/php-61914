<?php

    $numero = 156;
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



