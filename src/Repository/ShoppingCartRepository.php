<?php

namespace MandyLin\ShoppingCart\Repository;

use MandyLin\ShoppingCart\ShoppingCart;
use MandyLin\ShoppingCart\Product;

class ShoppingCartRepository
{
    protected $shoppoing_cart;

    public function __construct(ShoppingCart $shoppoing_cart)
    {
        $this->shoppoing_cart = $shoppoing_cart;
    }

    /**
     * Add the product into the shopping cart
     */
    protected function addProduct(Product $product)
    {
        return $this->shoppoing_cart->products()->attach($product->id);
    }

    /**
     * The total price of all the products in the shopping cart
     */
    protected function totalPrice()
    {

    }

    /**
     * The total number of the products in the shopping cart
     */
    protected function totalProducts()
    {

    }
}