<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Distinction extends Model
{
    use Translatable;
    protected $translatable = ['title','description'];
}
