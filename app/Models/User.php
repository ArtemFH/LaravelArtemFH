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

    protected $casts = [
        'awards_id' => 'array'
    ];

    protected $fillable = [
        'username',
        'email',
        'password',
        'avatar',
        'role_id',
        'awards_id',
        'image'
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function awards()
    {
        return $this->belongsTo(Award::class);
    }

    public function like_nomination()
    {
        return $this->belongsTo(Nomination::class);
    }

    public function getImageAttribute()
    {
        return URL::to('/') . '/storage/' . $this->attributes['image'];
    }

    public function hardware()
    {
        return $this->belongsTo(Hardware::class);
    }


}
