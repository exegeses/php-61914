<?php
    include 'layouts/header.html';
?>
    <h1>Formulario para subir archivo</h1>

    <div class="alert p-4 col-8 mx-auto shadow">
        <form action="procesarArchivo.php" method="post" enctype="multipart/form-data">
            <input type="file" name="prdImagen">
            <button class="btn btn-dark">Publicar</button>
        </form>
    </div>

<?php
    include 'layouts/footer.html';