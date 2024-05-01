<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranPaymentHistory extends Model
{
    use HasFactory;

    protected $table = 'tran_payment_histories';
    protected $guarded = [];
}
