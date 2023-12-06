<?php

$xml = simplexml_load_file('products.xml');

$products = array();
foreach ($xml->product as $product) {
  $id = (int)$product->id;
  $name = (string)$product->name;
  $description = (string)$product->description;
  $price = (float)$product->price;
  $products[] = array('id' => $id, 'name' => $name, 'description' => $description, 'price' => $price);
}

header('Content-Type: application/json');
echo json_encode($products);
