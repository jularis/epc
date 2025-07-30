<?php

namespace App\Http\Controllers;

use App\Models\Distinction;
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
       $data['pageTitle']= __('common.about');

        $data['metaDescription']='';


        if($slug == 'recompenses-et-distinctions')
        {
            $data['pageTitle']= __('common.distinction');;
    $data['recompenses'] = Distinction::where('status','PUBLISHED')->orderby('id','desc')->get();

        return view('recompense',$data);
        }
        else{
$data['about'] = Page::where('slug',$slug)->first();

        return view('aboutShow',$data);
        }

    }

    public function showDistinction(string $id, string $slug, string $url)
    {

        $data['metaDescription']='';


        $data['pageTitle']= __('common.distinction');
    $data['detail'] = Distinction::where('slug',$url)->first();

        return view('recompense-detail',$data);


    }

    public function mission(string $id)
    {
       $data['pageTitle']= __('common.about');

        $data['metaDescription']='';

        $data['about'] = Page::where('id',11)->first();
        return view('aboutShow',$data);
    }

    public function engagement(string $id)
    {
       $data['pageTitle']= __('common.nosactifs');

        $data['metaDescription']='';

        $data['about'] = Page::where('id',10)->first();

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
