<?php

include "../../partials/sider.php";

?>
<body>
            <div class="conversation">
                <?php foreach($messages as $message): ?>

                    <?php if ($user_id == $message['user_id']): ?>   
                        <div class="transmitter">
                            <p><?= $message['user_problem_created_at'] ?></p>
                            <p><?= $message['user_problem_description'] ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if ($user_id != $message['user_id'] && $message['user_statut'] == 'Logistique'): ?>    
                        <div class="receiver">
                            <p><?= $message['user_problem_created_at'] ?></p>
                            <p><?= $message['user_firstname'] ?>-<?= $message['user_lastname'] ?>:</p>
                            <p><?= $message['user_problem_description'] ?></p>
                        </div>
                    <?php endif; ?>

                <?php endforeach; ?> 

            </div>
        <form action="http://localhost:4000/user/problemUserAdd" method="POST" class="inputContainer">
            <input type="hidden" value="<?= $apartment['apartment_id'] ?>" name="apartment_id"/>
            <input type="hidden" value="<?= $user_id ?>" name="user_id"/>
            <input class="msgInput" placeholder="Écrire un message..." name="problem_description">
            <button class="sendButton">
                Envoyer
            </button>
        </form>
</body>
</html>