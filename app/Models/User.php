<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    protected $fillable=["id","name","role_id","password","mobile","email"];

    public function role(){
      return $this->belongsTo(User::class);
    }
}
