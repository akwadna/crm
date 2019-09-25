<?php

namespace App\Http\Controllers;
use DB;
use App\moneyMaker;
use App\User;
use Illuminate\Http\Request;

class MoneyMakersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $moneymakers=DB::table('money_makers')->where('delete_status',1)->paginate(7);
        return view('system.moneymaking.money_makers.index_moneymakers', compact('moneymakers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.moneymaking.money_makers.create_moneymaker');

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
        //dd($request->money_maker_idPicFront);
        if($request->hasFile('money_maker_idPicFront')){
            //Get File Name With Extension
            $fileNameWithExt=$request->file('money_maker_idPicFront')->getClientOriginalName();
            //Get File Nme Without Extension
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get Extension
            $extension=$request->file('money_maker_idPicFront')->getClientOriginalExtension();
            //Make new File name
            $money_maker_idPicFront=$fileName."_".time().".".$extension;
            //upload Image
            $path=$request->file('money_maker_idPicFront')->storeAs('public/moneymakers/NidPics',$money_maker_idPicFront);
        }
        else{
            $money_maker_idPicFront="no-image.png";
        }
        if($request->hasFile('money_maker_idPicBack')){
            //Get File Name With Extension
            $fileNameWithExt=$request->file('money_maker_idPicBack')->getClientOriginalName();
            //Get File Nme Without Extension
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get Extension
            $extension=$request->file('money_maker_idPicBack')->getClientOriginalExtension();
            //Make new File name
            $money_maker_idPicBack=$fileName."_".time().".".$extension;
            //upload Image
            $path=$request->file('money_maker_idPicBack')->storeAs('public/moneymakers/NidPics',$money_maker_idPicBack);
        }
        else{
            $money_maker_idPicBack="no-image.png";
        }

        $money_maker= new moneyMaker();
        $money_maker->money_maker_name =Request('money_maker_name');
        $money_maker->money_maker_nid =Request('money_maker_nid');
        $money_maker->money_maker_processType =Request('money_maker_processType');
        $money_maker->money_maker_job =Request('money_maker_job');
        $money_maker->money_maker_phone =Request('money_maker_phone');
        $money_maker->money_maker_mount =Request('money_maker_mount');
        $money_maker->money_maker_payDate =Request('money_maker_payDate');
        $money_maker->money_maker_processStatus =Request('money_maker_processStatus');
        $money_maker->money_maker_email =Request('money_maker_email');
        $money_maker->money_maker_birthDate =Request('money_maker_birthDate');
        $money_maker->money_maker_bankAccountNumber =Request('money_maker_bankAccountNumber');
        $money_maker->money_maker_idPicFront =$money_maker_idPicFront;
        $money_maker->money_maker_idPicBack =$money_maker_idPicBack;
        $money_maker->money_maker_address =Request('money_maker_address');
        $money_maker->money_maker_notes =Request('money_maker_notes');
        $money_maker->user_id=auth()->user()->id;
        $money_maker->save();
        session()->flash('success', 'تمت عملية اضافة المرابح بنجاح');
        return redirect('moneymakers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $money_maker=moneyMaker::findOrFail($id);
        $user_id=$money_maker->user_id;
        $user=User::findOrFail($user_id);
        return view('system.moneymaking.money_makers.show_moneymaker',compact('money_maker','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $money_maker=moneyMaker::findOrFail($id);
        return view('system.moneymaking.money_makers.edit_moneymaker',compact('money_maker'));
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
        if($request->hasFile('money_maker_idPicFront')){
            //Get File Name With Extension
            $fileNameWithExt=$request->file('money_maker_idPicFront')->getClientOriginalName();
            //Get File Nme Without Extension
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get Extension
            $extension=$request->file('money_maker_idPicFront')->getClientOriginalExtension();
            //Make new File name
            $money_maker_idPicFront=$fileName."_".time().".".$extension;
            //upload Image
            $path=$request->file('money_maker_idPicFront')->storeAs('public/moneymakers/NidPics',$money_maker_idPicFront);
        }
        else{
            $money_maker_idPicFront="no-image.png";
        }
        if($request->hasFile('money_maker_idPicBack')){
            //Get File Name With Extension
            $fileNameWithExt=$request->file('money_maker_idPicBack')->getClientOriginalName();
            //Get File Nme Without Extension
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get Extension
            $extension=$request->file('money_maker_idPicBack')->getClientOriginalExtension();
            //Make new File name
            $money_maker_idPicBack=$fileName."_".time().".".$extension;
            //upload Image
            $path=$request->file('money_maker_idPicBack')->storeAs('public/moneymakers/NidPics',$money_maker_idPicBack);
        }
        else{
            $money_maker_idPicBack="no-image.png";
        }
        $money_maker=moneyMaker::findOrFail($id);
        $money_maker->money_maker_name =Request('money_maker_name');
        $money_maker->money_maker_nid =Request('money_maker_nid');
        $money_maker->money_maker_processType =Request('money_maker_processType');
        $money_maker->money_maker_job =Request('money_maker_job');
        $money_maker->money_maker_phone =Request('money_maker_phone');
        $money_maker->money_maker_mount =Request('money_maker_mount');
        $money_maker->money_maker_payDate =Request('money_maker_payDate');
        $money_maker->money_maker_processStatus =Request('money_maker_processStatus');
        $money_maker->money_maker_email =Request('money_maker_email');
        $money_maker->money_maker_birthDate =Request('money_maker_birthDate');
        $money_maker->money_maker_bankAccountNumber =Request('money_maker_bankAccountNumber');
        $money_maker->money_maker_idPicFront =$money_maker_idPicFront;
        $money_maker->money_maker_idPicBack =$money_maker_idPicBack;
        $money_maker->money_maker_address =Request('money_maker_address');
        $money_maker->money_maker_notes =Request('money_maker_notes');
        $money_maker->user_id=auth()->user()->id;
        $money_maker->save();
        session()->flash('info', 'تمت عملية تحديث بيانات المرابح بنجاح');
        return redirect('moneymakers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showdestroied(){
        $moneymakers=DB::table('money_makers')->where('delete_status',0)->paginate(7);
        return view('system.moneymaking.money_makers.deleted_moneymakers', compact('moneymakers'));
    }
    public function predestroy($id)
    {
        $money_maker=moneyMaker::findOrFail($id);
        $money_maker->delete_status=0;
        $money_maker->save();
        session()->flash('warning', 'تمت عملية حذف المرابح مؤقتا بنجاح');
        return redirect('moneymakers');
    }
    public function restore($id){
        $money_maker=moneyMaker::findOrFail($id);
        $money_maker->delete_status=1;
        $money_maker->save();
        session()->flash('success', 'تمت عملية استعادة المرابح بنجاح');
        return redirect('moneymakers');
    }
    public function destroy($id)
    {
        $money_maker=moneyMaker::findOrFail($id);
        $money_maker->delete();
        session()->flash('error', 'تمت عملية حذف المرابح نهائيا بنجاح ولن يمكنك استعادته مرة اخرى');
        return redirect('deleted-moneymakers');
    }
}
