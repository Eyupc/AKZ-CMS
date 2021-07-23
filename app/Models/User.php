<?php

namespace App\Models;

use App\Models\Server\permissions;
use App\Models\User\users_badges;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'users';
    public $timestamps = false;
    public $incrementing=true;
    protected $fillable = [
        'id',
        'username',
        'mail',
        'password',
        'last_login',
        'ip_register',
        'ip_current',
        'account_created',
        'motto',
        'rank',
        'credits'
    ];

    protected $hidden = [
        'password'
    ];

    public function getRank(){
        return $this->belongsTo(permissions::class,'rank');
    }

}
