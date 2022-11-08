<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'appID',
        'staffID',
        'roleID',
        'sizeID',
        'ngoID',
        'app_status',
    ];
}
