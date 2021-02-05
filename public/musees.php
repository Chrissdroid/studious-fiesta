<?php require_once "../src/includes/musee/MuseeEntity.php" ?>
<?php require '../src/includes/musee/MuseeRepository.php' ?>
<?php require '../src/base/initialisation.php'; ?>


<!DOCTYPE html>
<html lang="fr">

<head>
	<?php require '../src/includes/head.php'; ?>
    <script defer src="dist/js/search.js" defer></script>
    <title>Bienvenue</title>
    <meta title="search" content=<?= $_GET["search"]?>>
</head>

    <body>
        <?php require '../src/includes/header.php'; ?>
        <style> 
            .not-visible {
            display:none;
        }  
        </style>
        <?php
            $MuseeRepository = new MuseeRepository($bdd);
            $musees = $MuseeRepository->selectAll();
            $search = filter_input(INPUT_GET,"search",FILTER_SANITIZE_SPECIAL_CHARS);
            
            foreach($musees as $musee) {
                $Musee = new Musee($musee);
                ?>   
                    <div class="card not-visible" id="<?= $Musee->get_id()?>"> 
                        <h3 class="nom"><?= $Musee->get_nom() ?></h3>
                        <img style="width:150px" src="<?= $Musee->get_photo() ?>"/>  
                        <p class="description"><?= $Musee->get_description() ?></p>
                        <div>
                        <p class="adress"><?= $Musee->get_adresse() ?></p>
                        <p class="ville"><?= $Musee->get_ville()?> <?= $Musee->get_cp()?></p>
                        <p class="phone"><?= $Musee->get_telephone()?> </p>
                        <p class="website"><?= $Musee->get_site()?> </p>
                        </div>
                    </div>                    
                <?php
                    };
        ?>
    
        <?php require '../src/includes/footer.php'; ?>
    </body>

</html>