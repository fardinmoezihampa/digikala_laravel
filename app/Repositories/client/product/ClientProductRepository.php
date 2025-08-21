<?php

namespace App\Repositories\client\product;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductFeatureValue;
use App\Models\ProductReview;
use App\Models\ProductReviewVote;
use Illuminate\Support\Facades\Auth;

class ClientProductRepository implements ClientProductRepositoryInterface
{

    //--this for product Index Component---------
    public function getSingleProduct($p_code)
    {
        return Product::query()
            ->where('p_code', '=', $p_code)
            ->select('id', 'name', 'price', 'discount', 'discount_duration', 'stock', 'featured', 'seller_id', 'category_id', 'p_code')
            ->with('images', 'coverImage', 'seller')
            ->firstOrFail();
    }

    //--this for BuyBox Component---------
    public function checkProductInCart($productId)
    {
        return Cart::query()
            ->where([
                'product_id' => $productId,
                'user_id' => Auth::id(),
            ])->exists();
    }

    //--this for BuyBox Component---------
    public function addToCart($productId)
    {
        Cart::query()->create([
            'product_id' => $productId,
            'user_id' => Auth::id(),
            'quantity' => 1,
        ]);
    }

    //--this for Tabs Component---------
    public function getProductFeatures($productId)
    {
        return ProductFeatureValue::query()
            ->where('product_id', $productId)
            ->with(['categoryFeature', 'categoryFeatureValue'])
            ->get();
        //dd($this->productFeartures);
    }

    //--this for Tabs Component---------
    public function getProductReviews($productId)
    {
        return ProductReview::query()
            ->where([
                'product_id' => $productId,
                'status' => 'approved',
            ])
            ->with('user')
            ->withCount([
                'votes as likeCount' => function ($query) {
                    $query->where('status', 'like');
                },
                'votes as dislikeCount' => function ($query) {
                    $query->where('status', 'dislike');
                }
            ])
            ->get();
        //dd($this->ProductReviews);
    }

    //--this for Tabs Component---------
    public function submitReview($formData, $productId, $positiveItems, $negativeItems)
    {
        return ProductReview::query()->create([
            'title' => $formData['title'],
            'comment' => $formData['comment'],
            'positive' => implode(',', $positiveItems),
            'negative' => implode(',', $negativeItems),
            'product_id' => $productId,
            'user_id' => Auth::id(),
        ]);
    }

    //--this for Tabs Component---------
    public function setVote($status, $reviewId)
    {
        ProductReviewVote::query()->updateOrCreate(
            [
                'user_id' => Auth::id(),
                'product_reviews_id' => $reviewId,
            ],
            [
                'status' => $status,
            ]
        );
    }


}
