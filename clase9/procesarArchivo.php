<?php
    include 'layouts/header.html';
    //capturamos el archivo enviado por el form
    $prdImagen = $_FILES['prdImagen'];
    /*
    movemos el archivo enviado
    desde el directorio /tmp
    al directorio /productos
    */
    $ruta = 'productos/';
    $tmp = $_FILES['prdImagen']['tmp_name'];
    $archivo = $_FILES['prdImagen']['name'];
    move_uploaded_file( $tmp, $ruta.$archivo );
?>
    <h1>Proceso de subida de un archivo</h1>

    <div class="alert p-4 col-8 mx-auto shadow">
        <pre>
<?php
    print_r($prdImagen);
?>
        </pre>
    </div>

<?php
include 'layouts/footer.html';