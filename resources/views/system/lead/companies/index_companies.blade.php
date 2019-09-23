@extends('layouts.app', ['activePage' => 'companies', 'titlePage' => __('المؤسسات')])
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
                                <h4 class="card-title ">كل المؤسسات</h4>
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
                                    <form method="get" action="/deleted-companies">
                                        <button class="btn btn-danger"><i class="material-icons">delete_forever</i>عرض المؤسسات المحذوفة<div class="ripple-container"></div></button>
                                    </form>
                                @else
                                @endif
                            </div>

                            <div class="col-md-3 text-center align-self-center">
                                <form method="get" action="companies/create">
                                    <button class="btn btn-success"><i class="material-icons mdc-button__icon">add_circle_outline</i>أضف مؤسسة<div class="ripple-container"></div></button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if($companies->items()==null)
                                <h3 class="header-primary text-center">لا توجد بيانات لأى مؤسسة الى الان</h3>
                            @else
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        م
                                    </th>
                                    <th>
                                        اسم المؤسسة
                                    </th>
                                    <th>
                                        اسم المسئول
                                    </th>
                                    <th>
                                        تليفون المؤسسة
                                    </th>
                                    <th>
                                        ادارة
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($companies as $company)
                                        <tr>
                                            <td>
                                                {{$company->id}}
                                            </td>
                                            <td class="text-primary">
                                                <a href="/companies/{{$company->id}}">{{$company->company_name}}</a>
                                            </td>
                                            <td>
                                                {{$company->company_inchargeName}}
                                            </td>
                                            <td>
                                                {{$company->company_phone1}}
                                            </td>
                                            <td>
                                                <form method="get" action="/companies/{{$company->id}}/edit" style="float:right;">
                                                    <button class="btn btn-warning btn-round btn-sm">تعديل</button>
                                                </form>
                                                <form method="post" action="/companies/{{$company->id}}/delete" style="float:right;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-round btn-sm" onclick="return confirm('هل أنت متأكد من الحذف ؟')">حذف</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $companies->links() }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
