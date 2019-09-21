@extends('layouts.app', ['activePage' => 'companies', 'titlePage' => __('المؤسسات')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <button class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="material-icons mdc-button__icon">add_circle_outline</i>أضف مؤسسة<div class="ripple-container"></div></button>
                    <div class="modal fade bd-example-modal-lg" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-signup modal-lg" role="document">
                            <div class="modal-content">
                                <div class="card card-signup card-plain">
                                    <div class="modal-header">
                                        <h5 class="modal-title card-title">بيانات المؤسسة</h5>
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
                                                            <input type="text" class="form-control" placeholder="اسم المؤسسة">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" placeholder="البريد الالكترونى" maxlength="16" minlength="16">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" placeholder="رقم التليفون 1">

                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" placeholder="رقم التليفون 2">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail img-raised">
                                                                    <img src="" alt="صورةالمؤسسة">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                                                <div>
                                                                    <span class="btn btn-raised btn-round btn-default btn-file">
                                                                        <span class="fileinput-new">اختر الصورة</span>
                                                                        <span class="fileinput-exists">تغيير</span>
                                                                        <input type="file" name="..." placeholder="صورةالمؤسسة"/>
                                                                    </span>
                                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <select id="inputState" class="form-control">
                                                                <option selected>حالة المؤسسة</option>
                                                                <option >مفتوحة</option>
                                                                <option >مغلقة</option>
                                                                <option>مغلقة مؤقتا</option>
                                                            </select>                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="startDate" style="direction:rtl;">تاريخ بدأ التعامل</label>
                                                            <input type="date" class="form-control" placeholder="تاريخ بدأ التعامل" id="startDate">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="endDate" dir="rtl">تاريخ انتهاء التعامل</label>
                                                            <input type="date" class="form-control" placeholder="تاريخ انتهاء التعامل" id="endDate">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" placeholder="اسم المسؤل">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" placeholder="وظيفة المسؤل">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" placeholder="رقم تليفون المسؤل">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" placeholder="رقم حساب البنك">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail img-raised">
                                                                    <img src="" alt="صورة العقد 1">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                                                <div>
                                                                    <span class="btn btn-raised btn-round btn-default btn-file">
                                                                        <span class="fileinput-new">اختر الصورة</span>
                                                                        <span class="fileinput-exists">تغيير</span>
                                                                        <input type="file" name="..." placeholder="صورة العقد 1" />
                                                                    </span>
                                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail img-raised">
                                                                    <img src="" alt="صورة العقد 2">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                                                <div>
                                                                    <span class="btn btn-raised btn-round btn-default btn-file">
                                                                        <span class="fileinput-new">اختر الصورة</span>
                                                                        <span class="fileinput-exists">تغيير</span>
                                                                        <input type="file" name="..." placeholder="صورة العقد 2"/>
                                                                    </span>
                                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail img-raised">
                                                                    <img src="" alt="صورة العقد 3">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                                                <div>
                                                                    <span class="btn btn-raised btn-round btn-default btn-file">
                                                                        <span class="fileinput-new">اختر الصورة</span>
                                                                        <span class="fileinput-exists">تغيير</span>
                                                                        <input type="file" name="..." placeholder="صورة العقد 3"/>
                                                                    </span>
                                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail img-raised">
                                                                    <img src="" alt="صورة العقد 4">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                                                <div>
                                                                    <span class="btn btn-raised btn-round btn-default btn-file">
                                                                        <span class="fileinput-new">اختر الصورة</span>
                                                                        <span class="fileinput-exists">تغيير</span>
                                                                        <input type="file" name="..." placeholder="صورة العقد 4"/>
                                                                    </span>
                                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail img-raised">
                                                                    <img src="" alt="صورة العقد 5">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                                                <div>
                                                                    <span class="btn btn-raised btn-round btn-default btn-file">
                                                                        <span class="fileinput-new">اختر الصورة</span>
                                                                        <span class="fileinput-exists">تغيير</span>
                                                                        <input type="file" name="..." placeholder="صورة العقد 5"/>
                                                                    </span>
                                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail img-raised">
                                                                    <img src="" alt="صورة العقد 6">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                                                <div>
                                                                    <span class="btn btn-raised btn-round btn-default btn-file">
                                                                        <span class="fileinput-new">اختر الصورة</span>
                                                                        <span class="fileinput-exists">تغيير</span>
                                                                        <input type="file" name="..." placeholder="صورة العقد 6"/>
                                                                    </span>
                                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <textarea class="form-control" placeholder="العنوان كاملا"></textarea>
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
                            <h4 class="card-title ">كل المؤسسات</h4>
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
