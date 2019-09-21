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
                            <div class="col-md-9 align-self-center">
                                <h4 class="card-title ">كل العملاء المحذوفين</h4>
                            </div>
                            <div class="col-md-3 text-center align-self-center">
                                <form method="get" action="/clients">
                                    <button class="btn btn-success"><i class="material-icons mdc-button__icon">add_circle_outline</i>العودة لكل العملاء<div class="ripple-container"></div></button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if($clients->items()==null)
                                <h3 class="header-primary text-center">                                لا يوجد عملاء محذوفون
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
                                            <form method="post" action="/clients/{{$client->id}}/restore" style="float:right;">
                                                @method('GET')
                                                @csrf
                                                <button class="btn btn-success btn-round btn-sm" onclick="return confirm('هل أنت متأكد من استعادة العميل ؟')">استعادة</button>
                                            </form>
                                            <form method="post" action="/clients/{{$client->id}}" style="float:right;">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-round btn-sm" onclick="return confirm('هل أنت متأكد من الحذف النهائى ؟')">حذف نهائى</button>
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
