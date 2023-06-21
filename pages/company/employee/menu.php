<?php 
    include "../../partials/sider.php";
?>
    <div class="global-containerCompany">
    <?php foreach($notifications as $notification): ?>
        <div>
            <p><?=$notification['notification_created_at'] ?></p>
            <p><?=$notification['notification_message'] ?></p>
            <p><?=$notification['notification_link'] ?></p>
        </div>
    <?php endforeach; ?>
    </div>
</body>
</html> 