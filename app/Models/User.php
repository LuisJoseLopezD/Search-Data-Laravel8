<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // QUERY SCOPE (HACIENDO LAS BUSQUEDAS EN LA DB)

    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }

    public function scopeEmail($query, $email)
    {
        if($email)
            return $query->where('email', 'LIKE', "%$email%");
    }

    public function scopeBio($query, $bio)
    {
        if($bio)
            return $query->where('bio', 'LIKE', "%$bio%");
    }
}

// %$name% esto significa que encuentre cualquier palabra relativa antes o despues de $name
// lo que hace es listarlos con cada coincidencia de resultado
// BUSQUEDA ESTRICTA
