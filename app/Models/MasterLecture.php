<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterLecture extends Model
{
    use HasFactory;

    protected $table = 'master_lectures';
    protected $guarded = [];

    public function education()
    {
        return $this->hasMany(TranLectureEducation::class, 'id', 'lecture_id');
    }

    public function institution()
    {
        return $this->hasOne(TranLectureInstitution::class, 'lecture_id', 'id');
    }
}
