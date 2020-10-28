<?php
require 'classes/Product.php';
require 'classes/ProductCatalogue.php';
require 'classes/ShoppingCart.php';

$codeProduct = $_GET['code'];
$catalogue = new ProductCatalogue('products.json');
$product = $catalogue->getProduct($codeProduct);

// De catalogus met alle producten inladen
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail | shopping cart</title>
    <link rel="stylesheet" href="css/detail.css">
</head>
<body>
   
                
<section class="webshop">
    <h2 class="webshop__title">My first webshop <a href="cart.php" class="cart-icon">Winkelmandje</a></h2>
    <div class="product">
                    <img src="<?php echo $product->getImage_url()?>" alt="foto" width="300px" class="foto">
                    <p>$<?php echo $product->getPrice() ?>.-</p>
                    <h3><?php echo $product->getTitle() ?></h3>
                    <p><?php echo $product->getDescription() ?></p>
                    <a href="index.php" class="detail-btn">ga terug</a><br>
                    <a href="cart.php?action=add_product&code=<?php echo $product->getCode() ?>" class="cart-button">Toevoegen aan winkelmandje</a>
                </div>
</section>




    
</body>
</html>