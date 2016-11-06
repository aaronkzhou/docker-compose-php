<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class TimeEntries extends Model
{
    protected $table='time_entries';
    protected $fillable=['user_id','start_time','end_time','comment'];
    protected $hidden=['user_id'];

    public function user(){

    	return $this->belongsTo(User::class);

    }
}
