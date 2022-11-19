<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'position_id',
        'image',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function project()
    {
        return $this->belongsToMany(Project::class,'teams');
    }

    public function link()
    {
        return $this->hasMany(Link::class);
    }
}
