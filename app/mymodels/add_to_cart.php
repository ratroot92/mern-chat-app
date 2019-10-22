<?php

namespace App\mymodels;

use Illuminate\Database\Eloquent\Model;

class add_to_cart extends Model
{
    protected $table='add_to_carts';
	  protected $fillable   = [ 'user_id','status','delivery_fee','delivery_address','vat'];

    public function cart_has_many_cart_items(){
    	return $this->hasMany('App\mymodels\add_to_cart', 'cart_id', 'id');
    }
}
