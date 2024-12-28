@extends('clinet.master')
@section('content')
    <main class="mt-20">
        <!-- path -->
        <div class="path flex justify-start items-center container mx-auto pt-6 pb-2 gap-2">
            <a href="" class="text-sm text-gray-500">الصفحة الرئيسية</a><span class="text-sm text-gray-500"> / </span><a
                href="" class="text-sm text-gray-500">
              المنتجات</a>
        </div>
        <div class="container mx-auto mb-8">
            <div class="grid grid-cols-1 md:grid-cols-[1fr,3fr] gap-1">
                <div
                    class="rounded-lg p-4 flex flex-row gap-2 overflow-x-auto  md:h-screen md:block md:overflow-y-auto md:sticky top-20 bottom-0 start-0">
                    <div class="hidden flex-col items-start justify-start mb-2 md:flex">
                        <h3 class="font-medium text-lg">تصنيف</h3>
                    </div>
                    <!-- الفئات -->
                    <div class="main-accordion my-4">
                        <button
                            class="main-accordion-header flex justify-between items-center w-full"><span>الفئات</span><span
                                class="toggle-icon text-2xl">-</span></button>
                        <div class="main-accordion-content">
                            <!-- الفئات الأولى (5 فئات) -->
                            <div class="accordion-item">
                                <div class="category-header">
                                    <button class="show-items-btn">+</button>
                                    <label>
                                        <input type="radio" name="main-category" value="بطانيات">
                                        بطانيات
                                    </label>
                                </div>
                                <div class="accordion-content ">
                                    <label>
                                        <input type="radio" name="category1" value="صنف 1">
                                        صنف 1
                                    </label>
                                    <label>
                                        <input type="radio" name="category1" value="صنف 2">
                                        صنف 2
                                    </label>
                                </div>
                            </div>

                            <!-- الفئة 2 -->
                            <div class="accordion-item">
                                <div class="category-header">
                                    <button class="show-items-btn">+</button>
                                    <label>
                                        <input type="radio" name="main-category" value="الفئة 1">
                                        فرش
                                    </label>
                                </div>
                                <div class="accordion-content">
                                    <label>
                                        <input type="radio" name="category2" value="صنف 1">
                                        صنف 1
                                    </label>
                                    <label>
                                        <input type="radio" name="category2" value="صنف 2">
                                        صنف 2
                                    </label>
                                </div>
                            </div>

                            <!-- الفئة 3 -->
                            <div class="accordion-item">
                                <div class="category-header">
                                    <button class="show-items-btn">+</button>
                                    <label>
                                        <input type="radio" name="main-category" value="الفئة 1">
                                        مفارش مطبخ
                                    </label>
                                </div>
                                <div class="accordion-content">
                                    <label>
                                        <input type="radio" name="category3" value="صنف 1">
                                        صنف 1
                                    </label>
                                    <label>
                                        <input type="radio" name="category3" value="صنف 1">
                                        صنف 1
                                    </label>
                                    <label>
                                        <input type="radio" name="category3" value="صنف 1">
                                        صنف 1
                                    </label>
                                    <label>
                                        <input type="radio" name="category3" value="صنف 2">
                                        صنف 2
                                    </label>
                                </div>
                            </div>

                            <!-- الفئة 4 -->
                            <div class="accordion-item">
                                <div class="category-header">
                                    <button class="show-items-btn">+</button>
                                    <label>
                                        <input type="radio" name="main-category" value="الفئة 1">
                                        وسادات ديكور
                                    </label>
                                </div>
                                <div class="accordion-content">
                                    <label>
                                        <input type="radio" name="category4" value="صنف 1">
                                        صنف 1
                                    </label>
                                    <label>
                                        <input type="radio" name="category4" value="صنف 2">
                                        صنف 2
                                    </label>
                                </div>
                            </div>

                            <!-- الفئة 5 -->
                            <div class="accordion-item">
                                <div class="category-header">
                                    <button class="show-items-btn">+</button>
                                    <label>
                                        <input type="radio" name="main-category" value="الفئة 1">
                                        بساط وسجاد
                                    </label>
                                </div>
                                <div class="accordion-content">
                                    <label>
                                        <input type="radio" name="category5" value="صنف 1">
                                        صنف 1
                                    </label>
                                    <label>
                                        <input type="radio" name="category5" value="صنف 2">
                                        صنف 2
                                    </label>
                                </div>
                            </div>

                            <!-- الفئات المخفية -->
                            <div class="hidden-categories">
                                <div class="accordion-item">
                                    <div class="category-header">
                                        <button class="show-items-btn">+</button>
                                        <label>
                                            <input type="radio" name="main-category" value="الفئة 1">
                                            سيارات
                                        </label>
                                    </div>
                                    <div class="accordion-content">
                                        <label>
                                            <input type="radio" name="category6" value="صنف 1">
                                            صنف 1
                                        </label>
                                        <label>
                                            <input type="radio" name="category6" value="صنف 2">
                                            صنف 2
                                        </label>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="category-header">
                                        <button class="show-items-btn">+</button>
                                        <label>
                                            <input type="radio" name="main-category" value="الفئة 1">
                                            اجهزة الكترونية
                                        </label>
                                    </div>
                                    <div class="accordion-content">
                                        <label>
                                            <input type="radio" name="category6" value="صنف 1">
                                            صنف 1
                                        </label>
                                        <label>
                                            <input type="radio" name="category6" value="صنف 2">
                                            صنف 2
                                        </label>
                                    </div>
                                </div>

                                <!-- يمكن إضافة المزيد من الفئات المخفية هنا -->
                            </div>

                            <!-- زر عرض المزيد -->
                            <button class="show-more-btn">عرض المزيد</button>
                        </div>
                    </div>
                    <!-- الالوان -->
                    <div class="main-accordion my-4">
                        <button
                            class="main-accordion-header flex justify-between items-center w-full"><span>الالوان</span><span
                                class="toggle-icon text-2xl">-</span></button>
                        <div class="main-accordion-content">
                            <form action="" class="flex flex-wrap justify-center items-center gap-3">
                                <label for="red_" class="w-5 h-5 block bg-red-800 rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="red_">
                                </label>
                                <label for="pueple" class="w-5 h-5 block bg-purple-800 rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="pueple">
                                </label>
                                <label for="yellow" class="w-5 h-5 block bg-yellow-800 rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="yellow">
                                </label>
                                <label for="black" class="w-5 h-5 block bg-black rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="black">
                                </label>
                                <label for="slate" class="w-5 h-5 block bg-slate-800 rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="slate">
                                </label>
                                <label for="blue" class="w-5 h-5 block bg-blue-800 rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="blue">
                                </label>
                                <label for="orange" class="w-5 h-5 block bg-orange-800 rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="orange">
                                </label>
                                <label for="white" class="w-5 h-5 block bg-white border border-black rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="red_">
                                </label>
                                <label for="white" class="w-5 h-5 block bg-amber-800 rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="red_">
                                </label>
                                <label for="white" class="w-5 h-5 block bg-green-800 rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="red_">
                                </label>
                                <label for="white" class="w-5 h-5 block bg-teal-800 rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="red_">
                                </label>
                                <label for="white" class="w-5 h-5 block bg-sky-800 rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="red_">
                                </label>
                                <label for="white" class="w-5 h-5 block bg-pink-800 rounded-full">
                                    <input type="checkbox" name="" class="opacity-0 cursor-pointer"
                                        id="red_">
                                </label>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="rounded-lg p-2 h-fit">

                    <div class="flex flex-wrap justify-center md:justify-between items-center gap-2">

                        @foreach ($products as $product)
                            <a href="#"
                                class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                                data-wow-delay="0.1s">
                                <div class="image">
                                    <img src="{{ $product->image }}" class="w-full rounded-md normal-img" alt="">
                                    <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                        class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                        alt="">
                                </div>
                                <div
                                    class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                    <p class="text-xl text-purple-800 font-bold">{{ $product->name }}</p>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm text-purple-900">{{ $product->price }}SR</p>
                                        <div class="buttons flex items-center gap-2">
                                            <button data-id="{{ $product->id }}" class="add-to-card"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                    height="24px" viewBox="0 -960 960 960" width="24px"
                                                    fill="#5f6368">
                                                    <path
                                                        d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                </svg></button>

                                            <button data-id="{{ $product->id }}" class="add-to-favorite"
                                                data-type="{{ $product->checkfavorite($product->id) }}">


                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                    height="24px" viewBox="0 -960 960 960" width="24px">
                                                    <path
                                                        d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        @endforeach


                    </div>
                    <!-- pagination -->
                    {{ $products->links('clinet.parts.custom_pagination-view') }}
                </div>
            </div>
    </main>
