<!DOCTYPE html>
<html>

<head>
    <title>Realty</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../styles/index.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>

<body class="bodyLogin">

    <?php include "../../pages/partials/userHeader.php" ?>

    <div class="containerLogin">
        <div class="form sign-in">
            <h2 class="h2Login">Sign In</h2>

            <form action="http://localhost:4000/user/loginAccount"  method="POST">

                <label class="labelLogin">
                    <span class="spanLogin">Email</span>
                    <input class="inputLogin" type="text" name="mail" id="email" required>
                </label>

                <label class="labelLogin">
                    <span class="spanLogin">Password</span>
                    <input class="inputLogin" type="password" name="password" id="password" required>
                </label>

                <button type="submit" name="fformsend" id="fformsend" class="submit buttonLogin" required>Sign
                    In</button>
            </form>

            <p class="forgot-pass">Mot de passe oublié ?</p>
        </div>

        <div class="sub-containerLogin">
            <div class="img">
                <div class="img-text m-up">
                    <h2 class="h2Login">Nouveau ici?</h2>
                    <p class="pLogin">Sign up et découvre de nouvelle opportunitées!</p>
                </div>
                <div class="img-text m-in">
                    <h2 class="h2Login">Déjà parmis nous ? </h2>
                    <p class="pLogin">Si tu as déjà un compte, Connecte toi !</p>
                </div>
                <div class="img-btn">
                    <span class="m-up spanLogin">Sign Up</span>
                    <span class="m-in spanLogin">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2 class="h2Login">Sign Up</h2>

                <form action="http://localhost:4000/user/createAccount" method="post">
                    <label class="labelLogin">
                        <span class="spanLogin">Prénom</span>
                        <input class="inputLogin" type="text" name="firstname" id="name" required>
                    </label>
                    <label class="labelLogin">
                        <span class="spanLogin">Nom</span>
                        <input class="inputLogin" type="text" name="lastname" id="name" required>
                    </label>
                    <label class="labelLogin">
                        <span class="spanLogin">Date de naissance</span>
                        <input class="inputLogin" type="date" name="birthday" id="name" required>
                    </label>
                    <label class="labelLogin">
                        <span class="spanLogin">Email</span>
                        <input class="inputLogin" type="email" name="mail" id="Email" required>
                    </label>
                    <label class="labelLogin">
                        <span class="spanLogin">Mot de Passe</span>
                        <input class="inputLogin" type="password" name="password" id="Password" required>
                    </label>
                
                    <button type="submit" name="formsend" id="formsend" class="submit buttonLogin" value="OK">Sign Up
                        Now</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../../javascript/index.js"></script>
</body>

</html>