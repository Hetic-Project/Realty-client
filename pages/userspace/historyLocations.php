<?php

include "../partials/userHeader.php";
include_once "../partials/navBarreProfile.php";

?>

<body class="bodyProfile">

    <div class="containerAllProfile">
        <h2 class="titleProfile">Historique de vos locations :</h2>
        <div class="global-mainContainer" id="locationsContainer">
        <?php foreach($apartments as $apartment ): ?>
            <a class="global-locationContainer" href="http://localhost:3000/pages/location/locationdetails.php?id=<?=$apartment['apartment_id']?>" >
                <img class="global-imgLocation" src="<?= $apartment['apartment_main_picture'] ?>" alt="appartement">
                <div>
                    <div class="global-textposition">   
                        <p class="global-title"><?= $apartment['apartment_adress'] ?> </p>
                        <p class="global-description" display="grid"><?= $apartment['apartment_description'] ?></p>
                        <p class="global-subtitle"><?= $apartment['apartment_price'] ?>€ la nuit </p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
        </div>
    </div>

</body>
</html>