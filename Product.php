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

    // Method to format price as a string
    public function getFormattedPrice() {
        return '$' . number_format($this->price, 2);
    }

    // Method to show product details
    public function showDetails() {
        echo "Product Details:" . PHP_EOL;
        echo "- ID: {$this->id}" . PHP_EOL;
        echo "- Name: {$this->name}" . PHP_EOL;
        echo "- Price: {$this->getFormattedPrice()}" . PHP_EOL;
    }
}

// Test the Product class
$product = new Product(100, 'T-shirt', 30);
$product = new Product(101, 'Shirt', 50.1);
$product = new Product(102, 'Pent', 60.22);
$product = new Product(102, 'Panjabi', 80.333);

$product->showDetails();