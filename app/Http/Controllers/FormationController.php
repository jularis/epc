<?php

namespace App\Http\Controllers;

use App\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    //
    public function category($lang,$categ)
    {

        $nbre = Formation::where([['status','published'],['catform',$categ]])->orderby('id','asc')->count();
        if ($nbre > 0) { 

        $data['entete'] = $categ;
        $data['pageTitle'] = 'CIAL INTERNATIONAL SCHOOL |'.$categ.'' ;

        $data['metaDescription'] = '';

        $data['liste'] = Formation::where([['status','published'],['catform',$categ]])->orderby('id','asc')->paginate(6);
        
        return view('formation.index',$data);
        }else{
            return route('accueil');
        }
        
    }


    public function inscris($lang, $slug)
    {

        $data['pageTitle'] = 'CIAL INTERNATIONAL SCHOOL | Inscription';

        $data['metaDescription'] = '';

        $data['data'] = Formation::where([['status','published'],['slug',$slug]])->first();

        return view('formation.show',$data);
        
    }
}
