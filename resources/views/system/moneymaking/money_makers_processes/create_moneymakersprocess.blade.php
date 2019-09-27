@extends('layouts.app', ['activePage' => 'moneymakersprocesses', 'titlePage' => __('عمليات المرابحة')])
@section('content')
    <script type="text/javascript">
        $(document).ready(function() {
                $('.moneymaker').click(function () {
                    var moneyMakername=$(this).text();
                    var moneyMakerIdWithHash =$(this).attr("href");
                    var moneyMakerIdWitOuthHash = moneyMakerIdWithHash.split('#').join("");
                    $('#money_maker_id').val(moneyMakerIdWitOuthHash);
                    $('#money_maker_name').val(moneyMakername);
                    var originalMoney =$(this).attr("name");
                    $('#money_maker_process_remainPrice_hidden').val(originalMoney);
                    $('#modalLoginForm').modal('hide');
                    //$('#modalLoginForm').dialog('close');
                });
            $("#money_maker_process_price").keyup(function(){
                var yy =$('#money_maker_process_remainPrice_hidden').val();
                $("#money_maker_process_remainPrice").val(yy-$(this).val());
            });
        });
    </script>
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
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label for="money_maker_name" class="bmd-label" style="top:-10px;">اسم المرابح</label>
                                                <input type="hidden" name="money_maker_id" id="money_maker_id" class="form-control">
                                                <input type="text" name="money_maker_name" id="money_maker_name" class="form-control">
                                            </div>
                                            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body mx-3">
                                                        <div class="card">
                                                            <div class="card-header card-header-primary">
                                                                <div class="row">
                                                                    <div class="col-md-6 align-self-center">
                                                                        <h4 class="card-title ">كل المرابحون</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    @if($moneymakers->items()==null)
                                                                        <h3 class="header-primary text-center">لا توجد بيانات لأى مرابح الى الان</h3>
                                                                    @else
                                                                        <table class="table">
                                                                            <thead class=" text-primary">
                                                                            <th>
                                                                                م
                                                                            </th>
                                                                            <th>
                                                                                الاسم
                                                                            </th>
                                                                            <th>
                                                                                الرقم القومى
                                                                            </th>
                                                                            <th>
                                                                                المبلغ المدفوع
                                                                            </th>
                                                                            </thead>
                                                                            <tbody>
                                                                            @foreach($moneymakers as $money_maker)
                                                                                <tr>
                                                                                    <td>

                                                                                        {{$money_maker->id}}
                                                                                    </td>
                                                                                    <td class="text-primary">
                                                                                        <a class="moneymaker" name="{{$money_maker->money_maker_mount}}" href="#{{$money_maker->id}}">{{$money_maker->money_maker_name}}</a>
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$money_maker->money_maker_nid}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$money_maker->money_maker_mount}}
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                        {{ $moneymakers->links() }}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-center">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeBtnModal">اغلاق</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="form-group col-md-2">
                                                    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">
                                                        <i class="material-icons">search</i>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_process_date" class="bmd-label" style="top:-10px;">تاريخ العملية</label>
                                        <input type="date" name="money_maker_process_date" class="form-control" id="money_maker_process_date">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_process_price" class="bmd-label" style="top:-10px;">مبلغ العملية</label>
                                        <input type="text" name="money_maker_process_price" class="form-control" id="money_maker_process_price">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="money_maker_process_remainPrice" class="bmd-label" style="top:-10px;">المبلغ المتبقى</label>
                                        <input type="hidden" name="money_maker_process_remainPrice_hidden" class="form-control" id="money_maker_process_remainPrice_hidden">
                                        <input type="text" name="money_maker_process_remainPrice" class="form-control" readonly id="money_maker_process_remainPrice">
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
