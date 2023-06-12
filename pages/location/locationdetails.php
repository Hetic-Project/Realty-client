<?php

include "../partials/userHeader.php";

?>
<body>
    <?php include "../partials/userHeader.php" ?>

    <div class="responsiveDetailsLocation">
        <div class="containerImageAndReservation">
            <div class="containerImageDetailLocation">
                <img src="../../images/500x500.gif" alt="" class="firstImage">
                <div class="containerMoreImage">
                    <img src="../../images/500x500.gif" alt="" class="secondImage">
                    <img src="../../images/500x500.gif" alt="" class="thirdImage">
                </div>
            </div>
            <div class="containerReservation">
                <h3>249 €<span> par nuit</span></h3>
                <hr class="reservationHr">
    
                <fieldset>
                    <div>
                        <input type="checkbox" id="privateDriver" name="privateDriver" checked>
                        <label for="privateDriver">Chauffeur Privé</label>
                    </div>
                    <div>
                        <input type="checkbox" id="restoration" name="restoration">
                        <label for="restoration">Restauration</label>
                    </div>
                    <div>
                        <input type="checkbox" id="roofAccess" name="roofAccess">
                        <label for="roofAccess">Accès aux toits</label>
                    </div>
                </fieldset>
                <hr class="reservationHr">
                
                <div class="containerCostReservation">
                    <div class="costReservation">
                        <p> 249 € x 13 nuits</p>
                        <p>3 233 €</p>
                    </div>
                    <div class="costReservation">
                        <p>Frais & Options</p>
                        <p>70 €</p>
                    </div>
                    <div class="costReservation">
                        <p>Taxes</p>
                        <p>65 €</p>
                    </div>
                </div> 
                <hr class="reservationHr">
                <div class="costReservation">
                        <h3>Total</h3>
                        <p>3 368 €</p>
                    </div>
                <button class="global-reserveButton marginReserveButton">Réserver</button>
            </div>
        </div>

    </div>

    <div class="containerdetails">
        <h3>Logement entier : appartement</h3>
        <p class="grayTextLocation">Capacité (ou "Descriptif") : 5 voyageurs · 2 chambres · 2 lits · 2 salles de bain</p>
        <hr class="reservationHr">
        <p>Appartement de 100m2, unique en son style. Magnifique baie vitrée offrant un bain de lumière extraordinaire. Unique à Paris. Situé à quelques dizaines de mètre de la Place Trocadéro et de la Tour Eiffel. Entièrement équipé, adapté aux familles</p>
    </div>

    <div class="containerdetails">
        <h3>Équipements</h3>
        <div class="listEquipment">
            <div class="oneEquipment">
                <img src="../../images/Cuisine.svg" alt="" class="global-icon">
                <p>Cuisine complète</p>
            </div>
            <div class="oneEquipment">
                <img src="../../images/Camera.svg" alt="" class="global-icon">
                <p>Caméra de surveillance (à l'extérieur)</p>
            </div>
            <div class="oneEquipment">
                <img src="../../images/WorkSpace.svg" alt="" class="global-icon">
                <p>Espace de travail</p>
            </div>
            <div class="oneEquipment">
                <img src="../../images/Détecteur de fumée.svg" alt="" class="global-icon">
                <p>Détecteur de fumée</p>
            </div>
            <div class="oneEquipment">
                <img src="../../images/WIFI.svg" alt="" class="global-icon">
                <p>Wifi (fibre)</p>
            </div>
            <div class="oneEquipment">
                <img src="../../images/Kit de soin.svg" alt="" class="global-icon">
                <p>Kit de premier secours</p>
            </div>
            <div class="oneEquipment">
                <img src="../../images/Sèche Linge.svg" alt="" class="global-icon">
                <p>sèche-linge</p>
            </div>
            <div class="oneEquipment">
                <img src="../../images/Parking.svg" alt="" class="global-icon">
                <p>Parking privé</p>
            </div>
            <div class="oneEquipment">
                <img src="../../images/Climatiseur.svg" alt="" class="global-icon">
                <p>Climatiseur</p>
            </div>
            <div class="oneEquipment">
                <img src="../../images/Chauffage.svg" alt="" class="global-icon">
                <p>Chauffage</p>
            </div>
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
    <div id='calendar-container'></div>
    <script src="../../javascript/calandar.js"></script>
</body>
</html>