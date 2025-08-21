<?php

namespace App\Repositories\client\product;

interface ClientProductRepositoryInterface
{
    public function getSingleProduct($p_code);

    public function checkProductInCart($productId);

    public function addToCart($productId);

    public function getProductFeatures($productId);

    public function getProductReviews($productId);

    public function submitReview($formData, $productId, $positiveItems, $negativeItems);

    public function setVote($status, $reviewId);

}
