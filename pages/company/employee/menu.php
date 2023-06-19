<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../styles/index.css">
    <title>Realty</title>
</head>

<body>

    <div class="global-sider">
            <a href="#"><img src="../../../images/RealtyIcon.svg" alt="Logo Realty" class="global-logoSider"></a>
            <a href="#"><img src="../../../images/iconProfile.svg" alt="Photo Apartment" class="global-imgApart"></a>
            <h3 class="global-titleSider">Apartment Title</h3>

            <a href="../../company/employee/dashboard.php" class="global-buttonHref"><img src="../../../images/iconDashboard.svg" alt="Icone Dashboard" class="global-icone">Dashboard</a>
            <a href="../../company/employee/employeemessage.php" class="global-buttonHref"><img src="../../../images/iconMessage.svg" alt="Icone Message" class="global-icone">Message</a>
            <a href="../../company/employee/checklist.php" class="global-buttonHref"><img src="../../../images/iconChecklist.svg" alt="Icone Checklist" class="global-icone">Checklist</a>
            <a href="../../company/employee/planning.php" class="global-buttonHref"><img src="../../../images/iconPlanning.svg" alt="Icone Planning" class="global-icone">Planning</a>
            <a href="../../company/employee/report.php" class="global-buttonHref"><img src="../../../images/iconReport.svg" alt="Icone Report" class="global-icone">Report</a>
            <br>
        <div>
            <h3>Welcome Back</h3> 
            <strong>Tom Cardonnel</strong>
        </div>
    </div>
    <div class="global-containerCompany">
    <div class="global-mainContainer" id="locationsContainer">
        <?php foreach($apartments as $apartment ): ?>
            <a class="global-locationContainer" href="http://localhost:3000/pages/location/locationdetails.php?id=<?=$apartment['apartment_id']?>" >
                <img class="global-imgLocation" src="<?= $apartment['apartment_main_picture'] ?>" alt="appartement">
                <div>
                    <div class="global-textposition">   
                        <p class="global-title"><?= $apartment['apartment_adress'] ?> </p>
                        <p class="global-description" display="grid"><?= $apartment['apartment_description'] ?></p>
                        <p class="global-subtitle"><?= $apartment['apartment_price'] ?>€ la nuit </p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
    </div>
</body>
</html> 