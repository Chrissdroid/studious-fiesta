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

        <?php
            $RegionRepository = new RegionRepository($bdd);
            $regions = $RegionRepository->selectAll();

            foreach($regions as $region ) {
                $Region = new Region($region);
                ?>   
                    <div class="card" > 
                        <h3> <?= $Region->get_nom() ?></h3>
                        <img style="width:150px" src="<?= $Region->get_photo() ?>"/>  
                    </div>                    
                <?php
                    };
        ?>

        <?php require '../src/includes/footer.php'; ?>
    </body>

</html>


