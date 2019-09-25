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
                            <div class="col-md-3 align-self-center">
                                <h4 class="card-title ">كل عمليات المرابحة</h4>
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
                                    <form method="get" action="/deleted-moneymakersprocesses">
                                        <button class="btn btn-danger"><i class="material-icons">delete_forever</i>عرض عمليات المرابحة المحذوفة<div class="ripple-container"></div></button>
                                    </form>
                                @else
                                @endif
                            </div>

                            <div class="col-md-3 text-center align-self-center">
                                <form method="get" action="moneymakersprocesses/create">
                                    <button class="btn btn-success"><i class="material-icons mdc-button__icon">add_circle_outline</i>أضف مورد<div class="ripple-container"></div></button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if($moneymakersprocesses->items()==null)
                                <h3 class="header-primary text-center">لا توجد بيانات لأى عملية مرابحة الى الان</h3>
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
                                        ادارة
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
                                                {{$money_maker_process->money_maker_process_address}}
                                            </td>
                                            <td>
                                                {{$money_maker_process->money_maker_process_phone}}
                                            </td>
                                            <td>
                                                {{$money_maker_process->money_maker_process_phone}}
                                            </td>
                                            <td>
                                                {{$money_maker_process->money_maker_process_phone}}
                                            </td>
                                            <td>
                                                <form method="get" action="/moneymakersprocesses/{{$money_maker_process->id}}/edit" style="float:right;">
                                                    <button class="btn btn-warning btn-round btn-sm">تعديل</button>
                                                </form>
                                                <form method="post" action="/moneymakersprocesses/{{$money_maker_process->id}}/delete" style="float:right;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-round btn-sm" onclick="return confirm('هل أنت متأكد من الحذف ؟')">حذف</button>
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
