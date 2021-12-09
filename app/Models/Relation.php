<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_user_id', 'second_user_id'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'second_user_id', 'id');
    }
}
