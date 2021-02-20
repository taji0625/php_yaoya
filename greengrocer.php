<?php

class Greengrocer
{
  public function __construct($products)
  {
    $this->products = $products;
  }

  public function dispProducts()
  {
    echo "\nいらっしゃいませ！商品を選んで下さい。\n\n";
    foreach($this->products as $i => $product) {
      $i++;
      echo $i . ". " . $product->name . "(" . $product->price . "円)\n";
    }
    echo "\n";
  }

  public function calculateCharges($chosenProduct, $quantityOfProduct)
  {
    $totalAmount = $chosenProduct->price * $quantityOfProduct;
    if($quantityOfProduct >= 5) {
      echo "\n5個以上なので10%割引となります。\n";
      $totalAmount *= 0.9;
    } 
    echo "合計金額は${totalAmount}円です。\n";
    echo "お買い上げありがとうございました！\n";
  }
}