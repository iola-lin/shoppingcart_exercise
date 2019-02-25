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
     * @param App\Product
     */
    protected function addProduct(Product $product)
    {
        return $this->shoppoing_cart->products()->attach($product->id);
    }

    /**
     * @return collection
     */
    protected function getProducts()
    {
        return $this->shoppoing_cart->products()->get();
    }

    /**
     * The total price of all the products in the shopping cart
     * @return double
     */
    protected function totalPrice()
    {
        return $this->getProducts()->sum('price');
    }

    /**
     * The total number of the products in the shopping cart
     * @return integer
     */
    protected function totalProducts()
    {
        return $this->getProducts()->count();
    }
}