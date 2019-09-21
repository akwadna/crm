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
                                        <button class="btn btn-success"><i class="material-icons mdc-button__icon">add_circle_outline</i>العودة لكل العملاء<div class="ripple-container"></div></button>
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
                                        <input type="text" name="client_name" class="form-control" value="{{$client->client_name}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="client_nid" class="form-control" value="{{$client->client_nid}}" maxlength="16" minlength="16">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select id="inputState" name="client_type" class="form-control">
                                            <option {{ ($client->client_type == 'عميل عادى') ? 'selected' : '' }}>مؤسسة</option>
                                            <option {{ ($client->client_type == 'تاجر') ? 'selected' : '' }}>تاجر</option>
                                            <option {{ ($client->client_type == 'مورد') ? 'selected' : '' }}>مورد</option>
                                            <option {{ ($client->client_type == 'مؤسسة') ? 'selected' : '' }}>مؤسسة</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="client_job" class="form-control" value="{{$client->client_job}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="client_phone" class="form-control" value="{{$client->client_phone}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="client_email" class="form-control" value="{{$client->client_email}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="date" name="client_birthDate" class="form-control" value="{{$client->client_birthDate}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="client_bankAccountNumber" class="form-control" value="{{$client->client_bankAccountNumber}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail img-raised">
                                                <img src="" alt="صورة البطاقة من الامام">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                            <div>
                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="client_idPicFront" placeholder="صورة البطاقة من الامام" />
                                         </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail img-raised">
                                                <img src="" alt="صورة البطاقة من الخلف">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                            <div>
                                    <span class="btn btn-raised btn-round btn-default btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="client_idPicBack" placeholder="صورة البطاقة من الخلف"/>
                                    </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="client_address">{{$client->client_address}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="client_notes">{{$client->client_notes}}</textarea>
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
