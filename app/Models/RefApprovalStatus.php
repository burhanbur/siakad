<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefApprovalStatus extends Model
{
    use HasFactory;

    protected $table = 'ref_approval_status';
    protected $guarded = [];
}
