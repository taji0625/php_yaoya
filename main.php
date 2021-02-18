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
while(true) {
  echo "商品の番号を選択 > ";
  $selectProductNum = trim(fgets(STDIN));
  if ($selectProductNum == 1 || $selectProductNum == 2 || $selectProductNum == 3 || $selectProductNum == 4) {
    break;
  }
  echo "\n1~4の番号を入力して下さい！\n\n";
}
echo "\n";
$chosen_product = $products[$selectProductNum - 1];

echo "${chosen_product['name']}ですね。何個買いますか？\n\n";

while (true) {
  echo "個数を入力 > ";
  $quantity = trim(fgets(STDIN));
  if (is_numeric($quantity)) {
    break;
  }
  echo "\n個数を入力して下さい！\n\n"; 
}
$totalAmount = $chosen_product['price'] * $quantity;

if($quantity >= 5) {
  echo "\n５個以上なので10%割引となります。\n";
  $totalAmount *= 0.9;
} 
echo "合計金額は${totalAmount}円です。\n";
echo "お買い上げありがとうございました！\n";

