@extends('layouts.master')

@section('title', 'الخدمات - محمد عبده العسيري للإستقدام (تدابير)')

@section('content')


    <main id="primary" class="site-main service">


        <header class="page-header">
            <div class="container">
                <h1 class="page-title">الخدمات</h1>
            </div>
        </header>
        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <div class="item mb-4 mb-md-0">
                        <span class="icon"><i class="fas fa-file-signature"></i></span>
                        <h2><a target="_blank" href="https://api.whatsapp.com/send?phone={{ env('PHONE_NUMBER') }}">طلب
                                استقدام</a>
                        </h2>
                        <div>دفع رسوم الاستقدام عبر التعاقد في برنامج مساند</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item mb-4 mb-md-0">
                        <span class="icon"><i class="fas fa-plane-arrival"></i></span>
                        <h2><a
                                href="{{route('service.arrive')}}">وصول
                                العمالة</a>
                        </h2>
                        <div>وصول العمالة المنزلية من المطار المحلي الى المكتب</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item mb-4 mb-md-0">
                        <span class="icon"><i class="fas fa-users-cog"></i></span>
                        <h2><a href="{{route('service.worker')}}">اختيار العمالة</a>
                        </h2>
                        <div> اختيار السيره الذاتيه للعماله المنزليه عبر البحث في برنامج مساند</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item mb-4 mb-md-0">
                        <span class="icon"><i class="fas fa-passport"></i></span>
                        <h2><a href="{{route('service.issuance')}}">إصدار التأشيرة</a>
                        </h2>
                        <div>طلب اصدار تاشيرة العمالة المنزلية الخاصة بك في برنامج مساند</div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->



@endsection
