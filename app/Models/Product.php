<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submit($formData, $productId, $photos, $coverIndex)
    {

        DB::transaction(function () use ($formData, $productId, $photos, $coverIndex) {

            $product = $this->submitToProduct($formData, $productId);
            $this->submitToSeoItem($formData, $product->id);
            $this->submitToProductImage($photos, $product->id, $coverIndex);
            $this->saveImages($photos, $product->id);

        });
    }

    public function submitToProduct($formData, $productId)
    {
        return Product::query()->updateOrCreate(
            [
                'id' => $productId,
            ],
            [
                'name' => $formData['name'],
                'price' => $formData['price'],
                'discount' => $formData['discount'],
                'stock' => $formData['stock'],
                'featured' => $formData['featured'],
                'discount_duration' => $formData['discount_duration'],
                'seller_id' => $formData['sellerId'],
                'category_id' => $formData['categoryId'],
            ]);
    }

    public function submitToSeoItem($formData, $productId)
    {
        SeoItem::query()->updateOrCreate(
            [
                'type' => 'product',
                'ref_id' => $productId,
            ],
            [
                'slug' => $formData['slug'],
                'meta_title' => $formData['meta_title'],
                'meta_description' => $formData['meta_description'],
            ]
        );
    }

    public function submitToProductImage($photos, $productId, $coverIndex)
    {
        foreach ($photos as $index => $photo) {

            $path = pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp';
            ProductImage::query()->create(
                [
                    'path' => $path,
                    'product_id' => $productId,
                    'is_cover' => $index == $coverIndex,
                ]
            );
        }
    }

    public function saveImages($photos, $productId)
    {
        foreach ($photos as $photo) {

            $this->reasizeImage($photo, $productId, '100', '100', 'small');
            $this->reasizeImage($photo, $productId, '300', '300', 'medium');
            $this->reasizeImage($photo, $productId, '800', '800', 'large');

            $photo->delete();

        }
    }

    public function reasizeImage($photo, $productId, $width, $height, $folder)
    {

        $path = public_path('products/' . $productId . '/' . $folder);
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        $manager = new ImageManager(new Driver());
        $manager->read($photo->getRealPath())
            ->scale($width, $height)
            ->toWebp()
            ->save($path . '/' . pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp');
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function coverImage()
    {
        return $this->hasOne(ProductImage::class, 'product_id', 'id')
            ->where('is_cover', true);
    }

    /* public function coverImage()
    {
        return $this->belongsTo(ProductImage::class, 'id', 'product_id')->where('is_cover', '=', true);
    }*/
}
