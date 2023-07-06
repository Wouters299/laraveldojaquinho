<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Usuario extends Authenticatable implements MustVerifyEmail
{
    protected $table = 'usuarios';
    public $timestamps = false;
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'password',
        'email',

    ];
}
