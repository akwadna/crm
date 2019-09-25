<?php

namespace App\Http\Controllers;
use DB;
use App\Vendor;
use App\User;
use Illuminate\Http\Request;

class VendorsController extends Controller
{
    /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index(Request $request)
    {
        $vendors=DB::table('vendors')->where('delete_status',1)->paginate(7);
        return view('system.lead.vendors.index_vendors', compact('vendors'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.lead.vendors.create_vendor');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendor= new Vendor();
        $vendor->vendor_name =Request('vendor_name');
        $vendor->vendor_nid =Request('vendor_nid');
        $vendor->vendor_type =Request('vendor_type');
        $vendor->vendor_phone =Request('vendor_phone');
        $vendor->vendor_email =Request('vendor_email');
        $vendor->vendor_birthDate =Request('vendor_birthDate');
        $vendor->vendor_bankAccountNumber =Request('vendor_bankAccountNumber');
        $vendor->vendor_address =Request('vendor_address');
        $vendor->vendor_notes =Request('vendor_notes');
        $vendor->user_id=auth()->user()->id;
        $vendor->save();
        session()->flash('success', 'تمت عملية اضافة العميل بنجاح');
        return redirect('vendors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor=Vendor::findOrFail($id);
        $user_id=$vendor->user_id;
        $user=User::findOrFail($user_id);
        return view('system.lead.vendors.show_vendor',compact('vendor','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor=Vendor::findOrFail($id);
        return view('system.lead.vendors.edit_vendor',compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vendor=Vendor::findOrFail($id);
        $vendor->vendor_name =Request('vendor_name');
        $vendor->vendor_nid =Request('vendor_nid');
        $vendor->vendor_type =Request('vendor_type');
        $vendor->vendor_phone =Request('vendor_phone');
        $vendor->vendor_email =Request('vendor_email');
        $vendor->vendor_birthDate =Request('vendor_birthDate');
        $vendor->vendor_bankAccountNumber =Request('vendor_bankAccountNumber');
        $vendor->vendor_address =Request('vendor_address');
        $vendor->vendor_notes =Request('vendor_notes');
        $vendor->user_id=auth()->user()->id;
        $vendor->save();
        session()->flash('info', 'تمت عملية تحديث بيانات العميل بنجاح');
        return redirect('vendors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showdestroied(){
        $vendors=DB::table('vendors')->where('delete_status',0)->paginate(7);
        return view('system.lead.vendors.deleted_vendors', compact('vendors'));
    }
    public function predestroy($id)
    {
        $vendor=Vendor::findOrFail($id);
        $vendor->delete_status=0;
        $vendor->save();
        session()->flash('warning', 'تمت عملية حذف العميل مؤقتا بنجاح');
        return redirect('vendors');
    }
    public function restore($id){
        $vendor=Vendor::findOrFail($id);
        $vendor->delete_status=1;
        $vendor->save();
        session()->flash('success', 'تمت عملية استعادة العميل بنجاح');
        return redirect('vendors');
    }
    public function destroy($id)
    {
        $vendor=Vendor::findOrFail($id);
        $vendor->delete();
        session()->flash('error', 'تمت عملية حذف العميل نهائيا بنجاح ولن يمكنك استعادته مرة اخرى');
        return redirect('deleted-vendors');
    }
}
