<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;
    protected $table = 'offices';
    protected $fillable=[
        'city',
        'phone',
        'anddressline1',
        'anddressline2',
        'state',
        'country',
        'postalCode',
        'territory',
    ];
}