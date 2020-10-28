<?php

class ShoppingCart
{

    /**
     * Stores all the products in the Shopping Cart
     * @var array
     */
    private $products;

    public function __construct()
    {
        $this->products = [];
    }

    /**
     * Add a product
     * @param $product
     */
    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    /**
     * Remove an item from the shopping cart at a position
     * @param $index
     */
    public function removeItem($position)
    {
        array_splice($this->products, $position, 1);
    }
  

    /**
     * Returns all products in the shopping cart.
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Check if the sopping cart has products
     *
     * @return bool
     */
    public function hasProducts()
    {
        return !empty($this->products);
    }

    public function getTotalPrice()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total = $total + $product->getPrice();
        }
        return $total;
    }
    public function removeAll()
    {
        $this->products = [];
    }
}
