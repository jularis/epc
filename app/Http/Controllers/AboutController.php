<?php

namespace App\Http\Controllers;

use App\Motdgvideo;
use App\Presentation;
use App\Service;
use TCG\Voyager\Models\Page;

class AboutController extends Controller
{
    //

    public function index()
    {

        $data['pageTitle']='Qui sommes-nous?';

        $data['metaDescription']='';

        $data['about'] = Page::where('id',2)->first();
        $data['direction'] = Page::where('id',3)->first();
        $data['labo'] = Page::where('id',4)->first();
        $data['recompense'] = Page::where('id',5)->first();
        $data['histoire'] = Page::where('id',6)->first();
        $data['debut'] = Page::where('id',7)->first();
        $data['technique'] = Page::where('id',8)->first();
        $data['vision'] = Page::where('id',9)->first();


        return view('about',$data);
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
