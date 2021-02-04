<?php require_once "../src/includes/region.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Region</title>
</head>

<body>
    <?php
        $regionsView = $regionsModel;
        foreach($regionsView as $region ) {
            ?>
                <div class="region <?= strtolower($region->get_name())?>"> 
                    <h3 class="region"> <?= $region->get_name() ?></h3>
                    <img src=<?= $region->get_image() ?>/>  
                </div>                    
            <?php
                };
           ?>
</body>

</html>