@extends('clinet.master')
@section('content')
    <main class="mt-28">
        <!-- path -->
        <div class="path flex justify-start items-center container mx-auto pt-6 pb-2 gap-2">
            <a href="" class="text-sm text-gray-500">الصفحة الرئيسية</a><span class="text-sm text-gray-500"> / </span><a
                href="" class="text-sm text-gray-500">
                ملابس نسائية</a>
        </div>
        <div class="container mx-auto mb-8">
            <div class="grid grid-cols-1 md:grid-cols-[1fr,3fr] gap-1">
                @include('clinet.parts.side')
                <div class="rounded-lg p-2 h-fit">
                    <div class="wow bounceIn bg-white p-4 rounded-md shadow-md shadow-gray-500">
                        <h3
                            class="relative text-transparent text-center text-2xl w-fit mx-auto bg-clip-text bg-gradient-to-r from-purple-800 to-purple-500">
                            كوبوناتي
                            <span
                                class="block absolute left-0 -bottom-3 h-1 bg-gradient-to-r from-purple-500 to-purple-800 w-full"></span>
                        </h3>
                        <div class="A_M_content my-8">
                            <!-- tabs product -->
                            <section class="tabs_product container my-8 mx-auto">
                                <div class="tabs_buttons flex justify-start items-center gap-5">
                                    <button
                                        class="btn_one text-gray-400 transition-all duration-200 font-medium active">قسائم
                                        غير مستخدمة</button>
                                    <button
                                        class="btn_two text-gray-400 transition-all duration-200 font-medium">المستعملة</button>
                                    <button
                                        class="btn_three text-gray-400 transition-all duration-200 font-medium">قسائم
                                        منتهية الصلاحية</button>
                                </div>
                                <div class="mt-7 view_tab1">

                                    <div class="myCopons my-3">
                                        <p class="text-lg font-medium">كوبوناتي</p>
                                        <div class="my-2 flex flex-wrap justify-between items-center gap-3">
                                            @foreach ($coupons as $coupon)

                                            <div
                                                class="coponCard p-4 border border-purple-800 rounded-tr-lg bg-gray-100">
                                                 <div
                                                 class="flex justify-between items-start border-b pb-4 border-dashed border-white">
                                                 <div class="discount">
                                                     <p>%{{$coupon->discount_percentage  }} خصم</p>

                                                 </div>
                                               
                                             </div>

                                                <div class="mt-2">
                                                    <p class="text-sm text-gray-500"><span>-</span> رمز: {{ $coupon->code }}</p>
                                                    <p class="text-sm text-gray-500"><span>-</span> {{ $coupon->getStartDate($coupon->id) }} ~
                                                        {{ $coupon->getEndDate($coupon->id) }}</p>
                                                    <p class="text-sm text-gray-500"><span>-</span> للعناصر المحددة</p>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <p class="w-full text-center text-sm text-gray-400 mt-5">- لا مزيد من المحتوى -</p>
                                </div>
                                <div class="mt-7 view_tab2">
                                    <div class="flex flex-col justify-center items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="70px" viewBox="0 -960 960 960"
                                            width="70px" fill="#800080">
                                            <path
                                                d="M160-80v-440H80v-240h208q-5-9-6.5-19t-1.5-21q0-50 35-85t85-35q23 0 43 8.5t37 23.5q17-16 37-24t43-8q50 0 85 35t35 85q0 11-2 20.5t-6 19.5h208v240h-80v440H160Zm400-760q-17 0-28.5 11.5T520-800q0 17 11.5 28.5T560-760q17 0 28.5-11.5T600-800q0-17-11.5-28.5T560-840Zm-200 40q0 17 11.5 28.5T400-760q17 0 28.5-11.5T440-800q0-17-11.5-28.5T400-840q-17 0-28.5 11.5T360-800ZM160-680v80h280v-80H160Zm280 520v-360H240v360h200Zm80 0h200v-360H520v360Zm280-440v-80H520v80h280Z" />
                                        </svg>
                                        <p class="font-medium text-lg">كوبونات غير مستخدمة</p>
                                        <p class="text-gray-500 text-sm">اعرض فقط الكوبونات التي تم استخدامها في آخر 3
                                            أشهر</p>

                                    </div>
                                </div>
                                <div class="mt-7 view_tab3">
                                    <div class="my-2 flex flex-wrap justify-between items-center gap-3">
                                        @foreach ($excoupons as $excoupon)

                                        <div class="coponCard p-4 border border-gray-500 rounded-tr-lg bg-gray-300">
                                            <div
                                                class="flex justify-between items-start border-b pb-4 border-dashed border-white">
                                                <div class="discount">
                                                    <p>%{{ $excoupon->discount_percentage }} خصم</p>
                                                </div>
                                                <button class="bg-gray-800 text-white py-2 px-4">إنتهت صلاحيتها</button>
                                            </div>
                                            <div class="mt-2">
                                                <p class="text-sm text-gray-500"><span>-</span> رمز: {{ $excoupon->code }}</p>
                                                <p class="text-sm text-gray-500"><span>-</span> {{ $excoupon->getStartDate($excoupon->id) }} ~
                                                    {{ $excoupon->getEndDate($excoupon->id) }}</p>
                                                <p class="text-sm text-gray-500"><span>-</span> للعناصر المحددة</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                    <p class="font-bold text-sm mt-5">يتم عرض القسائم التي تنتهي صلاحيتها في غضون 3 أشهر
                                        فقط في هذه القائمة.</p>
                                    <p class="w-full text-center text-sm text-gray-400 mt-5">- لا مزيد من المحتوى -</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@stop
  @section('js')
    <script>
        function moveToNext(current, nextId) {
            if (current.value.length >= 1) {
                const nextElement = document.getElementById(nextId);
                if (nextElement) {
                    nextElement.focus();
                }
            }
        }
        $("#input1").focus();
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input.type === "password") {
                input.type = "text";
                icon.src = "https://img.icons8.com/ios-filled/50/000000/visible.png"; // أيقونة العين المفتوحة
            } else {
                input.type = "password";
                icon.src = "https://img.icons8.com/ios-filled/50/000000/invisible.png"; // أيقونة العين المغلقة
            }
        }
    </script>
@stop

