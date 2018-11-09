<?php

namespace App;

use App\Project;
use App\Evaluate;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
	protected $fillable = [
	    'project_id',
	    'category_id',
	    'type',
	    'name',
	    'description',
	    'weightage',
	    'category_name',
	    'subcategory_name',
	    'benchmarking'
	];

	protected $hidden = [
	    'created_at',
	    'updated_at'
	];

	public function projects()
	{
	    return $this->hasTwo(Project::class, 'project_id');
	}

	public function evaluate()
	{
	    return $this->belongsTo(Evaluate::class, 'evaluate_id');
	}
	
}
