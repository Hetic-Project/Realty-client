<?php

include "../partials/userHeader.php";

$url = "http://localhost:4000/apartment/get/allApartment";
$json = file_get_contents($url);
var_dump($json);
$apartments = json_decode($json, true);

?>

<body>
    <div class="filterContainer">
        <div class="dateSelectContainer departureDate">
            <img src="../../images/departSVG.svg" class="global-icon"></img>
            <input type="date" class="inputDate" id="departureDate">
        </div>
        <div class="dateSelectContainer secondaryElement">
            <img src="../../images/returnSVG.svg" class="global-icon"></img>
            <input type="date" class="inputDate">
        </div>

        <div class="dateSelectContainer secondaryElement">
            <button data-page="1" class="global-icon">
                <img src="../../images/leftArrow.svg" class="global-icon"></img>
            </button>
            <p class="global-title">
                1
            </p>
            <button data-page="2" class="global-icon">
                <img src="../../images/rightArrow.svg" class="global-icon"></img>
            </button>
        </div>

    </div>

    <script>
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('departureDate').value = today;
    </script>

    <div class="global-mainContainer" id="locationsContainer">
        <?php foreach ($apartments as $apartment): ?>
            <a class="global-locationContainer"
                href="http://localhost:3000/pages/location/locationdetails.php?id=<?= $apartment['apartment_id'] ?>">
                <img class="global-imgLocation" src="<?= $apartment['apartment_main_picture'] ?>" alt="appartement">
                <div>
                    <div class="global-textposition">
                        <p class="global-title">
                            <?= $apartment['apartment_adress'] ?>
                        </p>
                        <p class="global-description" display="grid">
                            <?= $apartment['apartment_description'] ?>
                        </p>
                        <p class="global-subtitle">
                            <?= $apartment['apartment_price'] ?>€ la nuit
                        </p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
    <script>
        var totalLocationsPHP = <?= count($apartments) ?>;
    </script>
    <script src="../../javascript/locations.js"></script>
</body>