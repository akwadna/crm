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
                                    <h4 class="card-title ">اضافة بيانات مورد جديد</h4>
                                </div>
                                <div class="col-md-3 text-center align-self-center">
                                    <form method="get" action="/vendors">
                                        <button class="btn btn-success"><i class="material-icons mdc-button__icon">keyboard_arrow_right</i>العودة لكل الموردين<div class="ripple-container"></div></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/vendors" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="money_maker_process_name" class="bmd-label" style="top:-10px;">اسم عملية المرابحة</label>
                                        <input type="text" name="money_maker_process_name" class="form-control" id="money_maker_process_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_process_date" class="bmd-label" style="top:-10px;">اسم المرابح</label>
                                        <input type="date" name="money_maker_process_date" class="form-control" id="money_maker_process_date">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_process_date" class="bmd-label" style="top:-10px;">تاريخ العملية</label>
                                        <input type="date" name="money_maker_process_date" class="form-control" id="money_maker_process_date">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="money_maker_process_type" id="money_maker_process_type">
                                            <option value="نوع العملية غير محدد" selected>اختر نوع العملية</option>
                                            <option value="سحب">سحب</option>
                                            <option value="توريد">توريد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="money_maker_process_status" id="money_maker_process_status">
                                            <option value="حالة العملية غير محدد" selected>اختر حالة العملية</option>
                                            <option value="سارية">سارية</option>
                                            <option value="موقوفة">موقوفة</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_process_price" class="bmd-label" style="top:-10px;">مبلغ العملية</label>
                                        <input type="text" name="money_maker_process_price" class="form-control" id="money_maker_process_price">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_process_remainPrice" class="bmd-label" style="top:-10px;">المبلغ المتبقى</label>
                                        <input type="text" name="money_maker_process_remainPrice" class="form-control" id="money_maker_process_remainPrice">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="vendor_notes" class="bmd-label" style="top:-10px;">ملاحظات</label>
                                        <textarea class="form-control" name="vendor_notes" id="vendor_notes"></textarea>
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
