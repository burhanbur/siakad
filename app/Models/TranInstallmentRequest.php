<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranInstallmentRequest extends Model
{
    use HasFactory;

    protected $table = 'tran_installment_requests';
    protected $guarded = [];
}
