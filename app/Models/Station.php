<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $table = 'stations';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'address',
        'created_at'
    ];
}
