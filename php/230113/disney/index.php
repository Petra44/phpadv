<?php

require('functions.php');

$characters = getAPI("https://api.disneyapi.dev/characters");

// print '<pre>';
// var_dump($characters);
// exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Disneyapi</title>
</head>

<body>
    <h1 style="padding: 15px">DISNEY charakters</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="padding: 20px">

        <?php foreach($characters->data as $character) { ?>

        <div class=" col mb-4">
            <div class="card">
                <img src="<?= $character->imageUrl ?>" class="card-img-top" alt="<?= $character->name ?>"
                    style="height: 250px">
                <div class="card-body">
                    <h5 class="card-title"><?= $character->name ?></h5>
                    <a href="character.php?id=<?= $character->_id ?>" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>

        <?php } ?>


</body>

</html>