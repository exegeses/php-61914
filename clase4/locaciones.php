<?php
    $locaciones =
        [
            'angkor', 'azul', 'basil', 'burj',
            'colosseo', 'easter', 'eiffel',
            'gizah', 'ha-long', 'liberty',
            'machu', 'opera', 'palace', 'petra',
            'sagrada', 'santorini', 'taj',
            'wall'
        ];
    $locaciones2 =
        [
            'Angkor Wat, Angkor',
            'Mezquita azul, Estambul',
            'Catedral de San Basilio, Moscu',
            'Burj Khalifa, Dubai',
            'El Coliseo, Roma', 'Isla de Pascua, Chile',
            'Tour Eiffel, París',
            'Gran Pirámide de Guiza, Guiza',
            'Hạ Long Bay, Quang Ninh, Vietnam',
            'Estatua de la Libertad, New York',
            'Machu Picchu, Perú',
            'Opera House, Sydney', 'Grand Palace, Bangkok', 'petra',
            'La Sagrada Familia, Barcelona',
            'Santorini, Archipiélago de las Cícladas ',
            'Taj Mahal, Agra',
            'La Gran Muralla, Jinshanling'
        ];

    include 'layouts/header.html';
?>

    <section class="row">
<?php
    $n = 0;
    $cantidad = count($locaciones);
    while( $n < $cantidad ) {
?>
        <article class="col-4">
            <img src="img/<?= $locaciones[$n] ?>.jpg" class="img-thumbnail">
            <h2 class="fs-5"><?= $locaciones2[$n] ?></h2>
        </article>
<?php
        $n++;
    }
?>
    </section>
<?php
    include  'layouts/footer.html';