<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $id, string $slug)
    {
       $data['pageTitle']='Qui sommes-nous?';

        $data['metaDescription']='';

        $data['about'] = Page::where('slug',$slug)->first();
        // $data['direction'] = Page::where('id',3)->first();
        // $data['labo'] = Page::where('id',4)->first();
        // $data['recompense'] = Page::where('id',5)->first();
        // $data['histoire'] = Page::where('id',6)->first();
        // $data['debut'] = Page::where('id',7)->first();
        // $data['technique'] = Page::where('id',8)->first();
        // $data['vision'] = Page::where('id',9)->first();

        return view('aboutShow',$data);
    }


    public function mission(string $id)
    {
       $data['pageTitle']='Qui sommes-nous?';

        $data['metaDescription']='';

        $data['about'] = Page::where('slug','notre-mission-reveler-la-beaute-avec-responsabilite')->first();
        // $data['direction'] = Page::where('id',3)->first();
        // $data['labo'] = Page::where('id',4)->first();
        // $data['recompense'] = Page::where('id',5)->first();
        // $data['histoire'] = Page::where('id',6)->first();
        // $data['debut'] = Page::where('id',7)->first();
        // $data['technique'] = Page::where('id',8)->first();
        // $data['vision'] = Page::where('id',9)->first();

        return view('aboutShow',$data);
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
