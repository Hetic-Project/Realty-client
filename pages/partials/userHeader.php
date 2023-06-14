<?php ini_set('display_errors', 1); ?>
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
        <a href="./locations.php"><img src="../../images/RealtyIcon.svg" alt="Logo Realty"></a>
        <form action="" method="get" class="global-formHeader">
            <input type="text" placeholder="Recherche" class="global-inputHeader">
            <button class="global-buttonIcon"><img src="../../images/IconSearch.svg" alt="Icon Search" class="global-icon"></button>
        </form>
        <a class="" href="http://localhost:3000/"><img src="../../images/iconProfile.svg" alt="Icon Profile" class="global-iconProfile"></a>
    </header>