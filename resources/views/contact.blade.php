@extends('layouts.master')

@section('title', 'تواصل معنا - محمد عبده العسيري للإستقدام (تدابير)')

@section('content')


    <div class="page-header">
        <div class="container">
            <h1 class="page-title">تواصل معنا</h1>
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
                                <li><a href="tel:{{env('PHONE_NUMBER')}}"><i class="fa-solid fa-phone-flip"></i>
                                        {{env('PHONE_NUMBER')}}</a></li>
                                <li><a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}"><i
                                            class="fa-brands fa-whatsapp"></i> {{env('PHONE_NUMBER')}}</a></li>
                                <li><a href="mailto:mdasiiri@hotmail.com"><i class="fa-solid fa-envelope"></i>
                                        mdasiiri@hotmail.com</a></li>
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
