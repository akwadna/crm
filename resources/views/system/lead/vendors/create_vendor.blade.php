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
                                    <div class="form-group col-md-6">
                                        <label for="vendor_name" class="bmd-label" style="top:-10px;">الاسم</label>
                                        <input type="text" name="vendor_name" class="form-control" id="vendor_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="vendor_nid" class="bmd-label" style="top:-10px;">الرقم القومى</label>
                                        <input type="number" name="vendor_nid" class="form-control" maxlength="14" id="vendor_nid">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="vendor_type" id="vendor_type">
                                            <option value="نوع المورد غير محدد" selected>اختر نوع المورد</option>
                                            <option value="مورد عادى">مورد عادى</option>
                                            <option value="تاجر">تاجر</option>
                                            <option value="مورد">مورد</option>
                                            <option value="مؤسسة">مؤسسة</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="vendor_phone" class="bmd-label" style="top:-10px;">رقم التليفون</label>
                                        <input type="text" name="vendor_phone" class="form-control" id="vendor_phone">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="vendor_email" class="bmd-label" style="top:-10px;">البريد الالكترونى</label>
                                        <input type="email" name="vendor_email" class="form-control" id="vendor_email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="vendor_birthDate" class="bmd-label" style="top:-10px;">تاريخ الميلاد</label>
                                        <input type="date" name="vendor_birthDate" class="form-control" id="vendor_birthDate">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="vendor_bankAccountNumber" class="bmd-label" style="top:-10px;">رقم الحساب البنكى</label>
                                        <input type="text" name="vendor_bankAccountNumber" class="form-control"id="vendor_bankAccountNumber">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="vendor_address" class="bmd-label" style="top:-10px;">العنوان كاملا</label>
                                        <textarea class="form-control" name="vendor_address" id="vendor_address"></textarea>
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
