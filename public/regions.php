<?php require_once "../src/includes/RegionModel.php" ?>
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
            $regionsView = $regionsModel;
            foreach($regionsView as $region ) {
                ?>
                    <div class="region" <?= strtolower($region->get_name())?>> 
                        <h3> <?= $region->get_name() ?></h3>
                        <img src=<?= $region->get_photo() ?>/>  
                    </div>                    
                <?php
                    };
        ?>

        <?php require '../src/includes/footer.php'; ?>
    </body>

</html>


