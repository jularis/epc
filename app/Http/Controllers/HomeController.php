<?php

namespace App\Http\Controllers;

use App\Examen;
use App\Galerie;
use App\Banniere;
use App\Formation;
use App\Bloclangue;
use App\Motdgvideo;
use App\Models\Produit;
use App\Models\Partenaire;
use Illuminate\Http\Request;
use App\Models\CategoriesProduit;
use App\Models\Slider;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    //

    public function index(Request $request)
    {
        $data['pageTitle']='EL PARADIS COSMETIC | Accueil';

        $data['metaDescription']='EL Paradis Cosmetic (EPC) est une entreprise industrielle ivoirienne spécialisée dans la fabrication et la distribution de produits cosmiques, née d’une vision claire : valoriser la beauté en générale et africaine en particulier avec des soins sûrs, efficaces et accessibles.';

         $data['bannieres'] = Slider::where('status','PUBLISHED')->orderby('id','asc')->get();

         $data['categorieproduits'] = CategoriesProduit::get();
         $data['produits'] = Produit::where('status','PUBLISHED')->inRandomOrder()->get();

        $data['partenaires'] = Partenaire::where('status','PUBLISHED')->orderby('id','desc')->get();

        // $data['allemand'] = Formation::where([['status','published'],['catform','allemand']])->orderby('id','desc')->limit(3)->get();

        // $data['espagnol'] = Formation::where([['status','published'],['catform','espagnol']])->orderby('id','desc')->limit(3)->get();

        // $data['anglais'] = Formation::where([['status','published'],['catform','anglais']])->orderby('id','desc')->limit(3)->get();

        // $data['francais'] = Formation::where([['status','published'],['catform','francais']])->orderby('id','desc')->limit(3)->get();

        // $data['motdg'] = Motdgvideo::select('*')->first();

        // $data['galeries'] = Galerie::where('status','published')->orderby('id','desc')->limit(3)->get();

        // $data['gal2'] = Galerie::where('status','published')->offset(2)->take(1)->first();

        // $data['partenaires'] = Partenaire::select('*')->orderby('nom','asc')->get();

        // if(Cookie::get('msgHome') ==null)
        // {
        // Cookie::queue('msgHome', 'yes', 5);
        // }

        return view('home', $data);
    }
    public function sitemap()
    {


        $sitemap_file_path =  base_path('sitemap.xml');
        if (file_exists($sitemap_file_path))
        {
            unlink($sitemap_file_path);
        }


        $donnees ='<?xml version="1.0" encoding="UTF-8"?>
                <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

$articles = Examen::where('status','published')->orderby('id','desc')->get();

        foreach ($articles as $row) {

            $donnees .='
            <url>
      <loc>' . url(app()->getLocale().'/examens/'.$row->catexam.'/'.$row->slug) . '</loc>
      <changefreq>daily</changefreq>
      <priority>0.1</priority>
            </url>';
            }

$catego = Formation::where([['status','published']])->orderby('id','desc')->get();
foreach ($catego as $row) {

    $donnees .='
    <url>
<loc>' . url(app()->getLocale().'/formations/'.$row->catform).'</loc>
<changefreq>daily</changefreq>
<priority>0.1</priority>
    </url>';
    }


    $articles = Galerie::where('status','published')->orderby('id','desc')->get();

        foreach ($articles as $row) {

            $donnees .='
            <url>
      <loc>' . url(app()->getLocale().'/galeries/'.$row->slug). '</loc>
      <changefreq>daily</changefreq>
      <priority>0.1</priority>
            </url>';
            }
        $donnees .='</urlset>';
        // Ecriture du fichier XML du sitemap
        file_put_contents($sitemap_file_path, $donnees);
    }

}
