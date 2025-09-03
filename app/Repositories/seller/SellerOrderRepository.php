<?php

namespace App\Repositories\seller;

use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class SellerOrderRepository implements SellerOrderRepositoryInterface
{
    public function getOrderWithFilters($search = null, $status = null)
    {

        $sellerId = Auth::guard('seller')->id();


        return OrderItem::query()
            ->whereHas('product', function ($query) use ($sellerId) {
                $query->where('seller_id', $sellerId);
            })
            ->whereHas('order.payment', function ($query) {
                $query->where('status', 'completed');
            })
            ->when($status && $status != 'all', function ($query) use ($status) {
                $query->where('status', $status);
            })
            ->where(function ($query) use ($search) {
                $query->whereHas('order.user', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                })
                    ->orWhereHas('product', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    });
            })
            ->with([
                'order.user:id,name,email,mobile',
                'order.address',
                'product:id,name,price,discount,stock,seller_id,p_code',
                'product.coverImage:id,product_id,path',
            ])
            ->latest();
    }

    public function getOrderItemsResult(){
        $sellerId = Auth::guard('seller')->id();

        return OrderItem::query()
            ->whereHas('product', function ($query) use ($sellerId) {
                $query->where('seller_id', $sellerId);
            })
            ->where('status', 'completed')
            ->with([
                'order.user:id,name,email,mobile',
                'order.address',
                'product:id,name,price,discount,stock,seller_id,p_code',
                'product.coverImage:id,product_id,path',
            ])
            ->get([
                'id', 'price', 'quantity', 'status', 'created_at', 'order_id', 'product_id',
            ]);
    }
}
