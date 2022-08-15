@extends('admin.layouts.master')

@section('title', 'دول الاستقدام')

@section('content')

    <div class="container">

        <div class="row text-center">
            <h2>دول الاستقدام</h2>
        </div>
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.country.add') }}" class="btn btn-primary push-right ">اضافة دولة جديدة</a>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <table class="table table-light text-center">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>علم الدولة</th>
                            <th>اسم الدولة</th>
                            <th>مدة الاستقدام</th>
                            <th>العمالة من هذه الولة</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($country as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img src="{{asset('uploads/country/' .  $item->logo) }}" alt="{{ $item->name }}" width="90" height="90">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->period }}</td>
                                <td>{{ $item->worker }}</td>
                                <td>
                                    <a href="{{ route('admin.country.edit', $item->id) }}" class="btn btn-success">تعديل</a>
                                    <a href="{{ route('admin.country.delete', $item->id) }}" class="btn btn-danger">حذف</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <span class="h6 text-muted">لا يوجد بيانات...</span>
                                </td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
            <div class="card-footer text-center">
                {{-- Pagination --}}

                <div class="container links">
                    {{-- {{ $custs->links('vendor.pagination.bootstrap-4') }} --}}
                </div>
            </div>
        </div>

    </div>

@endsection
