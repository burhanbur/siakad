<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\MasterLecture;
use App\Models\TranLectureEducation;
use App\Models\TranLectureInstitution;

class MasterLecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $data = [
            [
                'id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        MasterLecture::insert($data);
    }
}