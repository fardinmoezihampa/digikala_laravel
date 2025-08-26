<div>
@push('link')
    <!--  BEGIN CUSTOM STYLE FILE  -->
        <link href="/admin/src/assets/css/light/apps/invoice-preview.css" rel="stylesheet" type="text/css"/>
        <link href="/admin/src/assets/css/dark/apps/invoice-preview.css" rel="stylesheet" type="text/css"/>
    @endpush
    <div class="row invoice layout-top-spacing layout-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="doc-container">

                <div class="row">

                    <div class="col-xl-9">

                        <div class="invoice-container">
                            <div class="invoice-inbox">

                                <div id="ct" class="">

                                    <div class="invoice-00001">
                                        <div class="content-section">

                                            <div class="inv--head-section inv--detail-section">

                                                <div class="row">

                                                    <div class="col-sm-6 col-12 mr-auto">
                                                        <div class="d-flex">
                                                            <img class="company-logo rounded-3"
                                                                 src="{{$orderDetails->user->picture}}" alt="company">
                                                            <h3 class="in-heading align-self-center">{{$orderDetails->user->name}}</h3>
                                                        </div>
                                                        <br>
                                                        <p class="inv-email-address">{{$orderDetails->user->mobile}}</p>
                                                        <p class="inv-email-address">{{$orderDetails->user->email}}</p>
                                                    </div>

                                                    <div class="col-sm-6 text-sm-end" wire:ignore>
                                                        <p class="inv-list-number mt-sm-3 pb-sm-2 mt-4"><span
                                                                class="inv-title">شماره سفارش : </span> <span
                                                                class="inv-number">{{$orderDetails->order_number}}</span>
                                                        </p>
                                                        <p class="inv-created-date mt-sm-5 mt-3"><span
                                                                class="inv-title">تاریخ ثبت سفارش : </span> <span
                                                                class="inv-date">{{jalali($orderDetails->address->created_at)->format('d M Y|h:i')}}</span>

                                                        </p>
                                                        <p class="inv-due-date"><span
                                                                class="inv-title">تاریخ آخرین تغییر : </span> <span
                                                                class="inv-date">{{jalali($orderDetails->address->Updated_at)->format('d M Y|h:i')}}</span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="inv--detail-section inv--customer-detail-section">

                                                <div class="row">

                                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                        <p class="inv-to text-white">جزئیات پرداخت</p>
                                                    </div>

                                                    <div
                                                        class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 text-sm-end mt-sm-0 mt-5">
                                                        <h6 class=" inv-title" style="text-align: right">جزئیات
                                                            ارسال</h6>
                                                    </div>

                                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                        <p class="inv-customer-name">
                                                            شماره کارت:
                                                            <span class="text-info">{{$orderDetails->payment->cardNumber}}</span>
                                                        </p>
                                                        <p class="inv-street-addr">
                                                            شماره مرجع:
                                                             <span class="text-info">{{$orderDetails->payment->refNumber}}</span>
                                                        </p>
                                                        <p class="inv-email-address">
                                                            درگاه:
                                                             <span class="text-info">{{$orderDetails->paymentMethod->name}}</span>
                                                        </p>
                                                        <p class="inv-email-address text-white" wire:ignore>
                                                            وضعیت پرداخت:
                                                            <span
                                                                class=" badge badge-{{$orderDetails->statusPaymentColor}}"> {{$orderDetails->payment->status}}</span>
                                                        </p>
                                                    </div>

                                                    <div
                                                        class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1">
                                                        <p class="inv-street-addr">
                                                            آدرس:
                                                            <span class="text-info">
                                                            {{$orderDetails->address->country->name}},
                                                            {{$orderDetails->address->state->name}},
                                                            {{$orderDetails->address->city->name}}
                                                            </span>
                                                        </p>
                                                        <p class="inv-street-addr">
                                                            جزئیات آدرس:
                                                            <span
                                                                class=" text-info">  {{$orderDetails->address->address}}</span>
                                                        </p>
                                                        <p class="inv-street-addr">
                                                            کدپستی :
                                                            <span
                                                                class=" text-info">  {{$orderDetails->address->postal_code}}</span>
                                                        </p>
                                                        <p class="inv-street-addr">
                                                            موبایل گیرنده:
                                                            <span
                                                                class=" text-info"> {{$orderDetails->address->mobile}}</span>
                                                        </p>
                                                        <p class="inv-street-addr">
                                                            نوع ارسال:
                                                            <span
                                                                class=" text-info"> {{$orderDetails->deliveryMethod->name}}</span>
                                                        </p>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="inv--product-table-section">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col" class="justify-center">تصویرمحصول</th>
                                                            <th scope="col">نام محصول</th>
                                                            <th class="text-end" scope="col">تعداد</th>
                                                            <th class="text-end" scope="col">قیمت(فی)</th>
                                                            <th class="text-end" scope="col">قیمت کل</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($orderDetails->orderItems as $item)
                                                            <tr>
                                                                <td>{{$loop->index+1}}</td>
                                                                <td>
                                                                    <img class="rounded-3"
                                                                         src="/products/{{$item->product_id}}/small/{{@$item->product->coverImage->path}}"
                                                                         alt="تصویر محصول">
                                                                </td>

                                                                {{--<td>{{\Illuminate\Support\Str::limit($item->product->name,50)}}</td>--}}
                                                                <td>{{$item->product->name}}</td>
                                                                <td class="text-end">{{$item->quantity}}</td>
                                                                <td class="text-end">{{number_format($item->price)}}</td>
                                                                <td class="text-end">{{number_format($item->price*$item->quantity)}}</td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="inv--total-amounts">

                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="text-sm-end">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-7 grand-total-title mt-3  badge badge-success">
                                                                    <h4>مبلغ نهایی : </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount mt-3  badge badge-danger">
                                                                    <h4 class="">{{number_format($orderDetails->amount)}}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="inv--note">

                                                <div class="row mt-4">
                                                    <div class="col-sm-12 col-12 order-sm-0 order-1">
                                                        <p>Note: Thank you for doing Business with us.</p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                    <div class="col-xl-3">

                        <div class="invoice-actions-btn">

                            <div class="invoice-action-btn">

                                <div class="row">
                                    <div class="col-xl-12 col-md-3 col-sm-6">
                                        <p class="inv-to text-white badge badge-dark">تغییر وضعیت</p>
                                        <select class="form-control text-white bg-{{@$statusColor}} text-center" name="operation"
                                                wire:change="changeStatus({{$orderDetails->id}},$event.target.value)">
                                            <option value="pending" {{$orderDetails->status == 'pending' ? 'selected':''}}>pending
                                            </option>
                                            <option value="processing" {{$orderDetails->status == 'processing' ? 'selected':''}}>
                                                processing
                                            </option>
                                            <option value="completed" {{$orderDetails->status == 'completed' ? 'selected':''}}>
                                                completed
                                            </option>
                                            <option value="canceled" {{$orderDetails->status == 'canceled' ? 'selected':''}}>canceled
                                            </option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
