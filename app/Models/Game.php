<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'poster', 'url'
    ];

    public function parties()
    {
        return $this->hasMany('App\Models\Party', 'game_id');
    }
}
