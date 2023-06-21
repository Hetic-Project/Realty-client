<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../styles/index.css">
    <title>Mettre un bien en vente - Realty</title>
    <a href="../../location/locations.php"><img class="iconRealityUpdateApart" src="../../../images/RealtyIcon.svg" alt="Logo Realty"></a>
</head>
<body>
    <form class="formUpdateApart">
        <div class="containerAddPicture">
            <div id="image-container"></div>
            <div class="buttonInput-FileUpdateApart">
                <input class="buttonInputUpdateApart" type="file" id="file-input"> 
                <label class="buttonInput-File" for="file-input">Ajouter une image</label>
            </div>
        </div>
            <input class="inputTypeOfAccommodation" type="text" id="name" name="name">
            <input class="inputCapacity" type="text"  id="name" name="name">
            <textarea class="descriptionUpdateApart" name="description" rows="15" cols="36"></textarea>

        <div class="equipementUpdateApart">
            <h1 id="textEquipement">Équipement :</h1> 
            <div class="equipementList">
                <div class="listEquipement">
                    <input type="checkbox" id="kitchen" name="kitchen">
                    <img class="kitchenPicture" src="../.././../images/kitchen.svg">
                    <label for="kitchen" class="textKitchen">Cuisine complète</label>       
                </div>
                <div class="listEquipement">
                    <input type="checkbox" id="camera" name="camera">
                    <img class="cameraPicture" src="../../../images/Camera.svg">
                    <label for="camera" class="textCamera">Caméra</label>
                </div>
                <div class="listEquipement">
                    <input type="checkbox" id="workspace" name="workspace">
                    <img class="workspacePicture" src="../.././../images/WorkSpace.svg">
                    <label for="workspace" class="textWorkspace">Espace de travail</label>                                    
                </div>
                <div class="listEquipement">
                    <input type="checkbox" id="smokeAlarm" name="smokeAlarm">
                    <img class="smokeAlarmPicture" src="../../../images/Détecteur de fumée.svg">
                    <label for="smokeAlarm" class="textSmokeAlarm">Détecteur</label>
                </div>
                <div class="listEquipement">
                    <input type="checkbox" id="wifi" name="wifi">
                    <img class="wifiPicture" src="../.././../images/WIFI.svg">
                    <label for="wifi" class="textWifi">Wifi</label>
                </div>
                <div class="listEquipement">
                    <input type="checkbox" id="firstKit" name="firstKit">
                    <img class="firstKitPicture" src="../../../images/Kit de soin.svg">
                    <label for="firstKit" class="textFirstKit">Kit de soin</label>
                </div>
                <div class="listEquipement">
                    <input type="checkbox" id="dryer" name="dryer">
                    <img class="dryerPicture" src="../.././../images/Sèche Linge.svg">
                    <label for="dryer" class="textDryer">Sèche-linge</label>
                </div>
                <div class="listEquipement">
                    <input type="checkbox" id="privateParking" name="privateParking">
                    <img class="privateParkingPicture" src="../../../images/Parking.svg">
                    <label for="privateParking" class="textPrivateParking">Parking Privé</label>
                </div>
                <div class="listEquipement">
                    <input type="checkbox" id="climateControl" name="climateControl">
                    <img class="climateControlPicture" src="../.././../images/Climatiseur.svg">
                    <label for="climateControl" class="textClimateControl">Climatiseur</label>
                </div>
                <div class="listEquipement">
                    <input type="checkbox" id="heating" name="heating">
                    <img class="heatingPicture" src="../../../images/Chauffage.svg">
                    <label for="heating" class="textHeating">Chauffage</label>
                </div>
            </div> 
        </div>

        <input class="inputInterior" type="text" id="interior" name="interior" required>
        <input class="inputSecurity" type="text" id="security" name="interior" required>
        <textarea class="cancellationConditionUpdateApart" name="description" rows="15" cols="36"></textarea>
        <a href="../../location/locations.php"><button class="buttonSave" type="button">Enregistrer</button></a>
        </section>
    </form>
</body>
<script src="../../../javascript/createApart.js"></script>
</html>