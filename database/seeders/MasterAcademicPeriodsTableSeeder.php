<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\MasterAcademicPeriod;

class MasterAcademicPeriodsTableSeeder extends Seeder
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
                'year' => 2024,
                'term' => 1,
                'is_active' => 0,
                'periode' => '2023/2024',
                'description' => 'Ganjil',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'year' => 2024,
                'term' => 2,
                'is_active' => 1,
                'periode' => '2023/2024',
                'description' => 'Genap',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        MasterAcademicPeriod::insert($data);
    }
}