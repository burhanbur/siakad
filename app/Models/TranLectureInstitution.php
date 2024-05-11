<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranLectureInstitution extends MultiplePrimaryKey
{
    use HasFactory;

    protected $primaryKey = ['lecutre_id', 'institution_id'];
    protected $table = 'tran_lecture_institutions';
    protected $guarded = [];
}
