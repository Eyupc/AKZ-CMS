<?php

namespace App\Models\Server;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camera_web extends Model
{
    use HasFactory;
    protected $table = 'camera_web';
    protected $fillable = [];

    public function Habbo(){
        return $this->belongsTo(User::class,'user_id');
    }
}
