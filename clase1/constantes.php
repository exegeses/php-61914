<?php

    const CURSO = 'PHP y MySQL';
    echo 'El curso es: ', CURSO;

    //CURSO = 'esto falla'; no se pueder sobreescribir el valor de una constante
?>
<hr>
<?php

    ####################3
    ## otro modo de crear constantes
    define( 'NOMBRE', 'Marcos' );
    // const NOMBRE = 'Marcos'
    echo 'El nombre es: ',NOMBRE;