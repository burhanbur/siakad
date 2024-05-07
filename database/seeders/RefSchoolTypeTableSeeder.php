<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefSchoolType;

class RefSchoolTypesTableSeeder extends Seeder
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
                'name' => 'SMA',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'SMK',
                'is_active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'MA',
                'is_active' => 1,
            ],
        ];

        RefSchoolType::insert($data);
    }
}