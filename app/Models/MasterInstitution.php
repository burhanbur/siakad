<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterInstitution extends Model
{
    use HasFactory;

    protected $table = 'master_institutions';
    protected $guarded = [];

    public function educationProgram()
    {
        return $this->belongsTo(MasterEducationProgram::class, 'education_program_id');
    }

    public function parent()
    {
        return $this->belongsTo(MasterInstitution::class, 'parent_id');
    }

    public function head()
    {
        return $this->belongsTo(User::class, 'head_id');
    }

    public function type()
    {
        return $this->belongsTo(RefInstitutionType::class, 'institution_type_id');
    }
}
