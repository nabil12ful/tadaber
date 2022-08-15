@extends('admin.layouts.master')

@section('title', 'العمالة')

@section('content')

<div class="container">

    <div class="row text-center">
        <h2>بيانات العمالة</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.worker.manage')}}" class="btn btn-info push-right ">Back</a>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('admin.worker.update', $worker->id)}}" enctype="multipart/form-data">
                <div class="container px-5">
                    @csrf
                    {{-- start NID --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>صورة</h5>
                        </div>
                        <div class="col-9">
                            <img src="{{asset('uploads/worker/' . $worker->image)}}" alt="" width="150" height="150">
                        </div>
                    </div>
                    {{-- end NID --}}
                    {{-- start Full Name --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الاسم</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="name" value="{{$worker->name}}" disabled>
                        </div>
                    </div>
                    {{-- end Full Name --}}
                    {{-- start Address --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الجنسية</h5>
                        </div>
                        <div class="col-9">
                            <select class="form-select" name="nationality" aria-label="Default select example" disabled>
                                <option>اختر الدولة ...</option>
                                @foreach ($country as $item)
                                    <option value="{{$item->id}}" @if ($item->id == $worker->nationality) selected @endif>{{$item->name}}</option>
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
                            <input class="form-control" type="text" name="occupation" value="{{$worker->occupation}}" disabled>
                        </div>
                    </div>
                    {{-- end Birthday --}}
                    {{-- start National ID --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الديانة</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="religion" value="{{$worker->religion}}" disabled>
                        </div>
                    </div>
                    {{-- end National ID --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الهاتف</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="phone" value="{{$worker->phone}}" disabled>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>المستوى التعليمي</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="experience" value="{{$worker->experience}}" disabled>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الحالة الاجتماعية</h5>
                        </div>
                        <div class="col-9">
                            <select class="form-select" name="marital_status" aria-label="Default select example" disabled>
                                <option >اختر الحالة الاجتماعية ...</option>
                                <option value="اعزب \ عزباء" @if ($worker->marital_status == "اعزب \ عزباء") selected @endif>اعزب \ عزباء</option>
                                <option value="متزوج\ـة" @if ($worker->marital_status == "متزوج\ـة") selected @endif>متزوج\ـة</option>
                                <option value="مطلق\ـة" @if ($worker->marital_status == "مطلق\ـة") selected @endif>مطلق\ـة</option>
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
                            <input class="form-control" type="date" name="birthday" value="{{$worker->birthday}}" disabled>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>رقم الجواز</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="number" name="passport_number" value="{{$worker->passport_number}}" disabled>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>تاريخ الانتهاء</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="date" name="pn_expire_date" value="{{$worker->pn_expire_date}}" disabled>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    <div class="row mb-3">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <a href="{{ route('admin.worker.edit', $worker->id) }}" class="btn btn-success">تعديل</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
