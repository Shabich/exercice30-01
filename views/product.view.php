<?php include '..\partials\header.php';
include '../config/cURL.php' ;
?>



<div class="wrapper">
    <h1>Page de produits</h1>
    <div class="product-list">
   <?php 
   foreach ($products as $product): ?>
    
    <li class="produitiso">
    <a href="products.view.php?product=<?= $product ['id'] ?>"> <img class="imageproduit" src=" <?= $product['image'] ?>" alt=""></a>
        <h2 class="titreproduit"> <?= $product ['title']?></h2>
        <h3 class="descriptionproduit"> <?= substr($product['description'], 50)?>...</h3>
        <h2 class="priceproduit"> <?= $product['price']?> €</h2>
        <button class="btnpanier"> <a href="">ajouter au panier</a></button>
    </li>
    <?php endforeach?>
    </div>
   
   
   
</div>






<?php include '../partials/footer.php';?>



