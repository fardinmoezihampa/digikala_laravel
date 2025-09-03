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
                        <th scope="col" class="text-center">تصویر محصول</th>
                        <th scope="col" class="text-center">نام محصول</th>
                        <th scope="col" class="text-center">تاریخ</th>
                        <th scope="col" class="text-center">اطلاعات کاربر</th>
                        <th scope="col" class="text-center">آدرس گیرنده</th>
                        <th scope="col" class="bg-danger text-center">مبلغ نهایی</th>
                        <th scope="col" class="text-center">وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>
                                 {{@$loop->iteration + @$orders->firstItem() - 1}}
                            </td>
                            <td class="text-center">
                                <img
                                    src="/products/{{@$order['product']->id}}/small/{{@$order['product']->coverImage->path}}"
                                    alt="">
                            </td>
                            <td>
                                {{@$order['product']->name}}
                            </td>
                            <td>
                                {{jalali(@$order['created_at'])->format('d M Y | h:i')}}
                                <br>
                                {{@$order['created_at']->diffForHumans()}}
                            </td>
                            <td>
                                {{@$order['user']->name}}
                                <br>
                                {{@$order['user']->mobile}}
                                <br>
                                {{@$order['user']->email}}
                                <br>
                            </td>
                            <td>
                                {{@$order['address']->country->name}},{{@$order['address']->state->name}}
                                ,{{@$order['address']->city->name}}
                                <br>{{@$order['address']->mobile}}
                                <br>{{@$order['address']->postal_code}}
                                <br>{{@$order['address']->email}}
                                <br>{{@$order['address']->address}}
                            </td>
                            <td class="bg-danger text-center fs-4">{{number_format(@$order['price'])}}</td>
                            <td>
                                <select class="form-control  bg-{{$order['statusColor']}} text-center"
                                        name="operation"
                                        wire:change="changeStatus({{$order['id']}},$event.target.value)">
                                    <option value="pending" {{$order['status'] == 'pending' ? 'selected':''}}>pending</option>
                                    <option value="processing" {{$order['status'] == 'processing' ? 'selected':''}}>processing</option>
                                    <option value="completed" {{$order['status'] == 'completed' ? 'selected':''}}>completed</option>
                                    <option value="canceled" {{$order['status'] == 'canceled' ? 'selected':''}}>canceled</option>
                                </select>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{@$orders->links('layouts.seller.pagination')}}
            </div>
        </div>
    </div>
</div>
