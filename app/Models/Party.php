<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'icon', 'game_id'
    ];

    public function games()
    {
        return $this->belongsTo('App\Models\Games', 'game_id', 'id');
    }
    public function messages()
    {
        return $this->hasMany('App\Models\Message', 'party_id');
    }
}
