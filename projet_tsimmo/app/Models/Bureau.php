<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function immeuble() { 
        return $this->belongsTo(Immeuble::class,'immeuble_id');
    }

}
