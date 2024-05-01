<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterInstitution extends Model
{
    use HasFactory;

    protected $table = 'master_institutions';
    protected $guarded = [];
}
