<?php

namespace App\Models;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoriesProduit;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class Produit extends Model
{
    use Translatable;
    use Resizable;
    use Commentable;

    protected $translatable = ['title', 'body', 'slug'];
    public const PUBLISHED = 'PUBLISHED';

    // public function scopePublished(Builder $query)
    // {
    //     return $query->where('status', '=', static::PUBLISHED);
    // }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->belongsTo(CategoriesProduit::class,'categories_produit_id');
    }
}
