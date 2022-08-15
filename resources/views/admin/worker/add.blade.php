@extends('admin.layouts.master')

@section('title', 'اضافة عمالة جديدة')

@section('content')

<div class="container">

    <div class="row text-center">
        <h2>اضافة عمالة جديدة</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.worker.manage')}}" class="btn btn-info push-right ">Back</a>
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
            <form method="post" action="{{route('admin.worker.store')}}" enctype="multipart/form-data">
                <div class="container px-5">
                    @csrf
                    {{-- start NID --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>صورة</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="file" name="image" accept=".gif, .jpg, .jpeg, .png" required>
                        </div>
                    </div>
                    {{-- end NID --}}
                    {{-- start Full Name --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الاسم</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="name" required>
                        </div>
                    </div>
                    {{-- end Full Name --}}
                    {{-- start Address --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الجنسية</h5>
                        </div>
                        <div class="col-9">
                            <select class="form-select" name="nationality" aria-label="Default select example" required>
                                <option selected>اختر الدولة ...</option>
                                @foreach ($country as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- end Address --}}
                    {{-- start Birthday --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>المهنة</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="occupation" required>
                        </div>
                    </div>
                    {{-- end Birthday --}}
                    {{-- start National ID --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الديانة</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="religion" required>
                        </div>
                    </div>
                    {{-- end National ID --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الهاتف</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="number" name="phone" required>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>المستوى التعليمي</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="experience" required>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الحالة الاجتماعية</h5>
                        </div>
                        <div class="col-9">
                            <select class="form-select" name="marital_status" aria-label="Default select example" required>
                                <option selected>اختر الحالة الاجتماعية ...</option>
                                <option value="اعزب \ عزباء">اعزب \ عزباء</option>
                                <option value="متزوج\ـة">متزوج\ـة</option>
                                <option value="مطلق\ـة">مطلق\ـة</option>
                            </select>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>تاريخ الميلاد</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="date" name="birthday" required>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>رقم الجواز</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="number" name="passport_number" required>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>تاريخ الانتهاء</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="date" name="pn_expire_date" required>
                        </div>
                    </div>
                    {{-- end Phone --}}
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
