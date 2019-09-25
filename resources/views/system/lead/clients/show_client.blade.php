@extends('layouts.app', ['activePage' => 'clients', 'titlePage' => __('العملاء')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">

                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <h4 class="card-title ">بيانات العميل: {{$client->client_name}}</h4>
                                    <div class="card-category">الموظف المسؤل: {{$user->name}}</div>
                                </div>
                                <div class="col-md-3 text-left">
                                    <form method="get" action="/clients/{{$client->id}}/edit">
                                        <button class="btn btn-warning "><i class="material-icons mdc-button__icon">edit</i>تعديل</button>
                                    </form>
                                </div>
                                <div class="col-md-3 text-center align-self-center">
                                    <form method="get" action="/clients">
                                        <button class="btn btn-success"><i class="material-icons mdc-button__icon">keyboard_arrow_right</i>العودة لكل العملاء<div class="ripple-container"></div></button>
                                    </form>
                                </div>

                            </div>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <th>اسم العميل</th>
                                                    <td>{{$client->client_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>وظيفة العميل</th>
                                                    <td>{{$client->client_job}}</td>
                                                </tr>
                                                <tr>
                                                    <th>نوع العميل</th>
                                                    <td>{{$client->client_type}}</td>
                                                </tr>
                                                <tr>
                                                    <th>تاريخ الميلاد</th>
                                                    <td>{{$client->client_birthDate}}</td>
                                                </tr>
                                                <tr>
                                                    <th>صورة البطاقة من الامام</th>
                                                    <td><img src="{{asset('storage')}}/clients/NidPics/{{$client->client_idPicFront}}" width="200px" height="100px"/></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <th>الرقم القومى</th>
                                                    <td>{{$client->client_nid}}</td>
                                                </tr>
                                                <tr>
                                                    <th>رقم التليفون</th>
                                                    <td>{{$client->client_phone}}</td>
                                                </tr>
                                                <tr>
                                                    <th>البريد الالكترونى</th>
                                                    <td>{{$client->client_email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>الحساب البنكى</th>
                                                    <td>{{$client->client_bankAccountNumber}}</td>
                                                </tr>
                                                <tr>
                                                    <th>صورة البطاقة من الخلف</th>
                                                    <td><img src="{{asset('storage')}}/clients/NidPics/{{$client->client_idPicBack}}" width="200px" height="100px"/></td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <hr class="-ruler-horizontal border-danger" style="border: 1px solid">
                                        <div class="col-md-12">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <th>العنوان</th>
                                                    <td>{{$client->client_address}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr class="-ruler-horizontal border-danger" style="border: 1px solid">
                                        <div class="col-md-12">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <th>ملاحظات</th>
                                                    <td>{{$client->client_notes}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="card card-stats">
                                            <div class="card-header card-header-success card-header-icon">
                                                <div class="card-icon">
                                                    <i class="material-icons">attach_money</i>
                                                </div>
                                                <p class="card-category">ما تم دفعه للمؤسسة</p>
                                                <h3 class="card-title">5000 جنيه</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats">
                                                    <i class="material-icons">date_range</i> عرض جميع الفواتير المدفوعة
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card card-stats">
                                            <div class="card-header card-header-danger card-header-icon">
                                                <div class="card-icon">
                                                    <i class="material-icons">attach_money</i>
                                                </div>
                                                <p class="card-category">ما عليه للمؤسسة</p>
                                                <h3 class="card-title">2000 جنيه</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats">
                                                    <i class="material-icons">date_range</i> عرض جميع الفواتير المتبقية
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                    <div class="card-header card-header-tabs card-header-primary">
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <span class="nav-tabs-title">Tasks:</span>
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#profile" data-toggle="tab">
                                                            <i class="material-icons">bug_report</i> Bugs
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#messages" data-toggle="tab">
                                                            <i class="material-icons">code</i> Website
                                                            <div class="ripple-container"></div>
                                                            <div class="ripple-container"></div></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active show" href="#settings" data-toggle="tab">
                                                            <i class="material-icons">cloud</i> Server
                                                            <div class="ripple-container"></div>
                                                            <div class="ripple-container"></div></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane" id="profile">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="messages">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane active show" id="settings">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
