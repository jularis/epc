<?php

namespace App\Http\Controllers;

use App\Motdgvideo;
use App\Presentation;
use App\Service;

class AboutController extends Controller
{
    //

    public function index()
    {

        $data['pageTitle']='CIAL INTERNATIONAL SCHOOL | Presentation';

        $data['metaDescription']='';

        $data['dg'] = Motdgvideo::select('*')->first();

        $data['about'] = Presentation::select('*')->where('titre','Qui sommes-nous ?')->first(); 

        $data['org'] = Presentation::select('*')->where('titre','Notre organisation')->first(); 

        $data['appro'] = Presentation::select('*')->where('titre','Approche technique et méthodologie')->first(); 	
     
        
        return view('about.index',$data);	
    }

    public function contact()
    {

        $data['pageTitle']='CIAL INTERNATIONAL SCHOOL | Nos contacts';

        $data['metaDescription']='';     
        
        return view('about.contact',$data);	
    }


    public function services($categ, $id)
    {

        $data['pageTitle']='CIAL INTERNATIONAL SCHOOL | Nos services';

        $data['metaDescription']='';
 
        $data['service'] = Service::select('*')->where('slug',$id)->first();   
        
        return view('about.services',$data);	
    }

    public function fairedon()
    {

        $data['pageTitle']='CIAL INTERNATIONAL SCHOOL | Faire un don';

        $data['metaDescription']='';


        $data['don'] = Service::select('*')->where('type','don')->first(); 	
     
        
        return view('about.fairedon',$data);	
    }
}
