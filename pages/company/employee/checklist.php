<?php
include "../../partials/sider.php";
?>

<div class="global-containerCompany">
    <div class="search-bar">
        <input type="text" placeholder="Rechercher...">
        <div class="search-options">
            <div class="checkbox-option">
                <input type="checkbox" id="Employe" name="Employe">
                <label for="Employe">Rechercher un Utilisateur</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="Logistique" name="Logistique">
                <label for="Logistique">Rechercher une location</label>
            </div>
        </div>
        <button class="search-button">Envoyer</button>
    </div>

    <div class="checklist">
        <!-- <h2 class="checklistTitle">Chambre</h2> -->
        <div class="slider">
            <div class="item">
                <div class="user-image">
                    <img src="../../../images/iconProfile.svg" alt="Image 1">
                </div>
                <div class="user-name">Utilisateur 1</div>
                <button class="modify-button">Modifier</button>
            </div>
            <div class="item">
                <div class="user-image">
                    <img src="../../../images/iconProfile.svg" alt="Image 2">
                </div>
                <div class="user-name">Utilisateur 2</div>
                <button class="modify-button">Modifier</button>
            </div>
            <div class="item">
                <div class="user-image">
                    <img src="../../../images/iconProfile.svg" alt="Image 3">
                </div>
                <div class="user-name">Utilisateur 3</div>
                <button class="modify-button">Modifier</button>
            </div>
            <div class="item">
                <div class="user-image">
                    <img src="../../../images/iconProfile.svg" alt="Image 4">
                </div>
                <div class="user-name">Utilisateur 4</div>
                <button class="modify-button">Modifier</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
