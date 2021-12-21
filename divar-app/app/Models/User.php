<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'name',
        'last_name',
        'email',
        'email_verified_at',
        'phone_number',
        'state',
        'city',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    public function Ad(){
        return $this->hasMany(Ad::class);
    }
    
    public function category(){
        return $this->hasMany(caregory::class,'user_id','id');
    }

    public function ads()
    {
        return $this->belongsToMany(ad::class,'User_ad')->withPivot('favorite');
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
