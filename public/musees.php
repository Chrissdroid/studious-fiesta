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

            foreach($musees as $musee ) {
                $Musee = new Musee($musee);
                ?>   
                    <div class="card"> 
                        <h3><?= $Musee->get_nom() ?></h3>
                        <img style="width:150px" src="<?= $Musee->get_photo() ?>"/>  
                        <p><?= $Musee->get_description() ?></p>
                        <div>
                        <p><?= $Musee->get_adresse() ?></p>
                        <p><?= $Musee->get_ville() ?> <?= $Musee->get_cp() ?> </p>
                        <p><?= $Musee->get_telephone()?> </p>
                        <p><?= $Musee->get_site()?> </p>
                        </div>
                    </div>                    
                <?php
                    };
        ?>
        <?php require '../src/includes/footer.php'; ?>
    </body>

</html>