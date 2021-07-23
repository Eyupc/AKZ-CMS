<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_currency extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing=false;
    protected $table = 'users_currency';

    protected $fillable = [
        'user_id',
        'type',
        'amount'
    ];


    public function Habbo(){
        return $this->belongsTo(User::class,'user_id');
    }
}
