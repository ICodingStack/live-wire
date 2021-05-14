<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
   protected $table ="comments";
   protected $primaryKey ="id";
    protected $fillable =[
        'id',
        'user_id',
        'body',
        'created_at',
        'updated_at'
    ];
    public function Creator(){
        return $this->belongsTo(User::class,'user_id');
    }
}
