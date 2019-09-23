@extends('layouts.app', ['activePage' => 'companies', 'titlePage' => __('المؤسسات')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="row">
                                <div class="col-md-9 align-self-center">
                                    <h4 class="card-title ">تعديل بيانات المؤسسة: {{$company->company_name}} </h4>
                                </div>
                                <div class="col-md-3 text-center align-self-center">
                                    <form method="get" action="/companies">
                                        <button class="btn btn-success"><i class="material-icons mdc-button__icon">keyboard_arrow_right</i>العودة لكل المؤسسات<div class="ripple-container"></div></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/companies/{{$company->id}}" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="company_name" class="bmd-label-floating">اسم المؤسسة</label>
                                        <input type="text" name="company_name" class="form-control" id="company_name" value="{{$company->company_name}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="company_status" id="company_status">
                                            <option {{ ($company->company_status == 'نوع العميل غير محدد') ? 'selected' : '' }}>حالة المؤسسة</option>
                                            <option {{ ($company->company_status == 'تعمل حاليا') ? 'selected' : '' }}>تعمل حاليا</option>
                                            <option {{ ($company->company_status == 'لا تعمل حاليا') ? 'selected' : '' }}>لا تعمل حاليا</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_phone1" class="bmd-label-floating">رقم الهاتف 1</label>
                                        <input type="number" name="company_phone1" class="form-control" id="company_phone1" value="{{$company->company_phone1}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_phone2" class="bmd-label-floating">رقم الهاتف 2</label>
                                        <input type="number" name="company_phone2" class="form-control" id="company_phone2" value="{{$company->company_phone2}}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="company_startDate" class="bmd-label" style="top:-10px;">تاريخ بداية التعامل</label>
                                        <input type="date" name="company_startDate" class="form-control" id="company_startDate" value="{{$company->company_startDate}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_endDate" class="bmd-label" style="top:-10px">تاريخ انتهاء التعامل</label>
                                        <input type="date" name="company_endDate" class="form-control" id="company_endDate" value="{{$company->company_endDate}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_email" class="bmd-label-floating">البريد الالكترونى</label>
                                        <input type="email" name="company_email" class="form-control" id="company_email" value="{{$company->company_email}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_inchargeName" class="bmd-label-floating">اسم المسئول</label>
                                        <input type="text" name="company_inchargeName" class="form-control" id="company_inchargeName" value="{{$company->company_inchargeName}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_inchargePhone" class="bmd-label-floating">رقم تليفون المسئول</label>
                                        <input type="text" name="company_inchargePhone" class="form-control" id="company_inchargePhone" value="{{$company->company_inchargePhone}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_inchargeJob" class="bmd-label-floating">وظيفة المسئول</label>
                                        <input type="text" name="company_inchargeJob" class="form-control" id="company_inchargeJob" value="{{$company->company_inchargeJob}}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div><img src="{{asset('storage')}}/companies/Pics/{{$company->company_pic1}}" width="460px" height="200px"/></div>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <input type="file" multiple="" class="inputFileHidden" name="company_pic1">
                                            <div class="input-group">
                                                <input type="text"  class="form-control inputFileVisible" placeholder="الصورة 1">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-fab btn-round btn-primary">
                                                        <i class="material-icons">attach_file</i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div><img src="{{asset('storage')}}/companies/Pics/{{$company->company_pic2}}" width="460px" height="200px"/></div>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <input type="file" multiple="" class="inputFileHidden" name="company_pic2">
                                            <div class="input-group">
                                                <input type="text"  class="form-control inputFileVisible" placeholder="الصورة 2">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-fab btn-round btn-primary">
                                                        <i class="material-icons">attach_file</i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_bankAccountNumber" class="bmd-label-floating">رقم الحساب البنكى</label>
                                        <input type="text" name="company_bankAccountNumber" class="form-control" id="company_bankAccountNumber" value="{{$company->company_bankAccountNumber}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="company_address" class="bmd-label-floating">العنوان كاملا</label>
                                        <textarea class="form-control" name="company_address" id="company_address">{{$company->company_address}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="company_notes" class="bmd-label-floating">ملاحظات</label>
                                        <textarea class="form-control" name="company_notes" id="company_notes">{{$company->company_notes}}</textarea>
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
