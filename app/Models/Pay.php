<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'user_id',
        'type_id',
        'history_id',
        'type_payments_id'
    ];
    public function Types(){
        return $this->belongsToMany(Type::class,'type_payments');
    }
}
