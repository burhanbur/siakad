<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleMember extends MultiplePrimaryKey
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'model_has_roles';
    protected $primaryKey = ['model_id', 'role_id', 'institution_id'];
    protected $fillable = [
        'model_id',
        'role_id',
        'institution_id',
    ];    
    
    public $incrementing = false;
    public $timestamps = false;

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'model_id');
    }

    public function institution()
    {
        return $this->belongsTo(MasterInstitution::class, 'institution_id');
    }
}