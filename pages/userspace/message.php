<?php

include "../partials/userHeader.php";

?>
<body>
    <div class="msgLocationContainer">
        <div class="messageSlider">
            <p class="msgMenuTitle">Message</p>
    
            <p class="msgApartmentName">Appartement 1</p>
            <p class="msgApartmentDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            
            <p class="msgApartmentName">Appartement 2</p>
            <p class="msgApartmentDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>
            <div class="conversation">
            <div class="transmitter">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>

                <div class="receiver">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>

            </div>
        <form class="inputContainer">
            <input class="msgInput" placeholder="Écrire un message..." minlength="1" maxlength="500">
            <button class="sendButton">
                Envoyer
            </button>
        </form>
</body>
</html>