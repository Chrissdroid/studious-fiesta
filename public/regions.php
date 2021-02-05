<?php require_once "../src/includes/region/RegionEntity.php" ?>
<?php require '../src/includes/region/RegionRepository.php' ?>
<?php require '../src/base/initialisation.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<?php require '../src/includes/head.php'; ?>
	<title>Bienvenue</title>
</head>

    <body>
        <?php require '../src/includes/header.php'; ?>
<div class="d-flex flex-row justify-content-around flex-wrap">
        <?php
            $RegionRepository = new RegionRepository($bdd);
            $regions = $RegionRepository->selectAll();

            foreach($regions as $region ) {
                $Region = new Region($region);
                ?>   
                    <a href="/departement.php?region=<?= $Region->get_id() ?>" class="card m-5 pouet" style="width: 18rem; height:20rem;">
                        <h3 class="card-title text-center"> <?= $Region->get_nom() ?></h3>
                        <img class="card-img-bottom" style="width: 100%; height: 100%;" src="<?= $Region->get_photo() ?>"/>  
                    </a>
                <?php
                    };
        ?>
</div>
        <?php require '../src/includes/footer.php'; ?>
    </body>

</html>


