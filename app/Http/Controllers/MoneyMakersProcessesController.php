<?php

namespace App\Http\Controllers;
use DB;
use App\moneyMakerProcess;
use App\money_maker_process;
use Illuminate\Http\Request;

class MoneyMakersProcessesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $moneymakersprocesses=DB::table('money_maker_processes')->where('delete_status',1)->paginate(7);
        return view('system.moneymaking.money_makers_processes.index_moneymakersprocesses', compact('moneymakersprocesses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.moneymaking.money_makers_processes.create_moneymakersprocess');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $money_maker_process= new moneyMakerProcess();
        $money_maker_process->money_maker_process_name =Request('money_maker_process_name');
        $money_maker_process->money_maker_process_type =Request('money_maker_process_type');
        $money_maker_process->money_maker_process_status =Request('money_maker_process_status');
        $money_maker_process->money_maker_process_price =Request('money_maker_process_price');
        $money_maker_process->money_maker_process_remainPrice =Request('money_maker_process_remainPrice');
        $money_maker_process->money_maker_process_date =Request('money_maker_process_date');
        $money_maker_process->money_maker_process_notes =Request('money_maker_process_notes');
        $money_maker_process->user_id=auth()->user()->id;
        $money_maker_process->save();
        session()->flash('success', 'تمت عملية اضافة العميل بنجاح');
        return redirect('moneymakersprocesses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $money_maker_process=moneyMakerProcess::findOrFail($id);
        $user_id=$money_maker_process->user_id;
        $user=User::findOrFail($user_id);
        return view('system.moneymaking.money_makers_processes.show_moneymakersprocess',compact('money_maker_process','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $money_maker_process=moneyMakerProcess::findOrFail($id);
        return view('system.moneymaking.money_makers_processes.edit_moneymakersprocess',compact('money_maker_process'));
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
        $money_maker_process=moneyMakerProcess::findOrFail($id);
        $money_maker_process->money_maker_process_name =Request('money_maker_process_name');
        $money_maker_process->money_maker_process_type =Request('money_maker_process_type');
        $money_maker_process->money_maker_process_status =Request('money_maker_process_status');
        $money_maker_process->money_maker_process_price =Request('money_maker_process_price');
        $money_maker_process->money_maker_process_remainPrice =Request('money_maker_process_remainPrice');
        $money_maker_process->money_maker_process_date =Request('money_maker_process_date');
        $money_maker_process->money_maker_process_notes =Request('money_maker_process_notes');
        $money_maker_process->user_id=auth()->user()->id;
        $money_maker_process->save();
        session()->flash('info', 'تمت عملية تحديث بيانات العميل بنجاح');
        return redirect('moneymakersprocesses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showdestroied(){
        $moneymakersprocesses=DB::table('money_maker_processes')->where('delete_status',0)->paginate(7);
        return view('system.moneymaking.money_makers_processes.deleted_moneymakersprocesses', compact('moneymakersprocesses'));
    }
    public function predestroy($id)
    {
        $money_maker_process=moneyMakerProcess::findOrFail($id);
        $money_maker_process->delete_status=0;
        $money_maker_process->save();
        session()->flash('warning', 'تمت عملية حذف العميل مؤقتا بنجاح');
        return redirect('moneymakersprocesses');
    }
    public function restore($id){
        $money_maker_process=moneyMakerProcess::findOrFail($id);
        $money_maker_process->delete_status=1;
        $money_maker_process->save();
        session()->flash('success', 'تمت عملية استعادة العميل بنجاح');
        return redirect('moneymakersprocesses');
    }
    public function destroy($id)
    {
        $money_maker_process=moneyMakerProcess::findOrFail($id);
        $money_maker_process->delete();
        session()->flash('error', 'تمت عملية حذف العميل نهائيا بنجاح ولن يمكنك استعادته مرة اخرى');
        return redirect('deleted-moneymakersprocesses');
    }
}
