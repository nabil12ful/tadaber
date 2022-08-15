@extends('admin.layouts.master')

@section('title', 'العملاء')

@section('content')

    <div class="container">

        <div class="row text-center">
            <h2>العملاء</h2>
        </div>
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.users.add') }}" class="btn btn-primary push-right ">اضافة عميل جديد</a>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <table class="table table-light text-center">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>اسم العميل</th>
                            <th>عدد افراد الاسرة</th>
                            <th>رقم الهاتف</th>
                            <th>العنوان</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($users as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->count_family }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $item->id) }}" class="btn btn-success">تعديل</a>
                                    <a href="{{ route('admin.users.view', $item->id) }}" class="btn btn-info">مشاهدة</a>
                                    <a href="{{ route('admin.users.delete', $item->id) }}" class="btn btn-danger">حذف</a>
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
