<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    // public function author(){
    //     return $this->belongsToMany(Author::class);
    // }

    public function authors()
{
    return $this->belongsToMany(Author::class);
}

}
