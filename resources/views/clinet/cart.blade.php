<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Open Graph Tags -->
    <meta property="og:title" content="متجر الطريفي " />
    <meta property="og:description" content="اكتشف مجموعة متنوعة من المنتجات بجودة عالية." />
    <meta property="og:image" content="{{ asset('client/img/logo.jpg') }}" />
    <meta name="keywords" content="منتجات, تسوق, متجر إلكتروني, الطريفي, AlTRIYFI ,Ecommerce" />
    <title>متجر الطريفي</title>
    <link rel="icon" href="{{ asset('client/img/logo.jpg') }}">
    <link href="{{ asset('client/css/output.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('client/css/animate.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Canonical Tag -->
    <link rel="canonical" href="cart.html" />

    <!-- Robots.txt and Sitemap -->
    <link rel="sitemap" type="application/xml" href="cart.html" />

</head>

<body class="bg-gray-100">
    <div class='cursor' id="cursor"></div>
    <div class='cursor2' id="cursor2"></div>
    <div class='cursor3' id="cursor3"></div>
    <!-- header -->
    <header class="flex flex-col justify-between items-center shadow-md fixed top-0 left-0 right-0 bg-white z-50">
        <div class="container mx-auto px-3 topHeader flex justify-between items-center w-full md:p-0">
            <div class="logo flex justify-start items-center">
                <img src="{{ asset('client/img/logo trefe.svg') }}" class="w-24 md:w-40" alt="">
                <form action="" class="w-1/3 relative hidden md:block">
                    <select name="" id="filter" class="rounded-md">
                        <option value="pal">يتم الشحن الى Palestine</option>
                        <option value="uea">يتم الشحن الى UEA</option>
                        <option value="alj">يتم الشحن الى Aljeria</option>
                        <option value="eyg">يتم الشحن الى Eygpt</option>
                        <option value="kew">يتم الشحن الى Kewait</option>
                    </select>
                </form>
            </div>
            <div class="icons flex flex-row-reverse justify-between items-center gap-5">
                <a class="text-xs md:text-sm" href="">مواصلة التسوق</a>
                <div class="safty">
                    <p class="hidden justify-start items-center gap-1  text-xs font-medium md:flex md:text-sm md:gap-2">
                        <span
                            class="bg-purple-800 w-8 h-8 rounded-full flex justify-center items-center md:w-10 md:h-10"><svg
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6"
                                viewBox="0 -960 960 960" fill="#fff">
                                <path
                                    d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z" />
                            </svg> </span>خاصية الدفع الآمن</p>
                    <p class="flex justify-start items-center gap-1 font-medium text-xs md:hidden md:text-sm md:gap-2">
                        <span
                            class="bg-purple-800 w-8 h-8 rounded-full flex justify-center items-center md:w-10 md:h-10"><svg
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6"
                                viewBox="0 -960 960 960" fill="#fff">
                                <path
                                    d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z" />
                            </svg> </span>دفع آمن</p>
                </div>


            </div>
        </div>
    </header>
    <div class="loader z-50 flex justify-center items-center fixed top-0 left-0 bottom-0 right-0 bg-purple-800">
        <img src="{{ asset('client/img/logo_trefe_ابيض-removebg-preview.png') }}" width="30%" alt="">
    </div>
    <main class="mt-20">
        <div class="path flex justify-center items-center container mx-auto pt-6 pb-2 gap-2">
            <button class="text-sm text-gray-500" onclick="goToNextStep(1)">حقيبة التسوق</button>
            <span class="text-gray-500"> > </span>
            <button class="text-sm text-gray-500" onclick="goToNextStep(2)">تأكيد الطلب</button>
            <span class="text-gray-500"> > </span>
            <button class="text-sm text-gray-500" onclick="goToNextStep(3)">دفع</button>
        </div>
        <div class="checkout-steps mx-auto w-full">
            <!-- حقيبة التسوق -->
            <div id="step1" class="step active">
                <div class="container mx-auto mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-[1fr,3fr] gap-1">
                        <div
                            class="rounded-lg p-2 h-fit overflow-y-auto md:sticky top-20 bottom-0 start-0 wow fadeInRight">
                            <div class="px-2 py-3 bg-white rounded-md shadow-md shadow-gray-300">
                                <h1 class="text-start text-lg text-purple-800">موجز الطلب</h1>
                                <p class="text-sm text-gray-500">سيتم تأكيد السعر النهائي عند الطلب</p>

                                <div class="minPrice flex justify-between items-start w-full my-3">
                                    <p class="text-black">السعر المقدر:</p>
                                    <div class="text-end">
                                        <p class="text-black">SR51.23</p>
                                        <p class="text-sm text-purple-800">تم توفير: SR18.15</p>
                                        <p class="text-sm text-black">مكافأة 13نقاط AlTRIYFI</p>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-2 mt-2 bg-purple-800 text-white transition-all duration-200 hover:bg-purple-700"
                                    onclick="completeStep(1)">اشتري الأن <span>(2)</span></button>
                            </div>
                            <div class="naqbal p-3 bg-white mt-3 rounded-md shadow-md shadow-gray-300">
                                <p class="font-medium text-purple-800">نقبل</p>
                                <div class="flex items-center flex-wrap gap-3 mt-2">
                                    <img width="40"
                                        src="{{ asset('client/img/payments/15282719811871317559.webp') }}"
                                        alt="">
                                    <img width="40"
                                        src="{{ asset('client/img/payments/1528273241354964734.webp') }}"
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
                        <div class="rounded-lg p-4 top-20 bottom-0 start-0 wow fadeInLeft">
                            <div class="flex flex-col justify-between items-stretch gap-1 md:flex-row">
                                <div
                                    class="flexCar w-full shadow-md shadow-gray-300 bg-white rounded-md p-3 md:w-1/2 flex flex-col">
                                    <div class="flex justify-between items-center w-full">
                                        <p class="flex justify-start items-center gap-2 text-purple-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                <path
                                                    d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z" />
                                            </svg>
                                            رسم الشحن
                                        </p>
                                    </div>
                                    <p class="mt-3 mb-2 text-sm text-black">إشتري بمبلغ SR396.93 لتستمتعي <span
                                            class="font-bold">بالشحن
                                            المجاني</span></p>
                                </div>

                            </div>
                            <div
                                class="prodCard shadow-md shadow-gray-300 bg-white px-3 py-4 rounded-md my-3 flex justify-start items-center gap-3">
                                <div class="form">
                                    <form action="">
                                        <label for=""
                                            class="font-medium text-sm text-black md:text-base md:font-bold">

                                            كل المنتجات ({{ $carts->count() }})
                                        </label>
                                </div>

                            </div>
                            <div class="flex flex-col gap-2">
                                @foreach ($carts as $p)
                                    <div
                                        class="allProdCard shadow-md shadow-gray-300 bg-white p-3 rounded-md flex flex-col justify-start gap-3">
                                        <label for=""
                                            class="font-bold flex justify-start items-center gap-2 text-black">

                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                <path
                                                    d="M841-518v318q0 33-23.5 56.5T761-120H201q-33 0-56.5-23.5T121-200v-318q-23-21-35.5-54t-.5-72l42-136q8-26 28.5-43t47.5-17h556q27 0 47 16.5t29 43.5l42 136q12 39-.5 71T841-518Zm-272-42q27 0 41-18.5t11-41.5l-22-140h-78v148q0 21 14 36.5t34 15.5Zm-180 0q23 0 37.5-15.5T441-612v-148h-78l-22 140q-4 24 10.5 42t37.5 18Zm-178 0q18 0 31.5-13t16.5-33l22-154h-78l-40 134q-6 20 6.5 43t41.5 23Zm540 0q29 0 42-23t6-43l-42-134h-76l22 154q3 20 16.5 33t31.5 13ZM201-200h560v-282q-5 2-6.5 2H751q-27 0-47.5-9T663-518q-18 18-41 28t-49 10q-27 0-50.5-10T481-518q-17 18-39.5 28T393-480q-29 0-52.5-10T299-518q-21 21-41.5 29.5T211-480h-4.5q-2.5 0-5.5-2v282Zm560 0H201h560Z" />
                                            </svg> {{ $p->product->company->name }}
                                        </label>
                                        <div class="flex justify-start items-center gap-2">

                                            </form>
                                            <div class="flex justify-start items-start gap-2">
                                                <img src="{{ asset('client/img/460963029_536110159067318_5162081313794050130_n.jpg') }}"
                                                    style="width: 120px;" alt="">
                                                <div class="flex flex-col">
                                                    <p class="text-xs text-black md:text-sm">{{ $p->product->name }}
                                                        {{ $p->product->description }}</p>
                                                    <p class="text-sm font-bold text-purple-800"><span
                                                            class="line-through font-light text-sm text-black">SR
                                                            {{ $p->product->coupon_id ? $p->product->price - $p->product->coupon->discount_percentage : '' }}</span>
                                                        SR {{ $p->product->price }}</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                            <p class="mt-2 text-sm text-black">بعض المنتجات لا يمكن إرجاعها/ استمتع بالخصومات.
                                <a href="" class="text-purple-800">عرض</a>
                            </p>
                        </div>
                    </div>
                    <div class="end bg-white rounded-md my-5 px-3 py-5 wow fadeInUp">
                        <h1 class="text-3xl text-center mb-7 text-purple-800">قد ترغب فى ملء</h1>
                        <div class="flex flex-wrap justify-between items-center gap-2 mt-4">
                            @foreach ($products as $pro)
                            <a href=""
                            class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                            <div class="image">
                                <img src="{{ $pro->image }}"
                                    class="w-full rounded-md normal-img" alt="">
                                <img src=""
                                    class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                    alt="">
                            </div>
                            <div
                                class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                <p class="text-xl text-purple-800 font-bold">{{ $pro->name }}</p>
                                <div class="flex justify-between items-center">
                                    <p class="text-sm text-purple-900">{{ $pro->price }}SR</p>
                                    <div class="buttons flex items-center gap-2">
                                        <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                height="24px" viewBox="0 -960 960 960" width="24px"
                                                fill="#5f6368">
                                                <path
                                                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                            </svg></button>
                                        <button class="" href=""><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                height="24px" viewBox="0 -960 960 960" width="24px">
                                                <path
                                                    d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                            </svg></button>
                                    </div>
                                </div>
                            </div>
                        </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            <!-- تأكيد الطلب -->
            <div id="step2" class="step hidden">
                <div class="container mx-auto mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-[1fr,3fr] gap-1">
                        <div
                            class="rounded-lg p-2 h-fit wow fadeInRight overflow-y-auto md:sticky top-20 bottom-0 start-0">
                            <div class="px-2 py-3 bg-white rounded-md shadow-md shadow-gray-300">
                                <h1 class="text-start text-lg text-purple-800">موجز الطلب</h1>
                                <div class="Check w-full overflow-y-auto my-2">

                                    <div class="flex justify-between items-center">
                                        <p class="text-sm text-black">إجمالي المبلغ:</p>
                                        <p class="font-medium text-black">SR90.00</p>
                                    </div>

                                </div>
                            </div>



                            <div class="ConfirmRequest px-2 py-3 my-2 bg-white rounded-md shadow-md shadow-gray-300">
                                <form action="" class="w-full">

                                    <button
                                        class="bg-purple-800 text-white mt-3 py-2 w-full rounded-md transition-all duration-200 hover:bg-purple-700"
                                        type="button" onclick="completeStep(2)">تأكيد الطلب</button>
                                </form>
                            </div>

                        </div>
                        <div class="rounded-lg py-2 start-0 wow fadeInLeft">
                            <div class="showForm w-full px-3 py-4 bg-white rounded-md shadow-md shadow-gray-300">
                                <p class="font-medium text-purple-800">عنوان الشحن</p>
                                <div
                                    class="mailStyle rounded-md border border-purple-800 p-3 flex justify-between items-center mt-3">
                                    <div class="dataForm">
                                        <div class="flex justify-start items-center gap-2">
                                            <p class="font-bold text-black">Haitham soso</p>
                                            <p class="text-black">772587432</p>
                                        </div>
                                        <p class="text-black">Zahran St, د. الثالث، ، dkdkd</p>
                                        <p class="text-black">منطقة زهران Amman/عمّان Amman Governorate/محافظة العاصمة
                                            Jordan 999045</p>
                                    </div>
                                    <button
                                        class="p-2 bg-purple-800 text-white rounded-md text-sm transition-all duration-200 hover:border hover:border-purple-800 hover:bg-white hover:text-purple-800">تعديل
                                        العنوان</button>
                                </div>
                            </div>
                            <form action="" method=""
                                class="form_card w-full px-3 py-4 bg-white rounded-md shadow-md shadow-gray-300">
                                <p class="font-medium text-purple-800">عنوان الشحن</p>
                                <div class="select mt-4">
                                    <label for="from" class="text-gray-400 text-sm">موقع</label>
                                    <select name="" id="from"
                                        class="w-full rounded-md mt-2 py-3 border-gray-300 text-black">
                                        <option selected disabled>يرجى اختيار موقعك*</option>
                                        <option value="">PAL</option>
                                        <option value="">PAL</option>
                                        <option value="">PAL</option>
                                        <option value="">PAL</option>
                                        <option value="">PAL</option>
                                        <option value="">PAL</option>
                                    </select>
                                </div>
                                <div class="my-2 flex justify-between items-center gap-2">
                                    <input type="text" name="" id=""
                                        class="w-1/2 py-3 rounded-md border-gray-300" placeholder="الأسم*">
                                    <input type="text" name="" id=""
                                        class="w-1/2 py-3 rounded-md border-gray-300" placeholder="أسم العائلة*">
                                </div>
                                <div class="my-2">
                                    <input type="text" name="" id=""
                                        class="py-3 rounded-md border-gray-300 w-full" placeholder="رقم الهاتف*">
                                </div>
                                <div class="my-2">
                                    <input type="text" name="" id=""
                                        class="py-3 rounded-md border-gray-300 w-full"
                                        placeholder="رقم الهاتف البديل*">
                                </div>
                                <div class="my-2 flex justify-between items-center gap-2">
                                    <input type="text" name="" id=""
                                        class="w-1/2 py-3 rounded-md border-gray-300" placeholder="دولة/مقاطعة*">
                                    <input type="text" name="" id=""
                                        class="w-1/2 py-3 rounded-md border-gray-300" placeholder="المدينة*">
                                </div>
                                <div class="my-2">
                                    <input type="text" name="" id=""
                                        class="py-3 rounded-md border-gray-300 w-full" placeholder="منطقة*">
                                </div>
                                <div class="my-2">
                                    <input type="text" name="" id=""
                                        class="py-3 rounded-md border-gray-300 w-full"
                                        placeholder="أسم الشارع/رقم الشارع*">
                                </div>
                                <div class="my-2">
                                    <input type="text" name="" id=""
                                        class="py-3 rounded-md border-gray-300 w-full"
                                        placeholder="تفاصيل العنوان(المنطقة)">
                                </div>
                                <div class="my-2">
                                    <input type="text" name="" id=""
                                        class="py-3 rounded-md border-gray-300 w-full" placeholder="معالم قريبة">
                                </div>
                                <div class="my-2">
                                    <input type="text" name="" id=""
                                        class="py-3 rounded-md border-gray-300 w-full" placeholder="الرمز البريدي*">
                                </div>
                                <div class="my-2">

                                    <div class="btm my-3">

                                        <div class="flex justify-center items-center mt-4">
                                            <button
                                                class="show_dBtn bg-purple-800 text-white py-2 px-10 transition-all duration-200 hover:bg-purple-700"
                                                type="button">حفظ</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <div class="w-full my-3 px-3 py-4 bg-white rounded-md shadow-md shadow-gray-300">
                                <div class="flex justify-between items-center">
                                    <p class="text-purple-800">تفاصيل الطلب</p>
                                    <p>عرض <span>12</span> منتجات</p>
                                </div>
                                <div
                                    class="prod_ my-2 bg-gray-50 flex flex-wrap justify-start items-center gap-2 h-52 overflow-y-auto">
                                    <div class="prod_uct w-1/6">
                                        <img src="{{ asset('client/img/460963029_536110159067318_5162081313794050130_n.jpg') }}"
                                            class="w-32 h-32" alt="">
                                        <p class="my-1 text-black">SR25.21</p>
                                        <div class="flex items-center justify-center">
                                            <button id="decrement" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                -
                                            </button>
                                            <input type="number" id="numberInput" value="0"
                                                class="text-center border border-gray-300 ml-0 w-16 text-purple-600"
                                                readonly />
                                            <button id="increment" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                    <div class="prod_uct w-1/6">
                                        <img src="{{ asset('client/img/460963029_536110159067318_5162081313794050130_n.jpg') }}"
                                            class="w-32 h-32" alt="">
                                        <p class="my-1 text-black">SR25.21</p>
                                        <div class="flex items-center justify-center">
                                            <button id="decrement" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                -
                                            </button>
                                            <input type="number" id="numberInput" value="0"
                                                class="text-center border border-gray-300 ml-0 w-16 text-purple-600"
                                                readonly />
                                            <button id="increment" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                    <div class="prod_uct w-1/6">
                                        <img src="{{ asset('client/img/460963029_536110159067318_5162081313794050130_n.jpg') }}"
                                            class="w-32 h-32" alt="">
                                        <p class="my-1 text-black">SR25.21</p>
                                        <div class="flex items-center justify-center">
                                            <button id="decrement" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                -
                                            </button>
                                            <input type="number" id="numberInput" value="0"
                                                class="text-center border border-gray-300 ml-0 w-16 text-purple-600"
                                                readonly />
                                            <button id="increment" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                    <div class="prod_uct w-1/6">
                                        <img src="{{ asset('client/img/460963029_536110159067318_5162081313794050130_n.jpg') }}"
                                            class="w-32 h-32" alt="">
                                        <p class="my-1 text-black">SR25.21</p>
                                        <div class="flex items-center justify-center">
                                            <button id="decrement" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                -
                                            </button>
                                            <input type="number" id="numberInput" value="0"
                                                class="text-center border border-gray-300 ml-0 w-16 text-purple-600"
                                                readonly />
                                            <button id="increment" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                    <div class="prod_uct w-1/6">
                                        <img src="{{ asset('client/img/460963029_536110159067318_5162081313794050130_n.jpg') }}"
                                            class="w-32 h-32" alt="">
                                        <p class="my-1 text-black">SR25.21</p>
                                        <div class="flex items-center justify-center">
                                            <button id="decrement" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                -
                                            </button>
                                            <input type="number" id="numberInput" value="0"
                                                class="text-center border border-gray-300 ml-0 w-16 text-purple-600"
                                                readonly />
                                            <button id="increment" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                    <div class="prod_uct w-1/6">
                                        <img src="{{ asset('client/img/460963029_536110159067318_5162081313794050130_n.jpg') }}"
                                            class="w-32 h-32" alt="">
                                        <p class="my-1 text-black">SR25.21</p>
                                        <div class="flex items-center justify-center">
                                            <button id="decrement" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                -
                                            </button>
                                            <input type="number" id="numberInput" value="0"
                                                class="text-center border border-gray-300 ml-0 w-16 text-purple-600"
                                                readonly />
                                            <button id="increment" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                    <div class="prod_uct w-1/6">
                                        <img src="{{ asset('client/img/460963029_536110159067318_5162081313794050130_n.jpg') }}"
                                            class="w-32 h-32" alt="">
                                        <p class="my-1 text-black">SR25.21</p>
                                        <div class="flex items-center justify-center">
                                            <button id="decrement" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                -
                                            </button>
                                            <input type="number" id="numberInput" value="0"
                                                class="text-center border border-gray-300 ml-0 w-16 text-purple-600"
                                                readonly />
                                            <button id="increment" class="bg-gray-200 hover:bg-gray-300 p-2">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- الدفع -->
            <div id="step3" class="step hidden">
                <div class="container mx-auto mb-8">

                    <div class="grid grid-cols-1 md:grid-cols-[1fr,3fr] gap-1">
                        <div
                            class="rounded-lg p-2 h-fit wow fadeInRight overflow-y-auto md:sticky top-20 bottom-0 start-0">
                            <div class="px-2 py-3 bg-white rounded-md shadow-md shadow-gray-300">
                                <h1 class="text-start text-lg text-purple-800">موجز الطلب</h1>
                                <div class="Check w-full overflow-y-auto my-2">
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm font-medium text-black">رقم الطلب</p>
                                        <p class="text-sm text-gray-400 line-through">GSHNE4159000VUM</p>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm text-black">سعر الوحدة:</p>
                                        <p class="font-medium text-black line-through">SR90.00</p>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm text-black">إجمالي المبلغ:</p>
                                        <p class="font-medium text-black">SR90.00</p>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm text-black">رسم الشحن:</p>
                                        <p class="font-medium text-black">SR90.00</p>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm text-black">خصم:</p>
                                        <p class="font-medium text-black">SR5.00</p>
                                    </div>
                                    <p class="text-gray-400" style="font-size:13px;">رمز القسيمة: ztsg101725b</p>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm text-black">الاجمالي الكامل:</p>
                                        <p class="font-medium text-2xl text-black">SR15.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-2 py-3 bg-white rounded-md shadow-md shadow-gray-300 my-3">
                                <form action="" class="my-3">
                                    <button class="bg-purple-800 text-white py-2 rounded-md w-full">تأكيد
                                        الطلب</button>
                            </div>


                        </div>
                        <div class="rounded-lg py-2 start-0 wow fadeInLeft">
                            <div class="w-full px-3 py-4 bg-white rounded-md shadow-md shadow-gray-300">
                                <p class="font-medium text-purple-800">عنوان الشحن</p>
                                <div
                                    class="mailStyle rounded-md border border-purple-800 p-3 flex justify-between items-center mt-3">
                                    <div class="dataForm">
                                        <div class="flex justify-start items-center gap-2">
                                            <p class="font-bold text-black">Haitham soso</p>
                                            <p class="text-black">772587432</p>
                                        </div>
                                        <p class="text-black">Zahran St, د. الثالث، ، dkdkd</p>
                                        <p class="text-black">منطقة زهران Amman/عمّان Amman Governorate/محافظة العاصمة
                                            Jordan 999045</p>
                                    </div>
                                    <button
                                        class="p-2 bg-purple-800 text-white rounded-md text-sm transition-all duration-200 hover:border hover:border-purple-800 hover:bg-white hover:text-purple-800">تحرير</button>
                                </div>
                            </div>

                            <div class="w-full px-3 py-4 bg-white rounded-md shadow-md shadow-gray-300 my-3">
                                <p class="font-medium text-purple-800">معلومات البطاقة </p>
                                <p class="text-gray-500" style="font-size:13px">قد تحتوي لقطة الشاشة على معلومات
                                    خاصة. يرجى الحذر من عدم المشاركة.</p>
                                <div class="mailStyle rounded-md border border-gray-200 p-3 mt-3">
                                    <div class="w-fit flex flex-wrap justify-start items-center gap-3">
                                        <img width="50"
                                            src="{{ asset('client/img/payments/15282719811871317559.webp') }}"
                                            alt="">
                                        <img width="50"
                                            src="{{ asset('client/img/payments/1528273241354964734.webp') }}"
                                            alt="">
                                        <img width="50"
                                            src="{{ asset('client/img/payments/15282732803587566708.webp') }}"
                                            alt="">
                                        <img width="50"
                                            src="{{ asset('client/img/payments/15282732983375743706.webp') }}"
                                            alt="">
                                        <img width="50"
                                            src="{{ asset('client/img/payments/15356946304173589516.webp') }}"
                                            alt="">
                                        <img width="50"
                                            src="{{ asset('client/img/payments/161528368123dd7a35ad8708b0dfc74b3630526891.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="my-3">
                                        <div class="form-input">
                                            <label for="" class="text-sm text-black">رقم البطاقة*</label>
                                            <br>
                                            <input type="number" name="" id=""
                                                class="rounded-md">
                                        </div>
                                        <div class="form-input">
                                            <label for="" class="text-sm text-black">إنتهاء
                                                الصلاحية*</label><br>
                                            <div class="flex justify-start items-center gap-3">
                                                <select name="" id=""
                                                    class="rounded-md text-black">
                                                    <option value="" selected disabled>السنة</option>
                                                </select>
                                                <select name="" id=""
                                                    class="rounded-md text-black">
                                                    <option value="" selected disabled>الشهر</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-input">
                                            <label for="" class="text-sm text-black">رقم الأمان*</label><br>
                                            <input type="number" name="" id=""
                                                class="rounded-md" placeholder="CVV/CVC/CID">
                                        </div>
                                        <div class="form-input mt-3">
                                            <label for="" class="text-sm text-black">
                                                <input type="checkbox" name="" id="">
                                                تذكر هذه البطاقة لاستخدامها لاحقا*
                                            </label>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- تم الطلب -->

        </div>
    </main>
    <footer class="bg-purple-800 py-3 px-3 flex flex-col">
        <div class="big_logo flex justify-center items-center">
            <img src="{{ asset('client/img/logo_trefe_ابيض-removebg-preview.png') }}" width="20%"
                alt="">
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
                <h3 class="text-center mb-4 text-lg font-medium md:text-xl">إشتركي مع شي إن لتصلك أخبار الموضة</h3>
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
                            <a href="" class="text-3xl text-purple-800"><i
                                    class="fab fa-instagram"></i></a>
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
    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            callback: function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();
        let currentStep = 1;

        function goToNextStep(step) {
            // Prevent moving to the next step if the current step is not completed
            if (step !== currentStep) {
                alert("يرجى إكمال المرحلة الحالية أولاً.");
                return;
            }

            // إخفاء جميع المراحل
            var steps = document.querySelectorAll('.step');
            steps.forEach(function(stepElement) {
                stepElement.classList.add('hidden');
                stepElement.classList.remove('active');
            });

            // إظهار المرحلة الحالية
            document.getElementById('step' + step).classList.remove('hidden');
            document.getElementById('step' + step).classList.add('active');
        }

        function completeStep(step) {
            // Move to the next step after completing the current one
            currentStep++;
            goToNextStep(currentStep);
        }
    </script>

</body>

</html>
