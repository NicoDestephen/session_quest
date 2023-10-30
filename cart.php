<?php 
session_start();
require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
        <?php
        foreach($_SESSION as $cookieName => $numberCookies) {
            echo nl2br("\n") . $cookieName . " - " . $numberCookies  . nl2br("\n");
        }
        session_destroy();
        unset($_SESSION);
        
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
