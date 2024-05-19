<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranLectureInstitution extends MultiplePrimaryKey
{
    use HasFactory;

    protected $primaryKey = ['lecture_id', 'institution_id'];
    protected $table = 'tran_lecture_institutions';
    protected $guarded = [];

    public function lecture()
    {
        return $this->belongsTo(MasterLecture::class, 'lecture_id');
    }

    public function institution()
    {
        return $this->belongsTo(MasterInstitution::class, 'institution_id');
    }
}
