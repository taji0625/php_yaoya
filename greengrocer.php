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
    foreach($products as $i => $product) {
      $i++;
      echo "${i}. ${product['name']}(${product['price']}円)\n";
    }
  }
}