<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['title', 'description' ];
    protected $fillable = ['parent_id','home','slug','order','image','status'];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, );
    }

    public function subcategory(){

        return $this->hasMany(Category::class, 'parent_id');

    }

    public function home_prods(){

        return $this->hasMany(Product::class, 'parent_id');

    }

    public function category_prods(): BelongsToMany
  {
      return $this->belongsToMany(Product::class, 'product_categories');
  }
}
