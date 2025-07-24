<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class CategoriesProduit extends Model
{
    use Translatable;
    protected $translatable = ['name', 'slug'];

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }

    public function produits()
    {
       return $this->hasMany(Produit::class,'categories_produit_id')->orderBy('created_at', 'DESC');
    }
}
