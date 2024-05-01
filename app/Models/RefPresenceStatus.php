<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefPresenceStatus extends Model
{
    use HasFactory;

    protected $table = 'ref_presence_status';
    protected $guarded = [];
}
