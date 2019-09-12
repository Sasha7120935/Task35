<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static Where(string $string, string $string1, $get)
 */
class Role extends Model
{
    protected $fillable = ['id','name'];

    public function users()
    {
        return $this->hasMany(\App\User::class);
    }
}
