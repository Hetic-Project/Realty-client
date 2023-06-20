<?php

include "../../partials/sider.php";

?>

<div class="global-containerCompany">
        <div class="global-mainContainer" id="locationsContainer">
            <?php foreach($apartments as $apartment ): ?>
                <a class="global-locationContainer" href="http://localhost:3000/pages/location/locationdetails.php?id=<?=$apartment['apartment_id']?>" >
                    <img class="global-imgLocation" src="<?= $apartment['picture'] ?>" alt="appartement">
                    <div>
                        <div class="global-textposition">   
                            <p class="global-title"><?= $apartment['name'] ?> </p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>