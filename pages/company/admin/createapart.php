<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../styles/index.css">
    <title>Mettre un bien en vente - Realty</title>
</head>
<body>
    <form class="formCreateApart">
        <div class="containerAddPicture">
            <div class="firstDragAndDrop">
                <div id="image-container"></div>
            </div>
            <div class="buttonInput-FileCreateApart">
                <input type="file" id="file-input"> 
                <label class="buttonInput-File" for="file-input">Ajouter une image</label>
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
        <!-- <div class="equipement"> -->
            <div class="equipementCreateApart">
                <h1 id="textEquipement">Équipement :</h1>
                    <div class="equipementList">
                        <div class="kitchen_securityCamera">
                            <input type="checkbox" id="kitchen" name="kitchen">
                            <img class="kitchenPicture" src="../.././../images/kitchen.svg">
                            <label for="kitchen" class="textKitchen">Cuisine complète</label>       
                            <input type="checkbox" id="camera" name="camera">
                            <img class="cameraPicture" src="../../../images/Camera.svg">
                            <label for="camera" class="textCamera">Caméra</label>
                        </div>
                        <div class="workspace_smokeAlarm">
                            <input type="checkbox" id="workspace" name="workspace">
                            <img class="workspacePicture" src="../.././../images/WorkSpace.svg">
                            <label for="workspace" class="textWorkspace">Espace de travail</label>                                    <input type="checkbox" id="smokeAlarm" name="smokeAlarm">
                            <img class="smokeAlarmPicture" src="../../../images/Détecteur de fumée.svg">
                            <label for="smokeAlarm" class="textSmokeAlarm">Détecteur</label>
                        </div>
                        <div class="wifi_firstKit">
                            <input type="checkbox" id="wifi" name="wifi">
                            <img class="wifiPicture" src="../.././../images/WIFI.svg">
                            <label for="wifi" class="textWifi">Wifi</label>
                            <input type="checkbox" id="firstKit" name="firstKit">
                            <img class="firstKitPicture" src="../../../images/Kit de soin.svg">
                            <label for="firstKit" class="textFirstKit">Kit de soin</label>
                        </div>
                            <div class="dryer_privateParking">
                            <input type="checkbox" id="dryer" name="dryer">
                            <img class="dryerPicture" src="../.././../images/Sèche Linge.svg">
                            <label for="dryer" class="textDryer">Sèche-linge</label>
                            <input type="checkbox" id="privateParking" name="privateParking">
                            <img class="privateParkingPicture" src="../../../images/Parking.svg">
                            <label for="privateParking" class="textPrivateParking">Parking Privé</label>
                        </div>
                        <div class="climateControl_heating">
                            <input type="checkbox" id="climateControl" name="climateControl">
                            <img class="climateControlPicture" src="../.././../images/Climatiseur.svg">
                            <label for="climateControl" class="textClimateControl">Climatiseur</label>
                            <input type="checkbox" id="heating" name="heating">
                            <img class="heatingPicture" src="../../../images/Chauffage.svg">
                            <label for="heating" class="textHeating">Chauffage</label>
                        </div>
                    </div>
            </div>
        <!-- </div> -->
        <div class="interior">
            <input class="inputInterior" type="text" placeholder="Intérieur" id="interior" name="interior" required>
        </div>
        <div class="security">
            <input class="inputSecurity" type="text" placeholder="Sécuriter" id="security" name="interior" required>
        </div>
        <div class="cancellationCondition">
            <textarea class="cancellationConditionCreateApart" name="description" rows="15" cols="36" placeholder="Condition d'annulation"></textarea>
        </div>
        <div class="buttonSaveCreateApart">
            <button class="buttonSave" type="button">Enregistrer</button>
        </div>  
        </section>
    </form>
</body>
<script src="../../../javascript/createApart.js"></script>
</html>