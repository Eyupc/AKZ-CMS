<?php

namespace App\Models\CMS;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cms_news extends Model
{
    use HasFactory;

    protected $table = 'cms_news';
    public $timestamps = false;
    public $incrementing=true;

    protected $fillable = [
        'id',
        'user_id',
        'title',
        'description',
        'longstory',
        'image',
        'author',
        'date',
        'type'
    ];

    protected $hidden = [
        'password'
    ];

    public function Habbo(){
        return $this->belongsTo(User::class,'user_id');
    }
}
