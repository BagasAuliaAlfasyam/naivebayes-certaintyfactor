<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $fillable = ['code', 'name', 'probability', 'appear', 'information', 'suggestion'];

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }

    public function imageDiseases()
    {
        return $this->hasMany(ImageDisease::class);
    }
}
