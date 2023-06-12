<?php

include "../partials/userHeader.php";

$apartment_id = $_GET['id'];
$user_id = $_SESSION['id'];

$url = "http://localhost:4000/apartment/get/oneApartment/" . $apartment_id;
$json = file_get_contents($url);
$apartment = json_decode($json, true);

?>

    <div class="responsiveDetailsLocation">
        <div class="containerImageAndReservation">
            <div class="containerImageDetailLocation">
                <img src="<?= $apartment['apartment_360_picture'] ?>" alt="" class="firstImage">
            </div>
            <form class="containerReservation">
                <div id='calendar-container'></div>
                <h3><?= $apartment['apartment_price'] ?> €<span> par nuit</span></h3>
                <hr class="reservationHr">
                <input type="hidden" name="user_id" value="<?= $user_id ?>">
                <input type="hidden" id='apartment_id' name="apartment_id" value="<?= $apartment_id ?>">
                <input type="date" id="start-date" name="start_date">
                <input type="date" id="end-date" name="end_date">
                <hr class="reservationHr">
                
                <div class="containerCostReservation">
                    <div class="costReservation">
                        <div><p id="unit-price"><?= $apartment['apartment_price'] ?></p> <span>€ x</span> <span id="nights"> <span></div> 
                        <div><p id="total-price"></p> <span>€</span></div>
                    </div>
                    <div class="costReservation">
                        <p>Taxes</p>
                        <div><p id='tax'> </p> <span>€</span></div>
                    </div>
                </div> 
                <hr class="reservationHr">
                <div class="costReservation">
                    <h3>Total</h3>
                    <div><p id='price-ttc'> </p> <span>€</span></div>
                </div>
                <button class="global-reserveButton marginReserveButton">Réserver</button>
            </div>
        </div>
    </div>

    <div class="containerdetails">
        <h3><?= $apartment['apartment_adress'] ?></h3>
        <p class="grayTextLocation">Capacité: <?=$apartment['apartment_capacity']?> voyageurs · <?=$apartment['apartment_bedroom']?> chambres · <?=$apartment['apartment_size']?> m²</p>
        <hr class="reservationHr">
        <p><?=$apartment['apartment_description']?></p>
    </div>

    <div class="containerdetails">
        <h3>Équipements</h3>
        <div class="listEquipment">
            <?php $services = json_decode($apartment['services'], true); ?>
            <?php foreach($services as $service): ?>
                <div class="oneEquipment">
                    <img src="../../images/Cuisine.svg" alt="" class="global-icon">
                    <p><?= $service['service_name'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="containerdetails">
        <h3>Reviews</h3>
        <hr class="reservationHr">
        <div class="reviewsNameAndDate">
            <p>Julia, Trocadéro</p>
            <p class="dateReviews">Jan 11</p>
        </div>
        <br>
        <p>L'emplacement de l'appartement était idéal. Il était situé dans un quartier animé et vivant, avec de nombreux restaurants, boutiques et attractions à proximité. De plus, les transports en commun étaient facilement accessibles, ce qui m'a permis de me déplacer facilement dans la ville.
        <br><br>
        L'une des meilleures caractéristiques de cet appartement était la vue imprenable depuis le balcon. C'était un plaisir de se réveiller chaque matin et de profiter d'une tasse de café tout en admirant le paysage urbain. C'était vraiment une expérience unique et mémorable.</p>
    </div>

    <div class="containerdetails bottomLocation">
        <div class="rulesHeader">
            <h3>Règlement</h3>
            <button>Contacter le support</button>
        </div>
        <div class="interiorSecurityLocation">
            <div>
                <p>intérieur</p>
                <p class="grayTextLocation">Arrivée à partir de 12:00</p>
                <p class="grayTextLocation">Départ avant 11:00</p>
                <p class="grayTextLocation"> 5 voyageurs maximum</p>
            </div>
            <div>
                <p>Sécurité</p>
                <p class="grayTextLocation">Détecteur de fumée</p>
                <p class="grayTextLocation">Détecteur de monoxyde de carbone</p>
            </div>
        </div>
        <div class="conditionLocation">
            <p>Condition d'annulation</p>
            <p class="grayTextLocation">Si vous annulez avant le 3 juin, vous aurez droit à un remboursement partiel.</p>
            <p class="grayTextLocation">Consultez les conditions d'annulation complètes de l'hôte, qui s'appliquent même si vous annulez pour cause de maladie ou de perturbations causées par le Covid-19.</p>
        </div>
    </div>
    <script src="../../javascript/calandar.js"></script>
    <canvas class="webgl"></canvas>
    <script type="module" src="../../javascript/locationdetails.js"></script>

</body>
</html>