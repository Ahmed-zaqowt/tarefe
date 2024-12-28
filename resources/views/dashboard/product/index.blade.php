@extends('dashboard.master')

@section('title', 'لوحة تحكم الطريفي مول | منتجات الطريفي ')

@section('css')
    <style>
        .dataTables_wrapper {
            overflow-x: auto;
        }

        .fixed-column {
            background-color: #f8f9fa;
            z-index: 1;
        }

        .product {
            position: relative;
            cursor: pointer;
        }

        .description-box {
            max-height: 50px;
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 5px;
            background-color: #ffffff;
        }

        .scroll-box {
            max-height: 150px;
            overflow-y: auto;
            display: none;
            border: 1px solid #7212df;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: absolute;
            z-index: 10;
            top: 0;
            left: 0;
            width: 100%;
        }

        .product:hover .scroll-box {
            display: block;


        }

        .description-box:hover {
            max-height: 200px;

        }

        #sizes-container {
            margin-top: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .size-inputs .form-control {
            flex-grow: 1;
        }



        .show-sizes-btn {
            position: relative;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .show-sizes-btn:hover {
            background-color: #0056b3;
        }



        .color-picker {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .color-box {
            width: 30px;
            height: 30px;
            border: 2px solid #ccc;
            cursor: pointer;
            border-radius: 5px;
            transition: transform 0.2s, border-color 0.2s;
        }

        .color-box:hover {
            transform: scale(1.1);
            border-color: #7212df;
        }

        .color-box.selected {
            border-color: #7212df;
            box-shadow: 0 0 5px #7212df;
        }

        #selected-colors {
            color: #7212df;
        }

        /* ضبط حجم السلايدر */
        .album-swiper {
            width: 90px;
            /* عرض السلايدر */
            height: 90px;
            /* ارتفاع السلايدر */
            border: 1px solid #ddd;
            /* حواف مشابهة للصورة */
            border-radius: 4px;
            /* زوايا مدورة */
            padding: 2px;
            /* مسافة داخلية */
            overflow: hidden;
            /* منع تجاوز الصور */
        }

        /* ضبط حجم الصور داخل السلايدر */
        .album-swiper .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* لجعل الصور تتناسب مع الحجم */
        }

        /* تصغير حجم الأزرار */
        .album-swiper .swiper-button-next,
        .album-swiper .swiper-button-prev {
            font-size: 10px;
            /* حجم أصغر للأزرار */
            color: #000;
            /* لون الأزرار */
        }


        /* تصغير حجم الأزرار */
        .album-swiper .swiper-button-next,
        .album-swiper .swiper-button-prev {
            font-size: 12px;
            /* حجم النص داخل الأزرار */
            width: 15px;
            /* عرض الزر */
            height: 15px;
            /* ارتفاع الزر */
            color: #000;
            /* لون الأزرار */
            background-color: rgba(255, 255, 255, 0.8);
            /* خلفية خفيفة للزر */
            border-radius: 50%;
            /* جعل الزر دائريًا */
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            /* ظل صغير للأزرار */
        }

        /* ضبط مكان الأزرار بالنسبة للسلايدر */
        .album-swiper .swiper-button-next {
            right: -10px;
            /* المسافة من الحافة اليمنى */
        }

        .album-swiper .swiper-button-prev {
            left: -10px;
            /* المسافة من الحافة اليسرى */
        }

        /* تحسين التفاعل عند المرور بالفأرة */
        .album-swiper .swiper-button-next:hover,
        .album-swiper .swiper-button-prev:hover {
            background-color: rgba(0, 0, 0, 0.6);
            /* تغيير الخلفية عند التفاعل */
            color: #fff;
            /* تغيير لون الأيقونة */
        }
    </style>
@stop

