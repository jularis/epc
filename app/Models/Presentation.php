<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Presentation extends Model
{
    use Translatable;
    protected $translatable = ['titre','contenu'];
}
