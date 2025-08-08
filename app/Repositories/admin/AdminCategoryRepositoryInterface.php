<?php

namespace App\Repositories\admin;


interface AdminCategoryRepositoryInterface
{
    public function submit($FormData, $categoryId);

    public function submitCategoryFeatureValue($FormData, $valueId, $featureId);

    public function submitCategoryFeature($FormData, $categoryId, $featureId);

}
