@extends('admin.layouts.master')

@section('title', 'اضافة دولة جديدة')

@section('content')

<div class="container">
    
    <div class="row text-center">
        <h2>اضافة دولة جديدة</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.country.manage')}}" class="btn btn-info push-right ">Back</a>
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
            <form method="post" action="{{route('admin.country.add')}}" enctype="multipart/form-data">
                <div class="container px-5">
                    @csrf
                    {{-- start NID --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>علم الدولة</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="file" name="logo" accept=".gif, .jpg, .jpeg, .png" required>
                        </div>
                    </div>
                    {{-- end NID --}}
                    {{-- start Full Name --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>اسم الدولة</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="name" required>
                        </div>
                    </div>
                    {{-- end Full Name --}}
                    {{-- start Full Name --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>مدة الاستقدام(باليوم)</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="period" required>
                        </div>
                    </div>
                    {{-- end Full Name --}}
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

@endsection