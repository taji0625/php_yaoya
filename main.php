<?php

$products = [
  ['name' => 'トマト' , 'price' => 100],
  ['name' => 'きゅうり' , 'price' => 200],
  ['name' => '玉ねぎ' , 'price' => 300],
  ['name' => 'なす' , 'price' => 400],
];

echo "いらっしゃいませ！商品を選んで下さい。\n\n";
foreach($products as $i => $product) {
  $i++;
  echo "${i}. ${product['name']}(${product['price']}円)\n";
}

echo "商品の番号を選択 > ";
$selectProductNum = trim(fgets(STDIN));
$chosen_product = $products[$selectProductNum - 1];

var_dump($chosen_product);