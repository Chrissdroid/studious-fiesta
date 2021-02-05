<?php require_once "../src/includes/musee/MuseeEntity.php"?>
<?php require '../src/includes/musee/MuseeRepository.php'?>
<?php require '../src/base/initialisation.php';?>


<!DOCTYPE html>
<html lang="fr">

<head>
	<?php require '../src/includes/head.php';?>
    <script defer src="dist/js/search.js" defer></script>
    <title>Bienvenue</title>
    <meta title="search" content=<?=$_GET["search"]?>>
</head>

    <body>
        <?php require '../src/includes/header.php';?>
        <style>
            .not-visible {
            display:none;
        }
        </style>
        <?php
            $MuseeRepository = new MuseeRepository($bdd);
            $musees = $MuseeRepository->selectAll();
            $search = filter_input(INPUT_GET, "search", FILTER_SANITIZE_SPECIAL_CHARS);

            foreach ($musees as $musee) {
                $Musee = new Musee($musee);
                ?>
            <div class="container mt-3 not-visible" id="<?= $Musee->get_id()?>">

                <div class="card p-2 border border-4">
                    <div class="row">
                        <div class="col">
                            <img class="image-fluid mt-4 object-fit: cover; " style="width:300px; " src="<?=$Musee->get_photo()?>" />
                        </div>
                        <div class="col col-9">
                            <h3 class="nom"><?=$Musee->get_nom()?></h3>
                            <p class="description"><?=$Musee->get_description()?></p>
                            <div class="row mb-3">
                                <div class="col">
                                    <p class="mb-0 adress"><?=$Musee->get_adresse()?></p>
                                    <p class="mb-0 ville"><?=$Musee->get_ville()?> <?=$Musee->get_cp()?> </p>
                                    <p class="mb-0 phone"><?=$Musee->get_telephone()?> </p>
                                    <p class="mb-0 website"><?=$Musee->get_site()?> </p>
                                </div>
                                <div class="col col-3 mt-4">
                                    <a href="#" class="btn btn-outline-secondary btn btn-primary stretched-link" style="width: 200px;">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            };
        ?>

        <?php require '../src/includes/footer.php';?>
    </body>
</html>