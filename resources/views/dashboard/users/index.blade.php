@extends('dashboard.master')

@section('title', 'لوحة تحكم الطريفي مول | منتجات الطريفي ')

@section('css')
<style>
.product {
    margin-bottom: 10px; /* مسافة بين المنتجات */
}

.product-description {
    font-size: 14px;
    display: inline-block; /* يسمح للعنصر بالبقاء بجانب الزر */
    margin-right: 10px; /* مسافة بين النص والزر */
    max-width: 300px; /* عرض النص (يتحكم بعدد الكلمات في كل سطر) */
    word-wrap: break-word; /* يكسر الكلمات الكبيرة إذا تجاوزت الحدود */
    white-space: normal; /* يتيح للنص الانتقال لأسطر جديدة */
    line-height: 1.5; /* مسافة بين الأسطر */
}

.toggle-description {
    background-color: #7212df; /* اللون المطلوب */
    color: white;
    border: none;
    border-radius: 5px; /* لتنعيم الزوايا */
    font-size: 12px;
    padding: 5px 10px; /* حجم الزر */
    cursor: pointer;
    display: inline-block;
}

.toggle-description:hover {
    background-color: #580fbc; /* لون أغمق عند التمرير */
}
</style>
@stop

@section('content')



    <div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: " id="exampleModalLabel">اضافة  مسخدم جديد   </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form_add" id="form_add" enctype="multipart/form-data"
                        action="{{ route('dash.user.store') }}" method="POST">
                        @csrf
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('اسم المستخدم')</label>
                            <input placeholder="@lang('اسم المستخدم')" name="name" class="form-control" type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('البريد الالكتروني')</label>
                            <input placeholder="@lang('البريد الالكتروني ')" name="email" class="form-control" type="email">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('كلمة المرور')</label>
                            <input placeholder="@lang(' كلمة المرور ')" name="password" class="form-control" type="password">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang(' تاكيد كلمة المرور')</label>
                            <input placeholder="@lang('تاكيد كلمة المرور ')" name="password_confirmation" class="form-control" type="password">
                            <div class="invalid-feedback"></div>
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
                    <h5 class="modal-title" id="exampleModalLabel">تعديل المستخدم </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form_edit" id="form_edit" enctype="multipart/form-data"
                        action="{{ route('dash.area.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id" class="form-control">

                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('اسم المنطقة ')</label>
                            <input id="edit_name" placeholder="@lang('اسم  المنتج')" name="name" class="form-control" type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('سعر التوصيل')</label>
                            <input id="edit_price" placeholder="@lang('سعر التوصيل')" name="price" class="form-control" type="number">
                            <div class="invalid-feedback"></div>
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
        <div class="col-12 col-lg-12 col-xl-12 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header bg-transparent">
                    <div class="row g-3 align-items-center">
                        <div class="col">
                            <h5 class="mb-0">@lang('التصفية')</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <!-- الحقل 1 -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <label class="form-label">@lang(' اسم المنطقة')</label>
                            <input placeholder="@lang('اسم المنطقة')" class="form-control search_input" data-ajax="true" data-url="{{ route('dash.area.search.name') }}" type="text" id="search_name">
                            <div class="suggestions" id="search_name_suggestions"></div>
                        </div>

                        <!-- الحقل 2 -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <label class="form-label">@lang('السعر')</label>
                            <input placeholder="@lang('السعر')" class="form-control search_input" type="number" id="search_price">
                            <div class="invalid-feedback"></div>
                        </div>

                    <div class="my-3 d-flex gap-2">
                        <button type="submit" id="search_btn" style="background-color: #7212df" class="btn text-white col-6">
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
                            <h5 class="mb-0">@lang('التخفيضات')</h5>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                <a data-bs-toggle="modal" data-bs-target="#add-modal" style="color: white" href="#"
                                    class="add-product-btn">
                                    <i class="fas fa-plus"></i> إضافة مستخدم
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table  id="datatable" class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>@lang('الاسم  ')</th>
                                    <th>@lang('  البريد الالكتروني ')</th>
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
            processing: true,
            serverSide: true,
            responsive: true,
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
                url: "{{ route('dash.user.getdata') }}",
                data: function(d) {
                    d.name = $('#search_name').val();
                    d.price = $('#search_price').val();
                }
            },

            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: "name",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "email",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "actions",
                    orderable: false,
                    searchable: false
                },
            ]
        });




        $(document).ready(function() {
            $(document).on('click', '.edit_btn', function(event) {
                $('input').removeClass('is-invalid');
                $('.invalid-feedback').text('');
                event.preventDefault();
                var button = $(this)
                var id = button.data('id');
                $('#id').val(id);
                $('#edit_name').val(button.data('name'))
                $('#edit_subcat').val(button.data('subcat'))
                $('#edit_price').val(button.data('price'))
                $('#edit_desc').val(button.data('desc'))
            });
        });



        $(document).on('click', '.toggle-description', function() {
    var $button = $(this); // الزر
    var $description = $(this).prev('.product-description'); // النص السابق للزر
    var fullDescription = $description.data('full-description'); // النص الكامل

    console.log($button.text());
    if ($button.text()=='المزيد') {
        console.log('1');
        $description.text(fullDescription); // أظهر النص الكامل
        $button.text('أقل'); // غيّر نص الزر
    } else {
        console.log('2');
        var truncated = fullDescription.split(' ').slice(0,3);
        $description.text(truncated);
        $button.text('المزيد'); // غيّر نص الزر
    }
});






    </script>

@stop