@stop

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.add-to-card').on('click', function(event) {
            console.log('ahmed');

            //  $('.search_input').val("").trigger("change")
            event.preventDefault();
            let token = $('meta[name="csrf-token"]').attr('content'); // جلب CSRF Token
            let id = $(this).data('id'); // جلب الـ id من الزر
            console.log(id);

            $.ajax({
                type: 'POST',
                url: "{{ route('client.products.addToCard') }}", // تحقق من المسار
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'), // إرسال التوكن
                    id: id // إرسال الـ id
                },
                success: function(result) {
                    toastr.success("تمت الإضافة للسلة بنجاح!");
                },
                error: function(data) {
                    console.log(data);
                    toastr.error("حدث خطأ أثناء الإضافة.");
                }
            });

        });

        $(document).ready(function() {
            // عند تحميل الصفحة، تحقق من جميع الأزرار التي تحتوي على .add-to-favorite
            $('.add-to-favorite').each(function() {
                let isFilled = $(this).data('type') === 'yes'; // التحقق من قيمة data-type
                if (isFilled) {
                    // إذا كانت القيمة yes، ضع أيقونة القلب الممتلئ باللون الأبيض
                    $(this).html(`
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-purple-900 fill-white" height="24px" viewBox="0 -960 960 960" width="24px">
                    <path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" fill="white"/>
                </svg>
            `);
                } else {
                    // إذا كانت القيمة no، ضع أيقونة القلب الفارغ
                    $(this).html(`
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white" height="24px" viewBox="0 -960 960 960" width="24px">
                    <path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                </svg>
            `);
                }
            });
        });



    $('.add-to-favorite').on('click', function(event) {

            let isFilled = $(this).data('type') === 'yes'; // تحقق إذا كانت الأيقونة ممتلئة
            if (isFilled) {
                // إذا كانت ممتلئة، غيّرها إلى فارغة
                $(this).data('type', 'no').html(`
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white" height="24px" viewBox="0 -960 960 960" width="24px">
                <path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
            </svg>
        `);
            } else {
                // إذا كانت فارغة، غيّرها إلى ممتلئة
                $(this).data('type', 'yes').html(`
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-purple-900 fill-white" height="24px" viewBox="0 -960 960 960" width="24px">
                <path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
            </svg>
        `);
            }
            console.log('ahmed');

            event.preventDefault();
            let token = $('meta[name="csrf-token"]').attr('content'); // جلب CSRF Token
            let id = $(this).data('id'); // جلب الـ id من الزر
            let type = $(this).data('type'); // جلب الـ id من الزر
            console.log(id);

            $.ajax({
                type: 'POST',
                url: "{{ route('client.products.addToFavorite') }}", // تحقق من المسار
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'), // إرسال التوكن
                    id: id, // إرسال الـ id
                    type: type, // إرسال الـ id
                },
                success: function(result) {
                    toastr.success("تمت الإضافة للمفضلة بنجاح!");
                },
                error: function(data) {
                    console.log(data);
                    toastr.error("حدث خطأ أثناء الإضافة.");
                }
            });

    });
    </script>
@stop
