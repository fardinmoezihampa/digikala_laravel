<?php

namespace App\Repositories\admin;

interface AdminTransactionRepositoryInterface
{

    public function getTransactionWithFilters($search = null, $status = null);

    public function getStatusColor($status);
}
