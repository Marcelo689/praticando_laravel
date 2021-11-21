<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linguagens extends Model
{
    protected $table = 'linguagens';
    protected $fillable = ['nome'];
}
