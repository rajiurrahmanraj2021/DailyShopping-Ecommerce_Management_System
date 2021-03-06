<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = ['category_name', 'category_id', 'subcategory_id', 'product_name', 'product_price', 'product_description', 'product_quantity', 'alert_quantity', 'product_image', 'created_at', 'updated_at'];

    function relationtocategory(){
      return $this->hasOne('App\Category', 'id', 'category_id');
    }
}
