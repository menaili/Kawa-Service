<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'URL',
    ];
    public function picture()
    {
        return $this->hasMany(Picture::class);
    }

    public function member()
    {
        return $this->belongsToMany(Member::class,'teams');
    }
}
