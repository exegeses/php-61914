<?php
    include 'layouts/header.html'
?>
    <form action="procesa-numero.php" method="get">
        Ingresa un número: <br>
        <input type="number" name="numero" required
               class="form-control"> <br>
        <button class="btn btn-dark">enviar</button>
    </form>
<?php
    include 'layouts/footer.html'
?>
