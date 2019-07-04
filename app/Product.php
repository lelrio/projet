<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;


class Product extends Model
{
    public $quantity = null;


    protected $fillable = ['name', 'imageurl', 'description', 'price', 'slug'];

    public function order()
    {
        return $this->belongsToMany(Order::class, 'orders_products')->withPivot('quantity');
    }
    public function getHasStock($quantity)
    {
        return $this->stock >= $quantity;
    }
    
}
