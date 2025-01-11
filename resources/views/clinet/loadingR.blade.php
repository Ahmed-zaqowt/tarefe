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
                            طلبي
                            <span
                                class="block absolute left-0 -bottom-3 h-1 bg-gradient-to-r from-purple-500 to-purple-800 w-full"></span>
                        </h3>

                        <div class="A_M_content my-7">
                            <div class="orders-section w-full bg-gray-100 p-5">
                               <div class="flex flex-wrap justify-between items-center">
                                <div class="flex flex-wrap justify-start items-center gap-2">
                                    <ul class="tabs flex mb-4 border-b-2 border-gray-300">
                                        <li class="tab mr-4 py-2 px-4 cursor-pointer bg-purple-800 rounded-t-lg text-white active-tab">قيد التجهيز</li>
                                    </ul>

                                </div>
                                <form action="">
                                    <input type="search" name="" id="" class="text-sm rounded-md bg-transparent border border-purple-800 text-purple-800" placeholder="ابحث عن اسم المنتج/ رقم الطلب">
                                </form>
                            </div>
                                <div class="table-container w-full overflow-x-auto">
                                    <table class="orders-table min-w-max bg-white">
                                        <thead class="bg-gray-100 border-b-2 border-gray-200">
                                            <tr>
                                                <th class="py-3 px-5 text-sm text-center">المنتجات</th>
                                                <th class="py-3 px-5 text-sm text-center">السعر الفعلي</th>
                                                <th class="py-3 px-5 text-sm text-center">عملية إعداد المنتجات</th>
                                                <th class="py-3 px-5 text-sm text-center">الحالة</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as  $order)
                                            <tr class="border-b">

                                                <td class="py-3 px-5">
                                                    @foreach ($order->carts as $cart )
                                                    <div class="flex flex-col items-center my-2">
                                                        <p class="flex justify-start items-center gap-1 mb-1">{{ $cart->product->name }}</p>
                                                        <img src="{{ $cart->product->image }}" alt="product" class="w-12 h-12 mr-3">
                                                        <p class="text-center text-gray-400 text-sm mt-1">{{ $cart->quantity }} عدد البضائع</p>
                                                    </div>
                                                    @endforeach
                                                </td>


                                                <td class="py-3 px-5 text-center">${{ $order->total }}</td>
                                                <td class="py-3 px-5 text-center">
                                                    <button class="buy-again bg-purple-600 text-white py-2 px-4 rounded-lg hover:bg-purple-700">الغاء الطلب</button>
                                                </td>
                                                <td class="py-3 px-5 text-center">
                                                   <p class="text-sm">قيد التجهيز</p>
                                                </td>

                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="mt-7">
                                <p class="font-bold">لا يمكنك العثور على طلبك؟</p>
                                <a href="" class="flex justify-between items-center border p-4 w-fit gap-5 mt-4">الخدمة الذاتية للعثور على الطلب <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg></a>
                            </div>
                            <div class="end mb-5 mt-10 wow fadeInUp">
                                <h1 class="text-lg font-bold text-center">ربما يعجبك هذا أيضاً</h1>
                                <div class="flex flex-wrap justify-center md:justify-between items-center gap-2 mt-4">
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                                        <div class="image">
                                            <img src="../img/461557379_538381172173550_2942163420668772223_n.jpg"
                                                class="w-full rounded-md normal-img" alt="">
                                            <img src="../img/461287169_538409252170742_6211862290852117244_n.jpg"
                                                class="w-full rounded-md hover-img absolute top-0 left-0 opacity-0 transition-opacity duration-300"
                                                alt="">
                                        </div>
                                        <div
                                            class="tab_card_details p-3 absolute bottom-0 left-0 right-0 translate-x-96 transition-all duration-200 ">
                                            <p class="text-xl text-purple-800 font-bold">ثوب فلاحي</p>
                                            <div class="flex justify-between items-center">
                                                <p class="text-sm text-purple-900">5.22SR</p>
                                                <div class="buttons flex items-center gap-2">
                                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                                            <path
                                                                d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                        </svg></button>
                                                    <button class="" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                            height="24px" viewBox="0 -960 960 960" width="24px">
                                                            <path
                                                                d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@stop
