<div class="row mb-4 layout-spacing layout-top-spacing">
    {{-- <form class="row" wire:submit="submit(Object.fromEntries(FormData(new FormData($event.target)))">--}}
    {{--  <form class="row" wire:submit="submit(Object.fromEntries(FormData(new FormData($event.target)))">--}}
    <form class="row" wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
        <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="widget-content widget-content-area ecommerce-create-section">
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="name">نام محصول</label>
                        <input type="text" class="form-control" id="name" name="name"
                               wire:model.live.debounce.300ms="name">
                    </div>
                </div>
                @error('name')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                     wire:loading.remove>
                    <strong> خطا ! </strong>{{$message}}</button>
                </div>
                @enderror
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="slug">اسلاگ</label>
                        <input type="text" class="form-control" id="slug" name="slug" wire:model="slug" value="">
                    </div>
                </div>
                @error('slug')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                     wire:loading.remove>
                    <strong> خطا ! </strong>{{$message}}</button>
                </div>
                @enderror
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="meta_title">عنوان متا</label>
                        <input type="text" class="form-control" id="meta_title" name="meta_title">
                    </div>
                </div>
                @error('meta_title')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                     wire:loading.remove>
                    <strong> خطا ! </strong>{{$message}}</button>
                </div>
                @enderror
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="meta_description">توضیحات متا</label>
                        <textarea type="text" class="form-control" id="meta_description" name="meta_description"
                                  rows="3"></textarea>
                    </div>
                </div>
                @error('meta_description')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                     wire:loading.remove>
                    <strong> خطا ! </strong>{{$message}}</button>
                </div>
                @enderror
            </div>
            <div class="widget-content widget-content-area ecommerce-create-section mt-4">
                <div class="row">
                    <div class="col-md-8">
                        <label for="product-images">Upload Images</label>
                        <div class="multiple-file-upload">
                            <input type="file"
                                   class="filepond file-upload-multiple"
                                   name="filepond"
                                   id="product-images"
                                   multiple
                                   data-allow-reorder="true"
                                   data-max-file-size="3MB"
                                   data-max-files="5">
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="switch form-switch-custom switch-inline form-switch-primary mt-4">
                            <input class="switch-input" type="checkbox" role="switch" id="showPublicly" checked>
                            <label class="switch-label" for="showPublicly">Display publicly</label>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row">
                <div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
                    <div class="widget-content widget-content-area ecommerce-create-section">
                        <div class="row">
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="price">قیمت</label>
                                <input type="text" class="form-control" id="price" name="price" value="">
                            </div>
                            <div class="mt-1">
                                @error('price')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4"
                                     role="alert"
                                     wire:loading.remove>
                                    <strong> خطا ! </strong>{{$message}}</button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="stock">موجودی</label>
                                <input type="text" class="form-control" id="stock" name="stock" value="">
                            </div>
                            <div class="mt-1">
                                @error('stock')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4"
                                     role="alert"
                                     wire:loading.remove>
                                    <strong> خطا ! </strong>{{$message}}</button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="categoryId">دسته بندی</label>
                                <select class="form-select" id="categoryId" name="categoryId">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-1">
                                @error('categoryId')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4"
                                     role="alert"
                                     wire:loading.remove>
                                    <strong> خطا ! </strong>{{$message}}</button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="sellerId">فروشنده</label>
                                <select class="form-select" id="sellerId" name="sellerId">
                                    @foreach($sellers as $seller)
                                        <option value="{{$seller->id}}">{{$seller->shop_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-1">
                                @error('sellerId')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4"
                                     role="alert"
                                     wire:loading.remove>
                                    <strong> خطا ! </strong>{{$message}}</button>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-5 mt-4">
                    <div class="widget-content widget-content-area ecommerce-create-section">
                        <div class="row">
                            <div class="col-sm-12 mb-4">
                                <label for="discount">درصد تخفیف</label>
                                <input type="text" class="form-control" id="discount" name="discount" value="">
                            </div>
                            <div class="mt-1">
                            @error('discount')
                            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                                 wire:loading.remove>
                                <strong> خطا ! </strong>{{$message}}</button>
                            </div>
                            @enderror
                            </div>
                            <div class="col-sm-12 mb-4">
                                <label for="discount_duration">تاریخ انقضاء</label>
                                <input type="date" class="form-control" id="discount_duration" name="discount_duration"
                                       value="">
                            </div>
                            <div class="mt-1">
                            @error('discount_duration')
                            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                                 wire:loading.remove>
                                <strong> خطا ! </strong>{{$message}}</button>
                            </div>
                            @enderror
                            </div>
                            <div class="col-sm-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-danger">
                                    <input class="switch-input" type="checkbox" name="featured" role="switch"
                                           id="featured">
                                    <label class="switch-label" for="featured">کالای ویژه</label>
                                </div>
                            </div>
                            <div class="mt-1">
                            @error('featured')
                            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                                 wire:loading.remove>
                                <strong> خطا ! </strong>{{$message}}</button>
                            </div>
                            @enderror
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-success w-100">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
