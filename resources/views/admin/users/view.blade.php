@extends('admin.layouts.master')

@section('title', 'مشاهدة بيانات العميل')

@section('content')

<div class="container">
    
    <div class="row text-center">
        <h2>مشاهدة بيانات العميل</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.users.manage')}}" class="btn btn-info push-right ">Back</a>
        </div>
        <div class="card-body">
            @if (session('message'))
                <h6 class="alert alert-success">{{ session('message') }}</h6>
            @endif
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                </ul>
            @endif
            <form method="post" action="{{route('admin.users.update', $users->id)}}" enctype="multipart/form-data">
                <div class="container px-5">
                    @csrf
                    {{-- start Full Name --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>اسم العميل</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="name" value="{{$users->name}}" disabled>
                        </div>
                    </div>
                    {{-- end Full Name --}}
                    {{-- start Full Name --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>عدد افراد الاسرة</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="number" name="count_family" value="{{$users->count_family}}" disabled>
                        </div>
                    </div>
                    {{-- start Full Name --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الهاتف</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="phone" value="{{$users->phone}}" disabled>
                        </div>
                    </div>
                    {{-- end Full Name --}}
                    {{-- start Full Name --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>العنوان</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="address" value="{{$users->address}}" disabled>
                        </div>
                    </div>
                    {{-- start submit --}}
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-9">
                            <a href="{{route('admin.users.edit', $users->id)}}" class="btn btn-success">تعديل</a>
                        </div>
                        
                    </div>
                    {{-- end submit --}}
                </div>
            </form>
        </div>
    </div>

</div>

@endsection