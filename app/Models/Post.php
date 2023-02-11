<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title', 'body'];

    //relationships for database
    public function user(){
        return $this->belongsTo(User::class);
    }

}
