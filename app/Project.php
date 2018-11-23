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
        'title',
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
        return $this->hasMany(Evaluate::class);
    }

    public function criterias()
    {
        return $this->belongsTo(Criteria::class, 'criteria_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
