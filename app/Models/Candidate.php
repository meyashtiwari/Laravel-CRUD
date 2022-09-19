<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'user_id',
        'status'
    ];

    protected $cast = [
        ''
    ];
}
