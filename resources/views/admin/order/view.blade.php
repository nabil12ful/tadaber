@extends('admin.layouts.master')

@section('title', 'اضافة طلب جديد')

@section('content')

    <div class="container">
        @livewireStyles
        <div class="row text-center">
            <h2>اضافة طلب جديد</h2>
        </div>
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.order.manage') }}" class="btn btn-info push-right ">Back</a>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <h6 class="alert alert-success">{{ session('message') }}</h6>
                @endif
                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                @endif
                <form method="post" action="{{ route('admin.order.store') }}" enctype="multipart/form-data">
                    <div class="container px-5">
                        @csrf
                        {{-- start Address --}}
                        <div>
                            <div class="col-9">
                                
                            </div>
                            
                        </div>
                        <form class="row mb-3">
                            <div class="form-group row">
                                <div class="col-3">
                                    <h5>العميل</h5>
                                </div>
                                <div class="col-9">
                                    <select class="form-control selectpicker" id="select-country" placeholder=""
                                        data-live-search="true">
                                        <option>China</option>
                                        <option>Malaysia</option>
                                        <option>Singapore</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        {{-- end Address --}}
                        {{-- start Birthday --}}
                        <div class="row mb-3">
                            <div class="col-3">
                                <h5>العمالة</h5>
                            </div>
                            <div class="col-9">
                                <select class="form-control selectpicker" id="select-country" placeholder=""
                                        data-live-search="true">
                                        <option>China</option>
                                        <option>Malaysia</option>
                                        <option>Singapore</option>
                                    </select>
                            </div>
                        </div>
                        {{-- end Birthday --}}
                        {{-- start submit --}}
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <input name="submit" id="" class="btn btn-primary" type="submit" value="اضافة">
                            </div>

                        </div>
                        {{-- end submit --}}
                    </div>
                </form>
            </div>
        </div>

    </div>
    @livewireScripts
@endsection
