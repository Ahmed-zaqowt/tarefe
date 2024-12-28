@extends('clinet.master')
@section('content')

@php
    $images = json_decode(@$product->album);
@endphp
    <!-- paymentSecurityPopup -->
    <div
        class="paymentSecurityPopup fixed top-0 bottom-0 left-0 right-0 bg-purple-800 bg-opacity-35 flex justify-center items-center z-40">
        <div
            class="popcard z-50 overflow-y-auto bg-white w-4/6 p-8 rounded-md flex flex-col justify-between items-start h-96">
            <div class="popupTitle border-b border-purple-800 w-full py-3">
                <h1 class="text-2xl text-purple-800 font-medium">طرق دفع آمنة</h1>
            </div>
            <div class="bodyPopup my-2">
                <p class="font-medium text-lg">طرق دفع آمنة</p>
                <p class="text-sm">يتم تأمين دفعتك في SHEIN بشهادات أمان الدفع العالمية.</p>
                <a href="" class="text-gray-500 text-sm">يتعلم أكثر</a>
            </div>
            <div class="req">
                <h2 class="text-sm text-purple-800">1. طريقة الدفع او السداد</h2>
                <div class="payment-gateways flex justify-start items-center gap-2 my-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png"
                        class="w-10 h-10 border rounded-sm" alt="Visa">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png"
                        class="w-10 h-10 border rounded-sm" alt="MasterCard">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg"
                        class="w-10 h-10 border rounded-sm" alt="PayPal">
                </div>
                <h2 class="text-sm text-purple-800">2. شهادة الأمان</h2>
                <div class="payment-gateways flex justify-start items-center gap-2 my-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png"
                        class="w-10 h-10 border rounded-sm" alt="Visa">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png"
                        class="w-10 h-10 border rounded-sm" alt="MasterCard">
                </div>
            </div>
            <h1 class="text-sm text-purple-800 font-medium my-2">شحن آمن</h1>
            <div class="req">
                <h2 class="text-sm font-medium text-purple-800">1. تتبع الطلب</h2>
                <p class="text-sm">نظام التحديثات اللوجستية في الوقت الحقيقي.</p>
                <a href="" class="text-gray-500 text-sm">تحقق من طلبي</a>
                <h2 class="text-sm font-medium text-purple-800 mt-2">2. سلامة الحزمة</h2>
                <p class="text-sm">استرداد كامل المبلغ أو إعادة إرسال الحزمة التالفة أو المفقودة.</p>
                <a href="" class="text-gray-500 text-sm">يتعلم اكثر</a>
                <h2 class="text-sm font-medium text-purple-800 mt-2">3. حول كوفيد-19</h2>
                <p class="text-sm">تتبع SHEIN بروتوكولات صارمة لتعقيم المستودعات والطرود قبل الشحن.</p>
                <a href="" class="text-gray-500 text-sm">يتعلم اكثر</a>
            </div>
            <h1 class="text-lg text-purple-800 font-medium mt-4">خدمة العملاء</h1>
            <div class="req w-full">
                <div class="divs flex flex-col justify-center items-center w-full md:flex-row">
                    <p class="w-1/3 py-10 bg-purple-800 text-white text-center">الأسئلة المتداولة</p>
                    <p class="w-1/3 py-10 bg-purple-800 text-white text-center">تذكرة</p>
                    <p class="w-1/3 py-10 bg-purple-800 text-white text-center">دردشة مباشرة</p>
                </div>
                <a href="" class="text-gray-500 text-sm">اتصل بنا</a>
            </div>
            <div class="privacy">
                <h2 class="text-lg font-medium text-purple-800 mt-4">حماية الخصوصية</h2>
                <p class="text-sm">تحترم SHEIN خصوصية المستخدمين والزوار على موقعنا، ونحن ملتزمون بحمايتها من خلال
                    الحفاظ على التدابير
                    المادية والتقنية والإدارية المتوافقة مع معايير الصناعة والمصممة لحماية بياناتك الشخصية من المعالجة
                    أو الاستخدام أو الكشف غير المصرح به.</p>
                <a href="" class="text-gray-500 text-sm">يتعلم أكثر</a>
            </div>
        </div>
    </div>

    <!-- shahen popup -->
    <div
        class="shahenPopup fixed top-0 bottom-0 left-0 right-0 bg-purple-800 bg-opacity-35 flex justify-center items-center z-40">
        <div
            class="popcard overflow-y-auto z-50 bg-white w-4/6 p-8 rounded-md flex flex-col justify-between items-start h-96">
            <div class="popupTitle border-b border-purple-800 w-full py-3">
                <h1 class="text-2xl text-purple-800 font-medium">معلومات الشحن</h1>
            </div>
            <form action=" " method="" class="my-5">
                <p>الشحن الى:</p>
                <div class="flex flex-col justify-start items-start gap-3 md:flex-row md:items-center">
                    <div class="select-container">
                        <label for="country" class="label">موقع</label>
                        <select id="country" onchange="updateStates()">
                            <option value="" disabled selected>Select a country</option>
                            <option value="USA">United States</option>
                            <option value="CAN">Canada</option>
                            <option value="GBR">United Kingdom</option>
                            <option value="AUS">Australia</option>
                        </select>
                    </div>
                    <div class="select-container" id="state-container" style="display: none;">
                        <label for="state" class="label">الدولة / مقاطعة</label>
                        <select id="state" onchange="updateCities()">
                            <option value="" disabled selected>Select a state</option>
                        </select>
                    </div>
                    <div class="select-container" id="city-container" style="display: none;">
                        <label for="city" class="label">مدينة</label>
                        <select id="city">
                            <option value="" disabled selected>Select a city</option>
                        </select>
                    </div>
                    <button class="py-2 px-4 bg-purple-800 text-white translate-y-3 rounded-md">حسنا</button>
                </div>

            </form>
            <a href="" class="text-purple-800 text-sm">شحن سريع مجاني للطلبات أكثر من SR334.44</a>
            <div class="req">
                <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden border">
                    <thead>
                        <tr class="bg-purple-600 text-white">
                            <th class="py-2 px-4">وسيلة الشحن</th>
                            <th class="py-2 px-4">زمن الشحن</th>
                            <th class="py-2 px-4">التكاليف</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2 px-4 text-sm">الشحن السريع</td>
                            <td class="py-2 px-4 text-sm">تاريخ التوصيل المحتمل في 2024/10/21 - 2024/10/24</td>
                            <td class="py-2 px-4 text-sm">SR30.06</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="" class="text-purple-800 text-sm">اعرف اكثر</a>
        </div>
    </div>
    <!-- payIstilamPopup -->
    <div
        class="payIstilamPopup fixed top-0 bottom-0 left-0 right-0 bg-purple-800 bg-opacity-35 flex justify-center items-center z-40">
        <div class="popcard z-50 bg-white w-4/6 p-8 rounded-md flex flex-col justify-between items-start h-96">
            <div class="popupTitle border-b border-purple-800 w-full py-3">
                <h1 class="text-2xl text-purple-800 font-medium">خدمة الدفع عند الاستلام</h1>
            </div>
            <div class="bodyPopup">
                <p>خدمة الدفع عند الاستلام متاحة فقط عندنا يكون السعر الاجمالي للبضاعة المختارة بعد الخصم أكثر من
                    BD.7.56 وأقلّ من BD.189.00 لعملائنا في البحرين.</p>
            </div>
            <div class="req">
                <p class="text-lg font-medium text-purple-800">ملاحظة:</p>
                <ol>
                    <li>الدفع عند الاستلام يوجد تكلفة إضافية لهذه الخدمة، وهى BD.2.27</li>
                    <li> إذا لا تريد الطلب قبل الشحن فيمكنك إلغاءه من طلبي في شي إن بنفسك.</li>
                    <li>للاسترجاع و الاستبدال خلال 15 يوم من الاستلام</li>
                </ol>
            </div>
            <a href="" class="text-purple-800 text-sm">بالتفصيل</a>
        </div>
    </div>
    <!-- re popup -->
    <div
        class="resalePopup fixed top-0 bottom-0 left-0 right-0 bg-purple-800 bg-opacity-35 flex justify-center items-center z-40">
        <div class="popcard z-50 bg-white w-4/6 p-8 rounded-md flex flex-col justify-between items-start h-96">
            <div class="popupTitle border-b border-purple-800 w-full py-3">
                <h1 class="text-2xl text-purple-800 font-medium">سياسة الارجاع</h1>
            </div>
            <div class="bodyPopup">
                <p class="text-lg font-medium text-purple-800">ضماننا</p>
                <p>للاسترجاع و الاستبدال خلال 15 يوم من الاستلام</p>
            </div>
            <div class="req">
                <p class="text-lg font-medium text-purple-800">المطلوب</p>
                <ol>
                    <li>للاسترجاع و الاستبدال خلال 15 يوم من الاستلام</li>
                    <li>للاسترجاع و الاستبدال خلال 15 يوم من الاستلام</li>
                    <li>للاسترجاع و الاستبدال خلال 15 يوم من الاستلام</li>
                </ol>
            </div>
            <a href="" class="text-purple-800 text-sm">اعرف اكثر</a>
        </div>
    </div>


    <!-- main page -->
    <main class="mt-28 lg:mt-20">
        <!-- path -->
        <div class="path flex justify-start items-center container mx-auto pt-6 pb-2 gap-2">
            <a href="" class="text-sm text-gray-500">الصفحة الرئيسية</a><span class="text-sm text-gray-500"> / </span><a
                href="" class="text-sm text-gray-500">
                ملابس نسائية</a>
        </div>
        <div class="container mx-auto mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-[1fr,1fr] gap-1">
                <div class="rounded-lg p-2 h-fit wow fadeInRight">
                    <div class="imagesControl flex justify-between items-start gap-2 h-2/5">
                        <div class="flex items-start flex-col gap-2">
                            <video src="../video/istockphoto_is.mp4"
                                class="card_video w-16 h-16 rounded-md cursor-pointer transition-all duration-200 hover:scale-105"></video>
                                @foreach ($images as $img)
                                <img src="{{ $img }}" alt=""
                                class="card_img w-16 h-16 rounded-md cursor-pointer transition-all duration-200 hover:scale-105">
                                @endforeach

                            </div>
                        <div class="showImage w-full flex flex-col rounded-md">
                            <img src="{{ $product->image }}" alt=""
                                class="top_show border show__img rounded-md">
                            <video class="top_show border show__img rounded-md hidden" controls autoplay></video>
                        </div>
                    </div>


                    <!-- مراجعات العملاء -->
                    <div class="CustomerReviews mt-8 mb-4">
                        <p class="text-2xl">مراجعات العملاء</p>
                        <div class="bg-gray-100 p-3 my-4">
                            <div class="rating flex justify-start items-center">
                                <p class="text-4xl">4.91</p>
                                <div class="stars flex gap-2 p-1 rounded-lg">
                                    <div class="text-yellow-400 text-4xl">
                                        <span class="material-symbols-outlined">star</span>
                                    </div>
                                    <div class="text-yellow-400 text-4xl">
                                        <span class="material-symbols-outlined">star</span>
                                    </div>
                                    <div class="text-yellow-400 text-4xl">
                                        <span class="material-symbols-outlined">star</span>
                                    </div>
                                    <div class="text-yellow-400 text-4xl">
                                        <span class="material-symbols-outlined">star</span>
                                    </div>
                                    <div class="text-yellow-400 text-4xl">
                                        <span class="material-symbols-outlined">star</span>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!-- tabs rating -->
                    <section class="tabs_product container my-8 mx-auto">
                        <div class="tabs_buttons flex justify-start items-center gap-5 pb-2 border-b border-gray-300">
                            <button class="btn_one text-black transition-all duration-200 font-medium active">جميع
                                التقييمات</button>
                            <button class="btn_two text-black transition-all duration-200 font-medium">الصور</button>
                        </div>
                        <div class="view_tab1 flex flex-wrap justify-center items-center gap-5">

                            <div class="mt-4 showRatingInComments w-full flex flex-col items-start gap-1">
                                <div class="commentCard w-full border-b border-purple-800 ">
                                    <div class="dateWithName flex justify-start items-center gap-2">
                                        <p class="text-sm text-black font-medium">z**r</p>
                                        <p class="text-sm text-gray-500">22 Sep,2024</p>
                                    </div>
                                    <div class="stars flex items-center my-2 gap-2 rounded-lg">
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                    </div>
                                    <div class="infoProd flex flex-wrap justify-start items-center gap-2">
                                        <p class="text-sm text-black">الوزن: <span class="text-gray-400">112 cm / 44.1
                                                in</span></p>
                                        <p class="text-sm text-black">تمثال نصفي: <span class="text-gray-400">51 kg /
                                                112 lbs</span></p>
                                        <p class="text-sm text-black">الخصر: <span class="text-gray-400">101 cm / 40
                                                in</span></p>
                                        <p class="text-sm text-black">طول: <span class="text-gray-400">166 cm / 65
                                                in</span></p>
                                        <p class="text-sm text-black">الوركين: <span class="text-gray-400">175 cm / 69
                                                in</span></p>
                                        <p class="text-sm text-black">المقاس العام: <span
                                                class="text-gray-400">مناسب</span></p>
                                        <p class="text-sm text-black">اللون: <span class="text-gray-400">أصفر</span></p>
                                        <p class="text-sm text-black">مقاس: <span class="text-gray-400">2XL</span></p>
                                    </div>
                                    <p class="comment mt-4">
                                        روعه روعه جدأ روعه روعه
                                        🌺🌺🌺🌺🌷🌷🌺🌷🌷🌷🌷🌷🌷🌺🌺🌷🌷🌷🌷🌷🌷🌷🌷🌺🌺🌺🌺🌺🌺🌺🌺🌺🌺🌷🌺🌺🌺🌺🌺🌺🌺🌺🌺🌺🌺🌺🌺🌺🌺🌷🌷🌺🌷قماشه
                                        روعه بارد وحلو ومرتب
                                    </p>
                                    <div class="CommentAction flex justify-end items-center gap-4 my-2">
                                        <button><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                <path
                                                    d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z" />
                                            </svg></button>
                                        <div class="hoverBtn relative translate-y-1">
                                            <button><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                    <path
                                                        d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                                </svg></button>
                                            <button
                                                class="hovBtn text-sm border absolute -bottom-7 -start-20 shadow-md shadow-gray-500 bg-white w-28 p-2">تقرير
                                                / كتلة</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentCard w-full border-b border-purple-800 ">
                                    <div class="dateWithName flex justify-start items-center gap-2">
                                        <p class="text-sm text-black font-medium">z**r</p>
                                        <p class="text-sm text-gray-500">22 Sep,2024</p>
                                    </div>
                                    <div class="stars flex items-center my-2 gap-2 rounded-lg">
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                    </div>
                                    <div class="infoProd flex flex-wrap justify-start items-center gap-2">
                                        <p class="text-sm text-black">الوزن: <span class="text-gray-400">112 cm / 44.1
                                                in</span></p>
                                        <p class="text-sm text-black">تمثال نصفي: <span class="text-gray-400">51 kg /
                                                112 lbs</span></p>
                                        <p class="text-sm text-black">طول: <span class="text-gray-400">166 cm / 65
                                                in</span></p>
                                        <p class="text-sm text-black">الوركين: <span class="text-gray-400">175 cm / 69
                                                in</span></p>
                                    </div>
                                    <p class="comment mt-4">جميل جدا</p>
                                    <div class="CommentAction flex justify-end items-center gap-4 my-2">
                                        <button><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                <path
                                                    d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z" />
                                            </svg></button>
                                        <div class="hoverBtn relative translate-y-1">
                                            <button><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                    <path
                                                        d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                                </svg></button>
                                            <button
                                                class="hovBtn text-sm border absolute -bottom-7 -start-20 shadow-md shadow-gray-500 bg-white w-28 p-2">تقرير
                                                / كتلة</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentCard w-full border-b border-purple-800 ">
                                    <div class="dateWithName flex justify-start items-center gap-2">
                                        <p class="text-sm text-black font-medium">z**r</p>
                                        <p class="text-sm text-gray-500">22 Sep,2024</p>
                                    </div>
                                    <div class="stars flex items-center my-2 gap-2 rounded-lg">
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                    </div>
                                    <div class="infoProd flex flex-wrap justify-start items-center gap-2">
                                        <p class="text-sm text-black">الوركين: <span class="text-gray-400">175 cm / 69
                                                in</span></p>
                                        <p class="text-sm text-black">المقاس العام: <span
                                                class="text-gray-400">مناسب</span></p>
                                        <p class="text-sm text-black">اللون: <span class="text-gray-400">أصفر</span></p>
                                        <p class="text-sm text-black">مقاس: <span class="text-gray-400">2XL</span></p>
                                    </div>
                                    <div class="flex justify-between items-start my-4">
                                        <p class="comment mt-4 w-98">
                                            روعه روعه جدأ روعه روعه قماشه روعه بارد وحلو ومرتب اوي اوي اوي
                                        </p>
                                        <div class="imgs flex justify-end items-center gap-1">
                                            <img src="../img/460963029_536110159067318_5162081313794050130_n.jpg"
                                                class="w-28 h-28" alt="">
                                            <img src="../img/461591483_539047775440223_8678649277952629535_n.jpg"
                                                class="w-28 h-28" alt="">
                                        </div>
                                    </div>
                                    <div class="CommentAction flex justify-end items-center gap-4 my-2">
                                        <button><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                <path
                                                    d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z" />
                                            </svg></button>
                                        <div class="hoverBtn relative translate-y-1">
                                            <button><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                    <path
                                                        d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                                </svg></button>
                                            <button
                                                class="hovBtn text-sm border absolute -bottom-7 -start-20 shadow-md shadow-gray-500 bg-white w-28 p-2">تقرير
                                                / كتلة</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view_tab2 flex flex-wrap justify-center items-center gap-5">

                            <div class="mt-4 showRatingInComments w-full flex flex-col items-start gap-1">
                                <div class="commentCard w-full border-b border-purple-800 ">
                                    <div class="dateWithName flex justify-start items-center gap-2">
                                        <p class="text-sm text-black font-medium">z**r</p>
                                        <p class="text-sm text-gray-500">22 Sep,2024</p>
                                    </div>
                                    <div class="stars flex items-center my-2 gap-2 rounded-lg">
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                    </div>
                                    <div class="infoProd flex flex-wrap justify-start items-center gap-2">
                                        <p class="text-sm text-black">الوركين: <span class="text-gray-400">175 cm / 69
                                                in</span></p>
                                        <p class="text-sm text-black">المقاس العام: <span
                                                class="text-gray-400">مناسب</span></p>
                                        <p class="text-sm text-black">اللون: <span class="text-gray-400">أصفر</span></p>
                                        <p class="text-sm text-black">مقاس: <span class="text-gray-400">2XL</span></p>
                                    </div>
                                    <div class="flex justify-between items-start my-4">
                                        <p class="comment mt-4 w-98">
                                            روعه روعه جدأ روعه روعه قماشه روعه بارد وحلو ومرتب اوي اوي اوي
                                        </p>
                                        <div class="imgs flex justify-end items-center gap-1">
                                            <img src="../img/460963029_536110159067318_5162081313794050130_n.jpg"
                                                class="w-28 h-28" alt="">
                                            <img src="../img/461591483_539047775440223_8678649277952629535_n.jpg"
                                                class="w-28 h-28" alt="">
                                        </div>
                                    </div>
                                    <div class="CommentAction flex justify-end items-center gap-4 my-2">
                                        <button><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                <path
                                                    d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z" />
                                            </svg></button>
                                        <div class="hoverBtn relative translate-y-1">
                                            <button><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                    <path
                                                        d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                                </svg></button>
                                            <button
                                                class="hovBtn text-sm border absolute -bottom-7 -start-20 shadow-md shadow-gray-500 bg-white w-28 p-2">تقرير
                                                / كتلة</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentCard w-full border-b border-purple-800 ">
                                    <div class="dateWithName flex justify-start items-center gap-2">
                                        <p class="text-sm text-black font-medium">z**r</p>
                                        <p class="text-sm text-gray-500">22 Sep,2024</p>
                                    </div>
                                    <div class="stars flex items-center my-2 gap-2 rounded-lg">
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                    </div>
                                    <div class="infoProd flex flex-wrap justify-start items-center gap-2">
                                        <p class="text-sm text-black">الوركين: <span class="text-gray-400">175 cm / 69
                                                in</span></p>
                                        <p class="text-sm text-black">المقاس العام: <span
                                                class="text-gray-400">مناسب</span></p>
                                        <p class="text-sm text-black">اللون: <span class="text-gray-400">أصفر</span></p>
                                        <p class="text-sm text-black">مقاس: <span class="text-gray-400">2XL</span></p>
                                    </div>
                                    <div class="flex justify-between items-start my-4">
                                        <p class="comment mt-4 w-98">
                                            روعه روعه جدأ روعه روعه قماشه روعه بارد وحلو ومرتب اوي اوي اوي
                                        </p>
                                        <div class="imgs flex justify-end items-center gap-1">
                                            <img src="../img/460963029_536110159067318_5162081313794050130_n.jpg"
                                                class="w-28 h-28" alt="">
                                            <img src="../img/461591483_539047775440223_8678649277952629535_n.jpg"
                                                class="w-28 h-28" alt="">
                                        </div>
                                    </div>
                                    <div class="CommentAction flex justify-end items-center gap-4 my-2">
                                        <button><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                <path
                                                    d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z" />
                                            </svg></button>
                                        <div class="hoverBtn relative translate-y-1">
                                            <button><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                    <path
                                                        d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                                </svg></button>
                                            <button
                                                class="hovBtn text-sm border absolute -bottom-7 -start-20 shadow-md shadow-gray-500 bg-white w-28 p-2">تقرير
                                                / كتلة</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentCard w-full border-b border-purple-800 ">
                                    <div class="dateWithName flex justify-start items-center gap-2">
                                        <p class="text-sm text-black font-medium">z**r</p>
                                        <p class="text-sm text-gray-500">22 Sep,2024</p>
                                    </div>
                                    <div class="stars flex items-center my-2 gap-2 rounded-lg">
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                        <div class="text-yellow-400 str">
                                            <span class="material-symbols-outlined">star</span>
                                        </div>
                                    </div>
                                    <div class="infoProd flex flex-wrap justify-start items-center gap-2">
                                        <p class="text-sm text-black">الوركين: <span class="text-gray-400">175 cm / 69
                                                in</span></p>
                                        <p class="text-sm text-black">المقاس العام: <span
                                                class="text-gray-400">مناسب</span></p>
                                        <p class="text-sm text-black">اللون: <span class="text-gray-400">أصفر</span></p>
                                        <p class="text-sm text-black">مقاس: <span class="text-gray-400">2XL</span></p>
                                    </div>
                                    <difv  class="flex justify-between items-start my-4">
                                        <p class="comment mt-4 w-98">
                                            روعه روعه جدأ روعه روعه قماشه روعه بارد وحلو ومرتب اوي اوي اوي
                                        </p>
                                        <div class="imgs flex justify-end items-center gap-1">
                                            <img src="../img/460963029_536110159067318_5162081313794050130_n.jpg"
                                                class="w-28 h-28" alt="">
                                            <img src="../img/461591483_539047775440223_8678649277952629535_n.jpg"
                                                class="w-28 h-28" alt="">
                                        </div>
                                    </difv>
                                    <div class="CommentAction flex justify-end items-center gap-4 my-2">
                                        <button><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                <path
                                                    d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z" />
                                            </svg></button>
                                        <div class="hoverBtn relative translate-y-1">
                                            <button><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
                                                    <path
                                                        d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                                </svg></button>
                                            <button
                                                class="hovBtn text-sm border absolute -bottom-7 -start-20 shadow-md shadow-gray-500 bg-white w-28 p-2">تقرير
                                                / كتلة</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </section>
                    <!-- pagination -->
                    <div class="flex justify-center mt-4 w-full">
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#"
                                class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-purple-300 bg-white text-sm font-medium text-purple-500 hover:bg-purple-50">
                                <span class="sr-only">Previous</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.293a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 border border-purple-300 bg-white text-sm font-medium text-purple-500 hover:bg-purple-50">
                                1
                            </a>
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 border border-purple-300 bg-white text-sm font-medium text-purple-500 hover:bg-purple-50">
                                2
                            </a>
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 border border-purple-300 bg-white text-sm font-medium text-purple-500 hover:bg-purple-50">
                                3
                            </a>
                            <a href="#"
                                class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-purple-300 bg-white text-sm font-medium text-purple-500 hover:bg-purple-50">
                                <span class="sr-only">Next</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>

                            </a>
                        </nav>
                    </div>
                </div>
                <div
                    class="scroll rounded-lg p-4 sticky top-20 bottom-0 start-0 wow fadeInLeft lg:h-screen lg:overflow-y-auto">
                    <div class="topTitle border-b border-purple-800 mb-4 pb-6">
                        <div class="title_prod flex justify-start items-center relative">
                            <!-- وصف المنتج -->
                            <p id="productDescription" class="w-4/5 text-sm">{{ $product->description }}</p>

                            <!-- زر النسخ (الأيقونة فقط) -->
                            <a href="javascript:void(0);" id="copyButton" class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960"
                                    width="30px" fill="#5f6368">
                                    <path
                                        d="M440-280H280q-83 0-141.5-58.5T80-480q0-83 58.5-141.5T280-680h160v80H280q-50 0-85 35t-35 85q0 50 35 85t85 35h160v80ZM320-440v-80h320v80H320Zm200 160v-80h160q50 0 85-35t35-85q0-50-35-85t-85-35H520v-80h160q83 0 141.5 58.5T880-480q0 83-58.5 141.5T680-280H520Z" />
                                </svg>
                            </a>
                        </div>
                        <div class="copy flex flex-wrap justify-start items-center gap-5 my-2">
                            <div class="rating flex justify-start items-center">
                                <div class="stars flex items-center gap-2 rounded-lg">
                                    <div class="text-yellow-400 str">
                                        <span class="material-symbols-outlined">star</span>
                                    </div>
                                    <div class="text-yellow-400 str">
                                        <span class="material-symbols-outlined">star</span>
                                    </div>
                                    <div class="text-yellow-400 str">
                                        <span class="material-symbols-outlined">star</span>
                                    </div>
                                    <div class="text-yellow-400 str">
                                        <span class="material-symbols-outlined">star</span>
                                    </div>
                                    <div class="text-yellow-400 str">
                                        <span class="material-symbols-outlined">star</span>
                                    </div>
                                </div>
                                <a href="" class="text-sm text-yellow-400">(+1000 تعليق)</a>
                            </div>
                        </div>
                        <div class="price_prod flex justify-start items-center gap-2 mb-4">
                            <p class="text-purple-800 text-2xl font-bold">SR{{@$product->coupon_id ? $product->price - $product->coupon->discount_percentage : $product->price }}</p>
                            @if (@$product->coupon_id)
                            <span class="text-sm font-light line-through text-gray-400">SR{{  $product->price}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="colors">
                        @if (@$product->colors)
                        <div class="flex justify-between items-center">
                            <p>الألوان</p>
                        </div>
                        @endif
                    <form action="" class="flex justify-start flex-wrap gap-3 mt-4">
                            <input name="user_id" value="{{ Auth::user()->id }}">
                        @if (@$product->colors)

                            <label for="red_" class="w-5 h-5 block bg-red-800 rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="red_">
                            </label>
                            <label for="pueple" class="w-5 h-5 block bg-purple-800 rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="pueple">
                            </label>
                            <label for="yellow" class="w-5 h-5 block bg-yellow-800 rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="yellow">
                            </label>
                            <label for="black" class="w-5 h-5 block bg-black rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="black">
                            </label>
                            <label for="slate" class="w-5 h-5 block bg-slate-800 rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="slate">
                            </label>
                            <label for="blue" class="w-5 h-5 block bg-blue-800 rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="blue">
                            </label>
                            <label for="orange" class="w-5 h-5 block bg-orange-800 rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="orange">
                            </label>
                            <label for="white" class="w-5 h-5 block bg-white border border-black rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="red_">
                            </label>
                            <label for="white" class="w-5 h-5 block bg-amber-800 rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="red_">
                            </label>
                            <label for="white" class="w-5 h-5 block bg-green-800 rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="red_">
                            </label>
                            <label for="white" class="w-5 h-5 block bg-teal-800 rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="red_">
                            </label>
                            <label for="white" class="w-5 h-5 block bg-sky-800 rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="red_">
                            </label>
                            <label for="white" class="w-5 h-5 block bg-pink-800 rounded-full">
                                <input type="checkbox" name="colors[]" class="opacity-0 cursor-pointer" id="red_">
                            </label>
                            @endif
                    </div>
                    <div class="size my-4">
                        <div class="flex justify-start items-center gap-2 my-4">
                            <p>الكمية</p>
                            <div class="flex items-center justify-start">
                                <button type="button" class="plus-btn border border-purple-900 text-purple-900 py-1 px-3 rounded-md">+</button>
                                <input type="text" name="quantity" value="1" class="count_prod_inp px-2 py-1 rounded-md w-10">
                                <button type="button" class="minus-btn border border-purple-900 text-purple-900 py-1 px-3 rounded-md">-</button>
                            </div>
                        </div>
                        @if (@$product->sizes)
                        <div class="flex justify-start items-center gap-2">
                            <p>مقاس</p>
                            <select name="sizes" id="" class="rounded-md">
                                <option value="">الأفتراضي</option>
                                <option value="">DE</option>
                                <option value="">SS</option>
                                <option value="">MA</option>
                            </select>
                        </div>
                        <div class="flex flex-wrap justify-start items-center gap-4 my-3">
                            <label for="red_s"
                                class="radio-label border border-purple-800 px-4 py-1 relative text-center block rounded-md">
                                S
                                <input type="radio" name="size"
                                    class="radio-input opacity-0 cursor-pointer w-full absolute left-0 right-0"
                                    id="red_s">
                            </label>

                            <label for="red_l"
                                class="radio-label border border-purple-800 px-4 py-1 relative text-center block rounded-md">
                                L
                                <input type="radio" name="size"
                                    class="radio-input opacity-0 cursor-pointer w-full absolute left-0 right-0"
                                    id="red_l">
                            </label>

                            <label for="red_m"
                                class="radio-label border border-purple-800 px-4 py-1 relative text-center block rounded-md">
                                M
                                <input type="radio" name="size"
                                    class="radio-input opacity-0 cursor-pointer w-full absolute left-0 right-0"
                                    id="red_m">
                            </label>

                            <label for="black_xl"
                                class="radio-label border border-purple-800 px-4 py-1 relative text-center block rounded-md">
                                XL
                                <input type="radio" name="size"
                                    class="radio-input opacity-0 cursor-pointer w-full absolute left-0 right-0"
                                    id="black_xl">
                            </label>

                            <label for="slate_3xl"
                                class="radio-label border border-purple-800 px-4 py-1 relative text-center block rounded-md">
                                3XL
                                <input type="radio" name="size"
                                    class="radio-input opacity-0 cursor-pointer w-full absolute left-0 right-0"
                                    id="slate_3xl">
                            </label>
                        </div>
                        @endif


                        <div class="flex justify-between items-center gap-3 my-3">
                            <button
                                id="add-to-cart-btn"
                                class="bg-purple-800 text-white text-xs transition-all duration-200 py-3 px-20 hover:bg-purple-700 flex-grow md:text-base">أضف
                                الى عربة التسوق</button>
                                <button
                                data-type="{{ $product->checkfavorite($product->id) }}"
                                data-id="{{ $product->id }}"
                                type="button"
                                class="add-to-favorite loginpopupBtn  w-12 h-12 rounded-full border border-purple-800 flex justify-center items-center transition-all duration-200 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px"
                                    fill="">
                                    <path
                                        d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                </svg>
                            </button>

                        </div>
                        </form>
                        <div class="popups_items bg-gray-100 p-3 flex flex-col gap-3">
                            <button class="item shahenPopupBtn">
                                <div class="flex justify-start items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#5B26FB">
                                        <path
                                            d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z" />
                                    </svg>
                                    <p class="text-purple-800 font-medium">شحن مجاني</p>
                                </div>
                                <p class="text-sm text-start mt-2">شحن مجاني شحن سريع مجاني للطلبات أكثر من SR334.49
                                    تاريخ التوصيل المحتمل في 2024/10/20 - 2024/10/23.</p>
                            </button>
                            <button class="item payIstilamPopupBtn">
                                <div class="flex justify-start items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#5B26FB">
                                        <path
                                            d="M560-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM280-320q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80h400q0-33 23.5-56.5T840-480v-160q-33 0-56.5-23.5T760-720H360q0 33-23.5 56.5T280-640v160q33 0 56.5 23.5T360-400Zm440 240H120q-33 0-56.5-23.5T40-240v-440h80v440h680v80ZM280-400v-320 320Z" />
                                    </svg>
                                    <p class="text-purple-800 font-medium">خدمة الدفع عند الاستلام</p>
                                </div>
                                <p class="text-sm text-start mt-2">شحن مجاني شحن سريع مجاني للطلبات أكثر من SR334.49
                                    تاريخ التوصيل المحتمل في 2024/10/20 - 2024/10/23.</p>
                            </button>
                            <button class="item resalePopupBtn">
                                <div class="flex justify-start items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#5B26FB">
                                        <path
                                            d="M480-40q-112 0-206-51T120-227v107H40v-240h240v80h-99q48 72 126.5 116T480-120q75 0 140.5-28.5t114-77q48.5-48.5 77-114T840-480h80q0 91-34.5 171T791-169q-60 60-140 94.5T480-40Zm-36-160v-52q-47-11-76.5-40.5T324-370l66-26q12 41 37.5 61.5T486-314q33 0 56.5-15.5T566-378q0-29-24.5-47T454-466q-59-21-86.5-50T340-592q0-41 28.5-74.5T446-710v-50h70v50q36 3 65.5 29t40.5 61l-64 26q-8-23-26-38.5T482-648q-35 0-53.5 15T410-592q0 26 23 41t83 35q72 26 96 61t24 77q0 29-10 51t-26.5 37.5Q583-274 561-264.5T514-250v50h-70ZM40-480q0-91 34.5-171T169-791q60-60 140-94.5T480-920q112 0 206 51t154 136v-107h80v240H680v-80h99q-48-72-126.5-116T480-840q-75 0-140.5 28.5t-114 77q-48.5 48.5-77 114T120-480H40Z" />
                                    </svg>
                                    <p class="text-purple-800 font-medium">سياسة الإرجاع</p>
                                </div>
                                <p class="text-sm text-start mt-2">شحن مجاني شحن سريع مجاني للطلبات أكثر من SR334.49
                                    تاريخ التوصيل المحتمل في 2024/10/20 - 2024/10/23.</p>
                            </button>
                            <button class="item paymentSecurityPopupBtn">
                                <div class="flex justify-start items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#5B26FB">
                                        <path
                                            d="m438-338 226-226-57-57-169 169-84-84-57 57 141 141Zm42 258q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q104-33 172-132t68-220v-189l-240-90-240 90v189q0 121 68 220t172 132Zm0-316Z" />
                                    </svg>
                                    <p class="text-purple-800 font-medium">أمن التسوق</p>
                                </div>
                                <p class="text-sm text-start mt-2">شحن مجاني شحن سريع مجاني للطلبات أكثر من SR334.49
                                    تاريخ التوصيل المحتمل في 2024/10/20 - 2024/10/23.</p>
                            </button>
                        </div>
                        @if (@$product->sizes)
                        <div class="main-accordion my-4">
                            <button
                                class="main-accordion-header bg-white flex justify-between items-center w-full"><span>المقاس
                                    وصالح</span><span class="toggle-icon text-2xl">-</span></button>
                            <div class="main-accordion-content">
                                <div class="tabs flex justify-start items-center gap-2">
                                    <div class="tab active" onclick="changeUnits('cm')">CM</div>
                                    <div class="tab" onclick="changeUnits('in')">IN</div>
                                </div>

                                <div class="w-full table_prod">
                                    <table id="sizeTable"
                                        class="w-max table-auto bg-white border border-gray-300 rounded-lg shadow-md mt-3">
                                        <thead>
                                            <tr class="bg-purple-800 text-white">
                                                <th class="py-2 px-4 border-b">مقاس</th>
                                                <th class="py-2 px-4 border-b">الطول</th>
                                                <th class="py-2 px-4 border-b">طول الأكمام</th>
                                                <th class="py-2 px-4 border-b">قياس الصدر</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="hover:bg-gray-100">
                                                <td class="py-2 px-4 border-b">0XL</td>
                                                <td class="height py-2 px-4 border-b">37</td>
                                                <td class="sleeve py-2 px-4 border-b">22.8</td>
                                                <td class="chest py-2 px-4 border-b">43.3</td>
                                            </tr>
                                            <tr class="hover:bg-gray-100">
                                                <td class="py-2 px-4 border-b">1XL</td>
                                                <td class="height py-2 px-4 border-b">37.8</td>
                                                <td class="sleeve py-2 px-4 border-b">23.2</td>
                                                <td class="chest py-2 px-4 border-b">45.7</td>
                                            </tr>
                                            <tr class="hover:bg-gray-100">
                                                <td class="py-2 px-4 border-b">2XL</td>
                                                <td class="height py-2 px-4 border-b">38.6</td>
                                                <td class="sleeve py-2 px-4 border-b">23.6</td>
                                                <td class="chest py-2 px-4 border-b">48</td>
                                            </tr>
                                            <tr class="hover:bg-gray-100">
                                                <td class="py-2 px-4 border-b">3XL</td>
                                                <td class="height py-2 px-4 border-b">39.4</td>
                                                <td class="sleeve py-2 px-4 border-b">24</td>
                                                <td class="chest py-2 px-4">50.4</td>
                                            </tr>
                                            <tr class="hover:bg-gray-100">
                                                <td class="py-2 px-4 border-b">4XL</td>
                                                <td class="height py-2 px-4 border-b">40.2</td>
                                                <td class="sleeve py-2 px-4 border-b">24.4</td>
                                                <td class="chest py-2 px-4">52.8</td>
                                            </tr>
                                            <tr class="hover:bg-gray-100">
                                                <td class="py-2 px-4 border-b">5XL</td>
                                                <td class="height py-2 px-4 border-b">40.9</td>
                                                <td class="sleeve py-2 px-4 border-b">24.8</td>
                                                <td class="chest py-2 px-4">55.1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>



                            </div>
                        </div>
                        @endif
                        @if (@$product->company_id)
                        <div class="main-accordion my-4">
                            <button
                                class="main-accordion-header bg-white flex justify-between items-center w-full"><span>حول
                                    الشركة المنتجة</span><span class="toggle-icon text-2xl">-</span></button>
                            <div class="main-accordion-content">
                                <div class="flex justify-start items-center gap-2">
                                    <img src="{{ $product->company->image }}"
                                        class="w-10 h-10 rounded-full" alt="">
                                    <div class="name_store">
                                        <p class="text-sm font-medium">{{  $product->company->name  }}</p>
                                    </div>
                                </div>
                                <div class="btns_stor flex justify-start items-center gap-2 my-3">
                                    <a href=""
                                        class="border border-purple-800 text-xs text-purple-800 py-2 px-5 transition-all duration-200 hover:bg-purple-800 hover:text-white md:px-8 md:text-sm">كل
                                        المنتجات</a>
                                    <button
                                        class="border border-purple-800 text-xs text-purple-800 py-2 px-5 transition-all duration-200 hover:bg-purple-800 hover:text-white md:px-8 md:text-sm">+
                                        متابع</button>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
            <div class="end my-5 wow fadeInUp">
                <h1 class="text-3xl">ما ينظر إليه الآخرون</h1>
                <div class="flex flex-wrap justify-center md:justify-between items-center gap-2 mt-4">
                    @foreach ($products as $pro)


                    <a href="" class="tab_card h-2/4 text-decoration-none rounded-md relative overflow-hidden">
                        <div class="image">
                            <img src="{{ $pro->image }}"
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

                    @endforeach
                </div>
            </div>
        </div>
    </main>
@stop
@section('js'
)

<script>
   $(document).ready(function() {
    $('#copyButton').on('click', function() {
        // استخراج النص من الوصف
        var textToCopy = $('#productDescription').text();

        // إنشاء عنصر مؤقت لنسخ النص
        var $temp = $('<textarea>');
        $('body').append($temp);
        $temp.val(textToCopy).select();
        document.execCommand('copy'); // تنفيذ النسخ
        $temp.remove();

        // تغيير لون زر النسخ إلى الأخضر
        var $button = $(this); // زر النسخ
        $button.find('svg').attr('fill', '#28a745'); // تغيير لون الأيقونة إلى الأخضر

        // إعادة اللون الأصلي بعد 3 ثوانٍ
        setTimeout(function() {
            $button.find('svg').attr('fill', '#5f6368'); // اللون الأصلي
        }, 3000);
    });
});


$(document).ready(function() {
            // عند تحميل الصفحة، تحقق من جميع الأزرار التي تحتوي على .add-to-favorite
            $('.add-to-favorite').each(function() {
                let isFilled = $(this).data('type') === 'yes'; // التحقق من قيمة data-type
                if (isFilled) {
                    // إذا كانت القيمة yes، ضع أيقونة القلب الممتلئ باللون الأبيض
                    $(this).html(`
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
    <path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z"/>
</svg>

            `);
                } else {
                    // إذا كانت القيمة no، ضع أيقونة القلب الفارغ
                    $(this).html(`
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px"
                                    fill="">
                                    <path
                                        d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                </svg>
            `);
                }
            });
        });


    $('.add-to-favorite').on('click', function(event) {
        event.preventDefault(); // منع السلوك الافتراضي للزر

        let $button = $(this); // الزر الحالي
        let isFilled = $button.data('type'); // تحقق إذا كانت الأيقونة ممتلئة
        let id = $button.data('id'); // جلب الـ ID الخاص بالمنتج
        let type = $button.data('type'); // جلب الـ ID الخاص بالمنتج
        let token = $('meta[name="csrf-token"]').attr('content'); // جلب CSRF Token

        // تبديل الحالة بين ممتلئ وفارغ
        if (isFilled == 'no') {
            // إذا كانت ممتلئة، اجعلها فارغة
            $button.data('type', 'no').html(`
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px"
                                    fill="">
                                    <path
                                        d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                </svg>

        `);;
        } else {
            // إذا كانت فارغة، اجعلها ممتلئة
            $button.data('type', 'yes').html(`
           <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5B26FB">
    <path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z"/>
</svg>

        `);;
        }

        // تنفيذ طلب AJAX لإرسال الحالة الجديدة إلى السيرفر
        $.ajax({
            type: 'POST',
            url: "{{ route('client.products.addToFavorite') }}", // تحقق من صحة المسار
            data: {
                _token: token, // إرسال التوكن
                id: id ,
                type: type // إرسال الـ ID الخاص بالمنتج
            },
            success: function(result) {
                toastr.success("تم تحديث المفضلة بنجاح!"); // إشعار النجاح
            },
            error: function(error) {
                console.log(error); // تسجيل الخطأ في الكونسول
                toastr.error("حدث خطأ أثناء التحديث."); // إشعار الخطأ
            }
        });
    });

    $(document).ready(function () {
    $('#add-to-cart-btn').click(function (e) {
        e.preventDefault(); // منع إعادة تحميل الصفحة

        // جمع البيانات
        let colors = [];
        $('input[name="colors[]"]:checked').each(function () {
            colors.push($(this).val());
        });

        let size = $('input[name="size"]:checked').val();
        let quantity = $('input[name="quantity"]').val();
        let productId = "{{ $product->id }}"; // معرف المنتج من الخلفية

        // إرسال طلب AJAX
        $.ajax({
            url: "{{ route('client.products.addtocart') }}", // استبدل هذا بالمسار الصحيح في التطبيق
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}", // أضف رمز CSRF
                product_id: productId,
                quantity: quantity,
                colors: colors,
                size: size,
            },
            success: function (response) {
                // عرض رسالة نجاح أو تحديث عربة التسوق
                alert(response.message);
            },
            error: function (xhr, status, error) {
                // عرض رسالة خطأ
                alert('حدث خطأ أثناء إضافة المنتج إلى عربة التسوق');
            },
        });
    });
});


</script>





@stop
