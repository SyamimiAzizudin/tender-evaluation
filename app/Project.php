<?php

namespace App;

use App\Supplier;
use App\Evaluate;
use App\Criteria;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = [
        'supplier_id',
        'name',
        'reference_no',
        'status',
        'document'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function evaluates()
    {
        return $this->belongsTo(Evaluate::class, 'project_id');
    }

    public function criterias()
    {
        return $this->belongsTo(Criteria::class, 'criteria_id');
    }

}
