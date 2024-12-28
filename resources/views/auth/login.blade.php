<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- Material Tailwind CSS -->
    <link href="https://unpkg.com/@material-tailwind/html@latest/styles.css" rel="stylesheet" />
    <!-- Open Graph Tags -->
    <meta property="og:title" content="متجر الطريفي " />
    <meta property="og:description" content="اكتشف مجموعة متنوعة من المنتجات بجودة عالية." />
    <meta property="og:image" content="{{ asset('client/img/logo.jpg') }}" />
    <meta name="keywords" content="منتجات, تسوق, متجر إلكتروني, الطريفي, AlTRIYFI ,Ecommerce" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="login.html" />

    <!-- Robots.txt and Sitemap -->
    <link rel="sitemap" type="application/xml" href="login.html" />

</head>

<body>
    <div class='cursor' id="cursor"></div>
    <div class='cursor2' id="cursor2"></div>
    <div class='cursor3' id="cursor3"></div>
    <!-- categories popup -->
    <div
        class="main_popup fixed top-0 bottom-0 left-0 right-0 bg-purple-800 bg-opacity-35 flex justify-center items-center z-40">

        <div class="categoriesPopup z-50 bg-white w-4/6 p-5 rounded-md flex justify-between items-start h-96">
            <div class="overflow-y-auto flex flex-col categoriesList w-1/3 h-full">
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">احذية</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">ملابس
                    نسائية</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">ملابس
                    رجال</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">ملابس
                    اطفال</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">ادوات
                    مطبخ</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">مستلزمات
                    تجميل</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">اكسسوارات</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">الكترونيات</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">العاب</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">هواتف</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">سيارات</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">فزب</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">اكسسوارات</a>
                <a href=""
                    class="transition-all duration-200 text-sm w-full px-1 py-3 hover:bg-purple-800 hover:text-white">مستلزمات
                    تجميل</a>

            </div>
            <div class="categoriesShow w-screen h-full overflow-y-auto flex flex-wrap justify-around gap-3 p-3">
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
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
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>
                <a href=""
                    class="categoriesShowIcon flex flex-col items-center justify-start h-40 w-2/5 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{ asset('client/img/461544166_538356362176031_8197690950992023395_n.jpg') }}"
                        width="100%" class="rounded-lg h-32" alt="">
                    <p class="mt-2">سجادة صلاة</p>
                </a>


            </div>
        </div>
    </div>
    <!-- header -->
    <header class="flex flex-col justify-between items-center shadow-md fixed top-0 left-0 right-0 bg-white z-50">
        <div class="container mx-auto  topHeader flex justify-between items-center w-full">
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
                <a class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                        class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                        height="24px" viewBox="0 -960 960 960" width="24px">
                        <path
                            d="M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Zm0-82q26-36 45-75t31-83H404q12 44 31 83t45 75Zm-104-16q-18-33-31.5-68.5T322-320H204q29 50 72.5 87t99.5 55Zm208 0q56-18 99.5-55t72.5-87H638q-9 38-22.5 73.5T584-178ZM170-400h136q-3-20-4.5-39.5T300-480q0-21 1.5-40.5T306-560H170q-5 20-7.5 39.5T160-480q0 21 2.5 40.5T170-400Zm216 0h188q3-20 4.5-39.5T580-480q0-21-1.5-40.5T574-560H386q-3 20-4.5 39.5T380-480q0 21 1.5 40.5T386-400Zm268 0h136q5-20 7.5-39.5T800-480q0-21-2.5-40.5T790-560H654q3 20 4.5 39.5T660-480q0 21-1.5 40.5T654-400Zm-16-240h118q-29-50-72.5-87T584-782q18 33 31.5 68.5T638-640Zm-234 0h152q-12-44-31-83t-45-75q-26 36-45 75t-31 83Zm-200 0h118q9-38 22.5-73.5T376-782q-56 18-99.5 55T204-640Z" />
                    </svg></a>
                <a class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                        class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                        height="24px" viewBox="0 -960 960 960" width="24px">
                        <path
                            d="M440-120v-80h320v-284q0-117-81.5-198.5T480-764q-117 0-198.5 81.5T200-484v244h-40q-33 0-56.5-23.5T80-320v-80q0-21 10.5-39.5T120-469l3-53q8-68 39.5-126t79-101q47.5-43 109-67T480-840q68 0 129 24t109 66.5Q766-707 797-649t40 126l3 52q19 9 29.5 27t10.5 38v92q0 20-10.5 38T840-249v49q0 33-23.5 56.5T760-120H440Zm-80-280q-17 0-28.5-11.5T320-440q0-17 11.5-28.5T360-480q17 0 28.5 11.5T400-440q0 17-11.5 28.5T360-400Zm240 0q-17 0-28.5-11.5T560-440q0-17 11.5-28.5T600-480q17 0 28.5 11.5T640-440q0 17-11.5 28.5T600-400Zm-359-62q-7-106 64-182t177-76q89 0 156.5 56.5T720-519q-91-1-167.5-49T435-698q-16 80-67.5 142.5T241-462Z" />
                    </svg></a>
                <a class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
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
    <main class="flex justify-center items-center p-8 my-20">
        <div class="loginCard w-full  lg:w-1/2 md:w-1/2 wow fadeInUp">
            <p class="text-2xl mb-7 text-center font-medium">تسجيل الدخول/تسجيل</p>
            <form method="POST" action="{{ route('login') }}">
               @csrf
                <label for="">رقم الموبايل أو عنوان البريد الإلكتروني:</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus
                    autocomplete="username" class="w-full mt-3 focus:border-purple-800" name=""
                    value="">

                <label for="" class="mt-5">كلمة المرور :</label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password">
                <button type="submit"
                    class="bg-purple-800 text-white transition-all duration-200 w-full py-3 mt-5 hover:bg-purple-700">متابعة</button>
                <p
                    class="mt-5 text-gray-600 text-sm text-center or relative after:h-0.5 after:bg-purple-800 after:w-32 md:after:w-48 after:absolute after:top-3 after:left-0 before:h-0.5 before:bg-purple-800 before:w-32 md:before:w-48 before:absolute before:top-3 before:right-0">
                    او</p>
                <div class="socialBtns">
                    <button
                        class="bg-white border border-purple-800 text-purple-800 text-2xl transition-all duration-200 font-medium w-full py-3 mt-5 hover:bg-purple-700 hover:text-white hover:border-none"><i
                            class="fab fa-google"></i> <span class="text-base">متابعة من
                            خلال
                            Google</span></button>
                    <button
                        class="bg-white border border-purple-800 text-purple-800 text-2xl transition-all duration-200 font-medium w-full py-3 mt-5 hover:bg-purple-700 hover:text-white hover:border-none"><i
                            class="fab fa-facebook"></i> <span class="text-base">متابعة من
                            خلال
                            Facebook</span></button>
                </div>
                <div class="w-40 mx-auto my-4">
                    <select id="select-version" name="version"
                        class="w-full p-3 mt-1 text-gray-700 bg-white border rounded-lg shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                        <option value="">Bahrine</option>
                        <option value="">Paletine</option>
                        <option value="">Eygpt</option>
                        <option value="">Algiria</option>
                        <option value="">Usa</option>
                    </select>
                </div>
            </form>
            <div class="paragraph w-full flex justify-center my-4">
                <p class="w-1/2 text-center text-sm font-light text-gray-500">بالمتابعة، فإنك توافق على
                    <a href="" class="text-purple-800">سياسة الخصوصية وملفات تعريف الارتباط و الشروط
                        والأحكام</a> من متجر الطريفي
                </p>
            </div>
        </div>
    </main>
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
                            <img width="40"
                                src="{{ asset('client/img/payments/15282719811871317559.webp') }}"
                                alt="">
                            <img width="40" src="{{ asset('client/img/payments/1528273241354964734.webp') }}"
                                alt="">
                            <img width="40"
                                src="{{ asset('client/img/payments/15282732803587566708.webp') }}"
                                alt="">
                            <img width="40"
                                src="{{ asset('client/img/payments/15282732983375743706.webp') }}"
                                alt="">
                            <img width="40"
                                src="{{ asset('client/img/payments/15356946304173589516.webp') }}"
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
    </script>
</body>

</html>
