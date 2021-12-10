<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vending_machine extends Model
{
    use HasFactory;

    protected $table = 'klanten';

    protected $fillable = [
        'id',
        'reward_capicity'
    ];
}
