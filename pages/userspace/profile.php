<?php
    include_once "../partials/navBarreProfile.php";
?>

<body class="bodyProfile">
    <div class="containerModifProfile">
        <form action='http://localhost:4000/user/updateAccount' method='POST' class="containerinputProfile">
            <h2 class="titleProfile">Profile</h2>
            <?php if (isset($_GET['message'])): ?>
                <span> <?= $_GET['message'] ?></span>
            <?php endif ?>    
            <div class="containerTwoInput" >
                <input type='hidden' value='<?= $user['user_id'] ?>' name='userId'/>
                <input type="text" placeholder="Prénom" value='<?= $user['user_firstname'] ?>' class="inputProfile" name='firstname'>
                <input type="text" placeholder="Nom de famille" value='<?= $user['user_lastname'] ?>' class="inputProfile" name='lastname'>
            </div>
    
            <div class="containerTwoInput">
                <input type="date" value='<?= $user['user_birth'] ?>' class="inputProfile" name='birthday'>
                <input type="text" value='<?= $user['user_phone'] ?>' placeholder="Numéro de téléphone" class="inputProfile" name='phone'>
            </div>

            <div class="containerTwoInput">
                <input type="text" placeholder="Ville" value='<?= $user['user_city'] ?>' class="inputProfile" name='city'>
                <input type="text" value='<?= $user['user_zip_code'] ?>' placeholder="Code postal" class="inputProfile" name='zipCode'>
            </div>

            <input type="text" placeholder="Addresse personnel" value='<?= $user['user_address'] ?>' class="inputProfile" name='address'>
            <input type="mail" placeholder="Addresse mail" value='<?= $user['user_mail'] ?>' class="inputProfile" name='mail'>
            <a href='#'> Changez mon mot de passe </a>

            <button class="global-saveButton">Sauvegarder</button>
        </form>


        
    </div>
        
        <!-- <h1 class="titleProfile">Bonjour,</h1>
        <h2 class="nameProfile">Rubens Bonnin</h2>é
        <h3 class="titleProfile">Voyageur</h3> -->



        
        




        



        
        






        
        

        


        


        

        
        
        
        
        <!-- <div class="profile">
            <div class="profile-card">
                <div class="frontProfile">
                    <img class="" src="../../images/RealtyIcon.svg"></img>
                    <h2 class="nameProfile">Rubens Bonnin</h2>
                    <h3 class="titleProfileBot">Voyageur</h3>
                    <div class="wrapperProfile">
                        <div class="static-txtProfile">Bonjour,</div>
                        <ul class="dynamic-txtsProfile">
                            <li class="liProfile"><span class="spanProfile">Rubens</span></li>
                            <li class=" liProfile"><span class="spanProfile">Bonnin</span></li>
                            <li class="liProfile"><span class="spanProfile">Rubens Bonnin</span></li>
                        </ul>
                    </div>
                </div>
                <div class="backProfile">
                    <div class="detailsProfile">
                        <p class="pProfile"><strong>Prénom:</strong> Rubens</p>
                        </br>
                        <p class="pProfile"><strong>Nom:</strong> Bonnin</p>
                        </br>
                        <p class="pProfile"><strong>Date de Naissance:</strong> 21/06/2004</p>
                        </br>
                        <p class="pProfile"><strong>Téléphone:</strong> 0987654323</p>
                        </br>
                        <p class="pProfile"><strong>Ville:</strong> La Courneuve, Inde</p>
                        </br>
                        <p class="pProfile"><strong>Code Postal:</strong> 12678</p>
                        </br>
                        <p class="pProfile"><strong>Mot de Passe:</strong> 0é"'(§è!çà</p>
                        </br>
                        <p class="pProfile"><strong>Adresse Mail:</strong> exemple@gmail.com</p>
                        </br>
                        <p class="pProfile"><strong>Adresse:</strong> 10 rue Dunk</p>
                        </br>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="containeProfile">
            <div class="divlabelProfile">
                <label class="labelProfile FirstNameProfile">
                    <span class="spanProfile">Prénom</span>
                    <input class="inputProfile" type="text" name="firstname" id="name" required>
                </label>
                <label class="labelProfile LastNameProfile">
                    <span class="spanProfile">Nom</span>
                    <input class="inputProfile" type="text" name="lastname" id="name" required>
                </label>
                <label class="labelProfile BirthdayProfile">
                    <span class="spanProfile">Date de naissance</span>
                    <input class="inputProfile" type="date" name="birthday" id="name" required>
                </label>
                <label class="labelProfile CityProfile">
                    <span class="spanProfile">Ville</span>
                    <input class="inputProfile" type="password" name="password" id="Password" required>
                </label>
                <label class="labelProfile PostalCodeProfile">
                    <span class="spanProfile">Code Postal</span>
                    <input class="inputProfile" type="password" name="password" id="Password" required>
                </label>
                <label class="labelProfile">
                    <span class="spanProfiel">Email</span>
                    <input class="inputProfile" type="email" name="mail" id="Email" required>
                </label>
                <label class="labelProfile">
                    <span class="spanProfile">Mot de Passe</span>
                    <input class="inputProfile" type="password" name="password" id="Password" required>
                </label>

                <button type="submit" name="formsend" id="formsend" class="submit buttonProfile"
                    value="OK">Modifier</button>
            </div>
        </div>  -->
        <script src="../../javascript/index.js"></script>
</body>

</html>