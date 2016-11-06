<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    // model reflect to comments table.
    protected $fillable=['name','price','quantity'];
}
