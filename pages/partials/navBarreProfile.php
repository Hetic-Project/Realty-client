<?php

    include "../partials/userHeader.php";
    session_start();
    if(!$_SESSION['id']){
        header('Location:http://localhost:3000/pages/userspace/login.php');
    }
    $user_id = $_SESSION['id'];
    $url='http://localhost:4000/user/getAccount/' . $user_id;
    $json = file_get_contents($url);
    $user = json_decode($json, true);

?>

<div class="navbarProfile">
    <a href="http://localhost:3000/pages/userspace/profile.php">Profil</a>
    <a href="http://localhost:3000/pages/userspace/historyLocations.php">Mes locations</a>
    <a href="http://localhost:3000/pages/userspace/billings.php">Mes Factures</a>
    <a href="http://localhost:3000/pages/userspace/message.php">Messages</a>
    <a href="http://localhost:4000/user/logout">Déconnexion</a>
    <a href="#">Désactiver le compte</a>
    <a href="#">Supprimer le compte</a>
    <script src="../../javascript/navBarreProfile.js"></script>
</div>
