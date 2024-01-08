<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $guarded = [];

    public function symptom()
    {
        return $this->belongsTo(Symptom::class);
    }

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}
