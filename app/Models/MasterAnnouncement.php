<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAnnouncement extends Model
{
    use HasFactory;

    protected $table = 'master_announcements';
    protected $guarded = [];
}
