<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = 'forum';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
