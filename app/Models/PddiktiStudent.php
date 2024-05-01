<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PddiktiStudent extends Model
{
    use HasFactory;

    protected $table = 'pddikti_students';
    protected $guarded = [];
}
