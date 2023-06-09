<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/index.css">
    <title>Locations - Realty</title>
</head>
<body>
    <div class="dateContainer">
        <div class="dateSelectContainer departureDate">
            <img src="../../images/departSVG.svg" class="global-icon"></img>
            <input type="date" class="inputDate" id="departureDate">
        </div>
        <div class="dateSelectContainer returnDate">
            <img src="../../images/returnSVG.svg" class="global-icon"></img>
            <input type="date" class="inputDate">
        </div>
    </div>

    <script>
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('departureDate').value = today;
    </script>

    <div class="global-mainContainer">
    <a class="global-locationContainer" href="./locationdetails.php">
            <img class="global-imgLocation" src="../../images/apartment1.svg" alt="appartement">
                <div>
                    <div class="global-textposition">
                        <p class="global-title">Champ de Mars</p>
                        <p class="global-description" display="grid">En entrant dans l'appartement, vous êtes accueilli(e) par un hall d'entrée spacieux et lumineux qui mène à toutes les pièces principales. Le salon est vaste, avec de hauts plafonds, des moulures et de grandes fenêtres qui laissent entrer une abondance de lumière naturelle. Il est aménagé de manière élégante, avec des meubles confortables, une cheminée et des œuvres d'art soigneusement choisies.</p>
                        <p class="global-subtitle">829€ la nuit, 4983€ au total </p>
                    </div>
                </div>
        </a>

        <a class="global-locationContainer" href="./locationdetails.php">
            <img class="global-imgLocation" src="../../images/apartment1.svg" alt="appartement">
                <div>
                    <div class="global-textposition">
                        <p class="global-title">Champ de Mars</p>
                        <p class="global-description" display="grid">En entrant dans l'appartement, vous êtes accueilli(e) par un hall d'entrée spacieux et lumineux qui mène à toutes les pièces principales. Le salon est vaste, avec de hauts plafonds, des moulures et de grandes fenêtres qui laissent entrer une abondance de lumière naturelle. Il est aménagé de manière élégante, avec des meubles confortables, une cheminée et des œuvres d'art soigneusement choisies.</p>
                        <p class="global-subtitle">829€ la nuit, 4983€ au total </p>
                    </div>
                </div>
        </a>
    </div>
</body>
</html>