<?php

include '../partials/header.php';
include '../config/cURL.php' ;

if(isset($_GET['product'])){
    $id = $_GET ['product'];
}
?>

<h1> Page de produit</h1>

<?php foreach  ($products as $product): ?>
    <?php if ($product['id'] == $id): ?>
        <div class="product">
            <img src="<?= $product['image'] ?>" alt="">
            <h2><?= $product['title'] ?></h2>
            <h3><?= $product['description'] ?></h3>
            <h2><?= $product['price'] ?> €</h2>
            <button class="btnpanier"> <a href=""> ajouter au panier</a></button>
        </div>
    <?php endif ;
    endforeach; ?>