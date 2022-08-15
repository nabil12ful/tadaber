@extends('admin.layouts.master')

@section('title', 'الطلبات')

@section('content')

    <div class="container">

        <div class="row text-center">
            <h2>الطلبات</h2>
        </div>
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.order.add') }}" class="btn btn-primary push-right ">اضافة طلب جديد</a>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <table class="table table-light text-center">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>كود الطلب</th>
                            <th>اسم العميل</th>
                            <th>اسم العاملة</th>
                            <th>حالة الطلب</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($order as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->order_code }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->worker }}</td>
                                <td>
                                    @if ($item->status == "جديد") 
                                        <span class="text-info" style="font-weight:700">{{ $item->status }}</span>
                                    @elseif ($item->status == "مكتمل")
                                        <span class="text-success" style="font-weight:700">{{ $item->status }}</span>
                                    @elseif ($item->status == "جاري العمل")
                                        <span class="text-warning" style="font-weight:700">{{ $item->status }}</span>
                                    @elseif ($item->status == "مرفوض")
                                        <span class="text-danger" style="font-weight:700">{{ $item->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.order.edit', $item->id) }}" class="btn btn-success">تعديل</a>
                                    <a href="{{ route('admin.order.view', $item->id) }}" class="btn btn-info">مشاهدة</a>
                                    <a href="{{ route('admin.order.delete', $item->id) }}" class="btn btn-danger">حذف</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">
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
                    {{ $order->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>

    </div>

@endsection
