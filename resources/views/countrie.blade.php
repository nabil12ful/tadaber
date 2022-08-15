@extends('layouts.master')

@section('title', 'دول الإستقدام - محمد عبده العسيري للإستقدام (تدابير)')

@section('content')


<main id="primary" class="site-main countrie">


    <header class="page-header">
        <div class="container">
            <h1 class="page-title">دول الإستقدام</h1>
        </div>
    </header>
    <div class="container">

        <div class="row">

            @forelse ($items as $item)
                <div class="col-lg-3 col-md-4">
                    <div class="item text-center">
                        <figure><img width="276" height="184" src="{{asset('uploads/country/'.$item->logo)}}"
                                class="attachment-full size-full wp-post-image" alt="" loading="lazy" /></figure>
                        <div class="caption">
                            <div>
                                <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}&text=Country={{$item->name}}" class="title">{{$item->name}}</a>
                                <p>
                                    مدة الاستقدام في خلال {{$item->period}} يوم </p>
                                <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}&text=Country={{$item->name}}" class="btn btn-warning"
                                    target="_blank">اطلب الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <h1>لا يوجد بيانات</h1>
                </div>
            @endforelse
            {{-- <div class="col-lg-3 col-md-4">
                <div class="item text-center">
                    <figure><img width="276" height="184" src="{{asset('assets/images/OGANDA1.png')}}"
                            class="attachment-full size-full wp-post-image" alt="" loading="lazy" /></figure>
                    <div class="caption">
                        <div>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}&text=Country=اوغندا" class="title">اوغندا</a>
                            <p>
                                مدة الاستقدام في خلال 60 يوم </p>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}&text=Country=اوغندا" class="btn btn-warning"
                                target="_blank">اطلب الآن</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="item text-center">
                    <figure><img width="276" height="184" src="{{asset('assets/images/kee.png')}}"
                            class="attachment-full size-full wp-post-image" alt="" loading="lazy" /></figure>
                    <div class="caption">
                        <div>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="title">كينيا</a>
                            <p>
                                مدة الاستقدام في خلال 60 يوم </p>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="btn btn-warning"
                                target="_blank">اطلب الآن</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="item text-center">
                    <figure><img width="241" height="166" src="{{asset('assets/images/BANA.jpeg')}}"
                            class="attachment-full size-full wp-post-image" alt="" loading="lazy" /></figure>
                    <div class="caption">
                        <div>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="title">بنغلادش</a>
                            <p>
                                مدة الاستقدام في خلال 60 يوم </p>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="btn btn-warning"
                                target="_blank">اطلب الآن</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="item text-center">
                    <figure><img width="241" height="166" src="{{asset('assets/images/egy.png')}}"
                            class="attachment-full size-full wp-post-image" alt="" loading="lazy" /></figure>
                    <div class="caption">
                        <div>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="title">مصر</a>
                            <p>
                                مدة الاستقدام في خلال 60 يوم </p>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="btn btn-warning"
                                target="_blank">اطلب الآن</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="item text-center">
                    <figure><img width="269" height="176" src="{{asset('assets/images/INDOA.png')}}"
                            class="attachment-full size-full wp-post-image" alt="" loading="lazy" /></figure>
                    <div class="caption">
                        <div>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="title">الهند</a>
                            <p>
                                مدة الاستقدام في خلال 60 يوم </p>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="btn btn-warning"
                                target="_blank">اطلب الآن</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="item text-center">
                    <figure><img width="264" height="186" src="{{asset('assets/images/BAS.png')}}"
                            class="attachment-full size-full wp-post-image" alt="" loading="lazy" /></figure>
                    <div class="caption">
                        <div>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="title">باكستان</a>
                            <p>
                                مدة الاستقدام في خلال 60 يوم </p>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="btn btn-warning"
                                target="_blank">اطلب الآن</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="item text-center">
                    <figure><img width="274" height="181" src="{{asset('assets/images/FELL.jpeg')}}"
                            class="attachment-full size-full wp-post-image" alt="" loading="lazy" /></figure>
                    <div class="caption">
                        <div>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="title">الفلبين</a>
                            <p>
                                مدة الاستقدام في خلال 60 يوم </p>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="btn btn-warning"
                                target="_blank">اطلب الآن</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="item text-center">
                    <figure><img width="274" height="181" src="{{asset('assets/images/msa.png')}}"
                            class="attachment-full size-full wp-post-image" alt="" loading="lazy" /></figure>
                    <div class="caption">
                        <div>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}"
                                class="title">موريتانيا</a>
                            <p>
                                مدة الاستقدام في خلال 60 يوم </p>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="btn btn-warning"
                                target="_blank">اطلب الآن</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="item text-center">
                    <figure><img width="255" height="170" src="{{asset('assets/images/MOROCO.jpeg')}}"
                            class="attachment-full size-full wp-post-image" alt="" loading="lazy" /></figure>
                    <div class="caption">
                        <div>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="title">المغرب</a>
                            <p>
                                مدة الاستقدام في خلال 60 يوم </p>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="btn btn-warning"
                                target="_blank">اطلب الآن</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="item text-center">
                    <figure><img width="277" height="186" src="{{asset('assets/images/jjj.png')}}"
                            class="attachment-full size-full wp-post-image" alt="" loading="lazy" /></figure>
                    <div class="caption">
                        <div>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="title">جيبوتي</a>
                            <p>
                                مدة الاستقدام في خلال 60 يوم </p>
                            <a href="https://api.whatsapp.com/send?phone={{env('PHONE_NUMBER')}}" class="btn btn-warning"
                                target="_blank">اطلب الآن</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</main><!-- #main -->




@endsection
