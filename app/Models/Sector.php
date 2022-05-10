<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function UserDetails(){
        return $this->hasMany(UserDetail::class,'sector_id','id');
    }
}
