@extends('layouts.master')

@section('title', 'المميزات - محمد عبده العسيري للإستقدام (تدابير)')

@section('content')


    <main id="primary" class="site-main feature">


        <header class="page-header">
            <div class="container">
                <h1 class="page-title">المميزات</h1>
            </div>
        </header>
        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <div class="item">
                        <span class="icon"><i class="fas fa-car"></i></span>
                        <h2>إيصال العمالة الي المنزل</h2>
                        <span style="background-image:url()"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <span class="icon"><i class="fas fa-users-cog"></i></span>
                        <h2>ضمان 3 شهور</h2>
                        <span style="background-image:url({{asset("assets/images/f3.webp")}})"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <span class="icon"><i class="fas fa-laptop"></i></span>
                        <h2>مرخصين من وزارة العمل ومساند</h2>
                        <span style="background-image:url({{asset("assets/images/f2.webp")}})"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <span class="icon"><i class="fas fa-headset"></i></span>
                        <h2>خدمة عملاء مميزة على مدار اليوم</h2>
                        <span style="background-image:url({{asset("assets/images/f1.webp")}})"></span>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->




@endsection
