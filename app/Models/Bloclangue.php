<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Bloclangue extends Model
{
    use Translatable;
    protected $translatable = ['titre', 'description','lang1', 'lang2'];
    
}
