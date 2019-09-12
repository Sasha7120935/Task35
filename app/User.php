<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Config as ConfigAlias;
use Illuminate\Support\Facades\Config;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id','phone','birthday', 'surname'
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
        'birthday' => 'date:Y-m-d'
    ];
    public function role()
    {
        return $this->hasOne(\App\Role::class);
    }
    public function orders()
    {
        return $this->hasMany(\App\Order::class);
    }
    public function isAdmin()
    {
        $adminRole = Role::where(
            'name',
            '=',
            Config::get('constants.db.roles.admin')
        )->first();
        return $this->role_id === $adminRole->id;



    }
}
