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
                                    <h4 class="card-title ">اضافة بيانات  جديد</h4>
                                </div>
                                <div class="col-md-3 text-center align-self-center">
                                    <form method="get" action="/moneymakers">
                                        <button class="btn btn-success"><i class="material-icons mdc-button__icon">keyboard_arrow_right</i>العودة لكل المرابحين<div class="ripple-container"></div></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/moneymakers" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_name" class="bmd-label" style="top:-10px;">الاسم</label>
                                        <input type="text" name="money_maker_name" class="form-control" id="money_maker_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_nid" class="bmd-label" style="top:-10px;">الرقم القومى</label>
                                        <input type="number" name="money_maker_nid" class="form-control" maxlength="14" id="money_maker_nid">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="money_maker_processType" id="money_maker_processType">
                                            <option value="نوع المرابح غير محدد" selected>اختر نوع المرابح</option>
                                            <option value="مرابح عادى">مرابح عادى</option>
                                            <option value="تاجر">تاجر</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_job" class="bmd-label" style="top:-10px;">وظيفة المرابح</label>
                                        <input type="text" name="money_maker_job" class="form-control" id="money_maker_job">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_phone" class="bmd-label" style="top:-10px;">رقم التليفون</label>
                                        <input type="text" name="money_maker_phone" class="form-control" id="money_maker_phone">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_mount" class="bmd-label" style="top:-10px;">مبلغ المرابحة</label>
                                        <input type="text" name="money_maker_mount" class="form-control" id="money_maker_mount">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_payDate" class="bmd-label" style="top:-10px;">تاريخ الدفع</label>
                                        <input type="date" name="money_maker_payDate" class="form-control" id="money_maker_payDate">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="money_maker_processStatus" id="money_maker_processStatus">
                                            <option value="حالة المرابحة غير محددة" selected>حالة المرابحة</option>
                                            <option value="سارية">سارية</option>
                                            <option value="متوقفة">متوقفة</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_email" class="bmd-label" style="top:-10px;">البريد الالكترونى</label>
                                        <input type="email" name="money_maker_email" class="form-control" id="money_maker_email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_birthDate" class="bmd-label" style="top:-10px;">تاريخ الميلاد</label>
                                        <input type="date" name="money_maker_birthDate" class="form-control" id="money_maker_birthDate">
                                    </div>
                                    <div class="form-group col-md-6">
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
                                        <input type="text" name="money_maker_bankAccountNumber" class="form-control"id="money_maker_bankAccountNumber">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="money_maker_address" class="bmd-label" style="top:-10px;">العنوان كامل</label>
                                        <textarea class="form-control" name="money_maker_address" id="money_maker_address"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="money_maker_notes" class="bmd-label" style="top:-10px;">ملاحظات</label>
                                        <textarea class="form-control" name="money_maker_notes" id="money_maker_notes"></textarea>
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
