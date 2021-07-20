<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_achievements extends Model
{
    use HasFactory;

    protected $table = 'users_achievements';

    protected $fillable = [];


    public function Habbo(){
        return $this->belongsTo(User::class,'user_id');
    }
}
