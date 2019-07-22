<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Cart;
use App\Product;

class Product extends Model
{
  public function customers() {
    return $this->belongsToMany(User::class, "shopping", "product_id", "user_id");
  }
}
