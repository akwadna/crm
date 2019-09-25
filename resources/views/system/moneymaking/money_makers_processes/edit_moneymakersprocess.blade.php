@extends('layouts.app', ['activePage' => 'moneymakersprocesses', 'titlePage' => __('عمليات المرابحة')])
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
                                        <label for="vendor_name" class="bmd-label" style="top:-10px;">الاسم</label>
                                        <input type="text" name="vendor_name" id="vendor_name" class="form-control" value="{{$vendor->vendor_name}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="vendor_nid" class="bmd-label" style="top:-10px;">الرقم القومى</label>
                                        <input type="text" name="vendor_nid" id="vendor_nid" class="form-control" value="{{$vendor->vendor_nid}}" maxlength="14" minlength="14">
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
                                        <label for="vendor_phone" class="bmd-label" style="top:-10px;">رقم التليفون</label>
                                        <input type="text" name="vendor_phone" id="vendor_phone" class="form-control" value="{{$vendor->vendor_phone}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="vendor_email" class="bmd-label" style="top:-10px;">البريد الالكترونى</label>
                                        <input type="email" name="vendor_email" id="vendor_email" class="form-control" value="{{$vendor->vendor_email}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="vendor_birthDate" class="bmd-label" style="top:-10px;">تاريخ الميلاد</label>
                                        <input type="date" name="vendor_birthDate" id="vendor_birthDate" class="form-control" value="{{$vendor->vendor_birthDate}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="vendor_bankAccountNumber" class="bmd-label" style="top:-10px;">رقم الحساب البنكى</label>
                                        <input type="text" name="vendor_bankAccountNumber" id="vendor_bankAccountNumber" class="form-control" value="{{$vendor->vendor_bankAccountNumber}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="vendor_address" class="bmd-label" style="top:-10px;">العنوان كاملا</label>
                                        <textarea class="form-control" id="vendor_address" name="vendor_address">{{$vendor->vendor_address}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="vendor_notes" class="bmd-label" style="top:-10px;">ملاحظات</label>
                                        <textarea class="form-control" id="vendor_notes" name="vendor_notes">{{$vendor->vendor_notes}}</textarea>
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
