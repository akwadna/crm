@extends('layouts.app', ['activePage' => 'clients', 'titlePage' => __('العملاء')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="row">
                                <div class="col-md-9 align-self-center">
                                    <h4 class="card-title ">اضافة بيانات عميل جديد</h4>
                                </div>
                                <div class="col-md-3 text-center align-self-center">
                                    <form method="get" action="/clients">
                                        <button class="btn btn-success"><i class="material-icons mdc-button__icon">keyboard_arrow_right</i>العودة لكل العملاء<div class="ripple-container"></div></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/clients" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="client_name" class="bmd-label-floating">الاسم</label>
                                            <input type="text" name="client_name" class="form-control" id="client_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="client_nid" class="bmd-label-floating">الرقم القومى</label>
                                        <input type="number" name="client_nid" class="form-control" id="client_nid">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" name="client_type" id="client_type">
                                            <option value="نوع العميل غير محدد" selected>اختر نوع العميل</option>
                                            <option value="عميل عادى">عميل عادى</option>
                                            <option value="تاجر">تاجر</option>
                                            <option value="مورد">مورد</option>
                                            <option value="مؤسسة">مؤسسة</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="client_job" class="bmd-label-floating">وظيفة العميل</label>
                                        <input type="text" name="client_job" class="form-control" id="client_job">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="client_phone" class="bmd-label-floating">رقم التليفون</label>
                                        <input type="text" name="client_phone" class="form-control" id="client_phone">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="client_email" class="bmd-label-floating">البريد الالكترونى</label>
                                        <input type="email" name="client_email" class="form-control" id="client_email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="date" name="client_birthDate" class="form-control" id="client_birthDate">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="client_bankAccountNumber" class="bmd-label-floating">رقم الحساب البنكى</label>
                                        <input type="text" name="client_bankAccountNumber" class="form-control"id="client_bankAccountNumber">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <input type="file" multiple="" class="inputFileHidden" name="client_idPicFront">
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
                                            <input type="file" multiple="" class="inputFileHidden" name="client_idPicBack">
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
                                    <div class="form-group col-md-12">
                                        <label for="client_address" class="bmd-label-floating">العنوان كامل</label>
                                        <textarea class="form-control" name="client_address" id="client_address"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="client_notes" class="bmd-label-floating">ملاحظات</label>
                                        <textarea class="form-control" name="client_notes" id="client_notes"></textarea>
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
