<?php

namespace App\Http\Controllers;

use App\Examen;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    //

    public function index($lang,$categ)
    {

        $nbre = Examen::where([['status','published'],['catexam',$categ]])->orderby('ordre','asc')->count();
        if ($nbre > 0) { 

        $data['entete'] = $categ;
        $data['pageTitle'] = 'CIAL INTERNATIONAL SCHOOL |'.$categ.'' ;

        $data['metaDescription'] = '';

        $data['liste'] = Examen::where([['status','published'],['catexam',$categ]])->orderby('ordre','asc')->paginate(6);
        if(count($data['liste'])==1){
            $data['exam'] = $data['liste'][0];
            
            return view('examen.show',$data);
        }
        
        return view('examen.index',$data);
        }else{
            return route('accueil');
        }
        
    }



    public function show($lang, $categ, $slug)
    {

        $data['pageTitle'] = 'CIAL INTERNATIONAL SCHOOL | Examens';

        $data['metaDescription'] = '';

        $data['exam'] = Examen::where([['status','published'],['slug',$slug]])->first();

        return view('examen.show',$data);
        
    }
}
