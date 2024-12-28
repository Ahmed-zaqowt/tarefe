@extends('dashboard.master')

@section('title', 'لوحة تحكم الطريفي مول | منتجات الطريفي ')

@section('css')
    <style>
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





    </style>
@stop

@section('content')


    <div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: " id="exampleModalLabel">اضافة  شركة جديدة </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form_add" id="form_add" enctype="multipart/form-data"
                        action="{{ route('dash.company.store') }}" method="POST">
                        @csrf
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('اسم  الشركة ')</label>
                            <input placeholder="@lang('اسم الشركة ')" name="name" class="form-control" type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('وصف الشركة')<small> (حقل اختياري)</small></label>
                            <textarea  placeholder="@lang('وصف الشركة ')" name="description" class="form-control"></textarea>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-2 form-group">
                            <label class="form-label">@lang(' صورة  شعار الشركة')</label>
                            <input name="image" class="form-control" type="file" id="company-logo-input">
                            <div class="preview-container mt-2" id="preview-container" style="display: none; position: relative;">
                                <img id="preview-image" src="" alt="Preview" style="max-width: 100%; max-height: 150px; border: 1px solid #7212df; border-radius: 5px;">
                                <button type="button" id="remove-image" style="position: absolute; top: 5px; right: 5px; background-color: #50396c; color: white; border: none; border-radius: 50%; width: 25px; height: 25px; cursor: pointer;">&times;</button>
                            </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات الشركة </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form_edit" id="form_edit" enctype="multipart/form-data"
                        action="{{ route('dash.company.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id" class="form-control">

                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('اسم الشركة  ')</label>
                            <input id="edit_name" placeholder="@lang('اسم  الشركة')" name="name" class="form-control"
                                type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('تفاصيل عن الشركة')<small> (حقل اختياري)</small></label>
                            <textarea id="edit_desc" placeholder="@lang('تفاصيل عن الشركة  ')" name="description" class="form-control"></textarea>
                            <div class="invalid-feedback"></div>
                        </div>



                        <div class="mb-2 form-group">
                            <label class="form-label">@lang(' صورة شعار الشركة')</label>
                            <input name="image" class="form-control" type="file" id="edit_image_input">
                            <div class="mt-2" id="edit_image_preview_container" style="display: none; position: relative;">
                                <img id="edit_image_preview" src="" alt="Preview" style="max-width: 100%; max-height: 150px; border: 1px solid #7212df; border-radius: 5px;">
                                <button type="button" id="edit_image_remove" style="position: absolute; top: 5px; right: 5px; background-color: red; color: white; border: none; border-radius: 50%; width: 25px; height: 25px; cursor: pointer;">&times;</button>
                            </div>
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
        <div class="col-12">
            <div class="card radius-10 w-100">
                <div class="card-header bg-transparent">
                    <h5 class="mb-0">@lang('التصفية')</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <!-- الحقل 1 -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <label class="form-label">@lang('اسم الشركة')</label>
                            <input placeholder="@lang('اسم الشركة')" class="form-control search_input" type="text"
                                id="search_name" data-ajax="true"
                                data-url="{{ route('dash.company.search.name') }}">
                            <div class="suggestions" id="search_name_suggestions"></div>

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
                            <h5 class="mb-0">@lang('الشركات المنتجة')</h5>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                <a data-bs-toggle="modal" data-bs-target="#add-modal" style="color: white"
                                    href="#" class="add-product-btn">
                                    <i class="fas fa-plus"></i> إضافة شركة
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
                                    <th>@lang('الصورة')</th>
                                    <th>@lang('الاسم')</th>
                                    <th>@lang('الوصف')</th>
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
                url: "{{ route('dash.company.getdata') }}",
                data: function(d) {
                    d.name = $('#search_name').val();
                    d.price = $('#search_price').val();
                    d.subcat = $('#search_subcat').val();
                    d.maincat = $('#search_maincat').val();
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
                    data: "actions",
                    orderable: false,
                    searchable: false
                },
            ]
        });




$(document).ready(function () {
    $(document).on("click", ".edit_btn", function (event) {
        $("input").removeClass("is-invalid");
        $(".invalid-feedback").text("");
        event.preventDefault();

        // جلب البيانات من الأزرار
        var button = $(this);
        var id = button.data("id");
        var name = button.data("name");
        var desc = button.data("desc");
        var maincat = button.data("maincat");
        var imageUrl = button.data("image"); // الرابط الكامل للصورة الحالية

        // تعبئة الحقول
        $("#id").val(id);
        $("#edit_name").val(name);
        $("#edit_desc").val(desc);
        $("#edit_maincat").val(maincat);

        // عرض الصورة الحالية إذا كانت موجودة
        if (imageUrl) {
            $("#edit_image_preview").attr("src", imageUrl);
            $("#edit_image_preview_container").show();
        } else {
            $("#edit_image_preview_container").hide();
        }
    });

    // عند اختيار صورة جديدة
    $("#edit_image_input").on("change", function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                $("#edit_image_preview").attr("src", e.target.result);
                $("#edit_image_preview_container").show();
            };
            reader.readAsDataURL(file);
        }
    });

    // عند حذف الصورة
    $("#edit_image_remove").on("click", function () {
        $("#edit_image_preview").attr("src", "");
        $("#edit_image_preview_container").hide();
        $("#edit_image_input").val(""); // إعادة تعيين الحقل
    });
});




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





$(document).ready(function () {
    $('.description-box').on('mouseenter', function () {
        $(this).siblings('.scroll-box').fadeIn(200);
    });

    $('.product').on('mouseleave', function () {
        $(this).find('.scroll-box').fadeOut(200);
    });
});

    </script>

@stop
