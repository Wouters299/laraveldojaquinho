<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'name',
        'password',

    ];
}
