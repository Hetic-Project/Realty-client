<?php

include "../../partials/userHeader.php";

?>
<body>
    <form class="formCreateApart">
        <section class="containerAddPicture">
            <div class="firstDragAndDrop">
                <div class="addPicture">
                    <img  class="iconePlusCreateApart" src="../../../images/iconePlus.svg">
                    <p id="textAddPicture">Ajouter image</p>
                </div>
            </div>
            <div class="typeOfAccommodation">
                <input class="inputTypeOfAccommodation" type="text" placeholder="Type : Maison, Appartement....." id="name" name="name" required>
            </div>
            <div class="capacity">
                <input class="inputCapacity" type="text" placeholder="Capaciter: 2 Voyageurs, 1 Chambre..." id="name" name="name" required>
            </div>
        </section>
    </form>
</body>
</html>