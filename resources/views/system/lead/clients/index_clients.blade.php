@extends('layouts.app', ['activePage' => 'clients', 'titlePage' => __('العملاء')])
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
                                <h4 class="card-title ">كل العملاء</h4>
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
                                        <form method="get" action="/deleted-clients">
                                            <button class="btn btn-danger"><i class="material-icons">delete_forever</i>عرض العملاء المحذوفين<div class="ripple-container"></div></button>
                                        </form>
                                    @else
                                    @endif
                            </div>

                                <div class="col-md-3 text-center align-self-center">
                                    <form method="get" action="clients/create">
                                        <button class="btn btn-success"><i class="material-icons mdc-button__icon">add_circle_outline</i>أضف عميل<div class="ripple-container"></div></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if($clients->items()==null)
                                    <h3 class="header-primary text-center">لا توجد بيانات لأى عميل الى الان</h3>
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
                                    @foreach($clients as $client)
                                    <tr>
                                        <td>
                                            {{$client->id}}
                                        </td>
                                        <td class="text-primary">
                                            <a href="/clients/{{$client->id}}">{{$client->client_name}}</a>
                                        </td>
                                        <td>
                                            {{$client->client_address}}
                                        </td>
                                        <td>
                                            {{$client->client_phone}}
                                        </td>
                                        <td>
                                            <form method="get" action="/clients/{{$client->id}}/edit" style="float:right;">
                                                <button class="btn btn-warning btn-round btn-sm">تعديل</button>
                                            </form>
                                            <form method="post" action="/clients/{{$client->id}}/delete" style="float:right;">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-round btn-sm" onclick="return confirm('هل أنت متأكد من الحذف ؟')">حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $clients->links() }}
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
