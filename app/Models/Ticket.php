<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    public $timestamps = true;

    protected $fillable = [
        'driversName',
        'plateNo',
        'apprehendingOfficer',
        'location',
        'amount',
        'status'
    ];
}
