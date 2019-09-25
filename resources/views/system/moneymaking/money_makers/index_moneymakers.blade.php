@extends('layouts.app', ['activePage' => 'moneymakers', 'titlePage' => __('المرابحون')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('flash-message')
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-md-3 align-self-center">
                                <h4 class="card-title ">كل المرابحون</h4>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <form class="navbar-form">
                                    <div class="input-group no-border">
                                        <input type="text" value="" class="form-control" placeholder="بحث...">
                                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                            <i class="material-icons">search</i>
                                            <div class="ripple-container"></div>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3 text-left align-self-left">

                                @if(auth()->user()->user_group_id==1)
                                    <form method="get" action="/deleted-moneymakers">
                                        <button class="btn btn-danger"><i class="material-icons">delete_forever</i>عرض المرابحون المحذوفون<div class="ripple-container"></div></button>
                                    </form>
                                @else
                                @endif
                            </div>

                            <div class="col-md-3 text-center align-self-center">
                                <form method="get" action="moneymakers/create">
                                    <button class="btn btn-success"><i class="material-icons mdc-button__icon">add_circle_outline</i>أضف مرابح<div class="ripple-container"></div></button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if($moneymakers->items()==null)
                                <h3 class="header-primary text-center">لا توجد بيانات لأى مرابح الى الان</h3>
                            @else
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        م
                                    </th>
                                    <th>
                                        الاسم
                                    </th>
                                    <th>
                                        العنوان
                                    </th>
                                    <th>
                                        التليفون
                                    </th>
                                    <th>
                                        ادارة
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($moneymakers as $money_maker)
                                        <tr>
                                            <td>
                                                {{$money_maker->id}}
                                            </td>
                                            <td class="text-primary">
                                                <a href="/moneymakers/{{$money_maker->id}}">{{$money_maker->money_maker_name}}</a>
                                            </td>
                                            <td>
                                                {{$money_maker->money_maker_address}}
                                            </td>
                                            <td>
                                                {{$money_maker->money_maker_phone}}
                                            </td>
                                            <td>
                                                <form method="get" action="/moneymakers/{{$money_maker->id}}/edit" style="float:right;">
                                                    <button class="btn btn-warning btn-round btn-sm">تعديل</button>
                                                </form>
                                                <form method="post" action="/moneymakers/{{$money_maker->id}}/delete" style="float:right;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-round btn-sm" onclick="return confirm('هل أنت متأكد من الحذف ؟')">حذف</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $moneymakers->links() }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
