<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    protected $fillable = ['code', 'symptom'];

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }
}