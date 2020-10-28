<?php
require 'classes/Product.php';
require 'classes/ProductCatalogue.php';
require 'classes/ShoppingCart.php';

// De catalogus met alle producten inladen
$catalogue = new ProductCatalogue('products.json');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="webshop">
    <h2 class="webshop__title">My first webshop <a href="cart.php" class="cart-icon">Winkelmandje</a></h2>
    <div class="webshop__content">
        <div class="catalogue">
            <?php foreach ($catalogue->getAllProducts() as $product ): ?>
                <div class="product">
                    <div class="imgs">
                    <img src="<?php echo $product->getImage_url_1()?>" alt="foto" width="150px" class="foto">
                    <img src="<?php echo $product->getImage_url_2()?>" alt="foto" width="150px" class="foto">
            </div>
                    <p>$<?php echo $product->getPrice() ?>.-</p>
                    <h3><?php echo $product->getTitle() ?></h3>
                    <p><?php echo $product->getDescription() ?></p>
                    <a href="detail.php?action=get_code&code=<?php echo $product->getCode() ?> " class="detail-btn">Bekijk product</a><br>
                    <a href="cart.php?action=add_product&code=<?php echo $product->getCode() ?>" class="cart-button">Toevoegen aan winkelmandje</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
</body>
</html>

