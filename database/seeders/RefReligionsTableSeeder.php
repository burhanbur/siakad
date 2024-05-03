<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefReligion;

class RefReligionsTableSeeder extends Seeder
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
                'name' => 'Islam',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Kristen',
                'is_active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Katolik',
                'is_active' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Hindu',
                'is_active' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Budha',
                'is_active' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Khonghucu',
                'is_active' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Penghayat Kepercayaan Terhadap Tuhan YME',
                'is_active' => 1,
            ],
            [
                'id' => 99,
                'name' => 'Lainnya',
                'is_active' => 1,
            ],
        ];

        RefReligion::insert($data);
    }
}