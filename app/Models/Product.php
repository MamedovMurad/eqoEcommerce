<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['title','sub_title', 'description' ];
    protected $fillable = ['brend_id','slug','price','discount','stock','thumb_image_1','thumb_image_2','order','status'];

    public function images()
  {
   return $this->hasMany(ProductImage::class, );
  }

  public function brend()
  {
   return $this->belongsTo(Brend::class, );
  }
  public function category()
  {
   return $this->belongsTo(ProductCategory::class, 'product_id' );
  }
  public function categories(): BelongsToMany
  {
      return $this->belongsToMany(Category::class, 'product_categories');
  }
  public function pdf_files(): BelongsToMany
  {
      return $this->belongsToMany(ProductFile::class, 'product_files')->withPivot('product_id','file')->withTimestamps();
  }
  public function cart_products(): BelongsToMany
  {
      return $this->belongsToMany(User::class, 'carts');
  }

  /* public function files(): BelongsToMany
    {
        return $this->belongsToMany(ProductFile::class)->withPivot('file_name','file')->withTimestamps();
    } */
}
