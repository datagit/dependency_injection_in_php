<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$stockItem = new StockItem(10, "ACTIVE");
$product = new Product('ABC');
$product->setStockItem($stockItem);
var_dump($product->getSku());
var_dump($product->getStockItem()->getQuantity());
var_dump($product->getStockItem()->getStatus());