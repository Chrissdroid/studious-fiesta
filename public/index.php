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
                $museeObj = new Musee($musee);
                ?>   
                    <div class="card"> 
                        <h3><?= $museeObj->get_nom() ?></h3>
                        <img style="width:150px" src="<?= $museeObj->get_photo() ?>"/>  
                        <p><?= $museeObj->get_description() ?></p>
                        <div>
                        <p><?= $museeObj->get_adresse() ?></p>
                        <p><?= $museeObj->get_ville() ?> <?= $museeObj->get_cp() ?> </p>
                        <p><?= $museeObj->get_telephone()?> </p>
                        <p><?= $museeObj->get_site()?> </p>
                        </div>
                    </div>                    
                <?php
                    };
        ?>
        <?php require '../src/includes/footer.php'; ?>
    </body>

</html>