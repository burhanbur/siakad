<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefExamType;

class RefExamTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Ujian Tengah Semester',
            ],
            [
                'id' => 2,
                'name' => 'Ujian Akhir Semester',
            ],
            [
                'id' => 3,
                'name' => 'Ujian Reevaluasi',
            ],
        ];

        RefExamType::insert($data);
    }
}