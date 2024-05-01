<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefDay extends Model
{
    use HasFactory;

    protected $table = 'ref_days';
    protected $guarded = [];
}
