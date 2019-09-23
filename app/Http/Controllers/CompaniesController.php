<?php

namespace App\Http\Controllers;
use DB;
use App\Company;
use App\User;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index(Request $request)
    {
        $companies=DB::table('companies')->where('delete_status',1)->paginate(7);
        return view('system.lead.companies.index_companies', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.lead.companies.create_company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*for fresh installing mysql you will get stream_socket_sendto(): Connection refused
        if you want to see that error uncomment dd() function
        that error because of:
        The problem was that the upload_max_filesize in the php.ini of the php-fpm,
         it was only 2M, after increasing to 100M it works. So you must change this value in:
        /etc/php/7.2/fpm/php.ini
        /etc/php/7.2/cli/php.ini
        upload_max_filesize=100M
        */
        //dd($request->client_idPicFront);
        if($request->hasFile('company_pic1')){
            //Get File Name With Extension
            $fileNameWithExt=$request->file('company_pic1')->getClientOriginalName();
            //Get File Nme Without Extension
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get Extension
            $extension=$request->file('company_pic1')->getClientOriginalExtension();
            //Make new File name
            $company_pic1=$fileName."_".time().".".$extension;
            //upload Image
            $path=$request->file('company_pic1')->storeAs('public/companies/Pics',$company_pic1);
        }
        else{
            $company_pic1="no-image.png";
        }
        if($request->hasFile('company_pic2')){
            //Get File Name With Extension
            $fileNameWithExt=$request->file('company_pic2')->getClientOriginalName();
            //Get File Nme Without Extension
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get Extension
            $extension=$request->file('company_pic2')->getClientOriginalExtension();
            //Make new File name
            $company_pic2=$fileName."_".time().".".$extension;
            //upload Image
            $path=$request->file('company_pic2')->storeAs('public/companies/Pics',$company_pic2);
        }
        else{
            $company_pic2="no-image.png";
        }

        $company= new Company();
        $company->company_name =Request('company_name');
        $company->company_phone1 =Request('company_phone1');
        $company->company_phone2 =Request('company_phone2');
        $company->company_email =Request('company_email');
        $company->company_startDate =Request('company_startDate');
        $company->company_endDate =Request('company_endDate');
        $company->company_status =Request('company_status');
        $company->company_inchargeName =Request('company_inchargeName');
        $company->company_inchargePhone =Request('company_inchargePhone');
        $company->company_inchargeJob =Request('company_inchargeJob');
        $company->company_bankAccountNumber =Request('company_bankAccountNumber');
        $company->company_pic1 =$company_pic1;
        $company->company_pic2 =$company_pic2;
        $company->company_address =Request('company_address');
        $company->company_notes =Request('company_notes');
        $company->user_id=auth()->user()->id;
        $company->save();
        session()->flash('success', 'تمت عملية اضافة المؤسسة بنجاح');
        return redirect('companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company=Company::findOrFail($id);
        $user_id=$company->user_id;
        $user=User::findOrFail($user_id);
        return view('system.lead.companies.show_company',compact('company','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company=Company::findOrFail($id);
        return view('system.lead.companies.edit_company',compact('company'));
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
        if($request->hasFile('company_pic1')){
            //Get File Name With Extension
            $fileNameWithExt=$request->file('company_pic1')->getClientOriginalName();
            //Get File Nme Without Extension
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get Extension
            $extension=$request->file('company_pic1')->getClientOriginalExtension();
            //Make new File name
            $company_pic1=$fileName."_".time().".".$extension;
            //upload Image
            $path=$request->file('company_pic1')->storeAs('public/companies/Pics',$company_pic1);
        }
        else{
            $company_pic1="no-image.png";
        }
        if($request->hasFile('company_pic2')){
            //Get File Name With Extension
            $fileNameWithExt=$request->file('company_pic2')->getClientOriginalName();
            //Get File Nme Without Extension
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get Extension
            $extension=$request->file('company_pic2')->getClientOriginalExtension();
            //Make new File name
            $company_pic2=$fileName."_".time().".".$extension;
            //upload Image
            $path=$request->file('company_pic2')->storeAs('public/companies/Pics',$company_pic2);
        }
        else{
            $company_pic2="no-image.png";
        }
        $company=Company::findOrFail($id);
        $company->company_name =Request('company_name');
        $company->company_phone1 =Request('company_phone1');
        $company->company_phone2 =Request('company_phone2');
        $company->company_email =Request('company_email');
        $company->company_startDate =Request('company_startDate');
        $company->company_endDate =Request('company_endDate');
        $company->company_status =Request('company_status');
        $company->company_inchargeName =Request('company_inchargeName');
        $company->company_inchargePhone =Request('company_inchargePhone');
        $company->company_inchargeJob =Request('company_inchargeJob');
        $company->company_bankAccountNumber =Request('company_bankAccountNumber');
        $company->company_pic1 =$company_pic1;
        $company->company_pic2 =$company_pic2;
        $company->company_address =Request('company_address');
        $company->company_notes =Request('company_notes');
        $company->user_id=auth()->user()->id;
        $company->save();
        session()->flash('info', 'تمت عملية تحديث بيانات المؤسسة بنجاح');
        return redirect('companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showdestroied(){
        $companies=DB::table('companies')->where('delete_status',0)->paginate(7);
        return view('system.lead.companies.deleted_companies', compact('companies'));
    }
    public function predestroy($id)
    {
        $company=Company::findOrFail($id);
        $company->delete_status=0;
        $company->save();
        session()->flash('warning', 'تمت عملية حذف المؤسسة مؤقتا بنجاح');
        return redirect('companies');
    }
    public function restore($id){
        $company=Company::findOrFail($id);
        $company->delete_status=1;
        $company->save();
        session()->flash('success', 'تمت عملية استعادة المؤسسة بنجاح');
        return redirect('companies');
    }
    public function destroy($id)
    {
        $company=Company::findOrFail($id);
        $company->delete();
        session()->flash('error', 'تمت عملية حذف المؤسسة نهائيا بنجاح ولن يمكنك استعادتها مرة اخرى');
        return redirect('deleted-companies');
    }
}
