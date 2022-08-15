
@extends('admin.layouts.master')

@section('title', 'العمالة')

@section('content')

<div class="container-fluid">
    {{-- @livewireStyles --}}
    <div class="row text-center">
        <h2>العمالة</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-4">
                    <a href="{{route('admin.worker.add')}}" class="btn btn-primary push-right ">اضافة عمالة جديدة</a>
                </div>
                <div class="col-8">
                    <form class="form-inline" method="post" action="{{route('admin.worker.search')}}">
                        <div class="row">
                            @csrf
                            <div class="col-6">
                                <input type="search" name="q" class="form-control" placeholder="اكتب اسم العامل للبحث..">
                            </div>
                            <div class="col-2">
                                <input type="submit" value="بحث" class="btn btn-outline-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <table class="table table-light text-center table-bordered table-responsive">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>الجنسية</th>
                        <th>المهنة</th>
                        <th>الديانة</th>
                        <th>الهاتف</th>
                        <th>المستوى التعليمي</th>
                        <th>الحالة الاجتماعية</th>
                        <th>تاريخ الميلاد</th>
                        <th>رقم الجواز</th>
                        <th>تاريخ الانتهاء</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @forelse ($worker as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->nation}}</td>
                            <td>{{$item->occupation}}</td>
                            <td>{{$item->religion}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->experience}}</td>
                            <td>{{$item->marital_status}}</td>
                            <td>{{$item->birthday}}</td>
                            <td>{{$item->passport_number}}</td>
                            <td>{{$item->pn_expire_date}}</td>
                            <td>
                                <a href="{{ route('admin.worker.edit', $item->id) }}" class="btn btn-success">تعديل</a>
                                <a href="{{ route('admin.worker.view', $item->id) }}" class="btn btn-info">مشاهدة</a>
                                <a href="{{ route('admin.worker.delete', $item->id) }}" class="btn btn-danger">حذف</a>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                    
                </tbody>
            </table>
        </div>
        <div class="card-footer text-center">
            {{-- Pagination --}}
    
            <div class="container links">
                {{ $worker->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>

</div>
@livewireScripts
@endsection

{{--  
name
count famely
address
phone
 --}}