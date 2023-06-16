<?php

include_once "../partials/userHeader.php";
include_once "../partials/navBarreProfile.php";
?>

<body class="bodyProfile">

    <div class="profile">
        <div class="profile-card">
            <div class="frontProfile">
                <img class="" src="../../images/RealtyIcon.svg"></img>
                <!-- <h2 class="nameProfile">Rubens Bonnin</h2>
                <h3 class="titleProfileBot">Voyageur</h3> -->
                <div class="detailsProfile">
                    <p class="pProfile"><strong>Prénom:</strong> Rubens</p>
                    <p class="pProfile"><strong>Nom:</strong> Bonnin</p>
                    <p class="pProfile"><strong>Date de Naissance:</strong> 21/06/2004</p>
                    <p class="pProfile"><strong>Téléphone:</strong> 0987654323</p>
                    <p class="pProfile"><strong>Ville:</strong> La Courneuve, Inde</p>
                    <p class="pProfile"><strong>Code Postal:</strong> 12678</p>
                    <p class="pProfile"><strong>Mot de Passe:</strong> 0é"'(§è!çà</p>
                    <p class="pProfile"><strong>Adresse Mail:</strong> exemple@gmail.com</p>
                    <p class="pProfile"><strong>Adresse:</strong> 10 rue Dunk</p>
                </div>
                <!-- <div class="wrapperProfile">
                    <div class="static-txtProfile">Bonjour,</div>
                    <ul class="dynamic-txtsProfile">
                        <li class="liProfile"><span class="spanProfile">Rubens</span></li>
                        <li class=" liProfile"><span class="spanProfile">Bonnin</span></li>
                        <li class="liProfile"><span class="spanProfile">Rubens Bonnin</span></li>
                    </ul>
                </div> -->
                <button class="global-saveButton">Modifier le Profile</button>
            </div>
            <div class="backProfile">
                <div class="containerinputProfile">
                    <h2 class="titleProfile">Profile</h2>
                    <div class="containerTwoInput">
                        <input type="text" placeholder="Prénom" class="inputProfile">
                        <input type="text" placeholder="Nom de famille" class="inputProfile">
                    </div>

                    <div class="containerTwoInput">
                        <input type="date" class="inputProfile">
                        <input type="number" placeholder="Numéro de téléphone" class="inputProfile">
                    </div>
                    <div class="containerTwoInput">
                        <input type="text" placeholder="Ville" class="inputProfile">
                        <input type="number" placeholder="Code postal" class="inputProfile">
                    </div>

                    <input type="text" placeholder="Addresse personnel" class="inputProfile">
                    <input type="email" placeholder="Addresse mail" class="inputProfile">
                    <input type="password" placeholder="Mot de passe" class="inputProfile">

                    <button class="global-saveButton" id="saveProfile">Sauvegarder</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../../javascript/profile.js"></script>
</body>

</html>