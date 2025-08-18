<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pageTitle']= __('common.trouver');

        $data['metaDescription']='';

        $data['partenaires'] = Partenaire::where('status','PUBLISHED')->orderby('order','asc')->get();

        return view('partenaire',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $data['pageTitle']= __('common.trouver');

        $data['metaDescription']='';

        $data['partenaires'] = Partenaire::where([['status','PUBLISHED'],['pays',$id]])->orderby('order','asc')->get();

        return view('partenaire',$data);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
