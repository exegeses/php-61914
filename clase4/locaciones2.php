<?php
    include 'layouts/header.html';
$locaciones3 =
    [
        'angkor'=>'Cambodia',
        'azul'=>'Turquía',
        'basil'=>'Rusia',
        'burj'=>'Dubai',
        'colosseo'=>'Italia',
        'easter'=>'Chile',
        'eiffel'=>'Francia',
        'gizah'=>'Egipto',
        'ha-long'=>'Vietnam',
        'liberty'=>'USA',
        'machu'=>'Peru',
        'opera'=>'Australia',
        'palace'=>'Tailandia',
        'petra'=>'Jordania',
        'sagrada'=>'España',
        'santorini'=>'Grecia',
        'taj'=>'India',
        'wall'=>'China'
    ];
?>

<section class="row">
<?php
    foreach ( $locaciones3 as $foto => $pais )
    {
?>
    <article class="col-4">
        <img src="img/<?= $foto ?>.jpg" class="img-thumbnail">
        <h2 class="fs-5"><?= $pais ?></h2>
    </article>
<?php
    }
?>
</section>

<?php
    include 'layouts/footer.html';
