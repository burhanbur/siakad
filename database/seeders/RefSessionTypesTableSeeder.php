<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\RefSessionType;

class RefSessionTypesTableSeeder extends Seeder
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
                'name' => 'Online',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Offline',
                'is_active' => 1,
            ],
        ];

        RefSessionType::insert($data);
    }
}