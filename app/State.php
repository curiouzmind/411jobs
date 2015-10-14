<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table= 'states';
	public $timestamps = false;
	protected $fillable = ['name'];


	public function posts()
	{
		return $this->belongsToMany('App\Post','post_state_pivot');
	}
}
