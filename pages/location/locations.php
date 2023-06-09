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
    <?php 
        include "../partials/userHeader.php";
    ?>
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
    <?php 
        include "../partials/locationContainer.php";

        include "../partials/locationContainer.php";
    ?>
</body>
</html>