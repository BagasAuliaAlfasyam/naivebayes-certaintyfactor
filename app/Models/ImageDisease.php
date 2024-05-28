<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageDisease extends Model
{
    protected $fillable = ['disease_id', 'filename'];

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}
