<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogInstallmentApproval extends Model
{
    use HasFactory;

    protected $table = 'log_installment_approvals';
    protected $guarded = [];
}
