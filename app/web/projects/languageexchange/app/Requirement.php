<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $fillable=[
    	'location','mainlang','practicelang','name','sex','description','age','user_id'
    ];
    public function user(){
    	return $this->requirement->belongto('User::class');
    }
}
