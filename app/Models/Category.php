<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categorys';
    public $timestamps = true;

    protected $fillable = [
        'position',
        'category',
        'created_at'
    ];
}
