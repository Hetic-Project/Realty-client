<?php

include "../../partials/userHeader.php";

?>
<body>
    <form class="formCreateApart">
        <section class="containerAddPicture">
            <div class="firstDragAndDrop">
                <div class="addPicture">
                    <img  class="iconPlusCreateApart" src="../../../images/iconPlus.svg">
                    <p id="textAddPicture">Ajouter image</p>
                </div>
            </div>
            <div class="typeOfAccommodation">
                <input class="inputTypeOfAccommodation" type="text" placeholder="Type : Maison, Appartement....." id="name" name="name" required>
            </div>
            <div class="capacity">
                <input class="inputCapacity" type="text" placeholder="Capaciter: 2 Voyageurs, 1 Chambre..." id="name" name="name" required>
            </div>
            <div class="description">
                <textarea class="descriptionCreateApart" name="description" rows="15" cols="36" placeholder="Description..."></textarea>
            </div>
            <div class="equipementCreateApart">
                <input type="checkbox" id="" >
            </div>
        </section>
    </form>
</body>
</html>