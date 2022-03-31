<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function immeubles() {
        return $this->hasMany(Immeuble::class);
    }

    public function villas() {
        return $this->hasMany(Villa::class);
    }

    public function commune() { 
        return $this->belongsTo(Commune::class,'commune_id');
    }
}


