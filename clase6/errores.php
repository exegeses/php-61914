<?php
    $num1 = 654;
    $num2 = 'manzana';

    try {
        //intentá hacer...
        $resultado = $num1/$num2;
        $mssg = 'el resultado es: '.$resultado;
    }
    catch ( Error $e ){
        // si fallara el bloque try
        //log de errores y/o redirección
        $arch = 'log/errores.log';
        $fh = fopen($arch, 'a');
        $contenido = date('d/m/Y H:i:s');
        $contenido .= "\n";
        $contenido .= 'Mensaje: '.$e->getMessage();
        $contenido .= "\n";
        $contenido .= 'Archivo: '.$e->getFile();
        $contenido .= "\n";
        $contenido .= 'Línea nº: '.$e->getLine();
        $contenido .= "\n".'--------------------'."\n";
        fwrite( $fh, $contenido );
        fclose($fh);
        $mssg = 'hubo algún error';
    }

    echo $mssg;