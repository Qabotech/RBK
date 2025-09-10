<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Laden extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'bilder_id', 'ort_id', 'besiter_id'];

    public function bilder()
    {
        return $this->belongsTo(Bilder::class, 'bilder_id');
    }

    public function ort()
    {
        return $this->belongsTo(Ort::class, 'ort_id');
    }

    public function besitzer()
    {
        return $this->belongsTo(Besitzer::class, 'besiter_id');
    }
    
}