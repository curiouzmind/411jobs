<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   protected $table= 'tags';
	public $timestamps = false;
	protected $fillable = ['name', 'meta_description'];
    //


	public function posts()
	{
 		 return $this->belongsToMany('App\Post','post_tag_pivot');
	}
}
