<?php

include_once "../partials/navBarreProfile.php";
$currentDate = date('Y-m-d');
?>

<body class="bodyProfile">

    <div class="containerAllProfile">
        <h2 class="titleProfile">Historique de vos locations :</h2>
        <div>
            <?php $rentals = json_decode($user['rentals'], true); ?>

            <h2> Location passée</h2>

            <?php foreach($rentals as $rental ): ?>
                <?php if ($currentDate > $rental['end-date']): ?>
                    <div >
                        <div>   
                            <p class="global-title"><?= $rental['apartment-name'] ?> </p>
                            <p class="global-subtitle" display="grid"><?= $rental['apartment-zipCode'] ?></p>
                            <p class="global-subtitle"><?= $rental['apartment-city'] ?></p>
                            <p class="global-subtitle"><?= $rental['start-date'] ?></p>
                            <p class="global-subtitle"><?= $rental['end-date'] ?></p>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach; ?>
        </div>

        <div>
        
            <h2> Location en cours</h2>

            <?php foreach($rentals as $rental ): ?>
                <?php if ($currentDate > $rental['start-date'] && $currentDate < $rental['end-date']): ?>
                    <div >
                        <div>   
                            <p class="global-title"><?= $rental['apartment-name'] ?> </p>
                            <p class="global-subtitle" display="grid"><?= $rental['apartment-zipCode'] ?></p>
                            <p class="global-subtitle"><?= $rental['apartment-city'] ?></p>
                            <p class="global-subtitle"><?= $rental['start-date'] ?></p>
                            <p class="global-subtitle"><?= $rental['end-date'] ?></p>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach; ?>
        </div>

        <div>
        
            <h2> Location Future</h2>

            <?php foreach($rentals as $rental ): ?>
                <?php if ($currentDate < $rental['start-date']): ?>
                    <div>
                        <div>   
                            <p class="global-title"><?= $rental['apartment-name'] ?> </p>
                            <p class="global-subtitle" display="grid"><?= $rental['apartment-zipCode'] ?></p>
                            <p class="global-subtitle"><?= $rental['apartment-city'] ?></p>
                            <p class="global-subtitle"><?= $rental['start-date'] ?></p>
                            <p class="global-subtitle"><?= $rental['end-date'] ?></p>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>