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
                                    <h4 class="card-title ">اضافة بيانات مؤسسة جديدة</h4>
                                </div>
                                <div class="col-md-3 text-center align-self-center">
                                    <form method="get" action="/companies">
                                        <button class="btn btn-success"><i class="material-icons mdc-button__icon">keyboard_arrow_right</i>العودة لكل المؤسسات<div class="ripple-container"></div></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/companies" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="company_name" class="bmd-label" style="top:-10px;">اسم المؤسسة</label>
                                        <input type="text" name="company_name" class="form-control" id="company_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="company_status" id="company_status">
                                            <option value="حالة المؤسسة غير محددة" selected>حالة المؤسسة</option>
                                            <option value="تعمل حاليا">تعمل حاليا</option>
                                            <option value="لا تعمل حاليا">لا تعمل حاليا</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_phone1" class="bmd-label" style="top:-10px;">رقم الهاتف 1</label>
                                        <input type="number" name="company_phone1" class="form-control" id="company_phone1">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_phone2" class="bmd-label" style="top:-10px;">رقم الهاتف 2</label>
                                        <input type="number" name="company_phone2" class="form-control" id="company_phone2">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_startDate" class="bmd-label" style="top: -10px;">تاريخ بداية التعامل</label>
                                        <input type="date" name="company_startDate" class="form-control" id="company_startDate">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_endDate" class="bmd-label" style="top: -10px;">تاريخ انتهاء التعامل</label>
                                        <input type="date" name="company_endDate" class="form-control date" id="company_endDate">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_email" class="bmd-label" style="top:-10px;">البريد الالكترونى</label>
                                        <input type="email" name="company_email" class="form-control" id="company_email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_inchargeName" class="bmd-label" style="top:-10px;">اسم المسئول</label>
                                        <input type="text" name="company_inchargeName" class="form-control" id="company_inchargeName">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_inchargePhone" class="bmd-label" style="top:-10px;">رقم تليفون المسئول</label>
                                        <input type="text" name="company_inchargePhone" class="form-control" id="company_inchargePhone">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company_inchargeJob" class="bmd-label" style="top:-10px;">وظيفة المسئول</label>
                                        <input type="text" name="company_inchargeJob" class="form-control" id="company_inchargeJob">
                                    </div>
                                    <div class="form-group col-md-6">
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
                                        <label for="company_bankAccountNumber" class="bmd-label" style="top:-10px;">رقم الحساب البنكى</label>
                                        <input type="text" name="company_bankAccountNumber" class="form-control" id="company_bankAccountNumber">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="company_address" class="bmd-label" style="top:-10px;">العنوان كاملا</label>
                                        <textarea class="form-control" name="company_address" id="company_address"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="company_notes" class="bmd-label" style="top:-10px;">ملاحظات</label>
                                        <textarea class="form-control" name="company_notes" id="company_notes"></textarea>
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
