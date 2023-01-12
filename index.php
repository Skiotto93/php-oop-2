<?php

require_once __DIR__ . "/db.php";


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
        <div class="container">
            <h1 class="text-center py-4">Dog&Cat Shop</h1>
            <div class="row">
                <?php foreach($products as $product) { ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $product->getName(); ?>" class="card-img-top" alt="<?php echo $product->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $product->getName(); ?></h5>
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
                            <a href="#" class="btn btn-primary my-3 d-flex justify-content-center">Aggiungi</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>