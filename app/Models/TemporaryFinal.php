<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TemporaryFinal extends Model
{
    protected $guarded = [];

    public function diagnosis()
    {
        return DB::table('temporary_finals')
        ->select('temporary_finals.disease_id', 'temporary_finals.results', 'diseases.*')
        ->join('diseases', 'temporary_finals.disease_id', '=', 'diseases.diseases_id')
        ->orderBy('temporary_finals.results', 'DESC')
        ->limit(3)
        ->get();
    }
}
