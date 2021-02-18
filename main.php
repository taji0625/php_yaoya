<?php

$products = [
  ['name' => 'トマト' , 'price' => 100],
  ['name' => 'きゅうり' , 'price' => 200],
  ['name' => '玉ねぎ' , 'price' => 300],
  ['name' => 'なす' , 'price' => 400],
];

echo "いらっしゃいませ！商品を選んで下さい。\n\n";
foreach($products as $i => $product) {
  echo "${i}. ${product['name']}(${product['price']}円)\n";
}
