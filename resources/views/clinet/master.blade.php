<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>متجر الطريفي</title>
    <link rel="icon" href="{{ asset('client/img/logo.jpg') }}">
    <!-- <link href="{{ asset('client/input.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('client/css/output.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('client/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('client/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/animate.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Open Graph Tags -->
    <meta property="og:title" content="متجر الطريفي " />
    <meta property="og:description" content="اكتشف مجموعة متنوعة من المنتجات بجودة عالية." />
    <meta property="og:image" content="{{ asset('client/img/logo.jpg') }}" />
    <meta name="keywords" content="منتجات, تسوق, متجر إلكتروني, الطريفي, AlTRIYFI ,Ecommerce" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="GiftCard.html" />

    <!-- Robots.txt and Sitemap -->
    <link rel="sitemap" type="application/xml" href="GiftCard.html" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('toastr/app-assets/vendors/css/extensions/toastr.min.css') }}">
    <style>
        .swiper-button-next,
        .swiper-button-prev {
            color: white;
            padding: 10px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class='cursor' id="cursor"></div>
    <div class='cursor2' id="cursor2"></div>
    <div class='cursor3' id="cursor3"></div>
    <!-- header -->
    <header class="flex flex-col justify-between items-center shadow-md fixed top-0 left-0 right-0 bg-white z-50">
        <div class="container mx-auto topHeader flex justify-between items-center w-full">
            <div class="logo">
                <img src="{{ asset('client/img/logo trefe.svg') }}" class="w-40" alt="">
            </div>
            <form action="" class="w-1/3 relative hidden md:block">
                <input type="text"
                    class="w-full py-3 px-5 pr-20 bg-transparent border border-purple-900 rounded-3xl focus:outline-none focus:bg-white"
                    placeholder="أبحث عن الذي تريده">
                <button class="absolute top-0 bottom-0 right-0"><svg xmlns="http://www.w3.org/2000/svg"
                        class="w-16 h-12 p-2 rounded-tr-full rounded-br-full transition-all duration-200 fill-white bg-purple-900 hover:bg-purple-600 "
                        height="24px" viewBox="0 -960 960 960" width="24px">
                        <path
                            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                    </svg></button>
            </form>
            <div class="icons flex flex-row-reverse justify-between items-center gap-5">


                <a class="" href="{{ route('client.products.favorite') }}"><svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                        height="24px" viewBox="0 -960 960 960" width="24px">
                        <path
                            d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                    </svg></a>
                <a class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                        class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                        height="24px" viewBox="0 -960 960 960" width="24px">
                        <path
                            d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
                    </svg></a>
                <a class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                        class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                        height="24px" viewBox="0 -960 960 960" width="24px">
                        <path
                            d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                    </svg></a>
                <button class="categoriesBtn"><svg xmlns="http://www.w3.org/2000/svg"
                        class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                        height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                        <path
                            d="m260-520 220-360 220 360H260ZM700-80q-75 0-127.5-52.5T520-260q0-75 52.5-127.5T700-440q75 0 127.5 52.5T880-260q0 75-52.5 127.5T700-80Zm-580-20v-320h320v320H120Zm580-60q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Zm-500-20h160v-160H200v160Zm202-420h156l-78-126-78 126Zm78 0ZM360-340Zm340 80Z" />
                    </svg></button>
                <button class="searchBtn block md:hidden"><svg xmlns="http://www.w3.org/2000/svg"
                        class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                        height="24px" viewBox="0 -960 960 960" width="24px">
                        <path
                            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                    </svg></button>

            </div>
        </div>
    </header>
    <div class="loader z-50 flex justify-center items-center fixed top-0 left-0 bottom-0 right-0 bg-purple-800">
        <img src="{{ asset('client/img/logo_trefe_ابيض-removebg-preview.png') }}" width="30%" alt="">
    </div>
    <!-- categories popup -->
    <div
        class="main_popup fixed top-0 bottom-0 left-0 right-0 bg-purple-800 bg-opacity-35 flex justify-center items-center z-40">
         @php
             $categories = App\Models\SubCategory::all();
         @endphp
        <div class="categoriesPopup z-50 bg-white w-4/6 p-5 rounded-md flex justify-between items-start h-96">
            <div class="overflow-y-auto flex flex-col categoriesList w-1/3 h-full">
                @foreach ($categories as $category)
                    <a href="#" data-id="{{ $category->id }}"
                        class="category-link transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">
                        {{ $category->name }}
                    </a>
                @endforeach

            </div>
            <!-- المنتجات -->
            <div id="products-container"
                class="categoriesShow w-screen h-full overflow-y-auto flex flex-wrap justify-around gap-3 p-3">
                <p class="text-gray-500 text-center w-full">اختر قسمًا لعرض المنتجات.</p>
            </div>
        </div>
    </div>
    <!-- search popup -->
    <div
        class="search_pop fixed top-0 bottom-0 left-0 right-0 bg-purple-800 bg-opacity-35 flex justify-center items-center z-40">
        <div
            class="searchPopup z-50 bg-white w-4/6 p-5 rounded-md flex flex-col justify-start items-center h-2/5 gap-10">
            <h2 class="text-xl font-medium">ابحث عن اي شيء تريده</h2>
            <form action="" class="w-9/12 relative">
                <input type="text"
                    class="w-full py-3 px-5 pr-20 bg-transparent border border-purple-900 rounded-3xl focus:outline-none focus:bg-white"
                    placeholder="أبحث عن الذي تريده">
                <button class="absolute top-0 bottom-0 right-0"><svg xmlns="http://www.w3.org/2000/svg"
                        class="w-16 h-12 p-2 rounded-tr-full rounded-br-full transition-all duration-200 fill-white bg-purple-900 hover:bg-purple-600 "
                        height="24px" viewBox="0 -960 960 960" width="24px">
                        <path
                            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                    </svg></button>
            </form>
            <div class="categoriesShow w-full h-full overflow-y-auto flex flex-wrap justify-around gap-3 p-3">
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2 text-center">سجادة صلاة</p>
                </a>


            </div>
        </div>
    </div>
    <!-- main page -->
    @yield('content')
    <footer class="bg-purple-800 py-3 px-3 flex flex-col">
        <div class="big_logo flex justify-center items-center">
            <img src="{{ asset('client/img/logo_trefe_ابيض-removebg-preview.png') }}" width="20%" alt="">
        </div>
        <div class="flex flex-col justify-between items-start gap-5 py-5 md:mx-auto md:container lg:flex-row">
            <div
                class="lists flex flex-wrap justify-center gap-4 items-start w-full sm:flex-nowrap sm:gap-0 sm:justify-between lg:w-1/2">
                <div class="list flex flex-col items-center w-1/2 sm:w-fit">
                    <h3 class="text-white font-medium">معلومات الشركة</h3>
                    <div class="flex flex-col items-center mt-3 gap-3">
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">معلومات
                            الشركة حول شي ان</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">اتصال
                            بنا</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">كن
                            أعضاءنا</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">لوق
                            أزياء</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">مسؤولية
                            اجتماعية</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">وظائف</a>
                    </div>
                </div>
                <div class="list flex flex-col items-center w-1/2 sm:w-fit">
                    <h3 class="text-white font-medium">مركز & المساعدة</h3>
                    <div class="flex flex-col items-center mt-3 gap-3">
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">كيفية
                            الطلب</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">معلومات
                            الشحن</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">المنتجات
                            المسترجعة</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">استرداد
                            المبلغ</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">مرجع
                            المقاس</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">الأسئلة
                            المتكررة</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">شي
                            إن VIP</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">كيفية
                            تتبع طلبك</a>
                    </div>
                </div>
                <div class="list flex flex-col items-center w-1/2 sm:w-fit">
                    <h3 class="text-white font-medium">خدمة الزبائن</h3>
                    <div class="flex flex-col items-center mt-3 gap-3">
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">طريقة
                            الدفع</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">الدفع
                            عند الإستلام</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">بطاقة
                            هدية</a>
                        <a href=""
                            class="text-gray-300 transition-all duration-200 text-xs md:text-sm hover:text-white">برنامج
                            كسب النقاط SHEIN</a>
                    </div>
                </div>
            </div>
            <div class="subscripe bg-white rounded-md p-4 w-full lg:w-1/2">
                <h3 class="text-center mb-4 text-lg font-medium md:text-xl">إشتركي مع شي إن لتصلك أخبار
                    الموضة</h3>
                <form action="" class="w-full flex flex-col items-center">
                    <div class="firstInput relative mb-2 w-4/5">
                        <input type="email" class="w-full py-2 px-3 ps-20 border border-purple-800 rounded-md"
                            placeholder="ادخلي بريدك الالكتروني">
                        <button
                            class="absolute start-0 bottom-0 top-0 bg-purple-800 py-2 px-3 text-white rounded-tr-md rounded-br-md">اشتراك</button>
                    </div>
                    <div class="lastInput relative mt-2 w-4/5">
                        <input type="text" class="w-full py-2 px-3 ps-20 border border-purple-800 rounded-md"
                            placeholder="حسابك الواتساب">
                        <button
                            class="absolute start-0 bottom-0 top-0 bg-purple-800 py-2 px-3 text-white rounded-tr-md rounded-br-md">اشتراك</button>
                    </div>
                </form>
                <div class="flex flex-col justify-center items-center">
                    <div class="follow mt-3">
                        <p class="font-medium text-purple-800 text-center">تابعنا على</p>
                        <div class="flex items-center gap-3 mt-1">
                            <a href="" class="text-3xl text-red-600"><i class="fab fa-youtube"></i></a>
                            <a href="" class="text-3xl text-blue-800"><i class="fab fa-facebook"></i></a>
                            <a href="" class="text-3xl text-purple-800"><i class="fab fa-instagram"></i></a>
                            <a href="" class="text-3xl text-blue-900"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="payments mt-3">
                        <p class="font-medium text-purple-800 text-center">نقبل</p>
                        <div class="flex flex-wrap items-center gap-3 mt-2">
                            <img width="40" src="{{ asset('client/img/payments/15282719811871317559.webp') }}"
                                alt="">
                            <img width="40" src="{{ asset('client/img/payments/1528273241354964734.webp') }}"
                                alt="">
                            <img width="40" src="{{ asset('client/img/payments/15282732803587566708.webp') }}"
                                alt="">
                            <img width="40" src="{{ asset('client/img/payments/15282732983375743706.webp') }}"
                                alt="">
                            <img width="40" src="{{ asset('client/img/payments/15356946304173589516.webp') }}"
                                alt="">
                            <img width="40"
                                src="{{ asset('client/img/payments/161528368123dd7a35ad8708b0dfc74b3630526891.webp') }}"
                                alt="">
                            <img width="40"
                                src="{{ asset('client/img/payments/1647843326019ba9fe0ba5d8aedc45cfd968ded649.webp') }}"
                                alt="">
                            <img width="40"
                                src="{{ asset('client/img/payments/164811478088870ff20e6c63c81ce2f2166e0dae58.webp') }}"
                                alt="">
                            <img width="40"
                                src="{{ asset('client/img/payments/17193084623789a558f934389f07b55391e120d31a.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-center container mx-auto mt-3">
            <p class="text-white">&copy; 2024 <a href="https://yourwebsite.com" class="text-gray-300">الطريفي</a>.
                جميع الحقوق محفوظة.</p>
            <div class="footer_links mt-2">
                <a href="" class="text-sm text-gray-300">الشروط والاحكام</a>
                <span class="text-sm text-gray-300"> | </span>
                <a href="" class="text-sm text-gray-300">مركز الخصوصية</a>
            </div>
        </div>
    </footer>
    <!-- jquery -->
    <script src="{{ asset('client/js/jquery-3.6.0.min.js') }}"></script>
    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- slick -->
    <script type="text/javascript" src="{{ asset('client/js/slick.min.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('client/js/index.js') }}"></script>
    <!-- <script src="{{ asset('client/js/WOW.js') }}"></script> -->
    <script src="{{ asset('client/js/wow.min.js') }}"></script>
    <script src="{{ asset('toastr/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            callback: function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();
        var swiper = new Swiper('.autoplay-carousel', {
            loop: true, // يستمر في التكرار
            autoplay: {
                delay: 3000, // وقت الانتظار بين الشرائح
                disableOnInteraction: false, // الاستمرار حتى عند تفاعل المستخدم
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true, // يتيح النقر على النقاط
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        var swiper = new Swiper(".swiper", {
            slidesPerView: "auto",
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // شاشات كبيرة (مثال: أكبر من أو يساوي 1200 بكسل)
                1200: {
                    slidesPerView: 4,
                },
                // شاشات متوسطة (مثال: بين 768 و 1199 بكسل)
                768: {
                    slidesPerView: 3,
                },
                // شاشات صغيرة (أقل من 768 بكسل)
                0: {
                    slidesPerView: 3,
                },
            },
        });



        $(document).ready(function () {
    $('.category-link').on('click', function (e) {
        e.preventDefault();

        const categoryId = $(this).data('id');
        const productsContainer = $('#products-container');

        // تنظيف الحاوية وعرض رسالة انتظار
        productsContainer.html('<p class="text-gray-500 text-center w-full">جاري تحميل المنتجات...</p>');

        // جلب البيانات باستخدام AJAX
        $.ajax({
            url: `/categories/${categoryId}/products`,
            method: 'GET',
            success: function (response) {
                if (response && response.products) {
                    const products = response.products;

                    // تفريغ الحاوية وعرض المنتجات
                    productsContainer.empty();

                    if (products.length > 0) {
                        products.forEach(product => {
                            productsContainer.append(`
                                <a href="#"
                                   class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                                    <p class="mt-2 text-center">${product.name}</p>
                                </a>
                            `);
                        });
                    } else {
                        productsContainer.html('<p class="text-gray-500 text-center w-full">لا توجد منتجات لهذا القسم.</p>');
                    }
                } else {
                    productsContainer.html('<p class="text-red-500 text-center w-full">حدث خطأ في جلب البيانات من الخادم.</p>');
                }
            },
            error: function () {
                productsContainer.html('<p class="text-red-500 text-center w-full">حدث خطأ أثناء جلب المنتجات.</p>');
            }
        });
    });
});

    </script>
    @yield('js')
</body>

</html>
