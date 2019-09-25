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
                            <div class="col-md-9 align-self-center">
                                <h4 class="card-title ">كل المرابحون المحذوفين</h4>
                            </div>
                            <div class="col-md-3 text-center align-self-center">
                                <form method="get" action="/moneymakers">
                                    <button class="btn btn-success"><i class="material-icons mdc-button__icon">keyboard_arrow_right</i>العودة لكل المرابحون<div class="ripple-container"></div></button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if($moneymakers->items()==null)
                                <h3 class="header-primary text-center">                                لا يوجد مرابحون محذوفون
                                </h3>
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
                                        حذف نهائى
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
                                                <form method="post" action="/moneymakers/{{$money_maker->id}}/restore" style="float:right;">
                                                    @method('GET')
                                                    @csrf
                                                    <button class="btn btn-success btn-round btn-sm" onclick="return confirm('هل أنت متأكد من استعادة المرابح ؟')">استعادة</button>
                                                </form>
                                                <form method="post" action="/moneymakers/{{$money_maker->id}}" style="float:right;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-round btn-sm" onclick="return confirm('هل أنت متأكد من الحذف النهائى ؟')">حذف نهائى</button>
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
