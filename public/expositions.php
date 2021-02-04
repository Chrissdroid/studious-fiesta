<?php require_once "../src/includes/exposition/ExpositionEntity.php" ?>
<?php require '../src/includes/exposition/ExpositionRepository.php' ?>
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
            
            foreach($expos as $expo) {
                $expoObj = new Exposition($expo);
                ?>   
                    <div class="card"> 
                        <h3><?= $expoObj->get_nom() ?></h3>
                        <p><?= $expoObj->get_date() ?></p>
                        <p><?= $expoObj->get_description() ?></p>
                    </div>                    
                <?php
                    };
        ?>
        <?php require '../src/includes/footer.php'; ?>
    </body>

</html>