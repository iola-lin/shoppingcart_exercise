<?php

namespace MandyLin\ShoppingCart;

use Illuminate\Database\Eloquent\Model;

// @TODO: create an abstract class or interface as SellingItem

class Product extends Model
{
    protected $fillable = ['name', 'price'];
}
