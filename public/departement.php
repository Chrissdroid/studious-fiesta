<?php require_once "../src/includes/departement/DepartementEntity.php" ?>
<?php require '../src/includes/departement/DepartementRepository.php' ?>
<?php require '../src/base/initialisation.php'; ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require '../src/includes/head.php'; ?>
    <title>Département</title>
</head>

<body>
    <?php require '../src/includes/header.php'; ?>

    <?php

    $DepartementRepository = new DepartementRepository($bdd);
    $departements = $DepartementRepository->selectAll();

    if (isset($_GET) && !empty($_GET['departement'])) :
        $musees = $DepartementRepository->getMusee($_GET['departement']);
        foreach ($musees as $musee) :
    ?>
            <div class="container mt-3">
                <div class="card p-2 border border-4">
                    <div class="row">
                        <div class="col">
                            <img class="image-fluid mt-4 object-fit: cover; " style="width:300px; " src="<?= $musee["PHOTO"] ?>" />
                        </div>
                        <div class="col col-9">
                            <h3><?= $musee["NOM"] ?></h3>
                            <p><?= $musee["DESCRIPTION"] ?></p>
                            <div class="row mb-3">
                                <div class="col">
                                    <p class="mb-0"><?= $musee["ADRESSE"] ?></p>
                                    <p class="mb-0"><?= $musee["VILLE"] ?> <?= $musee["CP"] ?> </p>
                                    <p class="mb-0"><?= $musee["TELEPHONE"] ?> </p>
                                    <p class="mb-0"><?= $musee["SITE"] ?> </p>
                                </div>
                                <div class="col col-3 mt-4">
                                    <a href="#" class="btn btn-outline-secondary btn btn-primary stretched-link" style="width: 200px;">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;
    elseif (isset($_GET) && !empty($_GET['region'])) :
        $departementsParRegions = $DepartementRepository->getByRegion($_GET['region']);
        foreach ($departementsParRegions as $departementParRegion) : ?>
            <a href="./departement.php?departement=<?= $departementParRegion['ID'] ?>" class="card">
                <h3> <?= $departementParRegion['NOM'] ?></h3>
                <img style="width:150px" src="<?= $departementParRegion['PHOTO'] ?>" />
            </a>
        <?php endforeach;
    else :
        foreach ($departements as $departement) : $Departement = new Departement($departement); ?>
            <a href="./departement.php?departement=<?= $Departement->get_id() ?>" class="card">
                <h3> <?= $Departement->get_nom() ?></h3>
                <img style="width:150px" src="<?= $Departement->get_photo() ?>" />
            </a>
    <?php endforeach;
    endif;
    require '../src/includes/footer.php'; ?>
</body>

</html>