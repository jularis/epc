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
use App\Models\Temoignage;
use Illuminate\Support\Facades\Cookie;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    //

    public function index(Request $request)
    {
        $data['pageTitle']= __('common.accueil');

        $data['metaDescription']= __('common.presentation');

         $data['bannieres'] = Slider::where('status','PUBLISHED')->orderby('id','asc')->get();

         $data['categorieproduits'] = CategoriesProduit::get();
         $data['produits'] = Produit::where('status','PUBLISHED')->inRandomOrder()->get();

        $data['partenaires'] = Partenaire::where('status','PUBLISHED')->orderby('id','desc')->get();

        $data['temoignages'] = Temoignage::where('status','PUBLISHED')->orderby('id','desc')->get();

        if(Cookie::get('msgHome') ==null)
        {
        Cookie::queue('msgHome', 'yes', 5);
        }

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

$articles = Post::where('status','published')->orderby('id','desc')->get();

        foreach ($articles as $row) {

            $donnees .='
            <url>
      <loc>' . url(app()->getLocale().'/actualites/'.$row->catexam.'/'.$row->slug) . '</loc>
      <changefreq>daily</changefreq>
      <priority>0.1</priority>
            </url>';
            }

$catego = Page::where([['status','published']])->orderby('id','desc')->get();
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
