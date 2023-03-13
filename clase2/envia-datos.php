<?php
    include 'layouts/header.html';
?>
        <form action="procesa-datos.php" method="post">
            Nombre <br>
            <input type="text" name="nombre"
                   class="form-control" required> <br>
            Email: <br>
            <input type="email" name="email"
                   class="form-control" required> <br>
            <button class="btn btn-dark">enviar</button>
        </form>
<?php
    include 'layouts/footer.html';
?>