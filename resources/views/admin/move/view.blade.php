@extends('admin.layouts.master')

@section('title', 'العمالة')

@section('content')

<div class="container">

    <div class="row text-center">
        <h2>بيانات العمالة</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.move.manage')}}" class="btn btn-info push-right ">Back</a>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('admin.move.update', $move->id)}}" enctype="multipart/form-data">
                <div class="container px-5">
                    @csrf
                    {{-- start NID --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>صورة</h5>
                        </div>
                        <div class="col-9">
                            <img src="{{asset('uploads/move/' . $move->image)}}" alt="" width="150" height="150">
                        </div>
                    </div>
                    {{-- end NID --}}
                    {{-- start Full Name --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الاسم</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="name" value="{{$move->name}}" disabled>
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
                                    <option value="{{$item->id}}" @if ($item->id == $move->nationality) selected @endif>{{$item->name}}</option>
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
                            <input class="form-control" type="text" name="occupation" value="{{$move->occupation}}" disabled>
                        </div>
                    </div>
                    {{-- end Birthday --}}
                    {{-- start National ID --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الديانة</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="religion" value="{{$move->religion}}" disabled>
                        </div>
                    </div>
                    {{-- end National ID --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>الهاتف</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="phone" value="{{$move->phone}}" disabled>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>المستوى التعليمي</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="experience" value="{{$move->experience}}" disabled>
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
                                <option value="اعزب \ عزباء" @if ($move->marital_status == "اعزب \ عزباء") selected @endif>اعزب \ عزباء</option>
                                <option value="متزوج\ـة" @if ($move->marital_status == "متزوج\ـة") selected @endif>متزوج\ـة</option>
                                <option value="مطلق\ـة" @if ($move->marital_status == "مطلق\ـة") selected @endif>مطلق\ـة</option>
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
                            <input class="form-control" type="date" name="birthday" value="{{$move->birthday}}" disabled>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>رقم الجواز</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="number" name="passport_number" value="{{$move->passport_number}}" disabled>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    {{-- start Phone --}}
                    <div class="row mb-3">
                        <div class="col-3">
                            <h5>تاريخ الانتهاء</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="date" name="pn_expire_date" value="{{$move->pn_expire_date}}" disabled>
                        </div>
                    </div>
                    {{-- end Phone --}}
                    <div class="row mb-3">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <a href="{{ route('admin.move.edit', $move->id) }}" class="btn btn-success">تعديل</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
