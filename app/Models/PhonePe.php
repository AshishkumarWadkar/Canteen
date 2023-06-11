<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class PhonePe extends Model
{
    use HasFactory;
    protected $table = "phonepe";

    public function user(){
        return $this->belongsTo(User::class);
    }
}
