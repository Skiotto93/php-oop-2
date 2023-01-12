<?php
require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/food.php";
require_once __DIR__ . '/classes/category.php';
require_once __DIR__ . '/classes/toys.php';

$dog = new category("Cane", "<i class=\"fa-solid fa-dog\"></i>");
$cat = new category("Gatto", "<i class=\"fa-solid fa-cat\"></i>");

$product = new product("Collare", "https://www.google.com/url?sa=i&url=https%3A%2F%2Fit.pngtree.com%2Ffreepng%2Fpet-supplies-pet-collar-toys_5320184.html&psig=AOvVaw23vGLmtDgB0ghy4i-qiExp&ust=1673575101324000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCOiLqZ33wPwCFQAAAAAdAAAAABAT", 20, $dog);
$food = new food("Crocchette", "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.damoreno.ch%2Fit%2Fprodotto-7613031384600.html&psig=AOvVaw19gHinaDQx_RgCO9AuNg7C&ust=1673576503552000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMjh-7n8wPwCFQAAAAAdAAAAABAJ", 29.99, $cat, "12-10-2024", 100);
$toys = new toys("Palestrina", "https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.ulissequalityshop.com%2Fwp-content%2Fuploads%2F2017%2F04%2Fcamon-palestrina-gatti-gioco-appeso.jpg&imgrefurl=https%3A%2F%2Fwww.ulissequalityshop.com%2Fprodotto%2Fcamon-palestrina-in-peluche-con-gioco-per-gatti%2F&tbnid=o0ppvPVJ0n_swM&vet=12ahUKEwikntnpjMH8AhWJn_0HHXvhCQIQMygGegUIARD_Aw..i&docid=kyVs3doTODUc3M&w=1200&h=1200&q=giochi%20per%20gatti&ved=2ahUKEwikntnpjMH8AhWJn_0HHXvhCQIQMygGegUIARD_Aw", 12.99, $cat, "Peluche", "60cm x 40cm");

$products = [
    $product,
    $food,
    $toys
];


?>

<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oop-php-2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="bg-success">
        <div class="container py-4">
            <h1 class="text-center">Dog&Cat Shop</h1>
            <div class="row">
                <?php foreach($products as $product) { ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $product->getName(); ?>" class="card-img-top" alt="<?php echo $product->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                            <p class="card-text">Prezzo: <?php echo $product->getPrice(); ?> €</p>
                            <?php if(method_exists($product, 'getExpiration')) { ?>
                            <p class="card-text">Data di scadenza: <?php echo $food->getExpiration(); ?></p>                            
                            <?php } ?>
                            <?php if(method_exists($product, 'getKcal')) { ?>
                            <p class="card-text">Kcal: <?php echo $food->getKcal(); ?></p>
                            <?php } ?>
                            <?php if(method_exists($product, 'getMaterials')) { ?>
                            <p class="card-text">Materiale: <?php echo $toys->getMaterials(); ?></p>                            
                            <?php } ?>
                            <?php if(method_exists($product, 'getSize')) { ?>
                            <p class="card-text">Dimensioni: <?php echo $toys->getSize(); ?></p>                            
                            <?php } ?>
                            <div>
                                <?php echo $product->getCategory()->getIcon() ?>
                            </div>
                            <a href="#" class="btn btn-primary">Aggiungi</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>