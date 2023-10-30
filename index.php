<?php 
    session_start();
    require 'inc/data/products.php';
    require 'inc/head.php';
   
    if(isset($_GET['add_to_cart']) && !empty($_GET['add_to_cart'])) {
        if($_GET['add_to_cart'] == 46) {
                if(isset($_SESSION['Pecan nuts']) && $_SESSION['Pecan nuts'] >= 1) {
                    $_SESSION['Pecan nuts'] += 1;
                } else {
                    $_SESSION['Pecan nuts'] = 1;
                }
        } elseif ($_GET['add_to_cart'] == 36) {
                if(isset($_SESSION['Chocolate chips']) && $_SESSION['Chocolate chips'] >= 1) {
                    $_SESSION['Chocolate chips'] += 1;
                } else {
                    $_SESSION['Chocolate chips'] = 1;
                }
        } elseif ($_GET['add_to_cart'] == 58) {
                if(isset($_SESSION['Full chocolate cookie']) && $_SESSION['Full chocolate cookie'] >= 1) {
                    $_SESSION['Full chocolate cookie'] += 1;
                } else {
                    $_SESSION['Full chocolate cookie'] = 1;
                }
        } else {
                if(isset($_SESSION['M&M\'s cookies']) && $_SESSION['M&M\'s cookies'] >= 1) {
                    $_SESSION['M&M\'s cookies'] += 1;
                } else {
                    $_SESSION['M&M\'s cookies'] = 1;
                }
        }
    }    
    ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php 
            foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
