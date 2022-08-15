@extends('layouts.master')

@section('title', 'الأسئلة الشائعة - محمد عبده العسيري للإستقدام (تدابير)')

@section('content')


    <div class="page-header">
        <div class="container">
            <h1 class="page-title">الأسئلة الشائعة</h1>
        </div>
    </div>

    <div class="entry-content">
        <div class="container">
            <div class="text-center">
                <div></div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-0">
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-0" aria-expanded="true" aria-controls="collapse-0">
                            كيف يتم استخراج التأشيرة؟ </button>
                    </h2>
                    <div id="collapse-0" class="accordion-collapse collapse show" aria-labelledby="heading-0"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ol>
                                <li>فتح حساب في مساند</li>
                                <li>ادخل حسابي</li>
                                <li>لوحة التحكم</li>
                                <li>اصدار تأشيرة</li>
                                <li>تأشيرة عاملة منزلية</li>
                                <li>الجنسية</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                            كم مدة استخراج التأشيرة؟ </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse " aria-labelledby="heading-1"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            خلال 24 ساعة. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            ماهي الأوراق المطلوبة للاستقدام؟ </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="heading-2"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ol>
                                <li>التأشيرة</li>
                                <li>بطاقة الأحوال</li>
                                <li>الرقم المربوط بابشر</li>
                                <li>اختيار السيفي المناسب لربط العقد.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            ماهي أسباب رفض إصدار تأشيرة؟ </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="heading-3"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ol>
                                <li>المخالفات</li>
                                <li>تجاوز الحد في العدد المسموح به</li>
                                <li>إيقاف الخدمات</li>
                                <li>عدم سداد الرسوم</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            كم من الوقت تستغرقه عملية الاستقدام؟ </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="heading-4"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            25 يوم الى 60 يوم كحد اقصى. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            كيف تتم عملية تسليم العاملة؟ </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse " aria-labelledby="heading-5"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            في المكتب المحلي وإذا كان العميل خارج جدة يتم حجز تذكرة للعاملة. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                            كيف ومتى تستلم العاملة راتبها؟ </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse " aria-labelledby="heading-6"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            في وقت تحدده الاسرة او العاملة يتم تحويلة عن طريق stc pay </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                            هل يُمكن تجديد العقد؟ </button>
                    </h2>
                    <div id="collapse-7" class="accordion-collapse collapse " aria-labelledby="heading-7"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            نعم، يتاح للعميل تجديد العقد فور انتهائه. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                            كم مدة حجز السيفي بالموقع؟ </button>
                    </h2>
                    <div id="collapse-8" class="accordion-collapse collapse " aria-labelledby="heading-8"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            48 ساعة. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
