<?php

    $berkasData = "assets/data/data.json";
    $dataJson = file_get_contents($berkasData);
    $dataArray = json_decode($dataJson, true);
    
    $listWarna = array("red", "blue", "marron", "navy", "indigo", "purple", "pink", "orange", "yellow", "green", "teal", "cyan");
    $warna = $listWarna[array_rand($listWarna)];

    $index = array_rand($dataArray);
    $quotes = array(
        "warna" => $warna,
        "quote" => $dataArray[$index]['quote'],
        "name" => $dataArray[$index]['name']
    );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Random quotes generator</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cherry+Swash&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .background-random { background: var(--bs-<?=$warna?>);}
        .warna-random { color: var(--bs-<?=$warna?>);}
    </style>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center background-random" style="height: 100vh;">
        <div class="wrapper">
            <div class="card card-container">
                <div class="card-body" style="padding: 0;">
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p class="fs-3 fw-bold mb-0 quote text-wrap warna-random"><?=$quotes['quote']?></p>
                        </blockquote>
                        <figcaption class="blockquote-footer warna-random" style="text-align: right;margin-top: 1px; "><?=$quotes['name']?></figcaption>
                    </figure>
                </div>
                <div class="card-footer card-bottom" style="padding: 0;"><button class="btn text-white background-random" onclick="window.location.reload();" type="button">New quote</button></div>
            </div>
            <footer class="text-center">
                <p class="text-white">© Copyleft - created by Ilham</p>
            </footer>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>