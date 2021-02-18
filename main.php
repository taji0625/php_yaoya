<?php
require_once  "./product.php";
require_once  "./user.php";
require_once  "./greengrocer.php";





// 商品を選択
function chooseProduct($products)
{
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
  $selectProductNumber = (int)$selectProductNum;
  return $products[$selectProductNumber - 1];
}

// 商品の個数を決定
function decideQuantity($chosenProduct)
{
  echo "${chosenProduct['name']}ですね。何個買いますか？\n\n";
  while (true) {
    echo "個数を入力 > ";
    $quant = trim(fgets(STDIN));
    if (is_numeric($quant)) {
      break;
    }
    echo "個数を入力してください！\n\n";
  }
  $quantity = (int)$quant;
  return $quantity;
}

// 合計金額を計算
function calculateCharges($chosenProduct, $quantityOfProduct)
{
  $totalAmount = $chosenProduct["price"] * $quantityOfProduct;
  if($quantityOfProduct >= 5) {
    echo "\n5個以上なので10%割引となります。\n";
    $totalAmount *= 0.9;
  } 
  echo "合計金額は${totalAmount}円です。\n";
  echo "お買い上げありがとうございました！\n";
}

$productParams = [
  ['name' => 'トマト' , 'price' => 100],
  ['name' => 'きゅうり' , 'price' => 200],
  ['name' => '玉ねぎ' , 'price' => 300],
  ['name' => 'なす' , 'price' => 400],
];

$products = [];
foreach ($productParams as $param) {
  array_push($products, new Product($param));
}

$greengrocer = new Greengrocer($products);

dispProducts($products);
$chosenProduct = chooseProduct($products);
$quantityOfProduct = decideQuantity($chosenProduct);
calculateCharges($chosenProduct, $quantityOfProduct );