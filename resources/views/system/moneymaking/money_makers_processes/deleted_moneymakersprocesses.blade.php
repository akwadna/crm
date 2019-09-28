@extends('layouts.app', ['activePage' => 'moneymakersprocesses', 'titlePage' => __('عمليات المرابحة')])
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
                            <div class="col-md-8 align-self-center">
                                <h4 class="card-title ">كل عمليات المرابحة المحذوفة</h4>
                            </div>
                            <div class="col-md-4 text-center align-self-center">
                                <form method="get" action="/moneymakersprocesses">
                                    <button class="btn btn-success"><i class="material-icons mdc-button__icon">keyboard_arrow_right</i>العودة لكل عمليات المرابحة<div class="ripple-container"></div></button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if($moneymakersprocesses->items()==null)
                                <h3 class="header-primary text-center">                                لا توجد عمليات مرابحة محذوفة
                                </h3>
                            @else
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        م
                                    </th>
                                    <th>
                                        اسم العملية
                                    </th>
                                    <th>
                                        اسم المرابح
                                    </th>
                                    <th>
                                        نوع عملية المرابحة
                                    </th>
                                    <th>
                                        قمية المرابحة
                                    </th>
                                    <th>
                                        المبلغ المتبقى
                                    </th>
                                    <th>
                                        حذف نهائى
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($moneymakersprocesses as $money_maker_process)
                                        <tr>
                                            <td>
                                                {{$money_maker_process->id}}
                                            </td>
                                            <td class="text-primary">
                                                <a href="/moneymakersprocesses/{{$money_maker_process->id}}">{{$money_maker_process->money_maker_process_name}}</a>
                                            </td>
                                            <td>
                                                @php
                                                    $x=$money_maker_process->money_maker_id;
                                                   echo $moneymakers[$x-1]->money_maker_name;
                                                @endphp
                                            </td>
                                            <td>
                                                {{$money_maker_process->money_maker_process_type}}
                                            </td>
                                            <td>
                                                {{$money_maker_process->money_maker_process_price}}
                                            </td>
                                            <td>
                                                {{$money_maker_process->money_maker_process_remainPrice}}
                                            </td>
                                            <td>
                                                <form method="post" action="/moneymakersprocesses/{{$money_maker_process->id}}/restore" style="float:right;">
                                                    @method('GET')
                                                    @csrf
                                                    <button class="btn btn-success btn-round btn-sm" onclick="return confirm('هل أنت متأكد من استعادة عملية المرابحة ؟')">استعادة</button>
                                                </form>
                                                <form method="post" action="/moneymakersprocesses/{{$money_maker_process->id}}" style="float:right;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-round btn-sm" onclick="return confirm('هل أنت متأكد من الحذف النهائى ؟')">حذف نهائى</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $moneymakersprocesses->links() }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
