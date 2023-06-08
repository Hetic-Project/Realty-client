<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>Billetterie</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/index.css">
    <title>Connexion - Realty</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>

<body>

    <div class="header">

        <!-- <head>
        <title>Billeterie</title>  

        Navigation

        <nav>
            <h1>Billeterie</h1>
            <div class="navbar">
                <ul>
                    <li style="--clr:#4d84e2">
                        <a href="index.html" data-text="&nbsp;Accueil">&nbsp;Accueil&nbsp;</a>
                    </li>
                    <li style="--clr:#4d84e2">
                        <a href="#Information" data-text="&nbsp;Information">&nbsp;Information&nbsp;</a>
                    </li>
                    <li style="--clr:#4d84e2">
                        <a href="QRCODE.html" data-text="&nbsp;QRCODE">&nbsp;QRCODE&nbsp;</a>
                    </li>
                    <li style="--clr:#4d84e2">
                        <a href="signin.html" data-text="&nbsp;Inscription">&nbsp;Inscription&nbsp;</a>
                    </li>
                </ul>
            </div>
        </nav>

    </head> -->
        <div class="cont">
            <div class="form sign-in">
                <h2>Log In</h2>
                <form method="post">
                    <label>
                        <span>Email</span>
                        <input type="text" name="email" id="email" required>
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="text" name="password" id="password" required>
                    </label>
                    <button type="submit" name="fformsend" id="fformsend" class="submit" required>Log In</button>
                </form>

                <p class="forgot-pass">Mot de passe oublié ?</p>

                <!-- <div class="social-media">
        <ul>
          <li><img src="img/facebook.png"></li>
          <li><img src="img/twitter.png"></li>
          <li><img src="img/linkedin.png"></li>
          <li><img src="img/instagram.png"></li>
        </ul>
      </div> -->
            </div>

            <div class="sub-cont">
                <div class="img">
                    <div class="img-text m-up">
                        <h2>Nouveau ici?</h2>
                        <p>Inscrivez-vous et découvrez de nouvelles opportunitées!</p>
                    </div>
                    <div class="img-text m-in">
                        <h2>Déjà parmis nous ? </h2>
                        <p>Si vous avez déjà un compte, connectez-vous en cliquant ici !</p>
                    </div>
                    <div class="img-btn">
                        <span class="m-up">Sign Up</span>
                        <span class="m-in">Log In</span>
                    </div>
                </div>
                <div class="form sign-up">
                    <h2>Sign Up</h2>

                    <form method="post">
                        <label>
                            <span>Name</span>
                            <input type="name" name="name" id="name" required>
                        </label>
                        <label>
                            <span>Email</span>
                            <input type="email" name="Email" id="Email" required>
                        </label>
                        <label>
                            <span>Password</span>
                            <input type="password" name="Password" id="Password" required>
                        </label>
                        <label>
                            <span>Confirm Password</span>
                            <input type="text" name="confirm password" id="confirm password" required>
                        </label>
                        <button type="submit" name="formsend" id="formsend" class="submit" value="OK">Sign Up
                            Now</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../../javascript/index.js"></script>
</body>

</html>