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

            foreach($departements as $departement ) {
                $Departement = new Departement($departement);
                ?>   
                    <div class="card"> 
                        <h3> <?= $Departement->get_nom() ?></h3>
                        <img style="width:150px" src="<?= $Departement->get_photo() ?>"/>  
                    </div>                    
                <?php
                    };
        ?>

        <?php require '../src/includes/footer.php'; ?>
    </body>

</html>


