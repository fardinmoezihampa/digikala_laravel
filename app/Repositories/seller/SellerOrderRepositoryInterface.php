<?php

namespace App\Repositories\seller;

interface SellerOrderRepositoryInterface
{
    public function getOrderWithFilters($search = null, $status = null);

    public function getOrderItemsResult();
}
