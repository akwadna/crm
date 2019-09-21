<?php

namespace App\Http\Controllers;

use App\Client;
use DB;
use Illuminate\Http\Request;
use App\User;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients=DB::table('clients')->where('delete_status',1)->paginate(7);
        return view('system.lead.clients.index_clients', compact('clients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.lead.clients.create_client', compact('clients'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client= new Client();
        $client->client_name =Request('client_name');
        $client->client_nid =Request('client_nid');
        $client->client_type =Request('client_type');
        $client->client_job =Request('client_job');
        $client->client_phone =Request('client_phone');
        $client->client_email =Request('client_email');
        $client->client_birthDate =Request('client_birthDate');
        $client->client_bankAccountNumber =Request('client_bankAccountNumber');
        $client->client_idPicFront =Request('client_idPicFront');
        $client->client_idPicBack =Request('client_idPicBack');
        $client->client_address =Request('client_address');
        $client->client_notes =Request('client_notes');
        $client->user_id=auth()->user()->id;
        $client->save();
        session()->flash('success', 'تمت عملية اضافة العميل بنجاح');
        return redirect('clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client=Client::findOrFail($id);
        $user_id=$client->user_id;
        $user=User::findOrFail($user_id);
        return view('system.lead.clients.show_client',compact('client','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=Client::findOrFail($id);
        return view('system.lead.clients.edit_client',compact('client'));
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
        $client=Client::findOrFail($id);
        $client->client_name =Request('client_name');
        $client->client_nid =Request('client_nid');
        $client->client_type =Request('client_type');
        $client->client_job =Request('client_job');
        $client->client_phone =Request('client_phone');
        $client->client_email =Request('client_email');
        $client->client_birthDate =Request('client_birthDate');
        $client->client_bankAccountNumber =Request('client_bankAccountNumber');
        $client->client_idPicFront =Request('client_idPicFront');
        $client->client_idPicBack =Request('client_idPicBack');
        $client->client_address =Request('client_address');
        $client->client_notes =Request('client_notes');
        $client->user_id=auth()->user()->id;
        $client->save();
        session()->flash('info', 'تمت عملية تحديث بيانات العميل بنجاح');
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showdestroied(){
        $clients=DB::table('clients')->where('delete_status',0)->paginate(7);
        return view('system.lead.clients.deleted_clients', compact('clients'));
    }
    public function predestroy($id)
    {

        $client=Client::findOrFail($id);
        //dd($client->client_name);
        $client->delete_status=0;
        $client->save();
        session()->flash('warning', 'تمت عملية حذف العميل مؤقتا بنجاح');
        return redirect('clients');
    }
    public function restore_client($id){
        $client=Client::findOrFail($id);
        $client->delete_status=1;
        $client->save();
        session()->flash('success', 'تمت عملية استعادة العميل بنجاح');
        return redirect('clients');
    }
    public function destroy($id)
    {
        $client=Client::findOrFail($id);
        $client->delete();
        session()->flash('error', 'تمت عملية حذف العميل نهائيا بنجاح ولن يمكنك استعادته مرة اخرى');
        return redirect('deleted-clients');
    }
}
