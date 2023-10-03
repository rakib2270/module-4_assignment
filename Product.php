<?php
class Product {
    // Properties
    private $id;
    private $name;
    private $price;

    // Constructor
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    
    // format price as a string
    public function getFormattedPrice() {
        return '$' . number_format($this->price, 2);
    }

    // product details
    public function showDetails() {
        echo "Product Details:" . PHP_EOL;
        echo "- ID: {$this->id}" . PHP_EOL;
        echo "- Name: {$this->name}" . PHP_EOL;
        echo "- Price: {$this->getFormattedPrice()}" . PHP_EOL;
    }
}

// Product class
$product = new Product(100, 'T-shirt', 30);

// Call Product
$product->showDetails();