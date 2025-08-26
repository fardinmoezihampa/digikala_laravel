<?php

namespace App\Repositories\admin;

interface AdminOrderRepositoryInterface
{
    public function getOrderDetails($order);

    public function getOrderWithFilters($search = null, $status = null);

    public function getStatusColor($status);
}
