<?php

class User
{
  // 商品を選択
  public function chooseProduct($products)
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

  public function decideQuantity($chosenProduct)
  {
    echo $chosenProduct->name . "ですね。何個買いますか？\n\n";
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
}