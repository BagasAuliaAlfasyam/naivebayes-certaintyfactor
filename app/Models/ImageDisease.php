<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class ImageDisease extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($imageDisease) {
            $filePath = public_path('storage/images/' . $imageDisease->filename);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        });
    }
    protected $fillable = ['disease_id', 'filename'];

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}
