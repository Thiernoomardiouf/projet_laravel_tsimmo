<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function quartier() { 
        return $this->belongsTo(Quartier::class,'quartier_id');
    }

    public function prorietaire() { 
        return $this->belongsTo(Proprietaire::class,'prorietaire_id');
    }
}
