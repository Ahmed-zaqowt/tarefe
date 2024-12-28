
@extends('clinet.master')


@section('content')


<main class="mt-28">
    <!-- slider images -->
    <section class="container mx-auto flex flex-col justify-between items-center gap-4 lg:flex-row">
            <!-- اهم التريندات -->
            <div class="hidden importantTrends w-1/4 bg-purple-600 p-2 rounded-lg lg:block">
                    <div class="lowPriceTitle my-2">
                            <a href="#" class="text-white">اهم التريندات</a>
                    </div>
                    <div class="lowPriceCards flex flex-wrap gap-2 justify-center items-center">

                        @foreach ($trends as $trend)


                            <div class="lowPriceCard rounded-md h-40 relative bg-cover"
                                    style="background-image: url({{ $trend->image }});">
                                    <div
                                            class="price absolute bottom-4 left-4 p-1 rounded-xl text-sm bg-white">
                                            <span>{{ $trend->price }}</span>SR
                                    </div>
                            </div>
                            @endforeach
                    </div>
            </div>

            <!-- slider -->
            <div class="swiper-container autoplay-carousel relative overflow-hidden w-1/2 h-96 rounded-lg">
                    <div class="swiper-wrapper lg:w-full">
                            <div class="swiper-slide">
                                    <img src="{{asset('client/img/slide31.jpg')}}" alt="Slide 1"
                                            class="w-full h-full object-cover">
                            </div>
                            <div class="swiper-slide">
                                    <img src="{{asset('client/img/slide5.jpg')}}" alt="Slide 2"
                                            class="w-full h-full object-cover">
                            </div>
                            <div class="swiper-slide">
                                    <img src="{{asset('client/img/slide31.jpg')}}" alt="Slide 3"
                                            class="w-full h-full object-cover">
                            </div>
                    </div>
                    <!-- Add btns -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
            </div>
            <!-- اهم التريندات -->
            <div class="block importantTrends w-1/4 bg-purple-600 p-2 rounded-lg lg:hidden">
                    <div class="lowPriceTitle my-2">
                            <a href="#" class="text-white">اهم التريندات</a>
                    </div>
                    <div class="lowPriceCards flex flex-wrap gap-2 justify-center items-center">
                            <div class="lowPriceCard rounded-md h-40 relative bg-cover"
                                    style="background-image: url('{{asset('client/img/461327522_536110705733930_3748365336830084795_n.jpg')}}');">
                                    <div
                                            class="price absolute bottom-4 left-4 p-1 rounded-xl text-sm bg-white">
                                            <span>17</span>.20 SR
                                    </div>
                            </div>
                            <div class="lowPriceCard rounded-md h-40 relative bg-cover"
                                    style="background-image: url('{{asset('client/img/461327522_536110705733930_3748365336830084795_n.jpg')}}');">
                                    <div
                                            class="price absolute bottom-4 left-4 p-1 rounded-xl text-sm bg-white">
                                            <span>17</span>.20 SR
                                    </div>
                            </div>
                            <div class="lowPriceCard rounded-md h-40 relative bg-cover"
                                    style="background-image: url('{{asset('client/img/461327522_536110705733930_3748365336830084795_n.jpg')}}');">
                                    <div
                                            class="price absolute bottom-4 left-4 p-1 rounded-xl text-sm bg-white">
                                            <span>17</span>.20 SR
                                    </div>
                            </div>
                            <div class="lowPriceCard rounded-md h-40 relative bg-cover"
                                    style="background-image: url('{{asset('client/img/461327522_536110705733930_3748365336830084795_n.jpg')}}');">
                                    <div
                                            class="price absolute bottom-4 left-4 p-1 rounded-xl text-sm bg-white">
                                            <span>17</span>.20 SR
                                    </div>
                            </div>
                            <div class="lowPriceCard rounded-md h-40 relative bg-cover"
                                    style="background-image: url('{{asset('client/img/461327522_536110705733930_3748365336830084795_n.jpg')}}');">
                                    <div
                                            class="price absolute bottom-4 left-4 p-1 rounded-xl text-sm bg-white">
                                            <span>17</span>.20 SR
                                    </div>
                            </div>
                            <div class="lowPriceCard rounded-md h-40 relative bg-cover"
                                    style="background-image: url('{{asset('client/img/461327522_536110705733930_3748365336830084795_n.jpg')}}');">
                                    <div
                                            class="price absolute bottom-4 left-4 p-1 rounded-xl text-sm bg-white">
                                            <span>17</span>.20 SR
                                    </div>
                            </div>
                    </div>
            </div>
            <!-- اسعار منخفضة -->
            <div class="lowPrice w-1/4 bg-purple-600 p-2 rounded-lg">
                    <div class="lowPriceTitle my-2">
                            <a href="#" class="text-white">أسعار منخفضة</a>
                    </div>
                    <div class="lowPriceCards flex flex-wrap gap-2 justify-center items-center">
                        @foreach ($prices_low as $price)
                        <div class="lowPriceCard rounded-md h-40 relative bg-cover"
                        style="background-image: url('{{ $price->image }}');">
                        <div
                                class="price absolute bottom-4 left-4 p-1 rounded-xl text-sm bg-white">
                                <span>{{ $price->price }}</span> SR
                        </div>
                </div>
                        @endforeach


                    </div>
            </div>
    </section>
    <!-- rounded images -->
    <section class="my-8 container mx-auto">
            <div
                    class="categoriesShow w-full h-full overflow-y-auto flex flex-wrap justify-around gap-3 p-3">
                    @foreach ($mains as $main)
                    <a href=""
                    class="categories_ShowIcon flex flex-col items-center justify-start h-40 w-1/6 transition-all duration-200 hover:scale-105 sm:w-1/6">
                    <img src="{{  $main->image}}"
                            width="100%" class="rounded-full h-28 w-28" alt="">
                    <p class="mt-2 text-center">{{ $main->name }}</p>
                    </a>
                    @endforeach





            </div>
    </section>

    <!-- اهم التريندات -->
    <section class="container mx-auto ImportantTrends py-5 px-3 rounded-md mt-9 bg-purple-800">
            <div class="container mx-auto">
                    <div class="flex justify-between items-start pl-0 md:items-center sm:pl-7">
                            <h3
                                    class="hover-target text-white text-lg font-bold text-center mb-7 relative md:text-3xl after:w-3/5 after:h-1 after:absolute after:bg-white after:-bottom-3 md:after:-bottom-5 after:start-0">
                                    العروض الكبرى</h3>
                            <a href=""
                                    class="hover-target text-white transition-all duration-200 flex flex-row-reverse items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" height="24px"
                                            viewBox="0 -960 960 960" width="24px" fill="#fff">
                                            <path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z" />
                                    </svg>عرض
                                    المزيد</a>
                    </div>
                    <p class="mt-2 mb-5 text-sm text-white md:text-base">منتجات جذابة ذات جودة ممتازة بأفضل
                            الاسعار بأسعار خيالية
                            مع تخفيضات بنسبة 70% لا تفوت الفرصة و اشتري الان</p>

                    <div
                            class="flex flex-wrap justify-between items-center gap-5 gap-x-3 mb-7 md:flex-nowrap">

                            @foreach ($coupons as $coupon)
                            <a href="" data-wow-duration=".3s"
                            class="wow bounceInRight card w-full text-decoration-none rounded-tr-md rounded-tl-md relative overflow-hidden md:w-1/4">
                            <div class="image">
                                    <img src="{{ $coupon->image }}"
                                            class="w-full rounded-tr-md rounded-tl-md normal-img"
                                            alt="">
                                    <img src="{{asset('client/img/461287169_538409252170742_6211862290852117244_n.jpg')}}"
                                            class="w-full rounded-tr-md rounded-tl-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                            alt="">
                            </div>
                            <div class="details p-3 bg-white">
                                    <p class="text-xl font-bold">{{ $coupon->name }}</p>
                                    <p class="text-gray-400 text-sm my-2">{{ $coupon->description }}</p>
                                    <p class="text-sm text-purple-900">{{ $coupon->price }}SR</p>
                            </div>
                    </a>
                            @endforeach

                    </div>

            </div>



    </section>

    <!-- big panner -->
    <section class="my-8">
            <h1 class="text-center text-4xl hover-target font-medium mb-7 bg-gradient-to-r from-purple-400 via-purple-600 to-purple-900 bg-clip-text text-transparent"
                    style="font-family:'Oswald', sans-serif;"> #Dailydrops </h1>
            <div class="my-5 container mx-auto">
                    <img src="{{asset('client/img/lll.webp')}}" alt="">
            </div>
    </section>
    <!-- tabs product -->
    <section class="tabs_product container my-8 mx-auto">
            <div class="tabs_buttons flex justify-center items-center gap-5">
                    <button
                            class="btn_one text-gray-400 transition-all duration-200 font-medium text-xl active">الأكثر
                            مبيعا</button>
                    <button
                            class="btn_two text-gray-400 transition-all duration-200 font-medium text-xl">المبيعات</button>
            </div>
            <div class="mt-7 view_tab1 flex flex-wrap justify-center items-center gap-5">
                  @foreach ($best_seller as $best)
                  <a href=""
                  class="tab_card w-2/5 h-2/4 text-decoration-none rounded-md relative overflow-hidden md:w-1/6">
                  <div
                          class="absolute top-0 left-0 right-0 rounded-tr-md rounded-tl-md bg-red-600 p-2 text-white text-xs">
                          عروض كبرى تنتهي <span class="time"></span>
                  </div>
                  <div class="image">
                          <img src="{{$best->image}}"
                                  class="w-full rounded-md normal-img" alt="">
                          <img src="{{asset('client/img/461287169_538409252170742_6211862290852117244_n.jpg')}}"
                                  class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                  alt="">
                  </div>
                  <div
                          class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                          <p class="text-xl text-purple-800 font-bold">{{ $best->name }}</p>
                          <div class="flex justify-between items-center">
                                  <p class="text-sm text-purple-900">{{ $best->price }}SR</p>
                                  <div class="buttons flex items-center gap-2">
                                          <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                          class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                          height="24px" viewBox="0 -960 960 960"
                                                          width="24px" fill="#5f6368">
                                                          <path
                                                                  d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                  </svg></button>
                                          <button class="" href=""><svg
                                                          xmlns="http://www.w3.org/2000/svg"
                                                          class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                          height="24px" viewBox="0 -960 960 960"
                                                          width="24px">
                                                          <path
                                                                  d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                  </svg></button>
                                  </div>
                          </div>
                  </div>
          </a>
                  @endforeach


            </div>
            <div class="mt-7 view_tab2 flex flex-wrap justify-center items-center gap-5">
