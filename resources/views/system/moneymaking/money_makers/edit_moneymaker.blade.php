@extends('layouts.app', ['activePage' => 'moneymakers', 'titlePage' => __('المرابحون')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="row">
                                <div class="col-md-9 align-self-center">
                                    <h4 class="card-title ">تعديل بيانات المرابح: {{$money_maker->money_maker_name}} </h4>
                                </div>
                                <div class="col-md-3 text-center align-self-center">
                                    <form method="get" action="/moneymakers">
                                        <button class="btn btn-success"><i class="material-icons mdc-button__icon">keyboard_arrow_right</i>العودة لكل المرابحين<div class="ripple-container"></div></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/moneymakers/{{$money_maker->id}}" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_name" class="bmd-label" style="top:-10px;">الاسم</label>
                                        <input type="text" name="money_maker_name" id="money_maker_name" class="form-control" value="{{$money_maker->money_maker_name}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_nid" class="bmd-label" style="top:-10px;">الرقم القومى</label>
                                        <input type="text" name="money_maker_nid" id="money_maker_nid" class="form-control" value="{{$money_maker->money_maker_nid}}" maxlength="14" minlength="14">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select id="inputState" name="money_maker_processType" class="form-control">
                                            <option {{ ($money_maker->money_maker_processType == 'نوع المرابح غير محدد') ? 'selected' : '' }}>اختر نوع المرابح</option>
                                            <option {{ ($money_maker->money_maker_processType == 'مرابح عادى') ? 'selected' : '' }}>مرابح عادى</option>
                                            <option {{ ($money_maker->money_maker_processType == 'تاجر') ? 'selected' : '' }}>تاجر</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_job" class="bmd-label" style="top:-10px;">وظيفة المرابح</label>
                                        <input type="text" name="money_maker_job" id="money_maker_job" class="form-control" value="{{$money_maker->money_maker_job}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_phone" class="bmd-label" style="top:-10px;">رقم التليفون</label>
                                        <input type="text" name="money_maker_phone" id="money_maker_phone" class="form-control" value="{{$money_maker->money_maker_phone}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_mount" class="bmd-label" style="top:-10px;">مبلغ المرابحة</label>
                                        <input type="text" name="money_maker_mount" class="form-control" id="money_maker_mount" value="{{$money_maker->money_maker_phone}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_payDate" class="bmd-label" style="top:-10px;">تاريخ الدفع</label>
                                        <input type="date" name="money_maker_payDate" class="form-control" id="money_maker_payDate" value="{{$money_maker->money_maker_payDate}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="money_maker_processStatus" id="money_maker_processStatus">
                                            <option {{ ($money_maker->money_maker_processStatus == 'حالة المرابحة غير محددة') ? 'selected' : '' }}>حالة المرابحة</option>
                                            <option {{ ($money_maker->money_maker_processStatus == 'سارية') ? 'selected' : '' }}>سارية</option>
                                            <option {{ ($money_maker->money_maker_processStatus == 'متوقفة') ? 'selected' : '' }}>متوقفة</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_email" class="bmd-label" style="top:-10px;">البريد الالكترونى</label>
                                        <input type="email" name="money_maker_email" id="money_maker_email" class="form-control" value="{{$money_maker->money_maker_email}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_birthDate" class="bmd-label" style="top:-10px;">تاريخ الميلاد</label>
                                        <input type="date" name="money_maker_birthDate" id="money_maker_birthDate" class="form-control" value="{{$money_maker->money_maker_birthDate}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div><img src="{{asset('storage')}}/moneymakers/NidPics/{{$money_maker->money_maker_idPicFront}}" width="460px" height="200px"/></div>

                                        <div class="form-group form-file-upload form-file-multiple">
                                            <input type="file" multiple="" class="inputFileHidden" name="money_maker_idPicFront">
                                            <div class="input-group">
                                                <input type="text"  class="form-control inputFileVisible" placeholder="صورة البطاقة من الامام">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-fab btn-round btn-primary">
                                                        <i class="material-icons">attach_file</i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div><img src="{{asset('storage')}}/moneymakers/NidPics/{{$money_maker->money_maker_idPicBack}}" width="460px" height="200px"/></div>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <input type="file" multiple="" class="inputFileHidden" name="money_maker_idPicBack">
                                            <div class="input-group">
                                                <input type="text"  class="form-control inputFileVisible" placeholder="صورة البطاقة من الخلف">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-fab btn-round btn-primary">
                                                        <i class="material-icons">attach_file</i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_bankAccountNumber" class="bmd-label" style="top:-10px;">رقم الحساب البنكى</label>
                                        <input type="text" name="money_maker_bankAccountNumber" id="money_maker_bankAccountNumber" class="form-control" value="{{$money_maker->money_maker_bankAccountNumber}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="money_maker_address" class="bmd-label" style="top:-10px;">العنوان كامل</label>
                                        <textarea class="form-control" id="money_maker_address" name="money_maker_address">{{$money_maker->money_maker_address}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="money_maker_notes" class="bmd-label" style="top:-10px;">ملاحظات</label>
                                        <textarea class="form-control" id="money_maker_notes" name="money_maker_notes">{{$money_maker->money_maker_notes}}</textarea>
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
