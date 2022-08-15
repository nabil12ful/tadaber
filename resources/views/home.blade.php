@extends('layouts.master')
@section('title', 'الرئيسية - محمد عبده العسيري للإستقدام (تدابير)')

@section('content')


    <div class="main-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="item" style="background-image:url({{asset("assets/images/01.jpg")}})">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-lg-6">
                                    <div class="content">
                                        <h1>عرض خاص لفتره محدوده <span>نقل خدمات ب 15999 ريال فقط</span></h1>
                                        <div>
                                            <p>يوجد فتره تجربه وضمان سنتين</p>
                                        </div>
                                        <div class="d-flex">
                                            <a class="btn btn-warning me-4 btn-lg" target="_blank"
                                                href="https://iwtsp.com/{{env('PHONE_NUMBER')}}">طلب
                                                الاستقدام</a>
                                            <a class="btn btn-warning btn-lg" href="allsponsorcv.html">طلب
                                                نقل خدمات</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item" style="background-image:url({{asset("assets/images/02.jpg")}})">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-lg-6">
                                    <div class="content">
                                        <h1>أهلا بك <span>محمد عبده العسيري للإستقدام (تدابير)</span></h1>
                                        <div>
                                            <p>محمد عبده العسيري للإستقدام (تدابير) أحد أعرق المكاتب التي تقدم تجربة
                                                سلسة و شاملة لإستقدام العمالة المنزلية . نهدف في المنصة الذهبية
                                                للاستقدام الى تقديم خدمات متكاملة لزيادة راحة العميل وخلق مستوى
                                                مرتفع من الرضا</p>
                                        </div>
                                        <div class="d-flex">
                                            <a class="btn btn-warning me-4 btn-lg" target="_blank"
                                                href="https://iwtsp.com/{{env('PHONE_NUMBER')}}">طلب
                                                الاستقدام</a>
                                            <a class="btn btn-warning btn-lg" href="allsponsorcvs">طلب
                                                نقل خدمات</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item" style="background-image:url({{asset("assets/images/03.jpg")}})">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-lg-6">
                                    <div class="content">
                                        <h1>أهلا بك <span>محمد عبده العسيري للإستقدام (تدابير)</span></h1>
                                        <div>
                                            <p>محمد عبده العسيري للإستقدام (تدابير) أحد أعرق المكاتب التي تقدم تجربة
                                                سلسة و شاملة لإستقدام العمالة المنزلية . نهدف في المنصة الذهبية
                                                للاستقدام الى تقديم خدمات متكاملة لزيادة راحة العميل وخلق مستوى
                                                مرتفع من الرضا</p>
                                        </div>
                                        <div class="d-flex">
                                            <a class="btn btn-warning me-4 btn-lg" target="_blank"
                                                href="https://iwtsp.com/{{env('PHONE_NUMBER')}}">طلب
                                                الاستقدام</a>
                                            <a class="btn btn-warning btn-lg" href="allsponsorcvs">طلب
                                                نقل خدمات</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <div class="feature">
        <span class="logo-c"></span>
        <div class="container">
            <div class="head">
                <h2>مميزاتنا</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="item">
                        <span class="icon"><i class="fas fa-headset"></i></span>
                        <div>
                            <h2>خدمة عملاء مميزة على مدار اليوم</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <span class="icon"><i class="fas fa-laptop"></i></span>
                        <div>
                            <h2>مرخصين من وزارة العمل ومساند</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <span class="icon"><i class="fas fa-users-cog"></i></span>
                        <div>
                            <h2>ضمان 3 شهور</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <span class="icon"><i class="fas fa-car"></i></span>
                        <div>
                            <h2>إيصال العمالة الي المنزل</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service">
        <span class="logo-c"></span>
        <div class="container">
            <div class="head">
                <h2>خدماتنا</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="item mb-4 mb-md-0">
                        <span class="icon"><i class="fas fa-passport"></i></span>
                        <h2><a target="_blank" href="{{route('service.issuance')}}">إصدار التأشيرة</a>
                        </h2>
                        <div>طلب اصدار تاشيرة العمالة المنزلية الخاصة بك في برنامج مساند</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item mb-4 mb-md-0">
                        <span class="icon"><i class="fas fa-users-cog"></i></span>
                        <h2><a target="_blank" href="{{route('service.worker')}}">اختيار العمالة</a>
                        </h2>
                        <div> اختيار السيره الذاتيه للعماله المنزليه عبر البحث في برنامج مساند</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item mb-4 mb-md-0">
                        <span class="icon"><i class="fas fa-plane-arrival"></i></span>
                        <h2><a target="_blank"
                                href="{{route('service.arrive')}}">وصول
                                العمالة</a>
                        </h2>
                        <div>وصول العمالة المنزلية من المطار المحلي الى المكتب</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item mb-4 mb-md-0">
                        <span class="icon"><i class="fas fa-file-signature"></i></span>
                        <h2><a target="_blank" href="https://iwtsp.com/{{env('PHONE_NUMBER')}}">طلب استقدام</a>
                        </h2>
                        <div>دفع رسوم الاستقدام عبر التعاقد في برنامج مساند</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="countrie" id="countrie">
        <div class="container">
            <div class="head">
                <h2>دول الإستقدام</h2>
            </div>
            <div class="row justify-content-center">

                @foreach ($country as $item)
                    <div class="col-lg-3 col-md-4">
                        <div class="item text-center">
                            <figure><img width="276" height="184" src="{{asset("uploads/country/".$item->logo)}}"
                                    class="attachment-full size-full wp-post-image" alt="" loading="lazy" /></figure>
                            <div class="caption">
                                <div>
                                    <a href="https://iwtsp.com/{{env('PHONE_NUMBER')}}" class="title" target="_blank">{{$item->name}}</a>
                                    <div>
                                        <p>مدة الاستقدام في خلال {{$item->period}} يوم</p>
                                    </div>
                                    <a href="https://iwtsp.com/{{env('PHONE_NUMBER')}}" class="btn btn-warning" target="_blank">اطلب
                                        الآن</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                

            </div>
        </div>
    </div>

    <div class="policies mt-0 mt-md-5"
        style="background-image:url({{asset("assets/images/M9g1ahUtToN4skQVuwudyjNix2SrisiMUhhRkqZO.webp")}})">
        <div class="container">
            <div class="item">
                <h2><a href="{{asset("assets/images/حقوق-وواجبات-صاحب-العمل.pdf")}}">سياسات الاستقدام</a></h2>
                <div>
                    <p>يجب مراعات الضوابط الاتية والتي اقرتها المملكة العربية السعودية حتى تضمن لكلا من العامل وصاحب
                        العمل حقوقهم وواجباتهم</p>
                </div>
                <a class="btn btn-warning btn-lg me-md-3 mb-3 mb-md-0"
                    href="{{asset('assets/images/حقوق-وواجبات-صاحب-العمل.pdf')}}"><i class="fa-solid fa-file-pdf"></i>
                    حقوق وواجبات صاحب العمل</a>
                <a class="btn btn-warning btn-lg" href="{{asset("assets/images/حقوق-وواجبات-العمالة.pdf")}}"><i
                        class="fa-solid fa-file-pdf"></i>
                    حقوق وواجبات العمالة</a>
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="box mb-4 mb-md-0">
                        <div class="head">
                            <h2>ملعومات الإتصال</h2>
                        </div>
                        <div class="content">
                            <ul>
                                <li><a href="tel:{{env('PHONE_NUMBER')}}" target="_blank"><i
                                            class="fa-solid fa-phone-flip"></i>{{env('PHONE_NUMBER')}}</a></li>
                                <li><a href="https://iwtsp.com/{{env('PHONE_NUMBER')}}" target="_blank"><i
                                            class="fa-brands fa-whatsapp"></i>{{env('PHONE_NUMBER')}}</a></li>
                                <li><a href="mailto:mdasiiri@hotmail.com" target="_blank"><i
                                            class="fa-solid fa-envelope"></i>mdasiiri@hotmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map" id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.2934849666935!2d39.211482785622145!3d21.57446427430164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d1090481e049%3A0x252488bc0391e2b8!2z2KfZhNi52LPZitix2Yog2YTZhNin2LPYqtmC2K_Yp9mF!5e0!3m2!1sar!2seg!4v1659648494204!5m2!1sar!2seg"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
