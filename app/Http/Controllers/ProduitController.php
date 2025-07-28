<?php

namespace App\Http\Controllers;

use App\Models\CategoriesProduit;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id, string $slug)
    {

        $data['pageTitle']='Nos produits';

        $data['metaDescription']='';

        $categ = CategoriesProduit::where('slug',$slug)->first();

        $data['produits'] = Produit::where('categories_produit_id',$categ->id)->orderby('id','desc')->paginate(10);

        return view('produits.index',$data);
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
        $data['pageTitle']='Nos produits';
        $data['metaDescription']='';

        $data['detail'] = Produit::where('slug',$slug)->first();

        return view('produits.show',$data);
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
