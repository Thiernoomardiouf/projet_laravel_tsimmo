<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immeuble extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function quartier() { 
        return $this->belongsTo(Quartier::class,'quartier_id');
    }

    public function prorietaire() { 
        return $this->belongsTo(Proprietaire::class,'prorietaire_id');
    }

    public function bureaus() {
        return $this->hasMany(Bureau::class);
    }

    public function studios() {
        return $this->hasMany(Studio::class);
    }

    public function appartements() {
        return $this->hasMany(Appartement::class);
    }
}
