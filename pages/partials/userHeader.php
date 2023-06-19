<?php 

    ini_set('display_errors', 1); 

    $zipCode = isset($_POST["zip-code"]) ? urlencode($_POST["zip-code"]) : null;
    $startDate = isset($_POST["start-date"]) ? urlencode($_POST["start-date"]) : null;
    $endDate = isset($_POST["end-date"]) ? urlencode($_POST["end-date"]) : null;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/index.css">
    <title>Realty</title>
    <script async src="https://unpkg.com/es-module-shims@1.6.3/dist/es-module-shims.js"></script>
    <script type="importmap">
    {
        "imports": {
        "three": "https://unpkg.com/three@0.149.0/build/three.module.js",
        "three/addons/": "https://unpkg.com/three@0.149.0/examples/jsm/"
        }
    }
    </script>

</head>

<body>

    <header class="global-userHeader">
        <p>zip: <?= $zipCode ?></p>
        <a href="http://localhost:3000/pages/location/locations.php"><img src="../../images/RealtyIcon.svg" alt="Logo Realty"></a>
        <form action="http://localhost:3000/pages/location/locations.php" method="POST" class="search_form">
            <div>
                <div class="dateSelectContainer">
                    <label class="search_label" for="search_input">Code postal</label>
                    <input type="text" placeholder="75015" class="search_input" id='search_input' name='zip-code'>
                    <!-- <button class="global-buttonIcon"><img src="../../images/IconSearch.svg" alt="Icon Search" class="global-icon"></button> -->
                </div>
            </div>
            <div class="search_date hidden">
                <p class="search_option"> ET / OU </p>
                <div class="dateSelectContainer">
                    <img src="../../images/departSVG.svg" class="global-icon"></img>
                    <input type="date" class="inputDate" name='start-date'>
                </div>
                <div class="dateSelectContainer secondaryElement">
                    <img src="../../images/returnSVG.svg" class="global-icon"></img>
                    <input type="date" class="inputDate" name='end-date'>
                </div>
                <button class="serch_button">Rechercher</button>
            </div>
        </form>
        <a class="" href="http://localhost:3000/pages/userspace/profile.php"><img src="../../images/iconProfile.svg" alt="Icon Profile" class="global-iconProfile"></a>
        <script src='../../javascript/search.js'></script>
    </header>