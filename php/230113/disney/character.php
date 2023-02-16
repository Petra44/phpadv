<?php
require('functions.php');

$id = 10;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

$character = getAPI("https://api.disneyapi.dev/characters/" . $id);

// print '<pre>';
// print_r($character);
// exit;

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container" style="padding: 20px">
        <div class="card bg-dark text-white" style="max-width: 500px">
            <img src="<?= $character->imageUrl ?>" style="max-width: 200px; padding: 15px" class="card-img-top"
                alt="<?= $character->name ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $character->name ?></h5>
            </div>
            <ul class="list-group list-group-flush">

                <li class="list-group-item"><strong>Films</strong></li>
                <?php foreach($character->films as $film){ ?>
                <li class="list-group-item"><?= $film ?></li>
                <?php } ?>

                <li class="list-group-item"><strong>TV Shows</strong></li>
                <?php foreach($character->tvShows as $show){ ?>
                <li class="list-group-item"><?= $show ?></li>
                <?php } ?>

                <li class="list-group-item"><strong>VideoGames</strong></li>
                <?php foreach($character->videoGames as $game){ ?>
                <li class="list-group-item"><?= $game ?></li>
                <?php } ?>
            </ul>
        </div>


    </div>

</body>

</html>