<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todolistModel extends Model
{
    //use HasFactory;
    protected $table = 'todolist';
    protected $fillable = ['todolist'];
}