@foreach ($selles as  $s)
<a href=""
class="tab_card  w-2/5 h-2/4 text-decoration-none rounded-md relative overflow-hidden md:w-1/6">
<div class="image">
        <img src="{{ $s->image  }}"
                class="w-full rounded-md normal-img" alt="">
        <img src="{{asset('client/img/461327522_536110705733930_3748365336830084795_n.jpg')}}"
                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                alt="">
</div>
<div
        class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
        <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
        <div class="flex justify-between items-center">
                <p class="text-sm text-purple-900">{{ $s->price }}SR</p>
                <div class="buttons flex items-center gap-2">
                        <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                        height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#5f6368">
                                        <path
                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                </svg></button>
                        <button class="" href=""><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                        height="24px" viewBox="0 -960 960 960"
                                        width="24px">
                                        <path
                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                </svg></button>
                </div>
        </div>
</div>
</a>
@endforeach


            </div>


    </section>

    <!-- fashioned -->
    <section class="fashioned  mt-8 py-8">
            <div class="container mx-auto">
                    <div class="flex justify-between items-start pl-0 md:items-center sm:pl-7">
                            <h1
                                    class="hover-target text-4xl font-bold text-center mb-0 relative after:w-3/5 after:h-1 after:absolute after:bg-white after:-bottom-5 after:start-0 md:mb-7">
                                    الطراز</h1>
                            <a href=""
                                    class="hover-target transition-all duration-200 hover:text-purple-900 flex flex-row-reverse items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" height="24px"
                                            viewBox="0 -960 960 960" width="24px" fill="#000">
                                            <path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z" />
                                    </svg>عرض
                                    الكل</a>
                    </div>
                    <p class="hover-target mt-2 mb-5 font-medium text-sm md:text-xl">منتجات جذابة ذات جودة
                            ممتازة بأفضل
                            الاسعار بأسعار خيالية
                            مع تخفيضات بنسبة 70% لا تفوت الفرصة و اشتري الان</p>

                    <div class="flex justify-between items-center gap-5 mb-7">
                        @foreach ($terazs as $teraz)
                        <button
                        class="fashioned_card  w-2/6 h-3/4 text-decoration-none rounded-md relative overflow-hidden md:w-1/4">
                        <div
                                class="layer transition-all duration-200 absolute top-0 right-0 bottom-0 left-0 bg-purple-800 opacity-0 flex justify-center items-center">
                                <p class="text-white font-bold">تسوقي هذه المنتجات</p>
                        </div>
                        <div class="image">
                                <img src="{{ $teraz->image }}"
                                        class="w-full rounded-md normal-img" alt="">
                        </div>

                </button>
                        @endforeach



                    </div>
                    <div class="flex justify-center items-center">
                            <a href=""
                                    class="mx-auto text-white bg-purple-800 py-4 px-10  transition-all duration-200 hover:bg-white hover:text-purple-800">عرض
                                    المزيد</a>
                    </div>
            </div>



    </section>
</main>



@stop















