<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranLectureEducation extends Model
{
    use HasFactory;

    protected $table = 'tran_lecture_educations';
    protected $guarded = [];

    public function lecture()
    {
        return $this->belongsTo(MasterLecture::class, 'lecture_id');
    }
}
