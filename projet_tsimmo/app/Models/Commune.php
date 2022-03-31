<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function quartiers() {
        return $this->hasMany(Quartier::class);
    }

    public function ville() { 
        return $this->belongsTo(Qualite::class,'ville_id');
    }
}
