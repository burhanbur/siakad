<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterSubject extends Model
{
    use HasFactory;

    protected $table = 'master_subjects';
    protected $guarded = [];
}
