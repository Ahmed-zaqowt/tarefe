@extends('dashboard.master')

@section('title', 'لوحة تحكم الطريفي مول | السمات')

@section('css')

@stop

@section('content')
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
                            <label class="form-label">@lang(' اسم المنتج ')</label>
                            <input placeholder="@lang('  اسم المنتج ')" class="form-control search_input" data-ajax="true"
                                data-url="{{ route('dash.product.search.name') }}" type="text" id="search_name">
                            <div class="suggestions" id="search_name_suggestions"></div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <label class="form-label">@lang('السمة')</label>
                            <select class="form-control search_input" type="text">
                                <option>اختر السمة </option>
                                <option value="0">التريند</option>
                                <option value="1">الاكثر مبيعا</option>
                                <option value="2">مبيعات</option>
                                <option value="3">أسعار منخفضة</option>
                                <option value="4">الطراز</option>
                            </select>
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
    </div>


    <div class="row">
        <div class="col-12 col-lg-12 col-xl-12 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header bg-transparent">
                    <div class="row g-3 align-items-center">
                        <div class="col">
                            <h5 class="mb-0">@lang('النظام اليدوي')</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-3">

                        <div class="view-form">
                            <form id="featuers_form" method="post" action="{{ route('dash.settings.feature.manual') }}">
                                @csrf
                                <input name="id" type="hidden" value="{{ @$manual->id }}">
                            <div class=" col-lg-2 col-md-6 col-12">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">تريندات</label>
                                    <input name="trend" class="form-check-input features_btn" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" {{ $manual->trend == 1 ? 'checked' : ' ' }}>
                                </div>
                            </div>
                            <div class=" col-lg-2 col-md-6 col-12">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">الاكثر مبيعا</label>
                                    <input name="best" class="form-check-input features_btn" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault"{{ @$manual->best == 1 ? 'checked' : ' ' }}>
                                </div>
                            </div>
                            <div class=" col-lg-2 col-md-6 col-12">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">المبيعات</label>
                                    <input name="selles" class="form-check-input features_btn" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" {{ @$manual->selles == 1 ? 'checked' : ' ' }} >
                                </div>
                            </div>
                            <div class=" col-lg-2 col-md-6 col-12">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">الاسعار المنخفضة</label>
                                    <input name="low" class="form-check-input features_btn" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" {{ @$manual->low == 1 ? 'checked' : ' ' }}>
                                </div>
                            </div>
                            <div class=" col-lg-2 col-md-6 col-12">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">الطراز</label>
                                    <input name="teraz" class="form-check-input  features_btn" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" {{ @$manual->teraz == 1 ? 'checked' : ' ' }}>
                                </div>
                            </div>
                            </form>

                        </div>

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
                            <h5 class="mb-0">@lang('سمات المنتجات')</h5>
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
                                    <th>@lang('اسم المنتج')</th>
                                    <th style="width: 70px">@lang('التريندات')</th>
                                    <th style="width: 70px">@lang('الأكثر مبيعا')</th>
                                    <th style="width: 70px">@lang('المبيعات')</th>
                                    <th style="width: 70px">@lang('أسعار منخفضه')</th>
                                    <th style="width: 70px">@lang('الطراز')</th>
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
                url: "{{ route('dash.settings.feature.getdata') }}",
                data: function(d) {
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
                    data: "image",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "name",
                    orderable: true,
                    searchable: true
                },

                {
                    data: "trends",
                    orderable: false,
                    searchable: false
                },
                {
                    data: "bests",
                    orderable: false,
                    searchable: false
                },
                {
                    data: "sellers",
                    orderable: false,
                    searchable: false
                },
                {
                    data: "low",
                    orderable: false,
                    searchable: false
                },
                {
                    data: "teraz",
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


        $(document).ready(function() {
            $(document).on('change', '.trends_btn', function(event) {
                var button = $(this)
                var id = button.data('id');

                var form = document.getElementById("trend_form" + id);
                var data = new FormData(form);


                let url = $(form).attr('action');
                var method = $(form).attr('method');
                $.ajax({
                    type: method,
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: url,
                    data: data,

                    beforeSend: function() {},
                    success: function(result) {
                        toastr.success(result.success);
                        table.draw()
                    },
                    error: function(data) {
                        if (data.status === 422) {
                            var response = data.responseJSON;
                            $.each(response.errors, function(key, value) {
                                var str = (key.split("."));
                                if (str[1] === '0') {
                                    key = str[0] + '[]';
                                }
                                $('[name="' + key + '"], [name="' + key + '[]"]')
                                    .addClass(
                                        'is-invalid');
                                $('[name="' + key + '"], [name="' + key + '[]"]')
                                    .closest(
                                        '.form-group').find('.invalid-feedback').html(
                                        value[0]);
                            });
                        } else {
                            console.log('ahmed');
                        }
                    }
                });
            });
        });


        $(document).ready(function() {
            $(document).on('change', '.best_btn', function(event) {
                var button = $(this)
                var id = button.data('id');

                var form = document.getElementById("best_form" + id);
                var data = new FormData(form);


                let url = $(form).attr('action');
                var method = $(form).attr('method');
                $.ajax({
                    type: method,
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: url,
                    data: data,

                    beforeSend: function() {},
                    success: function(result) {
                        toastr.success(result.success);
                        table.draw()
                    },
                    error: function(data) {
                        if (data.status === 422) {
                            var response = data.responseJSON;
                            $.each(response.errors, function(key, value) {
                                var str = (key.split("."));
                                if (str[1] === '0') {
                                    key = str[0] + '[]';
                                }
                                $('[name="' + key + '"], [name="' + key + '[]"]')
                                    .addClass(
                                        'is-invalid');
                                $('[name="' + key + '"], [name="' + key + '[]"]')
                                    .closest(
                                        '.form-group').find('.invalid-feedback').html(
                                        value[0]);
                            });
                        } else {
                            console.log('ahmed');
                        }
                    }
                });
            });
        });


        $(document).ready(function() {
            $(document).on('change', '.selles_btn', function(event) {
                var button = $(this)
                var id = button.data('id');

                var form = document.getElementById("selles_form" + id);
                var data = new FormData(form);


                let url = $(form).attr('action');
                var method = $(form).attr('method');
                $.ajax({
                    type: method,
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: url,
                    data: data,

                    beforeSend: function() {},
                    success: function(result) {
                        toastr.success(result.success);
                        table.draw()
                    },
                    error: function(data) {
                        if (data.status === 422) {
                            var response = data.responseJSON;
                            $.each(response.errors, function(key, value) {
                                var str = (key.split("."));
                                if (str[1] === '0') {
                                    key = str[0] + '[]';
                                }
                                $('[name="' + key + '"], [name="' + key + '[]"]')
                                    .addClass(
                                        'is-invalid');
                                $('[name="' + key + '"], [name="' + key + '[]"]')
                                    .closest(
                                        '.form-group').find('.invalid-feedback').html(
                                        value[0]);
                            });
                        } else {
                            console.log('ahmed');
                        }
                    }
                });
            });
        });

        $(document).ready(function() {
            $(document).on('change', '.low_btn', function(event) {
                var button = $(this)
                var id = button.data('id');

                var form = document.getElementById("low_form" + id);
                var data = new FormData(form);


                let url = $(form).attr('action');
                var method = $(form).attr('method');
                $.ajax({
                    type: method,
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: url,
                    data: data,

                    beforeSend: function() {},
                    success: function(result) {
                        toastr.success(result.success);
                        table.draw()
                    },
                    error: function(data) {
                        if (data.status === 422) {
                            var response = data.responseJSON;
                            $.each(response.errors, function(key, value) {
                                var str = (key.split("."));
                                if (str[1] === '0') {
                                    key = str[0] + '[]';
                                }
                                $('[name="' + key + '"], [name="' + key + '[]"]')
                                    .addClass(
                                        'is-invalid');
                                $('[name="' + key + '"], [name="' + key + '[]"]')
                                    .closest(
                                        '.form-group').find('.invalid-feedback').html(
                                        value[0]);
                            });
                        } else {
                            console.log('ahmed');
                        }
                    }
                });
            });
        });

        $(document).ready(function() {
            $(document).on('change', '.teraz_btn', function(event) {
                var button = $(this)
                var id = button.data('id');

                var form = document.getElementById("teraz_form" + id);
                var data = new FormData(form);


                let url = $(form).attr('action');
                var method = $(form).attr('method');
                $.ajax({
                    type: method,
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: url,
                    data: data,

                    beforeSend: function() {},
                    success: function(result) {
                        toastr.success(result.success);
                        table.draw()
                    },
                    error: function(data) {
                        if (data.status === 422) {
                            var response = data.responseJSON;
                            $.each(response.errors, function(key, value) {
                                var str = (key.split("."));
                                if (str[1] === '0') {
                                    key = str[0] + '[]';
                                }
                                $('[name="' + key + '"], [name="' + key + '[]"]')
                                    .addClass(
                                        'is-invalid');
                                $('[name="' + key + '"], [name="' + key + '[]"]')
                                    .closest(
                                        '.form-group').find('.invalid-feedback').html(
                                        value[0]);
                            });
                        } else {
                            console.log('ahmed');
                        }
                    }
                });
            });
        });

        $(document).ready(function() {
            $(document).on('change', '.features_btn', function(event) {
                var button = $(this)
                var id = button.data('id');

                var form = document.getElementById("featuers_form");
                var data = new FormData(form);


                let url = $(form).attr('action');
                var method = $(form).attr('method');
                $.ajax({
                    type: method,
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: url,
                    data: data,

                    beforeSend: function() {},
                    success: function(result) {
                        toastr.success(result.success);
                        table.draw()
                    },
                    error: function(data) {
                        if (data.status === 422) {
                            var response = data.responseJSON;
                            $.each(response.errors, function(key, value) {
                                var str = (key.split("."));
                                if (str[1] === '0') {
                                    key = str[0] + '[]';
                                }
                                $('[name="' + key + '"], [name="' + key + '[]"]')
                                    .addClass(
                                        'is-invalid');
                                $('[name="' + key + '"], [name="' + key + '[]"]')
                                    .closest(
                                        '.form-group').find('.invalid-feedback').html(
                                        value[0]);
                            });
                        } else {
                            console.log('ahmed');
                        }
                    }
                });
            });
        });


    </script>

@stop
