@extends('dashboard.master')

@section('title', 'لوحة تحكم الطريفي مول | الأقسام الفرعية')

@section('css')

@stop

@section('content')
    <div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: " id="exampleModalLabel">اضافة قسم  فرعي جديد</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form_add" id="form_add" enctype="multipart/form-data"
                        action="{{ route('dash.subcat.store') }}" method="POST">
                        @csrf
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('اسم القسم الفرعي')</label>
                            <input placeholder="@lang('اسم القسم الفرعي')" name="name" class="form-control" type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang(' القسم الرئيسي له')</label>
                            <select name="maincat" class="form-control">
                                 <option selected disabled>اختر القسم الرئيسي</option>
                                 @foreach ($maincat as $cat)
                                 <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                 @endforeach
                            </select>
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
                    <h5 class="modal-title" id="exampleModalLabel">تعديل القسم الفرعي</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form_edit" id="form_edit" enctype="multipart/form-data"
                        action="{{ route('dash.subcat.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id" class="form-control">

                        <div class="mb-2 form-group">
                            <label class="form-label">@lang('اسم القسم الفرعي')</label>
                            <input id="edit_name" placeholder="@lang('اسم القسم الفرعي')" name="name" class="form-control" type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2 form-group">
                            <label class="form-label">@lang(' القسم الرئيسي له')</label>
                            <select id="edit_maincat" name="maincat" class="form-control">
                                 <option selected disabled>اختر القسم الرئيسي</option>
                                 @foreach ($maincat as $cat)
                                 <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                 @endforeach
                            </select>
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
                        <div class="col-lg-4 col-md-6 col-12">
                            <label class="form-label">@lang('اسم القسم الفرعي')</label>
                            <input placeholder="@lang('اسم القسم الفرعي ')" class="form-control search_input" data-ajax="true" data-url="{{ route('dash.subcat.search.name') }}" type="text" id="search_name">
                            <div class="suggestions" id="search_name_suggestions"></div>
                        </div>
                        <!-- الحقل 1 -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <label class="form-label">@lang('اسم القسم الرئيسي')</label>
                            <input placeholder="@lang('اسم القسم الرئيسي ')" class="form-control search_input" data-ajax="true" data-url="{{ route('dash.maincat.search.name') }}" type="text" id="search_main">
                            <div class="suggestions" id="search_main_suggestions"></div>
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
                            <h5 class="mb-0">@lang('الأقسام الفرعية')</h5>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                <a data-bs-toggle="modal" data-bs-target="#add-modal" style="color: white" href="#"
                                    class="add-product-btn">
                                    <i class="fas fa-plus"></i> إضافة قسم
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
                                    <th>@lang('  القسم الفرعي')</th>
                                    <th>@lang('القسم الرئيسي له')</th>
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
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/ar.json',
            },
            ajax: {
                url: "{{ route('dash.subcat.getdata') }}",
                data:function(d){
                    d.name = $('#search_name').val();
                    d.main = $('#search_main').val();
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
                    data: "maincat",
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
                $('#edit_maincat').val(button.data('main_category_id'))
            });
        });
    </script>

@stop
