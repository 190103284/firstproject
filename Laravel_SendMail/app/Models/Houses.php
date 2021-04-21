<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
    use HasFactory;

    protected $table = "houses";

    public function users(){
        return $this->belongsToMany(User::class ,'customers');
    }
}
