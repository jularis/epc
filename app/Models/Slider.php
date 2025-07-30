<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Slider extends Model
{
    use Translatable;
    protected $translatable = ['titre', 'description','url','boutonName','hautTitre'];
}
