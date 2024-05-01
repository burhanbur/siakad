<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranDetailInstallment extends Model
{
    use HasFactory;

    protected $table = 'tran_detail_installments';
    protected $guarded = [];
}
