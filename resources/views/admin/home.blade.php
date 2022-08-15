@extends('admin.layouts.master')

@section('title', 'New test')

@section('content')

    <div class="container">
        {{-- Start Boxs --}}
        <div class="row boxs">

            <div class="col-3">
                <div class="box">
                    <div class="box-icon one">
                        <div class="number">{{$users}}</div>
                    </div>
                    <div class="box-name">
                        <div class="title">العملاء</div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="box">
                    <div class="box-icon two">
                        <div class="number">{{ $worker }}</div>
                    </div>
                    <div class="box-name">
                        <div class="title">العمالة</div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="box">
                    <div class="box-icon three">
                        <div class="number">0</div>
                    </div>
                    <div class="box-name">
                        <div class="title">الطلبات</div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="box">
                    <div class="box-icon four">
                        <div class="number">{{ $country }}</div>
                    </div>
                    <div class="box-name">
                        <div class="title">عدد الدول</div>
                    </div>
                </div>
            </div>

        </div>
        {{-- End Boxs --}}
    {{-- Start recents --}}
    <div class="row justify-content-center">
        {{-- start recent customers --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">الدول الجديدة</div>

                <div class="card-body px-1 py-1">

                    <div class="items">
                        {{-- items here --}}
                        @forelse ($cou as $item)
                            <div class="item">
                                <div class="row">
                                    <div class="col-11 item-info">
                                        <div class="item-image">
                                            <img src="{{ asset('uploads/country/'.$item->logo) }}" alt="">
                                        </div>
                                        <div class="item-name">
                                            <h5>{{$item->name}}</h5>
                                        </div>
                                    </div>
                                    <div class="col-1 item-action">
                                        <a href="{{route('admin.country.edit', $item->id)}}" class="text-success">
                                            <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        @empty
                            <div class="text-center">
                                <span class="h6 text-muted">لا يوجد بيانات...</span>
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
        {{-- End recent customers --}}

        {{-- Start recent Items --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">العمالة الجدد</div>

                <div class="card-body px-1 py-1">
                    
                    <div class="items">
                        {{-- items here --}}
                        @forelse ($work as $item)
                            <div class="item">
                                <div class="row">
                                    <div class="col-11 item-info">
                                        <div class="item-image">
                                            <img src="{{asset('uploads/worker/'.$item->image)}}" alt="">
                                        </div>
                                        <div class="item-name">
                                            <h5>{{$item->name}}</h5>
                                        </div>
                                    </div>
                                    <div class="col-1 item-action">
                                        <a href="{{route('admin.worker.view', $item->id)}}" class="text-success">
                                            <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        @empty
                            <div class="text-center">
                                <span class="h6 text-muted">لا يوجد بيانات...</span>
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
        {{-- End recent Items --}}
    </div>
    {{-- End recents --}}
    </div>

@endsection
