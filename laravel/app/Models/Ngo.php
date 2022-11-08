<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ngo extends Model
{
    use HasFactory;

    protected $fillable = [
        'ngo_id',
        'name',
        'phone',
        'account',
    ];
}
