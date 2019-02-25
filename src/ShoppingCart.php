<?php

namespace MandyLin\ShoppingCart;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = ['user_id'];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'shopping_carts_products', 'shopping_cart_id', 'product_id');
    }

    public function user()
    {
        $userClassName = config('shoppingcart.models.user', 'App\User');
        return $this->belongsTo($userClassName, 'user_id');
    }
}
