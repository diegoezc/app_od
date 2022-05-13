<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolAdmin extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'role_id',
        'admin_id'
    ];
}
