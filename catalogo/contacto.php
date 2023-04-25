<?php
    require 'config/config.php';
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container">
        <h1>Contacto</h1>

        <div class="alert bg-light p-4 col-8 mx-auto shadow">
<?php
    //capturamos datos enviados por el form
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];
    //configuramos datos de email a enviar
    $destinatario = 'marcos@mail.com';
    $asunto = 'Email enviado desde mi sitio';
    $cuerpo = '<div style="background-color: #3c3c3c; color: #fff;
                           width: 450px; padding: 24px; margin: auto;
                           font-family: sans-serif;
                           border-radius: 12px">';
    $cuerpo .= '<img src="https://php-61914.000webhostapp.com/imagenes/m-iso.jpg" 
                    style="width: 64px; vertical-align: middle"><b>Catálogo PHP</b><br>';
    $cuerpo .= 'Nombre: '.$nombre.'<br>';
    $cuerpo .= 'Email: '.$email.'<br>';
    $cuerpo .= 'Consulta: '.$consulta;
    $cuerpo .= '</div>';

    // encabezados adicionales
    $headers = 'From: leomessi@argentina.com.ar' . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8';

    //enviamos el email
    mail($destinatario, $asunto, $cuerpo, $headers);
?>
            Gracias <?= $nombre ?> por contactarnos.
        </div>

    </main>

<?php  include 'layout/footer.php';  ?>