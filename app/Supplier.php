<?php

namespace App;

use App\User;
use App\Project;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'user_id',
        'company_name',
        'bid_value',
        'document'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // protected $dates = ['deleted_at'];
   
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    
}
