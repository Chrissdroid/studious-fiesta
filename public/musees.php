<?php require_once "../src/includes/musee/MuseeEntity.php" ?>
<?php require '../src/includes/musee/MuseeRepository.php' ?>
<?php require '../src/base/initialisation.php'; ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require '../src/includes/head.php'; ?>
    <title>Bienvenue</title>
</head>

<body>
    <?php require '../src/includes/header.php'; ?>

    <?php

    $MuseeRepository = new MuseeRepository($bdd);
    $musees = $MuseeRepository->selectAll();

    foreach ($musees as $musee) {
        $Musee = new Musee($musee);
    ?>
        <div class="container mt-3">

            <div class="card p-2 border border-4">
                <div class="row">
                    <div class="col">
                        <img class="image-fluid mt-4 object-fit: cover; " style="width:300px; " src="<?= $Musee->get_photo() ?>" />
                    </div>
                    <div class="col col-9">
                        <h3><?= $Musee->get_nom() ?></h3>
                        <p><?= $Musee->get_description() ?></p>
                        <div class="row mb-3">
                            <div class="col">
                                <p class="mb-0"><?= $Musee->get_adresse() ?></p>
                                <p class="mb-0"><?= $Musee->get_ville() ?> <?= $Musee->get_cp() ?> </p>
                                <p class="mb-0"><?= $Musee->get_telephone() ?> </p>
                                <p class="mb-0"><?= $Musee->get_site() ?> </p>
                            </div>
                            <div class="col col-3 mt-4">
                                <a href="#" class="btn btn-outline-secondary btn btn-primary stretched-link" style="width: 200px;">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    };
    ?>
    <?php require '../src/includes/footer.php'; ?>
</body>

</html>