<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAcademicEvent extends Model
{
    use HasFactory;

    protected $table = 'master_academic_events';
    protected $guarded = [];

    public function getEvent()
    {
        return $this->belongsTo(RefAcademicEvent::class, 'event_id');
    }

    public function getAcademicPeriod()
    {
        return $this->belongsTo(MasterAcademicPeriod::class, 'academic_period_id');
    }
}
