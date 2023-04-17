<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','note'];
    public function product_orders(): BelongsToMany
  {
      return $this->belongsToMany(ProductOrder::class, 'product_orders');
  }
}
