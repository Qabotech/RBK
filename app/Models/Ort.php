<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ort extends Model
{
    use HasFactory;

    protected $fillable = ['plz', 'name'];

    public function ladens()
    {
        return $this->hasMany(Laden::class, 'ort_id');
    }
}