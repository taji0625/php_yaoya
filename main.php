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

echo "\n";
echo "商品の番号を選択 > ";
echo "\n";
$selectProductNum = trim(fgets(STDIN));
$chosen_product = $products[$selectProductNum - 1];

echo "${chosen_product['name']}ですね。何個買いますか？\n\n";
echo "個数を入力 > \n";
$quantity = trim(fgets(STDIN));
$totalAmount = $chosen_product['price'] * $quantity;

if($quantity >= 5) {
  echo "５個以上なので10%割引となります。\n";
  $totalAmount *= 0.9;
} 
echo "合計金額は${totalAmount}円です。\n";
echo "お買い上げありがとうございました！\n";

