<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $table = 'goal';

    protected $fillable = [
        'id',
        'name',
        'limit',
        'description'
    ];
}
