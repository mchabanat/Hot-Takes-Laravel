<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'userId',
        'name',
        'manufacturer',
        'description',
        'mainPepper',
        'imageUrl',
        'heat'
    ];

    protected $attributes=[
        'likes' => 0,
        'dislikes' => 0
    ];

    public function Utilisateur()
    {
        return $this->belongsTo('App\Models\User');
    }
}
