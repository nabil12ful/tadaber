@extends('layouts.master')

@section('title', 'العمالة - المنصة الذهبية للإستقدام')

@section('content')


    <main id="primary" class="site-main worker">


        <header class="page-header">
            <div class="container">
                <h1 class="page-title">العمالة</h1>
            </div>
        </header>
        <div class="container">

            <div class="row">
                @forelse ($items as $item)
                    <div class="col-md-4">
                        <div class="item mb-4 mb-md-0">
                            <a class="image" href="{{asset('uploads/worker/'.$item->image)}}"
                                data-fancybox><img width="1241" height="1755"
                                    src="{{asset('uploads/worker/'.$item->image)}}"
                                    class="attachment-full size-full wp-post-image" alt=""
                                    srcset="{{asset('uploads/worker/'.$item->image)}} 1241w, {{asset('uploads/worker/'.$item->image)}} 212w, {{asset('uploads/worker/'.$item->image)}} 724w, {{asset('uploads/worker/'.$item->image)}} 768w, {{asset('uploads/worker/'.$item->image)}} 1086w"
                                    sizes="(max-width: 1241px) 100vw, 1241px" /></a>
                            <ul>
                                <li>الجنسية: <strong>{{$item->nation}}</strong></li>
                                <li>المهنة: <strong>{{$item->occupation}}</strong></li>
                                <li>الديانة: <strong> {{$item->religion}}</strong></li>
                                <li>الخبرة العلمية: <strong>{{$item->experience}}</strong></li>
                                <li>الحالة الإجتماعية: <strong>{{$item->marital_status}}</strong></li>
                                <li>راتب العمالة: <strong>{{$item->salary}}</strong> ريال</li>
                                <li>سعر الاستقدام: <strong>{{$item->price}} ريال</strong></li>
                            </ul>
                            <div class="alert alert-danger mb-3">
                                <p class="mb-0">لضمان حقك، لا يتم سداد الرسوم بعد الحجز إلا عند طريق منصة مساند</p>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-warning" href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}">حجز
                                    السيرة الذاتية</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <h1>لا يوجد بيانات...</h1>
                    </div>
                @endforelse
                
            </div>
        </div>
    </main><!-- #main -->


@endsection
