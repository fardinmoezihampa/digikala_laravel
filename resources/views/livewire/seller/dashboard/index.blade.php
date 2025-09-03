<div class="row layout-top-spacing">

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="col-12 layout-spacing">
            <div class="widget widget-card-five">
                <div class="widget-content">
                    <div class="account-box">

                        <div class="info-box">
                            <div class="icon">
                                                <span>
                                                    <img src="/admin/src/assets/img/money-bag.png" alt="money-bag">
                                                </span>
                            </div>

                            <div class="balance-info">
                                <h6>فروش کل</h6>
                                <p>{{number_format($totalOrderAmount)}}</p>تومان
                            </div>
                        </div>

                        <div class="card-bottom-section">
                            <div><span class="badge badge-light-success">+ 13.6% <svg xmlns="http://www.w3.org/2000/svg"
                                                                                      width="24" height="24"
                                                                                      viewBox="0 0 24 24" fill="none"
                                                                                      stroke="currentColor"
                                                                                      stroke-width="2"
                                                                                      stroke-linecap="round"
                                                                                      stroke-linejoin="round"
                                                                                      class="feather feather-trending-up"><polyline
                                            points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline
                                            points="17 6 23 6 23 12"></polyline></svg></span></div>
                            <a href="javascript:void(0);" class="">View Report</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 layout-spacing">
            <div class="widget-one widget">
                <div class="widget-content">
                    <div class="w-numeric-value">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-shopping-cart">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                        </div>
                        <div class="w-content">
                            <span class="w-value">{{number_format($totalOrders)}}</span>
                            <span class="w-numeric-title">کل سفارشات</span>
                        </div>
                    </div>
                    <div class="w-chart">
                        <div id="total-orders"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-table-two  p-4">

            <div class="widget-heading">
                <h5 class="">سفارشات اخیر</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <div class="th-content">مشتری</div>
                            </th>
                            <th>
                                <div class="th-content">محصول</div>
                            </th>
                            <th>
                                <div class="th-content">تاریخ</div>
                            </th>
                            <th>
                                <div class="th-content th-heading">قیمت</div>
                            </th>
                            <th>
                                <div class="th-content">وضعیت</div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recentOrders as $item)
                            <tr>
                                <td>
                                    <div class="td-content customer-name">
                                        <img class="rounded-3"
                                             src="/products/{{$item->product->id}}/small/{{@$item->product->coverImage->path}}"
                                             alt="تصویر محصول">
                                    </div>
                                </td>
                                <td>
                                    <div class="td-content product-brand text-primary">{{$item->product->name}}</div>
                                </td>
                                <td>
                                    <div
                                        class="td-content product-invoice">{{jalali(@$item['created_at'])->format('d M Y | h:i')}}
                                        <br>
                                        {{@$item['created_at']->diffForHumans()}}</div>
                                </td>
                                <td>
                                    <div class="td-content pricing"><span class="">
                                            {{number_format($item->price)}}
                                        </span></div>
                                </td>
                                <td>
                                    <div class="td-content"><span class="badge badge-success">
                                            {{$item->status}}
                                        </span></div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
