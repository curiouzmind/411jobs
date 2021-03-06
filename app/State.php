<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table= 'states';
	public $timestamps = false;
	protected $fillable = ['name','post_id'];


	public function post()
	{
		return $this->hasMany('App\Post');
	}
}
