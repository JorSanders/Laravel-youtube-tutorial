<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	//
	protected $fillable = [
		'name',
		'description',
		'project_id',
		'company_id',
		'user_id',
		'days'
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function company()
	{
		return $this->belongsTo('App\Company');
	}


	public function users()
	{
		return $this->belongsToMany('App\User');
	}

}