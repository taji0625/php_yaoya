<?php
require_once  "./product.php";
require_once  "./user.php";
require_once  "./greengrocer.php";

$productParams = [
  ['name' => 'トマト' , 'price' => 100],
  ['name' => 'きゅうり' , 'price' => 200],
  ['name' => '玉ねぎ' , 'price' => 300],
  ['name' => 'なす' , 'price' => 400],
];

$products = [];
foreach ($productParams as $param) {
  array_push($products, new Product($param["name"], $param["price"]));
}

$greengrocer = new Greengrocer($products);
$user = new User();

$greengrocer->dispProducts();
$chosenProduct = $user->chooseProduct($products);
$quantityOfProduct = $user->decideQuantity($chosenProduct);
$greengrocer->calculateCharges($chosenProduct, $quantityOfProduct);