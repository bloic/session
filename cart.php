<?php
session_start();
if (empty($_SESSION['loginname'])) {
    header('location: login.php');
}
require 'inc/head.php';
require 'inc/data/products.php';
?>


<section class="cookies container-fluid">
    <div class="row">
        <p>Votre panier :</p>
        <p><?= implode(", ", $catalog[$_SESSION['cookie']]); ?></p>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
