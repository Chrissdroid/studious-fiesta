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

if (isset($_GET) && !empty($_GET['departement'])):
    $musees = $DepartementRepository->getMusee($_GET['departement']);
    foreach ($musees as $musee) :
        ?>
        <pre><?= var_dump($musee) ?></pre>
    <?php endforeach;
elseif (isset($_GET) && !empty($_GET['region'])):
    $departementsParRegions = $DepartementRepository->getByRegion($_GET['region']);
    foreach ($departementsParRegions as $departementParRegion) : ?>
        <a href="/departement.php?departement=<?= $departementParRegion['ID'] ?>" class="card">
            <h3> <?= $departementParRegion['NOM'] ?></h3>
            <img style="width:150px" src="<?= $departementParRegion['PHOTO'] ?>"/>
        </a>
    <?php endforeach;
else:
    foreach ($departements as $departement) : $Departement = new Departement($departement); ?>
        <a href="/departement.php?departement=<?= $Departement->get_id() ?>" class="card">
            <h3> <?= $Departement->get_nom() ?></h3>
            <img style="width:150px" src="<?= $Departement->get_photo() ?>"/>
        </a>
    <?php endforeach; endif;
require '../src/includes/footer.php'; ?>
</body>

</html>


