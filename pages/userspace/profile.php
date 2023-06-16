<?php

include_once "../partials/navBarreProfile.php";
?>

<body class="bodyProfile">

    <div class="profile">
        <div class="profile-card">
            <div class="frontProfile">
                <img class="" src="../../images/RealtyIcon.svg"></img>
                <div class="detailsProfile">
                    <p class="pProfile"><strong>Prénom:</strong> <?= $user['user_firstname'] ?></p>
                    <p class="pProfile"><strong>Nom:</strong> <?= $user['user_lastname'] ?></p>
                    <p class="pProfile"><strong>Date de Naissance:</strong> <?= $user['user_birth'] ?></p>
                    <p class="pProfile"><strong>Téléphone:</strong> <?= $user['user_phone'] ?></p>
                    <p class="pProfile"><strong>Ville:</strong> <?= $user['user_city'] ?></p>
                    <p class="pProfile"><strong>Code Postal:</strong> <?= $user['user_zip_code'] ?></p>
                    <p class="pProfile"><strong>Adresse Mail:</strong> <?= $user['user_mail'] ?></p>
                    <p class="pProfile"><strong>Adresse:</strong> <?= $user['user_address'] ?></p>
                </div>
                <button class="global-saveButton">Modifier le Profile</button>
            </div>
            <form action='http://localhost:4000/user/updateAccount' method='POST' class="backProfile">

                <div class="containerinputProfile">
                    <h2 class="titleProfile">Profile</h2>
                    <div class="containerTwoInput">
                        <input type="hidden" value="<?= $user['user_id'] ?>" name="userId">
                        <input type="text" placeholder="Prénom" class="inputProfile" value=" <?= $user['user_firstname'] ?>" name="firstname">
                        <input type="text" placeholder="Nom de famille" class="inputProfile" value=" <?= $user['user_lastname'] ?>" name="lastname">
                    </div>

                    <div class="containerTwoInput">
                        <input type="date" class="inputProfile" value="<?= $user['user_birth'] ?>" name="birthday">
                        <input type="text" placeholder="Numéro de téléphone" class="inputProfile" value=" <?= $user['user_phone'] ?>" name="phone">
                    </div>
                    <div class="containerTwoInput">
                        <input type="text" placeholder="Ville" class="inputProfile" value=" <?= $user['user_city'] ?>" name="city">
                        <input type="text" placeholder="Code postal" class="inputProfile" value=" <?= $user['user_zip_code'] ?>" name="zipCode">
                    </div>

                    <input type="text" placeholder="Addresse personnel" class="inputProfile" value=" <?= $user['user_address'] ?>" name="address">
                    <input type="mail" placeholder="Addresse mail" class="inputProfile" value=" <?= $user['user_mail'] ?>" name="mail">

                    <button class="global-saveButton">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../../javascript/profile.js"></script>
</body>

</html>