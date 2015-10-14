<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];
    protected $fillable = ['name','title','location','closing','company_name','job_description','company_description'];

 	public function setTitleAttribute($value)
 	{
 		$this->attributes['title'] = $value;
 		if (! $this->exists) {
 		$this->attributes['slug'] = str_slug($value);
 		}
	}

	public function tags()
	{
 		 return $this->belongsToMany('App\Tag','post_tag_pivot');
	}

	public function states()
	{
 		 return $this->belongsToMany('App\State','post_state_pivot');
	}
}