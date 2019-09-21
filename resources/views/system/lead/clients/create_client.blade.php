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
                                        <button class="btn btn-success"><i class="material-icons mdc-button__icon">add_circle_outline</i>العودة لكل العملاء<div class="ripple-container"></div></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/clients" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="client_name" class="form-control" placeholder="الاسم">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="client_nid" class="form-control" placeholder="الرقم القومى" maxlength="16" minlength="16">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select id="inputState" name="client_type" class="form-control">
                                            <option selected >نوع العميل</option>
                                            <option value="عميل عادى">عميل عادى</option>
                                            <option value="تاجر">تاجر</option>
                                            <option value="مورد">مورد</option>
                                            <option value="مؤسسة">مؤسسة</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="client_job" class="form-control" placeholder="وظيفة العميل">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="client_phone" class="form-control" placeholder="رقم التليفون">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="client_email" class="form-control" placeholder="البريد الالكترونى">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="date" name="client_birthDate" class="form-control" placeholder="تاريخ الميلاد">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="client_bankAccountNumber" class="form-control" placeholder="رقم الحساب البنكى">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="width: 478px;">
                                            <div class="fileinput-new thumbnail img-raised" style="width: 478px;">0
                                                <img src="" alt="صورة البطاقة من الخلف" style="width: 478px;">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail img-raised" style="width: 478px;"></div>
                                            <div>
                                         <span class="btn btn-raised btn-round btn-default btn-file">
                                             <span class="fileinput-new">Select image</span>
                                             <input type="file" name="client_idPicBack" placeholder="صورة البطاقة من الخلف"/>
                                          </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="client_address" placeholder="العنوان كاملا"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="client_notes" placeholder="ملاحظات"></textarea>
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
