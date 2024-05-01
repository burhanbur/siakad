<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranStudentPresence extends Model
{
    use HasFactory;

    protected $table = 'tran_student_presences';
    protected $guarded = [];
}
