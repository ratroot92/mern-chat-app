<?php

namespace App\mymodels;

use Illuminate\Database\Eloquent\Model;

class cart_items extends Model
{
    protected $table    = 'cart_items';
	protected $fillable = ['cart_id', 'product_id','quantity','status','name','price','detail','featured_image'];

	
}
