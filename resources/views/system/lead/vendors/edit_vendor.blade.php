@extends('layouts.app', ['activePage' => 'vendors', 'titlePage' => __('الموردون')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="row">
                                <div class="col-md-9 align-self-center">
                                    <h4 class="card-title ">تعديل بيانات المورد: {{$vendor->vendor_name}} </h4>
                                </div>
                                <div class="col-md-3 text-center align-self-center">
                                    <form method="get" action="/vendors">
                                        <button class="btn btn-success"><i class="material-icons mdc-button__icon">keyboard_arrow_right</i>العودة لكل الموردين<div class="ripple-container"></div></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/vendors/{{$vendor->id}}" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="vendor_name" class="form-control" value="{{$vendor->vendor_name}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="vendor_nid" class="form-control" value="{{$vendor->vendor_nid}}" maxlength="14" minlength="14">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select id="inputState" name="vendor_type" class="form-control">
                                            <option {{ ($vendor->vendor_type == 'نوع المورد غير محدد') ? 'selected' : '' }}>اختر نوع المورد</option>
                                            <option {{ ($vendor->vendor_type == 'مورد عادى') ? 'selected' : '' }}>مورد عادى</option>
                                            <option {{ ($vendor->vendor_type == 'تاجر') ? 'selected' : '' }}>تاجر</option>
                                            <option {{ ($vendor->vendor_type == 'مورد') ? 'selected' : '' }}>مورد</option>
                                            <option {{ ($vendor->vendor_type == 'مؤسسة') ? 'selected' : '' }}>مؤسسة</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="vendor_phone" class="form-control" value="{{$vendor->vendor_phone}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="vendor_email" class="form-control" value="{{$vendor->vendor_email}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="date" name="vendor_birthDate" class="form-control" value="{{$vendor->vendor_birthDate}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="vendor_bankAccountNumber" class="form-control" value="{{$vendor->vendor_bankAccountNumber}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="vendor_address">{{$vendor->vendor_address}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="vendor_notes">{{$vendor->vendor_notes}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary">حفظ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
