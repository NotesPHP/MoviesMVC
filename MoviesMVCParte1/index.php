<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pelis.TV</title>
</head>
<body>
    <h1>Pelis</h1>
    <section class="row justify-content-center">
    <?php

    require_once 'Movie.php';

    $movies = (new Movie())->all();

    foreach ($movies as $itemMovie) {
        echo "
        <div class='card' style='width: 18rem'>
            <img src='{$itemMovie->image}' class='card-img-top'>
            <div class='card-body'>
            </div>
            <h5 class='card-title'>{$itemMovie->title}</h5>
        </div>
        "; 
    } 
    ?>
    </section>
</body>
</html>