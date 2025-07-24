<?php

namespace App\Http\Controllers;

use App\Galerie;
use Illuminate\Http\Request;

class GalerieController extends Controller
{
    //

    public function index()
    {

        
        $data['pageTitle'] = 'CIAL INTERNATIONAL SCHOOL | Galeries' ;

        $data['metaDescription'] = ''; 
        
        $data['liste'] = Galerie::where('status','published')->orderby('id','desc')->paginate(6);
        return view('galerie.index',$data);
         
        
    }

    public function show($lang, $slug)
    {

        $data['pageTitle'] = 'CIAL INTERNATIONAL SCHOOL | Galeries';

        $data['metaDescription'] = '';

        $visites = Galerie::where('slug',$slug)->increment('visites', 1);

        $data['details'] = Galerie::where([['status','published'],['slug',$slug]])->first();

        return view('galerie.show',$data);
        
    }
}
