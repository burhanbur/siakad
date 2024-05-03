<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefPresenceStatus;

class RefPresencesTableSeeder extends Seeder
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
                'name' => 'Hadir',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Sakit',
                'is_active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Izin',
                'is_active' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Alpa',
                'is_active' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Kosong',
                'is_active' => 1,
            ],
        ];

        RefPresenceStatus::insert($data);
    }
}