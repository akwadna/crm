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
                                    <h4 class="card-title ">تعديل بيانات العميل: {{$client->client_name}} </h4>
                                </div>
                                <div class="col-md-3 text-center align-self-center">
                                    <form method="get" action="/clients">
                                        <button class="btn btn-success"><i class="material-icons mdc-button__icon">keyboard_arrow_right</i>العودة لكل العملاء<div class="ripple-container"></div></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/clients/{{$client->id}}" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="client_name" class="bmd-label" style="top:-10px;">الاسم</label>
                                        <input type="text" name="client_name" id="client_name" class="form-control" value="{{$client->client_name}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="client_nid" class="bmd-label" style="top:-10px;">الرقم القومى</label>
                                        <input type="text" name="client_nid" id="client_nid" class="form-control" value="{{$client->client_nid}}" maxlength="14" minlength="14">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select id="inputState" name="client_type" class="form-control">
                                            <option {{ ($client->client_type == 'نوع العميل غير محدد') ? 'selected' : '' }}>اختر نوع العميل</option>
                                            <option {{ ($client->client_type == 'عميل عادى') ? 'selected' : '' }}>عميل عادى</option>
                                            <option {{ ($client->client_type == 'تاجر') ? 'selected' : '' }}>تاجر</option>
                                            <option {{ ($client->client_type == 'مورد') ? 'selected' : '' }}>مورد</option>
                                            <option {{ ($client->client_type == 'مؤسسة') ? 'selected' : '' }}>مؤسسة</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="client_job" class="bmd-label" style="top:-10px;">وظيفة العميل</label>
                                        <input type="text" name="client_job" id="client_job" class="form-control" value="{{$client->client_job}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="client_phone" class="bmd-label" style="top:-10px;">رقم التليفون</label>
                                        <input type="text" name="client_phone" id="client_phone" class="form-control" value="{{$client->client_phone}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="client_email" class="bmd-label" style="top:-10px;">البريد الالكترونى</label>
                                        <input type="email" name="client_email" id="client_email" class="form-control" value="{{$client->client_email}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="client_birthDate" class="bmd-label" style="top:-10px;">تاريخ الميلاد</label>
                                        <input type="date" name="client_birthDate" id="client_birthDate" class="form-control" value="{{$client->client_birthDate}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="client_bankAccountNumber" class="bmd-label" style="top:-10px;">رقم الحساب البنكى</label>
                                        <input type="text" name="client_bankAccountNumber" id="client_bankAccountNumber" class="form-control" value="{{$client->client_bankAccountNumber}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div><img src="{{asset('storage')}}/clients/NidPics/{{$client->client_idPicFront}}" width="460px" height="200px"/></div>

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
                                        <div><img src="{{asset('storage')}}/clients/NidPics/{{$client->client_idPicBack}}" width="460px" height="200px"/></div>
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
                                        <label for="client_address" class="bmd-label" style="top:-10px;">العنوان كامل</label>
                                        <textarea class="form-control" id="client_address" name="client_address">{{$client->client_address}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="client_notes" class="bmd-label" style="top:-10px;">ملاحظات</label>
                                        <textarea class="form-control" id="client_notes" name="client_notes">{{$client->client_notes}}</textarea>
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
