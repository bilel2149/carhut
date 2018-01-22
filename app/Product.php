<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';

  protected $fillable = ['category_ID', 'name', 'slug', 'details', 'price', 'promo', 'description', 'product_thumbnail'];
  
}
