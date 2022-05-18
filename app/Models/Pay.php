<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends BaseModel
{
    protected $table = "payments";
    use HasFactory;
    protected $fillable = [
        'amount',
        'user_id',
        'dental_history_id',
    ];
    public function Types(){
        return $this->belongsToMany(Type::class,'type_payments');
    }
}
