@extends('layouts.master')

@section('title', 'تتبع طلبك - المنصة الذهبية للإستقدام')

@section('content')


<div class="page-header">
    <div class="container">
        <h1 class="page-title">تتبع طلبك</h1>
    </div>
</div>

<div class="entry-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="content">
                    <div>
                        <p style="text-align: center;"><strong>ملاحظة /</strong> هذه الميزة للمسجلين فقط</p>
                    </div>
                    <form action="{{route('track.submit')}}" class="mt-5 form-order">
                        <div class="d-flex">
                            <h3>{{$result}}</h3>
                        </div>
                    </form>

                    <div class="row text-center">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <h3>
                                @if (session('status'))
                                    {{session('status')}}
                                @endif
                            </h3>
                        </div>
                        <div class="col-4"></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
