<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentalHistory extends BaseModel
{
    protected $table='dental_history';
    use HasFactory;
    protected $fillable = [
        'description',
        'deleted_at',
        'user_id'
    ];
}
