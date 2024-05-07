<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefDay;

class RefDaysTableSeeder extends Seeder
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
                'name' => 'Senin',
            ],
            [
                'id' => 2,
                'name' => 'Selasa',
            ],
            [
                'id' => 3,
                'name' => 'Rabu',
            ],
            [
                'id' => 4,
                'name' => 'Kamis',
            ],
            [
                'id' => 5,
                'name' => 'Jumat',
            ],
            [
                'id' => 6,
                'name' => 'Sabtu',
            ],
            [
                'id' => 7,
                'name' => 'Minggu',
            ],
        ];

        RefDay::insert($data);
    }
}