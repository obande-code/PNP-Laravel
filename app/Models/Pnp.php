<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pnp extends Model
{
    use HasFactory;

    protected $table = 'pnps';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'station',
        'Rank',
        'email',
        'home',
        'created_at'
    ];
}
