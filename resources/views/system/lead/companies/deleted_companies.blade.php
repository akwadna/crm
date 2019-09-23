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
                            <div class="col-md-9 align-self-center">
                                <h4 class="card-title ">كل المؤسسات المحذوفة</h4>
                            </div>
                            <div class="col-md-3 text-center align-self-center">
                                <form method="get" action="/companies">
                                    <button class="btn btn-success"><i class="material-icons mdc-button__icon">keyboard_arrow_right</i>العودة لكل المؤسسات<div class="ripple-container"></div></button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if($companies->items()==null)
                                <h3 class="header-primary text-center">                                لا يوجد عملاء محذوفون
                                </h3>
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
                                        حذف نهائى
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
                                                <form method="post" action="/companies/{{$company->id}}/restore" style="float:right;">
                                                    @method('GET')
                                                    @csrf
                                                    <button class="btn btn-success btn-round btn-sm" onclick="return confirm('هل أنت متأكد من استعادة المؤسسة ؟')">استعادة</button>
                                                </form>
                                                <form method="post" action="/companies/{{$company->id}}" style="float:right;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-round btn-sm" onclick="return confirm('هل أنت متأكد من الحذف النهائى ؟')">حذف نهائى</button>
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
