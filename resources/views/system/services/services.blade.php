@extends('layouts.app', ['activePage' => 'services', 'titlePage' => __('الخدمات')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <button class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="material-icons mdc-button__icon">add_circle_outline</i>أضف خدمة<div class="ripple-container"></div></button>
                    <div class="modal fade bd-example-modal-lg" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-signup modal-lg" role="document">
                            <div class="modal-content">
                                <div class="card card-signup card-plain">
                                    <div class="modal-header">
                                        <h5 class="modal-title card-title">بيانات الخدمة</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i class="material-icons">clear</i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12 ml-auto">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" placeholder="اسم الخدمة">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <select id="inputState" class="form-control">
                                                                <option selected>نوع الخدمة</option>
                                                                <option >تاجر</option>
                                                                <option >مورد</option>
                                                                <option>مؤسسى</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" placeholder="سعر بيع الخدمة">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" placeholder="سعر تكلفة شراء الخدمة">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="email" class="form-control" placeholder="ضريبة">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" placeholder="ضرائب اضافية">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" placeholder="السعر الاجمالى">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <select id="inputState" class="form-control">
                                                                <option selected>حالة الخدمة</option>
                                                                <option >تاجر</option>
                                                                <option >مورد</option>
                                                                <option>مؤسسى</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <textarea class="form-control" placeholder="ملاحظات"></textarea>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <button type="button" class="btn btn-primary">حفظ</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">كل الخدمات</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        م
                                    </th>
                                    <th>
                                        الاسم
                                    </th>
                                    <th>
                                        العنوان
                                    </th>
                                    <th>
                                        City
                                    </th>
                                    <th>
                                        Salary
                                    </th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Dakota Rice
                                        </td>
                                        <td>
                                            Niger
                                        </td>
                                        <td>
                                            Oud-Turnhout
                                        </td>
                                        <td class="text-primary">
                                            $36,738
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Minerva Hooper
                                        </td>
                                        <td>
                                            Curaçao
                                        </td>
                                        <td>
                                            Sinaai-Waas
                                        </td>
                                        <td class="text-primary">
                                            $23,789
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            Sage Rodriguez
                                        </td>
                                        <td>
                                            Netherlands
                                        </td>
                                        <td>
                                            Baileux
                                        </td>
                                        <td class="text-primary">
                                            $56,142
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            Philip Chaney
                                        </td>
                                        <td>
                                            Korea, South
                                        </td>
                                        <td>
                                            Overland Park
                                        </td>
                                        <td class="text-primary">
                                            $38,735
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            Doris Greene
                                        </td>
                                        <td>
                                            Malawi
                                        </td>
                                        <td>
                                            Feldkirchen in Kärnten
                                        </td>
                                        <td class="text-primary">
                                            $63,542
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6
                                        </td>
                                        <td>
                                            Mason Porter
                                        </td>
                                        <td>
                                            Chile
                                        </td>
                                        <td>
                                            Gloucester
                                        </td>
                                        <td class="text-primary">
                                            $78,615
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
@endsection
