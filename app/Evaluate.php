<?php

namespace App;

use App\Project;
use App\Supplier;
use App\User;
use App\Criteria;
use Illuminate\Database\Eloquent\Model;

class Evaluate extends Model
{
	protected $fillable = [
	    'project_id',
	    'supplier_id',
	    'user_id',
	    'criteria_id',
	    'remarks',
	    'technical_score',
	    'commercial_score',
	    'consolidated_score'
	];

	protected $hidden = [
	    'created_at',
	    'updated_at'
	];

	public function projects()
	{
	    return $this->belongsTo(Project::class, 'project_id');
	}

	public function user()
	{
	    return $this->belongsTo(User::class, 'user_id');
	}

	public function supplier()
	{
	    return $this->belongsTo(Supplier::class, 'supplier_id');
	}

	public function criterias()
	{
	    return $this->belongsTo(Criteria::class, 'criteria_id');
	}

}
