<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'link',
        'application',
        'icon',
        
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
