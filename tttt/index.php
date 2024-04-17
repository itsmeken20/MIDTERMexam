<?php

class Product {
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getTotalValue() {
        return $this->price * $this->quantity;
    }
}

class Inventory {
    private $products = [];

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getTotalInventoryValue() {
        $totalValue = 0;
        foreach ($this->products as $product) {
            $totalValue += $product->getTotalValue();
        }
        return $totalValue;
    }
}


$product1 = new Product('Laptop', 1000, 10);
$product2 = new Product('Phone', 500, 20);
$product3 = new Product('Keyboard',300, 5);


$inventory = new Inventory();


$inventory->addProduct($product1);
$inventory->addProduct($product2);
$inventory->addProduct($product3);


$totalValue = $inventory->getTotalInventoryValue();
echo "Total inventory value: $" . $totalValue;

?>
