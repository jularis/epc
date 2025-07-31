<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = __('common.contact');
        $data['metaDescription']='';
        return view('contact',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contact = new Newsletter();
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $existe = Newsletter::where('email',$request->email)->first();

        if($existe !=null)
        {
            $notification = array(
'message' =>"Votre adresse a déjà été enregistrée à la newsletter.",
'alert-type' => 'error'
            );
        }else{
    $contact->save();
        if($contact){
            $notification = array(
'message' =>"Votre abonnement à notre newsletter a été bien enregistré.",
'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
'message' =>"Une erreur s'est produite pendant votre abonnement. Veuillez réessayer plutard",
'alert-type' => 'error'
            );
        }
        }

       return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