@section('content')




    <div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: " id="exampleModalLabel">اضافة منتج جديد </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form_add" id="form_add" enctype="multipart/form-data"
                        action="{{ route('dash.product.store') }}" method="POST">
                        @csrf
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('اسم المنتج ')</label>
                            <input placeholder="@lang('اسم المنتج ')" name="name" class="form-control" type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('وصف المنتج')</label>
                            <textarea id="my_content" placeholder="@lang('وصف المنتج ')" name="description" class="form-control"></textarea>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('السعر')</label>
                            <input placeholder="@lang('السعر')" name="price" class="form-control" type="number">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">الكمية الإجمالية</label>
                            <input id="total-quantity" name="total_quantity" class="form-control" type="number"
                                min="0" placeholder="إجمالي الكمية">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('القسم الفرعي له')</label>
                            <select name="subcat" class="form-control">
                                <option selected disabled>اختر القسم الفرعي</option>
                                @foreach ($subcat as $cat)
                                    <option value="{{ $cat->id }}"
                                        data-main-category-id="{{ $cat->main_category_id }}">
                                        {{ $cat->name }} -> <small>({{ $cat->mainCategory->name }})</small>
                                    </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('الشركة المنتجة')</label>
                            <select name="company_id" class="form-control">
                                <option selected disabled>الشركة المنتجة</option>
                                @foreach ($company as $com)
                                    <option value="{{ $com->id }}">{{ $com->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('كود الخصم')</label>
                            <select name="coupon" class="form-control">
                                <option selected disabled> اختر كود الخصم </option>
                                <option value="false">لا يوجد اي خصومات</option>
                                @foreach ($coupons as $co)
                                    <option value="{{ $co->id }}">{{ $co->code }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang(' صورة المنتج الرئيسية')</label>
                            <input id="company-logo-input" name="photo" class="form-control" type="file">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('صور المنتج')</label>
                            <input name="album[]" id="album-input" multiple class="form-control" type="file"
                                accept="image/*">
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- حاوية Swiper داخل المودال -->
                        <div class="swiper-container" id="image-preview-swiper" style="display: none;">
                            <div class="swiper-wrapper">
                                <!-- الشرائح ستتم إضافتها هنا ديناميكيًا -->
                            </div>
                            <!-- أزرار التنقل -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>




                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('فيديو المنتج')</label>
                            <input name="video" class="form-control" type="file">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="preview-container mt-2" id="preview-container"
                            style="display: none; position: relative;">
                            <img id="preview-image" src="" alt="Preview"
                                style="max-width: 100%; max-height: 150px; border: 1px solid #7212df; border-radius: 5px;">
                            <button type="button" id="remove-image"
                                style="position: absolute; top: 5px; right: 5px; background-color: #50396c; color: white; border: none; border-radius: 50%; width: 25px; height: 25px; cursor: pointer;">&times;</button>
                        </div>

                        <div class="mb-2 form-group">
                            <label class="form-label">هل يوجد مقاسات لهذا المنتج؟</label>
                            <div>
                                <input type="checkbox" id="has-sizes-checkbox">
                                <label for="has-sizes-checkbox">نعم</label>
                            </div>
                        </div>



                        <div id="sizes-container" style="display: none;">
                            <label class="form-label">حدد المقاسات وكمياتها</label>
                            <div class="size-inputs">
                                <div class="d-flex align-items-center mb-2 size-row">
                                    <input name="sizes[0][name]" class="form-control" type="text"
                                        placeholder="أدخل المقاس">
                                    <input name="sizes[0][quantity]" class="form-control mx-2 size-quantity"
                                        type="number" min="0" placeholder="كمية">
                                    <button type="button" id="btnaddsize" class="btn text-white btn-add-size ms-2"
                                        style="background-color: #7212df">إضافة مقاس</button>
                                </div>
                            </div>
                            <small id="size-warning" class="text-danger" style="display:none;">تنبيه: مجموع الكميات تجاوز
                                الكمية الإجمالية!</small>
                        </div>




                        <div class="mb-2 form-group">
                            <label class="form-label">هل للمنتج ألوان؟</label>
                            <div>
                                <input type="checkbox" id="has-colors-checkbox">
                                <label for="has-colors-checkbox">نعم</label>
                            </div>
                        </div>

                        <div class="mb-2 form-group" id="color-picker-wrapper" style="display: none;">
                            <label class="form-label">الألوان المتاحة</label>
                            <div id="color-picker-container" class="color-picker d-flex flex-wrap">
                                <!-- سيتم إنشاء الألوان ديناميكيًا -->
                            </div>
                            <p>الألوان المختارة: <span id="selected-colors" class="fw-bold"></span></p>
                        </div>




                        <div class="modal-footer d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">@lang('اغلاق')</button>
                            <button type="submit" style="background-color: #7212df"
                                class="btn text-white">@lang('حفظ')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل المنتج </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form_edit" id="form_edit" enctype="multipart/form-data"
                        action="{{ route('dash.subcat.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id" class="form-control">

                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('اسم المنتج ')</label>
                            <input id="edit_name" placeholder="@lang('اسم  المنتج')" name="name" class="form-control"
                                type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('وصف المنتج')</label>
                            <textarea id="edit_desc" placeholder="@lang('وصف المنتج ')" name="description" class="form-control"></textarea>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">الكمية الإجمالية</label>
                            <input id="edit_total_quantity" name="total_quantity" class="form-control" type="number"
                                min="0" placeholder="إجمالي الكمية">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('السعر')</label>
                            <input id="edit_price" placeholder="@lang('السعر')" name="price" class="form-control"
                                type="number">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang(' القسم الفرعي ')</label>
                            <select id="edit_subcat" name="maincat" class="form-control">
                                @foreach ($subcat as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('الشركة المنتجة')</label>
                            <select id="edit_company_id" name="company_id" class="form-control">
                                <option >لا توجد شركة </option>
                                @foreach ($company as $com)
                                <option value="{{ $com->id }}">{{ $com->name }}</option>
                            @endforeach
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('كود الخصم')</label>
                            <select id="edit_coupon" name="coupon" class="form-control">
                                <option selected disabled> اختر كود الخصم </option>
                                <option value="false">لا يوجد اي خصومات</option>
                                @foreach ($coupons as $co)
                                    <option value="{{ $co->id }}">{{ $co->code }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang(' صورة المنتج الرئيسية')</label>
                            <input id="company-logo-input" name="photo" class="form-control" type="file">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('صور المنتج')</label>
                            <input name="album[]" multiple class="form-control" type="file">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('فيديو المنتج')</label>
                            <input name="video" class="form-control" type="file">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">هل المنتج يحتوي على أحجام؟</label>
                            <input type="checkbox" id="product_sizes_checkbox" name="has_sizes">
                        </div>
                        <div id="product_sizes_section" style="display: none;">
                            <div id="product_sizes_inputs">
                                <!-- يتم إضافة الحقول ديناميكيًا هنا -->
                            </div>
                            <button type="button" id="add_product_size" class="btn btn-secondary btn-sm">إضافة حجم
                                جديد</button>
                        </div>


                        <!-- Checkbox هل للمنتج ألوان؟ -->
                        <div class="mb-2">
                            <label class="form-label">هل للمنتج لون؟</label>
                            <input type="checkbox" id="edit-has-colors-checkbox">
                        </div>

                        <!-- حاوية الألوان -->
                        <div id="edit-color-picker-wrapper" style="display: none;">
                            <label class="form-label">حدد الألوان:</label>
                            <div id="edit-color-picker-container" class="color-picker"></div>
                            <p>الألوان المختارة: <span id="edit-selected-colors"></span></p>
                        </div>


                        <div class="modal-footer d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">@lang('اغلاق')</button>
                            <button type="submit" style="background-color: #7212df"
                                class="btn text-white">@lang('تعديل')</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card radius-10 w-100">
                <div class="card-header bg-transparent">
                    <h5 class="mb-0">@lang('التصفية')</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <!-- الحقل 1 -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <label class="form-label">@lang('اسم المنتج')</label>
                            <input placeholder="@lang('اسم المنتج')" class="form-control" type="text"
                                id="search_name">
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- الحقل 2 -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <label class="form-label">@lang('السعر')</label>
                            <input placeholder="@lang('السعر')" class="form-control" type="text"
                                id="search_price">
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- الحقل 3 -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <label class="form-label">القسم الفرعي</label>
                            <input id="search_subcat" type="text" placeholder="القسم الفرعي"
                                class="form-control search_input" data-ajax="true"
                                data-url="{{ route('dash.product.search.subcategory') }}">
                            <div class="suggestions" id="search_subcat_suggestions"></div>
                        </div>

                        <!-- الحقل 4 -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <label class="form-label">القسم الرئيسي</label>
                            <input id="search_maincat" type="text" placeholder="القسم الرئيسي"
                                class="form-control search_input" data-ajax="true"
                                data-url="{{ route('dash.product.search.maincategory') }}">
                            <div class="suggestions" id="search_maincat_suggestions"></div>
                        </div>

                        <!-- الحقل 4 -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <label class="form-label">@lang('كود الخصم')</label>
                            <input placeholder="@lang('كود الخصم')" class="form-control search_input" data-ajax="true"
                                data-url="{{ route('dash.coupon.search.code') }}" type="text" id="search_code">
                            <div class="suggestions" id="search_code_suggestions"></div>
                        </div>
                    </div>

                    <div class="my-3 d-flex gap-2">
                        <button type="submit" id="search_btn" style="background-color: #7212df"
                            class="btn text-white col-6">
                            @lang('بحث')
                        </button>
                        <button id="clear_btn" class="btn btn-secondary col-6" type="button">
                            <span><i class="fa fa-undo"></i> إعادة تهيئة</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-lg-12 col-xl-12 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header bg-transparent">
                    <div class="row g-3 align-items-center">
                        <div class="col">
                            <h5 class="mb-0">@lang('المنتجات')</h5>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                <a data-bs-toggle="modal" data-bs-target="#add-modal" style="color: white"
                                    href="#" class="add-product-btn">
                                    <i class="fas fa-plus"></i> إضافة منتج
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>@lang('صورة المنتج')</th>
                                    <th>@lang('الالبوم')</th>
                                    <th>@lang('الاسم')</th>
                                    <th>@lang('الوصف')</th>
                                    <th>@lang('القسم الفرعي')</th>
                                    <th>@lang('الشركة المنتجة')</th>
                                    <th>@lang('الكمية ')</th>
                                    <th>@lang('السعر ')</th>
                                    <th>@lang('المقاسات ')</th>
                                    <th>@lang('كود الخصم')</th>
                                    <th>@lang('العمليات')</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('js')



    <script>
        var table = $('#datatable').DataTable({
            scrollX: true,
            processing: true,
            serverSide: true,
            fixedColumns: {
                rightColumns: 1 // لتثبيت آخر عمود
            },
            columnDefs: [{
                targets: -1, // آخر عمود
                className: "fixed-column" // إضافة CSS خاص إذا لزم الأمر
            }],
            "oLanguage": {
                "sEmptyTable": "ليست هناك بيانات متاحة في الجدول",
                "sLoadingRecords": "جارٍ التحميل...",
                "sProcessing": "جارٍ التحميل...",
                "sLengthMenu": "أظهر _MENU_ مدخلات",
                "sZeroRecords": "لم يعثر على أية سجلات",
                "sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل",
                "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
                "sInfoPostFix": "",
                "sSearch": "ابحث:",
                "oAria": {
                    "sSortAscending": ": تفعيل لترتيب العمود تصاعدياً",
                    "sSortDescending": ": تفعيل لترتيب العمود تنازلياً"
                },
            },
            ajax: {
                url: "{{ route('dash.product.getdata') }}",
                data: function(d) {
                    d.name = $('#search_name').val();
                    d.price = $('#search_price').val();
                    d.subcat = $('#search_subcat').val();
                    d.maincat = $('#search_maincat').val();
                    d.code = $('#search_code').val();
                }
            },

            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: "image",
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'album',
                    orderable: false,
                    searchable: false
                },

                {
                    data: "name",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "description",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "subcat",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "company",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "quantity",
                    orderable: true,
                    searchable: true
                }, {
                    data: "price",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "sizes",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "discount_code",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "actions",
                    orderable: false,
                    searchable: false,
                    responsivePriority: -1,
                },
            ],

            drawCallback: function() {
                $('.album-swiper').each(function() {
                    new Swiper(this, {
                        slidesPerView: 1,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        loop: true,
                    });
                });
            }
        });

        //////////////////////////////
        $(document).ready(function() {
            // عند فتح نافذة التعديل
            $(document).on('click', '.edit_btn', function(event) {
                event.preventDefault();
                var button = $(this);

                // تعبئة الحقول الأساسية
                $('#id').val(button.data('id'));
                $('#edit_name').val(button.data('name'));
                $('#edit_total_quantity').val(button.data('total_quantity'));
                $('#edit_company_id').val(button.data('company'));
                $('#edit_coupon').val(button.data('coupon'));
                $('#edit_subcat').val(button.data('subcat'));
                $('#edit_price').val(button.data('price'));
                $('#edit_desc').val(button.data('desc'));

                var sizesRaw = $(this).data('sizes'); // قراءة البيانات الخام
                console.log("Raw sizes data:", sizesRaw);

                var sizes;

                // التحقق إذا كانت البيانات كائناً مباشراً
                if (typeof sizesRaw === 'object') {
                    sizes = Object.keys(sizesRaw).map(function(key) {
                        return sizesRaw[key];
                    });
                } else {
                    try {
                        // محاولة تحويل البيانات إلى JSON إذا كانت سلسلة
                        sizes = JSON.parse(sizesRaw || '{}');
                        sizes = Object.keys(sizes).map(function(key) {
                            return sizes[key];
                        });
                    } catch (e) {
                        console.error("Error parsing sizes:", e, "Raw data:", sizesRaw);
                        sizes = [];
                    }
                }

                console.log("Parsed sizes array:", sizes);

                // تنظيف الحقول وإضافتها
                $('#product_sizes_inputs').empty();
                if (sizes.length > 0) {
                    $('#product_sizes_checkbox').prop('checked', true).trigger('change');
                    sizes.forEach(function(size) {
                        addProductSizeInput(size.name, size.quantity);
                    });
                } else {
                    $('#product_sizes_checkbox').prop('checked', false).trigger('change');
                }
            });

            // إظهار/إخفاء قسم الأحجام
            $('#product_sizes_checkbox').change(function() {
                if ($(this).is(':checked')) {
                    $('#product_sizes_section').show();
                } else {
                    $('#product_sizes_section').hide();
                    $('#product_sizes_inputs').empty();
                }
            });

            // إضافة مدخل جديد للحجم
            $('#add_product_size').click(function() {
                addProductSizeInput();
            });

            // دالة لإضافة مدخل جديد للحجم مع زر حذف
            // دالة لإضافة مدخل جديد للحجم مع زر حذف
            function addProductSizeInput(size = '', quantity = '') {
                var sizeInputHtml = `
        <div class="d-flex mb-2 size-row">
            <input type="text" name="product_sizes[name][]" class="form-control me-2" placeholder="اسم الحجم" value="${size}">
            <input type="number" name="product_sizes[quantity][]" class="form-control me-2" placeholder="الكمية" value="${quantity}">
            <button type="button" class="btn btn-danger btn-sm remove-size-btn">حذف</button>
        </div>
    `;
                $('#product_sizes_inputs').append(sizeInputHtml);
            }


            // حذف حجم معين عند الضغط على زر الحذف
            $(document).on('click', '.remove-size-btn', function() {
                $(this).closest('.size-row').remove();
            });
        });


        ////////////////////////////////

        $(document).on('click', '.toggle-description', function() {
            var $button = $(this); // الزر
            var $description = $(this).prev('.product-description'); // النص السابق للزر
            var fullDescription = $description.data('full-description'); // النص الكامل

            console.log($button.text());
            if ($button.text() == 'المزيد') {
                console.log('1');
                $description.text(fullDescription); // أظهر النص الكامل
                $button.text('أقل'); // غيّر نص الزر
            } else {
                console.log('2');
                var truncated = fullDescription.split(' ').slice(0, 3);
                $description.text(truncated);
                $button.text('المزيد'); // غيّر نص الزر
            }
        });

        // عندما يتم الضغط على زر عرض الفيديو
        $('.view-video').click(function() {
            console.log('ahmed');

            var videoUrl = $(this).data('video-url'); // الحصول على رابط الفيديو من الزر
            $('#videoSource').attr('src', videoUrl); // تحديث مصدر الفيديو
            $('#videoPlayer')[0].load(); // تحميل الفيديو
            $('#videoModal').modal('show'); // عرض النافذة المنبثقة
        });



        $(document).ready(function() {
            $('.description-box').on('mouseenter', function() {
                $(this).siblings('.scroll-box').fadeIn(200);
            });

            $('.product').on('mouseleave', function() {
                $(this).find('.scroll-box').fadeOut(200);
            });
        });

        $(document).ready(function() {
            let sizeIndex = 1;

            // عند تغيير الكمية الإجمالية أو كميات المقاسات، تحقق من المجموع
            function validateSizeQuantities() {
                let totalQuantity = parseInt($('#total-quantity').val()) || 0;
                let totalSizesQuantity = 0;

                $('.size-quantity').each(function() {
                    totalSizesQuantity += parseInt($(this).val()) || 0;
                });
                //
                if (totalSizesQuantity > totalQuantity) {
                    $('#size-warning').show();
                } else {
                    $('#size-warning').hide();
                }

                if (totalSizesQuantity >= totalQuantity) {
                    $('#size-warning').show();
                    $('#btnaddsize').prop('disabled', true);
                } else {
                    $('#btnaddsize').prop('disabled', false);

                    $('#size-warning').hide();
                }
            }

            // تحديث الكميات عند تغيير أي حقل
            $('#total-quantity, .size-quantity').on('input', validateSizeQuantities);

            // إظهار/إخفاء حقل المقاسات
            $('#has-sizes-checkbox').change(function() {
                if ($(this).is(':checked')) {
                    $('#sizes-container').slideDown();
                } else {
                    $('#sizes-container').slideUp();
                    $('.size-inputs').html(`
                <div class="d-flex align-items-center mb-2 size-row">
                    <input name="sizes[0][name]" class="form-control" type="text" placeholder="أدخل المقاس">
                    <input name="sizes[0][quantity]" class="form-control mx-2 size-quantity" type="number" min="0" placeholder="كمية">
                    <button type="button" class="btn text-white btn-add-size ms-2" style="background-color: #7212df">إضافة مقاس</button>
                </div>
            `);
                    $('#size-warning').hide();
                }
            });

            // إضافة حقل مقاس جديد
            $(document).on('click', '.btn-add-size', function() {
                const newSizeInput = `
            <div class="d-flex align-items-center mb-2 size-row">
                <input name="sizes[${sizeIndex}][name]" class="form-control" type="text" placeholder="أدخل المقاس">
                <input name="sizes[${sizeIndex}][quantity]" class="form-control mx-2 size-quantity" type="number" min="0" placeholder="كمية">
                <button type="button" class="btn btn-danger btn-remove-size ms-2">حذف</button>
            </div>
        `;
                $('.size-inputs').append(newSizeInput);
                sizeIndex++;
            });

            // حذف حقل مقاس
            $(document).on('click', '.btn-remove-size', function() {
                sizeIndex--
                $(this).parent().remove();
                validateSizeQuantities(); // إعادة التحقق بعد الحذف
            });
        });




        const fileInput = $("#company-logo-input");
        const previewContainer = $("#preview-container");
        const previewImage = $("#preview-image");
        const removeButton = $("#remove-image");

        // عند اختيار صورة
        fileInput.on("change", function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.attr("src", e.target.result); // تعيين الصورة
                    previewContainer.show(); // إظهار الحاوية
                };
                reader.readAsDataURL(file);
            }
        });

        // عند حذف الصورة
        removeButton.on("click", function() {
            previewImage.attr("src", ""); // تفريغ الصورة
            previewContainer.hide(); // إخفاء الحاوية
            fileInput.val(""); // إعادة تعيين الحقل
        });




        $(document).ready(function() {
            const colors = [
                "#FF0000", "#00FF00", "#0000FF", "#FFFF00", "#FF00FF", "#00FFFF",
                "#800000", "#808000", "#008000", "#800080", "#008080", "#000080",
                "#FFA500", "#A52A2A", "#8B4513", "#5F9EA0", "#7FFF00", "#D2691E",
                "#FF4500", "#DA70D6", "#4B0082", "#7CFC00", "#48D1CC", "#FF6347",
                "#FFC0CB", "#708090", "#6A5ACD", "#20B2AA", "#778899", "#BDB76B",
                "#CD5C5C", "#8B0000", "#9932CC", "#2E8B57", "#3CB371", "#66CDAA",
                "#8A2BE2", "#9400D3", "#F4A460", "#4682B4"
            ];

            let selectedColors = [];

            // فتح المودال مع تحميل بيانات المنتج
            $(".edit-product-btn").on("click", function() {
                const productId = $(this).data("id");

                // جلب بيانات المنتج (Ajax أو من خلال HTML)
                $.ajax({
                    url: `/products/${productId}`,
                    method: "GET",
                    success: function(data) {
                        // تعبئة البيانات
                        $("#product_id").val(data.id);
                        $("#product_name").val(data.name);

                        // التعامل مع الألوان
                        selectedColors = data.colors || [];

                        if (selectedColors.length > 0) {
                            // إذا كانت هناك ألوان محددة، عرض الألوان مع التحديد
                            $("#edit-has-colors-checkbox").prop("checked", true).hide();
                            $("#edit-color-picker-wrapper").show();
                            generateEditColors(selectedColors);
                        } else {
                            // إذا لم تكن هناك ألوان
                            $("#edit-has-colors-checkbox").prop("checked", false).show();
                            $("#edit-color-picker-wrapper").hide();
                        }

                        $("#edit-modal").modal("show");
                    },
                });
            });

            // عند تغيير Checkbox
            $("#edit-has-colors-checkbox").on("change", function() {
                if ($(this).is(":checked")) {
                    $("#edit-color-picker-wrapper").slideDown();
                    generateEditColors(); // توليد الألوان عند الحاجة
                } else {
                    $("#edit-color-picker-wrapper").slideUp();
                    selectedColors = [];
                    $("#edit-selected-colors").text("");
                    $("#edit-color-picker-container").empty(); // تنظيف الألوان
                }
            });

            // توليد الألوان في مودال التعديل
            function generateEditColors(preselectedColors = []) {
                $("#edit-color-picker-container").empty();

                colors.forEach(color => {
                    const colorBox = $(
                        `<div class="color-box" data-color="${color}" style="background-color: ${color};"></div>`
                    );
                    if (preselectedColors.includes(color)) {
                        colorBox.addClass("selected");
                    }
                    $("#edit-color-picker-container").append(colorBox);
                });

                // تحديث الألوان المختارة
                $("#edit-selected-colors").text(preselectedColors.join(", "));
            }

            // عند اختيار اللون
            $("#edit-color-picker-container").on("click", ".color-box", function() {
                const color = $(this).data("color");

                if ($(this).hasClass("selected")) {
                    $(this).removeClass("selected");
                    selectedColors = selectedColors.filter(c => c !== color);
                } else {
                    $(this).addClass("selected");
                    selectedColors.push(color);
                }

                $("#edit-selected-colors").text(selectedColors.join(", "));
            });

            // تحديث الحقول المخفية عند حفظ التعديلات
            $("#form_edit").on("submit", function() {
                $("input[name='colors[]']").remove(); // إزالة الحقول المخفية السابقة

                // إضافة الحقول المخفية الجديدة
                selectedColors.forEach(color => {
                    const hiddenInput = $(`<input type="hidden" name="colors[]" value="${color}">`);
                    $("#form_edit").append(hiddenInput);
                });
            });
        });


        $(document).ready(function() {
            // تهيئة Swiper.js
            const swiper = new Swiper(".swiper-container", {
                slidesPerView: 1, // عرض صورة واحدة فقط
                navigation: {
                    nextEl: ".swiper-button-next", // زر التالي
                    prevEl: ".swiper-button-prev", // زر السابق
                },
                pagination: {
                    el: ".swiper-pagination", // النقاط السفلية
                    clickable: true,
                },
                loop: true, // التنقل اللانهائي
                spaceBetween: 10, // المسافة بين الصور
            });
        });

        $(document).ready(function() {
            let swiper;

            // عندما يتم اختيار الصور من الحقل
            $("#album-input").on("change", function(e) {
                const files = e.target.files;
                const swiperContainer = $("#image-preview-swiper");
                const swiperWrapper = swiperContainer.find(".swiper-wrapper");

                // إفراغ الشرائح القديمة
                swiperWrapper.empty();

                if (files.length > 0) {
                    swiperContainer.show(); // إظهار الحاوية الخاصة بالسوايبر

                    // إضافة كل صورة تم اختيارها
                    Array.from(files).forEach(file => {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const imgSrc = e.target.result;

                            // إضافة الشريحة إلى السوايبر
                            const slide = `<div class="swiper-slide">
                                    <img src="${imgSrc}" alt="Image">
                                   </div>`;
                            swiperWrapper.append(slide);

                            // إعادة تحديث السوايبر إذا كان مهيئًا مسبقًا
                            if (swiper) {
                                swiper.update();
                            }
                        };

                        reader.readAsDataURL(file);
                    });

                    // تهيئة Swiper إذا لم يكن مهيأ مسبقًا
                    if (!swiper) {
                        swiper = new Swiper(".swiper-container", {
                            slidesPerView: 1, // عرض صورة واحدة فقط
                            navigation: {
                                nextEl: ".swiper-button-next", // الزر التالي
                                prevEl: ".swiper-button-prev", // الزر السابق
                            },
                            loop: true, // التكرار بين الصور
                            pagination: false, // إزالة الباجينايشن
                        });
                    }
                } else {
                    swiperContainer.hide(); // إخفاء السوايبر إذا لم يتم اختيار صور
                }
            });
        });
    </script>

@stop
