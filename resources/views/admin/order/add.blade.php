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
                        <div class="row mb-3">
                            <div class="form-group row">
                                <div class="col-3">
                                    <h5>العميل</h5>
                                </div>
                                <div class="col-9">
                                    <select class="form-control selectpicker" name="user_id" id="select-country" placeholder="ابحث عن عميل..."
                                        data-live-search="true">
                                        <option value="">اختر عميل...</option>
                                        @foreach ($users as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- end Address --}}
                        {{-- start Birthday --}}
                        <div class="row mb-3">
                            <div class="form-group row">
                                <div class="col-3">
                                    <h5>العمالة</h5>
                                </div>
                                <div class="col-9">
                                    <select class="form-control selectpicker" name="worker_id" id="select-country" placeholder="ابحث عن عاملة..."
                                            data-live-search="true">
                                        <option value="">اختر عاملة...</option>
                                        @foreach ($worker as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- end Birthday --}}
                        {{-- start submit --}}
                        <div class="row my-2">
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
