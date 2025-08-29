<div class="col-md-12">
    @if(session()->has('success'))
        <div class="alert alert-icon-left alert-light-success alert-dismissible fade show mb-4" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <svg data-bs-dismiss="alert"> ...</svg>
            </button>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-check-square">
                <polyline points="9 11 12 14 22 4"></polyline>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
            </svg>
            <strong>پیغام!</strong>
            {{session()->get('success')}}
        </div>
    @endif
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="d-flex align-items-center">
                <h4>لیست سفارشات</h4>
                <input type="text" class="p-2" wire:model.live.debounce.300ms="search" placeholder="جستجو">
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="50px" scope="col">#</th>
                        <th width="150px" scope="col" class="text-center">کد سفارش</th>
                        <th width="150px" scope="col" class="text-center">تاریخ</th>
                        <th width="150px" scope="col" class="text-center">کاربر</th>
                        <th scope="col" class="text-center">شماره کارت</th>
                        <th scope="col" class="text-center">شماره مرجع</th>
                        <th scope="col" class="bg-danger text-center">مبلغ نهایی</th>
                        <th scope="col" class="text-center">وضعیت پرداخت</th>
                        <th width="200px" class="text-center" scope="col">جزئیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transactions as $item)
                        <tr>
                            <td>
                                {{@$loop->iteration + @$transactions->firstItem() - 1}}
                            </td>
                            <td class="text-center">
                                {{@$item->order_number}}
                            </td>
                            <td>
                                {{jalali(@$item->created_at)->format('d M Y | h:i')}}
                                <br>
                                {{@$item->created_at->diffForHumans()}}
                            </td>
                            <td>
                                {{@$item->order->user->name}}
                                <br>
                                {{@$item->order->user->mobile}}
                                <br>
                                {{@$item->order->user->email}}
                                <br>
                            </td>
                            <td>{{@$item->refNumber}}</td>
                            <td>{{@$item->cardNumber}}</td>
                            <td class="bg-danger text-center fs-4">
                                {{number_format(@$item->amount)}}
                            </td>
                            <td class="text-center">
                                <span
                                    class="badge badge-{{$item->statusPaymentColor}}"> {{$item->status}}</span>
                            </td>
                            <td class="text-center">
                                <a href="{{route('admin.order.details',$item->order->id)}}"
                                   class="btn btn-primary"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-bs-original-title="جزئیات">
                                    جزئیات سفارش
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{@$transactions->links('layouts.admin.pagination')}}
            </div>
        </div>
    </div>
</div>
