<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    // model reflect to comments table.
    protected $fillable=['author','text'];
}
