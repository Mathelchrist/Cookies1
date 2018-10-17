<?php require 'inc/head.php';

if (empty($_SESSION)) {
    header('location: /login.php');
}
var_dump($_SESSION);
?>

<section class="cookies container-fluid">
    <div class="">
        <?php foreach ($_SESSION['panier'] as $key => $value) { ?>
            <div class="col offset-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/img/product-<?=$key?>.jpg" alt="Card image cap">
                        <p class="card-text">Vous avez <?=$value?> sorte de ces gateaux dans votre panier</p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

