<?php

$xml = simplexml_load_file('products.xml');

$id = (int)$xml->last_id + 1;
$name = $_POST['name'];
$description = $_POST['description'];
$price = (float)$_POST['price'];

$product = $xml->addChild('product');
$product->addChild('id', $id);
$product->addChild('name', $name);
$product->addChild('description', $description);
$product->addChild('price', $price);
$xml->last_id = $id;

$xml->asXML('products.xml');

header('Content-Type: application/json');
echo json_encode(array('id' => $id, 'name' => $name, 'description' => $
