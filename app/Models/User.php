<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable = [
        'username',
        'email',
        'password',
        'avatar',
        'role_id',
        'like_nomination_id'
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    public function like_nomination()
    {
        return $this->belongsTo(Nomination::class);
    }

    public function getAvatarAttribute()
    {
        return URL::to('/') . '/storage/' . $this->attributes['avatar'];
    }

    public function hardware()
    {
        return $this->hasMany(Hardware::class);
    }

    public function benchmark()
    {
        return $this->hasMany(Benchmark::class);
    }
}
