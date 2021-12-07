<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'content', 'party_id'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
        return $this->belongsTo('App\Models\Party', 'party_id', 'id');
    }
}
