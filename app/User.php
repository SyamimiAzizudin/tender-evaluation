<?php

namespace App;

use App\Project;
use App\Supplier;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id',
        'supplier_id',
        'name',
        'email',
        'role',
        'email_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function suppliers()
    {
        return $this->belongsTo(Company::class, 'supplier_id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'project_id');
    }

}
