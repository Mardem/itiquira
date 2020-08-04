<?php

namespace App;

use App\Http\Traits\SharedFunctionsTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use phpDocumentor\Reflection\Types\Self_;

class User extends Authenticatable
{
    use Notifiable;

    const PROFILES = [
        'ADMIN',
        'MONITOR' // representa o balconista
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getProfileFormattedAttribute() // profile_formatted
    {
        if ($this->getAttribute('profile') == array_search('ADMIN', self::PROFILES)) {
            return "Administrador";
        } else {
            return "Monitor";
        }
    }
}
