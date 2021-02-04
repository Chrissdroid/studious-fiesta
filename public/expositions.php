<?php require_once "../src/includes/exposition/ExpositionEntity.php" ?>
<?php require '../src/includes/exposition/ExpositionRepository.php' ?>
<?php require '../src/includes/musee/MuseeRepository.php' ?>
<?php require '../src/includes/musee/MuseeEntity.php' ?>
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

            $ExpositionRepository = new ExpositionRepository($bdd);
            $expos = $ExpositionRepository->selectAll();
            $MuseeRepository = new MuseeRepository($bdd);

            foreach($expos as $expo) {
                $Exposition = new Exposition($expo);
                $Musee = new Musee($MuseeRepository->selectById($Exposition->get_idMusee()));
                
                ?>   
                    <div class="card"> 
                        <h3><?= $Exposition->get_nom() ?></h3>
                        <p><?= $Exposition->get_date() ?></p>
                        <p><?= $Exposition->get_description() ?></p>
                        <p>Infos musée :</p>
                        <p><?= $Musee->get_nom()?></p>
                        <p><?= $Musee->get_adresse()?></p>
                        <p><?= $Musee->get_ville()?></p>
                        <p><?= $Musee->get_telephone()?></p>
                        <p><?= $Musee->get_email()?></p>
                    </div>                    
                <?php
                    };
        ?>
        <?php require '../src/includes/footer.php'; ?>
    </body>

</html>