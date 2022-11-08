<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class announcement extends Model
{
    use HasFactory;

   
    protected $fillable = [
        'announce_text',
        'created_at',
        'updated_at',
    ];
    
    //ignore all the field that need to chekc in
    // protected $guarded = [];
}
