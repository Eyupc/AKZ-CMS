<?php
namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_settings extends Model
{
use HasFactory;

protected $table = 'users_settings';

protected $fillable = [];


public function Habbo(){
return $this->belongsTo(User::class,'user_id');
}
}
