<?php

namespace App\Models;

use App\Traits\UploadFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Product extends Model
{
    use HasFactory, SoftDeletes,UploadFile;

    protected $guarded = [];



    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function coverImage()
    {
        return $this->hasOne(ProductImage::class, 'product_id', 'id')
            ->where('is_cover', true);
    }

    public function seo()
    {
        return $this->hasOne(SeoItem::class, 'ref_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }



//------------------------method (2) for write relationship------------------------------------------------------------------------------
    /* public function seo()
     {
         return $this->belongsTo(SeoItem::class, 'id', 'product_id');
     }*/

    /*public function coverImage()
    {
        return $this->belongsTo(ProductImage::class, 'id', 'product_id')->where('is_cover', '=', true);
    }*/
//------------------------------------------------------------------------------------------------------


}
