<?php require_once "../src/includes/region/RegionEntity.php" ?>
<?php require '../src/includes/region/RegionRepository.php' ?>
<?php require '../src/database/MySqlConnection.php'; ?>
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

            $MySqlConnection = new MySqlConnection();

            $RegionRepository = new RegionRepository($MySqlConnection->get_db());
            $regions = $RegionRepository->selectAll();

            foreach($regions as $region ) {
                $regionObj = new Region($region);
                ?>   
                    <div class="region" <?= strtolower($regionObj->get_nom())?>> 
                        <h3> <?= $regionObj->get_nom() ?></h3>
                        <img style="width:150px" src=<?= $regionObj->get_photo() ?>/>  
                    </div>                    
                <?php
                    };
        ?>

        <?php require '../src/includes/footer.php'; ?>
    </body>

</html>


