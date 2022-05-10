<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'last_name',
        'email',
        'password',
        'indentity_card',
        'name'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     public function DentalHistory(){
        // return $this->belongsTo(DentalHistory::class,'id','user_id');
         return $this->hasOne(DentalHistory::class,'user_id','id');
     }
     public function Payments(){
         return $this->hasMany(Pay::class,'user_id','id');
     }
     public function MedicalHistory(){
         return $this->hasOne(MedicalHistory::class,'user_id','id');
     }
     public function UserDetail() {
         return $this->hasOne(UserDetail::class,'user_id','id');
     }

}
