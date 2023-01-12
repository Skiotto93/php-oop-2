<?php 

require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/food.php";
require_once __DIR__ . '/classes/category.php';
require_once __DIR__ . '/classes/toys.php';
require_once __DIR__ . "/traits/nameItem.php";

$dog = new category("Cane", "<i class=\"fa-solid fa-dog\"></i>");
$cat = new category("Gatto", "<i class=\"fa-solid fa-cat\"></i>");

$product = new product("Collare", "https://www.google.com/url?sa=i&url=https%3A%2F%2Fit.pngtree.com%2Ffreepng%2Fpet-supplies-pet-collar-toys_5320184.html&psig=AOvVaw23vGLmtDgB0ghy4i-qiExp&ust=1673575101324000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCOiLqZ33wPwCFQAAAAAdAAAAABAT", 20, $dog);
$food = new food("Crocchette", "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.damoreno.ch%2Fit%2Fprodotto-7613031384600.html&psig=AOvVaw19gHinaDQx_RgCO9AuNg7C&ust=1673576503552000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMjh-7n8wPwCFQAAAAAdAAAAABAJ", 29.99, $cat, "12-10-2024", 100);
$toys = new toys("Palestrina", "https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.ulissequalityshop.com%2Fwp-content%2Fuploads%2F2017%2F04%2Fcamon-palestrina-gatti-gioco-appeso.jpg&imgrefurl=https%3A%2F%2Fwww.ulissequalityshop.com%2Fprodotto%2Fcamon-palestrina-in-peluche-con-gioco-per-gatti%2F&tbnid=o0ppvPVJ0n_swM&vet=12ahUKEwikntnpjMH8AhWJn_0HHXvhCQIQMygGegUIARD_Aw..i&docid=kyVs3doTODUc3M&w=1200&h=1200&q=giochi%20per%20gatti&ved=2ahUKEwikntnpjMH8AhWJn_0HHXvhCQIQMygGegUIARD_Aw", 12.99, $cat, "Peluche", "60cm x 40cm");

$products = [
    $product,
    $food,
    $toys,
];