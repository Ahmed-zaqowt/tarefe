@extends('clinet.master')
@section('content')

<main class="mt-28">
    <!-- path -->
    <div class="path flex justify-start items-center container mx-auto pt-6 pb-2 gap-2">
        <a href="" class="text-sm text-gray-500">الصفحة الرئيسية</a><span class="text-sm text-gray-500"> /
        </span><a href="" class="text-sm text-gray-500">
            ملابس نسائية</a>
    </div>
    <div class="container mx-auto mb-8">
        <div class="grid grid-cols-1 md:grid-cols-[1fr,3fr] gap-1">
            <div
                class="wow bounceIn rounded-lg p-4 flex flex-row gap-2 overflow-x-auto  lg:h-screen lg:block lg:overflow-y-auto lg:sticky top-20 bottom-0 start-0">
                <div class="hidden flex-col items-start justify-start mb-2 lg:flex">
                    <h3 class="font-medium text-lg">المركز الشخصي</h3>
                </div>
                <!-- حسابى -->
                <div class="main-accordion my-4">
                    <button
                        class="main-accordion-header flex justify-between items-center w-full"><span>حسابى</span><span
                            class="toggle-icon text-2xl">-</span></button>
                    <div class="main-accordion-content">
                        <div class="_links_ flex flex-col justify-start items-start gap-3">
                            <a href="" class="flex justify-start items-center">AlTRIYFI CLUB</a>
                            <a href="vip.html" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="m320-240 160-122 160 122-60-198 160-114H544l-64-208-64 208H220l160 114-60 198ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                </svg> الطريفي VIP</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                                </svg> ملفي الشخصي</a>
                            <a href="titelsNotebook.html" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                </svg> دفتر العناوين</a>
                            <a href="sizes.html" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M160-240q-33 0-56.5-23.5T80-320v-320q0-33 23.5-56.5T160-720h640q33 0 56.5 23.5T880-640v320q0 33-23.5 56.5T800-240H160Zm0-80h640v-320H680v160h-80v-160h-80v160h-80v-160h-80v160h-80v-160H160v320Zm120-160h80-80Zm160 0h80-80Zm160 0h80-80Zm-120 0Z" />
                                </svg> القياسات الخاصة بي</a>
                            <a href="MyAccount_management.html" class="flex justify-start items-center"> <svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M400-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM80-160v-112q0-33 17-62t47-44q51-26 115-44t141-18h14q6 0 12 2-8 18-13.5 37.5T404-360h-4q-71 0-127.5 18T180-306q-9 5-14.5 14t-5.5 20v32h252q6 21 16 41.5t22 38.5H80Zm560 40-12-60q-12-5-22.5-10.5T584-204l-58 18-40-68 46-40q-2-14-2-26t2-26l-46-40 40-68 58 18q11-8 21.5-13.5T628-460l12-60h80l12 60q12 5 22.5 11t21.5 15l58-20 40 70-46 40q2 12 2 25t-2 25l46 40-40 68-58-18q-11 8-21.5 13.5T732-180l-12 60h-80Zm40-120q33 0 56.5-23.5T760-320q0-33-23.5-56.5T680-400q-33 0-56.5 23.5T600-320q0 33 23.5 56.5T680-240ZM400-560q33 0 56.5-23.5T480-640q0-33-23.5-56.5T400-720q-33 0-56.5 23.5T320-640q0 33 23.5 56.5T400-560Zm0-80Zm12 400Z" />
                                </svg> إدارة حسابي</a>
                        </div>
                    </div>
                </div>
                <!-- ممتلكاتي -->
                <div class="main-accordion my-4">
                    <button
                        class="main-accordion-header flex justify-between items-center w-full"><span>ممتلكاتي</span><span
                            class="toggle-icon text-2xl">-</span></button>
                    <div class="main-accordion-content">
                        <div class="_links_ flex flex-col justify-start items-start gap-3">
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M160-440v80h640v-80H160Zm0-440h640q33 0 56.5 23.5T880-800v440q0 33-23.5 56.5T800-280H640v200l-160-80-160 80v-200H160q-33 0-56.5-23.5T80-360v-440q0-33 23.5-56.5T160-880Zm0 320h640v-240H160v240Zm0 200v-440 440Z" />
                                </svg> كوبوناتي</a>
                            <a href="" class="flex justify-start items-center"> <svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M444-200h70v-50q50-9 86-39t36-89q0-42-24-77t-96-61q-60-20-83-35t-23-41q0-26 18.5-41t53.5-15q32 0 50 15.5t26 38.5l64-26q-11-35-40.5-61T516-710v-50h-70v50q-50 11-78 44t-28 74q0 47 27.5 76t86.5 50q63 23 87.5 41t24.5 47q0 33-23.5 48.5T486-314q-33 0-58.5-20.5T390-396l-66 26q14 48 43.5 77.5T444-252v52Zm36 120q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                </svg> نقاطي</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M200-200v-560 560Zm0 80q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v100h-80v-100H200v560h560v-100h80v100q0 33-23.5 56.5T760-120H200Zm320-160q-33 0-56.5-23.5T440-360v-240q0-33 23.5-56.5T520-680h280q33 0 56.5 23.5T880-600v240q0 33-23.5 56.5T800-280H520Zm280-80v-240H520v240h280Zm-160-60q25 0 42.5-17.5T700-480q0-25-17.5-42.5T640-540q-25 0-42.5 17.5T580-480q0 25 17.5 42.5T640-420Z" />
                                </svg> محفظتي</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M160-280v80h640v-80H160Zm0-440h88q-5-9-6.5-19t-1.5-21q0-50 35-85t85-35q30 0 55.5 15.5T460-826l20 26 20-26q18-24 44-39t56-15q50 0 85 35t35 85q0 11-1.5 21t-6.5 19h88q33 0 56.5 23.5T880-640v440q0 33-23.5 56.5T800-120H160q-33 0-56.5-23.5T80-200v-440q0-33 23.5-56.5T160-720Zm0 320h640v-240H596l84 114-64 46-136-184-136 184-64-46 82-114H160v240Zm200-320q17 0 28.5-11.5T400-760q0-17-11.5-28.5T360-800q-17 0-28.5 11.5T320-760q0 17 11.5 28.5T360-720Zm240 0q17 0 28.5-11.5T640-760q0-17-11.5-28.5T600-800q-17 0-28.5 11.5T560-760q0 17 11.5 28.5T600-720Z" />
                                </svg> بطاقة هدية</a>
                        </div>
                    </div>
                </div>
                <!-- طلبي -->
                <div class="main-accordion my-4">
                    <button
                        class="main-accordion-header flex justify-between items-center w-full"><span>طلبي</span><span
                            class="toggle-icon text-2xl">-</span></button>
                    <div class="main-accordion-content">
                        <div class="_links_ flex flex-col justify-start items-start gap-3">
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M280-280h280v-80H280v80Zm0-160h400v-80H280v80Zm0-160h400v-80H280v80Zm-80 480q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z" />
                                </svg> جميع الطلبات</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M240-280h200v-80H240v80Zm400 0h80v-80h-80v80ZM240-440h200v-80H240v80Zm400 0h80v-240h-80v240ZM240-600h200v-80H240v80Zm-80 480q-33 0-56.5-23.5T80-200v-560q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v560q0 33-23.5 56.5T800-120H160Zm0-80h640v-560H160v560Zm0 0v-560 560Z" />
                                </svg> طلبات غير مدفوعة</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="m787-145 28-28-75-75v-112h-40v128l87 87Zm-587 25q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v268q-19-9-39-15.5t-41-9.5v-243H200v560h242q3 22 9.5 42t15.5 38H200Zm0-120v40-560 243-3 280Zm80-40h163q3-21 9.5-41t14.5-39H280v80Zm0-160h244q32-30 71.5-50t84.5-27v-3H280v80Zm0-160h400v-80H280v80ZM720-40q-83 0-141.5-58.5T520-240q0-83 58.5-141.5T720-440q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40Z" />
                                </svg> طلبات قيد التجهيز</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z" />
                                </svg> طلبات مشحونة</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="m720-430 80 80v190q0 33-23.5 56.5T720-80H160q-33 0-56.5-23.5T80-160v-560q0-33 23.5-56.5T160-800h220q-8 18-12 38.5t-6 41.5H160v560h560v-270Zm52-174 128 128-56 56-128-128q-21 12-45 20t-51 8q-75 0-127.5-52.5T440-700q0-75 52.5-127.5T620-880q75 0 127.5 52.5T800-700q0 27-8 51t-20 45Zm-152 4q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29ZM160-430v270-560 280-12 22Z" />
                                </svg> طلبات التقييم</a>
                            <a href="" class="flex justify-start items-center"> <svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="m480-320 56-56-63-64h167v-80H473l63-64-56-56-160 160 160 160ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h168q13-36 43.5-58t68.5-22q38 0 68.5 22t43.5 58h168q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm280-590q13 0 21.5-8.5T510-820q0-13-8.5-21.5T480-850q-13 0-21.5 8.5T450-820q0 13 8.5 21.5T480-790ZM200-200v-560 560Z" />
                                </svg> طلبات الإرجاع</a>
                        </div>
                    </div>
                </div>
                <!-- إهتمامي -->
                <div class="main-accordion my-4">
                    <button
                        class="main-accordion-header flex justify-between items-center w-full"><span>إهتمامي</span><span
                            class="toggle-icon text-2xl">-</span></button>
                    <div class="main-accordion-content">
                        <div class="_links_ flex flex-col justify-start items-start gap-3">
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                </svg> قائمة الحب</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                                </svg> شوهد مؤخراً</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M841-518v318q0 33-23.5 56.5T761-120H201q-33 0-56.5-23.5T121-200v-318q-23-21-35.5-54t-.5-72l42-136q8-26 28.5-43t47.5-17h556q27 0 47 16.5t29 43.5l42 136q12 39-.5 71T841-518Zm-272-42q27 0 41-18.5t11-41.5l-22-140h-78v148q0 21 14 36.5t34 15.5Zm-180 0q23 0 37.5-15.5T441-612v-148h-78l-22 140q-4 24 10.5 42t37.5 18Zm-178 0q18 0 31.5-13t16.5-33l22-154h-78l-40 134q-6 20 6.5 43t41.5 23Zm540 0q29 0 42-23t6-43l-42-134h-76l22 154q3 20 16.5 33t31.5 13ZM201-200h560v-282q-5 2-6.5 2H751q-27 0-47.5-9T663-518q-18 18-41 28t-49 10q-27 0-50.5-10T481-518q-17 18-39.5 28T393-480q-29 0-52.5-10T299-518q-21 21-41.5 29.5T211-480h-4.5q-2.5 0-5.5-2v282Zm560 0H201h560Z" />
                                </svg> متابع</a>
                        </div>
                    </div>
                </div>
                <!-- خدمة العملاء -->
                <div class="main-accordion my-4">
                    <button class="main-accordion-header flex justify-between items-center w-full"><span>خدمة
                            العملاء</span><span class="toggle-icon text-2xl">-</span></button>
                    <div class="main-accordion-content">
                        <div class="_links_ flex flex-col justify-start items-start gap-3">
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M360-120H200q-33 0-56.5-23.5T120-200v-280q0-75 28.5-140.5t77-114q48.5-48.5 114-77T480-840q75 0 140.5 28.5t114 77q48.5 48.5 77 114T840-480v280q0 33-23.5 56.5T760-120H600v-320h160v-40q0-117-81.5-198.5T480-760q-117 0-198.5 81.5T200-480v40h160v320Zm-80-240h-80v160h80v-160Zm400 0v160h80v-160h-80Zm-400 0h-80 80Zm400 0h80-80Z" />
                                </svg> رسالتي</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="m787-145 28-28-75-75v-112h-40v128l87 87Zm-587 25q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v268q-19-9-39-15.5t-41-9.5v-243H200v560h242q3 22 9.5 42t15.5 38H200Zm0-120v40-560 243-3 280Zm80-40h163q3-21 9.5-41t14.5-39H280v80Zm0-160h244q32-30 71.5-50t84.5-27v-3H280v80Zm0-160h400v-80H280v80ZM720-40q-83 0-141.5-58.5T520-240q0-83 58.5-141.5T720-440q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40Z" />
                                </svg> سجلات الخدمة</a>
                        </div>
                    </div>
                </div>
                <!-- خدمات أخرى -->
                <div class="main-accordion my-4">
                    <button class="main-accordion-header flex justify-between items-center w-full"><span>خدمات
                            أخرى</span><span class="toggle-icon text-2xl">-</span></button>
                    <div class="main-accordion-content">
                        <div class="_links_ flex flex-col justify-start items-start gap-3">
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M120-160q-17 0-28.5-11.5T80-200q0-10 4-18.5T96-232l344-258v-70q0-17 12-28.5t29-11.5q25 0 42-18t17-43q0-25-17.5-42T480-720q-25 0-42.5 17.5T420-660h-80q0-58 41-99t99-41q58 0 99 40.5t41 98.5q0 47-27.5 84T520-526v36l344 258q8 5 12 13.5t4 18.5q0 17-11.5 28.5T840-160H120Zm120-80h480L480-420 240-240Z" />
                                </svg> تجربة الأزياء المجانية</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M560-80v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-300L683-80H560Zm300-263-37-37 37 37ZM620-140h38l121-122-18-19-19-18-122 121v38ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v120h-80v-80H520v-200H240v640h240v80H240Zm280-400Zm241 199-19-18 37 37-18-19Z" />
                                </svg> مركز إستطلاعات الرأي</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M440-240h80v-40h40q17 0 28.5-11.5T600-320v-120q0-17-11.5-28.5T560-480H440v-40h160v-80h-80v-40h-80v40h-40q-17 0-28.5 11.5T360-560v120q0 17 11.5 28.5T400-400h120v40H360v80h80v40ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm0-80h480v-446L526-800H240v640Zm0 0v-640 640Z" />
                                </svg> شاركوا واكسبوا</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                                </svg> جهات الاتصال المفضلة</a>
                        </div>
                    </div>
                </div>
                <!-- السياسات -->
                <div class="main-accordion my-4">
                    <button
                        class="main-accordion-header flex justify-between items-center w-full"><span>السياسات</span><span
                            class="toggle-icon text-2xl">-</span></button>
                    <div class="main-accordion-content">
                        <div class="_links_ flex flex-col justify-start items-start gap-3">
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z" />
                                </svg> معلومات الشحن</a>
                            <a href="" class="flex justify-start items-center"> <svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M360-120q-100 0-170-70t-70-170v-240q0-100 70-170t170-70h240q100 0 170 70t70 170v240q0 100-70 170t-170 70H360Zm80-200 240-240-56-56-184 184-88-88-56 56 144 144Zm-80 120h240q66 0 113-47t47-113v-240q0-66-47-113t-113-47H360q-66 0-113 47t-47 113v240q0 66 47 113t113 47Zm120-280Z" />
                                </svg> سياسة الإرجاع</a>
                            <a href="" class="flex justify-start items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#5B26FB">
                                    <path
                                        d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z" />
                                </svg> سياسة الخصوصية وملفات تعريف الارتباط</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-lg p-2 h-fit">
                <div class="wow bounceIn my-3 p-3 rounded-md bg-white shadow-sm shadow-gray-200">
                    <h1 class="text-3xl text-center w-full">قائمة ما تتمناه</h1>
                    <section class="tabs_product container my-8 mx-auto">
                        <div class="tabs_buttons flex justify-center items-center gap-10">
                            <button
                                class="btn_one text-gray-400 transition-all duration-200 font-medium text-xl active">المنتجات({{ $favorites->count() }})</button>
                            <button
                                class="btn_two text-gray-400 transition-all duration-200 font-medium text-xl">قائمة(0)</button>
                        </div>
                        <div class="mt-7 view_tab1 flex flex-wrap justify-center items-center gap-5">
                            <form action="" class="w-full">

                                <div class="fav_prod flex flex-wrap justify-start items-center gap-3">
                                    @foreach ($favorites as $f)
                                    <a href=""
                                    class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                                    data-wow-delay="0.1s">
                                    <div class="image">
                                        <img src="{{ $f->product->image }}"
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
                                                        height="24px" viewBox="0 -960 960 960" width="24px"
                                                        fill="#5B26FB">
                                                        <path
                                                            d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                    </svg></button>
                                                <button class="" href=""><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                        height="24px" viewBox="0 -960 960 960" width="24px"
                                                        fill="#5f6368">
                                                        <path
                                                            d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                                    </svg></button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                    @endforeach

                                </div>
                            </form>
                        </div>
                        <div class="mt-7 view_tab2 flex flex-wrap justify-center items-center gap-5">
                            <button
                                class="flex justify-start items-center gap-3 w-full py-3 px-2 border bg-purple-800 text-white rounded-md"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#fff">
                                    <path
                                        d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                </svg> إنشاء قائمة جديدة</button>
                            <div class="prod_menu flex flex-wrap justify-start items-center gap-3">
                                <div class="card_menu">
                                    <div class="imags flex">
                                        <img src="../img/461327522_536110705733930_3748365336830084795_n.jpg"
                                            class="w-1/3 h-40" alt="">
                                        <img src="../img/461591483_539047775440223_8678649277952629535_n.jpg"
                                            class="w-1/3 h-40" alt="">
                                        <img src="../img/461628142_539057632105904_8268143592322854246_n.jpg"
                                            class="w-1/3 h-40" alt="">
                                    </div>
                                    <div
                                        class="details flex justify-between items-center p-3 rounded-br-md rounded-bl-md shadow-md shadow-gray-400">
                                        <p>name menu</p>
                                        <div class="buttons flex items-center gap-2">
                                            <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                    height="24px" viewBox="0 -960 960 960" width="24px"
                                                    fill="#5B26FB">
                                                    <path
                                                        d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                </svg></button>
                                            <button class="" href=""><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                    height="24px" viewBox="0 -960 960 960" width="24px"
                                                    fill="#5f6368">
                                                    <path
                                                        d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                                </svg></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_menu">
                                    <div class="imags flex">
                                        <img src="../img/461327522_536110705733930_3748365336830084795_n.jpg"
                                            class="w-1/3 h-40" alt="">
                                        <img src="../img/461591483_539047775440223_8678649277952629535_n.jpg"
                                            class="w-1/3 h-40" alt="">
                                        <img src="../img/461628142_539057632105904_8268143592322854246_n.jpg"
                                            class="w-1/3 h-40" alt="">
                                    </div>
                                    <div
                                        class="details flex justify-between items-center p-3 rounded-br-md rounded-bl-md shadow-md shadow-gray-400">
                                        <p>name menu</p>
                                        <div class="buttons flex items-center gap-2">
                                            <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                    height="24px" viewBox="0 -960 960 960" width="24px"
                                                    fill="#5B26FB">
                                                    <path
                                                        d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                </svg></button>
                                            <button class="" href=""><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                    height="24px" viewBox="0 -960 960 960" width="24px"
                                                    fill="#5f6368">
                                                    <path
                                                        d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                                </svg></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_menu">
                                    <div class="imags flex">
                                        <img src="../img/461327522_536110705733930_3748365336830084795_n.jpg"
                                            class="w-1/3 h-40" alt="">
                                        <img src="../img/461591483_539047775440223_8678649277952629535_n.jpg"
                                            class="w-1/3 h-40" alt="">
                                        <img src="../img/461628142_539057632105904_8268143592322854246_n.jpg"
                                            class="w-1/3 h-40" alt="">
                                    </div>
                                    <div
                                        class="details flex justify-between items-center p-3 rounded-br-md rounded-bl-md shadow-md shadow-gray-400">
                                        <p>name menu</p>
                                        <div class="buttons flex items-center gap-2">
                                            <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                    height="24px" viewBox="0 -960 960 960" width="24px"
                                                    fill="#5B26FB">
                                                    <path
                                                        d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                </svg></button>
                                            <button class="" href=""><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                    height="24px" viewBox="0 -960 960 960" width="24px"
                                                    fill="#5f6368">
                                                    <path
                                                        d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                                </svg></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_menu">
                                    <div class="imags flex">
                                        <img src="../img/460963029_536110159067318_5162081313794050130_n.jpg"
                                            class="w-1/3 h-40" alt="">
                                        <img src="../img/461591483_539047775440223_8678649277952629535_n.jpg"
                                            class="w-1/3 h-40" alt="">
                                        <img src="../img/461820269_539039195441081_1043067074187790131_n.jpg"
                                            class="w-1/3 h-40" alt="">
                                    </div>
                                    <div
                                        class="details flex justify-between items-center p-3 rounded-br-md rounded-bl-md shadow-md shadow-gray-400">
                                        <p>name menu</p>
                                        <div class="buttons flex items-center gap-2">
                                            <button class=""><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                    height="24px" viewBox="0 -960 960 960" width="24px"
                                                    fill="#5B26FB">
                                                    <path
                                                        d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
                                                </svg></button>
                                            <button class="" href=""><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-10 h-10 p-2 rounded-full transition-all duration-200 bg-gray-200 hover:bg-purple-900 hover:fill-white"
                                                    height="24px" viewBox="0 -960 960 960" width="24px"
                                                    fill="#5f6368">
                                                    <path
                                                        d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                                </svg></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </section>
                </div>
                <div class="wow bounceIn flex flex-wrap justify-center md:justify-between items-center gap-2">
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="0.1s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="0.2s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="0.3s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="0.4s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="0.5s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="0.6s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="0.7s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="0.8s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="0.9s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="1s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="1.1s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="1.2s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="1.3s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="1.4s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="1.5s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                    <a href=""
                        class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden wow fadeIn"
                        data-wow-delay="1.6s">
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
                                            height="24px" viewBox="0 -960 960 960" width="24px"
                                            fill="#5B26FB">
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
                <!-- pagination -->
              
            </div>
        </div>
    </div>
</main>

@stop
