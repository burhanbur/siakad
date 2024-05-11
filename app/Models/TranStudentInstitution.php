<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranStudentInstitution extends MultiplePrimaryKey
{
    use HasFactory;

    protected $primaryKey = ['student_id', 'institution_id'];
    protected $table = 'tran_student_institutions';
    protected $guarded = [];
}
