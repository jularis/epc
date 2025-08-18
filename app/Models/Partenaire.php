<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Partenaire extends Model
{

    public function pays()
    {
        return $this->belongsTo(Pays::class,'pays_id');
    }
}
