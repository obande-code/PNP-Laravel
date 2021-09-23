<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    use HasFactory;
    protected $table = 'violations';
    public $timestamps = true;

    protected $fillable = [
        'category',
        'violation',
        'amount',
        'created_at'
    ];
}