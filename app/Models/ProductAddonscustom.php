<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAddonscustom extends Model
{
   protected $fillable = ['product_id','name','price','item_code'];
   protected $table = "product_addons_custom";

   

}